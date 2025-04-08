@extends('layouts.front-end.app')

@section('title',translate('shop_Page'))

@push('css_or_js')
    @if($shop['id'] != 0)
<<<<<<< HEAD
        <meta property="og:image" content="{{dynamicStorage(path: 'storage/app/public/shop')}}/{{$shop->image}}"/>
        <meta property="og:title" content="{{ $shop->name}} "/>
        <meta property="og:url" content="{{route('shopView',[$shop['id']])}}">
    @else
        <meta property="og:image" content="{{dynamicStorage(path: 'storage/app/public/company')}}/{{$web_config['fav_icon']->value}}"/>
=======
        <meta property="og:image" content="{{asset('storage/app/public/shop')}}/{{$shop->image}}"/>
        <meta property="og:title" content="{{ $shop->name}} "/>
        <meta property="og:url" content="{{route('shopView',[$shop['id']])}}">
    @else
        <meta property="og:image" content="{{asset('storage/app/public/company')}}/{{$web_config['fav_icon']->value}}"/>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        <meta property="og:title" content="{{ $shop['name']}} "/>
        <meta property="og:url" content="{{route('shopView',[$shop['id']])}}">
    @endif

    @if($shop['id'] != 0)
<<<<<<< HEAD
        <meta property="twitter:card" content="{{dynamicStorage(path: 'storage/app/public/shop')}}/{{$shop->image}}"/>
        <meta property="twitter:title" content="{{route('shopView',[$shop['id']])}}"/>
        <meta property="twitter:url" content="{{route('shopView',[$shop['id']])}}">
    @else
        <meta property="twitter:card" content="{{dynamicStorage(path: 'storage/app/public/company')}}/{{$web_config['fav_icon']->value}}"/>
=======
        <meta property="twitter:card" content="{{asset('storage/app/public/shop')}}/{{$shop->image}}"/>
        <meta property="twitter:title" content="{{route('shopView',[$shop['id']])}}"/>
        <meta property="twitter:url" content="{{route('shopView',[$shop['id']])}}">
    @else
        <meta property="twitter:card" content="{{asset('storage/app/public/company')}}/{{$web_config['fav_icon']->value}}"/>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        <meta property="twitter:title" content="{{route('shopView',[$shop['id']])}}"/>
        <meta property="twitter:url" content="{{route('shopView',[$shop['id']])}}">
    @endif

    <meta property="og:description" content="{{ substr(strip_tags(str_replace('&nbsp;', ' ', $web_config['about']->value)),0,160) }}">
    <meta property="twitter:description" content="{{ substr(strip_tags(str_replace('&nbsp;', ' ', $web_config['about']->value)),0,160) }}">
@endpush

@section('content')

    @php($decimalPointSettings = getWebConfig(name: 'decimal_point_settings'))

    <div class="container py-4 __inline-67">
        <div class="rtl">
            <div class="bg-white __shop-banner-main">
                @if($shop['id'] != 0)
                    <img class="__shop-page-banner" alt=""
                         src="{{ getValidImage(path: 'storage/app/public/shop/banner/'.$shop->banner, type: 'wide-banner') }}">
                @else
                    @php($banner=getWebConfig(name: 'shop_banner'))
                    <img class="__shop-page-banner" alt=""
                         src="{{ getValidImage(path: 'storage/app/public/shop/'.($banner ?? 'banner'), type: 'wide-banner') }}">
                @endif
<<<<<<< HEAD
                @include('web-views.seller-view.shop-info-card', ['displayClass' => 'd-none d-md-block max-width-500px'])

            </div>
        </div>

        @include('web-views.seller-view.shop-info-card', ['displayClass' => 'd-md-none border mt-3'])

        <div class="d-flex flex-wrap gap-3 justify-content-sm-between py-4 web-direction">
            <div class="d-flex flex-wrap justify-content-between align-items-center w-max-md-100 me-auto gap-3">
                <h3 class="widget-title align-self-center font-bold fs-16 my-0">{{translate('categories')}}</h3>
