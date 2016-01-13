<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title><?php echo ($metatitle); ?></title>
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
    
<?php switch($conftpl["type"]): case "newform": ?><div class="row">
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
                            <?php if(is_array($form_items)): $i = 0; $__LIST__ = $form_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; switch($item["type"]): case "text": ?><div class="form-group">
	<label class="col-sm-2 control-label"><?php echo ($item["title"]); ?></label>
	<div class="col-sm-10">
		<input type="<?php echo ($item["type"]); ?>" class="form-control" name="<?php echo ($item["name"]); ?>">
	</div>
</div>
<div class="hr-line-dashed"></div><?php break;?>
                                    
                                    
                                    <?php case "select": ?><div class="form-group">
    <label class="col-sm-2 control-label"><?php echo ($item["title"]); ?></label>
    <div class="col-sm-10">
        <select class="form-control m-b" name="<?php echo ($item["name"]); ?>">
            <?php if(is_array($item["options"])): foreach($item["options"] as $key=>$select): ?><option value="<?php echo ($select["id"]); ?>"><?php echo ($select["title"]); ?></option><?php endforeach; endif; ?>
        </select>
    </div>
</div>
<div class="hr-line-dashed"></div><?php break; endswitch; endforeach; endif; else: echo "" ;endif; ?>
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
        </div><?php break;?>
	<?php case "newtable": ?><div class="row">
    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <?php if(!empty($topbtns)): if(is_array($topbtns)): $i = 0; $__LIST__ = $topbtns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topbtns): $mod = ($i % 2 );++$i;?><a href="<?php echo ($topbtns["second"]["href"]); ?>" class="btn-sm <?php echo ($topbtns["second"]["btn_class"]); ?>">
                        <i class="fa <?php echo ($topbtns["second"]["i_class"]); ?>"></i>
                        <?php echo ($topbtns["second"]["name"]); ?>
                        </a>&nbsp;<?php endforeach; endif; else: echo "" ;endif; endif; ?>
                  <a class="btn-primary btn-sm" href="javascript:location.replace(location.href);">
                <i class="fa fa-refresh"></i></a>

                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="table_basic.html#">选项1</a>
                        </li>
                        <li><a href="table_basic.html#">选项2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-5 m-b-xs">
                        <select class="input-sm form-control input-s-sm inline">
                            <option value="0">请选择</option>
                            <option value="1">选项1</option>
                            <option value="2">选项2</option>
                            <option value="3">选项3</option>
                        </select>
                    </div>
                    <div class="col-sm-4 m-b-xs">
                        <div data-toggle="buttons" class="btn-group">
                            <label class="btn btn-sm btn-white">
                                <input type="radio" id="option1" name="options">天</label>
                            <label class="btn btn-sm btn-white active">
                                <input type="radio" id="option2" name="options">周</label>
                            <label class="btn btn-sm btn-white">
                                <input type="radio" id="option3" name="options">月</label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="text" placeholder="请输入关键词" class="input-sm form-control"> <span class="input-group-btn">
                                <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                        </div>
                    </div>
                </div>



                <div class="table-responsive">
                    <table class="table table-striped">
                    <?php if(!empty($thead)): ?><thead>
                            <tr>
                            <th><input class="check-all" type="checkbox"></th>
                            <?php if(is_array($thead)): $i = 0; $__LIST__ = $thead;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$thead): $mod = ($i % 2 );++$i;?><th><?php echo ($thead["name"]); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
                           <?php if(!empty($rightbtns)): ?><th>操作</th><?php endif; ?>
                            </tr>
                        </thead><?php endif; ?>
                    <?php if(!empty($tbody)): ?><tbody>
                        <?php if(is_array($tbody)): $i = 0; $__LIST__ = $tbody;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tbody): $mod = ($i % 2 );++$i;?><tr>
                            <td><input class="ids" type="checkbox" value="<?php echo ($tbody[$main_key]); ?>" name="ids[]"></td>
                            <?php if(is_array($tbody_list)): $i = 0; $__LIST__ = $tbody_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><td><?php echo ($tbody[$list['name']]); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
                                 <?php if(!empty($tbody["rightbtns"])): ?><td>
                                <?php if(is_array($tbody["rightbtns"])): $i = 0; $__LIST__ = $tbody["rightbtns"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rightbtns): $mod = ($i % 2 );++$i;?><a href="<?php echo ($rightbtns["href"]); ?>" class="btn-xs <?php echo ($rightbtns["btn_class"]); ?>">
                                    <i class="fa <?php echo ($rightbtns["i_class"]); ?>"></i>
                                    <?php echo ($rightbtns["name"]); ?>
                                    </a>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>

                                </td><?php endif; ?>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody><?php endif; ?>
                    </table>
                    <?php if(!empty($page_list)): ?><div id="page_list"><input type="hidden" id="pages" value="<?php echo ($page_list); ?>"></div><?php endif; ?>
                </div>

            </div>
        </div>
    </div>

