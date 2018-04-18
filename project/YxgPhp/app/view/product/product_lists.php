<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/18
 * Time: 9:23
 */
?>
<style>
    th {
        text-align: center;
    }
    td{
        text-align: center;
    }
</style>
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
            <li class="active">产品管理</li>
            <li class="active">产品列表</li>
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
                            <th>产品编号</th>
                            <th>产品实例</th>
                            <th>产品名称</th>
                            <th>产品介绍</th>
                            <th>主要功能</th>
                            <th>保质期</th>
                            <th>操作</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($data as $v) {?>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td>Bw_00<?=$v['id']?></td>
                                <td><img width="50px" height="40px" src="<?=$v['product_img']?>" alt=""></td>
                                <td><?=$v['product_name']?></td>
                                <td><?=$v['product_show']?></td>
                                <td><?=$v['main_role']?></td>
                                <td><?=$v['product_term']?></td>
                                <td>
                                    <a href="/product/delete/<?=$v['id']?>">删除</a>
                                    ||
                                    <a href="/product/product_edit/<?=$v['id']?>">编辑</a>
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


