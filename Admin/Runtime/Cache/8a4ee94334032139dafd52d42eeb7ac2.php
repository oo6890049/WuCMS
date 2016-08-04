<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js fixed-layout">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>常客隆</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="__PUBLIC__/Admin/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="__PUBLIC__/Admin/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="__PUBLIC__/Admin/assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="__PUBLIC__/Admin/assets/css/admin.css">

</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <strong>常客隆</strong>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <!--<li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>-->
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                <!--<li><a href="#"><span class="am-icon-user"></span> 资料</a></li>-->
                <!--<li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>-->
                <li><a href="javascript:window.location.href='<?php echo U('Public/logout');?>'"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
        <ul class="am-list admin-sidebar-list">
            <li><a href="<?php echo U('Index/index');?>"><span class="am-icon-home"></span> 首页</a></li>
            <li class="admin-parent">
                <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 抽奖活动 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                       <li><a href="<?php echo U('Prize/index');?>" <?php if(MODULE_NAME == "Prize"): ?>style="color: #0e90d2"<?php endif; ?>><span class="am-icon-th"></span> 奖品设置</a></li>
                </ul>
            </li>
            <!--<li><a href="admin-table.html"><span class="am-icon-table"></span> 表格</a></li>-->
            <!--<li><a href="admin-form.html"><span class="am-icon-pencil-square-o"></span> 表单</a></li>-->
            <!--<li><a href="#"><span class="am-icon-sign-out"></span> 注销</a></li>-->
        </ul>

        <div class="am-panel am-panel-default admin-sidebar-panel">
            <div class="am-panel-bd">
                <p><span class="am-icon-bookmark"></span> 公告</p>
                <p>Simple is Better</p>
            </div>
        </div>

        <div class="am-panel am-panel-default admin-sidebar-panel">
            <div class="am-panel-bd">
                <p><span class="am-icon-tag"></span> 技术支持</p>
                <p>QQ:349504135<a target=blank href=tencent://message/?uin=349504135&Site=1&Menu=yes><img border="0" SRC=http://wpa.qq.com/pa?p=1:349504135:4 alt="点击这里给我发消息"></a></p>
                <p>微信:Sakyo123</p>
            </div>
        </div>
    </div>
</div>
<!-- sidebar end -->

<!-- content start -->
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf">
        <strong class="am-text-primary am-text-lg">编辑</strong> /
        <small>edit</small>
      </div>
    </div>

    <hr>

    <div class=" am-margin am-form" >
      <form action="<?php echo U(MODULE_NAME.'/update');?>" method="post" class="am-form am-form-inline">
          <!--<div class="am-g am-margin-top">-->
            <!--<div class="am-u-sm-4 am-u-md-2 am-text-right">所属类别</div>-->
            <!--<div class="am-u-sm-8 am-u-md-10">-->
              <!--<select data-am-selected="{btnSize: 'sm'}">-->
                <!--<option value="option1">选项一...</option>-->
                <!--<option value="option2">选项二.....</option>-->
                <!--<option value="option3">选项三........</option>-->
              <!--</select>-->
            <!--</div>-->
          <!--</div>-->

          <!--<div class="am-g am-margin-top">-->
            <!--<div class="am-u-sm-4 am-u-md-2 am-text-right">推荐类型</div>-->
            <!--<div class="am-u-sm-8 am-u-md-10">-->
              <!--<div class="am-btn-group" data-am-button>-->
                <!--<label class="am-btn am-btn-default am-btn-xs">-->
                  <!--<input type="checkbox"> 允许评论-->
                <!--</label>-->
                <!--<label class="am-btn am-btn-default am-btn-xs">-->
                  <!--<input type="checkbox"> 置顶-->
                <!--</label>-->
                <!--<label class="am-btn am-btn-default am-btn-xs">-->
                  <!--<input type="checkbox"> 推荐-->
                <!--</label>-->
                <!--<label class="am-btn am-btn-default am-btn-xs">-->
                  <!--<input type="checkbox"> 热门-->
                <!--</label>-->
                <!--<label class="am-btn am-btn-default am-btn-xs">-->
                  <!--<input type="checkbox"> 轮播图-->
                <!--</label>-->
              <!--</div>-->
            <!--</div>-->
          <!--</div>-->

          <!--<div class="am-g am-margin-top">-->
            <!--<div class="am-u-sm-4 am-u-md-2 am-text-right">-->
              <!--发布日期-->
            <!--</div>-->
            <!--<div class="am-u-sm-8 am-u-md-10">-->

                <!--<div class="am-form-group am-form-icon">-->
                  <!--<i class="am-icon-calendar"></i>-->
                  <!--<input type="date" class="am-form-field am-input-sm" placeholder="日期">-->
                <!--</div>-->

            <!--</div>-->
          <!--</div>-->

          <!--<div class="am-g am-margin-top">-->
            <!--<div class="am-u-sm-4 am-u-md-2 am-text-right">-->
              <!--发布时间-->
            <!--</div>-->
            <!--<div class="am-u-sm-8 am-u-md-10">-->
              <!--<form action="" class="am-form am-form-inline">-->
                <!--<div class="am-form-group am-form-icon">-->
                  <!--<i class="am-icon-calendar"></i>-->
                  <!--<input type="datetime-local" class="am-form-field am-input-sm" placeholder="时间">-->
                <!--</div>-->
              <!--</form>-->
            <!--</div>-->
          <!--</div>-->




            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                奖品名称
              </div>
              <div class="am-u-sm-8 am-u-md-4">
                <input name='title' type="text" class="am-input-sm" value="<?php echo ($vo["title"]); ?>">
              </div>
              <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
            </div>

            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                总库存数
              </div>
              <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <input type="text" name="all_count" class="am-input-sm" value="<?php echo ($vo["all_count"]); ?>">
              </div>
            </div>

            <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">
                概率（百分比）
              </div>
              <div class="am-u-sm-8 am-u-md-4">
                <input type="text" name="percentage" class="am-input-sm" value="<?php echo ($vo["percentage"]); ?>">
              </div>
              <div class="am-hide-sm-only am-u-md-6"></div>
            </div>

            <!--<div class="am-g am-margin-top">-->
              <!--<div class="am-u-sm-4 am-u-md-2 am-text-right">-->
                <!--内容摘要-->
              <!--</div>-->
              <!--<div class="am-u-sm-8 am-u-md-4">-->
                <!--<input type="text" class="am-input-sm">-->
              <!--</div>-->
              <!--<div class="am-u-sm-12 am-u-md-6">不填写则自动截取内容前255字符</div>-->
            <!--</div>-->

            <!--<div class="am-g am-margin-top-sm">-->
              <!--<div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">-->
                <!--内容描述-->
              <!--</div>-->
              <!--<div class="am-u-sm-12 am-u-md-10">-->
                <!--<textarea rows="10" placeholder="请使用富文本编辑插件"></textarea>-->
              <!--</div>-->
            <!--</div>-->
        <!--<div class="am-g am-margin-top">-->
          <!--<div class="am-u-sm-4 am-u-md-2 am-text-right">启用</div>-->
          <!--<div class="am-u-sm-8 am-u-md-10">-->
            <!--<div class="am-btn-group" data-am-button>-->
              <!--<label class="am-btn am-btn-default am-btn-xs">-->
                <!--<input type="radio" name="options" id="option1"> 正常-->
              <!--</label>-->
              <!--<label class="am-btn am-btn-default am-btn-xs">-->
                <!--<input type="radio" name="options" id="option2"> 禁用-->
              <!--</label>-->
            <!--</div>-->
          <!--</div>-->
        <!--</div>-->
        <input type="hidden" name="id" class="am-input-sm" value="<?php echo ($_GET['id']); ?>">
      </form>
    </div>

    <div class="am-margin">
      <button type="button" onclick="document.getElementsByTagName('form')[0].submit()" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
      <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
    </div>
  </div>

  <footer class="admin-content-footer">
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
  </footer>
