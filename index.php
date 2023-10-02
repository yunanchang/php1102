<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // echo "helldo hi";
    $a = 10;
    $b = 50;

    echo $a;
    echo $b;
    $c = $b;
    $b = $a;
    $a = $c;


    echo $a;
    echo $b;

    $change = '交換後';
    echo $change;
    if ($a >= 10) {
        $a = 50;
        $b = 10;
    } else {
        echo "0";
    }
    echo $a;
    echo $b;
    ?>

</body>

</html>