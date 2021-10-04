<?php 
include("inc_db.php");
open_db();
session_start();

$username = $_POST[username];
$password = $_POST[password];
$sql = "SELECT * FROM login WHERE username = '$username' and password = '$password'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$row_total = mysqli_num_rows($result);
if ($row_total > 0){
	$_SESSION[username] = $username;
	header("location:index.php");
} else {
	setcookie("msg","Wrong username/password",time()+60);
	header("location:login.php");
}

?>