<div class="card-header gap-10">
    <h4 class="d-flex align-items-center text-capitalize gap-10 mb-0">
<<<<<<< HEAD
        <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/shop-info.png')}}" alt="">
=======
        <img width="20" src="{{asset('/public/assets/back-end/img/shop-info.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        {{translate('top_selling_store')}}
    </h4>
</div>

<div class="card-body">
    <div class="grid-item-wrap">
        @if($topVendorByEarning)
            @foreach($topVendorByEarning as $key=> $vendor)
                @if(isset($vendor->seller->shop))
                    <div class="cursor-pointer get-view-by-onclick"
                         data-link="{{ route('admin.sellers.view', $vendor['seller_id'])}}">
                        <div class="grid-item basic-box-shadow">
                            <div class="d-flex align-items-center gap-10">
                                <img class="avatar rounded-circle avatar-sm" alt=""
                                     src="{{getValidImage(path: 'storage/app/public/shop/'.$vendor->seller->shop['image'] ?? '',type:'backend-basic')}}">

                                <h5 class="shop-name">{{ $vendor->seller->shop['name'] ?? 'Not exist' }}</h5>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <h5 class="shop-sell">
                                    {{ setCurrencySymbol(amount: currencyConverter(amount: $vendor['total_earning'])) }}
                                </h5>
<<<<<<< HEAD
                                <img src="{{dynamicAsset(path: 'public/assets/back-end/img/cart2.png')}}" alt="">
=======
                                <img src="{{asset('/public/assets/back-end/img/cart.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @else
            <div class="text-center">
                <p class="text-muted">{{translate('no_Top_Selling_Products')}}</p>
<<<<<<< HEAD
                <img class="w-75" src="{{dynamicAsset(path: 'public/assets/back-end/img/no-data.png')}}" alt="">
=======
                <img class="w-75" src="{{asset('/public/assets/back-end/img/no-data.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            </div>
        @endif
    </div>
</div>
