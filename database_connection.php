
<?php
//database credentials
$servername = "qesandpit2.c0mjwxt6xo2l.us-west-2.rds.amazonaws.com";
$username = "qesandpit2";
$password = "qesandpit2";
$database = "John";
$port = 3306;

//connects to database
$conn = mysqli_connect($servername, $username, $password, $database, $port);





//if not connected then display error
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

