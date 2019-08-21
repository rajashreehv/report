<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Admin Login<h1>
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Admin Name:</td><td><input type='text' name='ad'/></td></tr>
<tr><td>Admin Password :</td><td><input type='text' name='ps'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['admin'])!="")
{
 header("Location: Customer_home.php.html");
}
if(isset($_POST['submit']))
{
 $name = mysql_real_escape_string($_POST['ad']);
 $upass = mysql_real_escape_string($_POST['ps']);
 $res=mysql_query("SELECT * FROM admin WHERE name='$name'");
 $row=mysql_fetch_array($res);
 if($row['password']==$upass)
 {
  $_SESSION['admin'] = "admin";
  header("Location:Customer_home.php.html");
 }
 else
 {
 ?>
        <script>alert('error while loging in ...');</script>
        <?php
 }
 
}
?>


</body>
</html>