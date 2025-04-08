@extends('layouts.back-end.app')

@section('title', translate('stock_limit_products'))

@section('content')
    <div class="content container-fluid">
        <div class="mb-3 d-flex flex-column gap-1">
<<<<<<< HEAD
            <h2 class="h1 text-capitalize d-flex gap-2 align-items-center">
                <img src="{{ dynamicAsset(path: 'public/assets/back-end/img/inhouse-product-list.png') }}" class="mb-1 mr-1" alt="">
=======
            <h2 class="h1 text-capitalize d-flex gap-2">
                <img src="{{ asset('public/assets/back-end/img/inhouse-product-list.png') }}" class="mb-1 mr-1" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                {{ translate('limited_Stocked_Products_List') }}
                <span class="badge badge-soft-dark radius-50 fz-14 ml-1">
                    {{ $products->total() }}
                </span>
            </h2>
            <p class="d-flex">
                {{ translate('the_products_are_shown_in_this_list,_which_quantity_is_below') }} {{ $stockLimit }}
            </p>
        </div>
<<<<<<< HEAD
=======


>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        <div class="row mt-30">
            <div class="col-md-12">
                <div class="card">
                    <div class="px-3 py-4">
                        <div class="row justify-content-between align-items-center gy-2">
                            <div class="col-auto">
                                <form action="{{ url()->current() }}" method="GET">
                                    <div class="input-group input-group-custom input-group-merge">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tio-search"></i>
                                            </div>
                                        </div>
                                        <input id="datatableSearch_" type="search" name="searchValue"
                                               class="form-control"
                                               placeholder="{{ translate('search_Product_Name') }}"
                                               aria-label="Search orders"
                                               value="{{ $searchValue }}" required>
                                        <input type="hidden" value="{{ $status }}" name="status">
                                        <button type="submit" class="btn btn--primary">
                                            {{ translate('search') }}
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-12 mt-1 col-md-6 col-lg-3">
                                <select name="qty_order_sort" class="form-control action-select-onchange-get-view"
                                        data-url-prefix="{{ route('admin.products.stock-limit-list',['in_house', '']) }}/?sortOrderQty=">
                                    <option value="default" {{ $sortOrderQty== "default"?'selected':''}}>
<<<<<<< HEAD
                                        {{ translate('default') }}
                                    </option>
                                    <option value="quantity_asc" {{ $sortOrderQty== "quantity_asc"?'selected':''}}>
                                        {{ translate('inventory_quantity(low_to_high)') }}
                                    </option>
                                    <option value="quantity_desc" {{ $sortOrderQty== "quantity_desc"?'selected':''}}>
                                        {{ translate('inventory_quantity(high_to_low)') }}
                                    </option>
                                    <option value="order_asc" {{ $sortOrderQty== "order_asc"?'selected':''}}>
                                        {{ translate('order_volume(low_to_high)') }}
                                    </option>
                                    <option value="order_desc" {{ $sortOrderQty== "order_desc"?'selected':''}}>
                                        {{ translate('order_volume(high_to_low)') }}
=======
                                        {{ translate('default_sort') }}
                                    </option>
                                    <option value="quantity_asc" {{ $sortOrderQty== "quantity_asc"?'selected':''}}>
                                        {{ translate('quantity_sort_by_(low_to_high)') }}
                                    </option>
                                    <option value="quantity_desc" {{ $sortOrderQty== "quantity_desc"?'selected':''}}>
                                        {{ translate('quantity_sort_by_(high_to_low)') }}
                                    </option>
                                    <option value="order_asc" {{ $sortOrderQty== "order_asc"?'selected':''}}>
                                        {{ translate('order_sort_by_(low_to_high)') }}
                                    </option>
                                    <option value="order_desc" {{ $sortOrderQty== "order_desc"?'selected':''}}>
                                        {{ translate('order_sort_by_(high_to_low)') }}
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                    </option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="datatable"
                               class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table w-100 text-start">
                            <thead class="thead-light thead-50 text-capitalize">
                            <tr>
                                <th>{{ translate('SL') }}</th>
                                <th>{{ translate('product_Name') }}</th>
<<<<<<< HEAD
                                <th class="text-center">{{ translate('unit_price') }}</th>
                                <th class="text-center">{{ translate('quantity') }}</th>
                                <th class="text-center">{{ translate('orders') }}</th>
