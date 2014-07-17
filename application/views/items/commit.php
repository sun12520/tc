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

        $posturl = "http://localhost/test.php";
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

<div>
    <div>
        <div style="float:left; padding-top:20px">
            <p>优惠链接:</p>
        </div>
        <div style="float:left; padding-top:15px; padding-left:20px">
            <div class="form-group" style="float:left">
                <input type="text" class="form-control" placeholder="热门词" style="width:350px" id="url">
            </div>
            <div style="float:left">
                <button class="btn btn-default" id="search" onclick="getinfo()">Search</button>
            </div>
        </div>
    </div>
    <div style="clear:both; display:none" class="info">
        <table>
            <tr >
                <td>地域：</td>
                <td style="width:1000px">
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="checked"> 国内
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 海淘
                    </label>
                </td>
            </tr>
            <tr>
                <td>标题：</td>
                <td>
                    <form class="form-group-sm" role="form">
                        <div class="form-group">
                            <div class="col-md-8" style="padding:10px">
                                <input class="form-control" id="title" placeholder="Email" value="商品标题">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-5" style="padding:10px">
                                <input  class="form-control" id="price" placeholder="Password" value="2700">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3" style="padding:10px">
                                <input  class="form-control" id="inputPassword3" placeholder="Password" value="京东">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8" style="padding:10px">
                                <input  class="form-control" id="lb" placeholder="Password" value="京东">
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
