<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
//        $coo = array('jj' =>1, 'hh' =>2);
//        cookie('num',$coo);
        $catModel = D('Admin/Cat');
        //最近浏览
        $his = array_reverse(session('history'),true);
        $this->assign('his',$his);
        //栏目表
        $this->assign('cattree',$catModel->gettree());

        $goodsModel =  D('Admin/goods');

        $hot_login = [];
        $best_login = [];
        $new_login = [];
        //获取用户usercatlog
        $userModel = D('User');
        if (che()) {
            $userinfo = $userModel->where(array('username' => cookie('username')))->find();
            $UsercatlogModel = D('Usercatlog');
            $usercatlog = $UsercatlogModel->field('cat_id')->where(array('user_id' => $userinfo['user_id']))->order('ctime desc')->limit(2)->select();
            $cats=[];
            foreach ($usercatlog as $item){
                foreach (findall($item['cat_id']) as $value){
                    $cats[] = $value;
                }
            }
            $cats = array_unique($cats);
            $where_in      = implode(',' , $cats);
            $map['cat_id'] = array('in',$where_in);

            //热销
            $hot_login = $goodsModel->field('goods_id,goods_name,shop_price,thumb_img,goods_img,market_price')->where(array('is_on_sale'=>'1'))->where($map)->where('is_hot=1')->order('click_count desc, goods_id desc')->limit('0,4')->select();

            //精品推荐
            $best_login = $goodsModel->field('goods_id,goods_name,shop_price,thumb_img,goods_img,market_price')->where(array('is_on_sale'=>'1'))->where($map)->where('is_best=1')->order('click_count desc, goods_id desc')->limit('0,4')->select();

            //新品上市
            $new_login = $goodsModel->field('goods_id,goods_name,shop_price,thumb_img,goods_img,market_price')->where(array('is_on_sale'=>'1'))->where($map)->where('is_new=1')->order('click_count desc, goods_id desc')->limit('0,4')->select();
        }

        //热销
        if(count($hot_login) < 4){
            $i = 4-count($hot_login);
            $hot_nologin = $goodsModel->field('goods_id,goods_name,shop_price,thumb_img,goods_img,market_price')->where(array('is_on_sale'=>'1'))->where('is_hot=1')->order('click_count desc, goods_id desc')->limit('0,4')->select();
            for($j = 0;$j<4;$j++){
                if($i && !in_array($hot_nologin[$j],$hot_login)){
                    $hot_login[]=$hot_nologin[$j];
                    $i--;
                }
            }
        }
        $this->assign('hot',$hot_login);

        //精品推荐
        if(count($best_login) < 4){
            $i = 4-count($best_login);
            $best_nologin = $goodsModel->field('goods_id,goods_name,shop_price,thumb_img,goods_img,market_price')->where(array('is_on_sale'=>'1'))->where('is_best=1')->order('click_count desc, goods_id desc')->limit('0,4')->select();
            for($j = 0;$j<4;$j++){
                if($i && !in_array($best_nologin[$j],$best_login)){
                    $best_login[]=$best_nologin[$j];
                    $i--;
                }
            }
        }
        $this->assign('best',$best_login);

        //新品上市
        if(count($new_login) < 4){
            $i = 4-count($new_login);
            $new_nologin = $goodsModel->field('goods_id,goods_name,shop_price,thumb_img,goods_img,market_price')->where(array('is_on_sale'=>'1'))->where('is_new=1')->order('click_count desc, goods_id desc')->limit('0,4')->select();
            for($j = 0;$j<4;$j++){
                if($i && !in_array($new_nologin[$j],$new_login)){
                    $new_login[]=$new_nologin[$j];
                    $i--;
                }
            }
        }
        $this->assign('new',$new_login);
        $this->display();
    }
}
