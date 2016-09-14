<?php

class Queue
{
	private $count_customer = 0;
	private $queue = [];

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

	public function isFull()
	{
		$answer = false;
		if($this->count_customer == 5 ){
			$answer = true;
		}
		return $answer;
	}
}


?>