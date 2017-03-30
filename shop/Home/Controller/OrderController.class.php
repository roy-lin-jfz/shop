<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
    public function checkout(){
        $kache = session('kache');
        $tool = \Home\Tool\AddTool::getIns();
        $this->assign('shop_total',$tool->calcMoney());
        $this->assign('market_total',$tool->market_calcMoney());
        $this->assign('kache',$kache);

        $receiveModel = D('Receive');
        $userModel = D('Home/user');
        if(che()){
            $userinfo = $userModel->where(array('username'=>cookie('username')))->find();
            // show_bug($userinfo);
            $receiveinfo = $receiveModel->where(array('user_id'=>$userinfo['user_id']))->find();
            if($receiveinfo)
                $this->assign('receiveinfo',$receiveinfo);
        }
        $this->display();
    }
    public function done(){
        $userModel = D('Home/user');
        $ordgoodsModel = D('ordgoods');
        if(che()){
            $userinfo = $userModel->where(array('username'=>cookie('username')))->find();
            // show_bug($userinfo);
        }
        else {
            $this->error('请登入后再购买',U('/Home/user/login'),1);
        }
        if(IS_POST) {
            $ordinfoModel = D('ordinfo');
            if(!$ordinfoModel->create()) {
                $msg = $ordinfoModel->getError();
                $this->error("$msg",'',1);
            }
            $this->assign('money',$ordinfoModel->money);
            $this->assign('ord_sn',$ordinfoModel->ord_sn);
            $ordinfoModel->user_id = $userinfo['user_id'];
            $ordinfo_id = $ordinfoModel->add();
            if($ordinfo_id) {
                //添加到Ordgoods表中
                $kache = session('kache');
                foreach ($kache as $k => $v) {
                    $ordgoodsModel->ordinfo_id = $ordinfo_id;
                    $ordgoodsModel->goods_id = $k;
                    $ordgoodsModel->goods_name = $v['goods_name'];
                    $ordgoodsModel->shop_price = $v['shop_price'];
                    $ordgoodsModel->goods_num = $v['num'];
                    $ordgoodsModel->add();
                }
                $tool = \Home\Tool\AddTool::getIns();

                $tool->clear();
                cookie('gwc_num',0);
                $this->display();
            }
            else {
                $this->error('提交订单失败','',1);
            }
        }
    }

    //查看订单
    public function checkorder(){
        $userModel = D('Home/user');
        if(che()){
            $userinfo = $userModel->where(array('username'=>cookie('username')))->find();
            // show_bug($userinfo);
        }
        else {
            $this->error('请登入后再查看订单',U('/Home/user/login'),1);
        }
        $user_id = $userinfo['user_id'];
        $ordinfoModel = D('ordinfo');
        $ordinfo     = $ordinfoModel->where("user_id = '{$user_id}'")->order('ordtime desc')->select();
        $ordgoodsModel = D('ordgoods');
        foreach ($ordinfo as $index=>$item)
        {
            $ordinfo_id = $item['ordinfo_id'];
            $ordinfo[$index]['ordtime'] = date('Y-m-d H:i:s',$ordinfo[$index]['ordtime']);
            $ordinfo[$index]['goodsinfo'] = $ordgoodsModel->where("ordinfo_id = '{$ordinfo_id}'")->select();
        }
        
        $this->assign('ordinfo',$ordinfo);
        $this->display();
    }

    //支付
    public function pay(){
        $ordinfoModel = D('ordinfo');
        $ordinfoModel->paystatus = 1;
        $ord_sn = I('ord_sn');
        if($ordinfoModel->where("ord_sn = '{$ord_sn}'")->save()){
            $this->success('您已经支付啦',U('/Home/order/checkorder'),1);
        }
    }
}
