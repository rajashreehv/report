<?php
session_start();
session_destroy();
{
	header("location:gasagency_login.php");
}