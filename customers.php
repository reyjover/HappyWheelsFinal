<?php
$sql = "SELECT * FROM tblcustomer";
include 'connect.php';

    if(isset($_POST['search'])){
        $category = $_POST['category'];
        $search= $_POST['search'];

        $sql = "SELECT * FROM tblcustomer
        WHERE $category LIKE '%$search%'";
    } else {
        $sql = "SELECT * FROM tblcustomer";
    }

$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
?>

<html> 
    <head> <title> Customer Profiles </title> </head>
    <body> <br/><br/><br/><br/>
            <form class="search" method="POST" action="index.php?loadnav=customers">
            <b> Search by: </b>  
            <select name="category">
            <option value="CustomerID"> ID </option>
            <option value="Customer_Firstname"> Firstname </option>
            <option value="Customer_Lastname"> Lastname </option>
            <option value="Valid_ID"> Valid ID </option>
            <option value="Contact_Number"> Contact Number</option>
            <option value="Email"> Email </option>
            </select> 
			 <input type="text" name="search">
			<input type ="submit" name="submit" value="Go">
			</form>


            <table border=1> 
                <tr> 
                    <th> CustomerID  </th> 
                    <th> Firstname </th> 
                    <th> Lastname </th> 
                    <th> Valid ID  </th> 
                    <th> ID Number </th> 
                    <th> Contact Number </th> 
                    <th> Email </th> 
                    <th colspan="2"> Manage </th>
                </tr> 
            <?php
            while($r=mysqli_fetch_assoc($query))
            {
            ?>
                <tr> 
                <td> <?php echo $r['CustomerID'];?></td> 
                <td> <?php echo $r['Customer_Firstname'];?></td> 
                <td> <?php echo $r['Customer_Lastname'];?></td> 
                <td> <?php echo $r['Valid_ID'];?></td> 
                <td> <?php echo $r['ID_Number'];?></td> 
                <td> <?php echo $r['Contact_Number'];?></td> 
                <td> <?php echo $r['Email'];?></td> 
                <td> <a href="index.php?loadnav=editcustomer&&CustomerID=<?php echo $r['CustomerID'];?>"> EDIT </a> </td>
			    <td> <a href="index.php?loadnav=deletecustomer&&CustomerID=<?php echo $r['CustomerID'];?>&&Firstname=<?php echo $r['Customer_Firstname'];?>"> DELETE </a> </td>
	
                </tr>
            <?php } ?>
            <tr>
				<td colspan="9"> <a href="index.php?loadnav=addcustomer"> Customer (+) </a></td>
			</tr>
            </table> 
    </body> 

</html> 