

<?php

$con=mysql_connect("localhost","root","");

if (!$con)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db("miniproject", $con);
print "<h2 align='center'>CREATION of MySQL Trigger In PHP</h2>";
print "<h4 align='center'>Booking Table Content</h4>";
$result = mysql_query("select * from booking");

echo "<table border='1' align='center'>

<tr>
<tr bgcolor ='purple'>
<th>ID</th>
<th>customer id</th>
<th>gas id</th>
<th>booking date</th>
<th>gas type</th>
<th>no of gas booked</th>
</tr>";

while($row = mysql_fetch_array($result))

{

echo "<tr>";
echo "<tr  bgcolor='pink'>";
echo "<td>" . $row['b_id'] . "</td>";
echo "<td>" . $row['c_id'] . "</td>";
echo "<td>" . $row['g_id'] . "</td>";
echo "<td>" . $row['b_date'] . "</td>";
echo "<td>" . $row['g_type'] . "</td>";
echo "<td>" . $row['no_of_gasbooked'] . "</td>";
echo "</tr>";

}

echo "</table>";
print "<h4 align='center'>Total Customer Table Content</h4>";

$result1 = mysql_query("select * from total_customer");

echo "<table border='1' align='center'>

<tr>
<tr bgcolor ='purple'>
<th>ID</th>

<th>gas type</th>

<th>Number of customer</th>

</tr>";

while($row = mysql_fetch_array($result1))

{

echo "<tr  bgcolor='pink'>";

echo "<td>" . $row['id'] . "</td>";

echo "<td>" . $row['g_type'] . "</td>";
echo "<td>" . $row['no_of_customer'] . "</td>";


echo "</tr>";

}

echo "</table>";

$sql = "CREATE TRIGGER MysqlTrigger1 AFTER INSERT ON booking FOR EACH ROW UPDATE total_customer SET no_of_customer=no_of_customer+1 WHERE g_type=NEW.g_type;";

mysql_query($sql,$con);

if( isset($_POST['submit']) )
	{
		$a = $_POST['c_id'];
		$b = $_POST['g_id'];
		$c = $_POST['b_date'];
		$d = $_POST['g_type'];
		$e = $_POST['no_of_gasbooked'];
		
		
		$qry = mysql_query("insert into booking(c_id,g_id,b_date,g_type,no_of_gasbooked) values('$a','$b','$c','$d','$e')");


mysql_query($qry,$con);
	}
	
 
?>
<style>

input[type=submit] {
    width: 10%;
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
input[type=reset] {
    width: 10%;
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

input[type=reset]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
 input[type=text], select {
    width: 20%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}	
	input[type=date], select {
    width: 20%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}	
	
	
</style>
<body background="bl12.jpg" >
</body>


<form method="post" action="">

<label for="password"><b>Customer id:</b></label> &nbsp
<input placeholder="Enter Customer id" type="text" name="c_id"/></br>

<label for="password"><b>Gas id:</b></label>  &nbsp
<input placeholder="Enter Gas id" type="text" name="g_id"/></br>
<label for="password"><b>Booking date:</b></label>  &nbsp
<input placeholder="Enter Booking date" type="date" name="b_date"/></br>
<label for="password"><b>Gas type:</b></label>  &nbsp
<input placeholder="Enter Gas type" type="text" name="g_type"/></br>
<label for="password"><b>Number of gas booked:</b></label>  &nbsp
<input placeholder="Enter Number of gas booked" type="text" name="no_of_gasbooked"/></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" name="reset" value="RESET"  /> </br>

</form>

<?php


print "<h4 align='center'>Booking Table Content</h4>";
$result = mysql_query("select * from booking");

echo "<table border='1' align='center'>

<tr>
<tr bgcolor ='purple'>

<th>ID</th>
<th>customer id</th>
<th>gas id</th>
<th>booking date</th>
<th>gas type</th>
<th>no of gas booked</th>

</tr>";

while($row = mysql_fetch_array($result))

{

echo "<tr  bgcolor='pink'>";

echo "<td>" . $row['b_id'] . "</td>";
echo "<td>" . $row['c_id'] . "</td>";
echo "<td>" . $row['g_id'] . "</td>";
echo "<td>" . $row['b_date'] . "</td>";
echo "<td>" . $row['g_type'] . "</td>";
echo "<td>" . $row['no_of_gasbooked'] . "</td>";

echo "</tr>";

}

echo "</table>";
print "<h4 align='center'>Total Customer Table Content</h4>";

$result1 = mysql_query("select * from total_customer");

echo "<table border='1' align='center'>

<tr>
<tr bgcolor ='purple'>

<th>ID</th>

<th>gas_type</th>

<th>no_of_customer</th>

</tr>";

while($row = mysql_fetch_array($result1))

{

echo "<tr bgcolor='pink'>";

echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['g_type'] . "</td>";
echo "<td>" . $row['no_of_customer'] . "</td>";

echo "</tr>";

}

echo "</table>";

mysql_close($con);
print "</body>";

?>
<a href="Customer_home.php.html"><h1>Click here to Go Back</h1></a>