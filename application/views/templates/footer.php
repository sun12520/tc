
<style type="text/css">
    .bottombar
    {
        //position: fixed;
        height: 81px;
        right: 0;
        left: 0;
        //z-index: 1030;
        bottom: 0;
        margin-bottom: 0;
        border-width: 1px 0 0;
        background-color: #D0D0D0;
        -webkit-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .copyright
    {
        float: left;
        margin-top: 20px;
    }

    .barul .foot
    {
        width: 70px;
        height: 40px;
        text-align: center;
        padding-top: 10px;
        float: left;
        display: block;
        position: relative;
        color: #666666;
        margin-top: 10px;
        margin-left: 30px
    }

    .barul .foot_active
    {
        width: 70px;
        height: 40px;
        text-align: center;
        padding-top: 10px;
        float: left;
        display: block;
        position: relative;
        background-color: #666666;
        color: #FFFFFF;
        margin-top: 10px;
        margin-left: 30px
    }
    .footpic a img
    {
        //max-width:1280 px;
        //width: 1280 px;
        //overflow: hidden;
        //width:expression(this.width>1480?"1480px":this.width);
        //width:expression(document.body.clientWidth > 780? "780px": "auto" );
        bottom: 0;
        margin-bottom: 0;
        margin-top: 10px

    }

</style>
</div>
<div style="width:100%">
    <div class="footpic" id="footer">
        <a><img src="<?php echo base_url() . "img/footer.jpg"; ?>" onload="reSizeImg(this)"></a>
    </div>
</div>
<div class="bottombar">
    <div class="container" style="width:100%">
        <div class="bar">
            <ul class="barul">
                <div class="copyright">
                    <span> Copyright © 2014 All rights reserved. 京ICP备12048526号-2 京公网安备 11010602100083</span>
                </div>
                <a href="#"><li class="foot" style=" margin-left: 200px" onmouseover="this.className = 'foot_active'" onmouseout="this.className = 'foot'">关于我们</li></a>
                <a href="#"><li class="foot" onmouseover="this.className = 'foot_active'" onmouseout="this.className = 'foot'">联系我们</li></a>
                <a href="<?php echo site_url('dealass/showass') ?>"><li class="foot" onmouseover="this.className = 'foot_active'" onmouseout="this.className = 'foot'">免责声明</li></a>
                <a href="<?php echo site_url('admin/review/show_assess') ?>"><li class="foot" onmouseover="this.className = 'foot_active'" onmouseout="this.className = 'foot'">网站地图</li></a>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
    function reSizeImg(obj) {

        //alert(document.body.style.overflow);
        //alert(document.body.scroll);
        //alert(document.body.scrollHeight);
        //alert(window.screen.height);

        if (document.body.style.overflow != "hidden" && document.body.scroll != "no" &&
                document.body.scrollHeight > window.screen.height)
        {
            reWidth = window.screen.width - 17;
            //alert("有滚动条");
        } else
        {
            reWidth = window.screen.width
            //alert("无滚动条");
        }
        //alert(obj.offsetWidth);

        //if (obj.readyState == "complete")
        //{
        //alert('aaa');
        var imgWidth = obj.offsetWidth;
        var imgHeight = obj.offsetHeight;
        if (imgWidth > reWidth)
        {
            p = imgWidth / reWidth;
            cHeight = Math.floor(imgHeight / p);
            obj.width = reWidth;
            obj.height = cHeight;
        }
        //}
    }
</script>
</body>
</html>

