<?php
/*�����ļ�
 */
/*���ݿ�����,��ά����,����ص�������Ϣд��$CONFIG['system']�����λ������*/
$CONFIG['system']['db'] = array(
    'db_host'         => 'localhost',
    'db_user'         => 'root',
    'db_password'     => '',
    'db_database'     => 'wxhome',
    'db_table_prefix' => 'wx_',//�����ǰ׺
    'db_charset'      => 'GBk',//�������ݿ����
    'db_conn'         => '' //�������ݿ����ӷ�ʽ����дpconn��Ϊ��������
);

/*�Զ����������*/
$CONFIG['system']['lib'] = array(
    'prefix'          => 'my'  //�Զ�������ļ�ǰ׺ 
);
$CONFIG['system']['route'] = array(
     'default_controller'  =>   'index',//ϵͳĬ�Ͽ�������indexcontroller.php��
     'default_action'      =>   'index',//ϵͳĬ�Ͽ�������ָ�Ŀ�������indexcontroller.php�е�index������
     'url_type'            =>   1   //����url��ʽ 
);
/*session�ж�
function user_shell(){

}
*/

?>