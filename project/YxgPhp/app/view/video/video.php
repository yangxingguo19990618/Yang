<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/16
 * Time: 12:02
 */
?>
<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
        </script>

        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="/index/index/">首页</a>
            </li>
            <li class="active">宝王虫草控制台</li>
            <li class="active">首页管理</li>
            <li class="active">视频展示</li>
        </ul><!-- .breadcrumb -->
    </div>

    <div class="page-content">
        <div class="row">


            <div class="col-xs-12">
                <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="/video/add_video_do/">


<center>
    <h1><?=$video_info['video_name']?></h1>
    <!--<video controls="controls"><source src=""ype="video/mp4"></source>-->
    <video controls="controls" autoplay="autoplay"  loop="loop  " width="1000px" height="1500px" src="<?=$video_info['video_src']?>" controls="controls">

    </video>
</center>



                    <div class="space-4"></div>

                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="submit" value=" 点击删除 " class="btn btn-info">

                            &nbsp; &nbsp; &nbsp;

                        </div>
                    </div>


                </form>
            </div><!-- /span -->
        </div><!-- /row -->

    </div><!-- /.page-content -->
</div><!-- /.main-content -->
