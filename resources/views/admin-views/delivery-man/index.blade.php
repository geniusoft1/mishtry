@extends('layouts.back-end.app')
@section('title',translate('add_new_delivery_man'))
@section('content')
    <div class="content container-fluid">
        <div class="mb-3">
            <h2 class="h1 mb-0 text-capitalize d-flex align-items-center gap-2">
<<<<<<< HEAD
                <img src="{{dynamicAsset(path: 'public/assets/back-end/img/add-new-delivery-man.png')}}" alt="">
=======
                <img src="{{asset('/public/assets/back-end/img/add-new-delivery-man.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                {{translate('add_new_delivery_man')}}
            </h2>
        </div>
        <div class="row">
            <div class="col-12">
<<<<<<< HEAD
                <form action="{{route('admin.delivery-man.add')}}" method="post" enctype="multipart/form-data" id="add-delivery-man-form">
=======

                <form action="{{route('admin.delivery-man.add')}}" method="post" enctype="multipart/form-data">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-0 page-header-title d-flex align-items-center gap-2 border-bottom pb-3 mb-3">
                                <i class="tio-user"></i>
                                {{translate('general_Information')}}
                            </h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="title-color d-flex" for="f_name">{{translate('first_Name')}}</label>
<<<<<<< HEAD
                                        <input type="text" name="f_name" value="{{old('f_name')}}" class="form-control" placeholder="{{translate('first_Name')}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="title-color d-flex" for="exampleFormControlInput1">{{translate('last_Name')}}</label>
                                        <input value="{{old('l_name')}}"  type="text" name="l_name" class="form-control" placeholder="{{translate('last_Name')}}">
=======
                                        <input type="text" name="f_name" value="{{old('f_name')}}" class="form-control" placeholder="{{translate('first_Name')}}"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <label class="title-color d-flex" for="exampleFormControlInput1">{{translate('last_Name')}}</label>
                                        <input value="{{old('l_name')}}"  type="text" name="l_name" class="form-control" placeholder="{{translate('last_Name')}}"
                                               required>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                    </div>
                                    <div class="form-group">
                                        <label class="title-color d-flex" for="exampleFormControlInput1">{{translate('phone')}}</label>
                                        <div class="input-group mb-3">
<<<<<<< HEAD
                                            <div>
                                                <select class="js-example-basic-multiple js-states js-example-responsive form-control"
                                                    name="country_code">
