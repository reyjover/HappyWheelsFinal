<?php
$CustomerID = $_GET['CustomerID'];
$sql = "SELECT * FROM tblcustomer WHERE CustomerID = $CustomerID";
include 'connect.php';
$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
$r = mysqli_fetch_assoc($query);
?>
<link rel="stylesheet" href="assets/css/style2.css"> 
<br/><br/><br/>
<center>
	<div class="form">
	<form method="POST" action="index.php?loadnav=editcustomer_confirm&&CustomerID=<?php echo $CustomerID;?>">
	<div class="form_content">  
		<h1> Add Customer </h1> <br>
		Firstname:
		<input type="text" name="fname" placeholder="" value="<?php echo $r['Customer_Firstname'];?>"/required> <br/><br/>
        Lastname:
		<input type="text" name="lname" placeholder="" value="<?php echo $r['Customer_Lastname'];?>"/required> <br/><br/>
        Valid ID:
		<input type="text" name="vID" placeholder="" value="<?php echo $r['Valid_ID'];?>"/required> <br/><br/>
        ID Number:
		<input type="text" name="IDnum" placeholder="" value="<?php echo $r['ID_Number'];?>"/required> <br/><br/>
        Contact Number:
		<input type="text" name="num" placeholder="" value="<?php echo $r['Contact_Number'];?>"/required> <br/><br/>
        Email:
		<input type="email" name="email" placeholder="" value="<?php echo $r['Email'];?>"/required> <br/><br/>
		
	</div>
			<input type="submit" name="submit" name="Submit">
	</form>
</div></center>
