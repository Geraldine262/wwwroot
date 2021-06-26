<?php
$str = $_SERVER['QUERY_STRING'];
parse_str($str, $output);
$img = $output['img'];

if($img == 'web'){
header("Content-type: text/javascript");
$numbers = range (1,10);
shuffle ($numbers);
header("location:https://js.1818jsjs.top/other/images/Movie/$numbers[0].gif");
}
else if($img == 'pc'){
header("Content-type: text/javascript");
$numbers = range (11,14);
shuffle ($numbers);
header("location:https://js.1818jsjs.top/other/images/Live/$numbers[0].gif");
}
else if($img == 'app'){
header("Content-type: text/javascript");
$numbers = range (1,6);
shuffle ($numbers);
header("location:https://js.1818jsjs.top/other/images/app/$numbers[0].jpg");
}
else{
header("Content-type: text/javascript");
$numbers = range (1,10);
shuffle ($numbers);
header("location:https://js.1818jsjs.top/other/images/Movie/$numbers[0].gif");
}
?>