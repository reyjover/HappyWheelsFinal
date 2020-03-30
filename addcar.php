<?php 
include 'connect.php';
$sqlcarlist = "SELECT * FROM tblcarlist";
$querycarlist = mysqli_query($connect,$sqlcarlist) or die (mysqli_error($connect));
?>
<link rel="stylesheet" href="assets/css/style2.css"> 
<br/><br/><br/> <br/>
<body><center>
	<div class="form">
		<form method="POST" action="addcar_confirm.php">
		<div class="form_content"> 
			Select Car:  
			<select name="carname"> 
			<option> </option>
			<?php
				while($r=mysqli_fetch_assoc($querycarlist))
				{
				?>
			<option value="<?php echo $r['Car_Manufacturer'];?> <?php echo $r['Car_Model'];?> <?php echo $r['Car_Year'];?>"> <?php echo $r['Car_Manufacturer'];?> <?php echo $r['Car_Model'];?> <?php echo $r['Car_Year'];?> </option>
			<?php } ?>
			</select>
			<br/> <br/>
			Transmission: 
			<select name="transmission">
			<option> </option>
			<option value="Automatic"> Automatic </option> 
			<option value="Manual"> Manual </option> 
			</select><br/><br/>
			Color:  
			<select name="color">
			<option> </option>
			<option value="White"> White </option>
			<option value="Black"> Black </option>
			<option value="Grey"> Grey </option>
			<option value="Red"> Red </option>
			<option value="Silver"> Silver </option>
			<option value="Green"> Green </option>
			</select> <br/><br/>
			Plate Number: 
			<input type="text" name="plate" /required> <br/></br>
			Total Mileage: 
			<input type="number" name="mileage" /required> <br/></br>
			
			</div>
				<input type="submit" name="submit" name="Submit">
		</form>
	</div><center>
</body>
</html>