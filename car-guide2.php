<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['step1'] = $_POST;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>创客-车+导</title>
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
    <!--引入CSS-->
    <link rel="stylesheet" type="text/css" href="http://test.66diqiu.com/static/public/Lib/webuploader/webuploader.css">
    <!--引入JS-->
    <script type="text/javascript" src="http://test.66diqiu.com/static/public/Lib/webuploader/webuploader.js"></script>
</head>
<style>
    .weui-cell_select .weui-select{
        color:#333;
    }
    .register-label{
        font-size:14px;
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
    .error {
        color: red;
    }
    #avatar_box{
        width:80px;
        height:80px;
        margin-right:10px;
        margin-bottom:10px;
    }
    #uploaderInput{
        -webkit-tap-highlight-color:transparent;
    }
</style>
<body>
<div class="divBox registerWrap">
    <!-- head -->
    <div class="head-box">
        <a href="javascript:history.back()" title="">
            <i class="iconfont icon-l"></i>
        </a>
        <span>车+导</span>
    </div>
    <form method="post" id="frm">
        <!-- 内容 -->
        <div class="weui-cells weui-cells_form loginWrap">
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">
                        产品标题
                    </label>
                </div>
                <div class="weui-cell__bd odd-ellipsis" style="position:relative;">
                    <input name="title"  class="title weui-input" type="text" required placeholder="请输入产品标题" />
<!--                    <a href="" title="" class="gl-img">-->
<!--                        <img src="imgs/gl.png" alt="" >-->
<!--                    </a>-->
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">
                        价格
                    </label>
                </div>
                <div class="weui-cell__bd">
                    <input name="price" class="price weui-input" type="number" min="0" required placeholder="请输入价格">
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">
                        服务城市
                    </label>
                </div>
                <div class="weui-cell__bd">
                    <input name="service_city" class="service_city weui-input" type="text" required placeholder="请输入服务城市">
                </div>
            </div>
            <div class="weui-cell weui-cell_select weui-cell_select-after">
                <div class="weui-cell__hd">
                    <label for="" class="weui-label register-label">服务时间</label>
                </div>
                <div class="weui-cell__bd">
                    <select name="service_time" required sel_min="2"  class="service_time weui-select">
                        <option value="0">请选择</option>
                        <option value="2">工作日</option>
                        <option value="3">周末</option>
                        <option value="4">每天</option>
                    </select>
                </div>
            </div>
            <div class="eat-box">
                <b class="register-label">三餐</b>
                <div class="checkbox-inp" id="checkbox-inp">
                    <input name="three_meals[]" class="three_meals hy" type="checkbox" value="早餐" id="eat-chek1" >
                    <label for="eat-chek1"></label>
                </div>
                <span class="left">早餐</span>
                <div class="checkbox-inp" id="checkbox-inp">
                    <input name="three_meals[]" class="three_meals hy" type="checkbox" value="中餐" id="eat-chek2">
                    <label for="eat-chek2"></label>
                </div>
                <span class="left">午餐</span>
                <div class="checkbox-inp" id="checkbox-inp">
                    <input name="three_meals[]" class="three_meals hy" type="checkbox" value="晚餐" id="eat-chek3" >
                    <label for="eat-chek3"></label>
                </div>
                <span class="left">晚餐</span>
            </div>
            <div class="weui-cells weui-cells_form textWrap">
                <div class="weui-cell" style="padding-top:0;">
                    <div class="weui-cell__bd" style="padding-left:0;border:1px solid #d9d9d9;">
                        <textarea name="stroke_description" class="stroke_description weui-textarea" placeholder=" 写下您的行程描述" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="weui-cells weui-cells_form fileWrap" style="margin-top:0;">
                <div class="weui-cell">
                    <div class="weui-cell__bd">
                        <div class="weui-uploader">
                            <div class="weui-uploader__hd">
                                <p class="weui-uploader__title">上传图片</p>
                            </div>
                            <div class="weui-uploader__bd">
                                <ul class="weui-uploader__files" id="uploaderFiles">
                                    <img id="avatar_box" src="" onerror="this.error=null;this.src='imgs/pp.png'">
                                </ul>
                                <span id="uploaderInput"></span>
                                <!--                                <div class="weui-uploader__input-box">-->
                                <!--<!--                                    <input id="uploaderInput" class="weui-uploader__input" type="file" accept="image/*" multiple="">-->
                                <!--                                    -->
                                <!--                                </div>-->
                                <input type="hidden" id="thumb_2" name="thumb_2" class="thumb_2" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="weui-cells weui-cells_form loginWrap">
            <div class="weui-cells__title" style="font-size:17px;color:#666;">费用&预定须知</div>
            <div class="weui-cells weui-cells_form textWrap">
                <div class="weui-cell" style="padding-top:0;">
                    <div class="weui-cell__bd" style="padding-left:0;border:1px solid #d9d9d9;">
                        <textarea name="remark" class="remark weui-textarea" placeholder=" 可输入温馨提示、费用情况以及使用说明等问题" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- 按钮 -->
        <div class="sel-btn" style="margin-top:20px;margin-bottom: 20px;">
            <!--            <a href="javascript:;" class="weui-btn weui-btn_primary" id="showDialog">提交</a>-->
            <a href="javascript:;" class="weui-btn weui-btn_primary" id="showDialog">提交</a>
        </div>
