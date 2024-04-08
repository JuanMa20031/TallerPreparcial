<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VentaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            'producto' => 'required|string',
            'cantidad' => 'required|integer',
            'precio_unitario' => 'required|numeric',
            'fecha_venta' => 'required|date',
            'cliente' => 'required|string',
        ];
    }
}
