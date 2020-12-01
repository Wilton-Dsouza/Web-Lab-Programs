<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 6</title>
</head>
<body>
    <center><h1>Welcome to Webpage</h1>
    <?php
    $handle=fopen("count.txt","r");
    $count=fread($handle,10);
    $count=intval($count);
    $count+=1;
    fclose($handle);

    date_default_timezone_set("Asia/Kolkata");
    $henlo= strval(date("h:a"));
    if((intval($henlo[0]."".$henlo[1]) > 9 && $henlo[3]."".$henlo[4] == "am") || (intval($henlo[0]."".$henlo[1]) <5 && $henlo[3]."".$henlo[4] == "pm")){
        $handle=fopen("count.txt","w");
        fwrite($handle,$count);
        fclose($handle);
    }
    echo "<h2>The number of visiters are : $count</h2>"
    ?></center>
</body>
</html>