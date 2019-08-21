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
		$new0=$_POST['newName1'];
		$new1 = $_POST['newName2'];
		
		
		$b_id  	 = $_POST['id1'];
		$sql     = "UPDATE booking SET no_of_gasbooked='$new1' WHERE b_id='$id'";
		

$res= mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=admin_bo_updatedelete.php'>";
	}
	

?>
<body background="bl12.jpg">
<form  method="POST">
<table align="center" bgcolor="orange">

<tr><td>b_id:</td><td> <input type="text" name="newName1" value="<?php echo $row['b_id']; ?>"/></td></tr>

<tr><td>no_of_gasbooked: </td><td><input type="text" name="newName2" value="<?php echo $row['no_of_gasbooked']; ?>"/></td></tr>


<tr>
<td><input type="hidden" name="id1" value="<?php echo $row['b_id']; ?>"/></td>
<td><input type="submit"  name="cse" value=" Update "/></td>
<td><input type="reset" name="reset" value="Reset"/></td></tr>

</table>
<a href="admin_bo_updatedelete.php"><h1><font color=pink fnt face='arial' size='6pt'>BACK</h1></a> 
</form>
</body>