


<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['username']))
{
	header("location: gasagency_login.php");
}
?>


<html>
<head>
<title>User Register Form</title>

</head>

<style>

div {
    height: 150px;
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
    width: 40%;
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
  <th>User Name</th>
   <th>Password</th>
   <th> Gasagency ID </th>
   <th>gasagency Name</th>
   <th>Address</th>
   <th>Phone number</th>
   <th>Email</th>

</tr>

<div>




Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="gasagency_home.php.html"; } </script></br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="UPDATE DETAILS" onclick="fun2()"/>
<script> function fun2() { window.location="gasagency_update.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout_gasagency.php"; } </script></br>

</form>
</div>
</body>







<body background="bl12.jpg" ></body>

<?php
mysql_connect("localhost","root","");
mysql_select_db("miniproject") or die("cannot connect to the database");

$query="select * from gasagency";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$username=$row[0];
$password=$row[1];
$id=$row[2];
$name=$row[3];
$address=$row[4];
$phno=$row[5];

$email=$row[6];
?>

<tr align='center' bgcolor='pink'>
<td>   <?php echo $username; ?> </td>
<td>   <?php echo $password; ?> </td>
<td>   <?php echo $id; ?></td>
<td>   <?php echo $name; ?> </td>
<td>   <?php echo $address; ?> </td>
<td>   <?php echo $phno; ?> </td>

<td>   <?php echo $email; ?> </td>



</tr>

<?php  }
?>
</html>