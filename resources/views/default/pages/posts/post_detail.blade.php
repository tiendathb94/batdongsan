@extends('default.layouts.default')

@section('page_title')
    {{$post->title}}
@endsection

@section('content')
    @php $images = $post->getImages(); @endphp
    <div style="width: 80%; margin: 0 auto" class="product-detail">
        
        <div class="list_images">
            @php $i = 1; @endphp
            @foreach($images as $image)
            <div class="mySlides">
                <div class="numbertext"> {{$i++}}/ {{count($images)}}</div>
                <img src="{{$image}}" style="width:100%">
            </div>
            @endforeach
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
        <div class="row_list_images">
            @php $i = 1; @endphp
            @foreach($images as $image)
            <div class="column">
                <img class="demo cursor" src="{{$image}}" style="width:100%" onclick="currentSlide({{$i++}})" alt="The Woods">
            </div>
            @endforeach
        </div>
        <h1 class="tile-product"> {{$post->title}}</h1>
        <div class="divide">&nbsp;</div>
            <div class="short-detail-wrap">
                <ul class="short-detail-2 clearfix pad-16">
                    <li><span class="sp1">Mức giá:</span><span class="sp2">{{$post->price}} {{$post->price_unit_name}}</span></li>
                    <li><span class="sp1">Diện tích:</span><span class="sp2">{{$post->total_area}} m²</span></li>
                    <li><span class="sp1">Phòng ngủ:</span><span class="sp2">{{$post->number_of_bedroom}} PN</span></li>
                </ul>
            </div>       
        <div class="divide">&nbsp;</div>
        <div class="detail-product">
        <div class="detail-1 pad-bot-16">
            <span class="title-detail">Thông tin mô tả</span>
            <div class="des-product" style="overflow: visible;">
            {!! $post->content !!}
            </div>
            <div class="box-view-more hidden">
                <div class="gradient">&nbsp;</div>
                <div class="view-more">Xem thêm<img src="https://staticfile.batdongsan.com.vn/images/icons/16x16/ic_caret_down.svg"></div>
            </div>
        </div>
        <div class="detail-2 pad-16">
            <span class="title-detail">Đặc điểm bất động sản</span>
            <div class="box-round-grey3">
                <div class="row-1"><span class="r1">Loại tin đăng:</span><span class="r2">{{$post->category->name}}</span></div>
                <div class="row-1"><span class="r1">Địa chỉ:</span><span class="r2">{{$post->project ? $post->project->long_name : ""}}</span></div>
                <div class="row-1"><span class="r1">Số phòng ngủ:</span><span class="r2">{{$post->number_of_bedroom}} (phòng)</span></div>
                <div class="row-1"><span class="r1">Số toilet:</span><span class="r2">{{$post->number_of_toilet}} (phòng)</span></div>
            </div>
        </div>
        @if(!is_null($post->project))
        <div class="detail-2 pad-16">
            <span class="title-detail">Thông tin dự án</span>
            <div class="box-round-grey3">
                <div class="row-1">
                    <span class="r1">Tên dự án:</span><span class="r2">
                        {{$post->project->long_name}}<span class="dot">·</span>
                        <a href="{{route('pages.project.project_detail',['categorySlug' => $post->category->name, 'slug' => $post->slug])}}" target="_blank" class="link">Xem dự án</a>
                    </span>
                </div>
                    <div class="row-1"><span class="r1">Chủ đầu tư:</span><span class="r2">{{$post->project->investor->name}}</span></div>
                    <div class="row-1"><span class="r1">Quy mô:</span><span class="r2">{{$post->project->investor->overview}}</span></div>
            </div>
        </div>
        @endif
        </div>
        <!--start product seo tag-->
            <div class="product-seo-tag">
                <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>
                <ul class="ul-round clearfix">
                        <li><a href="/tags/ban/ban-chung-cu-vinhomes-grand-park-quan-9" title="Bán chung cư Vinhomes Grand Park quận 9">Bán chung cư Vinhomes Grand Park quận 9</a></li>
                        <li><a href="/tags/ban/ban-chung-cu-vinhomes-grand-park-quan-9-quan-9" title="Bán chung cư Vinhomes Grand Park quận 9 Quận 9">Bán chung cư Vinhomes Grand Park quận 9 Quận 9</a></li>
                        <li><a href="/tags/ban/ban-can-ho-vinhomes-grand-park-quan-9" title="Bán căn hộ Vinhomes Grand Park quận 9">Bán căn hộ Vinhomes Grand Park quận 9</a></li>
                        <li><a href="/tags/ban/ban-can-ho-chung-cu-vinhomes-grand-park-quan-9" title="Bán căn hộ chung cư Vinhomes Grand Park quận 9">Bán căn hộ chung cư Vinhomes Grand Park quận 9</a></li>
                        <li><a href="/tags/ban/ban-can-ho-vinhomes-grand-park-quan-9-quan-9" title="Bán căn hộ Vinhomes Grand Park quận 9 Quận 9">Bán căn hộ Vinhomes Grand Park quận 9 Quận 9</a></li>
                        <li><a href="/tags/ban/ban-can-ho-chung-cu-vinhomes-grand-park-quan-9-quan-9" title="Bán căn hộ chung cư Vinhomes Grand Park quận 9 Quận 9">Bán căn hộ chung cư Vinhomes Grand Park quận 9 Quận 9</a></li>
                </ul>
            </div>
        <!--end product seo tag-->
        <div class="divide">&nbsp;</div>
        <div class="product-config pad-16">
            <ul class="short-detail-2 list2 clearfix">
                <li><span class="sp1">Ngày đăng:</span><span class="sp3">13/01/2021</span></li>
                <li><span class="sp1">Ngày hết hạn:</span><span class="sp3">23/01/2021</span></li>
                <li><span class="sp1">Loại tin:</span><span class="sp3">Tin Vip đặc biệt</span></li>
                <li><span class="sp1">Mã tin:</span><span class="sp3">28526653</span></li>
            </ul>
        </div>    
    </div>
