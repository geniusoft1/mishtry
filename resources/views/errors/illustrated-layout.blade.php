<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
<<<<<<< HEAD
        <link rel="stylesheet" href="{{ dynamicAsset(path: 'public/assets/front-end/css/roboto-font.css')  }}">
        <link rel="stylesheet" href="{{dynamicAsset(path: 'public/assets/front-end/css/illustrated.css')}}"/>
=======
        <link rel="stylesheet" href="{{ asset('public/assets/front-end/css/roboto-font.css')  }}">
        <link rel="stylesheet" href="{{asset('public/assets/front-end/css/illustrated.css')}}"/>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    </head>
    <body class="antialiased font-sans">
        <div class="md:flex min-h-screen">
            <div class="w-full md:w-1/2 bg-white flex items-center justify-center">
                <div class="max-w-sm m-8">
                    <div class="text-black text-5xl md:text-15xl font-black">
                        @yield('code', translate('Oh_no'))
                    </div>

                    <div class="w-16 h-1 bg-purple-light my-3 md:my-6"></div>

                    <p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal">
                        @yield('message')
                    </p>
                    <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">
                        <button class="bg-transparent text-capitalize text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg">
                            {{ translate('go_home') }}
                        </button>
                    </a>
                </div>
            </div>
            <div class="relative pb-full md:flex md:pb-0 md:min-h-screen w-full md:w-1/2">
                @yield('image')
            </div>
        </div>
    </body>
</html>
