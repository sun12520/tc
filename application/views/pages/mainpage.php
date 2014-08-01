<!--//标题 22 加粗
//正文  14 前面加粗
文字黑色 333333  附文字灰色 666666
//文字色值 666666   阅读全文 0a75ad  分割线 e0e0e0
//字体 雅黑
//关注吐槽 12
-->


<script type="text/javascript">

    $(document).ready(function() {
        //$("body").attr("class", "body_account body_xggrxx");
        //inner.init();
    });
</script>



<div class="container" style="width:100%;padding: 0">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >

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
                <img src="<?php echo base_url() . "img/pic.png"; ?>" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="<?php echo base_url() . "img/big3.jpg"; ?>" alt="...">
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
        //height: 200px
    }

    .itempic > img
    {
        height: 200px;
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
        margin-left: 15px;

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
        font-family:"Microsoft YaHei";
        letter-spacing:1px;
        color: #666666;
        margin-right: 22px
    }
    .dh1_active .content text h5 a small
    {
        font-family:"Microsoft YaHei";
        letter-spacing:1px;
        color: #FFFFFF;
        margin-right: 22px
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
        //position: absolute;
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
    <div class="panel panel-default" style="position:absolute;z-index:100; top:153px;width: 270px;border: 0">
        <div class="panel-body" style="padding: 0">
            <div class="dh1" onmouseover="this.className = 'dh1_active'" onmouseout="this.className = 'dh1'">
                <div class="pic">
                    <img src="<?php echo base_url() . "img/xz-35-35.png"; ?>" alt="...">
                </div>
                <div class="content">
                    <text><h4 style="margin-top: 5px;font-family:'Microsoft YaHei';letter-spacing:1px;"><strong>数码通讯</strong></h4></text>
                    <text><h5><a><small>数码</small></a><a><small>数码</small></a><a><small>数码</small></a><a><small>数码</small></a></h5></text>
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
                    <text><h4 style="margin-top: 5px;font-family:'Microsoft YaHei';letter-spacing:1px;"><strong>数码通讯</strong></h4></text>
                    <text><h5><a><small>数码</small></a><a><small>数码</small></a><a><small>数码</small></a><a><small>数码</small></a></h5></text>
                    <hr style="margin-top: 8px;margin-bottom: 0" />
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
                    <text><h4 style="margin-top: 5px;font-family:'Microsoft YaHei';letter-spacing:1px;"><strong>数码通讯</strong></h4></text>
                    <text><h5><a><small>数码</small></a><a><small>数码</small></a><a><small>数码</small></a><a><small>数码</small></a></h5></text>
                    <hr style="margin-top: 8px;margin-bottom: 0" />
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
                    <text><h4 style="margin-top: 5px;font-family:'Microsoft YaHei';letter-spacing:1px;"><strong>数码通讯</strong></h4></text>
                    <text><h5><a><small>数码</small></a><a><small>数码</small></a><a><small>数码</small></a><a><small>数码</small></a></h5></text>
                    <hr style="margin-top: 8px;margin-bottom: 0" />
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
                    <text><h4 style="margin-top: 5px;font-family:'Microsoft YaHei';letter-spacing:1px;"><strong>数码通讯</strong></h4></text>
                    <text><h5><a><small>数码</small></a><a><small>数码</small></a><a><small>数码</small></a><a><small>数码</small></a></h5></text>
                    <hr style="margin-top: 8px;margin-bottom: 0" />
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
                    <text><h4 style="margin-top: 5px;font-family:'Microsoft YaHei';letter-spacing:1px;"><strong>数码通讯</strong></h4></text>
                    <text><h5><a><small>数码</small></a><a><small>数码</small></a><a><small>数码</small></a><a><small>数码</small></a></h5></text>
                    <hr style="margin-top: 8px;margin-bottom: 0" />
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
                    <text><h4 style="margin-top: 5px;font-family:'Microsoft YaHei';letter-spacing:1px;"><strong>数码通讯</strong></h4></text>
                    <text><h5><a><small>数码</small></a><a><small>数码</small></a><a><small>数码</small></a><a><small>数码</small></a></h5></text>
                    <hr style="margin-top: 8px;margin-bottom: 0" />
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
        
        <?php foreach ($ass_list as $row): ?>
            <div style="padding-top: 20px;padding-bottom: 20px">
                <div class="itempic">
                    <img src="<?php echo base_url() . "img/item.jpg"; ?>" alt="..." class="img-responsive">
                </div>
                <div style="float: left;width: 670px;height: 247px">
                    
                    <div id="title"><h3 class="titchr" style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong><?php echo $row->title ?></strong></h3></div>
                    <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px;height:61px">
                        <span class="contchr" style="">
                            <strong><?php echo $row->user_id ?>：</strong>
                            <?php echo $row->Content ?>
                        </span>
                    </div>
                    <div id="comment" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                        <span class="contchr">
                            <strong>小编评语:</strong>
                            <?php echo $row->assess_id ?>精神可嘉，必须赞！
                        </span>
                    </div>
                    <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                        <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                    </div>
                    <div id="flag" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px" class="contchr">
                        <div id="pity"></div>
                        <span class="glyphicon glyphicon-heart-empty" style="margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                        <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                        <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>
                        <button type="button" class="btn btn-danger" style="float: right"><span class="contbut">去看看</span><span class="glyphicon glyphicon-chevron-right"></span></button>
                    </div>
                    <hr style=" bottom: 0">
                    
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <div id="right" style="width: 260px;padding-top: 20px;padding-left: 20px;float: left">
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


<script language="javascript">
var total_page=<?php echo $totle_page ?>;
var url="<?php echo site_url("assess/view/mainpage/") ?>";//当前链接,格式如下，例如：?aa=1&page  ,somepage.php?action=1&cat=1&page
var current_page = <?php echo $current_page ?>;


$().ready(function(){

        document.getElementById('page').innerHTML=pagination(current_page);
	//$(".page").(pagination(1))
	
	page_link();
})



function page_link()
{
	$(".page A").click(function(){
		var page=parseInt($(this).attr("page"))
 
		$(".recordlist").load($(this).attr("href"),"",function(){$(".page").html(pagination(page));page_link();})
		return false;
	})
}

function pagination(current_page)
{
 
	//翻页链接开始
	current_page = current_page<=0 ? 1 : current_page;
	current_page = current_page>total_page?total_page:current_page;
        //alert(total_page);
	var page_link="";
	if (total_page>1)
	{
		//page_link="<li><a>一共"+total_page+"页</a></li>";
		//page_link+="<li><a>当前第"+current_page+"页</a></li>";
		//page_link+='<li><a style="border: 0" href="'+url+'/1 page=1>首页</a></li>';

		if (current_page>1){
			//页码大于1的时候，显示上一页翻页链接
			var pre_page=current_page-1;
			page_link+='<li><a style="border: 0" href="'+url+"/"+pre_page+'" page='+pre_page+'>&laquo;上一页</a></li>';
		}
		//翻页列表

		//步进分页，翻页列表的数字始终只显示9个或者自定义的个数,本例定义只显示9个,当前页左右各显示4个页码
		if (total_page>9)
		{
			if (current_page>4)
			{
				var from=current_page-4;
				var to=current_page+4;
				if (to>total_page)
				{
					var from=total_page-8;
					var to=total_page;
				}
				 
			}
			else
			{
				var from=1;
				var to=9;
			}

		}
		else
		{
			var from=1;
			var to=total_page;
		}
		for (var i=from;i<=to;i++)
		{
			if (i==current_page)
			{
				//高亮当前页页码
				page_link+='<li class="currentpage"><a style="border: 0" href="'+url+"/"+i+'" page="'+i+'">'+i+'</a></li>';
			}
			else
			{
				page_link+='<li><a style="border: 0" href="'+url+"/"+i+'" page="'+i+'"  page="'+i+'">'+i+'</a></li>';
			}

		}
		//页码小于总页数的时候显示下一页翻页链接
		var next_page=current_page+1;
		if(next_page<total_page)
		{
			page_link+='<li><a style="border: 0" href="'+url+"/"+next_page+'" page="'+next_page+'">下一页&raquo;</a></li>';
		}
		page_link+='<li><a style="border: 0" href="'+url+"/"+total_page+'" page="'+total_page+'>最后一页</a></li>';
	}
	return page_link;
}

</script>

<style type="text/css">
    .pagination .currentpage > a
    {
        color: #D14;
        //background-color: #D14
    }
</style>

<div style=" margin-left: 500px;height: 34px">
    <ul id="page" class="pagination" style="margin: 0;">
        <li><a href="#" style="border: 0">&laquo;上一页</a></li>
        <li><a href="#" style="border: 0">1</a></li>
        <li><a href="#" style="border: 0">2</a></li>
        <li><a href="#" style="border: 0">3</a></li>
        <li><a href="#" style="border: 0">4</a></li>
        <li><a href="#" style="border: 0">5</a></li>
        <li><a href="#" style="border: 0">6</a></li>
        <li><a href="#" style="border: 0">7</a></li>
        <li><a href="#" style="border: 0">8</a></li>
        <li><a href="#" style="border: 0">...</a></li>
        <li><a href="#" style="border: 0">21</a></li>
        <li><a href="#" style="border: 0">下一页&raquo;</a></li>
    </ul>
</div>

