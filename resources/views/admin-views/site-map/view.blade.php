@extends('layouts.back-end.app')

@section('title', translate('generate_Sitemap'))

@section('content')
<div class="content container-fluid">
    <div class="mb-4 pb-2">
        <h2 class="h1 mb-0 text-capitalize d-flex align-items-center gap-2">
<<<<<<< HEAD
            <img src="{{dynamicAsset(path: 'public/assets/back-end/img/system-setting.png')}}" alt="">
=======
            <img src="{{asset('/public/assets/back-end/img/system-setting.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            {{translate('system_setup')}}
        </h2>
    </div>
    @include('admin-views.business-settings.system-settings-inline-menu')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="border-bottom px-4 py-3">
                    <h5 class="mb-0 text-capitalize d-flex align-items-center gap-2">
<<<<<<< HEAD
                        <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/sitemap.png')}}" alt="">
=======
                        <img width="20" src="{{asset('/public/assets/back-end/img/sitemap.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                        {{translate('generate_sitemap')}}
                    </h5>
                </div>
                <div class="card-body text-center">
                    <a href="{{ route('admin.business-settings.web-config.mysitemap-download') }}" class="btn btn--primary text-capitalize px-4">
                        {{translate('download_generate_sitemap')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
