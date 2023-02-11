<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiDaftarSampelK3Request extends FormRequest
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
            'b1r1' => 'required',
            'b1r2' => 'required',
            'b1r3' => 'required',
            'b1r4' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'b1r1.required' => 'Provinsi dibutuhkan tidak boleh kosong',            
            'b1r2.required' => 'Kabupaten/Kota dibutuhkan tidak boleh kosong',     
            'b1r3.required' => 'Kecamatan dibutuhkan tidak boleh kosong',
            'b1r4.required' => 'Desa/Nagari dibutuhkan tidak boleh kosong'
        ];
    }

    public function attributes()
    {
        return[
            'b1r1' => 'Provinsi',
            'b1r2' => 'Kabupaten/Kota',
            'b1r3' => 'Kecamatan',
            'b1r4' => 'Desa/Nagari'
        ];
    }
}
