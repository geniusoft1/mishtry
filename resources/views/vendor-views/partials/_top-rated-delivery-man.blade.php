<<<<<<< HEAD

<div class="card-header">
    <h4 class="d-flex align-items-center text-capitalize gap-10 mb-0">
        <img src="{{dynamicAsset(path: 'public/assets/back-end/img/top-customers.png')}}" alt="">
=======
<div class="card-header">
    <h4 class="d-flex align-items-center text-capitalize gap-10 mb-0">
        <img src="{{asset('public/assets/back-end/img/top-customers.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        {{translate('top_Delivery_Man')}}
    </h4>
</div>

<div class="card-body">
    @if($topRatedDeliveryMan)
        <div class="grid-card-wrap">
<<<<<<< HEAD
            @foreach($topRatedDeliveryMan as $key=> $deliveryMan)
                @if(isset($deliveryMan['id']))
                    <div class="cursor-pointer get-view-by-onclick" data-link="{{ route('vendor.delivery-man.wallet.index', ['id' => $deliveryMan['id']]) }}">
                        <div class="grid-card basic-box-shadow">
                            <div class="text-center">
                                <img class="avatar rounded-circle avatar-lg get-view-by-onclick" alt=""
                                     src="{{ getValidImage(path: 'storage/app/public/delivery-man/'.$deliveryMan['image']??'',type:'backend-profile') }}"
                                     data-link="{{ route('admin.delivery-man.earning-statement-overview',[$deliveryMan['id']]) }}">
                            </div>
                            <h5 class="mb-0 get-view-by-onclick" data-link="{{ route('admin.delivery-man.earning-statement-overview',[$deliveryMan['id']]) }}">
                                {{Str::limit($deliveryMan['f_name'].' '.$deliveryMan['l_name'], 25)}}
                            </h5>
                            <div class="orders-count d-flex gap-1">
                                <div>{{translate('order_delivered')}} :</div>
                                <div>{{$deliveryMan['delivered_orders_count']}}</div>
                            </div>
                        </div>
                    </div>
                @endif
=======
            @foreach($topRatedDeliveryMan as $key=>$deliveryMan)
                    <div class="cursor-pointer" onclick="location.href='{{ route('vendor.delivery-man.wallet.index', ['id' => $deliveryMan['id']]) }}'">
                        <div class="grid-card basic-box-shadow">
                            <div class="text-center">
                                <img class="avatar rounded-circle avatar-lg get-view-by-onclick" alt=""
                                     data-link="{{route('vendor.delivery-man.wallet.earning',[$deliveryMan['id']])}}"
                                     src="{{ getValidImage(path: 'storage/app/public/delivery-man/'.$deliveryMan->image ?? 'delivery-man',type:'backend-profile') }}"
                                >
                            </div>
                            <h5 class="mb-0">
                                {{Str::limit($deliveryMan['f_name'], 15)}}
                            </h5>
                            <div class="orders-count d-flex gap-1">
                                <div>{{translate('delivered')}} : </div>
                                <div>{{$deliveryMan['orders_count']}}</div>
                            </div>
                        </div>
                    </div>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            @endforeach
        </div>
    @else
        <div class="text-center">
<<<<<<< HEAD
            <p class="text-muted">{{translate('no_data_found').'!'}}</p>
            <img class="w-75" src="{{dynamicAsset(path: 'public/assets/back-end/img/no-data.png')}}" alt="">
=======
            <p class="text-muted">{{translate('no_Top_Selling_Products')}}</p>
            <img class="w-75" src="{{asset('/public/assets/back-end/img/no-data.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        </div>
    @endif
</div>
