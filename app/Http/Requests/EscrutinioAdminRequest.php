<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EscrutinioAdminRequest extends FormRequest
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

            'Comicios_has_Mesas' => 'required',
            'ListaInter_has_CargosElectivos' => 'required',
            'voto' => 'required',
            'users_id' => 'required',

        ];
    }
}
