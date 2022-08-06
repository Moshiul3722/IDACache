<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LoanStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                // 'name'         => ['required','max:100', Rule::unique('users')->ignore($this->route('post'))],
                'name'         => 'required|max:100',
                'name'         => 'unique:users,name|exclude_unless:clientType,old',
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
        ];
    }
}
