
$input = "ADOBACECOABCDEBANC";
$word = "ABC";


function findChar($input, $char) {
foreach ($input as $key => $value) {
	if ($value == $char) {
		$foundkey = $key;
		return $foundkey;
	}
}
return false;
}

function searchWord($input, $word_array) {

	$tmp_input = $input;
	if (count($tmp_input) >= count($word_array)) {
			$first_key = findChar($tmp_input, $word_array[0]);
			if (!$first_key && $first_key !== 0) {
				return false;
			}
			for ($i=0; $i<$first_key; $i++) {
				array_shift($tmp_input);
			}
				foreach ($word_array as $key  => $value) {	
					if ($tmp_input[$key] == $word_array[$key]) {
						if ($key == count($word_array) - 1) {
						return true;
						}
					} else {
						for ($i=0; $i<$key; $i++){
							array_shift($tmp_input);
						}
						if (count($tmp_input) >= count($word_array)) {
							$flag = searchWord($tmp_input, $word_array);
						if ($flag == false)	{
							return false;
						}
						} else {
							return false;
						}
					}
				}
	}
	if ($flag == false) {return false;}
	return $flag;
}


	$word = str_split($word);
	$input = str_split($input);
echo searchWord($input, $word)?  "TRUE" : "FALSE";
