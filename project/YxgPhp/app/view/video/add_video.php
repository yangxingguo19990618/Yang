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
                    <li class="active">新增视频</li>
                </ul><!-- .breadcrumb -->
            </div>

            <div class="page-content">
                <div class="row">


                    <div class="col-xs-12">
                        <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="/video/add_video_do/">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 视频名称 </label>

                                <div class="col-sm-9">
                                    <input name="video_name" type="text" id="form-field-1" placeholder="请输入视频名称" class="col-xs-10 col-sm-5" />
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 请选择文件 </label>

                                <div class="col-sm-9">
                                    <input type="file" name="file" id="form-field-2" class="col-xs-10 col-sm-5" />
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="clearfix form-actions">
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" value=" 确认添加 " class="btn btn-info">

                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn" type="reset">
                                        <i class="icon-undo bigger-110"></i>
                                        重置信息
                                    </button>
                                </div>
                            </div>


                        </form>
                    </div><!-- /span -->
                </div><!-- /row -->

            </div><!-- /.page-content -->
        </div><!-- /.main-content -->