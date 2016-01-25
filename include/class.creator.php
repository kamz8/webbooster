<?php
abstract class Creator
{
	protected abstract function factoryMethod();
	protected function startFactory()
	{
		$fm = $this->factoryMethod();
		return $fm;	
	}
}
?>