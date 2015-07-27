
class Oper {

	var $input = array();

	function addword($word) {
		$this->input[] = $word;
		return $this->input;
	}

	function searchWord($word) {
		$flag = in_array($word, $this->input);
		return $flag;
	}

}

$op = new Oper();

print_r($op->addword("bad"));

print_r($op->addword("dad"));

$op->addword("mad");
echo $op->searchWord("pad")? "TRUE": "FALSE";
echo $op->searchWord("bad")? "TRUE": "FALSE";
echo $op->searchWord(".ad")? "TRUE": "FALSE";
echo $op->searchWord("b..")? "TRUE": "FALSE";

