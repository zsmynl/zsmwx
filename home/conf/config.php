<?php
/*��Ŀ����Ŀ¼��
 */
//session ����
// session_start();
     //session����
     /*
    function user_shell($uid,$shell){//session�е���Ϣ�����ݿ����Ϣ���Ա�
           $sql="select * from wx_user where `id` = '$uid'";
           $qu = mysql_query($sql);
           $ps = is_array($user=mysql_fetch_array($qu));
           $ps ? $shell = md5($user['name'].$user['password']):FALSE;
           if($ps){
            return $user;
           }
    }      
           
    function user_mktime($ontime){//�ж��Ƿ��¼��ʱ
        $new_time = mktime();
        $timecut = $new_time - $ontime;
        if($timecut > '3600'){
            session_destroy();
        }else{
            $SEESION['time'] = mktime();
        }  
    }
    */
//smarty�������
$smarty_template_dir	        =dirname($_SERVER['SCRIPT_FILENAME']).'/home/view/';//smartyģ��Ŀ¼
$smarty_compile_dir		=dirname($_SERVER['SCRIPT_FILENAME']).'/home/runtime/templates_c/';//smartyģ�����Ŀ¼
$smarty_config_dir		=dirname($_SERVER['SCRIPT_FILENAME']).'/home/conf/';//smarty����Ŀ¼
$smarty_cache_dir		=dirname($_SERVER['SCRIPT_FILENAME']).'/home/runtime/cache/';//smarty����Ŀ¼
$smarty_caching			=false;
$smarty_delimiter		=explode("|","<{|}>");//smarty���ҷָ���
//��Ŀ��������
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