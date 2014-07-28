


<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search" action="http://10.241.226.31/tucao/index.php/assess/search" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="search" id="search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>



<table class="table table-striped">

    <tr>
        <th>assess_id</th>
        <th>user_id</th>
        <th>title</th>
        <th>Content</th>
        <th>price</th>
        <th>location</th>
        <th>pzType</th>
        <th>pzPicPath</th>
        <th>tag</th>
        <th>status</th>
        <th>ci_date</th>
        <th>评论</th>
        <th>num</th>
        <th>赞</th>
    </tr>
    <?php foreach ($ass_list as $row): ?>
        <tr>
            <td><?php echo $row->assess_id ?></td>
            <td><?php echo $row->user_id ?></td>
            <td><?php echo $row->title ?></td>
            <td><?php echo $row->Content ?></td>
            <td><?php echo $row->price ?></td>
            <td><?php echo $row->location ?></td>
            <td><?php echo $row->pzType ?></td>
            <td><?php echo $row->pzPicPath ?></td>
            <td><?php echo $row->tag ?></td>
            <td><?php echo $row->status ?></td>
            <td><?php echo $row->ci_date ?></td>
            <td><input type="button" name="comment" id="<?php echo $row->assess_id ?>" value="comment" onclick="showcomment(this)"></td>
            <td><div id="zan<?php echo $row->assess_id ?>"><?php echo intval($row->zan) ?></div></td>
            <td><input type="button" name="zan" id="<?php echo $row->assess_id ?>" value="赞" onclick="zan(this)"></td>
        </tr>
    <?php endforeach; ?>
</table>

<br>
<br>
<p>
    <a href="http://10.241.226.31/tucao/index.php/assess/commit"><button class="btn btn-large btn-primary" type="button">吐槽入口</button></a>
    <a href="http://10.241.226.31/tucao/index.php/admin/review/show_assess"><button class="btn btn-large" type="button">待审核吐槽</button></a>
    <a href="http://10.241.226.31/tucao/index.php/user/logout"><button class="btn btn-large" type="button">注销</button></a>
</p>
<br>
<br>
<table class="table table-striped" title="none" id="comm_tab" style="display: none">
    <tbody id="comm_tbody">
        <tr id="submitcontent">
            <td colspan="2"><textarea cols="50" rows="4" id="comm_content"></textarea></td>
            <td><a href="javascript:" name="subcomm" id="subcomm" value="subcomm" onclick="commitcomm(this)" >提交</a></td>
        </tr>
    </tbody>
</table>


<script>

    function zan(obj) {
        var zan = 'http://10.241.226.31/tucao/index.php/dealass/ass_zan/' + obj.id;
        var zanid = 'zan' + obj.id;

        $.get(zan, function(data, status) {
            //alert("Data: " + data + "\nStatus: " + status);
            if (status == 'success')
            {
                //alert(document.getElementById(zanid).innerHTML);
                document.getElementById(zanid).innerHTML = data;
            }
        });

    }

    function commitcomm(obj) {

        //alert(obj.name);

        var post_comm = 'http://10.241.226.31/tucao/index.php/comment/ci_comment';
        var comm_content = document.getElementById("comm_content").value;
        var username = "<?php echo $this->session->userdata('username') ?>";
        var user_id = <?php echo $this->session->userdata('user_id') ?>;
        //alert(comm_content);
        //var date = new Date().getTime();



        var comminfo = {
            assess_id: obj.name,
            user_name: username,
            user_id: user_id,
            comm_content: comm_content
                    //comm_date: date
        };

        //var commstr = json_decode(comminfo);

        $.ajax({
            url: post_comm, //你对数据库的操作路径
            data: comminfo,
            type: 'post', //提交方式
            //dataType: "html",
            // dataType:'json',//返回数据的类型
            success: function(data) {//后台处理数据成功后的回调函数

                //alert(data);
                var str = $('<tr><td>' + username + '</td><td>' + comm_content + '</td><td>' + data + '</td></tr>');
                str.insertAfter("#submitcontent");
                document.getElementById("comm_content").value = '';
            },
            error: function(data) {//后台处理数据失败后的回调函数
                alert(data);
            }
        })


    }




    function showcomment(obj) {
        if (document.getElementById("comm_tab").style.display == 'none')
        {
            //alert(document.getElementById("comm_tab").title);
            //if (document.getElementById("comm_tab").title == 'none')
            //{
            var get_comm = 'http://10.241.226.31/tucao/index.php/comment/show_comment/' + obj.id;
            document.getElementById("subcomm").name = obj.id + '';
            //alert(document.getElementById("subcomm").value);
            //alert(get_comm);
            $.get(get_comm, function(data, status) {
                //alert("Data: " + data + "\nStatus: " + status);
                if (status == 'success')
                {
                    var commobj = eval(data);
                    for (i = 0; i < commobj.length; i++) {


                        /*
                         var paratr = document.createElement("tr");
                         var paratd1 = document.createElement("td");
                         var node1 = document.createTextNode(commobj[i]['user_id']);
                         paratd1.appendChild(node1);
                         
                         var paratd2 = document.createElement("td");
                         var node2 = document.createTextNode(commobj[i]['comm_content']);
                         paratd2.appendChild(node2);
                         
                         var paratd3 = document.createElement("td");
                         var node3 = document.createTextNode(commobj[i]['comm_date']);
                         paratd3.appendChild(node3);
                         
                         paratr.appendChild(paratd1);
                         paratr.appendChild(paratd2);
                         paratr.appendChild(paratd3);
                         */


                        var commstr = $('<tr><td>' + commobj[i]['user_name'] + '</td><td>' + commobj[i]['comm_content'] + '</td><td>' + commobj[i]['comm_date'] + '</td></tr>');
                        var element = document.getElementById("comm_tbody");
                        //element.appendChild(paratr);

                        commstr.insertAfter(element.lastChild);


                    }
                    document.getElementById("comm_tab").style.display = "block";
                    //document.getElementById("comm_tab").title = 'done'

                }
            });
            //}
            //else
            //    document.getElementById("comm_tab").style.display = "block";
        }
        else
            document.getElementById("comm_tab").style.display = "none";
    }
</script>
