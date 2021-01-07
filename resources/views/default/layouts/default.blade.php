<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('page_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('head')
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') . '?m=' . filemtime('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('themify-icons/themify-icons.css') . '?m=' . filemtime('themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/navbar.css') . '?m=' . filemtime('css/partials/navbar.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/partials/navbar.css') . '?m=' . filemtime('css/partials/navbar.css') }}">  -->
    @if((new \Jenssegers\Agent\Agent())->isDesktop())
    <link rel="stylesheet" href="{{ asset('css/app.css') . '?m=' . filemtime('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') . '?m=' . filemtime('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/design.min.css') . '?m=' . filemtime('css/design.min.css') }}">
    @else
    <link rel="stylesheet" href="{{ asset('css/mobile.css') . '?m=' . filemtime('css/mobile.css') }}">
    @endif
    @stack('styles')
</head>

<body class="bg-site">
    <div class="form-content">
        @if((new \Jenssegers\Agent\Agent())->isDesktop())
            @include('default.partials.header')
            <!-- CONTENT -->
            <div class="page-main-container">
                @yield('content')
            </div>
            @include('default.partials.footer')
        @else
        <div class="body ">
            <div class="slide-pane">
                @include('default.mobile.header')
                <div class="slide-body">
                    @yield('content')
                    @include('default.mobile.footer')
                </div>
            </div>
        </div>
        @endif
    </div>
    <script src="{{ asset('js/app.js') . '?m=' . filemtime('js/app.js') }}"></script>
    <script src="{{ asset('js/FrontEnd.Home.min.js') . '?m=' . filemtime('js/FrontEnd.Home.min.js') }}"></script>
    <script src="{{ asset('js/jquery.tabslet.jscompress.js') . '?m=' . filemtime('js/jquery.tabslet.jscompress.js') }}"></script>
    <script src="{{ asset('js/customer.js') . '?m=' . filemtime('js/customer.js') }}"></script>

      <script type="text/javascript">
         document.addEventListener('DOMContentLoaded', function () {
             var lazyImages = [].slice.call(document.querySelectorAll('[src-lazy]'));
             window.countOfLazyImages = lazyImages.length;
             if ('IntersectionObserver' in window) {
                 let lazyImageObserver = new IntersectionObserver(function (entries, observer) {
                     entries.forEach(function (entry) {
                         if (entry.isIntersecting) {
                             let lazyImage = entry.target;
                             if (lazyImage.attributes['src-lazy']) {
                                 lazyImage.src = lazyImage.attributes['src-lazy'].value;
                                 lazyImage.removeAttribute('src-lazy');
                                 lazyImageObserver.unobserve(lazyImage);
                             }
                         };
                     });
                 });
                 lazyImages.forEach(function (lazyImage, i) {
                     lazyImage.setAttribute('lazy-id', i);
                     lazyImageObserver.observe(lazyImage);
                 });
                 (function checkDuplicate() {
                     var countOfLazyElements = [].slice.call(document.querySelectorAll('[lazy-id]'));
                     if (countOfLazyElements.length > window.countOfLazyImages) {
                         var elements = [].slice.call(document.querySelectorAll('[src-lazy]'));
                         elements.forEach(element => {
                             var lazyId = element.attributes['lazy-id'].value;
                             var lazyElements = [].slice.call(document.querySelectorAll(`[lazy-id="${lazyId}"]`));
                             if (lazyElements.length > 1) {
                                 for (var i = 1; i < lazyElements.length; i++) {
                                     var lazyElement = lazyElements[i];
                                     lazyImageObserver.observe(lazyElement);
                                     lazyElement.setAttribute('lazy-id', window.countOfLazyImages);
                                     window.countOfLazyImages++;
                                 }
                             }
                         });
                     }
                     setTimeout(checkDuplicate, 1000)
                 })();
             } else {
                 $('[src-lazy]').each(function () {
                     this.src = this.attributes['src-lazy'].value;
                     this.removeAttribute('src-lazy');
                 });
             }
         });
      </script> 
    @stack('scripts')
    <script>
        var width = $(window).width();
        var clickMenuParent = [];
        if (width <= 1024) {
            $(document).on('click', '.menu-parent', function (e) {
                if (clickMenuParent[$(this).data('key')]) {
                    clickMenuParent[$(this).data('key')] = 0;
                } else {
                    clickMenuParent[$(this).data('key')] = 1;
                    e.preventDefault();
                }
            })

            $('.navbar-header-menu-items').removeClass('top-0 left-100').addClass('left-0 top-100');
        }
    </script>
    <script>
    $( document ).ready(function () {
            $(".moreBox").slice(0, 7).show();
            $(".moreBox").slice(8, 12).hide();
            $("#prd-viewless").hide();
            if ($(".blogBox:hidden").length != 0) {
                $("#prd-viewmore").show();
                $("#prd-viewless").hide();
            }		
            $("#prd-viewmore").on('click', function (e) {
                e.preventDefault();
                $(".moreBox:hidden").slice(0, 10).slideDown();
                if ($(".moreBox:hidden").length == 0) {
                    $("#prd-viewmore").hide();
                    $("#prd-viewless").show();
                }
            });
        });
    </script>
    <script>
        $('.select-custom').on('click', function(event) {        
            $('.advance-select-options').toggle('show');
        });
        $('.home-search-tab li').click(function(e) {
            e.preventDefault();
            $('li').removeClass('actived');
            $(this).addClass('actived');
        });

        $('.click_pr').click(function(e) {
            var str = $(this).text();
            document.getElementById('lblCurrCate').innerHTML = str;
            document.getElementById('lblCurrCate').val = str;
            $('.advance-select-options').toggle('show');
            //toggleOptions();
        });
    </script>
</body>
</html>
