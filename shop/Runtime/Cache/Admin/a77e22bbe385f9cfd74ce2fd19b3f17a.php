<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加分类 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="<?php echo U('/admin/cat/catelist');?>">商品分类</a></span>
<span class="action-span1"><a href="<?php echo U('/admin/index/main');?>">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加分类 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
  <form action="<?php echo U('admin/cat/cateadd');?>" method="post" name="theForm" enctype="multipart/form-data">
  <table width="100%" id="general-table">
      <tr>
        <td class="label">分类名称:</td>
        <td>
          <input type='text' name='cat_name' maxlength="20" value='' size='27' /> <font color="red">*</font>
        </td>
      </tr>
      <tr>
        <td class="label">上级分类:</td>
        <td>
          <select name="parent_id">
              <option value="0">基本类型</option>
              <?php if(is_array($cat)): foreach($cat as $key=>$v): ?><option value="<?php echo ($v["cat_id"]); ?>"><?php echo ($v["cat_name"]); ?></option><?php endforeach; endif; ?>
                        <!--<option value="1">手机类型</option>-->
                        <!--<option value="2">&nbsp;&nbsp;CDMA手机</option>-->
                        <!--<option value="3">&nbsp;&nbsp;GSM手机</option>-->
                        <!--<option value="4">&nbsp;&nbsp;3G手机</option>-->
                        <!--<option value="5">&nbsp;&nbsp;双模手机</option>-->
                        <!--<option value="6">手机配件</option>-->
                        <!--<option value="7">&nbsp;&nbsp;充电器</option>-->
                        <!--<option value="8">&nbsp;&nbsp;耳机</option>-->
                        <!--<option value="9">&nbsp;&nbsp;电池</option>-->
                        <!--<option value="10">&nbsp;&nbsp;读卡器和内存卡</option>-->
                        <!--<option value="11">充值卡</option>-->
                        <!--<option value="12">&nbsp;&nbsp;小灵通/固话充值卡</option>-->
                        <!--<option value="13">&nbsp;&nbsp;移动手机充值卡</option>-->
                        <!--<option value="14">&nbsp;&nbsp;联通手机充值卡</option>-->
                      </select>
        </td>
      </tr>

      <tr>
        <td class="label">分类描述:</td>
        <td>
          <textarea name='intro' rows="6" cols="48"></textarea>
        </td>
      </tr>
      </table>
      <div class="button-div">
        <input type="submit" value=" 确定 " />
        <input type="reset" value=" 重置 " />
      </div>
    <!-- <input type="hidden" name="act" value="insert" />
    <input type="hidden" name="old_cat_name" value="" />
    <input type="hidden" name="cat_id" value="" /> -->
  </form>
</div>

<div id="footer">
共执行 3 个查询，用时 0.021687 秒，Gzip 已禁用，内存占用 2.081 MB<br />
版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>

</body>
</html>