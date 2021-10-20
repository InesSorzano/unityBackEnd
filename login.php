<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "videogamedb";

//User variables
$logUser = $_POST["logUser"];
$logPass = $_POST["logPass"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password  FROM user WHERE username = '". $logUser . "' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["password"] == $logPass){
      echo "User conected";
      //get user data

      //player info

      //inventory

      //player data

      //update inventory
    }else{
      echo "Wrong password";
    }
  }
} else {
  echo "Username does not exist";
}
$conn->close();
// echo "connected sucesfully";
?>