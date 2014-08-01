<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//require_once(APPPATH . 'libraries/fetch.php');



class Assess extends CI_Controller {

    private static $username;

    function __construct() {
        parent::__construct();
        $this->load->model('Do_assess');
        $this->load->library('Userlib');

        $url_this = "http://" . $_SERVER ['HTTP_HOST'] . $_SERVER['PHP_SELF'];
        self::$username = $this->session->userdata('username');
        //echo $url_this;
        //if (!$this->userlib->islogin()) {
        //    redirect('user?url='.$url_this);
        //}
        //$this->load->model('Do_assess');
        //$this->load->helper('url');
    }

    public function view($page = 'home', $pagenum = 1, $limit = 4) {
        if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
            // 页面不存在
            show_404();
        }

        $status = 1;
        //$offsite = 0;
        //$limit = 5;
        //$pagesize = 5;
        //获取总行数
        $totlenum = $this->Do_assess->get_ass_num($status);
        $totlepage = ceil($totlenum / $limit);
        $offsite = ($pagenum-1) * $limit;

        $ass_list = $this->Do_assess->get_ass($status, $offsite, $limit);

        $url = $this->input->post('url');
        //$username = $this->session->userdata('username');


        $data['title'] = ucfirst($page); // 将title中的第一个字符大写
        $data['url'] = $url;
        $data['username'] = self::$username;
        $data['ass_list'] = $ass_list;
        $data['totle_page'] = $totlepage;
        $data['current_page'] = $pagenum;

