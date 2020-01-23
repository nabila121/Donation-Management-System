<?php
session_start();

$servername='localhost';
$username='root';
$password='';
$db_name='donation';

$conn=mysqli_connect($servername,$username,$password,$db_name);

if(!$conn){
    echo "Database connected error";
}

$error="";

if(isset($_POST['register_btn'])){
    session_start();
    $username = $_POST['username'];    
    $password = $_POST['password'];
    $email = $_POST['email'];
        
        $password = md5($password);
        $sql = "INSERT INTO donator(username,email,password) VALUES('$username','$email','$password')";
        mysqli_query($conn,$sql);
        $_session['message']="you are now logged in";
        $_session['username']=$username;
        header("location: donator.php");    
}

?>