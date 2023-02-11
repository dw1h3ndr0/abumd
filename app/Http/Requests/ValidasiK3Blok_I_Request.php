<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiK3Blok_I_Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    // public $validator = null;

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
            'b1r5' => 'required|numeric|min:1|max:3',
            'b1r6' => 'required|numeric|min:1|max:2',
            'b1r7a' => 'required',
            'b1r7d' => 'digits:5|nullable',
            'b1r7e' => 'email|nullable',
            'b1r7f' => 'numeric|nullable',
            'b1r7g' => 'numeric|nullable',
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
        ];
    }

    // protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    // {
    //     $this->validator = $validator;
    // }
}
