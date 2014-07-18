<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//require_once(APPPATH . 'libraries/fetch.php');



class Assess extends CI_Controller {

    public function view($page = 'home') {
        if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
            // 页面不存在
            show_404();
        }

        $data['title'] = ucfirst($page); // 将title中的第一个字符大写

        $this->load->helper('form');
        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function commit() {
        $data['title'] = "Commit";

        $this->load->helper('form');
        $this->load->view('templates/header', $data);
        $this->load->view('items/commit', $data);
        $this->load->view('templates/footer', $data);
    }

    public function checkcode() {
        $data['title'] = "Commit";

        //$this->load->view('templates/header', $data);
        $this->load->view('items/checkc', $data);
        //$this->load->view('templates/footer', $data);
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

}
