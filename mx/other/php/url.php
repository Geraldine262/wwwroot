<?php
$url[0] = "https://www.18avav.info";
$url[1] = "https://www.18avav.org";
$url[2] = "https://www.18avavav.com";

srand ((double)microtime()*1000000);
$randomnum = rand(0, count($url)-1);
header ("Location: $url[$randomnum]");
?>