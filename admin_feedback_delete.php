<?php 
include_once 'dbconnect.php';
$i=0;
    $f_id = $_GET['id'];
    $delete = "DELETE FROM feedback WHERE f_id='$f_id'";
       $a=mysql_query($delete);
if($a){
?>
<script>alert("one row deleted sucessfully");</script>
<?php
}



  $sqldata1="select * from feedback";
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
        <td><?php echo $row['f_id']; ?></td>
        <td><?php echo $row['c_id']; ?></td> <td>
		<?php echo $row['g_id']; ?></td>
         <td><?php echo $row['comment']; ?></td>
		 
         
         
        <td class="button">
            <a href="admin_f_update.php?id=<?php echo $row['f_id']; ?>"><input type="button" name="update" value="Update"></a>
            <a href="admin_feedback_delete.php?id=<?php echo $row['f_id']; ?>"><input type="button" name="delete" value="Delete"></a>
        </td>
    </tr>
<?php $i++; } ?>
</table>
<a href="admin_feedback_updatedelete.php"><h1><font color=pink fnt face='arial' size='6pt'>BACK</h1></a> 
</body>