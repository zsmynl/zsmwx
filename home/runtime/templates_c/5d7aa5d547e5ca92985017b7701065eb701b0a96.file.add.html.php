<?php /* Smarty version Smarty-3.1.14, created on 2013-08-23 13:07:28
         compiled from "F:\Apmserv\APMServ5\apm\APMServ5.2.6\www\htdocs\home\view\member\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2410352174bc5cd1b18-76298899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d7aa5d547e5ca92985017b7701065eb701b0a96' => 
    array (
      0 => 'F:\\Apmserv\\APMServ5\\apm\\APMServ5.2.6\\www\\htdocs\\home\\view\\member\\add.html',
      1 => 1377263239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2410352174bc5cd1b18-76298899',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52174bc5cedbc0_64479303',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52174bc5cedbc0_64479303')) {function content_52174bc5cedbc0_64479303($_smarty_tpl) {?><html>
    <head>
        <title>添加新闻</title>
        <meta http-equiv="content-type" content="text/html; charset=gbk">
        <script src="/common/ueditor/ueditor.config.js" language="javascript" type="text/javascript"></script>
        <script src="/common/ueditor/ueditor.all.min.js" language="JavaScript" type="text/javascript"></script>
        
    </head>
 <body>
用户名：<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
&nbsp;&nbsp;|<a href="/index.php?controller=member&action=talklist">新闻列表</a>|<a href="/index.php?controller=member&action=loginout">退出</a><br/>
添加新闻：
<hr/>
<form action="/index.php?controller=member&action=add" method="post" enctype="multipart/form-data">
    新闻标题：<input type="text" name="title" style="width:400px;"/> <br/><br/>
    新闻内容：
    <textarea name="content" id = "myEditor" ></textarea>
    <script type="text/javascript">
    var editor = new UE.ui.Editor();
    editor.render("myEditor");
    </script>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" />
    <select name="lid">
        <option selected="selected" value="0">公开</option>
        <option value="1">隐私</option>
    </select>
    &nbsp;&nbsp;
    <input type="submit" name="submit" value="提交"/>
</form>

</body>
    
</html><?php }} ?>