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
    <title>创客-车+导</title>
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/weui.min.css">
    <link rel="stylesheet" type="text/css" href="css/maker-style.css">
    <link rel="stylesheet" type="text/css" href="css/maker-style1.css">
    <script src="js/jquery-1.10.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_r6n0xqskp5a02j4i.css">
    <script type="text/javascript" src="http://test.66diqiu.com/static/template/default/mobile/js/mobilecommon.js"></script>
    <script type="text/javascript" src="http://test.66diqiu.com/static/template/default/mobile/js/slider.js"></script>
    <script type="text/javascript" src="http://test.66diqiu.com/static/template/default/mobile/js/dialog.js"></script>
    <!--引入CSS-->
    <link rel="stylesheet" type="text/css" href="http://test.66diqiu.com/static/public/Lib/webuploader/webuploader.css">
    <!--引入JS-->
    <script type="text/javascript" src="http://test.66diqiu.com/static/public/Lib/webuploader/webuploader.js"></script>
</head>
<style>
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
    <form method="post" action="car-guide2.php">
        <!-- 内容 -->
        <div class="weui-cells weui-cells_form loginWrap">
            <!-- 标题 -->
            <div class="title">
                <span>个人信息</span>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">
                        姓名
                    </label>
                </div>
                <div class="weui-cell__bd">
                    <input name="name" class="weui-input" type="text"  placeholder="请输入姓名" required>
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">
                        工作年限
                    </label>
                </div>
                <div class="weui-cell__bd">
                    <input name="working-life" class="weui-input" type="number" min="1" placeholder="请输入工作年限" required>
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">
                        驾龄
                    </label>
                </div>
                <div class="weui-cell__bd">
                    <input name="driving-life" class="weui-input" type="number" min="1" placeholder="请输入驾龄" required>
                </div>
            </div>
            <div class="weui-cells__title" style="font-size:17px;color:#666;">自我评价</div>
            <div class="weui-cells weui-cells_form textWrap">
                <div class="weui-cell" style="padding-top:0;">
                    <div class="weui-cell__bd" style="padding-left:0;border:1px solid #d9d9d9;">
                        <textarea name="self_evaluation" class="weui-textarea" placeholder="请输入自我评价" rows="3" required></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="weui-cells weui-cells_form loginWrap">
            <!-- 标题 -->
            <div class="title">
                <span>车辆信息</span>
            </div>
            <div class="weui-cell weui-cell_select weui-cell_select-after">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">车辆类型</label>
                </div>
                <div class="weui-cell__bd">
                    <select class="weui-select" name="car_type">
                       
                        <option value="2">经济型</option>
                        <option value="3">舒适型</option>
                        <option value="4">豪华型</option>
                    </select>
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">
                        车辆品牌
                    </label>
                </div>
                <div class="weui-cell__bd">
                    <input name="brand" class="weui-input" type="text" required placeholder="请输入车辆品牌">
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">
                        车载人数
                    </label>
                </div>
                <div class="weui-cell__bd">
                    <input name="seat" class="weui-input" type="number" required placeholder="请输入车载人数">
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label register-label">
                        车辆行李
                    </label>
                </div>
                <div class="weui-cell__bd">
                    <input name="luggage" class="weui-input" type="text" required placeholder="请输入行李件数">
                </div>
            </div>
            <div class="weui-cells weui-cells_form fileWrap">
                <div class="weui-cell">
                    <div class="weui-cell__bd">
                        <div class="weui-uploader">
                            <div class="weui-uploader__hd">
                                <p class="weui-uploader__title">上传图片</p>
                            </div>
                            <div class="weui-uploader__bd">
                            <div class="weui-uploader__bd">
                                <ul class="weui-uploader__files" id="uploaderFiles">
                                    <img id="avatar_box" src="" onerror="this.error=null;this.src='imgs/pp.png'">
                                </ul>
                                <span id="uploaderInput"></span>
                                <input type="hidden" id="thumb" name="thumb" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 按钮 -->
        <div class="sel-btn" style="margin-top:20px;margin-bottom: 20px;">
            <input type="submit"  class="weui-btn weui-btn_primary"  value="提交" />
        </div>
    </form>
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



<script>

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
    upload_image("http://test.66diqiu.com/check/checkadmin/ajax_upload",'uploaderInput','thumb','avatar_box');
</script>
</body>

</html>















