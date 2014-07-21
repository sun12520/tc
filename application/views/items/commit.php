<script>
//$(document).ready(function(){
//  $("#search").click(function(){
//    $(".info").slideDown("fast");
//  });
//});

    function getinfo() {

        $spurl = document.getElementById("url").value;
        //alert($spurl);
        $spdata = {url: $spurl};

        $posturl = "http://localhost/tucao/index.php/dealass/get_jd_info";
        $.post($posturl, $spdata, function(data, status) {
            //alert("Data: " + data + "\nStatus: " + status);

            var obj = eval("(" + data + ")");
            //alert(obj.price);

            document.getElementById("title").value = obj.title;
            document.getElementById("price").value = obj.price;
            document.getElementById("lb").value = obj.fenlei;
            $(".info").slideDown("fast");
        });
    }

</script>
<!--<?php echo form_open_multipart('upload/do_upload'); ?>-->
<?php echo form_open_multipart('dealass/commit_view'); ?>
<div>
    <div>
        <div style="float:left; padding-top:20px">
            <p>优惠链接:</p>
        </div>
        <div style="float:left; padding-top:15px; padding-left:20px">
            <div class="form-group" style="float:left">
                <input type="text" class="form-control" placeholder="热门词" style="width:350px" id="url" name="url">
            </div>
            <div style="float:left">
                <input class="btn" type="button" value="Search" onclick="getinfo()">
            </div>
        </div>
    </div>
    <div style="clear:both; display:none" class="info">
        <table>
            <tr >
                <td>地域：</td>
                <td style="width:1000px">
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="incountry" value="option1" checked="checked"> 国内
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="outcountry" value="option2"> 海淘
                    </label>
                </td>
            </tr>
            <tr>
                <td>标题：</td>
                <td>
                    <form class="form-group-sm" role="form">
                        <div class="form-group">
                            <div class="col-md-8" style="padding:10px">
                                <input class="form-control" id="title" name="title" placeholder="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-5" style="padding:10px">
                                <input  class="form-control" id="price" name="price" placeholder="price">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3" style="padding:10px">
                                <input  class="form-control" id="location" name="location" placeholder="location" value="京东">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8" style="padding:10px">
                                <input  class="form-control" id="lb" name="lb" placeholder="Password">
                            </div>
                        </div>
                    </form>
                </td>

            </tr>
            <tr>

            </tr>
        </table>
    </div>

</div>

<div style="padding-top: 80px">
    <table>
        <tr>
            <td>
                <select name="type">
                    <option>发票图片</option>
                    <option>购买截图</option>
                </select>
            </td>

            <td>
                <!--<?php echo $error; ?>-->

                <input type="file" name="userfile" size="20" />
            </td>
            <!--
            <td>
                <input type="submit" value="upload" />
            </td>
            -->

        </tr>
        <tr>
            <td>
                我要吐
            </td>
            <td colspan="2">
                <textarea rows="3" cols="50" name="content"></textarea>
            </td>
        </tr>
        <tr>
            <td>标签</td>
            <td>
                <!--<button class="btn" type="submit">Button</button>-->
                <input class="btn" type="button" value="Input">
                <input class="btn" type="button" value="Input">
                <input class="btn" type="button" value="Input">
                <input class="btn" type="button" value="Input">
                <input class="btn" type="button" value="Input">
                <input class="btn" type="submit" value="Submit">
            </td>
        </tr>
    </table>

</div>
</form>
