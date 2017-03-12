<?php
namespace Admin\Model;

use Think\Model;

class AdminModel extends Model
{
    public $_validate = array(
        //  array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        array('username', '2,10', '名字长度2-10', '1', 'length', 3),
        array('email', 'email', '邮箱格式不对', '1', '', 3),
        array('password', '6,32', '密码最少6位数', '1', 'length', 3),
        array('repwd', 'password', '两次密码不一致', '1', 'confirm', 3),
        array('username', '', '用户名已经存在了', '1', 'unique', 3),
    );
}
