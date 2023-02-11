<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiK3Blok_III2_Request extends FormRequest
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
            'b3r52k2' => 'required',
            'b3r52k3' => 'required',
            'b3r53k2' => 'required',
            'b3r53k3' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'b3r52k2.required' => ':attribute penjumlahan 5.2.1 - 5.2.99',
            'b3r52k3.required' => ':attribute penjumlahan 5.2.1 - 5.2.99',
            'b3r53k2.required' => ':attribute penjumlahan 5.3.1 - 5.3.99',
            'b3r53k3.required' => ':attribute penjumlahan 5.3.1 - 5.3.99',
        ];
    }

    public function attributes()
    {
        return[
            //BLOK III
            'b3r52k2' => 'Bidang Pelaksanaan Pembangunan Desa',
            'b3r52k3' => 'Bidang Pelaksanaan Pembangunan Desa',
            'b3r53k2' => 'Bidang Pembinaan Kemasyarakatan Desa',
            'b3r53k3' => 'Bidang Pembinaan Kemasyarakatan Desa',
        ];
    }
}
