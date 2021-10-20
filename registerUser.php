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

$sql = "SELECT username  FROM user WHERE username = '". $logUser . "' ";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "user already taken";
    //name already taken  
}else{
    //TODO check password minimal security
    //TODO name cant have weird symbols 


    $sql2 = "INSERT INTO user (username, password) VALUES ('". $logUser ."','". $logPass . "')";
    //add join date
    //last loged in



    if ($conn->query($sql2) === TRUE) {
        echo "User created sucesfully";
      } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
      }
   
}
$conn->close();
// echo "connected sucesfully";
?>