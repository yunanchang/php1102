<?php
// 初始化總和變數
$sum = 0;

// 初始化計數器
$i = 1;

// 使用while迴圈計算1加到100的總和
while ($i <= 100) {
    // 將目前的數字加到總和中
    $sum += $i;

    // 增加計數器
    $i++;
}

// 顯示計算結果
echo "1加到100的總和是：" . $sum;
echo "<hr>";
// 初始化總和變數
$sum = 0;

// 初始化計數器
$i = 1;

// 使用while迴圈計算1加到100的總和
while ($i <= 2) {
    echo '當$i='.$i."時";
    echo '$sum+$i的結果是';
    echo $sum . " + ". $i."=";
    echo $sum+$i;
    echo "<br>";

    // 將目前的數字加到總和中
    $sum += $i;

    // 增加計數器
    $i++;
} 
?>
<h3>練習</h3>
<?php
$n=100;
for($i=1;$i<=$n;$i=$i+2)
{echo $i;
echo ",";}


echo"<hr>";


// for($i=10;$i<300;$i +=1){
//     echo $i;
//     echo"<br>";
// }

echo"<hr>";

for($i=1;$i<=$n;$i++){
    
}
echo $i;
echo"<br>";
echo $i*10;
echo ",";
?>


