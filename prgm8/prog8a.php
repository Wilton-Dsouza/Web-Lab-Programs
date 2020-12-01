<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
<?php
$val1=$_POST['first'];
$val2=$_POST['second'];
$op=$_POST['operator'];
if($op=="+"){
    $res = $val1+$val2;
}
else if($op=="-"){
    $res = $val1-$val2;
}
else if($op=="*"){
    $res = $val1*$val2;
}
else if($op=="/"){
    $res = $val1/$val2;
}
echo "<u><center><h1>Calculation Result</h1></center></u>";
echo "<center><h1> Result of $val1 $op $val2 = $res </h1></center>";
?>
</body>
</html>