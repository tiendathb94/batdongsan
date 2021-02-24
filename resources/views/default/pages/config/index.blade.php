@extends('default.layouts.personal')

@section('page_title')
    Cấu hình
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
        <form action="{{ route('config.update') }}" method="POST" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="title">Tiêu đề</label>
                    <input type="text" name="title" value="{{$config->title}}" class="form-control" placeholder="Tiêu đề">
                </div>
                <div class="form-group">
                    <label for="name">Tên</label>
                    <input type="text" name="name" value="{{$config->name}}" class="form-control" placeholder="Tên">
                </div>
                <div class="form-group">
                    <label for="slogan">Slogan</label>
                    <input type="text" name="slogan" value="{{$config->slogan}}" class="form-control" placeholder="Slogan">
                </div>
                <div class="form-group">
                    <label for="contact">Liên hệ</label>
                    <input type="text" name="contact" value="{{$config->contact}}" class="form-control" placeholder="Liên hệ">
                </div>
                <div class="form-group">
                    <label for="embed_code">Mã nhúng</label>
                    <input type="text" name="embed_code" value="{{$config->embed_code}}" class="form-control" placeholder="Mã nhúng">
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" value="{{$config->facebook}}" class="form-control" placeholder="Facebook">
                </div>
                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" name="instagram" value="{{$config->instagram}}" class="form-control" placeholder="Instagram">
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" name="twitter" value="{{$config->twitter}}" class="form-control" placeholder="Twitter">
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube</label>
                    <input type="text" name="youtube" value="{{$config->youtube}}" class="form-control" placeholder="Youtube">
                </div>               
                <div class="form-group">
                    <label for="meta">Tên Meta</label>
                    <input type="text" name="meta" value="{{$config->meta}}" class="form-control" placeholder="Meta">
                </div>
                <div class="form-group">
                    <label for="meta_description">Mô tả meta</label>
                    <input type="text" name="meta_description" value="{{$config->meta_description}}" class="form-control" placeholder="Mô tả meta">
                </div>
                <div class="form-group">
                    <label for="meta_keyword">Từ khóa meta</label>
                    <input type="text" name="meta_keyword" value="{{$config->meta_keyword}}" class="form-control" placeholder="Từ khóa meta">
                </div>
                <div class="form-group">
                    <label for="meta_url">Đường dẫn meta</label>
                    <input type="text" name="meta_url" value="{{$config->meta_url}}" class="form-control" placeholder="Từ khóa meta">
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


