@extends('default.layouts.personal')

@section('page_title')
    Quản lý thành viên
@endsection

@section('main_content')
@php($categories = [])
    <h3 class="mb-3">Quản lý thành viên</h3>
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

    @if(count($users)<1)
        @include('default.partials.no-data',['message'=>'Hiện tại hệ thống chưa có thành viên nào'])
    @else
        <table class="table table-bordered fs-12 text-center">
            <thead>
            <tr class="bg-thead">
                <th class=" d-md-table-cell">ID</th>
                <th class=" d-md-table-cell">Email</th>
                <th class=" d-md-table-cell">Tên</th>
                <th class="d-none d-md-table-cell">SĐT</th>
                <th class="d-none d-md-table-cell">Ngày sinh</th>
                <th class="d-none d-md-table-cell">Giới tính</th>
                <th class="d-none d-md-table-cell">Ngày tạo</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class=" d-md-table-cell">{{$user->id}}</td>
                    <td class=" d-md-table-cell">{{$user->email}}</td>
                    <td class=" d-md-table-cell">{{$user->fullname}}</td>
                    <td class="d-none d-md-table-cell">{{$user->phone}}</td>
                    <td class="d-none d-md-table-cell">{{$user->date_of_birth}}</td>
                    <td class="d-none d-md-table-cell">
                    @switch($user->gender)
                        @case(1)
                        Nam
                        @break
                        @case(2)
                        Nữ
                        @break
                        @default
                    @endswitch
                    </td>
                    <td class="d-none d-md-table-cell">{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</td>
                    <td>
                    <div class="custom-control custom-switch">
                        <input data-url="{{ route('admin.change_active', $user->id) }}" type="checkbox" {{ $user->active ? 'checked' : '' }} class="custom-control-input js-change-active" id="switch{{ $user->id }}">
                        <label class="custom-control-label" for="switch{{ $user->id }}"></label>
                    </div>
                    </td>
                    <td width='100'>
                        <a href="{{route('admin.show',['id'=>$user->id])}}">
                            <span class="ti-pencil-alt"></span> Sửa
                        </a>
                        -
                        <a data-url="{{route('admin.delete',['id'=>$user->id])}}" class="delete-user-button" data-user-id="{{$user->id}}">
                            <span class="ti-trash"></span> Xóa
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$users->render()}}
    @endif
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            $('.js-change-active').change(function () {
                let url = $(this).data('url');
                $.ajax({
                    url: url,
                    method: 'get'
                })
            })
            $('.delete-user-button').click(function () {
                let url = $(this).data('url');
                let item = $(this);
                var cf = confirm('Bạn có chắc chắn muốn xóa thành viên này không?');
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

