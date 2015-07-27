<?php
$input = array(1,4,6,37,685,6,8,4,4);


class AAA {

	function findMin($input) {
		$input_array = array_keys($input);
		$first_key = $input_array[0];
		$first_value = $input[$first_key];
		$min = $first_value;
		for ($i = 0; $i < count($input_array); $i++) {
			$key = $input_array[$i];
			$value = $input[$key];

			if ($value >= $min) {
				$min = $value;
				$min_key = $key;
			}
		}
		$min_and_key = array('min' => $min, 'key' => $min_key);
		return $min_and_key;
	}

	function sortMin($input) {
		$tmp_input = $input;
		for ($i = 0; $i < count($input); $i++) {
			$output_fn = $this->findMin($tmp_input);
			$min = $output_fn['min'];
			unset($tmp_input[$output_fn['key']]);
			$output[] = $min;
		}
		return $output;
	}

}

$aaa1 = new AAA;

$out = $aaa1->sortMin($input);

print_r($out);
?>
