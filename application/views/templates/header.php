<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo $title ?> - CodeIgniter 2 Tutorial</title>
        <base href="<?php echo base_url(); ?>"/>


        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/bootstrap-responsive.css" rel="stylesheet" />
        <!--<link href="css/docs.css" rel="stylesheet" />-->




        <script type="text/javascript" src="js/jquery.js"></script>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <style type="text/css">
            body { 
                font-family: Verdana,Arial,Tahoma; 
                font-size:14px; 
                margin:0 auto; 
            } 

        </style>

        <style type="text/css">

            .titchr,
            .contchr,
            .contbut,
            .contchr .num
            {
                font-family:"Microsoft YaHei";
                letter-spacing:1px;
            }

            .titchr
            {
                font-size:22px;
                color:#333333
            }
            .contchr
            {
                font-size:14px;
                color:#666666;

            }
            .contchr > strong
            {
                color:#333333
            }

            .contbut
            {
                font-size:14px;
                color:#FFFFFF
            }

            .contchr .num
            {
                padding-top: 8px;
                font-size:12px;
                color:#666666;
            }


            .topbar
            {
                top: 0;
                border-width: 0 0 1px;
                width:100%;
                height: 32px;
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
                height: 32px;
                //vertical-align : middle;
            }

            .barul .title
            {
                width: 70px;
                height: 32px;
                text-align: center;
                padding-top: 6px;
                float: left;
                display: block;
                position: relative;
                color: #666666
            }

            .barul .title_right
            {
                width: 70px;
                height: 32px;
                text-align: center;
                padding-top: 7px;
                float: left;
                //right: 50px;
                display: block;
                position: relative;
                color: #666666
            }

            .barul .title_right_active
            {
                width: 70px;
                height: 32px;
                text-align: center;
                padding-top: 7px;
                float: left;
                display: block;
                position: relative;
                background-color: #666666;
                color: #FFFFFF
            }

            .barul .title_active
            {
                width: 70px;
                height: 32px;
                text-align: center;
                padding-top: 7px;
                float: left;
                display: block;
                position: relative;
                background-color: #666666;
                color: #FFFFFF
            }




            .searchbar
            {
                margin-top:32px;
                border-width: 0 0 1px;
                width:100%;
                height: 81px;
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

            .modal-open .topbar
            {
                padding-right:15px;
                //overflow: scroll
            }
        </style>


    </head>
    <body style="padding-right:15">

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">登陆</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" action="index.php/user/login" method="post">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">UserName</label>
                                <div class="col-sm-10">
                                    <input type="username" class="form-control" id="inputEmail3" placeholder="UserName" name="username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                                </div>
                                <div>
                                    <input type="hidden" name="url" value="<?php echo $url ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">登录</button>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div>
            <!-- Modal -->


            <div class="topbar">
                <div class="container" style="width:1200px">
                    <div class="bar">
                        <ul class="barul">
                            <a href="<?php echo site_url('assess/view/mainpage') ?>"><li class="title" onmouseover="this.className = 'title_active'" onmouseout="this.className = 'title'">首页</li></a>
                            <a href="#"><li class="title" onmouseover="this.className = 'title_active'" onmouseout="this.className = 'title'">经验</li></a>
                            <a href="#"><li class="title" onmouseover="this.className = 'title_active'" onmouseout="this.className = 'title'">集合</li></a>
                            <a href="#"><li class="title" onmouseover="this.className = 'title_active'" onmouseout="this.className = 'title'">资讯</li></a>

                            <?php
                            if (!$username) {
                                ?>
                                <a href = "#" data-toggle = "modal" data-target = "#myModal"><li class = "title_right" style = " margin-left:700px" onmouseover = "this.className = 'title_right_active'" onmouseout = "this.className = 'title_right'">登录</li></a>
                                <a href = "<?php echo site_url('user/register') ?>"><li class = "title_right" onmouseover = "this.className = 'title_right_active'" onmouseout = "this.className = 'title_right'">注册</li></a>
                                <?php
                            } else {
                                ?>
                                <a href = "#" data-toggle = "modal" data-target = "#myModal"><li class = "title_right" style = " margin-left:700px" onmouseover = "this.className = 'title_right_active'" onmouseout = "this.className = 'title_right'"><?php echo $username;?></li></a>
                                <a href = "<?php echo site_url('user/logout') ?>"><li class = "title_right" onmouseover = "this.className = 'title_right_active'" onmouseout = "this.className = 'title_right'">注销</li></a>

                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="searchbar">
                <div class="container" style="width:1200px">
                    <div class="bar">

                        <a href="#"><img style="margin-top: 15px;margin-left: 60px;float: left" src="<?php echo base_url() . "img/less-logo-large.png"; ?>"></a>

                        <div class="form-group has-feedback" style="float:left;margin-top: 25px;margin-left: 40px;width: 665px">
                            <input type="text" class="form-control" id="inputSuccess2" placeholder="Search">
                                <a href="#"><span class="glyphicon glyphicon-search form-control-feedback" style="top:1px"></span></a>
                        </div>
                        <a href="<?php echo site_url('assess/commit') ?>"><img style="margin-top: 4px;margin-left: 20px;float: left" src="<?php echo base_url() . "img/tucao.jpg"; ?>"></a>

                    </div>
                </div>
            </div>




