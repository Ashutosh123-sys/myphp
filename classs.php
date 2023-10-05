<?php
/*class ClassA extends \stdClass {}
class ClassB extends \stdClass {}
class ClassC extends ClassB {}
class ClassD extends ClassA {}

function getSomeClass(): string
{
    return 'ClassA';
}

var_dump(new (getSomeClass()));
echo "<br>";
var_dump(new ('Class' . 'B'));
echo "<br>";
var_dump(new ('Class' . 'C'));
echo "<br>";
var_dump(new (ClassD::class));*/
/*class SimpleClass

{

    // property declaration

    public $var = 'a default value';

    // method declaration

    public function displayVar() {

        echo $this->var;

    }

}

$instance = new SimpleClass();

$assigned   =  $instance;

$reference  =& $instance;

$instance->var = '$assigned will have this value';

$instance = null; // $instance and $reference become null

var_dump($instance);
echo "<br>";

var_dump($reference);
echo "<br>";
var_dump($assigned);*/
//echo (new DateTime())->format('Y');
/*class Foo
{
    public $bar = 'property';

    public function bar() {
        return 'method';
    }
}

$obj = new Foo;
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;*/
class Base

{

    public function foo(int $a) {

        echo "Valid\n";

    }

}

class Extend1 extends Base

{

    function foo(int $a = 5)

    {

        parent::foo($a);

    }

}

class Extend2 extends Base

{

    function foo(int $a, $b = 5)

    {

        parent::foo($a);

    }

}

$extended1 = new Extend1();

$extended1->foo();
echo "$a";
$extended2 = new Extend2();

$extended2->foo(1);

?>