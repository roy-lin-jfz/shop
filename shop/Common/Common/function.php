<?php
//生成随机订单号
//用于OrdinfoModel
function ord_sn() {
    $foot = str_pad(rand(0,9999),4,"0",STR_PAD_LEFT);
    $head = date(Ymd,time());
    $f = $head . $foot;
    return $f;
}

function jm($a){
    return md5($a);
}

function che(){
    // return 0;
    // return C('COO_KIE');exit;
    return jm(cookie('username').C('COO_KIE')) === cookie('key');
}

function adminche(){
    // return 0;
    // return C('COO_KIE');exit;
    return jm(cookie('adminname').C('COO_KIE')) === cookie('adminkey');
}

function defined_gwc() {
    // echo cookie('gwc_num');
    if(cookie('gwc_num') != 0)
        return true;
    else
        return false;
}

/**
* 创建目录 缩略图路径
* @root：绝对路径的根路径
*/
//用于Admin/goodsadd
function create_thumb_dir($path) {

	$root = dirname(dirname(__DIR__));
	$file_path = $root . $path;
	if(is_dir($file_path) || mkdir($file_path , 0777 , true)) {
		return ture;
	} else {
		return false;
	}
}


function change_state($list) {
	if($list == '1')
		$list = 'yes';
	else
		$list = 'no';
	return $list;
}
//二维数组foreach改变的值不会传回原数组
//与上个函数联系，用于Admin/goodslist
function change_yesorno($list) {
	for($i=0; $i < count($list); $i++) {
		$list[$i][is_on_sale] = change_state($list[$i][is_on_sale]);
		$list[$i][is_best] = change_state($list[$i][is_best]);
		$list[$i][is_new] = change_state($list[$i][is_new]);
		$list[$i][is_hot] = change_state($list[$i][is_hot]);
	}
	return $list;
}

//查找此ID的所有子孙，用于Home/cat
function findall($cat_id) {
    $catModel = D('Admin/cat');
    $fm = array();
    $fm[] = $cat_id;
    foreach($catModel->select() as $k => $v) {
        if($v['parent_id'] == $cat_id) {
                $fm = array_merge($fm,findall($v['cat_id']));
        }
    }
    return $fm;
}

//导航栏面包屑
//用于Home/cat & Home/goods
function mbx($cat_id){
    $catModel = D("Admin/Cat");
    $fm = array();
    while($cat_id > 0){
        foreach ($catModel->select() as $k => $v) {
            if($cat_id == $v['cat_id']){
                $fm[] = $v;
                $cat_id = $v['parent_id'];
                break;
            }
        }
    }
    return array_reverse($fm);
}

// 历史记录
// 添加于Home/goods，用于Home/index & Home/cat
function history($goodsinfo){
    $goods_name = $goodsinfo['goods_name'];
    $shop_price = $goodsinfo['shop_price'];
    $goods_id = $goodsinfo['goods_id'];
    $history = session('?history')?session('history'):array();
    $goods = array(
        'goods_name' =>$goods_name,
        'shop_price' =>$shop_price,
    );
    if(in_array($goods, $history)) {
    	unset($history[$goods_id]);
    }
    $history[$goods_id] = $goods;
    if(count($history) > 5){

        $k = key($history);
        unset($history[$k]);
    }
    session('history',$history);
}

// 盐
// 用于Home/user/reg
function salt(){
    $str = 'asdfjlaskjf09[uuqtoi*&^*43hq5kja9430597(*&)]';
    return substr(str_shuffle($str),0,8);
}
