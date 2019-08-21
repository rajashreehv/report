
<head>
<title>Gasagency Register Form</title>

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
    top: 50px;
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
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>GASAGENCY&nbsp&nbspINSERTION&nbsp&nbspFORM</b></u></label><br><br>

<label for="phno"><b>User name:</b></label> 
<input placeholder="Enter your user name" type="text" name="username" /></br>

<label for="password"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="password"/></br>


<label for="name"><b>Name:</b></label> 
<input placeholder="Enter your name" type="text" name="g_name" /></br>

<label for="address"><b>Address:</b></label> 
<input placeholder="Enter your address" type="text" name="g_address" /></br>

<label for="phno"><b>Phone Number:</b></label> 
<input placeholder="Enter your phone number" type="number" name="g_phno" /></br>



<label for="email"><b>Email:</b></label> 
<input placeholder="Enter your email" type="email" name="g_email" /></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun2()"/>
<script> function fun2() { window.location="Admin_home.php.html"; } </script></br>

</form>
</div>
</body>


</html>


<?php

session_start();

if(!isset($_SESSION['username']))
{
	header("location: admin_loginn.php");
}
$con=mysql_connect("localhost","root","");
mysql_select_db("miniproject") or die("cannot connect to the database");

if(isset($_POST['submit']))
{
 $username=$_POST['username'];
  $password=$_POST['password'];
 $name=$_POST['g_name'];
  $address=$_POST['g_address'];
  $phno=$_POST['g_phno'];
 
 $email=$_POST['g_email'];


if($name =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($address =='')
{
echo "<script> alert('Please enter your address')</script>";
exit();
}

if($phno =='')
{
echo "<script> alert('Please enter valid phone number')</script>";
exit();
}

if(strlen($phno)!=10)
{
echo "<script> alert('Please enter 10digit valid phone number')</script>";
exit();
}

if($username =='')
{
echo "<script> alert('Please enter your username')</script>";
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

$check_email="select * from gasagency where g_email='$email'";

$run=mysql_query($check_email);

if(mysql_num_rows($run)>0)
{
echo "<script> alert('Email already exists') </script>";
exit();
}

$query= "insert into gasagency(username,password,g_name,g_address,g_phno,g_email) values ('$username','$password','$name','$address','$phno','$email')";

if(mysql_query($query))
{

echo "<script> alert('User is Succussfully registered')</script>";

}


}


?>
