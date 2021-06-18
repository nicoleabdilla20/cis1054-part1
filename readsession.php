<?php
     session_start();
      if (isset($_SESSION['storename'])) {
         echo "Username: ", $_SESSION['sotrename'];
         echo "Age: ", $_SESSION['storeage'];
      } else {        
          $_SESSION['username'] = $_POST["username"];
         $_SESSION['storeage'] = $_POST["age"] ;
       }
    ?>
