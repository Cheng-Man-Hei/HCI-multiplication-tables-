<?php

$connect="";

function open_db(){
	global $connect;
	$connect=mysqli_connect("localhost","root","98669746","login");
	if(mysqli_connect_error()){
		echo("Database connected failure");
		exit();
	}
}

function t_open_db(){
	global $connect;
	$connect=mysqli_connect("localhost","root","98669746","t_login");
	if(mysqli_connect_error()){
		echo("Database connected failure");
		exit();
	}
}
?>