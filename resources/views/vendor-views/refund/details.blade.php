@extends('layouts.back-end.app-seller')

@section('title', translate('refund_details'))

@push('css_or_js')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@section('content')

    <div class="content container-fluid">
        <div class="mb-3">
            <h2 class="h1 mb-0 text-capitalize d-flex align-items-center gap-2">
<<<<<<< HEAD
                <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/refund-request-list.png')}}" alt="">
                {{translate('refund_details')}}
            </h2>
        </div>
        <div class="refund-details-card--2 p-4">

            @if ($refund['change_by'] !='admin')
            <div class="mb-2 alert--message">
                <div class="d-flex justify-content-between w-100">
                    <span class="">
                        <img class="mb-1" src="{{dynamicAsset(path: 'public/assets/back-end/img/warning-icon.png')}}" alt="{{translate('warning')}}">
                        @if($refund['status'] != 'pending' && ($refund['approved_count']<2 || $refund['denied_count']<2))
                            @if($refund['status'] == 'approved' && $refund['approved_count']<2 )
                                {{translate('you_have_already_denied_refund_status_once').'.'}}
                            @elseif($refund['status'] == 'rejected' && $refund['denied_count']<2)
                                {{translate('you_have_already_approved_refund_status_once').'.'}}
                            @endif
                        @elseif($refund['approved_count']>=2 || $refund['denied_count']>=2)
                            {{translate('you_have_already_').$refund['status'].translate('_refund_status_twice').'.'}}
                        @else
                            {{translate('you_can_change_refund_status_maximum_2_times').'.'}}
                        @endif
                    </span>
                    <a href="javascript:" class="align-items-center close-alert-message">
                        <i class="tio-clear"></i>
                    </a>
                </div>
            </div>
            @endif
            <div class="row gy-2">
            <div class="col-lg-4">
                <div class="card h-100 refund-details-card">
                    <div class="card-body">
                        <h4 class="mb-3">{{translate('refund_summary')}}</h4>
                        <ul class="dm-info p-0 m-0">
                            <li class="align-items-center">
                                <span class="left">{{translate('refund_id')}} </span> <span>:</span> <span class="right">{{$refund->id}}</span>
                            </li>
                            <li class="align-items-center">
                                <span class="left text-capitalize">{{translate('refund_requested_date')}}</span>
                                <span>:</span>
                                <span class="right">{{date('d M Y, h:s:A',strtotime($refund['created_at']))}}</span>
                            </li>
                            <li class="align-items-center">
                                <span class="left">{{translate('refund_status')}}</span> <span>:</span> <span class="right">
                                    @if ($refund['status'] == 'pending')
                                        <span class="badge badge-secondary-2"> {{translate($refund['status'])}}</span>
                                    @elseif($refund['status'] == 'approved')
                                        <span class="badge badge--primary-2"> {{translate($refund['status'])}}</span>
                                    @elseif($refund['status'] == 'refunded')
                                        <span class="badge badge-success-2"> {{translate($refund['status'])}}</span>
                                    @elseif($refund['status'] == 'rejected')
                                        <span class="badge badge--danger-2"> {{translate($refund['status'])}}</span>
                                    @endif
                                </span>
                            </li>
                            <li class="align-items-center">
                                <span class="left">{{translate('payment_method')}} </span> <span>:</span> <span class="right">{{str_replace('_',' ',$order->payment_method)}}</span>
                            </li>
                            <li class="align-items-center">
                                <span class="left">{{translate('order_details')}} </span> <span>:</span> <span class="right"><a class="badge py-2 badge-soft-primary border border-primary px-2" href="{{route('vendor.orders.details',['id'=>$order->id])}}">{{translate('view_details')}}</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card h-100 refund-details-card">
                    <div class="card-body">
                        <div class="gap-3 mb-4 d-flex justify-content-between flex-wrap align-items-center">
                            <h4 class="">{{translate('product_details')}}</h4>
                            <div class="d-flex flex-wrap gap-3">
                                @if ($refund->change_by !='admin')
                                    @if($refund['status'] != 'rejected' && $refund['denied_count'] < 2)
                                        <button class="btn btn-soft-danger p-2 px-3" data-toggle="modal" data-target="#rejectModal">
                                            {{ translate('reject') }}
                                        </button>
                                    @endif
                                    @if($refund['status'] != 'approved' && $refund['approved_count'] < 2)
                                        <button class="btn btn-soft-success p-2 px-3" data-toggle="modal" data-target="#approveModal">
                                            {{ translate('approve') }}
                                        </button>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="refund-details">
                            <div class="img">
                                <div class="onerror-image border rounded">
                                    <img src="{{getValidImage(path:  'storage/app/public/product/thumbnail/'.($refund->product ? $refund->product->thumbnail:''),type: 'backend-product')}}" alt="">
                                </div>
                            </div>
                            <div class="--content flex-grow-1">
