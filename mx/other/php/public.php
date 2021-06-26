<?php
header("Content-type: text/javascript");
$arr = [
"<script type=\"text\/javascript\"charset=\"utf-8\">(function(){var v=\"s\"+Math.floor(Math.random()*10000);document.write(\"<div id=\'\"+v+\"\'><\/div>\");var m=document.createElement(\"script\");m.src=\"https:\/\/f99.265958.com\/fx.asp?uid=2782&vid=\"+v+\"&tid=1&sid=1\";var s=document.getElementsByTagName(\"script\")[0];s.parentNode.insertBefore(m,s);})();<\/script>",
"<script type=\"text\/javascript\"charset=\"utf-8\">(function(){var v=\"s\"+Math.floor(Math.random()*10000);document.write(\"<div id=\'\"+v+\"\'><\/div>\");var m=document.createElement(\"script\");m.src=\"https:\/\/f99.265958.com\/fx.asp?uid=2782&vid=\"+v+\"&tid=1&sid=1\";var s=document.getElementsByTagName(\"script\")[0];s.parentNode.insertBefore(m,s);})();<\/script>",
];
shuffle ($arr);
echo "
var view01='$arr[0]';
var view02='$arr[1]';
"
?>