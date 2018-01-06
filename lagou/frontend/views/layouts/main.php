<?php
use yii\helpers\Url;
use frontend\models\Users;
use frontend\models\UsersInfo;
use frontend\models\Nav;
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
    <script type="text/javascript" src="style/js/excanvas.js"></script>
    <![endif]-->
    <script type="text/javascript">
        var youdao_conv_id = 271546;
    </script>
    <script type="text/javascript" src="style/js/conv.js"></script>
</head>
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

            <ul class="loginTop">
                <li><img src="<?=$user['user_img']?>" alt="" width="30px" height="30px"></li>
                <li>欢迎您<a href="=" rel="nofollow"><?=$user['user_name']?></a></li>

            </ul>

        <?php }?>


    </div>
</div>
<?=$content?>

