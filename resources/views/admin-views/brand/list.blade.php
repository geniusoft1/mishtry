@extends('layouts.back-end.app')

@section('title', translate('brand_List'))

@section('content')
    <div class="content container-fluid">
        <div class="mb-3">
            <h2 class="h1 mb-0 d-flex gap-2">
<<<<<<< HEAD
                <img width="20" src="{{ dynamicAsset(path: 'public/assets/back-end/img/brand.png') }}" alt="">
=======
                <img width="20" src="{{ asset('public/assets/back-end/img/brand.png') }}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                {{ translate('brand_List') }}
                <span class="badge badge-soft-dark radius-50 fz-14">{{ $brands->total() }}</span>
            </h2>
        </div>
<<<<<<< HEAD
=======

>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        <div class="row mt-20">
            <div class="col-md-12">
                <div class="card">
                    <div class="px-3 py-4">
                        <div class="row g-2 flex-grow-1">
                            <div class="col-sm-8 col-md-6 col-lg-4">
                                <form action="{{ url()->current() }}" method="GET">
                                    <div class="input-group input-group-custom input-group-merge">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tio-search"></i>
                                            </div>
                                        </div>
                                        <input id="datatableSearch_" type="search" name="searchValue" class="form-control"
                                            placeholder="{{ translate('search_by_name') }}" aria-label="{{ translate('search_by_name') }}" value="{{ request('searchValue') }}" required>
                                        <button type="submit" class="btn btn--primary input-group-text">{{ translate('search') }}</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-4 col-md-6 col-lg-8 d-flex justify-content-end">
                                <button type="button" class="btn btn-outline--primary" data-toggle="dropdown">
                                    <i class="tio-download-to"></i>
                                    {{ translate('export') }}
                                    <i class="tio-chevron-down"></i>
                                </button>
<<<<<<< HEAD
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.brand.export', ['searchValue'=>request('searchValue')]) }}">
                                            <img width="14" src="{{ dynamicAsset(path: 'public/assets/back-end/img/excel.png') }}" alt="">
=======

                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.brand.export', ['searchValue'=>request('searchValue')]) }}">
                                            <img width="14" src="{{ asset('public/assets/back-end/img/excel.png') }}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                            {{ translate('excel') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
=======

>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table w-100 text-start">
                                <thead class="thead-light thead-50 text-capitalize">
                                <tr>
                                    <th>{{ translate('SL') }}</th>
                                    <th>{{ translate('brand_Logo') }}</th>
<<<<<<< HEAD
                                    <th class="max-width-100px">{{ translate('name') }}</th>
=======
                                    <th>{{ translate('name') }}</th>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                    <th class="text-center">{{ translate('total_Product') }}</th>
                                    <th class="text-center">{{ translate('total_Order') }}</th>
                                    <th class="text-center">{{ translate('status') }}</th>
                                    <th class="text-center"> {{ translate('action') }}</th>
                                </tr>
                                </thead>
                                <tbody>
<<<<<<< HEAD
=======

>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                @foreach($brands as $key => $brand)
                                    <tr>
                                        <td>{{ $brands->firstItem()+$key }}</td>
                                        <td>
                                            <div class="avatar-60 d-flex align-items-center rounded">
                                                <img class="img-fluid" alt=""
                                                     src="{{ getValidImage(path: 'storage/app/public/brand/'.$brand['image'], type: 'backend-brand') }}">
                                            </div>
                                        </td>
<<<<<<< HEAD
                                        <td class="overflow-hidden max-width-100px">
                                            <span data-toggle="tooltip" data-placement="right" title="{{$brand['defaultname']}}">
                                                 {{ Str::limit($brand['defaultname'],20) }}
                                            </span>
                                        </td>
=======
                                        <td>{{ $brand['defaultname'] }}</td>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                        <td class="text-center">{{ $brand['brand_all_products_count'] }}</td>
                                        <td class="text-center">{{ $brand['brandAllProducts']->sum('order_details_count') }}</td>
                                        <td>
                                            <form action="{{route('admin.brand.status-update') }}" method="post" id="brand-status{{$brand['id']}}-form">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$brand['id']}}">
                                                <label class="switcher mx-auto">
                                                    <input type="checkbox" class="switcher_input toggle-switch-message" name="status"
                                                           id="brand-status{{ $brand['id'] }}" value="1" {{ $brand['status'] == 1 ? 'checked' : '' }}
                                                           data-modal-id = "toggle-status-modal"
                                                           data-toggle-id = "brand-status{{ $brand['id'] }}"
                                                           data-on-image = "brand-status-on.png"
                                                           data-off-image = "brand-status-off.png"
                                                           data-on-title = "{{ translate('Want_to_Turn_ON').' '.$brand['defaultname'].' '. translate('status') }}"
                                                           data-off-title = "{{ translate('Want_to_Turn_OFF').' '.$brand['defaultname'].' '.translate('status') }}"
                                                           data-on-message = "<p>{{ translate('if_enabled_this_brand_will_be_available_on_the_website_and_customer_app') }}</p>"
                                                           data-off-message = "<p>{{ translate('if_disabled_this_brand_will_be_hidden_from_the_website_and_customer_app') }}</p>">
                                                    <span class="switcher_control"></span>
                                                </label>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-2">
                                                <a class="btn btn-outline-info btn-sm square-btn" title="{{ translate('edit') }}"
