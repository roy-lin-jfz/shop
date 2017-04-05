<?php
namespace Admin\Model;
use Think\Model\RelationModel;

class GoodsModel extends RelationModel{
    // 关联模型设置
    public $_link = array(
        'comment' => self::HAS_MANY,
    );
    // public $insertFields = 'goods_name,goods_sn';

    public $_auto = array(
        // array(完成字段1,完成规则,[完成条件,附加规则]),
        array('add_time','time',1,'function'),
         array('last_update','time',2,'function'),
    );
    public $_validate = array(
        // array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        array('goods_name','3,12','商品名为3-12个字符','1','length','3'),
        array('goods_sn','','货号不该重复','1','unique','1'),
        array('shop_price','double','请输入正确价格','1','','3'),
        array('market_price','double','请输入正确价格','1','','3'),
        array('goods_weight','double','请输入正确重量','1','','3'),
        array('goods_desc','require','请输入商品详细信息','1','','3'),
        array('goods_number','number','请输入正确商品数量','1','','3'),
    );

}
