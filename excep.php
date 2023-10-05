<?php
/*try{
    throw new exception("A terrible error has occured",42);
}
catch(Exception $e){
    echo "Exception".$e->getCode().":".$e->getMessage()."<br/>"."in".$e->getFile()."on line".$e->getLine()."<br/>";
}*/
/*function test() {
    throw new Exception;
   }
   
   try {
    test();
   } catch(Exception $e) {
    var_dump($e->getTrace());
   }*/
/*try {
    throw new Exception("Some error message");
} 
catch(Exception $e) {
    echo "The exception was created on line: " . $e->getLine();
}*/
/*try {
    throw new Exception("Some error message", 36);
} catch(Exception $e) {
    echo "The exception code is: " . $e->getCode();
}*/
/*function test() {
    throw new Exception;
}

try {
    test();
} catch(Exception $e) {
    echo $e->getTraceAsString();
}*/
class myException extends Exception
{
   function __toString()
   {
        return "<table border=\"1\">
<tr>
<td><strong>Exception ".$this->getCode()."
</strong>: ".$this->getMessage()."<br />"."
        in ".$this->getFile()." on line ".$this->getLine()."
</td>
</tr>
</table><br />";
    }
}



?>