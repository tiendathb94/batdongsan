<header class="full-menu">
    <div class="menu-bar pushmenu pushmenu-right">
      <div class="control-menu">
          <div class="clearfix">
            <div class="login-group" style="" aria-label="Danh sách tin đã lưu" data-microtip-position="bottom" role="tooltip">
               <span class="notification" id="notiSave">
                  <img class="iconNotiSave" src="/images/favourite.svg">
                  <i class="mnu-notify-icon-unread nqv" style="display: none"></i>
                  <div class="listSave" style="display: none;">
                     <div class="header">{{ trans('lang.post_saved') }}</div>
                     <div class="content">
                        <p class="center" style="padding: 80px 0 80px;"><img src="/images/EmptyState.svg" alt="no data"></p>
                     </div>
                     <div class="footer" style="display: none !important;">
                        <a class="marked-products-view-more" href="#" title="Xem tất cả">{{ trans('lang.view_all') }}</a>
                     </div>
                  </div>
               </span>
            </div>
          </div>
          <div id="divUserStt" class="clearfix">
            <div class="join-group">
            @if(!Auth::user())
              <span>
                  <a href="{{ route('login') }}" rel="nofollow" id="kct_login">{{ trans('lang.login') }}</a>
              </span>
              <span class="line">|</span>
              <span>
                <a href="{{ route('registerForm') }}" rel="nofollow" id="kct_username">{{ trans('lang.registration') }}</a>
              </span>
              @else
              <span>
                <a href="{{ route('pages.user.index') }}" rel="nofollow" id="kct_username">
                  {{ auth()->user()->fullname }}
                </a>
              </span>
              <span>
              <a class="nav-link" href="{{ route('logout') }}">
                <img src="/images/ic_log_out.png" width="16">
              </a>
              </span>
              @endif
            </div>
          </div>
          <div id="Header_UserControl_divPostProduct">
            <a href="{{ route('posts.create_sell') }}" id="linkPostProduct" class="btn-border-grey">
            {{ trans('lang.post_news') }}
            </a>
          </div>
      </div>
      <div class="drop-menu">
         <div class="left-menu">
            <h1>
              <a href="{{ route('home') }}" rel="nofollow">
                <img src="/images/ic_logo_2.svg" alt="Kênh thông tin mua bán, cho thuê nhà đất số 1" title="">
              </a>
              <span class="visual-hidden"></span>
            </h1>
         </div>
         <div class="right-menu">
            <!--Header menu-->
            <div class="home-header-menu">
              @include('default.partials.navbar_menu')
            </div>
         </div>
         <div class="clear">&nbsp;</div>
      </div>
   </div>
   <div class="bg-pushmenu"></div>
</header>