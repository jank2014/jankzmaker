<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    
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
    
<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-2 animated fadeInRight">
                <div class="ibox float-e-margins">
                    <div class="ibox-content mailbox-content">
                        <div class="file-manager">
                            <ul class="folder-list m-b-md" style="padding: 0">
                                <li>
                                    <a href="mailbox.html"> <i class="fa fa-inbox "></i>
                                        收件箱
                                        <span class="label label-warning pull-right">16</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailbox.html"> <i class="fa fa-envelope-o"></i>
                                        发信
                                    </a>
                                </li>
                                <li>
                                    <a href="mailbox.html">
                                        <i class="fa fa-certificate"></i>
                                        重要
                                    </a>
                                </li>
                                <li>
                                    <a href="mailbox.html">
                                        <i class="fa fa-file-text-o"></i>
                                        草稿
                                        <span class="label label-danger pull-right">2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailbox.html">
                                        <i class="fa fa-trash-o"></i>
                                        垃圾箱
                                    </a>
                                </li>
                            </ul>
                            <h5>分类</h5>
                            <ul class="category-list" style="padding: 0">
                                <li>
                                    <a href="mail_compose.html#">
                                        <i class="fa fa-circle text-navy"></i>
                                        工作
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_compose.html#">
                                        <i class="fa fa-circle text-danger"></i>
                                        文档
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_compose.html#">
                                        <i class="fa fa-circle text-primary"></i>
                                        社交
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_compose.html#">
                                        <i class="fa fa-circle text-info"></i>
                                        广告
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_compose.html#">
                                        <i class="fa fa-circle text-warning"></i>
                                        客户端
                                    </a>
                                </li>
                            </ul>

                            <h5 class="tag-title">标签</h5>
                            <ul class="tag-list" style="padding: 0">
                                <li>
                                    <a href="mail_compose.html">
                                        <i class="fa fa-tag"></i>
                                        朋友
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_compose.html">
                                        <i class="fa fa-tag"></i>
                                        工作
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_compose.html">
                                        <i class="fa fa-tag"></i>
                                        家庭
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_compose.html">
                                        <i class="fa fa-tag"></i>
                                        孩子
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_compose.html">
                                        <i class="fa fa-tag"></i>
                                        假期
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_compose.html">
                                        <i class="fa fa-tag"></i>
                                        音乐
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_compose.html">
                                        <i class="fa fa-tag"></i>
                                        照片
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_compose.html">
                                        <i class="fa fa-tag"></i>
                                        电影
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 animated fadeInRight">
                <form class="form-horizontal" method="get">
                    <div class="mail-box">

                        <div class="mail-body">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">发送到：</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="i@zi-han.net"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">主题：</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value=""></div>
                            </div>

                        </div>

                        <div class="mail-text h-200">

                            <script id="container" name="content" type="text/plain"></script>

                            <script type="text/javascript" src="/jankzmaker/Public/Common/ueditor/ueditor.config.js"></script>
                            <!-- 编辑器源码文件 -->
                            <script type="text/javascript" src="/jankzmaker/Public/Common/ueditor/ueditor.all.js"></script>
                            <!-- 实例化编辑器 -->
                            <script type="text/javascript">var ue = UE.getEditor('container',{
                            toolbars: [
                            ['fullscreen', 'source', '|', 'undo', 'redo', '|',
                                'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
                                'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
                                'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
                                'directionalityltr', 'directionalityrtl', 'indent', '|',
                                'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
                                'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
                                'simpleupload', 'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment', 'map', 'gmap', 'insertframe', 'insertcode', 'webapp', 'pagebreak', 'template', 'background', '|',
                                'horizontal', 'date', 'time', 'spechars', 'snapscreen', 'wordimage', '|',
                                'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', 'charts', '|',
                                'print', 'preview', 'searchreplace', 'help', 'drafts']
                        ],
                        autoHeightEnabled: true,
                        autoFloatEnabled: true,
                        // initialFrameWidth:900,
                        initialFrameHeight:450
                            });</script>
                            <div class="clearfix"></div>
                        </div>
                        <div class="mail-body text-right tooltip-demo">
                            <a href="mailbox.html" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Send">
                                <i class="fa fa-reply"></i>
                                发送
                            </a>
                            <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email">
                                <i class="fa fa-times"></i>
                                放弃
                            </a>
                            <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder">
                                <i class="fa fa-pencil"></i>
                                存为草稿
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
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
    
</body>

</html>