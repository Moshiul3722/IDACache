<?php

namespace App\Http\Controllers\backend;

use App\Events\UsersEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Models\Loan;
use App\Models\LoanerInformation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        return view('backend.users.index')->with([
            'usersInformation' => User::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        // dd($request->all());
        $thumb = null;

        if (!empty($request->file('thumbnail'))) {
            $thumb = time() . '-' . $request->file('thumbnail')->getClientOriginalName();
            $thumb = str_replace(' ', '-', $thumb);
            $request->file('thumbnail')->storeAs('public/uploads/clients', $thumb);
        }

        $user = User::create([
            'name'       => $request->userName,
            'email'      => $request->email,
            'password'   => Hash::make(Str::random(8)),
            'fatherName' => $request->fathersName,
            'phone'      => $request->phone,
            'image'      => $thumb,
            'role'       => $request->role,
            'status'     => 'active'
        ]);


        // Create an event
        // event(new UsersEvent($user));

        if ($user) {
            LoanerInformation::create([
                'address' => $request->address,
                'nid'     => $request->nid,
                'user_id' => $user->id
            ]);
        }

        return redirect()->route('users.index')->with('success', 'User Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('backend.users.edit')->with('userInfo', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // dd($request->all());
        $loner = LoanerInformation::where('user_id', $user->id)->first();

        if ($loner) {
            $id = $loner->id;
        } else {
            $id = '';
        }
        // dd($loner->id);
        $request->validate([
            'userName'    => 'required|max    : 100',
            'fathersName' => 'required|max    : 100',
            'nid'         => 'integer|nullable|unique:loaner_information,nid,' . $id,
            // 'email'       => ['required', 'max: 250', 'unique: users,email,'.$user->id],
            'email'       => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone'       => 'required',
            'address'     => 'string|max:255',
        ]);

        // dd($user->id);
        $thumb = $user->image;
        if (!empty($request->file('thumbnail'))) {
            $thumb = time() . '-' . $request->file('thumbnail')->getClientOriginalName();
            $thumb = str_replace(' ', '-', $thumb);
            Storage::delete('public/uploads/clients' . $thumb);

            $request->file('thumbnail')->storeAs('public/uploads/clients', $thumb);
        }

        $user->update([
            'name'       => $request->userName,
            'email'      => $request->email,
            // 'password'   => Hash::make($request->password),
            'fatherName' => $request->fathersName,
            'phone'      => $request->phone,
            'image'      => $thumb,
            // 'role'       => 'client',
            // 'status'     => $request->status,
        ]);

        $loaner_info = LoanerInformation::where('user_id', $user->id)->first();
        //  dd($loaner_info);
        if ($loaner_info) {
            $loaner_info->update([
                'address' => $request->address,
                'nid'     => $request->nid,
            ]);
        }

        if ($loaner_info === null) {
            LoanerInformation::create([
                'address' => $request->address,
                'nid'     => $request->nid,
                'user_id' => $user->id
            ]);
        }

        return redirect()->route('users.index')->with('success', 'User Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Loan::where(['user_id' => $user->id])->delete();
        $user->delete();

        $thumb = pathinfo($user->image);
        $image_ext = $thumb['basename'];
        Storage::delete('public/uploads/clients/' . $image_ext);

        return redirect()->route('users.index')->with('success', 'User has been Deleted!');
    }
}