</div>
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
<!-- 弹框 -->
<div class="js_dialog carDialog none" style="opacity:0;">
    <div class="weui-mask none"></div>
    <div class="weui-dialog">
        <div class="weui-dialog__bd">
            <i class="weui-icon-success weui-icon_msg"></i>
            <P class="Dialog-title">您的产品已经成功创建</P>
            <P>平台将在1-2个工作日审核产品，请耐心等待</P>
            <P>咨询电话：400-835-5166</P>
        </div>
        <div class="weui-dialog__ft">
            <a href="index.html" class="weui-dialog__btn weui-dialog__btn_primary">我已知道</a>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
//            $("#frm").valid();
        // 弹框
        $("#showDialog").click(function(){
            if(!$("#frm").valid()){
                return false;
            }
            var url = "http://test.66diqiu.com/rent/chejdao/step2";
            var three_meals = [];
            $(".three_meals:checked").each(function () {
                three_meals.push($(this).val());
            });

            three_meals = three_meals.join(',');
            var content = {
                title: $(".title").val(),
                price: $(".price").val(),
                service_city: $(".service_city").val(),
                service_time: $(".service_time").val(),
                three_meals: three_meals,
                stroke_description: $(".stroke_description").val(),
                thumb_2: $(".thumb_2").val(),
                remark: $(".remark").val()
            };
//                `title` varchar(50) COMMENT '产品标题',
//                    `price` varchar(10) COMMENT '价格',
//                    `service_city` varchar(20) COMMENT '服务城市',
//                    `service_time` varchar(20) COMMENT '服务时间',
//                    `three_meals` varchar(20) COMMENT '三餐',
//                    `stroke_description` varchar(600) COMMENT '行程描述',
//                    `thumb_2` varchar(300) COMMENT '上传图片2',
//                    `remark` varchar(300) COMMENT '备注说明',


            $.post(url,content,function(data){
                data = JSON.parse(data);
                if(data.status == 1) {
                    $(".weui-mask").show();
                    $(".js_dialog").css("opacity","1").show();
                }
            })

        })
        $(".weui-dialog__btn").click(function(){
            $(".weui-mask").hide();
            $(".js_dialog").css("opacity","0").hide();
        })
    })

    function upload_image(server_url,clickID,inputID,replaceId){

        var // 优化retina, 在retina下这个值是2
            ratio = window.devicePixelRatio || 1,

            // 缩略图大小
            thumbnailWidth = 100 * ratio,
            thumbnailHeight = 100 * ratio,

            // Web Uploader实例
            uploader;

        // 初始化Web Uploader
        uploader = WebUploader.create({

            // 自动上传。
            auto: true,
            //重复上传
            duplicate: true,

            // swf文件路径
            //swf: '<?php //echo 'http://test.66diqiu.com/.'static/public/Lib/webuploader/js/Uploader.swf';?>',

            // 文件接收服务端。
            server: server_url,

            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#'+clickID,

            // 只允许选择文件，可选。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            }
        });

        // 文件上传过程中创建进度条实时显示。
        uploader.on( 'uploadProgress', function( file, percentage ) {

            $('#'+replaceId).attr('src','/static/public/images/load.gif');
            var $progress = $( '#'+replaceId).next('span') ;
            $progress.empty().html('完成'+Math.floor(percentage * 100) + '%...');
        });

        // 文件上传成功，给item添加成功class, 用样式标记上传成功。
        uploader.on('uploadSuccess',function( file,ret ) {
            if(ret.status==0){
                alert(ret.info);
            }else{
                $('#'+inputID).val(ret.info);
                $('#'+replaceId).attr('src',"http://image.66diqiu.cn/"+ret.info);
            }
            $( '#'+file.id ).addClass('upload-state-done');
            $( '#'+replaceId).next('span').empty();
        });
    }
    upload_image("http://test.66diqiu.com/check/checkadmin/ajax_upload",'uploaderInput','thumb_2','avatar_box');
</script>
</body>
</html>















