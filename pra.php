<h2>閏年</h2>
<?php
$year=2100;

echo "年份".$year;
echo "<hr>";

if ($year%4==0){
    if($year%100!=0)

    echo $year."是閏年";
}
else{
    echo $year."是平年";
}


?>
