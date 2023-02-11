<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiK3Blok_III4_Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //BLOK III
            'b3r6k2' => 'required',
            'b3r6k3' => 'required',
            'b3r61k2' => 'required',
            'b3r61k3' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'b3r6k2' => ':attribute pengurangan 6.1 dengan 6.2',
            'b3r6k3' => ':attribute pengurangan 6.1 dengan 6.2',
            'b3r61k2' => ':attribute penjumlahan 6.1.1 - 6.1.99',
            'b3r61k3' => ':attribute penjumlahan 6.1.1 - 6.1.99',
        ];
    }

    public function attributes()
    {
        return[
            //BLOK III
            'b3r6k2' => 'Pembiayaan',
            'b3r6k3' => 'Pembiayaan',
            'b3r61k2' => 'Penerimaan Pembiayaan',
            'b3r61k3' => 'Penerimaan Pembiayaan',
        ];
    }
}
