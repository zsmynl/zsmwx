<?php
/*��Ŀ����ļ�
 *
 */
session_start();
require dirname(__FILE__).'/config/config.php';//�����ļ�
require dirname(__FILE__).'/common/smarty/Smarty.class.php';//smarty���ļ�
require dirname(__FILE__).'/home/conf/config.php';//��Ŀ�����ļ�
require dirname(__FILE__).'/system/app.php';//�����
Application::run($CONFIG);

/*
$str="aaaaaaaaaa";
$smarty->assign("str",$str);
$smarty->display("index/index.html");
*/
?>