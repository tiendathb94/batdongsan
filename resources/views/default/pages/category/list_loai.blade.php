@extends('default.layouts.personal')

@section('page_title')
    Quản lý hình thức
@endsection

@section('main_content')
    <h3 class="mb-3">Quản lý hình thức</h3>
    <form class="mb-5">
        <div class="row">
            <!-- <label>Từ khóa</label> -->
            <div class="form-group col-sm-12 col-md-6">
                <div>
                    <input class="form-control" name="keyword" placeholder="Nhập từ khóa tìm kiếm"
                       value="{{$keyword}}"/>
                </div>
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </div>
        </div>
    </form>

    @if(count($categories)<1)
        @include('default.partials.no-data',['message'=>'Hiện tại hệ thống chưa có thành viên nào'])
    @else
        <table class="table table-bordered fs-12 text-center">
            <thead>
            <tr class="bg-thead">
                <th class="d-md-table-cell">ID</th>
                <th class="d-md-table-cell">Tên</th>
                <th class="d-md-table-cell">Slug</th>
                <th class="d-md-table-cell">Ngày tạo</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td class="d-md-table-cell">{{$category->id}}</td>
                    <td class="d-md-table-cell">{{$category->name}}</td>
                    <td class="d-md-table-cell">{{$category->slug}}</td>
                    <td class="d-md-table-cell">{{\Carbon\Carbon::parse($category->created_at)->format('d/m/Y')}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$categories->render()}}

        <div id="background-react-component-container"></div>
    @endif
@endsection


