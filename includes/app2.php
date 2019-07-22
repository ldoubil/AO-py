<!-- app2 -->
<script>

    $(function () {

        setTimeout(function () {

            var text = new Array(); //哎当然先定义个数组
            // 在分割一下
            a = "<?php echo(get_option('AOPYCONFIG')['app2_A']);?>";
            text = a.split(";");


            for (var i = 0; i < text.length; i++) {
                b = text[i];
                var c = new Array();
                c = b.split(":");
                $('.inn-comment__item__body').each(
                    function () {
                        if ($(this).find(".inn-comment__item__label__role").text() == c[0]) {
                            $(this).find(".inn-comment__item__content__text").css("color", c[1])
                        }
                    }
                );



            }



        }, 1000)



    })

</script>