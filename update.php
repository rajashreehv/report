<?php
	include_once 'dbconnect.php';

 
	if( isset($_GET['id']) )
	{
		$id = $_GET['id'];
		$res= mysql_query("SELECT * FROM booking WHERE b_id='$id'");
		$row= mysql_fetch_array($res);
	}
 if( isset($_POST['']) )
	{
		$newName7 = $_POST['no_of_gasbooked'];
	
		
		$id  	 = $_POST['id1'];
		$sql     = "UPDATE booking SET no_of_gasbooked='$newName7'  WHERE b_id='$id'";
		

$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=updatedelete.php'>";
	}
	

?>
<body bgcolor="blue">
<form  method="POST">
<table align="center" bgcolor="cream">
<tr><td>: c_email</td><td><input type="text" name="newName1 value="<?php echo $row['c_email']; ?>"/></td></tr>
<tr><td>b_id:</td><td><input type="text" name="newName2" value="<?php echo $row['b_id']; ?>"/></td></tr>
<tr><td>c_id:</td><td> <input type="text" name="newName3" value="<?php echo $row['c_id']; ?>"/></td></tr>
<tr><td>b_date: </td><td><input type="text" name="newName4" value="<?php echo $row['b_date']; ?>"/></td></tr>
<tr><td>: </td>g_id<td><input type="text" name="newName5" value="<?php echo $row['g_id']; ?>"/></td></tr>
<tr><td>: </td>g_name<td><input type="text" name="newName6" value="<?php echo $row['g_name']; ?>"/></td></tr>
<tr><td>: </td>no_of_gasbooked<td><input type="text" name="newName7" value="<?php echo $row['no_of_gasbooked']; ?>"/></td></tr>

<tr>
<td><input type="hidden" name="id1" value="<?php echo $row['b_id']; ?>"/></td>
<td><input type="submit"  name="cse" value=" Update "/></td>
<td><input type="reset" name="reset" value="Reset"/></td></tr>

</table>
<a href="updatedelete.php"><h1>click here to goback</h1></a> 
</form>
</body>