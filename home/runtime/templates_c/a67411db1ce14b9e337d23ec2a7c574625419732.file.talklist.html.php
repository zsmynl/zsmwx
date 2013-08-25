<?php /* Smarty version Smarty-3.1.14, created on 2013-08-23 15:44:16
         compiled from "F:\Apmserv\APMServ5\apm\APMServ5.2.6\www\htdocs\home\view\member\talklist.html" */ ?>
<?php /*%%SmartyHeaderCode:1366952141f71823b08-64747019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a67411db1ce14b9e337d23ec2a7c574625419732' => 
    array (
      0 => 'F:\\Apmserv\\APMServ5\\apm\\APMServ5.2.6\\www\\htdocs\\home\\view\\member\\talklist.html',
      1 => 1377272650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1366952141f71823b08-64747019',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52141f7183efc9_99716457',
  'variables' => 
  array (
    'user' => 0,
    'newslist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52141f7183efc9_99716457')) {function content_52141f7183efc9_99716457($_smarty_tpl) {?><html>
    <head>
        <title>内容列表</title>
        <meta http-equiv="content-type" content="text/html; charset=gbk"> 
    </head>
 <body>
用户名：<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
&nbsp;&nbsp;|<a href="/index.php?controller=member&action=add">添加新闻</a>|<a href="/index.php?controller=member&action=loginout">退出</a><br/>
新闻列表：
<hr/>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['news'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['news']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['name'] = 'news';
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['newslist']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total']);
?>
    
    标题：<a href="/index.php?controller=index&action=article&id=<?php echo $_smarty_tpl->tpl_vars['newslist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['newslist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['title'];?>
</a><br/>
    
    <?php endfor; endif; ?>
    <hr/>

        
 </body>
    
</html><?php }} ?>