<style type="text/css">

    .leftcontent
    {
        width: 850px;
        float: left;
        align:center;
        //margin-left: 50px
    }
    .item
    {
        height: 280px;
        //background-color: #FBE6F2;
    }

    .itempic
    {
        float: left;
        width: 220px;
        //height: 200px
    }

    .itempic > img
    {
        height: 180px;
    }

    .rank
    { 
        background-image:url('<?php echo base_url() . "img/rank.png"; ?>');
        width:83px;  
        height:16px; 
        background-position:  0px -159px;
        margin-left:15px
    }

    .test_box 
    {
        width: 500px;
        min-height: 50px;
        max-height: 300px;
        _height: 120px;
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

</style>



<div class="container" style="width:1100px;padding: 0;">
    <div id="left" class="leftcontent">
        <div class="item" style="padding-top: 20px;padding-bottom: 20px">
            <div>
                <a>首页</a>><a>数码配件</a>><a>移动电源</a>><a>乐泡</a>>移动电源/充电宝
            </div>
            <hr style=" margin-top: 5px">

            <div class="itempic">
                <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
            </div>
            <div style="float: left;width: 630px;height: 207px">

                <div id="title"><h3 class="titchr" style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>商品标题！电冰箱</strong></h3></div>
                <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px;height:41px">
                    <span class="contchr" style="">
                        <strong>UserID：</strong>
                        内容
                    </span>
                </div>

                <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                    <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                    <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                    <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                </div>


            </div>
            <hr style="width: 850px">
        </div>

        <div>
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
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="home">
                <div id="tcdetail" style="height:auto">
                    <div id="pic" style="width:100px;float: left;margin: 20px">
                        <a href="#" class="avatar" target="_blank" >
                            <img src="<?php echo base_url() . "img/head.jpg"; ?>">
                        </a>
                    </div>
                    <div id='usertc' style="width:700px;float:left;margin-top: 20px">
                        <div id="userid">用户ID<img class="rank"></div>
                        <div id="usercontent" style="width:700px;margin-top: 10px">
                            <text>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。
                            </text>
                        </div>
                        <div style="width:700px;margin-top: 15px">
                            <text>时间</text>
                            <span class="glyphicon glyphicon-heart-empty" style="margin-left: 400px;margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                            <a href="javascript:void(0);" onclick="showcomment();"><span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span></a>

                        </div>
                        <div id="assess_id1" class="comment" style="display: none;background-color: #E5E5E5;width: 700px;height: auto;overflow:hidden">
                            <div id="commhead" style="width:700px;height: auto;overflow:hidden">
                                <div id="commpic" style="width:40px;height: auto;float: left;margin: 10px">
                                    <a href="#" class="avatar" target="_blank" >
                                        <img style="width:40px;height: 40px" src="<?php echo base_url() . "img/head.jpg"; ?>">
                                    </a>
                                </div>
                                <div style="float:left;width: 500px;margin-top: 5px">
                                    <div class="test_box" contenteditable=true></div>
                                </div>
                                <div style="float:left;margin-top: 15px;margin-left: 10px">
                                    <button type="button" class="btn btn-default">回复</button>
                                </div>
                                <hr style="width:700px;">
                            </div>
                            <div id="comm" style="width:700px;height: auto;overflow:hidden">
                                <div id="commpic" style="width:40px;height: auto;float: left;margin: 10px">
                                    <a href="#" class="avatar" target="_blank" >
                                        <img style="width:40px;height: 40px" src="<?php echo base_url() . "img/head.jpg"; ?>">
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

                                    <div style="width: 700px;margin-top: 5px;margin-left: 10px">
                                        <text>2天前</text>
                                        <span class="glyphicon glyphicon-heart-empty" style="margin-left: 550px;margin-right: 10px"></span>

                                    </div>
                                </div>
                                <hr style="width:700px;">
                            </div>
                            <div id="comm" style="width:700px;height: auto;overflow:hidden">
                                <div id="commpic" style="width:40px;height: auto;float: left;margin: 10px">
                                    <a href="#" class="avatar" target="_blank" >
                                        <img style="width:40px;height: 40px" src="<?php echo base_url() . "img/head.jpg"; ?>">
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
                                    <div style="width: 700px;margin-top: 5px;margin-left: 10px">
                                        <text>2天前</text>
                                        <span class="glyphicon glyphicon-heart-empty" style="margin-left: 550px;margin-right: 10px"></span>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div id="tcdetail" style="height:auto">
                    <div id="pic" style="width:100px;float: left;margin: 20px">
                        <a href="#" class="avatar" target="_blank" >
                            <img src="<?php echo base_url() . "img/head.jpg"; ?>">
                        </a>
                    </div>
                    <div id='usertc' style="width:700px;float:left;margin-top: 20px">
                        <div id="userid">用户ID<img class="rank"></div>
                        <div id="usercontent" style="width:700px;margin-top: 10px">
                            <text>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            </text>
                        </div>
                        <div style="width:700px;margin-top: 15px">
                            <text>时间</text>
                            <span class="glyphicon glyphicon-heart-empty" style="margin-left: 400px;margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>

                        </div>
                        <hr>
                    </div>
                </div>
                <div id="tcdetail" style="height:auto">
                    <div id="pic" style="width:100px;float: left;margin: 20px">
                        <a href="#" class="avatar" target="_blank" >
                            <img src="<?php echo base_url() . "img/head.jpg"; ?>">
                        </a>
                    </div>
                    <div id='usertc' style="width:700px;float:left;margin-top: 20px">
                        <div id="userid">用户ID<img class="rank"></div>
                        <div id="usercontent" style="width:700px;margin-top: 10px">
                            <text>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。
                            iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。
                            </text>
                        </div>
                        <div style="width:700px;margin-top: 15px">
                            <text>时间</text>
                            <span class="glyphicon glyphicon-heart-empty" style="margin-left: 400px;margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>

                        </div>
                        <hr>
                    </div>
                </div>


                <div id="tcdetail" style="height:auto">
                    <div id="pic" style="width:100px;float: left;margin: 20px">
                        <a href="#" class="avatar" target="_blank" >
                            <img src="<?php echo base_url() . "img/head.jpg"; ?>">
                        </a>
                    </div>
                    <div id='usertc' style="width:700px;float:left;margin-top: 20px">
                        <div id="userid">用户ID<img class="rank"></div>
                        <div id="usercontent" style="width:700px;margin-top: 10px">
                            <text>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                            </text>
                        </div>
                        <div style="width:700px;margin-top: 15px">
                            <text>时间</text>
                            <span class="glyphicon glyphicon-heart-empty" style="margin-left: 400px;margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>

                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ios">


            </div>
            <div class="tab-pane fade" id="jmeter">
                <p>jMeter 是一款开源的测试软件。它是 100% 纯 Java 应用程序，用于负载和性能测试。</p>
            </div>

        </div>


    </div>
    
    <div id="right" style="width: 230px;padding-top: 20px;padding-left: 20px;float: left">
        <div class="panel panel-default" style="width: 240px">
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
        <div class="panel panel-danger" style="width: 240px">
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
        <div class="panel panel-info" style="width: 240px">
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
        <div class="panel panel-warning" style="width: 240px">
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
    function showcomment()
    {
        if (document.getElementById('assess_id1').style.display == "block" )
        {
            document.getElementById('assess_id1').style.display = "none";
        }
        else
            document.getElementById('assess_id1').style.display = "block";
        return false;
    }

</script>