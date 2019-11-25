<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Login</title>
        <link rel="stylesheet" href="reset.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
      <div class="bg-info">
         <div class="row">
            <div class="col-md-8">
               <div id="login">
                  <div class="page-header">
                     <h3>Login</h3>

                  <div class="white">
                  <form class="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id='email' placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id='password' placeholder="Password">
                         </div>
                      </div>
                    </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <br>

                  <?php

                  session_start();

                  if (!isset($_SESSION['UserID'])) {

                    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                      $servername = 'dbprojects.eecs.qmul.ac.uk';
                      $username = 'jhm32';
                      $password = 'VDtrvAMs4Wra6';
                      $dbname = 'jhm32';

                      $conn = new mysqli($servername, $username, $password, $dbname);

                      if ($conn->connect_error) {
                        die("Connection failed: ".$conn->connect_error); }

                      $email = $_POST['email'];
                      $pass = $_POST['password'];
                      $sql = "SELECT ID, password FROM USERS WHERE email = '$email'";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                          $rows = $result->fetch_assoc();

                          if ($rows["password"] == $pass) {
                            $_SESSION['UserID'] = $rows['ID'];
                            header('Location: ex7logout.php');

                          } else {
                            echo "Wrong password";

                          }

                      } else {
                          echo "email not found";
                      }
                    }
                  } else {
                    header('Location: ex7logout.php');
                  }

                  ?>

                </form>
             </div>
          </div>
          <div class="col-md-2">
          </div>
       </div>


     <!-- Bootstrap core JavaScript
     ================================================== -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
    </html>
