<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class ShoppingCart{
        private $name;
        private $items;
        public function ShoppingCart($inputname){
            $this->name=$inputname;
            }
        public function addItems($artnr,$num){
            $this->items[$artnr]+=$num;
        }
        public function removeItem($artnr,$num){
            if ($this->items[$artnr]>$num){
                $this->items[$artnr]-=$num;
                return True;

            }
            elseif ($this->items[$artnr]==$num){
                unset($this->items[$artnr]);
                return True;
            }
            else
                return False;
            }
        }
        
        
    
    
    ?>
</body>
</html>