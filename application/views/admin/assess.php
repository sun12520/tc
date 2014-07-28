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
        <th>审核</th>
        
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
            <td><input type="button" name="comment" id="<?php echo $row->assess_id ?>" value="通过" onclick="access(this)"></td>
        </tr>
    <?php endforeach; ?>
</table>

<script>
    function access(obj){
        var result = 1;
        var review = 'http://10.241.226.31/tucao/index.php/admin/review/review_assess/' + obj.id + '/'+result;
        
        $.get(review, function(data, status) {
            //alert("Data: " + data + "\nStatus: " + status);
            //alert(status);
            if (status == 'success')
            {
                //alert(document.getElementById(zanid).innerHTML);
                window.location.reload();
                //document.getElementById(zanid).innerHTML = data;
            }
        });
    }
</script>

