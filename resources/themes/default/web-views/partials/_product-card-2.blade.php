@if(isset($product))
    @php($overallRating = getOverallRating($product->reviews))
<<<<<<< HEAD
    <div class="flash_deal_product get-view-by-onclick" data-link="{{ route('product',$product->slug) }}">
        @if($product->discount > 0)
            <span class="for-discount-value p-1 pl-2 pr-2 font-bold fs-13">
                <span class="direction-ltr d-block">
                    @if ($product->discount_type == 'percent')
                        -{{round($product->discount,(!empty($decimal_point_settings) ? $decimal_point_settings: 0))}}%
                    @elseif($product->discount_type =='flat')
                        -{{ webCurrencyConverter(amount: $product->discount) }}
                    @endif
                </span>
            </span>
=======
    <div class="flash_deal_product rtl get-view-by-onclick" data-link="{{ route('product',$product->slug) }}">
        @if($product->discount > 0)
            <span class="for-discount-value p-1 pl-2 pr-2">
            @if ($product->discount_type == 'percent')
                    {{round($product->discount,(!empty($decimal_point_settings) ? $decimal_point_settings: 0))}}%
                @elseif($product->discount_type =='flat')
                    {{ webCurrencyConverter(amount: $product->discount) }}
                @endif {{translate('off')}}
        </span>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        @endif
        <div class=" d-flex">
            <div class="d-flex align-items-center justify-content-center p-12px">
                <div class="flash-deals-background-image">
<<<<<<< HEAD
                    <img class="__img-125px" alt="" src="{{ getValidImage(path: 'storage/app/public/product/thumbnail/'.$product['thumbnail'], type: 'product') }}">
=======
                    <img class="__img-125px" alt=""
                         src="{{ getValidImage(path: 'storage/app/public/product/thumbnail/'.$product['thumbnail'], type: 'product') }}">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                </div>
            </div>
            <div class="flash_deal_product_details pl-3 pr-3 pr-1 d-flex mt-3">
                <div>
                    <div>
                        <a href="{{route('product',$product->slug)}}"
                           class="flash-product-title text-capitalize fw-semibold">
<<<<<<< HEAD
                            {{ Str::limit($product['name'], 80) }}
=======
                            {{ Str::limit($product['name'], 23) }}
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                        </a>
                    </div>
                    @if($overallRating[0] != 0 )
                        <div class="flash-product-review">
                            @for($inc=1;$inc<=5;$inc++)
                                @if ($inc <= (int)$overallRating[0])
                                    <i class="tio-star text-warning"></i>
                                @elseif ($overallRating[0] != 0 && $inc <= (int)$overallRating[0] + 1.1 && $overallRating[0] > ((int)$overallRating[0]))
                                    <i class="tio-star-half text-warning"></i>
                                @else
                                    <i class="tio-star-outlined text-warning"></i>
                                @endif
                            @endfor
                            <label class="badge-style2">
<<<<<<< HEAD
                                ( {{ count($product->reviews) }} )
=======
                                ( {{$product->reviews->count()}} )
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                            </label>
                        </div>
                    @endif
                    <div class="d-flex flex-wrap gap-8 align-items-center row-gap-0">
                        @if($product->discount > 0)
                            <del class="category-single-product-price">
                                {{ webCurrencyConverter(amount: $product->unit_price) }}
                            </del>
                        @endif
                        <span class="flash-product-price text-dark fw-semibold">
                            {{ webCurrencyConverter(amount: $product->unit_price - getProductDiscount(product: $product, price: $product->unit_price)) }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
