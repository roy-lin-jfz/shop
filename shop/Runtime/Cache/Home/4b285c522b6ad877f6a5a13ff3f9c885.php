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
                <b><?php echo (cookie('username')); ?></b></font>&nbsp;欢迎光临本店！
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
        <a href="" onclick="window.alert('请联系客服电话：400-8899-379')">帮助中心</a>
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





<div class="block2 clearfix">
<div class="ur_here blank">
当前位置: <a href="<?php echo U('/');?>">首页</a> <code>&gt;</code>
<?php if(is_array($mbx)): foreach($mbx as $key=>$m): ?><a href="<?php echo U('Home/cat/cat',array('cat_id'=>$m['cat_id']));?>"><?php echo ($m['cat_name']); ?></a> <code>&gt;</code><?php endforeach; endif; ?>
<?php echo ($goodsinfo['goods_name']); ?>
</div>
<div class="clearfix">

	  <div class="goodsimgbox fl">
		<div id="focuscont">
     <a style="border: 1px solid rgb(210, 208, 208); width: 400px; height: 400px; display: block; padding: 0px; position: relative; outline: 0px; text-decoration: none;" href="" id="zoom1" class="MagicZoom MagicThumb" title="<?php echo ($goodsinfo['goods_name']); ?>">
        <img src="<?php echo ($goodsinfo[goods_img]); ?>" alt="<?php echo ($goodsinfo['goods_name']); ?>" width="400" height="400" style="margin:0;" id="sim974895">
     </a>
	   </div>
    <div class="picture" id="imglist">
    </div>
		</div>
		<div class="goodstxtbox fr" style="width:550px; overflow:hidden">
		<h4 class="goodName">
		 <?php echo ($goodsinfo['goods_name']); ?><div class="prev">
        </div>
		 </h4>
		 <form class="goodsform" action="" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">
			<p class="goodsInfo">
            <span>商品货号：<?php echo ($goodsinfo['goods_sn']); ?></span>
            <span>商品库存：<?php echo ($goodsinfo[goods_number]); ?> 台</span>
            <span>商品品牌：<?php echo ($goodsinfo[goods_name]); ?></span>
            <span>商品重量：<?php echo ($goodsinfo[goods_weight]*1000); ?>克</span>
            <span>上架时间：<?php echo (date("Y-m-d",$goodsinfo[add_time])); ?></span>
            <!-- <span>商品点击数：796</span> -->
            <span>用户评价： <img src="/Public/Home/images/stars5.gif" alt="comment rank 5">
            </span>
			</p>
			<div class="Goodpromotion" style="float:left; width:550px; border-left:none; border-right:none;">
			<font style="font-size:12px;">本店售价：</font><font class="price" id="ECS_SHOPPRICE" style="font-size:20px;">￥<?php echo ($goodsinfo[shop_price]); ?>元</font><br>
            <font class="goodspice" style="color:#CCC">市场价格：<span class="market">￥<?php echo ($goodsinfo[market_price]); ?>元</span></font><br>
			<div class="blank"></div>
			<a href="<?php echo U('Home/goods/gwc',array('goods_id'=>$goodsinfo['goods_id']));?>"><img src="/Public/Home/images/bnt_buy.gif"></a>
            </div>
		</form>
		</div>
	</div>
	<div class="infotit clearfix" id="com_b">
	    <h2 style="cursor: pointer;">商品描述</h2>
	</div>
	 <div class="tagcontent" id="com_v">
        <p><?php echo ($goodsinfo[goods_name]); ?>参数</p>
<div>&nbsp;</div>
<div>
    <?php echo ($goodsinfo[goods_desc]); ?>
    <!-- 商品描述-参数 -->
