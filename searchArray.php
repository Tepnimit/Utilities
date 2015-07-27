
$input = [
 [ 1, 2, 3 ],
 [ 4, 5, 6 ],
 [ 7, 8, [9,10,11,12] ]
];


function search($input, $n) {
        //$dummy = true;
	$location = array();
	foreach ($input as $key => $value) {
		if (is_array($value)) {
                       $dummy = search($value, $n);
                       if (!$dummy) {
                        } else {
                      $location[$key] = $dummy;
                       }
                        
		} else {
			if ($value == $n) {
			//$location[$key] = array($value);
                        return array($key=>$value);
			} else {
                       $flag = false;
                       }
		}
	}
	return $location;
}

print_r(search($input, '11'));

echo $input[2][2][2];
