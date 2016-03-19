<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    
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
    
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    
	<?php switch($conftpl): case "admin": if(is_array($pageitems)): $i = 0; $__LIST__ = $pageitems;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pageitem): $mod = ($i % 2 );++$i; switch($pageitem["type"]): case "form": ?><div class="row">
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
	<label class="col-sm-<?php echo ($item["col_l"]); ?> control-label"><?php echo ($item["title"]); ?></label>
	<div class="col-sm-<?php echo ($item["col_d"]); ?>">
		<input type="<?php echo ($item["type"]); ?>" class="form-control" name="<?php echo ($item["name"]); ?>" value="<?php echo ($item["value"]); ?>">
	</div>
</div>
<div class="hr"></div><?php break;?>
                                    <?php case "select": ?><div class="form-group">
    <label class="col-sm-<?php echo ($item["col_l"]); ?> control-label"><?php echo ($item["title"]); ?></label>
    <div class="col-sm-<?php echo ($item["col_d"]); ?>">
        <select class="form-control m-b" name="<?php echo ($item["name"]); ?>">
            <?php if(is_array($item["options"])): foreach($item["options"] as $key=>$select): ?><option value="<?php echo ($select["id"]); ?>"><?php echo ($select["title"]); ?></option><?php endforeach; endif; ?>
        </select>
    </div>
</div>
<div class="hr-line-dashed"></div><?php break;?>
                                    <?php case "textarea": ?><div class="form-group">
    <label class="col-sm-<?php echo ($item["col_l"]); ?> control-label"><?php echo ($item["title"]); ?></label>
    <div class="col-sm-<?php echo ($item["col_d"]); ?>">
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
	<case value="table">
		<div class="row">
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

</div><?php break; endswitch; endforeach; endif; else: echo "" ;endif; ?>
		</case><?php endswitch;?>


    <script src="/jankzmaker/Public/Common/hplus/js/jquery.min.js?v=2.1.4"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/plugins/layer/layer.min.js"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/hplus.min.js?v=4.0.0"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/contabs.min.js"></script>
    <script src="/jankzmaker/Public/Common/hplus/js/plugins/pace/pace.min.js"></script>
    
</body>

</html>