<?php

$conn = mysqli_connect("localhost:3307","root","","login_db");
if(!$conn){
die("Connection Failed".mysqli_connect_error());

}
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "INSERT INTO users (username,PASSWORD) VALUES('$username','$password')";
$val = mysqli_query($conn,$sql);

if($val){

    // echo "<h2> Sign Up Success </h2>";
header("Location:succes.html");
exit();
}

else{
    
  header("Location:invaild.html");
exit();
}






?>