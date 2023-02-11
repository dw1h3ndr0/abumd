<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiK3Blok_III3_Request extends FormRequest
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
            'b3r54k2' => 'required',
            'b3r54k3' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'b3r54k2.required' => ':attribute penjumlahan 5.4.1 - 5.4.99',
            'b3r54k3.required' => ':attribute penjumlahan 5.4.1 - 5.4.99',
        ];
    }

    public function attributes()
    {
        return[
            //BLOK III
            'b3r54k2' => 'Bidang Pemberdayaan Masyarakat Desa',
            'b3r54k3' => 'Bidang Pemberdayaan Masyarakat Desa',
        ];
    }
}