=======
                <div class="position-relative z-index-99 rtl w-100 text-align-direction">
                    <div class="__rounded-10 bg-white position-relative">
                        <div class="d-flex flex-wrap justify-content-between seller-details">
                            <div class="d-flex align-items-center p-2 flex-grow-1">
                                <div class="">
                                    @if($shop['id'] != 0)
                                        <div class="position-relative">
                                            @if($seller_temporary_close || $inhouse_temporary_close)
                                                <span class="temporary-closed-details">
                                                    <span>{{translate('closed_now')}}</span>
                                                </span>
                                            @elseif(($seller_id==0 && $inHouseVacationStatus && $current_date >= $inhouse_vacation_start_date && $current_date <= $inhouse_vacation_end_date) ||
                                            $seller_id!=0 && $seller_vacation_status && $current_date >= $seller_vacation_start_date && $current_date <= $seller_vacation_end_date)
                                                <span class="temporary-closed-details">
                                                    <span>{{translate('closed_now')}}</span>
                                                </span>
                                            @endif
                                            <img class="__inline-68" alt=""
                                                 src="{{ getValidImage(path: 'storage/app/public/shop/'.$shop->image, type: 'shop') }}">
                                        </div>
                                    @else
                                        <div class="position-relative">
                                            @if($seller_temporary_close || $inhouse_temporary_close)
                                                <span class="temporary-closed-details">
                                                    <span>{{translate('closed_now')}}</span>
                                                </span>
                                            @elseif(($seller_id==0 && $inHouseVacationStatus && $current_date >= $inhouse_vacation_start_date && $current_date <= $inhouse_vacation_end_date) ||
                                            $seller_id!=0 && $seller_vacation_status && $current_date >= $seller_vacation_start_date && $current_date <= $seller_vacation_end_date)
                                                <span class="temporary-closed-details">
                                                    <span>{{translate('closed_now')}}</span>
                                                </span>
                                            @endif
                                            <img class="__inline-68" alt=""
                                                 src="{{ getValidImage(path: 'storage/app/public/company/'.$web_config['fav_icon']->value, type: 'logo') }}">
                                        </div>
                                    @endif
                                </div>
                                <div class="__w-100px flex-grow-1 {{Session::get('direction') === "rtl" ? ' pr-2 pr-sm-4' : ' pl-2 pl-sm-4'}}">
                                    <span class="font-weight-bold ">
                                        @if($shop['id'] != 0)
                                            {{ $shop->name}}
                                        @else
                                            {{ $web_config['name']->value }}
                                        @endif
                                    </span>
                                    <div class="">
                                        <div class="d-flex flex-wrap __text-12px py-1 fw-bold web-text-primary">
                                            <span class="text-nowrap">{{ $total_review}} {{translate('reviews')}} </span>

                                            <span class="__inline-69"></span>

                                            <span class="text-nowrap">{{ $total_order}} {{translate('orders')}}</span>
                                            @php($minimum_order_amount_status=getWebConfig(name: 'minimum_order_amount_status'))
                                            @php($minimum_order_amount_by_seller=getWebConfig(name: 'minimum_order_amount_by_seller'))
                                            @if ($minimum_order_amount_status ==1 && $minimum_order_amount_by_seller ==1)
                                                <span class="__inline-69"></span>
                                                @if($shop['id'] == 0)
                                                    @php($minimum_order_amount=getWebConfig(name: 'minimum_order_amount'))
                                                    <span>{{ webCurrencyConverter(amount: $minimum_order_amount) }} {{translate('minimum_order_amount')}}</span>
                                                @else
                                                    <span>{{ webCurrencyConverter(amount: $shop->seller->minimum_order_amount) }} {{translate('minimum_order_amount')}}</span>
                                                @endif
                                            @endif
                                        </div>
                                        <div>
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <=$avg_rating)
                                                    <i class="tio-star text-warning"></i>
                                                @elseif ($avg_rating != 0 && $i <= (int)$avg_rating + 1 && $avg_rating>=((int)$avg_rating+.30))
                                                    <i class="tio-star-half text-warning"></i>
                                                @else
                                                    <i class="tio-star-outlined text-warning"></i>
                                                @endif
                                            @endfor
                                            <span class="ml-1">({{ round($avg_rating,1) }})</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="{{Session::get('direction') === "rtl" ? 'ml-sm-4' : 'mr-sm-4'}}">
                                    @if($seller_id!=0)
                                        @if (auth('customer')->check())
                                            <div class="d-flex">
                                                <button class="btn btn--primary __inline-70 rounded-10  text-capitalize chat-with-seller-button d-none d-sm-inline-block" data-toggle="modal"
                                                        data-target="#exampleModal" {{ ($shop->temporary_close || ($shop->vacation_status && date('Y-m-d') >= date('Y-m-d', strtotime($shop->vacation_start_date)) && date('Y-m-d') <= date('Y-m-d', strtotime($shop->vacation_end_date)))) ? 'disabled' : '' }}>
                                                    <img src="{{asset('/public/assets/front-end/img/shopview-chat.png')}}" loading="eager" class="" alt="">
                                                    <span class="d-none d-sm-inline-block">
                                                        {{translate('chat_with_vendor')}}
                                                    </span>
                                                </button>

                                                <button class="btn bg-transparent border-0 __inline-70 rounded-10  text-capitalize chat-with-seller-button d-sm-inline-block d-md-none" data-toggle="modal"
                                                        data-target="#exampleModal" {{ ($shop->temporary_close || ($shop->vacation_status && date('Y-m-d') >= date('Y-m-d', strtotime($shop->vacation_start_date)) && date('Y-m-d') <= date('Y-m-d', strtotime($shop->vacation_end_date)))) ? 'disabled' : '' }}>
                                                    <img src="{{asset('/public/assets/front-end/img/icons/shopview-chat-blue.svg')}}" loading="eager" class="" alt="">
                                                </button>
                                            </div>
                                        @else
                                            <div class="d-flex">
                                                <a href="{{route('customer.auth.login')}}"
                                                class="btn btn--primary __inline-70 rounded-10  text-capitalize chat-with-seller-button">
                                                    <img src="{{asset('/public/assets/front-end/img/shopview-chat.png')}}" loading="eager" class="" alt="">
                                                    <span class="d-none d-sm-inline-block">
                                                        {{translate('chat_with_vendor')}}
                                                    </span>
                                                </a>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap gap-3 justify-content-sm-between py-4 web-direction">
            <div class="d-flex flex-wrap justify-content-between align-items-center w-max-md-100 me-auto gap-3">
                <h3 class="widget-title align-self-center font-bold __text-18px my-0">{{translate('categories')}}</h3>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                <div class="filter-ico-button btn btn--primary p-2 m-0 d-lg-none d-flex align-items-center">
                    <i class="tio-filter"></i>
                </div>
            </div>
            <div class="d-flex flex-column flex-sm-row gap-3">
                <form>
                    <div class="sorting-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <path d="M11.6667 7.80078L14.1667 5.30078L16.6667 7.80078" stroke="#D9D9D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.91675 4.46875H4.58341C4.3533 4.46875 4.16675 4.6553 4.16675 4.88542V8.21875C4.16675 8.44887 4.3533 8.63542 4.58341 8.63542H7.91675C8.14687 8.63542 8.33341 8.44887 8.33341 8.21875V4.88542C8.33341 4.6553 8.14687 4.46875 7.91675 4.46875Z" stroke="#D9D9D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.91675 11.9688H4.58341C4.3533 11.9688 4.16675 12.1553 4.16675 12.3854V15.7188C4.16675 15.9489 4.3533 16.1354 4.58341 16.1354H7.91675C8.14687 16.1354 8.33341 15.9489 8.33341 15.7188V12.3854C8.33341 12.1553 8.14687 11.9688 7.91675 11.9688Z" stroke="#D9D9D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.1667 5.30078V15.3008" stroke="#D9D9D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <label class="for-sorting" for="sorting">
                            <span class="text-nowrap">{{translate('sort_by')}}</span>
                        </label>
                        <select class="action-sort-shop-products-by-data">
                            <option value="latest">{{translate('latest')}}</option>
                            <option
                                value="low-high">{{translate('low_to_High_Price')}} </option>
                            <option
                                value="high-low">{{translate('high_to_Low_Price')}}</option>
                            <option
                                value="a-z">{{translate('A_to_Z_Order')}}</option>
                            <option
                                value="z-a">{{translate('Z_to_A_Order')}}</option>
                        </select>
                    </div>
                </form>

                <form method="get" action="{{route('shopView',['id'=>$seller_id])}}">
                    <div class="search_form input-group search-form-input-group">
                        <input type="hidden" name="category_id" value="{{request('category_id')}}" >
                        <input type="hidden" name="sub_category_id" value="{{request('sub_category_id')}}" >
                        <input type="hidden" name="sub_sub_category_id" value="{{request('sub_sub_category_id')}}" >
