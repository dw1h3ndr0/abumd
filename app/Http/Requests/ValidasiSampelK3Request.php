<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiSampelK3Request extends FormRequest
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
            //BLOK I
            'b1r5' => 'required|integer|min:1|max:3',
            'b1r6' => 'required|integer|min:1|max:2',
            'b1r7a' => 'required',
            'b1r7d' => 'digits:6|nullable',
            'b1r7e' => 'email|nullable',
            'b1r7f' => 'integer|nullable',
            'b1r7g' => 'integer|nullable',

            //BLOK II
            'b2r1a' => 'required|string',
            'b2r1b' => 'required|integer|nullable',
            'b2r1c' => 'required|integer|nullable',
            'b2r1d' => 'required|integer|nullable',
            'b2r1e' => 'required|integer|nullable',
            'b2r2ak3' => 'required|integer|nullable',
            'b2r2ak4' => 'required|integer|nullable',
            'b2r2bk1' => 'required|integer|nullable',
            'b2r2bk2' => 'required|integer|nullable',
            'b2r2bk3' => 'required|integer|nullable',
            'b2r2bk4' => 'required|integer|nullable',
            'b2r2ck3' => 'required|integer|nullable',
            'b2r2ak4' => 'required|integer|nullable',
            'b2r2dk3' => 'required|integer|nullable',
            'b2r2dk4' => 'required|integer|nullable',
            'b2r2ek3' => 'required|integer|nullable',
            'b2r2ek4' => 'required|integer|nullable',
            'b2r3a1' => 'required|integer|nullable',
            'b2r3a2' => 'integer|nullable',
            'b2r3b1' => 'required|integer|nullable',
            'b2r3b2' => 'integer|nullable',
            'b2r3b3' => 'integer|nullable',
            'b2r3c' => 'required|integer|nullable',
            'b2r3d1' => 'required|integer|nullable',
            'b2r3d2' => 'integer|nullable',
        ];
    }

    public function messages()
    {
        return[
            'b1r5.required' => 'Jenis Wilayah Administrasi tidak boleh kosong',            
            'b1r6.required' => 'Status Desa tidak boleh kosong',     
            'b1r7a.required' => 'Alamat Kantor Desa tidak boleh kosong'
        ];
    }

    public function attributes()
    {
        return[
            //BLOK I
            'b1r5' => 'Jenis Wilayah Administrasi',
            'b1r6' => 'Status Desa',
            'b1r7a' => 'Alamat Kantor Desa',
            'b1r7d' => 'Kode Pos',
            'b1r7e' => 'Email',
            'b1r7f' => 'Nomor Telepon',
            'b1r7g' => 'Faximile',

            //BLOK II
            'b2r1a' => 'Nama',
            'b2r1b' => 'Umur',
            'b2r1c' => 'Jenis Kelamin',
            'b2r1d' => 'Tahun Menjabat',
            'b2r1e' => 'Pendidikan Terakhir',
        ];
    }
}
