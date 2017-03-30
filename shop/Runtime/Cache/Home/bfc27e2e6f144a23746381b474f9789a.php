<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0153)./index.htm -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Generator" content="ECSHOP v2.7.3">

<meta name="Keywords" content="ECSHOP演示站">
<meta name="Description" content="ECSHOP演示站">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<title>ECSHOP演示站 - </title>
<link rel="shortcut icon" href="./favicon.ico">
<link rel="icon" href="./animated_favicon.gif" type="image/gif">
<link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css">
<link rel="alternate" type="application/rss+xml" title="RSS|ECSHOP演示站 - " href="./feed.php">
</head>
<body>
<div class="head-bar clearfix">
<div class="block1">
    <div class="site-bar"><font id="ECS_MEMBERZONE">
        <?php if(che()): ?>您好:<font color="red">
                <b><a href="<?php echo U('Home/user/info');?>"><?php echo (cookie('username')); ?></a></b></font>&nbsp;欢迎光临本店！
                | <a href="<?php echo U('Home/user/logout');?>">退出</a>
                <?php else: ?>
                <a href="<?php echo U('Home/user/login');?>" style="color:#50884b">登录</a> |
       <a href="<?php echo U('Home/user/reg');?>" style="color:#50884b">免费注册</a><?php endif; ?>


    </font></div>
      <ul class="sitelinks">
        <a href="./flow.php.htm"></a><a href="<?php echo U('Home/order/checkout');?>" title="查看购物车">购物车有
        <?php if(defined_gwc()): echo (cookie('gwc_num')); ?>
        <?php else: ?>0<?php endif; ?>
        件</a> |
         <a href="<?php echo U('Home/order/checkout');?>">查看购物车</a>
        <!-- <li style=" margin-top:0px;*margin-top:-2px;">|</li> -->
        <!-- <li> <a href="./pick_out.php.htm">选购中心</a> </li> -->
        |
          <a href="<?php echo U('Home/order/checkorder');?>">查看订单</a>
      </ul>
  </div></div>
<div class="page-header clearfix">
  <div class="block1 clearfix" style="position:relative;">
    <div class="logo fl">
        <a href="<?php echo U('/');?>" title=""><img src="/Public/Home/images/logo.gif" width="311" height="55" alt=""></a></div>
    <div class="btMap">
      <div class="search ">
        <form id="searchForm" name="searchForm" method="get" action="<?php echo U('Home/cat/select');?>">
          <div class="sideShadow"></div>
          <input type="text" name="keywords" class="keyWord" value="请输入关键字" id="keyword" onclick="javascript:this.value=&#39;&#39;;this.style.color=&#39;#333333&#39;;">
          <input type="submit" class="submit" value="">
        </form>
      </div>
      <div class="guanjianzi">
        <ul>
          <li>热门搜索：</li>
          <li><a href="<?php echo U('Home/cat/select',array('keywords'=>'苹果6S'));?>">苹果6S</a></li>
          <li><a href="<?php echo U('Home/cat/select',array('keywords'=>'耳机'));?>">耳机</a></li>
          <li><a href="<?php echo U('Home/cat/select',array('keywords'=>'诺基亚'));?>">诺基亚</a></li>
          <li><a href="<?php echo U('Home/cat/select',array('keywords'=>'三星'));?>">三星</a></li>
        </ul>
      </div>
      </div>
       <div class="tel">
        <p>400-8899-379</p>
      </div>
    </div>
  </div>
<div class="globa-nav clearfix" style="position:relative">
<div class="block1">
  <div class="allMenu fl"> <a href="<?php echo U('/');?>" title="" style="font-size:15px;" class="index current">首页</a>
    <a href="<?php echo U('Home/cat/cat',array('cat_id'=>3));?>" style="font-size:15px;" title="GSM手机">GSM手机</a>
    <a href="<?php echo U('Home/cat/cat',array('cat_id'=>5));?>" style="font-size:15px;" title="双模手机">双模手机</a>
    <a href="<?php echo U('Home/cat/cat',array('cat_id'=>6));?>" style="font-size:15px;" title="手机配件">手机配件</a>
  </div>
</div>
</div>





