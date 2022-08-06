<?php

namespace App\Http\Controllers\backend;

use App\Events\ActivityEvent;
use App\Events\UsersEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoanStoreRequest;
use App\Models\Loan;
use App\Models\LoanerInformation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class LoanController extends Controller
{
    public function index()
    {
        return view('backend.loan.index')->with([
            'loans' => Loan::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('backend.loan.create')->with([
            'members' => User::where('role', 'member')->orderBy('name', 'ASC')->get(),
            'clients' => User::where('role', 'client')->orderBy('name', 'ASC')->get(),
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if ($request->clientType == 'new') {

            $request->validate([
                'name'         => 'required|max:100',
                'fathersName'  => 'required|max:100',
                'nid'          => 'required',
                'email'        => 'required|email',
                'phone'        => 'required',
                'address'      => 'required',
                'businessType' => 'required|not_in:none',
                'loanAmount'   => 'required|integer',
                'loanDate'     => 'required',
                'returnAmount' => 'required|integer',
                'returnDate'   => 'required',
            ]);

            $thumb = null;

            if (!empty($request->file('thumbnail'))) {
                $thumb = time() . '-' . $request->file('thumbnail')->getClientOriginalName();
                $thumb = str_replace(' ', '-', $thumb);
                $request->file('thumbnail')->storeAs('public/uploads/clients', $thumb);
            }

            $user = User::create([
                'name'       => $request->name,
                'email'      => $request->email,
                'password'   => Hash::make(Str::random(8)),
                'fatherName' => $request->fathersName,
                'phone'      => $request->phone,
                'image'      => $thumb,
                'role'       => 'client',
                'status'     => 'active',
            ]);

            if ($user) {
                // Create an event
                // event(new UsersEvent($user));

                $loan = Loan::create([
                    'loan_amount'       => $request->loanAmount,
                    'loan_date'         => $request->loanDate,
                    'received_amount'   => $request->returnAmount,
                    'received_date'     => $request->returnDate,
                    'user_id'           => $user->id,
                ]);

                if ($loan) {
                    LoanerInformation::create([
                        'user_id'           => $user->id,
                        'loan_id'           => $loan->id,
                        'address'           => $request->address,
                        'nid'               => $request->nid,
                        'business_category' => $request->businessType,
                    ]);
                }
            }
        } elseif ($request->clientType == 'old'|| $request->clientType == 'member') {

            $request->validate([
                'businessType' => 'required|not_in:none',
                'loanAmount'   => 'required|integer',
                'loanDate'     => 'required',
                'returnAmount' => 'required|integer',
                'returnDate'   => 'required',
            ]);

            // if($request->clientType == 'old'){
            //     $user_id = $request->oldClient;
            // }elseif($request->clientType == 'member'){
            //     $user_id = $request->member;
            // }

            $loan = Loan::create([
                'loan_amount'       => $request->loanAmount,
                'loan_date'         => $request->loanDate,
                'received_amount'   => $request->returnAmount,
                'received_date'     => $request->returnDate,
                // 'user_id'           => $user_id
                'user_id'           =>  ($request->clientType == 'old') ? $request->oldClient : ($request->clientType == 'member' ? $request->member:'')
            ]);
        }
        return redirect()->route('loan.index')->with('success', 'Loan Created');
    }

    public function clientsInfo(Request $request)
    {
        // $clients_info = $request->all();
        // $clients_info = $request['client_id'];
        // $clients_info = User::where('id',$request['client_id'])->get();

        return with([
            'clients' => User::where('id', $request['client_id'])->get(),
            'loner_info' => LoanerInformation::where('user_id', $request['client_id'])->get(),
            // 'lone_info' => Loan::where('user_id', $request['client_id'])->get(),
        ]);
    }

    public function membersInfo(Request $request)
    {
        return with([
            'members' => User::where('id', $request['member_id'])->get(),
            'loner_info' => LoanerInformation::where('user_id', $request['member_id'])->get(),
        ]);
    }
}
