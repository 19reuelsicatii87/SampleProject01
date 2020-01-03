<?php

// Variables: Registration Form
//=================================
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];


// Variables: Database Connection
//=================================
$mySQL_host = "127.0.0.1";
$mySQL_user = "wordpressdbadmin";
$mySQL_password = "admin1234";


// Connection and Inserting DATA to DB
//=============================================
$conn = new mysqli($mySQL_host,$mySQL_user,$mySQL_password,"stardbapp");
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(username, email, password_one, password_two) values (?,?,?,?)");
    $stmt->bind_param("ssss", $username, $email,$password,$confirmpassword);
    $stmt->execute();
    //echo "Registration Successfully";
    header("Location: /SampleProject01/html/about.html");
    $stmt->close();
    $conn->close();
}


?>