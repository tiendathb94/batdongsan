@extends('default.layouts.personal')

@section('page_title')
    Đăng tin rao bán, cho thuê nhà đất
@endsection

@section('main_content')
    <div id="js-form-create-sell-posts"></div>
@endsection

@push('styles')
    <link
        rel="stylesheet"
        href="{{ asset('css/pages/posts/create_sell.css') . '?m=' . filemtime('css/pages/posts/create_sell.css') }}">
@endpush
@push('scripts')
    <script>
        window.post = @json($post)
    </script>
    <script src="{{ asset('js/pages/posts/edit_sell.js') . '?m=' . filemtime('js/pages/posts/edit_sell.js') }}"></script>
@endpush
