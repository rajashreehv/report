<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['username']))
{
header("location: customer_login.php");
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
 <th>Customer email</th>
 <th>Gas name</th>
   <th>Number of gas booked</th>
  
   <th>Booking date</th>
</tr>

</br>




<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>BOOKING&nbsp&nbspUPDATES</b></u></label><br><br>





<label for="address"><b>number of gasbooked:</b></label> 
<input placeholder="Enter number of gasbooked" type="text" name="no_of_gasbooked"/></br>



&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Customer_home.php"; } </script></br>

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
$get_username=$_SESSION['username'];
$query="select * from booking where username='$get_username'";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{

$no_of_gasbooked=$row[4];

?>

<tr align='center' bgcolor='pink'>

<td>   <?php echo $no_of_gasbooked; ?> </td>



</tr>

<?php  }


if(isset($_POST['submit']))
{
 

 $no_of_gasbooked=$_POST['no_of_gasbooked'];
 
 



if($no_of_gasbooked=='')
{
echo "<script> alert('Please enter number of gas booked')</script>";
exit();
}



$query="update booking set no_of_gasbooked='$no_of_gasbooked' where username='$get_username'";
if(mysql_query($query))
{
$_SESSION['username']=$get_username;
echo "<script> alert('Updated Successfully') </script>";
echo "<br>";
echo " <a href='update_booking_view.php'>View result</a>"; 
} 

else { 
echo "ERROR"; 
} 
}

?> 
</html>