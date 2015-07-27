
$inputA = [[1,[2,4,5]],2,[5,6],3,[[[3,4,[3,3],4],4],8],4];
$inputB = [[1,[2,4,5]],2,[5,6],3,[[[3,4,[3,3],4],4],8],4];



function checkSame($inputA, $inputB) {
	$flag = true;
	$lengthA = count($inputA);
	$lengthB = count($inputB);
	if ($lengthA == $lengthB) {
	//	for ($i=0; $i<$lengthA; $i++) {
		foreach($inputA as $keyA => $valueA) {
		foreach($inputB as $keyB => $valueB) {
			if ($keyA === $keyB) {
				if (is_array($valueA) && is_array($valueB)) {
					if ($keyA === $keyB) {
						$flag = checkSame($valueA, $valueB);
						if (!$flag) {return false;}
					} else { return 0;}
				} else {
					if ($valueA == $valueB) {
						$flag = true;
					} else { return 0;}
				}
			}
		}	
		}
	} else {return 0;}
	return $flag;
}


echo checkSame($inputA, $inputB)? "TRUE" : "FALSE";
