@extends('errors::minimal')

@section('title', __('Not Found'))

@section('message')
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-12">
                <div class="text-primary text-center">
<<<<<<< HEAD
                    <img src="{{dynamicAsset(path: "public/assets/front-end/png/500.png")}}" alt="" class="img-fluid">
=======
                    <img src="{{asset("public/assets/front-end/png/500.png")}}" alt="" class="img-fluid">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                </div>

                <p class="text-center h4 lead py-2">
                    {{ translate('We_are_sorry_server_is_not_responding') }}
                    <br>
                    {{translate('Try_after_sometime')}}
                </p>
            </div>
        </div>
    </div>

@endsection
