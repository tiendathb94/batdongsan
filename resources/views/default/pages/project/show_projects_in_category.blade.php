@extends('default.layouts.default')

@section('page_title')
    {{$category->name}} | dự án bất động sản
@endsection
@section('head')
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta http-equiv="audience" content="general"><meta name="resource-type" content="document">
   <meta name="abstract" content="Thông tin nhà đất Việt Nam">
   <meta name="classification" content="Bất động sản Việt Nam">
   <meta name="area" content="Nhà đất và bất động sản">
   <meta name="placename" content="Việt Nam">
   <meta name="author" content="Batdongsan.com.vn">
   <meta name="copyright" content="©2007 Batdongsan.com.vn">
   <meta name="owner" content="Batdongsan.com.vn">
   <meta name="generator" content="Công ty Cổ phần PropertyGuru Việt Nam">
   <meta name="distribution" content="Global">
   <meta name="revisit-after" content="1 days">
   <meta property="og:image" content="https://staticfile.batdongsan.com.vn/images/Logo/BDSLogo.jpg">
   <meta name="robots" content="index,follow">
   <meta name="keywords" content="{{$category->meta_keyword}}">
   <meta name="description" content="{{$category->meta_description}}">
   <meta property="og:url" content="{{route('pages.project.show_projects_in_category',['categorySlug' => $category->slug])}}">
   <meta property="og:type" content="website">
   <meta property="og:title" content="{{$category->meta_title}}">
   <meta property="og:description" content="{{$category->meta_description}}">
@endsection
@section('content')
    <div class="project-category-container container mt-5 mb-5">
        <div id="js-form-search"></div>
        <div class="row">
            <div class="category-tab-content tab-content cols-12 col-md-8">

                <div class="mb-4">
                    <div class="block-title">
                        <h4>{{$category->name}}</h4>
                    </div>

                    <div class="text-muted small">
                        {{$projects->total()}} dự án được tìm thấy
                    </div>
                </div>

                @include('default.partials.project.project-items-row', ['projects'=> $projects])

                <div class="mt-3 pagination justify-content-center">
                    {{$projects}}
                </div>
            </div>
            <div class="cols-12 col-md-4">
                @include('default.partials.project.show-categories-with-province',['activeCategoryId'=>$category->id])
                @include('default.partials.project.news_review')
                @include('default.partials.project.project_progress')
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link
        rel="stylesheet"
        href="{{ asset('css/partials/project/project-items-row.css') . '?m=' . filemtime('css/partials/project/project-items-row.css') }}">
    <link
        rel="stylesheet"
        href="{{ asset('css/partials/project/block-show-categories-with-province.css') . '?m=' . filemtime('css/partials/project/block-show-categories-with-province.css') }}">
    <link
        rel="stylesheet"
        href="{{ asset('css/pages/project/project-category.css') . '?m=' . filemtime('css/pages/project/project-category.css') }}">
    <link
        rel="stylesheet"
        href="{{ asset('css/partials/project/block-search.css') . '?m=' . filemtime('css/partials/project/block-search.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/pages/project/search.js') . '?m=' . filemtime('js/pages/project/search.js') }}"></script>
@endpush