<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Exercise 2</title>
        <link rel="stylesheet" href="reset.css" type="text/css"/>
        <link rel="stylesheet" href="ex2.css" type="text/css"/>
    </head>

    <body>
      <form action="http://webprojects.eecs.qmul.ac.uk/jhm32/HTML/labs/week8/ex2.php" method="post">
        <fieldset>
          <legend id= legend>My Birthday</legend>
          <div class="container">
          <div class="container2">
            <p>
              <?php
              $dob = new DateTime ($_POST['bday']);
              $now = new DateTime ();
              $difference = $now -> diff($dob);
              $age = $difference ->y;
              $week = $age*52;
              $day = $age*366;
              $hour = $day*24;
              $minute = $hour*60;
              $second = $minute*60;

              echo "Hi ";
              echo $_POST['1name'];
              echo ", your birthday is on: ";
              echo "<p5>";
              echo date("d-F-Y", strtotime($_POST['bday']));
              echo "</p5>";
              echo "<br>";
              echo "Today's date is ";
              echo date("d F Y");
              echo "<br>";
              echo "Since your birthday, ";
              echo $second;
              echo " seconds, or ";
              echo $minute;
              echo " minutes, or ";
              echo $hour;
              echo " hours, or ";
              echo $day;
              echo " days, or ";
              echo $week;
              echo " weeks, or ";
              echo $age;
              echo " years have passed.";

              ?>






            </p>
          </div>
          </div>
        </fieldset>
      </form>


  <script src="ex2.js"></script>
  </body>
</html>
