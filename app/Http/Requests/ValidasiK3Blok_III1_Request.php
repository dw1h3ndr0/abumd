<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiK3Blok_III1_Request extends FormRequest
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
            'b3r5k2' => 'required',
            'b3r5k3' => 'required',
            'b3r51k2' => 'required',
            'b3r51k3' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'b3r5k2.required' => ':attribute harus terisi',
            'b3r5k3.required' => ':attribute harus terisi',
            'b3r51k2.required' => ':attribute penjumlahan 5.1.1 - 5.1.99',
            'b3r51k3.required' => ':attribute penjumlahan 5.1.1 - 5.1.99',
        ];
    }

    public function attributes()
    {
        return[
            //BLOK III
            'b3r5k2' => 'Belanja',
            'b3r5k3' => 'Belanja',
            'b3r51k2' => 'Bidang Penyelenggaraan Pemerintahan Desa',
            'b3r51k3' => 'Bidang Penyelenggaraan Pemerintahan Desa',
        ];
    }
}
