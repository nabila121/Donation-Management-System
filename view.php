<?php
session_start();

$servername='localhost';
$username='root';
$password='';
$db_name='donation';

$conn=mysqli_connect($servername,$username,$password,$db_name);

// Check connection
if (!$conn) {
    echo "Database connected error";
}

$sql = "SELECT * FROM donation_receiver";
    $result = mysqli_query($conn, $sql);

if(isset($_POST['back'])){
    header('location: donation-receiver-register.php');
}
    
    
?>

<html>
		<head></head>
		<body style="background-color:#1A3333">
            <center>
			<table border='2' style="background-color:white">
				<tr>
				<th>Name</th>
                <th>Email</th>
                <th>Pasword</th>
                <th>Date-of-birth</th>
				<th>Father Name</th>
				<th>Mother Name</th>
                <th>Father Income</th>
				<th>Phone Number</th>
				<th>Address</th>
				<th>Problem Description</th>
				

			</tr>             
			<?php while($row = $result->fetch_assoc()){            
            if($row['username']=='$username' and $row['password']=='$password')            
            {?>                
                <tr>
				<td><?=$row['username']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['password']?></td>
                <td><?=$row['date_of_birth']?></td>
				<td><?=$row['fathername']?></td>
				<td><?=$row['mothername']?></td>
                <td><?=$row['fatherincome']?></td>
				<td><?=$row['phonenumber']?></td>
				<td><?=$row['address']?></td>
				<td><?=$row['problemdescription']?></td>
			
				</tr>
				<?php	} }?>
			</table>
            </center>
            
            <form action="view.php" method="post">
            <input type="submit" name="back" value="Back">
            </form>

		</body>
		</html>
