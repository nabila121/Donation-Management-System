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

$sql = "SELECT * FROM amount";
    $result = mysqli_query($conn, $sql);

if(isset($_POST['back'])){
    header('location: donate-button.php');
}
    
    
?>

<html>
		<head></head>
		<body style="background-color:#1A3333">
            <center>
			<table border='2' style="background-color:white">
				<tr>               
				<th>Total Donation</th>
                <th>Education Donation</th>
                <th>Medical Donation</th>
                <th>Food Donation</th>
				<th>Business Donation</th>								
			</tr>

			<?php while($row = $result->fetch_assoc()){            
			{ ?>                
                <tr>                
				<td><?=$row['total_donation']?></td>
                <td><?=$row['education_donation']?></td>
                <td><?=$row['medical_donation']?></td>
                <td><?=$row['food_donation']?></td>
				<td><?=$row['business_donation']?></td>							
				</tr>
				<?php	} }?>                				
			</table>
            </center>
            
            <form action="donator_view.php" method="post">
            <input type="submit" name="back" value="Back">
            </form>

		</body>
		</html>
