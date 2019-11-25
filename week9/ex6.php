<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="reset" href="reset.css">
</head>
<body>

<?php
  $servername = "dbprojects.eecs.qmul.ac.uk";
$username = "jhm32";
$password = "VDtrvAMs4Wra6";
$dbname = "jhm32";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$fname= $_POST["name"];
$sname= $_POST["surname"];
$email= $_POST["email"];
$pass1= $_POST["password"];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$sql = "INSERT INTO USERS (firstName, lastName, email, password) VALUES ('$fname',
'$sname', '$email', '$pass1')";
if ($conn->query($sql) === TRUE) {
echo "<h2>User Registration Form</h2><h6 class='text-center mb-2'>Registration Successful</h3>
<p class='text-center mb-2'><a href='ex6.html' class='btn btn-info'
role='button'>Home</a></p>
";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
 ?>


</body>
