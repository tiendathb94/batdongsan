@extends('default.layouts.personal')

@section('page_title')
    Quản lý Banner
@endsection

@section('main_content')
    <h3 class="mb-3">Quản lý Banner</h3>
    <form class="mb-5">
        <div class="row">
            <!-- <label>Từ khóa</label> -->
            <div class="form-group col-sm-12 col-md-6">
                <div>
                    <input class="form-control" name="keyword" placeholder="Nhập từ khóa tìm kiếm"
                       value="{{$keyword}}"/>
                </div>
            </div>
            <div class="form-group col-sm-12 col-md-3">
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </div>
            <div class="form-group col-sm-12 col-md-3">
                <a href="{{route('config.create.banner')}}" class="btn btn-primary">Thêm mới</a>
            </div>
        </div>
    </form>

    @if(count($banners)<1)
        @include('default.partials.no-data',['message'=>'Hiện tại hệ thống chưa có banner nào'])
    @else
        <table width="100" class="table table-bordered fs-12 text-center">
            <thead>
            <tr class="bg-thead">
                <th class=" d-md-table-cell">ID</th>
                <th class=" d-md-table-cell">Tên</th>
                <th class=" d-md-table-cell">Hình ảnh</th>
                <th>Kích hoạt</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($banners as $banner)
                <tr>
                    <td class=" d-md-table-cell">{{$banner->id}}</td>
                    <td class=" d-md-table-cell">{{$banner->name}}</td>
                    <td class=" d-md-table-cell"  valign="middle" align="center">
                        <img src="{{\Storage::url($banner->image)}}" alt="{{$banner->name}}" style="width:50%">
                    </td>
                    <td>
                    <div class="custom-control custom-switch">
                        <input data-url="" type="checkbox" class="custom-control-input js-change-active" id="switch{{ $banner->id }}">
                        <label class="custom-control-label" for="switch{{ $banner->id }}"></label>
                    </div>
                    </td>
                    <td width="100">
                        <a href="" style="cursor: pointer;">
                            <span class="ti-pencil-alt"></span>
                        </a>
                        -
                        <a data-url="{{route('config.banner.delete',['id' => $banner->id])}}" class="delete-banner-button" style="cursor: pointer;">
                            <span class="ti-trash"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$banners->render()}}
    @endif
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            $('.delete-banner-button').click(function () {
                let url = $(this).data('url');
                let item = $(this);
                var cf = confirm('Bạn có chắc chắn muốn xóa banner này không?');
                if(cf == true){
                    $.ajax({
                        url: url,
                        method: 'get',
                        success: function(data){
                            if(data){
                                item.parent().parent().remove();
                            }
                        }
                    })
                }
            })
        })
    </script>
@endpush

