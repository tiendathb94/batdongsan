@extends('default.layouts.personal')

@section('page_title')
    Sửa tin rao bán, cho thuê
@endsection

@section('main_content')
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

    <form method="POST" action="{{ route('posts.update_sell',['id' => $post->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <h4>Thông tin cơ bản</h4>
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-12">
                <label htmlFor="title">Tiêu đề <span class="text-danger">(*)</span></label>
                <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-12 col-md-6">
                <label htmlFor="form">Hình thức <span class="text-danger">(*)</span></label>
                <select class="form-control" id="form" name="slug" onchange="getType($(this).val())">
                    <option value="">-- Hình thức --</option>
                    <option value="nha-dat-ban" <?php echo ($post->category->slug == "nha-dat-ban") ?  "selected" : "" ;  ?>>Nhà đất bán</option>
                    <option value="nha-dat-cho-thue" <?php echo ($post->category->slug == "nha-dat-cho-thue") ?  "selected" : "" ;  ?>>Nhà đất cho thuê</option>
                </select>
            </div>
            <div class="col col-sm-12 col-md-6">
                <label htmlFor="">-- Loại -- <span class="text-danger">(*)</span></label>
                <select class="form-control" id="type" name="category_id">
                    <option value="">-- Loại --</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" <?php echo ($post->category_id == $category->id) ?  "selected" : "" ;  ?>>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <div class="row">
            <div class="col col-sm-12 col-md-6">
                <label htmlFor="form">Tỉnh/Thành phố <span class="text-danger">(*)</span></label>
                <select class="form-control" id="form" name="province_id" onchange="getDistricts($(this).val())">
                    <option value="">-- Tỉnh/Thành phố --</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}" <?php echo ($address->province_id == $province->id) ?  "selected" : "" ;  ?>>{{ $province->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col col-sm-12 col-md-6">
                <label htmlFor="">Quận/Huyện <span class="text-danger">(*)</span></label>
                <select class="form-control" id="district" name="district_id" onchange="getWards($(this).val())">
                    <option value="">-- Quận/Huyện --</option>
                    @foreach ($districts as $district)
                        <option value="{{ $district->id }}" <?php echo ($address->district_id == $district->id) ?  "selected" : "" ;  ?>>{{ $district->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col col-sm-12 col-md-6">
                <label htmlFor="">Phường/Xã <span class="text-danger">(*)</span></label>
                <select class="form-control" id="ward" name="ward_id">
                    <option value="">-- Phường/Xã --</option>
                    @foreach ($wards as $ward)
                        <option value="{{ $ward->id }}" <?php echo ($address->ward_id == $ward->id) ?  "selected" : "" ;  ?>>{{ $ward->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col col-sm-12 col-md-6">
                <label htmlFor="">Đường/Phố <span class="text-danger">(*)</span></label>
                <input type="text" name="address" class="form-control" value="{{$address->address}}">
            </div>
        </div>

        <div class="row">
            <div class="col col-sm-12 col-md-6">
                <label htmlFor="">Dự án</label>
                <select class="form-control" id="form" name="project_id">
                    <option value="">-- Dự án --</option>
                    @foreach ($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->long_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col col-sm-12 col-md-6">
                <label htmlFor="">Diện tích</label>
                <div class="w-75 d-flex align-items-center">
                    <input type="number" class="form-control mr-3" name="total_area" value="{{$post->total_area}}"/>
                    <span>m2</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-sm-12 col-md-6">
                <label htmlFor="">Giá</label>
                <input  type="number" class="form-control mr-3" name="price" value="{{$post->price}}"/>
            </div>
            <div class="col col-sm-12 col-md-6">
                <label for="">Đơn vị</label>
                <select name="price_unit" id="" class="form-control">
                    @foreach ($price_unit as $key => $value)
                        <option value="{{ $key }}" <?php echo ($post->price_unit == $key) ?  "selected" : "" ;  ?>>{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <label htmlfor="">Tải lên hình ảnh</label>
                <input type="file" name="image" class="form-control" id="imgInp" accept="image/png, image/jpeg, image/jpg, image/gif">
            </div>
            <div class="col-6">
                <img style="width: 200px; margin-top: 10px" alt="" id="blah">
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-12">
                <label htmlfor="content">Nội dung tin đăng <span class="text-danger">(*)</span></label>
                <textarea rows="3" class="form-control" id="content" name="content">{{$post->content}}</textarea>
            </div>
        </div>
        <div class="row mt-3"><div class="col"><h4>Thông tin khác</h4></div></div>
        <div class="row">
            <div class="col col-sm-12 col-md-6">
                <label for="">Mặt tiền (m)</label>
                <input type="text" class="form-control" id="" name="facade" value="{{$post->facade}}">
            </div>
            <div class="col col-sm-12 col-md-6">
                <label for="">Đường vào (m)</label>
                <input type="text" class="form-control" id="" name="way_in" value="{{$post->way_in}}">
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-12 col-md-6">
                <label for="">Hướng nhà</label>
                <select class="form-control" id="" name="direction_house">
                    @foreach($direction as $key => $value)
                    <option value="{{ $key }}" <?php echo ($post->direction_house == $key) ?  "selected" : "" ;  ?>>{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col col-sm-12 col-md-6">
                <label for="">Hướng ban công</label>
                <select class="form-control" id="" name="direction_balcony">
                @foreach($direction as $key => $value)
                    <option value="{{ $key }}" <?php echo ($post->direction_balcony == $key) ?  "selected" : "" ;  ?>>{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-12 col-md-6">
                <label for="">Số tầng</label>
                <input type="number" class="form-control" id="" name="number_of_floors" value="{{$post->number_of_floors}}">
            </div></div>
        <div class="row">
            <div class="col col-sm-12 col-md-6">
                <label for="">Số phòng ngủ</label><input type="number" class="form-control" id="" name="number_of_bedroom" value="{{$post->number_of_bedroom}}">
            </div>
            <div class="col col-sm-12 col-md-6">
                <label for="">Số toilet</label>
                <input type="number" class="form-control" id="" name="number_of_toilet" value="{{$post->number_of_toilet}}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Nội thất</label>
                <textarea name="furniture" class="form-control" id="" rows="3">
                {{$post->furniture}}
                </textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Thông tin pháp lý</label>
                <textarea class="form-control" placeholder="Ví dụ: đã có sổ đỏ, sổ hồng,..." name="legal_information" id="" rows="3" >
                {{$post->legal_information}}
                </textarea>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col d-flex justify-content-center">
                <button type="submit" class="btn btn-success mr-3">Cập nhật</button>
            </div>
        </div>
    </form>
@endsection

@push('styles')
    <link
        rel="stylesheet"
        href="{{ asset('css/pages/posts/create_sell.css') . '?m=' . filemtime('css/pages/posts/create_sell.css') }}">
@endpush
@push('scripts')
    <script>
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        window.requestOld = @json(old());
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

        function getDistricts(id) {
            $.ajax({
                url: "{{ route('posts.get.district') }}",
                type: "POST",
                data: {
                    id: id
                },
                success: function (respon) {
                    let text = '<option value="" class="d-none" disabled selected>-- Quận/Huyện --</option>';
                    $.each( respon.districts, function( key, value ) {
                        text += `<option value="${value.id}">${value.name}</option>`;
                    });
                    $('#district').removeAttr('disabled');
                    $('#district').html(text);
                },
                errors: function () {
                    alert('Lỗi server chưa lấy được danh sách huyện.')
                }
            })
        }

        function getWards(id) {
            $.ajax({
                url: "{{ route('posts.get.ward') }}",
                type: "POST",
                data: {
                    id: id
                },
                success: function (respon) {
                    let text = '<option value="" class="d-none" disabled selected>-- Phường/Xã --</option>';
                    $.each( respon.wards, function( key, value ) {
                        text += `<option value="${value.id}">${value.name}</option>`;
                    });
                    $('#ward').removeAttr('disabled');
                    $('#ward').html(text);
                },
                errors: function () {
                    alert('Lỗi server chưa lấy được danh sách huyện.')
                }
            })
        }
        function getType(value) {
            $.ajax({
                url: "{{ route('api.category.by_destination_entity') }}",
                type: "GET",
                data: {
                    "destination_entity": 'App\\Entities\\Post',
                    "slug_parent" : value
                },
                success: function (respon) {
                    let text = '<option value="" class="d-none" selected>-- Loại --</option>';
                    $.each( respon, function( key, value ) {
                        text += `<option value="${value.id}">${value.name}</option>`;
                    });
                    $('#type').html(text);
                },
                errors: function () {
                    alert('Lỗi server chưa lấy được danh sách huyện.')
                }
            })
        }
    </script>
	<script src="{{ asset('vendor/js/gijgo.min.js') }}" type="text/javascript"></script>
@endpush
