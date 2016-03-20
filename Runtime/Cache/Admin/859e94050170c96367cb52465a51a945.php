<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>首页</title>
    <meta name="keywords" content="HSC后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="HSC是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/jankzmaker/Public/Common/hplus/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/jankzmaker/Public/Common/hplus/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/jankzmaker/Public/Common/hplus/css/animate.min.css" rel="stylesheet">
    <link href="/jankzmaker/Public/Common/hplus/css/style.min.css?v=4.0.0" rel="stylesheet">
    
        <style type="text/css">

        .minimalize-styl-2 {
            float: left;
            font-size: 20px;
            margin: 0;
            padding: 0;
        }
        #content-main{
            height:100%;
        }
        </style>
    
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    
    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="/jankzmaker/Public/Common/hplus/img/profile_small.jpg" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?php echo ($_SESSION['username']); ?></strong></span>
                                <span class="text-muted text-xs block"><?php echo ($_SESSION['admin_type']); ?><b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="J_menuItem" href="form_avatar.html">修改头像</a>
                                </li>
                                <li><a class="J_menuItem" href="profile.html">个人资料</a>
                                </li>
                                <li><a class="J_menuItem" href="contacts.html">联系我们</a>
                                </li>
                                <li><a class="J_menuItem" href="mailbox.html">信箱</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="login.html">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">H+
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">主页</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="index_v1.html" data-index="0">主页示例一</a>
                            </li>
                        </ul>
                    </li>
                    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$first_menu): $mod = ($i % 2 );++$i; if($first_menu["pid"] == 0): ?><li>
                            <a href="<?php echo U($first_menu['url']);?>">
                                <i class="fa <?php echo ($first_menu["icon"]); ?>"></i>
                                <span class="nav-label"> <?php echo ($first_menu["title"]); ?></span>
                                <?php if(!empty($first_menu["0"])): ?><span class="fa arrow"></span><?php endif; ?>
                            </a>
                            <?php if(!empty($first_menu["0"])): ?><ul class="nav nav-second-level">
                               <?php if(is_array($first_menu[0])): $i = 0; $__LIST__ = $first_menu[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$second_menu): $mod = ($i % 2 );++$i;?><li>
                                    <a class="<?php is_array($second_menu[0])? $class='NULL':$class='J_menuItem' ;echo $class;?>" href="<?php echo U($second_menu['url']);?>">
                                        <i class="fa <?php echo ($second_menu["icon"]); ?>"></i>
                                        <span class="nav-label"><?php echo ($second_menu["title"]); ?></span>
                                        <?php if(!empty($second_menu["0"])): ?><span class="fa arrow"></span><?php endif; ?>
                                    </a>
                                    <?php if(!empty($second_menu["0"])): ?><ul class="nav nav-third-level">
                                            <?php if(is_array($second_menu[0])): $i = 0; $__LIST__ = $second_menu[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$third_menu): $mod = ($i % 2 );++$i;?><li>
                                                <a class="<?php is_array($third_menu[0])? $class='NULL':$class='J_menuItem' ;echo $class;?>" href="<?php echo U($third_menu['url']);?>">
                                                        <i class="fa <?php echo ($third_menu["icon"]); ?>"></i>
                                                    <span class="nav-label"><?php echo ($third_menu["title"]); ?></span>
                                                </a>
                                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul><?php endif; ?>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul><?php endif; ?>
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
            </div>
            <div class="row content-tabs">
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                    </div>
                </nav>
                <a class="roll-nav roll-left J_tabLeft navbar-minimalize minimalize-styl-2 btn" href="#"><i class="fa fa-bars"></i> </a>
                <a href="<?php echo U('Admin/Login/logout');?>" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="<?php echo U('Student/index');?>" frameborder="0" data-id="index_v1.html" seamless></iframe>
            </div>
        </div>
    </div>


    <script src="/jankzmaker/Public/Common/hplus/js/jquery.min.js?v=2.1.4"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/plugins/layer/layer.min.js"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/hplus.min.js?v=4.0.0"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/contabs.min.js"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/plugins/pace/pace.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $("#removeRuntime").click(function(){
                $.ajax({
                    type:'POST',
                    url:'/jankzmaker/index.php/Admin/Index/removeRuntime',
                    success:function(response,status,xhr){
                        layer.msg(response.info);
                    }
                });
            });
        });

    </script>

</body>

</html>