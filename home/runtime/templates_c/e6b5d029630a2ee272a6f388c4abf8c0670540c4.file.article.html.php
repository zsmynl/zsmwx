<?php /* Smarty version Smarty-3.1.14, created on 2013-08-23 15:57:31
         compiled from "F:\Apmserv\APMServ5\apm\APMServ5.2.6\www\htdocs\home\view\index\article.html" */ ?>
<?php /*%%SmartyHeaderCode:2755217839535de75-77084415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6b5d029630a2ee272a6f388c4abf8c0670540c4' => 
    array (
      0 => 'F:\\Apmserv\\APMServ5\\apm\\APMServ5.2.6\\www\\htdocs\\home\\view\\index\\article.html',
      1 => 1377273447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2755217839535de75-77084415',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52178395465345_39089217',
  'variables' => 
  array (
    'newslist' => 0,
    't_dir' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52178395465345_39089217')) {function content_52178395465345_39089217($_smarty_tpl) {?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=gbk"> 
 <meta charset="gb2312">
 <meta http-equiv="Content-Language" content="zh-CN">
 <meta name="Keywords" content="">
 <meta name="Description" content="">
<title><?php echo $_smarty_tpl->tpl_vars['newslist']->value['title'];?>
</title> 
<!--测速js-->
<script async="" type="text/javascript" src="images/cdn_djl.js"></script><script type="text/javascript" src="images/speed_v1.js"></script><!--[if !IE]>|xGv00|10996c1e908b14b79ae1b1ac9488d779<![endif]-->
<!--dy 公共样式-->
<style type="text/css">
/*————————————reset.css————————————*/
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,p,blockquote,th,td{margin:0;padding:0;}
table{border-collapse:0;border-spacing:0}
fieldset,img{border:0}