=======
                <img width="20" src="{{asset('/public/assets/back-end/img/refund-request-list.png')}}" alt="">
                {{translate('refund_details')}}
            </h2>
        </div>

        <div class="row gy-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row gy-1 justify-content-between align-items-center flex-grow-1">
                            <div class="col-md-4">
                                <h5 class="mb-0">{{translate('refund_id')}} : {{$refund->id}}</h5>
                            </div>

                            <h5 class="col-md-4 mb-0 text-capitalize">{{translate('refund_status')}}:
                                @if ($refund['status'] == 'pending')
                                    <span class="text--primary"> {{translate($refund['status'])}}</span>
                                @elseif($refund['status'] == 'approved')
                                    <span class="text-success"> {{translate($refund['status'])}}</span>
                                @elseif($refund['status'] == 'refunded')
                                    <span class="text-info"> {{translate($refund['status'])}}</span>
                                @elseif($refund['status'] == 'rejected')
                                    <span class="text-danger"> {{translate($refund['status'])}}</span>
                                @endif
                            </h5>

                            <div class="col-md-4 d-flex justify-content-md-end">
                                @if ($refund['change_by'] != 'admin')
                                    <button class="btn btn--primary" data-toggle="modal"
                                            data-target="#refund-status">{{translate('change_refund_status')}}</button>
                                @endif
                            </div>

                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row gy-2">
                            <div class="col-sm-4 col-lg-2 onerror-image">
                                <img src="{{getValidImage(path:  'storage/app/public/product/thumbnail/'.($refund->product ? $refund->product->thumbnail:''),type: 'backend-product')}}" alt="">
                            </div>
                            <div class="col-sm-8 col-md-4 col-lg-6">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                <h4>
                                    @if ($refund->product!=null)
                                        <a href="{{route('vendor.products.view',[$refund->product->id])}}">
                                            {{$refund->product->name}}
                                        </a>
                                    @else
                                        {{translate('product_name_not_found')}}
                                    @endif
                                </h4>
<<<<<<< HEAD
                                @if ($refund->orderDetails->variant)
                                <div class="font-size-sm text-body">
                                    <strong><u>{{translate('variation')}}</u></strong>
                                    <span>:</span>
                                        <span class="font-weight-bold">{{$refund->orderDetails->variant}}</span>
                                    </div>
                                @endif
                                @if($refund->orderDetails->digital_file_after_sell)
                                    <a href="{{ dynamicStorage(path: 'storage/app/public/product/digital-product/'.$refund->orderDetails->digital_file_after_sell) }}" class="btn btn-outline--primary btn-sm mt-3" title="{{translate('download')}}">
                                        {{translate('download')}} <i class="tio-download"></i>
                                    </a>
                                @endif
                            </div>
                            <ul class="dm-info p-0 m-0 w-l-115">
                                <li>
                                    <span class="left">{{translate('QTY')}}</span>
                                    <span>:</span>
                                    <span class="right">
                                        <strong>
                                            {{$refund->orderDetails->qty}}
                                        </strong>
                                    </span>
                                </li>
                                <li>
                                    <span class="left">{{translate('total_price')}} </span>
                                    <span>:</span>
                                    <span class="right">
                                        <strong>
                                            {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $refund->orderDetails->price*$refund->orderDetails->qty), currencyCode: getCurrencyCode())}}
                                        </strong>
                                    </span>
                                </li>

                                <li>
                                    <span class="left">{{translate('total_discount')}} </span>
                                    <span>:</span>
                                    <span class="right">
                                        <strong>
                                            {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $refund->orderDetails->discount), currencyCode: getCurrencyCode())}}
                                        </strong>
                                    </span>
                                </li>
                                <li>
                                    <span class="left">{{translate('coupon_discount')}} </span>
                                    <span>:</span>
                                    <span class="right">
                                        <strong>
                                            {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $couponDiscount), currencyCode: getCurrencyCode())}}
                                        </strong>
                                    </span>
                                </li>

                                <li>
                                    <span class="left">{{translate('total_tax')}} </span>
                                    <span>:</span>
                                    <span class="right">
                                        <strong>
                                            {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $refund->orderDetails->tax), currencyCode: getCurrencyCode())}}
                                        </strong>
                                    </span>
                                </li>

                                <li>
                                    <span class="left">{{translate('subtotal')}} </span>
                                    <span>:</span>
                                    <span class="right">
                                        <strong>
                                            {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $subtotal), currencyCode: getCurrencyCode())}}
                                        </strong>
                                    </span>
                                </li>

                                <li>
                                    <span class="left">{{translate('refundable_amount')}} </span>
                                    <span>:</span>
                                    <span class="right">
                                        <strong>
                                            {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $refundAmount), currencyCode: getCurrencyCode())}}
                                        </strong>
                                    </span>
                                </li>

                            </ul>
