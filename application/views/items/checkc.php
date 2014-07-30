<!-- DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd" -->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
    </head>

    <body>
        <form action="act.php" method="post">
            <input type="text" name="code" />
            <img id="code" src="<?php echo site_url("checkcode") ?>" alt="看不清楚，换一张" style="cursor: pointer; vertical-align:middle;" onClick="create_code()"/>
            <!--<button type="button" onClick="create_code()">更换</button>-->
            <button type="submit">提交</button>
        </form>


        <?PHP
        session_start();
        //$AuthInput = $_POST["AuthInput"];
        //$action = $_GET["action"];
        ?>
        <script language="javascript">
            function lyalert() {
                if (addform.AuthInput.value == "") {
                    alert("请填写验证码");
                    document.addform.AuthInput.focus();
                    return false;
                }
            }
        </script>
        <form name="addform" method="post" action="?action=save" id="addform" onsubmit="return lyalert()">
            <table width="500" border="1" cellpadding="5" cellspacing="0">
                <tr><td>验证码：</td>
                    <td><input name="AuthInput" type="text" id="AuthInput"  size="8" maxlength="6" /><script>document.write("<img src=\"<?php echo site_url("assess/ck?n=") ?>", Math.random(), "\" />");</script></td></tr>
                <tr><td colspan="2" align="center"><input type="submit" name="Button1" value="确定" id="Button1" /></td>
                </tr>
            </table>
            <p>&nbsp;</p>
        </form>

        <label><img src="<?php echo site_url("assess/newck") ?>" onclick="javascript:this.src = '<?php echo site_url("assess/newck?tm=") ?>' + Math.random();" /></label> 


        <script>
            function create_code() {
                document.getElementByIdx_x('code').src = '<?php echo site_url("checkcode") ?>';
            }
        </script>


        <?php
        if (isset($_GET["action"]) && $_GET["action"] == 'save') {
            echo $_POST["AuthInput"];
            $code = md5($ip.'grandcloudcn');
            //echo $code;
            echo $_SESSION[$code];
            if ($_SESSION[$code] != $_POST["AuthInput"]) {
                ?>
                <script language="javascript">
                    alert("验证码输入不正确");
                </script>
                <?php
            } else {
                ?>  
                <script language="javascript">
                    alert("提交成功！");
                </script>
            <?php }
        }
        ?>
    </body>
</html>