<<<<<<< HEAD
                        <input type="search" class="form-control rounded-left text-align-direction" name="product_name" value="{{request('product_name')}}" placeholder="{{translate('search_products_from_this_store')}}">
=======
                        <input type="text" class="form-control rounded-left text-align-direction" name="product_name" value="{{request('product_name')}}" placeholder="{{translate('search_products_from_this_store')}}">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                        <button type="submit" class="btn--primary btn">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

<<<<<<< HEAD
=======

>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        <div class="row rtl">
            <div class="col-lg-3 mr-0 pe-4">
                <aside class="SearchParameters" id="SearchParameters">

                    <div class="__shop-page-sidebar">
                        <div class="cz-sidebar-header">
                            <button class="shop-page-sidebar-close close ms-auto" type="button" data-dismiss="sidebar" aria-label="Close">
                                <i class="tio-clear"></i>
                            </button>
                        </div>
                        <div class="accordion __cate-side-arrordion">
                            @foreach($categories as $category)
                                <div class="menu--caret-accordion">

<<<<<<< HEAD
                                    <div class="card-header flex-between">
                                        <div>
                                            <label class="for-hover-label cursor-pointer get-view-by-onclick"
                                                   data-link="{{route('shopView',['id'=> $seller_id,'category_id'=>$category['id']])}}">
                                                {{$category['name']}}
                                            </label>
                                        </div>
                                        <div class="px-2 cursor-pointer menu--caret">
                                            <strong class="pull-right for-brand-hover">
                                                @if($category->childes->count()>0)
                                                    <i class="tio-next-ui fs-13"></i>
                                                @endif
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 ms-2 d--none"
                                         id="collapse-{{$category['id']}}">
                                        @foreach($category->childes as $child)
                                            <div class="menu--caret-accordion">
                                                <div class="for-hover-label card-header flex-between">
                                                    <div>
                                                        <label class="cursor-pointer get-view-by-onclick" data-link="{{ route('shopView',['id'=> $seller_id,'sub_category_id'=>$child['id']]) }}">
                                                            {{$child['name']}}
                                                        </label>
                                                    </div>
                                                    <div class="px-2 cursor-pointer menu--caret">
                                                        <strong class="pull-right">
                                                            @if($child->childes->count()>0)
                                                                <i class="tio-next-ui fs-13"></i>
                                                            @endif
                                                        </strong>
                                                    </div>
                                                </div>
                                                <div class="card-body p-0 ms-2 d--none"
                                                     id="collapse-{{$child['id']}}">
                                                    @foreach($child->childes as $ch)
                                                        <div class="card-header">
                                                            <label class="for-hover-label d-block cursor-pointer text-left get-view-by-onclick"
                                                                   data-link="{{ route('shopView',['id'=> $seller_id,'sub_sub_category_id'=>$ch['id']])}}">
                                                                {{$ch['name']}}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