=======
                                <div>{{translate('QTY')}} : {{$refund->orderDetails->qty}}</div>
                                <div>{{translate('price')}}
                                    : {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $refund->orderDetails->price), currencyCode: getCurrencyCode())}}
                                </div>
                                @if ($refund->orderDetails->variant)
                                    <strong><u>{{translate('variation')}} : </u></strong>

                                    <div class="font-size-sm text-body">
                                        <span class="font-weight-bold">{{$refund->orderDetails->variant}}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="row justify-content-md-end mb-3">
                                    <div class="col-md-10">
                                        <dl class="row text-md-right">
                                            <dt class="col-md-7">{{translate('total_price')}} :</dt>
                                            <dd class="col-md-5 ">
                                                <strong>
                                                    {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $refund->orderDetails->price*$refund->orderDetails->qty), currencyCode: getCurrencyCode())}}
                                                </strong>
                                            </dd>

                                            <dt class="col-sm-7">{{translate('total_discount')}} :</dt>
                                            <dd class="col-sm-5 ">
                                                <strong>
                                                    {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $refund->orderDetails->discount), currencyCode: getCurrencyCode())}}
                                                </strong>
                                            </dd>

                                            <dt class="col-sm-7">{{translate('total_tax')}} :</dt>
                                            <dd class="col-sm-5">
                                                <strong>
                                                    {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $refund->orderDetails->tax), currencyCode: getCurrencyCode())}}
                                                </strong>
                                            </dd>
                                        </dl>
                                        <!-- End Row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-wrap flex-column flex-md-row gap-10 justify-content-between">
                            <span
                                class="title-color">{{translate('subtotal')}} : {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $subtotal), currencyCode: getCurrencyCode())}}</span>
                            <span
                                class="title-color">{{translate('coupon_discount')}} : {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $couponDiscount), currencyCode: getCurrencyCode())}}</span>
                            <span
                                class="title-color">{{translate('total_refund_amount')}} : {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $refundAmount), currencyCode: getCurrencyCode())}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">{{translate('additional_information')}}</h4>
                    </div>

                    <div class="card-body">
                        <div class="row gy-2">
                            <div class="col-sm-6 col-md-4 d-flex flex-column gap-10">
                                <h5>{{translate('deliveryman_info')}} : </h5>
                                <span>{{translate('deliveryman_name')}} : {{$order->delivery_man!=null?$order->delivery_man->f_name . ' ' .$order->delivery_man->l_name:translate('not_assigned')}}</span>
                                <span>{{translate('deliveryman_email')}} : {{$order->delivery_man!=null?$order->delivery_man->email :translate('not_found')}}</span>
                                <span>{{translate('deliveryman_phone')}} : {{$order->delivery_man!=null?$order->delivery_man->phone :translate('not_found')}}</span>
                            </div>

                            <div class="col-sm-6 col-md-4 d-flex flex-column gap-10">
                                <span>{{translate('payment_method')}} : {{str_replace('_',' ',$order->payment_method)}}</span>
                                <span>{{translate('order_details')}} : <a class="btn btn--primary btn-sm"
                                                                          href="{{route('vendor.orders.details',['id'=>$order->id])}}">{{translate('click_here')}}</a></span>
                            </div>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                        </div>
                    </div>
                </div>
            </div>

<<<<<<< HEAD
            <div class="col-sm-6">
                    <div class="card h-100 refund-details-card--2">
                        <div class="card-body">
                            <h4 class="mb-3 text-capitalize">{{translate('refund_reason_by_customer')}}</h4>
                            <p>
                                {{$refund->refund_reason}}
                            </p>
