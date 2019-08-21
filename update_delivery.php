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
<head>
<title>Update Customer Information</title>
</head>


<style>
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

input[type=password], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=password]:focus {
    border: 1px solid #555;
}

input[type=number], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=number]:focus {
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
    height: 550px;
    width: 450px;
	position:absolute;
    top: 80px;
    right: 750px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>
<body background="nn.png" >
</body>
<body>

<div>
<form method="post" action="">
<table width='800' align='center border='5'>
<tr bgcolor ='purple'> 
 <th>Delivery id</th>
   <th>Customer id</th>
   <th> Delivery address </th>
   <th>Delivery date</th>
   <th>Gas id</th>
   <th>Price</th>
 

</tr>

</br>




<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>DELIVERY&nbsp&nbspUPDATE</b></u></label><br><br>



<label for="password"><b>Delivery date:</b></label> 
<input placeholder="Enter  delivery date" type="date" name="del_date"/></br>

<label for="address"><b>Delivery Address</b></label> 
<input placeholder="Enter  delivery address" type="text" name="del_address"/></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="gasagency_home.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout_gasagency.php"; } </script></br>
</div>
</form>

</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("miniproject") or die("cannot connect to the database");
$get_username=$_SESSION['username'];
$query="select * from delivery where username='$get_username'";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$del_id=$row[0];
$c_id=$row[1];
$del_address=$row[2];
$del_date=$row[3];
$g_id=$row[4];
$price=$row[5];

?>

<tr align='center' bgcolor='pink'>
<td>   <?php echo $del_id; ?> </td>
<td>   <?php echo $c_id; ?> </td>
<td>   <?php echo $del_address; ?></td>
<td>   <?php echo $del_date; ?> </td>
<td>   <?php echo $g_id; ?> </td>
<td>   <?php echo $price; ?> </td>





</tr>

<?php  }


if(isset($_POST['submit']))
{
 
$del_address=$_POST['del_address'];
 $del_date=$_POST['del_date'];

 


if($del_address =='')
{
echo "<script> alert('Please enter delivery address')</script>";
exit();
}

if($del_date=='')
{
echo "<script> alert('Please enter the delivery date')</script>";
exit();
}


$query="update delivery set del_address='$del_address',del_date='$del_date'  where username='$get_username'";
if(mysql_query($query))
{
$_SESSION['username']=$get_username;
echo "<script> alert('Updated Successfully') </script>";
echo "<br>";
echo " <a href='update_delivery_view.php'>View result</a>"; 
} 

else { 
echo "ERROR"; 
} 
}

?> 
</html>