<?php
	include_once 'dbconnect.php';

 
	if( isset($_GET['id']) )
	{
		$id = $_GET['id'];
		$res= mysql_query("SELECT * FROM delivery WHERE del_id='$id'");
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
		
		$del_id  	 = $_POST['id1'];
		$sql     = "UPDATE  delivery SET del_id='$new0',c_id='$new1',del_address='$new2',del_date='$new3',g_id='$new4',price='$new5' WHERE del_id='$id'";
		

$res= mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=admin_delivery_updatedelete.php'>";
	}
	

?>
<body background="bl12.jpg">
<form  method="POST">
<table align="center" bgcolor="orange">
<tr><td>del_id:</td><td> <input type="text" name="newName1" value="<?php echo $row['del_id']; ?>"/></td></tr>

<tr><td>c_id: </td><td><input type="text" name="newName2" value="<?php echo $row['c_id']; ?>"/></td></tr>
<tr><td>del_address: </td><td><input type="text" name="newName3" value="<?php echo $row['del_address']; ?>"/></td></tr>
<tr><td>del_date: </td><td><input type="text" name="newName4" value="<?php echo $row['del_date']; ?>"/></td></tr>
<tr><tr><td>g_id: </td><td><input type="text" name="newName5" value="<?php echo $row['g_id']; ?>"/></td></tr>
<tr><tr><td>price: </td><td><input type="text" name="newName6" value="<?php echo $row['price']; ?>"/></td></tr>

<td><input type="hidden" name="id1" value="<?php echo $row['del_id']; ?>"/></td>


<td><input type="submit"  name="cse" value=" Update "/></td>
<td><input type="reset" name="reset" value="Reset"/></td></tr>

</table>
<a href="admin_delivery_updatedelete.php"><h1><font color=pink fnt face='arial' size='6pt'>BACK</font></p></h1></a>
</form>
</body>