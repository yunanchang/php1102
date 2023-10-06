<?php
$a=[];
$a[]=10;
$a[]=20;
$a[]="ddq";
echo "<pre>";
print_r($a);

echo $a[2];

echo "<hr>";

$b=[];

$b['name']="yunan";
$b['dd']="大學";

print_r($b);

echo "<hr>";
$c=[];
$c['name']="yunan";
$c['job']=['ball','tell','nefix'];

print_r($c);
echo "<hr>";
echo $c["name"][2];
echo $c['job'][0];
echo "<hr>";

$a=['a','b','c','d'];
$i=0;
echo count($a);
echo "<hr>";
for($i=0;$i<count($a);$i++){
    echo $a[$i];}
echo "<h3>第37豪</h3>";
echo $a[$i-1];

foreach($a as $idx => $b)
{echo $idx."=>".$b;
echo "<br>";
}

echo "<hr>";
echo "<h3>foreach</h3>";
foreach($a as  $b
{echo $b;
}

echo "<hr>";

?>
