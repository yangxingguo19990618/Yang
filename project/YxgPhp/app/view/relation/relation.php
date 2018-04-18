<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/17
 * Time: 10:27
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
            <li class="active">联系我们</li>
            <li class="active">联系我们</li>
        </ul><!-- .breadcrumb -->
    </div>

    <div class="page-content">
        <div class="row">


            <div class="col-xs-12">
                <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="/video/add_video_do/">


                    <center>

                        <span>
                            <?=$data['relation']?>
                        </span>

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

