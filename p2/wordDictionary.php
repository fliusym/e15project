<?php

$words = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html');
$regex = '/<li>(.*?)<\/li>/si';
$matchArray = array();

preg_match_all($regex,$words,$match);

if(is_array($match))
{
	foreach ($match[1] as $key => $value) {
		$after = "";
		// only need words
		$len = strlen($value);
		for($i = 0; $i <= $len; $i++)
		{
			$char = substr($value, $i,1);
			if(ctype_alpha($char))
			{
				$after = $after . $char;
			}
		}

		array_push($matchArray, $after);
	}


}