<?php
/**
 * 登陆控制器
 */
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{

	public function index(){
		if(!empty($_POST)){
			$manager = M('Manager');
			$info = $manager->where(array('username'=>$_POST['username']))->find();
			if($info){
				if($info['password']==$_POST['password']){
					$group_id = C('AUTH_GROUP_ID');//超级管理组的id
					$auth = new \Think\Auth();
					$uid = M("AuthGroupAccess")->where(array('group_id' => $group_id))->getField('uid',true);//获取超级管理员id
					if(in_array($info['id'],$uid)){
						session('uid',$info['id']);
						session('username',$info['username']);
						session('admin_type','超级管理员');
						$this->success('超级管理员登陆成功',U('Admin/Index/index'));
					}else{
						$userid = $info['id'];
						$manager_group_id = M('AuthGroupAccess')->where(array('uid'=>$userid))->getField('group_id',true);
						$rules=array();
						foreach ($manager_group_id as $key => $vo) {
							$rules[] = M('AuthGroup')->where(array('id'=>$vo))->getField('rules',true);
						}
						session('uid',$info['id']);
						session('username',$info['username']);
						session('admin_type','管理员');
						session('rules',$rules);
						$this->success('管理员登陆成功',U('Admin/Index/index'));
					}
				}else{
					$this->error('登陆失败，密码错误！',U('Admin/Login/index'));
				}
			}else{
				$this->error('无此用户存在！');
			}
		}else{
			$config = array('type'=>'login_admin');
			$jankzmaker = new \JankzMaker\Controller\Common\MakerCommon();
			$jankzmaker->setMetaTitle('登陆')
					->addPageItem('login_admin')
					->display();
		}
	}





	public function logout() {
		session(null);
		$this->redirect('Login/index');
	}







	public function verifyImg() {
		$conf = array(
			'length' => 5,
			'useNoise' => false,
			'useCurve' => false,
			'imageH' => 39,
			'imageW' => 160,
			'fontSize' => 18,
		);
		$verify = new \Think\Verify($conf);
		$verify->entry();
	}
}

 ?>