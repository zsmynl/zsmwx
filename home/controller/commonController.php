<?php
       function user_shell($uid,$shell){//session�е���Ϣ�����ݿ����Ϣ���Ա�
           $index = $this->model('index');
           $sql="select * from wx_user where `id` = '$uid'";
           $qu = $index->query($sql);
           $us = is_array($user=$index->fetch_array($qu));
           $shell = $us ? $shell == md5($user['name'].$user['password']):FALSE;
           if($shell){
            return $user;
           }else{
            echo "shibai";
           }
    }      

       function user_mktime($ontime){//�ж��Ƿ��¼��ʱ
        $new_time = mktime();
        $timecut = $new_time - $ontime;
        if($timecut > '3600'){
            session_destroy();
        }else{
            $_SESSION['time'] = mktime();
        }  
    }




