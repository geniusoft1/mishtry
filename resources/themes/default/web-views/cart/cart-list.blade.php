@extends('layouts.front-end.app')

@section('title', translate('My_Shopping_Cart'))

@push('css_or_js')
<<<<<<< HEAD
    <meta property="og:image" content="{{dynamicStorage(path: 'storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
=======
    <meta property="og:image" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    <meta property="og:title" content="{{$web_config['name']->value}} "/>
    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta property="og:description"
          content="{{ substr(strip_tags(str_replace('&nbsp;', ' ', $web_config['about']->value)),0,160) }}">

<<<<<<< HEAD
    <meta property="twitter:card" content="{{dynamicStorage(path: 'storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
=======
    <meta property="twitter:card" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    <meta property="twitter:title" content="{{$web_config['name']->value}}"/>
    <meta property="twitter:url" content="{{env('APP_URL')}}">
    <meta property="twitter:description"
          content="{{ substr(strip_tags(str_replace('&nbsp;', ' ', $web_config['about']->value)),0,160) }}">
<<<<<<< HEAD
    <link rel="stylesheet" href="{{dynamicStorage(path: 'public/assets/front-end/css/shop-cart.css')}}">
=======
    <link rel="stylesheet" href="{{asset('public/assets/front-end/css/shop-cart.css')}}">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
@endpush

@section('content')
    <div class="container mt-3 rtl px-0 px-md-3 text-align-direction" id="cart-summary">
        @include(VIEW_FILE_NAMES['products_cart_details_partials'])
    </div>
@endsection

@push('script')
    <script>
        cartQuantityInitialize();
    </script>
@endpush
