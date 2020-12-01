<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <title>Program 7</title>
</head>
<body>
    <center>
        <h1>A Digital Clock</h1>
    </center>
    <hr>
    <center>
        <?php
        date_default_timezone_set("Asia/Kolkata");
        echo "<h1>" . date("h:i:s A ")."</h1>";
        
        ?>
    </center>
    <hr>
</body>
</html>