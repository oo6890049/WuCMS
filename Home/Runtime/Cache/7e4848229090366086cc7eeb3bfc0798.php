<?php if (!defined('THINK_PATH')) exit();?><html>
<meta charset="UTF-8">
<link rel="stylesheet" href="Public/Admin/assets/css/amazeui.min.css"/>
<script src="Public/Admin/assets/js/jquery.min.js"></script>
<script src="Public/Admin/assets/js/amazeui.min.js"></script>
<script src="Public/Admin/assets/js/jquery.cityselect.js"></script>
<body>

<div class="am-container am-text-center" style="width: 600px;margin-top: 200px">
<h1>常客隆抽奖系统</h1>
    <!--[if lte IE 9]>
    <p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，如无法抽奖。 请 <a href="http://ie.sogou.com/" target="_blank">升级浏览器</a>
        以获得更好的体验！</p>
    <![endif]-->

    <table class="am-table">
        <thead>
        <tr>
            <th>奖项列表</th>

        </tr>
        </thead>
        <tbody>
        <?php if(is_array($prize)): $i = 0; $__LIST__ = $prize;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["title"]); ?></td>

        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <form id="form" class="am-form am-form-horizontal" >
        <div class="am-form-group">
            <label for="doc-ipt-3" class="am-u-sm-2 am-form-label">订单号</label>
            <div class="am-u-sm-10 input-group">
                <input type="number" name="order_no" required id="doc-ipt-3" class="js-pattern-number" placeholder="请输入订单号">
            </div>
        </div>
        <div class="am-form-group">
            <div class="">
                <button type="submit" class=" am-btn am-btn-warning">点击抽奖</button>
                <span  onclick="document.getElementById('form').reset()" class=" am-btn am-btn-warning">重新输入</span>

            </div>
        </div>


    </form>
</div>
<div class="am-modal am-modal-loading am-modal-no-btn" tabindex="-1" id="my-modal-loading">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">抽奖中...</div>
        <div class="am-modal-bd">
            <span class="am-icon-spinner am-icon-spin"></span>
        </div>
    </div>
</div>
</body>
<script>
    $(function () {

        $('#form').validator({
            onValid: function (validity) {
                $(validity.field).closest('.input-group').find('.am-alert').hide();
            },

            onInValid: function (validity) {
                var $field = $(validity.field);
                var $group = $field.closest('.input-group');
                var $alert = $group.find('.am-alert');
                // 使用自定义的提示信息 或 插件内置的提示信息
                var msg = $field.data('validationMessage') || this.getValidationMessage(validity);

                if (!$alert.length) {
                    $alert = $('<div class="am-alert am-alert-danger"></div>').hide().appendTo($group);
                }

                $alert.html(msg).show();
            },
            submit: function(e) {
                var valid=this.isFormValid();
                if(valid!=false){
                    ajaxsubmit();
                }
                return false;
            }
        });
    });
    (function ($) {
        if ($.AMUI && $.AMUI.validator) {

            // 增加单个正则
            $.AMUI.validator.patterns.identity_card = /^(\d{15}$|^\d{18}$|^\d{17}(\d|X|x))$/;
            $.AMUI.validator.patterns.tel=  /^([0,2-9]\d{6})|(1\d{10})$/
        }
    })(window.jQuery);

    function ajaxsubmit() {


        var api_url = "api.php";
        var data=$('#form').serialize();
        data = decodeURIComponent(data,true);
        data=data+"&api_action=do_draw";
        var $modal = $('#my-modal-loading');
        $modal.modal();
        $.post(api_url,data,function(data){
            $modal.modal('close');
            if(data.state=="-1"){
                alert(data.message);
            }else if(!data){
                alert("提交失败");
            }else{
                alert(data.message);
            }
        });
        return false;
    }
</script>