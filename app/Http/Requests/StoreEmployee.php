<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployee extends FormRequest
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
        return [
            'email' => 'required|unique:employees|email'
        ];
    }

    /**
     * Validate the employee's email field.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required'=> 'El correo es requerido',
            'email.unique'  => 'El correo debe ser único',
            'email.email'   => 'El formato del correo no es correcto'
        ];
    }
}
