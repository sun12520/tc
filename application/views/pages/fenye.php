
<<<<<<< HEAD
<style>
body{ font-size:12px; font-family:Verdana, Arial, Helvetica, sans-serif}
.page A{ padding:3px 5px; float:left; border:solid #CCCCCC 1px; text-decoration:none; font-size:12px; margin-left:1px; font-family:Verdana;color:#000000;}
.page A.currentpage{ color:#FF0000; border: solid red 1px;}
.page A:hover{ background-color:#CCCCCC;}
</style>

</head>

<body><?php
 
//PHP分页实例


//分页尺寸
$page_size=2;

$conn=mysql_connect("10.241.226.31:3307","root","123456") or die(mysql_error());
mysql_select_db("tccenter");

//计算总行数
$total_records=mysql_num_rows(mysql_query("SELECT assess_id from assess"));
//echo $total_records;
//总页数
$total_page=ceil($total_records/$page_size);
 
$query=mysql_query("select * from assess limit 0,$page_size")  or die(mysql_error());
?>
<div class="recordlist">
<ul>
<?php
while ($rs=mysql_fetch_array($query))
{
?>
	 <li><?php echo $rs["assess_id"]?>-<?php echo $rs["title"]?></li>

<?php
}
?>
</ul>
</div>
<div class='page'></div>



<script language="javascript">
var total_page=<?=$total_page?>;
var url="<?php echo site_url("assess/fenye?page") ?>";//当前链接,格式如下，例如：?aa=1&page  ,somepage.php?action=1&cat=1&page

$().ready(function(){

	$(".page").innerHTML(pagination(1))
	
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
        alert(total_page);
	var page_link="";
	if (total_page>1)
	{
		page_link="<a>一共"+total_page+"页</a>";
		page_link+="<a>当前第"+current_page+"页</a>";
		page_link+="<a href="+url+"=1 page=1>首页</a>";

		if (current_page>1){
			//页码大于1的时候，显示上一页翻页链接
			var pre_page=current_page-1;
			page_link+="<a  href='"+url+"="+pre_page+"' page="+pre_page+"><<</a>";
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
				page_link+="<a href='"+url+"="+i+"' class='currentpage' page="+i+">"+i+"</a>";
			}
			else
			{
				page_link+="<a href='"+url+"="+i+"' page="+i+"  page="+i+">"+i+"</a>";
			}

		}
		//页码小于总页数的时候显示下一页翻页链接
		var next_page=current_page+1;
		if(next_page<total_page)
		{
			page_link+="<a  href='"+url+"="+next_page+"' page="+next_page+">>></a>";
		}
		page_link+="<a  href='"+url+"="+total_page+"' page="+total_page+">最后一页</a>";
	}
	return page_link;
}

</script>

=======
<style type="text/CSS"> 
    <!-- 
    .page a:link { 
        color: #0000FF; 
        text-decoration: none; 
    } 
    .page a:visited { 
        text-decoration: none; 
        color: #0000FF; 
    } 
    .page a:hover { 
        text-decoration: none; 
        color: #0000FF; 
    } 
    .page a:active { 
        text-decoration: none; 
        color: #0000FF; 
    } 
    .page{color:#0000FF;} 
    --> 
</style> 
</head> 
<body> 
    <table width="530" height="103" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC"> 
        <tr> 
            <th width="30" height="38" bgcolor="#E3E3E3" scope="col">ID</th> 
            <th width="500" bgcolor="#E3E3E3" scope="col">文章标题</th> 
        </tr> 
        <?php
        /*
         * Created on 2010-4-17 
         * 
         * Order by Kove Wong 
         */
        $link = MySQL_connect('localhost:3307', 'root', '123456');
        mysql_select_db('tccenter');
        mysql_query('set names utf-8');

        $Page_size =2;

        $result = mysql_query('select * from assess');
        $count = mysql_num_rows($result);
        $page_count = ceil($count / $Page_size);

        $init = 1;
        $page_len = 7;
        $max_p = $page_count;
        $pages = $page_count;

//判断当前页码 
        if (empty($_GET['page']) || $_GET['page'] < 0) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }

        $offset = $Page_size * ($page - 1);
        $sql = "select * from assess limit $offset,$Page_size";
        $result = mysql_query($sql, $link);
        while ($row = mysql_fetch_array($result)) {
            ?> 
            <tr> 
                <td bgcolor="#E0EEE0" height="25px"><div align="center"> 
                        <?php echo $row['assess_id'] ?> 
                    </div></td> 
                <td bgcolor="#E0EEE"><div align="center"> 
                        <?php echo $row['title'] ?> 
                    </div></td> 
            </tr> 
            <?php
        }
        $page_len = ($page_len % 2) ? $page_len : $pagelen + 1; //页码个数 
        $pageoffset = ($page_len - 1) / 2; //页码个数左右偏移量 

        $key = '<div class="page">';
        $key.="<span>$page/$pages</span> "; //第几页,共几页 
        if ($page != 1) {
            $key.="<a href=\"" . $_SERVER['PHP_SELF'] . "?page=1\">第一页</a> "; //第一页 
            $key.="<a href=\"" . $_SERVER['PHP_SELF'] . "?page=" . ($page - 1) . "\">上一页</a>"; //上一页 
        } else {
            $key.="第一页 "; //第一页 
            $key.="上一页"; //上一页 
        }
        if ($pages > $page_len) {
//如果当前页小于等于左偏移 
            if ($page <= $pageoffset) {
                $init = 1;
                $max_p = $page_len;
            } else {//如果当前页大于左偏移 
//如果当前页码右偏移超出最大分页数 
                if ($page + $pageoffset >= $pages + 1) {
                    $init = $pages - $page_len + 1;
                } else {
//左右偏移都存在时的计算 
                    $init = $page - $pageoffset;
                    $max_p = $page + $pageoffset;
                }
            }
        }
        for ($i = $init; $i <= $max_p; $i++) {
            if ($i == $page) {
                $key.=' <span>' . $i . '</span>';
            } else {
                $key.=" <a href=\"" . $_SERVER['PHP_SELF'] . "?page=" . $i . "\">" . $i . "</a>";
            }
        }
        if ($page != $pages) {
            $key.=" <a href=\"" . $_SERVER['PHP_SELF'] . "?page=" . ($page + 1) . "\">下一页</a> "; //下一页 
            $key.="<a href=\"" . $_SERVER['PHP_SELF'] . "?page={$pages}\">最后一页</a>"; //最后一页 
        } else {
            $key.="下一页 "; //下一页 
            $key.="最后一页"; //最后一页 
        }
        $key.='</div>';
        ?> 
        <tr> 
            <td colspan="2" bgcolor="#E0EEE0"><div align="center"><?php echo $key ?></div></td> 
        </tr> 
    </table> 
>>>>>>> 7d51a99b22b19c1c4a483607ac45afdc0ad5b09b
