<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/13
 * Time: 9:57
 */
$dsn = "mysql:host=localhost;dbname=project";
$db = new PDO($dsn, 'root', 'root');
$rs = $db->query("SELECT * FROM bw_friend limit 10");
$rs->setFetchMode(PDO::FETCH_ASSOC);
$friend = $rs->fetchAll();
?>


<div class="LinNav W1000 margin"><img src="/static/images/Conta.png"></div>
<div class="Links">
    <div class="LinksTxt W1000 margin">
        <p>
            <?php foreach ($friend as $v) {?>
                <a href="<?=$v['friend_link']?>"><?=$v['friend_name']?></a>
            <?php }?>
        </p>
    </div>
</div>
<div id="Footer">
    <div class="Bottom W1000 margin">
        <div class="BottL FloatL">

            <p>Copyright© 2014 is the Adobe Jin Gui cordyceps. All rights reserved.</p>
        </div>
        <div class="BottR FloatR"><img src="/static/images/Logohus.png" width="107" height="35"></div>
    </div>
</div>


</body>
</html>