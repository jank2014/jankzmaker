<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H+ 后台主题UI框架 - 首页示例四</title>

    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="/jankzmaker/Public/Common/hplus/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/jankzmaker/Public/Common/hplus/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/jankzmaker/Public/Common/hplus/css/animate.min.css" rel="stylesheet">
    <link href="/jankzmaker/Public/Common/hplus/css/style.min.css?v=4.0.0" rel="stylesheet">
    
</head>

<body class="gray-bg top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <i class="fa fa-reorder"></i>
                        </button>
                        <a href="#" class="navbar-brand">JankzShare</a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="login.html">
                                    <i class="fa fa-sign-out"></i> 返回首页
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="wrapper wrapper-content">
                <div class="container">
                
<div class="row">
    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$libs): $mod = ($i % 2 );++$i;?><div class="col-sm-3">
            <div class="contact-box">
                <a>
                    <div class="col-sm-12 is_ajax">
                        <h3 class="text-navy"><strong><?php echo ($libs["title"]); ?></strong></h3>
                        <i class="fa fa-map-marker text-navy"></i> <?php echo ($libs["type"]); ?>
                        <input type="hidden" name="url" value="<?php echo U('Home/Share/content',array('pid'=>$libs['id']));?>">
                    </div>
                    <div class="clearfix"></div>
                </a>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>

                </div>
            </div>
            <div class="footer">
                <div class="pull-right">
                    By：<a href="http://www.jankz.com" target="_blank">jankz</a>
                </div>
                <div>
                    <strong>Copyright</strong> jnakz.com &copy; 2014-2016
                </div>
            </div>
        </div>
    </div>

    <script src="/jankzmaker/Public/Common/hplus/js/jquery.min.js?v=2.1.4"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/content.min.js?v=1.0.0"></script>
    
<script src="/jankzmaker/Public/Common/layer-v2.1/layer/layer.js"></script>
    <script>
    $(document).ready(function() {
        $(".is_ajax").click(function(){
            url =$(this).children('input').val();
            alert(url);
            layer.open({
                type: 2,
                area: ['500px', '530px'],
                fix: false, //不固定
                maxmin: true,
                content:url
            });
        });
    });
    </script>

     </body>

</html>