</div>
<!-- content end -->
  </div>
<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu"
   data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="__PUBLIC__/Admin/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="__PUBLIC__/Admin/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="__PUBLIC__/Admin/assets/js/amazeui.min.js"></script>
<script src="__PUBLIC__/Admin/assets/js/app.js"></script>
<script>
    /**
     * Created by zhongshan on 2016/8/3.
     */
//公共js
    $(function () {
        $('#select-all').on('change', function () {
            var check_state = $(this).is(':checked')

            if (check_state == true) {
                $('tbody input[type="checkbox"]').prop('checked', true);
            } else {
                $('tbody input[type="checkbox"]').prop('checked', false);
            }
        })
    })
    function add(){
        var url = '<?php echo U(MODULE_NAME."/add");?>';
        window.location.href=url;
    }
//it's ridiculous ,but it works-.-
//    function edit(id){
//        var url = '<?php echo U(MODULE_NAME."/edit");?>';
//        var form = document.createElement("form");
//        var m='<?php echo MODULE_NAME;?>';
//        var a='edit';
//        var id=id;
//        form.setAttribute("method", "get");
//        form.setAttribute("action", url);
//        form.setAttribute("id", "editForm");
//        form.setAttribute("name", "theForm");
//        newinput = document.createElement('input');
//        newinput.setAttribute('type','hidden');
//        newinput.setAttribute('name','m');
//        newinput.setAttribute('value',m)
//        form.appendChild(newinput);
//        newinput = document.createElement('input');
//        newinput.setAttribute('type','hidden');
//        newinput.setAttribute('name','a');
//        newinput.setAttribute('value',a)
//        form.appendChild(newinput);
//        newinput = document.createElement('input');
//        newinput.setAttribute('type','hidden');
//        newinput.setAttribute('name','id');
//        newinput.setAttribute('value',id)
//        form.appendChild(newinput);
//        //window.location.href=url;
//        form.submit();
//        console.log(form);
//    }
    function del() {
        var res = window.confirm("是否删除选中数据？")
        if (res) {
            var ids = new Array;
            $('tbody input[type="checkbox"]:checked').each(function () {
                var id = $(this).attr('data-id');
                ids.push(id);
            })
            var data = {ids: ids};
            var api_url = '<?php echo U(MODULE_NAME."/del");?>';
            $.post(api_url, data, function (data) {

                if (data.state == "-1") {
                    alert("操作失败");
                } else if (!data) {
                    alert("提交失败");
                } else {
                    alert("操作成功");
                    window.location.reload();
                }
            });
        } else {
            return false;
        }
    }


    function queryState(obj) {
        var val = $(obj).find("option:selected").val();
        if (val == 0) {
            var url = '<?php echo U(MODULE_NAME."/index","state=0");?>';
        } else if (val == 1) {
            var url = '<?php echo U(MODULE_NAME."/index","state=1");?>';
        } else {
            var url = '<?php echo U(MODULE_NAME."/index");?>';
        }
        window.location.href = url;
    }

    function ExportExcel(query) {
        if (query) {
            var url = '<?php echo U(MODULE_NAME."/ExportExcel");?>' + '&query_text=' + query;
        } else {
            var url = '<?php echo U(MODULE_NAME."/ExportExcel");?>';
        }

        window.open(url);
    }

    function showDetail(depart_id) {

        var url = '<?php echo U("Staff/detail");?>' + '&depart_id=' + depart_id;

        window.open(url);
    }
</script>
</body>
</html>