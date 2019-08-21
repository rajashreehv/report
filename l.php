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
<body background="nn.png" ></body>

<body>

<div>
<a href="booking.php" font face="verdana"><input type="submit" color="black"  value="BOOKING"></br>
<a href="Customer_view_details.php" font face="verdana"><input type="submit" color="black"  value="VIEW DETAILS"></br>
<a href="Customer_update.php" font face="verdana"><br><input type="submit" color="black"  value="UPDATE DETAILS"></br>
<a href="Customer_password.php" font face="verdana"><br><input type="submit" color="black"  value="RESET PASSWORD"></br>
<a href="customer_search.php" font face="verdana"><br><input type="submit" color="black"  value="SEARCH"></br>
<a href="feedback.php" font face="verdana"><input type="submit" color="black"  value="FEEDBACK"></br>
<a href="startpage.html" font face="verdana"><br><input type="submit" color="black"  value="LOGOUT"></br>

</div>
</body>
</html>
