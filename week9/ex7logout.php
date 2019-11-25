<html>
<head>
  <meta charset="utf-8">
  <link rel="reset" href="reset.css">
  <title>lab 9 ex7 logouts</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-info">
  <form action="" method="post" class="p-5 m-5 bg-white rounded">
    <h2 class="text-center">Welcome Back</h2>
    <button type="submit" name="logout1" class="btn btn-primary" style="width: 100%;">Logout</button>

<?php
  session_start();
  function Logout() {
    session_destroy();
    header('Location: ex7.php');
  }

  if (isset($_POST['logout1'])) {
    Logout();
  }
?>

  </form>
</body>
</html>
