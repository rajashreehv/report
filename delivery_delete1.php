<?php 
include_once 'dbconnect.php';
$i=0;
    $del_id = $_GET['id'];
    $delete = "DELETE FROM delivery WHERE del_id='$del_id'";
       $a=mysql_query($delete);
if($a){
?>
<script>alert("one row deleted sucessfully");</script>
<?php
}



  $sqldata1="select * from delivery";
$sqldata=mysql_query($sqldata1);
?>
<body bgcolor="cream">
<table border=4 align="center">

<h1 align="center"> TABLE INFORMATION</h1>
<?php
while ($row = mysql_fetch_array($sqldata)) {
    $class = ($i%2==0) ? 'yellow':'#E6E6FA';

    ?>
    <tr bgcolor="<?php echo $class; ?>">
        <td><?php echo ($i+1); ?></td>
        <td><?php echo $row['del_id']; ?></td>
        <td><?php echo $row['c_id']; ?></td> <td>
		<?php echo $row['del_address']; ?></td>
         <td><?php echo $row['del_date']; ?></td>
		 <td><?php echo $row['g_id']; ?></td>
		
         <td><?php echo $row['price']; ?></td>
		
         
        <td class="button">
            <a href="admin_d_update.php?id=<?php echo $row['del_id']; ?>"><input type="button" name="update" value="Update"></a>
            <a href="admin_delivery_delete.php?id=<?php echo $row['del_id']; ?>"><input type="button" name="delete" value="Delete"></a>
        </td>
    </tr>
<?php $i++; } ?>
</table>
<a href="admin_delivery_updatedelete.php"><h1>BACK</h1></a> 
</body>