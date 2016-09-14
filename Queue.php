<?php

class Queue
{
	private $count_customer = 0;
	private $MAX =5;
	private $queue = [];

	public function enquene($customer)
	{
		$this->count_customer++;
	}

	public function isEmpty()
	{
		// $answer = true;
		// if($this->count_customer){
		// 	$answer = false;
		// }
		// return $answer;
		return $this->count_customer == 0;
	}

	public function isFull()
	{
		// $answer = false;
		// if($this->count_customer == $MAX ){
		// 	$answer = true;
		// }
		// return $answer;
		return $this->count_customer == $this->MAX;
	}

	public function peek()
	{
		return $this->count_customer;
	}
}


?>