<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Time and Date Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div>
        <h2>This is a Time and Date Page from server back to client</h2>
        <?php
        //referred to code done in class
            $date = new DateTime(); //function gets date from server
            $timezone = date_default_timezone_get(); //function gets time from server
            echo "<p>Server Time:</p>";
            echo "</p>Time Zone: " . $timezone . "</p>";
            echo "</p> Time: " . $date->format('Y-m-d H:i:s') ."</p>";
        ?>
    </div>
</body>
</html>