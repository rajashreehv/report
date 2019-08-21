<?php
	include_once 'dbconnect.php';

 
	if( isset($_GET['id']) )
	{
		$id = $_GET['id'];
		$res= mysql_query("SELECT * FROM booking WHERE b_id='$id'");
		$row= mysql_fetch_array($res);
	}
 if( isset($_POST['cse']) )
	{
		
		$newno_of_gasbooked = $_POST['newName1'];
	
		
		$b_id  	 = $_POST['id1'];
		$sql     = "UPDATE booking SET no_of_gasbooked='$newName1'  WHERE b_id='$id'";
		

$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=booking_updatedelete.php'>";
	}
	

?>
<body bgcolor="blue">
<form  method="POST">
<table align="center" bgcolor="cream">

<tr><td>no_of_gasbooked </td><td><input type="text" name="newName1" value="<?php echo $row['no_of_gasbooked']; ?>"/></td></tr>

<tr>
<td><input type="hidden" name="id1" value="<?php echo $row['b_id']; ?>"/></td>
<td><input type="submit"  name="cse" value=" Update "/></td>
<td><input type="reset" name="reset" value="Reset"/></td></tr>

</table>
<a href="booking_updatedelete.php"><h1>click here to goback</h1></a> 
</form>
</body>