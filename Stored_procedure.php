
<html>
<head>
<title>User Register Form</title>

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
input[type=email], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=email]:focus {
    border: 1px solid #555;
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
    width: 60%;
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
    width: 400px;
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
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>USER&nbsp&nbspREGISTRATION&nbsp&nbspFORM</b></u></label><br><br>

<label for="name"><b>Username:</b></label> 
<input placeholder="Enter your name" type="text" name="username" /></br>

<label for="name"><b>Password:</b></label> 
<input placeholder="Enter your name" type="password" name="password" /></br>


<label for="name"><b>Customer name:</b></label> 
<input placeholder="Enter your name" type="text" name="c_name" /></br>

<label for="address"><b>Customer address:</b></label> 
<input placeholder="Enter your address" type="text" name="c_address" /></br>

<label for="address"><b>Customer phone  number:</b></label> 
<input placeholder="Enter your phone number" type="text" name="c_phno" /></br>

<label for="address"><b>Customer email:</b></label> 
<input placeholder="Enter your email" type="text" name="c_email" /></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Admin_home.php.html"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="VIEW DETAILS" onclick="fun2()"/>
<script> function fun2() { window.location="Customer_view_details_store.php"; } </script></br>

</form>
</div>

</body>


</html>


<?php

session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("miniproject") or die("cannot connect to the database");

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
$c_name=$_POST['c_name'];
$c_address=$_POST['c_address'];
$c_phno=$_POST['c_phno'];
$email=$_POST['c_email'];



if($c_name =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($c_address =='')
{
echo "<script> alert('Please enter your address')</script>";
exit();
}

if($c_phno =='')
{
echo "<script> alert('Please enter your phno')</script>";
exit();
}
if(strlen($c_phno)!=10)
{
echo "<script> alert('Please enter 10digit valid phone number')</script>";
exit();
}

if($username =='')
{
echo "<script> alert('Please enter username')</script>";
exit();
}

if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}

if($email =='')
{
echo "<script> alert('Please enter your email')</script>";
exit();
}
$check_email="select * from customer where c_email='$email'";

$run=mysql_query($check_email);

if(mysql_num_rows($run)>0)
{
echo "<script> alert('Email already exists') </script>";
exit();
}

 
$sql= " CALL Insertproc('".$_POST["username"]."','".$_POST["password"]."','".$_POST["c_name"]."','".$_POST["c_address"]."','".$_POST["c_phno"]."','".$_POST["c_email"]."')";
if(mysql_query($sql))
{
	echo "<script> alert('Data successfully inserted via stored procedure')</script>";
	
}
}



?>
