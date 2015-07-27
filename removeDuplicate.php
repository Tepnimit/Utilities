
$input = array('x','u','h','f','l','d','h');

function removeDup($input) {
	$tmp_input = $input;
	foreach ($input as $key1 => $value1) {
		foreach ($tmp_input as $key2 => $value2) {
			if ($key1 == $key2) {
				continue;
			} else {
				if ($value2 == $value1) {
					unset($tmp_input[$key1]);
				}
			}
		}
	}
	$length = count($tmp_input);
	$output = array($tmp_input , $length);
	return $output;
}

print_r(removeDup($input));
