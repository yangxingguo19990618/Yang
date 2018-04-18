<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/13
 * Time: 15:03
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/13
 * Time: 14:31
 */
?>

<div id="Main03" class="W1000 margin">
    <!--左边-->
    <div class="Side FloatL">

        <center>
            <div class="Zjgg"><img src="/static/images/LOGo03.jpg" width="350"></div>
        </center>
        <div class="Category">
            <h2>联系我们</h2>
            <p><a href="#">更多&gt;&gt;</a></p>
        </div>
        <div class="lxwm">
            <dl>
                <dt>地&nbsp;&nbsp;&nbsp;&nbsp;址：中国 重庆 解放碑 英利国际1202</dt>
                <dt>公司网址：www.bwcc.com.cn</dt>
                <dt>天猫商城：www.bwcc.tmall.com</dt>
                <dt>联系电话：4000 023 186</dt>
                <dd>023-67795938</dd>
            </dl>

        </div>
        <div class="Leftgg"><a href="#"><img src="/static/images/123.jpg" width="350" alt="广告栏位" title="固定宽 不固定高"></a></div>
    </div>
    <!--右边-->
    <div class="M04Right FloatL">
        <div class="Current">您当前位置：<a href="#">首页</a>&gt;&gt;<strong>公司资源</strong></div>
        <!--列表开始-->
        <div class="Much"><p class="JgBg">价格:</p><p><a href="#">100~200</a></p><p><a href="#">300~400</a></p><p><a href="#">500~600</a></p></div>
        <div class="ListD">
            <div class="ListNav">冬虫夏草</div>
            <div class="ListImg">
                <tr>
                <?php foreach ($data as $v) {?>
                    <div class="Img01">
                        <p><a href="Content.html"><img src="http://yxg.baowangadmin.com<?=$v['product_img']?>" width="200" height="200" alt="" title="点击查看详情"></a></p>
                        <p class="Imgtxt"><a href="Content.html">冬虫夏草255元/克</a></p>
                        <div class="BjBg"><p>最新</p></div>
                    </div>
                <?php }?>
                </tr>
            </div>
        </div>
        <!--列表结束-->
        <div class="H40"></div>
        <div class="PagingBR">
            <ul>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li>...</li>
                <li><a href="#">199</a></li>
                <li><a href="#">200</a></li>
                <li><a href="#">Next</a></li>
                <li>
                </li>
            </ul>
        </div>
    </div>
</div>

