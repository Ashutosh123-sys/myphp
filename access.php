<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class MyClass{
        public function construct(){
        }
        public function MyPublic(){
        }
        protected function MyProtected(){}
        private function MyPrivate(){}
        function Foo()
        {
            $this->MyPublic();
            $this->MyProtected();
            $this->MyPrivate();

        }
    }
    
    
    class MyClass2 extends MyClass{
        function Foo2(){
            $this->MyPublic();
            $this->MyProtected();
            #$this->MyPrivate();
        }
    }
    $s=new MyClass;
    $myclass2=new MyClass2;
    $s->MyPublic();
    $myclass2->Foo2();
    ?>
    
</body>
</html>