@extends('default.layouts.personal')

@section('page_title')
    Cấu hình footer
@endsection

@section('main_content')
    <h3 style="margin-bottom: 20px">Cập nhật cấu hình</h3>
    <div class="container main">
        <div>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            
            @if ($error = Session::get('error'))
                <div class="alert alert-danger">
                    <p>{{ $error }}</p>
                </div>
            @endif

        </div>
        <form action="{{ route('config.footer') }}" method="POST" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="title">Link logo</label>
                    <input type="text" name="logo" value="{{$config->logo}}" class="form-control" placeholder="Link logo">
                </div>
                <div class="form-group">
                    <label for="company_name">Tên doanh nghiệp</label>
                    <input type="text" name="company_name" value="{{$config->company_name}}" class="form-control" placeholder="Tên doanh nghiệp">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <input type="text" name="address" value="{{$config->address}}" class="form-control" placeholder="Địa chỉ">
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" name="phone" value="{{$config->phone}}" class="form-control" placeholder="Số điện thoại">
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" value="{{$config->facebook}}" class="form-control" placeholder="Facebook">
                </div>
                <div class="form-group">
                    <label for="zalo">zalo</label>
                    <input type="text" name="zalo" value="{{$config->zalo}}" class="form-control" placeholder="zalo">
                </div>
                <div class="form-group">
                    <label for="youtube">youtube</label>
                    <input type="text" name="youtube" value="{{$config->youtube}}" class="form-control" placeholder="youtube">
                </div>
                <div class="form-group">
                    <label for="hotline">hotline</label>
                    <input type="text" name="hotline" value="{{$config->hotline}}" class="form-control" placeholder="hotline">
                </div>
                <div class="form-group">
                    <label for="mail">mail</label>
                    <input type="text" name="mail" value="{{$config->mail}}" class="form-control" placeholder="mail">
                </div>               
                <div class="form-group">
                    <label for="mail_cs">mail_cs</label>
                    <input type="text" name="mail_cs" value="{{$config->mail_cs}}" class="form-control" placeholder="mail_cs">
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <button class="btn btn-success" type="submit" style="width: 100%; font-size: 16px;height: 34px;">Cập nhật cấu hình</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


