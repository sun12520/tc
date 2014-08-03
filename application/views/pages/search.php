<style type="text/css">

    .leftcontent
    {
        width: 780px;
        float: left;
        align:center;
        //margin-left: 50px
    }


    .itemsearch
    {

        height: auto;
        overflow: hidden;
        //background-color: #FBE6F2;
        padding-top: 20px;
        //padding-bottom: 20px;
        margin-top:10px;
        //border: 2px solid #E13300;
        border-radius:10px;
    }

    .searchpic
    {
        float: left;
        margin-left:20px;
        width: 180px;
        //height: 200px
    }

    .searchpic > img
    {
        height: 150px;
    }

    .rank
    { 
        background-image:url('<?php echo base_url() . "img/rank.png"; ?>');
        width:83px;  
        height:16px; 
        background-position:  0px -159px;
        margin-left: 15px
    }

    .searchcont
    {
        float: left;
        width: 550px;
        height:auto ;
        margin-bottom: 25px
    }


</style>

<script type="text/javascript">
    $(document).ready(function() {
        $(".textcont").each(function()
        {
            var maxwidth = 150;
            if ($(this).text().length > maxwidth)
            {
                var laststr = $(this).text().substring(maxwidth, $(this).text().length);
                $(this).text($(this).text().substring(0, maxwidth));
                $(this).html($(this).html() + '......<a href="javascript:void(0);" data="' + laststr + '" id="' + "itemid" + '" onclick="showall(this);">显示全部</a>');
            }
        });
    });

    function showall(obj) {
        var maxwidth = 150;
        var laststr = document.getElementById(obj.id).getAttribute("data");
        obj.parentNode.innerHTML = obj.parentNode.innerHTML.substring(0, maxwidth) + laststr;
        return false;
    }

</script>

<div class="container" style="width:1000px;padding: 0; ">
    <div id="left" class="leftcontent">
        <div style="padding-top: 10px;">
            <a>首页</a>>移动电源搜索结果
        </div>

        <div style="margin-top:10px;background-color: #D0D0D0">
            <ul id="myTab" class="nav nav-tabs">
                <li class="active">
                    <a href="#home" data-toggle="tab">
                        商品（223）
                    </a>
                </li>
                <li><a href="#ios" data-toggle="tab">吐槽（278）</a></li>
                <li><a href="#jmeter" data-toggle="tab">经验（27）</a></li>
                <li><a href="#jihe" data-toggle="tab">集合（27）</a></li>
                <li><a href="#zixun" data-toggle="tab">咨询（27）</a></li>

            </ul>
        </div>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="home">
                <div class="itemsearch" style="">
                    <div class="searchpic">
                        <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
                    </div>
                    <div class="searchcont">

                        <div id="title"><h3 class="titchr" style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>商品标题！电冰箱</strong></h3></div>
                        <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px;height:auto;">
                            <span class="contchr" style="">
                                <div id="userid" style="margin-bottom:5px"><img class="rank" style=" margin-left: 0"></div>

                                <div class="textcont">内容:iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                    TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                    TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。
                                </div>

                            </span>
                        </div>

                        <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        </div>
                        <div id="flag" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px" class="contchr">
                            <span class="glyphicon glyphicon-heart-empty" style="margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>
                            <button type="button" class="btn btn-danger btn-xs" style="float: right"><span class="contbut">去看看</span><span class="glyphicon glyphicon-chevron-right"></span></button>
                        </div>
                    </div>

                </div>
                <hr style="margin-top:0">
                <div class="itemsearch" style="">
                    <div class="searchpic">
                        <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
                    </div>
                    <div class="searchcont">

                        <div id="title"><h3 class="titchr" style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>商品标题！电冰箱</strong></h3></div>
                        <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px;height:auto;">
                            <span class="contchr" style="">
                                <div id="userid" style="margin-bottom:5px"><img class="rank" style=" margin-left: 0"></div>

                                <div class="textcont">内容:iOS 是一个由苹果公司开发和发布

                                </div>

                            </span>
                        </div>

                        <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        </div>
                        <div id="flag" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px" class="contchr">
                            <span class="glyphicon glyphicon-heart-empty" style="margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>
                            <button type="button" class="btn btn-danger btn-xs" style="float: right"><span class="contbut">去看看</span><span class="glyphicon glyphicon-chevron-right"></span></button>
                        </div>
                    </div>

                </div>
                <hr style="margin-top:0">
                <div class="itemsearch" style="">
                    <div class="searchpic">
                        <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
                    </div>
                    <div class="searchcont">

                        <div id="title"><h3 class="titchr" style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>商品标题！电冰箱</strong></h3></div>
                        <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px;height:auto;">
                            <span class="contchr" style="">
                                <div id="userid" style="margin-bottom:5px"><img class="rank" style=" margin-left: 0"></div>

                                <div class="textcont">内容:iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                    TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                    TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。
                                </div>

                            </span>
                        </div>

                        <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        </div>
                        <div id="flag" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px" class="contchr">
                            <span class="glyphicon glyphicon-heart-empty" style="margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>
                            <button type="button" class="btn btn-danger btn-xs" style="float: right"><span class="contbut">去看看</span><span class="glyphicon glyphicon-chevron-right"></span></button>
                        </div>
                    </div>

                </div>
                <hr style="margin-top:0">
                <div class="itemsearch" style="">
                    <div class="searchpic">
                        <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
                    </div>
                    <div class="searchcont" >

                        <div id="title"><h3 class="titchr" style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>商品标题！电冰箱</strong></h3></div>
                        <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px;height:auto;">
                            <span class="contchr" style="">
                                <div id="userid" style="margin-bottom:5px"><img class="rank" style=" margin-left: 0"></div>

                                <div class="textcont">内容:iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                    TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                    TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。
                                </div>

                            </span>
                        </div>

                        <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        </div>
                        <div id="flag" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px" class="contchr">
                            <span class="glyphicon glyphicon-heart-empty" style="margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>
                            <button type="button" class="btn btn-danger btn-xs" style="float: right"><span class="contbut">去看看</span><span class="glyphicon glyphicon-chevron-right"></span></button>
                        </div>
                    </div>

                </div>
                <hr style="margin-top:0">
                <div class="itemsearch" style="">
                    <div class="searchpic">
                        <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
                    </div>
                    <div style="float: left;width: 550px;height:auto ;margin-bottom: 10px;">

                        <div id="title"><h3 class="titchr" style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>商品标题！电冰箱</strong></h3></div>
                        <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px;height:auto;">
                            <span class="contchr" style="">
                                <div id="userid" style="margin-bottom:5px"><img class="rank" style=" margin-left: 0"></div>

                                <div class="textcont">内容:iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                    TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple 
                                    TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。
                                </div>

                            </span>
                        </div>

                        <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        </div>
                        <div id="flag" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px" class="contchr">
                            <span class="glyphicon glyphicon-heart-empty" style="margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>
                            <button type="button" class="btn btn-danger btn-xs" style="float: right"><span class="contbut">去看看</span><span class="glyphicon glyphicon-chevron-right"></span></button>
                        </div>
                    </div>

                </div>
                <hr style="margin-top:15px">


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
