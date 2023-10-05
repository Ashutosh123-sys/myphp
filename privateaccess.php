<?php
/*class test{
    private $foo;
    public function construct($foo){
        $this->foo=$foo;
    }
    private function bar(){
        echo "Accessed the private method";
    }
    public function baz(Test $other){
        $other->foo="hello";
        var_dump($other->foo);
        $other->bar();
    }
    
}
$test=new Test('test');
$test->baz(new Test('other'));*/
class vehicle{
    private $strDescription;
    function getDescription(){
        return $this->strDescription;
    }
    function setDescription($strDescription){
        $this->strDescription=$strDescription;
    }
    function __construct($strDescription){
        $this->strDescription=$strDescription;
    }
}
?>
