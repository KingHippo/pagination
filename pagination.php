<?php
  function pagination($n) {
	$iterf = 0;
	$iterb = 0;
    $str = "1,2,3,4,5,6";
    $chars = preg_split('/[\s,]+/', $str, -1, PREG_SPLIT_NO_EMPTY);
	$arr = array();

	  foreach($chars as $s) {
	  	array_push($arr, $s);
	  }

	  while($n >= $iterf) {
	  	$iterf++;
	  }
	  while($n <= $iterb) {
	  	$iterb--;
	  }
	  echo "prev => {$iterf}";
	  echo " next => {$iterb}";

 }
pagination(5);
?>