<!-- <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
    <tbody>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>基本参数</b></p>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">手机昵称</td>
            <td bgcolor="#ffffff" width="450">N85</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">上市日期</td>
            <td bgcolor="#ffffff" width="450">2008年10月</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">手机类型</td>
            <td bgcolor="#ffffff" width="450">3G手机；拍照手机；智能手机</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">手机制式</td>
            <td bgcolor="#ffffff" width="450">GSM</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">支持频段</td>
            <td bgcolor="#ffffff" width="450">GSM850/900/1800/1900MHz</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">数据传输</td>
            <td bgcolor="#ffffff" width="450">GPRS、EDGE</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">屏幕材质</td>
            <td bgcolor="#ffffff" width="450">AMOLED</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">屏幕色彩</td>
            <td bgcolor="#ffffff" width="450">1600万色</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">主屏尺寸</td>
            <td bgcolor="#ffffff" width="450">2.6英寸</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">主屏参数</td>
            <td bgcolor="#ffffff" width="450">QVGA 320×240像素</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">铃音描述</td>
            <td bgcolor="#ffffff" width="450">可选MP3、WAV、AAC或和弦Midi铃声等格式</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">操作系统</td>
            <td bgcolor="#ffffff" width="450">Symbian OS v9.3操作系统与S60 v3.2平台的组合</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">机身内存</td>
            <td bgcolor="#ffffff" width="450">74MB 内部动态存储空间<br>
            78MB 内置NAND闪存</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">存储卡</td>
            <td bgcolor="#ffffff" width="450">支持MicroSD(T-Flash)卡扩展最大至8GB</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">电池规格</td>
            <td bgcolor="#ffffff" width="450">1200毫安时锂电池</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">标配</td>
            <td bgcolor="#ffffff" width="450">诺基亚 N85<br>
            诺基亚电池（BL-5K）<br>
            诺基亚旅行充电器（AC-10）<br>
            诺基亚视频数据线（CA-75U）<br>
            诺基亚数据线（CA-101）<br>
            诺基亚音乐耳机（HS-45、AD-54）<br>
            诺基亚 8 GB microSD 卡（MU-43）<br>
            《用户手册》<br>
            《快速入门》</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">理论通话时间</td>
            <td bgcolor="#ffffff" width="450">6.9 小时</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">理论待机时间</td>
            <td bgcolor="#ffffff" width="450">363 小时</td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>产品外形</b></p>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">外观设计</td>
            <td bgcolor="#ffffff" width="450">双向滑盖</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">产品尺寸</td>
            <td bgcolor="#ffffff" width="450">103×50×16mm<br>
            体积：76 立方厘米</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">手机重量</td>
            <td bgcolor="#ffffff" width="450">128克</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">产品天线</td>
            <td bgcolor="#ffffff" width="450">内置</td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>拍照功能</b></p>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="550" colspan="2" align="left" style="padding-bottom: 8px; padding-left: 0px; padding-right: 0px; padding-top: 8px">
            <table border="0" cellspacing="1" cellpadding="0" align="left">
                <tbody>
                    <tr>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">定时器</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">摄像头</td>
            <td bgcolor="#ffffff" width="450">内置</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">摄像头像素</td>
            <td bgcolor="#ffffff" width="450">500万像素</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">连拍功能</td>
            <td bgcolor="#ffffff" width="450">支持</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">LED闪光灯</td>
            <td bgcolor="#ffffff" width="450">双LED 闪光灯</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">数码变焦</td>
            <td bgcolor="#ffffff" width="450">20 倍数码变焦</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">拍摄模式</td>
            <td bgcolor="#ffffff" width="450">静止、连拍、自动定时器、摄像</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">照片特效</td>
            <td bgcolor="#ffffff" width="450">正常、怀旧、黑白、负片、逼真</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">拍照描述</td>
            <td bgcolor="#ffffff" width="450">支持最大2592×1944分辨率照片拍摄<br>
            支持JPEG、Exif格式<br>
            白平衡模式：自动、阳光、阴天、白炽灯、荧光灯<br>
            感光度模式：高、中、低、自动</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">视频拍摄</td>
            <td bgcolor="#ffffff" width="450">最高支持640 x 480 像素（VGA）、30 帧/秒</td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>娱乐功能</b></p>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="550" colspan="2" align="left" style="padding-bottom: 8px; padding-left: 0px; padding-right: 0px; padding-top: 8px">
            <table border="0" cellspacing="1" cellpadding="0" align="left">
                <tbody>
                    <tr>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">收音机</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">TV-OUT</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">录音功能</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">电子书</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">视频播放</td>
            <td bgcolor="#ffffff" width="450">内置RealPlayer播放器, 支持MPEG4、H.264/AVC、H.263/3GP、RealVideo等视频格式全屏播放</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">音乐播放</td>
            <td bgcolor="#ffffff" width="450">内置播放器, 支持mp3、.wma、.aac、eAAC、eAAC+格式</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">游戏</td>
            <td bgcolor="#ffffff" width="450">内置</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">Java功能</td>
            <td bgcolor="#ffffff" width="450">支持Java MIDP 2.0 CLDC 1.1</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">Flash功能</td>
            <td bgcolor="#ffffff" width="450">第3.0版Flash lite播放器</td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>数据功能</b></p>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="550" colspan="2" align="left" style="padding-bottom: 8px; padding-left: 0px; padding-right: 0px; padding-top: 8px">
            <table border="0" cellspacing="1" cellpadding="0" align="left">
                <tbody>
                    <tr>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">蓝牙功能</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">数据线接口</td>
            <td bgcolor="#ffffff" width="450">USB数据线 3.5mm立体声耳机插孔</td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>基本功能</b></p>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="550" colspan="2" align="left" style="padding-bottom: 8px; padding-left: 0px; padding-right: 0px; padding-top: 8px">
            <table border="0" cellspacing="1" cellpadding="0" align="left">
                <tbody>
                    <tr>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">短信(SMS)</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">彩信(MMS)</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">免提通话</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">情景模式</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">闹钟功能</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">日历功能</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">输入方式</td>
            <td bgcolor="#ffffff" width="450">键盘</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">通话记录</td>
            <td bgcolor="#ffffff" width="450">未接来电+已接来电+已拨电话记录</td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="100" align="left">通讯录</td>
            <td bgcolor="#ffffff" width="450">S60标准化名片式通讯录</td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>网络功能</b></p>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="550" colspan="2" align="left" style="padding-bottom: 8px; padding-left: 0px; padding-right: 0px; padding-top: 8px">
            <table border="0" cellspacing="1" cellpadding="0" align="left">
                <tbody>
                    <tr>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">电子邮件</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">WWW浏览器</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">WAP浏览器</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>商务功能</b></p>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="550" colspan="2" align="left" style="padding-bottom: 8px; padding-left: 0px; padding-right: 0px; padding-top: 8px">
            <table border="0" cellspacing="1" cellpadding="0" align="left">
                <tbody>
                    <tr>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">飞行模式</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">语音拨号</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">备忘录</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">日程表</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">世界时间</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#f1f7fc" colspan="2">
            <p><b>其他功能</b></p>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" valign="middle" width="550" colspan="2" align="left" style="padding-bottom: 8px; padding-left: 0px; padding-right: 0px; padding-top: 8px">
            <table border="0" cellspacing="1" cellpadding="0" align="left">
                <tbody>
                    <tr>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">GPS功能</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">电子词典</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">待机图片</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">计算器</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">来电铃声识别</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">来电图片识别</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">来电防火墙</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">动画屏保</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">图形菜单</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">秒表</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                            <tbody>
                                <tr>
                                    <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">单位换算</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                        <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                        <table border="0" cellspacing="1" cellpadding="0" width="100%">
                            <tbody>
                                <tr>
                                    <td width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; float: none; padding-top: 2px">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table> -->
