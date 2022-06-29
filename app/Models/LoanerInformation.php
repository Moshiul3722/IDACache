<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanerInformation extends Model
{
    use HasFactory;

    protected $table = 'loaner_information';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function loanInfo()
    {
        return $this->belongsTo(Loan::class, 'loan_id', 'id');
    }
}
