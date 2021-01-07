@extends('default.layouts.personal')

@section('page_title')
    Quản lý dự án chờ duyệt
@endsection

@section('main_content')
    <h3 class="mb-3">Quản lý dự án chờ duyệt</h3>
    <form class="mb-5">
        <div class="row">
            <div class="form-group col-sm-12 col-md-6">
                <label>Từ khóa</label>
                <input class="form-control" name="keyword" placeholder="Nhập từ khóa tìm kiếm"
                       value="{{$keyword}}"/>
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label>Loại hình phát triển</label>
                <select name="category_id" class="form-control">
                    <option value="">-- Loại hình phát triển --</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{$categoryId == $category->id ? 'selected':''}}>
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col text-right">
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </div>
        </div>
    </form>

    @if(count($projects)<1)
        @include('default.partials.no-data',['message'=>'Không có dự án nào đợi duyệt hoặc không có kết quả phù hợp với tìm kiếm của bạn.'])
    @else
        <table class="table table-bordered fs-12 text-center">
            <thead>
            <tr class="bg-thead">
                <th class="d-none d-md-table-cell">ID</th>
                <th>Tên dự án</th>
                <th class="d-none d-md-table-cell">Tên ngắn</th>
                <th class="d-none d-md-table-cell">Loại hình phát triển</th>
                <th>Trạng thái</th>
                <th class="d-none d-md-table-cell">Ngày tạo</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr>
                    <td class="d-none d-md-table-cell">{{$project->id}}</td>
                    <td>{{$project->long_name}}</td>
                    <td class="d-none d-md-table-cell">{{$project->short_name}}</td>
                    <td class="d-none d-md-table-cell">{{$project->category ? $project->category->name:''}}</td>
                    <td>
                        @switch($project->status)
                            @case(\App\Entities\Project::StatusPending)
                            <div class="bg-warning text-secondary">Đợi duyệt</div>
                            @break

                            @case(\App\Entities\Project::StatusApproved)
                            <div class="bg-success text-white">Đã duyệt</div>
                            @break

                            @case(\App\Entities\Project::StatusDeclined)
                            <div class="bg-danger text-white">Bị từ chối</div>
                            @break
                        @endswitch
                    </td>
                    <td class="d-none d-md-table-cell">{{\Carbon\Carbon::parse($project->created_at)->format('d/m/Y')}}</td>
                    <td>
                        <a
                            href="#"
                            class="approve-project-button"
                            data-project-id="{{$project->id}}"
                            data-action="approve">Duyệt</a>
                        -
                        <a
                            href="#"
                            class="decline-project-button text-danger"
                            data-project-id="{{$project->id}}"
                            data-action="decline">Từ chối</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$projects->render()}}

        <div id="background-react-component-container"></div>
    @endif
@endsection

@push('scripts')
    <script src="{{ asset('js/pages/project/manage.js') . '?m=' . filemtime('js/pages/project/manage.js') }}"></script>
@endpush
