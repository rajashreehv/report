



<html>
<head>
<title>Update booking view details</title>

</head>

<style>

div {
    height: 200px;
    width: 550px;
	position:absolute;
    top: 200px;
    right: 420px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #f2f2f2;
    padding: 20px;
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

</style>
<form action="" method="post">
<table width='800' align='center border='5'>
<tr bgcolor ='purple'>
  <th>Customer id</th>
   <th>Gas id</th>
  
   <th> Number of gas booked </th>
   <th>Booking date</th>
  

</tr>
<div>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Customer_home.php"; } </script></br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="UPDATE DETAILS" onclick="fun2()"/>
<script> function fun2() { window.location="Customer_update.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout_customer.php"; } </script></br>

</form>
</div>
</body>







<body background="nn.png" ></body>

<?php
mysql_connect("localhost","root","");
mysql_select_db("miniproject") or die("cannot connect to the database");

$query="select * from booking";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$c_id=$row[1];
$b_date=$row[3];
$no_of_gasbooked=$row[4];
$g_id=$row[2];

?>

<tr align='center' bgcolor='pink'>
<td>   <?php echo $c_id; ?> </td>
<td>   <?php echo $b_date; ?> </td>
<td>   <?php echo $no_of_gasbooked; ?></td>
<td>   <?php echo $g_id; ?> </td>




</tr>

<?php  }
?>
</html>