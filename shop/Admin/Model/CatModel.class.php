<?php
namespace Admin\Model;
use Think\Model;

class CatModel extends Model{

    public function gettree()
    {
        $t = S('cattree');
        if(!$t){
            $t = $this->gettree2();
            S('cattree',$t,86400);
        }
        return $t;
    }

    public function gettree2($p = 0 ,$lv=0){
        $goodsModel = D('Admin/Goods');
        $t = array();
        foreach($this->order('cat_id asc')->select() as $k=>$v){
            if($v['parent_id'] == $p){
                $v['lv'] = $lv;
                $where_in      = implode(',' , findall($v['cat_id']));
                $map['cat_id'] = array('in',$where_in);
                $v['num'] = $goodsModel->where($map)->count();
                $t[] = $v;
                //检查
                $t = array_merge($t,$this->gettree2($v['cat_id'],$lv+1));
            }
        }
        return $t;
    }


}
