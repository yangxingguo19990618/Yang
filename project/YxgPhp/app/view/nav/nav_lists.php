<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/15
 * Time: 20:51
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
                        <a href="#">首页</a>
                    </li>
                    <li class="active">房源管理</li>
                    <li class="active">发布记录</li>
                </ul><!-- .breadcrumb -->
            </div>

            <div class="page-content">


                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive">
                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">
                                        <label>
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </th>
                                    <th>导航编号</th>
                                    <th>导航名称</th>
                                    <th>跳转地址</th>
                                    <th>添加时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php foreach ($nav_info as $v) {?>
                                <tr>
                                    <td class="center">
                                        <label>
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>A001<?=$v['id']?></td>
                                    <td><?=$v['nav_name']?></td>
                                    <td><?=$v['nav_link']?></td>
                                    <td><?=$v['datetime']?></td>
                                    <td>
                                        <a href="/nav/delete/<?=$v['id']?>">删除</a>
                                        ||
                                        <a href="/nav/nav_edit/<?=$v['id']?>">编辑</a>
                                    </td>
                                </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /span -->
                </div><!-- /row -->
            </div><!-- /.page-content -->
        </div><!-- /.main-content -->

