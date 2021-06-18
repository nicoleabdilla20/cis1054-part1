<?php
/* GET method */
        session_start();
        $_SESSION['storeusername'] = $_GET["username"];
        $_SESSION['storeage'] = $_GET["age"];
    ?>
        <!DOCTYPE html>
        <html>
           <head>
                <title>Test</title>
          </head>
          <body>
                <form action="readsession.php" method="GET">
                   <input type="text" name="username" placeholder="Username: " required />
                  <input type="number" name="age" placeholder="Age: " required />
                    <input type="submit" value="Submit" />
             </form>
            </body>
        </html>
    ?>

  <?php
  /*POST method*/
        session_start();
        $_SESSION['storeusername'] = $_POST["username"];
        $_SESSION['storeage'] = $_POST["age"];
    ?>
        <!DOCTYPE html>
        <html>
           <head>
                <title>Question 5 (Test)</title>
          </head>
          <body>
                <form action="readsession.php" method="POST">
                   <input type="text" name="username" placeholder="Username: " required />
                  <input type="number" name="age" placeholder="Age: " required />
                    <input type="submit" value="Submit" />
             </form>
            </body>
        </html>
    ?>