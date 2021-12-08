<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class DaftarSekolahRequests extends FormRequest
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
            'npsm'                                      => 'required',
            'school_name'                               => 'required',
            'province_id'                               => 'required',
            'regency_id'                                => 'required',
            'district_id'                               => 'required',
            'village_id'                                => 'required',
            'postal_code'                               => 'required',
            'headmaster_nip'                            => 'required',
            'headmaster_name'                           => 'required',
            'headmaster_email'                          => 'required',
            'headmaster_password'                       => ['required','confirmed','min: 8','max: 20','regex: /[a-z]/', 'regex: /[A-Z]/', 'regex: /[0-9]/'],
            'headmaster_password_confirmation'          => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'npsm.required'                             => 'npsm harus diisi',
            'school_name.required'                      => 'Nama Sekolah harus diisi',
            'province_id.required'                      => 'Provinsi harus diisi',
            'regency_id.required'                       => 'Kabupaten harus diisi',
            'district_id.required'                      => 'kecamatan harus diisi',
            'village_id.required'                       => 'Kelurahan harus diisi',
            'postal_code.required'                      => 'kode pos harus diisi',
            'headmaster_nip.required'                   => 'Nip Kepala Sekolah harus diisi',
            'headmaster_name.required'                  => 'Nama Kepala Sekolah harus diisi',
            'headmaster_email.required'                 => 'Email Kepala Sekolah harus diisi',
            'headmaster_password.required'              => 'pasword harus diisi',
            'headmaster_password.min'                   => 'Password minimal harus 8 karakter.',
            'headmaster_password.max'                   => 'Password maksimal harus 8 karakter.',
            'headmaster_password.regex'                 => 'Password harus mengandung abjad, huruf kapital, dan numerik, contoh: (Indonesia1945)',
            'headmaster_password_confirmation.required' => 'confirmasi pasword harus diisi',
        ];
    }
}
