<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*class A{
        function foo(){
            if(isset($this)){
                echo "$this is defined (";
                echo get_class($this);
                echo ")\n";
            }
            else{
                echo "\$this is not defined,\n";

            }

        }
    }
    class B{
        function bar(){
            A::foo();
        }
    }
    $a=new A();
    $a->foo();
    A::foo();
    $b=new B();
    $b->bar();
    B::bar();*/
    class Person{
        private $strFirstname="Napoleon";
        private $strSurname="Reyes";
        function getFirstname(){
            return $this->strFirstname;
        }
        function getSurname(){
            return $this->strSurname;
        }
    }
    $obj=new Person;
    echo "<p>Firstname:".$obj->getFirstname()."</p";
    echo "<br>";
    echo "<p>Surname:".$obj->getSurname()."</p";
    
    ?>
    
</body>
</html>