@extends('layouts.back-end.app')
@section('title', translate('contact_List'))
<<<<<<< HEAD

@push('css_or_js')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
@section('content')
    <div class="content container-fluid">
        <div class="mb-3">
            <h2 class="h1 mb-0 text-capitalize d-flex align-items-center gap-2">
<<<<<<< HEAD
                <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/message.png')}}" alt="">
=======
                <img width="20" src="{{asset('/public/assets/back-end/img/message.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                {{translate('customer_message')}}
            </h2>
        </div>
        <div class="row mt-20">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row justify-content-between align-items-center flex-grow-1">
                            <div class="col-sm-4 col-md-6 col-lg-8 mb-2 mb-sm-0">
                                <h5 class="d-flex gap-2 align-items-center">
                                    {{translate('customer_message_table')}}
<<<<<<< HEAD
                                    <span class="badge badge-soft-dark radius-50 fz-12" id="row-count">{{ $contacts->total() }}
=======
                                    <span
                                        class="badge badge-soft-dark radius-50 fz-12">{{ $contacts->total() }}
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                    </span>
                                </h5>
                            </div>
                            <div class="col-sm-8 col-md-6 col-lg-4">
<<<<<<< HEAD
                                <div class="d-flex flex-wrap flex-md-nowrap gap-2">
                                    <form action="{{ url()->current() }}" method="GET" class="flex-grow-1">
                                        <div class="input-group input-group-merge input-group-custom">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tio-search"></i>
                                                </div>
                                            </div>
                                            <input id="datatableSearch_" type="search" name="searchValue" class="form-control"
                                                   placeholder="{{translate('search_by_Name_or_Mobile_No_or_Email')}}"
                                                   aria-label="Search orders" value="{{ request('searchValue') }}">
                                            <button type="submit"
                                                    class="btn btn--primary">{{translate('search')}}</button>
                                        </div>
                                    </form>
                                    <div class="hs-unfold mr-2">
                                        <a class="js-hs-unfold-invoker btn btn-sm btn-white dropdown-toggle min-height-44 arrow-hidden" href="javascript:;"
                                           data-hs-unfold-options='{
                                        "target": "#menu",
                                        "type": "css-animation"
                                    }'>
                                            <i class="tio-column-view-outlined mr-1"></i> {{ translate('filter') }}
                                        </a>

                                        <div id="menu" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right px-3 py-4">
                                            <div class="d-flex justify-content-between align-items-center gap-2 mb-3">
                                        <span>
                                            {{ translate('reply_sent') }}
                                        </span>
                                                <label class="switcher">
                                                    <input type="checkbox" class="switcher_input status-filter" name="reply_status" value="replied">
                                                    <span class="switcher_control"></span>
                                                </label>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center gap-2">
                                        <span>
                                            {{ translate('reply_not_sent') }}
                                        </span>
                                                <label class="switcher">
                                                    <input type="checkbox" class="switcher_input status-filter" name="reply_status" value="not_replied">
                                                    <span class="switcher_control"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="status-wise-view">
                        @include('admin-views.contacts._table')
                    </div>
=======
                                <form action="{{ url()->current() }}" method="GET">
                                    <div class="input-group input-group-merge input-group-custom">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tio-search"></i>
                                            </div>
                                        </div>
                                        <input id="datatableSearch_" type="search" name="searchValue" class="form-control"
                                               placeholder="{{translate('search_by_Name_or_Mobile_No_or_Email')}}"
                                               aria-label="Search orders" value="{{ request('searchValue') }}">
                                        <button type="submit"
                                                class="btn btn--primary">{{translate('search')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable"
                               style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                               class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table w-100">
                            <thead class="thead-light thead-50 text-capitalize">
                            <tr>
                                <th>{{translate('SL')}}</th>
                                <th>{{translate('customer_Name')}}</th>
                                <th>{{translate('contact_Info')}}</th>
                                <th>{{translate('subject')}}</th>
                                <th class="text-center">{{translate('action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $key => $contact)
                                <tr style="background: {{$contact->seen==0?'rgba(215,214,214,0.56)':'white'}}">
                                    <td>{{$contacts->firstItem()+$key}}</td>
                                    <td>{{$contact['name']}}</td>
                                    <td>
                                        <div>
                                            <div>{{$contact['mobile_number']}}</div>
                                            <div>{{$contact['email']}}</div>
                                        </div>
                                    </td>
                                    <td class="text-wrap">{{$contact['subject']}}</td>
                                    <td>
                                        <div class="d-flex gap-10 justify-content-center">
                                            <a title="{{translate('view')}}"
                                               class="btn btn-outline-info btn-sm square-btn"
                                               href="{{route('admin.contact.view',$contact->id)}}">
                                                <i class="tio-invisible"></i>
                                            </a>
                                            <a class="btn btn-outline-danger btn-sm delete delete-data-without-form"
                                               data-id="{{$contact['id']}}"
                                               data-action="{{route('admin.contact.delete')}}"
                                               title="{{ translate('delete')}}">
                                                <i class="tio-delete"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive mt-4">
                        <div class="px-4 d-flex justify-content-lg-end">
                            {{$contacts->links()}}
                        </div>
                    </div>
                    @if(count($contacts)==0)
                        <div class="text-center p-4">
                            <img class="mb-3 w-160"
                                 src="{{asset('public/assets/back-end/svg/illustrations/sorry.svg')}}"
                                 alt="{{translate('image_description')}}">
                            <p class="mb-0">{{translate('no_data_to_show')}}</p>
                        </div>
                    @endif
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <span id="get-filter-route" data-action="{{route('admin.contact.filter')}}"></span>
@endsection

@push('script')
    <script src="{{dynamicAsset(path: 'public/assets/back-end/js/admin/contact.js')}}"></script>
@endpush
=======
@endsection
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
