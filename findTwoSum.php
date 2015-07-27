
$input=[2, 7, 11, 15];
$target=9;


function findTwoSum($input, $target) {
	$tmp_input = $input;
	foreach ($input as $key1 => $value1) {
		foreach ($tmp_input as $key2 => $value2) {
			if ($key1 != $key2) {
				if ($value1 + $value2 == $target) {
					$index[] = array($key1, $key2);
				}
			}
		unset($tmp_input[$key1]);
		}
	}
	return $index;
}


print_r(findTwoSum($input, $target));
