<?php
namespace Home\Controller;
use Think\Controller;
class CatController extends Controller {
    public function cat(){
        //最近浏览
        $his = array_reverse(session('history'),true);
        $this->assign('his',$his);

        $goodsModel    = D('Admin/goods');
        //查找cat_id范围
        $where_in      = implode(',' , findall(I('cat_id')));
        $map['cat_id'] = array('in',$where_in);
        //分页s
        $count         = $goodsModel->where($map)->count();
//        show_bug($count);

        $Page          = new \Think\Page($count,12);
        $show          = $Page->show();
        $goodsList     = $goodsModel->field('goods_id,goods_name,shop_price,thumb_img,goods_img,market_price')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
        //导航栏
        $this->assign('mbx',mbx(I('cat_id')));
        //分页数据
        $this->assign('count',$count);
        $this->assign('page',$show);
        //商品数据
        $this->assign('goodslist',$goodsList);

        $catModel = D('Admin/cat');
        $this->assign('cattree',$catModel->gettree());
        $this->display();
    }

    public function select(){
        //最近浏览
        $his = array_reverse(session('history'),true);
        $this->assign('his',$his);

        $goodsModel    = D('Admin/goods');
        //查找cat_id范围
        $keywords      = I('keywords');
        $map['goods_name'] = array('like','%'.$keywords.'%');
        //分页s
        $count         = $goodsModel->where($map)->count();
        $Page          = new \Think\Page($count,12);
        $show          = $Page->show();
        $goodsList     = $goodsModel->field('goods_id,goods_name,shop_price,thumb_img,goods_img,market_price')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
//        show_bug($show);exit;
        //导航栏
        $this->assign('keywords',$keywords);
        //分页数据
        $this->assign('count',$count);
        $this->assign('page',$show);
        //商品数据
        $this->assign('goodslist',$goodsList);

        $catModel = D('Admin/cat');
        $this->assign('cattree',$catModel->gettree());
        $this->display();
    }
}