<<<<<<< HEAD
                                                    href="{{ route('admin.brand.update', [$brand['id']]) }}">
                                                    <i class="tio-edit"></i>
                                                </a>
                                                <a class="btn btn-outline-danger btn-sm delete-brand square-btn " title="{{ translate('delete') }}"
                                                   data-product-count = "{{count($brand?->brandAllProducts)}}"
                                                   data-text="{{translate('there_were_').count($brand?->brandAllProducts).translate('_products_under_this_brand').'.'.translate('please_update_their_brand_from_the_below_list_before_deleting_this_one').'.'}}"
                                                   id="{{ $brand['id'] }}">
                                                    <i class="tio-delete"></i>
=======
                                                href="{{ route('admin.brand.update', [$brand['id']]) }}">
                                                <i class="tio-edit"></i>
                                                </a>
                                                <a class="btn btn-outline-danger btn-sm brand-delete-button square-btn" title="{{ translate('delete') }}"
                                                id="{{ $brand['id'] }}">
                                                <i class="tio-delete"></i>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
<<<<<<< HEAD
                                </tbody>
                            </table>
=======

                                </tbody>
                            </table>

>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                        </div>
                    </div>
                    <div class="table-responsive mt-4">
                        <div class="d-flex justify-content-lg-end">
                            {{ $brands->links() }}
                        </div>
                    </div>
                    @if(count($brands)==0)
                        <div class="text-center p-4">
<<<<<<< HEAD
                            <img class="mb-3 w-160" src="{{ dynamicAsset(path: 'public/assets/back-end/svg/illustrations/sorry.svg') }}" alt="">
=======
                            <img class="mb-3 w-160" src="{{ asset('public/assets/back-end/svg/illustrations/sorry.svg') }}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                            <p class="mb-0">{{ translate('no_data_to_show') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <span id="route-admin-brand-delete" data-url="{{ route('admin.brand.delete') }}"></span>
    <span id="route-admin-brand-status-update" data-url="{{ route('admin.brand.status-update') }}"></span>
    <span id="get-brands" data-brands="{{ json_encode($brands) }}"></span>
    <div class="modal fade" id="select-brand-modal" tabindex="-1" aria-labelledby="toggle-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-lg">
                <div class="modal-header border-0 pb-0 d-flex justify-content-end">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                            class="tio-clear"></i></button>
                </div>
                <div class="modal-body px-4 px-sm-5 pt-0 pb-sm-5">
                    <div class="d-flex flex-column align-items-center text-center gap-2 mb-2">
                        <div
                            class="toggle-modal-img-box d-flex flex-column justify-content-center align-items-center mb-3 position-relative">
                            <img src="{{dynamicAsset('public/assets/back-end/img/icons/info.svg')}}" alt="" width="90"/>
                        </div>
                        <h5 class="modal-title mb-2 brand-title-message"></h5>
                    </div>
                    <form action="{{ route('admin.brand.delete') }}" method="post" class="product-brand-update-form-submit">
                        @csrf
                        <input name="id" hidden="">
                        <div class="gap-2 mb-3">
                            <label class="title-color"
                                   for="exampleFormControlSelect1">{{ translate('select_Category') }}
                                <span class="text-danger">*</span>
                            </label>
                            <select name="brand_id" class="form-control js-select2-custom brand-option" required>

                            </select>
                        </div>
                        <div class="d-flex justify-content-center gap-3">
                            <button type="submit" class="btn btn--primary min-w-120">{{translate('update')}}</button>
                            <button type="button" class="btn btn-danger-light min-w-120"
                                    data-dismiss="modal">{{ translate('cancel') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ dynamicAsset(path: 'public/assets/back-end/js/products-management.js') }}"></script>
=======

    <span id="route-admin-brand-delete" data-url="{{ route('admin.brand.delete') }}"></span>
    <span id="route-admin-brand-status-update" data-url="{{ route('admin.brand.status-update') }}"></span>
@endsection

@push('script')
    <script src="{{ asset('public/assets/back-end/js/products-management.js') }}"></script>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
@endpush
