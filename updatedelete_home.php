<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['username']))
{
header("location: admin_login.php");
}
?>


<html>
<head>
<title>HOME</title>
</head>
<marquee behavior="scroll" direction="left"><font color="purple" size="6"><b><strong>WELCOME TO THE HOME PAGE..!</strong></b></font></marquee>

<style>
input[type=submit] {
    width: 200%;
	position:right;
    background-color: grey;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	font-weight:bold;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
	
	div 
	{
   	position:absolute;
    right:750px;
    padding:10px;
	font-weight:bold;
	}
	
</style>
<body background="bl12.jpg" ></body>

<body>

<div>
<a href="admin_bo_updatedelete.php" font face="verdana"><input type="submit" color="black"  value="BOOKING UPDATE DELETE"></br>
<a href="admin_delivery_updatedelete.php" font face="verdana"><input type="submit" color="black"  value="DELIVERY UPDATE DELETE"></br>
<a href="admin_feedback_updatedelete.php" font face="verdana"><br><input type="submit" color="black"  value="FEEDBACK UPDATE DELETE"></br>
<a href="admin_gasagency_updatedelete.php" font face="verdana"><br><input type="submit" color="black"  value="GASAGENCY UPDATE DELETE"></br>
<a href="admin_customer_updatedelete.php" font face="verdana"><br><input type="submit" color="black"  value="CUSTOMER UPDATE DELETE"></br>

<a href="Admin_home.php.html" font face="verdana"><br><input type="submit" color="black"  value="LOGOUT"></br>

</div>
</body>
</html>
