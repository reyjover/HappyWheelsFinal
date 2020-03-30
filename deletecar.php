<?php 
$CarID = $_GET['CarID'];
$Car = $_GET['Car'];
?>

<html>
<head>
    <title> Delete Car</title>
    <link rel="stylesheet" href="assets/css/style2.css"> 
</head>
        <body><center>
        <br/><br/><br/><br/><br/>
        <div class="form">
        Are you sure you want to delete record of <?php echo "$Car";?> with an ID of  <?php echo "$CarID";?> ? 
        </body></br></br>
        
    <form action="deletecar_confirm.php?CarID=<?php echo $CarID; ?>" method="POST">

	<input type="Submit" name="Submit" value="Delete">
    </form>
    </div>
</center>
</html>