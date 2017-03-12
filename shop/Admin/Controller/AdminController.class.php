<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
    // 登入
    public function login(){
        if(IS_POST){
            $username = I('post.username');
            $pwd = I('post.password');
            $code = I('post.yzm');
            $Verify = new \Think\Verify();
            if(!$Verify->check($code)){
                $this->error('验证码错误','',1);
            }
            $adminModel = D('admin');
            $userinfo = $adminModel->where(array('username'=>$username))->find();

//             show_bug($userinfo);
            if(!$userinfo){
                $this->error('用户名错误','',1);
            }
            if($userinfo['password'] != $pwd){
                $this->error('密码错误','',1);
            }else {
                cookie('adminname',$userinfo['username']);
                $coo_kie = jm($userinfo['username'].C('COO_KIE'));
                cookie('adminkey',$coo_kie);
                $this->success('欢迎登入购物管理系统',U('/Admin'),1);
            }
        }
        else
            $this->display();
    }
    // 退出
    public function logout(){
        cookie('adminname',null);
        cookie('adminkey',null);

        $this->success('再见，管理员',U('/Admin'),1);
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
                echo $userModel->getError();
                exit;
            }
            $salt = salt();
            $userModel->password = md5($userModel->password.$salt);
            $userModel->salt = $salt;
            if($userModel->add())
                $this->success('注册成功','login','1');
            else
                $this->success('注册失败','','1');
        }
        else
            $this->display();
    }
}
