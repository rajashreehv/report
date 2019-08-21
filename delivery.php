
<head>
<title>User Register Form</title>

</head>

<style>
input[type=date], select {
    width: 100%;
    padding: 1px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=date]:focus {
    border: 1px solid #555;
}


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
    top: 20px;
    right: 450px;
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
</style>

<form action="" method="post">
<table width='300' align='center border='5'>
<tr bgcolor ='purple'>
  <th>Customer Id</th>
   <th> Gas  Id</th>
    
	
   <th>Customer address</th>
   <th>Booking date</th>
   
</tr>

<body background="bl12.jpg" >

</body>
<body>


<div>
<form method="post" action="">
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>&nbsp&nbspDELIVERY&nbsp&nbspPAGE</u></label><br><br>

<label for="phno"><b>Gas Id:</b></label> 
<input placeholder="Enter your gas id" type="text" name="g_id" /></br>

<label for="password"><b>Customer Id:</b></label> 
<input placeholder="Enter customer Id" type="text" name="c_id"/></br>


<label for="name"><b>Delivery Address:</b></label> 
<input placeholder="Enter the delivery address" type="text" name="del_address" /></br>

<label for="address"><b>Delivery date:</b></label> 
<input placeholder="Enter the delivery date" type="date" name="del_date" /></br>



<label for="email"><b>Price:</b></label> 
<input placeholder="Enter the price" type="number" name="price" min="500" max="1000" /></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="VIEW DETAILS" onclick="fun1()"/>
<script> function fun1() { window.location="delivery_view_details.php"; } </script></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun2()"/>
<script> function fun2() { window.location="gasagency_home.php.html"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="UPDATE" onclick="fun3()"/>
<script> function fun3() { window.location="delivery_updatedelete1.php"; } </script></br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun4()"/>
<script> function fun4() { window.location="Logout_gasagency.php"; } </script></br>


</form>
</div>




</html>


<?php

session_start();


$c=$_SESSION['username'];
if(!isset($_SESSION['username']))
{
	header("location: gasagency_login.php");
}

$con=mysql_connect("localhost","root","");
mysql_select_db("miniproject") or die("cannot connect to the database");


$query="select b.c_id,b.g_id,c.c_address,b.b_date from booking b,customer c where b.c_id=c.c_id";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{

$c_id=$row[0];
$g_id=$row[1];

$c_address=$row[2];
$b_date=$row[3];
?>

<tr align='center' bgcolor='pink'>

<td>   <?php echo $c_id; ?></td>
<td>   <?php echo $g_id; ?> </td>

<td>   <?php echo $c_address; ?></td>
<td>   <?php echo $b_date; ?> </td>



</tr>

<?php  }


$q="select g_id from gasagency where username='$c'";
$r=mysql_query($q);
while($row=mysql_fetch_array($r))
{
	
$g_id=$row[0];
}
echo "<p align='left'><font color=pink fnt face='arial' size='6pt'>Your gasagency id is:$g_id</font></p>";




if(isset($_POST['submit']))
{
$g_id=$_POST['g_id'];
  $c_id=$_POST['c_id'];
 $del_address=$_POST['del_address'];
  $del_date=$_POST['del_date'];
  $price=$_POST['price'];
 

if($g_id =='')
{
echo "<script> alert('Please enter your gas agency name')</script>";
exit();
}

if($c_id =='')
{
echo "<script> alert('Please enter your customer email')</script>";
exit();
}

if($del_address =='')
{
echo "<script> alert('Please enter delivery address')</script>";
exit();
}



if($del_date =='')
{
echo "<script> alert('Please enter the delivery date')</script>";
exit();
}

if($price=='')
{
echo "<script> alert('Please enter the price')</script>";
exit();
}








$query= "insert into delivery(g_id,c_id,del_address,del_date,price) values ('$g_id','$c_id','$del_address','$del_date','$price')";

if(mysql_query($query))
{

echo "<script> alert('READY TO DELIVERY !!!')</script>";

}


}


?>
