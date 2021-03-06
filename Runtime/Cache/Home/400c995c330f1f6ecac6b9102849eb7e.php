<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>HSC家校交流平台与成绩持久化方案</title>
    <link href="http://7xjy71.com1.z0.glb.clouddn.com/bootstrap.min.css" rel="stylesheet">
    <script src="http://7xjy71.com1.z0.glb.clouddn.com/ie8-responsive-file-warning.js"></script>
    <script src="http://7xjy71.com1.z0.glb.clouddn.com/ie-emulation-modes-warning.js"></script>
    <script src="http://7xjy71.com1.z0.glb.clouddn.com/html5shiv.min.js"></script>
    <script src="http://7xjy71.com1.z0.glb.clouddn.com/respond.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://7xjy71.com1.z0.glb.clouddn.com/anniindex.css">
 	<style type="text/css" media="screen">
 		.mylogin{
 			margin-top:10px;
 			margin-right:5px;
 		}
 	</style>
</head>

<body>
<!-- 导航开始 -->
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                <span class="sr-only">响应式导航切换</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">HSC</a>
        </div>
        <div class="navbar-collapse collapse" id="mynavbar">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Course/index');?>">课程</a></li>
                <li><a href="<?php echo U('Recomend/index');?>">推荐</a></li>
                <li><a href="<?php echo U('Share/index');?>">分享</a></li>
                <li><a href="<?php echo U('Activity/index');?>">活动</a></li>
                <li><a href="<?php echo U('Query/index');?>">查询</a></li>
                <li><a href="<?php echo U('Order/index');?>">预约</a></li>
                <li><a href="<?php echo U('Notice/index');?>">公告</a></li>

                <!-- <li><a href="#">会员中心</a></li> -->
            </ul>
            <div class="navbar-right mylogin">
            	<a href="<?php echo U('Index/login');?>" type="btn" class="btn btn-primary">登陆</a>
              <a href="<?php echo U('Index/register');?>" type="btn" class="btn btn-info">注册</a>
            </div>
        </div>
    </div>
