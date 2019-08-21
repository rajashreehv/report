<?php
session_start();
?>


<html>
<head>
<title>HOME</title>
</head>
<font color="pink" size="6"><center>  WELCOME TO THE GAS AGENCY SYSTEM</center></font>

<style>
input[type=submit] {
	height:50px;
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
		
		
	 top: 320px;	
	height:310px;
    width:200px;
   	position:absolute;
    right:750px;
    padding:10px;
	font-weight:bold;
	}
	
</style>
<body background="bl12.jpg" ></body>

<body>
<tr>
    <table align="center" width="500" border="0" cellspacing="0" cellpadding="0">
 	<td width="100"><iframe src="Scroll1.html" style="background:transparent; height:210px; width:1320px" 
                valign="center"  marginwidth=0 marginheight=0 hspace=0 vspace=0  frameborder= 0 scrolling="no"> </iframe></td>
         

 </tr>
    </table>

<div>
<a href="Customer_reg.php" font face="verdana"><input type="submit" color="black"  value="SIGNUP FOR CUSTOMER"></br>
<a href="gasagency_reg.php" font face="verdana"><input type="submit" color="black"  value="SIGNUP FOR GAS AGENCY"></br>
<a href="startpage.html" font face="verdana"><input type="submit" color="black"  value="HOME PAGE"></br>
</div>
</body>
</html>
