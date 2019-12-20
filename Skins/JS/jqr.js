var js_window=$(window);//Đối tượng window
var js_header=$('#header');//Đối tượng header

function getSearch() //bật tắt thanh tìm kiếm
{
var js_search=$(".search")[0];
if(js_search.style.display=="block")
    js_search.style.display="none";
else
    js_search.style.display="block";
}

function canchinh_topbar(js_window) //Căn chỉnh lại menu phải và sticky wrapper khi thu nhỏ màn hình
{
if(js_window.width()<=990)
    {
        $('#top-menu-right').css('position', 'static');
        $('#eng_flag').css('display','none');
        $("#top-menu-right > li > a").css('color','black');
        $("#top-menu-right").css('display','block');
        $("span","#top-menu-right").css('display','none');
        $("#user_icon").css('display','none');
        $(".search").css('bottom','-105px');
    }
    else
    {
        $('#top-menu-right').css('position', 'absolute');
        $('#eng_flag').css('display','block');
        $("#top-menu-right > li > a").css('color','white');
        $("#top-menu-right").css('display','flex');
        $("span","#top-menu-right").css('display','block');
        $("#user_icon").css('display','block');
        $(".search").css('bottom','-55px');
    }
}

canchinh_topbar(js_window);

js_window.resize(function(event) {
    canchinh_topbar(js_window);
});
js_window.scroll(function() {
    var js_sticky =$('#sticky_wrapper');
    if(js_window.scrollTop()>js_header.height())
    {
        js_sticky.css('background-color','blue');
        js_sticky.css('position','fixed');
        js_sticky.css('top','0px');
        js_sticky.css('z-index','2');
        js_sticky.children('h3').css('display','block');
        $('.nav-link').css('cssText','color:white !important;');
    }
    else
    {
        js_sticky.css('background-color','transparent');
        js_sticky.css('position', 'relative');
        js_sticky.css('z-index','0');
        js_sticky.children('h3').css('display','none');
        $('.nav-link').css('cssText','color:black !important;');
    }
});
