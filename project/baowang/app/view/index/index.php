<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/13
 * Time: 11:48
 */
?>


<div id="Main">
    <!--虫草介绍开始-->
    <div class="Introduction01">
        <div class="TntrW W1000 margin">
            <div class="LefttTxt FloatL">
                <h2>冬虫夏草</h2>
                <p>冬虫夏草是虫草的一种，主产于青藏高原上，又简称"虫草"。虫草是麦角菌科真菌冬虫夏草寄生在蝙蝠蛾科昆虫幼虫上的子座及幼虫尸体的复合体，主要活性成分虫草素，和虫草酸虫草多糖等有益于人体吸收的物质，其中出名有大成草虫草素，其有调节免疫系统功能、抗肿瘤、抗疲劳等多种功效。</p>
            </div>
            <div class="Rightimg FloatL"><img src="/static/images/imgr01.jpg" width="234" height="150"></div>
        </div>
    </div>
    <!--虫草介绍结束-->
    <div class="MainBg">
        <div class="Product W1000 margin">
            <div class="ProductNav"><img src="/static/images/poNav.png"></div>
            <!--产品展示JS开始-->
            <div class="Instiute">
                <div class="InsBg">
                    <a href="javascript:void(0);" id="prev" class="InsLeft Fleft"></a>
                   <table>
                       <tr>
                           <?php foreach ($product as $v){?>
                           <td style="margin-right: 15px"><img width="210px" height="210px" src="http://yxg.baowangadmin.com<?=$v['product_img']?>" alt=""></td>
                           <?php }?>
                       </tr>
                   </table>
                    <a href="javascript:void(0);" id="next" class="InsRight Fright"></a></div>
            </div>
            <!--产品展示JS结束-->
            <!--视频展示开始-->
            <div class="VideoDisplay"><img src="/static/images/VideoDisplay.png"></div>
            <div class="VidoBg">
                <div class="Vido FloatL">
                    <video controls="controls" autoplay="autoplay"  loop="loop"width="300" height="200px" src="http://yxg.baowangadmin.com<?=$video['video_src']?>"></video></div>
                <div class="VidoR FloatR">
                    <div id="msg_slideshow" class="msg_slideshow">
                        <div id="msg_wrapper" class="msg_wrapper"><img src="images/12.jpg" style="width: 400px; height: 266px;"></div>
                        <div id="msg_controls" class="msg_controls"> <a href="#" id="msg_grid" class="msg_grid"></a> <a href="#" id="msg_prev" class="msg_prev"></a> <a href="#" id="msg_pause_play" class="msg_pause"></a> <a href="#" id="msg_next" class="msg_next"></a> </div>
                        <div id="msg_thumbs" class="msg_thumbs">
                            <div class="msg_thumb_wrapper" style="display: none;">
                                <a href="#"><img src="/static/images/thumbs/1.jpg" alt="/static/images/1.jpg"></a>
                                <a href="#"><img src="/static/images/thumbs/2.jpg" alt="/static/images/2.jpg"></a>
                                <a href="#"><img src="/static/images/thumbs/3.jpg" alt="/static/images/3.jpg"></a>
                                <a href="#"><img src="/static/images/thumbs/4.jpg" alt="/static/images/4.jpg"></a>
                                <a href="#"><img src="/static/images/thumbs/5.jpg" alt="/static/images/5.jpg"></a>
                                <a href="#"><img src="/static/images/thumbs/6.jpg" alt="/static/images/6.jpg"></a>
                            </div>
                            <div class="msg_thumb_wrapper" style="display: block;">
                                <a href="#"><img src="/static/images/thumbs/7.jpg" alt="/static/images/7.jpg"></a>
                                <a href="#"><img src="/static/images/thumbs/8.jpg" alt="/static/images/8.jpg"></a>
                                <a href="#"><img src="/static/images/thumbs/9.jpg" alt="/static/images/9.jpg"></a>
                                <a href="#"><img src="/static/images/thumbs/10.jpg" alt="/static/images/10.jpg"></a>
                                <a href="#"><img src="/static/images/thumbs/11.jpg" alt="/static/images/11.jpg"></a>
                                <a href="#"><img src="/static/images/thumbs/12.jpg" alt="/static/images/12.jpg"></a>
                            </div>
                            <a href="#" id="msg_thumb_next" class="msg_thumb_next"></a> <a href="#" id="msg_thumb_prev" class="msg_thumb_prev"></a> <a href="#" id="msg_thumb_close" class="msg_thumb_close"></a> <span class="msg_loading"></span> </div>
                    </div>
                    <!-- The JavaScript -->
                    <script type="text/javascript">
                        $(function() {
                            /**
                             * interval : time between the display of images
                             * playtime : the timeout for the setInterval function
                             * current  : number to control the current image
                             * current_thumb : the index of the current thumbs wrapper
                             * nmb_thumb_wrappers : total number	of thumbs wrappers
                             * nmb_images_wrapper : the number of images inside of each wrapper
                             */
                            var interval			= 4000;
                            var playtime;
                            var current 			= 0;
                            var current_thumb 		= 0;
                            var nmb_thumb_wrappers	= $('#msg_thumbs .msg_thumb_wrapper').length;
                            var nmb_images_wrapper  = 6;
                            /**
                             * start the slideshow
                             */
                            play();

                            /**
                             * show the controls when
                             * mouseover the main container
                             */
                            slideshowMouseEvent();
                            function slideshowMouseEvent(){
                                $('#msg_slideshow').unbind('mouseenter')
                                    .bind('mouseenter',showControls)
                                    .andSelf()
                                    .unbind('mouseleave')
                                    .bind('mouseleave',hideControls);
                            }

                            /**
                             * clicking the grid icon,
                             * shows the thumbs view, pauses the slideshow, and hides the controls
                             */
                            $('#msg_grid').bind('click',function(e){
                                hideControls();
                                $('#msg_slideshow').unbind('mouseenter').unbind('mouseleave');
                                pause();
                                $('#msg_thumbs').stop().animate({'top':'0px'},500);
                                e.preventDefault();
                            });

                            /**
                             * closing the thumbs view,
                             * shows the controls
                             */
                            $('#msg_thumb_close').bind('click',function(e){
                                showControls();
                                slideshowMouseEvent();
                                $('#msg_thumbs').stop().animate({'top':'-230px'},500);
                                e.preventDefault();
                            });

                            /**
                             * pause or play icons
                             */
                            $('#msg_pause_play').bind('click',function(e){
                                var $this = $(this);
                                if($this.hasClass('msg_play'))
                                    play();
                                else
                                    pause();
                                e.preventDefault();
                            });

                            /**
                             * click controls next or prev,
                             * pauses the slideshow,
                             * and displays the next or prevoius image
                             */
                            $('#msg_next').bind('click',function(e){
                                pause();
                                next();
                                e.preventDefault();
                            });
                            $('#msg_prev').bind('click',function(e){
                                pause();
                                prev();
                                e.preventDefault();
                            });

                            /**
                             * show and hide controls functions
                             */
                            function showControls(){
                                $('#msg_controls').stop().animate({'right':'15px'},500);
                            }
                            function hideControls(){
                                $('#msg_controls').stop().animate({'right':'-110px'},500);
                            }

                            /**
                             * start the slideshow
                             */
                            function play(){
                                next();
                                $('#msg_pause_play').addClass('msg_pause').removeClass('msg_play');
                                playtime = setInterval(next,interval)
                            }

                            /**
                             * stops the slideshow
                             */
                            function pause(){
                                $('#msg_pause_play').addClass('msg_play').removeClass('msg_pause');
                                clearTimeout(playtime);
                            }

                            /**
                             * show the next image
                             */
                            function next(){
                                ++current;
                                showImage('r');
                            }

                            /**
                             * shows the previous image
                             */
                            function prev(){
                                --current;
                                showImage('l');
                            }

                            /**
                             * shows an image
                             * dir : right or left
                             */
                            function showImage(dir){
                                /**
                                 * the thumbs wrapper being shown, is always
                                 * the one containing the current image
                                 */
                                alternateThumbs();

                                /**
                                 * the thumb that will be displayed in full mode
                                 */
                                var $thumb = $('#msg_thumbs .msg_thumb_wrapper:nth-child('+current_thumb+')')
                                    .find('a:nth-child('+ parseInt(current - nmb_images_wrapper*(current_thumb -1)) +')')
                                    .find('img');
                                if($thumb.length){
                                    var source = $thumb.attr('alt');
                                    var $currentImage = $('#msg_wrapper').find('img');
                                    if($currentImage.length){
                                        $currentImage.fadeOut(function(){
                                            $(this).remove();
                                            $('<img />').load(function(){
                                                var $image = $(this);
                                                resize($image);
                                                $image.hide();
                                                $('#msg_wrapper').empty().append($image.fadeIn());
                                            }).attr('src',source);
                                        });
                                    }
                                    else{
                                        $('<img />').load(function(){
                                            var $image = $(this);
                                            resize($image);
                                            $image.hide();
                                            $('#msg_wrapper').empty().append($image.fadeIn());
                                        }).attr('src',source);
                                    }

                                }
                                else{ //this is actually not necessary since we have a circular slideshow
                                    if(dir == 'r')
                                        --current;
                                    else if(dir == 'l')
                                        ++current;
                                    alternateThumbs();
                                    return;
                                }
                            }

                            /**
                             * the thumbs wrapper being shown, is always
                             * the one containing the current image
                             */
                            function alternateThumbs(){
                                $('#msg_thumbs').find('.msg_thumb_wrapper:nth-child('+current_thumb+')')
                                    .hide();
                                current_thumb = Math.ceil(current/nmb_images_wrapper);
                                /**
                                 * if we reach the end, start from the beggining
                                 */
                                if(current_thumb > nmb_thumb_wrappers){
                                    current_thumb 	= 1;
                                    current 		= 1;
                                }
                                /**
                                 * if we are at the beggining, go to the end
                                 */
                                else if(current_thumb == 0){
                                    current_thumb 	= nmb_thumb_wrappers;
                                    current 		= current_thumb*nmb_images_wrapper;
                                }

                                $('#msg_thumbs').find('.msg_thumb_wrapper:nth-child('+current_thumb+')')
                                    .show();
                            }

                            /**
                             * click next or previous on the thumbs wrapper
                             */
                            $('#msg_thumb_next').bind('click',function(e){
                                next_thumb();
                                e.preventDefault();
                            });
                            $('#msg_thumb_prev').bind('click',function(e){
                                prev_thumb();
                                e.preventDefault();
                            });
                            function next_thumb(){
                                var $next_wrapper = $('#msg_thumbs').find('.msg_thumb_wrapper:nth-child('+parseInt(current_thumb+1)+')');
                                if($next_wrapper.length){
                                    $('#msg_thumbs').find('.msg_thumb_wrapper:nth-child('+current_thumb+')')
                                        .fadeOut(function(){
                                            ++current_thumb;
                                            $next_wrapper.fadeIn();
                                        });
                                }
                            }
                            function prev_thumb(){
                                var $prev_wrapper = $('#msg_thumbs').find('.msg_thumb_wrapper:nth-child('+parseInt(current_thumb-1)+')');
                                if($prev_wrapper.length){
                                    $('#msg_thumbs').find('.msg_thumb_wrapper:nth-child('+current_thumb+')')
                                        .fadeOut(function(){
                                            --current_thumb;
                                            $prev_wrapper.fadeIn();
                                        });
                                }
                            }

                            /**
                             * clicking on a thumb, displays the image (alt attribute of the thumb)
                             */
                            $('#msg_thumbs .msg_thumb_wrapper > a').bind('click',function(e){
                                var $this 		= $(this);
                                $('#msg_thumb_close').trigger('click');
                                var idx			= $this.index();
                                var p_idx		= $this.parent().index();
                                current			= parseInt(p_idx*nmb_images_wrapper + idx + 1);
                                showImage();
                                e.preventDefault();
                            }).bind('mouseenter',function(){
                                var $this 		= $(this);
                                $this.stop().animate({'opacity':1});
                            }).bind('mouseleave',function(){
                                var $this 		= $(this);
                                $this.stop().animate({'opacity':0.5});

                            });

                            /**
                             * resize the image to fit in the container (400 x 400)
                             */
                            function resize($image){
                                var theImage 	= new Image();
                                theImage.src 	= $image.attr("src");
                                var imgwidth 	= theImage.width;
                                var imgheight 	= theImage.height;

                                var containerwidth  = 400;
                                var containerheight = 400;

                                if(imgwidth	> containerwidth){
                                    var newwidth = containerwidth;
                                    var ratio = imgwidth / containerwidth;
                                    var newheight = imgheight / ratio;
                                    if(newheight > containerheight){
                                        var newnewheight = containerheight;
                                        var newratio = newheight/containerheight;
                                        var newnewwidth =newwidth/newratio;
                                        theImage.width = newnewwidth;
                                        theImage.height= newnewheight;
                                    }
                                    else{
                                        theImage.width = newwidth;
                                        theImage.height= newheight;
                                    }
                                }
                                else if(imgheight > containerheight){
                                    var newheight = containerheight;
                                    var ratio = imgheight / containerheight;
                                    var newwidth = imgwidth / ratio;
                                    if(newwidth > containerwidth){
                                        var newnewwidth = containerwidth;
                                        var newratio = newwidth/containerwidth;
                                        var newnewheight =newheight/newratio;
                                        theImage.height = newnewheight;
                                        theImage.width= newnewwidth;
                                    }
                                    else{
                                        theImage.width = newwidth;
                                        theImage.height= newheight;
                                    }
                                }
                                $image.css({
                                    'width'	:theImage.width,
                                    'height':theImage.height
                                });
                            }
                        });
                    </script>
                </div>
            </div>
            <!--视频展示结束-->
            <!--最新优惠活动开始-->
            <div class="Yh">
                <div class="YhT FloatL"><img src="/static/images/NewDiscount.png"></div>
                <div class="YhRight FloatR">
                    <div class="Taobao">网络客户请点击：<a href="#">www.baowang.com</a></div>
                    <div class="Xpt">
                        <p class="QQBg"><a target="blank" ;="" href="http://wpa.qq.com/msgrd?V=1&amp;Uin=2116698830&amp;Site=http://www.moke8.com/?ant3000/&amp;Menu=yes">QQ咨询</a></p>
                        <p class="Online" style="margin-left:10px;"><a href="#">连接到淘宝<span>"在线优惠产品"</span></a></p>
                    </div>
                </div>
            </div>
            <script language="JavaScript">
                <!--
                function high(which2){
                    theobject=which2
                    highlighting=setInterval("highlightit(theobject)",20)
                }
                function low(which2){
                    clearInterval(highlighting)
                    which2.filters.alpha.opacity=50
                }
                function highlightit(cur2){
                    if (cur2.filters.alpha.opacity<100)
                        cur2.filters.alpha.opacity+=5
                    else if (window.highlighting)
                        clearInterval(highlighting)
                }
                -->
            </script>
            <div class="Show">
                <p style="margin-left:0px;"><a href="#"><img src="/static/images/New01.jpg" width="245" height="215" onmouseout="low(this)" onmouseover="high(this)" style="FILTER: alpha(opacity=50)" equipm=""></a></p>
                <p><a href="#"><img src="/static/images/New02.jpg" width="245" height="215" onmouseout="low(this)" onmouseover="high(this)" style="FILTER: alpha(opacity=50)" equipm=""></a></p>
                <p><a href="#"><img src="/static/images/New03.jpg" width="245" height="215" onmouseout="low(this)" onmouseover="high(this)" style="FILTER: alpha(opacity=50)" equipm=""></a></p>
                <p style="margin-right:0px;"><a href="#"><img src="/static/images/New01.jpg" width="245" height="215" onmouseout="low(this)" onmouseover="high(this)" style="FILTER: alpha(opacity=50)" equipm=""></a></p>
            </div>
            <!--最新优惠活动结束-->
            <!--通栏广告-->
            <div class="BannerAdvertising"> <img src="/static/images/tlantu.jpg" width="1000" height="130"> </div>
        </div>
        <!--友情链接开始-->

        <!--友情链接结束-->
        <div class="Goods W1000 margin"><img src="/static/images/sh.jpg" width="1000" height="40"></div>
    </div>
</div>