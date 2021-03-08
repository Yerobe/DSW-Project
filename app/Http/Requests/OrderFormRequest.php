<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderFormRequest extends FormRequest
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
            'fecha_recogida' => 'required|date|after:yesterday', // No Podremos permitir que se haga pedidos para ayer, es inviable
            'hora_recogida' => 'required|date|after:yesterday',
            'puntos_cobrados' => 'required|alpha_num',
            'id_Cuenta'=> 'required|alpha_num'
        ];
    }
}
