<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div class="blank"></div>
<div class="block2">
    <div class="blank"></div>
    <?php if(is_array($ordinfo)): foreach($ordinfo as $key=>$ord): ?><div class="goodsTitle clearfix" style="background:#f6f6f6; border:#E3E3E3 solid 1px; border-bottom:none;">
            <span>
                <td bgcolor="#ffffff">订单号: <?php echo ($ord['ord_sn']); ?>

                    <?php if(($ord['paystatus'] == 0)): if(($ord['is_repeal'] == 0)): ?>（待支付）<?php endif; ?>
                        <?php if(($ord['is_repeal'] == 1)): ?>（已撤单）<?php endif; endif; ?>

                    <?php if($ord['paystatus'] == 1): if(($ord['is_finish'] == 0)): if(($ord['is_send'] == 0)): ?>（已支付）
                                ---><a href="<?php echo U('Admin/order/send',array('ord_sn'=>$ord['ord_sn']));?>" style="color:#F00" >去发货</a><?php endif; ?>
                            <?php if(($ord['is_send'] == 1)): ?>（已发货）<?php endif; endif; ?>
                        <?php if(($ord['is_finish'] == 1)): ?>（已完成）<?php endif; endif; ?>

                </td>
           </span>
            <span style="float: right;">
                <td bgcolor="#ffffff"><?php echo ($ord['ordtime']); ?></td>
            </span>
        </div>
        <div class="goodsTitle clearfix" style="background:#ffffff; border:#e3e3e3 solid 1px; border-bottom:none;">
            <span>
                <td bgcolor="#ffffff">收货人: <?php echo ($ord['xm']); ?>（<?php echo ($ord['mobile']); ?>）</td>
           </span>
        </div>
        <div class="goodsTitle clearfix" style="background:#f6f6f6; border:#E3E3E3 solid 1px; border-bottom:none;">
            <span>
                <td bgcolor="#ffffff">收货地址: <?php echo ($ord['address']); ?></td>
           </span>
        </div>
        <table class="floatTable" align="center" bgcolor="#e3e3e3" border="0" cellpadding="5" cellspacing="1" width="100%">
            <tbody><tr>
                <th bgcolor="#ffffff">商品名称</th>
                <!-- <th bgcolor="#ffffff">属性</th> -->
                <th bgcolor="#ffffff">市场价</th>
                <!--<th bgcolor="#ffffff">本店价</th>-->
                <th bgcolor="#ffffff">购买数量</th>
                <th bgcolor="#ffffff">小计</th>
            </tr>
            <?php foreach($ord['goodsinfo'] as $goodsinfo) { ?>
            <tr>
                <td align="center" bgcolor="#ffffff">
                    <a href="<?php echo U('Home/goods/goods',array('goods_id'=>$goodsinfo['goods_id']));?>" target="_blank"><?php echo ($goodsinfo['goods_name']); ?></a>
                </td>
                <!-- <td bgcolor="#ffffff">颜色:黑色 <br></td> -->
                <td align="center" bgcolor="#ffffff">￥<?php echo ($goodsinfo['shop_price']); ?>元</td>
                <!--<td class="price" align="center" bgcolor="#ffffff">￥<?php echo ($k['shop_price']); ?>元</td>-->
                <td align="center" bgcolor="#ffffff"><?php echo ($goodsinfo['goods_num']); ?></td>
                <td class="price" align="center" bgcolor="#ffffff">￥<?php echo ($goodsinfo['goods_num'] * $goodsinfo['shop_price']); ?>元</td>
            </tr>

            <?php } ?>
            <tr>
                <td colspan="7" class="f1 f14b" style="text-align:right;" bgcolor="#ffffff">
                    购物金额小计 ￥<?php echo ($ord['money']); ?>元</td>
            </tr>
            </tbody></table><?php endforeach; endif; ?>

    <div class="pagebar">
        <form name="selectPageForm" action="http://free.68ecshop.com/hechaw2013/category.php" method="get">
            <div>
                <span align="right">总计 <?php echo ($count); ?> 个记录 </span> <span align="right"><?php echo ($page); ?></span></div>
        </form>
    </div>
</div>

</body>
</html>