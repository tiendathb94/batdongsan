@extends('default.layouts.default')

@section('page_title')
    {{ $news->title }}
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
   <meta name="keywords" content="">
   <meta name="description" content="{{$news->meta_content}}">
   <meta property="og:url" content="{{route('news.show',['categorySlug' => $news->category->slug,'slug' => $news->slug])}}">
   <meta property="og:type" content="website">
   <meta property="og:title" content="{{$news->title}}">
   <meta property="og:description" content="{{$news->meta_content}}">
@endsection
@section('content')
    @php($partials = 'default.partials.')
    @include($partials . 'news_search', [
        'title' => $news->title, 
        'time' => $news->created_at, 
        'subTitle' => '', 
        'actionSearch' => route('news.show', [ $news->category->slug, $news->slug])
        ])
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                @include($partials . 'news_related', ['category' => $news->category, 'relatedNews' => $relatedNews])
                {!! $news->content !!}
                <p class="text-right font-weight-bold">
                    {{ $news->user->fullname }}
                </p>
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