=======
                                            <div class="input-group-prepend">
                                                <select
                                                    class="js-example-basic-multiple js-states js-example-responsive form-control"
                                                    name="country_code" required>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                                    @foreach ($telephoneCodes as $code)
                                                        <option value="{{ $code['code'] }}" {{old($code['code']) == $code['code']? 'selected' : ''}}>{{ $code['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
<<<<<<< HEAD
                                            <input value="{{old('phone')}}" type="text" name="phone" class="form-control" placeholder="{{translate('ex').':'.'017********'}}">
=======
                                            <input value="{{old('phone')}}" type="text" name="phone" class="form-control" placeholder="{{translate('ex')}} : 017********"
                                                   required>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="title-color d-flex" for="exampleFormControlInput1">{{translate('identity_Type')}}</label>
                                        <select name="identity_type" class="form-control">
                                            <option value="passport">{{translate('passport')}}</option>
                                            <option value="driving_license">{{translate('driving_License')}}</option>
                                            <option value="nid">{{translate('nid')}}</option>
                                            <option value="company_id">{{translate('company_ID')}}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="title-color d-flex" for="exampleFormControlInput1">{{translate('identity_Number')}}</label>
                                        <input value="{{ old('identity_number') }}"  type="text" name="identity_number" class="form-control"
<<<<<<< HEAD
                                               placeholder="{{translate('ex').':'.'DH-23434-LS'}}">
=======
                                               placeholder="{{translate('ex')}} : DH-23434-LS"
                                               required>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                    </div>
                                    <div class="form-group">
                                        <label class="title-color d-flex" for="exampleFormControlInput1">{{translate('address')}}</label>
                                        <div class="input-group mb-3">
                                            <textarea name="address" class="form-control" id="address" rows="1" placeholder="{{translate('address')}}">{{ old('address') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="title-color">{{translate('deliveryman_image')}}</label>
                                        <span class="text-info">* ( {{translate('ratio')}} 1:1 )</span>
                                        <div class="custom-file">
                                            <input value="{{ old('image') }}" type="file" name="image" id="customFileEg1" class="custom-file-input"
<<<<<<< HEAD
                                                   accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff,.webp|image/*">
=======
                                                   accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" required>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                            <label class="custom-file-label" for="customFileEg1">{{translate('choose_File')}}</label>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <img class="upload-img-view" id="viewer"
<<<<<<< HEAD
                                                 src="{{dynamicAsset(path: 'public/assets/back-end/img/400x400/img2.jpg')}}" alt="{{translate('delivery_man_image')}}"/>
                                        </div>
                                    </div>
=======
                                                 src="{{asset('public\assets\back-end\img\400x400\img2.jpg')}}" alt="delivery-man image"/>
                                        </div>


                                    </div>

>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="title-color" for="exampleFormControlInput1">{{translate('identity_image')}}</label>
                                        <div>
                                            <div class="row" id="coba"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="mb-0 page-header-title d-flex align-items-center gap-2 border-bottom pb-3 mb-3">
                                <i class="tio-user"></i>
                                {{translate('account_Information')}}
                            </h5>
<<<<<<< HEAD
=======

>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="title-color d-flex" for="exampleFormControlInput1">{{translate('email')}}</label>
<<<<<<< HEAD
                                            <input value="{{old('email')}}" type="email" name="email" class="form-control" placeholder="{{translate('ex').':'.'ex@example.com'}}">
=======
                                            <input value="{{old('email')}}" type="email" name="email" class="form-control" placeholder="{{translate('ex')}} : ex@example.com"
                                                required>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
<<<<<<< HEAD
                                            <label class="title-color d-flex align-items-center" for="user_password">
                                                {{translate('password')}}
                                                <span class="input-label-secondary cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{translate('The_password_must_be_at_least_8_characters_long_and_contain_at_least_one_uppercase_letter').','.translate('_one_lowercase_letter').','.translate('_one_digit_').','.translate('_one_special_character').','.translate('_and_no_spaces').'.'}}">
                                                    <img alt="" width="16" src={{dynamicAsset(path: 'public/assets/back-end/img/info-circle.svg') }} alt="" class="m-1">
                                                </span>
                                            </label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" class="js-toggle-password form-control password-check"
                                                       name="password" id="user_password"
=======
                                            <label class="title-color d-flex" for="user_password">
                                                {{translate('password')}}
                                            </label>

                                            <div class="input-group input-group-merge">
                                                <input type="password" class="js-toggle-password form-control"
                                                       name="password" required id="user_password"
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                                       placeholder="{{ translate('password_minimum_8_characters') }}"
                                                       data-hs-toggle-password-options='{
                                                         "target": "#changePassTarget",
                                                        "defaultClass": "tio-hidden-outlined",
                                                        "showClass": "tio-visible-outlined",
                                                        "classChangeTarget": "#changePassIcon"
                                                }'>
                                                <div id="changePassTarget" class="input-group-append">
                                                    <a class="input-group-text" href="javascript:">
                                                        <i id="changePassIcon" class="tio-visible-outlined"></i>
                                                    </a>
                                                </div>
                                            </div>
<<<<<<< HEAD
                                            <span class="text-danger mx-1 password-error"></span>
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="title-color d-flex" for="confirm_password">
                                                {{translate('confirm_password')}}
                                            </label>

                                            <div class="input-group input-group-merge">
                                                <input type="password" class="js-toggle-password form-control"
<<<<<<< HEAD
                                                       name="confirm_password" id="confirm_password"
=======
                                                       name="confirm_password" required id="confirm_password"
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                                       placeholder="{{ translate('password_minimum_8_characters') }}"
                                                       data-hs-toggle-password-options='{
                                                         "target": "#changeConfirmPassTarget",
                                                        "defaultClass": "tio-hidden-outlined",
                                                        "showClass": "tio-visible-outlined",
                                                        "classChangeTarget": "#changeConfirmPassIcon"
                                                }'>
                                                <div id="changeConfirmPassTarget" class="input-group-append">
                                                    <a class="input-group-text" href="javascript:">
                                                        <i id="changeConfirmPassIcon" class="tio-visible-outlined"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<<<<<<< HEAD
                                <div class="d-flex gap-3 justify-content-end">
                                    <button type="reset" id="reset" class="btn btn-secondary px-4">{{translate('reset')}}</button>
                                    <button type="button" class="btn btn--primary px-4 form-submit" data-form-id="add-delivery-man-form" data-redirect-route="{{route('admin.delivery-man.list')}}"
                                            data-message="{{translate('want_to_add_this_delivery_man').'?'}}">{{translate('submit')}}</button>
=======

                                <div class="d-flex gap-3 justify-content-end">
                                    <button type="reset" id="reset" class="btn btn-secondary px-4">{{translate('reset')}}</button>
                                    <button type="submit" class="btn btn--primary px-4">{{translate('submit')}}</button>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<<<<<<< HEAD
    <span id="coba-image" data-url="{{dynamicAsset(path: "public/assets/back-end/img/400x400/img2.jpg")}}"></span>
=======
    <span id="coba-image" data-url="{{asset("public/assets/back-end/img/400x400/img2.jpg")}}"></span>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    <span id="extension-error" data-text="{{ translate("please_only_input_png_or_jpg_type_file") }}"></span>
    <span id="size-error" data-text="{{ translate("file_size_too_big") }}"></span>
@endsection

@push('script_2')
<<<<<<< HEAD
    <script src="{{dynamicAsset(path: 'public/assets/back-end/js/spartan-multi-image-picker.js')}}"></script>
    <script src="{{dynamicAsset(path: 'public/assets/back-end/js/admin/deliveryman.js')}}"></script>
=======
    <script src="{{asset('public/assets/back-end/js/spartan-multi-image-picker.js')}}"></script>
    <script src="{{asset('public/assets/back-end/js/admin/deliveryman.js')}}"></script>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
@endpush
