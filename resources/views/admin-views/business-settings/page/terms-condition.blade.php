@extends('layouts.back-end.app')

@section('title', translate('terms_and_condition'))

<<<<<<< HEAD
@push('css_or_js')
    <link href="{{ dynamicAsset(path: 'public/assets/back-end/plugins/summernote/summernote.min.css') }}" rel="stylesheet">
@endpush

=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
@section('content')
    <div class="content container-fluid">
        <div class="mb-3">
            <h2 class="h1 mb-0 text-capitalize d-flex align-items-center gap-2">
<<<<<<< HEAD
                <img width="20" src="{{dynamicAsset(path: 'public/assets/back-end/img/Pages.png')}}" alt="">
=======
                <img width="20" src="{{asset('/public/assets/back-end/img/Pages.png')}}" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                {{translate('pages')}}
            </h2>
        </div>
        @include('admin-views.business-settings.pages-inline-menu')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{translate('terms_and_condition')}}</h5>
                    </div>
                    <form action="{{route('admin.business-settings.update-terms')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
<<<<<<< HEAD
                                <textarea class="form-control summernote" id="editor"
=======
                                <textarea class="form-control" id="editor"
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                                    name="value">{{$terms_condition->value}}</textarea>
                            </div>
                            <div class="form-group">
                                <input class="form-control btn--primary" type="submit" value="{{translate('submit')}}" name="btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
<<<<<<< HEAD
    <script src="{{ dynamicAsset(path: 'public/assets/back-end/plugins/summernote/summernote.min.js') }}"></script>
    <script>
        'use strict';
        $(document).on('ready', function () {
            $('.summernote').summernote({
                'height': 150,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                ]
            });
=======
    <script src="{{asset('/vendor/ckeditor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('/vendor/ckeditor/ckeditor/adapters/jquery.js')}}"></script>
    <script>
        'use strict';
        $('#editor').ckeditor({
            contentsLangDirection : '{{Session::get('direction')}}',
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        });
    </script>
@endpush
