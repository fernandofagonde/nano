<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
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
                
            'whatsapp' => 'required',
            'email' => 'required|email',
            'font_color' => 'required',
            'button_color' => 'required',
            'button_font_color' => 'required'            
        ];

        return $rules;
    }
}
