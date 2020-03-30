<?php 
include 'connect.php';
$ReservationID = $_GET['ReservationID'];
$CarID= $_GET['CarID'];

$sql = "SELECT * FROM tblreservation WHERE ReservationID = $ReservationID";
$sqlcar = "SELECT * FROM tblcars WHERE CarID = $CarID";

$querycar = mysqli_query($connect,$sqlcar) or die (mysqli_error($connect));
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));

$r = mysqli_fetch_assoc($query);
?>
<link rel="stylesheet" href="assets/css/style2.css"> 
<br/><br/><br/><br/>
<body><center>
	<div class="form">
The car has been returned. If there are any incidents to be recorded, please proceed to the Incidents tab to record.
<form method="POST" action="index.php?loadnav=manageres_confirm&&ReservationID=<?php echo $ReservationID;?>&&CarID=<?php echo $CarID;?>"> 
Initial Car Mileage: <?php echo $r ['Starting_Car_Mileage'];?> <br/><br/>
Please input the car mileage upon return: 
<input type="number" name="returningmileage" min="<?php echo $r['Starting_Car_Mileage'];?>" /required> <br/><br/>
<input type="submit" name="submit" value="submit"> 
</form>
</div></center> 
</body>