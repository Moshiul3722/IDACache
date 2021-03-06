<?php

namespace App\Http\Controllers\backend;

use App\Events\ActivityEvent;
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
        return view('backend.loan.create');
    }

    public function store(LoanStoreRequest $request)
    {
        // dd($request->all());
        if ($request->clientType == 'new') {

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

            // Event fire
            // ActivityEvent::dispatch('New Client registered', Auth::id());

            // Send Email
            // Mail::send('backend.emails.loanReg', [''], function ($message) {
            //     $message->from('john@johndoe.com', 'John Doe');
            //     $message->to('john@johndoe.com', 'John Doe');
            //     $message->subject('Test Email');
            // });

            $loan = Loan::create([
                'loan_amount'       => $request->loanAmount,
                'loan_date'         => $request->loanDate,
                'received_amount'   => $request->returnAmount,
                'received_date'     => $request->returnDate,
                'user_id'           => $user->id,
            ]);

            if($loan){
                LoanerInformation::create([
                    'user_id'           => $user->id,
                    'loan_id'           => $loan->id,
                    'address'           => $request->address,
                    'nid'               => $request->nid,
                    'business_category' => $request->businessType,
                ]);
            }

        } elseif ($request->clientType == 'old') {
            $this->userValidation($request);
        }
        return redirect()->route('loan.index')->with('success', 'Loan Created');
    }

}
