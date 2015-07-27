
$input = "(gjdhgkddhjhhj(sshujfhu(s)hjfhs))";

function isWongLeb($input) {
$count = 0;
$tmp_input = str_split($input);
foreach ($tmp_input as $key => $value) {
		if ($value == "(") {
		//check where is another ")"
			$count++;
		} else if ($value == ")" ) {
			$count--;
			if ($count == 0) {
			//	$flag = true;
			}
		} else {
			
		}
	}
echo "END : $count \n";
	if ($count == 0 ) {
		return $flag = true;
	} else {
		return $flag = false;
	}
}

echo isValid($input)? "TRUE" : "FALSE";




function isValid($input) {
$countA = 0;
$countB = 0;
$countC = 0;
$flagA = 0;
$flagB = 0;
$flagC = 0;
$tmp_input = str_split($input);
	foreach ($tmp_input as $value) {
		switch ($value) {
			case "(" :
				$countA++;
				if ($countB > 0) {
					$flagA++;
				}
				break;
			case ")" :
				$countA--;
				if ($flagA > 0) {
					$flagA--;
				}
				if ($countB > 0 && $flagA > 0) {
					return false;
				}
				break;
			case "[" :
				$countB++;
//				if ($countA > 0) {
//					return false;
//				}
				break;
			case "]" :
				$countB--;
				if ($countA > 0 && $countB > 0) {
					return false;
				}
				if ($countA > 0 && $flagA > 0) {
					return false;
				}
				break;
			case "{" :
				if ($countA > 0 || $countB > 0) {
					return false;
				}
				$countC++;
				break;
			case "}" :
				if ($countA > 0 || $countB > 0) {
					return false;
				}
				$countC--;
				break;
			default :
		}	
	}
	if ($countA == 0 && $countB == 0 && $countC == 0 && $flagA == 0 && $flagB == 0 && $flagC == 0 ) {
		return true;
	} else {
		return false;
	}
}

echo isValid($input)? "TRUE" : "FALSE";

