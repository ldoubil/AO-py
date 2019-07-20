<script>

    $(function () {
        // $.get('https://moeacg.xyz/wp-admin/admin-ajax.php',
        //     'action=AOpyajax&name=app1',
        //     function (data) {
               
        //         // console.log(data);

        //     }
        // );
        $('.inn-homebox__header__keyword__link').attr('class', 'inn-category-quick-filter__cat__link');
        //先修改样式
        $('.inn-category-quick-filter__cat__link').attr('style','<?php echo(get_option('AOPYCONFIG')['app1_A']);?>' );
        //在修改自定义样式

        
    })

</script>