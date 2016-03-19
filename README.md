#JankzMaker 
##JankzMaker 简介
基于ThinkPHP 3.2.3 深度二次开发 ,灵感来自 openCenter 的Builder. 可以快速集成到项目中用来快速构建网站后台 和 App后台. 我比较喜欢编程 不太喜欢写前端的代码有了JankzMaker 可以在开发中大大减少HTML的编写,让我们专注于功能的开发.
###一旦你了解它,你会爱上它.


##快速预览
###生成表格

```
public function menulist(){
		//生成页面之前建构数据模型
		$table=array(
    		'id'=>'id',
    		'pid'=>'父ID',
    		'title'=>'名称',
    		'sort'=>'排序值',
    		'url'=>'链接地址',
    		'icon'=>'图表',
    		'status'=>'状态',
    		'c_time'=>'创建时间',
    		'u_time'=>'修改时间',
    		);
		$page =$_GET['page'];
		$system  = M('System');
		$count = $system->count();
		$page_list = ceil($count/10);
		$info = $system->where(array('status'=>'1'))->page($page,10)->select();

		//调用表格制作函数 返回make_table 用来拆分$tbale 的key 和 value
		$make_table=makeTable($table);
		//调用jankzmaker 生成页面
 		$jankzmaker = new \JankzMaker\Controller\Admin\MakerTable();
 		$jankzmaker->setMetaTitle('测试')
				->setTbodyData($info)//总数据
				->setTbodyList($make_table['list'])//循环列表 这里根据table设定生成
				->setThead($make_table['thead'])//循环表头 这里根据table设定生成
				->addRightBtn('edit')
				->addRightBtn('resume')
				->addRightBtn('forbid')
				->addRightBtn('delete')
				->addTopBtn('add,forbid')
				->addTopBtn('delete')
				->setPage($page_list)
				->display();
	}
	
```
![GitHub set up](http://7xjw2z.com1.z0.glb.clouddn.com/table.png)
###生成form



```

public function menulist(){
		//生成页面之前建构数据模型
		$table=array(
    		'id'=>'id',
    		'pid'=>'父ID',
    		'title'=>'名称',
    		'sort'=>'排序值',
    		'url'=>'链接地址',
    		'icon'=>'图表',
    		'status'=>'状态',
    		'c_time'=>'创建时间',
    		'u_time'=>'修改时间',
    		);
		$page =$_GET['page'];
		$system  = M('System');
		$count = $system->count();
		$page_list = ceil($count/10);
		$info = $system->where(array('status'=>'1'))->page($page,10)->select();

		//调用表格制作函数 返回make_table 用来拆分$tbale 的key 和 value
		$make_table=makeTable($table);
		//调用jankzmaker 生成页面
 		$jankzmaker = new \JankzMaker\Controller\Admin\MakerTable();
 		$jankzmaker->setMetaTitle('测试')
				->setTbodyData($info)//总数据
				->setTbodyList($make_table['list'])//循环列表 这里根据table设定生成
				->setThead($make_table['thead'])//循环表头 这里根据table设定生成
				->addRightBtn('edit')
				->addRightBtn('resume')
				->addRightBtn('forbid')
				->addRightBtn('delete')
				->addTopBtn('add,forbid')
				->addTopBtn('delete')
				->setPage($page_list)
				->display();
	}

```


![GitHub set up](http://7xjw2z.com1.z0.glb.clouddn.com/form.png)

##看到这里想必你已经大概懂了了...
在这两个页面的产生中，我们并没有在视图层（View）写下任何一句代码，也就是说我们把视图也集成到Controller 中，这样在开发后台功能时，我们就不用一遍又一遍重复类似的表格 表单。我们只需要在对应控制器修改表格配置文件和表格建构数据就可以生成不同的页面。这是JankzMaker的核心功能，当然，这并不是说所有的页面都要使用这种方法生成。例如网站前台很多特色功能，要应对不同场景，还是要编写特定的视图

在开发测试中,用来调试 非常不错哦


