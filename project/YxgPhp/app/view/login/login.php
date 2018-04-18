<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/15
 * Time: 20:28
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/static/assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="main">
    <div class="login">
        <h1>宝王虫草管理系统</h1>
        <div class="inset">
            <!--start-main-->
            <form method="post" action="/login/login_do/">
                <div>
                    <h2>管理登录</h2>
                    <span><label>用户名</label></span>
                    <span><input type="text" class="textbox" name="username"></span>
                </div>
                <div>
                    <span><label>密码</label></span>
                    <span><input type="password" class="password" name="pwd"></span>
                </div>
                <div class="sign">
                    <input type="submit" value="登录" class="submit" />
                </div>
            </form>
        </div>
    </div>
    <!--//end-main-->
</div>

<div class="copy-right">
    <p>&copy; 2018 Baowang Login Form. All Rights Reserved</p>

</div>
<div style="text-align:center;">
    <!--<p>更多模板：<a href="http://www.aspku.com/moban/" target="_blank">源码库</a></p>-->
</div>
</body>
</html>
