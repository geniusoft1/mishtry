<div class="card-header gap-10">
    <h4 class="d-flex align-items-center text-capitalize gap-10 mb-0">
<<<<<<< HEAD
        <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/top-selling-product-icon.png')}}" alt="">
=======
        <img width="20" src="{{asset('public/assets/back-end/img/top-selling-product.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        {{translate('top_selling_products')}}
    </h4>
</div>

<div class="card-body">
    <div class="grid-item-wrap">
        @if(isset($topSellProduct))
            @foreach($topSellProduct as $key => $product)
                @if(isset($product['id']))
                    <div class="cursor-pointer get-view-by-onclick"
<<<<<<< HEAD
                         data-link="{{ route('admin.products.view',['addedBy'=>$product['added_by'],'id'=>$product['id']]) }}">
=======
                         data-link="{{ route('admin.products.view',[$product['id']]) }}">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                        <div class="grid-item bg-transparent basic-box-shadow">
                            <div class="d-flex gap-10 align-items-center">
                                <img
                                    src="{{ getValidImage(path: 'storage/app/public/product/thumbnail/'. $product['thumbnail'], type: 'backend-product') }}"
                                     class="avatar avatar-lg rounded avatar-bordered"
<<<<<<< HEAD
                                     alt="{{ $product['name'].'_'.translate('image') }}">
=======
                                     alt="{{ $product['name'] }} image">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                <div
                                    class="title-color">{{substr($product['name'],0,20)}} {{strlen($product['name'])>20?'...':''}}</div>
                            </div>

                            <div class="orders-count py-2 px-3 d-flex gap-1">
                                <div>{{translate('sold')}} :</div>
                                <div class="sold-count">{{$product['order_details_count']}}</div>
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
                <img class="w-75" src="{{asset('public/assets/back-end/img/no-data.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            </div>
        @endif
    </div>
</div>
