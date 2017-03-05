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
                echo $ordinfoModel->getError();
                exit;
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
                    // echo $ordgoodsModel->add();
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
}
