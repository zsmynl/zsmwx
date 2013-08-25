<?php /* Smarty version Smarty-3.1.14, created on 2013-08-19 08:41:51
         compiled from "F:\Apmserv\APMServ5\apm\APMServ5.2.6\www\htdocs\home\view\member\register.html" */ ?>
<?php /*%%SmartyHeaderCode:655952110bf5e551f5-16367217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5bf44b8da6642e92458ed8c06ae2385e3eb3a30' => 
    array (
      0 => 'F:\\Apmserv\\APMServ5\\apm\\APMServ5.2.6\\www\\htdocs\\home\\view\\member\\register.html',
      1 => 1376901707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '655952110bf5e551f5-16367217',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52110bf5e688c0_49467722',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52110bf5e688c0_49467722')) {function content_52110bf5e688c0_49467722($_smarty_tpl) {?><html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=gbk">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>注册</title>
<style type="text/css">
<!--
.must {color: #FF0000;width: 40px;}
.must1{width: 100px;}
.must2{width: 200px;}
-->
</style>

</head>
<body style="text-align:center">
    欢迎注册！|<a href="/index.php?controller=member&action=login">登录</a>
    <br/><br/><br/>
<form action="/index.php?controller=member&action=register" method="post" >
   <table width="600" height="211" border="1" cellspacing="1">
  <tr>
    <td><span class="must">*</span></td>
    <td class="must1">注册选择：
  <select name="group">
 <option selected="selected" value="0">个人注册</option>
 <option value="1">媒体注册</option>
 </select></td>
    <td class="must2">&nbsp;</td>
  </tr>
  <tr>
    <td class="must" >*</td>
    <td>用户名：<input name="name" type="text" size="30"/></td>
    <td></td>
  </tr>
  <tr>
    <td class="must">*</td>
    <td>密码：<input name="password" type="password" size="30"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="submit" value="提交"/></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form> 
</body>
</html><?php }} ?>