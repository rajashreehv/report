


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
    height: 400px;
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
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b> CUSTOMER&nbsp&nbspFEEDBACK</b></u></label><br><br>

<label for="phno"><b>Customer Id:</b></label> 
<input placeholder="Enter your customer id" type="text" name="c_id" /></br>

<label for="password"><b>Gas agency Id:</b></label> 
<input placeholder="Enter your gas agency id" type="text" name="g_id"/></br>


<label for="name"><b>comment:</b></label> 
<input placeholder="Enter the comment" type="text" name="comment" /></br>







&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="Admin_home.php.html"; } </script></br>


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
	
 $c_id=$_POST['c_id'];
  $g_id=$_POST['g_id'];
 $comment=$_POST['comment'];
 

if($c_id=='')
{
echo "<script> alert('Please enter your customer id')</script>";
exit();
}

if($g_id=='')
{
echo "<script> alert('Please enter your gas agency id')</script>";
exit();
}

if($comment =='')
{
echo "<script> alert('Please enter the comment ')</script>";
exit();
}








$query= "insert into feedback(c_id,g_id,comment) values ('$c_id','$g_id','$comment')";

if(mysql_query($query))
{

echo "<script> alert('Thank you for your feedback')</script>";

}


}


?>
