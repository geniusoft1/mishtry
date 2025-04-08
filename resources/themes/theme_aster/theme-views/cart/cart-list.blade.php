@extends('theme-views.layouts.app')

@section('title', translate('cart_list').' | '.$web_config['name']->value.' '.translate('ecommerce'))

@section('content')
    <main class="main-content d-flex flex-column gap-3 py-3 mb-5" id="cart-summary">
        @include(VIEW_FILE_NAMES['products_cart_details_partials'])
    </main>
@endsection
<<<<<<< HEAD

@push('script')
    <script src="{{ theme_asset('assets/js/cart-list-page.js') }}"></script>
@endpush
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
