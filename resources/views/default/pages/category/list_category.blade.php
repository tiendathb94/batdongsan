@extends('default.layouts.personal')

@section('page_title')
    Quản lý danh mục
@endsection

@section('main_content')
    <div style="margin-bottom: 10px;display: flex;justify-content: space-between;">
        <span class="mb-3">Quản lý danh mục</span>
        <a href="{{route('pages.category.create')}}" class="btn btn-primary">Thêm mới</a>
    </div>
    <div class="accordion" id="accordionExample">
        @foreach($categories as $key => $category)
        <div class="card">
            <div class="card-header">
                <div data-toggle="collapse" data-target="#collapseOne{{$key}}">
                    <span>+ {{$category->name}}</span>
                    <span class="action">
                        <a href="{{route('pages.category.edit',['id' => $category->id])}}">
                            <span class="ti-pencil-alt"></span>
                        </a>
                        -
                        <a data-url="{{route('pages.category.delete',['id' => $category->id])}}" class="delete-parent-button" style="cursor: pointer;">
                            <span class="ti-trash"></span>
                        </a>
                    </span>
                </div>
            </div>
            <div id="collapseOne{{$key}}" class="collapse">
            <div class="card-body">
                <ul>
                    @foreach($category->children as $children)
                    <li class="item-children-category">
                        <span>- {{$children->name}}</span>
                        <span class="action">
                            <a href="{{route('pages.category.edit',['id' => $children->id])}}">
                                <span class="ti-pencil-alt"></span>
                            </a>
                            -
                            <a data-url="{{route('pages.category.delete',['id' => $children->id])}}" class="delete-child-button" style="cursor: pointer;">
                                <span class="ti-trash"></span>
                            </a>
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            $('.delete-parent-button').click(function () {
                let url = $(this).data('url');
                let item = $(this);
                var cf = confirm('Bạn có chắc chắn muốn xóa danh mục cha này không?');
                if(cf == true){
                    $.ajax({
                        url: url,
                        method: 'get',
                        success: function(data){
                            if(data){
                                item.parents(".card").remove();
                            }
                        }
                    })
                }
            })
            $('.delete-child-button').click(function () {
                let url = $(this).data('url');
                let item = $(this);
                var cf = confirm('Bạn có chắc chắn muốn xóa danh mục con này không?');
                if(cf == true){
                    $.ajax({
                        url: url,
                        method: 'get',
                        success: function(data){
                            if(data){
                                item.parents("li").remove();
                            }
                        }
                    })
                }
            })
        })
    </script>
@endpush
@push('styles')
<style>
    .item-children-category{
        border: 1px solid lightgray;
        padding: 5px;
        background: rgba(0, 0, 0, 0.03);
        margin-bottom: 1px;
    }
    .action{
        float: right;
    }
</style>
@endpush


