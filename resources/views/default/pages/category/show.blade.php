@extends('default.layouts.default')

@section('page_title')
    {{ $category->name }}
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
