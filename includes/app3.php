<script>


    //判断是否是手机
    function IsMobile() {
        var isMobile = {
            Android: function () {
                return navigator.userAgent.match(/Android/i) ? true : false;
            },
            BlackBerry: function () {
                return navigator.userAgent.match(/BlackBerry/i) ? true : false;
            },
            iOS: function () {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false;
            },
            Windows: function () {
                return navigator.userAgent.match(/IEMobile/i) ? true : false;
            },
            any: function () {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
            }
        };

        return isMobile.any(); //是移动设备
    }
    $(function () {
        // undefined
        function app3() {
            var ifundefined = $("#inn-widget__author-profile__count").find(".inn-widget__author-profile__count__item__number").first().text();
            if (ifundefined != "undefined") {
                if (IsMobile()) {
                    $(".inn-widget__author-profile__container").children(".inn-widget__author-profile__avatar").remove();
                    $("#inn-widget__author-profile__info").remove();
                    $("#inn-widget__author-profile__point").remove();
                    $(".inn-widget__author-profile__container").attr("class", "inn-widget__author");
                    $(".inn-widget,.inn-sidebar__widget,.inn-widget__author-profile").attr("class", "inn-widget inn-sidebar__widget inn-widget__author");
                    var avatarhtml = $(".poi-g_lg-1-4").children(".inn-sidebar__item").prop("outerHTML");
                    $(".poi-g_lg-1-4").children(".inn-sidebar__item").remove();
                    $("#inn-comment").before(avatarhtml);
                }
            }
            clearInterval(xh2);
        }


        var xh2 = setInterval(APP3, 500);
    })


</script>