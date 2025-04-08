<?php

namespace App\Http\Requests\Vendor;

<<<<<<< HEAD
use App\Traits\ResponseHandler;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RefundStatusRequest extends FormRequest
{
    use ResponseHandler;
=======
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RefundStatusRequest extends FormRequest
{
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
            return [
                'id' => 'required',
                'refund_status' => 'required|in:pending,approved,rejected,refunded',
                'approved_note' => $this->input('refund_status') == 'approved' ? 'required' : '',
                'rejected_note' => $this->input('refund_status') == 'rejected' ? 'required': '',
            ];
        }
<<<<<<< HEAD
        public function messages(): array
        {
            return [
                'approved_note.required' => translate('The_approved_note_field_is_required'),
                'rejected_note.required' => translate('The_rejected_note_field_is_required'),
            ];
        }
        protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
        {
            throw new HttpResponseException(response()->json(['errors' => $this->errorProcessor($validator)]));
        }
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    }
