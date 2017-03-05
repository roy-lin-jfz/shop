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
<link href="/bool/shop/Public/Home/css/style.css" rel="stylesheet" type="text/css">
<link rel="alternate" type="application/rss+xml" title="RSS|ECSHOP演示站 - " href="./feed.php">
</head>
<body>
<div class="head-bar clearfix">
<div class="block1">
    <div class="site-bar"><font id="ECS_MEMBERZONE">
        <?php if(che()): ?>您好:<font color="red">
                <b><?php echo (cookie('username')); ?></b></font>&nbsp;欢迎光临本店！
                | <a href="<?php echo U('Home/user/logout');?>">退出</a>
                <?php else: ?>
                <a href="<?php echo U('Home/user/login');?>" style="color:#50884b">登录</a> |
       <a href="<?php echo U('Home/user/reg');?>" style="color:#50884b">免费注册</a><?php endif; ?>


    </font></div>
      <ul class="sitelinks">
        <li><a href="./flow.php.htm"></a><a href="./flow.php.htm" title="查看购物车">购物车有 <?php echo ($num); ?> 件</a></li>
        <li> <a href="./flow.php.htm">查看购物车</a> </li>
        <li style=" margin-top:0px;*margin-top:-2px;">|</li>
        <li> <a href="./pick_out.php.htm">选购中心</a> </li>
        <li style=" margin-top:0px;*margin-top:-2px;">|</li>
        <li> <a href="./article_cat.php-id=3.htm">帮助中心</a> </li>
      </ul>
  </div></div>
<div class="page-header clearfix">
  <div class="block1 clearfix" style="position:relative;">
    <div class="logo fl"><a href="./index.php.htm" title=""><img src="/bool/shop/Public/Home/images/logo.gif" width="311" height="55" alt=""></a></div>
    <div class="btMap">
      <div class="search ">
        <form id="searchForm" name="searchForm" method="get" action="">
          <div class="sideShadow"></div>
          <input type="text" name="keywords" class="keyWord" value="" id="keyword" onclick="javascript:this.value=&#39;&#39;;this.style.color=&#39;#333333&#39;;">
          <input type="submit" class="submit" value="">
        </form>
      </div>
      <div class="guanjianzi">
        <ul>
          <li>热门搜索：</li>
          <li><a href="">大屏手机</a></li>
          <li><a href="">智能机</a></li>
          <li><a href="">茉莉花茶</a></li>
          <li><a href="">龙井</a></li>
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
  <div class="allMenu fl"> <a href="./index.php.htm" title="" style="font-size:15px;" class="index current">首页</a>
    <a href="" style="font-size:15px;" title="GSM手机">GSM手机</a>
    <a href="" style="font-size:15px;" title="双模手机">双模手机</a>
    <a href="" style="font-size:15px;" title="手机配件">手机配件</a>
    <a href="" style="font-size:15px;" title="团购商品">团购商品</a>
    <a href="" style="font-size:15px;" title="优惠活动">优惠活动</a>
  </div>
</div>
</div>