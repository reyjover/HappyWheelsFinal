<!DOCTYPE html>
<html>
<head>
	<title> Add Customer (+) </title>
	<link rel="stylesheet" href="assets/css/style2.css"> 
</head>
<body><center>
<br/><br/><br/>
	<div class="form">
	<form method="POST" action="addcustomer_confirm.php">
	<div class="form_content">  
		<h1> Add Customer </h1> <br>
		Firstname:
		<input type="text" name="fname" placeholder="" /required> <br/></br>
        Lastname:
		<input type="text" name="lname" placeholder="" /required> <br/></br>
        Valid ID:
		<select name="vID">
		<option value="Passport"> Passport </option>
		<option value="Driver's&nbsp;License"> Driver's License </option>
		<option value="GSIS&nbsp;ID"> GSIS ID </option>
		<option value="SSS&nbsp;ID"> SSS ID </option>
		<option value="PRC&nbsp;ID"> PRC ID </option>
		<option value="iDOLE&nbsp;Card"> iDOLE Card </option>
		<option value="OWWA&nbsp;ID"> OWWA ID </option>
		<option value="SCHOOL&nbsp;ID">SCHOOL ID </option>
		</select></br></br>
        ID Number:
		<input type="text" name="IDnum" placeholder="" /required> <br/></br>
        Contact Number:
		<input type="text" name="num" placeholder="" /required> <br/></br>
        Email:
		<input type="email" name="email" placeholder="" /required> <br/></br>
	</div>
        
			<input type="submit" name="submit" name="Submit">
	</form>
</div></center>

