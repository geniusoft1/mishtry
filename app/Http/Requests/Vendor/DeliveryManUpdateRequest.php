<?php

namespace App\Http\Requests\Vendor;

<<<<<<< HEAD
use App\Traits\ResponseHandler;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
=======
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
use Illuminate\Validation\Rule;

class DeliveryManUpdateRequest extends FormRequest
{
<<<<<<< HEAD
    use ResponseHandler;
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('delivery_men', 'email')->ignore($this->route('id')),
            ],
            'phone' => 'required',
            'country_code' => 'required',
        ];
        if ($this['password']) {
<<<<<<< HEAD
            $rules['password'] = 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*\W)(?!.*\s).{8,}$/|same:confirm_password';
=======
            $rules['password'] = 'required|same:confirm_password|min:8';
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        }
        return $rules;
    }

    /**
     * @return array[f_name.required: mixed, l_name.required: mixed, phone.required: mixed, email.required: mixed, email.unique: mixed, country_code.required: mixed, password.same: mixed, password.min: mixed]
     */
    public function messages(): array
    {
        return [
            'f_name.required' => translate('The_first_name_field_is_required'),
            'l_name.required' => translate('The_last_name_field_is_required'),
            'phone.required' => translate('The_phone_field_is_required'),
            'email.required' => translate('The_email_field_is_required'),
            'email.unique' => translate('The_email_has_already_been_taken'),
            'country_code.required' => translate('The_country_code_field_is_required'),
<<<<<<< HEAD
            'password.regex' => translate('The_password_must_be_at_least_8_characters_long_and_contain_at_least_one_uppercase_letter').','.translate('_one_lowercase_letter').','.translate('_one_digit_').','.translate('_one_special_character').','.translate('_and_no_spaces').'.',
        ];
    }
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $this->errorProcessor($validator)]));
    }
=======
        ];
    }
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
}
