<?php
session_start();

$servername='localhost';
$username='root';
$password='';
$db_name='registration';

$conn=mysqli_connect($servername,$username,$password,$db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['insert'])){
    if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['fathername']) || empty($_POST['mothername']) || empty($_POST['fatherincome']) || empty($_POST['phonenumber']) ||
      empty($_POST['address']) || empty($_POST['problemdescription'])){
        $error = 'All fields required';
    }
    else{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $fatherincome = $_POST['fatherincome'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $problemdescription = $_POST['problemdescription'];
    
    
    
    $sql = "INSERT INTO registration (fname, lname, fathername, mothername, fatherincome, phonenumber, address, problemdescription)
    VALUES ('$fname','$lname','$fathername','$mothername','$fatherincome','$phonenumber','$address','$problemdescription')";

   if (mysqli_query($conn, $sql)) {
       header('location: home.php');
   } else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
}
}

if(isset($_POST['update'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $fatherincome = $_POST['fatherincome'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $problemdescription = $_POST['problemdescription'];
    
    $sql = "UPDATE registration SET fname='$fname',lname='$lname',fathername='$fathername',mothername='$mothername',phonenumber='$phonenumber',address='address',problemdescription='$problemdescription' WHERE fname='a'";
    
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

}

if(isset($_POST['delete'])){
    $sql = "DELETE FROM registration WHERE fname='a'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
    
}

if(isset($_POST['view'])){
    header('location: view.php');
   
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Registration form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center><h1>Registration</h1></center>
        <div class="form">
        <form action="registration.php" method="post">
        <center>
        <table>
            <tr>               
            <th>Registration Form</th>
            </tr>
            
            <tr>
                <td>First Name</td>
                <td><input type="text" name="fname" placeholder="First Name"></td>
            </tr>
            
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lname" placeholder="Last Name"></td>
            
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
                <td><input type="text" name="problemdescription" placeholder="Problem Description"></td>
            </tr>
            
            <tr>               
                <td><input type="submit" name="insert" value="Add"></td>
                <td><input type="submit" name="update" value="Update"></td>
                <td><input type="submit" name="delete" value="Delete"></td>
                <td><input type="submit" name="view" value="View"></td>
            </tr>
        </table>
        </center>
        </form>
        </div>
    </body>
</html>