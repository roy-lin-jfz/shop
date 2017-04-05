<?php
namespace Home\Controller;
use Think\Controller;
class CatController extends Controller {
    public function cat(){//ID分类搜索

        $cat_id = I('cat_id');
        if (!$cat_id) {
            $this->redirect('home/index/index');
        }

        //最近浏览
        $his = array_reverse(session('history'),true);
        $this->assign('his',$his);

        $goodsModel    = D('Admin/goods');
        //查找cat_id范围
        $where_in      = implode(',' , findall($cat_id));
        $map['cat_id'] = array('in',$where_in);
        //分页s
        $count         = $goodsModel->where($map)->count();
//        show_bug($count);

        $Page          = new \Think\Page($count,12);
        $show          = $Page->show();
        $goodsList     = $goodsModel->field('goods_id,goods_name,shop_price,thumb_img,goods_img,market_price')->where(array('is_on_sale'=>'1'))->where($map)->order('click_count desc, goods_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        //导航栏
        $this->assign('mbx',mbx($cat_id));
        //分页数据
        $this->assign('count',$count);
        $this->assign('page',$show);
        //商品数据
        $this->assign('goodslist',$goodsList);

        $catModel = D('Admin/cat');
        $this->assign('cattree',$catModel->gettree());

        //添加查询记录
        $userModel = D('User');
        if (che()) {
            $userinfo = $userModel->where(array('username' => cookie('username')))->find();
            // show_bug($userinfo);
            $UsercatlogModel = D('Usercatlog');
            $usercatlog = $UsercatlogModel->where(array('user_id' => $userinfo['user_id'], 'cat_id' => $cat_id))->order('ctime desc')->limit(1)->select();
            if (empty($usercatlog) || time() - $usercatlog[0]['ctime'] > 60 * 60 * 24) {
                //记录
                $data['user_id'] = $userinfo['user_id'];
                $data['cat_id'] = $cat_id;
                $data['ctime'] = time();
                if ($data['cat_id'] != 0)
                    $UsercatlogModel->add($data);
            }
        }

        $this->display();
    }

    public function select(){//关键字搜索
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
        $goodsList     = $goodsModel->field('goods_id,goods_name,shop_price,thumb_img,goods_img,market_price')->where(array('is_on_sale'=>'1'))->where($map)->order('click_count desc, goods_id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
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