</nav>
<!-- 结束 -->
<div class="container content">
    <div class="row">
        <div class="col-md-9 main">
            <div class="carousel slide" id="mycarousel">
                <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-banner1.jpg" class="img-responsive" alt="first slide" />
                    </div>
                    <div class="item">
                        <img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-banner2.jpg" class="img-responsive" alt="second slide" />
                    </div>
                    <div class="item">
                        <img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-banner2.jpg" class="img-responsive" alt="second slide" />
                    </div>
                </div>
            </div>


            <div class="sort">
                <div class="page-header">
                    <h1>文章</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="sortbar pull-right">
                                <li><a href="#">经典文章</a></li>
                                <li><a href="#">情感故事</a></li>
                                <li><a href="#">情感故事</a></li>
                                <li><a href="#">情感故事</a></li>
                                <li><a href="#">情感故事</a></li>
                                <li><a href="#">更多&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="article-content">
                    <div class="row article-line">
                        <div class="col-md-4">
                           <div class="article-pic">
                              <a href="#"><img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-article.jpg" class="img-responsive" alt="美文配图"></a>
                               <div class="decrosition clearfix">
                                <a href="#">伤感文章</a>
                                 <span class="pull-right">2015-05-03</span>
                               </div>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="article-intro">
                               <h3><a href="#">因为爱你，我在努力。</a></h3>
                               <p>不知道从什么时候开始，想要分享自己的生活、爱情、还有许多自己的各种的小情绪。也不知道为什么
                                   ，也许，这是一种喜欢诉说的特质吧，亦许，这就是我这个人的性格 ...</p>
                           </div>
                        </div>
                    </div>
                    <div class="row article-line">
                        <div class="col-md-4">
                           <div class="article-pic">
                               <a href="#"> <img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-article-2.jpg" class="img-responsive" alt="美文配图"></a>
                               <div class="decrosition clearfix">
                                <a href="#">伤感文章</a>
                                 <span class="pull-right">2015-05-03</span>
                               </div>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="article-intro">
                               <h3><a href="#">推开窗，给心灵一片蓝天</a></h3>
                               <p>不知道从什么时候开始，想要分享自己的生活、爱情、还有许多自己的各种的小情绪。也不知道为什么
                                   ，也许，这是一种喜欢诉说的特质吧，亦许，这就是我这个人的性格 ...</p>
                           </div>
                        </div>
                    </div>
                    <div class="row article-line">
                        <div class="col-md-4">
                           <div class="article-pic"><img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-article-3.jpg" class="img-responsive" alt="美文配图"></a>
                               <div class="decrosition clearfix">
                                <a href="#">伤感文章</a>
                                 <span class="pull-right">2015-05-03</span>
                               </div>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="article-intro">
                               <h3><a href="#">不想管太多</a></h3>
                               <p>不知道从什么时候开始，想要分享自己的生活、爱情、还有许多自己的各种的小情绪。也不知道为什么
                                   ，也许，这是一种喜欢诉说的特质吧，亦许，这就是我这个人的性格 ...</p>
                           </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-img">
                    <a href="#"><img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-bottom-pic.jpg" class="img-responsive" alt="分类底部图片" /></a>
                </div>
            </div>


            <div class="sort">
                <div class="page-header">
                    <h1>散文</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="sortbar pull-right">
                                <li><a href="#">经典文章</a></li>
                                <li><a href="#">情感故事</a></li>
                                <li><a href="#">情感故事</a></li>
                                <li><a href="#">情感故事</a></li>
                                <li><a href="#">情感故事</a></li>
                                <li><a href="#">更多&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="article-content">
                    <div class="row article-line">
                        <div class="col-md-4">
                           <div class="article-pic">
                              <a href="#"><img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-article-4.jpg" class="img-responsive" alt="美文配图"></a>
                               <div class="decrosition clearfix">
                                <a href="#">伤感文章</a>
                                 <span class="pull-right">2015-05-03</span>
                               </div>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="article-intro">
                               <h3><a href="#">花开一半，肥了思念</a></h3>
                               <p>不知道从什么时候开始，想要分享自己的生活、爱情、还有许多自己的各种的小情绪。也不知道为什么
                                   ，也许，这是一种喜欢诉说的特质吧，亦许，这就是我这个人的性格 ...</p>
                           </div>
                        </div>
                    </div>
                    <div class="row article-line">
                        <div class="col-md-4">
                           <div class="article-pic">
                               <a href="#"> <img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-article-5.jpg" class="img-responsive" alt="美文配图"></a>
                               <div class="decrosition clearfix">
                                <a href="#">伤感文章</a>
                                 <span class="pull-right">2015-05-03</span>
                               </div>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="article-intro">
                               <h3><a href="#">走在自然里，即使一人，也不觉孤独</a></h3>
                               <p>不知道从什么时候开始，想要分享自己的生活、爱情、还有许多自己的各种的小情绪。也不知道为什么
                                   ，也许，这是一种喜欢诉说的特质吧，亦许，这就是我这个人的性格 ...</p>
                           </div>
                        </div>
                    </div>
                    <div class="row article-line">
                        <div class="col-md-4">
                           <div class="article-pic">
                               <a href="#"> <img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-article-6.jpg" class="img-responsive" alt="美文配图"></a>
                               <div class="decrosition clearfix">
                                <a href="#">伤感文章</a>
                                 <span class="pull-right">2015-05-03</span>
                               </div>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="article-intro">
                               <h3><a href="#">有夢想，有起點，才會有成功</a></h3>
                               <p>不知道从什么时候开始，想要分享自己的生活、爱情、还有许多自己的各种的小情绪。也不知道为什么
                                   ，也许，这是一种喜欢诉说的特质吧，亦许，这就是我这个人的性格 ...</p>
                           </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- 主页面右侧 -->
        <div class="col-md-3 sidebar">
            <div class="search">
                <div class="page-header">
                    <h2>站内搜索</h2>
                </div>
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                              <button class="btn btn-red" type="button">
                                 <span class="glyphicon glyphicon-search"></span>
                              </button>
                        </span>
                    </div>

                </form>
            </div>

            <!-- 标签 -->
            <div class="marking">
                <div class="page-header">
                    <h2>热门标签</h2>
                </div>
                <div class="listbar">
                   <a href="#">幸福</a>
                   <a href="#">青春</a>
                   <a href="#">爱</a>
                   <a href="#">美文</a>
                   <a href="#">散文</a>
                   <a href="#">情感</a>
                   <a href="#">思念</a>
                   <a href="#">生命</a>
                   <a href="#">梦想</a>
                   <a href="#">回忆</a>
                   <a href="#">闲谈</a>
                   <a href="#">父爱</a>
                   <a href="#">清风</a>
                   <a href="#">爱情</a>
                   <a href="#">原谅</a>
                   <a href="#">假如</a>
                   <a href="#">路途</a>
                   <a href="#">*</a>
                   <a href="#">纯美</a>
                   <a href="#">友情</a>
                   <a href="#">...</a>
                   <a href="#">勇气</a>
                   <a href="#">励志</a>
                </div>
            </div>

            <!-- 便签结束 本周热门开始 -->
            <div class="hotread">
                <div class="page-header">
                    <h2>本周热门阅读</h2>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <a href="#"><img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-small-pic.jpg" class="img-responsive"  alt="边栏小图"></a>
                    </div>
                    <div class="col-md-7">
                        <div class="sidebar-txt">
                            <h5><a href="#">一种深久的不安</a></h5>
                            <p>不知道从什么时候开始，想要分享自己的生活...</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                       <a href="#"><img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-small-pic-2.jpg" class="img-responsive"  alt="边栏小图"></a>
                    </div>
                    <div class="col-md-7">
                        <div class="sidebar-txt">
                            <h5><a href="#">做个简单的自己</a></h5>
                            <p>不知道从什么时候开始，想要分享自己的生活...</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                       <a href="#"><img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-small-pic-3.jpg" class="img-responsive"  alt="边栏小图"></a>
                    </div>
                    <div class="col-md-7">
                        <div class="sidebar-txt">
                            <h5><a href="#">心态，决定一生</a></h5>
                            <p>不知道从什么时候开始，想要分享自己的生活...</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                       <a href="#"><img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-small-pic-4.jpg" class="img-responsive"  alt="边栏小图"></a>
                    </div>
                    <div class="col-md-7">
                        <div class="sidebar-txt">
                            <h5><a href="#">因为爱你，我在努力。</a></h5>
                            <p>不知道从什么时候开始，想要分享自己的生活...</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                       <a href="#"><img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-small-pic-5.jpg" class="img-responsive"  alt="边栏小图"></a>
                    </div>
                    <div class="col-md-7">
                        <div class="sidebar-txt">
                            <h5><a href="#">苏幕遮</a></h5>
                            <p>不知道从什么时候开始，想要分享自己的生活...</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                       <a href="#"><img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-small-pic-6.jpg" class="img-responsive"  alt="边栏小图"></a>
                    </div>
                    <div class="col-md-7">
                        <div class="sidebar-txt">
                            <h5><a href="#">清溪九顾</a></h5>
                            <p>不知道从什么时候开始，想要分享自己的生活...</p>
                        </div>
                    </div>
                </div>


            </div>
            <!-- 本周热门结束 编辑推荐开始 -->
            <div class="edit">
                <div class="page-header">
                    <h2>编辑推荐</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                       <a href="#"> <img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-article-4.jpg" class="img-responsive" alt="" /></a>
                    </div>
                    <div class="col-md-6">
                        <a href="#"><img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-article-5.jpg" class="img-responsive" alt="" /></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="#"><img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-small-pic-3.jpg" class="img-responsive" alt="" /></a>
                    </div>
                    <div class="col-md-6">
                        <a href="#"><img src="http://7xjy6w.com1.z0.glb.clouddn.com/anni-small-pic-8.jpg" class="img-responsive" alt="" /></a>
                    </div>
                </div>
            </div>

            <!--  -->
            <div class="friend-link">
                <div class="page-header">
                    <h2>友情链接</h2>
                </div>
                <ul class="list-link">
                    <li><a href="#">经典文章</a></li>
                    <li><a href="#">情感文章</a></li>
                    <li><a href="#">励志文章</a></li>
                    <li><a href="#">人生哲理</a></li>
                    <li><a href="#">抒情文章</a></li>
                    <li><a href="#">现代诗歌</a></li>
                    <li><a href="#">爱情诗歌</a></li>
                    <li><a href="#">古风词韵</a></li>
                    <li><a href="#">经典文章</a></li>
                    <li><a href="#">经典文章</a></li>
                    <li><a href="#">经典文章</a></li>
                    <li><a href="#">经典文章</a></li>
                    <li><a href="#">经典文章</a></li>
                    <li><a href="#">经典文章</a></li>
                    <li><a href="#">经典文章</a></li>
                    <li><a href="#">经典文章</a></li>
                    <li><a href="#">经典文章</a></li>
                    <li><a href="#">经典文章</a></li>
                    <li><a href="#">经典文章</a></li>
                    <li><a href="#">经典文章</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- main 结束 footer开始 -->
