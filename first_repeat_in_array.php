<?php
$array = [1,2,3,4,5,4]; // answer must be 3
function repeat($array){
	$new = array_count_values($array);
	/*
	the above line will give this array into $new
	array(
			[1]=> 1,
			[2]=> 1,
			[3]=> 2,
			[4]=> 2
		)
		and the keys on $new(array) = values of $array(array)
	*/
	foreach($new as $key=>$val){
		if($val>1){
			return $key;
		}
	}
	return 'all value are unique';
}

echo repeat($array);