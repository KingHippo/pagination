<?php
  function pagination($n) {
	$iter = $n;
    $str = "1,2,3,4,5,6";
    $chars = preg_split('/[\s,]+/', $str, -1, PREG_SPLIT_NO_EMPTY);
	$arr = array();

	  foreach($chars as $s) {
	  	array_push($arr, $s);
	  }
	  print_r($n + $s);
	  print_r($n - $s);

 }
pagination(1);
?>
