function isMatch($input, $val) {
	if ($val == $input) {
		return true;
	}

	$split_input = str_split($input);
	$split_val = str_split($val);
	$match = true;
	$current_position = 0;
	foreach($split_val as $key => $value) {
		if (!$match) {
			break;
		}
		switch ($value) {
			case '*':
				if ($key == count($split_val)-1) {
				   // if it end with *
				   return $match;
				}
				// find next non star

				$this_key = $key+1;
				$this_value = $split_val[$this_key];

				while ($this_value == '*') {
					$this_key++;
					$this_value = $split_val[$this_key];
				}


				//keep going until see the next position
				while ($split_input[$current_position] != $this_value) {
					$current_position++;
				}
				break;
			case '?':
				$current_position++;
				break;
			default:

				// need to be exactly match
				if ($split_input[$current_position] != $value) {
					$match = false;
				} else {
					$current_position++;
				}
				break;
		}
		
	}
	if ($current_position < count($split_input)) {
echo 'exit here\n';
		return false;
	}
echo 'exit there\n';
	return $match;
	
}

echo isMatch("aab", "?a*")? "TRUE" : "FALSE";
