
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
    .footpic
    {
        width: 100%;
        bottom: 0;
        margin-bottom: 0;
        margin-top: 10px
        
    }


</style>
<div class="footpic">
    <a><img src="<?php echo base_url() . "img/footer.jpg"; ?>"></a>
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
                <a href="#"><li class="foot" onmouseover="this.className = 'foot_active'" onmouseout="this.className = 'foot'">免责声明</li></a>
                <a href="#"><li class="foot" onmouseover="this.className = 'foot_active'" onmouseout="this.className = 'foot'">网站地图</li></a>
            </ul>
        </div>
    </div>
</div>

</body>
</html>

