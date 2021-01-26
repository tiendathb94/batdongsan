@extends('default.layouts.default')

@section('page_title')
    {{ $category->name }}
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
   <meta property="og:url" content="{{route('category.show',['slug' => $category->slug])}}">
   <meta property="og:type" content="website">
   <meta property="og:title" content="{{$category->meta_title}}">
   <meta property="og:description" content="{{$category->meta_description}}">
@endsection
@section('content')
    @php($partials = 'default.partials.')
    @include($partials . 'news_search', [
        'title' => $category->name, 
        'time' => '', 
        'subTitle' => '', 
        'actionSearch' => route('category.show', $category->slug)
    ])
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                @if($news->count())
                    @include($partials . 'list_news', [
                        'news' => $news, 
                    ])
                @else
                    @include($partials . 'no-data', [
                        'message' => 'Danh mục hiện tại chưa có dữ liệu bài đăng, vui lòng quay lại sau.', 
                    ])  
                @endif
            </div>
            <div class="col-12 col-md-4 news-many-read mb-3 category-many-care">
                @include($partials . 'news_many_read')
                @include($partials . 'category_many_care')
            </div>
        </div>
    </div>
@endsection

@push('styles')
<link
    rel="stylesheet"
    href="{{ asset('css/pages/news/show.css') . '?m=' . filemtime('css/pages/news/show.css') }}">
@endpush
