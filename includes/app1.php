<script>

    $(function () {
    //   app1
        $('.inn-homebox__header__keyword__link').attr('class', 'inn-category-quick-filter__cat__link');
        //先修改样式
        $('.inn-category-quick-filter__cat__link').attr('style','<?php echo(get_option('AOPYCONFIG')['app1_A']);?>' );
        //在修改自定义样式

        
    })

</script>