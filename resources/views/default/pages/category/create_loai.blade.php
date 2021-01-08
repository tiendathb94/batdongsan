@extends('default.layouts.personal')

@section('page_title')
    Tạo loại
@endsection

@section('main_content')
    <h3 style="margin-bottom: 20px">Tạo loại</h3>
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
        <form action="{{ route('pages.category.store_loai') }}" method="POST" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="name">Tên loại,hình thức</label>
                    <input type="text" name="name" value="" class="form-control" id="name" placeholder="Tên loại">
                </div>
                <div class="form-group">
                    <label for="slug">Slug loại,hình thức</label>
                    <input type="text" name="slug" value="" class="form-control" id="slug" placeholder="Slug loại">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Hình thức</label>
                    <select class="form-control" name="parent_id" id="exampleFormControlSelect1">
                        <option value="0">--Chọn--</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <button class="btn btn-success" type="submit" style="width: 100%; font-size: 16px;height: 34px;">Tạo hình thức</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


