<?php
$a=17;

$flag=true;
for($i=2;$i<($a/2);$i++){
    echo "$a 除以 $i 餘數 ". ($a % $i);
    echo "<br>";
    if(($a % $i)==0)
    {$flag=false;}
}


if($flag==true)
?>