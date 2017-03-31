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





<div style="position:relative; width:1190px; margin:0 auto;"><object width="1190" height="360"><img src="/Public/Home/images/banner.jpg" style='margin:0 0 0 250px;' alt="" />
</object>
<div class="blank"></div> </div>
<div class="blank" style="position:relative; width:1190px; margin:0 auto;">
 <div style=" width:230px; position:absolute;top:-373px; *top:-368px;left:0; height:359px; background:#fff;">
<h1 style="background:#6aa724; height:27px; line-height:27px; padding-left:10px;"><a href=""><font style="color:#fff; font-size:14px;">所有分类</font></a></h1>
<div class="mod1 mod2 blank" id="historybox" style="background:#fff;">
<span class="lb"></span><span class="rb"></span>
<div class="cagegoryCon clearfix">
    <?php if(is_array($cattree)): foreach($cattree as $key=>$v): if($v["lv"] == 0): ?><dl>
        <dt><a href="<?php echo U('Home/cat/cat',array('cat_id'=>$v[cat_id]));?>"><?php echo ($v["cat_name"]); ?></a></dt>
        <dd class="clearfix">
            <?php if(is_array($cattree)): foreach($cattree as $key=>$s): if($v[cat_id] == $s[parent_id]): ?><p class=""><a href="<?php echo U('Home/cat/cat',array('cat_id'=>$s[cat_id]));?>" title="<?php echo ($s["cat_name"]); ?>" class="txtdot"><?php echo ($s["cat_name"]); ?></a></p><?php endif; endforeach; endif; ?>

        </dd>
      </dl><?php endif; endforeach; endif; ?>
</div>
<div class="blank"></div>
</div>
</div></div>
<div class="block1 clearfix">
  <div id="pageLeft" class="fr">
    <div class="w230 blank">
      <div class="mod1">
        <h1 class="mod1tit">商店公告</h1>
        <div class="mod1con shop_notice">
<h1 class="mod2tit" style="height:0"><a href="" class="more" style="margin-top:3px;">更多</a></h1>
  <div class="mod2con clearfix">
    <ul>
      <li style="width:250px; margin-right:20px; display:inline; height:25px; line-height:25px;" class="fl"><a href="" title="产品质量保证 " class="txtdot">产品质量保证</a></li>
      <li style="width:250px; margin-right:20px; display:inline; height:25px; line-height:25px;" class="fl"><a href="" title="如何分辨原装电池" class="txtdot">如何分辨原装电池</a></li>
      <li style="width:250px; margin-right:20px; display:inline; height:25px; line-height:25px;" class="fl"><a href="" title="投诉与建议 " class="txtdot">投诉与建议</a></li>
      <li style="width:250px; margin-right:20px; display:inline; height:25px; line-height:25px;" class="fl"><a href="" title="选机咨询 " class="txtdot">选机咨询</a></li>
      <li style="width:250px; margin-right:20px; display:inline; height:25px; line-height:25px;" class="fl"><a href="" title="网站故障报告" class="txtdot">网站故障报告</a></li>
    <ul>
    </ul>
    </ul>
  </div>
<script type="text/javascript">divheight("catArticles");</script> </div>
      </div>
    </div>
    <div class="w230" style="">
<div class="ads">
<table cellpadding="0" cellspacing="0">
<tbody><tr><td><a href="" target="_blank"><img src="/Public/Home/images/1370400501175025752.jpg" width="230" height="100" border="0"></a></td></tr>
</tbody></table></div> </div>

    <div class="w230">
<h1 class="mod2tit" style="background:url(themes/68ecshop_hechafree/images/sdgg.gif) repeat-x; height:27px; color:#000">
    最近浏览
</h1>

<div class="mod1 mod2 blank" id="topbox">
	<span class="lb"></span><span class="rb"></span>
	 <ul id="top10">
         <?php if(is_array($his)): foreach($his as $k=>$h): ?><li>
			 <div class="first">
			  <div class="fl">
				<font style="color:#F00; font-weight:bold"></font> <a href="<?php echo U('Home/goods/goods/',array('goods_id'=>$k));?>" title=""><?php echo ($h['goods_name']); ?></a>
				</div>
				<div class="fr"><b class="f1">￥<?php echo ($h['shop_price']); ?>元</b></div>
			 </div>
			 <!-- <div class="last">
			  <a href=""><img src="/Public/Home/images/3_thumb_G_1368081034405.jpg" alt="" align="left"></a>
				<b class="f1">1。</b> <a href="" title=""><b>ECSHOP模板中心68ecs...</b></a><br>
				本店售价：<b class="f1">￥68元</b><br>
			 </div> -->
			</li><?php endforeach; endif; ?>
		 </ul>
</div>
</div>
    <div class="w230">