=======
                                <div class="card-header flex-between">
                                    <div>
                                        <label class="for-hover-label cursor-pointer get-view-by-onclick"
                                        data-link="{{route('shopView',['id'=> $seller_id,'category_id'=>$category['id']])}}">
                                            {{$category['name']}}
                                        </label>
                                    </div>
                                    <div class="px-2 cursor-pointer menu--caret">
                                        <strong class="pull-right for-brand-hover">
                                            @if($category->childes->count()>0)
                                                <i class="tio-next-ui fs-13"></i>
                                            @endif
                                        </strong>
                                    </div>
                                </div>
                                <div class="card-body p-0 ms-2 d--none"
                                        id="collapse-{{$category['id']}}">
                                    @foreach($category->childes as $child)
                                        <div class="menu--caret-accordion">
                                            <div class="for-hover-label card-header flex-between">
                                                <div>
                                                    <label class="cursor-pointer get-view-by-onclick" data-link="{{ route('shopView',['id'=> $seller_id,'sub_category_id'=>$child['id']]) }}">
                                                        {{$child['name']}}
                                                    </label>
                                                </div>
                                                <div class="px-2 cursor-pointer menu--caret">
                                                    <strong class="pull-right">
                                                        @if($child->childes->count()>0)
                                                            <i class="tio-next-ui fs-13"></i>
                                                        @endif
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 ms-2 d--none"
                                                id="collapse-{{$child['id']}}">
                                                @foreach($child->childes as $ch)
                                                    <div class="card-header">
                                                        <label class="for-hover-label d-block cursor-pointer text-left get-view-by-onclick"
                                                        data-link="{{ route('shopView',['id'=> $seller_id,'sub_sub_category_id'=>$ch['id']])}}">
                                                            {{$ch['name']}}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                </div>
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>

            <div class="col-lg-9 product-div">
