<?php 
$IncidentID = $_GET['IncidentID'];
?>
<link rel="stylesheet" href="assets/css/style2.css"> 
<body>
<center>
        <br/><br/><br/><br/><br/>
        <div class="form">
        Are you sure you want to delete the incident record of <?php echo "$IncidentID";?> ?
        </body></br></br>
        
    <form action="deleteincident_confirm.php?IncidentID=<?php echo $IncidentID; ?>" method="POST">
	<input type="Submit" name="Submit" value="Delete">
    </form>
</div></center>