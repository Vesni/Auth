<?php

$conn = mysqli_connect('localhost:3307',"root","","login_db");

if(!$conn){
    die("Connection Failed".mysqli_connect_error());

}

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE username = '$username' AND password ='$password'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) == 1){
// echo "<h2> Login Successful, Welcome $username</h2>";
header("Location:login_success.html");
exit();
}

else{
    // echo"<h2> Invaild Username or Password </h2>";
    header("Location:invaild.html");
exit();
   
}











?>