<div class="bottom">
    <div class="container">
        <div class="bottom-list">
            <a href="#">ANNI文章</a>
            <a href="#">ANNI散文</a>
            <a href="#">ANNI诗歌</a>
            <a href="#">ANNI情感</a>
            <a href="#">ANNI励志</a>
            <a href="#">ANNI回忆</a>
            <a href="#">ANNI淡忘</a>
            <a href="#">ANNI勇敢</a>
            <a href="#">ANNI热情</a>
            <a href="#">ANNI文章</a>
            <a href="#">ANNI文章</a>

        </div>
        <div class="row">
            <div class="col-md-12">
                <p></p>
                <p>Copyright © 2015 <a href="#">www.jankz.com</a>, All Rights Reserved. GMT+8, 2015-06-29 23:42:11</p>
            </div>
        </div>
    </div>
</div>

<script src="http://7xjy71.com1.z0.glb.clouddn.com/jquery-2.1.3.min.js"></script>
<script src="http://7xjy71.com1.z0.glb.clouddn.com/bootstrap.min.js"></script>
<script src="http://7xjy71.com1.z0.glb.clouddn.com/holder.js"></script>
<script src="http://7xjy71.com1.z0.glb.clouddn.com/ie10-viewport-bug-workaround.js"></script>
</body>
</html>