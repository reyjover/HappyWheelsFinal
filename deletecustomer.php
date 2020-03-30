<?php 
$CustomerID = $_GET['CustomerID'];
$fname = $_GET['Firstname'];
?>

<html>
<head>
    <title> Delete Customer</title>
    <link rel="stylesheet" href="assets/css/style2.css"> 
</head>
<br/><br/><br/><br/>
        <body><center>
	<div class="form">
        Are you sure you want to delete the record of <?php echo "$fname";?> with an ID of  <?php echo "$CustomerID";?> ?
        </body></br></br>
        
    <form action="deletecustomer_confirm.php?CustomerID=<?php echo $CustomerID; ?>" method="POST">
	<input type="Submit" name="Submit" value="Delete">
    </form>
    </div></center>
</html>