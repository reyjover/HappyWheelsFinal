<?php
$CarID = $_GET['CarID'];
$sql = "SELECT * FROM tblcars WHERE CarID = $CarID";
include 'connect.php';
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
$r = mysqli_fetch_assoc($query);
?>
<html>
<head>
	<title> Edit Car </title>
	<link rel="stylesheet" href="assets/css/style2.css"> 
</head>
<body><center>
	<br/><br/><br/><br/><br/>
	<div class="form">
	<form method="POST" action="index.php?loadnav=editcar_confirm&&CarID=<?php echo $CarID;?>">
	<div class="form_content">  
		Car: 
		<input type="text" name="car" placeholder="" value="<?php echo $r['Car'];?>"/required> <br/><br/>
        Color:  
		<input type="text" name="color" placeholder="" value="<?php echo $r['Car_Color'];?>"/required> <br/><br/>
        Plate Number: 
		<input type="text" name="plate" placeholder="" value="<?php echo $r['Car_Plate_Number'];?>"/required> <br/><br/>
		
	</div>
			<input type="submit" name="submit" name="Submit">
	</form>

</div></center>
</body>
</html>