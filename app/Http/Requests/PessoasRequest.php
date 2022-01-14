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
            'login' => 'required|alpha_dash|max:15|unique:pessoas',
            'senha' => 'required|min:6|confirmed',
            'ativo' => 'required|boolean',
            'administrador' => 'required|boolean',            
        ];

        if ($this->method() == 'PUT') {
            $rules['login'] = 'required|alpha_dash|max:15|unique:pessoas,login,' . $this->route('id');
            $rules['senha'] = 'nullable|min:6|required_with:senha_confirmation|confirmed';
        }

        return $rules;
    }
}
