<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiK3Blok_III_Request extends FormRequest
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
            'b3r4k2' => 'required',
            'b3r4k3' => 'required',
            'b3r41k2' => 'required',
            'b3r41k3' => 'required',
            'b3r42k2' => 'required',
            'b3r42k3' => 'required',
            // 'b3r43k2' => 'required',
            // 'b3r43k3' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'b3r4k2.required' => ':attribute harus terisi',
            'b3r4k3.required' => ':attribute harus terisi',
            'b3r41k2.required' => ':attribute penjumlahan 4.1.1 - 4.1.4',
            'b3r41k3.required' => ':attribute penjumlahan 4.1.1 - 4.1.4',
            'b3r42k2.required' => ':attribute penjumlahan 4.2.1 - 4.2.5',
            'b3r42k3.required' => ':attribute penjumlahan 4.2.1 - 4.2.5',
            // 'b3r43k2.required' => ':attribute penjumlahan 4.3.1 - 4.3.9',
            // 'b3r43k3.required' => ':attribute penjumlahan 4.3.1 - 4.3.9',
        ];
    }

    public function attributes()
    {
        return[
            //BLOK III
            'b3r4k2' => 'Pendapatan Desa',
            'b3r4k3' => 'Pendapatan Desa',
            'b3r41k2' => 'Pendapatan Asli Desa',
            'b3r41k3' => 'Pendapatan Asli Desa',
            'b3r42k2' => 'Transfer',
            'b3r42k3' => 'Transfer',
            // 'b3r43k2' => 'Pendapatan Lain-Lain',
            // 'b3r43k3' => 'Pendapatan Lain-Lain',
        ];
    }
}
