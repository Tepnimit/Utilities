
function rotateRight($n, $k) {
	for ($i = 0; $i < $n; $i++) {
		$num_array[] = $i + 1;
	}
	for ($j = 0; $j < $k; $j++) {
		array_splice($num_array, 0, 0, end($num_array));
		unset($num_array[$n]);
	}
	return $num_array;
}

print_r(rotateRight(7,3));
