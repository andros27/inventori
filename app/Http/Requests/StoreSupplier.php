<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplier extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //aturan membuat supplier baru

            'name' => 'required|max:150',
            'alamat_kantor' => 'required',
            'no_telp' => 'required|max:12',
            'email' => 'required|email',
            'kota' => 'required',
            'provinsi' => 'required',
        ];
    }
}
