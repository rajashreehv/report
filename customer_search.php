

<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['username']))
{
	header("location: Customer_login.php");
}
?>

<style type='text/css'>
body { 
background : url("bl12.jpg");
background-repeat:no-repeat;
 background-size: 100%;

}
th {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:white;
   }
td {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:black;
   }
input[type=text], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=text]:focus {
    border: 1px solid #555;
}
input[type=submit] {
    width: 80%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: grey;
    border: none;
    color: black;
	}
	
input[type=button] {
    width: 30%;
	position:right;
	font-weight:bold;
    background-color: grey;
    color: white;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}
	
	input[type=button]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
	
div {
    height: 280px;
    width: 350px;
	position:absolute;
    top: 10px;
    right: 10px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>








<body>
<div>
<form action="customer_search.php" method="get"><br/><br/>

<b>Search for the gasagency here: </b><input type="text" name="value" placeholder="Search here" style="width:150px;height:35px;font:bold 15px Times New Roman;">&nbsp &nbsp
<input type="submit" name="search" value="Search Now" style="width:100px;height:35px;font:bold 15px Times New Roman;"></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Customer_home.php.html"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout_customer.php"; } </script></br>
</div>



</form>




</body>
</html>

<?php

mysql_connect("localhost","root","");
mysql_select_db("miniproject") or die("cannot connect to the database");

if(isset($_GET['search']))
{
$search_value=$_GET['value'];

$query=mysql_query("select * from gasagency where g_name like '$search_value%'") or die (mysql_error());

if(mysql_num_rows($query)>0)

   
   {
  


?>

<table width='800' align='center border='5'>
<tr bgcolor ='purple'>
   <th> Gas id </th>
   <th>Gas name</th>
    <th>Gas address</th>
    <th>Gas phone</th>
	 <th>Gas email </th>
   </tr>
<?php
//$run=mysql_query($query);

while($row=mysql_fetch_array($query))
{
	
$g_id=$row[2];
$g_name=$row[3];
$g_address=$row[4];
$g_phno=$row[5];
$g_email=$row[6];


?>


<tr align='center' bgcolor='pink'>
<td>   <?php echo $g_id; ?></td>
<td>   <?php echo $g_name; ?> </td>
<td>   <?php echo $g_address; ?></td>
<td>   <?php echo $g_phno; ?> </td>
<td>   <?php echo $g_email; ?></td>

</tr>

<?php

}
}
else
{
	echo "<p><font color=pink fnt face='arial' size='6pt'>NO GASAGENCY IS AVAILABLE!!!</font></p>";
	
}
}
?>
</html>
