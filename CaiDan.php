<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>配置界面</title>
  <link rel="stylesheet" href="<?php echo(plugin_dir_url(__FILE__)) ?>/layui/css/layui.css">
  <!-- <script src="<?php echo(plugin_dir_url(__FILE__)) ?>/layui/layui.all.js"></script> -->
  <script src="<?php echo(plugin_dir_url(__FILE__)) ?>/layui/layui.js" charset="utf-8"></script>
  <script src="<?php echo(plugin_dir_url(__FILE__)) ?>/js/JQ.js"></script>
  <script src="<?php echo(plugin_dir_url(__FILE__)) ?>/js/py.js"></script>
  <link rel="stylesheet" href="<?php echo(plugin_dir_url(__FILE__)) ?>/css/DanDan.css?version=2101621028">
</head>

<body>

  <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
    <ul class="layui-tab-title">
      <li class="layui-this">AO-py</li>
      <li>首页模块关键词美化</li>
      <li>会员评论颜色</li>
      <!--  <li>商品管理</li>
            <li>订单管理</li> -->
    </ul>
    <div class="layui-tab-content" style="height: 100px;">
      <div class="layui-tab-item layui-show layui-anim layui-anim-upbit ">
        <button onclick="bc()" type="button" class="layui-btn layui-btn-fluid">保存设置</button>
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
          <legend>开发日程：</legend>
          <h1>真男人从不写开发日志（妈的修改的频率太高了写不过来！）。。嘤嘤嘤去github看就知道了！<br>给我去听歌！</h1>
        </fieldset>
        <ul class="layui-timeline">
        <?php 
          // 导入日志
        include(plugin_dir_path(__FILE__) .'/includes/log.php');
        ?>
        </ul>

      </div>
      <div  class="layui-tab-item layui-anim layui-anim-upbit">

              <!-- 功能2 -->
                                          <blockquote class="layui-elem-quote">
                                              这个功能不多做介绍了，就是把首页的关键词圆润话，哎呀自己启用试一试知道了
                                            </blockquote>
                                            <form class="layui-form" action="">
                                              <div class="layui-form-item">
                                                <label style="
                                                width: 110px;
                                            " class="layui-form-label">模块开关：</label>
                                                <div class="layui-input-block">
                                                  <!-- <input type="checkbox" name="close" lay-skin="switch" lay-text="ON|OFF"> -->
                                                  <input type="checkbox" id="app1" value="<?php echo(get_option('AOPYCONFIG')['app1']) ?>" lay-skin="switch"
                                                    lay-filter="app1" lay-text="ON|OFF">
                                                  <!-- open/close -->
                                                </div>
                                              </div>

                                              <div class="layui-form-item">
                                                <label style="
                                                width: 110px;
                                            " class="layui-form-label">附加Style：</label>
                                                <div class="layui-input-block">
                                                  <input type="text" name="title" lay-verify="title"
                                                    value="<?php echo(get_option('AOPYCONFIG')['app1_A']) ?>" id="app1_A" autocomplete="off"
                                                    placeholder="请输入格式正确的Style" class="layui-input">
                                                </div>
                                              </div>

                                            </form>

                                            <script>
                                              layui.use(['form', 'layedit', 'laydate'], function () {
                                                var form = layui.form
                                                  , layer = layui.layer
                                                  , layedit = layui.layedit
                                                  , laydate = layui.laydate;
                                                //监听提交

                                                if ($('#app1').val() == 'on') {
                                                  $("#app1").prop("checked", true);
                                                } else {
                                                  $("#app1").prop("checked", false);
                                                }


                                                form.render();

                                                form.on('switch(app1)', function (data) {
                                                  if (this.checked) {
                                                    $('#app1').val('on')
                                                  } else {
                                                    $('#app1').val('off')
                                                  }

                                                  layer.msg('首页模块关键词美化功能：' + (this.checked ? '开启' : '关闭'), {
                                                    offset: '6px'
                                                  });

                                                });

                                              });
                                            </script>
      </div>
      <div class="layui-tab-item layui-anim layui-anim-upbit">
      
                                              <!-- 功能3 -->
                                              <blockquote class="layui-elem-quote">
                                              这就是会员评论美化
                                            </blockquote>
                                            <blockquote class="layui-elem-quote">
                                              功能有轻微复杂，需要自己写表达式。当然不是专业的表达式，是我们插件的要求。<br>
                                              使用;分割多个用户组，前后不能加;只能在中间加;
                                            </blockquote>
                                            <blockquote class="layui-elem-quote">
                                              正确格式为：
                                              用户组名:rgb(220,20,60);用户组名:rgb(220,20,60)
                                            </blockquote>
                                            <form class="layui-form" action="">
                                              <div class="layui-form-item">
                                                <label style="
                                                width: 110px;
                                            " class="layui-form-label">模块开关：</label>
                                                <div class="layui-input-block">
                                                  <!-- <input type="checkbox" name="close" lay-skin="switch" lay-text="ON|OFF"> -->
                                                  <input type="checkbox" id="app2" value="<?php echo(get_option('AOPYCONFIG')['app2']) ?>" lay-skin="switch"
                                                    lay-filter="app2" lay-text="ON|OFF">
                                                  <!-- open/close -->
                                                </div>
                                              </div>

                                              <div class="layui-form-item">
                                                <label style="
                                                width: 110px;
                                            " class="layui-form-label">用户组颜色规则：</label>
                                                <div class="layui-input-block">
                                                  <input type="text" name="title" lay-verify="title"
                                                    value="<?php echo(get_option('AOPYCONFIG')['app2_A']) ?>" id="app2_A" autocomplete="off"
                                                    placeholder="请输入格式正确的规则" class="layui-input">
                                                </div>
                                              </div>

                                            </form>

                                            <script>
                                              layui.use(['form', 'layedit', 'laydate'], function () {
                                                var form = layui.form
                                                  , layer = layui.layer
                                                  , layedit = layui.layedit
                                                  , laydate = layui.laydate;
                                                //监听提交

                                                if ($('#app2').val() == 'on') {
                                                  $("#app2").prop("checked", true);
                                                } else {
                                                  $("#app2").prop("checked", false);
                                                }


                                                form.render();

                                                form.on('switch(app2)', function (data) {
                                                  if (this.checked) {
                                                    $('#app2').val('on')
                                                  } else {
                                                    $('#app2').val('off')
                                                  }

                                                  layer.msg('用户组美化：' + (this.checked ? '开启' : '关闭'), {
                                                    offset: '6px'
                                                  });

                                                });

                                              });
                                            </script>
      
      
      
      
      
      </div>
      <div class="layui-tab-item layui-anim layui-anim-upbit">
                                            <!-- 功能3 -->
                                            <blockquote class="layui-elem-quote">
                                              手机端作者资料优化。
                                            </blockquote>
                                            <blockquote class="layui-elem-quote">
                                             哦对这功能不用介绍，反正开启就对了嗯哼！
                                            </blockquote>

                                            <form class="layui-form" action="">
                                              <div class="layui-form-item">
                                                <label style="
                                                width: 110px;
                                            " class="layui-form-label">模块开关：</label>
                                                <div class="layui-input-block">
                                                  <!-- <input type="checkbox" name="close" lay-skin="switch" lay-text="ON|OFF"> -->
                                                  <input type="checkbox" id="app3" value="<?php echo(get_option('AOPYCONFIG')['app3']) ?>" lay-skin="switch"
                                                    lay-filter="app3" lay-text="ON|OFF">
                                                  <!-- open/close -->
                                                </div>
                                              </div>

                                              

                                            </form>

                                            <script>
                                              layui.use(['form', 'layedit', 'laydate'], function () {
                                                var form = layui.form
                                                  , layer = layui.layer
                                                  , layedit = layui.layedit
                                                  , laydate = layui.laydate;
                                                //监听提交

                                                if ($('#app3').val() == 'on') {
                                                  $("#app3").prop("checked", true);
                                                } else {
                                                  $("#app3").prop("checked", false);
                                                }


                                                form.render();

                                                form.on('switch(app3)', function (data) {
                                                  if (this.checked) {
                                                    $('#app3').val('on')
                                                  } else {
                                                    $('#app3').val('off')
                                                  }

                                                  layer.msg('作者资料手机端美化：' + (this.checked ? '开启' : '关闭'), {
                                                    offset: '6px'
                                                  });

                                                });

                                              });
                                            </script>



      </div>
      <div class="layui-tab-item layui-anim layui-anim-upbit">内容5</div>
    </div>
    <script>
      layui.use('element', function () {
        var $ = layui.jquery
          , element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块

      });
      function bc() {
        // alert("执行！");
        $.get('<?php echo( admin_url( "admin-ajax.php" )) ?>', 'action=AO-PY'+
        '&app1=' + $('#app1').val() + '&app1_A=' + $('#app1_A').val()+
        '&app2=' + $('#app2').val() + '&app2_A=' + $('#app2_A').val()+
        '&app3=' + $('#app3').val(),
          function (data) {
            layer.open({
              title: '保存状态'
              , content: '成功'
            });
          }
        );

      }
    </script>

</body>

</html>