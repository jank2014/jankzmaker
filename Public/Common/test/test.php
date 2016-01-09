<?php
/**
 * Created by PhpStorm.
 * User: jank2016
 * Date: 2015/5/13
 * Time: 21:29
 */
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller{
//    public function verifyImg(){
//        $config=array(
//            'imageW'=>'200px',
//            'imageH'=>'35px',
//            'length'=>6,
//            'fontSize'=>18,
//            'useCurve'=>false
//
//        );
//        $Verify= new \Think\Verify($config);
//        $Verify->entry();
//<img src="__CONTROLLER__/verifyImg" onClick="this.src=this.src+'?'+Math.random()" alt="">
//<input class="TxtValidateCodeCssClass form-control" id="captcha" name="captcha" type="text" placeholder="请输入验证码">
//    }

//    public function verifyImg(){
//        $config=array(
//            'imageW'        =>'300px',
//            'imageH'        =>'50px',
//            'length'        =>6,
//            'fontSize'      =>48,
//            'useCurve'      =>false,
//            'useNoise'      =>false,
//
//        );
//        $Verify = new \Think\Verify($config);
//        $Verify->entry();
//        <input name="captcha">
//        <img src="__CONTROLLER__/verifyImg" alt ="" onClick="this.src=this.src+'?'+Math.random()">
//    }
//public function verifyImg(){
//    $config=array(
//        'useNoise'      =>false,
//        'useCurve'      =>false,
//    );
//    $varify = new \Think\Verify($config);
//    $varify->entry();
//    <input name='captcha'>
//        <img src="__CONTROLLER__/verifyImg" onClick="this.src=this.src+'?'+Math.random()" alt="">
//}
    public function verifyImg(){
        $config=array(
            'imageW'        =>'300px',
            'useNoise'      =>false,
            'useCurve'      =>false
        );
        $verify = new \Think\Verify($config);
        $verify->entry();
//        <input name="captcha">
//            <img src="__CONTROLLER__/verifyImg" onClick="this.src=this.src+'?'+Math.random()" alt="" >
    }


















//    public function login(){
//        if(!empty($_POST)){
//            $user = new \Home\Model\UserModel();
//            $result=$user->checkNamePwd($_POST['username'],$_POST['password']);
//            if($result===false){
//                $this->error('登陆失败',U('User/register'));
//                exit();
//            }else{
//                session('username',$result['username']);
//                session('id',$result['id']);
//                $this->redirect('Index/index',array('id'=>10,'name'=>'jank'),2,'登陆成功');
//            }
//        }
//        $this->display();
//    }
/*    public function login(){
        if(!empty($_POST)){
            $user = new \Home\Model\UserModel();
            $result=$user->checkNamePwd($_POST['username'],$_POST['password']);
            if($result===false){
                $this->error('登陆失败'，U('User/login'));
                exit;
            }else{
                session('username',$result['username']);
                session('id',$result['id']);
                $this->redirect('Index/index',array('id'=>100,'username'=>'jank'),2,'登陆成功');
            }
        }
        $this->display();
    }*/
//    public function login(){
//        if(!empty($_POST)){
//            $user = new \Home\Model\UserModel();
//            $result=$user->checkNamePwd($_POST['username'],$_POST['password']);
//            if($result===false){
//                $this->error('登陆失败'，U('User/login'));
//                exit();
//            }else{
//                session('username',$result['username']);
//                session('id',$result['id']);
//                $this->redirect('Index/index',array('id'=>10,'username'='jank'),2,'登陆成功');
//            }
//        }
//        $this->display();
//    }
//    public function login(){
//        if(!empty($_POST)){
//            $user= new \Home\Model\UserModel();
//            $result=$user->checkNamePwd($_POST['username'],$_POST['password']);
//            if($result===false){
//                $this->error('登陆错误',U('User/login'));
//                exit();
//            }else{
//                session('username',$result['username']);
//                session('id',$result['id']);
//                $this->redirect('Index/index',array('id'=>1,'username'=>'jank')2,'登陆成功');
//            }
//        }
//        $this->display();
//    }


//-----------------------------------注册练习-----------------------------------------
//-----------------------------------注册练习-----------------------------------------
//-----------------------------------注册练习-----------------------------------------

//
//    public function register(){
//        if(!empty($_POST)){
//            $verify = new \Think\Verify();
//            if(!$verify->check($_POST['captcha'])){
//                echo "验证码错误";
//            }else{
//                $user= new \Home\Model\UserModel();
//                $z=$user->create();
//                if(!$z){
//                    show_bug($user->getError());
//                    exit();
//                }
//                $result=$user->add();
//                if($result){
//                    $this->success('注册成功',U('User/login'));
//                }else{
//                    $this->error('注册失败',U('User/register'));
//                }
//            }
//        }else{
//            $this->display();
//        }
//    }
//111111111111111111111111111111111111111111111111111111111111111111111111111111
//    public function register(){
//        if(!empty($_POST)){
//            $verify = new \Think\Verify();
//            if($verify!=$_POST['captcha']){
//                echo "验证码错误";
//            }else{
//                $user= new \Home\Model\UserModel();
//                $z=$user->create();
//                if(!$z){
//                    show_bug($user->getError());
//                    exit();
//                }
//                $result=$user->add();
//                if($result){
//                    $this->success('注册成功',U('User/login'));
//                }else{
//                        $this->error('注册失败',U('User/register'));
//
//                }
//            }
//        }else{
//            $this->display();
//        }
//    }
//2222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222
//    public function register(){
//        if(!empty($_POST)){
//            $verify = new \Think\Verify();
//            if($verify!=$_POST['captcha']){
//                echo "验证码错误";
//                exit();
//            }
//            $user= new \Home\Model\UserModel();
//            $z=$user->create();
//            if(!$z){
//                show_bug($user->getError());
//                exit();
//            }
//            $result=$user->add();
//            if($result){
//                $this->success('注册成功',U('User/login'));
//            }else{
//                $this->error('注册失败',U('User/register'));
//            }
//        }else{
//            $this->display();
//        }
//    }























}
