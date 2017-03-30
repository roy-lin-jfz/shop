<?php
/**
 * Created by PhpStorm.
 * User: roy.lin
 * Date: 2017/3/30
 * Time: 13:52
 */
namespace Home\Model;
use Think\Model;
class ReceiveModel extends Model{
    public $_validate = array(
        //  array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        array('name','2,5','名字长度2-5','1','length',3),
        array('email','email','邮箱格式不对','1','',3),
        array('mobile','11','请输入正确的电话号码','1','length',3),
        array('address','require','请输入地址信息','1','','3'),

//        array('username','','用户名已经存在了','1','unique',3),
    );
}