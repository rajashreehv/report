


<html>
<head>
<title> CUSTOMER REGISTRATION FORM</title>
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


input[type=button] {
    width: 80%;
	position:right;
	font-weight:bold;
    background-color: #4CAF50;
    color: white;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=button]:hover{
background-color: grey;
    border: none;
    color: black;
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
	
	
	
	
div {
    height: 300px;
    width: 300px;
	position:absolute;
    top: 50px;
    right: 550px;
	border-radius: 10px;
    background-color: #f2f2f2;
    padding: 20px;
	
	
	
	
}
</style>



<body background="bl12.jpg" ></body>

<body>

<div>
<form method="post" action="">
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>CUSTOMER&nbsp&nbspLOGIN&nbsp&nbspFORM</b></u></label><br><br>

<label for="name"><b>User name:</b></label> 
<input placeholder="Enter your name" type="text" name="username" /></br>

<label for="address"><b>Password:</b></label> 
<input placeholder="Enter your password" type="password" name="password" /></br>
&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 



&nbsp&nbsp&nbsp&nbsp&nbsp&nbspClick here for &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="button" color="black"  value="REGISTRATION PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Customer_reg.php"; } </script></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbspClick here for &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="button" color="black"  value="START PAGE" onclick="fun2()"/>
<script> function fun2() { window.location="Startpage.html"; } </script></br>






</form>
</div>
</body>



<?php
session_start();

if(isset($_POST['submit']))
{
mysql_connect("localhost","root","");
mysql_select_db("miniproject") or die("cannot connect to the database");
$username=$_POST['username'];

 $password=$_POST['password'];
 
 

if($username =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}


$query=mysql_query("select * from customer where username='$username' and password='$password'") or die(mysql_error());
   
   if(mysql_num_rows($query)>0)
   {
   $_SESSION['username']=$username;
   
    //echo "<script> window.open('customer_home.php','_self')</script>";
	header("location: Customer_home.php.html?id=".$username);
   }
   else
   {
    echo "<script> alert('Invalid Login')</script>";
   }
}

?>

</body>
</html>