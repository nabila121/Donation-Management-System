<?php
session_start();

$servername='localhost';
$username='root';
$password='';
$db_name='donation';

$conn=mysqli_connect($servername,$username,$password,$db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['insert'])){
    if(empty($_POST['username'])|| empty($_POST['email']) || empty($_POST['password']) || empty($_POST['date_of_birth'])  || empty($_POST['fathername']) || empty($_POST['mothername']) || empty($_POST['fatherincome'])|| empty($_POST['phonenumber']) ||
      empty($_POST['address']) || empty($_POST['problemdescription'])){
        echo "All fields required";
    }
    else{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date_of_birth = $_POST['date_of_birth'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $fatherincome = $_POST['fatherincome'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $problemdescription = $_POST['problemdescription'];        
    
    
    
    $sql = "INSERT INTO donation_receiver (username,email,password,date_of_birth, fathername, mothername, fatherincome, phonenumber, address, problemdescription)
    VALUES ('$username','$email','$password','$date_of_birth','$fathername','$mothername','$fatherincome','$phonenumber','$address','$problemdescription')";

   if (mysqli_query($conn, $sql)) {
       header('location: donation-receiver-register.php');
   } else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
}
}

if(isset($_POST['update'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date_of_birth = $_POST['date_of_birth'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $fatherincome = $_POST['fatherincome'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $problemdescription = $_POST['problemdescription'];
    
    $sql = "UPDATE donation_receiver SET 
     username='$username',email='$email',password='$password',date_of_birth='$date_of_birth',fathername='$fathername',mothername='$mothername',fatherincome = '$fatherincome',phonenumber='$phonenumber',
     address='$address',problemdescription='$problemdescription' WHERE username='$username' and password='$password'";
    
    
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

}

if(isset($_POST['delete'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date_of_birth = $_POST['date_of_birth'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $fatherincome = $_POST['fatherincome'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $problemdescription = $_POST['problemdescription'];
    $sql = "DELETE FROM donation_receiver WHERE username='$username' and password = '$password'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
    
}

if(isset($_POST['view'])){
    header('location: view.php');
   
}

if(isset($_POST['back'])){
    header('location: donation-receiver.php');
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registration form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body style="background-color:#1A3333">
        <div class="header">
        <h1>Registration</h1>
        </div>       
        <div class="form">
        <form action="donation-receiver-register.php" method="post">
        <center>
        <table style="background-color:white">
            <tr>               
            <th>Registration Form</th>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="username" placeholder="User Name"></td>
            
            <tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" placeholder="Email"></td>
            
            <tr>
            <tr>
                <td>Pasword</td>
                <td><input type="text" name="password" placeholder="Password"></td>
            
            <tr>
            <tr>
                <td>Date-of-birth</td>
                <td><input type="date" name="date_of_birth" placeholder="date-of-birth"></td>
            
            <tr>
                <td>Father Name</td>
                <td><input type="text" name="fathername" placeholder="Father Name"></td>
            </tr>
            
            <tr>
                <td>Mother Name</td>
                <td><input type="text" name="mothername" placeholder="Mother Name"></td>
            </tr>
            
            <tr>
                <td>Father Income</td>
                <td><input type="int" name="fatherincome" placeholder="Father Income"></td>
            </tr>
            
            <tr>
                <td>Phone Number</td>
                <td><input type="text" name="phonenumber" placeholder="Phone Number"></td>
            </tr>
            
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" placeholder="Address"></td>
            </tr>
            
            <tr>
                <td>Problem Description</td>
                <td><textarea name="problemdescription" placeholder="Problem Description"></textarea></td>
            </tr>
            <tr>
                <td>Type of donation</td>
                <td><input type="radio" name="donation_type" value="education" checked/>EDUCATION<br/></td>
                <td><input type="radio" name="donation_type" value="medical"/>MEDICAL<br/></td>
                <td><input type="radio" name="donation_type" value="food"/>FOOD<br/></td>
                <td><input type="radio" name="donation_type" value="business"/>BUSINESS<br/></td>
            </tr>            
            <tr>               
                <td><input type="submit" name="insert" value="Add"></td>
                <td><input type="submit" name="update" value="Update"></td>
                <td><input type="submit" name="delete" value="Delete"></td>
                <td><input type="submit" name="view" value="View"></td>                
            </tr>
            <tr>                
                <td><input type="submit" name="back" value="LOG OUT"></td>
            
            <tr>
        </table>
        </center>
        </form>
        </div>
    </body>
</html>