<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ "Payment" }}</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ dynamicAsset(path: 'public/assets/back-end/libs/bootstrap-5/bootstrap.min.css') }}">
=======
    <link rel="stylesheet" href="{{ asset('public/assets/back-end/libs/bootstrap-5/bootstrap.min.css') }}">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017

    @stack('script')
</head>
<body>
    @yield('content')
<<<<<<< HEAD
    <script src="{{ dynamicAsset(path: 'public/assets/back-end/libs/bootstrap-5/bootstrap.bundle.min.js') }}"></script>
=======
    <script src="{{ asset('public/assets/back-end/libs/bootstrap-5/bootstrap.bundle.min.js') }}"></script>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
</body>
</html>
