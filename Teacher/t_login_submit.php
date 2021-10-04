<?php 
include("inc_db.php");
t_open_db();

$username = $_POST[username];
$password = $_POST[password];
$sql = "SELECT * FROM t_login WHERE username = '$username' and password = '$password'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$row_total = mysqli_num_rows($result);
if ($row_total > 0){
	header("location:query.php");
} else {
	setcookie("msg","Wrong username/password",time()+60);
	header("location:t_login.php");
}

?>