<?php 

$input = array(1,4,6,37,685,6,8,4,4);


function findMin ($input) {
		$array_key = array_keys($input);
		$min = $input[$array_key[0]];
		foreach ($input as $key => $value) {
			if ( $value <= $min) {
			$min = $value;
			$min_key = $key;
			}
		}
		$min_and_key = array('min' => $min, 'key' => $min_key);
	return $min_and_key;
	}
	
function sortMin ($input){	
	$tmp_input = $input;
	foreach ($tmp_input as $key => $value) {
		$min_and_key = findMin($tmp_input);
		$output[] = $min_and_key['min'];
		unset($tmp_input[$min_and_key['key']]);
	}
	return $output;
}

print_r(sortMin($input));

    Status API Training Shop Blog About Help 

    © 2015 GitHub, Inc. Terms Privacy Security Contact 
