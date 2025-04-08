<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ translate('OTP_Verification_Code') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ dynamicAsset(path: 'public/assets/back-end/css/email-basic.css') }}">
=======
    <link rel="stylesheet" href="{{ asset('public/assets/back-end/css/email-basic.css') }}">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017

</head>
<body>
    <?php

    $companyPhone = getWebConfig(name: 'company_phone');
    $companyEmail = getWebConfig(name: 'company_email');
    $companyName = getWebConfig(name: 'company_name');
    $companyLogo = getWebConfig(name: 'company_web_logo');
    ?>

<div class="d-flex justify-content-center align-items-center m-auto vh-100">
    <div class="card">
        <div class="m-auto bg-white pt-40px pb-40px text-center">
            <div class="d-block">
                @if(is_file('storage/app/public/company/'.$companyLogo))
                    <div class="d-flex justify-content-center align-items-center gap-1">
<<<<<<< HEAD
                        <img src="{{ dynamicStorage(path: 'storage/app/public/company/'.$companyLogo) }}" alt="{{ $companyName }}"
=======
                        <img src="{{ asset('storage/app/public/company/'.$companyLogo) }}" alt="{{ $companyName }}"
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                             class="width-auto h-50px">
                        {{ $companyName }}
                    </div>
                @else
                    {{ $companyName }}
                @endif
            </div>
        </div>
        <div class="card-header mb-3 text-center">
            <div class="mb-3">
<<<<<<< HEAD
                <img alt="" src="{{ dynamicAsset(path: "public/assets/front-end/img/media/OTP-Verification.png") }}" class="h-100px"/>
=======
                <img alt="" src="{{ asset("public/assets/front-end/img/media/OTP-Verification.png") }}" class="h-100px"/>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            </div>
            {{ translate('your_OTP_Verification_Code') }}
        </div>
        <div class="card-body">
            <h1 class="text-info text-center">{{ $token }}</h1>
        </div>
    </div>
</div>
</body>
</html>
