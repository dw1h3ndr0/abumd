<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiCreatePegawaiRequest extends FormRequest
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
            'nama' => 'required|min:3|max:50',
            'nip_lama' =>'required|digits:9',
            'nip_baru' =>'required|digits:18',
            'jabatan' =>'required',
            'no_hp' =>'required|numeric',
            'role' =>'required',
            'email' =>'required|email|regex:/^.+@.+$/i',
            // 'password' =>'required|password',
            'avatar' => 'mimes:jpeg,bmp,png'
        ];
    }

    public function messages()
    {
        return[
            'nama.required' => 'Nama dibutuhkan tidak boleh kosong',
            'nama.min' => 'Nama tidak boleh kurang dari 3 karakter',
            'nama.max' => 'Nama tidak boleh lebih dari 50 karakter',            
            'nip_lama.required' =>'NIP lama dibutuhkan tidak boleh kosong',     
            'nip_lama.digits' =>'NIP lama terdiri dari 9 digit angka',     
            'nip_baru.required' =>'NIP baru dibutuhkan tidak boleh kosong',
            'nip_baru.digits' =>'NIP baru terdiri dari 18 digit angka',
            'jabatan.required' =>'Jabatan dibutuhkan tidak boleh kosong',
            'no_hp.required' =>'Nomor HP dibutuhkan tidak boleh kosong',
            'no_hp.numeric' => 'Nomor HP harus angka',
            'role.required' =>'Level akun dibutuhkan tidak boleh kosong',
            'email.required' =>'Email tidak dibutuhkan boleh kosong',
            // 'password.required' =>'Password dibutuhkan tidak boleh kosong',
            'avatar.mimes' => 'Format file harus bertipe .jpeg, .bmg, atau .png'
        ];
    }

    public function attributes()
    {
        return[
            'nama' => 'Nama',
            'nip_lama' =>'NIP lama',
            'nip_baru' =>'NIP baru',
            'jabatan' =>'Jabatan',
            'no_hp' =>'Nomor HP',
            'role' =>'Level akun',
            'email' =>'Email',
            // 'password' =>'Password',
            'avatar' => 'Avatar'
        ];
    }
}
