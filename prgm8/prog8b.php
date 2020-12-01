<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transpose</title>
</head>
<body>
    <?php
    $arr1 = array(
        array(1,2,3),
        array(4,5,6)
    );
    $arr2= array(
        array(7,8,9),
        array(10,11,12)
    );
    echo "<h1>Matrix A is: </h1>";
    for($i=0;$i<count($arr1);$i++) {
        for($j=0;$j<count($arr1[0]);$j++) {
            echo $arr1[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "<h1>Matrix B is: </h1>";
    for($i=0;$i<count($arr2);$i++) {
        for($j=0;$j<count($arr2[0]);$j++) {
            echo $arr2[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "<h1>Transpose of the Matrix A is: </h1>";
    for($i=0;$i<count($arr1[0]);$i++) {
        for($j=0;$j<count($arr1);$j++) {
            echo $arr1[$j][$i]." ";
        }
        echo "<br>";
    }
    echo "<h1>Addition of two matrix is </h1>";
    if(count($arr1)==count($arr2) && count($arr1[1])==count($arr2[1])){
        for($i=0;$i<count($arr2);$i++) {
            for($j=0;$j<count($arr2[0]);$j++) {
                echo $arr1[$i][$j] + $arr2[$i][$j]." ";
            }
            echo "<br>";
        }
    }
    else{
        echo "<h1>The Dimensions are Improper!</h1>";
    }
    ?>
</body>
</html>