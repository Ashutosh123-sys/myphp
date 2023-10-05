<?php
// use PHPUnit\Framework\TestCase;
require_once 'HelloWorld.php';

class Test extends \PHPUnit\Framework\TestCase
{
    public function test__construct()
    {
        $hw = new HelloWorld();
        $this -> assertEquals('Hello World!',$hw->helloWorld);
    }
}
?>