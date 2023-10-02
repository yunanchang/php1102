<?php

$score = 95;
echo "我的成績" . $score;
echo "<br>";
echo "判斷為:";

if ($score >= 60) {
    echo "及格";
} else {
    echo "不及格";
}




$level = "c";
if ($score >= 90 && $score <= 100) {
    $level = "A";
}
if ($score >= 80 && $score <= 89) {
    $level = "B";
}
if ($score >= 70 && $score <= 79) {
    $level = "C";
}
if ($score > 60 && $score <= 69) {
    $level = "D";
}
if ($score > 0 && $score <= 59) {
    $level = "E";
}
echo '成績等級為:' . $level;
echo "<br>";

switch ($level) {
    case 'A':
        echo "perfect";
        break;
    case 'B':
        echo "GOOD";
        break;
    case 'C':
        echo "SOSO";
        break;
    default:
        echo "bad";
}

// $level="c";
// if ($score >=90 && $score<=100) {
//     $level="A";
// }if ($score=>80 && $score <=89) {
//     $level="B";
// }if ($score=>70 && $score <=79) {
//     $level="C";
// }if ($score>60 && $score <=69) {
//     $level="D";
// }if ($score>0 && $score <=59) {
//     $level="E";
// }

// echo $level;