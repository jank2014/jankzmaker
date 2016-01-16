<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title><?php echo ($meta_title); ?></title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/jankzmaker/Public/Common/hplus/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/jankzmaker/Public/Common/hplus/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/jankzmaker/Public/Common/hplus/css/animate.min.css" rel="stylesheet">
    <link href="/jankzmaker/Public/Common/hplus/css/style.min.css?v=4.0.0" rel="stylesheet">
    
</head>
    <body class="gray-bg">
    
<?php if(is_array($page_items)): $i = 0; $__LIST__ = $page_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; switch($item["type"]): case "text": ?><div class="form-group">
	<label class="col-sm-<?php echo ($item["col_l"]); ?> control-label"><?php echo ($item["title"]); ?></label>
	<div class="col-sm-<?php echo ($item["col_d"]); ?>">
		<input type="<?php echo ($item["type"]); ?>" class="form-control" name="<?php echo ($item["name"]); ?>">
	</div>
</div>
<div class="hr"></div><?php break;?>
<?php case "password": break;?>
<?php case "select": ?><div class="form-group">
    <label class="col-sm-<?php echo ($item["col_l"]); ?> control-label"><?php echo ($item["title"]); ?></label>
    <div class="col-sm-<?php echo ($item["col_d"]); ?>">
        <select class="form-control m-b" name="<?php echo ($item["name"]); ?>">
            <?php if(is_array($item["options"])): foreach($item["options"] as $key=>$select): ?><option value="<?php echo ($select["id"]); ?>"><?php echo ($select["title"]); ?></option><?php endforeach; endif; ?>
        </select>
    </div>
</div>
<div class="hr-line-dashed"></div><?php break;?>
<?php case "login_admin": ?><div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"></h1>

            </div>
            <h3>欢迎登陆jankzmaker管理</h3>

            <form class="m-t" role="form" action="<?php echo U('Admin/Login/index');?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="用户名" required="" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" required="" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
            </form>
        </div>
    </div><?php break;?>
<?php case "login_home": ?><div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"></h1>

            </div>
            <h3>欢迎登陆</h3>

            <form class="m-t" role="form" action="<?php echo U('Home/Login/index');?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="用户名" required="" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" required="" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
                <p class="text-muted text-center"> <a href="login.html#"><small>忘记密码了？</small></a> | <a href="<?php echo U('Login/register');?>">注册一个新账号</a>
                </p>

            </form>
        </div>
    </div><?php break;?>
<?php case "register": ?><div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>
            </div>
            <h3>欢迎注册HSC家校互动</h3>
            <p>创建一个HSC新账户</p>
            <form class="m-t" role="form" action="login.html">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="请输入用户名" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="请输入密码" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="请再次输入密码" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">注 册</button>

                <p class="text-muted text-center"><small>已经有账户了？</small><a href="<?php echo U('Login/index');?>">点此登录</a>
                </p>

            </form>
        </div>
    </div><?php break; endswitch; endforeach; endif; else: echo "" ;endif; ?>


    <script src="/jankzmaker/Public/Common/hplus/js/jquery.min.js?v=2.1.4"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/bootstrap.min.js?v=3.3.5"></script>
    
</body>

</html>