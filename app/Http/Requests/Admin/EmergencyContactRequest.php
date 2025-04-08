<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EmergencyContactRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
<<<<<<< HEAD
            'country_code' => 'required',
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            'phone' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => translate('name_is_required'),
<<<<<<< HEAD
            'country_code.required' => translate('country_code_is_required'),
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            'phone.required' => translate('phone_is_required'),
        ];
    }

}
