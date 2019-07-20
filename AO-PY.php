<?php
/*
Plugin Name: AO-PY
Plugin URI:	http://moeacg.xyz
Description:  爱国Ao第三方扩展！。
Version: 1.9.0
Author: 会做饭的二哈
Author URI: mailto:baikaiwen12@outlook.com
License: A "Slug" license name e.g. GPL2
*/



require (plugin_dir_path(__FILE__) .'/plugin-update-checker/plugin-update-checker.php');
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://raw.githubusercontent.com/ldoubil/AO-py/master/updata.json',
	__FILE__, //Full path to the main plugin file or functions.php.
	'AO-py'
);

include(plugin_dir_path(__FILE__) .'./config.php'); //导入配置文件
// print_r($AO_config->$menu_function);

global $wpdb, $wp_query;
$aoconfig = get_option('AOPUCONFIG');   //取到配置
register_activation_hook( __FILE__, 'AOPY_install' );//插件安装配置


add_action('admin_menu','addmenu'); //插入菜单
add_action('wp_head', 'addjq');     //挂载addjq

if (get_option('AOPYCONFIG')['app1']=='on') {                //是否启用功能1
    add_action('wp_head', 'addapp1');    //挂载功能1
}




//------------------------------------------------------------------------
function AOPY_install(){                        //默认配置
    global $wpdb, $wp_query;
    $pyconfig = array(
        'app1' => 'off',    //首页标签默认关闭
        'app1_A' => '',     //STYLE 自定义

     );

     update_option('AOPYCONFIG',$pyconfig); //添加ao设置
}
//------------------------------------------------------------------------
function addmenu()                                   //插入菜单的位置和信息配置        
{
    global $wpdb, $wp_query;
    global $AO_config;
    add_options_page(
        $AO_config['menu_title'],
        $AO_config['menu_title'],
        $AO_config['menu_capability'], 
        $AO_config['menu_slug'],
        $AO_config['menu_function']);

}
//-------------------------------------------------------------------------
function menutext(){            //菜单内容
include(plugin_dir_path(__FILE__) . './CaiDan.php');
}

//后面的就是挂载jq
//--------------------------------------------------------------------------
function addjq(){                   //引入jq代码
    echo('<script src="'.plugin_dir_url(__FILE__).'/js/JQ.js"></script>');
}

//--------------------------------------------------------------------------
function addapp1(){
    // includes_url($path, $scheme)
    include(plugin_dir_path(__FILE__ ).'/includes/app1.php');
    // echo('<script src="'."></script>');

}
//---------------------------------------------------------------------------

//不出我所料我实用这段代码频率不大，言外之意没啥吊用。
function AOpyajax()
{
    global $wpdb, $wp_query;
    $name = $_GET['name'];
    $date = $_GET['date'];
    if ($name = 'app1') {
        echo(get_option('AOPYCONFIG')['app1_A']);
    }
    wp_die();
    
}
//不过还是别管这段了，万一我啥时候用；





//保存设置
function AOAJAX(){
    global $wpdb, $wp_query;

    $da = get_option('AOPUCONFIG');
    $app1=$_GET['app1'];
    $app1_A =$_GET['app1_A'];

    $da['app1'] = $app1;
    $da['app1_A'] = $app1_A;
    update_option('AOPYCONFIG', $da);
    echo($app1.$app1_A);
    wp_die();
}

add_action('wp_ajax_AO-PY', 'AOAJAX'); //admin权限

add_action('wp_ajax_nopriv_AOpyajax', 'AOpyajax');
add_action('wp_ajax_AOpyajax', 'AOpyajax');