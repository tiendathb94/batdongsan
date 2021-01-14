//Menu
$(document).ready(function(){
    $(".dropdown-navigative-menu li").hover(function(){
        $(this).find(".tc_mn").show();
    }, function(){
        $(this).find(".tc_mn").hide();
    });

    $("img").each(function() {
        if ($(this).attr("bannerid") == undefined && $(this).attr("noloaderror") == undefined) {
            if (!$(this).attr("onerror")) $(this).on("error", function() {
                if ($(this).parent().hasClass("sr-image") || $(this).parent().parent().hasClass("sr-image")) $(this).attr("src", "http://posshop.top/image/no-photo.png");
                else {
                    var n = $("#staticDomain").data("cssserver");
                    n ? $(this).attr("src", $(this).attr("error-image-src") || `${n}/image/no-photo.jpg`) : $(this).attr("src", $(this).attr("error-image-src") || "http://posshop.top/image/no-photo.png")
                }
            })
        } else if ($(this).attr("noloaderror") === "true") $(this).on("error", function() {
            if ($(this).attr("imgerr") === "1") $(this).attr("src", "http://posshop.top/image/no-photo.png");
            else if ($(this).attr("imgerr") === "2") {
                var n = $("#staticDomain").data("cssserver");
                n ? $(this).attr("src", `${n}/image/no-photo.jpg`) : $(this).attr("src", "http://posshop.top/image/no-photo.png")
            }
        })
    })
});
//Hết menu
//Slider Home
var mySwiper = new Swiper ('.swiper-container-slider', {
    // Các Parameters
    direction: 'horizontal',
    loop: true,

    // Nếu cần pagination
    pagination: {
    el: '.swiper-pagination',
    },
    autoplay: {
        delay: 5000,
    },
    // Nếu cần navigation
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    // Nếu cần scrollbar
    scrollbar: {
    el: '.swiper-scrollbar',
    },
});

var mySwiper = new Swiper ('.ads_1', {
    // Các Parameters
    direction: 'horizontal',
    loop: true,

    // Nếu cần pagination
    pagination: {
    el: '.swiper-pagination',
    },
    autoplay: {
        delay: 5500,
    },
    // Nếu cần navigation
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    // Nếu cần scrollbar
    scrollbar: {
    el: '.swiper-scrollbar',
    },
});
var mySwiper = new Swiper ('.ads_2', {
    // Các Parameters
    direction: 'horizontal',
    loop: true,

    // Nếu cần pagination
    pagination: {
    el: '.swiper-pagination',
    },
    autoplay: {
        delay: 6000,
    },
    // Nếu cần navigation
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    // Nếu cần scrollbar
    scrollbar: {
    el: '.swiper-scrollbar',
    },
});
//Hết Slider Home

$("#hometabs li a").click(function() {
    function r() {
        $("#" + t).tabslet({
            mouseevent: "hover",
            attribute: "data-index",
            container: $("#" + t).find(".news-show"),
            element_container: $("#" + t).find(".list-news"),
            autorotate: !0,
            delay: 4e3,
            active: 1,
            animation: !0
        })
    }
    var t = $(this).attr("data-tab"),
        i;
    $(this).hasClass("actived") || ($("#hometabs li a").removeClass("actived"), $(this).addClass("actived"), $(".newscontain").hide(), $("#" + t).fadeIn("slow"), t === "hometab3" ? $("#tabview").attr("href", "/loi-khuyen") : t === "hometab4" ? $("#tabview").attr("href", "/phong-thuy") : $("#tabview").attr("href", "/tin-tuc"));
    i = t === "hometab2" ? n.getNewNewsAsHtmlUrl : t === "hometab3" ? n.getAdviceNewsAsHtmlUrl : t === "hometab4" ? n.getFengshuiNewsAsHtmlUrl : "";
    i ? u(i).then(function(n) {
        $(`#${t}`).html(n)
    }).then(r) : r()
});
$("#hometab1").tabslet({
    mouseevent: "hover",
    attribute: "data-index",
    container: $("#hometab1").find(".news-show"),
    element_container: $("#hometab1").find(".list-news"),
    autorotate: !0,
    delay: 4e3,
    active: 1,
    animation: !0
});
$("#hometab2").tabslet({
    mouseevent: "hover",
    attribute: "data-index",
    container: $("#hometab2").find(".news-show"),
    element_container: $("#hometab2").find(".list-news"),
    autorotate: !0,
    delay: 4e3,
    active: 1,
    animation: !0
});
$("#hometab3").tabslet({
    mouseevent: "hover",
    attribute: "data-index",
    container: $("#hometab3").find(".news-show"),
    element_container: $("#hometab3").find(".list-news"),
    autorotate: !0,
    delay: 4e3,
    active: 1,
    animation: !0
});
$("#hometab4").tabslet({
    mouseevent: "hover",
    attribute: "data-index",
    container: $("#hometab4").find(".news-show"),
    element_container: $("#hometab4").find(".list-news"),
    autorotate: !0,
    delay: 4e3,
    active: 1,
    animation: !0
});

$(window).on('resize load', function() {
    if ($(window).width() <= 768) { 
      $("body").removeClass("bg-site");
      $("body").addClass("grid");
    }
    else {
        $("body").removeClass("grid");
        $("body").addClass("bg-site");
    }
  });