<?php
class Filter
{
	public function dataFilter($input)
	{
		$input = trim($input);
		$input = htmlspecialchars($input);
		$input = addslashes($input);
		
		return $input;
	}
	
	public function charFilter($input)
	{
		$input = htmlspecialchars($input);
		$input = addslashes($input);
		
		return $input;
	}
}
?>