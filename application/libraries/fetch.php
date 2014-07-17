<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once(APPPATH .'libraries//simple_html_dom.php');

function fetch_jd($url) {
    $jd_price_ini = 'http://p.3.cn/prices/mgets?type=1&skuIds=J_';

    $urlarr = parse_url($url);
    $path = $urlarr['path'];
    //echo $path;
    $str = explode(".", $path);
    $spid = substr($str[0], 1);


    $price_url = $jd_price_ini . $spid;

    $price_data = curl_data($price_url);
    //echo $price_data;
    $price_json = json_decode($price_data, TRUE);
    $price = $price_json[0]["p"];
    //echo $price;

    $sp_data = SELF.curl_data($url);
    preg_match('|<title>(.*?)<\/title>|i', $sp_data, $title);

    preg_match('/<div class="breadcrumb">(.*?)<!--breadcrumb end-->/s', $sp_data, $fenlei);
    //echo $fenlei[1];
    //$html = new simple_html_dom();
    //$html->load('<html><body>从字符串中加载html文档演示</body></html>');
    //$html = str_get_html('<html><body>从字符串中加载html文档演示</body></html>'); 
    //echo $fenlei[1];
    trim($fenlei[1]);
    $html = str_get_html($fenlei[1]);

    $fenlei_arr = array();

    foreach ($html->find('a') as $e)
        array_push($fenlei_arr, $e->innertext);

    //print_r($fenlei_arr);
    //echo $fenlei_arr;

    $totle_data = array();
    $totle_data["title"] = $title[1];
    $totle_data["price"] = $price;
    $totle_data["fenlei"] = $fenlei_arr;

    $data_str = json_encode($totle_data);
    return $data_str;
}

function curl_data($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22");
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
//$file_contents = curl_exec($ch);
    $output = curl_exec($ch);

    if (!mb_check_encoding($output, 'utf-8')) {
        $output = mb_convert_encoding($output, 'UTF-8', 'gbk');
    }

    return $output;
}

?>
