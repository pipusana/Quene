<?php

require_once 'Queue.php';

class QTest extends PHPUnit_Framework_TestCase
{
    public function test_Queue_empty()
    {
         $expected = true;
         $queue = new Queue();
         $acturl = $queue->isEmpty();
         $this->assertEquals($expected,$acturl);
    }

    public function test_Queue_not_empty()
    {
         $expected = false;
         $queue = new Queue();
         $queue->enquene('A');
         $acturl = $queue->isEmpty();
         $this->assertEquals($expected,$acturl);
    }


} 


?>
