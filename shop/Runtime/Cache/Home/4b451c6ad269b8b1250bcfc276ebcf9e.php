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
<link href="/shop/Public/Home/css/style.css" rel="stylesheet" type="text/css">
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
        <li><a href="./flow.php.htm"></a><a href="<?php echo U('Home/order/checkout');?>" title="查看购物车">购物车有 
        <?php if(defined_gwc()): echo (cookie('gwc_num')); ?>
        <?php else: ?>0<?php endif; ?>
        件</a></li>
        <li> <a href="<?php echo U('Home/order/checkout');?>">查看购物车</a> </li>
        <!-- <li style=" margin-top:0px;*margin-top:-2px;">|</li> -->
        <!-- <li> <a href="./pick_out.php.htm">选购中心</a> </li> -->
        <li style=" margin-top:0px;*margin-top:-2px;">|</li>
        <li> <a href="" onclick="window.alert('请联系客服电话：400-8899-379')">帮助中心</a> </li>
      </ul>
  </div></div>
<div class="page-header clearfix">
  <div class="block1 clearfix" style="position:relative;">
    <div class="logo fl"><a href="<?php echo U('/');?>" title=""><img src="/shop/Public/Home/images/logo.gif" width="311" height="55" alt=""></a></div>
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
  <div class="allMenu fl"> <a href="<?php echo U('/');?>" title="" style="font-size:15px;" class="index current">首页</a>
    <a href="<?php echo U('Home/cat/cat',array('cat_id'=>3));?>" style="font-size:15px;" title="GSM手机">GSM手机</a>
    <a href="<?php echo U('Home/cat/cat',array('cat_id'=>5));?>" style="font-size:15px;" title="双模手机">双模手机</a>
    <a href="<?php echo U('Home/cat/cat',array('cat_id'=>6));?>" style="font-size:15px;" title="手机配件">手机配件</a>
  </div>
</div>
</div>





<div class="blank"></div>
<div class="container" style=" width:980px; margin:0 auto; margin-bottom:0px;">
  <div class="reg clearfix ">
    <div class="us_login" style="float:left;">
      <div class="mbox" style="width:485px; height:430px; ">
        <div class="login_tit blank" style="margin-top:15px;"><strong style="font-size:18px;">登录</strong></div>
        <div class="contentNew">
          <div class="l_box">
            <p>已注册用户请从这里登录</p>
            <form action="" method="post" name="loginForm" id="loginForm">
              <label> <span>用户名</span>
                <input type="text" class="inputBg" name="username" size="25">
              </label>
              <label> <span>密码</span>
                <input type="password" class="inputBg" name="password" size="25">
              </label>
              <label> <span>请输入验证码</span>
                <input type="text" class="" name="yzm" size="25">
              </label>
              <div align="center">
                <!--<img src="<?php echo U('Home/user/yzm');?>" alt="" width="200" height="60" />-->
                  <a href="<?php echo U('Home/user/login');?>">
                      <img src="<?php echo U('Home/user/yzm');?>" alt="" width="200" height="60" />
                  </a>
              </div>
                <div>

                </div>
                <div class="btns">
                <input type="submit" value="" class="btn_submit_b">
                <!-- <input type="hidden" name="act" value="act_login">
                <input type="hidden" name="back_act" value="user.php"> -->
                <p class="forgot1"><a href=''>密码问题找回密码</a></p>
              </div>
              <div class="tempotherLoginTail"></div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="us_login" style="float:left;">
      <div class="mbox" style="width:485px; height:430px;">
        <div class="reg2_tit blank" style="width:485px; margin-top:15px;"><strong style="font-size:18px;">注册</strong> &nbsp;&nbsp;&nbsp;&nbsp; 新用户？ 立即注册，享受多重惊喜。</div>
      <div class="mbox" style="width:488px; height:370px; border:none;">
				<div class="title">
				</div>
				<div class="contentNew">
					<div class="l_box">
						<p><strong>如果您不是会员，请注册</strong></p>
					    <p><strong class="f4">友情提示：</strong></p>
              <p>不注册为会员也可在本店购买商品</p>
              <p>但注册之后您可以：</p>
					    <p>1. 保存您的个人资料</p>
					    <p>2. 收藏您关注的商品</p>
					    <p>3. 享受会员积分制度</p>
					    <p>4. 订阅本店商品信息</p>
					    <p><a href="<?php echo U('Home/user/reg');?>"><img src="/shop/Public/Home/images/bnt_ur_regh.gif"></a></p>
				    </div>
				</div>
			</div>
      </div>
    </div>
  </div>
</div>
<div class="container" style=" width:980px; margin:0 auto; ">
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
<div class="block tc" style=""> <img src="/shop/Public/Home/images/serviceImg1.jpg"> </div>
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