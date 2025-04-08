<?php

namespace App\Http\Requests\Vendor;
<<<<<<< HEAD
use App\Traits\ResponseHandler;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class LoginRequest extends FormRequest
{
    use ResponseHandler;
=======

use App\Enums\SessionKey;
use App\Http\Requests\Request;
use App\Traits\RecaptchaTrait;

class LoginRequest extends Request
{
    use RecaptchaTrait;

>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
<<<<<<< HEAD
    public function rules():array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];
    }
    /**
     * @return array
     * Get the validation error message
     */
    public function messages(): array
    {
        return [
            'email.required' => translate('The_first_name_field_is_required'),
            'password.required' => translate('The_last_name_field_is_required'),
            'password.min' => translate('The_password_must_be_at_least :min_characters', ['min' => 8]),
        ];
    }
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $this->errorProcessor($validator)]));
    }
=======
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => translate('the') . ' :attribute '.translate('field is required').'.'
        ];
    }
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
}
