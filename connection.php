<?php 

// $servername = "localhost";
// $username = "root";
// $password = "root";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=Assignment3", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }


$connection = new mysqli('localhost','root','root');
$db = mysqli_select_db($connection,'Assignment3');

if(!$connection)
{
 echo "not succesfully";
}else{
 echo 'succesfully connected';
}


?>