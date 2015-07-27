
$input = "the sky is blue";

function word($input) {
	$i=0;
	$tmp_value = '';
	$tmp_input = $input;
	$tmp_input = str_split($input);
	
	foreach($tmp_input as $key => $value) {
		
		if ($value == " ") {
			$new_input[$i] = $tmp_value;
			$tmp_value = '';
			$i++;
		} else {
			$tmp_value .= $value;
		}
		
	}
	$new_input[$i] = $tmp_value;
	return $new_input;
}

$word_input = word($input);
$rev_array = array_reverse($word_input);
$new_value = '';
foreach ($rev_array as $value1) {
	$new_value .= $value1." ";
}
echo $new_value;


//OR

$exp = (explode(" ", $input));
$exp = array_reverse($exp);
echo implode(" ",$exp);