<<<<<<< HEAD
=======

>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                @if (count($products) > 0)
                    <div class="row g-3" id="ajax-products">
                        @include('web-views.products._ajax-products',['products'=>$products,'decimal_point_settings' => $decimalPointSettings])
                    </div>
                @else
<<<<<<< HEAD
                    <div class="d-flex justify-content-center align-items-center w-100 py-5 my-2">
                        <div>
                            <img src="{{ theme_asset(path: 'public/assets/front-end/img/media/product.svg') }}" class="img-fluid" alt="">
                            <h6 class="text-muted text-capitalize">{{ translate('no_product_found') }}</h6>
                        </div>
                    </div>
                @endif
            </div>
        </div>

=======
                    <div class="text-center pt-5 text-capitalize">
                        <img src="{{asset('public/assets/front-end/img/icons/product.svg')}}" alt="">
                        <h5>{{translate('no_product_found')}}!</h5>
                    </div>
                @endif

            </div>
        </div>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    </div>

    <span id="shop-sort-by-filter-url" data-url="{{url('/')}}/shopView/{{$shop['id']}}"></span>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-faded-info">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{translate('Send_Message_to_vendor')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('messages_store')}}" method="post" id="shop-view-chat-form">
                        @csrf
<<<<<<< HEAD
                        <input value="{{$shop['id']}}" name="shop_id" hidden>
                        @if($shop['id'] != 0)
                            <input value="{{$shop->seller_id}}}" name="seller_id" hidden>
                        @endif

                        <textarea name="message" class="form-control min-height-100px max-height-200px" required placeholder="{{ translate('Write_here') }}..."></textarea>
=======
                        @if($shop['id'] != 0)
                            <input value="{{$shop->id}}" name="shop_id" hidden>
                            <input value="{{$shop->seller_id}}}" name="seller_id" hidden>
                        @endif

                        <textarea name="message" class="form-control" required placeholder="{{ translate('Write_here') }}..."></textarea>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                        <br>

                        <div class="justify-content-end gap-2 d-flex flex-wrap">
                            <a href="{{route('chat', ['type' => 'seller'])}}" class="btn btn-soft-primary bg--secondary border">
                                {{translate('go_to_chatbox')}}
                            </a>
<<<<<<< HEAD
                            <button class="btn btn--primary text-white">
                                {{translate('send')}}
                            </button>
=======
                            @if($shop['id'] != 0)
                                <button class="btn btn--primary text-white">
                                    {{translate('send')}}
                                </button>
                            @else
                                <button class="btn btn--primary text-white" disabled>
                                    {{translate('send')}}
                                </button>
                            @endif
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <span id="store-request-data-product-name" data-value="{{ request('product_name') }}"></span>
    <span id="store-request-data-category-id" data-value="{{ request('category_id') }}"></span>
    <span id="store-request-data-sub-category-id" data-value="{{ request('sub_category_id') }}"></span>
    <span id="store-request-data-sub-sub-category-id" data-value="{{ request('sub_sub_category_id') }}"></span>

@endsection
