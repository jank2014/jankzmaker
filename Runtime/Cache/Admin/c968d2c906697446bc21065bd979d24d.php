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
    <body class="fixed-sidebar full-height-layout gray-bg">
    
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <a class="btn-primary btn-sm" href="javascript:location.replace(location.href);">
                    <i class="fa fa-refresh"></i></a>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="form_basic.html#">选项1</a>
                            </li>
                            <li><a href="form_basic.html#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" class="form-horizontal" action="<?php echo ($post_url); ?>">
                        <!-- 此处不分栏 -->
                        <?php if($set_coulmn == 1): ?><div class="col-sm-12">
                                <?php if(is_array($form_items)): $i = 0; $__LIST__ = $form_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; switch($item["type"]): case "text": ?><div class="form-group">
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
    </div><?php break; endswitch; endforeach; endif; else: echo "" ;endif; ?>
                            </div><?php endif; ?>

                        <!-- 此处分两栏 -->
                        <?php if($set_coulmn == 2): ?><div class="col-sm-6">
                                <?php if(is_array($page_items)): $i = 0; $__LIST__ = $page_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item["coulmn"] == 1): switch($item["type"]): case "text": ?><div class="form-group">
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
    </div><?php break; endswitch; endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div>

                            <div class="col-sm-6">
                                <?php if(is_array($page_items)): $i = 0; $__LIST__ = $page_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item["coulmn"] == 2): switch($item["type"]): case "text": ?><div class="form-group">
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
    </div><?php break; endswitch; endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div><?php endif; ?>

                        <!-- 此处分三栏 -->
                        <?php if($set_coulmn == 3): ?><div class="col-sm-4">
                                <?php if(is_array($page_items)): $i = 0; $__LIST__ = $page_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item["coulmn"] == 1): switch($item["type"]): case "text": ?><div class="form-group">
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
    </div><?php break; endswitch; endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <div class="col-sm-4">
                                <?php if(is_array($page_items)): $i = 0; $__LIST__ = $page_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item["coulmn"] == 2): switch($item["type"]): case "text": ?><div class="form-group">
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
    </div><?php break; endswitch; endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <div class="col-sm-4">
                                <?php if(is_array($page_items)): $i = 0; $__LIST__ = $page_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item["coulmn"] == 3): switch($item["type"]): case "text": ?><div class="form-group">
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
    </div><?php break; endswitch; endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div><?php endif; ?>

                        <!-- 此处分四栏 不建议 -->
                        <?php if($set_coulmn == 4): ?><div class="col-sm-4">
                                <?php if(is_array($page_items)): $i = 0; $__LIST__ = $page_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item["coulmn"] == 1): switch($item["type"]): case "text": ?><div class="form-group">
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
    </div><?php break; endswitch; endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <div class="col-sm-4">
                                <?php if(is_array($page_items)): $i = 0; $__LIST__ = $page_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item["coulmn"] == 2): switch($item["type"]): case "text": ?><div class="form-group">
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
    </div><?php break; endswitch; endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <div class="col-sm-4">
                                <?php if(is_array($page_items)): $i = 0; $__LIST__ = $page_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item["coulmn"] == 3): switch($item["type"]): case "text": ?><div class="form-group">
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
    </div><?php break; endswitch; endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <div class="col-sm-4">
                                <?php if(is_array($page_items)): $i = 0; $__LIST__ = $page_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item["coulmn"] == 4): switch($item["type"]): case "text": ?><div class="form-group">
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
    </div><?php break; endswitch; endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div><?php endif; ?>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="button">保存内容</button>
                                <button class="btn btn-white" type="submit">取消</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="/jankzmaker/Public/Common/hplus/js/jquery.min.js?v=2.1.4"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/content.min.js?v=1.0.0"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/plugins/iCheck/icheck.min.js"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/plugins/layer/layer.min.js"></script>
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
    
<script type="text/javascript">
	$(document).ready(function(){
	      $("button[type=button]").click(function(){
	        $.ajax({
	            type:'POST',
	            url:$("form").attr("action"),
	            data:$("form").serialize(),
	            success:function(response,status,xhr){
	               layer.msg(response.info);
	            }
	        });
	    });
	});
</script>

</body>

</html>