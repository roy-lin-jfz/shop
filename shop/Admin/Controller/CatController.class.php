<?php
namespace Admin\Controller;
use Think\Controller;
class CatController extends Controller {
    public function cateadd(){
        if(IS_POST){
            // show_bug($_POST);exit;
            $catModel = D('Cat');
            if($catModel->add($_POST)){
                $this->redirect('admin/cat/catelist');exit;
            }
        }
        $catModel = D('cat');
        $cat = $catModel->where('parent_id = 0')->select();
        $this->assign('cat',$cat);
        $this->display();
    }
    public function catelist(){
        $catModel = D('Cat');
        $this->assign('catlist',$catModel->gettree());
        $this->display();
    }
    public function cateedit(){

        $catModel = D('Cat');
        if(IS_POST){
            $catModel = D('Cat');
            $cat_id = I('cat_id');
            if($catModel->where('cat_id='.$cat_id)->save($_POST)){
                $this->redirect('admin/cat/catelist');
                exit;
            }
        }

        $catModel->gettree();
        $this->assign('gettree',$catModel->gettree());
        $this->assign('catinfo',$catModel->find(I('cat_id')));
        $this->display();
    }

    public function catedel(){
        $catModel = D('Cat');
        if($catModel->delete(I('get.cat_id'))){
            $this->redirect('admin/cat/catelist');exit;
        }
    }
}
