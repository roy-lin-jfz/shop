<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
    // public $gm;
    // public function __construct(){
    //     parent::__construct();
    //     $this->gm = D('goods');
    // }
    //商品添加
    public function goodsadd(){
        $goodsModel = D('goods');
        if(IS_POST){
            if(!$goodsModel->create($_POST)){
                echo $goodsModel->getError();
                exit;
            }

            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     './Upload/'; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            // 上传文件
            $info   =   $upload->upload();
            // show_bug($info);
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功
                $img_path = '/Upload/'.$info['goods_img']['savepath'];
                $img_name = $info['goods_img']['savename'];
                //传入原图路径
                $goodsModel->goods_img = $img_path . $img_name;
                $image = new \Think\Image();
                $image->open('.' . $img_path . $img_name);
                // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
                $thumb_path = $img_path . 'Thumb/';
                if(create_thumb_dir($thumb_path)) {
                    $thumb_img = $thumb_path . $img_name;
                    $image->thumb(230, 230)->save('.' . $thumb_img);
                    //传入缩略图路径
                    $goodsModel->thumb_img = $thumb_img;
                }else {
                    $this->error('生成缩略图路径失败','',1);
                }
            }
            // show_bug($goodsModel);exit;
            echo $goodsModel->add()?'1':'0';
            // $this->success('添加商品成功','',1);
        }
        $catModel = D('Cat');
        $this->assign('catlist',$catModel->gettree());
        $this->display();
    }

    //商品列表
    public function goodslist(){

        $goodsModel = D('goods');
        $count      = $goodsModel->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $goodsModel->order('goods_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list = change_yesorno($list);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    public function del(){
        $goodsModel = D('goods');
        $goodsModel->delete(I('get.goods_id'));
        $this->redirect('admin/goods/goodslist');
    }



}
