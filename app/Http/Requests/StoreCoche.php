<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCoche extends FormRequest
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
            'matricula' => 'required',
            'modelo' => 'required',
            'logo' => 'required',
            'combustion' => 'required',
            'anticongelante' => 'required',
            'aceite' => 'required'
        ];
    }
   /* public function attributes()
    {
        return [
    'matricula' => 'Matricula del Vehiculo',
        ];
    }
    public function messages()
    {
        return [
            'modelo.required' => 'El Modelo del Vehiculo Es Obligatorio para la Informacion de la App',
        ];
    } */
}
