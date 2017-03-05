<?php
namespace Home\Model;
use Think\Model\RelationModel;
 class CommentModel extends RelationModel{
     public $_validate = array(
        array('content','3,200','评论长度为3-200','1','length','3'),
        array('email','email','请输入正确的邮箱地址','1','regex','3'),
     );
 }
