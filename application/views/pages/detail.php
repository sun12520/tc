<style type="text/css">

    .leftcontent
    {
        width: 780px;
        float: left;
        align:center;
        //margin-left: 50px
    }
    .item
    {

        height: auto;
        overflow: hidden;
        background-color: #fbf0f1;
        padding-top: 20px;
        padding-bottom: 20px;
        margin-top:10px;
        border: 2px solid #f7d0d4;
        border-radius:10px;
    }

    .itempic
    {
        float: left;
        margin-left:20px;
        width: 180px;
        //height: 200px
    }

    .itempic > img
    {
        height: 150px;
    }

    .avatar > img
    {
        width: 80px;
        height:80px;
    }


    .rank
    { 
        background-image:url('<?php echo base_url() . "img/rank.png"; ?>');
        width:83px;  
        height:16px; 
        background-position:  0px -159px;
        margin-left: 15px
    }


    .test_box 
    {
        width: 500px;
        min-height: 30px;
        max-height: 300px;
        _height: 30px;
        margin-left: auto;
        margin-right: auto;
        padding: 3px;
        outline: 2;
        border: 1px solid #a0b3d6;
        font-size: 12px;
        word-wrap: break-word;
        overflow-x: hidden;
        overflow-y: auto;
        _overflow-y: visible;
        background-color:#FFFFFF;
        border-radius:10px;

    }

    .test_box p{ margin: 0; }


    .deatiltit
    {
        font-family:"Microsoft YaHei";
        letter-spacing:1px;
        font-size:18px;
        color:#333333;
    }

    .detailcont
    {
        font-family:"Microsoft YaHei";
        letter-spacing:1px;
        font-size:14px;
        color:#333333;
    }
    .nav-tabs >li>a
    {
        font-family:"Microsoft YaHei";
        letter-spacing:1px;
        font-size:18px;
        color:#666666;
    }

</style>

<script type="text/javascript">
    $(document).ready(function() {
        $(".textcont").each(function()
        {
            var maxwidth = 250;
            if ($(this).text().length > maxwidth)
            {
                var laststr = $(this).text().substring(maxwidth, $(this).text().length);
                $(this).text($(this).text().substring(0, maxwidth));
                $(this).html($(this).html() + '......<a href="javascript:void(0);" data="' + laststr + '" id="' + "itemid" + '" onclick="showall(this);">显示全部</a>');
            }
        });
    });

    function showall(obj) {
        var maxwidth = 250;
        var laststr = document.getElementById(obj.id).getAttribute("data");
        obj.parentNode.innerHTML = obj.parentNode.innerHTML.substring(0, maxwidth) + laststr;
        return false;
    }

</script>