body{font:12px "Simsun",arial,sans-serif;color:#333333;background: #f3f3f3}
address,caption,cite,code,dfn,em,th,var{font-style:normal;font-weight:normal}
ol,ul {list-style:none}
caption,th {text-align:left}
h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:400;}
legend{display:none;}
button{line-height:1.2;vertical-align:middle;cursor:pointer;}
strong{font-weight:800;}
a{color:#333;text-decoration:none;}
a:hover{text-decoration:underline;}
img{display: block;}
.hr10{font-size: 0;height: 10px;overflow: hidden;*zoom:1;}
.hr10:after{content:"";display:table;clear:both}
.fY{font-family: Microsoft Yahei;}
.clear{*zoom:1;}
.clear:after{content:"";display:table;clear:both}
.mainWrap{*zoom:1;}
.mainWrap:after{content:"";display:table;clear:both}
.mt10{margin-top: 10px;}
.mb10{margin-bottom: 10px;}
/*ico雪碧图*/
.dy_b,.qx_b,.dy2_b,.qx2_b,a.dy_s,a.dy_s:hover,a.qx_s,a.qx_s:hover,.share,.arrow-out,.headWrap .header .nav li.arrow,a.tag i,a.tag:hover i,.seach,.tool a,#gobox .gohome,#gobox .gotop,#content .chid_titleTab span.on,.popObj .close,.popObj .head .info .name span.area,.headWrap .header .mBtn,.headWrap .header .mBtn2{background-image:url(images/ico_pic2.gif); background-repeat:no-repeat; }
/*订阅 分享 箭头按钮*/
.dy_b,.qx_b{width: 30px;height: 20px;line-height:18px;padding:2px 0 0 25px;overflow:hidden;display:inline-block;color:#fff;background-position: 0 0;cursor: pointer;}
.qx_b{background-position: 0 -30px}

.dy2_b,.qx2_b{width: 45px;height: 25px;line-height:18px;line-height:22px\9;padding:5px 0 0 35px;font-family: Microsoft Yahei;font-size:18px;overflow:hidden;display:inline-block;color:#fff;background-position: 0 -117px;cursor: pointer;}
.qx2_b{background-position: -120px -117px}

a.dy_s,a.qx_s{width: 16px;height: 16px;display:inline-block;background-position: 0 -67px}
a.qx_s{background-position: -74px -67px}
a.dy_s:hover,a.qx_s:hover{text-decoration:none;background-position: -39px -67px }
a.qx_s:hover{background-position: -112px -67px }
.share{width: 17px;height: 12px;background-position: -70px -93px}
.seach{width: 154px;height: 29px;background-position: 0px -161px}
.seach:hover{background-position: 0px -194px}
/*欢迎*/
.dy_locbox_w{float: left;width: 509px;height: 352px;padding: 14px 0 0 14px;zoom: 1;background: #FFFFFF;text-align: left;position: relative;}
.dy_locbox_w i.close{position: absolute;top:10px;right: 10px;width: 11px;height: 11px;background: url(http://imgcache.qq.com/ptlogin/v4/style/11/images/icon_3.png) no-repeat -240px -134px;cursor: pointer;}
.dy_locbox{height:352px;margin-right:14px;overflow: hidden;*zoom:1;}
.dy_locbox .locboxhd{height:28px;text-align: center;padding:10px 0 0;}
.dy_locbox .locboxhd .tips{color: #BD0A01}
.dy_locbox .locboxbd{overflow: hidden;*zoom:1;}
.dy_locbox ul{padding: 14px 0 0 18px;height:232px;float:left;}
.dy_locbox ul li.loading{width: 416px;margin-top:94px;text-align:center;padding:20px 0 0 0;background: url(http://mat1.gtimg.com/www/niuping2013/loadgray.gif) no-repeat top;}
.dy_locbox ul li{float:left;width: 76px;margin:0 19px;padding:0px 0 10px;overflow:hidden;}
.dy_locbox ul li .inner{width: 70px;height: 70px;padding:4px 0 0 4px;border: 1px solid #dedede;position:relative;background: #fff;cursor: pointer;}
.dy_locbox ul li .inner img{width: 66px; height: 66px;}
.dy_locbox ul li .inner i{display:none}
.dy_locbox ul li.cur .inner i{width: 17px;height: 17px;display:block;position:absolute;bottom:2px; right:2px;background: url(http://mat1.gtimg.com/dyaio/images/r_dy/cked.png) no-repeat}
.dy_locbox ul li p{text-align: center; height:30px;line-height: 30px;overflow:hidden;font-size:14px;color:#555;font-family: Microsoft Yahei;}
.dy_locbox .locboxft{padding-top: 5px; position:relative;}
.dy_locbox .locboxft .btn,.dy_locbox .locboxft .btn:hover{background-image:url(http://mat1.gtimg.com/dyaio/images/r_dy/ico_pic2.gif);}
.dy_locbox .locboxft .btn{width: 131px;height: 30px;margin:0 auto;padding-top:9px;display:block;color: #fff;font-size:18px; text-align:center;background-position: 0 -325px;}
.dy_locbox .locboxft .btn:hover{text-decoration:none;background-position: 0 -374px;}


/*头部*/
.headWrap{width: 100%;height:86px;background:#3d445e;z-index: 100 }
.headWrap .header{width: 1000px;height: 86px;margin: 0 auto}
.headWrap .header .nav{float:left;display:inline-block;padding:36px 0 0 100px;}
.headWrap .header .nav li{height:50px;float:left;font-size: 16px;color: #e8e8e8;margin:0 1px;padding: 0 1px}
.headWrap .header .nav li a{height:50px;color: #e8e8e8;display:inline-block; position:relative;padding:0 12px; }
.headWrap .header .nav li a i{width:0px;height:0px;position: absolute; left:50%; margin-left:-4px;bottom: 99em; border-left:8px dashed transparent;border-right:8px dashed transparent;border-bottom:8px solid #f5f5f5 ;}
.headWrap .header .nav li a:hover {color: #fff;text-decoration: none;}
.headWrap .header .nav li a:hover i{ bottom:0; }
.headWrap .header .nav li.cur i{bottom: 0}
.headWrap .header .nav li.arrow{width: 6px;background-position: -136px 2px}
.headWrap .header h1{float:left;height:86px;line-height:80px;font-size:38px;color:#fff;}
.headWrap .header h1 a{display: inline-block;height:86px;padding:0 0 0 58px;color:#fff;background:url(<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
member/images/logo.png) no-repeat left}
.headWrap .header h1 a:hover{text-decoration: none;}
.headWrap .header .loginwrap{float:right;margin-top:44px;margin-right:30px;color: #e0e1e6}
.headWrap .header .loginwrap a{color: #e8e8e8}
.headWrap .header .loginwrap a:hover{color: #fff;text-decoration: none;}
.headWrap .header .loginwrap a.logout{margin-left: 10px;}
.headWrap .header .mBtn{width: 101px;height: 35px;margin-top:34px;background-position:0 -237px;}
.headWrap .header .mBtn2{width: 101px;height: 35px;margin-top:34px;background-position:0 -277px;position: relative;display: none}
.headWrap .header .mBtn2 i{width:0px;height:0px;position: absolute; left:50%; margin-left:-4px;bottom: -18px; border-left:8px dashed transparent;border-right:8px dashed transparent;border-bottom:8px solid #f5f5f5 ;}
#manage .headWrap .header .mBtn{display: none}
#manage .headWrap .header .mBtn2{display: block;}
/*通栏nav*/
.wrapTab{height:45px;  margin:0 auto 20px;border-bottom: 1px solid #d5d5d5;overflow: hidden;*zoom:1; }
.wrapTab ul{float:left;height:44px;display:inline-block;border:1px solid #d5d5d5;border-bottom: none;background: url(http://mat1.gtimg.com/dyaio/images/r_dy/tabbg1.png) repeat-x bottom;}
.wrapTab ul li{float:left;font-size: 18px;line-height:44px;cursor:pointer;color:#666666;}
.wrapTab ul li a{padding:0 15px;display:block}
.wrapTab ul li a,.wrapTab ul li a:hover{text-decoration: none}
.wrapTab ul li.cur{height:45px;margin-top:-1px;color:#fff;background: url(http://mat1.gtimg.com/dyaio/images/r_dy/tabbg2.png) repeat-x bottom;z-index: 99}
.wrapTab ul li.cur a{color: #fff}
/*小nav*/
.subTab{height:35px;margin:0px auto 0;border-bottom: 1px solid #d5d5d5;overflow: hidden;*zoom:1; }
.subTab ul{float:left;height:34px;display:inline-block;border:1px solid #d5d5d5;border-bottom: none;background: url(http://mat1.gtimg.com/dyaio/images/r_dy/tabbg1.png) repeat-x bottom;}
.subTab ul li{float:left;font-size: 14px;line-height:34px;cursor:pointer;color:#666666;}
.subTab ul li a{padding:0 15px;display:block}
.subTab ul li a,.subTab ul li a:hover{text-decoration: none}
.subTab ul li.cur{height:35px;margin-top:-1px;color:#fff;background: url(http://mat1.gtimg.com/dyaio/images/r_dy/tabbg2.png) repeat-x bottom;z-index: 99}
.subTab ul li.cur a{color: #fff}
.subTab .seach{float: right;}

.subTab .seach .txt{width: 105px;height:20px;float:left;margin:5px 0  0 12px;border:none;background: none;outline:medium}
.subTab .seach .btn{width: 24px;height: 20px;float: left;margin:5px 0 0 4px;cursor: pointer;border:none;background: none}
.tit_tag{width: 1000px;height:36px;margin:30px auto 0px;border-bottom: 1px solid #d5d5d5}
.tit_tag h2{height:36px;float:left;line-height:36px;padding:0 5px;font-size:24px;border-bottom: 1px solid #000}

.mainWrapTop{padding-top:20px;}
.mainWrap{width: 1000px;margin:0px auto 0;}
.mainWrap .main{float:left;width: 755px;}
.manage .main{float:left;width: 830px;}
.manage .main .box-w{padding:30px 52px 30px 54px;}
/*浮动 圆角 阴影*/
.fl{float: left}
.fr{float: right;}
.box-w{border:1px solid #d5d5d5;background: #fff;}
.box-radius,.avatar_s img,.avatar_b img{-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;}
.box-shade{-moz-box-shadow:0px 1px 3px #e6e6e6; -webkit-box-shadow:0px 1px 3px #e6e6e6; box-shadow:0px 1px 3px #e6e6e6;}

/*分页*/
.arrow-out{width:9px;height:16px;display:block; position:absolute;left:-9px;top:13px;background-position: -106px -93px;}

.turn-page{height:30px;overflow:hidden;font-size:14px; font-family:"宋体"; margin:0px auto;text-align:center; padding:35px 0 40px;}
.turn-page a{margin-right:2px;padding:8px 12px;overflow:hidden;border:1px solid #A7BBCC;background-color:#fff;color:#000;text-align:center;cursor:pointer; height:15px;line-height:19px;text-decoration:none;}
.turn-page a:hover{background:#F1F5FE;cursor: pointer;}
.turn-page .selected{border:1px solid #40558a;background:#40558a;color:#fff;cursor:default}
.turn-page .selected:hover{background-color:#6A92DB;}
.turn-page .dot{width:15px;height:21px; line-height:21px;margin-right:2px;color:#333;}
.turn-page .disabled{border:1px solid #C4C4C4;color:#C4C4C4; cursor:default;}
.turn-page .disabled:hover{background-color:#fff;}
#prev,#next{width:49px;}
/*左侧用户消息列表*/
.talklist{height: -760px;margin-bottom: 20px;}
.talklist li{margin-bottom: 10px;padding-bottom:5px;overflow: hidden;*zoom:1;}
.talklist li .avatar_s{float:left;width: 55px;height: 55px;}
.talklist li .avatar_s img{width: 55px;height: 55px;}
.talklist li .msgbox{float:left;width: 673px;padding:12px 0px 0px;margin-left:25px;position: relative;}
.talklist li .msgbox .name{height: 20px;line-height: 20px;padding:0 20px;margin-bottom:0px;font-size: 14px;background: #fff}
.talklist li .msgbox .name a.tag{background:#fff;color: #999;line-height: 20px;padding:0 4px 0 5px;}
.talklist li .msgbox .name a.tag:hover{background:#8d96b3;color: #fff;text-decoration:none; }
.talklist li .msgbox .name a.tag i{width: 11px;height: 11px;margin:0px 6px 0 0;vertical-align:-1px;*vertical-align:2px;display:inline-block;background-position: 0 -94px;}
.talklist li .msgbox .name a.tag:hover i{background-position: -39px -94px;}
.talklist li .msgbox .name a.dy_s,.talklist li .msgbox .name a.qx_s{margin:1px 18px 0 10px;}
.talklist li .msgbox .name em{color:#999}
.talklist li .msgbox .pt{width: 654px}
.pt{margin:0 auto;padding:17px 0px 19px;margin-bottom:-1px;border-bottom:1px solid #d5d5d5;}
.pt .inner{overflow: hidden;*zoom:1;background: #fff}
.pt .inner:hover{color: #3d5392;border-right: 2px solid #333;background: #fff}
.pt .pic{float: left;margin:0 32px 0 10px;}
.pt .pic img{width:120px;height:88px;}
.pt .text{float: left;width:450px;margin-left:10px;padding-top:5px;}
.pt .text p{font-size: 20px; line-height: 28px}
.pt .text h2{font-size: 22px; line-height: 26px}
.pt .text .time{color: #999;padding-top: 10px}
.pt .text .time .share{margin-left:10px;display:none;}
.pt:hover .text .time .share{display:inline-block;}
.moretalk{width: 753px;height:40px;text-align:center;font-size:14px;line-height:40px;position: relative;}
.moretalk span{display:inline-block;cursor: pointer;}
.list .pt{width: 712px;margin-bottom:0px;border-bottom:1px dotted #d5d5d5;}
/*媒体推荐*/
.mod{width: 218px;}
.mod .hd{padding:10px 0 5px 15px;}
.mod .hd h2{font-size: 18px;}
.mod .bd{border-bottom: 1px solid #d5d5d5;margin-bottom: -1px;}

.rec-user {padding:20px 18px 11px 15px;}
.rec-user:hover{background:#fff}
.rec-user:hover .dy_b:hover,.rec-user .dy_b:hover,.rec-user .qx_b:hover,.rec-user:hover .qx_b:hover{text-decoration: none}
.rec-user:hover .dy_b,.rec-user .dy_b:hover{background-position: -74px 0}
.rec-user:hover .qx_b,.rec-user .qx_b:hover{background-position: -74px -30px}/*预留取消接口*/
.rec-user .loading{width: 30px;height: 20px;line-height: 18px;padding: 2px 0 0 25px;overflow: hidden;display: inline-block;background:url(http://mat1.gtimg.com/dyaio/images/r_dy/loading_s.gif);cursor: default;}
.rec-user .pic{float:left;width: 55px;margin-right: 10px;}
.rec-user .pic a.avatar_s{width:55px;height:55px;display: block;margin-bottom: 4px;}
.rec-user .txt p{line-height:18px;color:#999;padding-top:6px;}
.rec-user .txt p a{color: #405488}

/*fix menu*/
.menulist{width: 138px;padding:4px 0;background: #ececec;}
.menulist .inner{width: 128px;margin:0 auto;border:1px solid #c5c5c5;border-bottom:0}
.menulist .hd{height:44px;background:url(http://mat1.gtimg.com/dyaio/images/r_dy/menulibg.gif);overflow: hidden;*zoom:1;}
.menulist .hd h2{height:44px; line-height:43px;color:#333;font-size: 18px;text-align: center;}

.menulist .bd li{width: 128px;height:44px;vertical-align:middle;}
.menulist .bd li a em,.menulist .bd li a span{cursor: pointer;}
.menulist .bd li a{width: 128px;height: 44px;float:left;margin-left: 0px; display: block;background:url(http://mat1.gtimg.com/dyaio/images/r_dy/menulibg.gif) repeat-x}
.menulist .bd li a:hover{text-decoration: none;color: #f37c41}
.menulist .bd li a em,.menulist .bd li a .count,.menulist li.cur a{font-size:0px;background-image:url(http://mat1.gtimg.com/dyaio/images/r_dy/menu_pic2.gif);}
.menulist .bd li a .name{float:left;margin-top: 11px;font-size: 16px;}
.menulist .bd li a .count{float:right;width:18px;height: 17px;font-size:12px;margin-top:14px;padding:2px 1px 0 19px;text-align:center;display:none;background-position:-146px 0;}
.menulist .bd li a em{float: left}
.menulist .bd li a:hover .count{display: block;color:#f37c41}

.menulist li.cur a{width:138px;height:45px;background-position:0px 0px;margin-top: -1px;margin-left:-9px; }
.menulist li.cur a .name{color: #fff}
.menulist li.cur a .count{margin-right: 0px;display:block;color:#fff;background-position:-146px -23px}
.menulist li.cur a:hover .count{color: #fff}


/*全部-all*/
.menulist li a.all em{width:22px; height:17px;margin:15px 10px 0 17px; background-position:0px -71px; }
.menulist li a:hover.all em{background-position:-194px -71px;}
.menulist li.cur a.all em,.menulist li.cur a:hover.all em{background-position:-96px -71px;margin-left:26px; }


/*新闻-news*/
.menulist li a.news em{width:22px; height:19px;margin:14px 10px 0 17px; background-position:0px -112px; }
.menulist li a:hover.news em{background-position:-194px -112px;}
.menulist li.cur a.news em,.menulist li.cur a:hover.news em{background-position:-97px -112px; margin-left:26px;}
/*财经-finance*/
.menulist li a.finance em{width:21px; height:19px;margin:13px 10px 0 17px; background-position:0px -157px; }
.menulist li a:hover.finance em{background-position:-194px -157px;}
.menulist li.cur a.finance em,.menulist li.cur a:hover.finance em{background-position:-96px -157px; margin-left:26px; }
/*娱乐-ent*/
.menulist li a.ent em{width:22px; height:21px;margin:12px 10px 0 17px; background-position:0px -201px; }
.menulist li a:hover.ent em{background-position:-194px -201px;}
.menulist li.cur a.ent em,.menulist li.cur a:hover.ent em{background-position:-96px -201px;margin-left:26px; }

/*体育-sports*/
.menulist li a.sports em{width:21px; height:21px;margin:13px 10px 0 17px; background-position:0px -246px; }
.menulist li a:hover.sports em{background-position:-194px -246px;}
.menulist li.cur a.sports em,.menulist li.cur a:hover.sports em{background-position:-96px -246px;margin-left:26px;}
/*科技-tech*/
.menulist li a.tech em{width:21px; height:20px;margin:12px 10px 0 17px; background-position:0px -288px; }
.menulist li a:hover.tech em{background-position:-194px -288px;}
.menulist li.cur a.tech em,.menulist li.cur a:hover.tech em{background-position:-96px -288px;margin-left:26px; }
/*视觉-pic*/
.menulist li a.pic em{width:22px; height:19px;margin:12px 10px 0 17px; background-position:0px -333px; }
.menulist li a:hover.pic em{background-position:-194px -333px;}
.menulist li.cur a.pic em,.menulist li.cur a:hover.pic em{background-position:-96px -333px;margin-left:26px; }
/*视频-video*/
.menulist li a.video em{width:22px; height:20px;margin:14px 10px 0 17px; background-position:0px -378px; }
.menulist li a:hover.video em{background-position:-194px -378px;}
.menulist li.cur a.video em,.menulist li.cur a:hover.video em{background-position:-96px -378px;margin-left:26px;}
/*思想-idea*/
.menulist li a.idea em{width:23px; height:20px;margin:12px 10px 0 17px; background-position:0px -421px; }
.menulist li a:hover.idea em{background-position:-194px -421px;}
.menulist li.cur a.idea em,.menulist li.cur a:hover.idea em{background-position:-96px -421px;margin-left:26px;  }
/*时尚-fashion*/
.menulist li a.fashion em{width:20px; height:19px;margin:12px 10px 0 19px; background-position:0px -465px; }
.menulist li a:hover.fashion em{background-position:-194px -465px;}
.menulist li.cur a.fashion em,.menulist li.cur a:hover.fashion em{background-position:-96px -465px;margin-left:26px; }
/*人文-humanity*/
.menulist li a.humanity em{width:22px; height:22px;margin:12px 10px 0 17px; background-position:0px -507px; }
.menulist li a:hover.humanity em{background-position:-194px -507px;}
.menulist li.cur a.humanity em,.menulist li.cur a:hover.humanity em{background-position:-97px -507px;margin-left:26px; }

/*.menulist .bd li a em{margin-left:17px;}*/
.menulist .bd li.cur a em,.menulist .bd li.cur a:hover em{margin-left: 26px;}
.mainWrap .side{float:right;width:220px;}
.manage .side{float:right;width:138px;}
.manage .side .app{width: 100px;margin-left:4px;}
.manage .side .app .fl{margin-left:10px;display:inline; }
/*.mainWrap .side .inner{width: 220px;}*/
/*用户列表*/

.userWrap .hd{width: 100%;height:36px;padding-top: 10px;}
.userWrap .hd h3{height:36px;line-height:36px;float:left;display:inline-block;padding:0 5px;font-size:18px;border-bottom: 2px solid #000000}

.userWrap .hd h3 span{font-size: 12px;}
.userWrap .bd{padding: 20px 0;}
.userlist li{width: 339px;height:72px;float:left;margin:0 2px 2px 0;padding:18px 0 0 20px;background: #f8f8f8}

.userlist li .avatar_s{float:left;}
.userlist li .txt{float: left;margin-left: 11px;}
.userlist li .txt .name{font-size: 16px;padding:3px 0 7px 0;}
.userlist li .txt .count{color:#999;font-family: tahoma}
.userlist li .dy_b,.userlist li .qx_b,.userlist li .loading{float: right;margin:13px 49px 0 0;}
.userlist li .loading{width: 55px;height: 22px;background:url(http://mat1.gtimg.com/dyaio/images/r_dy/loading_s.gif);cursor: default;}
.userlist li:hover{background: #f1f1f1}
.userlist li:hover .dy_b:hover,.userlist li .dy_b:hover,.userlist li:hover .qx_b:hover,.userlist li .qx_b:hover{ text-decoration: none}
.userlist li .dy_b{background-position: -74px 0}
.userlist li:hover .dy_b,.userlist li .dy_b:hover{background-position: -74px 0}
.userlist li:hover .qx_b,.userlist li .qx_b:hover{background-position: -74px -30px}
/*单个用户信息*/
.userbox{width: 218px;padding:22px 0;position: relative;background: #fff}
.userbox .arrow-out{top:47px;}
.userbox .avatar_b{width: 80px;height: 80px;display:block;margin:0 auto;}
.userbox .name{width:169px;text-align: center;display:block;margin:0 auto;padding:4px 0 0;font-size: 18px;}
.userbox .dy2_b,.userbox .qx2_b,.userbox .loading{margin:10px auto;display: block;}
.userbox .loading{width: 80px;height: 30px;background:url(http://mat1.gtimg.com/dyaio/images/r_dy/loading_b.gif);cursor: default;}
.userbox .dy2_b:hover,.userbox .qx2_b:hover{text-decoration: none;}
.userbox .count{text-align: center;font-family: tahoma;color:#666666}
.userbox p{width: 169px;margin:0 auto;padding-top: 10px; line-height: 22px;color:#666666}

.app{width:190px;padding: 14px;}
.app .txt{width:84px;margin:14px 0 0 10px;line-height: 24px;color: #666;}
.app .txt a{color: #666;}
.app .txt a:hover{text-decoration: none;}
/*文章页*/
.article{padding:30px 56px;}
.article .title h2{font-size: 26px;}
.article .tool_bar{border-bottom: 1px dotted #dbdbdb; padding:20px 0 5px 4px;}
.article .tool_bar .time{float:left;margin-top:7px;color: #999}
.article .tool_bar .count{float:right;color: #666}
.article .tool_bar .count a{color: #666}
.article .tool_bar .count em{font-size:18px;font-family:Georgia;color: #000}
.article .cont{padding:0 0 10px;}
.article .cont p{font-size: 16px;margin:30px auto;line-height: 30px;text-indent:2em}
.article .cont p.noind{text-align: center;text-indent:0em}
.footer{width: 100%;line-height:30px;text-align:center;margin:40px auto 20px;color: #999;font-family:Arial;}
.footer a{padding:0 5px;color: #999}
/*#fix2{_position:absolute;_bottom:auto;
    _top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-100))}*/
#gobox{width: 54px;position: fixed;_position:absolute;right: 20px;bottom: 100px;_bottom:auto;
    _top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-100))}
#gobox a{margin-bottom: 10px}
#gobox a.gohome{width: 54px;height: 54px;display:block;background-position:-146px 0;}
#gobox a:hover{text-decoration:none;background: #c2c2c2}
#gobox a span{width: 54px;height: 54px;line-height:54px;text-align:center;display: none;cursor:pointer;}
#gobox a:hover span{display: block;color:#fff;}
#gobox a.gotop{width: 54px;height: 54px;display:block;background-position:-146px -61px;display: none;}
#home #gobox a.gohome{display: none;}
/*Harley add login style*/
.loginBg{width:100%;position:absolute;top:0;left:0;z-index:8888;display:none;background:url(http://mat1.gtimg.com/www/images/qq2012/alphabg.png); _background:#000;_opacity:0.3_;filter:alpha(opacity=30);}
*html{
    background-image:url(about:blank);
    background-attachment:fixed;
}
/*评论css*/
/*style 6.24 */

	 /*html,body{_background-image:url(about:blank);_background-attachment:fixed;}
	 *{margin:0px;padding:0px;font-family:'simsun'}*/
	 
	 
	 .upvote a,.upvote a:hover,.reply a,.reply a:hover{font-size:12px;color:#808080;cursor:pointer;background:url(http://mat1.gtimg.com/www/niuping2013/plbg.png) no-repeat;}
	 .upvote a:hover,.reply a:hover{text-decoration:none}
	 .upvote a{padding:2px 0px 3px 15px;background-position:0px 0px}
	 .upvote a:hover{background-position:0px -23px;}	 
	 .reply {margin-left:10px}
	 .reply a{padding:2px 0px 3px 15px;background-position:0px -69px}
	 .reply a:hover{background-position:0px -93px;}
	 .upvote i{font-style:normal;}
	 .upvote .hasup,.upvote .hasup:hover{color:#ccc;background-position:0px -47px}
	 
	 .popClick{cursor:pointer}
	 .post-list .topIco{background:url(http://mat1.gtimg.com/www/niuping2013/ding.png) right 21px no-repeat}
	 .post-list .hide{display:none}
	 
	 .post-list .Occupy .upvote,.post-list .Occupy .reply{display:none}
	 
	 
	 
	 .post-list .Occupy .children .upvote,.post-list .Occupy .children .reply{display:inline}
	 #tab1_allComments .post-list .Occupy .children .post-footer,.post-list .Occupy .children .post-footer{height:30px}
	 #tab1_allComments .post-list .Occupy .post-footer,.post-list .Occupy .post-footer{height:10px}
	 .post-list .Occupy .post-message-container .s{color:#666}
	 
	 
	 .post{word-break: normal;word-wrap: break-word;}
	 
	 .post .children .textarea textarea{width:575px;border:1px solid #ccc;height:90px;resize:none;padding:5px;overflow:hidden;font-size:14px;}
	 
	 
	 .post .children .children .textarea textarea{width:538px}
	 .post .children .children .children .textarea textarea{width:500px}
	 .post .children .children .children .children .textarea  textarea{width:500px}
	 
	 .commtSub{padding:5px 0px 10px 0px;padding-bottom:8p;height:30px;line-height:26px;overflow:hidden;}
	 .commtSub .submit{float:right;width:80px;height:30px;line-height:30px;text-align:center;text-decoration:none;background:#3090E0;color:#fff;font-size:14px}
	 .commtSub .submitOn{float:right;width:80px;height:30px;line-height:30px;text-align:center;text-decoration:none;background:#3090E0 url(http://mat1.gtimg.com/www/niuping2013/load.gif) center no-repeat;color:#fff;font-size:14px}
	 .commtSub .loginFlag{float:left}
	 .commtSub .loginFlag span{float:left}
	 .commtSub .myPic img{border-radius:3px}
	 .commtSub .replyTop{float:left}
	 .commtSub .replyBtn{float:right}
	 .commtSub .replyBtn .cancel{font-size:14px;font-weight:600;color:#ccc;float:right;text-decoration:none;height:30px;line-height:30px;width:80px;text-align:center;}
	 
	 .tipInfo{color:#999;padding:50px 0 10px;text-align:center;width:100%;height:18px;}
	 
	 .waitting{background:url(http://mat1.gtimg.com/www/niuping2013/loadgray.gif) center no-repeat}
	 
	 .maskObj{width:100%;filter:alpha(opacity =80);opacity:0.8;position:absolute;z-index:90000;top:0px;display:none;background:#ccc}
	 .loadMore{height:30px;line-height:30px;text-align:center;background:#f9f9f9;margin-top:30px;border-bottom:1px solid #ddd;color:#333;cursor:pointer;margin-bottom:10px;display:none}
	 .loadMore i{font-style:normal}
	 .avatar{position:absolute;left:0px;top:20px;}
	 .undis{display:none}
	 .dis{display:block}
	 
	 #commentArea{height:72px;overflow:hidden;margin-bottom:10px;border:1px solid #d3d3d3;box-shadow: 0px 0px 0px 0px #d3d3d3}
	 #commentArea .commtSub{height:40px;padding:5px 10px;border-top:1px solid #ebebeb}
	 #commentArea .submit,#commentArea .submitOn{margin-top:5px}
	 #commentArea .myName{font-size:14px;padding:13px 0px 0px 15px}
	 #commentArea .change{color:#b3b3b3;padding:14px 0px 0px 22px;cursor:pointer}
	 
	 /*
	 
	 #commentArea{box-shadow: 0px 0px 3px 1px #379be9;border-color:#379be9}
	 
	 */
	 
	#commentArea{-webkit-transition-property:box-shadow,height,border-color; -webkit-transition-duration:0.6s,0.6s,0.6s}
	#commentArea.on{box-shadow: 0px 0px 3px 1px #379be9;border-color:#379be9;height:132px;}
	#commentArea.on .textarea textarea{color:#000;font-size:14px}
	#commentArea .tips{float:left;margin-top:14px;margin-left:250px}
	
	 
	  /* top reply area */
	 
	 
	 #top_reply .commentTotleNum{float:right;width: 200px;}
	 #top_reply .commentTotleNum span.num{float:right;text-align:center;color: #666;}
	  #top_reply .commentTotleNum span.num span{font-family: Georgia;font-size: 18px;color: #000}
	 #top_reply .globalNav{margin:35px 0 20px;padding:0 5px 0 10px;padding-bottom:0px;height:41px;line-height:41px;background: url(http://mat1.gtimg.com/caixin/images/bg_maintit.png) repeat-x}
	  #top_reply .globalNav .tit{float:left;font-weight: bold;font-size: 16px;}
	 
	 #top_reply .textarea textarea{width:619px;padding:10px;resize:none;height:60px;color:#ccc;border:0;outline:none;overflow:auto;font-size:14px}
	 #top_reply .textarea textarea.on{color:#000} 
	 #top_reply .userTitle{display:none}
	
	 
	 /*wraper*/
	 
	 /*#wraper{width:1000px;margin:30px auto 0px auto;}
	 #mainBody{width:680px;padding-botttom:10px;float:left}
	 #sliderBar{width:300px;float:right;display:none}*/
	 #content{font-size:14px;font-faimly:'simsun'} 
	 #content .main_titleTab{border-bottom:1px solid #cfcece;height:35px;line-height:35px;padding-top:5px;position:relative}
	 
	 #content .main_titleTab span.on{color:#000;border-bottom:1px solid #191919;}
	 #content .main_titleTab span.on a{color:#000}
	 #content .main_titleTab span{font-size:16px;position:absolute;display:inline-block;width:82px;text-align:center;cursor:pointer;padding:0px 5px}
	 #content .main_titleTab span a{color:#999;font-weight: bold}
	 #content .main_titleTab span a:hover{text-decoration:none}
	 
	 
	 #content .main_titleTab span.tab1{left:0px;}
	 #content .main_titleTab span.tab2{left:92px;}
	 #content .main_titleTab span.tab2 em{position:absolute;display:block;height:20px;line-height:20px;color:#fff;background:#379be9 url(http://mat1.gtimg.com/www/niuping2013/popNum.png) no-repeat;left:83px;top:8px;padding:0px 6px 0px 10px;font-size:12px;display:none}
	 
	 #content .chid_titleTab{height:32px;line-height:28px;margin-top:9px;}
	 
	 #content .chid_titleTab span a:hover{text-decoration:none}
	 #content .chid_titleTab span{font-size:14px;font-weight:normal;width:75px;height:31px;text-align:center;float:left;cursor:pointer}
	 #content .chid_titleTab span a{color:#5a5a5a}
	 #content .chid_titleTab span.on{background-position: -125px -237px;}
	 #content .chid_titleTab span.on a{color:#5a5a5a}
	 
	 
	 #content .showNum{height:0px;line-height:30px;background:#455e85;cursor:pointer;text-align:center;color:#fff;margin:25px 0px 0px 0px;display:none}
	 #tab1_allComments li.post{position:relative;zoom:1;_float:left;padding:15px 0px 2px 42px;border-bottom:1px solid #e6e6e6}
	 #tab1_allComments li.post .post-content .avatar img{border-radius:5px;width:40px;height:40px}
	 #tab1_allComments li.post .children .post-content .avatar img{width:35px;height:35px}
	 
	 #tab1_allComments .children li.post{border:none;border-top:1px dotted #e6e6e6}
	 #tab1_allComments .children .children .children .children .children {margin-left:-37px}
	 #tab1_allComments .children .children .children .children .children li.post{padding-left:37px;}
	 #tab1_allComments .children .children .children .children{margin-left:-37px}
	 
	
	 
	 
	 
	 #tab1_allComments .children .post{padding-left:37px}
	 #tab1_allComments .post-body{padding-left:10px}
	 #tab1_allComments .post-header .uptime,#tab1_allComments .post-header .uptime0{color:#999;margin-left:5px;font-size:12px}
	 #tab1_allComments .post-header .publisher a{color:#455e85;font-weight:600;padding-right:8px;font-size:12px}
	 
	.wait{font-size:12px;color:#999;padding-left:15px}
	 
	 #tab1_allComments .post-header .replywho{padding-left:19px;color:#455e85;font-size:12px;background:url(http://mat1.gtimg.com/www/niuping2013/plbg.png) 0px -71px no-repeat;}
	 
	 
	 #tab1_allComments .post-footer{overflow:hidden;height:30px;line-height:30px;width:100%}
	 #tab1_allComments .post-footer .newcoment{float:right;padding-left:10px;background:url(http://mat1.gtimg.com/www/niuping2013/bluepoint.png) 0px no-repeat;font-size:12px;color:#b2b2b2;cursor:pointer;display:none}
	 #tab1_allComments .post-footer span{color:#808080;cursor:pointer;font-size:12px;}
	 #tab1_allComments .post-content{line-height:24px;}
	 
	 #tab1_allComments .post-list .indicator{display:none}
	 
	 #tab1_allComments .post-list .blueflag .indicator{background:#2e9fff;width:3px;height:40px;position:absolute;left:0px;top:20px;display:block}
	 
	 
	 #tab1_allComments .post-list .children .blueflag .indicator{height:35px}
	 
	 #tab1_allComments .post-list .blueflag .avatar{left:10px;}
	 #tab1_allComments .post-list .blueflag .post-body{padding-left:20px;}
	 #tab1_allComments .pop_reply{margin-top:10px;padding-left:12px}
	 
	 /* popup */
	 
	 .popObj{width:664px;height:80%;max-height:780px;position:fixed;_position:absolute;left:50%;top:100%;margin-left:-340px;border-radius: 3px;background:rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(GradientType = 0,startColorstr = '#60000000',endColorstr = '#60000000')\9;z-index:90001;border:1px solid #a9a9a9;overflow:hidden;padding:0px;display:none}
	 
	 
	 .popObj .head{background:#3D445E;height:120px;position:relative;border-radius:3px}
	 .popObj .head .info{height:80px;padding:20px 0px 0px 20px;color:#b8bbc8 }
	 .popObj .head .info .name{width:533px;float:left;margin-left:15px;padding-top:15px}
	 .popObj .head .info .name strong{display:block;font-size:18px;margin-bottom:10px;color:#fff;}
	 .popObj .head .info .name span.area{padding:2px 20px 4px 18px;background-position: -190px -194px;font-size:14px;line-height:21px;margin-top:20px}
	 .popObj .userPic{float:left}
	 .popObj .head .info img{border-radius:5px}
     .popObj .upandnum{line-height:30px;font-size:14px}
	 .popObj .upandnum .upvote,{-float:right;}

	 .popObj .upandnum .num i{font-style:normal;margin-right:3px}
	 .popObj .close{width:14px;height:14px;position:absolute;top:11px;right:11px;cursor:pointer;background-position: -186px -161px;;z-index:999}
	 .popObj .popContent{height:100%;background:#fff;max-height:660px}
	 .popObj .popInner{padding:10px;overflow:hidden;padding-left:20px}
	 

	 /*slider*/
	
	
	#parent {width:1px; height:600px; background:#ececec;display:none;position:relative; float:right;margin-right:5px}
	
	#parent .bottom{width:1px;position:absolute;bottom:1px;height:67px;background:url(http://mat1.gtimg.com/www/niuping2013/scrollBottombg.png) no-repeat;}
	#div1 {width:5px;height:50px;background:#56608a;position:absolute;cursor:pointer;top:0px;left:-2px;z-index:5;border-radius:7px}
	#div2 {width:625px; height:600px;  position:relative; overflow:hidden;float:left}
	#div3 {height:auto;position:absolute;width:100%}


	
	 
	 /* by linkai */
	 
	.my-comments {padding-top:10px;font-size:14px;overflow:hidden}
	.my-comments .post .post-body .message-article{ color:#808080;}

	
	.my-comments .post-content{position:relative;zoom:1;}
	.my-comments .avatar{position:absolute;left:-42px;top:15px;}
	.my-comments .avatar img{width:40px;height:40px;border-radius:4px; }
	.my-comments .my-btn { background: #2e9fff; text-align: center; margin-bottom: 18px; padding: 10px; color: #fff; border-radius: 4px; cursor: pointer; }
	.my-comments .my-nav { margin-bottom: 18px }
	.my-comments .my-nav li { float: left; width: 75px; height: 31px; line-height: 24px; text-align: center; cursor: pointer; }
	.my-comments .my-nav li.active { background: url(http://mat1.gtimg.com/www/niuping2013/btn.png) no-repeat; color: #fff; }
	.my-comments .post { position: relative; }
	.my-comments .post .post-time { position: absolute; left: -80px; top: 0px; width: 80px; padding-right: 9px; ; background: url(http://mat1.gtimg.com/www/niuping2013/dot.png) no-repeat right top; color: #808080;text-align:center;font-size:12px}
	.my-comments .post .post-body { padding: 15px 0px 0px 10px; }
	.my-comments .post .post-body.target { padding-left: 12px; }
	.my-comments .my-notification .post .post-body .message-content { padding-left: 30px}
	.my-comments .my-notification .post .post-footer { padding-left: 30px;padding-top:10px}
	.my-comments .my-notification .post .message-article { font-size: 12px; color: #999999; padding-left:2px; }
	.my-comments .my-notification .post .post-body .article-title { padding-left: 30px; line-height: 22px;}
	.my-comments .my-notification .post .line { border-bottom: 1px solid #e6e6e6; margin-left: 15px;font-size:1px; height:1px;}
	.my-comments .my-notification .post .line { border-bottom: 1px solid #e6e6e6; margin-left: 15px;font-size:1px; height:1px;}
	.my-comments .post .post-body .message-article a { padding: 0 4px; color: #455e85; line-height:18px}
	.my-comments .post .post-body .article-title { height: 24px; margin-top: 10px; }
	.my-comments .post .post-body .article-title a { color: #455e85; font-size: 12px; }
	.my-comments .post .post-body .article-title .userlist a { font-weight: bold; }
	
	.my-comments .post .post-body .message-content { margin-top: 5px; line-height: 24px; color: #222;}
	
	.my-comments .post .post-footer .menu li { float: left; padding-right: 18px; ; }
	.my-comments .my-notification{margin-top:20px;padding-top:5px}
	
	.my-comments .my-notification .textarea{padding-left:46px;}
	.my-comments .my-notification .textarea textarea{width:503px;font-size:16px}
	.my-comments .my-message textarea{width:601px}
	.my-comments .my-message .children .children textarea{width:525px}
	
	.my-comments .my-notification .post-list .post {padding-left:80px;padding-bottom:15px;background:url(http://mat1.gtimg.com/www/niuping2013/solider.png) 80px 0px repeat-y;}
	
	.my-comments .my-notification .post-list .temporary{background:none;padding-left:40px;padding-bottom:8px;line-height:24px}
	
	.my-comments .my-notification .post-list .temporary .post-body{padding-left:7px;padding-bottom:0px}
	.my-comments .my-notification .post-list .temporary .avatar{display:none}
	.my-comments .my-notification .post-list .temporary .post-footer{display:none}
	.my-comments .my-notification .post-list .temporary .uptime{font-size:12px;color:#999;margin-left:10px;font-size:12px;margin-left:10px}
	
	.my-comments .my-notification .post .post-body { padding: 0 0px 16px 18px;}
	.my-comments .my-message{padding-top:5px}
	.my-comments .my-message .post-list .post { padding-left:42px;padding-bottom:15px;background:#fff}
	.my-comments .my-message .post-list .post li.post{border:none}
	.my-comments .my-message .post-list .post li.post .post-body{padding-left:0px;line-height:24px;}
	
	.my-comments .my-message .post-list .post .post{padding-left:52px;padding-bottom:0px}
	.my-comments .my-message .post-list .post .post .post{padding-left:0px}
	.my-comments .my-message .post-list .post .post .post-content{padding-left:10px}
	.my-comments .my-message .pop_reply{padding:10px 0px 0px 10px;overflow:hidden}
	.my-comments .my-notification .pop_reply{overflow:hidden}
	
	.my-comments .my-message .post { border-bottom: 1px solid #e6e6e6 }
	.my-comments .post .my-userPic { position: absolute; left:-52px; top: 16px; }
	.my-comments .indicator { background: #ffc62e; transition: opacity 10s linear; width: 5px; height: 48px; background: #2e9fff; border-radius: 3px; top: 0; left: 0; position: absolute;display:none}
	.my-comments .my-notification .post .indicator { height: 13px }
	.my-comments .time,.uptime0,.uptime{ color: #999; font-size: 12px; display: inline-block; padding-left: 8px; }
	.my-comments .publisher a{color:#455e85;font-weight:800}
	 
	#my-notice .post-footer a,#my-notification .post-footer a{cursor:text}
	#my-notice .post-footer .upvote a:hover,#my-notification .post-footer .upvote a:hover{background-position:0 0}
	#my-notice .post-footer .reply a:hover{background-position:0 -69px}
	
	
	 /**/
	 
	 
	#sliderBar .hotlist{width:300px;}
	#sliderBar .hotlist .hd{height:36px;font-size:16px; background:#f7f7f7 url(http://mat1.gtimg.com/www/niuping2013/hotlisthd.gif) repeat-x 0 bottom;}
	#sliderBar .hotlist .hd .lefttitle{ float:left; line-height:34px; padding-left:12px;}
	#sliderBar .hotlist .hd .side-tab-title{ float:right;}
	#sliderBar .hotlist .hd .side-tab-title li{float:left; width:55px; line-height:34px;text-align:center;cursor:pointer;color:#999}
	#sliderBar .hotlist .hd li.curr{ border-bottom:2px solid #60b3f4; height:34px;color:#000}
	#sliderBar .hotlist .bd{border:1px solid #e6e6e6; border-top:none;}	
	
	
	#sliderBar .hotlist .bd li{ *+height:1%;overflow:hidden; padding:10px; padding-left:0px;border-bottom:1px solid #e6e6e6;}
	#sliderBar .hotlist .bd li:after{content:".";display:block;height:0;clear:both;visibility:hidden}
	#sliderBar .hotlist .bd li em{ float:left;width:48px; color:#dadada; font-size:22px; font-family:Verdana, Geneva, sans-serif; text-align:center;}
	#sliderBar .hotlist .bd li.f-three em{ color:#fa6768}
	#sliderBar .hotlist .bd li .r_txt{ float:left;width:228px; line-height:18px;}
	#sliderBar .hotlist .bd li .r_txt a{ color:#6c6c6c;}
	#sliderBar .hotlist .bd li .r_txt a:hover{color:#BC2D09;}
	#sliderBar .hotlist .bd li .r_txt i a{ color:#999999; font-style:normal;}
	

    /* title */

	.bigTitle{height:}	
	.bigTitle h1 a{padding-bottom:16px;font-family:'simhei';font-size: 26px;color:#000;font-weight:normal}
	.bigTitle h1 a:hover{color:#cc0000}
	 
	 /*css style */
	 
	 .userPopObj{width:220px;height:195px;background:#ccc;position:absolute;z-index:99;left:40px;top:0px;border-radius:5px}
	 .hiddenCon{display:none;}
	 .userInfo{display:none}
	 .userInfo img{vertical-align:middle;margin-right:3px}
	 .pop_reply .tips a{color:#fff}
	 .pr {position: relative;}
/*分享组件 S*/
.Tool-Article-QQ { width:638px; height:auto;padding:15px 0 43px 0 }
.shareBtn { z-index:12;  }
.shareBtn a:hover{text-decoration: none}
.Tool-Article-QQ .shareBtn {  float:left; width:305px; margin-top:10px; font-size:12px }
.shareBtn-hd { color:#666; line-height:21px; height:23px; width:64px; font-size:12px; color:#676767; border:1px solid fff; border-bottom:none; display:inline-block; padding-left:8px; z-index:3; position:relative; border-left: 1px solid #FFFFFF }
.h-shareBtn .shareBtn-hd { float:left; width: 55px; padding-left:0; padding-top:5px; color:#666; font-size:14px  } 
.shareBtn-hd i { position:absolute; right:6px; top:8px; width:0; height:0; font-size:0; line-height:0; border-width:4px; border-style:solid; border-color:#8b8c8e #fff #fff; -moz-transition:-moz-transform .2s ease-in; -webkit-transition:-webkit-transform .2s ease-in; -o-transition:-o-transform .2s ease-in; transition:transform .2s ease-in; -moz-transform:rotate(0); -webkit-transform:rotate(0); -o-transform:rotate(0); transform:rotate(0) }
.hover .shareBtn-hd i { -moz-transform:rotate(180deg); -moz-transform-origin:50% 30%; -webkit-transform:rotate(180deg); -webkit-transform-origin:50% 30%;-o-transform:rotate(180deg); -o-transform-origin:50% 30%; transform:rotate(180deg); transform-origin:50% 30%; filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2); top:3px\9 }
.hover .shareBtn-hd { margin-top:-1px; border:1px solid #d1d1d1; border-bottom:none; background:#fff }
.v-shareBtn { display:inline; width:64px; height:23px; float:left; margin:4px 0 0 8px }
.v-shareBtn .shareBtn-bd { border:1px solid #d1d1d1; position:absolute; z-index:2; left:0; top:22px; width:92px; background:#fff; padding:8px 0; display:none  }
.hover .shareBtn-bd { display:block }
.shareBtn-bd li { padding:0 0 0 11px; height:24px; line-height:24px }
.shareBtn-bd li:hover { background:#f3f3f3 }
.shareBtn-bd a { display:block; padding-left:22px; color:#5c5c5c }
.shareBtn-bd li:hover a { color:#cc0000 }
.h-shareBtn .shareBtn-hd{border:none;}
.h-shareBtn .shareBtn-bd li { float:left; margin-right:5px; width:24px; height:24px; padding:0; overflow:hidden }
.h-shareBtn .shareBtn-bd a { display:block; padding-left:24px; height:24px; width:0; filter:Alpha(Opacity=80); opacity:0.8 ;-moz-transition: opacity 0.5s ease; -webkit-transition: opacity 0.5s ease; -o-transition: opacity 0.5s ease; transition: opacity 0.5s ease }
.h-shareBtn .shareBtn-bd a:hover { filter:Alpha(Opacity=100);opacity:1 }
.shareBtn16 .s_weibo { background-position:-66px -2px }
.shareBtn16 .s_qzone { background-position:-66px -25px }
.shareBtn16 .s_weixin { background-position:-66px -49px }
.shareBtn16 .s_pengyou { background-position:-66px -74px }
.shareBtn16 .s_sina { background-position:-66px -98px }
.shareBtn16 .s_renren { background-position:-66px -122px }
.shareBtn16 .s_qmail { background-position:-66px -146px }
.shareBtn16 .s_kaixin { background-position:-66px -170px }
.shareBtn16 .s_qq { background:url(http://mat1.gtimg.com/news/dc/images/qqshare_16_24.png) 0 5px no-repeat }
.shareBtn24 .s_weibo { background-position:-62px -200px }
.shareBtn24 .s_qzone { background-position:-62px -229px }
.shareBtn24 .s_weixin { background-position:-62px -258px }
.shareBtn24 .s_pengyou { background-position:-62px -287px }
.shareBtn24 .s_sina { background-position:-62px -316px }
.shareBtn24 .s_renren { background-position:-62px -345px }
.shareBtn24 .s_qmail { background-position:-62px -374px }
.shareBtn24 .s_kaixin { background-position:-62px -403px }
.shareBtn24 .s_qq { background:url(http://mat1.gtimg.com/news/dc/images/qqshare_16_24.png) -18px -25px no-repeat }

/* sprite */
.shareBtn-bd a{ background:url(http://mat1.gtimg.com/news/dc/images/s_gallery_2012110702.png) no-repeat 0 0; display:inline-block  }

/* 订阅更多媒体 */
.subMore{ position:absolute; top:15px; right:35px; font-size:14px; font-family:Microsoft Yahei; background:url(http://mat1.gtimg.com/dyaio/images/r_dy/sub_more.png) right 2px no-repeat; padding-right:18px;}
.subMore:hover{ text-decoration:none}
/*分享组件 E*/
</style><!--[if !IE]>|xGv00|7e2401aff56a839d917aae0bd83857a4<![endif]--><!--[if !IE]>|xGv00|150b3cfebb705562ca8a441f482f4026<![endif]-->
<script type="text/javascript">
document.domain = 'qq.com';
</script>


<script src="images/coral.js" type="text/javascript"></script><script src="images/a.htm" charset="utf-8"></script><script src="images/cdn_dianjiliu.js"></script></head>
<body>
  <div class="headWrap" id="headWrap">
	<div class="header fY">
		<h1><a href="/index.php" target="_blank" bosszone="backhome1">订阅</a></h1>
		<ul id="navBox" class="nav fY" bosszone="maiNav"><li><a href="/index.php">首页<i></i></a></li><li class="arrow"></li><li><a href="http://dy.qq.com/list-tag.htm?catid=4">科技<i></i></a></li><li class="arrow"></li><li><a href="http://dy.qq.com/list-user.htm?chlid=1102">Bianews<i></i></a></li><li class="arrow"></li><li class="cur"><a href="javascript:void(0);">正文<i></i></a></li></ul>
      <a href="" url="" node-type="manageNav" class="mBtn fr" bosszone="admin"></a>
      <span class="mBtn2 fr"><i></i></span>
      
      <?php echo $_smarty_tpl->tpl_vars['login']->value;?>

	
      </div>
</div>
<div id="loginBg" class="loginBg"></div>
<div id="login_div" style="position:fixed;_position:absolute;width:400px;height:382px;padding:0;margin:0;top:50%;left:-9999px;margin:-165px 0 0 -276px;_margin-top:0;z-index:99999;visibility:hidden;">
	<iframe id="login_frame" src="" frameborder="0" height="100%" scrolling="auto" width="100%"></iframe>
</div>
<script type="text/javascript">
var NavManager = {
	path:window.location.pathname,
	init: function(boxId){
		this.container = document.getElementById(boxId);
		this.container.innerHTML = '';
		var config = [{name:"\u9996\u9875", pathname:"/"}];
	    for(var i=0, len=config.length; i<len; i++){
	    	var obj = config[i];
	    	var isCurrent = obj.pathname == this.path;
	    	this.createItem(obj, isCurrent);
	    }

	    if('/' == this.path || '/index.htm' == this.path){
	    	this.container.style.display = 'none';
	    }
	},
	createItem: function(obj, isCurrent){
		var li = document.createElement('li');
		if(isCurrent){
			li.className = 'cur';
		}
		var alink = document.createElement('a');
		alink.href = obj.pathname;
		if(isCurrent){
			alink.href = "javascript:void(0);";
		}
		if(obj.action != undefined){
			alink.setAttribute('action-type', obj.action);
		}
		var name = (this.path == '/manage.htm')?('\u8FD4\u56DE'+obj.name):obj.name;
		alink.innerHTML = name + '<i></i>';
		li.appendChild(alink);

		this.container.appendChild(li);
	},
	add: function(config){
	    for(var i=0, len=config.length; i<len; i++){
			var arrow = document.createElement('li');
			arrow.className = 'arrow';
			this.container.appendChild(arrow);

	    	var obj = config[i];
	    	var isCurrent = obj.pathname.indexOf(this.path) === 0;
	    	this.createItem(obj, isCurrent);
	    }
	}
};
NavManager.init("navBox");



document.domain="qq.com";
function ptlogin2_onResize(width, height) {
	//获得浮动Div对象
	login_wnd = document.getElementById("login_div");
	if (login_wnd)  {
		//重新设置大小注意，一定要加px，否则firefox下有问题
		login_wnd.style.width = width + "px";
		login_wnd.style.height = height + "px";
		//最好重新调整登录框的位置， 这儿略....
		//先隐藏，在显示，这样可以避免滚动条的出现
		login_wnd.style.visibility = "hidden"
		login_wnd.style.visibility = "visible"
		login_wnd.style.marginLeft = "-"+parseInt(width/2) + 'px';
		login_wnd.style.marginTop = "-"+parseInt(height/2) + 'px';
	}
}
function ptlogin2_onClose(){
	document.getElementById("login_div").style.left = "-9999px";
	document.getElementById("loginBg").style.display = "none";
}

window.QQ = {};
QQ.Cookie={
	set:function(name,value,expires,path,domain){
		if(typeof expires=="undefined"){
			expires=new Date(new Date().getTime()+3600*1000);
		}
		document.cookie=name+"="+escape(value)+((expires)?"; expires="+expires.toGMTString():"")+((path)?"; path="+path:"; path=/")+((domain)?";domain="+domain:"");
	},
	get:function(name){
		var arr=document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
		if(arr!=null){
			return unescape(arr[2]);
		}
		return null;
	},
	clear:function(name,path,domain){
		if(this.get(name)){
			document.cookie=name+"="+((path)?"; path="+path:"; path=/")+((domain)?"; domain="+domain:"")+";expires=Fri, 02-Jan-1970 00:00:00 GMT";
		}
	}
};
function getExpires(a){//a:hour
	var expires=new Date(new Date().getTime()+(a?a:1)*24*3600*1000);
	return expires;
}



var Passport = {
	check: function(){
		if(QQ.Cookie.get("skey")){
			uin = Number(QQ.Cookie.get("uin").substring(1));
			skey = QQ.Cookie.get("skey");
			try{
				var loginScript = document.createElement ("script");
				loginScript.charset="utf-8";
				loginScript.src = "http://qfwd.qq.com/?uin=" + uin + "&skey=" + skey + "&func=loginAll&refresh=0&ran="+Math.random();
				document.getElementsByTagName('head')[0].appendChild(loginScript);
			}catch(e){}
			return true;
		}else{
			var loginStatus = document.getElementById("loginStatus");
			loginStatus.innerHTML = '<a class="login" href="javascript:void(0);" onclick="Passport.login()">登录</a>';
			return false;
		}
	},
	logout: function(){
		QQ.Cookie.clear("skey", '/', "qq.com");
	},
	login: function(cbUrl){
		var doc = document;
		this.cbUrl = cbUrl;
		doc.getElementById("login_frame").src = "http://ui.ptlogin2.qq.com/cgi-bin/login?hide_title_bar=0&low_login=0&qlogin_auto_login=1&no_verifyimg=1&link_target=blank&appid=636014201&target=self&s_url=http%3A//" + window.location.hostname + "/passport/loginSuccess.htm";
		doc.getElementById("login_div").style.left = "50%";

		var loginBg = doc.getElementById("loginBg");
		loginBg.style.display = "block";
		loginBg.style.width= doc.body.clientWidth + "px";
		var height = Math.max(doc.body.clientHeight, doc.documentElement.clientHeight);
		loginBg.style.height= height + "px";
		return false;
	},
	onLogout: function(){
		this.logout();
		var path = window.location.pathname;
		if(path == '/' || path == '/index.htm'){
			window.location.href = '/#!/type/allSubscribe';
			window.location.reload();
		}else if(path == '/manage.htm'){
			window.location.href = '/manage.htm#!/type/allMediaLibrary';
			window.location.reload(true);
		}
		var loginStatus = document.getElementById("loginStatus");
		loginStatus.innerHTML = '<a class="login" href="javascript:void(0);" onclick="Passport.login()">登录</a>';
		return false;
	},
	loginSuccess:function(){
		document.getElementById("loginBg").style.display = "none";
		document.getElementById("login_div").style.left = "-9999px";
		this.check();

		if(this.cbUrl != undefined){
			window.location.href = this.cbUrl;
			window.location.reload(true);
		}
	}
};

function loginAll(obj){
	if(obj.result == 0){
		userInfoName = obj.nick.replace(/</,"&lt;").replace(/>/,"&gt;");
		var loginStatus = document.getElementById("loginStatus");
		loginStatus.innerHTML = '\u4F60\u597D\uFF0C' + userInfoName + '<a href="javascript:void(0);" class="logout" onclick="Passport.onLogout()">退出</a>';
	}
}

window.onload = function(){
	Passport.check();
}

</script><!--[if !IE]>|xGv00|24c22c348a4222adffaa643fe676ffa3<![endif]-->
  
  <script type="text/javascript">
    var ARTICLE_INFO = {};
  </script>


<div id="onekey" style="display:none" onclick="Passport.login()"></div>
 
   <div class="mainWrapTop">
   	<div class="mainWrap">
   		
		<div class="main">
		
      <div class="box-w box-radius box-shade article" node-type="shareBtn">
        <div node-type="articleContent"><div class="title fY">                        <h2><?php echo $_smarty_tpl->tpl_vars['newslist']->value['title'];?>
</h2>                    </div>
            <div class="tool_bar clear">
                <span class="time">2013-08-12 11:18:49</span>
                <div class="shareBtn v-shareBtn pr" id="shareBtn" action-type="shareBtn" bosszone="shareBtn1">                            <a class="shareBtn-hd" style="cursor: pointer;">我要分享<i></i></a>                            <div class="shareBtn-bd" node-type="shareBtn_bd">                                <ul class="shareBtn16" node-type="shareBtn_list">                                    <li><a href="javascript:void(0)" name="weibo" id="tmblogbt1" class="s_weibo">腾讯微博</a></li>                                    <li><a href="javascript:void(0)" name="qzone" class="s_qzone">QQ空间</a></li>                                    <li><a href="javascript:void(0)" name="qq" class="s_qq">QQ好友</a></li>                                    <li><a href="javascript:void(0)" name="sina" class="s_sina">新浪微博</a></li>                                </ul>                            </div>                        </div>                        <span class="count" bosszone="Ncomm"><a href="#commentsTag" id="oldcoralurl"><em target="_blank" href="http://coral.qq.com/1000278979" id="cmtNum">0</em>条评论</a></span>                    </div>
<div class="cont">
 <?php echo $_smarty_tpl->tpl_vars['newslist']->value['content'];?>
  


</div></div>
        <div id="love_Share_base" style="padding:10px 0 " node-type="love_Share_base">
          <div class="shareBtn h-shareBtn clear" bosszone="shareBtn">
            <a class="shareBtn-hd" style="cursor: pointer;">分享到:</a>
            <div class="shareBtn-bd">
              <ul class="shareBtn24" node-type="shareBtn_list">
                <li><a href="javascript:void(0)" class="s_weibo" name="weibo" alt="腾讯微博" title="腾讯微博">腾讯微博</a></li>
                <li><a href="javascript:void(0)" class="s_qzone" name="qzone" alt="QQ空间" title="QQ空间">QQ空间</a></li>      
                <li><a href="javascript:void(0)" class="s_qq" name="qq" alt="QQ好友" title="QQ好友">QQ好友</a></li>
                <li><a href="javascript:void(0)" class="s_sina" name="sina" alt="新浪微博" title="新浪微博">新浪微博</a></li>   </ul>
            </div>
          </div>
        </div>

        <div class="clear" id="webcoral">
          <!--评论s-->

          
 


          <!----评论框---->  
    
          <div id="top_reply">
            <div id="globalNav" class="globalNav clear">        
                <div class="commentTotleNum" id="commentsTag" name="commentsTag">
                  <span class="num" id="commentTotleNum"></span>
                </div>
                <span class="tit">我要评论</span>
                <div class="userTitle" style="display:none">
                  <span style="display: none;" id="loginBtn">登录</span>
                </div>
            </div>
            <div id="commentArea">
                      <div class="textarea">
                        <textarea tabindex="1" autocomplete="off" name="content" accesskey="u" id="top_content"></textarea>   
                      </div>        
                      <div class="commtSub" id="p_login_btn">  <!-- 用户登录模块 -->
                        
                        <div class="loginFlag" id="loginFlag"><span class="myPic"><img src="images/g.jpeg" onerror="this.src='http://mat1.gtimg.com/news/dc/images/user.png'" height="35" width="35"></span><span class="myName">若舟</span><span class="change">切换帐户</span></div>
                      
                        <span class="tips"></span>
                        
                        
                        <div class="submitBtn">
                        
                          <a style="display: none;" href="javascript:void(0)" class="submit" id="top_post_btn_login">登录</a>
                        
                          <a href="javascript:void(0)" class="submit" id="top_post_btn" style="">发表评论</a>
                         
                          <a href="javascript:void(0)" class="submitOn" id="top_post_btn_load" style="display:none"></a>
                        
                         
                        </div>
                         
                      </div>

            </div>
          </div>
    
  

  
  <!----评论显示列表----> 
      <div id="content">
          
              
              <!----实时显示----> 
              
              
            <div class="main_titleTab">
              
              <h2>
                <span class="tab1 on" id="myAllComment"><a href="javascript:void(0)">全部评论</a></span>
                <span class="tab2" id="myCowComment"><a href="javascript:void(0)">我的牛评<em class="popNum" id="popMsg"></em></a></span>
              </h2> 

            </div>  
              
              
            <div id="tab1_allComments" class="dis">  <!--页卡一 全部评论-->

              
          
          
              <!--推荐评论-->
          
              <div id="Recommend">
                
              
              </div>
              
              <div id="showNum" class="showNum">
                
                    <span></span>
                
              </div>
              
              <div id="allComments">
                
                  <div class="tipInfo">暂无评论</div>
              
              <ul class="post-list"></ul></div>     <!-- 全部评论 -->
              
              
              <div id="loadMore" class="loadMore">
          
                <span style="display: none;">查看更多</span>
              
              
              <em style="display: block; background: none repeat scroll 0% 0% rgb(204, 204, 204);">没有更多了</em></div>
              
              
              <!------更新数据数据源后的渲染 应该和 上面全部评论一致------>
              
              
              <div id="newComments">
              
                  
              
              
              </div>
              
            </div>

            <div id="tab2_myComments" class="undis my-comments">  <!--页卡二 我的牛评-->
            
              <div class="chid_titleTab">
              
                 <h2>
                  <span class="tab1 on" id="mytips"><a href="javascript:void(0)">提醒</a></span>
                  <span class="tab2" id="mycon"><a href="javascript:void(0)">我的评论</a></span>
                 </h2>
                 
               </div>
               
               <div id="tab3_tips" class="dis">
               
                    <div id="my-message" class="my-message">
                    
                    <div class="tipInfo waitting">
                    
                    
                    
                    </div>
                    
                    
                    <ul id="my-message-list" class="post-list"><li class="post " id="msg_5772301822253817017" tid="1000271052"><div class="post-content"><div class="indicator"></div><div class="avatar " post_uid="13651678"><img src="images/upico.jpg"></div><div class="post-body"><div class="message-article">1人  顶了你的评论：<em class="title">不错！！！</em> <span date="1376223998" class="time">1天前</span></div><div class="article-title"> <a target="_blank" href="http://view.inews.qq.com/a/20130811A0008Q00">盘点2013-14赛季最吸引眼球的15场常规赛</a> </div></div></div><ul class="children"></ul></li></ul>
                    <div class="loadMore" id="loadMsgMore"> <span>加载更多</span><em style="display:none; background:#ccc;"></em></div>
                    </div>
             

               
               </div>
               
                <div id="tab4_mycon" class="undis">
               
               
                     <div id="my-notification" class="my-notification ">
                     
                      <div class="tipInfo waitting">
                    
                    
                    
                      </div>
                     
                      <ul id="my-notification-list" class="post-list"><li class="post undefined" id="post_5772301822253817017" tid="1000271052"><div class="post-content"><div class="indicator"></div><div class="post-time"><span date="1376223998">1天前</span></div><div class="post-body"><div class="message-article">我评论了<a target="_blank" href="http://view.inews.qq.com/a/20130811A0008Q00">盘点2013-14赛季最吸引眼球的15场常规赛</a></div><div class="message-content"><div>不错！！！<span date="1376223998" class="time"></span></div></div><div class="post-footer"><em class="newcoment" id="am_5772301822253817017"></em><span class="upvote"><span><i>顶</i>(<em>1</em>)</span></span><span class="reply"><span>回复(<em>0</em>)</span></span></div></div></div><ul class="children"></ul></li></ul>
                      <div class="loadMore" id="loadCmtMore"> <span>加载更多</span><em style="display:none; background:#ccc;"></em></div>
                      </div>
                    
              
               
               
               </div>
               
               
               
            
            </div>

              
              
            
          </div>
  
            <div id="hiddenCon" class="hiddenCon"> 
          
          
          </div>

  
  
  
          <div class="pop_reply" id="public_reply" style="display:none">
              
                      <div class="textarea">
                        <textarea tabindex="1" autocomplete="off" name="content" accesskey="u" id="pop_content"></textarea>   
                      </div>        
                      <div class="commtSub" id="p_login_btn">
                      
                        <div class="replyTop">
                      
                          <span style="display: none;" class="pop_user_login">登录</span><span class="pop_user_info"></span><span class="tips"></span>
                        
                        </div>
                        
                        <div class="replyBtn">
                        
                        
                            <a href="javascript:void(0)" class="cancel" id="cancel_btn">取消</a>
                        
                            <a href="javascript:void(0)" class="submit" id="pop_post_btn">回复</a>
                            
                            
                         
                        </div> 
                         
                      </div>
          
          
          </div>

  
          <!--评论e-->
        </div>
      </div>
      
		</div>
<!--首屏测速上报-->
<script>try{QosS.topSpan("dy_article", 10);}catch(e){}</script>
		<div class="side" node-type="side">
			<div id="fix2">
      <div class="box-w box-radius box-shade mb10" style="background:#f9f9f9" node-type="mediaShow">
<div class="userbox">
  <i class="arrow-out"></i>
  <a href="http://dy.qq.com/list-user.htm?chlid=1102" class="avatar_b" bosszone="media"><img src="<?php echo $_smarty_tpl->tpl_vars['t_dir']->value;?>
member/images/0.jpeg" height="80" width="80"></a>
  <a href="http://dy.qq.com/list-user.htm?chlid=1102" class="name fY" bosszone="media">Bianews</a>
  <a href="#" class="qx2_b" istxt="3" id="subscribe" action-data="chlid=1102" action-type="unSubscribe" title="取消订阅" bosszone="subBtn">取消</a>
  <div class="count" id="subCount">2383人已订阅</div>
  <p>奉行差异化与个性化运作，既有轰动的互联网企业大新闻，也有轻松的网络江湖内幕八卦，既有和CEO大佬的聊天故事，也有活泼的网络评论。</p>
</div>
</div>

    </div>
		</div>
   	</div>
   </div>
   <div class="area footer">
    <p>
        <a href="http://www.tencent.com/" target="_blank">关于腾讯</a>|
        <a href="http://www.tencent.com/index_e.shtml" target="_blank">About Tencent</a>|
        <a href="http://www.qq.com/contract.shtml" target="_blank">服务协议</a>|
        <a href="http://www.qq.com/privacy.htm" target="_blank">隐私权保护</a>|
        <a href="http://open.qq.com/" target="_blank">开放平台</a>|
        <a href="http://www.tencentmind.com/" target="_blank">广告服务</a>|
        <a href="http://hr.tencent.com/" target="_blank">腾讯招聘</a>|
        <a href="http://gongyi.qq.com/" target="_blank">腾讯公益</a>|
        <a href="http://service.qq.com/" target="_blank">客服中心</a>|
        <a href="http://www.qq.com/map" target="_blank">网站导航</a><br>
        Copyright&nbsp;&#169;&nbsp;1998-2013&nbsp;Tencent.All&nbsp;Rights&nbsp;Reserved
    </p>
</div>
<!--[if !IE]>|xGv00|19d68634711299f870011fd56e6a078d<![endif]-->
<script type="text/template" id="mediaShow">
<div class="userbox">
  <i class="arrow-out"></i>
  <a href="{{link}}" class="avatar_b" bosszone="media"><img width="80" height="80" src="{{icon}}"/></a>
  <a href="{{link}}" class="name fY" bosszone="media">{{chlname}}</a>
  {{&subFlag}}
  <div class="count" id="subCount">{{subCount}}人已订阅</div>
  <p>{{desc}}</p>
</div>
</script>
<script type="text/template" id="media_Recommend">
<div class="rec-user clear">
  <div class="pic"><a href="{{m_link}}" class="avatar_s" action-type="islogin"><img src="{{m_img}}" width="55" height="55" /></a>{{&subFlag}}</div>
  <div class="txt">
    <div class="title"><a href="{{title_link}}" action-type="islogin">{{chlname}}</a></div>
    <p>{{text}}</p>
  </div>
</div>
</script>
<!--pgv统计-->
<script language="javascript" src="images/ping.js"></script>
<script language="javascript">if(typeof(pgvMain) == 'function')pgvMain();</script><!--[if !IE]>|xGv00|1e6e72627b05c6e2a1fca90060e541b4<![endif]-->
<script type="text/javascript" src="images/base2.js"></script>
<script type="text/javascript" src="images/mustache2.js"></script>
<script type="text/javascript" src="images/TQ2.js"></script>
<script type="text/javascript" src="images/dy_boss.js"></script>
<!--[if !IE]>|xGv00|16389843c5774f0e57c3551f71b5248e<![endif]-->
<script type="text/javascript" src="images/jquery-1.js"></script>
<script type="text/javascript">
  gBossZoneHandler.category = 'article';
</script>
<script language="javascript" src="images/tvp.js" charset="utf-8"></script>
<script type="text/javascript" src="images/article_1.js"></script>
<script type="text/javascript" src="images/share.js"></script>
<script type="text/javascript">
var videoEvt = TQ.delegatedEvent(TQ.getEl('[node-type=articleContent]'));
var addVideo = function(opt){
    var id = opt.el.getAttribute('id');
    var video = id;
    var vid = opt.data.vid;
    //定义视频对象
    video = new tvp.VideoInfo();
    //向视频对象传入视频vid
    video.setVid(vid);

    //定义播放器对象
    var player = new tvp.Player(500, 334);
    
    player.isUseHLS=function(){
        return true;
    }
    
    //设置播放器初始化时加载的视频
    player.setCurVideo(video);
    //输出播放器,参数就是上面div的id，希望输出到哪个HTML元素里，就写哪个元素的id
    player.write(id);
    opt.el.style.width = 500+'px';    
};
videoEvt.add('mod_player','click',addVideo);
                      
</script>
<script type="text/javascript">
 //右侧订阅列表滚动固定
 addEvent(window,'scroll', function(){scrollfix('fix2','headWrap')});
//非登陆操作
var isLogin = TQ.delegatedEvent(TQ.getEl('body'));
  isLogin.add('islogin','click',function(e) {
    Passport.login();
    if(!Passport.check()){
        if( e && e.preventDefault ){
            e.preventDefault();   
            // A shortcut for stoping the browser action in IE   
          }else{   
            window.event.returnValue = false;   
            return false; 
        }
    };
  })
</script>
<div id="gobox">
  <a href="http://dy.qq.com/index.htm" class="gohome" bosszone="backhome2"><span>返回首页</span></a>
  <a href="javascript:window.scrollTo(0,0);" class="gotop" bosszone="backTop"><span>返回顶部</span></a>
</div>
<script type="text/javascript">
//返回顶部
 addEvent(window,'scroll',function(){scrollgtop('gobox','gotop')});
</script>
<!--整页测速上报-->
<script type="text/javascript">try{QosS.endCheck();}catch(e){}</script><!--[if !IE]>|xGv00|b91bb74d1b632e3556dc182d6fdaa889<![endif]-->
<!--遮罩层-->
  
  <div class="maskObj" id="maskObj">
  
  
  
  </div>
  
  <!--弹出层-->
  
  <div class="popObj" id="popObj">
  
    <div class="head">
    
      <div class="info">  
    
        <div class="userPic">
          <a href="javascript:void(0)"><img src="images/g" width="80"></a>
        </div>
        
        <div class="name">
        
          <div class="upandnum">
           <strong></strong>
          
           <span class="area"></span>
           <span class="upvote">顶(<i></i>)</span> | <span class="num"><i></i>条评论</span>
           
           </div>   
        </div>
        
      
      </div>

      <div class="close"></div>
    </div>
    
    
  
    
    <div class="popContent " id="popContent">
    
      <div class="popInner">
      
        <div id="div2"> 
      
          <div id="div3">
      
            <div class="my-comments">
      
                       <div id="my-notice" class="my-notification ">
                 
                  <div class="tipInfo waitting">
            
            
            
                  </div>
                 
                 
                  <ul id="popInfo" class="post-list">
                  
                   
                    
                  </ul>
                  <div class="loadMore" id="loadPopInfo" style="display:none"> <span>加载更多</span><em style="display:none; background:#ccc;"></em></div>
                </div>
            
    
               </div>
    
          </div>
        
        </div>
        
        <div id="parent">
          
          <div id="div1">
          
          </div>
        
          <!-- <div class="bottom">
          
          
          </div> -->
        
        </div>
    
    
      </div>

    </div>
  
  </div>

  <!-- <div id="loginBg" class="loginBg"></div> -->
<!-- iShare END -->

</body></html>
<!--[if !IE]>|xGv00|f558af10324a3f2f64e0286157ab6682<![endif]--><?php }} ?>