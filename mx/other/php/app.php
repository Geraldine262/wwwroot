<?php
header("Referrer-Policy: no-referrer");
$str = $_SERVER['QUERY_STRING'];
parse_str($str, $output);
$ua = $output['ua'];

if($ua == 'apk'){
$url[0] = "http://dwnapp.adyu2k.cn/kb140.apk";
}
else if($ua == 'ios'){
$url[0] = "https://ks5t31.lubih.com:5656/zhuan/?h5=ama121&az=ama121";
}
else if($ua == 'android'){
$url[0] = "https://ks5t31.lubih.com:5656/zhuan/?h5=ama121&az=ama121";
}
else{
$url[0] = "http://loadtransfer.dfieia.com:88//live.php?id=1_1053";
$url[1] = "http://loadtransfer.dfieia.com:88//live.php?id=3_1053";
$url[2] = "http://loadtransfer.dfieia.com:88//live.php?id=4_1053";
$url[3] = "http://loadtransfer.dfieia.com:88//live.php?id=6_1053";
$url[4] = "http://loadtransfer.dfieia.com:88//live.php?id=7_1053";
$url[5] = "http://loadtransfer.dfieia.com:88//uulive.php?id=1_1053";
$url[6] = "http://loadtransfer.dfieia.com:88//uulive.php?id=3_1053";
$url[7] = "http://loadtransfer.dfieia.com:88//uulive.php?id=4_1053";
$url[8] = "http://loadtransfer.dfieia.com:88//uulive.php?id=6_1053";
$url[9] = "http://loadtransfer.dfieia.com:88//uulive.php?id=7_1053";
}
srand ((double)microtime()*1000000);
$randomnum = rand(0, count($url)-1);
header ("Location: $url[$randomnum]");
?>