
$input = array(1, 2, array(10,20,30), 4);



function sumArray($input) {
	$output = 0;
	$tmp_output=0;
	foreach ($input as $key => $value) {
		if (is_array($value)){
			$tmp_output = sumArray($value);
			$output += $tmp_output;
		} else {
			$output += $value;
		}
	}
	//$output = $output + $tmp_output;
	return $output;
}

echo sumArray($input);
