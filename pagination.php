<?php
  function pagination($n) {
    $str = "1,2,3,4,5,6";
    $chars = preg_split('/[\s,]+/', $str, -1, PREG_SPLIT_NO_EMPTY);
	$arr = array();

	  foreach($chars as $s) {
	  	array_push($arr, $s);
	  }
	  $iterb = $arr[$n-1];
	  $iterb -= 1;
	  echo "prev => {$iterb} ";
	  $iterf = $arr[$n];
	  echo "next => {$iterf}";
 }
pagination(5);
?>
