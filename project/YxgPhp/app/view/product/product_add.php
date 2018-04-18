<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/15
 * Time: 21:08
 */
?>


        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                </script>

                <ul class="breadcrumb">
                    1
                </ul><!-- .breadcrumb -->
            </div>

            <div class="page-content">
                <div class="row">


                    <div class="col-xs-12">

                        <form class="form-horizontal" role="form" method="post" action="/product/product_add_do/" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 产品名称 </label>

                                <div class="col-sm-9">
                                    <input name="product_name" type="text" id="form-field-1" placeholder="请输入产品名称" class="col-xs-10 col-sm-5">
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 产品介绍 </label>

                                <div class="col-sm-9">
                                    <textarea name="product_show" id="" cols="48" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 产品实例 </label>

                                <div class="col-sm-9">
                                    <input name="product_img" type="file">
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 主要功能 </label>

                                <div class="col-sm-9">
                                    <input name="main_role" type="text" id="form-field-2" placeholder="" class="col-xs-10 col-sm-5">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 保质期 </label>

                                <div class="col-sm-9">
                                    <input name="product_term" type="number" style="height: 25px;width: 80 px;">&nbsp天
                                </div>
                            </div>

                            <div class="space-4"></div>


                            <div class="clearfix form-actions">
                                <div class="col-md-offset-3 col-md-9">
                                    <!--<i class="icon-ok bigger-110">-->

                                   <!-- <button class="btn btn-info" type="button">

                                        增加
                                    </button>-->
                                    <input type="submit" value="增加" class="btn btn-info">

                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn" type="reset">
                                        <!--<i class="icon-undo bigger-110"></i>-->
                                        重置
                                    </button>
                                </div>
                            </div>

                            <div class="hr hr-24"></div>



                        </form>
                    </div><!-- /span -->
                </div><!-- /row -->

            </div><!-- /.page-content -->
        </div><!-- /.main-content -->
