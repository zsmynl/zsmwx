<?php
/*项目配置目录。
 */
//session 缓存
// session_start();
     //session控制
     /*
    function user_shell($uid,$shell){//session中的信息和数据库的信息作对比
           $sql="select * from wx_user where `id` = '$uid'";
           $qu = mysql_query($sql);
           $ps = is_array($user=mysql_fetch_array($qu));
           $ps ? $shell = md5($user['name'].$user['password']):FALSE;
           if($ps){
            return $user;
           }
    }      
           
    function user_mktime($ontime){//判断是否登录超时
        $new_time = mktime();
        $timecut = $new_time - $ontime;
        if($timecut > '3600'){
            session_destroy();
        }else{
            $SEESION['time'] = mktime();
        }  
    }
    */
//smarty相关配置
$smarty_template_dir	        =dirname($_SERVER['SCRIPT_FILENAME']).'/home/view/';//smarty模板目录
$smarty_compile_dir		=dirname($_SERVER['SCRIPT_FILENAME']).'/home/runtime/templates_c/';//smarty模板编译目录
$smarty_config_dir		=dirname($_SERVER['SCRIPT_FILENAME']).'/home/conf/';//smarty配置目录
$smarty_cache_dir		=dirname($_SERVER['SCRIPT_FILENAME']).'/home/runtime/cache/';//smarty缓存目录
$smarty_caching			=false;
$smarty_delimiter		=explode("|","<{|}>");//smarty左右分隔符
//项目名称配置
define('APP_NAME','/home/');
//***********smarty***********
$smarty = new smarty();
$smarty->template_dir = $smarty_template_dir;
$smarty->compile_dir  = $smarty_compile_dir;
$smarty->config_dir   = $smarty_config_dir;
$smarty->cache_dir    = $smarty_cache_dir;
$smarty->caching      = $smarty_caching;
$smarty->left_delimiter =$smarty_delimiter[0];
$smarty->right_delimiter=$smarty_delimiter[1];

$smarty->assign("t_dir",APP_NAME.'view/');

?>