=======
                                <th>{{ translate('selling_price') }}</th>
                                <th>{{ translate('quantity') }}</th>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                <th class="text-center">{{ translate('active_status') }}</th>
                                <th class="text-center">{{ translate('action') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $key=>$product)
                                <tr>
                                    <th scope="row">{{ $products->firstItem()+$key}}</th>
                                    <td>
<<<<<<< HEAD
                                        <a href="{{route('admin.products.view',['addedBy'=>$product['added_by'],'id'=>$product['id']]) }}"
=======
                                        <a href="{{route('admin.products.view',[$product['id']]) }}"
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                           class="media align-items-center gap-2">
                                            <img src="{{ getValidImage(path:'storage/app/public/product/thumbnail/'.$product['thumbnail'],type: 'backend-product')}}"
                                                class="avatar border" alt="">
                                            <span class="media-body title-color hover-c1">
                                                {{ Str::limit($product['name'], 20) }}
                                            </span>
                                        </a>
                                    </td>
<<<<<<< HEAD
                                    <td class="text-center">
                                        {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $product['unit_price']), currencyCode: getCurrencyCode()) }}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center product-quantity justify-content-center">
=======
                                    <td>
                                        {{setCurrencySymbol(amount: usdToDefaultCurrency(amount: $product['unit_price']), currencyCode: getCurrencyCode()) }}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center product-quantity">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                            {{ $product['current_stock']}}

                                            <button class="btn py-0 px-2 fz-18 action-update-product-quantity"
                                                    id="{{ $product['id'] }}"
                                                    data-url="{{ route('admin.products.get-variations').'?id='.$product['id'] }}"
                                                    type="button"
                                                    data-toggle="modal" data-target="#update-quantity"
                                                    title="{{ translate('update_quantity') }}">
                                                <i class="tio-add-circle c1"></i>
                                            </button>
                                        </div>
                                    </td>
<<<<<<< HEAD
                                    <td class="text-center">{{($product['order_details_count'])}}</td>

=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                    <td class="text-center">
                                        @if($product->request_status != 2 )
                                            <form action="{{route('admin.products.status-update') }}" method="post"
                                                  id="product-status{{ $product['id']}}-form"
                                                  class="admin-product-status-form">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $product['id']}}">
                                                <label class="switcher mx-auto">
                                                    <input type="checkbox" class="switcher_input toggle-switch-message"
                                                           name="status"
                                                           id="product-status{{ $product['id'] }}" value="1"
                                                           {{ $product['status'] == 1 ? 'checked' : '' }}
                                                           data-modal-id="toggle-status-modal"
                                                           data-toggle-id="product-status{{ $product['id'] }}"
                                                           data-on-image="product-status-on.png"
                                                           data-off-image="product-status-off.png"
                                                           data-on-title="{{ translate('Want_to_Turn_ON').' '.$product['name'].' '.translate('status') }}"
                                                           data-off-title="{{ translate('Want_to_Turn_OFF').' '.$product['name'].' '.translate('status') }}"
                                                           data-on-message="<p>{{ translate('if_enabled_this_product_will_be_available_on_the_website_and_customer_app') }}</p>"
                                                           data-off-message="<p>{{ translate('if_disabled_this_product_will_be_hidden_from_the_website_and_customer_app') }}</p>">
                                                    <span class="switcher_control"></span>
                                                </label>
                                            </form>

                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-outline-info btn-sm square-btn"
                                               title="{{ translate('barcode') }}"
                                               href="{{ route('admin.products.barcode', [$product['id']]) }}">
                                                <i class="tio-barcode"></i>
                                            </a>
                                            <a class="btn btn-outline--primary btn-sm square-btn"
                                               title="{{ translate('edit') }}"
                                               href="{{route('admin.products.update',[$product['id']]) }}">
                                                <i class="tio-edit"></i>
                                            </a>
                                            <span class="btn btn-outline-danger btn-sm square-btn delete-data"
                                                  title="{{ translate('delete') }}"
                                                  data-id="product-{{ $product['id']}}">
                                                <i class="tio-delete"></i>
                                            </span>
                                        </div>
                                        <form action="{{ route('admin.products.delete', [$product['id']]) }}"
                                              method="post" id="product-{{ $product['id']}}">
                                            @csrf @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive mt-4">
                        <div class="px-4 d-flex justify-content-lg-end">
                            {{ $products->links() }}
                        </div>
                    </div>

                    @if(count($products)==0)
                        <div class="text-center p-4">
                            <img class="mb-3 w-160"
<<<<<<< HEAD
                                 src="{{ dynamicAsset(path: 'public/assets/back-end/svg/illustrations/sorry.svg') }}"
=======
                                 src="{{ asset('public/assets/back-end/svg/illustrations/sorry.svg') }}"
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                 alt="{{translate('image_description')}}">
                            <p class="mb-0">{{ translate('no_data_to_show') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="update-quantity" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('admin.products.update-quantity') }}" method="post" class="row">
                    <div class="modal-body">
                        @csrf
                        <div class="rest-part"></div>
                        <div class="d-flex justify-content-end gap-10 flex-wrap align-items-center">
                            <button type="button" class="btn btn-danger px-4" data-dismiss="modal" aria-label="Close">
                                {{ translate('close') }}
                            </button>
                            <button class="btn btn--primary" class="btn btn--primary px-4" type="submit">
                                {{ translate('submit') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
