<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $coo = array('jj' =>1, 'hh' =>2);
        cookie('num',$coo);
        $catModel = D('Admin/Cat');
        //最近浏览
        $his = array_reverse(session('history'),true);
        $this->assign('his',$his);
        //栏目表
        $this->assign('cattree',$catModel->gettree());

        //热销
        $goodsModel =  D('Admin/goods');
        $hot = $goodsModel->field('goods_id,goods_name,shop_price,thumb_img,goods_img,market_price')->where('is_hot=1')->order('click_count desc, goods_id desc')->limit('0,4')->select();
        $this->assign('hot',$hot);

        //精品推荐
        $best = $goodsModel->field('goods_id,goods_name,shop_price,thumb_img,goods_img,market_price')->where('is_best=1')->order('click_count desc, goods_id desc')->limit('0,4')->select();
        $this->assign('best',$best);


        //新品上市
        $new = $goodsModel->field('goods_id,goods_name,shop_price,thumb_img,goods_img,market_price')->where('is_new=1')->order('click_count desc, goods_id desc')->limit('0,4')->select();
        $this->assign('new',$new);
        $this->display();
    }
}
