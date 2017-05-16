<?php
session_start();
require  dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'config/config.php';
check_login();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<title>创客-一日游</title>
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/weui.min.css">
	<link rel="stylesheet" type="text/css" href="css/maker-style.css">
    <link rel="stylesheet" type="text/css" href="css/maker-style1.css">
	<script src="js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_r6n0xqskp5a02j4i.css">
    <script type="text/javascript" src="http://test.66diqiu.com/static/public/Lib/validate/jquery.validate.js"></script>
    <script type="text/javascript" src="http://test.66diqiu.com/static/public/Lib/validate/jquery.metadata.js"></script>
    <script type="text/javascript" src="http://test.66diqiu.com/static/public/Lib/validate/messages_cn.js"></script>
    <script type="text/javascript" src="http://test.66diqiu.com/static/template/default/mobile/js/mobilecommon.js"></script>
    <script type="text/javascript" src="http://test.66diqiu.com/static/template/default/mobile/js/slider.js"></script>
    <script type="text/javascript" src="http://test.66diqiu.com/static/template/default/mobile/js/dialog.js"></script>
</head>
<style>
    .weui-cell_select .weui-select{
        color:#333;
    }
    .register-label{
        width:60px;
    }
    .loginWrap{
        font-size:14px;
    }
    .weui-cell_select-after{
        padding-right:15px;
    }
    .weui-cell_select .weui-cell__bd:after{
        right:25px;
    }
    .loginWrap .weui-cell__bd{
        padding-left:15px;
    }
</style>
<body>
<form method="post" id="frm">
	<div class="divBox registerWrap">
		<!-- head -->
		<div class="head-box">
			<a href="javascript:history.back()" title="">
				<i class="iconfont icon-l"></i>
			</a>
			<span>一日游</span>
		</div>
		<!-- 内容 -->
        <div class="weui-cells weui-cells_form loginWrap">
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">
                    	商品名称
                    </label>
                </div>
                <div class="weui-cell__bd odd-ellipsis" style="position:relative;">
                    <input validate="{required:true}" name="line_name" id="line_name" class="weui-input" type="text" placeholder="请输入商品名称" />
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">
                        产品标题
                    </label>
                </div>
                <div class="weui-cell__bd odd-ellipsis" style="position:relative;">
                    <input validate="{required:true}" name="short_name" id="short_name" class="weui-input" type="text" placeholder="请输入产品副标题" />
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">
                        价格
                    </label>
                </div>
                <div class="weui-cell__bd odd-ellipsis" style="position:relative;">
                    <input validate="{required:true}" id="price" class="weui-input" type="number" placeholder="请输入价格" />
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">
                        服务城市
                    </label>
                </div>
                <div class="weui-cell__bd odd-ellipsis" style="position:relative;">
                    <input validate="{required:true}" id="service_city" name="service_city" class="weui-input" type="text" placeholder="请输入服务城市" />
                </div>
            </div>
            <div class="weui-cell weui-cell_select weui-cell_select-after">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">出行方式</label>
                </div>
                <div class="weui-cell__bd">
                    <select name="traffic" class="weui-select" id="traffic">
                        <option value="随车">随车</option>
                        <option value="大巴">大巴</option>
                        <option value="私家车">私家车</option>
                    </select>
                </div>
            </div>
            <div class="weui-cell weui-cell_select weui-cell_select-after">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">线路分类</label>
                </div>
                <div class="weui-cell__bd">
                    <select class="weui-select" name="cat" id="cat">
                        <option value="1">热销</option>
                        <option value="2">精品</option>
                        <option value="3">最新</option>
                    </select>
                </div>
            </div>
            <div class="weui-cell weui-cell_select weui-cell_select-after">
                <div class="weui-cell__hd">
                    <label for="" class="weui-label register-label">服务时间</label>
                </div>
                <div class="weui-cell__bd">
                    <select class="weui-select" name="go_date" id="go_date">
<!--                        <option value="-1">请选择</option>-->
                        <option value="1">工作日</option>
                        <option value="2">周末</option>
                        <option value="3">每天</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="weui-cells weui-cells_form loginWrap">
            <div class="weui-cells__title" style="font-size:17px;color:#666;">预定须知</div>
            <div class="weui-cells weui-cells_form textWrap">
                <div class="weui-cell" style="padding-top:0;">
                    <div class="weui-cell__bd" style="padding-left:0;border:1px solid #d9d9d9;">
                        <textarea name="enroll_know" id="enroll_know" class="weui-textarea" placeholder=" 请输入预定说明" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- 按钮 -->
        <div class="sel-btn" style="margin-top:20px;margin-bottom: 20px;">
            <a href="product2.html" class="weui-btn weui-btn_primary">提交</a>
        </div>
	</div>
</form>
    <!-- footer -->
    <div class="footer box none">
        <ul>
            <li>
                <a href="" title="" class="foot-active">
                    <i class="iconfont icon-lxx"></i>
                    <p>产品</p>
                </a>
            </li>
            <li>
                <a href="" title="">
                    <i class="iconfont icon-dingdan"></i>
                    <p>订单</p>
                </a>
            </li>
            <li>
                <a href="" title="">
                    <i class="iconfont icon-xiaoxizhongxin"></i>
                    <p>会话</p>
                </a>
            </li>
            <li>
                <a href="" title="">
                    <i class="iconfont icon-wode1"></i>
                    <p>我的</p>
                </a>
            </li>
        </ul>
    </div>

    <script>
        $(function () {
            $('.weui-btn_primary').click(function () {
                if(!$('#frm').valid()) return false;

                var arr = {
                    line_name: $("#line_name").val(),  //产品名称
                    short_name: $('#short_name').val(), //产品标题
                    price: $('#price').val(),    //价格
                    service_city: $('#service_city').val(),
                    traffic: $('#traffic').val(),
                    go_date: $('#go_date').val(),
                    enroll_know: $('#enroll_know').val()

                };
                var url = "http://test.66diqiu.com/rent/chejdao/create_line";
                $.post(url,arr,function(data){
                    data = JSON.parse(data);
                    if(data.status == 1) {
                        location.href = data.url;
                    } else {
                        alert(data.msg);
                    }
                })
                return false;
            });


        });

    </script>
</body>
</html>















