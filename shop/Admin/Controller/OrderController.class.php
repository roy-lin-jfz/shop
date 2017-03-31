<?php
/**
 * Created by PhpStorm.
 * User: roy.lin
 * Date: 2017/3/31
 * Time: 17:02
 */
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller
{
    //查看订单
    public function checkorder()
    {
        $is_send = I('is_send');
        $ordinfoModel = D('Home/ordinfo');

        $count         = $ordinfoModel->where("is_send = '{$is_send}' and is_repeal = 0")->count();

        $Page          = new \Think\Page($count,10);
        $show          = $Page->show();
        
        $ordinfo = $ordinfoModel->where("is_send = '{$is_send}' and is_repeal = 0")->order('ordtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $ordgoodsModel = D('Home/ordgoods');
        foreach ($ordinfo as $index => $item) {
            $ordinfo_id = $item['ordinfo_id'];
            $ordinfo[$index]['ordtime'] = date('Y-m-d H:i:s', $ordinfo[$index]['ordtime']);
            $ordinfo[$index]['goodsinfo'] = $ordgoodsModel->where("ordinfo_id = '{$ordinfo_id}'")->select();
        }

        $this->assign('count',$count);
        $this->assign('page',$show);
        
        $this->assign('ordinfo', $ordinfo);
        $this->display();
    }

    //发货
    public function send()
    {
        $ordinfoModel = D('ordinfo');
        $ordinfoModel->is_send = 1;
        $ord_sn = I('ord_sn');
        if ($ordinfoModel->where("ord_sn = '{$ord_sn}'")->save()) {
            $this->success('成功发货', U('/Admin/order/checkorder',array('is_send'=>0)), 1);
        }
    }
}