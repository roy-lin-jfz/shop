<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function comment(){
        if(IS_POST){
            $_POST['pubtime'] = time();
            $commentModel = D('comment');
            $con = $_POST['content'];
            // show_bug($con);
            if(!$commentModel->create()){
                echo $commentModel->getError();
                exit;
            }
            // show_bug($commentModel->content);
            $commentModel->content = $con;
            // show_bug($commentModel->content);
            // exit;
            if($commentModel->add()){
                $this->success('评论成功','','1');
            }else {
                $this->error('评论失败','','1');
            }
        }
    }

    public function goods(){
        $userModel = D('User');
        $goods = D('Admin/goods');
        $goods_id = I('get.goods_id');
        if(che()) {
            $userinfo = $userModel->where(array('username'=>cookie(username)))->find();
            $this->assign('userinfo',$userinfo);
        }
        $goodsinfo = $goods->find($goods_id);
        if($goodsinfo){
            $history = history($goodsinfo);

            //点击量加一
            $data['click_count'] = $goodsinfo['click_count'] + 1;
            $goods->where("goods_id = '{$goods_id}'")->save($data);
        }
        // 关联查询
        $commentinfo = $goods->relationGet('comment');

        $commentinfo = array_reverse($commentinfo);
        $count      = count($commentinfo);// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $commentinfo = array_chunk($commentinfo, $Page->listRows);
        $list = $commentinfo[$Page->firstRow / $Page->listRows];
        // $list = $goodsModel->order('goods_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        // show_bug($commentinfo);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('comment',$list);


        $this->assign('mbx',mbx($goodsinfo['cat_id']));
        $this->assign('goodsinfo',$goodsinfo);
        $this->display();
    }
   
    //添加购物车
    public function gwc(){
        $goodsinfo = D('Admin/Goods')->find(I('get.goods_id'));
        $tool = \Home\Tool\AddTool::getIns();
        $tool->add($goodsinfo['goods_id'],$goodsinfo['goods_name'],$goodsinfo['shop_price'],$goodsinfo['market_price']);
        $this->success('添加成功，请到购物车中买单','',0);
    }
}
