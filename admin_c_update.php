<?php
	include_once 'dbconnect.php';

 
	if( isset($_GET['id']) )
	{
		$id = $_GET['id'];
		$res= mysql_query("SELECT * FROM customer WHERE c_id='$id'");
		$row= mysql_fetch_array($res);
	}
 if( isset($_POST['cse']) )
	{
		$new0=$_POST['newName1'];
		$new1 = $_POST['newName2'];
		

		
		$new2=$_POST['newName3'];
		$new3= $_POST['newName4'];
		$new4= $_POST['newName5'];	
		$new5= $_POST['newName6'];
		$new6= $_POST['newName7'];	
		
		$c_id  	 = $_POST['id1'];
		$sql     = "UPDATE customer SET c_id='$new0',c_name='$new1',c_address='$new2',c_phno='$new3',c_email='$new4' WHERE c_id='$id'";
		

$res= mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=admin_customer_updatedelete.php'>";
	}
	

?>
<body background="bl12.jpg">
<form  method="POST">
<table align="center" bgcolor="orange">

<tr><td>c_id:</td><td> <input type="text" name="newName1" value="<?php echo $row['c_id']; ?>"/></td></tr>

<tr><td>c_name: </td><td><input type="text" name="newName2" value="<?php echo $row['c_name']; ?>"/></td></tr>
<tr><td>c_address: </td><td><input type="text" name="newName3" value="<?php echo $row['c_address']; ?>"/></td></tr>
<tr><td>c_phno: </td><td><input type="text" name="newName4" value="<?php echo $row['c_phno']; ?>"/></td></tr>
<tr><tr><td>c_email: </td><td><input type="text" name="newName5" value="<?php echo $row['c_email']; ?>"/></td></tr>


<td><input type="hidden" name="id1" value="<?php echo $row['c_id']; ?>"/></td>


<td><input type="submit"  name="cse" value=" Update "/></td>
<td><input type="reset" name="reset" value="Reset"/></td></tr>

</table>
<a href="admin_customer_updatedelete.php"><h1><font color=pink fnt face='arial' size='6pt'>BACK</font></p></h1></a>
</form>
</body>