</div>
<p>&nbsp;</p>
        <!-- 商品属性 -->
        <!-- <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                <tbody><tr>
          <th colspan="2" bgcolor="#FFFFFF">商品属性</th>
        </tr>
                <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[上市日期]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%">2008年10月</td>
        </tr>
                <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[存储卡格式]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%">MicroSD</td>
        </tr>
                <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[内存容量]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%">78MB</td>
        </tr>
                <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[操作系统]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%">Symbian OS v9.3</td>
        </tr>
                <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[屏幕大小]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%">2.6英寸</td>
        </tr>
                <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[手机制式]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%">GSM,850,900,1800,1900</td>
        </tr>
                <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[理论通话时间]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%">6.9 小时</td>
        </tr>
                <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[理论待机时间]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%">363 小时</td>
        </tr>
                       </tbody></table> -->
       </div>
	 <div id="com_h" class="none">
            <!-- 商品描述-参数 -->
		   <!-- <blockquote>
                   <p>诺基亚N85参数</p>
           <div>&nbsp;</div>
           <div>
           <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
               <tbody>
                   <tr>
                       <td bgcolor="#f1f7fc" colspan="2">
                       <p><b>基本参数</b></p>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">手机昵称</td>
                       <td bgcolor="#ffffff" width="450">N85</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">上市日期</td>
                       <td bgcolor="#ffffff" width="450">2008年10月</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">手机类型</td>
                       <td bgcolor="#ffffff" width="450">3G手机；拍照手机；智能手机</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">手机制式</td>
                       <td bgcolor="#ffffff" width="450">GSM</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">支持频段</td>
                       <td bgcolor="#ffffff" width="450">GSM850/900/1800/1900MHz</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">数据传输</td>
                       <td bgcolor="#ffffff" width="450">GPRS、EDGE</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">屏幕材质</td>
                       <td bgcolor="#ffffff" width="450">AMOLED</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">屏幕色彩</td>
                       <td bgcolor="#ffffff" width="450">1600万色</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">主屏尺寸</td>
                       <td bgcolor="#ffffff" width="450">2.6英寸</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">主屏参数</td>
                       <td bgcolor="#ffffff" width="450">QVGA 320×240像素</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">铃音描述</td>
                       <td bgcolor="#ffffff" width="450">可选MP3、WAV、AAC或和弦Midi铃声等格式</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">操作系统</td>
                       <td bgcolor="#ffffff" width="450">Symbian OS v9.3操作系统与S60 v3.2平台的组合</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">机身内存</td>
                       <td bgcolor="#ffffff" width="450">74MB 内部动态存储空间<br>
                       78MB 内置NAND闪存</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">存储卡</td>
                       <td bgcolor="#ffffff" width="450">支持MicroSD(T-Flash)卡扩展最大至8GB</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">电池规格</td>
                       <td bgcolor="#ffffff" width="450">1200毫安时锂电池</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">标配</td>
                       <td bgcolor="#ffffff" width="450">诺基亚 N85<br>
                       诺基亚电池（BL-5K）<br>
                       诺基亚旅行充电器（AC-10）<br>
                       诺基亚视频数据线（CA-75U）<br>
                       诺基亚数据线（CA-101）<br>
                       诺基亚音乐耳机（HS-45、AD-54）<br>
                       诺基亚 8 GB microSD 卡（MU-43）<br>
                       《用户手册》<br>
                       《快速入门》</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">理论通话时间</td>
                       <td bgcolor="#ffffff" width="450">6.9 小时</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">理论待机时间</td>
                       <td bgcolor="#ffffff" width="450">363 小时</td>
                   </tr>
                   <tr>
                       <td bgcolor="#f1f7fc" colspan="2">
                       <p><b>产品外形</b></p>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">外观设计</td>
                       <td bgcolor="#ffffff" width="450">双向滑盖</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">产品尺寸</td>
                       <td bgcolor="#ffffff" width="450">103×50×16mm<br>
                       体积：76 立方厘米</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">手机重量</td>
                       <td bgcolor="#ffffff" width="450">128克</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">产品天线</td>
                       <td bgcolor="#ffffff" width="450">内置</td>
                   </tr>
                   <tr>
                       <td bgcolor="#f1f7fc" colspan="2">
                       <p><b>拍照功能</b></p>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="550" colspan="2" align="left" style="padding-bottom: 8px; padding-left: 0px; padding-right: 0px; padding-top: 8px">
                       <table border="0" cellspacing="1" cellpadding="0" align="left">
                           <tbody>
                               <tr>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">定时器</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">&nbsp;</td>
                               </tr>
                           </tbody>
                       </table>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">摄像头</td>
                       <td bgcolor="#ffffff" width="450">内置</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">摄像头像素</td>
                       <td bgcolor="#ffffff" width="450">500万像素</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">连拍功能</td>
                       <td bgcolor="#ffffff" width="450">支持</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">LED闪光灯</td>
                       <td bgcolor="#ffffff" width="450">双LED 闪光灯</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">数码变焦</td>
                       <td bgcolor="#ffffff" width="450">20 倍数码变焦</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">拍摄模式</td>
                       <td bgcolor="#ffffff" width="450">静止、连拍、自动定时器、摄像</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">照片特效</td>
                       <td bgcolor="#ffffff" width="450">正常、怀旧、黑白、负片、逼真</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">拍照描述</td>
                       <td bgcolor="#ffffff" width="450">支持最大2592×1944分辨率照片拍摄<br>
                       支持JPEG、Exif格式<br>
                       白平衡模式：自动、阳光、阴天、白炽灯、荧光灯<br>
                       感光度模式：高、中、低、自动</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">视频拍摄</td>
                       <td bgcolor="#ffffff" width="450">最高支持640 x 480 像素（VGA）、30 帧/秒</td>
                   </tr>
                   <tr>
                       <td bgcolor="#f1f7fc" colspan="2">
                       <p><b>娱乐功能</b></p>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="550" colspan="2" align="left" style="padding-bottom: 8px; padding-left: 0px; padding-right: 0px; padding-top: 8px">
                       <table border="0" cellspacing="1" cellpadding="0" align="left">
                           <tbody>
                               <tr>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">收音机</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">TV-OUT</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">录音功能</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">电子书</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">&nbsp;</td>
                               </tr>
                           </tbody>
                       </table>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">视频播放</td>
                       <td bgcolor="#ffffff" width="450">内置RealPlayer播放器, 支持MPEG4、H.264/AVC、H.263/3GP、RealVideo等视频格式全屏播放</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">音乐播放</td>
                       <td bgcolor="#ffffff" width="450">内置播放器, 支持mp3、.wma、.aac、eAAC、eAAC+格式</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">游戏</td>
                       <td bgcolor="#ffffff" width="450">内置</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">Java功能</td>
                       <td bgcolor="#ffffff" width="450">支持Java MIDP 2.0 CLDC 1.1</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">Flash功能</td>
                       <td bgcolor="#ffffff" width="450">第3.0版Flash lite播放器</td>
                   </tr>
                   <tr>
                       <td bgcolor="#f1f7fc" colspan="2">
                       <p><b>数据功能</b></p>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="550" colspan="2" align="left" style="padding-bottom: 8px; padding-left: 0px; padding-right: 0px; padding-top: 8px">
                       <table border="0" cellspacing="1" cellpadding="0" align="left">
                           <tbody>
                               <tr>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">蓝牙功能</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">&nbsp;</td>
                               </tr>
                           </tbody>
                       </table>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">数据线接口</td>
                       <td bgcolor="#ffffff" width="450">USB数据线 3.5mm立体声耳机插孔</td>
                   </tr>
                   <tr>
                       <td bgcolor="#f1f7fc" colspan="2">
                       <p><b>基本功能</b></p>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="550" colspan="2" align="left" style="padding-bottom: 8px; padding-left: 0px; padding-right: 0px; padding-top: 8px">
                       <table border="0" cellspacing="1" cellpadding="0" align="left">
                           <tbody>
                               <tr>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">短信(SMS)</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">彩信(MMS)</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">免提通话</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">情景模式</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">闹钟功能</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                               </tr>
                               <tr>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">日历功能</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">&nbsp;</td>
                               </tr>
                           </tbody>
                       </table>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">输入方式</td>
                       <td bgcolor="#ffffff" width="450">键盘</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">通话记录</td>
                       <td bgcolor="#ffffff" width="450">未接来电+已接来电+已拨电话记录</td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="100" align="left">通讯录</td>
                       <td bgcolor="#ffffff" width="450">S60标准化名片式通讯录</td>
                   </tr>
                   <tr>
                       <td bgcolor="#f1f7fc" colspan="2">
                       <p><b>网络功能</b></p>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="550" colspan="2" align="left" style="padding-bottom: 8px; padding-left: 0px; padding-right: 0px; padding-top: 8px">
                       <table border="0" cellspacing="1" cellpadding="0" align="left">
                           <tbody>
                               <tr>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">电子邮件</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">WWW浏览器</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">WAP浏览器</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">&nbsp;</td>
                               </tr>
                           </tbody>
                       </table>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#f1f7fc" colspan="2">
                       <p><b>商务功能</b></p>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="550" colspan="2" align="left" style="padding-bottom: 8px; padding-left: 0px; padding-right: 0px; padding-top: 8px">
                       <table border="0" cellspacing="1" cellpadding="0" align="left">
                           <tbody>
                               <tr>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">飞行模式</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">语音拨号</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">备忘录</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">日程表</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">世界时间</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                               </tr>
                               <tr>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">&nbsp;</td>
                               </tr>
                           </tbody>
                       </table>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#f1f7fc" colspan="2">
                       <p><b>其他功能</b></p>
                       </td>
                   </tr>
                   <tr>
                       <td bgcolor="#ffffff" valign="middle" width="550" colspan="2" align="left" style="padding-bottom: 8px; padding-left: 0px; padding-right: 0px; padding-top: 8px">
                       <table border="0" cellspacing="1" cellpadding="0" align="left">
                           <tbody>
                               <tr>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">GPS功能</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">电子词典</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">待机图片</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">计算器</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">来电铃声识别</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                               </tr>
                               <tr>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">来电图片识别</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">来电防火墙</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">动画屏保</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">图形菜单</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">秒表</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                               </tr>
                               <tr>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%" bgcolor="#c5d7ed">
                                       <tbody>
                                           <tr>
                                               <td bgcolor="#f1f7fc" width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; font-weight: bold; padding-top: 2px">单位换算</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                                   <td width="100" style="padding-bottom: 5px; padding-left: 10px; padding-right: 0px; padding-top: 5px">
                                   <table border="0" cellspacing="1" cellpadding="0" width="100%">
                                       <tbody>
                                           <tr>
                                               <td width="100%" align="center" style="padding-bottom: 2px; padding-left: 2px; padding-right: 2px; float: none; padding-top: 2px">&nbsp;</td>
                                           </tr>
                                       </tbody>
                                   </table>
                                   </td>
                               </tr>
                           </tbody>
                       </table>
                       </td>
                   </tr>
               </tbody>
           </table>
           </div>
           <p>&nbsp;</p>
                   <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                           <tbody><tr>
                     <th colspan="2" bgcolor="#FFFFFF">商品属性</th>
                   </tr>
                           <tr>
                     <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[上市日期]</td>
                     <td bgcolor="#FFFFFF" align="left" width="70%">2008年10月</td>
                   </tr>
                           <tr>
                     <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[存储卡格式]</td>
                     <td bgcolor="#FFFFFF" align="left" width="70%">MicroSD</td>
                   </tr>
                           <tr>
                     <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[内存容量]</td>
                     <td bgcolor="#FFFFFF" align="left" width="70%">78MB</td>
                   </tr>
                           <tr>
                     <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[操作系统]</td>
                     <td bgcolor="#FFFFFF" align="left" width="70%">Symbian OS v9.3</td>
                   </tr>
                           <tr>
                     <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[屏幕大小]</td>
                     <td bgcolor="#FFFFFF" align="left" width="70%">2.6英寸</td>
                   </tr>
                           <tr>
                     <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[手机制式]</td>
                     <td bgcolor="#FFFFFF" align="left" width="70%">GSM,850,900,1800,1900</td>
                   </tr>
                           <tr>
                     <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[理论通话时间]</td>
                     <td bgcolor="#FFFFFF" align="left" width="70%">6.9 小时</td>
                   </tr>
                           <tr>
                     <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[理论待机时间]</td>
                     <td bgcolor="#FFFFFF" align="left" width="70%">363 小时</td>
                   </tr>
                                  </tbody></table>
                  </blockquote> -->
            <!-- 商品购买记录 -->
			 <!-- <blockquote>
                          <div id="ECS_BOUGHT"><div class="box">
                  <div class="box_1">
                   <h3 style="border-bottom:1px solid #B4C6E7; height:30px; line-height:30px;"><span class="text">购买记录</span>(近期成交数量<font class="f1">0</font>)</h3>
                   <div class="boxCenterList" style="margin:10px 0;">
                            还没有人购买过此商品
                    <div id="buy_pagebar" class="f_r" style="margin-top:10px">
                     <form name="selectPageForm" action="" method="get">
                             <div id="buy_pager">
                       总计 0 个记录，共 1 页。 <span> <a href="">第一页</a> <a href="">上一页</a> <a href="">下一页</a> <a href="">最末页</a> </span>
                                 </div>
                             </form>
                   </div>
                   <div class="blank5"></div>
                   </div>
                  </div>
                 </div>
                 <div class="blank5"></div></div></blockquote> -->
		 </div>


    <div class="infotit clearfix" id="com_b">
        <h2 style="cursor: pointer;">商品评论</h2>
    </div>
    <div class="tagcontent" id="com_v">
        <div id="ECS_COMMENT"> 
            <div class="clearfix" style="border:1px solid #C9DCEF;">
                <?php if(is_array($comment)): foreach($comment as $key=>$co): ?><div class="" style="width:950px; overflow:hidden">
                        <hr style="border-top:1px solid #FFFFFF" />
                        <h4 class="goodName">发表者：<?php echo ($co['email']); ?>
                        </h4>
                        <span>评论内容：<div style="border:1px solid #00CED1;"><?php echo ($co['content']); ?></div></span>
                        <span >发表时间：<?php echo (date("Y-m-d H:i:s",$co[pubtime])); ?></span>
                        <hr style="border-top:2px solid #000000" />
                    </div><?php endforeach; endif; ?>
            </div>
        </div><span align="right"><?php echo ($page); ?></span>
    </div>


    <div class="infotit clearfix" id="com_b">
        <h2 style="cursor: pointer;">发表评论</h2>
    </div>
    <div class="tagcontent" id="com_v">
        <div id="ECS_COMMENT"> 
            <div class="clearfix" style="border:1px solid #C9DCEF;">
                <div class="Goodpromotion blank">
      <form action="<?php echo U('Home/goods/comment');?>" method="post" name="commentForm" id="commentForm">
       <table border="0" cellspacing="5" cellpadding="0">
        <tbody><tr>
          <td align="right">用户名：</td>
          <td><?php if(che()): echo ($userinfo['username']); ?>
                <input type="hidden" name="user_id" value="<?php echo ($userinfo['user_id']); ?>">
              <?php else: ?>
                匿名用户<?php endif; ?></td>
        </tr>
        <tr>
          <td align="right">E-mail：</td>
          <td>
          <?php if(che()): echo ($userinfo['email']); ?>
                <input type="hidden" name="email" value="<?php echo ($userinfo['email']); ?>">
              <?php else: ?>
                <input type="text" name="email" id="email" maxlength="100" value="" class="InputBorder"><?php endif; ?>
          </td>
        </tr>

        <tr>
          <td align="right" valign="top">评论内容：</td>
          <td>
          <!-- <textarea name="content" class="InputBorder" cols="80" rows="3"></textarea> -->
          <script type="text/javascript" charset="utf-8" src="/Public/u/ueditor.config.js"></script>
          <script type="text/javascript" charset="utf-8" src="/Public/u/ueditor.all.min.js"> </script>
          <script type="text/javascript" charset="utf-8" src="/Public/u/lang/zh-cn/zh-cn.js"></script>
          <script id="editor" type="text/plain"  name="content" style="width:800px;height:200px;"></script>
          <script type="text/javascript">
              //实例化编辑器
              //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
              var ue = UE.getEditor('editor');

          </script>
          <!-- <input type="hidden" name="cmt_type" value="0"> -->
          <input type="hidden" name="goods_id" value="<?php echo ($goodsinfo['goods_id']); ?>">
          </td>
        </tr>
        <tr>
          <td colspan="2">
                    <!-- <div class="captcha fl">
          验证码：<input type="text" name="captcha" size="10" class="InputBorder">
          <img src="/Public/Home/images/captcha.php" alt="captcha" >
          </div> -->
                    <input name="" type="submit" value="提交评论" class="bnt_number4 fr">
          </td>
        </tr>
      </tbody></table>
      </form>
