<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiK3Blok_II_Request extends FormRequest
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
            //BLOK II
            'b2r1a' => 'required|string',
            'b2r1b' => 'required|numeric',
            'b2r1c' => 'required|numeric|min:1|max:2',
            'b2r1d' => 'required|numeric',
            'b2r1e' => 'required|numeric|min:1|max:4',
            'b2r2ak3' => 'required|numeric',
            'b2r2ak4' => 'required|numeric',
            'b2r2bk1' => 'required|numeric',
            'b2r2bk2' => 'required|numeric',
            'b2r2bk3' => 'required|numeric',
            'b2r2bk4' => 'required|numeric',
            'b2r2ck3' => 'required|numeric',
            'b2r2ck4' => 'required|numeric',
            'b2r2dk3' => 'required|numeric',
            'b2r2dk4' => 'required|numeric',
            'b2r2ek3' => 'required|numeric',
            'b2r2ek4' => 'required|numeric',
            'b2r3a1' => 'required|numeric|min:1|max:2',
            'b2r3a2' => 'numeric|nullable',
            'b2r3b1' => 'required|numeric|min:1|max:2',
            'b2r3b2' => 'numeric|nullable',
            'b2r3b3' => 'numeric|nullable',
            'b2r3c' => 'required|numeric|min:1|max:2',
            'b2r3d1' => 'required|numeric|min:1|max:2',
            'b2r3d2' => 'numeric|nullable',            
        ];
    }

    public function messages()
    {
        return[
            //Code..
        ];
    }

    public function attributes()
    {
        return[
            //BLOK II
            'b2r1a' => 'Nama',
            'b2r1b' => 'Umur',
            'b2r1c' => 'Jenis Kelamin',
            'b2r1d' => 'Tahun Menjabat',
            'b2r1e' => 'Pendidikan Terakhir',
        ];
    }
}
