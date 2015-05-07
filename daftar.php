<?php
	include 'connection.php';
	$nama = $_POST['user'];
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	$query= "INSERT INTO developer(username,nama,password)
	VALUES('$username','$nama','$password')";
	if(mysqli_query($conn, $query))
		header("location:login.php?status=ok");
	else
	  	header("location:register.php?status=gagal");
?>
	
