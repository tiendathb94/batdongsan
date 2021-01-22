@extends('default.layouts.personal')

@section('page_title')
    Thêm mới Banner
@endsection

@section('main_content')
    <h3 class="mb-3">Thêm mới Banner</h3>
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
        <form action="{{ route('config.banner.store') }}" method="POST" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="name">Tên </label>
                    <input type="text" name="name" value="" class="form-control" id="name" placeholder="Tên banner">
                </div>
                <div class="form-group row mt-3">
                    <div class="col-6">
                        <label htmlFor="">Tải lên hình ảnh</label>
                        <input type="file" name="image" class="form-control" id="imgInp" accept="image/png, image/jpeg, image/jpg, image/gif">
                    </div>
                    <div class="col-6">
                        <img style="width: 200px; margin-top: 10px"  alt="" id="blah">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <button class="btn btn-success" type="submit" style="width: 100%; font-size: 16px;height: 34px;">Tạo banner</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function() {
            readURL(this);
        });
    })
</script>
@endpush


