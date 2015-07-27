
$input = array('x','u','h','f','l','d','h');


function removeElement($input, $num) {
	$tmp_input = $input;
	foreach ($input as $key => $value) {
		if ($value == $num) {
			unset($tmp_input[$key]);
		}
	}
	$output = array(array_values($tmp_input) , count($tmp_input));
	return $output;
}	


print_r(removeElement($input,'h'));