</div><?php break;?>
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
	<?php case "libs": ?><div class="row">
	<div class="col-sm-4">
	    <div class="contact-box">
	        <a href="profile.html">
	            <div class="col-sm-4">
	                <div class="text-center">
	                    <img alt="image" class="img-circle m-t-xs img-responsive" src="/jankzmaker/Public/Common/hplus/img/a2.jpg">
	                    <div class="m-t-xs font-bold">CTO</div>
	                </div>
	            </div>
	            <div class="col-sm-8">
	                <h3><strong>奔波儿灞</strong></h3>
	                <p><i class="fa fa-map-marker"></i> 甘肃·兰州</p>
	                <address>
	                <strong>Baidu, Inc.</strong><br>
	                E-mail:xxx@baidu.com<br>
	                Weibo:<a href="">http://weibo.com/xxx</a><br>
	                <abbr title="Phone">Tel:</abbr> (123) 456-7890
	            </address>
	            </div>
	            <div class="clearfix"></div>
	        </a>
	    </div>
	</div>
</div><?php break;?>
	<case>
	<div class="row">
	    <div class="col-sm-6">
	        <div class="panel blank-panel">

	            <div class="panel-heading">
	                <div class="panel-title m-b-md">
	                    <h4>图标选项卡</h4>
	                </div>
	                <div class="panel-options">

	                    <ul class="nav nav-tabs">
	                        <li class="active"><a data-toggle="tab" href="tabs_panels.html#tab-4"><i class="fa fa-laptop"></i></a>
	                        </li>
	                        <li class=""><a data-toggle="tab" href="tabs_panels.html#tab-5"><i class="fa fa-desktop"></i></a>
	                        </li>
	                        <li class=""><a data-toggle="tab" href="tabs_panels.html#tab-6"><i class="fa fa-signal"></i></a>
	                        </li>
	                        <li class=""><a data-toggle="tab" href="tabs_panels.html#tab-7"><i class="fa fa-bar-chart-o"></i></a>
	                        </li>
	                    </ul>
	                </div>
	            </div>

	            <div class="panel-body">
	                <div class="tab-content">
	                    <div id="tab-4" class="tab-pane active">
	                        <strong>排版与链接</strong>

	                        <p>Bootstrap 排版、链接样式设置了基本的全局样式。分别是： 为 body 元素设置 background-color: #fff; 使用 @font-family-base、@font-size-base 和 @line-height-base a变量作为排版的基本参数 为所有链接设置了基本颜色 @link-color ，并且当链接处于 :hover 状态时才添加下划线 这些样式都能在 scaffolding.less 文件中找到对应的源码。</p>
	                    </div>

	                    <div id="tab-5" class="tab-pane">
	                        <strong>Normalize.css</strong>

	                        <p>为了增强跨浏览器表现的一致性，我们使用了 Normalize.css，这是由 Nicolas Gallagher 和 Jonathan Neal 维护的一个CSS 重置样式库。</p>
	                    </div>
	                    <div id="tab-6" class="tab-pane">
	                        <strong>布局容器</strong>

	                        <p>Bootstrap 需要为页面内容和栅格系统包裹一个 .container 容器。我们提供了两个作此用处的类。注意，由于 padding 等属性的原因，这两种 容器类不能互相嵌套。</p>
	                    </div>
	                    <div id="tab-7" class="tab-pane">
	                        <strong>栅格系统</strong>

	                        <p>Bootstrap 提供了一套响应式、移动设备优先的流式栅格系统，随着屏幕或视口（viewport）尺寸的增加，系统会自动分为最多12列。它包含了易于使用的预定义类，还有强大的mixin 用于生成更具语义的布局。</p>
	                    </div>
	                </div>

	            </div>

	        </div>
	    </div>
	</div>
</case>
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
    </div><?php break; endswitch;?>



    <script src="/jankzmaker/Public/Common/hplus/js/jquery.min.js?v=2.1.4"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/content.min.js?v=1.0.0"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/plugins/iCheck/icheck.min.js"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/plugins/layer/layer.min.js"></script>
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
    
	<?php switch($conftpl["type"]): case "newform": ?><!-- 自定义js -->
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
	        </script><?php break;?>
		<?php case "newtable": ?><script src="/jankzmaker/Public/Common/laypage-v1.3/laypage/laypage.js"></script>
		            <script type="text/javascript">
		            laypage({
		                cont: 'page_list',
		                pages:$("#pages").val(),
		                skip: true, //是否开启跳页
		                skin: 'molv',
		                curr: function(){ //通过url获取当前页，也可以同上（pages）方式获取
		                    var page = location.search.match(/page=(\d+)/);
		                    return page ? page[1] : 1;
		                }(),
		                jump: function(e, first){ //触发分页后的回调
		                    if(!first){ //一定要加此判断，否则初始时会无限刷新
		                        location.href = '?page='+e.curr;
		                    }
		                }
		            });
		        </script><?php break; endswitch;?>

</body>

</html>