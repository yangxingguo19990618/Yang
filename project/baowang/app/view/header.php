<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/13
 * Time: 9:57
 */

$dsn = "mysql:host=localhost;dbname=project";
$db = new PDO($dsn, 'root', 'root');
$rs = $db->query("SELECT * FROM bw_nav");
$rs->setFetchMode(PDO::FETCH_ASSOC);
$result_arr = $rs->fetchAll();


?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="/static/css/global.css">
    <link rel="stylesheet" type="text/css" href="/static/css/style.css">
    <link rel="stylesheet" type="text/css" href="/static/css/Gdcss.css">
    <script type="text/javascript" src="/static/script/jquery1.42.min.js" style="color: rgb(0, 0, 0);"></script>
    <script type="text/javascript" src="/static/script/system.js"></script>
    <!--<script type=text/javascript src="script/jquery.js"></script>
    -->
    <title>首页</title>
</head>
<body>
<!--Top开始-->
<div id="Top">
    <div class="W1000 margin TopW">
        <div class="Logo"><img src="/static/images/Logo.png" width="230" height="75"></div>
        <div class="Tel"><img src="/static/images/Tel.png" width="285" height="48"></div>
    </div>
</div>
<!--Top结束-->
<!--Nav开始-->
<div id="Nav">
    <ul>
        <?php foreach($result_arr as $v) {?>
            <li
            ><a href="<?=$v['nav_link']?>"><?=$v['nav_name']?></a>
            </li>
        <?php }?>
    </ul>
</div>
<div class="NavY"></div>
<!--Nav结束-->
<!--Banner开始-->
<div id="yc-mod-slider">
    <div class="wrapper">
        <div id="slideshow" class="box_skitter fn-clear Mag">
            <ul style="display: none;">
                <li> <img src="/static/images/Banner4.jpg" align="top" class="cubeRandom"></li>
                <li> <img src="/static/images/Banner5.jpg" align="absmiddle" class="cubeRandom"> </li>
                <li> <img src="/static/images/Banner4.jpg" align="absmiddle" class="cubeRandom"> </li>
                <li> <img src="/static/images/Banner5.jpg" align="absmiddle" class="cubeRandom"> </li>
            </ul>
            <a href="#" class="prev_button">prev</a><a href="#" class="next_button">next</a><span class="info_slide" style="display: none;"><span class="image_number image_number_select" rel="0" id="image_n_1_0" style="background-color: rgb(204, 51, 51); color: rgb(255, 255, 255);">1</span> <span class="image_number" rel="1" id="image_n_2_0" style="background-color: rgb(51, 51, 51); color: rgb(255, 255, 255);">2</span> <span class="image_number" rel="2" id="image_n_3_0" style="background-color: rgb(51, 51, 51); color: rgb(255, 255, 255);">3</span> <span class="image_number" rel="3" id="image_n_4_0" style="background-color: rgb(51, 51, 51); color: rgb(255, 255, 255);">4</span> </span><div class="container_skitter" style="width: 1600px; height: 350px;"><div class="image"><a target="_blank" href="#"><img class="image_main" src="/static/images/Banner4.jpg" style="display: inline;"></a><div class="label_skitter" style="width: 1600px; bottom: 0px; left: 0px;"></div></div><div class="box_clone" style="left: 0px; top: 0px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: 0px; top: 0px;"></div><div class="box_clone" style="left: 0px; top: 117px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: 0px; top: -117px;"></div><div class="box_clone" style="left: 0px; top: 234px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: 0px; top: -234px;"></div><div class="box_clone" style="left: 200px; top: 0px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -200px; top: 0px;"></div><div class="box_clone" style="left: 200px; top: 117px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -200px; top: -117px;"></div><div class="box_clone" style="left: 200px; top: 234px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -200px; top: -234px;"></div><div class="box_clone" style="left: 400px; top: 0px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -400px; top: 0px;"></div><div class="box_clone" style="left: 400px; top: 117px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -400px; top: -117px;"></div><div class="box_clone" style="left: 400px; top: 234px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -400px; top: -234px;"></div><div class="box_clone" style="left: 600px; top: 0px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -600px; top: 0px;"></div><div class="box_clone" style="left: 600px; top: 117px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -600px; top: -117px;"></div><div class="box_clone" style="left: 600px; top: 234px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -600px; top: -234px;"></div><div class="box_clone" style="left: 800px; top: 0px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -800px; top: 0px;"></div><div class="box_clone" style="left: 800px; top: 117px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -800px; top: -117px;"></div><div class="box_clone" style="left: 800px; top: 234px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -800px; top: -234px;"></div><div class="box_clone" style="left: 1000px; top: 0px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -1000px; top: 0px;"></div><div class="box_clone" style="left: 1000px; top: 117px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -1000px; top: -117px;"></div><div class="box_clone" style="left: 1000px; top: 234px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -1000px; top: -234px;"></div><div class="box_clone" style="left: 1200px; top: 0px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -1200px; top: 0px;"></div><div class="box_clone" style="left: 1200px; top: 117px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -1200px; top: -117px;"></div><div class="box_clone" style="left: 1200px; top: 234px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -1200px; top: -234px;"></div><div class="box_clone" style="left: 1400px; top: 0px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -1400px; top: 0px;"></div><div class="box_clone" style="left: 1400px; top: 117px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -1400px; top: -117px;"></div><div class="box_clone" style="left: 1400px; top: 234px; width: 200px; height: 117px; display: none;"><img src="/static/images/Banner5.jpg" style="left: -1400px; top: -234px;"></div></div></div>
        <script type="text/javascript" src="script/slideshow.js"></script>
    </div>
</div>
<!--Banner结束-->