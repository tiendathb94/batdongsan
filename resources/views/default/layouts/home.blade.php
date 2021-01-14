@extends('default.layouts.default')
@section('page_title')
    {{$config->title}}
@endsection
@section('head')
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta http-equiv="audience" content="general"><meta name="resource-type" content="document">
   <meta name="abstract" content="Thông tin nhà đất Việt Nam">
   <meta name="classification" content="Bất động sản Việt Nam">
   <meta name="area" content="Nhà đất và bất động sản">
   <meta name="placename" content="Việt Nam">
   <meta name="author" content="Batdongsan.com.vn">
   <meta name="copyright" content="©2007 Batdongsan.com.vn">
   <meta name="owner" content="Batdongsan.com.vn">
   <meta name="generator" content="Công ty Cổ phần PropertyGuru Việt Nam">
   <meta name="distribution" content="Global">
   <meta name="revisit-after" content="1 days">
   <meta property="og:image" content="https://staticfile.batdongsan.com.vn/images/Logo/BDSLogo.jpg">
   <meta name="robots" content="index,follow">
   <meta name="keywords" content="{{$config->meta_keyword}}">
   <meta name="description" content="{{$config->meta_description}}">
   <meta property="og:url" content="{{$config->meta_url}}">
   <meta property="og:type" content="website">
   <meta property="og:title" content="{{$config->title}}">
   <meta property="og:description" content="{{$config->meta_description}}">
@endsection

