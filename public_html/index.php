<h1>Hello World!!!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
// I assume that you've created a new username and password
$host = 'mysql';
$user = 'user';
$pass = 'user';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected to MySQL successfully!";
}
?>
