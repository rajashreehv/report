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
    height: 380px;
    width: 450px;
	position:absolute;
    top: 80px;
    right: 450px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>
<body background="bl12.jpg" >
</body>
<body>

<div>
<form method="post" action="">
<table width='800' align='center border='5'>
<tr bgcolor ='purple'> 
 <th>User Name</th>
   <th>Password</th>
   <th> Customer Id </th>
   <th>Customer Name</th>
   <th>Address</th>
   <th>Phone number</th>
 
   <th>Email</th>

</tr>

</br>




<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>USER_DETAILS&nbsp&nbspUPDATE&nbsp&nbspFORM</b></u></label><br><br>



<label for="password"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="password"/></br>

<label for="address"><b>Address:</b></label> 
<input placeholder="Enter your address" type="text" name="address"/></br>

<label for="phno"><b>Phone Number:</b></label> 
<input placeholder="Enter your phone number" type="number" name="phno"/>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>



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
$get_username=$_SESSION['username'];
$query="select * from customer where username='$get_username'";
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


if(isset($_POST['submit']))
{
 
$password=$_POST['password'];
 $address=$_POST['address'];
 $phno=$_POST['phno'];
 


if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}

if($address =='')
{
echo "<script> alert('Please enter your address')</script>";
exit();
}

if($phno == '')
{
echo "<script> alert('Please enter valid phone number')</script>";
exit();
}

if (strlen($phno)!=10)
{
echo "<script> alert('Please enter 10digit valid phone number')</script>";
exit();
}

$query="update customer set password='$password',c_address='$address',c_phno='$phno'  where username='$get_username'";
if(mysql_query($query))
{
$_SESSION['username']=$get_username;
echo "<script> alert('Updated Successfully') </script>";
echo "<br>";
echo " <a href='Customer_view_details.php'>View result</a>"; 
} 

else { 
echo "ERROR"; 
} 
}

?> 
</html>