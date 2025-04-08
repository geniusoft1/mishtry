<?php

namespace App\Http\Requests\Vendor;

<<<<<<< HEAD
use App\Traits\ResponseHandler;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class DeliveryManWithdrawRequest extends FormRequest
{
    use ResponseHandler;
=======
use Illuminate\Foundation\Http\FormRequest;

class DeliveryManWithdrawRequest extends FormRequest
{
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules():array
    {
        return [
            'approved' => 'required',
<<<<<<< HEAD
            'note' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'note.required' => translate('please_type_your_note').'.',
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
