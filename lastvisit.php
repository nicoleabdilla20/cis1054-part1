<?php
    //need to have session start - found in w3schools link on vle
    session_start();
    date_default_timezone_set('Europe/Berlin'); //function gets time from server
    $inOneMonth = 60 * 60 * 24 * 30 + time(); //expires after a month
    setcookie('lastVisit', date("H:i:s"), $inOneMonth); //form of hours,min,sec
    $thisVisit = new DateTime();
    setcookie("timestamp", $thisVisit->getTimestamp());
?>
<html>
<body>
<h1> Last visit PHP Page</h1>
<br>
<?php
    if(isset($_COOKIE['lastVisit'])){
        $visit = $_COOKIE['lastVisit'];
        echo "Your last visit was - ". $visit . '<br>'; //outputting last visited time
        $last_time = strtotime($visit);
        $curr   = $thisVisit->format("H:i:s");
        echo "Your cuurent time is - ". $curr . '<br>'; //outputting curr time
        //personal note: outputting the time to make sure the calculation is performed well
        $curr_time = strtotime($curr);
        $diff = $last_time - $curr_time ;
        echo 'You first used this page '.abs($diff). ' seconds ago';
    }
    else{
        echo "No cookies found!";
    }
?>
</body>
</html>