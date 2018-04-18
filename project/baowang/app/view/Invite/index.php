<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/13
 * Time: 14:35
 */
?>
<div id="Main02" class="W1000 margin">
    <!--左边-->
    <div class="Mainleft FloatL">
        <p><img src="/static/images/Bwmm.jpg" width="249" height="156"></p>
        <p><img src="/static/images/Bwmm.jpg" width="249" height="156"></p>
        <p><img src="static/images/Bwmm.jpg" width="249" height="156"></p>
    </div>
    <!--右边-->
    <div class="MainRight FloatL">
        <div class="JTop">诚邀加盟</div>
            <?php foreach($data as $v){?>
                <p><?=$v['invite']?></p>
            <?php }?>
        <div class="Line"></div>
    </div>
</div>
