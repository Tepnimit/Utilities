

function power1($num, $n) {
	$out = 1;
	if ($n == 0) {
		$num = 1;
	}
	for ($i = 0; $i < $n; $i++) {
		$out *= $num;
	}
	return $out;
}

function power($input, $n) {
	$mod_output = 0;
	if ($n > 1) {
		$n--;
		$mod_output = power($input, $n);	
		$output = $mod_output * $input;
	} elseif ($n==1) {
		$output = $input;
	} else {
		$output = 1;
	}	
	return $output;
}

echo power(2,3);




function superPower($input,$n) {
	$output = 1;
	if ($n == 0) {
		return $output = 1;
	}
	
	if ($n >= 1) {
		$n--;
		$output = superPower($input,$n);
		$output *= $input;
	}
	
	return $output;
}


echo superPower(3,0);

