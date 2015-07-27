
$input = array('x','u','h','f','l','d','h');

function checkDup($input) {
	foreach ($input as $key1 => $value1) {
		foreach ($input as $key2 => $value2) {
			if ($key1 == $key2) {
				continue;
			} else {
				if ($value2 == $value1) {
					return true;
				}
			}
		}
	}
	return false;
}
echo CheckDup($input)? "TRUE" : "FALSE";


function findDup($input) {
	$dup = array();
	foreach ($input as $key1 => $value1) {
		foreach ($input as $key2 => $value2) {
			if ($key1 == $key2) {
				continue;
			} else {
				if ($value2 == $value1) {
					$dup[$key1] = $value1;
				}
			}
		}
	}
	return $dup;
}
print_r(findDup($input));
