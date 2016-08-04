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
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">奖品信息</strong>
                    <small></small>
                </div>
            </div>

            <hr>

            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                            <button onclick="add()" type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
                            <!--<button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>-->
                            <!--<button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>-->
                            <!--<button onclick="ExportExcel('<?php echo ($_GET['query_text']); ?>')" type="button"-->
                                    <!--class="am-btn am-btn-default"><span class="am-icon-save"></span> 导出EXCEL-->
                            <!--</button>-->
                            <button onclick="del()" type="button" class="am-btn am-btn-default"><span
                                    class="am-icon-trash-o"></span> 删除
                            </button>
                        </div>
                    </div>
                </div>
                <!--<div class="am-u-sm-12 am-u-md-3">-->
                <!--<div class="am-form-group">-->
                <!--<select onchange="queryState(this)" data-am-selected="{btnSize: 'sm'}">-->
                <!--<option value="all" <?php if($_GET['state'] ): ?>selected="selected"<?php endif; ?>>全部</option>-->
                <!--<option value="1" <?php if($_GET['state']== 1): ?>selected="selected"<?php endif; ?>>已领卡</option>-->
                <!--<option value="0" <?php if($_GET['state']== '0'): ?>selected="selected"<?php endif; ?>>未领卡</option>-->

                <!--</select>-->
                <!--</div>-->
                <!--</div>-->
                <!--<div class="am-u-sm-12 am-u-md-3">-->
                    <!--<form method="get" action="<?php echo U('Staff/index');?>">-->
                        <!--<div class="am-input-group am-input-group-sm">-->

                            <!--<input name="query_text" type="text" value="<?php echo ($_GET['query_text']); ?>" class="am-form-field">-->
                            <!--<input name="m" type="hidden" value="Staff">-->
                            <!--<input name="a" type="hidden" value="index">-->
                              <!--<span class="am-input-group-btn">-->
                                <!--<button class="am-btn am-btn-default" onclick="submit()" type="button">搜索</button>-->
                              <!--</span>-->

                        <!--</div>-->
                    <!--</form>-->
                <!--</div>-->
            </div>

            <div class="am-g">
                <div class="am-u-sm-12">

                    <table class="am-table am-table-striped am-table-hover table-main">
                        <thead>
                        <tr>
                            <th class="table-check"><input id="select-all" type="checkbox"/></th>
                            <th class="table-id">ID</th>
                            <th class="table-title">奖品名称</th>
                            <th class="table-type">现库存</th>

                            <th class="table-date am-hide-sm-only">总库存</th>
                            <th class="table-date am-hide-sm-only">概率（百分比）</th>
                            <th class="table-date am-hide-sm-only">是否启用</th>
                            <th class="table-set">操作</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><input data-id="<?php echo ($vo["id"]); ?>" type="checkbox"/></td>
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["title"]); ?></td>
                                <td><?php echo ($vo['all_count']-$vo['used_count']); ?></td>
                                <td><?php echo ($vo["all_count"]); ?></td>
                                <td class="am-hide-sm-only">
                                    <?php echo ($vo["percentage"]); ?>
                                </td>

                                <td class="am-hide-sm-only">
                                    <?php if($vo["state"] == 1): ?>已启用
                                        <?php else: ?>
                                        <span class="am-text-danger">已禁用</span><?php endif; ?>
                                </td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <!--<?php if($vo["state"] != 1): ?>-->
                                                <!--<button onclick="setState(<?php echo ($vo["id"]); ?>)"-->
                                                        <!--class="am-btn am-btn-default am-btn-xs am-text-secondary"><span-->
                                                        <!--class="am-icon-pencil-square-o"></span> 领卡-->
                                                <!--</button>-->
                                            <!--<?php endif; ?>-->
                                            <button onclick="window.location.href='<?php echo U(MODULE_NAME.'/edit',array('id'=>$vo['id']));?>'"
                                            class="am-btn am-btn-default am-btn-xs am-text-secondary"><span
                                            class="am-icon-pencil-square-o"></span> 编辑
                                            </button>
                                            <!--<button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>-->
                                            <!--<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>-->
                                        </div>
                                    </div>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>


                        </tbody>
                    </table>

                    <div class="am-cf">
                        <div class="am-fr">
                            <?php echo ($page); ?>
                        </div>
                    </div>
                    <hr/>
                    <p>注：.....</p>

                </div>

            </div>
        </div>

        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
        </footer>

    </div>
    <!-- content end -->
    <div class="am-modal am-modal-loading am-modal-no-btn" tabindex="-1" id="my-modal-loading">
        <div class="am-modal-dialog">
            <div class="am-modal-hd">处理中...</div>
            <div class="am-modal-bd">
                <span class="am-icon-spinner am-icon-spin"></span>
            </div>
        </div>
    </div>
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

    <script>
        function setState(id) {
            var res = window.confirm("是否确定领卡？");
            var api_url = '<?php echo U("Register/setState");?>';
            if (res) {
                // $('#my-modal-loading').modal();
                var data = {id: id};
                $.post(api_url, data, function (data) {
                    //     $('#my-modal-loading').modal('close');
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

    </script>