=======
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">{{translate('refund_status_changed_log')}}</h4>
                    </div>
                    <div class="table-responsive datatable-custom">
                        <table
                            class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                            <thead class="thead-light thead-50 text-capitalize">
                            <tr>
                                <th>{{translate('SL')}}#</th>
                                <th>{{translate('changed_by')}} </th>
                                <th>{{translate('status')}}</th>
                                <th>{{translate('note')}}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($refund->refundStatus as $key=>$status)
                                <tr>
                                    <td>
                                        {{$key+1}}
                                    </td>
                                    <td>
                                        {{$status->change_by}}
                                    </td>
                                    <td>
                                        {{translate($status->status)}}
                                    </td>
                                    <td class="text-break">
                                        <div class="word-break max-w-360px">
                                            {{$status->message}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @if(count($refund->refundStatus)==0)
                            <div class="text-center p-4">
                                <img class="mb-3 w-160" src="{{asset('public/assets/back-end/svg/illustrations/sorry.svg')}}"
                                     alt="{{translate('image_description')}}">
                                <p class="mb-0">{{ translate('no_data_to_show')}}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">{{translate('refund_reason')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <p>
                                {{$refund->refund_reason}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">{{translate('attachment')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-12">

>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                            @if ($refund->images)
                                <div class="gallery grid-gallery">
                                    @foreach (json_decode($refund->images) as $key => $photo)
                                        <a href="{{getValidImage(path: 'storage/app/public/refund/'.$photo,type:'backend-basic')}}"
                                           data-lightbox="mygallery">
<<<<<<< HEAD
                                            <img src="{{getValidImage(path: 'storage/app/public/refund/'.$photo,type:'backend-basic')}}" width="50" alt="">
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
            </div>
            <div class="col-sm-6">
                    <div class="card h-100 refund-details-card--2">
                        <div class="card-body">
                            <h4 class="mb-3 text-capitalize">{{translate('deliveryman_info')}}</h4>
                            <div class="key-val-list d-flex flex-column gap-2 min-width--60px">
                                @if($order->deliveryMan)
                                    <div class="key-val-list-item d-flex gap-3">
                                        <span class="text-capitalize">{{translate('name')}}</span>:
                                        <span>{{$order->deliveryMan->f_name . ' ' .$order->deliveryMan->l_name}}</span>
                                    </div>
                                    <div class="key-val-list-item d-flex gap-3">
                                        <span class="text-capitalize">{{translate('email_address')}}</span>:
                                        <span>
                                        <a class="text-dark"
                                           href="mailto:{{ $order->deliveryMan->email }}">{{$order->deliveryMan?->email }}
                                        </a>
                                    </span>
                                    </div>
                                    <div class="key-val-list-item d-flex gap-3">
                                        <span class="text-capitalize">{{translate('phone_number')}} </span>:
                                        <span>
                                        <a class="text-dark"
                                           href="tel:{{ $order->deliveryMan->phone }}">{{$order->deliveryMan?->phone }}
                                        </a>
                                    </span>
                                    </div>
                                @else
                                    <div class="key-val-list-item d-flex gap-3">
                                        <span class="text-capitalize">{{translate('Info')}}</span>:
                                        <strong class="right text-capitalize">{{translate('delivery_man_not_assigned').'.'}}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-12">
                    <div class="card refund-details-card--2">
                        <div class="card-body ">
                            <h4 class="mb-3">{{translate('refund_status_changed_log')}}</h4>
                            <div class="table-responsive datatable-custom">
                                <table
                                    class="table table-hover text-center table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                                    <thead class="thead-light thead-50 text-capitalize">
                                    <tr>
                                        <th>{{translate('SL')}}</th>
                                        <th>{{translate('changed_by')}}</th>
                                        <th>{{translate('Date')}}</th>
                                        <th>{{translate('approved_/_rejected_note')}}</th>
                                        <th>{{translate('status')}}</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($refund->refundStatus as $key=>$status)
                                        <tr>
                                            <td>
                                                {{$key+1}}
                                            </td>
                                            <td class="text-capitalize">
                                                {{$status->change_by == 'seller' ? 'vendor' : $status->change_by}}
                                            </td>
                                            <td>{{date('d M Y, h:s:A',strtotime($refund['created_at']))}}</td>

                                            <td class="text-break">
                                                <div class="word-break max-w-360px mx-auto">
                                                    {{$status->message}}
                                                </div>
                                            </td>
                                            <td class="text-capitalize">
                                                {{translate($status->status)}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @if(count($refund->refundStatus)==0)
                                    <div class="text-center p-4">
                                        <img class="mb-3 w-160" src="{{dynamicAsset(path: 'public/assets/back-end/svg/illustrations/sorry.svg')}}"
                                             alt="{{translate('image_description')}}">
                                        <p class="mb-0">{{ translate('no_data_to_show')}}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
    @if ($refund['change_by'] !='admin')
        @if($refund['denied_count'] < 2)
            <div class="modal fade" id="rejectModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{route('vendor.refund.update-status')}}" method="post" id="submit-rejected-form">
                            @csrf
                            <div class="modal-body">
                                <input type="hidden" name="id" value="{{$refund->id}}">
                                <input type="hidden" name="refund_status" value="rejected">
                                <div class="text-center">
                                    <img class="mb-3" src="{{dynamicAsset(path: 'public/assets/back-end/img/refund-reject.png')}}" alt="{{translate('refund_reject')}}">
                                    <h4 class="mb-4 mx-auto max-w-283">
                                        {{translate('you_can_reject_that_refund_request_two_times').','.translate('then_you_can’t_change_this_status').'.'}}
                                    </h4>
                                </div>
                                <textarea class="form-control text-area-max-min" placeholder="{{translate('please_write_the_reject_reason').'...'}}" name="rejected_note" rows="3"></textarea>
                                <div class="d-flex flex-wrap justify-content-end gap-3 mt-3">
                                    <button type="button" class="btn btn-secondary px-3" data-dismiss="modal">{{ translate('close') }}</button>
                                    <button type="button" class="btn btn--primary form-submit" data-form-id="submit-rejected-form" data-message="{{translate('want_to_reject_this_refund_request').'?'}}"  data-redirect-route="{{route('vendor.refund.index',['status'=>$refund['status']])}}">{{ translate('submit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
        @if($refund['approved_count'] < 2)
            <div class="modal fade" id="approveModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{route('vendor.refund.update-status')}}" method="post" id="submit-approve-form">
                            @csrf
                            <div class="modal-body">
                                <input type="hidden" name="id" value="{{$refund->id}}">
                                <input type="hidden" name="refund_status" value="approved">
                                <div class="text-center">
                                    <img class="mb-3" src="{{dynamicAsset(path: 'public/assets/back-end/img/refund-approve.png')}}" alt="{{translate('refund_approve')}}">
                                    <h4 class="mb-4 mx-auto max-w-283">
                                        {{translate('you_can_approve_that_refund_request_two_times').','.translate('then_you_can’t_change_this_status').'.'}}
                                    </h4>
                                </div>
                                <textarea class="form-control text-area-max-min" placeholder="{{translate('please_write_the_approve_reason').'...'}}" name="approved_note" rows="3"></textarea>
                                <div class="d-flex flex-wrap justify-content-end gap-3 mt-3">
                                    <button type="button" class="btn btn-secondary px-3" data-dismiss="modal">{{ translate('close') }}</button>
                                    <button type="button" class="btn btn--primary form-submit" data-form-id="submit-approve-form" data-message="{{translate('want_to_approv_this_refund_request').'?'}}" data-redirect-route="{{route('vendor.refund.index',['status'=>$refund['status']])}}">{{ translate('submit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    @endif
@endsection
@push('script_2')
    <script src="{{dynamicAsset(path: 'public/assets/back-end/js/vendor/refund.js')}}"></script>
=======
                                            <img src="{{getValidImage(path: 'storage/app/public/refund/'.$photo,type:'backend-basic')}}" alt="">
                                        </a>
                                    @endforeach
                                </div>
                            @else
                                <p>{{translate('no_attachment_found')}}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="refund-status" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{translate('change_refund_status')}}</h5>
                    <button id="payment_close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('vendor.refund.update-status')}}" id='order_place' method="post"
                          class="row">
                        @csrf
                        <input type="hidden" name="id" value="{{$refund->id}}">
                        <div class="form-group col-12">
                            <label class="input-label" for="">{{translate('refund_status')}}</label>
                            <select name="refund_status" class="form-control" id="refund_status_change">
                                <option
                                    value="pending" {{$refund['status']=='pending'?'selected':''}}>
                                    {{ translate('pending')}}
                                </option>
                                {{-- @if ($refund->change_by !='admin') --}}
                                <option
                                    value="approved" {{$refund['status']=='approved'?'selected':''}}>
                                    {{ translate("approved")}}
                                </option>

                                <option
                                    value="rejected" {{$refund['status']=='rejected'?'selected':''}}>
                                    {{ translate("rejected")}}
                                </option>
                                {{-- @endif --}}
                            </select>
                        </div>
                        <div class="form-group col-12" id="approved">
                            <label class="input-label" for="">{{translate('approved_note')}}</label>
                            <input type="text" class="form-control" id="approved_note" name="approved_note">
                        </div>
                        <div class="form-group col-12" id="rejected">
                            <label class="input-label" for="">{{translate('rejected_note')}}</label>
                            <input type="text" class="form-control" id="rejected_note" name="rejected_note">
                        </div>
                        <div class="form-group col-12 d-flex justify-content-end">
                            <button class="btn btn--primary" type="submit">{{translate('submit')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script_2')
    <script src="{{asset('public/assets/back-end/js/vendor/refund.js')}}"></script>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
@endpush
