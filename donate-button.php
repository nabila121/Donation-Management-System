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

if(isset($_POST['Donate'])){
    if(empty($_POST['amount'])){
        echo "field is required";
    }
    else{
        $amount = $_POST['amount'];
        $donation_type = $_POST['donation_type'];
        $total_amount = $total_amount+$amount;
        
        if(isset($_POST['donation_type']) && $donation_type == 'education'){            
            $sql = "INSERT INTO amount(total_donation,education_donation) VALUES('$total_amount','$amount')";
            
            if(mysqli_query($conn,$sql)){
            header('location: donate-button.php');
        }
        else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        }
        else{
            echo "error";
        }
        
        if(isset($_POST['donation_type']) && $donation_type == 'medical'){            
            $sql = "INSERT INTO amount(total_donation,medical_donation) VALUES('$total_amount','$amount')";
            
            if(mysqli_query($conn,$sql)){
            header('location: donate-button.php');
        }
        else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        }
        else{
            echo "error";
        }
        
        if(isset($_POST['donation_type']) && $donation_type == 'food'){            
            $sql = "INSERT INTO amount(total_donation,food_donation) VALUES('$total_amount','$amount')";
            
            if(mysqli_query($conn,$sql)){
            header('location: donate-button.php');
        }
        else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        }
        else{
            echo "error";
        }
        
        if(isset($_POST['donation_type']) && $donation_type == 'business'){            
            $sql = "INSERT INTO amount(total_donation,business_donation) VALUES('$total_amount','$amount')";
            
            if(mysqli_query($conn,$sql)){
            header('location: donate-button.php');
        }
        else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        }
        else{
            echo "error";
        }                                
        
        
    }        
}

if(isset($_POST['view'])){
            header('location: donator_view.php');
        }

if(isset($_POST['back'])){
    header('location: donator.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
    <title>Donate</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body style="background-color:#1A3333">                
        <center><h1 style="background-color:blue">DONATE NOW</h1></center>
        <div class="form">
        <form action="donate-button.php" method="post">
        <center>
        <table style="background-color:white">           
            <tr>
                <td>Amount</td>
                <td><input type="int" name="amount" placeholder="Amount"></td>            
            </tr>
            <tr>
                <td>Type of donation</td>
                <td><input type="radio" name="donation_type" value="education" checked/>EDUCATION<br/></td>
                <td><input type="radio" name="donation_type" value="medical"/>MEDICAL<br/></td>
                <td><input type="radio" name="donation_type" value="food"/>FOOD<br/></td>
                <td><input type="radio" name="donation_type" value="business"/>BUSINESS<br/></td>                               
            </tr>            
            <tr>
                <td><input type="submit" name="Donate" value="DONATE"></td>
            </tr>
            <tr>                
                <td><input type="submit" name="view" value="VIEW"></td>            
            </tr>
            <tr>                
                <td><input type="submit" name="back" value="BACK"></td>            
            </tr>
        </table>
        </center>            
         </form>
        </div>        
    </body>
</html>