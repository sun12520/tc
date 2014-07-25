
<table  border="1" cellspacing="1">

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
        <th>赞数量</th>
        <th>点</th>
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
<br>
<br>
<table title="none" id="comm_tab" style="display: none">
    <tr id="submitcontent">
        <td colspan="3"><textarea cols="50" rows="4" id="comm_content"></textarea></td>
        <td><a href="javascript:" name="subcomm" id="subcomm" value="subcomm" onclick="commitcomm(this)" >提交</a></td>
    </tr>
</table>


<script>
    
    function zan(obj){
        var zan = 'http://localhost/tucao/index.php/dealass/ass_zan/' + obj.id;
        var zanid = 'zan'+obj.id;
        
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

        var post_comm = 'http://localhost/tucao/index.php/comment/ci_comment';
        var comm_content = document.getElementById("comm_content").value;

        //alert(comm_content);
        //var date = new Date().getTime();

        var comminfo = {
            assess_id: obj.name,
            user_id: 30000000,
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
                var str = $('<tr><td>' + '30000000' + '</td><td>' + comm_content + '</td><td>' + data + '</td></tr>');
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
                var get_comm = 'http://localhost/tucao/index.php/comment/show_comment/' + obj.id;
                document.getElementById("subcomm").name = obj.id + '';
                //alert(document.getElementById("subcomm").value);
                //alert(get_comm);
                $.get(get_comm, function(data, status) {
                    //alert("Data: " + data + "\nStatus: " + status);
                    if (status == 'success')
                    {
                        var commobj = eval(data);
                        for (i = 0; i < commobj.length; i++) {



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

                            var element = document.getElementById("comm_tab");
                            element.appendChild(paratr);

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
