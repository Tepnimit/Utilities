

function factorial($n) {
	$output = 1;
	if ($n > 0) {
		$n-- ;
		$output = factorial($n);
		$output *= $n+1;
	}
	
	return $output;
}
echo factorial(4);
