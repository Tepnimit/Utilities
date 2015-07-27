<?php

$num = 28;
function convertNumToChar($num) {
$str = 'A';
for ($i=1; $i<$num; $i++){
	$str++;
}
return $str;
}

echo convertNumToChar($num);



?>
