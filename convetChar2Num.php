<?php
$char = 'ZZ';
function convertCharToNum($char) {
	$output = 0;
	$split = str_split($char);
	$digit = count($split);
	
	for ($i=0; $i<$digit; $i++) {
		if ($i == 0) {
			$num = ord($split[$i]) - 64;
			$output += $num;
			$n = $num;
		} else if ($i == 1) {
			$num = ord($split[$i]) - 64 + (26 * $n) - $n;
			$output += $num;
			
		}
	}
	return $output;
}

echo convertCharToNum($char);

?>
