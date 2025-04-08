@extends('layouts.back-end.app')

@section('title', $delivery_man->f_name. ' '. $delivery_man->l_name. ' ' .translate('earning_Statement'))

@section('content')
    <div class="content container-fluid">
        <div class="mb-4 pb-2">
            <h2 class="h1 mb-0 text-capitalize d-flex align-items-center gap-2">
<<<<<<< HEAD
                <img src="{{dynamicAsset(path: 'public/assets/back-end/img/add-new-seller.png')}}" alt="">
=======
                <img src="{{asset('/public/assets/back-end/img/add-new-seller.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                {{translate('earning_Statement')}}
            </h2>
        </div>
        @include('admin-views.delivery-man.pages-inline-menu')

        <div class="card mb-3">
            <div class="card-body">
                <div class="row justify-content-between align-items-center g-2 mb-3">
                    <div class="col-sm-6">
                        <h4 class="d-flex align-items-center text-capitalize gap-10 mb-0">

                        </h4>
                    </div>
                </div>
                <div class="row g-2">

                </div>
            </div>
        </div>
    </div>
@endsection
