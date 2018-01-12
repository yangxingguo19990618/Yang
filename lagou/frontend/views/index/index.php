<?php

use yii\helpers\Url;
//echo '<pre>';
//print_r($type);die;

?>
<!-- end #header -->
    <div id="container">
        				
		<div id="sidebar">
			<div class="mainNavs">

                <?php foreach ($type as $value){?>

                <div class="menu_box">
						<div class="menu_main">
							<h2><?=$value['job_type_name']?> <span></span></h2>
                            <?php foreach($value['children'] as $val){?>
                                <?php foreach($val['children'] as $v) {?>
                                    <a href=""><?php echo $v['job_type_name']?></a>
                                <?php }?>
                            <?php }?>
			             </div>
					   	<div class="menu_sub dn">
                            <?php foreach($value['children'] as $val){?>
                            <dl class="reset">
                                <dt>
                                    <a href="h/jobs/list_后端开发?labelWords=label">
                                        <?=$val['job_type_name']?>
                                    </a>
                                </dt>
                                <?php foreach($val['children'] as $v) {?>
						        	<dd>
                                        <a href="h/jobs/list_Java?labelWords=label" class="curr"><?=$v['job_type_name']?></a><a href="h/jobs/list_C%2B%2B?labelWords=label"
                                    </dd>
                                <?php }?>
					        	</dl>
                            <?php }?>
                        </div>
                </div>
                <?php }?>

            </div>
			<a class="subscribe" href="subscribe.html" target="_blank">订阅职位</a>
		</div>
        <div class="content">	
	        			<div id="search_box">
		<form id="searchForm" name="searchForm" action="list.html" method="get">
        <ul id="searchType">
        	        	<li data-searchtype="1" class="type_selected">职位</li>
        	<li data-searchtype="4">公司</li>
        	        </ul>
        <div class="searchtype_arrow"></div>
        <input type="text" id="search_input" name = "kd"  tabindex="1" value=""  placeholder="请输入职位名称，如：产品经理"  />
        <input type="hidden" name="spc" id="spcInput" value=""/>
        <input type="hidden" name="pl" id="plInput" value=""/>
        <input type="hidden" name="gj" id="gjInput" value=""/>
        <input type="hidden" name="xl" id="xlInput" value=""/>
        <input type="hidden" name="yx" id="yxInput" value=""/>
        <input type="hidden" name="gx" id="gxInput" value="" />
        <input type="hidden" name="st" id="stInput" value="" />
        <input type="hidden" name="labelWords" id="labelWords" value="" />
        <input type="hidden" name="lc" id="lc" value="" />
        <input type="hidden" name="workAddress" id="workAddress" value=""/>
                <input type="hidden" name="city" id="cityInput" value=""/>
                <input type="submit" id="search_button" value="搜索" />
				
    </form>
