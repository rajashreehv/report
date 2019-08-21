<?php 
include_once 'dbconnect.php';
$i=0;
$sqldata1="select * from delivery";
$sqldata=mysql_query($sqldata1);
?>
<body  background="bl12.jpg" >
<table border=4 align="center">

<h1 align="center"> TABLE INFORMATION</h1>
<?php

while ($row = mysql_fetch_array($sqldata)) {
    $class = ($i%2==0) ? 'orange':'#E6E6FA';

    ?>
    <tr bgcolor="<?php echo $class; ?>">
        <td><?php echo ($i+1); ?></td>
        <td><?php echo $row['del_id']; ?></td>
<td><?php echo $row['c_id']; ?></td>

          <td><?php echo $row['del_address']; ?></td>
       <td><?php echo $row['del_date']; ?></td>
          <td><?php echo $row['g_id']; ?></td>
<td><?php echo $row['price']; ?></td>


        <td class="button">
            <a href="d_update.php?id=<?php echo $row['del_id']; ?>"><input type="button" name="update" value="Update"></a>
            
        </td>
    </tr>
<?php $i++; } ?>
</table>
<a href="delivery.php"><h1><font color=pink fnt face='arial' size='6pt'>BACK</font></p></h1></a>
</body>