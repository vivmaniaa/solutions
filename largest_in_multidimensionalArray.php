<?php

$mult_array = [1,2,[85,65,[55,89],[[68, 1098,[2014,96]],96]],[[167],101]];
echo "<pre>";
print_r($mult_array);
function test($mult_array){
	foreach($mult_array as $key => $val){
		if(is_array($val)){
			array_splice($mult_array, $key, 1, $val);
			return $this($mult_array);
		}
		
	}
	return max($mult_array);
}


echo test($mult_array);
echo "</pre>";