</div>
        </div>
    </div>
        </div>
    </div>
@endsection
@push('styles')
<style>
    
.product-share {
    display: inline-block;
    cursor: pointer;
}
.product-detail .tile-product {
    font-family: Roboto;
    font-style: normal;
    font-weight: bold;
    font-size: 25px;
    line-height: 32px;
    letter-spacing: -.0016em;
    color: #2c2f36;
    margin: 8px 0;
    overflow: hidden;
    word-break: break-word;
}
.divide {
    height: 1px;
    line-height: 1px;
    background: #ebedf0;
    width: 100%;
    margin: 16px 0;
    clear: both;
}
.product-detail .short-detail-2 .sp1 {
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 20px;
    color: #747c87;
    width: auto;
    display: block;
    margin-bottom: 4px;
}
.product-detail ul.short-detail-2 li {
    float: left;
    margin-right: 64px;
}
.product-detail ul.short-detail-2 {
    width: 100%;
    display: block;
}
ul li {
    list-style: none;
    margin: 0;
    padding: 0;
}
.product-detail .short-detail-wrap {
    position: relative;
}
.product-detail .short-detail-2 .sp1 {
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 20px;
    color: #747c87;
    width: auto;
    display: block;
}
.product-detail .short-detail-2 .sp2 {
    font-style: normal;
    font-weight: 500;
    font-size: 20px;
    line-height: 28px;
    color: #2c2f36;
    width: auto;
    display: block;
    margin-top: 4px;
}
.product-detail .short-detail-wrap .repost {
    top: 20px;
}
.product-detail .repost {
    position: absolute;
    right: 0;
    color: #2c2f36;
    line-height: 24px;
}
.product-detail .detail-product .title-detail {
    font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    font-size: 20px;
    line-height: 28px;
    color: #2c2f36;
    margin-bottom: 16px;
    display: inline-block;
    width: 100%;
}
.product-detail .detail-product .detail-1 {
    position: relative;
    overflow: hidden;
    height: 100%;
}
.box-round-grey3 {
    border: 1px solid #ebedf0;
    box-sizing: border-box;
    border-radius: 4px;
    padding: 12px 16px;
    width: 100%;
}
.product-detail .detail-product .detail-2 .row-1 {
    display: inline-block;
    width: 100%;
    margin-bottom: 12px;
}
.box-round-grey3 {
    border: 1px solid #ebedf0;
    box-sizing: border-box;
    border-radius: 4px;
    padding: 12px 16px;
    width: 100%;
}
.product-detail .detail-product .detail-2 .row-1 {
    display: inline-block;
    width: 100%;
    margin-bottom: 12px;
}
.product-detail .detail-product .detail-2 .row-1 .r2 {
    font-size: 14px;
    line-height: 20px;
}
.product-detail .detail-product .detail-2 .row-1 .r2 {
    float: left;
    width: calc(100% - 120px);
    color: #2c2f36;
}
.product-detail .detail-product .detail-2 .row-1 .r1 {
    width: 112px;
    float: left;
    font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 20px;
    color: #2c2f36;
    margin-right: 8px;
}
.product-detail .detail-product .detail-2 .row-1 .r2 {
    font-size: 14px;
    line-height: 20px;
}

.product-detail .detail-product .detail-2 .row-1 .r2 {
    float: left;
    width: calc(100% - 120px);
    color: #2c2f36;
}
.product-seo-tag .seo-tag-title {
    font-weight: 500;
    font-size: 20px;
    line-height: 28px;
    color: #2c2f36;
    margin-bottom: 16px;
}
img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.list_images {
  position: relative;
  height: 500px;
  display: flex;
}

/* Hide the images by default */
.mySlides {
  display: none;
  width: 100%;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: 50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

/* .row:after {
  content: "";
  display: table;
  clear: both;
} */

/* Six columns side by side */
.column {
  display: flex;
  float: left;
  width: auto;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.row_list_images{
    display: flex;
    height: 100px;
    overflow: hidden
}
</style>
@endpush

@push('scripts')
    <script>
        
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                console.log(n);
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "flex";
            dots[slideIndex-1].className += " active";
            }
    </script>
@endpush