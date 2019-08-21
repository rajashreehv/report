<?php 
include_once 'dbconnect.php';
$i=0;
    $c_id = $_GET['id'];
    $delete = "DELETE FROM customer WHERE c_id='$c_id'";
       $a=mysql_query($delete);
if($a){
?>
<script>alert("one row deleted sucessfully");</script>
<?php
}



  $sqldata1="select * from customer";
$sqldata=mysql_query($sqldata1);
?>
<body background="bl12.jpg">
<table border=4 align="center">

<h1 align="center"> TABLE INFORMATION</h1>
<?php
while ($row = mysql_fetch_array($sqldata)) {
    $class = ($i%2==0) ? 'yellow':'#E6E6FA';

    ?>
    <tr bgcolor="<?php echo $class; ?>">
        <td><?php echo ($i+1); ?></td>
        <td><?php echo $row['c_id']; ?></td>
        <td><?php echo $row['c_name']; ?></td> <td>
		<?php echo $row['c_address']; ?></td>
         <td><?php echo $row['c_phno']; ?></td>
		 
         <td><?php echo $row['c_email']; ?></td>
		
         
        <td class="button">
            <a href="admin_c_update.php?id=<?php echo $row['c_id']; ?>"><input type="button" name="update" value="Update"></a>
            <a href="admin_customer_delete.php?id=<?php echo $row['c_id']; ?>"><input type="button" name="delete" value="Delete"></a>
        </td>
    </tr>
<?php $i++; } ?>
</table>
<a href="admin_customer_updatedelete.php"><h1><font color=pink fnt face='arial' size='6pt'>BACK</font></p></h1></a>
</body>