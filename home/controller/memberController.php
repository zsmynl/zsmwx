<?php
class memberController extends Controller{
    public function __construct() {
           parent::__construct();
        }
    
    function index(){
       global $smarty;
       $mem = $this ->model('member');
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
       $smarty->assign('user',$user);
       $smarty->assign('login',$login);
       $smarty->display('member/index.html');
    }
    function add(){//添加新闻
       global $smarty;
       $mem = $this ->model('member');
       $user = $this -> user_shell($_SESSION['uid'],$_SESSION['user_shell']);//用户登录判断
       $this ->user_mktime($_SESSION['time']);//登陆超时判断
       if($_POST['submit']){
        $sql="insert into `wx_news` values ('null','$_POST[id]','$_POST[title]','$_POST[content]','$_POST[lid]')";
        $add=$mem->query($sql);
        if(empty($add)){
        echo "<script language=\"javascript\">";
        echo "if(confirm(\"插入失败\")){document.location=\"index.php?controller=member&action=add\"}";
        echo "</script>";
        }else{
        echo "<script language=\"javascript\">";
        echo "if(confirm(\"插入成功\")){document.location=\"index.php?controller=member&action=add\"}";
        echo "</script>";
        }
       }

       $smarty->assign('user',$user); 
       $smarty->display('member/add.html');

    }
    function talklist(){//新闻列表
        global $smarty;
        $mem = $this ->model('member');
        $user = $this -> user_shell($_SESSION['uid'],$_SESSION['user_shell']);//用户登录判断
        $this ->user_mktime($_SESSION['time']);//登陆超时判断

        $sql = "select * from `wx_news` where uid = '$user[id]'";
        $news= $mem -> query($sql);
        
        while($row = $mem -> fetch_array($news)){  
        $newslist[]=array(
              "title"=> $row['title'],
              "id"=>$row['id']
                          );
        }
        $smarty->assign('newslist',$newslist); 
        $smarty->assign('user',$user); 
        $smarty->display('member/talklist.html');
        
    }
    
    function register(){//注册
        if($_POST['submit']){
        $mem = $this ->model('member');//为什么不能省去this?
        $pass = md5($_POST[password]);
        $sql = "INSERT INTO `wx_user` (`id`,`name`,`password`,`group`) VALUES (NULL,'$_POST[name]','$pass','$_POST[group]')";
        $mem -> query($sql);
        echo "注册成功";
        echo "<script language=\"javascript\">";
        echo "document.location=\"index.php?controller=member&action=login\"";
        echo "</script>";
        }
        global $smarty;
        $smarty->display('member/register.html');  
        
    }
    
    function login(){//登录
        global $smarty;
        if($_POST['submit']){
        $mem=$this ->model('member');
        //$username = str_replace(" ","",$_POST['name']);
        $sql = "SELECT * FROM wx_user WHERE name = '$_POST[uname]'";
        $qu = $mem -> query($sql);
        $us = is_array($row = $mem->fetch_array($qu));//问题语句。
        $ps = $us ? md5($_POST[password])==$row[password] : FALSE;
        if($ps){
            $_SESSION['uid']=$row['id'];
            $_SESSION['user_shell']=md5($row['name'].$row['password']);
            $_SESSION['time']=mktime();
            //echo "登录成功！";
            echo "<script language=\"javascript\">";
            echo "document.location=\"index.php?controller=member&action=index\"";
            echo "</script>";
            
        }else{
            session_destroy();
            echo"<Script>alert('登陆失败');</Script>";
        }
        }
        $smarty->assign('test',$qu);
        $smarty->display('member/login.html');    
    }
    
    function loginout(){//登出
        echo "退出成功！";
        session_destroy();
        echo "<script language=\"javascript\">";
        echo "document.location=\"index.php?controller=member&action=index\"";
        echo "</script>";
    }
    
    function user_shell($uid,$shell){//session中的信息和数据库的信息作对比
           $mem = $this->model('member');
           $sql="select * from wx_user where `id` = '$uid'";
           $qu = $mem->query($sql);
           $us = is_array($user=$mem->fetch_array($qu));
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
    
    ?>
    
    
    


