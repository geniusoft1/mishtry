<?php

namespace App\Http\Requests\Vendor;

<<<<<<< HEAD
use App\Traits\ResponseHandler;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class VendorRequest extends FormRequest
{
    use ResponseHandler;
=======
use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
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
            'f_name' => 'required',
            'l_name' => 'required',
<<<<<<< HEAD
            'image' => 'mimes:jpg,jpeg,png,webp,gif,bmp,tif,tiff',
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            'phone'  => 'required|unique:sellers,phone,'.$this->id,
        ];
    }

    /**
     * @return array
     */
    public function messages():array
    {
        return [
            'f_name.required' => translate('first_name_is_required').'!',
            'l_name.required' =>translate('last_name_is_required').'!',
<<<<<<< HEAD
            'image.mimes' => translate('The_image_type_must_be').'.jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff,.webp',
            'phone.required' =>translate('phone_number_is_required').'!',
        ];
    }
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $this->errorProcessor($validator)]));
    }
=======
            'phone.required' =>translate('phone_number_is_required').'!',
        ];
    }
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
}
