<?php 
include("inc_db.php");
open_db();

$query = $_POST[query];

$sql = "SELECT * FROM login WHERE username = '$query'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$row_total = mysqli_num_rows($result);
if ($row_total > 0){
	session_start();
	$_SESSION['sid'] = $row['username'];
	$_SESSION['marks'] = $row['marks'];
	header("location:main.php");
} else {
	setcookie("msg","There is no record under this student ID",time()+60);
	header("location:query.php");
}

?>