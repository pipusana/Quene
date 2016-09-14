<?php

class Queue
{
	private $count_customer = 0;
	public function enquene($customer)
	{
		$this->count_customer++;
	}
	public function isEmpty()
	{
		$answer = true;
		if($this->count_customer){
			$answer = false;
		}
		return $answer;
	}
}


?>