@extends('default.layouts.default')
@section('page_title')
    Trang chủ - Đăng tin bất động sản uy tín và chất lượng nhất Việt Nam
@endsection

@section('content')


<div class="sr-content new-layout">
   <!-- Banner -->
   <div positioncode="BANNER_POSITION_MOBILE_MASTER_HEAD" class="loveMoney102">
      <div class="full-background">
         <div class="homemain">
            <div class="banner-home-slide">
               <div class="swiper-container swiper-container-slider">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                     <img src="/images/banner/bnm1.jpg" style="height:100%;width:100%"/>
                     </div>
                     <div class="swiper-slide">
                     <img src="/images/banner/bnm2.jpg" style="height:100%;width:100%"/>
                     </div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Tin tuc noi bat-->
   <div class="homemain">
      <div class="home-focusnews">
         <div class="home-small-heading" id="hometabs">
            <ul class="slick-initialized slick-slider">
               <div aria-live="polite" class="slick-list draggable">
                  <div class="slick-track" role="listbox" style="opacity: 1; width: 20000px; transform: translate3d(0px, 0px, 0px);">
                     <li class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00">
                        <h2><a href="javascript:void(0)" data-tab="hometab1" class="actived" tabindex="0">{{trans('lang.feature_news')}}</a></h2>
                     </li>
                     <li class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide02">
                        <h2><a href="javascript:void(0)" data-tab="hometab2" tabindex="-1">{{trans('lang.advice')}}</a></h2>
                     </li>
                     <li class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide03">
                        <h2><a href="javascript:void(0)" data-tab="hometab3" tabindex="-1">{{trans('lang.feng_shui')}}</a></h2>
                     </li>
                  </div>
               </div>
            </ul>
         </div>
         <div id="news-slide">
            <div id="hometab1" class="newscontain">
               @php $i=0; @endphp
               @foreach($newsTabs->slice(0, 1) as $newsTab)
               @if($newsTab->feature_news == 1)
               @php $i++; @endphp
               <div class="home-small-main-1">
                  <h3>
                     <a href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}">
                     <img class="news-avatar" src="{{ $newsTab->thumbnail_path }}" is-lazy-image="true" lazy-id="0">
                     {{$newsTab->title}}
                     </a>
                  </h3>
                  <div class="news-time">
                     <img src="/images/icons/clock.png">{{time_ago($newsTab->updated_at)}}
                  </div>
               </div>
               @endif
               @endforeach
               <div class="home-small-main-2">
                  <div class="list-news">
                     <ul>
                     @php $i=0; @endphp
                     @foreach($newsTabs->slice(0, 5) as $newsTab)
                     @if($newsTab->feature_news == 1)
                     @php $i++; @endphp
                        <li>
                           <div class="list-avar">
                              <a href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}"><img src="{{ $newsTab->thumbnail_path }}"></a>
                           </div>
                           <div class="list-title">
                              <h3>
                                 <a href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}">
                                 {{$newsTab->title}}
                                 </a>
                              </h3>
                              <span>{{time_ago($newsTab->updated_at)}}</span>
                           </div>
                           <div class="clear"></div>
                        </li>
                     @endif
                     @endforeach
                     </ul>
                  </div>
               </div>
            </div>
            <div id="hometab2" class="hidden newscontain">
               <div class="home-small-main-1" javascript-location-value="newNews">
                  @php $i=0; @endphp
                  @foreach($newsTabs->slice(0, 1) as $newsTab)
                  @if($newsTab->advice == 1)
                  @php $i++; @endphp
                  <div class="home-small-main-1">
                     <h3>
                        <a href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}">
                        <img class="news-avatar" src="{{ $newsTab->thumbnail_path }}" is-lazy-image="true" lazy-id="0">
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
                     @foreach($newsTabs->slice(0, 5) as $newsTab)
                     @if($newsTab->advice == 1)
                     @php $i++; @endphp
                        <li>
                           <div class="list-avar">
                              <a href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}"><img src="{{ $newsTab->thumbnail_path }}"></a>
                           </div>
                           <div class="list-title">
                              <h3>
                                 <a href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}">
                                 {{$newsTab->title}}
                                 </a>
                              </h3>
                              <span>{{time_ago($newsTab->updated_at)}}</span>
                           </div>
                           <div class="clear"></div>
                        </li>
                     @endif
                     @endforeach
                     </ul>
                  </div>
               </div>
            </div>
            <div id="hometab3" class="hidden newscontain">
               <div class="home-small-main-1" javascript-location-value="newNews">
                  @php $i=0; @endphp
                  @foreach($newsTabs->slice(0, 1) as $newsTab)
                  @if($newsTab->feng_shui == 1)
                  @php $i++; @endphp
                  <div class="home-small-main-1">
                     <h3>
                        <a href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}">
                        <img class="news-avatar" src="{{ $newsTab->thumbnail_path }}" is-lazy-image="true" lazy-id="0">
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
                     @foreach($newsTabs->slice(0, 5) as $newsTab)
                     @if($newsTab->feng_shui == 1)
                     @php $i++; @endphp
                        <li>
                           <div class="list-avar">
                              <a href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}"><img src="{{ $newsTab->thumbnail_path }}"></a>
                           </div>
                           <div class="list-title">
                              <h3>
                                 <a href="{{ route('news.show', [$newsTab->category->slug, $newsTab->slug]) }}">
                                 {{$newsTab->title}}
                                 </a>
                              </h3>
                              <span>{{time_ago($newsTab->updated_at)}}</span>
                           </div>
                           <div class="clear"></div>
                        </li>
                     @endif
                     @endforeach
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div>
            <a href="{{ route('home') }}/tin-tuc" id="tabview" class="home-small-more">
            {{trans('lang.view_more_news')}}
            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/icon-arrow-right.png" ignore-lazy-loading="">
            </a>
         </div>
      </div>
   </div>
   <script type="text/javascript">
      (function callJQuery() {
          if (window.FrontEnd && window.FrontEnd.Systems && window.FrontEnd.Systems.Home && window.FrontEnd.Systems.Home.HotNewsGroupBinnova) {
              new window.FrontEnd.Systems.Home.HotNewsGroupBinnova({
                  getNewNewsAsHtmlUrl: '/Systems/Home/GetNewNewsAsHtml',
                  getAdviceNewsAsHtmlUrl: '/Systems/Home/GetAdviceNewsAsHtml',
                  getFengshuiNewsAsHtmlUrl: '/Systems/Home/GetFengshuiNewsAsHtml'
              });
          } else {
              setTimeout(callJQuery, 100)
          }
      })();
   </script>
   <!--Khu vực tin rao dành cho bạn-->
   <div class="homemain bg-grey m-b-30 binnova" id="interestedProductsBinnovaContent">
      <div class="home-product product-4-you">
         <h2>Bất động sản dành cho bạn</h2>
         <div id="broker-product-list">
            <ul class="s-list product-list-new" id="ul_for_u">
               <li class="vip5   " uid="26914734">
                  <a href="/ban-nha-rieng-pho-xa-dan-phuong-kim-lien/ban-dong-da-view-cong-vien-30-m2-5t-gia-2-8-ty-pr26914734" title="Bán nhà Xã Đàn, Đống Đa view công viên 30 m2, 5T, giá 2,9 tỷ" name="i0">
                     <h3 class="hh-sr ">
                        Bán nhà Xã Đàn, Đống Đa view công viên 30 m2, 5T, giá 2,9 tỷ
                     </h3>
                     <div class="padding">
                        <div class="sr-image">
                           <div class="add-img on">
                              <img alt="Bán nhà Xã Đàn, Đống Đa view công viên 30 m2, 5T, giá 2,9 tỷ" noloaderror="true" imgerr="1" src="https://file4.batdongsan.com.vn/crop/200x140/2020/09/04/20200904234801-f6b9_wm.jpg">
                              <div class="bg-totalMedia">
                                 <span class="icon-rb">
                                 <span>4</span>
                                 <img src="https://staticfile.batdongsan.com.vn/images/mobile/Union.svg" ignore-lazy-loading="" onerror="this.src='https://staticfile.batdongsan.com.vn/images/mobile/Union.png'" alt="icon">
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="sr-info">
                           <div class="line row1">
                              <span class="sp-info sp-bold">2.9 tỷ</span><span class="sp-info sp-ng">.</span>
                              <span class="sp-info sp-bold">30 m²</span><span class="sp-info sp-ng">.</span>
                           </div>
                           <div class="line row2">
                              <span class="sp-info sp-address">
                              Đống Đa, Hà Nội
                              </span>
                           </div>
                           <div class="line row3 vip5 vipaddon">
                              <span class="sp-info sp-uptime">Hôm nay</span>
                              <i class="iconSave" data-productid="26914734" data-avatar="<img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; X&amp;#227; Đ&amp;#224;n, Đống Đa view c&amp;#244;ng vi&amp;#234;n 30 m2, 5T, gi&amp;#225; 2,9 tỷ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/04/20200904234801-f6b9_wm.jpg&quot;/><img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/04/20200904234828-5341_wm.jpg&quot;/><img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/04/20200904234843-826f_wm.jpg&quot;/>" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/09/04/20200904234801-f6b9_wm.jpg" data-vipclass="vip5 vipaddon" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà Xã Đàn, Đống Đa view công viên 30 m2, 5T, giá 2,9 tỷ" data-price="2.9 tỷ" data-area="30 m²" data-pricesort="0" data-areasort="0" data-room="" data-toilets="0" data-address="Đống Đa, Hà Nội" data-description="Cần bán gấp nhà Xã Đàn để ra nước ngoài sinh sống cùng gia đình 30m2 x 5 T siêu hiếm khu Xã Đàn giá 2,9 tỷ. Vị trí đẹp từ nhà ra đường lớn 15m, gần bệnh viện Đông Đô, công viên Thống Nhất, trường ĐH Bách Khoa, Xây Dựng, KS Kim Liên. - Nhà chủ tự xây chắc chắn, thiết kế đơn giản, nhà 4 phòng ngủ, tần..." data-duration="Hôm nay" data-updatedtime="24/11/2020" data-datesort="11/24/2020 19:54:54" data-contactname="" data-contactmobile="" data-url="/ban-nha-rieng-pho-xa-dan-phuong-kim-lien/ban-dong-da-view-cong-vien-30-m2-5t-gia-2-8-ty-pr26914734" data-totalmedia="4" data-createbyuser="1377551"></i>
                           </div>
                        </div>
                     </div>
                  </a>
               </li>
               <li class="vip5  " uid="27917864">
                  <a href="/ban-nha-mat-pho-duong-ho-tung-mau-phuong-mai-dich/lai-mot-em-t-dt-160m-9t-mt-9-m-gia-chi-29-ty-pr27917864" title="Lại một em HOT Hồ Tùng Mậu. DT 160m + 9t + mt 9 m, giá chỉ 29 tỷ " name="i0">
                     <h3 class="hh-sr ">
                        Lại một em HOT Hồ Tùng Mậu. DT 160m + 9t + mt 9 m, giá chỉ 29 tỷ 
                     </h3>
                     <div class="padding">
                        <div class="sr-image">
                           <div class="add-img ">
                              <img alt="Lại một em HOT Hồ Tùng Mậu. DT 160m + 9t + mt 9 m, giá chỉ 29 tỷ " noloaderror="true" imgerr="1" src="https://file4.batdongsan.com.vn/crop/200x140/2020/11/24/20201124195434-daae_wm.jpg">
                           </div>
                        </div>
                        <div class="sr-info">
                           <div class="line row1">
                              <span class="sp-info sp-bold">29 tỷ</span><span class="sp-info sp-ng">.</span>
                              <span class="sp-info sp-bold">160 m²</span><span class="sp-info sp-ng">.</span>
                           </div>
                           <div class="line row2">
                              <span class="sp-info sp-address">
                              Cầu Giấy, Hà Nội
                              </span>
                           </div>
                           <div class="line row3 vip5">
                              <span class="sp-info sp-uptime">Hôm nay</span>
                              <i class="iconSave" data-productid="27917864" data-avatar="<img class=&quot;product-avatar-img&quot; alt=&quot;Lại một em HOT Hồ T&amp;#249;ng Mậu. DT 160m + 9t + mt 9 m, gi&amp;#225; chỉ 29 tỷ &quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/24/20201124195434-daae_wm.jpg&quot;/>" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/24/20201124195434-daae_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Lại một em HOT Hồ Tùng Mậu. DT 160m + 9t + mt 9 m, giá chỉ 29 tỷ " data-price="29 tỷ" data-area="160 m²" data-pricesort="0" data-areasort="0" data-room="" data-toilets="0" data-address="Cầu Giấy, Hà Nội" data-description=" BÁN GIÁ TRỊ ĐẦU TƯ - APARTMENT - CĂN HỘ DỊCH VỤ - 9 TẦNG - THANG MÁY - DOANH THU KHỦNG 
                                 - Hồ Tùng Mậu - Cầu Giây.
                                 - Nhà có Dt 160 m + 9 t + mt 9 m giá chỉ 29 tỷ.
                                 - Tòa nhà nằm cách mặt đường Hồ Tùng Mậu 50m, đường trước nhà ô tô tránh, cách Quận Ủy Quận Nam Từ Liêm 200m, gần các trường ĐH lớn, t..." data-duration="Hôm nay" data-updatedtime="24/11/2020" data-datesort="11/24/2020 19:54:49" data-contactname="" data-contactmobile="" data-url="/ban-nha-mat-pho-duong-ho-tung-mau-phuong-mai-dich/lai-mot-em-t-dt-160m-9t-mt-9-m-gia-chi-29-ty-pr27917864" data-totalmedia="1" data-createbyuser="1453161"></i>
                           </div>
                        </div>
                     </div>
                  </a>
               </li>
               <li class="vip5  " uid="27917865">
                  <a href="/ban-nha-mat-pho-duong-linh-nam-phuong-linh-nam/-40m2-5-tang-kinh-doanh-o-to-tranh-gia-chi-3-5-ty-lh-0918683886-pr27917865" title="Nhà Lĩnh Nam 40m2 5 tầng kinh doanh ô tô tránh giá chỉ 3.5 tỷ lh 0918683886" name="i0">
                     <h3 class="hh-sr ">
                        Nhà Lĩnh Nam 40m2 5 tầng kinh doanh ô tô tránh giá chỉ 3.5 tỷ lh <span class="hidden-mobile box" raw="0918683886" style="font-size: inherit;">0918683***</span>
                     </h3>
                     <div class="padding">
                        <div class="sr-image">
                           <div class="add-img on">
                              <img alt="Nhà Lĩnh Nam 40m2 5 tầng kinh doanh ô tô tránh giá chỉ 3.5 tỷ lh 0918683886" noloaderror="true" imgerr="1" src="https://file4.batdongsan.com.vn/crop/200x140/2020/11/24/20201124195320-8ff3_wm.jpg">
                              <div class="bg-totalMedia">
                                 <span class="icon-rb">
                                 <span>2</span>
                                 <img src="https://staticfile.batdongsan.com.vn/images/mobile/Union.svg" ignore-lazy-loading="" onerror="this.src='https://staticfile.batdongsan.com.vn/images/mobile/Union.png'" alt="icon">
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="sr-info">
                           <div class="line row1">
                              <span class="sp-info sp-bold">3.5 tỷ</span><span class="sp-info sp-ng">.</span>
                              <span class="sp-info sp-bold">40 m²</span><span class="sp-info sp-ng">.</span>
                           </div>
                           <div class="line row2">
                              <span class="sp-info sp-address">
                              Hoàng Mai, Hà Nội
                              </span>
                           </div>
                           <div class="line row3 vip5">
                              <span class="sp-info sp-uptime">Hôm nay</span>
                              <i class="iconSave" data-productid="27917865" data-avatar="<img class=&quot;product-avatar-img&quot; alt=&quot;Nh&amp;#224; Lĩnh Nam 40m2 5 tầng kinh doanh &amp;#244; t&amp;#244; tr&amp;#225;nh gi&amp;#225; chỉ 3.5 tỷ lh 0918683886&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/24/20201124195320-8ff3_wm.jpg&quot;/>" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/24/20201124195320-8ff3_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Nhà Lĩnh Nam 40m2 5 tầng kinh doanh ô tô tránh giá chỉ 3.5 tỷ lh 0918683886" data-price="3.5 tỷ" data-area="40 m²" data-pricesort="0" data-areasort="0" data-room="" data-toilets="0" data-address="Hoàng Mai, Hà Nội" data-description="Bán nhà phố Lĩnh Nam - quận Hoàng Mai.
                                 - Nhà 40 m2 x 5 tầng - kinh doanh  - ô tô tránh - giá 3.5 tỷ.
                                 - Nhà nằm ở khu trung tâm nhất phố Lĩnh Nam.
                                 - 3 bước ra chợ - Đường rộng - Vỉa hè rộng mênh mông
                                 - Nhà xây 5 năm vẫn còn rất mới.
                                 - Tầng 1: Phòng khách + bếp + VS.
                                 - Tầng 2, 3: 2 phòng ngủ + v..." data-duration="Hôm nay" data-updatedtime="24/11/2020" data-datesort="11/24/2020 19:54:43" data-contactname="" data-contactmobile="" data-url="/ban-nha-mat-pho-duong-linh-nam-phuong-linh-nam/-40m2-5-tang-kinh-doanh-o-to-tranh-gia-chi-3-5-ty-lh-0918683886-pr27917865" data-totalmedia="2" data-createbyuser="1426821"></i>
                           </div>
                        </div>
                     </div>
                  </a>
               </li>
               <li class="vip5  " uid="27917863">
                  <a href="/ban-nha-biet-thu-lien-ke-phuong-xuan-dinh-prj-chung-cu-789-xuan-dinh/ban-ngoai-giao-doan-nguyen-van-huyen-72m2-4-5-tang-mt-5m-so-do-lh-0979-1900-19-pr27917863" title="Bán liền kề Ngoại giao đoàn, Nguyễn Văn Huyên, 72m2, 4.5 tầng, MT 5m, sổ đỏ, LH 0979 1900 19" name="i0">
                     <h3 class="hh-sr ">
                        Bán liền kề Ngoại giao đoàn, Nguyễn Văn Huyên, 72m2, 4.5 tầng, MT 5m, sổ đỏ, LH <span class="hidden-mobile box" raw="0979 1900 19" style="font-size: inherit;">0979 190* **</span>
                     </h3>
                     <div class="padding">
                        <div class="sr-image">
                           <div class="add-img on">
                              <img alt="Bán liền kề Ngoại giao đoàn, Nguyễn Văn Huyên, 72m2, 4.5 tầng, MT 5m, sổ đỏ, LH 0979 1900 19" noloaderror="true" imgerr="1" src="https://file4.batdongsan.com.vn/crop/200x140/2020/11/24/20201124195419-1246_wm.jpg">
                              <div class="bg-totalMedia">
                                 <span class="icon-rb">
                                 <span>6</span>
                                 <img src="https://staticfile.batdongsan.com.vn/images/mobile/Union.svg" ignore-lazy-loading="" onerror="this.src='https://staticfile.batdongsan.com.vn/images/mobile/Union.png'" alt="icon">
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="sr-info">
                           <div class="line row1">
                              <span class="sp-info sp-bold">Giá thỏa thuận</span><span class="sp-info sp-ng">.</span>
                              <span class="sp-info sp-bold">72 m²</span><span class="sp-info sp-ng">.</span>
                           </div>
                           <div class="line row2">
                              <span class="sp-info sp-address">
                              Bắc Từ Liêm, Hà Nội
                              </span>
                           </div>
                           <div class="line row3 vip5">
                              <span class="sp-info sp-uptime">Hôm nay</span>
                              <i class="iconSave" data-productid="27917863" data-avatar="<img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n liền kề Ngoại giao đo&amp;#224;n, Nguyễn Văn Huy&amp;#234;n, 72m2, 4.5 tầng, MT 5m, sổ đỏ, LH 0979 1900 19&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/24/20201124195419-1246_wm.jpg&quot;/>" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/24/20201124195419-1246_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán liền kề Ngoại giao đoàn, Nguyễn Văn Huyên, 72m2, 4.5 tầng, MT 5m, sổ đỏ, LH 0979 1900 19" data-price="Thỏa thuận" data-area="72 m²" data-pricesort="0" data-areasort="0" data-room="" data-toilets="0" data-address="Bắc Từ Liêm, Hà Nội" data-description="Do gia đình tôi không có nhu cầu sử dụng nên cần chuyển nhượng lại căn liền kề tại dự án 789 Xuân Đỉnh, mặt đường Nguyễn Văn Huyên kéo dài.
                                 - Diện tích 72m2, thiết kế 4.5 tầng, MT 5m, đất vuông vắn.
                                 - Căn nhà nằm trong khuân viên của dự án 789 Xuân Đỉnh, Bộ tổng tham mưu, Bộ Quốc phòng trên mặt đư..." data-duration="Hôm nay" data-updatedtime="24/11/2020" data-datesort="11/24/2020 19:54:43" data-contactname="" data-contactmobile="" data-url="/ban-nha-biet-thu-lien-ke-phuong-xuan-dinh-prj-chung-cu-789-xuan-dinh/ban-ngoai-giao-doan-nguyen-van-huyen-72m2-4-5-tang-mt-5m-so-do-lh-0979-1900-19-pr27917863" data-totalmedia="6" data-createbyuser="753114"></i>
                           </div>
                        </div>
                     </div>
                  </a>
               </li>
               <li class="vip5 hide-item " uid="27917862">
                  <a href="/ban-dat-duong-22-phuong-linh-dong/ban-22-dt-186m2-dan-cu-hien-huu-gia-5-650-trieu-so-hong-rieng-0967397301-pr27917862" title="bán đất đường 22 linh đông dt 186m2 đất. dân cư hiện hữu giá 5,650 triệu số hồng riêng 0967397301" name="i0">
                     <h3 class="hh-sr ">
                        bán đất đường 22 linh đông dt 186m2 đất. dân cư hiện hữu giá 5,650 triệu số hồng riêng <span class="hidden-mobile box" raw="0967397301" style="font-size: inherit;">0967397***</span>
                     </h3>
                     <div class="padding">
                        <div class="sr-image">
                           <div class="add-img on">
                              <img alt="bán đất đường 22 linh đông dt 186m2 đất. dân cư hiện hữu giá 5,650 triệu số hồng riêng 0967397301" noloaderror="true" imgerr="1" src="https://file4.batdongsan.com.vn/crop/200x140/2020/11/24/20201124191738-495c_wm.jpeg">
                              <div class="bg-totalMedia">
                                 <span class="icon-rb">
                                 <span>3</span>
                                 <img src="https://staticfile.batdongsan.com.vn/images/mobile/Union.svg" ignore-lazy-loading="" onerror="this.src='https://staticfile.batdongsan.com.vn/images/mobile/Union.png'" alt="icon">
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="sr-info">
                           <div class="line row1">
                              <span class="sp-info sp-bold">5.65 tỷ</span><span class="sp-info sp-ng">.</span>
                              <span class="sp-info sp-bold">186 m²</span><span class="sp-info sp-ng">.</span>
                           </div>
                           <div class="line row2">
                              <span class="sp-info sp-address">
                              Thủ Đức, Hồ Chí Minh
                              </span>
                           </div>
                           <div class="line row3 vip5">
                              <span class="sp-info sp-uptime">Hôm nay</span>
                              <i class="iconSave" data-productid="27917862" data-avatar="<img class=&quot;product-avatar-img&quot; alt=&quot;b&amp;#225;n đất đường 22 linh đ&amp;#244;ng dt 186m2 đất. d&amp;#226;n cư hiện hữu gi&amp;#225; 5,650 triệu số hồng ri&amp;#234;ng 0967397301&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/24/20201124191738-495c_wm.jpeg&quot;/>" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/24/20201124191738-495c_wm.jpeg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="bán đất đường 22 linh đông dt 186m2 đất. dân cư hiện hữu giá 5,650 triệu số hồng riêng 0967397301" data-price="5.65 tỷ" data-area="186 m²" data-pricesort="0" data-areasort="0" data-room="" data-toilets="0" data-address="Thủ Đức, Hồ Chí Minh" data-description="bán gấp đất đường 22 linh đông dt 186m2 sổ hồng riêng  giá 5ty 650tr lh 0967397301 trí - dt 186m2  - góc 2 mặt tiền  - sổ hồng riêng - khu dân cư hiện hữu xây nhà hoàn công liên  - hem xe tăng  - gần chung cư 4s  - cách mt phạm văn đồng 200m - cách gigamall cầu bình triệu 3 phút đi xe  - gần trương ..." data-duration="Hôm nay" data-updatedtime="24/11/2020" data-datesort="11/24/2020 19:54:27" data-contactname="" data-contactmobile="" data-url="/ban-dat-duong-22-phuong-linh-dong/ban-22-dt-186m2-dan-cu-hien-huu-gia-5-650-trieu-so-hong-rieng-0967397301-pr27917862" data-totalmedia="3" data-createbyuser="864616"></i>
                           </div>
                        </div>
                     </div>
                  </a>
               </li>
               <li class="vip5 hide-item " uid="27354734">
                  <a href="/ban-can-ho-chung-cu-phuong-tay-mo-prj-vinhomes-smart-city-dai-mo/so-huu-ngay-2-phong-ngu-60m2-gia-tot-nhat-htls-2-nam-pr27354734" title="Sở hữu ngay 2PN 60 - 70 m2 giá tốt nhất Vinhomes Smart City. Vay 80%, HTLS 1 năm" name="i0">
                     <h3 class="hh-sr ">
                        Sở hữu ngay 2PN 60 - 70 m2 giá tốt nhất Vinhomes Smart City. Vay 80%, HTLS 1 năm
                     </h3>
                     <div class="padding">
                        <div class="sr-image">
                           <div class="add-img on">
                              <img alt="Sở hữu ngay 2PN 60 - 70 m2 giá tốt nhất Vinhomes Smart City. Vay 80%, HTLS 1 năm" noloaderror="true" imgerr="1" src="https://file4.batdongsan.com.vn/crop/200x140/2020/10/09/20201009152934-e80a_wm.jpg">
                              <div class="bg-totalMedia">
                                 <span class="icon-rb">
                                 <span>6</span>
                                 <img src="https://staticfile.batdongsan.com.vn/images/mobile/Union.svg" ignore-lazy-loading="" onerror="this.src='https://staticfile.batdongsan.com.vn/images/mobile/Union.png'" alt="icon">
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="sr-info">
                           <div class="line row1">
                              <span class="sp-info sp-bold">1.55 tỷ</span><span class="sp-info sp-ng">.</span>
                              <span class="sp-info sp-bold">60 m²</span><span class="sp-info sp-ng">.</span>
                           </div>
                           <div class="line row2">
                              <span class="sp-info sp-address">
                              Nam Từ Liêm, Hà Nội
                              </span>
                           </div>
                           <div class="line row3 vip5">
                              <span class="sp-info sp-uptime">Hôm nay</span>
                              <i class="iconSave" data-productid="27354734" data-avatar="<img class=&quot;product-avatar-img&quot; alt=&quot;Sở hữu ngay 2PN 60 - 70 m2 gi&amp;#225; tốt nhất Vinhomes Smart City. Vay 80%, HTLS 1 năm&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/09/20201009152934-e80a_wm.jpg&quot;/>" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/09/20201009152934-e80a_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Sở hữu ngay 2PN 60 - 70 m2 giá tốt nhất Vinhomes Smart City. Vay 80%, HTLS 1 năm" data-price="1.55 tỷ" data-area="60 m²" data-pricesort="0" data-areasort="0" data-room="" data-toilets="0" data-address="Nam Từ Liêm, Hà Nội" data-description="- Chính sách siêu khủng tháng 11 với quỹ căn đẹp, giá tốt nhất Vinhomes Smart City.Hotline PKD: 0966 834 865 - Hỗ trợ 24/7 (miễn phí).- Căn 2 phòng ngủ diện tích 60m2. - Giá chỉ từ 1,55 tỷ. - Hỗ trợ lãi suất 2 năm. - Trả góp tối đa 35 năm. - Chính sách khủng: + Tặng voucher mua xe Vinfast 150 triệu...." data-duration="Hôm nay" data-updatedtime="24/11/2020" data-datesort="11/24/2020 19:54:24" data-contactname="" data-contactmobile="" data-url="/ban-can-ho-chung-cu-phuong-tay-mo-prj-vinhomes-smart-city-dai-mo/so-huu-ngay-2-phong-ngu-60m2-gia-tot-nhat-htls-2-nam-pr27354734" data-totalmedia="6" data-createbyuser="934482"></i>
                           </div>
                        </div>
                     </div>
                  </a>
               </li>
               <li class="vip5 hide-item " uid="27597383">
                  <a href="/ban-nha-rieng-pho-tran-cung-phuong-co-nhue-1/ban-ngo-488-bac-tu-liem-ha-noi-40m2-mat-ngo-thong-5-tang-rat-dep-pr27597383" title="Bán nhà ngõ 488 Trần Cung, Bắc Từ Liêm, Hà Nội. 40m2, mặt ngõ thông 5 tầng rất đẹp" name="i0">
                     <h3 class="hh-sr ">
                        Bán nhà ngõ 488 Trần Cung, Bắc Từ Liêm, Hà Nội. 40m2, mặt ngõ thông 5 tầng rất đẹp
                     </h3>
                     <div class="padding">
                        <div class="sr-image">
                           <div class="add-img on">
                              <img alt="Bán nhà ngõ 488 Trần Cung, Bắc Từ Liêm, Hà Nội. 40m2, mặt ngõ thông 5 tầng rất đẹp" noloaderror="true" imgerr="1" src="https://file4.batdongsan.com.vn/crop/200x140/2020/10/29/20201029194659-246b_wm.jpg">
                              <div class="bg-totalMedia">
                                 <span class="icon-rb">
                                 <span>6</span>
                                 <img src="https://staticfile.batdongsan.com.vn/images/mobile/Union.svg" ignore-lazy-loading="" onerror="this.src='https://staticfile.batdongsan.com.vn/images/mobile/Union.png'" alt="icon">
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="sr-info">
                           <div class="line row1">
                              <span class="sp-info sp-bold">3.1 tỷ</span><span class="sp-info sp-ng">.</span>
                           </div>
                           <div class="line row2">
                              <span class="sp-info sp-address">
                              Bắc Từ Liêm, Hà Nội
                              </span>
                           </div>
                           <div class="line row3 vip5">
                              <span class="sp-info sp-uptime">Hôm nay</span>
                              <i class="iconSave" data-productid="27597383" data-avatar="<img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; ng&amp;#245; 488 Trần Cung, Bắc Từ Li&amp;#234;m, H&amp;#224; Nội. 40m2, mặt ng&amp;#245; th&amp;#244;ng 5 tầng rất đẹp&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/29/20201029194659-246b_wm.jpg&quot;/>" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/29/20201029194659-246b_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà ngõ 488 Trần Cung, Bắc Từ Liêm, Hà Nội. 40m2, mặt ngõ thông 5 tầng rất đẹp" data-price="3.1 tỷ" data-area="Không xác định" data-pricesort="0" data-areasort="0" data-room="" data-toilets="0" data-address="Bắc Từ Liêm, Hà Nội" data-description="Tôi bán căn nhà vừa hoàn thiện 5 tầng 38m2 tại ngõ 488 Trần Cung. Nhà thiết kế đẹp, hiện đại, xây dựng kiên cố chắc chắn. Tầng 1: Làm phòng khách + bếp + wc. Tầng 2, 3, 4 mỗi tầng một phòng ngủ lớn khép kín, có ban công. Tầng 5 làm phòng thờ, sân phơi.Toàn bộ hệ thống cửa, cầu thang gỗ Lim Nam phi. ..." data-duration="Hôm nay" data-updatedtime="24/11/2020" data-datesort="11/24/2020 19:54:22" data-contactname="" data-contactmobile="" data-url="/ban-nha-rieng-pho-tran-cung-phuong-co-nhue-1/ban-ngo-488-bac-tu-liem-ha-noi-40m2-mat-ngo-thong-5-tang-rat-dep-pr27597383" data-totalmedia="6" data-createbyuser="1379125"></i>
                           </div>
                        </div>
                     </div>
                  </a>
               </li>
               <li class="vip5  hide-item " uid="27097891">
                  <a href="/ban-nha-rieng-pho-chua-boc-phuong-khuong-thuong/chu-can-tien-nen-thanh-khoan-gap-can-phan-lo-cuc-hiem-35-m2-x-4-t-gia-3-65-ty-pr27097891" title="Chủ cần tiền nên thanh khoản gấp căn nhà phân lô Chùa Bộc cực hiếm 35m2 x 4T giá 3.65 tỷ" name="i0">
                     <h3 class="hh-sr ">
                        Chủ cần tiền nên thanh khoản gấp căn nhà phân lô Chùa Bộc cực hiếm 35m2 x 4T giá 3.65 tỷ
                     </h3>
                     <div class="padding">
                        <div class="sr-image">
                           <div class="add-img on">
                              <img alt="Chủ cần tiền nên thanh khoản gấp căn nhà phân lô Chùa Bộc cực hiếm 35m2 x 4T giá 3.65 tỷ" noloaderror="true" imgerr="1" src="https://file4.batdongsan.com.vn/crop/200x140/2020/09/19/20200919120445-9612_wm.jpg">
                              <div class="bg-totalMedia">
                                 <span class="icon-rb">
                                 <span>3</span>
                                 <img src="https://staticfile.batdongsan.com.vn/images/mobile/Union.svg" ignore-lazy-loading="" onerror="this.src='https://staticfile.batdongsan.com.vn/images/mobile/Union.png'" alt="icon">
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="sr-info">
                           <div class="line row1">
                              <span class="sp-info sp-bold">3.65 tỷ</span><span class="sp-info sp-ng">.</span>
                              <span class="sp-info sp-bold">35 m²</span><span class="sp-info sp-ng">.</span>
                           </div>
                           <div class="line row2">
                              <span class="sp-info sp-address">
                              Đống Đa, Hà Nội
                              </span>
                           </div>
                           <div class="line row3 vip5 vipaddon">
                              <span class="sp-info sp-uptime">Hôm nay</span>
                              <i class="iconSave" data-productid="27097891" data-avatar="<img class=&quot;product-avatar-img&quot; alt=&quot;Chủ cần tiền n&amp;#234;n thanh khoản gấp căn nh&amp;#224; ph&amp;#226;n l&amp;#244; Ch&amp;#249;a Bộc cực hiếm 35m2 x 4T gi&amp;#225; 3.65 tỷ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/19/20200919120445-9612_wm.jpg&quot;/><img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/19/20200919120446-222f_wm.jpg&quot;/><img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/19/20200919120501-8f6b_wm.jpg&quot;/>" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/09/19/20200919120445-9612_wm.jpg" data-vipclass="vip5 vipaddon" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chủ cần tiền nên thanh khoản gấp căn nhà phân lô Chùa Bộc cực hiếm 35m2 x 4T giá 3.65 tỷ" data-price="3.65 tỷ" data-area="35 m²" data-pricesort="0" data-areasort="0" data-room="" data-toilets="0" data-address="Đống Đa, Hà Nội" data-description="Bom đêm Chùa Bộc phố - Phân lô VIP của học viện Ngân hàng, hiếm nhà bán - Đường trước nhà gần 4m thẳng tắp - An ninh, an sinh tuyệt vời...!* Mô tả: + Khu phân lô dành cho cán bộ của Học viện Ngân hàng, cực hiếm nhà bán. + Vị trí đẹp, trước nhà ngõ rộng gần 4 mét, ngay gần đường đôi cổng Học viện Ngâ..." data-duration="Hôm nay" data-updatedtime="24/11/2020" data-datesort="11/24/2020 19:54:13" data-contactname="" data-contactmobile="" data-url="/ban-nha-rieng-pho-chua-boc-phuong-khuong-thuong/chu-can-tien-nen-thanh-khoan-gap-can-phan-lo-cuc-hiem-35-m2-x-4-t-gia-3-65-ty-pr27097891" data-totalmedia="3" data-createbyuser="1377551"></i>
                           </div>
                        </div>
                     </div>
                  </a>
               </li>
            </ul>
         </div>
         <div class="clear"></div>
         <div class="home-viewmore">
            <a href="javascript:void(0)" id="prd-viewmore">
            Mở rộng&nbsp;&nbsp;<img src="https://file4.batdongsan.com.vn/images/newhome/3x/icon-down-blue.png">
            </a>
            <a href="/ban-nha-rieng-pho-chua-boc-phuong-khuong-thuong" class="hidden">
            Xem thêm
            </a>
         </div>
      </div>
   </div>
   <script type="text/javascript">
      (function callJQuery() {
          if (window.FrontEnd && window.FrontEnd.Systems && window.FrontEnd.Systems.Home && window.FrontEnd.Systems.Home.InterestedProductsBinnova) {
              new window.FrontEnd.Systems.Home.InterestedProductsBinnova({
                  getInterestedProductsBinnovaUrl: '/Systems/Home/GetInterestedProductsBinnova'
              });
          } else {
              setTimeout(callJQuery, 100)
          }
      })();
   </script>
   <!-- Xem tin theo khu vuc-->
   <div class="homemain home-product-place">
      <h2>Bất động sản theo địa điểm</h2>
      <div>
         <div class="place-big">
            <div class="place-img slick-initialized slick-slider">
               <div aria-live="polite" class="slick-list draggable">
                  <div class="slick-track" role="listbox" style="opacity: 1; width: 1146px;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/HCM-web-1.jpg" is-lazy-image="true" lazy-id="1" class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide10" style="width: 382px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/HCM-web-2.jpg" is-lazy-image="true" lazy-id="2" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide11" style="width: 382px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/HCM-web-3.jpg" is-lazy-image="true" lazy-id="3" class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide12" style="width: 382px; position: relative; left: -764px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"></div>
               </div>
            </div>
            <div class="place-info buy-info">
               <h3>
                  <a href="/nha-dat-ban-tp-hcm">
                  <span class="place-name">TP. Hồ Chí Minh</span>
                  <span class="place-number">70044 tin rao</span>
                  </a>
               </h3>
            </div>
         </div>
         <div class="place-small">
            <div class="place-item">
               <div class="place-img slick-initialized slick-slider">
                  <div aria-live="polite" class="slick-list draggable">
                     <div class="slick-track" role="listbox" style="opacity: 1; width: 561px;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/HN-web-1.jpg" is-lazy-image="true" lazy-id="4" class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide20" style="width: 187px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/HN-web-2.jpg" is-lazy-image="true" lazy-id="5" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide21" style="width: 187px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/HN-web-3.jpg" is-lazy-image="true" lazy-id="6" class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide22" style="width: 187px; position: relative; left: -374px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"></div>
                  </div>
               </div>
               <div class="place-info buy-info">
                  <h3>
                     <a href="/nha-dat-ban-ha-noi">
                     <span class="place-name">Hà Nội</span>
                     <span class="place-number">58533 tin rao</span>
                     </a>
                  </h3>
               </div>
            </div>
            <div class="place-item">
               <div class="place-img slick-initialized slick-slider">
                  <div aria-live="polite" class="slick-list draggable">
                     <div class="slick-track" role="listbox" style="opacity: 1; width: 561px;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/DDN-web-1.jpg" is-lazy-image="true" lazy-id="7" class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide30" style="width: 187px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/DDN-web-2.jpg" is-lazy-image="true" lazy-id="8" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide31" style="width: 187px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/DDN-web-3.jpg" is-lazy-image="true" lazy-id="9" class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide32" style="width: 187px; position: relative; left: -374px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"></div>
                  </div>
               </div>
               <div class="place-info buy-info">
                  <h3>
                     <a href="/nha-dat-ban-da-nang">
                     <span class="place-name">Đà Nẵng</span>
                     <span class="place-number">3643 tin rao</span>
                     </a>
                  </h3>
               </div>
            </div>
            <div class="place-item nomargin">
               <div class="place-img slick-initialized slick-slider">
                  <div aria-live="polite" class="slick-list draggable">
                     <div class="slick-track" role="listbox" style="opacity: 1; width: 374px;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/BD-web-1.jpg" is-lazy-image="true" lazy-id="10" class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide40" style="width: 187px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/BD-web-2.jpg" is-lazy-image="true" lazy-id="11" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide41" style="width: 187px; position: relative; left: -187px; top: 0px; z-index: 999; opacity: 1;"></div>
                  </div>
               </div>
               <div class="place-info buy-info">
                  <h3>
                     <a href="/nha-dat-ban-binh-duong">
                     <span class="place-name">Bình Dương</span>
                     <span class="place-number">10131 tin rao</span>
                     </a>
                  </h3>
               </div>
            </div>
            <div class="place-item nomargin">
               <div class="place-img slick-initialized slick-slider">
                  <div aria-live="polite" class="slick-list draggable">
                     <div class="slick-track" role="listbox" style="opacity: 1; width: 561px;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-1.jpg" is-lazy-image="true" lazy-id="12" class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide50" style="width: 187px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-2.jpg" is-lazy-image="true" lazy-id="13" class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide51" style="width: 187px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"><img src="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-3.jpg" is-lazy-image="true" lazy-id="14" class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide52" style="width: 187px; position: relative; left: -374px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"></div>
                  </div>
               </div>
               <div class="place-info buy-info">
                  <h3>
                     <a href="/nha-dat-ban-dong-nai">
                     <span class="place-name">Đồng Nai</span>
                     <span class="place-number">7748 tin rao</span>
                     </a>
                  </h3>
               </div>
            </div>
         </div>
         <div class="clear"></div>
      </div>
   </div>
   <script type="text/javascript">
      (function callJQuery() {
          if (window.FrontEnd && window.FrontEnd.Systems && window.FrontEnd.Systems.Home && window.FrontEnd.Systems.Home.ProductCountBinnova) {
              new window.FrontEnd.Systems.Home.ProductCountBinnova();
          } else {
              setTimeout(callJQuery, 100)
          }
      })();
   </script>
   <!--Khu vực tag-->
   <div class="homemain html-content">
      <div class="tag-list home-tag swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-ios">
         <ul class="ui-draggable swiper-wrapper" style="position: relative;">
            <li class="swiper-slide swiper-slide-active">
               <h3>
                  <a href="/ban-can-ho-chung-cu-vinhomes-central-park" title="Vinhomes Central Park">Vinhomes Central Park</a>
               </h3>
            </li>
            <li class="swiper-slide swiper-slide-next">
               <h3>
                  <a href="/ban-can-ho-chung-cu-vinhomes-grand-park-quan-9" title="Vinhomes Grand Park">Vinhomes Grand Park</a>
               </h3>
            </li>
            <li class="swiper-slide">
               <h3>
                  <a href="/ban-can-ho-chung-cu-vinhomes-smart-city-dai-mo" title="Vinhomes Smart City">Vinhomes Smart City</a>
               </h3>
            </li>
            <li class="swiper-slide">
               <h3>
                  <a href="/ban-can-ho-chung-cu-vinhomes-ocean-park-gia-lam" title="Vinhomes Ocean Park">Vinhomes Ocean Park</a>
               </h3>
            </li>
            <li class="swiper-slide">
               <h3>
                  <a href="/ban-can-ho-chung-cu-vung-tau-pearl" title="Vũng Tàu Pearl">Vũng Tàu Pearl</a>
               </h3>
            </li>
            <li class="swiper-slide">
               <h3>
                  <a href="/ban-can-ho-chung-cu-bcons-green-view" title="Bcons Green View">Bcons Green View</a>
               </h3>
            </li>
            <li class="swiper-slide">
               <h3>
                  <a href="/ban-can-ho-chung-cu-grandeur-palace" title="Grandeur Palace">Grandeur Palace</a>
               </h3>
            </li>
            <li class="swiper-slide">
               <h3>
                  <a href="/ban-can-ho-chung-cu-diamond-island" title="Diamond Island">Diamond Island</a>
               </h3>
            </li>
            <li class="swiper-slide">
               <h3>
                  <a href="/ban-can-ho-chung-cu-hado-centrosa-garden" title="HaDo Centrosa Garden">HaDo Centrosa Garden</a>
               </h3>
            </li>
            <li class="swiper-slide">
               <h3>
                  <a href="/ban-can-ho-chung-cu-the-sun-avenue" title="The Sun Avenue">The Sun Avenue</a>
               </h3>
            </li>
            <li class="swiper-slide">
               <h3>
                  <a href="/nha-dat-ban-hai-phong" title="Nhà đất Hải Phòng">Nhà đất Hải Phòng</a>
               </h3>
            </li>
            <li class="swiper-slide">
               <h3>
                  <a href="/nha-dat-ban-quy-nhon-bdd" title="Nhà đất Quy Nhơn">Nhà đất Quy Nhơn</a>
               </h3>
            </li>
         </ul>
         <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
   </div>
   <script type="text/javascript">
      (function callJQuery() {
          if (window.FrontEnd && window.FrontEnd.Systems && window.FrontEnd.Systems.Home && window.FrontEnd.Systems.Home.HomeTagsBinnova) {
              new window.FrontEnd.Systems.Home.HomeTagsBinnova();
          } else {
              setTimeout(callJQuery, 100)
          }
      })();
   </script>
   <!-- Banner giua-->
   <div class="homemain banner-middle">
      <div positioncode="BANNER_POSITION_MOBILE_MIDDLE" class="loveMoney102">
         <div class="adshared">
            <div class="aditem" time="15" src="https://file4.batdongsan.com.vn/Banners/PhuongNTM/PhuongNTM/640x213/20201109-1334/index.html" altsrc="https://file4.batdongsan.com.vn/2020/11/09/UVSXfqBy/20201109083336-48fe.jpg" landsrc="null" link="https://batdongsan.com.vn/brc/trieu-lua-chon-nha" bid="11086" tip="" tp="8" w="640" h="320"><iframe class="view-count" bannerid="11086" src="https://file4.batdongsan.com.vn/Banners/PhuongNTM/PhuongNTM/640x213/20201109-1334/index.html?link=https://m.batdongsan.com.vn/microservice-architecture-router-mobile/Systems/Banner/Click?bannerid=11086" id="fr11086" width="100%" height="100%" frameborder="0" scrolling="no" style="overflow:hidden"></iframe></div>
         </div>
      </div>
      <script type="text/javascript">
         var bannerContext = {"CateId":0,"PageId":189,"CityCode":null,"DistrictId":null,"CurrentPage":189};
         var clickBannerUrl = '/Systems/Banner/Click'
      </script>
   </div>
   <!--Khu vực dự án tiêu biểu-->
   <div class="homemain home-project">
      <h2>Dự án nổi bật</h2>
      <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-ios">
         <ul class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
            <li class="swiper-slide swiper-slide-active" style="width: 291.538px; margin-right: 10px;">
               <div class="hot-project">
                  <div class="image">
                     <a href="/can-ho-chung-cu-quan-2/the-river-thu-thiem-pj4463?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj4463" title="The River Thủ Thiêm">
                     <img alt="The River Thủ Thiêm" src="https://file4.batdongsan.com.vn/crop/490x294/2019/08/21/hmcVYWuR/20190821094030-449d.jpg" is-lazy-image="true" lazy-id="15">
                     </a>
                  </div>
               </div>
               <div>
                  <a href="/can-ho-chung-cu-quan-2/the-river-thu-thiem-pj4463?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj4463" title="The River Thủ Thiêm">
                  <span>The River Thủ Thiêm</span>
                  </a>
               </div>
            </li>
            <li class="swiper-slide swiper-slide-next" style="width: 291.538px; margin-right: 10px;">
               <div class="hot-project">
                  <div class="image">
                     <a href="/can-ho-chung-cu-thai-nguyen-tn/tecco-elite-city-pj3905?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj3905" title="Tecco Elite City">
                     <img alt="Tecco Elite City" src="https://file4.batdongsan.com.vn/crop/490x294/2020/07/07/hmcVYWuR/20200707141845-1c8e.jpg" is-lazy-image="true" lazy-id="16">
                     </a>
                  </div>
               </div>
               <div>
                  <a href="/can-ho-chung-cu-thai-nguyen-tn/tecco-elite-city-pj3905?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj3905" title="Tecco Elite City">
                  <span>Tecco Elite City</span>
                  </a>
               </div>
            </li>
         </ul>
         <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
      <div class="m-t-10">
         <a href="/du-an" class="home-small-more">Xem thêm<img src="https://file4.batdongsan.com.vn/images/newhome/3x/icon-arrow-right.png"></a>
      </div>
   </div>
   <script type="text/javascript">
      (function callJQuery() {
          if (window.FrontEnd && window.FrontEnd.Systems && window.FrontEnd.Systems.Home && window.FrontEnd.Systems.Home.HighlightProjectsBinnova) {
              new window.FrontEnd.Systems.Home.HighlightProjectsBinnova();
          } else {
              setTimeout(callJQuery, 100)
          }
      })();
   </script>
   <!--Khu vực tin tức tiêu biểu-->
   <div class="homemain home-hotnews">
      <h2>Tin tiêu điểm</h2>
      <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-ios">
         <ul class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
            <li class="swiper-slide swiper-slide-active" style="width: 291.538px; margin-right: 10px;">
               <div class="hotnews-img">
                  <div class="image">
                     <a href="/tin-thi-truong/-infographic-10-du-an-tai-tp-hcm-duoc-hoi-mua-nhieu-nhat-quy-3-2020-ar105547" title="[Infographic] 10 dự án tại TP.HCM được hỏi mua nhiều nhất quý 3/2020">
                     <img noloaderror="true" imgerr="1" src="https://file4.batdongsan.com.vn/crop/354x200/2020/11/19/zk7ggeWN/20201119092539-5bbd.jpg" is-lazy-image="true" lazy-id="17">
                     </a>
                  </div>
               </div>
               <div class="hotnews-link">
                  <span>01</span>
                  <h3><a href="/tin-thi-truong/-infographic-10-du-an-tai-tp-hcm-duoc-hoi-mua-nhieu-nhat-quy-3-2020-ar105547" title="[Infographic] 10 dự án tại TP.HCM được hỏi mua nhiều nhất quý 3/2020">[Infographic] 10 dự án tại TP.HCM được hỏi mua nhiều nhất quý 3/2020</a></h3>
               </div>
            </li>
            <li class="swiper-slide swiper-slide-next" style="width: 291.538px; margin-right: 10px;">
               <div class="hotnews-img">
                  <div class="image">
                     <a href="/loi-khuyen-cho-nguoi-mua/he-so-su-dung-dat-la-gi-ar105527" title="Hệ số sử dụng đất là gì? Hướng dẫn chi tiết cách tính năm 2020">
                     <img noloaderror="true" imgerr="1" src="https://file4.batdongsan.com.vn/crop/354x200/2020/11/18/tEfrXoEj/20201118084208-6ea9.jpg" is-lazy-image="true" lazy-id="18">
                     </a>
                  </div>
               </div>
               <div class="hotnews-link">
                  <span>02</span>
                  <h3><a href="/loi-khuyen-cho-nguoi-mua/he-so-su-dung-dat-la-gi-ar105527" title="Hệ số sử dụng đất là gì? Hướng dẫn chi tiết cách tính năm 2020">Hệ số sử dụng đất là gì? Hướng dẫn chi tiết cách tính năm 2020</a></h3>
               </div>
            </li>
            <li class="swiper-slide" style="width: 291.538px; margin-right: 10px;">
               <div class="hotnews-img">
                  <div class="image">
                     <a href="/tin-thi-truong/thi-truong-nha-mat-pho-cho-thue-e-am-van-khong-giam-gia-ar105537" title="Thị trường nhà mặt phố cho thuê: ế ẩm vẫn không giảm giá">
                     <img noloaderror="true" imgerr="1" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/354x200/2020/11/18/FTnaKngu/20201118135701-0137.jpg" is-lazy-image="true" lazy-id="19">
                     </a>
                  </div>
               </div>
               <div class="hotnews-link">
                  <span>03</span>
                  <h3><a href="/tin-thi-truong/thi-truong-nha-mat-pho-cho-thue-e-am-van-khong-giam-gia-ar105537" title="Thị trường nhà mặt phố cho thuê: ế ẩm vẫn không giảm giá">Thị trường nhà mặt phố cho thuê: ế ẩm vẫn không giảm giá</a></h3>
               </div>
            </li>
            <li class="swiper-slide" style="width: 291.538px; margin-right: 10px;">
               <div class="hotnews-img">
                  <div class="image">
                     <a href="/tai-chinh-chung-khoan-bat-dong-san/co-nen-mua-co-phieu-bat-dong-san-ar105544" title="Có nên mua cổ phiếu bất động sản lúc này?">
                     <img noloaderror="true" imgerr="1" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/354x200/2020/11/18/FTnaKngu/20201118161122-a76a.jpg" is-lazy-image="true" lazy-id="20">
                     </a>
                  </div>
               </div>
               <div class="hotnews-link">
                  <span>04</span>
                  <h3><a href="/tai-chinh-chung-khoan-bat-dong-san/co-nen-mua-co-phieu-bat-dong-san-ar105544" title="Có nên mua cổ phiếu bất động sản lúc này?">Có nên mua cổ phiếu bất động sản lúc này?</a></h3>
               </div>
            </li>
            <li class="swiper-slide" style="width: 291.538px; margin-right: 10px;">
               <div class="hotnews-img">
                  <div class="image">
                     <a href="/tin-thi-truong/tp-thu-duc-khien-gia-can-ho-binh-duong-tang-phi-ma-ar105529" title="TP. Thủ Đức khiến giá căn hộ tại Bình Dương tăng mạnh?">
                     <img noloaderror="true" imgerr="1" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/354x200/2020/11/17/FTnaKngu/20201117143612-7998.jpg" is-lazy-image="true" lazy-id="21">
                     </a>
                  </div>
               </div>
               <div class="hotnews-link">
                  <span>05</span>
                  <h3><a href="/tin-thi-truong/tp-thu-duc-khien-gia-can-ho-binh-duong-tang-phi-ma-ar105529" title="TP. Thủ Đức khiến giá căn hộ tại Bình Dương tăng mạnh?">TP. Thủ Đức khiến giá căn hộ tại Bình Dương tăng mạnh?</a></h3>
               </div>
            </li>
            <li class="swiper-slide" style="width: 291.538px; margin-right: 10px;">
               <div class="hotnews-img">
                  <div class="image">
                     <a href="/tin-thi-truong/cuoc-dua-ra-hang-cuoi-nam-cua-doanh-nghiep-bds-ar105506" title="BĐS khởi sắc nhờ cuộc đua ra hàng cuối năm của doanh nghiệp">
                     <img noloaderror="true" imgerr="1" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/354x200/2020/11/13/FTnaKngu/20201113120314-0881.jpg" is-lazy-image="true" lazy-id="22">
                     </a>
                  </div>
               </div>
               <div class="hotnews-link">
                  <span>06</span>
                  <h3><a href="/tin-thi-truong/cuoc-dua-ra-hang-cuoi-nam-cua-doanh-nghiep-bds-ar105506" title="BĐS khởi sắc nhờ cuộc đua ra hàng cuối năm của doanh nghiệp">BĐS khởi sắc nhờ cuộc đua ra hàng cuối năm của doanh nghiệp</a></h3>
               </div>
            </li>
         </ul>
         <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
   </div>
   <script type="text/javascript">
      (function callJQuery() {
          if (window.FrontEnd && window.FrontEnd.Systems && window.FrontEnd.Systems.Home && window.FrontEnd.Systems.Home.VipNewsBinnova) {
              new window.FrontEnd.Systems.Home.VipNewsBinnova({});
          } else {
              setTimeout(callJQuery, 100)
          }
      })();
   </script>
   <div class="homemain banner-middle">
      <div positioncode="BANNER_POSITION_MOBILE_MIDDLE_2" class="loveMoney102" style="display: none;"></div>
      <script type="text/javascript">
         var bannerContext = {"CateId":0,"PageId":189,"CityCode":null,"DistrictId":null,"CurrentPage":189};
         var clickBannerUrl = '/Systems/Banner/Click'
      </script>
   </div>
   <!-- Ho tro tien ich-->
   <div class="homemain home-utility m-b-30">
      <h2>Hỗ trợ tiện ích</h2>
      <ul>
         <li class="color-1">
            <a href="/ho-tro-tien-ich/ht-xem-tuoi-xay-nha" rel="nofollow">
            <img src="https://file4.batdongsan.com.vn/images/newhome/fshome.png">
            </a> <a href="/ho-tro-tien-ich/ht-xem-tuoi-xay-nha" rel="nofollow">Xem tuổi xây nhà</a>
         </li>
         <li class="color-2">
            <a href="/ho-tro-tien-ich/ht-du-toan-chi-tiet" rel="nofollow">
            <img src="https://file4.batdongsan.com.vn/images/newhome/estimate.png">
            </a> <a href="/ho-tro-tien-ich/ht-du-toan-chi-tiet" rel="nofollow">Dự tính chi phí làm nhà </a>
         </li>
         <li class="color-3">
            <a href="/ho-tro-tien-ich/ht-tinh-lai-suat" rel="nofollow">
            <img src="https://file4.batdongsan.com.vn/images/newhome/money.png">
            </a>
            <a href="/ho-tro-tien-ich/ht-tinh-lai-suat" rel="nofollow">Tính lãi suất </a>
         </li>
         <li class="color-4">
            <a href="/ho-tro-tien-ich/ht-xem-huong-nha" rel="nofollow">
            <img src="https://file4.batdongsan.com.vn/images/newhome/fengshui.png">
            </a>
            <a href="/ho-tro-tien-ich/ht-xem-huong-nha">Tư vấn phong thủy</a>
         </li>
      </ul>
      <div class="clear"></div>
   </div>
   <!-- Doanh nghiep tieu bieu-->
   <div class="homemain home-enterprise m-b-30">
      <h2>Doanh nghiệp tiêu biểu</h2>
      <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-ios">
         <ul class="swiper-wrapper" style="transform: translate3d(-1120px, 0px, 0px); transition-duration: 0ms;">
            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="8" style="width: 102px; margin-right: 10px;">
               <a href="/tu-van-moi-gioi-bat-dong-san-quan-2/cong-ty-tnhh-dau-tu-va-quan-ly-bat-dong-sa-ep2772" rel="nofollow" title="CÔNG TY TNHH ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN DTN">
               <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN DTN" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/2020/01/03/3ZsSL6gy/20200103145745-1450.jpg" is-lazy-image="true" lazy-id="31">                        </a>
            </li>
            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="9" style="width: 102px; margin-right: 10px;">
               <a href="/thi-cong-xay-dung-thu-dau-mot-bd/cong-ty-cp-xay-dung-tu-van-dau-tu-binh-duon-ep75" rel="nofollow" title="Công ty CP Xây dựng Tư vấn Đầu tư Bình Dương (BICONSI)">
               <img class="color_flip" alt="Công ty CP Xây dựng Tư vấn Đầu tư Bình Dương (BICONSI)" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/2020/05/27/hmcVYWuR/20200527142414-6a13.jpg" is-lazy-image="true" lazy-id="32">                        </a>
            </li>
            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="10" style="width: 102px; margin-right: 10px;">
               <a href="/dau-tu-du-an-quan-7/novalan-ep480" rel="nofollow" title="Novaland Group">
               <img class="color_flip" alt="Novaland Group" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/2020/07/21/n1AwoD7S/20200721151328-207e.jpg" is-lazy-image="true" lazy-id="33">                        </a>
            </li>
            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="11" style="width: 102px; margin-right: 10px;">
               <a href="/dau-tu-du-an-rach-gia-kg/cong-ty-cpdt-phu-cuong-kie-ep2787" rel="nofollow" title="CÔNG TY CPĐT PHÚ CƯỜNG KIÊN GIANG">
               <img class="color_flip" src="https://file4.batdongsan.com.vn/2020/04/22/PGsxuI1y/20200422111005-0350.jpg" alt="CÔNG TY CPĐT PHÚ CƯỜNG KIÊN GIANG">
               </a>
            </li>
            <li class="swiper-slide" data-swiper-slide-index="0" style="width: 102px; margin-right: 10px;">
               <a href="/cac-linh-vuc-khac-cau-giay/cong-ty-co-pha-ep2826" rel="nofollow" title="Công ty Cổ Phần Deborah">
               <img class="color_flip" alt="Công ty Cổ Phần Deborah" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/2020/11/18/hmcVYWuR/20201118143341-43eb.jpg" is-lazy-image="true" lazy-id="23">                        </a>
            </li>
            <li class="swiper-slide" data-swiper-slide-index="1" style="width: 102px; margin-right: 10px;">
               <a href="/dau-tu-du-an-quan-1/cong-ty-tnhh-dau-tu-dia-oc-thanh-ph-ep1898" rel="nofollow" title="Công ty TNHH Đầu tư Địa ốc Thành phố (CityLand)">
               <img class="color_flip" alt="Công ty TNHH Đầu tư Địa ốc Thành phố (CityLand)" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/2020/10/16/hmcVYWuR/20201016153855-fa63.jpg" is-lazy-image="true" lazy-id="24">                        </a>
            </li>
            <li class="swiper-slide" data-swiper-slide-index="2" style="width: 102px; margin-right: 10px;">
               <a href="/dau-tu-du-an-quan-1/cong-ty-cp-tap-doan-dau-tu-chau-a-thai-bin-ep2818" rel="nofollow" title="Công ty CP Tập Đoàn Đầu Tư Châu Á Thái Bình Dương">
               <img class="color_flip" alt="Công ty CP Tập Đoàn Đầu Tư Châu Á Thái Bình Dương" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/2020/10/05/hmcVYWuR/20201005135528-83f1.jpg" is-lazy-image="true" lazy-id="25">                        </a>
            </li>
            <li class="swiper-slide" data-swiper-slide-index="3" style="width: 102px; margin-right: 10px;">
               <a href="/tu-van-moi-gioi-bat-dong-san-ben-cat-bd/cong-ty-tnhh-dau-tu-xay-dung-dich-vu-hoang-th-ep2813" rel="nofollow" title="CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG DỊCH VỤ HOÀNG THỔ GROUP">
               <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG DỊCH VỤ HOÀNG THỔ GROUP" src="https://file4.batdongsan.com.vn/2020/09/28/PGsxuI1y/20200928152939-aa13.jpg" is-lazy-image="true" lazy-id="26">                        </a>
            </li>
            <li class="swiper-slide" data-swiper-slide-index="4" style="width: 102px; margin-right: 10px;">
               <a href="/tu-van-moi-gioi-bat-dong-san-quan-2/cong-ty-tnhh-dau-tu-dich-vu-bat-dong-san-16-ep2807" rel="nofollow" title="CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ BẤT ĐỘNG SẢN 168 PROPERTY">
               <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ BẤT ĐỘNG SẢN 168 PROPERTY" src="https://file4.batdongsan.com.vn/2020/09/15/PGsxuI1y/20200915154813-0430.jpg" is-lazy-image="true" lazy-id="27">                        </a>
            </li>
            <li class="swiper-slide swiper-slide-prev" data-swiper-slide-index="5" style="width: 102px; margin-right: 10px;">
               <a href="/tu-van-moi-gioi-bat-dong-san-quan-1/cong-ty-cp-tu-van-dau-tu-va-quan-ly-bat-dong-san-saigon-cente-ep2776" rel="nofollow" title="CÔNG TY CP TƯ VẤN ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN SAIGON CENTER REAL">
               <img class="color_flip" alt="CÔNG TY CP TƯ VẤN ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN SAIGON CENTER REAL" src="https://file4.batdongsan.com.vn/2020/01/09/PGsxuI1y/20200109093229-ce7d.jpg" is-lazy-image="true" lazy-id="28">                        </a>
            </li>
            <li class="swiper-slide swiper-slide-active" data-swiper-slide-index="6" style="width: 102px; margin-right: 10px;">
               <a href="/thi-cong-xay-dung-ba-dinh/hd-mo-ep2132" rel="nofollow" title="HD Mon Holdings">
               <img class="color_flip" alt="HD Mon Holdings" src="https://file4.batdongsan.com.vn/2016/12/17/Nl3mS01v/20161217085942-2e1c.jpg" is-lazy-image="true" lazy-id="29">                        </a>
            </li>
            <li class="swiper-slide swiper-slide-next" data-swiper-slide-index="7" style="width: 102px; margin-right: 10px;">
               <a href="/tu-van-moi-gioi-bat-dong-san-quan-12/cong-ty-co-phan-tap-doan-dia-oc-va-ep2773" rel="nofollow" title="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐỊA ỐC VẠN XUÂN">
               <img class="color_flip" alt="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐỊA ỐC VẠN XUÂN" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/2020/04/06/PGsxuI1y/20200406083257-058a.jpg" is-lazy-image="true" lazy-id="30">                        </a>
            </li>
            <li class="swiper-slide" data-swiper-slide-index="8" style="width: 102px; margin-right: 10px;">
               <a href="/tu-van-moi-gioi-bat-dong-san-quan-2/cong-ty-tnhh-dau-tu-va-quan-ly-bat-dong-sa-ep2772" rel="nofollow" title="CÔNG TY TNHH ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN DTN">
               <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN DTN" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/2020/01/03/3ZsSL6gy/20200103145745-1450.jpg" is-lazy-image="true" lazy-id="48">                        </a>
            </li>
            <li class="swiper-slide" data-swiper-slide-index="9" style="width: 102px; margin-right: 10px;">
               <a href="/thi-cong-xay-dung-thu-dau-mot-bd/cong-ty-cp-xay-dung-tu-van-dau-tu-binh-duon-ep75" rel="nofollow" title="Công ty CP Xây dựng Tư vấn Đầu tư Bình Dương (BICONSI)">
               <img class="color_flip" alt="Công ty CP Xây dựng Tư vấn Đầu tư Bình Dương (BICONSI)" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/2020/05/27/hmcVYWuR/20200527142414-6a13.jpg" is-lazy-image="true" lazy-id="49">                        </a>
            </li>
            <li class="swiper-slide" data-swiper-slide-index="10" style="width: 102px; margin-right: 10px;">
               <a href="/dau-tu-du-an-quan-7/novalan-ep480" rel="nofollow" title="Novaland Group">
               <img class="color_flip" alt="Novaland Group" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/2020/07/21/n1AwoD7S/20200721151328-207e.jpg" is-lazy-image="true" lazy-id="50">                        </a>
            </li>
            <li class="swiper-slide" data-swiper-slide-index="11" style="width: 102px; margin-right: 10px;">
               <a href="/dau-tu-du-an-rach-gia-kg/cong-ty-cpdt-phu-cuong-kie-ep2787" rel="nofollow" title="CÔNG TY CPĐT PHÚ CƯỜNG KIÊN GIANG">
               <img class="color_flip" src="https://file4.batdongsan.com.vn/2020/04/22/PGsxuI1y/20200422111005-0350.jpg" alt="CÔNG TY CPĐT PHÚ CƯỜNG KIÊN GIANG">
               </a>
            </li>
            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 102px; margin-right: 10px;">
               <a href="/cac-linh-vuc-khac-cau-giay/cong-ty-co-pha-ep2826" rel="nofollow" title="Công ty Cổ Phần Deborah">
               <img class="color_flip" alt="Công ty Cổ Phần Deborah" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/2020/11/18/hmcVYWuR/20201118143341-43eb.jpg" is-lazy-image="true" lazy-id="51">                        </a>
            </li>
            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 102px; margin-right: 10px;">
               <a href="/dau-tu-du-an-quan-1/cong-ty-tnhh-dau-tu-dia-oc-thanh-ph-ep1898" rel="nofollow" title="Công ty TNHH Đầu tư Địa ốc Thành phố (CityLand)">
               <img class="color_flip" alt="Công ty TNHH Đầu tư Địa ốc Thành phố (CityLand)" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/2020/10/16/hmcVYWuR/20201016153855-fa63.jpg" is-lazy-image="true" lazy-id="52">                        </a>
            </li>
            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 102px; margin-right: 10px;">
               <a href="/dau-tu-du-an-quan-1/cong-ty-cp-tap-doan-dau-tu-chau-a-thai-bin-ep2818" rel="nofollow" title="Công ty CP Tập Đoàn Đầu Tư Châu Á Thái Bình Dương">
               <img class="color_flip" alt="Công ty CP Tập Đoàn Đầu Tư Châu Á Thái Bình Dương" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/2020/10/05/hmcVYWuR/20201005135528-83f1.jpg" is-lazy-image="true" lazy-id="53">                        </a>
            </li>
            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 102px; margin-right: 10px;">
               <a href="/tu-van-moi-gioi-bat-dong-san-ben-cat-bd/cong-ty-tnhh-dau-tu-xay-dung-dich-vu-hoang-th-ep2813" rel="nofollow" title="CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG DỊCH VỤ HOÀNG THỔ GROUP">
               <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG DỊCH VỤ HOÀNG THỔ GROUP" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/2020/09/28/PGsxuI1y/20200928152939-aa13.jpg" is-lazy-image="true" lazy-id="54">                        </a>
            </li>
         </ul>
         <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
      <div class="m-t-20">
         <a href="/doanh-nghiep" class="home-small-more">Xem thêm<img src="https://file4.batdongsan.com.vn/images/newhome/3x/icon-arrow-right.png"></a>
      </div>
   </div>
   <script type="text/javascript">
      (function callJQuery() {
          if (window.FrontEnd && window.FrontEnd.Systems && window.FrontEnd.Systems.Home && window.FrontEnd.Systems.Home.TypicalEnterpriseBinnova) {
              new window.FrontEnd.Systems.Home.TypicalEnterpriseBinnova({});
          } else {
              setTimeout(callJQuery, 100)
          }
      })();
   </script>
   <!-- Bao chi noi ve Batdongsan-->
   <div class="homemain home-social">
      <h2>Báo chí nói về Batdongsan.com.vn</h2>
      <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-ios">
         <ul class="swiper-wrapper" style="transform: translate3d(-603.077px, 0px, 0px); transition-duration: 0ms;">
            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6" style="width: 291.538px; margin-right: 10px;">
               <div class="home-social-img">
                  <a href="https://dantri.com.vn/bat-dong-san/batdongsancomvn-cong-bo-giao-dien-trang-chu-moi-20200110003608422.htm" target="_blank'" rel="nofollow">
                  <img style="max-height: 173px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/01/10/yl6ZFYiO/20200110174136-6f7e.jpg" is-lazy-image="true" lazy-id="46">                            </a>
               </div>
               <div class="home-social-link">
                  <img style="max-height: 40px; max-width: 40px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_DanTri.png" is-lazy-image="true" lazy-id="47">                            <a href="https://dantri.com.vn/bat-dong-san/batdongsancomvn-cong-bo-giao-dien-trang-chu-moi-20200110003608422.htm" target="_blank'" rel="nofollow">
                  Batdongsan.com.vn công bố giao diện trang chủ mới
                  </a>
               </div>
            </li>
            <li class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="7" style="width: 291.538px; margin-right: 10px;">
               <div class="home-social-img">
                  <a href="https://baoxaydung.com.vn/dat-nen-van-la-kenh-dau-tu-hap-dan-trong-tuong-lai-269183.html" target="_blank'" rel="nofollow">
                  <img style="max-height: 173px" src="https://file4.batdongsan.com.vn/images/newhome/bao3/B-02_BaoXayDung.jpg">
                  </a>
               </div>
               <div class="home-social-link">
                  <img style="max-height: 40px; max-width: 40px" src="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_BaoXayDung.png">
                  <a href="https://baoxaydung.com.vn/dat-nen-van-la-kenh-dau-tu-hap-dan-trong-tuong-lai-269183.html" target="_blank'" rel="nofollow">
                  Batdongsan.com.vn tổ chức Hội nghị bất động sản Việt nam 2019
                  </a>
               </div>
            </li>
            <li class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 291.538px; margin-right: 10px;">
               <div class="home-social-img">
                  <a href="http://cafef.vn/batdongsancomvn-chinh-thuc-thay-giao-dien-trang-chu-moi-20200110115000392.chn" target="_blank'" rel="nofollow">
                  <img style="max-height: 173px" src="https://file4.batdongsan.com.vn/crop/350x232/2020/01/10/yl6ZFYiO/20200110174140-b87a.jpg" is-lazy-image="true" lazy-id="34">                            </a>
               </div>
               <div class="home-social-link">
                  <img style="max-height: 40px; max-width: 40px" src="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_CafeF.png" is-lazy-image="true" lazy-id="35">                            <a href="http://cafef.vn/batdongsancomvn-chinh-thuc-thay-giao-dien-trang-chu-moi-20200110115000392.chn" target="_blank'" rel="nofollow">
                  2020: Batdongsan.com.vn và những cải tiến công nghệ
                  </a>
               </div>
            </li>
            <li class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 291.538px; margin-right: 10px;">
               <div class="home-social-img">
                  <a href="https://nhadat.tuoitre.vn/quy-mo-thi-truong-bat-dong-san-viet-nam-van-con-nho-so-voi-tiem-nang-20190702160134482.htm" target="_blank'" rel="nofollow">
                  <img style="max-height: 173px" src="https://file4.batdongsan.com.vn/images/newhome/bao3/B-06_TuoiTre.jpg" is-lazy-image="true" lazy-id="36">                            </a>
               </div>
               <div class="home-social-link">
                  <img style="max-height: 40px; max-width: 40px" src="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_TuoiTre.png" is-lazy-image="true" lazy-id="37">                            <a href="https://nhadat.tuoitre.vn/quy-mo-thi-truong-bat-dong-san-viet-nam-van-con-nho-so-voi-tiem-nang-20190702160134482.htm" target="_blank'" rel="nofollow">
                  Quy mô thị trường bất động sản việt nam vẫn còn nhỏ so với tiềm năng
                  </a>
               </div>
            </li>
            <li class="swiper-slide" data-swiper-slide-index="2" style="width: 291.538px; margin-right: 10px;">
               <div class="home-social-img">
                  <a href="http://cafef.vn/3-diem-nghen-cua-nen-kinh-te-va-tac-dong-den-thi-truong-bds-nam-2020-20191126173124409.chn" target="_blank'" rel="nofollow">
                  <img style="max-height: 173px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-04_CafeF.jpg" is-lazy-image="true" lazy-id="38">                            </a>
               </div>
               <div class="home-social-link">
                  <img style="max-height: 40px; max-width: 40px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_CafeF.png" is-lazy-image="true" lazy-id="39">                            <a href="http://cafef.vn/3-diem-nghen-cua-nen-kinh-te-va-tac-dong-den-thi-truong-bds-nam-2020-20191126173124409.chn" target="_blank'" rel="nofollow">
                  Tác động của kinh tế đến thị trường bất động sản theo ghi nhận của Batdongsan.com.vn
                  </a>
               </div>
            </li>
            <li class="swiper-slide" data-swiper-slide-index="3" style="width: 291.538px; margin-right: 10px;">
               <div class="home-social-img">
                  <a href="https://thoibaonganhang.vn/vres-2019-noi-hoi-tu-cua-chuyen-gia-va-doanh-nghiep-bat-dong-san-hang-dau-95645.html" target="_blank'" rel="nofollow">
                  <img style="max-height: 173px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-01_ThoiBaoNganHang.jpg" is-lazy-image="true" lazy-id="40">                            </a>
               </div>
               <div class="home-social-link">
                  <img style="max-height: 40px; max-width: 40px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_ThoiBaoNganHang.png" is-lazy-image="true" lazy-id="41">                            <a href="https://thoibaonganhang.vn/vres-2019-noi-hoi-tu-cua-chuyen-gia-va-doanh-nghiep-bat-dong-san-hang-dau-95645.html" target="_blank'" rel="nofollow">
                  VRES 2019 – Sự kiện được quan tâm nhất thị trường bất động sản Việt Nam
                  </a>
               </div>
            </li>
            <li class="swiper-slide" data-swiper-slide-index="4" style="width: 291.538px; margin-right: 10px;">
               <div class="home-social-img">
                  <a href="https://dantri.com.vn/bat-dong-san/gia-condotel-lao-doc-20191212143023187.htm" target="_blank'" rel="nofollow">
                  <img style="max-height: 173px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-03_DanTri_CondotelLaoDoc.jpg" is-lazy-image="true" lazy-id="42">                            </a>
               </div>
               <div class="home-social-link">
                  <img style="max-height: 40px; max-width: 40px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_DanTri.png" is-lazy-image="true" lazy-id="43">                            <a href="https://dantri.com.vn/bat-dong-san/gia-condotel-lao-doc-20191212143023187.htm" target="_blank'" rel="nofollow">
                  Batdongsan.com.vn công bố số liệu về thị trường Condotel 2019
                  </a>
               </div>
            </li>
            <li class="swiper-slide" data-swiper-slide-index="5" style="width: 291.538px; margin-right: 10px;">
               <div class="home-social-img">
                  <a href="https://vietnammoi.vn/ha-noi-gia-nha-tai-quan-dong-da-co-luc-len-toi-290-trieu-dong-moi-m2-20191015093243315.htm" target="_blank'" rel="nofollow">
                  <img style="max-height: 173px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-08_VietnamMoi.jpg" is-lazy-image="true" lazy-id="44">                            </a>
               </div>
               <div class="home-social-link">
                  <img style="max-height: 40px; max-width: 40px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_VietnamMoi.png" is-lazy-image="true" lazy-id="45">                            <a href="https://vietnammoi.vn/ha-noi-gia-nha-tai-quan-dong-da-co-luc-len-toi-290-trieu-dong-moi-m2-20191015093243315.htm" target="_blank'" rel="nofollow">
                  Batdongsan.com.vn công bố giá rao bán bất động sản trên thị trường quý 3/2019
                  </a>
               </div>
            </li>
            <li class="swiper-slide" data-swiper-slide-index="6" style="width: 291.538px; margin-right: 10px;">
               <div class="home-social-img">
                  <a href="https://dantri.com.vn/bat-dong-san/batdongsancomvn-cong-bo-giao-dien-trang-chu-moi-20200110003608422.htm" target="_blank'" rel="nofollow">
                  <img style="max-height: 173px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/01/10/yl6ZFYiO/20200110174136-6f7e.jpg" is-lazy-image="true" lazy-id="55">                            </a>
               </div>
               <div class="home-social-link">
                  <img style="max-height: 40px; max-width: 40px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_DanTri.png" is-lazy-image="true" lazy-id="56">                            <a href="https://dantri.com.vn/bat-dong-san/batdongsancomvn-cong-bo-giao-dien-trang-chu-moi-20200110003608422.htm" target="_blank'" rel="nofollow">
                  Batdongsan.com.vn công bố giao diện trang chủ mới
                  </a>
               </div>
            </li>
            <li class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="7" style="width: 291.538px; margin-right: 10px;">
               <div class="home-social-img">
                  <a href="https://baoxaydung.com.vn/dat-nen-van-la-kenh-dau-tu-hap-dan-trong-tuong-lai-269183.html" target="_blank'" rel="nofollow">
                  <img style="max-height: 173px" src="https://file4.batdongsan.com.vn/images/newhome/bao3/B-02_BaoXayDung.jpg">
                  </a>
               </div>
               <div class="home-social-link">
                  <img style="max-height: 40px; max-width: 40px" src="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_BaoXayDung.png">
                  <a href="https://baoxaydung.com.vn/dat-nen-van-la-kenh-dau-tu-hap-dan-trong-tuong-lai-269183.html" target="_blank'" rel="nofollow">
                  Batdongsan.com.vn tổ chức Hội nghị bất động sản Việt nam 2019
                  </a>
               </div>
            </li>
            <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 291.538px; margin-right: 10px;">
               <div class="home-social-img">
                  <a href="http://cafef.vn/batdongsancomvn-chinh-thuc-thay-giao-dien-trang-chu-moi-20200110115000392.chn" target="_blank'" rel="nofollow">
                  <img style="max-height: 173px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/01/10/yl6ZFYiO/20200110174140-b87a.jpg" is-lazy-image="true" lazy-id="57">                            </a>
               </div>
               <div class="home-social-link">
                  <img style="max-height: 40px; max-width: 40px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_CafeF.png" is-lazy-image="true" lazy-id="58">                            <a href="http://cafef.vn/batdongsancomvn-chinh-thuc-thay-giao-dien-trang-chu-moi-20200110115000392.chn" target="_blank'" rel="nofollow">
                  2020: Batdongsan.com.vn và những cải tiến công nghệ
                  </a>
               </div>
            </li>
            <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 291.538px; margin-right: 10px;">
               <div class="home-social-img">
                  <a href="https://nhadat.tuoitre.vn/quy-mo-thi-truong-bat-dong-san-viet-nam-van-con-nho-so-voi-tiem-nang-20190702160134482.htm" target="_blank'" rel="nofollow">
                  <img style="max-height: 173px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-06_TuoiTre.jpg" is-lazy-image="true" lazy-id="59">                            </a>
               </div>
               <div class="home-social-link">
                  <img style="max-height: 40px; max-width: 40px" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_TuoiTre.png" is-lazy-image="true" lazy-id="60">                            <a href="https://nhadat.tuoitre.vn/quy-mo-thi-truong-bat-dong-san-viet-nam-van-con-nho-so-voi-tiem-nang-20190702160134482.htm" target="_blank'" rel="nofollow">
                  Quy mô thị trường bất động sản việt nam vẫn còn nhỏ so với tiềm năng
                  </a>
               </div>
            </li>
         </ul>
         <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
   </div>
   <script type="text/javascript">
      (function callJQuery() {
          if (window.FrontEnd && window.FrontEnd.Systems && window.FrontEnd.Systems.Home && window.FrontEnd.Systems.Home.NewsSocialBinnova) {
              new window.FrontEnd.Systems.Home.NewsSocialBinnova({});
          } else {
              setTimeout(callJQuery, 100)
          }
      })();
   </script>
   <script type="application/ld+json">
      {"@context":"https://schema.org/","@type":"RealEstateAgent","name":"Công ty Cổ phần PropertyGuru Việt Nam","image":"https://file4.batdongsan.com.vn/images/newhome/logo_wap1.svg","url":"https://m.batdongsan.com.vn","telephone":"0243562 5939","priceRange":"10","address":{"@type":"PostalAddress","streetAddress":"Tầng 31, Keangnam Hanoi Landmark, Phạm Hùng, Nam Từ Liêm","addressLocality":"Hà Nội","postalCode":"100000","addressCountry":"VN"},"geo":{"@type":"GeoCoordinates","latitude":21.0166982,"longitude":105.783585},"openingHoursSpecification":{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday"],"opens":"08:00","closes":"19:00"}}
   </script>
</div>



<nav class="pushmenu pushmenu-right">
   <div class="user-area">
      <div>
         <div class="m-user-ava u-login">
         </div>
         <div class="user-action u-logout">
            <a href="/trang-dang-nhap">Đăng nhập</a>
            <a class="register" href="/dang-ky-nguoi-dung">Đăng ký</a>
         </div>
      </div>
      <a href="/dang-tin-rao-vat-ban-nha-dat" class="user-post"><strong>Đăng tin</strong></a>
   </div>
   <div class="slide-menu">
      <ul class="dropdown-navigative-menu">
         <li class="lv0"><a href="/tin-da-luu"><span class="icon"><img src="https://staticfile.batdongsan.com.vn/images/mobile/icons/24x24/filled/ic_shortlist.svg"></span><span class="text">Tin đăng đã lưu</span></a></li>
         <li class="lv0 active"><a href="/"><span class="icon"><img src="https://staticfile.batdongsan.com.vn/images/mobile/ic_house.svg"></span><span class="text">Trang chủ</span></a></li>
         <li class="lv0">
            <a href="/nha-dat-ban" class="haslink "><span class="icon"><img src="https://staticfile.batdongsan.com.vn/images/mobile/ic_for_sale.svg"></span><span class="text">Nhà đất bán</span></a>
            <div class="arrrow"></div>
            <ul>
               <li class="lv1"><a href="/ban-can-ho-chung-cu" class="haslink ">Bán căn hộ chung cư</a></li>
               <li class="lv1"><a href="/ban-nha-rieng" class="haslink ">Bán nhà riêng</a></li>
               <li class="lv1"><a href="/ban-nha-biet-thu-lien-ke" class="haslink ">Bán nhà biệt thự, liền kề</a></li>
               <li class="lv1"><a href="/ban-nha-mat-pho" class="haslink ">Bán nhà mặt phố</a></li>
               <li class="lv1"><a href="/ban-dat-nen-du-an" class="haslink ">Bán đất nền dự án</a></li>
               <li class="lv1"><a href="/ban-dat" class="haslink ">Bán đất</a></li>
               <li class="lv1"><a href="/ban-trang-trai-khu-nghi-duong" class="haslink ">Bán trang trại, khu nghỉ dưỡng</a></li>
               <li class="lv1"><a href="/ban-kho-nha-xuong" class="haslink ">Bán kho, nhà xưởng</a></li>
               <li class="lv1"><a href="/ban-loai-bat-dong-san-khac" class="haslink ">Bán loại bất động sản khác</a></li>
            </ul>
         </li>
         <li class="lv0">
            <a href="/nha-dat-cho-thue" class="haslink "><span class="icon"><img src="https://staticfile.batdongsan.com.vn/images/mobile/ic_for_rent.svg"></span><span class="text">Nhà đất cho thuê</span></a>
            <div class="arrrow"></div>
            <ul>
               <li class="lv1"><a href="/cho-thue-can-ho-chung-cu" class="haslink ">Cho thuê căn hộ chung cư</a></li>
               <li class="lv1"><a href="/cho-thue-nha-rieng" class="haslink ">Cho thuê nhà riêng</a></li>
               <li class="lv1"><a href="/cho-thue-nha-mat-pho" class="haslink ">Cho thuê nhà mặt phố</a></li>
               <li class="lv1"><a href="/cho-thue-nha-tro-phong-tro" class="haslink ">Cho thuê nhà trọ, phòng trọ</a></li>
               <li class="lv1"><a href="/cho-thue-van-phong" class="haslink ">Cho thuê văn phòng</a></li>
               <li class="lv1"><a href="/cho-thue-cua-hang-ki-ot" class="haslink ">Cho thuê cửa hàng - ki ốt</a></li>
               <li class="lv1"><a href="/cho-thue-kho-nha-xuong-dat" class="haslink ">Cho thuê kho, nhà xưởng, đất</a></li>
               <li class="lv1"><a href="/cho-thue-loai-bat-dong-san-khac" class="haslink ">Cho thuê loại bất động sản khác</a></li>
            </ul>
         </li>
         <li class="lv0">
            <a href="/du-an-bat-dong-san" class="haslink "><span class="icon"><img src="https://staticfile.batdongsan.com.vn/images/mobile/ic_project.svg"></span><span class="text">Dự án</span></a>
            <div class="arrrow"></div>
            <ul>
               <li class="lv1"><a href="/can-ho-chung-cu" class="haslink ">Căn hộ, Chung cư</a></li>
               <li class="lv1"><a href="/cao-oc-van-phong" class="haslink ">Cao ốc văn phòng</a></li>
               <li class="lv1"><a href="/trung-tam-thuong-mai" class="haslink ">Trung tâm thương mại</a></li>
               <li class="lv1"><a href="/khu-do-thi-moi" class="haslink ">Khu đô thị mới</a></li>
               <li class="lv1"><a href="/khu-phuc-hop" class="haslink ">Khu phức hợp</a></li>
               <li class="lv1"><a href="/nha-o-xa-hoi" class="haslink ">Nhà ở xã hội</a></li>
               <li class="lv1"><a href="/khu-nghi-duong-sinh-thai" class="haslink ">Khu nghỉ dưỡng, Sinh thái</a></li>
               <li class="lv1"><a href="/khu-cong-nghiep" class="haslink ">Khu công nghiệp</a></li>
               <li class="lv1"><a href="/du-an-khac" class="haslink ">Dự án khác</a></li>
               <li class="lv1"><a href="/biet-thu-lien-ke" class="haslink ">Biệt thự, liền kề</a></li>
            </ul>
         </li>
         <li class="lv0">
            <a href="/can-mua-can-thue" class="haslink "><span class="icon"><img src="https://staticfile.batdongsan.com.vn/images/mobile/ic_buy_rent.svg"></span><span class="text">Cần mua - Cần thuê</span></a>
            <div class="arrrow"></div>
            <ul>
               <li class="lv1"><a href="/nha-dat-can-mua" class="haslink ">Nhà đất cần mua</a></li>
               <li class="lv1"><a href="/nha-dat-can-thue" class="haslink ">Nhà đất cần thuê</a></li>
            </ul>
         </li>
         <li class="lv0">
            <a href="/tin-tuc" class="haslink "><span class="icon"><img src="https://staticfile.batdongsan.com.vn/images/mobile/ic_news.svg"></span><span class="text">Tin tức</span></a>
            <div class="arrrow"></div>
            <ul>
               <li class="lv1"><a href="/Covid-19" class="haslink ">BĐS &amp; Covid-19</a></li>
               <li class="lv1"><a href="/tin-thi-truong" class="haslink ">Tin thị trường</a></li>
               <li class="lv1"><a href="/interaktivestory" class="haslink ">Interaktive Story</a></li>
               <li class="lv1"><a href="/phan-tich-nhan-dinh" class="haslink ">Phân tích - nhận định</a></li>
               <li class="lv1"><a href="/chinh-sach-quan-ly" class="haslink ">Chính sách - Quản lý</a></li>
               <li class="lv1"><a href="/thong-tin-quy-hoach" class="haslink ">Thông tin quy hoạch</a></li>
               <li class="lv1"><a href="/bat-dong-san-the-gioi" class="haslink ">Bất động sản thế giới</a></li>
               <li class="lv1"><a href="/tai-chinh-chung-khoan-bat-dong-san" class="haslink ">Tài chính - Chứng khoán - BĐS</a></li>
               <li class="lv1"><a href="/tu-van-luat-bat-dong-san" class="haslink ">Tư vấn luật</a></li>
               <li class="lv1"><a href="/loi-khuyen" class="haslink ">Lời khuyên</a></li>
            </ul>
         </li>
         <li class="lv0">
            <a href="/noi-ngoai-that" class="haslink "><span class="icon"><img src="https://staticfile.batdongsan.com.vn/images/mobile/ic_interior.svg"></span><span class="text">Nội - Ngoại thất</span></a>
            <div class="arrrow"></div>
            <ul>
               <li class="lv1"><a href="/noi-that" class="haslink ">Nội thất</a></li>
               <li class="lv1"><a href="/ngoai-that" class="haslink ">Ngoại thất</a></li>
               <li class="lv1"><a href="/xay-dung" class="haslink ">Xây dựng</a></li>
               <li class="lv1"><a href="/kien-truc" class="haslink ">Kiến trúc</a></li>
               <li class="lv1"><a href="/tu-van-noi-ngoai-that" class="haslink ">Tư vấn nội ngoại thất</a></li>
               <li class="lv1"><a href="/mach-ban" class="haslink ">Mách bạn</a></li>
               <li class="lv1"><a href="/mua-sam" class="haslink ">Mua sắm</a></li>
            </ul>
         </li>
         <li class="lv0">
            <a href="/phong-thuy" class="haslink "><span class="icon"><img src="https://staticfile.batdongsan.com.vn/images/mobile/ic_feng_shui.svg"></span><span class="text">Phong thủy</span></a>
            <div class="arrrow"></div>
            <ul>
               <li class="lv1"><a href="/phong-thuy-toan-canh" class="haslink ">Phong thủy toàn cảnh</a></li>
               <li class="lv1"><a href="/tu-van-phong-thuy" class="haslink ">Tư vấn phong thủy</a></li>
               <li class="lv1"><a href="/phong-thuy-nha-o" class="haslink ">Phong thủy nhà ở</a></li>
               <li class="lv1"><a href="/phong-thuy-van-phong" class="haslink ">Phong thủy văn phòng</a></li>
               <li class="lv1"><a href="/tin-tuc-phong-thuy-theo-tuoi" class="haslink ">Phong thủy theo tuổi</a></li>
            </ul>
         </li>
         <li class="lv0">
            <a href="javascript:;" class="nolink "><span class="icon"><img src="https://staticfile.batdongsan.com.vn/images/mobile/ic_contact_list.svg"></span><span class="text">Danh bạ</span></a>
            <div class="arrrow"></div>
            <ul>
               <li class="lv1"><a href="/nha-moi-gioi" class="haslink ">Nhà môi giới</a></li>
               <li class="lv1"><a href="/doanh-nghiep" class="haslink ">Doanh nghiệp</a></li>
            </ul>
         </li>
         <li class="lv0 bg_menu"><a href="/dang-ky-nhan-email">Đăng ký nhận tin bất động sản</a></li>
         <li class="lv0 bg_menu"><a href="https://airtable.com/shrbaUORGfT7arZVJ" target="_blank" rel="nofollow">Góp ý - Báo lỗi</a></li>
         <li class="lv0 bg_menu"><a href="javascript:$zopim.livechat.window.show();" rel="nofollow" title="Trò chuyện với chúng tôi">Trò chuyện với chúng tôi</a> <span class="notify-head-chat mnu-chat-icon-unread"></span></li>
         <li class="lv0 bg_menu"><a href="/gioi-thieu">Giới thiệu về chúng tôi</a></li>
         <li class="lv0 bg_menu"><a href="/lien-he">Liên hệ</a></li>
      </ul>
      <div class="menupad"></div>
      <div id="right-page-nav"></div>
   </div>
</nav>

@endsection
@push('styles')
    <link
        rel="stylesheet"
        href="{{ asset('css/partials/project/block-search.css') . '?m=' . filemtime('css/partials/project/block-search.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('js/pages/project/searchHome.js') . '?m=' . filemtime('js/pages/project/searchHome.js') }}"></script>
@endpush