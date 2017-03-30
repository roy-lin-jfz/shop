<?php
namespace Home\Model;
use Think\Model;
class OrdinfoModel extends Model{
	public $_auto = array(
	    // array(完成字段1,完成规则,[完成条件,附加规则]),
	    array('ordtime','time',3,'function'),
	    array('ord_sn','ord_sn',3,'function'),
	);

    public $_validate = array(
        //  array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        array('xm','2,5','名字长度2-5','1','length',3),
		array('email','email','邮箱格式不对','1','',3),
        array('mobile','11','请输入正确的电话号码','1','length',3),
    );
}
