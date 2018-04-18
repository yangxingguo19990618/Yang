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

                        <form class="form-horizontal" role="form" method="post" action="/nav/nav_add_do/">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 导航名称 </label>

                                <div class="col-sm-9">
                                    <input name="nav_name" type="text" id="form-field-1" placeholder="请输入导航名称" class="col-xs-10 col-sm-5">
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 跳转地址 </label>

                                <div class="col-sm-9">
                                    <input name="nav_link" type="text" id="form-field-2" placeholder="请输入将要跳转的地址" class="col-xs-10 col-sm-5">
                                </div>
                            </div>

                            <div class="space-4"></div>

                           <!-- <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 网站 </label>

                                <div class="col-sm-9">
                                    <select>
                                        <option value="">&nbsp;</option>
                                        <option value="TC">58同城</option>
                                        <option value="GJ">赶集网</option>
                                        <option value="XL">新浪网</option>
                                        <option value="HT">汇天下</option>
                                    </select>
                                </div>
                            </div>-->

                           <!-- <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 类型 </label>

                                <div class="col-sm-9">
                                    <select>
                                        <option value="">&nbsp;</option>
                                        <option value="BY">包月</option>
                                        <option value="FBY">非包月</option>
                                    </select>
                                </div>
                            </div>-->



                           <!-- <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-2">到期时间</label>

                                <div class="col-sm-9">
                                    <div class="input-group" style=" width:150px;">
                                        <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy">
                                        <span class="input-group-addon">
															<i class="icon-calendar bigger-110"></i>
														</span>
                                    </div>
                                </div>
                            </div>-->


                            <div class="clearfix form-actions">
                                <div class="col-md-offset-3 col-md-9">
                                    <!--<i class="icon-ok bigger-110">-->

                                   <!-- <button class="btn btn-info" type="button">

                                        增加
                                    </button>-->
                                    </i><input type="submit" value="增加" class="btn btn-info">

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
