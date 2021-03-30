<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoasRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rules = [
            'nome' => 'required',
            'email' => 'nullable|email',
            'login' => 'required|alpha_dash|max:15|unique:pessoa',
            'senha' => 'required|min:6|confirmed',
            'fl_ativo' => 'required|boolean',
            'fl_admin' => 'required|boolean',
            'fl_login' => 'required|boolean',
        ];

        if ($this->method() == 'PUT') {
            $rules['login'] = 'required|alpha_dash|max:15|unique:pessoa,login,' . $this->route('id');
            $rules['senha'] = 'nullable|min:6|required_with:senha_confirmation|confirmed';
        }

        return $rules;
    }
}
