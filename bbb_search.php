

<style type='text/css'>
body { 
background : url("bl12.jpg");
background-repeat:no-repeat;
 background-size: 100%;

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
input[type=no_of_gasbooked], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=no_of_gasbooked]:focus {
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
    height: 250px;
    width: 370px;
	position:absolute;
    top: 10px;
    right: 10px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>








<body>
<div>
<form action="bbb_search.php" method="get"><br/><br/>

<b>Search for the customer id here: </b><input type="number_format" name="value" placeholder="Search here" style="width:150px;height:35px;font:bold 15px Times New Roman;">&nbsp &nbsp
<input type="submit" name="search" value="Search Now" style="width:100px;height:35px;font:bold 15px Times New Roman;"></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="DELIVERY" onclick="fun1()"/>
<script> function fun1() { window.location="delivery.php"; } </script></br>

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

if(isset($_GET['search']))
{
$search_value=$_GET['value'];
$query=mysql_query("select * from booking where g_id like '$search_value%'") or die(mysql_error());
if(mysql_num_rows($query)>0)
{


?>


<table width='800' align='center border='5'>
<tr bgcolor ='violet'>
   <th>  book id </th>
  
    <th>c id</th>
	 <th>Gas id</th>
    <th>b date</th>
	 <th>no of gas booked </th>
   </tr>
<?php

//$run=mysql_query($query);

while($row=mysql_fetch_array($query))
{
	
$b_id=$row[0];
$c_id=$row[1];
$g_id=$row[2];
$b_date=$row[3];
$no_of_gasbooked=$row[4];


?>


<tr align='center' bgcolor='pink'>
<td>   <?php echo $b_id; ?></td>
<td>   <?php echo $c_id; ?> </td>
<td>   <?php echo $g_id; ?></td>
<td>   <?php echo $b_date; ?> </td>
<td>   <?php echo $no_of_gasbooked; ?></td>

</tr>

<?php
}
}
else
{
	echo "<script>alert('SEARCH IS UNSUCCESSFUL!!!')</script>";
}
}
?>
</html>