<style type="text/css">
    *{margin:0;padding:0;list-style-type:none;}
    a,img{border:0;}
    .zoom{zoom:1;position:relative;}

    .zoombox{width:530px;margin:20px auto 0 auto;}
    .zoombox .tit{font-size:12px;color:#5e5e5e;line-height:20px;margin:0 0 10px 0;}

    .zoombox .photoBox{background:#fff;padding:2px;border:1px solid #E5E5E5;display:inline-block;margin:5px 0px 0 0;position:relative;}
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
    .bigpic{cursor:url('<?php echo base_url() . "img/small.cur"; ?>'),default;}
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


<!-- 图片样式和脚本 -->
<script type="text/javascript">
    function zoom_image(obj) {

        var name = obj.attr('name');
        //alert(name);
        //if (obj.hasClass('photoBox')) {
        var showph = obj.parent().parent().attr('style', 'display:none');

        showph.next().find('.zoompic>img').attr('src', obj.attr('src'));
        document.getElementById(name).setAttribute("class", "current");

        showph.next().attr('style', 'display:block');

    }

    function zoom_hid(obj) {
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







<div class="container" style="width:1000px;padding: 0;">
    <div id="left" class="leftcontent">
        <div style="padding-top: 10px;">
            <a>首页</a>><a>数码配件</a>><a>移动电源</a>><a>乐泡</a>>移动电源/充电宝
        </div>
        <div class="item" style="">
            <div class="itempic">
                <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
            </div>
            <div style="float: left;width: 570px;height:auto ;margin-bottom: 10px;overflow: hidden">

                <div id="title"><h3 class="deatiltit" style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>商品标题！电冰箱</strong></h3></div>
                <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px;height:auto;width: 550px;overflow: hidden">
                    <span class="detailcont" style="">
                        <div id="userid" style="margin-bottom:5px"><img class="rank" style=" margin-left: 0"></div>

                        <div class="textcont">内容:iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。
                        </div>

                    </span>
                </div>

                <div id="tag" style="margin-top: 25px;margin-bottom: 0;margin-left: 20px">
                    <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px;background-color:#f1e1e2 ;color: #c18188; border: 0;border-radius:4px">Button</button>
                    <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px;background-color:#f1e1e2 ;color: #c18188; border: 0;border-radius:4px">Button</button>
                    <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px;background-color:#f1e1e2 ;color: #c18188; border: 0;border-radius:4px">Button</button>
                </div>
            </div>
        </div>

        <div style="margin-top:20px">
            <ul id="myTab" class="nav nav-tabs">
                <li class="active">
                    <a href="#home" data-toggle="tab">
                        最新
                    </a>
                </li>
                <li><a href="#ios" data-toggle="tab">最热</a></li>
                <li><a href="#jmeter" data-toggle="tab">最怒</a></li>

            </ul>
        </div>
        <div id="myTabContent" class="tab-content"  style="height:auto;overflow: hidden">
            <div class="tab-pane fade in active" id="home" style="height:auto;overflow: hidden">
                <div id="tcdetail" style="height:auto;overflow: hidden"  class="detailcont">
                    <div id="pic" style="float: left;margin: 20px">
                        <a href="#" class="avatar"  target="_blank" >
                            <img src="<?php echo base_url() . "img/head.jpg"; ?>">
                        </a>
                    </div>
                    <div id='usertc' style="width:650px;float:left;margin-top: 20px">
                        <div id="userid">用户ID<img class="rank"></div>
                        <div id="usercontent" style="width:650px;margin-top: 10px">
                            <text>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。
                            </text>
                        </div>
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
                                <span class="photoBox">
                                    <div class="loadingBox">
                                        <span class="loading"></span>
                                    </div>
                                    <img name="26547.jpg" src="<?php echo base_url() . "img/26547.jpg"; ?>" onload="Zoom(this, 80, 80)" class="zoom" onclick="zoom_image($(this));"/>
                                </span>
                                <span class="photoBox">
                                    <div class="loadingBox">
                                        <span class="loading"></span>
                                    </div>
                                    <img name="3247.jpg" src="<?php echo base_url() . "img/3247.jpg"; ?>" onload="Zoom(this, 80, 80)" class="zoom" onclick="zoom_image($(this));"/>
                                </span>
                                <span class="photoBox">
                                    <div class="loadingBox">
                                        <span class="loading"></span>
                                    </div>
                                    <img name="23463.jpg" src="<?php echo base_url() . "img/23463.jpg"; ?>" onload="Zoom(this, 80, 80)" class="zoom" onclick="zoom_image($(this));"/>
                                </span>

                            </div><!--zoombox end-->

                            <div class="weiduduan clearfix" style="display:none">
                                <div class="zoombox">
                                    <div class="zoompic"><img class="bigpic" src="" width="684" height="394" alt="美女配奥迪A4L墙纸" onclick="zoom_hid($(this));"/></div>
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
                        <div style="width:650px;margin-top: 15px">
                            <text>时间</text>
                            <span class="glyphicon glyphicon-heart-empty" style="margin-left: 300px;margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                            <a href="javascript:void(0);" value="assess_id1" onclick="showcomment(this);"><span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span></a>

                        </div>
                        <div id="assess_id1" class="detailcont" style=" font-size: 12px;display: none;background-color: #E5E5E5;width: 650px;height: auto;overflow:hidden">
                            <div id="commhead" style="width:650px;height: auto;overflow:hidden">
                                <div id="commpic" style="width:40px;height: auto;float: left;margin: 10px">
                                    <a href="#" class="avatar" target="_blank" >
                                        <img style="width:30px;height: 30px" src="<?php echo base_url() . "img/head.jpg"; ?>">
                                    </a>
                                </div>
                                <div style="float:left;width: 500px;margin-top: 10px">
                                    <div class="test_box" contenteditable=true></div>
                                </div>
                                <div style="float:left;margin-top: 10px;margin-left: 10px">
                                    <button type="button" class="btn btn-default">回复</button>
                                </div>
                                <hr style="width:700px;">
                            </div>
                            <div id="comm" style="width:700px;height: auto;overflow:hidden">
                                <div id="commpic" style="width:40px;height: auto;float: left;margin: 10px">
                                    <a href="#" class="avatar" target="_blank" >
                                        <img style="width:30px;height: 30px" src="<?php echo base_url() . "img/head.jpg"; ?>">
                                    </a>
                                </div>
                                <div style="float:left;width: 550px;margin-top: 5px">
                                    <div  style="width:550px"><text>用户ID:</text></div>
                                    <div style="width:550px">
                                        <text>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                        TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                        TV。iOS 派生自 OS X，它们共享 Darwin 
                                        </text>
                                    </div>
                                    <div style="width: 700px;margin-top: 5px;margin-left: 10px;color: #666666;">
                                        <text>2天前</text>
                                        <span class="glyphicon glyphicon-heart-empty" style="margin-left: 450px;margin-right: 10px"></span>

                                    </div>
                                </div>
                                <hr style="width:700px;">
                            </div>
                            <div id="comm" style="width:700px;height: auto;overflow:hidden">
                                <div id="commpic" style="width:40px;height: auto;float: left;margin: 10px">
                                    <a href="#" class="avatar" target="_blank" >
                                        <img style="width:30px;height: 30px" src="<?php echo base_url() . "img/head.jpg"; ?>">
                                    </a>
                                </div>
                                <div style="float:left;width: 550px;margin-top: 5px">
                                    <div  style="width:550px"><text>用户ID:</text></div>
                                    <div style="width:550px">
                                        <text>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                        TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                        TV。iOS 派生自 OS X，它们共享 Darwin 
                                        </text>
                                    </div>
                                    <div style="width: 700px;margin-top: 5px;margin-left: 10px;color: #666666;">
                                        <text>2天前</text>
                                        <span class="glyphicon glyphicon-heart-empty" style="margin-left: 450px;margin-right: 10px"></span>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div id="tcdetail" style="height:auto;overflow: hidden"  class="detailcont">
                    <div id="pic" style="float: left;margin: 20px">
                        <a href="#" class="avatar"  target="_blank" >
                            <img src="<?php echo base_url() . "img/head.jpg"; ?>">
                        </a>
                    </div>
                    <div id='usertc' style="width:650px;float:left;margin-top: 20px">
                        <div id="userid">用户ID<img class="rank"></div>
                        <div id="usercontent" style="width:650px;margin-top: 10px">
                            <text>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。
                            </text>
                        </div>
                        <div style="width:650px;margin-top: 15px">
                            <text>时间</text>
                            <span class="glyphicon glyphicon-heart-empty" style="margin-left: 300px;margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                            <a href="javascript:void(0);" value="assess_id2" onclick="showcomment(this);"><span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span></a>

                        </div>
                        <div id="assess_id2" class="detailcont" style=" font-size: 12px;display: none;background-color: #E5E5E5;width: 650px;height: auto;overflow:hidden">
                            <div id="commhead" style="width:650px;height: auto;overflow:hidden">
                                <div id="commpic" style="width:40px;height: auto;float: left;margin: 10px">
                                    <a href="#" class="avatar" target="_blank" >
                                        <img style="width:30px;height: 30px" src="<?php echo base_url() . "img/head.jpg"; ?>">
                                    </a>
                                </div>
                                <div style="float:left;width: 500px;margin-top: 10px">
                                    <div class="test_box" contenteditable=true></div>
                                </div>
                                <div style="float:left;margin-top: 10px;margin-left: 10px">
                                    <button type="button" class="btn btn-default">回复</button>
                                </div>
                                <hr style="width:700px;">
                            </div>
                            <div id="comm" style="width:700px;height: auto;overflow:hidden">
                                <div id="commpic" style="width:40px;height: auto;float: left;margin: 10px">
                                    <a href="#" class="avatar" target="_blank" >
                                        <img style="width:30px;height: 30px" src="<?php echo base_url() . "img/head.jpg"; ?>">
                                    </a>
                                </div>
                                <div style="float:left;width: 550px;margin-top: 5px">
                                    <div  style="width:550px"><text>用户ID:</text></div>
                                    <div style="width:550px">
                                        <text>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                        TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                        TV。iOS 派生自 OS X，它们共享 Darwin 
                                        </text>
                                    </div>

                                    <div style="width: 700px;margin-top: 5px;margin-left: 10px;color: #666666;">
                                        <text>2天前</text>
                                        <span class="glyphicon glyphicon-heart-empty" style="margin-left: 450px;margin-right: 10px"></span>

                                    </div>
                                </div>
                                <hr style="width:700px;">
                            </div>
                            <div id="comm" style="width:700px;height: auto;overflow:hidden">
                                <div id="commpic" style="width:40px;height: auto;float: left;margin: 10px">
                                    <a href="#" class="avatar" target="_blank" >
                                        <img style="width:30px;height: 30px" src="<?php echo base_url() . "img/head.jpg"; ?>">
                                    </a>
                                </div>
                                <div style="float:left;width: 550px;margin-top: 5px">
                                    <div  style="width:550px"><text>用户ID:</text></div>
                                    <div style="width:550px">
                                        <text>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                        TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                        TV。iOS 派生自 OS X，它们共享 Darwin 
                                        </text>
                                    </div>
                                    <div style="width: 700px;margin-top: 5px;margin-left: 10px;color: #666666;">
                                        <text>2天前</text>
                                        <span class="glyphicon glyphicon-heart-empty" style="margin-left: 450px;margin-right: 10px"></span>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div id="tcdetail" style="height:auto;overflow: hidden"  class="detailcont">
                    <div id="pic" style="float: left;margin: 20px">
                        <a href="#" class="avatar"  target="_blank" >
                            <img src="<?php echo base_url() . "img/head.jpg"; ?>">
                        </a>
                    </div>
                    <div id='usertc' style="width:650px;float:left;margin-top: 20px">
                        <div id="userid">用户ID<img class="rank"></div>
                        <div id="usercontent" style="width:650px;margin-top: 10px">
                            <text>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。
                            </text>
                        </div>
                        <div style="width:650px;margin-top: 15px">
                            <text>时间</text>
                            <span class="glyphicon glyphicon-heart-empty" style="margin-left: 300px;margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                            <a href="javascript:void(0);" value="assess_id3" onclick="showcomment(this);"><span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span></a>

                        </div>
                        <div id="assess_id3" class="detailcont" style=" font-size: 12px;display: none;background-color: #E5E5E5;width: 650px;height: auto;overflow:hidden">
                            <div id="commhead" style="width:650px;height: auto;overflow:hidden">
                                <div id="commpic" style="width:40px;height: auto;float: left;margin: 10px">
                                    <a href="#" class="avatar" target="_blank" >
                                        <img style="width:30px;height: 30px" src="<?php echo base_url() . "img/head.jpg"; ?>">
                                    </a>
                                </div>
                                <div style="float:left;width: 500px;margin-top: 10px">
                                    <div class="test_box" contenteditable=true></div>
                                </div>
                                <div style="float:left;margin-top: 10px;margin-left: 10px">
                                    <button type="button" class="btn btn-default">回复</button>
                                </div>
                                <hr style="width:700px;">
                            </div>
                            <div id="comm" style="width:700px;height: auto;overflow:hidden">
                                <div id="commpic" style="width:40px;height: auto;float: left;margin: 10px">
                                    <a href="#" class="avatar" target="_blank" >
                                        <img style="width:30px;height: 30px" src="<?php echo base_url() . "img/head.jpg"; ?>">
                                    </a>
                                </div>
                                <div style="float:left;width: 550px;margin-top: 5px">
                                    <div  style="width:550px"><text>用户ID:</text></div>
                                    <div style="width:550px">
                                        <text>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                        TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                        TV。iOS 派生自 OS X，它们共享 Darwin 
                                        </text>
                                    </div>

                                    <div style="width: 700px;margin-top: 5px;margin-left: 10px;color: #666666;">
                                        <text>2天前</text>
                                        <span class="glyphicon glyphicon-heart-empty" style="margin-left: 450px;margin-right: 10px"></span>

                                    </div>
                                </div>
                                <hr style="width:700px;">
                            </div>
                            <div id="comm" style="width:700px;height: auto;overflow:hidden">
                                <div id="commpic" style="width:40px;height: auto;float: left;margin: 10px">
                                    <a href="#" class="avatar" target="_blank" >
                                        <img style="width:30px;height: 30px" src="<?php echo base_url() . "img/head.jpg"; ?>">
                                    </a>
                                </div>
                                <div style="float:left;width: 550px;margin-top: 5px">
                                    <div  style="width:550px"><text>用户ID:</text></div>
                                    <div style="width:550px">
                                        <text>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                        TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                        TV。iOS 派生自 OS X，它们共享 Darwin 
                                        </text>
                                    </div>
                                    <div style="width: 700px;margin-top: 5px;margin-left: 10px;color: #666666;">
                                        <text>2天前</text>
                                        <span class="glyphicon glyphicon-heart-empty" style="margin-left: 450px;margin-right: 10px"></span>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>
                    </div>
                </div>



                <div style=" margin-left: 500px;height: 34px">
                    <ul id="page" class="pagination" style="margin: 0;">
                        <li>
                            <a style="border: 0;padding-top: 0" href="#" page="2" onclick="page_link(this)">«上一页</a>
                        </li>
                        <li>
                            <a style="border: 0;padding-top: 0" href="#" page="1" onclick="page_link(this)">1</a>
                        </li>
                        <li>
                            <a style="border: 0;padding-top: 0" href="#" page="2" onclick="page_link(this)">2</a>
                        </li>
                        <li class="currentpage">
                            <a id="curr" style="border: 0;padding-top: 0" href="#" page="3" onclick="page_link(this)">3</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="ios">


            </div>
            <div class="tab-pane fade" id="jmeter">
                <p>jMeter 是一款开源的测试软件。它是 100% 纯 Java 应用程序，用于负载和性能测试。</p>
            </div>

        </div>


    </div>

    <div id="right" style="width: 200px;padding-top: 40px;padding-left: 20px;float: left">
        <div class="panel panel-default" style="width: 200px">
            <div class="panel-body" style=" padding-top: 0px; ">
                <div style="clear:both">
                    <div style="float: left;margin-top: 25px">
                        <span class="glyphicon glyphicon-fire"></span>
                    </div>
                    <div style="float: left;margin-top: 15px;margin-left: 15px" class="contchr">
                        <strong>吐槽京东</strong><br>
                        <div class="num">222人关注&nbsp;&nbsp;&nbsp;444吐槽</div>
                    </div>
                </div>
                <div style="clear:both">
                    <div style="float: left;margin-top: 25px">
                        <span class="glyphicon glyphicon-fire"></span>
                    </div>
                    <div style="float: left;margin-top: 15px;margin-left: 15px" class="contchr">
                        <strong>吐槽京东</strong><br>
                        <div class="num">222人关注&nbsp;&nbsp;&nbsp;444吐槽</div>
                    </div>
                </div>
                <div style="clear:both">
                    <div style="float: left;margin-top: 25px">
                        <span class="glyphicon glyphicon-fire"></span>
                    </div>
                    <div style="float: left;margin-top: 15px;margin-left: 15px" class="contchr">
                        <strong>吐槽京东</strong><br>
                        <div class="num">222人关注&nbsp;&nbsp;&nbsp;444吐槽</div>
                    </div>
                </div>
                <div style="clear:both">
                    <div style="float: left;margin-top: 25px">
                        <span class="glyphicon glyphicon-fire"></span>
                    </div>
                    <div style="float: left;margin-top: 15px;margin-left: 15px" class="contchr">
                        <strong>吐槽京东</strong><br>
                        <div class="num">222人关注&nbsp;&nbsp;&nbsp;444吐槽</div>
                    </div>
                </div>
                <div style="clear:both">
                    <div style="float: left;margin-top: 25px">
                        <span class="glyphicon glyphicon-fire"></span>
                    </div>
                    <div style="float: left;margin-top: 15px;margin-left: 15px" class="contchr">
                        <strong>吐槽京东</strong><br>
                        <div class="num">222人关注&nbsp;&nbsp;&nbsp;444吐槽</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-danger" style="width: 200px">
            <div class="panel-heading">
                <h3 class="panel-title" style="font-family:'Microsoft YaHei';letter-spacing:1px;">最热门</h3>
            </div>
            <div class="panel-body" style=" padding-top: 0px; ">
                <div style="clear:both">
                    <div style="float: left;margin-top: 25px">
                        <span class="glyphicon glyphicon-fire"></span>
                    </div>
                    <div style="float: left;margin-top: 15px;margin-left: 15px" class="contchr">
                        <strong>吐槽京东</strong><br>
                        <div class="num">222人关注&nbsp;&nbsp;&nbsp;444吐槽</div>
                    </div>
                </div>
                <div style="clear:both">
                    <div style="float: left;margin-top: 25px">
                        <span class="glyphicon glyphicon-fire"></span>
                    </div>
                    <div style="float: left;margin-top: 15px;margin-left: 15px" class="contchr">
                        <strong>吐槽京东</strong><br>
                        <div class="num">222人关注&nbsp;&nbsp;&nbsp;444吐槽</div>
                    </div>
                </div>
                <div style="clear:both">
                    <div style="float: left;margin-top: 25px">
                        <span class="glyphicon glyphicon-fire"></span>
                    </div>
                    <div style="float: left;margin-top: 15px;margin-left: 15px" class="contchr">
                        <strong>吐槽京东</strong><br>
                        <div class="num">222人关注&nbsp;&nbsp;&nbsp;444吐槽</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-info" style="width: 200px">
            <div class="panel-heading">
                <h3 class="panel-title" style="font-family:'Microsoft YaHei';letter-spacing:1px;">最悲催</h3>
            </div>
            <div class="panel-body" style=" padding-top: 0px; ">
                <div style="clear:both">
                    <div style="float: left;margin-top: 25px">
                        <span class="glyphicon glyphicon-fire"></span>
                    </div>
                    <div style="float: left;margin-top: 15px;margin-left: 15px" class="contchr">
                        <strong>吐槽京东</strong><br>
                        <div class="num">222人关注&nbsp;&nbsp;&nbsp;444吐槽</div>
                    </div>
                </div>
                <div style="clear:both">
                    <div style="float: left;margin-top: 25px">
                        <span class="glyphicon glyphicon-fire"></span>
                    </div>
                    <div style="float: left;margin-top: 15px;margin-left: 15px" class="contchr">
                        <strong>吐槽京东</strong><br>
                        <div class="num">222人关注&nbsp;&nbsp;&nbsp;444吐槽</div>
                    </div>
                </div>
                <div style="clear:both">
                    <div style="float: left;margin-top: 25px">
                        <span class="glyphicon glyphicon-fire"></span>
                    </div>
                    <div style="float: left;margin-top: 15px;margin-left: 15px" class="contchr">
                        <strong>吐槽京东</strong><br>
                        <div class="num">222人关注&nbsp;&nbsp;&nbsp;444吐槽</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-warning" style="width: 200px">
            <div class="panel-heading">
                <h3 class="panel-title" style="font-family:'Microsoft YaHei';letter-spacing:1px;">最奇葩</h3>
            </div>
            <div class="panel-body" style=" padding-top: 0px; ">
                <div style="clear:both">
                    <div style="float: left;margin-top: 25px">
                        <span class="glyphicon glyphicon-fire"></span>
                    </div>
                    <div style="float: left;margin-top: 15px;margin-left: 15px" class="contchr">
                        <strong>吐槽京东</strong><br>
                        <div class="num">222人关注&nbsp;&nbsp;&nbsp;444吐槽</div>
                    </div>
                </div>
                <div style="clear:both">
                    <div style="float: left;margin-top: 25px">
                        <span class="glyphicon glyphicon-fire"></span>
                    </div>
                    <div style="float: left;margin-top: 15px;margin-left: 15px" class="contchr">
                        <strong>吐槽京东</strong><br>
                        <div class="num">222人关注&nbsp;&nbsp;&nbsp;444吐槽</div>
                    </div>
                </div>
                <div style="clear:both">
                    <div style="float: left;margin-top: 25px">
                        <span class="glyphicon glyphicon-fire"></span>
                    </div>
                    <div style="float: left;margin-top: 15px;margin-left: 15px" class="contchr">
                        <strong>吐槽京东</strong><br>
                        <div class="num">222人关注&nbsp;&nbsp;&nbsp;444吐槽</div>
                    </div>
                </div>
            </div>
        </div>


        <style type="text/css">
            .user
            {
                width: 240px;
                height: 350px;
                //margin-top: 42px;
                z-index: 1000;
                position: absolute;
                top:178px
            }

            .user .info
            {
                text-align: center;
                height: 290px;
                width: 240px;
                background:rgba(0,0,0,.6);
                border-bottom:1px solid #686864;
                border-right:1px solid rgba(255,255,255,.1)
            }

            .user .info .avatar
            {
                display: inline-block;
                border-radius:50%;
                width:80px;
                height: 80px;
                border:5px solid rgba(0,0,0,.6);
                margin-top:-25px;
                color: #000;
                text-decoration:none
            }
            .user .info .avatar img
            {
                border-radius:50%;
                width:70px;
                height: 70px;
                border:0;

            }
            .user .info .name-wrap
            {
                height: 30px;
                line-height: 30px;
                overflow: hidden;
                color: #FFFFFF;
                margin: 0;
                padding: 0
            }




        </style>
    </div>


</div>




<script type="text/javascript">
    function showcomment(obj)
    {
        var id = obj.getAttribute("value");
        //alert (id);
        if (document.getElementById(id).style.display == "block")
        {
            document.getElementById(id).style.display = "none";
        }
        else
            document.getElementById(id).style.display = "block";

    }

</script>