@section('content')
<!-- Banner & search tool-->
<div class="new-home-2020">
   <div class="home-center">
      <div class="banner-home-slide">
         <form action="#" method="post" novalidate="novalidate">
            <div class="home-search">
               <div id="js-form-search-home"></div>
            </div>
         </form>
         
        <div class="loveMoney102">
            <div class="swiper-container swiper-container-slider">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="/images/banner/1.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="/images/banner/2.jpg" />
                  </div>
               </div>
               <div class="swiper-pagination"></div>
               <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>


      </div>
   </div>
   <!-- Cac control o giua-->
   <div class="home-small">
      <div class="home-small-main">
         <div class="home-small-heading" id="hometabs">
            <ul>
               <li>
                  <h2><a style="cursor: pointer" data-tab="hometab1" class="actived">{{trans('lang.feature_news')}}</a></h2>
               </li>
               <li>
                  <h2><a style="cursor: pointer" href="javascript:void(0)" data-tab="hometab2">{{trans('lang.advice')}}</a></h2>
               </li>
               <li>
                  <h2><a style="cursor: pointer" href="javascript:void(0)" data-tab="hometab3">{{trans('lang.feng_shui')}}</a></h2>
               </li>
               <li>
                  <h2><a style="cursor: pointer" href="javascript:void(0)" data-tab="hometab4">{{trans('lang.new_project')}}</a></h2>
               </li>
            </ul>
            <a href="{{ route('home') }}/tin-tuc" id="tabview" class="home-small-more">{{trans('lang.view_more_news')}}<img src="/images/icons/icon-arrow-right.png"></a>
            <div class="clear"></div>
         </div>
         <div id="news-slide">
            <div id="hometab1" class="newscontain">
               <div class="home-small-main-1 news-show">
                  @php $i=0; @endphp
                  @foreach($newsTabs as $newsTab)
                  @if($newsTab->feature_news == 1)
                  @php $i++; @endphp
                  <div id="hottab-{{$i}}">
                     <h3>
                        <a title="{{$newsTab->title}}" href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}">
                        <span>
                           <img noloaderror="true" imgerr="1" src="{{ $newsTab->thumbnail_path }}" is-lazy-image="true" lazy-id="0">
                        </span>
                        {{$newsTab->title}}
                        @if($i == 1)
                        <img src="/images/icons/hot-01.png" style="width:38px;vertical-align:middle;">
                        @endif
                        </a>
                     </h3>
                     <div class="news-time">
                        <img src="/images/icons/clock.png">{{time_ago($newsTab->updated_at)}}
                     </div>
                  </div>
               @endif
               @endforeach
               </div>
               <div class="home-small-main-2">
                  <div class="list-news">
                     <ul>
                     @php $i=0; @endphp
                     @foreach($newsTabs as $newsTab)
                     @if($newsTab->feature_news == 1)
                     @php $i++; @endphp
                        <li>
                           <h3>
                              <a title="{{$newsTab->title}}" data-index="#hottab-{{$i}}" href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}">
                              {{$newsTab->title}}
                              @if($i == 1)
                              <img src="/images/icons/hot-01.png" style="width:38px;vertical-align:middle;">
                              @endif
                              </a>
                           </h3>
                        </li>
                     @endif
                     @endforeach
                     </ul>
                  </div>
               </div>
               <div class="clear"></div>
            </div>
            <div id="hometab2" class="hidden newscontain">
               <div class="home-small-main-1 news-show">
                     @php $i=0; @endphp
                     @foreach($newsTabs as $newsTab)
                     @if($newsTab->advice == 1)
                     @php $i++; @endphp
                     <div id="newtab-{{$i}}">
                        <h3>
                           <a title="{{$newsTab->title}}" href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}">
                           <span>
                              <img noloaderror="true" imgerr="1" src="{{ $newsTab->thumbnail_path }}" is-lazy-image="true" lazy-id="0">
                           </span>
                           {{$newsTab->title}}
                           </a>
                        </h3>
                        <div class="news-time">
                           <img src="/images/icons/clock.png">{{time_ago($newsTab->updated_at)}}
                        </div>
                     </div>
                  @endif
                  @endforeach
               </div>
               <div class="home-small-main-2">
                  <div class="list-news">
                     <ul>
                        @php $i=0; @endphp
                        @foreach($newsTabs as $newsTab)
                        @if($newsTab->advice == 1)
                        @php $i++; @endphp
                           <li>
                              <h3>
                                 <a title="{{$newsTab->title}}" data-index="#newtab-{{$i}}" href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}">
                                 {{$newsTab->title}}
                                 </a>
                              </h3>
                           </li>
                        @endif
                        @endforeach
                     </ul>
                  </div>
               </div>
               <div class="clear"></div>
            </div>
            <div id="hometab3" class="hidden newscontain">
               <div class="home-small-main-1 news-show">
                     @php $i=0; @endphp
                     @foreach($newsTabs as $newsTab)
                     @if($newsTab->feng_shui == 1)
                     @php $i++; @endphp
                     <div id="advtab-{{$i}}">
                        <h3>
                           <a title="{{$newsTab->title}}" href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}">
                           <span>
                              <img noloaderror="true" imgerr="1" src="{{ $newsTab->thumbnail_path }}" is-lazy-image="true" lazy-id="0">
                           </span>
                           {{$newsTab->title}}
                           </a>
                        </h3>
                        <div class="news-time">
                           <img src="/images/icons/clock.png">{{time_ago($newsTab->updated_at)}}
                        </div>
                     </div>
                  @endif
                  @endforeach
               </div>
               <div class="home-small-main-2">
                  <div class="list-news">
                     <ul>
                        @php $i=0; @endphp
                        @foreach($newsTabs as $newsTab)
                        @if($newsTab->feng_shui == 1)
                        @php $i++; @endphp
                           <li>
                              <h3>
                                 <a title="{{$newsTab->title}}" data-index="#advtab-{{$i}}" href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}">
                                 {{$newsTab->title}}
                                 </a>
                              </h3>
                           </li>
                        @endif
                        @endforeach
                     </ul>
                  </div>
               </div>
               <div class="clear"></div>
            </div>
            <div id="hometab4" class="hidden newscontain">
               <div class="home-small-main-1 news-show">
                     @php $i=0; @endphp
                     @foreach($newsTabs as $newsTab)
                     @if($newsTab->advice == 1)
                     @php $i++; @endphp
                     <div id="newtab-{{$i}}">
                        <h3>
                           <a title="{{$newsTab->title}}" href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}">
                           <span>
                              <img noloaderror="true" imgerr="1" src="{{ $newsTab->thumbnail_path }}" is-lazy-image="true" lazy-id="0">
                           </span>
                           {{$newsTab->title}}
                           </a>
                        </h3>
                        <div class="news-time">
                           <img src="/images/icons/clock.png">{{time_ago($newsTab->updated_at)}}
                        </div>
                     </div>
                  @endif
                  @endforeach
               </div>
               <div class="home-small-main-2">
                  <div class="list-news">
                     <ul>
                        @php $i=0; @endphp
                        @foreach($newsTabs as $newsTab)
                        @if($newsTab->advice == 1)
                        @php $i++; @endphp
                           <li>
                              <h3>
                                 <a title="{{$newsTab->title}}" data-index="#newtab-{{$i}}" href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}">
                                 {{$newsTab->title}}
                                 </a>
                              </h3>
                           </li>
                        @endif
                        @endforeach
                     </ul>
                  </div>
               </div>
               <div class="clear"></div>
            </div>
         </div>
      </div>
      <div class="home-small-banner">
         <div class="loveMoney102" positioncode="BANNER_POSITION_RIGHT_2020" style="margin-bottom: 0px">
            <div class="swiper-container ads_1">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <a href="#" target="_blank" title="" rel="nofollow">
                    <img src="/images/banner/ads1.jpg" style="max-width: 100%; height:250px;" class="banner-img"/>
                    </a>
                  </div>
                  <div class="swiper-slide">
                     <a href="#" target="_blank" title="" rel="nofollow">
                    <img src="/images/banner/ads2.jpg" style="max-width: 100%; height:250px;" class="banner-img"/>
                    </a>
                  </div>
               </div>
               <div class="swiper-pagination"></div>
               <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>

            <div class="swiper-container ads_2">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <a href="#" target="_blank" title="" rel="nofollow">
                    <img src="/images/banner/ads3.jpg" style="max-width: 100%; height:250px;" class="banner-img"/>
                    </a>
                  </div>
                  <div class="swiper-slide">
                     <a href="#" target="_blank" title="" rel="nofollow">
                    <img src="/images/banner/ads4.jpg" style="max-width: 100%; height:250px;" class="banner-img"/>
                    </a>
                  </div>
               </div>
               <div class="swiper-pagination"></div>
               <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>

         </div>
      </div>
      <div class="clear"></div>
   </div>
   @if($listReals->count() > 0)
   <div class="home-center bg-grey" id="interestedProductsBinnovaContent">
      <div class="home-product product-4-you">
         <h2 class="fl">{{trans('lang.real_estate_for_you')}}</h2>
         <div class="home-more-link">
            <a href="#">{{trans('lang.latest_real_estate_sale')}}</a>
            <a href="#">{{trans('lang.latest_real_estate_for_rent')}}</a>
         </div>
         <div class="clear"></div>
         <ul>
            @foreach($listReals as $listReal)
            <li class="moreBox">
               <div class="vip5">
                  <div class="product-thumb ">
                     <a title="{{$listReal->long_name}}" href="{{route('pages.project.project_detail',['categorySlug'=>$listReal->category->slug,'slug'=>$listReal->slug])}}">
                     <img src="{{$listReal->getThumbnail()}}" alt="{{$listReal->long_name}}">
                     </a>
                     <!-- <span class="product-feature">
                     </span>
                     <span class="product-media">4</span> -->
                  </div>
                  <div class="home-product-bound">
                     <div class="p-title textTitle">
                        <a href="{{route('pages.project.project_detail',['categorySlug'=>$listReal->category->slug,'slug'=>$listReal->slug])}}" title="{{$listReal->long_name}}">{{$listReal->long_name}}</a>
                     </div>
                     <div class="product-price">{{$listReal->price ? $listReal->getPriceFormatted() : 'Đang cập nhật'}}</div>
                     <span class="ic_dot">·</span>
                     <div class="pro-m2">{{$listReal->total_area}} m²</div>
                     <div class="product-address">
                        <a href="#" title="Long Thành">Long Thành</a>,
                        <a href="#" title="Đồng Nai">Đồng Nai</a>
                     </div>
                     <div class="product-date">
                        {{time_ago($listReal->updated_at)}}
                        <span class="tooltip-time">{{date("d/m/Y", strtotime($listReal->updated_at))}}</span>
                     </div>
                  </div>
               </div>
            </li>
            @endforeach
         </ul>
         <div class="clear"></div>
         <div id="ucHomeProductInterest_pnlViewMore">
            <div class="home-viewmore">
               <a href="javascript:void(0)" id="prd-viewmore">
                  Mở rộng&nbsp;&nbsp;<img src="/images/icons/icon-down-blue.png">
               </a>
               <a href="{{ route('home') }}/du-an-bat-dong-san" id="prd-viewless">
                  Xem tiếp
               </a>
            </div>
         </div>
      </div>
   </div>
   @endif
   @if($listBuy->count() > 0 OR $listSell->count() > 0)
   <div class="home-center bg-grey" id="interestedProductsBinnovaContent">
      <div class="home-product product-4-you">
         <h2 class="fl">{{trans('lang.product_for_you')}}</h2>
         <div class="home-more-link">
            <!-- <a href="#">{{trans('lang.latest_real_estate_sale')}}</a>
            <a href="#">{{trans('lang.latest_real_estate_for_rent')}}</a> -->
         </div>
         <div class="clear"></div>
         <!-- Sản phẩm nhà đất cần mua cần thuê -->
         <ul style="display:flex">
            @foreach($listBuy as $item)
            <li class="moreBox">
               <div class="vip5">
                  <div class="product-thumb ">
                     <a title="{{$item->title}}" href="{{route('posts.detail.posts',['CategorySlug'=>$item->category->slug,'slug'=>$item->slug])}}">
                        <img src="{{$item->getThumbnail()}}" alt="{{$item->title}}">
                     </a>
                     <span class="product-feature">
                     </span>
                     <span class="product-media">4</span>
                  </div>
                  <div class="home-product-bound">
                     <div class="p-title textTitle">
                        <a href="{{route('posts.detail.posts',['CategorySlug'=>$item->category->slug,'slug'=>$item->slug])}}" title="{{$item->title}}">{{$item->title}}</a>
                     </div>
                     <div class="product-price">{{$item->price ? $item->price : 'Đang cập nhật'}} {{$item->price_unit_name}}</div>
                     <span class="ic_dot">·</span>
                     <div class="pro-m2">{{$item->total_area}} m²</div>
                     <div class="product-address">
                     @php $address = $item->address; @endphp
                     @if($address)
                        <a href="{{route('posts.detail.posts',['CategorySlug'=>$item->category->slug,'slug'=>$item->slug])}}" title="{{ $address->address }}">{{ $address->address }}</a>,
                        <a href="{{route('posts.detail.posts',['CategorySlug'=>$item->category->slug,'slug'=>$item->slug])}}" title="{{ $address->province->name }}">{{ $address->province->name }}</a>
                     @endif
                     </div>
                     <div class="product-date">
                        {{time_ago($item->updated_at)}}
                        <span class="tooltip-time">{{date("d/m/Y", strtotime($item->updated_at))}}</span>
                     </div>
                  </div>
               </div>
            </li>
            @endforeach
         </ul>
         <!-- Sản phẩm nhà đất bán cho thuê -->
         <ul>
            @foreach($listSell as $item)
            <li class="moreBox">
               <div class="vip5">
                  <div class="product-thumb ">
                     <a title="{{$item->title}}" href="{{route('posts.detail.posts',['CategorySlug'=>$item->category->slug,'slug'=>$item->slug])}}">
                     <img src="{{$item->getThumbnail()}}" alt="{{$item->title}}">
                     </a>
                     <span class="product-feature">
                     </span>
                     <span class="product-media">4</span>
                  </div>
                  <div class="home-product-bound">
                     <div class="p-title textTitle">
                        <a href="{{route('posts.detail.posts',['CategorySlug'=>$item->category->slug,'slug'=>$item->slug])}}" title="{{$item->title}}">{{$item->title}}</a>
                     </div>
                     <div class="product-price">{{$item->price ? $item->price : 'Đang cập nhật'}} {{$item->price_unit_name}}</div>
                     <span class="ic_dot">·</span>
                     <div class="pro-m2">{{$item->total_area}} m²</div>
                     <div class="product-address">
                     @php $address = $item->address; @endphp
                     @if($address)
                        <a href="{{route('posts.detail.posts',['CategorySlug'=>$item->category->slug,'slug'=>$item->slug])}}" title="{{ $address->address }}">{{ $address->address }}</a>,
                        <a href="{{route('posts.detail.posts',['CategorySlug'=>$item->category->slug,'slug'=>$item->slug])}}" title="{{ $address->province->name }}">{{ $address->province->name }}</a>
                     @endif
                     </div>
                     <div class="product-date">
                        {{time_ago($item->updated_at)}}
                        <span class="tooltip-time">{{date("d/m/Y", strtotime($item->updated_at))}}</span>
                     </div>
                  </div>
               </div>
            </li>
            @endforeach
         </ul>
         <div class="clear"></div>
      </div>
   </div>
   @endif
   <script type="text/javascript">
      (function callJQuery() {
          if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.InterestedProductsBinnova) {
              new window.FrontEnd.Home.InterestedProductsBinnova({
              });
          } else {
              setTimeout(callJQuery, 100)
          }
      })();
   </script>
   <div class="home-small">
      <div class="home-product-place">
         <h2>{{trans('lang.real_estate_by_location')}}</h2>
         <div>
            <div class="place-big">
               <div class="place-img slick-initialized slick-slider">
                  <div aria-live="polite" class="slick-list draggable">
                     <div class="slick-track" role="listbox" style="opacity: 1; width: 1680px;">
                     <img src="https://file4.batdongsan.com.vn/images/newhome/cities1/HCM-web-1.jpg" src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/HCM-web-1.jpg" is-lazy-image="true" lazy-id="7" class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 560px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/HCM-web-1.jpg" src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/HCM-web-2.jpg" is-lazy-image="true" lazy-id="8" class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide01" style="width: 560px; position: relative; left: -560px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/HCM-web-1.jpg" src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/HCM-web-3.jpg" is-lazy-image="true" lazy-id="9" class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide02" style="width: 560px; position: relative; left: -1120px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"></div>
                  </div>
               </div>
               <div class="place-info buy-info">
                  <h3>
                     <a href="https://batdongsan.com.vn/nha-dat-ban-tp-hcm">
                     <span class="place-name">TP. Hồ Chí Minh</span>
                     <span class="place-number">69512 tin đăng</span>
                     </a>
                  </h3>
               </div>
            </div>
            <div class="place-small">
               <div class="place-item">
                  <div class="place-img slick-initialized slick-slider">
                     <div aria-live="polite" class="slick-list draggable">
                        <div class="slick-track" role="listbox" style="opacity: 1; width: 810px;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/HN-web-3.jpg" src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/HN-web-1.jpg" is-lazy-image="true" lazy-id="10" class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide10" style="width: 270px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/HN-web-3.jpg" src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/HN-web-2.jpg" is-lazy-image="true" lazy-id="11" class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide11" style="width: 270px; position: relative; left: -270px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/HN-web-3.jpg" src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/HN-web-3.jpg" is-lazy-image="true" lazy-id="12" class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide12" style="width: 270px; position: relative; left: -540px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"></div>
                     </div>
                  </div>
                  <div class="place-info buy-info">
                     <h3>
                        <a href="https://batdongsan.com.vn/nha-dat-ban-ha-noi">
                        <span class="place-name">Hà Nội</span>
                        <span class="place-number">58878 tin đăng</span>
                        </a>
                     </h3>
                  </div>
               </div>
               <div class="place-item">
                  <div class="place-img slick-initialized slick-slider">
                     <div aria-live="polite" class="slick-list draggable">
                        <div class="slick-track" role="listbox" style="opacity: 1; width: 810px;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/DDN-web-1.jpg" src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/DDN-web-1.jpg" is-lazy-image="true" lazy-id="13" class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide20" style="width: 270px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/DDN-web-1.jpg" src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/DDN-web-2.jpg" is-lazy-image="true" lazy-id="14" class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide21" style="width: 270px; position: relative; left: -270px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/DDN-web-1.jpg" src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/DDN-web-3.jpg" is-lazy-image="true" lazy-id="15" class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide22" style="width: 270px; position: relative; left: -540px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"></div>
                     </div>
                  </div>
                  <div class="place-info buy-info">
                     <h3>
                        <a href="#">
                        <span class="place-name">Đà Nẵng</span>
                        <span class="place-number">3720 tin đăng</span>
                        </a>
                     </h3>
                  </div>
               </div>
               <div class="place-item nomargin">
                  <div class="place-img slick-initialized slick-slider">
                     <div aria-live="polite" class="slick-list draggable">
                        <div class="slick-track" role="listbox" style="opacity: 1; width: 540px;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/BD-web-1.jpg" src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/BD-web-1.jpg" is-lazy-image="true" lazy-id="16" class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide30" style="width: 270px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/BD-web-1.jpg" src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/BD-web-2.jpg" is-lazy-image="true" lazy-id="17" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide31" style="width: 270px; position: relative; left: -270px; top: 0px; z-index: 999; opacity: 1;"></div>
                     </div>
                  </div>
                  <div class="place-info buy-info">
                     <h3>
                        <a href="#">
                        <span class="place-name">Bình Dương</span>
                        <span class="place-number">9852 tin đăng</span>
                        </a>
                     </h3>
                  </div>
               </div>
               <div class="place-item nomargin">
                  <div class="place-img slick-initialized slick-slider">
                     <div aria-live="polite" class="slick-list draggable">
                        <div class="slick-track" role="listbox" style="opacity: 1; width: 810px;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-1.jpg" src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-1.jpg" is-lazy-image="true" lazy-id="18" class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide40" style="width: 270px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-1.jpg" src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-2.jpg" is-lazy-image="true" lazy-id="19" class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide41" style="width: 270px; position: relative; left: -270px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-1.jpg" src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-3.jpg" is-lazy-image="true" lazy-id="20" class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide42" style="width: 270px; position: relative; left: -540px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"></div>
                     </div>
                  </div>
                  <div class="place-info buy-info">
                     <h3>
                        <a href="#">
                        <span class="place-name">Đồng Nai</span>
                        <span class="place-number">7721 tin đăng</span>
                        </a>
                     </h3>
                  </div>
               </div>
            </div>
            <div class="clear"></div>
         </div>
      </div>
      <!-- Tag -->
      <!-- Banner giua -->
      <div class="w-img-100">
         <div class="loveMoney102 adshared_1" positioncode="BANNER_POSITION_MIDDLE_2020">
            <div class="swiper-container ads_1">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <a href="#" target="_blank" title="" rel="nofollow">
                    <img src="/images/banner/bn1.jpg" style="max-width: 100%; height:250px;" class="banner-img"/>
                    </a>
                  </div>
                  <div class="swiper-slide">
                     <a href="#" target="_blank" title="" rel="nofollow">
                    <img src="/images/banner/bn2.jpg" style="max-width: 100%; height:250px;" class="banner-img"/>
                    </a>
                  </div>
               </div>
               <div class="swiper-pagination"></div>
               <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
         </div>
      </div>
      @if($projectfeatures->count() > 0)
      <div class="home-project">
         <h2 class="fl">{{trans('lang.outstanding_project')}}</h2>
         <div class="home-more-link">
            <a href="#">{{trans('lang.view_more')}}&nbsp;&nbsp;<img src="/images/icons/icon-arrow-right.png"></a>
         </div>
         <div class="clear"></div>
         <div class="swiper-container">
            <ul class="swiper-wrapper">
            @foreach($projectfeatures as $projectfeature)
               <li class="swiper-slide">
                  <a href="{{ route('news.show', [$projectfeature->category->slug, $projectfeature->slug]) }}" title="{{$projectfeature->title}}">
                  <img alt="{{$projectfeature->title}}" noloaderror="true" imgerr="2" src="{{ $projectfeature->thumbnail_path }}" src-lazy="{{ $projectfeature->thumbnail_path }}" is-lazy-image="true" lazy-id="21">
                  {{$projectfeature->title}}
                  </a>
               </li>
            @endforeach 
            </ul>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
         </div>
         <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
         <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
      </div>
      @endif
      <script type="text/javascript">
         (function callJQuery() {
             if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.HighlightProjectsBinnova) {
                 new window.FrontEnd.Home.HighlightProjectsBinnova();
             } else
                 setTimeout(callJQuery, 100)
         })();
      </script>
      @if($hotnews->count() > 0)
      <div class="home-hotnews m-b-30 m-t-38">
         <h2>{{trans('lang.hot_news')}}</h2>
         <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
            <ul class="swiper-wrapper">
            @php $i=0; @endphp
            @foreach($hotnews as $hotnew)
               @php $i++; @endphp
               <li class="swiper-slide">
                  <div class="hotnews-img">
                     <a href="{{ route('news.show', [$hotnew->category->slug, $hotnew->slug]) }}" title="{{$hotnew->title}}">
                     <img alt="article.ArticleTitle" noloaderror="true" imgerr="1" src="{{ $hotnew->thumbnail_path }}" src-lazy="{{ $hotnew->thumbnail_path }}" is-lazy-image="true" lazy-id="24">
                     </a>
                  </div>
                  <div class="hotnews-link">
                     <span>0<?php echo $i; ?>.</span>
                     <h3 class="">
                        <a href="{{ route('news.show', [$hotnew->category->slug, $hotnew->slug]) }}" title="{{$hotnew->title}}">{{$hotnew->title}}</a>
                     </h3>
                  </div>
               </li>
            @endforeach
            </ul>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
         </div>
         <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
         <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
      </div>
      @endif
      <script type="text/javascript">
         (function callJQuery() {
             if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.VipNewsBinnova) {
                 new window.FrontEnd.Home.VipNewsBinnova({});
             } else {
                 setTimeout(callJQuery, 100)
             }
         })();
      </script>
      <div class="w-img-100">
         <div class="loveMoney102" positioncode="BANNER_POSITION_MIDDLE_2020_2">
            <div class="swiper-container ads_2">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <a href="#" target="_blank" title="" rel="nofollow">
                    <img src="/images/banner/bn3.jpg" style="max-width: 100%; height:250px;" class="banner-img"/>
                    </a>
                  </div>
                  <div class="swiper-slide">
                     <a href="#" target="_blank" title="" rel="nofollow">
                    <img src="/images/banner/bn4.jpg" style="max-width: 100%; height:250px;" class="banner-img"/>
                    </a>
                  </div>
               </div>
               <div class="swiper-pagination"></div>
               <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
         </div>
      </div>
      <div class="home-utility m-b-30">
         <h2>{{trans('lang.utility_support')}}</h2>
         <ul>
            <li class="color-1">
               <a href="#" rel="nofollow"><img src="/images/icons/fshome.png">Xem tuổi xây nhà</a>
            </li>
            <li class="color-2">
               <a href="#" rel="nofollow"><img src="/images/icons/estimate.png">  Dự tính chi phí làm nhà </a>
            </li>
            <li class="color-3">
               <a href="#" rel="nofollow"><img src="/images/icons/money.png">  Tính lãi suất </a>
            </li>
            <li class="color-4">
               <a href="#" rel="nofollow"><img src="/images/icons/fengshui.png">  Tư vấn phong thủy</a>
            </li>
         </ul>
         <div class="clear"></div>
      </div>
      <div class="home-enterprise m-b-30">
         <h2 class="fl">{{ trans('lang.typical_business')}}</h2>
         <div class="home-more-link">
            <a href="#">{{ trans('lang.view_more')}}&nbsp;&nbsp;<img src="/images/icons/icon-arrow-right.png"></a>
         </div>
         <div class="clear"></div>
         <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
            <ul class="swiper-wrapper" style="transform: translate3d(-2292px, 0px, 0px); transition-duration: 0ms;">
               <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="6" style="width: 165px; margin-right: 26px;">
                  <a href="https://batdongsan.com.vn/thi-cong-xay-dung-ba-dinh/hd-mo-ep2132" title="HD Mon Holdings">
                  <img class="color_flip" alt="HD Mon Holdings" src="https://file4.batdongsan.com.vn/2016/12/17/Nl3mS01v/20161217085942-2e1c.jpg" src-lazy="https://file4.batdongsan.com.vn/2016/12/17/Nl3mS01v/20161217085942-2e1c.jpg" is-lazy-image="true" lazy-id="36">                        </a>
               </li>
               <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="7" style="width: 165px; margin-right: 26px;">
                  <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-12/cong-ty-co-phan-tap-doan-dia-oc-va-ep2773" title="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐỊA ỐC VẠN XUÂN">
                  <img class="color_flip" alt="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐỊA ỐC VẠN XUÂN" src="https://file4.batdongsan.com.vn/2020/04/06/PGsxuI1y/20200406083257-058a.jpg" src-lazy="https://file4.batdongsan.com.vn/2020/04/06/PGsxuI1y/20200406083257-058a.jpg" is-lazy-image="true" lazy-id="37">                        </a>
               </li>
               <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="8" style="width: 165px; margin-right: 26px;">
                  <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-2/cong-ty-tnhh-dau-tu-va-quan-ly-bat-dong-sa-ep2772" title="CÔNG TY TNHH ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN DTN">
                  <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN DTN" src="https://file4.batdongsan.com.vn/2020/01/03/3ZsSL6gy/20200103145745-1450.jpg" src-lazy="https://file4.batdongsan.com.vn/2020/01/03/3ZsSL6gy/20200103145745-1450.jpg" is-lazy-image="true" lazy-id="38">                        </a>
               </li>
               <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="9" style="width: 165px; margin-right: 26px;">
                  <a href="https://batdongsan.com.vn/thi-cong-xay-dung-thu-dau-mot-bd/cong-ty-cp-xay-dung-tu-van-dau-tu-binh-duon-ep75" title="Công ty CP Xây dựng Tư vấn Đầu tư Bình Dương (BICONSI)">
                  <img class="color_flip" alt="Công ty CP Xây dựng Tư vấn Đầu tư Bình Dương (BICONSI)" src="https://file4.batdongsan.com.vn/2020/05/27/hmcVYWuR/20200527142414-6a13.jpg" src-lazy="https://file4.batdongsan.com.vn/2020/05/27/hmcVYWuR/20200527142414-6a13.jpg" is-lazy-image="true" lazy-id="39">                        </a>
               </li>
               <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="10" style="width: 165px; margin-right: 26px;">
                  <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-7/novalan-ep480" title="Novaland Group">
                  <img class="color_flip" alt="Novaland Group" src="https://file4.batdongsan.com.vn/2020/07/21/n1AwoD7S/20200721151328-207e.jpg" src-lazy="https://file4.batdongsan.com.vn/2020/07/21/n1AwoD7S/20200721151328-207e.jpg" is-lazy-image="true" lazy-id="40">                        </a>
               </li>
               <li class="swiper-slide" data-swiper-slide-index="0" style="width: 165px; margin-right: 26px;">
                  <a href="https://batdongsan.com.vn/cac-linh-vuc-khac-cau-giay/cong-ty-co-pha-ep2826" title="Công ty Cổ Phần Deborah">
                  <img class="color_flip" alt="Công ty Cổ Phần Deborah" src="https://file4.batdongsan.com.vn/2020/11/18/hmcVYWuR/20201118143341-43eb.jpg" src-lazy="https://file4.batdongsan.com.vn/2020/11/18/hmcVYWuR/20201118143341-43eb.jpg" is-lazy-image="true" lazy-id="30">                        </a>
               </li>
               <li class="swiper-slide" data-swiper-slide-index="1" style="width: 165px; margin-right: 26px;">
                  <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-1/cong-ty-tnhh-dau-tu-dia-oc-thanh-ph-ep1898" title="Công ty TNHH Đầu tư Địa ốc Thành phố (CityLand)">
                  <img class="color_flip" alt="Công ty TNHH Đầu tư Địa ốc Thành phố (CityLand)" src="https://file4.batdongsan.com.vn/2020/10/16/hmcVYWuR/20201016153855-fa63.jpg" src-lazy="https://file4.batdongsan.com.vn/2020/10/16/hmcVYWuR/20201016153855-fa63.jpg" is-lazy-image="true" lazy-id="31">                        </a>
               </li>
               <li class="swiper-slide" data-swiper-slide-index="2" style="width: 165px; margin-right: 26px;">
                  <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-1/cong-ty-cp-tap-doan-dau-tu-chau-a-thai-bin-ep2818" title="Công ty CP Tập Đoàn Đầu Tư Châu Á Thái Bình Dương">
                  <img class="color_flip" alt="Công ty CP Tập Đoàn Đầu Tư Châu Á Thái Bình Dương" src="https://file4.batdongsan.com.vn/2020/10/05/hmcVYWuR/20201005135528-83f1.jpg" src-lazy="https://file4.batdongsan.com.vn/2020/10/05/hmcVYWuR/20201005135528-83f1.jpg" is-lazy-image="true" lazy-id="32">                        </a>
               </li>
               <li class="swiper-slide" data-swiper-slide-index="3" style="width: 165px; margin-right: 26px;">
                  <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-ben-cat-bd/cong-ty-tnhh-dau-tu-xay-dung-dich-vu-hoang-th-ep2813" title="CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG DỊCH VỤ HOÀNG THỔ GROUP">
                  <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG DỊCH VỤ HOÀNG THỔ GROUP" src="https://file4.batdongsan.com.vn/2020/09/28/PGsxuI1y/20200928152939-aa13.jpg" src-lazy="https://file4.batdongsan.com.vn/2020/09/28/PGsxuI1y/20200928152939-aa13.jpg" is-lazy-image="true" lazy-id="33">                        </a>
               </li>
               <li class="swiper-slide" data-swiper-slide-index="4" style="width: 165px; margin-right: 26px;">
                  <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-2/cong-ty-tnhh-dau-tu-dich-vu-bat-dong-san-16-ep2807" title="CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ BẤT ĐỘNG SẢN 168 PROPERTY">
                  <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ BẤT ĐỘNG SẢN 168 PROPERTY" src="https://file4.batdongsan.com.vn/2020/09/15/PGsxuI1y/20200915154813-0430.jpg" src-lazy="https://file4.batdongsan.com.vn/2020/09/15/PGsxuI1y/20200915154813-0430.jpg" is-lazy-image="true" lazy-id="34">                        </a>
               </li>
            </ul>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
         </div>
         <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
         <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
         <div class="clear"></div>
      </div>
      <script type="text/javascript">
         (function callJQuery() {
             if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.TypicalEnterpriseBinnova) {
                 new window.FrontEnd.Home.TypicalEnterpriseBinnova({});
             } else {
                 setTimeout(callJQuery, 100)
             }
         })();
      </script>
      @if($tuvanluat->count() > 0)
      <div class="homemain home-social">
         <h2>{{ trans('lang.legal_advice')}}</h2>
         <div class="swiper-container">
            <ul class="swiper-wrapper">
            @foreach($tuvanluat as $tuvan)
               <li class="swiper-slide">
                  <div class="home-social-img">
                     <a href="{{ route('news.show', [$tuvan->category->slug, $tuvan->slug]) }}" target="_blank" rel="nofollow">
                        <img src="{{ $tuvan->thumbnail_path }}" src-lazy="{{ $tuvan->thumbnail_path }}" is-lazy-image="true" lazy-id="49">
                     </a>
                  </div>
                  <div class="home-social-link">
                     <a href="{{ route('news.show', [$tuvan->category->slug, $tuvan->slug]) }}" target="_blank" rel="nofollow">{{$tuvan->title}}</a>
                  </div>
               </li>
            @endforeach   
            </ul>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
         </div>
         <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
         <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
         <div class="clear"></div>
      </div>
      @endif
      <script type="text/javascript">
         (function callJQuery() {
             if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.NewsSocialBinnova) {
                 new window.FrontEnd.Home.NewsSocialBinnova({});
             } else {
                 setTimeout(callJQuery, 100)
             }
         })();
      </script>
   </div>
</div>
@endsection
@push('styles')
    <link
        rel="stylesheet"
        href="{{ asset('css/partials/project/block-search.css') . '?m=' . filemtime('css/partials/project/block-search.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('js/pages/project/searchHome.js') . '?m=' . filemtime('js/pages/project/searchHome.js') }}"></script>
@endpush