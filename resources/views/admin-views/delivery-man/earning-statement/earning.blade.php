@extends('layouts.back-end.app')

@section('title', translate('earning_Statement'))
<<<<<<< HEAD
@push('css_or_js')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017

@section('content')
    <div class="content container-fluid">
        <div class="mb-4 pb-2">
            <h2 class="h1 mb-0 text-capitalize d-flex align-items-center gap-2">
<<<<<<< HEAD
                <img src="{{dynamicAsset(path: 'public/assets/back-end/img/add-new-seller.png')}}" alt="">
=======
                <img src="{{asset('/public/assets/back-end/img/add-new-seller.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                {{translate('earning_statement')}}
            </h2>
        </div>
        @include('admin-views.delivery-man.pages-inline-menu')

        <div class="card mb-3">
            <div class="card-body">
                <div class="row justify-content-between align-items-center g-2 mb-3">
                    <div class="col-sm-6">
                        <h4 class="d-flex align-items-center text-capitalize gap-10 mb-0">
<<<<<<< HEAD
                            {{ translate('earning') }}
=======
                            {{ translate('earning_statement') }}
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                        </h4>
                    </div>
                </div>

                <div class="row g-2">
<<<<<<< HEAD
                    <div class="col-sm-6 col-lg-3">
                        <div class="card h-100 d-flex justify-content-center align-items-center py-xl-4">
                            <div class="card-body d-flex flex-column gap-10 align-items-center justify-content-center">
                                <img src="{{ dynamicAsset('public/assets/back-end/img/aw.png') }}" width="48" class="mb-2" alt="">
                                <h5 class="text-capitalize mb-2">{{ translate('total_earning') }}</h5>
                                <h2 class="business-analytics__title">{{ $totalEarn ? setCurrencySymbol(amount: usdToDefaultCurrency(amount: $totalEarn), currencyCode: getCurrencyCode()) : setCurrencySymbol(amount: 0, currencyCode: getCurrencyCode()) }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card h-100 d-flex justify-content-center align-items-center py-xl-4">
                            <span class="info-icon-on-card" data-toggle="tooltip" title="dummy and demo">
                                <img src="{{dynamicAsset('public/assets/back-end/img/info-circle.svg')}}" alt="">
                            </span>
                            <div class="card-body d-flex flex-column gap-10 align-items-center justify-content-center">
                                <img src="{{ dynamicAsset('public/assets/back-end/img/pw.png') }}" width="40" class="mb-2" alt="">
                                <h5 class="text-capitalize mb-2">{{ translate('withdrawable_balance') }}</h5>
                                <h2 class="business-analytics__title">{{ $withdrawalableBalance <= 0 ? setCurrencySymbol(amount: 0, currencyCode: getCurrencyCode()) : setCurrencySymbol(amount: usdToDefaultCurrency(amount: $withdrawalableBalance), currencyCode: getCurrencyCode()) }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card h-100 d-flex justify-content-center align-items-center py-xl-4">
                            <span class="info-icon-on-card" data-toggle="tooltip" title="dummy and demo">
                                <img src="{{dynamicAsset('public/assets/back-end/img/info-circle.svg')}}" alt="">
                            </span>
                            <div class="card-body d-flex flex-column gap-10 align-items-center justify-content-center">
                                <img src="{{ dynamicAsset('public/assets/back-end/img/withdraw.png') }}" width="40" class="mb-2" alt="">
                                <h5 class="text-capitalize mb-2">{{ translate('already_withdrawn') }}</h5>
                                <h2 class="business-analytics__title">{{ $deliveryMan->wallet? setCurrencySymbol(amount: usdToDefaultCurrency(amount: $deliveryMan->wallet->total_withdraw), currencyCode: getCurrencyCode()) : setCurrencySymbol(amount: 0, currencyCode: getCurrencyCode()) }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card h-100 d-flex justify-content-center align-items-center py-xl-4">
                            <span class="info-icon-on-card" data-toggle="tooltip" title="dummy and demo">
                                <img src="{{dynamicAsset('public/assets/back-end/img/info-circle.svg')}}" alt="">
                            </span>
                            <div class="card-body d-flex flex-column gap-10 align-items-center justify-content-center">
                                <img src="{{ asset('public/assets/back-end/img/cash-in-hand.png') }}" width="40" class="mb-2" alt="">
                                <h5 class="text-capitalize mb-2">{{ translate('cash_in_hand') }}</h5>
                                <h2 class="business-analytics__title">{{ $deliveryMan->wallet ? setCurrencySymbol(amount: usdToDefaultCurrency(amount: $deliveryMan->wallet->cash_in_hand), currencyCode: getCurrencyCode()) : setCurrencySymbol(amount: 0, currencyCode: getCurrencyCode()) }}</h2>
                            </div>
=======
                    <div class="col-sm-6 col-lg-4">
                        <div class="business-analytics">
                            <h5 class="business-analytics__subtitle">{{ translate('total_earning') }}</h5>
                            <h2 class="business-analytics__title">{{ $totalEarn ? setCurrencySymbol(amount: usdToDefaultCurrency(amount: $totalEarn), currencyCode: getCurrencyCode()) : setCurrencySymbol(amount: 0, currencyCode: getCurrencyCode()) }}</h2>
                            <img src="{{ asset('public/assets/back-end/img/aw.png') }}" width="40" class="business-analytics__img" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="business-analytics">
                            <h5 class="business-analytics__subtitle">{{ translate('withdrawable_balance') }}</h5>
                            <h2 class="business-analytics__title">{{ $withdrawalableBalance <= 0 ? setCurrencySymbol(amount: 0, currencyCode: getCurrencyCode()) : setCurrencySymbol(amount: usdToDefaultCurrency(amount: $withdrawalableBalance), currencyCode: getCurrencyCode()) }}</h2>
                            <img src="{{ asset('public/assets/back-end/img/pw.png') }}" width="40" class="business-analytics__img" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="business-analytics">
                            <h5 class="business-analytics__subtitle">{{ translate('withdrawn') }}</h5>
                            <h2 class="business-analytics__title">{{ $deliveryMan->wallet? setCurrencySymbol(amount: usdToDefaultCurrency(amount: $deliveryMan->wallet->total_withdraw), currencyCode: getCurrencyCode()) : setCurrencySymbol(amount: 0, currencyCode: getCurrencyCode()) }}</h2>
                            <img src="{{ asset('public/assets/back-end/img/withdraw.png') }}" width="40" class="business-analytics__img" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="px-3 py-4">
                    <div class="row align-items-center">
<<<<<<< HEAD
                        <div class="col-md-4">
                            <h4 class="d-flex align-items-center text-capitalize gap-10 mb-0">
                                {{ translate('earning_history') }}
                                <span class="badge badge-soft-dark radius-50 fz-12 ml-1 " id="row-count">{{ $orders->total() }}</span>
                            </h4>
                        </div>
                        <div class="col-md-8">
=======
                        <div class="col-md-4 col-lg-6 mb-2 mb-md-0">
                            <h4 class="d-flex align-items-center text-capitalize gap-10 mb-0">
                                {{ translate('earning_statement') }}
                                <span class="badge badge-soft-dark radius-50 fz-12 ml-1">{{ $orders->total() }}</span>
                            </h4>
                        </div>
                        <div class="col-md-8 col-lg-6">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                            <div class="d-flex align-items-center justify-content-md-end flex-wrap flex-sm-nowrap gap-2">
                                <form action="" method="GET">
                                    <div class="input-group input-group-merge input-group-custom">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tio-search"></i>
                                            </div>
                                        </div>
                                        <input id="datatableSearch_" type="search" name="searchValue" class="form-control" placeholder="{{ translate('search_by_order_no') }}" aria-label="Search orders" value="{{ request('searchValue') }}">
                                        <button type="submit" class="btn btn--primary">
                                            {{ translate('search') }}
                                        </button>
                                    </div>
                                </form>
<<<<<<< HEAD
                                <div class="hs-unfold mr-2">
                                    <a class="js-hs-unfold-invoker btn btn-sm btn-white justify-content-between dropdown-toggle min-height-44 min-w-120" href="javascript:"
                                        data-hs-unfold-options='{
                                                "target": "#menu",
                                                "type": "css-animation"
                                            }'>
                                        {{ translate('Default') }}
                                    </a>

                                    <div id="menu" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right px-3 pt-4 pb-2">
                                        <ul class="nav nav-tabs gap-3 border-0 mb-4">
                                            <li class="nav-item">
                                                <a href="#status" data-toggle="tab" class="nav-link py-2 px-0 active">
                                                    {{translate('status')}}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#payment" data-toggle="tab" class="nav-link py-2 px-0 text-capitalize">
                                                    {{translate('payment_method')}}
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content earning-order-history">
                                            <div class="tab-pane active" id="status">
                                                <ul class="check-list-group">
                                                    <li>
                                                        <label class="custom-control-group">
                                                            <input type="checkbox" class="input" value="pending">
                                                            <span class="label">{{translate('pending')}}</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom-control-group">
                                                            <input type="checkbox" class="input" value="confirmed">
                                                            <span class="label">{{translate('confirmed')}}</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom-control-group">
                                                            <input type="checkbox" class="input" value="processing">
                                                            <span class="label">{{translate('packing')}}</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom-control-group">
                                                            <input type="checkbox" class="input" value="out_for_delivery">
                                                            <span class="label text-capitalize">{{translate('out_for_delivery')}}</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom-control-group">
                                                            <input type="checkbox" class="input" value="delivered">
                                                            <span class="label text-capitalize">{{translate('delivered')}}</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom-control-group">
                                                            <input type="checkbox" class="input" value="cancel">
                                                            <span class="label">{{translate('cancel')}}</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade show" id="payment">
                                                <ul class="check-list-group">
                                                    <li>
                                                        <label class="custom-control-group">
                                                            <input type="checkbox" class="input" value="paid">
                                                            <span class="label">{{translate('received')}}</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom-control-group">
                                                            <input type="checkbox" class="input" value="unpaid">
                                                            <span class="label">{{translate('not_received')}}</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                <div class="dropdown text-nowrap">
                                    <button type="button" class="btn btn-outline--primary" data-toggle="dropdown">
                                        <i class="tio-download-to"></i>
                                        {{translate('export')}}
                                        <i class="tio-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
<<<<<<< HEAD
                                            <a type="submit" class="dropdown-item d-flex align-items-center gap-2 earning-file-export" href="javascript:" data-action="{{route('admin.delivery-man.order-history-log-export',['id'=>$deliveryMan->id,'type'=>'earn','search'=> request('searchValue')])}}">
                                                <img width="14" src="{{dynamicAsset(path: 'public/assets/back-end/img/excel.png')}}" alt="">
=======
                                            <a type="submit" class="dropdown-item d-flex align-items-center gap-2 " href="{{route('admin.delivery-man.order-history-log-export',['id'=>$deliveryMan->id,'type'=>'earn','search'=> request('searchValue')])}}">
                                                <img width="14" src="{{asset('/public/assets/back-end/img/excel.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                                {{translate('excel')}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
                <div class="row g-2" id="status-wise-view">
                    @include('admin-views.delivery-man.earning-statement._table')
=======

                <div class="row g-2">
                    <div class="col-sm-12 mb-3">
                        <div class="card">
                            <div class="table-responsive datatable-custom">
                                <table class="table table-hover table-borderless table-thead-bordered table-align-middle card-table text-left">
                                    <thead class="thead-light thead-50 text-capitalize table-nowrap">
                                    <tr>
                                        <th>{{ translate('SL') }}</th>
                                        <th>{{ translate('order_no') }}</th>
                                        <th>{{ translate('earning') }}</th>
                                        <th class="text-center">{{ translate('status') }}</th>
                                    </tr>
                                    </thead>

                                    <tbody id="set-rows">
                                    @forelse($orders as $key=>$order)
                                    <tr>
                                        <td>{{ $orders->firstItem()+$key }}</td>
                                        <td>
                                            <div class="media align-items-center gap-10 flex-wrap">
                                                <a class="title-color" title="{{translate('order_details')}}"
                                                   href="{{route('admin.orders.details',['id'=>$order['id']])}}">
                                                    {{ $order->id }}
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column gap-1">
                                                <div class="media-body">{{ setCurrencySymbol(amount: usdToDefaultCurrency(amount: $order->deliveryman_charge), currencyCode: getCurrencyCode()) }}</div>

                                            </div>
                                        </td>
                                        <td class="text-center text-capitalize">
                                            @if($order['order_status']=='pending')
                                                <span class="badge badge-soft-info fz-12">
                                                    {{translate($order['order_status'])}}
                                            </span>

                                            @elseif($order['order_status']=='processing' || $order['order_status']=='out_for_delivery')
                                                <span class="badge badge-soft-warning fz-12">
                                                {{translate(str_replace('_',' ',$order['order_status'] == 'processing' ? 'packaging':$order['order_status']))}}
                                            </span>
                                            @elseif($order['order_status']=='confirmed')
                                                <span class="badge badge-soft-success fz-12">
                                                {{translate($order['order_status'])}}
                                            </span>
                                            @elseif($order['order_status']=='failed')
                                                <span class="badge badge-danger fz-12">
                                                {{translate('Failed_To_Deliver')}}
                                            </span>
                                            @elseif($order['order_status']=='delivered')
                                                <span class="badge badge-soft-success fz-12">
                                                {{translate($order['order_status'])}}
                                            </span>
                                            @else
                                                <span class="badge badge-soft-danger fz-12">
                                                {{translate($order['order_status'])}}
                                            </span>
                                            @endif
                                        </td>

                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">
                                                <div class="text-center p-4">
                                                    <img class="mb-3 w-160" src="{{ asset('public/assets/back-end/svg/illustrations/sorry.svg') }}" alt="Image Description">
                                                    <p class="mb-0">{{ translate('no_earning_history_found') }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>

                            <div class="table-responsive mt-4">
                                <div class="px-4 d-flex justify-content-lg-end">
                                    {{ $orders->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <span id="get-filter-route" data-action="{{route('admin.delivery-man.order-wise-earning-list-by-filter',['id'=>$deliveryMan['id']])}}"></span>
@endsection
@push('script')
    <script src="{{dynamicAsset(path: 'public/assets/back-end/js/admin/deliveryman.js')}}"></script>
@endpush
=======
@endsection
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
