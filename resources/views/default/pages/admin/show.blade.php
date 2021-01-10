@extends('default.layouts.personal')

@section('page_title')
    Cập nhật thành viên
@endsection

@section('main_content')
    <h3 style="margin-bottom: 20px">Cập nhật thành viên</h3>
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
        <form action="{{ route('admin.update',['id'=>$user->id]) }}" method="POST" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="name">Tên</label>
                    <input type="text" name="fullname" value="{{$user->fullname}}" class="form-control" id="name" placeholder="Tên">
                </div>
                <div class="form-group">
                    <label for="phone">SĐT</label>
                    <input type="text" name="phone" value="{{$user->phone}}" class="form-control" id="phone" placeholder="Số điện thoại">
                </div>
                <div class="form-group">
                    <label for="date_of_birth">Ngày sinh</label>
                    <input type="date" name="date_of_birth" value="{{$user->date_of_birth}}" class="form-control" id="date_of_birth" placeholder="Ngày sinh">
                </div>
                @php $gender = ['Nam' => '1', 'Nữ' => 2]; @endphp
                <div class="form-group">
                    <label for="phone">Giới tính</label>
                    @foreach($gender as $key => $value)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="{{$value}}" <?php echo ($value == $user->gender) ?  "checked" : "" ;  ?>>
                        <label class="form-check-label" for="gender1">
                                {{$key}}
                        </label>
                    </div>
                    @endforeach
                </div>
                
                <div class="row">
                    <div class="form-group col-sm-6">
                        <button class="btn btn-success" type="submit" style="width: 100%; font-size: 16px;height: 34px;">Cập nhật</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