<div class="blank"></div>
<div class="block2">
    <div class="blank"></div>
    <form action="<?php echo U('Home/user/update');?>" method="post" name="theForm" >
        <div class="goodsTitle clearfix" style="background:#f6f6f6; border:#E3E3E3 solid 1px; border-bottom:none;">
            <span class="fl">用户信息</span></div>
        <table class="floatTable" align="center" bgcolor="#e3e3e3" border="0" cellpadding="5" cellspacing="1" width="100%">
            <tbody>
            <tr>
                <td bgcolor="#ffffff">用户名:</td>
                <td bgcolor="#ffffff"><input type="text" name="username" value="<?php echo ($userinfo['username']); ?>"/></td>
            </tr>
            <tr>
                <td bgcolor="#ffffff">手机:</td>
                <td bgcolor="#ffffff"><input type="text" name="phone" value="<?php echo ($userinfo['phone']); ?>"/></td>
            </tr>
            <tr>
                <td bgcolor="#ffffff">电子邮件地址:</td>
                <td bgcolor="#ffffff"><input type="text" name='email' value="<?php echo ($userinfo['email']); ?>" /></td>
            </tr>
            <tr>
                <td bgcolor="#ffffff">密码:</td>
                <td bgcolor="#ffffff"><input name="password" type="password" id="password1" class="inputBg"></td>
            </tr>
            <tr>
                <td bgcolor="#ffffff">确认密码:</td>
                <td bgcolor="#ffffff"><input name="repwd" type="password" id="conform_password" class="inputBg"></td>
            </tr>
            </tbody></table>
        <div style="margin:8px auto;" align="center">
            <input src="/Public/Home/images/tijiao.png" type="image" style="width:170px; height:35px">
            <input name="id" value="<?php echo ($userinfo['user_id']); ?>" type="hidden">
        </div>
    </form>
    <form action="<?php echo U('Home/user/info');?>" method="post" name="theForm" id="theForm" >
        <div class="goodsTitle clearfix" style="background:#f6f6f6; border:#E3E3E3 solid 1px; border-bottom:none;">
            <span class="fl">收货人信息</span>
        </div>
        <table class="floatTable" align="center" bgcolor="#e3e3e3" border="0" cellpadding="5" cellspacing="1" width="100%">
            <tbody>
            <tr>
                <td bgcolor="#ffffff">收货人姓名:</td>
                <td bgcolor="#ffffff"><input type="text" name="name" value="<?php echo ($receiveinfo['name']); ?>"/></td>
                <td bgcolor="#ffffff">电子邮件地址:</td>
                <td bgcolor="#ffffff"><input type="text" name='email' value="<?php echo ($receiveinfo['email']); ?>"/></td>
            </tr>
            <tr>
                <td bgcolor="#ffffff">手机:</td>
                <td bgcolor="#ffffff"><input type="text" name="mobile" value="<?php echo ($receiveinfo['mobile']); ?>"/></td>
                <td bgcolor="#ffffff">邮政编码:</td>
                <td bgcolor="#ffffff"><input type="text" name='postcode' value="<?php echo ($receiveinfo['postcode']); ?>"/></td>
            </tr>
            <tr>
                <td bgcolor="#ffffff">收货地址:</td>
                <td bgcolor="#ffffff"><input type="text" name="address" value="<?php echo ($receiveinfo['address']); ?>"/></td>
                <td bgcolor="#ffffff">最佳送货时间:</td>
                <td bgcolor="#ffffff"><input type="text" name='receive_time' value="<?php echo ($receiveinfo['receive_time']); ?>"/></td>
            </tr>
            </tbody></table>

        <div style="margin:8px auto;" align="center">
            <input src="/Public/Home/images/tijiao.png" type="image" style="width:170px; height:35px">
            <!--<input name="money" value="<?php echo ($shop_total); ?>" type="hidden">-->
        </div>
    </form>
</div>

<div class="pageFooter">
  <div class="artBox ">
    <div class="artList">
      <div class="list">
        <h4>新手上路 </h4>
        <ul>
          <li><a href="" target="_blank" title="售后流程">售后流程</a> </li>
          <li><a href="" target="_blank" title="购物流程">购物流程</a> </li>
          <li><a href="" target="_blank" title="订购方式">订购方式</a> </li>
        </ul>
      </div>
      <div class="list">
        <h4>手机常识 </h4>
        <ul>
          <li><a href="" target="_blank" title="如何分辨原装电池">如何分辨原装电池</a> </li>
          <li><a href="" target="_blank" title="如何分辨水货手机 ">如何分辨水货手机</a> </li>
          <li><a href="" target="_blank" title="如何享受全国联保">如何享受全国联保</a> </li>
        </ul>
      </div>
      <div class="list">
        <h4>配送与支付 </h4>
        <ul>
          <li><a href="" target="_blank" title="货到付款区域">货到付款区域</a> </li>
          <li><a href="" target="_blank" title="配送支付智能查询 ">配送支付智能查询</a> </li>
          <li><a href="" target="_blank" title="支付方式说明">支付方式说明</a> </li>
        </ul>
      </div>
      <div class="list">
        <h4>会员中心</h4>
        <ul>
          <li><a href="" target="_blank" title="资金管理">资金管理</a> </li>
          <li><a href="" target="_blank" title="我的收藏">我的收藏</a> </li>
          <li><a href="" target="_blank" title="我的订单">我的订单</a> </li>
        </ul>
      </div>
      <div class="list">
        <h4>服务保证 </h4>
        <ul>
          <li><a href="" target="_blank" title="退换货原则">退换货原则</a> </li>
          <li><a href="" target="_blank" title="售后服务保证 ">售后服务保证</a> </li>
          <li><a href="" target="_blank" title="产品质量保证 ">产品质量保证</a> </li>
        </ul>
      </div>
      <div class="list">
        <h4>联系我们 </h4>
        <ul>
          <li><a href="" target="_blank" title="网站故障报告">网站故障报告</a> </li>
          <li><a href="" target="_blank" title="选机咨询 ">选机咨询</a> </li>
          <li><a href="" target="_blank" title="投诉与建议 ">投诉与建议</a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="block tc" style=""> <img src="/Public/Home/images/serviceImg1.jpg"> </div>
<div class="block tc" style="margin-bottom:20px;">
  <a href="">免责条款</a>|
  <a href="">隐私保护</a>|
  <a href="">咨询热点</a>|
  <a href="">联系我们</a>|
  <a href="">公司简介</a>|
  <a href="">批发方案</a>|
  <a href="">配送方式</a>
<br>
<br>
   <a href="" style="display:none;">68ECSHOP模版中心</a>
<br>
  共执行 5 个查询，用时 0.021133 秒，在线 17 人，Gzip 已禁用，占用内存 3.415 MB<img src="./api/cron.php-t=1452023217" alt="" style="width:0px;height:0px;"><br>
</div>
</body>
</html>