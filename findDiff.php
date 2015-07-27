
$input1 = [2,4,5,6,8,9,0];
$input2 = [2,4,3,6,7,9,0];
	
	
	
	
function findDiff($input1,$input2) {
	$diff = array();
	
	for ($i=0; $i<count($input1); $i++){
		if ($input1[$i] == $input2[$i]) {
			$flag = true;
		} else {
			$flag = false;
			$diff[$i] = array($input1[$i],$input2[$i]);
		}
	}
	return $diff;
}
	
print_r(findDiff($input1,$input2));
