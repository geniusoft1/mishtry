<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ session('direction') }}">

<head>
    <meta charset="utf-8">
    <title>{{ translate('maintenance_Mode_On') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    <link rel="apple-touch-icon" sizes="180x180" href="{{ dynamicStorage(path: 'storage/app/public/company/'.$web_config['fav_icon']->value) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ dynamicStorage(path: 'storage/app/public/company/'.$web_config['fav_icon']->value) }}">
    <link rel="stylesheet" media="screen" href="{{dynamicAsset(path: 'public/assets/front-end/css/theme.css')}}">
=======
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/app/public/company/'.$web_config['fav_icon']->value) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/app/public/company/'.$web_config['fav_icon']->value) }}">
    <link rel="stylesheet" media="screen" href="{{asset('public/assets/front-end/css/theme.css')}}">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
</head>

<body>

<div class="container rtl">
    <div class="row vh-100 align-content-center">
        <div class="col-12">
            <div class="text-center">
<<<<<<< HEAD
                <img loading="lazy" src="{{dynamicAsset(path: 'public/assets/front-end/img/maintenance-mode.jpg')}}" alt="{{ translate('maintenance-mode') }}">
=======
                <img loading="lazy" src="{{asset('public/assets/front-end/img/maintenance-mode.jpg')}}" alt="{{ translate('maintenance-mode') }}">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                <h1 class="mt-3">{{ translate('website_is_under_maintenance') }}</h1><br>
                <h5>{{ translate('please_come_back_later') }}</h5>
            </div>
        </div>
    </div>
</div>

<<<<<<< HEAD
<script src="{{ dynamicAsset(path: 'public/assets/front-end/vendor/jquery/dist/jquery-2.2.4.min.js') }}"></script>
<script src="{{ dynamicAsset(path: 'public/assets/front-end/js/theme.js')}}"></script>
=======
<script src="{{ asset('public/assets/front-end/vendor/jquery/dist/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('public/assets/front-end/js/theme.js')}}"></script>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
</body>

</html>
