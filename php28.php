<?php
$xml =simplexml_load_file("exam.xml");
$totalprice=0;
$list=$xml ->book;
for ($i=0;$i<count($list);$i++){
    echo $list[$i] ->attributes()->id."\n";
    echo $list[$i] ->author ."\n";
    echo $list[$i] -> title ."\n";
    $totalprice+=$list[$i]->price;
}
echo $totalprice;
?>