</div>    




            </div>
        </div>
    </div>
    <!-- 原评论 -->
	<!-- <div id="ECS_COMMENT"> <div class="clearfix" style="border:1px solid #C9DCEF;">
        <div class="Goodpromotion blank">
          <form action="<?php echo U('Home/goods/comment');?>" method="post" name="commentForm" id="commentForm">
           <table border="0" cellspacing="5" cellpadding="0">
            <tbody><tr>
              <td align="right">用户名：</td>
              <td>匿名用户</td>
            </tr>
            <tr>
              <td align="right">E-mail：</td>
              <td>
              <input type="text" name="email" id="email" maxlength="100" value="" class="InputBorder">
              </td>
            </tr>
    
            <tr>
              <td align="right" valign="top">评论内容：</td>
              <td>
              <textarea name="content" class="InputBorder" cols="80" rows="3"></textarea>
              <script type="text/javascript" charset="utf-8" src="/Public/u/ueditor.config.js"></script>
              <script type="text/javascript" charset="utf-8" src="/Public/u/ueditor.all.min.js"> </script>
              <script type="text/javascript" charset="utf-8" src="/Public/u/lang/zh-cn/zh-cn.js"></script>
              <script id="editor" type="text/plain"  name="content" style="width:800px;height:200px;"></script>
              <script type="text/javascript">
                  //实例化编辑器
                  //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                  var ue = UE.getEditor('editor');
    
              </script>
              <input type="hidden" name="cmt_type" value="0">
              <input type="hidden" name="goods_id" value="<?php echo ($goodsinfo['goods_id']); ?>">
              </td>
            </tr>
            <tr>
              <td colspan="2">
                        <div class="captcha fl">
              验证码：<input type="text" name="captcha" size="10" class="InputBorder">
              <img src="/Public/Home/images/captcha.php" alt="captcha" >
              </div>
                        <input name="" type="submit" value="提交评论" class="bnt_number4 fr">
              </td>
            </tr>
          </tbody></table>
          </form>
    </div>
    </div>
    </div> -->


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