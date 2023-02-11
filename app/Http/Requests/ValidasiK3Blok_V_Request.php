<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiK3Blok_V_Request extends FormRequest
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
            //BLOK V
            'b5r1' => 'required|string',
            'b5r2' => 'numeric|nullable',
            'b5r4' => 'required',
            'b5r5' => 'required',
            'b5r6' => 'required|string',
            'b5r7' => 'numeric|nullable',
            'b5r8' => 'mimes:jpeg,jpg,png,pdf',
        ];
    }

    public function messages()
    {
        return[
            'b5r1.required' => ':attribute harus terisi',
            'b5r1.string' => ':attribute tidak boleh mengandung angka',
            'b5r2.numeric' => ':attribute harus angka',
            'b5r4.required' => ':attribute harus terisi',
            'b5r5.required' => ':attribute harus terisi',
            'b5r6.required' => ':attribute harus terisi',
            'b5r6.string' => ':attribute tidak boleh mengandung angka',
            'b5r7.numeric' => ':attribute harus angka',
            'b5r8.mimes' => ':attribute harus bertipe file .jpeg atau .pdf',
        ];
    }

    public function attributes()
    {
        return[
            //BLOK V
            'b5r1' => 'Nama Responden',
            'b5r2' => 'NIP Responden',
            'b5r4' => 'Tempat',
            'b5r5' => 'Tanggal',
            'b5r6' => 'Nama Kepala Desa',
            'b5r7' => 'NIP Kepala Desa',
            'b5r8' => 'Bukti Pengesahan'
        ];
    }
}
