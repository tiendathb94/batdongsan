<table class="table table-bordered fs-12 text-center">
    <thead>
        <tr class="bg-thead">
            <th>Tiêu đề</th>
            <th>Hình ảnh</th>
            <th>Địa chỉ</th>
            <th>Diện tích (m2)</th>
            <th>Giá</th>
            <th>Đơn vị</th>
            <th width="100">Trạng thái</th>
            @if(checkRule(auth()->user()))
            <th width="100">Phê duyệt</th>
            <th>Hiển thị</th>
            <th width="100">Hành động</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>
                    @if($post->imageLibraries->count())
                        <img src="{{ asset('storage' . $post->imageLibraries->first()->file_path) }}" style="width: 100px;" alt="">
                    @endif
                </td>
                <td>
                    @php($address = $post->address)
                    @if($address)
                        {{ $address->address }}, {{ $address->ward->name }}, {{ $address->district->name }}, {{ $address->ward->name }}
                    @endif
                </td>
                <td>{{ $post->total_area }}</td>
                <td>{{ $post->price }}</td>
                <td>{{ $post->price_unit_name }}</td>
                <td class='status_approve'>
                    @switch($post->approval)
                        @case(\App\Entities\Post::StatusPending)
                        <div class="bg-warning text-secondary">Đợi duyệt</div>
                        @break

                        @case(\App\Entities\Post::StatusApproved)
                        <div class="bg-success text-white">Đã duyệt</div>
                        @break

                        @case(\App\Entities\Post::StatusDeclined)
                        <div class="bg-danger text-white">Bị từ chối</div>
                        @break
                        @default
                        <div class="bg-warning text-secondary">Đợi duyệt</div>
                        @break
                    @endswitch
                </td>
                @if(checkRule(auth()->user()))
                <td class="action">
                    @if($post->approval == \App\Entities\Post::StatusPending)
                    <a
                        style="cursor:pointer"
                        class="approve-post-button"
                        data-post-id="{{$post->id}}"
                        data-url="{{ route('posts.change_approval', $post->id) }}"
                        data-action="approve">Duyệt</a>
                    -
                    <a
                        style="cursor:pointer"
                        class="approve-post-button text-danger"
                        data-post-id="{{$post->id}}"
                        data-url="{{ route('posts.change_approval', $post->id) }}"
                        data-action="decline">Từ chối</a>
                    @endif    
                </td>
                <td>
                    <div class="custom-control custom-switch">
                        <input data-url="{{ route('posts.change_status', $post->id) }}" type="checkbox" {{ $post->status ? 'checked' : '' }} class="custom-control-input js-change-status" id="switch{{ $post->id }}">
                        <label class="custom-control-label" for="switch{{ $post->id }}"></label>
                    </div>
                </td>
                <td width='100'>
                    <a href="{{$type == 'sell' ? route('posts.edit_sell',['id'=>$post->id]) : route('posts.edit_buy',['id'=>$post->id])}}">
                        <span class="ti-pencil-alt"></span> Sửa
                    </a>
                    -
                    <a data-url="{{$type == 'sell' ? route('posts.delete_sell',['id'=>$post->id]) : route('posts.delete_buy',['id'=>$post->id])}}" class="delete-post-button" data-post-id="{{$post->id}}">
                        <span class="ti-trash"></span> Xóa
                    </a>
                </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
@if(!$posts->count())
  <p class="fs-12 text-center">Bạn chưa đăng tin rao bán/cho thuê nào.</p>
@else
<div class="d-flex justify-content-center">
    {{ $posts->appends(request()->all())->links() }}
</div>  
@endif

@push('scripts')
    <script>
        $(document).ready(function () {
            $('.approve-post-button').click(function () {
                let item = $(this);
                let url = $(this).data('url');
                let action = $(this).data('action');
                url = url + '?action=' + action;
                var element         = $(this).parents("tr").find(".status_approve");
                var element_action  = $(this).parents("tr").find(".action");
                $.ajax({
                    url: url,
                    method: 'get',
                    success: function(data) {
                        if(action == 'approve'){
                            element_action.html('');
                            element.html('<div class="bg-success text-white">Đã duyệt</div>')
                        }
                        if(action == 'decline'){
                            element_action.html('');
                            element.html('<div class="bg-danger text-white">Bị từ chối</div>')
                        }
                    }
                })
            })
            $('.delete-post-button').click(function () {
                let url = $(this).data('url');
                let item = $(this);
                var cf = confirm('Bạn có chắc chắn muốn xóa bài đăng này không?');
                if(cf == true){
                    $.ajax({
                        url: url,
                        method: 'get',
                        success: function(data){
                            if(data){
                                console.log(data);
                                item.parents("tr").remove();
                            }
                        }
                    })
                }
            })
        })
    </script>
@endpush