<h1 class="mod2tit" style=" position:relative;background:url(themes/68ecshop_hechafree/images/sdgg.gif) repeat-x; height:27px; color:#000">品牌专卖<a href="./brand.php.htm" class="more"><font style="color:#000">全部品牌</font></a></h1>
<div class="mod1 mod2 blank brandboxs1">
	<span class="lb"></span><span class="rb"></span>
	<div class="brandsL clearfix">
		<a href=""><img src="/Public/Home/images/1240803062307572427.gif" alt="诺基亚 (7)"></a>
    <a href=""><img src="/Public/Home/images/1240802922410634065.gif" alt="摩托罗拉 (1)"></a>
    <a href=""><img src="/Public/Home/images/1240803144788047486.gif" alt="多普达 (1)"></a>
    <a href=""><img src="/Public/Home/images/1240803247838195732.gif" alt="飞利浦 (1)"></a>
    <a href=""><img src="/Public/Home/images/1240803352280856940.gif" alt="夏新 (1)"></a>
    <a href=""><img src="/Public/Home/images/1240803412367015368.gif" alt="三星 (2)"></a>
    <a href=""><img src="/Public/Home/images/1240803482283160654.gif" alt="索爱 (2)"></a>
	</div>
</div>
<!--<div class="brandboxs blank">
</div>
-->
 </div>
  <div class="w230 ">
    <style type="text/css">
      .vote{
      border-bottom:1px dashed #ccc;
      margin-bottom:8px;
      padding-bottom:5px;
      }
      .vote form{display:inline;}
      .vote form a{text-decoration:underline;}
    </style>
  <h1 style="background:url(themes/68ecshop_hechafree/images/sdgg.gif) repeat-x; height:27px; line-height:27px; padding-left:10px; font-size:14px; color:#000">发货查询</h1>
    <div class="mod1 mod2 blank" id="invoice">
  		<div class="mod2con">
    	 	<div class="vote">
        <font class="f2">订单号</font> 2009061909851<br>
        <font class="f2">发货单</font> 232421<br>
    	  </div>
       	<div class="vote">
        <font class="f2">订单号</font> 2009052224892<br>
        <font class="f2">发货单</font> 1123344<br>
    	  </div>
     	</div>
    </div>
  </div>
  </div>
    <div id="pageRight" class="fl clearfix">
    <div class="blank">
<div style="clearfix">
<div class="more clearfix best" id="itemHot">
<h1 class="tit">热销商品</h1>
<h1 style="border-bottom:2px solid #E3E3E3;height:25px; line-height:25px;">
</h1>
</div>
</div>
<div class="recommendContent entry-content" id="show_hot_area">
        <?php if(is_array($hot)): foreach($hot as $key=>$h): ?><div class="goodsbox1">
				<div class="imgbox1"><a href="<?php echo U('Home/goods/goods',array('goods_id'=>$h[goods_id]));?>"><img src="<?php echo ($h[thumb_img]); ?>" alt="<?php echo ($h['goods_name']); ?>"></a></div>
    			 <a href="<?php echo U('Home/goods/goods',array('goods_id'=>$h[goods_id]));?>" title="<?php echo ($h['goods_name']); ?>"><?php echo ($h['goods_name']); ?></a><br>
              <font class="goodspice market">￥<?php echo ($h[market_price]); ?>元</font>
			 			 <b class="f1">￥<?php echo ($h[shop_price]); ?>元</b><br>
			</div><?php endforeach; endif; ?>

</div>
</div>
    <div class="blank">
<div style=" clearfix">
<div class="more clearfix best" id="itemBest">
<h1 class="tit">精品推荐</h1>
<h1 style="border-bottom:2px solid #E3E3E3;height:25px; line-height:25px;">
</h1>
</div>
</div>
<div class="recommendContent entry-content" id="show_best_area">
    <?php if(is_array($best)): foreach($best as $key=>$b): ?><div class="goodsbox1">
				<div class="imgbox1"><a href="<?php echo U('Home/goods/goods',array('goods_id'=>$b[goods_id]));?>"><img src="<?php echo ($b[thumb_img]); ?>" alt="<?php echo ($b[goods_name]); ?>"></a></div>
			 <a href="<?php echo U('Home/goods/goods',array('goods_id'=>$b[goods_id]));?>" title="<?php echo ($b[goods_name]); ?>"><?php echo ($b[goods_name]); ?></a><br>
              <font class="goodspice market">￥<?php echo ($b[market_price]); ?>元</font>
			 			 <b class="f1">￥<?php echo ($b[shop_price]); ?>元</b><br>
			</div><?php endforeach; endif; ?> 
</div>
</div>
    <div class="">
<div style=" clearfix">
<div class="more clearfix best" id="itemNew">
<h1 class="tit">新品上市</h1>
<h1 style="border-bottom:2px solid #E3E3E3;height:25px; line-height:25px;">
</h1>
</div>
</div>
<div class="recommendContent entry-content" id="show_new_area">
    <?php if(is_array($new)): foreach($new as $key=>$n): ?><div class="goodsbox1">
				<div class="imgbox1"><a href="<?php echo U('Home/goods/goods',array('goods_id'=>$n[goods_id]));?>"><img src="<?php echo ($n[thumb_img]); ?>" alt="<?php echo ($n[goods_name]); ?>"></a></div>
			 <a href="<?php echo U('Home/goods/goods',array('goods_id'=>$n[goods_id]));?>" title="<?php echo ($n[goods_name]); ?>"><?php echo ($n[goods_name]); ?></a><br>
              <font class="goodspice market">￥<?php echo ($n[market_price]); ?>元</font>
			 			 <b class="f1">￥<?php echo ($n[shop_price]); ?>元</b><br>
			</div><?php endforeach; endif; ?>  
</div>
</div>
 </div>
</div>
<div style=" height:1px; line-height:1px; clear:both;"></div>

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