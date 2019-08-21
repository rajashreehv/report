


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


<html>
<head>
<title>delivery details</title>

</head>

<style>

div {
    height: 100px;
    width: 300px;
	position:absolute;
    top: 10px;
    right: 5px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #f2f2f2;
    padding: 10px;
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
    width: 45%;
	position:right;
	font-weight:bold;
    background-color: grey;
    color: white;
    padding: 10px 0px;
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
  <th>Delivery_id</th>
   <th> Gas  Id</th>
   <th>Customer Id</th>
   <th>Delivery address</th>
   <th> Delivery date</th>
   
   <th>Price</th>
 
</tr>
<div>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="DELIVERY PAGE" onclick="fun1()"/>            
<script> function fun1() { window.location="delivery.php"; } </script></br>



Click here for &nbsp&nbsp
 <input type="button" color="black"  value="LOG OUT" onclick="fun2()"/>
    <script> function fun2() { window.location="Logout_gasagency.php"; } </script></br>











</form>
</div>
</body>







<body background="bl12.jpg" ></body>

<?php
mysql_connect("localhost","root","");
mysql_select_db("miniproject") or die("cannot connect to the database");

$query="select * from delivery";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{

$del_id=$row[0];
$g_id=$row[4];
$c_id=$row[1];
$del_address=$row[2];
$del_date=$row[3];
$price=$row[5];
?>

<tr align='center' bgcolor='pink'>
<td>   <?php echo $del_id; ?> </td>
<td>   <?php echo $g_id; ?> </td>
<td>   <?php echo $c_id; ?></td>
<td>   <?php echo $del_address; ?> </td>
<td>   <?php echo $del_date; ?> </td>
<td>   <?php echo $price; ?> </td>


</tr>

<?php  }
?>
</html>