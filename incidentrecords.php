<?php
$sql = "SELECT * FROM tblincident";
include 'connect.php';

    if(isset($_POST['search'])){
        $search= $_POST['search'];
        $category= $_POST['category'];

        $sql = "SELECT * FROM tblcars
        WHERE $category LIKE '%$search%' ";

    }  else {
        $sql = "SELECT * FROM tblincident";
    }

$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
?>
<br/><br/><br/><br/>
<body> 
<form class="search" method="POST" action="index.php?loadnav=searchcar">
            <b> Search by: </b>  
            <select name="category">
            <option value="ReservationID"> ReservationID </option>
            <option value="Type_of_Incident"> Type of Incident </option>
            <option value="Location"> Location </option>
            </select> 
			<input type="text" name="search"> 
			<input type ="submit" name="submit" value="Go"> 
	</form>
   
    <table border=1> 
                <tr>  
                    <th> Incident ID </th> 
                    <th> Reservation ID </th> 
                    <th> Type of Incident </th>
                    <th> Description </th>
                    <th> Location </th> 
                    <th> Date </th> 
                    <th colspan="2"> Manage </th>
                </tr> 
            <?php
            while($r=mysqli_fetch_assoc($query))
            {
            ?>
                <tr> 
                <td> <?php echo $r['IncidentID'];?></td> 
                <td> <?php echo $r['ReservationID'];?></td> 
                <td> <?php echo $r['Type_of_Incident'];?></td> 
                <td> <?php echo $r['Incident_Description'];?></td> 
                <td> <?php echo $r['Location'];?></td> 
                <td> <?php echo $r['Date_of_Incident'];?></td> 
                <td> <a href="index.php?loadnav=editincident&&IncidentID=<?php echo $r['IncidentID'];?>&&ReservationID=<?php echo $r['ReservationID'];?>"> EDIT </a></td> 
                <td> <a href="index.php?loadnav=deleteincident&&IncidentID=<?php echo $r['IncidentID'];?>"> DELETE </a> </td> 
	
                </tr>
            <?php } ?>

            </table> 
</body>
