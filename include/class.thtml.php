<?php
class Thtml
{
	
	private $document;
	
	function __construct($fileName)
	{
		if(file_exists($fileName))
			$this->document = file($fileName);
		else {
			echo 'plik nie istnieje';
			exit();
			}			
	}
	
	public function setVariable($var, $setVar)
	{
		$i = 0;
		foreach($this->document as $line)
		{
			$str = '(\\{\\$'.$var.'\\})';
			if(preg_match($str, $line));
				{
					$this->document[$i] = preg_replace($str, $setVar, $this->document[$i]);
				}
		$i++;
		}				
		
	}
	

	
	public function getDocument()
	{
		$doc = '';
		foreach($this->document as $line)
		{
			$doc .= $line;
		}
		return $doc;	
	}
	
	
}
	
		

	

?>