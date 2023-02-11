<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiK3Blok_VI_Request extends FormRequest
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
            //BLOK VI
            'b6r1k1' => 'required|string',
            'b6r1k2' => 'required|string',
            'b6r2k1' => 'required|date',
            'b6r2k2' => 'required|date',
            'b6r2k3' => 'required|date',
            'b6r2k4' => 'required|date',
        ];
    }

    public function messages()
    {
        return[
            'b6r1k1.required' => ':attribute harus terisi',
            'b6r1k1.string' => ':attribute tidak boleh mengandung angka',
            'b6r1k2.required' => ':attribute harus terisi',
            'b6r1k2.string' => ':attribute tidak boleh mengandung angka',
            'b6r2k1.required' => ':attribute harus terisi',
            'b6r2k1.date' => ':attribute berformat mm/dd/yyyy',
            'b6r2k2.required' => ':attribute harus terisi',
            'b6r2k2.date' => ':attribute berformat mm/dd/yyyy',
            'b6r2k3.required' => ':attribute harus terisi',
            'b6r2k3.date' => ':attribute berformat mm/dd/yyyy',
            'b6r2k4.required' => ':attribute harus terisi',
            'b6r2k4.date' => ':attribute berformat mm/dd/yyyy',
        ];
    }

    public function attributes()
    {
        return[
            //BLOK VI
            'b6r1k1' => 'Nama Pencacah',
            'b6r1k2' => 'Nama Pengawas',
            'b6r2k1' => 'Rentang Tanggal Pencacahan',
            'b6r2k2' => 'Rentang Tanggal Pencacahan',
            'b6r2k3' => 'Rentang Tanggal Pengawasan',
            'b6r2k4' => 'Rentang Tanggal Pengawasan',
        ];
    }
}
