<?php

require_once 'Queue.php';

class QTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
          $this->queue = new Queue();
    }

    public function test_Queue_empty()
    {
         $expected = true;
         $acturl = $this->queue->isEmpty();
         $this->assertEquals($expected,$acturl);
    }

    public function test_Queue_not_empty()
    {
         $expected = false;
         $this->queue->enquene('A');
         $acturl = $this->queue->isEmpty();
         $this->assertEquals($expected,$acturl);
    }

    public function test_Queue_isFull()
    {
         $expected = true;
         $this->queue->enquene('A');
         $this->queue->enquene('A');
         $this->queue->enquene('A');
         $this->queue->enquene('A');
         $this->queue->enquene('A');
         $acturl = $this->queue->isFull();
         $this->assertEquals($expected,$acturl);
    }

    public function test_Queue_is_not_Full()
    {
         $expected = false;
         $this->queue->enquene('A');
         $this->queue->enquene('A');
         $this->queue->enquene('A');
         $acturl = $this->queue->isFull();
         $this->assertEquals($expected,$acturl);
    }

    public function test_enquene_1_peek_1()
    {
         $expected = 1;
         $this->queue->enquene('A');
         $acturl = $this->queue->peek();
         $this->assertEquals($expected,$acturl);
    }

    public function test_enquene_2_peek_2()
    {
         $expected = 2;
         $this->queue->enquene('A');
         $this->queue->enquene('A');
         $acturl = $this->queue->peek();
         $this->assertEquals($expected,$acturl);
    }
} 


?>
