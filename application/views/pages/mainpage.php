<!--//标题 22 加粗
//正文  14 前面加粗
文字黑色 333333  附文字灰色 666666
//文字色值 666666   阅读全文 0a75ad  分割线 e0e0e0
//字体 雅黑
//关注吐槽 12
-->
<style type="text/css">
    .navbar-fixed-top,
    .navbar-fixed-bottom {
        position: fixed;
        right: 0;
        left: 0;
        z-index: 1030;
        -webkit-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px;
    }
    .navbar-fixed-bottom {
        bottom: 0;
        margin-bottom: 0;
        border-width: 1px 0 0;
    }

    .topbar
    {
        top: 0;
        border-width: 0 0 1px;
        width:100%;
        height: 40px;
        background-color: #333333;
        //float: left;
        position: fixed;
        right: 0;
        left: 0;
        z-index: 1030;
        -webkit-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);

    }

    .topbar .bar
    {
        width: 1140px;
        margin: 0;
        align:center;
        //padding-left: 
    }

    .topbar .bar .barul
    {
        float: left;
        margin: 0;
        padding-left: 0px;
        width: 1140px;
        height: 40px;
        //vertical-align : middle;
    }

    .barul .title
    {
        width: 70px;
        height: 40px;
        text-align: center;
        padding-top: 10px;
        float: left;
        display: block;
        position: relative;
        color: #666666
    }

    .barul .title_right
    {
        width: 70px;
        height: 40px;
        text-align: center;
        padding-top: 10px;
        float: left;
        //right: 50px;
        display: block;
        position: relative;
        color: #666666
    }

    .barul .title_right_active
    {
        width: 70px;
        height: 40px;
        text-align: center;
        padding-top: 10px;
        float: left;
        display: block;
        position: relative;
        background-color: #666666;
        color: #FFFFFF
    }

    .barul .title_active
    {
        width: 70px;
        height: 40px;
        text-align: center;
        padding-top: 10px;
        float: left;
        display: block;
        position: relative;
        background-color: #666666;
        color: #FFFFFF
    }




    .searchbar
    {
        margin-top:40px;
        border-width: 0 0 1px;
        width:100%;
        height: 110px;
        background-color: #FFFFFF;
        background-image: url("<?php echo base_url() . "img/top.png"; ?>");
        //float: left;
        //position: fixed;
        right: 0;
        left: 0;
        //z-index: 1030;
        -webkit-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .searchbar .bar
    {
        //width: 1140px;
        float:left;
        margin: 0;
        align:center;
        //padding-left: 
    }

</style>

<div>
    <div>

        <div class="topbar">
            <div class="container">
                <div class="bar">
                    <ul class="barul">
                        <a href="#"><li class="title" onmouseover="this.className = 'title_active'" onmouseout="this.className = 'title'">首页</li></a>
                        <a href="#"><li class="title" onmouseover="this.className = 'title_active'" onmouseout="this.className = 'title'">经验</li></a>
                        <a href="#"><li class="title" onmouseover="this.className = 'title_active'" onmouseout="this.className = 'title'">集合</li></a>
                        <a href="#"><li class="title" onmouseover="this.className = 'title_active'" onmouseout="this.className = 'title'">资讯</li></a>
                        <a href="#"><li class="title_right" style=" margin-left:700px" onmouseover="this.className = 'title_right_active'" onmouseout="this.className = 'title_right'">登录</li></a>
                        <a href="#"><li class="title_right" onmouseover="this.className = 'title_right_active'" onmouseout="this.className = 'title_right'">注册</li></a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="searchbar">
            <div class="container">
                <div class="bar">

                    <a href="#"><img style="margin-top: 30px;margin-left: 60px;float: left" src="<?php echo base_url() . "img/less-logo-large.png"; ?>"></a>
                    <form class="navbar-form navbar-left" role="search" style="float:left;margin-top: 40px;margin-left: 40px">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" style="width:600px">
                        </div>
                        <button type="submit" class="btn btn-default">搜</button>
                    </form>
                    <a href="#"><img style="margin-top: 20px;margin-left: 20px;float: left" src="<?php echo base_url() . "img/tucao.jpg"; ?>"></a>

                </div>
            </div>
        </div>









        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style=" height: 468px">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->

            <div class="carousel-inner" role="listbox">

                <div class="item active">

                    <img src="<?php echo base_url() . "img/cc.png"; ?>" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item ">

                    <img src="<?php echo base_url() . "img/aa.png"; ?>" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url() . "img/bb.png"; ?>" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url() . "img/pic.png"; ?>" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url() . "img/big1.jpg"; ?>" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url() . "img/big4.jpg"; ?>" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">

                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">

                <span class="sr-only">Next</span>
            </a>
        </div>






        <style type="text/css">
            .leftcontent
            {
                width: 910px;
                float: left;
                align:center;
                //margin-left: 50px
            }

            .itempic
            {
                float: left;
                width: 240px;
                height: 200px
            }

            .dh1
            {

                clear: both;
                height: 67px
            }

            .dh1 .pic
            {
                float: left;
                margin-top: 20px;
                margin-left: 15px
            }

            .dh1 .content
            {
                float: left;
                margin-top: 10px;
                margin-left: 20px
            }

            .dh1_active:hover
            {

                background-color: #D14;
                color: #FFFFFF;
                transition:background-color 2s;
                height: 67px
            }
            .dh1_active .pic
            {
                float: left;
                margin-top: 20px;
                margin-left: 15px
            }
            .dh1_active .content
            {
                float: left;
                margin-top: 10px;
                margin-left: 20px
            }
            .dh1_active .content hr
            {
                border:0.5px solid red;
                margin-top: 8px;
                margin-bottom: 0
            }


            .dh1 .content text h5 a small
            {
                color: #333333;
            }
            .dh1_active .content text h5 a small
            {
                color: #FFFFFF;
            }

            .dh1 .detail .panel
            {
                display: none; 
                position: absolute;
                width: 300px;
                height: 390px;
                margin-left: 270px;
                color: #333333;
            }

            .dh1_active .detail .panel
            {
                display: block; 
                position: absolute;
                width: 300px;
                height: 390px;
                top: 0;
                margin-left: 270px;

            }
            .dh1_active .detail .panel .panel-body
            {
                color: #333333;
            }



        </style>
        <div class="container" style="width: 1200px; padding: 0">
            <div class="panel panel-default" style="position:absolute;z-index:100; top:149px;width: 270px;border: 0">
                <div class="panel-body" style="padding: 0">
                    <div class="dh1" onmouseover="this.className = 'dh1_active'" onmouseout="this.className = 'dh1'">
                        <div class="pic">
                            <img src="<?php echo base_url() . "img/xz-35-35.png"; ?>" alt="...">
                        </div>
                        <div class="content">
                            <text><h4 style="margin-top: 5px"><strong>数码通讯</strong></h4></text>
                            <text><h5><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a></h5></text>
                            <hr style="margin-top: 8px;margin-bottom: 0" />
                        </div>
                        <div class="detail">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    Basic panel example1
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="dh1" onmouseover="this.className = 'dh1_active'" onmouseout="this.className = 'dh1'">
                        <div class="pic">
                            <img src="<?php echo base_url() . "img/bb-35-35.png"; ?>" alt="...">
                        </div>
                        <div class="content">
                            <text><h4 style="margin-top: 5px"><strong>数码通讯</strong></h4></text>
                            <text><h5><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a></h5></text>
                            <hr style="margin-top: 8px;margin-bottom: 0; color:#D14">
                        </div>
                        <div class="detail">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    Basic panel example7
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dh1" onmouseover="this.className = 'dh1_active'" onmouseout="this.className = 'dh1'">
                        <div class="pic">
                            <img src="<?php echo base_url() . "img/xs-35-35.png"; ?>" alt="...">
                        </div>
                        <div class="content">
                            <text><h4 style="margin-top: 5px"><strong>数码通讯</strong></h4></text>
                            <text><h5><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a></h5></text>
                            <hr style="margin-top: 8px;margin-bottom: 0">
                        </div>
                        <div class="detail">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    Basic panel example2
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dh1" onmouseover="this.className = 'dh1_active'" onmouseout="this.className = 'dh1'">
                        <div class="pic">
                            <img src="<?php echo base_url() . "img/yf-35-35.png"; ?>" alt="...">
                        </div>
                        <div class="content">
                            <text><h4 style="margin-top: 5px"><strong>数码通讯</strong></h4></text>
                            <text><h5><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a></h5></text>
                            <hr style="margin-top: 8px;margin-bottom: 0">
                        </div>
                        <div class="detail">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    Basic panel example3
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dh1" onmouseover="this.className = 'dh1_active'" onmouseout="this.className = 'dh1'">
                        <div class="pic">
                            <img src="<?php echo base_url() . "img/fq-35-35.png"; ?>" alt="...">
                        </div>
                        <div class="content">
                            <text><h4 style="margin-top: 5px"><strong>数码通讯</strong></h4></text>
                            <text><h5><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a></h5></text>
                            <hr style="margin-top: 8px;margin-bottom: 0">
                        </div>
                        <div class="detail">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    Basic panel example4
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dh1" onmouseover="this.className = 'dh1_active'" onmouseout="this.className = 'dh1'">
                        <div class="pic">
                            <img src="<?php echo base_url() . "img/jz-35-35.png"; ?>" alt="...">
                        </div>
                        <div class="content">
                            <text><h4 style="margin-top: 5px"><strong>数码通讯</strong></h4></text>
                            <text><h5><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a></h5></text>
                            <hr style="margin-top: 8px;margin-bottom: 0">
                        </div>
                        <div class="detail">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    Basic panel example5
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dh1" onmouseover="this.className = 'dh1_active'" onmouseout="this.className = 'dh1'">
                        <div class="pic">
                            <img src="<?php echo base_url() . "img/jz-35-35.png"; ?>" alt="...">
                        </div>
                        <div class="content">
                            <text><h4 style="margin-top: 5px"><strong>数码通讯</strong></h4></text>
                            <text><h5><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a><a style="margin-right: 25px"><small>数码</small></a></h5></text>

                        </div>
                        <div class="detail">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    Basic panel example6
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="left" class="leftcontent">
                <div class="alert alert-warning" style=" margin-bottom: 0;margin-top: 20px;padding: 0;height: 50px" role="alert">...</div>
                <div style="padding-top: 20px;padding-bottom: 20px">

                    <div class="itempic">

                        <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
                    </div>
                    <div style="float: left;width: 670px">
                        <div id="title"><h3 style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>坑爹的卖家</strong></h3></div>
                        <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <span>
                                <strong>网友ID：</strong>
                                <small>舒缓型喷雾夏天用可缓解肌肤燥热，单买好价。VICHY薇姿是全球知名的药妆品牌，目前下属于法国欧莱雅公司旗下。薇姿家比较受欢迎的就是润泉系列以及油脂调护系列。 这款润泉舒缓喷雾，富含15种矿物质，有助于增加皮肤舒适度，帮助增强皮肤天然防御功能。根据用户评价...s</small>
                            </span>
                        </div>
                        <div id="comment" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                            <span>
                                <strong>小编评语:</strong>
                                精神可嘉，必须赞！
                            </span>
                        </div>
                        <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        </div>
                        <div id="flag" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                            <div id="pity"></div>
                            <span class="glyphicon glyphicon-heart-empty" style="margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>
                            <button type="button" class="btn btn-danger" style="float: right">去看看<span class="glyphicon glyphicon-chevron-right"></span></button>
                        </div>

                        <hr>

                    </div>


                </div>
                <div style="padding-top: 20px;padding-bottom: 20px">

                    <div class="itempic">

                        <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
                    </div>
                    <div style="float: left;width: 670px">
                        <div id="title"><h3 style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>坑爹的卖家</strong></h3></div>
                        <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <span>
                                <strong>网友ID：</strong>
                                <small>舒缓型喷雾夏天用可缓解肌肤燥热，单买好价。VICHY薇姿是全球知名的药妆品牌，目前下属于法国欧莱雅公司旗下。薇姿家比较受欢迎的就是润泉系列以及油脂调护系列。 这款润泉舒缓喷雾，富含15种矿物质，有助于增加皮肤舒适度，帮助增强皮肤天然防御功能。根据用户评价...s</small>
                            </span>
                        </div>
                        <div id="comment" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                            <span>
                                <strong>小编评语:</strong>
                                精神可嘉，必须赞！
                            </span>
                        </div>
                        <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        </div>
                        <div id="flag" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                            <div id="pity"></div>
                            <span class="glyphicon glyphicon-heart-empty" style="margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>
                            <button type="button" class="btn btn-danger" style="float: right">去看看<span class="glyphicon glyphicon-chevron-right"></span></button>
                        </div>

                        <hr>

                    </div>


                </div>
                <div style="padding-top: 20px;padding-bottom: 20px">

                    <div class="itempic">

                        <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
                    </div>
                    <div style="float: left;width: 670px">
                        <div id="title"><h3 style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>坑爹的卖家</strong></h3></div>
                        <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <span>
                                <strong>网友ID：</strong>
                                <small>舒缓型喷雾夏天用可缓解肌肤燥热，单买好价。VICHY薇姿是全球知名的药妆品牌，目前下属于法国欧莱雅公司旗下。薇姿家比较受欢迎的就是润泉系列以及油脂调护系列。 这款润泉舒缓喷雾，富含15种矿物质，有助于增加皮肤舒适度，帮助增强皮肤天然防御功能。根据用户评价...s</small>
                            </span>
                        </div>
                        <div id="comment" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                            <span>
                                <strong>小编评语:</strong>
                                精神可嘉，必须赞！
                            </span>
                        </div>
                        <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        </div>
                        <div id="flag" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                            <div id="pity"></div>
                            <span class="glyphicon glyphicon-heart-empty" style="margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>
                            <button type="button" class="btn btn-danger" style="float: right">去看看<span class="glyphicon glyphicon-chevron-right"></span></button>
                        </div>

                        <hr>

                    </div>


                </div>
                <div style="padding-top: 20px;padding-bottom: 20px">

                    <div class="itempic">

                        <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
                    </div>
                    <div style="float: left;width: 670px">
                        <div id="title"><h3 style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>坑爹的卖家</strong></h3></div>
                        <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <span>
                                <strong>网友ID：</strong>
                                <small>舒缓型喷雾夏天用可缓解肌肤燥热，单买好价。VICHY薇姿是全球知名的药妆品牌，目前下属于法国欧莱雅公司旗下。薇姿家比较受欢迎的就是润泉系列以及油脂调护系列。 这款润泉舒缓喷雾，富含15种矿物质，有助于增加皮肤舒适度，帮助增强皮肤天然防御功能。根据用户评价...s</small>
                            </span>
                        </div>
                        <div id="comment" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                            <span>
                                <strong>小编评语:</strong>
                                精神可嘉，必须赞！
                            </span>
                        </div>
                        <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        </div>
                        <div id="flag" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                            <div id="pity"></div>
                            <span class="glyphicon glyphicon-heart-empty" style="margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>
                            <button type="button" class="btn btn-danger" style="float: right">去看看<span class="glyphicon glyphicon-chevron-right"></span></button>
                        </div>

                        <hr>

                    </div>


                </div>
                <div style="padding-top: 20px;padding-bottom: 20px">

                    <div class="itempic">

                        <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
                    </div>
                    <div style="float: left;width: 670px">
                        <div id="title"><h3 style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>坑爹的卖家</strong></h3></div>
                        <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <span>
                                <strong>网友ID：</strong>
                                <small>舒缓型喷雾夏天用可缓解肌肤燥热，单买好价。VICHY薇姿是全球知名的药妆品牌，目前下属于法国欧莱雅公司旗下。薇姿家比较受欢迎的就是润泉系列以及油脂调护系列。 这款润泉舒缓喷雾，富含15种矿物质，有助于增加皮肤舒适度，帮助增强皮肤天然防御功能。根据用户评价...s</small>
                            </span>
                        </div>
                        <div id="comment" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                            <span>
                                <strong>小编评语:</strong>
                                精神可嘉，必须赞！
                            </span>
                        </div>
                        <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        </div>
                        <div id="flag" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                            <div id="pity"></div>
                            <span class="glyphicon glyphicon-heart-empty" style="margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>
                            <button type="button" class="btn btn-danger" style="float: right">去看看<span class="glyphicon glyphicon-chevron-right"></span></button>
                        </div>

                        <hr>

                    </div>


                </div>
                <div style="padding-top: 20px;padding-bottom: 20px">

                    <div class="itempic">

                        <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
                    </div>
                    <div style="float: left;width: 670px">
                        <div id="title"><h3 style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>坑爹的卖家</strong></h3></div>
                        <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <span>
                                <strong>网友ID：</strong>
                                <small>舒缓型喷雾夏天用可缓解肌肤燥热，单买好价。VICHY薇姿是全球知名的药妆品牌，目前下属于法国欧莱雅公司旗下。薇姿家比较受欢迎的就是润泉系列以及油脂调护系列。 这款润泉舒缓喷雾，富含15种矿物质，有助于增加皮肤舒适度，帮助增强皮肤天然防御功能。根据用户评价...s</small>
                            </span>
                        </div>
                        <div id="comment" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                            <span>
                                <strong>小编评语:</strong>
                                精神可嘉，必须赞！
                            </span>
                        </div>
                        <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        </div>
                        <div id="flag" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                            <div id="pity"></div>
                            <span class="glyphicon glyphicon-heart-empty" style="margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>
                            <button type="button" class="btn btn-danger" style="float: right">去看看<span class="glyphicon glyphicon-chevron-right"></span></button>
                        </div>

                        <hr>

                    </div>


                </div>
                <div style="padding-top: 20px;padding-bottom: 20px">

                    <div class="itempic">

                        <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
                    </div>
                    <div style="float: left;width: 670px">
                        <div id="title"><h3 style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>坑爹的卖家</strong></h3></div>
                        <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <span>
                                <strong>网友ID：</strong>
                                <small>舒缓型喷雾夏天用可缓解肌肤燥热，单买好价。VICHY薇姿是全球知名的药妆品牌，目前下属于法国欧莱雅公司旗下。薇姿家比较受欢迎的就是润泉系列以及油脂调护系列。 这款润泉舒缓喷雾，富含15种矿物质，有助于增加皮肤舒适度，帮助增强皮肤天然防御功能。根据用户评价...s</small>
                            </span>
                        </div>
                        <div id="comment" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                            <span>
                                <strong>小编评语:</strong>
                                精神可嘉，必须赞！
                            </span>
                        </div>
                        <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                            <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        </div>
                        <div id="flag" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                            <div id="pity"></div>
                            <span class="glyphicon glyphicon-heart-empty" style="margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                            <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                            <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>
                            <button type="button" class="btn btn-danger" style="float: right">去看看<span class="glyphicon glyphicon-chevron-right"></span></button>
                        </div>

                        <hr>

                    </div>


                </div>


            </div>
            <div id="right" style="width: 260px;padding-top: 20px;padding-left: 20px;float: left">
                <div class="panel panel-default" style="width: 240px">
                    <div class="panel-body" style=" padding-top: 0px; ">
                        <div style="clear:both">
                            <div style="float: left;margin-top: 20px">
                                <span class="glyphicon glyphicon-fire"></span>
                            </div>
                            <div style="float: left;margin-top: 10px;margin-left: 15px">
                                <text><strong>吐槽京东</strong></text>
                                <h5><small>   222人关注    444吐槽</small></h5>
                            </div>
                        </div>
                        <div style="clear:both">
                            <div style="float: left;margin-top: 20px">
                                <span class="glyphicon glyphicon-fire"></span>
                            </div>
                            <div style="float: left;margin-top: 10px;margin-left: 15px">
                                <text><strong>吐槽京东</strong></text>
                                <h5><small>   222人关注    444吐槽</small></h5>
                            </div>
                        </div>
                        <div style="clear:both">
                            <div style="float: left;margin-top: 20px">
                                <span class="glyphicon glyphicon-fire"></span>
                            </div>
                            <div style="float: left;margin-top: 10px;margin-left: 15px">
                                <text><strong>吐槽京东</strong></text>
                                <h5><small>   222人关注    444吐槽</small></h5>
                            </div>
                        </div>
                        <div style="clear:both">
                            <div style="float: left;margin-top: 20px">
                                <span class="glyphicon glyphicon-fire"></span>
                            </div>
                            <div style="float: left;margin-top: 10px;margin-left: 15px">
                                <text><strong>吐槽京东</strong></text>
                                <h5><small>   222人关注    444吐槽</small></h5>
                            </div>
                        </div>
                        <div style="clear:both">
                            <div style="float: left;margin-top: 20px">
                                <span class="glyphicon glyphicon-fire"></span>
                            </div>
                            <div style="float: left;margin-top: 10px;margin-left: 15px">
                                <text><strong>吐槽京东</strong></text>
                                <h5><small>   222人关注    444吐槽</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-danger" style="width: 240px">
                    <div class="panel-heading">
                        <h3 class="panel-title">最热门</h3>
                    </div>
                    <div class="panel-body" style=" padding-top: 0px; ">
                        <div style="clear:both">
                            <div style="float: left;margin-top: 20px">
                                <span class="glyphicon glyphicon-fire"></span>
                            </div>
                            <div style="float: left;margin-top: 10px;margin-left: 15px">
                                <text><strong>吐槽京东</strong></text>
                                <h5><small>   222人关注    444吐槽</small></h5>
                            </div>
                        </div>
                        <div style="clear:both">
                            <div style="float: left;margin-top: 20px">
                                <span class="glyphicon glyphicon-fire"></span>
                            </div>
                            <div style="float: left;margin-top: 10px;margin-left: 15px">
                                <text><strong>吐槽京东</strong></text>
                                <h5><small>   222人关注    444吐槽</small></h5>
                            </div>
                        </div>
                        <div style="clear:both">
                            <div style="float: left;margin-top: 20px">
                                <span class="glyphicon glyphicon-fire"></span>
                            </div>
                            <div style="float: left;margin-top: 10px;margin-left: 15px">
                                <text><strong>吐槽京东</strong></text>
                                <h5><small>   222人关注    444吐槽</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-info" style="width: 240px">
                    <div class="panel-heading">
                        <h3 class="panel-title">最悲催</h3>
                    </div>
                    <div class="panel-body" style=" padding-top: 0px; ">
                        <div style="clear:both">
                            <div style="float: left;margin-top: 20px">
                                <span class="glyphicon glyphicon-fire"></span>
                            </div>
                            <div style="float: left;margin-top: 10px;margin-left: 15px">
                                <text><strong>吐槽京东</strong></text>
                                <h5><small>   222人关注    444吐槽</small></h5>
                            </div>
                        </div>
                        <div style="clear:both">
                            <div style="float: left;margin-top: 20px">
                                <span class="glyphicon glyphicon-fire"></span>
                            </div>
                            <div style="float: left;margin-top: 10px;margin-left: 15px">
                                <text><strong>吐槽京东</strong></text>
                                <h5><small>   222人关注    444吐槽</small></h5>
                            </div>
                        </div>
                        <div style="clear:both">
                            <div style="float: left;margin-top: 20px">
                                <span class="glyphicon glyphicon-fire"></span>
                            </div>
                            <div style="float: left;margin-top: 10px;margin-left: 15px">
                                <text><strong>吐槽京东</strong></text>
                                <h5><small>   222人关注    444吐槽</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-warning" style="width: 240px">
                    <div class="panel-heading">
                        <h3 class="panel-title">最奇葩</h3>
                    </div>
                    <div class="panel-body" style=" padding-top: 0px; ">
                        <div style="clear:both">
                            <div style="float: left;margin-top: 20px">
                                <span class="glyphicon glyphicon-fire"></span>
                            </div>
                            <div style="float: left;margin-top: 10px;margin-left: 15px">
                                <text><strong>吐槽京东</strong></text>
                                <h5><small>   222人关注    444吐槽</small></h5>
                            </div>
                        </div>
                        <div style="clear:both">
                            <div style="float: left;margin-top: 20px">
                                <span class="glyphicon glyphicon-fire"></span>
                            </div>
                            <div style="float: left;margin-top: 10px;margin-left: 15px">
                                <text><strong>吐槽京东</strong></text>
                                <h5><small>   222人关注    444吐槽</small></h5>
                            </div>
                        </div>
                        <div style="clear:both">
                            <div style="float: left;margin-top: 20px">
                                <span class="glyphicon glyphicon-fire"></span>
                            </div>
                            <div style="float: left;margin-top: 10px;margin-left: 15px">
                                <text><strong>吐槽京东</strong></text>
                                <h5><small>   222人关注    444吐槽</small></h5>
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
                        top:218px
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

                <div class="user">
                    <div class="info" >
                        <div class="">
                            <a href="#" class="avatar" target="_blank" ><img src="<?php echo base_url() . "img/head.jpg"; ?>"></a>
                        </div>
                        <p class="name-wrap"><span class="name">您好，小鹿是我！</span></p>
                        <hr>
                        <div>
                            <span class="glyphicon glyphicon-fire" style=" padding-right: 20px"></span><text style=" color: #FFFFFF">我的消息<span class="badge" style="margin-left: 20px">42</span>
                        </div>
                        <hr>
                        <div>
                            <span class="glyphicon glyphicon-fire" style=" padding-right: 20px"></span><text style=" color: #FFFFFF">我的收藏<span class="badge" style="margin-left: 20px">42</span>
                        </div>
                        <hr>
                        <div>
                            <span class="glyphicon glyphicon-fire" style=" padding-right: 20px"></span><text style=" color: #FFFFFF">我的私信<span class="badge" style="margin-left: 20px">42</span>
                        </div>




                    </div>
                </div>




            </div>
        </div>
    </div>

    <script>
        function show(obj) {
            var id = obj.id;

            //document.getElementById(id).popover('show');
            $(aa).popover('show');
            //obj.popover('show');
            //$("[data-toggle='popover']").popover('show');
        }
        $(function()
        {
            //$("[data-toggle='popover']").popover();
        });

    </script>


</div>

