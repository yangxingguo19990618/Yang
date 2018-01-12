<?php
use yii\helpers\Url;
use frontend\models\Users;
use frontend\models\UsersInfo;
use frontend\models\Nav;
?>
<!--根据当前IP地址获取当前地区-->
<?php
$area_ip = $_SERVER["REMOTE_ADDR"] = '114.249.223.21';
$area_info = file_get_contents('http://api.k780.com:88/?app=ip.get&ip='.$area_ip.'&appkey=10003&sign=b59bc3ef6191eb9f747dd4e83c99f2a4&format=json');
$arr_info = json_decode($area_info,true);
$area_name = $arr_info['result']['att'];
?>
<head>
    <script type="text/javascript" async="" src="http://conv.youdao.com/pub/conversion.js"></script><script id="allmobilize" charset="utf-8" src="style/js/allmobilize.min.js"></script><style type="text/css"></style>
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <link rel="alternate" media="handheld">
    <!-- end 云适配 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>拉勾网</title>
    <meta property="qc:admins" content="23635710066417756375">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6">

    <!-- <div class="web_root"  style="display:none">h</div> -->
    <script type="text/javascript">
        var ctx = "h";
        console.log(1);
    </script>
    <link rel="Shortcut Icon" href="h/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="style/css/style.css">
    <link rel="stylesheet" type="text/css" href="style/css/external.min.css">
    <link rel="stylesheet" type="text/css" href="style/css/popup.css">
    <script src="style/js/jquery.1.10.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="style/js/jquery.lib.min.js"></script>
    <script src="style/js/ajaxfileupload.js" type="text/javascript"></script>
    <script type="text/javascript" src="style/js/additional-methods.js"></script>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="style/js/excanvas.js"></scr ipt>
    <![endif]-->
    <script type="text/javascript">
        var youdao_conv_id = 271546;
    </script>
    <script type="text/javascript" src="style/js/conv.js"></script>
</head>
当前城市为<a href="">:<?=$area_name?></a>
<div id="header">
    <div class="wrapper">
        <a href="index.html" class="logo">
            <img src="style/images/logo.png" width="229" height="43" alt="拉勾招聘-专注互联网招聘">
        </a>
        <ul class="reset" id="navheader">
            <?php
                //导航栏展示
                $nav = Nav::find()->asArray()->all();
            ?>
            <?php foreach ($nav as $v) {?>
                <li class="current"><a href="<?=$v['nav_link']?>"><?=$v['nav_name']?></a></li>
            <?php }?>
        </ul>
        <?php $session = \Yii::$app->session;if(empty($session->get('u_id'))){?>
            <ul class="loginTop">
                <li><a href="<?=Url::toRoute(['login/login'])?>" rel="nofollow">登录</a></li>
                <li>|</li>
                <li><a href="register.html" rel="nofollow">注册</a></li>
            </ul>

           <?php } else {

            $session = \Yii::$app->session;
            $u_id = $session->get('u_id');
            $res = Users::find()
                ->where(['id'=>$u_id])
                ->asArray()
                ->one();
            $user = UsersInfo::find()
                ->where(['user_email'=>$res['email']])
            ->asArray()
            ->one();
            ?>


            <dl class="collapsible_menu">
                <dt>
                    <span><img src="<?=$user['user_img']?>" alt="" width="30px" height="30px"></span>
                    <span><?=$user['user_name']?>&nbsp;</span>
                    <span class="red dn" id="noticeDot-0"></span>
                    <i></i>
                </dt>
                <dd style="display: none;"><a rel="nofollow" href="<?=Url::toRoute(['jianli/index'])?>">我的简历</a></dd>
                <dd style="display: none;"><a href="collections.html">我收藏的职位</a></dd>
                <dd class="btm" style="display: none;"><a href="subscribe.html">我的订阅</a></dd>
                <dd style="display: none;"><a href="create.html">我要招人</a></dd>
                <dd style="display: none;"><a href="<?=Url::toRoute(['account/index'])?>">帐号设置</a></dd>
                <dd class="logout" style="display: none;"><a rel="nofollow" href="<?=Url::toRoute(['login/exit'])?>">退出</a></dd>
            </dl>

        <?php }?>


    </div>
</div>
<?=$content?>

