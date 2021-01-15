@extends('default.layouts.default')

@section('page_title')
    {{$category->name}}
@endsection

@section('content')
<div style="width: 80%; margin: 0 auto">
    <div class="product-list-header pad-top-8">
        <h1>{{$category->name}}</h1>
        <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">194,853</span> bất động sản.</div>
    </div>
    <div class="product-lists mar-top-16" id="product-lists-web" style="display:block">
    @foreach($posts as $post)
        <div class="vip0 product-item clearfix" uid="936162" prid="28319425" vtpe="vip0" ipos="1" pgno="1" clo="srpg">
            <a class="wrap-plink" href="{{route('posts.detail.posts',['CategorySlug'=>$post->category->slug,'slug'=>$post->slug])}}" title="{{$post->title}}">
                <div class="product-image ">
                    <span class="product-avatar">
                        <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}" class="product-avatar-img">
                    </span>
                    <span class="product-feature"></span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <span class="vipZero product-link" title="" style="overflow: visible;">
                            {{$post->title}}
                        </span>
                    </h3>
                    <div class="product-info">
                        <span class="price">{{$post->price}} {{$post->price_unit}}</span>
                            <span class="dot">·</span>
                            <span class="area">{{$post->total_area}} m²</span>
                                                        <span class="dot">·</span>
                        <span class="location">{{$post->address->address}}, {{$post->address->province->name}}</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        {!! $post->content !!}
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime" title="">
                            <span class="product-labeltime">
                                {{time_ago($post->updated_at)}}
                                <span class="tooltip-time">{{date("d/m/Y", strtotime($post->updated_at))}}</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip" title="">
                                <i class="iconSave" data-productid="28319425" data-avatar="<img class=&quot;product-avatar-img&quot; alt=&quot;Rổ h&amp;#224;ng độc quyền căn hộ The Origami, Rainbow, Manhattan gi&amp;#225; gốc chủ đầu tư, LH: 0906806852&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/12/25/20201225164228-c398_wm.jpg&quot; is-lazy-image=&quot;true&quot;/>" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/12/25/20201225164228-c398_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Rổ hàng độc quyền căn hộ The Origami, Rainbow, Manhattan giá gốc chủ đầu tư, LH: 0906806852" data-price="1.69 tỷ" data-area="46 m²" data-pricesort="1690000000" data-areasort="46" data-room="1" data-toilets="0" data-address="Quận 9, Hồ Chí Minh" data-description="1468 căn hộ giá chủ đầu tư có tặng voucher 200 triệu call 0906806852. Chính thức mở bán cụm s10, s6 phân khu origami vào ngày 12/12/2020 với nhiều ưu đãi: - Chỉ thanh toán 15% giá bán (ký hợp đồng mu" data-duration="Hôm nay" data-updatedtime="14/01/2021" data-datesort="01/14/2021 18:50:35" data-contactname="Nguyễn Kim Thọ" data-contactmobile="0906806852" data-url="/ban-can-ho-chung-cu-phuong-long-thanh-my-prj-vinhomes-grand-park-quan-9/ro-hang-doc-quyentruc-tiep-chu-dau-tu-vingroup-rainbown-the-origami-mahatan-lh-0906806852-pr28319425" data-totalmedia="15" data-createbyuser="936162"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
    @if(count($posts) == 0)
        <h1>Hiện tại danh mục này chưa có bài đăng nào !</h1>
    @endif 
    </div>
</div>





@endsection
@push('styles')
<style>
.product-item {
    border: 1px solid #ebedf0;
    box-sizing: border-box;
    border-radius: 4px;
    margin-bottom: 16px;
    position: relative;
}
.product-item .product-image {
    width: 224px;
    min-height: 172px;
    float: left;
    position: relative;
}
.product-item .product-image .product-avatar {
    display: block;
}
.product-item .product-image .product-avatar img:first-child {
    height: 172px;
    border-radius: 4px 0 0 4px;
}
.product-item .product-image .product-avatar img {
    width: 100%;
    height: 100%;
    vertical-align: top;
    object-fit: cover;
}
.product-item .product-feature {
    position: absolute;
    top: 0;
    right: 0;
}
.product-lists .product-main {
    width: calc(100% - 224px);
    float: right;
    padding: 12px 16px 14px 16px;
    overflow: hidden;
}
.product-lists .vip0 .product-title .product-link {
    color: #c12f25;
    text-indent: 20px;
    text-transform: uppercase;
    background: url(../../images/icons/16x16/ic_star.svg) no-repeat left 0;
    overflow: visible;
}
.product-lists .product-info {
    margin-bottom: 8px;
}
.product-lists .product-info .price, .product-lists .product-info .area {
    font-weight: bold;
}

.product-lists .product-info span {
    color: #2c2f36;
    display: block;
    float: left;
}
.product-lists .product-info .dot {
    padding: 0 8px;
}
.product-lists .product-info span {
    color: #2c2f36;
    display: block;
    float: left;
}
.product-info{
    display: flex;
}
.dot {
    line-height: 20px;
    color: #747c87;
    padding: 0 8px;
    display: inline-block;
}
.product-lists .product-info .price, .product-lists .product-info .area {
    font-weight: bold;
}

.product-lists .product-info span {
    color: #2c2f36;
    display: block;
    float: left;
}
.product-lists .product-content {
    color: #747c87;
    display: -webkit-box;
    height: 40px;
    overflow: hidden !important;
    -webkit-line-clamp: 2;
    position: relative;
    text-overflow: ellipsis;
    white-space: normal;
    word-wrap: break-word;
    -webkit-box-orient: vertical;
    line-height: 20px;
}
.product-lists .product-wrap {
    position: absolute;
    width: calc(100% - 224px);
    bottom: 8px;
    right: 0;
    background: #fff;
    padding: 0 16px;
}
</style>
@endpush