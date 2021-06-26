<?php
$rand_num = mt_rand(1,100);
if($rand_num>=1 && $rand_num <= 50) {
  header ("Location: https://17669.xyz/php/jump1.html");
}
else if($rand_num >= 51 && $rand_num <= 100) {
  header ("Location: https://17669.xyz/php/jump2.html");
}
else { 
  header ("Location: https://17669.xyz/php/jump1.html");
}
?>