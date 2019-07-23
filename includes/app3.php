<script>

        $(function () {
            function IsPhone() {
                mobile_flag = false;
                var screen_width = window.screen.width;
                var screen_height = window.screen.height;
                if (screen_width < 500 && screen_height < 820) {
                    mobile_flag = true;
                }
                return mobile_flag;
            }
        
            function APP3() {
                console.log(IsPhone());
                
                var ifundefined = $("#inn-widget__author-profile__count").find(".inn-widget__author-profile__count__item__number").first().text();
                if (ifundefined != "undefined") {
                    clearInterval(xh2);
                    if (IsPhone()) {
                        $(".inn-widget__author-profile__container").children(".inn-widget__author-profile__avatar").remove();
                        $("#inn-widget__author-profile__info").remove();
                        $("#inn-widget__author-profile__point").remove();
                        $(".inn-widget__author-profile__container").attr("class", "inn-widget__author");
                        $(".inn-widget,.inn-sidebar__widget,.inn-widget__author-profile").attr("class", "inn-widget inn-sidebar__widget inn-widget__author");

                        // inn-comment
                    }
                }
                
            }
        
            
                // undefined
                var xh2 = setInterval(APP3, 500);
            })
        
        
        </script>