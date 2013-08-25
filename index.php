<?php
/*项目入口文件
 *
 */
session_start();
require dirname(__FILE__).'/config/config.php';//配置文件
require dirname(__FILE__).'/common/smarty/Smarty.class.php';//smarty类文件
require dirname(__FILE__).'/home/conf/config.php';//项目配置文件
require dirname(__FILE__).'/system/app.php';//入口类
Application::run($CONFIG);

/*
$str="aaaaaaaaaa";
$smarty->assign("str",$str);
$smarty->display("index/index.html");
*/
?>