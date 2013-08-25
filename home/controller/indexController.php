<?php
class indexController extends Controller{

       function home(){
        echo "Welcome zsmyphp!  ^v^";        
        
       }
       function index(){
     //  $home =controller::model('index');
     //  $home -> test();
       global $smarty;
       $index = $this ->model('index');
       $user = $this -> user_shell($_SESSION['uid'],$_SESSION['user_shell']);//用户登录判断
       $this ->user_mktime($_SESSION['time']);//登陆超时判断
       if(empty($user['id'])){
        $login = <<<EOT
        <span class="loginwrap"><a href="/index.php?controller=member&action=login">登录</a></span>
EOT;
        }else{
        $login = <<<EOT
        <span class="loginwrap" id="loginStatus">你好，{$user[name]}，<a href="/index.php?controller=member&action=index" >个人中心</a> <a href="/index.php?controller=member&action=loginout">退出</a></span>
EOT;
        }
       $smarty->assign('login',$login);
       $smarty->display('index/index.html');
     }
         function article(){//新闻内容页面
         global $smarty;
         $art=$this->model('index');
         $user = $this -> user_shell($_SESSION['uid'],$_SESSION['user_shell']);//用户登录判断
         $this ->user_mktime($_SESSION['time']);//登陆超时判断
        if($_GET['id']){
        $sql="select * from wx_news where id = '$_GET[id]'";
        $query=$art->query($sql);
        while($news= $art->fetch_array($query)){
            $newslist=array(
                'title'  =>$news['title'],
                'content'=>$news['content']
            );  
          }  
        }
        if(empty($user['id'])){
        $login = <<<EOT
        <span class="loginwrap"><a href="/index.php?controller=member&action=login">登录</a></span>
EOT;
        }else{
        $login = <<<EOT
        <span class="loginwrap" id="loginStatus">你好，{$user[name]}，<a href="/index.php?controller=member&action=index" >个人中心</a> <a href="/index.php?controller=member&action=loginout">退出</a></span>
EOT;
        }
       $smarty->assign('login',$login);
        $smarty->assign('newslist',$newslist);
        $smarty->display('index/article.html');
        
    }

       function user_shell($uid,$shell){//session中的信息和数据库的信息作对比
           $index = $this->model('index');
           $sql="select * from wx_user where `id` = '$uid'";
           $qu = $index->query($sql);
           $us = is_array($user=$index->fetch_array($qu));
           $shell = $us ? $shell == md5($user['name'].$user['password']):FALSE;
           if($shell){
            return $user;
           }
    }      

       function user_mktime($ontime){//判断是否登录超时
        $new_time = mktime();
        $timecut = $new_time - $ontime;
        if($timecut > '3600'){
            session_destroy();
        }else{
            $_SESSION['time'] = mktime();
        }  
    }

}




