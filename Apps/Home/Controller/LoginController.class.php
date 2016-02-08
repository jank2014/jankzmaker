<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{
	public function index(){
		if(!empty($_POST)){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$user = M('User')->where(array('username'=>$username))->find();
			if($user){
				if($user['password']==$_POST['password']){
					session('uid',$user['id']);
					session('username',$user['username']);
					session('login_type','users');
					$this->success('登录成功',U('Index/index'));
				}else{
					$this->error('密码错误',U('Login/index'));
					}
			}else{
				$this->error('用户不存在',U('Login/index'));
			}
		}else{
		$jankzmaker = new \JankzMaker\Controller\Common\MakerCommon();
		$jankzmaker->setMetaTitle('用户登录')
				->addPageItem('login_home')
				->display();
		}
	}
	public function logout(){
		session(null);
		$this->redirect('Login/index');
	}
	public function register(){
		if(!empty($_POST)){
			$user = M('User');
			$user->create();
			$user=$user->add();
			if($user){
				session('uid',$user['id']);
				session('username',$user['username']);
				session('login_type','users');
				$this->success('注册成功',U('Index/index'));
			}else{
				$this->error('注册失败！',U('Login/register'));
			}
		}else{
			$jankzmaker = new \JankzMaker\Controller\Common\MakerCommon();
			$jankzmaker->setMetaTitle('用户注册')
					->addPageItem('register')
					->display();
		}
	}
}


 ?>