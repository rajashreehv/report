
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
	input[type=button1] {
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
	
	input[type=button1]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
	
div {
    height: 590px;
    width: 400px;
	position:absolute;
    top: 10px;
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
  
   <th> Gasagency ID </th>
   <th>gasagency Name</th>
   
   

</tr>

</body>

<body background="bl12.jpg">
<div>
<form method="post" action="">
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>CUSTOMER&nbsp&nbspBOOKING&nbsp&nbspFORM</b></u></label><br><br>

<label for="phno"><b>Customer Id:</b></label> 
<input placeholder="Enter your customer id" type="text" name="c_id" /></br>

<label for="password"><b>Booking date:</b></label> 
<input placeholder="Enter your booking date" type="date" name="b_date"/></br>


<label for="name"><b>Number of gas booked:</b></label> 
<input placeholder="Enter  the number of gas booked" type="number" name="no_of_gasbooked" min="1" max="5" /></br>
<label for="password"><b>Gas type:</b></label> 

<select name="g_type">
<option value="Select"> Select</option>
<option value="Domestic"> Domestic</option>
<option value="Commercial"> Commercial</option>
</select>

<label for="address"><b>Gas agency Id:</b></label> 
<input placeholder="Enter the gas id" type="text" name="g_id" /></br>



&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>




Click here for &nbsp&nbsp
<input type="button" color="black"  value="VIEW DETAILS" onclick="fun1()"/>
<script> function fun1() { window.location="booking_view_details.php"; } </script></br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="UPDATE " onclick="fun2()"/>
<script> function fun2() { window.location="bo_updatedelete.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="DELETE " onclick="fun3()"/>
<script> function fun3() { window.location="bo_updatedelete1.php"; } </script></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun4()"/>
<script> function fun4() { window.location="Customer_home.php.html"; } </script></br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun5()"/>
<script> function fun5() { window.location="Logout_customer.php"; } </script></br>



</form>
</div>


</body>


</html>


<?php

session_start();
$c=$_SESSION['username'];
if(!isset($_SESSION['username']))
{
	header("location: Customer_login.php");
}





$con=mysql_connect("localhost","root","");
mysql_select_db("miniproject") or die("cannot connect to the database");

$query1="select * from gasagency";
$run=mysql_query($query1);

while ($row=mysql_fetch_array($run))
{

$id=$row[2];
$name=$row[3];

?>

<tr align='center' bgcolor='pink'>

<td>   <?php echo $id; ?></td>
<td>   <?php echo $name; ?> </td>




</tr>

<?php  }



$q="select c_id from customer where username='$c'";
$r=mysql_query($q);
while($row=mysql_fetch_array($r))
{
	
$c_id=$row[0];
}
echo "<p align='left'><font color=pink fnt face='arial' size='6pt'>Your customer id is:$c_id</font></p>";



 
        
 





if(isset($_POST['submit']))
{
 $c_id=$_POST['c_id'];
  $b_date=$_POST['b_date'];
 $no_of_gasbooked=$_POST['no_of_gasbooked'];
  $g_type=$_POST['g_type'];
  $g_id=$_POST['g_id'];
 

if($c_id=='')
{
echo "<script> alert('Please enter your id')</script>";
exit();
}

if($b_date =='')
{
echo "<script> alert('Please enter your booking date')</script>";
exit();
}

if($no_of_gasbooked =='')
{
echo "<script> alert('Please enter number of gas booked')</script>";
exit();
}
if($g_id=='')
{
echo "<script> alert('Please enter gas agency id')</script>";
exit();
}

if($g_type=='')
{
echo "<script> alert('Please enter gas agency type')</script>";
exit();
}


$query= "insert into booking(c_id,g_id,b_date,g_type,no_of_gasbooked) values ('$c_id','$g_id','$b_date','$g_type','$no_of_gasbooked')";

if(mysql_query($query))
{

echo "<script> alert('Booking Succussfully done')</script>";

}


}


?>
