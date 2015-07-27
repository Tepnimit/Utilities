
$input = array('x','u','h','f','l','d','h');





function search($input,$char) {
	$count = 0;
	foreach ($input as $key => $value){
		if ($value == $char) {
			$ckey[] = $key;
			$count++;
		} 
	}
	$output = array($ckey, $count);
	return $output;
}




$result = (search($input,'f'));

echo $result[0][1];


function insert($input,$position,$char) {
	$tmp_input = $input;
	print_r($tmp_input);
	foreach ($input as $key => $value) {
		if ($key == $position) {
			$tmp_input = array_merge(array($key => $char));
		}
	}
	return $tmp_input;
}

print_r(insert($input, 3,'a'));




function startWith ($input,$char){
	$x = search($input, $char);
	$position = $x[0][0];
	$output = array_slice($input,$position);
	return $output;
}

print_r(startWith($input,'f'));

