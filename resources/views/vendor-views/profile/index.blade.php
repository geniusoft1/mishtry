@extends('layouts.back-end.app-seller')

@section('title', translate('bank_Info_View'))

@section('content')
    <div class="content container-fluid">
        <div class="mb-3">
            <h2 class="h1 mb-0 text-capitalize d-flex align-items-center gap-2">
<<<<<<< HEAD
                <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/my-bank-info.png')}}" alt="">
=======
                <img width="20" src="{{asset('/public/assets/back-end/img/my-bank-info.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                {{translate('my_bank_info')}}
            </h2>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
<<<<<<< HEAD
                <div class="card text-start">
                    <div class="border-bottom d-flex gap-3 flex-wrap justify-content-between align-items-center px-4 py-3">
                        <div class="d-flex gap-2 align-items-center">
                            <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/bank.png')}}" alt="" />
                            <h3 class="mb-0">{{translate('account_details')}} <span data-toggle="tooltip" data-placement="right" data-title="{{translate('update_your_bank_details_with_correct_information').'.'.translate('it_will_be_used_for_your_withdraw_request_transactions by admin').'.'}}"> <img src="{{ dynamicAsset(path: 'public/assets/installation/assets/img/svg-icons/info.svg') }}" alt="" class="svg ml-1"> </span></h3>
=======
                <div class="card" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                    <div class="border-bottom d-flex gap-3 flex-wrap justify-content-between align-items-center px-4 py-3">
                        <div class="d-flex gap-2 align-items-center">
                            <img width="20" src="{{asset('/public/assets/back-end/img/bank.png')}}" alt="" />
                            <h3 class="mb-0">{{translate('bank_information')}}</h3>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <a href="{{route('vendor.profile.update-bank-info',[$vendor->id])}}" class="btn btn--primary">
                                {{translate('edit')}}
                            </a>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                        </div>
                    </div>
                    <div class="card-body p-30">
                        <div class="row justify-content-center">
                            <div class="col-sm-6 col-md-8 col-lg-6 col-xl-5">
<<<<<<< HEAD
                                <div class="card border bank-info-card bg-bottom text--black bg-contain bg-img" style="background-image: url({{dynamicAsset(path: 'public/assets/back-end/img/wallet-bg.png')}});">
                                    <div class="p-20">
                                        <div class="text-capitalize">
                                            <i class="tio-user"></i> {{translate('holder_name').':'}} <strong class="text-title">{{$vendor->holder_name ?? translate('no_data_found')}}</strong>
                                        </div>
                                    </div>

                                    <a href="{{route('vendor.profile.update-bank-info',[$vendor->id])}}" class="btn btn-sm btn--primary edit-btn">
                                        {{translate('edit')}} <i class="tio-edit"></i>
                                    </a>
                                    <div class="card-body position-relative pt-2">
                                        <ul class="dm-info p-0 m-0">
                                            <li>
                                                <span class="__w-100px">{{translate('bank_Name')}}</span>
                                                <span>:</span>
                                                <strong class="right pl-4">{{$vendor->bank_name ?? translate('no_data_found')}}</strong>
                                            </li>
                                            <li>
                                                <span class="__w-100px">{{translate('branch_Name')}}</span>
                                                <span>:</span>
                                                <strong class="right pl-4">{{$vendor->branch ?? translate('no_data_found')}}</strong>
                                            </li>
                                            <li>
                                                <span class="__w-100px">{{translate('account_Number')}}</span>
                                                <span>:</span>
                                                <strong class="right pl-4">{{$vendor->account_no ?? translate('no_data_found')}}</strong>
=======
                                <div class="card bank-info-card bg-bottom bg-contain bg-img" style="background-image: url({{asset('/public/assets/back-end/img/bank-info-card-bg.png')}});">
                                    <div class="border-bottom p-3">
                                        <h4 class="mb-0 fw-semibold text-capitalize">{{translate('holder_name').':'}} <strong>{{$vendor->holder_name ?? translate('no_data_found')}}</strong></h4>
                                    </div>

                                    <div class="card-body position-relative">
                                        <img class="bank-card-img" width="78" src="{{asset('/public/assets/back-end/img/bank-card.png')}}" alt="">

                                        <ul class="list-unstyled d-flex flex-column gap-4">
                                            <li>
                                                <h3 class="mb-2">{{translate('bank_Name').':'}}</h3>
                                                <div>{{$vendor->bank_name ?? translate('no_data_found')}}</div>
                                            </li>
                                            <li>
                                                <h3 class="mb-2">{{translate('branch_Name').':'}}</h3>
                                                <div>{{$vendor->branch ?? translate('no_data_found')}}</div>
                                            </li>
                                            <li>
                                                <h3 class="mb-2">{{translate('account_Number').':'}}</h3>
                                                <div>{{$vendor->account_no ?? translate('no_data_found')}}</div>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