</div>
<style>
.ui-autocomplete{width:488px;background:#fafafa !important;position: relative;z-index:10;border: 2px solid #91cebe;}
.ui-autocomplete-category{font-size:16px;color:#999;width:50px;position: absolute;z-index:11; right: 0px;/*top: 6px; */text-align:center;border-top: 1px dashed #e5e5e5;padding:5px 0;}
.ui-menu-item{ *width:439px;vertical-align: middle;position: relative;margin: 0px;margin-right: 50px !important;background:#fff;border-right: 1px dashed #ededed;}
.ui-menu-item a{display:block;overflow:hidden;}
</style>
<script type="text/javascript" src="style/js/search.min.js"></script>
<dl class="hotSearch">
	<dt>热门搜索：</dt>
    <?php foreach ($hot_search as $v){?>
	    <dd><a href="list.htmlJava?labelWords=label&city="><?=$v['job_type_name']?></a></dd>
    <?php }?>
</dl>			
			<div id="home_banner">
	            <ul class="banner_bg">
                    <li  class="banner_bg_1 current" >
	                    <a href="h/subject/s_buyfundation.html?utm_source=DH__lagou&utm_medium=banner&utm_campaign=haomai" target="_blank"><img src="style/images/d05a2cc6e6c94bdd80e074eb05e37ebd.jpg" width="612" height="160" alt="好买基金——来了就给100万" /></a>
	                </li>
                    <li  class="banner_bg_2" >
	                    <a href="h/subject/s_worldcup.html?utm_source=DH__lagou&utm_medium=home&utm_campaign=wc" target="_blank"><img src="style/images/c9d8a0756d1442caa328adcf28a38857.jpg" width="612" height="160" alt="世界杯放假看球，老板我也要！" /></a>
	                </li>
                    <li  class="banner_bg_3" >
	                    <a href="h/subject/s_xiamen.html?utm_source=DH__lagou&utm_medium=home&utm_campaign=xiamen" target="_blank"><img src="style/images/d03110162390422bb97cebc7fd2ab586.jpg" width="612" height="160" alt="出北京记——第一站厦门" /></a>
	                </li>
                </ul>
	            <div class="banner_control">
	                <em></em>
	                <ul class="thumbs">
                        <li  class="thumbs_1 current" >
	                        <i></i>
	                        <img src="style/images/4469b1b83b1f46c7adec255c4b1e4802.jpg" width="113" height="42" />
	                    </li>
                        <li  class="thumbs_2" >
	                        <i></i>
	                        <img src="style/images/381b343557774270a508206b3a725f39.jpg" width="113" height="42" />
	                    </li>
                        <li  class="thumbs_3" >
	                        <i></i>
	                        <img src="style/images/354d445c5fd84f1990b91eb559677eb5.jpg" width="113" height="42" />
	                    </li>
                    </ul>
	            </div>
	        </div><!--/#main_banner-->
			
        	<ul id="da-thumbs" class="da-thumbs">
                <?php foreach($adver_info as $v) {?>
                <li >
                    <a href="<?=$v['adver_link']?>" target="_blank">
                        <img src="<?=$v['adver_img']?>" width="113" height="113" alt="<?=$v['adver_name']?>" />
                        <div class="hot_info">
                            <h2 title="<?=$v['adver_name']?>"><?=$v['adver_name']?></h2>
                            <em></em>
                            <p title="<?=$v['adver_content']?>">
                                <?=$v['adver_content']?>
                            </p>
                        </div>
                    </a>
                </li>
                <?php }?>
            </ul>
            
            <ul class="reset hotabbing">
            	            		<li class="current">热门职位</li>
            	            	<li>最新职位</li>
            </ul>
            <div id="hotList">
	            <ul class="hot_pos reset">
                    <?php foreach($hot_job_info as $value){?>
                        <li class="clearfix">
                            <div class="hot_pos_l">
                                <div class="mb10">
                                    <a href="h/jobs/147822.html" target="_blank"><?=$value['job_name']?></a>&nbsp;
                                    <span class="c9"><?=$value['job_address']?></span>
                                </div>
                                    <span><em class="c7">月薪： </em><?=$value['job_money']?></span>
                                    <span><em class="c7">经验：</em> 不限</span>
                                    <span><em class="c7">最低学历： </em><?php
                                        $connection = \Yii::$app->db;
                                        $command = $connection->createCommand('SELECT study_extent FROM study WHERE study_id='.$value['study_id']);
                                        $post = $command->queryOne();
                                        echo $post['study_extent'];
                                        ?></span>
                                    <br />
                                    <span><em class="c7">职位诱惑：</em><?=$value['job_pay']?></span>
                                <br />
                                <span><?=$value['job_addtime']?></span>
                                <!-- <a  class="wb">分享到微博</a> -->
                            </div>
                                    <div class="hot_pos_r">
                                        <div class="mb10 recompany"><a href="h/c/399.html" target="_blank">节操精选</a></div>
                                        <span><em class="c7">领域：</em> 移动互联网</span>
                                        <span><em class="c7">创始人：</em>陈桦</span>
                                        <br />
                                        <span><em class="c7">阶段：</em> 初创型(天使轮)</span>
                                        <span><em class="c7">规模：</em>少于15人</span>
                                        <ul class="companyTags reset">
                                            <li>移动互联网</li>
                                            <li>五险一金</li>
                                            <li>扁平管理</li>
                                        </ul>
                                    </div>
                        </li>
                    <?php }?>
                    <a href="list.html" class="btn fr" target="_blank">查看更多</a>
                </ul>
	            <ul class="hot_pos hot_posHotPosition reset" style="display:none;">
                    <?php foreach ($new_job_info as $val){?>
                        <li class="clearfix">
                            <div class="hot_pos_l">
                                <div class="mb10">
                                    <a href="h/jobs/149389.html" target="_blank"><?=$val['job_name']?></a>&nbsp;
                                    <span class="c9"><?=$val['job_address']?></span>
                                </div>
                                <span><em class="c7">月薪： </em><?=$val['job_money']?></span>
                                <span><em class="c7">经验：</em>不限</span>
                                <span><em class="c7">最低学历：</em> <?php
                                    $connection = \Yii::$app->db;
                                    $command = $connection->createCommand('SELECT study_extent FROM study WHERE study_id='.$val['study_id']);
                                    $post = $command->queryOne();
                                    echo $post['study_extent'];

                                    ?></span>
                                <br />
                                <span><em class="c7">职位诱惑：</em><?=$val['job_pay']?></span>
                                <br />
                                <span><?=$val['job_addtime']?></span>
                                <!-- <a  class="wb">分享到微博</a> -->
                            </div>
                            <div class="hot_pos_r">
                                <div class="mb10"><a href="h/c/8250.html" target="_blank">途牛旅游网</a></div>
                                <span><em class="c7">领域：</em> 电子商务,在线旅游</span>
                                <span><em class="c7">创始人：</em>于敦德</span>
                                <br />
                                <span> <em class="c7">阶段： </em>上市公司</span>
                                <span> <em class="c7">规模：</em>500-2000人</span>
                                <ul class="companyTags reset">
                                    <li>绩效奖金</li>
                                    <li>股票期权</li>
                                    <li>五险一金</li>
                                </ul>
                            </div>
                        </li>
                    <?php }?>

	                	                	                <a href="list.html?city=%E5%85%A8%E5%9B%BD" class="btn fr" target="_blank">查看更多</a>
	            </ul>
            </div>
            
            <div class="clear"></div>
			<div id="linkbox">
			    <dl>
			        <dt>友情链接</dt>
			        <dd>
                        <?php foreach($friend as $v){?>
			        		<a href="<?=$v['friend_src']?>" target="_blank"><?=$v['friend_name']?></a> <span>|</span>
                        <?php }?>
			        </dd>
			    </dl>
			</div>
        </div>	
 	    <input type="hidden" value="" name="userid" id="userid" />
 		<!-- <div id="qrSide"><a></a></div> -->
<!--  -->

<!-- <div id="loginToolBar">
	<div>
		<em></em>
		<img src="style/images/footbar_logo.png" width="138" height="45" />
		<span class="companycount"></span>
		<span class="positioncount"></span>
		<a href="#loginPop" class="bar_login inline" title="登录"><i></i></a>
		<div class="right">
			<a href="register.html?from=index_footerbar" onclick="_hmt.push(['_trackEvent', 'button', 'click', 'register'])" class="bar_register" id="bar_register" target="_blank"><i></i></a>
		</div>
		<input type="hidden" id="cc" value="16002" />
		<input type="hidden" id="cp" value="96531" />
	</div>
</div>
 -->
<!-------------------------------------弹窗lightbox  ----------------------------------------->
<div style="display:none;">
	<!-- 登录框 -->
	<div id="loginPop" class="popup" style="height:240px;">
       	<form id="loginForm">
			<input type="text" id="email" name="email" tabindex="1" placeholder="请输入登录邮箱地址" />
			<input type="password" id="password" name="password" tabindex="2" placeholder="请输入密码" />
			<span class="error" style="display:none;" id="beError"></span>
		    <label class="fl" for="remember"><input type="checkbox" id="remember" value="" checked="checked" name="autoLogin" /> 记住我</label>
		    <a href="h/reset.html" class="fr">忘记密码？</a>
		    <input type="submit" id="submitLogin" value="登 &nbsp; &nbsp; 录" />
		</form>
		<div class="login_right">
			<div>还没有拉勾帐号？</div>
			<a href="register.html" class="registor_now">立即注册</a>
		    <div class="login_others">使用以下帐号直接登录:</div>
		    <a href="h/ologin/auth/sina.html" target="_blank" id="icon_wb" class="icon_wb" title="使用新浪微博帐号登录"></a>
		    <a href="h/ologin/auth/qq.html" class="icon_qq" id="icon_qq" target="_blank" title="使用腾讯QQ帐号登录" ></a>
		</div>
    </div><!--/#loginPop-->
</div>
<!------------------------------------- end ----------------------------------------->
<script type="text/javascript" src="style/js/Chart.min.js"></script>
<script type="text/javascript" src="style/js/home.min.js"></script>
<script type="text/javascript" src="style/js/count.js"></script>
			<div class="clear"></div>
			<input type="hidden" id="resubmitToken" value="" />
	    	<a id="backtop" title="回到顶部" rel="nofollow"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<div id="footer">
		<div class="wrapper">
			<a href="h/about.html" target="_blank" rel="nofollow">联系我们</a>
		    <a href="h/af/zhaopin.html" target="_blank">互联网公司导航</a>
		    <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
		    <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<i></i></a>
			<div class="copyright">&copy;2013-2014 Lagou <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">京ICP备14023790号-2</a></div>
		</div>
	</div>

<script type="text/javascript" src="style/js/core.min.js"></script>
<script type="text/javascript" src="style/js/popup.min.js"></script>

<!-- <script src="style/js/wb.js" type="text/javascript" charset="utf-8"></script>
 -->

</body>
</html>	