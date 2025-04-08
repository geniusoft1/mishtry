<div class="card-header">
    <h4 class="d-flex align-items-center text-capitalize gap-10 mb-0">
<<<<<<< HEAD
        <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/most-popular-product.png')}}" alt="">
        {{translate('most_Popular_Products')}}
=======
        <img width="20" src="{{asset('public/assets/back-end/img/featured_deal.png')}}" alt="">
        {{translate('most_Rated_Products')}}
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    </h4>
</div>

<div class="card-body">
    @if($mostRatedProducts)
        <div class="row">
            <div class="col-12">
                <div class="grid-card-wrap">
                    @foreach($mostRatedProducts as $key => $product)
                        @if(isset($product['id']))
                            <div class="cursor-pointer grid-card basic-box-shadow get-view-by-onclick"
<<<<<<< HEAD
                                 data-link="{{ route('admin.products.view',['addedBy'=>$product['added_by'],'id'=>$product['id']]) }}">
=======
                                 data-link="{{ route('admin.products.view',['id'=>$product['id']]) }}">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                <div>
                                    <img class="avatar avatar-bordered border-gold avatar-60 rounded"
                                         src="{{ getValidImage(path: 'storage/app/public/product/thumbnail/'.$product['thumbnail'], type: 'backend-product') }}"
                                         alt="{{$product->name}}{{translate('image')}}">
                                </div>
                                <div class="fz-12 title-color text-center">
                                    {{isset($product['name']) ? substr($product->name, 0, 30) . (strlen($product->name)>20?'...':''):'not exists'}}
                                </div>
                                <div class="d-flex align-items-center gap-1 fz-10">
                                    <span class="rating-color d-flex align-items-center font-weight-bold gap-1">
                                        <i class="tio-star"></i>
                                        {{round($product['ratings_average'],2)}}
                                    </span>
                                    <span class="d-flex align-items-center gap-10">
                                        ({{$product['reviews_count']}} {{translate('reviews')}})
                                    </span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
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
