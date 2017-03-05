<?php
namespace Admin\Model;
use Think\Model;

class CatModel extends Model{
    public function gettree($p = 0 ,$lv=0){
        $t = array();
        foreach($this->select() as $k=>$v){
            if($v['parent_id'] == $p){
                $v['lv'] = $lv;
                $t[] = $v;
                //检查
                $t = array_merge($t,$this->gettree($v['cat_id'],$lv+1));
            }
        }
        return $t;
    }


}
