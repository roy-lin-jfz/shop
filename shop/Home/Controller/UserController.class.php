<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    // 登入
    public function login(){
        if(IS_POST){
            $username = I('post.username');
            $pwd = I('post.password');
            $code = I('post.yzm');
            $Verify = new \Think\Verify();
            if(!$Verify->check($code)){
                $this->error('验证码错误','login',1);
            }
            $userModel = D('user');
            $userinfo = $userModel->where(array('username'=>$username))->find();
            // show_bug($userinfo);
            if(!$userinfo){
                $this->error('用户名错误','login',1);
            }
            if($userinfo['password'] != md5($pwd.$userinfo['salt'])){
                $this->error('密码错误','login',1);
            }else {
                cookie('username',$userinfo['username']);
                $coo_kie = jm($userinfo['username'].C('COO_KIE'));
                cookie('key',$coo_kie);
                $this->success('恭喜你，进入购物的世界',U('/'),1);
            }
        }
        else
            $this->display();
    }
    // 退出
    public function logout(){
        cookie('username',null);
        cookie('key',null);
        $this->success('欢迎下次光临',U('/'),1);
    }

    // 验证码
    public function yzm(){
        $Verify = new \Think\Verify();
        $Verify->imageH = 0;
        $Verify->imageW = 0;
        $Verify->fontSize = 50;
        $Verify->length   = 4;
        $Verify->entry();
    }

    // 注册
    public function reg(){
        if(IS_POST){
            $userModel = D('User');
            if(!$userModel->create()){
                $msg = $userModel->getError();
                $this->error("$msg",'',1);
            }
            $salt = salt();
            $userModel->password = md5($userModel->password.$salt);
            $userModel->salt = $salt;
            if($userModel->add())
                $this->success('注册成功','login',1);
            else
                $this->success('注册失败','',1);
        }
        else
            $this->display();
    }

    //更新用户信息
    public function update(){
        if(IS_POST){
            $userModel = D('User');
            if(!$userModel->create()){
                $msg = $userModel->getError();
                $this->error("$msg",'',1);
            }
            $salt = salt();
            $userModel->password = md5($userModel->password.$salt);
            $userModel->salt = $salt;
            $user_id = I('post.id');
            $username=$userModel->username;

            if($userModel->where("user_id = '{$user_id}'")->save()){
                cookie('username',$username);
                $coo_kie = jm($username.C('COO_KIE'));
                cookie('key',$coo_kie);
                $this->success('修改成功','info',1);
            }
            else
                $this->success('修改失败','info',1);
        }
    }
    
    //用户信息
    public function info(){
        $userModel = D('User');
        if(che()){
            $userinfo = $userModel->where(array('username'=>cookie('username')))->find();
            // show_bug($userinfo);
        }
        else {
            $this->error('请登入后再添加信息',U('/Home/user/login'),1);
        }
        
        if(IS_POST){
            $receiveModel = D('Receive');
            if(!$receiveModel->create()){
                $msg = $receiveModel->getError();
                $this->error("$msg",'',1);
            }
            $receiveModel->user_id = $userinfo['user_id'];
            if($receiveModel->add())
                $this->success('提交成功','','1');
            else
                $this->success('提交失败','','1');
        }
        else{
            $receiveModel = D('Receive');
            $this->assign('userinfo',$userinfo);
            $receiveinfo = $receiveModel->where(array('user_id'=>$userinfo['user_id']))->find();
            if($receiveinfo)
                $this->assign('receiveinfo',$receiveinfo);
            $this->display();
        }
    }
}
