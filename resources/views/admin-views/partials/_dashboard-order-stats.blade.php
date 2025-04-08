<div class="col-sm-6 col-lg-3">
    <div class="business-analytics">
        <h5 class="business-analytics__subtitle">{{translate('total_Sale')}}</h5>
        <h2 class="business-analytics__title">{{ $data['total_sale'] }}</h2>
<<<<<<< HEAD
        <img src="{{dynamicAsset(path: 'public/assets/back-end/img/total-sale.png')}}" class="business-analytics__img" alt="">
=======
        <img src="{{asset('/public/assets/back-end/img/total-sale.png')}}" class="business-analytics__img" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="business-analytics">
        <h5 class="business-analytics__subtitle">{{translate('total_Stores')}}</h5>
        <h2 class="business-analytics__title">{{ $data['store'] }}</h2>
<<<<<<< HEAD
        <img src="{{dynamicAsset(path: 'public/assets/back-end/img/total-stores.png')}}" class="business-analytics__img" alt="">
=======
        <img src="{{asset('/public/assets/back-end/img/total-stores.png')}}" class="business-analytics__img" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="business-analytics">
        <h5 class="business-analytics__subtitle">{{translate('total_Products')}}</h5>
        <h2 class="business-analytics__title">{{ $data['product'] }}</h2>
<<<<<<< HEAD
        <img src="{{dynamicAsset(path: 'public/assets/back-end/img/total-product.png')}}" class="business-analytics__img" alt="">
=======
        <img src="{{asset('/public/assets/back-end/img/total-product.png')}}" class="business-analytics__img" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="business-analytics">
        <h5 class="business-analytics__subtitle">{{translate('total_Customers')}}</h5>
        <h2 class="business-analytics__title">{{ $data['customer'] }}</h2>
<<<<<<< HEAD
        <img src="{{dynamicAsset(path: 'public/assets/back-end/img/total-customer.png')}}" class="business-analytics__img" alt="">
=======
        <img src="{{asset('/public/assets/back-end/img/total-customer.png')}}" class="business-analytics__img" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    </div>
</div>


<div class="col-sm-6 col-lg-3">
    <a class="order-stats order-stats_pending" href="{{route('admin.orders.list',['pending'])}}">
        <div class="order-stats__content">
<<<<<<< HEAD
            <img width="20" src="{{dynamicAsset(path: '/public/assets/back-end/img/pending.png')}}" alt="">
=======
            <img width="20" src="{{asset('/public/assets/back-end/img/pending.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            <h6 class="order-stats__subtitle">{{translate('pending')}}</h6>
        </div>
        <span class="order-stats__title">
            {{$data['pending']}}
        </span>
    </a>
</div>

<div class="col-sm-6 col-lg-3">
    <a class="order-stats order-stats_confirmed" href="{{route('admin.orders.list',['confirmed'])}}">
        <div class="order-stats__content">
<<<<<<< HEAD
            <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/confirmed.png')}}" alt="">
=======
            <img width="20" src="{{asset('/public/assets/back-end/img/confirmed.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            <h6 class="order-stats__subtitle">{{translate('confirmed')}}</h6>
        </div>
        <span class="order-stats__title">
            {{$data['confirmed']}}
        </span>
    </a>
</div>

<div class="col-sm-6 col-lg-3">
    <a class="order-stats order-stats_packaging" href="{{route('admin.orders.list',['processing'])}}">
        <div class="order-stats__content">
<<<<<<< HEAD
            <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/packaging.png')}}" alt="">
=======
            <img width="20" src="{{asset('/public/assets/back-end/img/packaging.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            <h6 class="order-stats__subtitle">{{translate('packaging')}}</h6>
        </div>
        <span class="order-stats__title">
            {{$data['processing']}}
        </span>
    </a>
</div>

<div class="col-sm-6 col-lg-3">
    <a class="order-stats order-stats_out-for-delivery" href="{{route('admin.orders.list',['out_for_delivery'])}}">
        <div class="order-stats__content">
<<<<<<< HEAD
            <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/out-of-delivery.png')}}" alt="">
=======
            <img width="20" src="{{asset('/public/assets/back-end/img/out-of-delivery.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            <h6 class="order-stats__subtitle">{{translate('out_for_delivery')}}</h6>
        </div>
        <span class="order-stats__title">
            {{$data['out_for_delivery']}}
        </span>
    </a>
</div>



<div class="col-sm-6 col-lg-3">
    <div class="order-stats order-stats_delivered cursor-pointer" onclick="location.href='{{route('admin.orders.list',['delivered'])}}'">
        <div class="order-stats__content">
<<<<<<< HEAD
            <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/delivered.png')}}" alt="">
=======
            <img width="20" src="{{asset('/public/assets/back-end/img/delivered.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            <h6 class="order-stats__subtitle">{{translate('delivered')}}</h6>
        </div>
        <span class="order-stats__title">{{$data['delivered']}}</span>
    </div>
</div>

<div class="col-sm-6 col-lg-3">
    <div class="order-stats order-stats_canceled cursor-pointer" onclick="location.href='{{route('admin.orders.list',['canceled'])}}'">
        <div class="order-stats__content">
<<<<<<< HEAD
            <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/canceled.png')}}" alt="">
=======
            <img width="20" src="{{asset('/public/assets/back-end/img/canceled.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            <h6 class="order-stats__subtitle">{{translate('canceled')}}</h6>
        </div>
        <span class="order-stats__title h3">{{$data['canceled']}}</span>
    </div>
</div>

<div class="col-sm-6 col-lg-3">
    <div class="order-stats order-stats_returned cursor-pointer" onclick="location.href='{{route('admin.orders.list',['returned'])}}'">
        <div class="order-stats__content">
<<<<<<< HEAD
            <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/returned.png')}}" alt="">
=======
            <img width="20" src="{{asset('/public/assets/back-end/img/returned.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            <h6 class="order-stats__subtitle">{{translate('returned')}}</h6>
        </div>
        <span class="order-stats__title h3">{{$data['returned']}}</span>
    </div>
</div>

<div class="col-sm-6 col-lg-3">
    <div class="order-stats order-stats_failed cursor-pointer" onclick="location.href='{{route('admin.orders.list',['failed'])}}'">
        <div class="order-stats__content">
<<<<<<< HEAD
            <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/failed-to-deliver.png')}}" alt="">
=======
            <img width="20" src="{{asset('/public/assets/back-end/img/failed-to-deliver.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            <h6 class="order-stats__subtitle">{{translate('failed_to_delivery')}}</h6>
        </div>
        <span class="order-stats__title h3">{{$data['failed']}}</span>
    </div>
</div>
