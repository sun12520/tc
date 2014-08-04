
<style type="text/css">
    abbr
    {
        font-size: 12px;
    }
    .text10pxwhite
    {
        font-size: 10px;
        color: #FFFFFF;
    }

    .item
    {
        clear: both;
        width: 240px;
        height: 55px
    }
    .item_active
    {
        clear: both;
        width: 240px;
        height: 55px
    }

    .panel-body .item div text h5 a small
    {
        color: #333333;
    }
    .panel-body .item_active div text h5 a small
    {
        color: #FFFFFF;
    }
    a:hover
    {
        color: #FFFFFF;
    }

    .panel-body .item_active:hover
    {
        background-color: #D14;
        color: #FFFFFF;
        transition:background-color 2s;
    }

    .detail
    {
        display: none;
    }
    .panel-body .item_active div.detail
    {
        display: block;
        color: #333333;

    }



    .hidden
    {
        display: hidden;
    }


</style>


<style type="text/css">
    *{margin:0;padding:0;list-style-type:none;}
    a,img{border:0;}
    .zoom{zoom:1;position:relative;}

    .zoombox{width:530px;margin:20px auto 0 auto;}
    .zoombox .tit{font-size:12px;color:#5e5e5e;line-height:20px;margin:0 0 10px 0;}

    .zoombox .photoBox{background:#fff;padding:2px;border:1px solid #E5E5E5;display:inline-block;margin:10px 20px 0 0;position:relative;}
    .zoombox .photoBox img{display:block;}
    .zoombox .photoBox .loadingBox{background:#fff;opacity:.3;*filter:alpha(opacity=30);z-index:1;text-align:center;position:absolute;left:50%;top:50%;margin:-8px 0 0 -8px;display:none;}
    .zoombox .photoBox .loading{background:url('<?php echo base_url() . "img/loading_16.gif"; ?>') no-repeat 0 0;width:16px;height:16px;display:inline-block;}
    .zoombox .zoom{cursor:url('<?php echo base_url() . "img/big.cur"; ?>'),default;}
    .zoombox .photoArea{background:#F7F7F7;border:1px solid #EBEBEB;padding:10px;text-align:center;zoom:1;}
    .zoombox .minifier{cursor:url('<?php echo base_url() . "img/small.cur"; ?>'),default;}
    .zoombox .photoArea .toolBar{padding:7px 0 0 0;text-align:right;font-size:12px;}
    .zoombox .photoArea .toolBar a{color:#3366cc;text-decoration:none;}
    .zoombox .photoArea .toolBar .view{padding-left:15px;background:url('') no-repeat;line-height:14px;margin-left:8px;}

    .weiduduan{ width:686px; margin:15px auto 0 auto;}
    .zoombox{width:686px;}
    .zoompic{border:solid 1px #dfdfdf;width:684px;height:394px;background:url('<?php echo base_url() . "img/loading.gif"; ?>') no-repeat 50% 50%;}
    .sliderbox{height:76px;overflow:hidden;margin:6px 0 0 0;}
    .sliderbox .arrow-btn{width:38px;height:76px;background:url('<?php echo base_url() . "img/arrow-btn.png"; ?>') no-repeat;cursor:pointer;}
    .sliderbox #btn-left{float:left;background-position:0 0;}
    .sliderbox #btn-left.dasabled{background-position:0 -76px;}
    .sliderbox #btn-right{float:right;background-position:-38px 0;}
    .sliderbox #btn-right.dasabled{background-position:-38px -76px;}
    .sliderbox .slider{float:left;height:76px;width:605px;position:relative;overflow:hidden;margin:0 0 0 3px;display:inline;}
    .sliderbox .slider ul{position:absolute;left:0;width:999em;}
    .sliderbox .slider li{float:left;width:121px;height:76px;text-align:center;}
    .sliderbox .slider li img{border:solid 1px #dfdfdf;}
    .sliderbox .slider li.current img{border:solid 1px #3366cc;}





</style>

<script type="text/javascript">
    function zoom_image(obj) {

        var name = obj.attr('name');
        //alert(name);
        //if (obj.hasClass('photoBox')) {
        var showph = obj.parent().parent().attr('style', 'display:none');

        showph.next().find('.zoompic>img').attr('src', obj.attr('src'));
        document.getElementById(name).setAttribute("class","current");
        
        showph.next().attr('style', 'display:block');
        
    }
    
    function zoom_hid(obj){
        var target = obj.parent().parent().parent();
        target.attr('style', 'display:none');
        target.prev().attr('style', 'display:block');
    }
    
    function Zoom(obj, width, height) {
        var scale = Math.max(width / obj.width, height / obj.height);
        var newWidth = obj.width * scale;
        var newHeight = obj.height * scale;
        var div = obj.parentNode;

        obj.width = newWidth;
        obj.height = newHeight;
        div.style.width = width + "px";
        div.style.height = height + "px";
        div.style.overflow = "hidden";
        obj.style.marginLeft = (width - newWidth) / 2 + "px";
        obj.style.marginTop = (height - newHeight) / 2 + "px";
    }





    $(document).ready(function() {
        //点击小图切换大图
        $("#thumbnail li a").click(function() {
            $(".zoompic img").hide().attr({"src": $(this).attr("href"), "title": $("> img", this).attr("title")});
            $("#thumbnail li.current").removeClass("current");
            $(this).parents("li").addClass("current");
            return false;
        });
        $(".zoompic>img").load(function() {
            $(".zoompic>img:hidden").show();
        });

        //小图片左右滚动
        var $slider = $('.slider ul');
        var $slider_child_l = $('.slider ul li').length;
        var $slider_width = $('.slider ul li').width();
        $slider.width($slider_child_l * $slider_width);

        var slider_count = 0;

        if ($slider_child_l < 5) {
            $('#btn-right').css({cursor: 'auto'});
            $('#btn-right').removeClass("dasabled");
        }

        $('#btn-right').click(function() {
            if ($slider_child_l < 5 || slider_count >= $slider_child_l - 5) {
                return false;
            }

            slider_count++;
            $slider.animate({left: '-=' + $slider_width + 'px'}, 'fast');
            slider_pic();
        });

        $('#btn-left').click(function() {
            if (slider_count <= 0) {
                return false;
            }
            slider_count--;
            $slider.animate({left: '+=' + $slider_width + 'px'}, 'fast');
            slider_pic();
        });

        function slider_pic() {
            if (slider_count >= $slider_child_l - 5) {
                $('#btn-right').css({cursor: 'auto'});
                $('#btn-right').addClass("dasabled");
            }
            else if (slider_count > 0 && slider_count <= $slider_child_l - 5) {
                $('#btn-left').css({cursor: 'pointer'});
                $('#btn-left').removeClass("dasabled");
                $('#btn-right').css({cursor: 'pointer'});
                $('#btn-right').removeClass("dasabled");
            }
            else if (slider_count <= 0) {
                $('#btn-left').css({cursor: 'auto'});
                $('#btn-left').addClass("dasabled");
            }
        }

    });



</script>


<div>
    <div class="zoombox" style=" display: block">
        <span class="photoBox">
            <div class="loadingBox">
                <span class="loading"></span>
            </div>
            <img name="3427.jpg" src="<?php echo base_url() . "img/3427.jpg"; ?>" onload="Zoom(this, 80, 80)" class="zoom" onclick="zoom_image($(this));"/>
        </span><!--photoBox end-->

        <span class="photoBox">
            <div class="loadingBox">
                <span class="loading"></span>
            </div>
            <img name="52347.jpg" src="<?php echo base_url() . "img/52347.jpg"; ?>" onload="Zoom(this, 80, 80)" class="zoom" onclick="zoom_image($(this));"/>
        </span><!--photoBox end-->

    </div><!--zoombox end-->

    <div class="weiduduan clearfix" style="display:none">
        <div class="zoombox">
            <div class="zoompic"><img src="" width="684" height="394" alt="美女配奥迪A4L墙纸" onclick="zoom_hid($(this));"/></div>
            <div class="sliderbox">
                <div id="btn-left" class="arrow-btn dasabled"></div>
                <div class="slider" id="thumbnail">
                    <ul>
                        <li id="3427.jpg"><a  href="img/3427.jpg" target="_blank"><img src="img/3427.jpg" width="115" height="74" alt="美女配奥迪A4L墙纸01" /></a></li>
                        <li id="52347.jpg"><a  href="img/52347.jpg" target="_blank"><img src="img/52347.jpg" width="115" height="74" alt="美女配奥迪A4L墙纸02" /></a></li>
                        <li id="23463.jpg"><a  href="img/23463.jpg" target="_blank"><img src="img/23463.jpg" width="115" height="74" alt="美女配奥迪A4L墙纸03" /></a></li>
                        <li id="3247.jpg"><a  href="img/3247.jpg" target="_blank"><img src="img/3247.jpg" width="115" height="74" alt="美女配奥迪A4L墙纸04" /></a></li>
                        <li id="26547.jpg"><a  href="img/26547.jpg" target="_blank"><img src="img/26547.jpg" width="115" height="74" alt="美女配奥迪A4L墙纸05" /></a></li>
                        <li id="2153.jpg"><a  href="img/2153.jpg" target="_blank"><img src="img/2153.jpg" width="115" height="74" alt="美女配奥迪A4L墙纸06" /></a></li>
                    </ul>
                </div>
                <div id="btn-right" class="arrow-btn"></div>
            </div>
        </div>
    </div>
</div>



