@extends('default.layouts.personal')

@section('page_title')
    Cập nhật loại
@endsection

@section('main_content')
    <h3 style="margin-bottom: 20px">Cập nhật loại</h3>
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
        <form action="{{ route('pages.category.update_loai',['id' => $category->id]) }}" method="POST" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="name">Tên loại,hình thức</label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control" id="name" placeholder="Tên loại">
                </div>
                <div class="form-group">
                    <label for="slug">Slug loại,hình thức</label>
                    <input type="text" name="slug" value="{{$category->slug}}" class="form-control" id="slug" placeholder="Slug loại">
                </div>
                <div class="form-group">
                    <label for="meta_title">Tiêu đề meta</label>
                    <input type="text" name="meta_title" value="{{$category->meta_title}}" class="form-control" id="meta_title" placeholder="Tiêu đề meta">
                </div>
                <div class="form-group">
                    <label for="meta_keyword">Từ khóa meta</label>
                    <input type="text" name="meta_keyword" value="{{$category->meta_keyword}}" class="form-control" id="meta_keyword" placeholder="Từ khóa meta">
                </div>
                <div class="form-group">
                    <label for="meta_description">Mô tả meta</label>
                    <input type="text" name="meta_description" value="{{$category->meta_description}}" class="form-control" id="meta_description" placeholder="Mô tả meta">
                </div>
                <div class="form-group">
                    <label for="meta_content">Nội dung meta</label>
                    <input type="text" name="meta_content" value="{{$category->meta_content}}" class="form-control" id="meta_content" placeholder="Nội dung meta">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Hình thức</label>
                    <select class="form-control" name="parent_id" id="exampleFormControlSelect1">
                        <option value="0">--Chọn--</option>
                        @foreach($categories as $value)
                            <option value="{{$value->id}}" <?php echo ($value->id == $category->parent_id) ?  "selected" : "" ;  ?> >{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <button class="btn btn-success" type="submit" style="width: 100%; font-size: 16px;height: 34px;">Cập nhật hình thức</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


