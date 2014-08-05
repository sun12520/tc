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
                font-family: "Microsoft YaHei"; 
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
                background-color: #f9f9f9;
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

            .modal-open .container .carousel .carousel-inner >div>img,
            .modal-open .container .carousel .carousel-inner >div>div,
            .modal-open .container .carousel .carousel-indicators
            {
                padding-right:15px;
            }

            .has-error
            {
                margin-right: -15px;
                margin-left: -15px;
                margin-bottom:15px;
                width:598px;
                height:34px
            }

        </style>

        <script type="text/javascript">
            function regin() {
                var email = document.getElementById('emailreg').value;
                var username = document.getElementById('usernamereg').value;
                var password = document.getElementById('passwordreg').value;
                var checkcode = document.getElementById('checkcodereg').value;
                var regurl = "<?php echo site_url('user/reg') ?>";

                if (username == '')
                {
                    alert('请填写用户名！');
                    document.getElementById('usernamereg').parentNode.parentNode.setAttribute('class', 'has-error');
                    return false;
                }

                if (password == '')
                {
                    alert('请填写密码！');
                    document.getElementById('passwordreg').parentNode.parentNode.setAttribute('class', 'has-error');
                    return false;
                }

                if (email == '')
                {
                    alert('请填写邮箱！');
                    document.getElementById('emailreg').parentNode.parentNode.setAttribute('class', 'has-error');
                    return false;
                }
                
                if (checkcode == '')
                {
                    alert('验证码为空！');
                    document.getElementById('checkcodereg').parentNode.parentNode.setAttribute('class', 'has-error');
                    return false;
                }
                
                var postdata = {
                    email: email,
                    username: username,
                    password: password,
                    checkcode: checkcode
                }

                //alert(checkcode);
                $.post(regurl, postdata, function(data, status) {
                    if (status == 'success')
                    {
                        //alert(data);
                        if (data == 1)
                        {
                            alert('注册成功');
                            window.location.href='<?php echo site_url('assess/view/mainpage') ?>';
                            //alert('True');
                        } else
                        {
                            alert('验证码填写错误');
                        }
                    } else {
                        alert('服务器繁忙，请稍后再试！');
                    }
                });
            }
            function login() {
                //var email = document.getElementById('emaillg').value;
                var username = document.getElementById('usernamelg').value;
                var password = document.getElementById('passwordlg').value;
                var checkcode = document.getElementById('checkcodelg').value;
                var lgurl = "<?php echo site_url('user/login') ?>";



                if (username == '')
                {
                    alert('请填写用户名！');
                    document.getElementById('usernamelg').parentNode.parentNode.setAttribute('class', 'has-error');
                    return false;
                }

                if (password == '')
                {
                    alert('请填写密码！');
                    document.getElementById('passwordlg').parentNode.parentNode.setAttribute('class', 'has-error');
                    return false;
                }
                if (checkcode == '')
                {
                    alert('验证码为空！');
                    document.getElementById('checkcodelg').parentNode.parentNode.setAttribute('class', 'has-error');
                    return false;
                }
                
                var postdata = {
                    username: username,
                    password: password,
                    checkcode: checkcode
                }

                //alert(checkcode);
                $.post(lgurl, postdata, function(data, status) {
                    if (status == 'success')
                    {
                        //alert(data);
                        if (data == 1)
                        {
                            //alert('登陆成功');
                            window.location.href='<?php echo site_url('assess/view/mainpage') ?>';
                            //alert('True');
                        } else
                        {
                            alert('验证码填写错误');
                        }
                    } else {
                        alert('服务器繁忙，请稍后再试！');
                    }
                });
            }
        </script>


    </head>
    <body style="padding-right:-15px;">

        <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">登陆</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" action="index.php/user/reg" method="post">
                            <div class="form-group">
                                <label for="usernamelg" class="col-sm-2 control-label">UserName</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="UserName" id="usernamelg" name="username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="passwordlg" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" placeholder="Password" id="passwordlg" name="password">
                                </div>
                                <div>
                                    <input type="hidden" name="url" value="<?php echo $url ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="checkcodelg" class="col-sm-2 control-label">CheckCode</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" placeholder="checkcode" id="checkcodelg" name="checkcode"></input>
                                </div>
                                <div class="col-sm-5">
                                    <img name="checkcodelg" style="height:35px" src="<?php echo site_url("assess/newck") ?>" onclick="javascript:this.src = '<?php echo site_url("assess/newck?tm=") ?>' + Math.random();" />
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
                                    <button type="button" onclick="login()" class="btn btn-default">登录</button>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="Regin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">注册</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" action="index.php/user/login" method="post">
                            <div class="form-group">
                                <label for="usernamereg" class="col-sm-2 control-label">UserName</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="UserName" id="usernamereg" name="username"></input>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="passwordreg" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" placeholder="Password" id="passwordreg" name="password"></input>
                                </div>
                                <div>
                                    <input type="hidden" name="url" value="<?php echo $url ?>"></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="email" id="emailreg" name="email"></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="checkcodereg" class="col-sm-2 control-label">CheckCode</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" placeholder="checkcode" id="checkcodereg" name="checkcode"></input>
                                </div>
                                <div class="col-sm-5">
                                    <img name="checkcode" style="height:35px" src="<?php echo site_url("assess/newck") ?>" onclick="javascript:this.src = '<?php echo site_url("assess/newck?tm=") ?>' + Math.random();" />
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="button" onclick="regin();" class="btn btn-default">提交</button>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->


        <div class="topbar" style="width:100%">
            <div class="container" style="width:1000px" >
                <div class="bar">
                    <ul class="barul">
                        <a href="<?php echo site_url('assess/view/mainpage') ?>"><li class="title" onmouseover="this.className = 'title_active'" onmouseout="this.className = 'title'">首页</li></a>
                        <a href="#"><li class="title" onmouseover="this.className = 'title_active'" onmouseout="this.className = 'title'">经验</li></a>
                        <a href="#"><li class="title" onmouseover="this.className = 'title_active'" onmouseout="this.className = 'title'">集合</li></a>
                        <a href="#"><li class="title" onmouseover="this.className = 'title_active'" onmouseout="this.className = 'title'">资讯</li></a>

                        <?php
                        if (!$username) {
                            ?>
                            <a href = "#" data-toggle = "modal" data-target = "#Login"><li class = "title_right" style = " margin-left:560px" onmouseover = "this.className = 'title_right_active'" onmouseout = "this.className = 'title_right'">登录</li></a>
                            <a href = "#" data-toggle = "modal" data-target = "#Regin"><li class = "title_right" onmouseover = "this.className = 'title_right_active'" onmouseout = "this.className = 'title_right'">注册</li></a>
                            <?php
                        } else {
                            ?>
                            <a href = "#" data-toggle = "modal" data-target = "#myModal"><li class = "title_right" style = " margin-left:700px" onmouseover = "this.className = 'title_right_active'" onmouseout = "this.className = 'title_right'"><?php echo $username; ?></li></a>
                            <a href = "<?php echo site_url('user/logout') ?>"><li class = "title_right" onmouseover = "this.className = 'title_right_active'" onmouseout = "this.className = 'title_right'">注销</li></a>

                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="searchbar" >
            <div class="container" style="width:1000px">
                <div class="bar">

                    <a href="#"><img style="margin-top: 15px;margin-left: 0px;float: left" src="<?php echo base_url() . "img/less-logo-large.png"; ?>"></a>

                    <div class="form-group has-feedback" style="float:left;margin-top: 25px;margin-left: 40px;width: 570px">
                        <input type="text" class="form-control" id="inputSuccess2" placeholder="Search">
                            <a href="<?php echo site_url('search'); ?>"><span class="glyphicon glyphicon-search form-control-feedback" style="top:1px"></span></a>
                    </div>
                    <a href="<?php echo site_url('assess/commit') ?>"><img style="margin-top: 4px;margin-left: 20px;float: left" src="<?php echo base_url() . "img/tucao.jpg"; ?>"></a>

                </div>
            </div>
        </div>