        //echo $data['totle_page'];
        //return 0;
        $this->load->helper('form');
        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }
    
    public function getdatas($pagenum = 1, $limit = 4) {
        $status = 1;
        //$offsite = 0;
        //$limit = 5;
        //$pagesize = 5;
        //获取总行数
        $totlenum = $this->Do_assess->get_ass_num($status);
        $totlepage = ceil($totlenum / $limit);
        $offsite = ($pagenum-1) * $limit;

        $ass_list = $this->Do_assess->get_ass($status, $offsite, $limit);
        
        $arr = array();
        //foreach ($ass_list as $row)
        //{
            //print_r($row);
        //    $arr[]=$row;
        //}
        //print_r($arr);
        //$str = json_encode($arr);
        //print_r($ass_list);
        //print $str;
        //echo $str;

        $html = '';
        $picurl = base_url()."img/item.jpg";
        foreach ($ass_list as $row)
        {
        $html .= '<div style="padding-top: 20px;padding-bottom: 20px"><div class="itempic"><img src="'.$picurl.'" alt="..." class="img-responsive"></div>
                <div style="float: left;width: 630px;height: 247px"><div id="title"><a href="'.site_url('assess/detail').'"><h3 class="titchr" style="margin-top: 0;margin-bottom: 0;margin-left: 20px"><strong>'.$row->title.'</strong></h3></a></div>
                <div id="Content" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px;height:61px"><span class="contchr" style="">
                <strong>'.$row->user_id.'：</strong>'.$row->Content.'</span></div><div id="comment" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px">
                <span class="contchr"><strong>小编评语:</strong>'.$row->assess_id.'精神可嘉，必须赞！</span></div>
                <div id="tag" style="margin-top: 10px;margin-bottom: 0;margin-left: 20px">
                        <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                        <button type="button" class="btn btn-default btn-sm" disabled="disabled" style="margin-right: 10px">Button</button>
                </div><div id="flag" style="margin-top: 15px;margin-bottom: 0;margin-left: 20px" class="contchr"><div id="pity"></div>
                <span class="glyphicon glyphicon-heart-empty" style="margin-right: 10px"><text style="margin-left: 5px">同情122</span>
                <span class="glyphicon glyphicon-star-empty" style="margin-right: 10px"><text style="margin-left: 5px">收藏122</span>
                <span class="glyphicon glyphicon-comment" style="margin-right: 10px"><text style="margin-left: 5px">评论122</span>
                <button type="button" class="btn btn-danger" style="float: right"><span class="contbut">去看看</span><span class="glyphicon glyphicon-chevron-right"></span></button>
                </div>
                <hr style=" bottom: 0"></div></div>';
        
        }
        echo $html;
        
    }
    
    
    public function detail(){
        $data['title'] = "Title";
        $data['username'] = self::$username;
        
        $url = $this->input->post('url');
        $data['url'] = $url;
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/detail', $data);
        $this->load->view('templates/footer', $data);
        
        
        
    }

    public function commit() {
        $data['title'] = "Commit";
        $data['username'] = self::$username;
        $data['url'] = '';

        $this->load->helper('form');
        $this->load->view('templates/header', $data);
        $this->load->view('items/commit', $data);
        $this->load->view('templates/footer', $data);
    }

    public function checkcode() {
        $data['title'] = "Commit";
        $ip = $this->getIP();
        $data['ip'] = $ip;

        //$this->load->view('templates/header', $data);
        $this->load->view('items/checkc', $data);





        //$this->load->view('templates/footer', $data);
    }

    public function newck() {
        require (APPPATH . 'libraries/ValidateCode.php');  //先把类包含进来，实际路径根据实际情况进行修改。  
        //echo BASEPATH;
        session_start();
        $ip = $this->getIP();
        $code = md5($ip . 'grandcloudcn');
        //echo $code;
        $_vc = new ValidateCode();      //实例化一个对象  
        $_vc->doimg();
        //$time = time();
        $_SESSION[$code] = $_vc->getCode();
    }

    function getIP() {
        global $ip;
        if (getenv("HTTP_CLIENT_IP"))
            $ip = getenv("HTTP_CLIENT_IP");
        else if (getenv("HTTP_X_FORWARDED_FOR"))
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        else if (getenv("REMOTE_ADDR"))
            $ip = getenv("REMOTE_ADDR");
        else
            $ip = "Unknow";
        return $ip;
    }

    public function ck() {
        $IsLetter = TRUE; //是否出现字母
        session_start();
        $Num = $_GET["n"];

        //生成验证码图片
        header("Content-type: image/PNG");
        $im = imagecreate(46, 20);
        srand((double) microtime() * 1000000);
        $Red = rand(0, 200);
        $Green = rand(0, 200);
        $Blue = rand(0, 200);
        $Color = imagecolorallocate($im, $Red, $Green, $Blue);
        $BackGround = imagecolorallocate($im, 255, 255, 255);
        imagefill($im, 0, 0, $BackGround);

        if ($IsLetter) {
            $a = substr(md5($Num * 10000000000000000), 0, 1);
            $b = substr(md5($Num * 10000000000000000), 4, 1);
            $c = substr(md5($Num * 10000000000000000), 8, 1);
            $d = substr(md5($Num * 10000000000000000), 12, 1);
        } else {
            $a = substr(hexdec(md5($Num * 10000000000000000)), 2, 1);
            $b = substr(hexdec(md5($Num * 10000000000000000)), 3, 1);
            $c = substr(hexdec(md5($Num * 10000000000000000)), 4, 1);
            $d = substr(hexdec(md5($Num * 10000000000000000)), 5, 1);
        }

        $Authnum = strtoupper($a . $b . $c . $d);

        $_SESSION["Authnum"] = $Authnum;

        imagestring($im, 5, 5, 2, $Authnum, $Color);
        for ($i = 0; $i < 200; $i++) {   //加入干扰象素
            $randcolor = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
            imagesetpixel($im, rand() % 70, rand() % 30, $randcolor);
        }
        imagepng($im);
        imagedestroy($im);
    }

    public function search() {
        require_once(APPPATH . 'libraries/sphinxapi.php');

        //require ’sphinxapi.php’;
        //$s = new SphinxClient();
        //$s->SetServer('127.0.0.1', 3312);
        //$result = $s->Query('test');
        //$mode = SPH_MATCH_ALL;

        $q = $this->input->post('search');



        $cl = new SphinxClient ();
        $cl->SetServer('127.0.0.1', 9312);
        $cl->SetConnectTimeout(3);
        $cl->SetArrayResult(true);
        $cl->SetMatchMode(SPH_MATCH_ANY);
        //$q = '突突突';
        $res = $cl->Query($q, "tucao");


//var_dump($result);

        $data['title'] = "Commit";
        $data['res'] = $res;
        $data['q'] = $q;

        $this->load->view('templates/header', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer', $data);
    }

    function fenye() {


        $page = $_GET["page"] + 0;
        $page = $page <= 0 ? 1 : $page;

//分页尺寸
        $page_size = 10;
        $conn = mysql_connect("10.241.226.31", "root", "root") or die(mysql_error());
        mysql_select_db("xinyang");
        $offset = ($page - 1) * $page_size;
        $query = mysql_query("select * from product limit $offset,$page_size") or die(mysql_error());
    }

}
