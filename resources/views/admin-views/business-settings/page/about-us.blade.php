@extends('layouts.back-end.app')
<<<<<<< HEAD

@section('title', translate('about_us'))

@push('css_or_js')
    <link href="{{ dynamicAsset(path: 'public/assets/back-end/plugins/summernote/summernote.min.css') }}" rel="stylesheet">
@endpush

=======
@section('title', translate('about_us'))
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
@section('content')
<div class="content container-fluid">
    <div class="mb-3">
        <h2 class="h1 mb-0 text-capitalize d-flex align-items-center gap-2">
<<<<<<< HEAD
            <img src="{{dynamicAsset(path: 'public/assets/back-end/img/Pages.png')}}" width="20" alt="">
=======
            <img src="{{asset('/public/assets/back-end/img/Pages.png')}}" width="20" alt="">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            {{translate('pages')}}
        </h2>
    </div>
    @include('admin-views.business-settings.pages-inline-menu')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">{{translate('about_us')}}</h5>
                </div>
                <form action="{{route('admin.business-settings.about-update')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
<<<<<<< HEAD
                            <textarea name="about_us" id="editor" cols="30" rows="20" class="form-control summernote">{{ $pageData['value'] }}</textarea>
=======
                            <textarea name="about_us" id="editor" cols="30" rows="20" class="form-control">{{ $pageData['value'] }}</textarea>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                        </div>
                        <div class="form-group mb-2">
                            <input class="btn btn--primary btn-block" type="submit" name="btn" value="{{ translate('submit') }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
<<<<<<< HEAD

@push('script')
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
@push('script')
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
