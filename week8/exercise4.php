<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Week 8 - Exercise 4</title>

   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <link href="exercise4.css" rel="stylesheet">

</head>

<body>
 <?php include 'login-data.php'; ?>
<div class="container">
   <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
         <div id="login">
            <div class="page-header">
               <h3>Login</h3>
            </div>
            <form role="form">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  <?php
                  if (empty($email)) {
                    echo '&#x2717';
                  }
                  else {
                    echo '&#x2713';
                  }
                   ?>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  <?php
                  if (empty($password)) {
                    echo '&#x2717';
                  }
                  else{
                    echo '&#x2713';
                  }
                   ?>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Module</label>
                <div class="col-sm-10">
                  <select class="form-control">
                    <?php
                    for ($x = 1; $x <= 6; $x++) {
                      echo "<option>ECS40$x</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>
              <br>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
         </div>
      </div>
      <div class="col-md-2">
      </div>
   </div>
</div>


 <!-- Bootstrap core JavaScript
 ================================================== -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
