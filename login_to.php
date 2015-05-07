
<?php
include('connection.php');

session_start();

$user = $_POST["user"];
$pass = $_POST["pass"];

$sql = "SELECT username, password FROM developer WHERE username='$user' and password='$pass'";
$res = $conn->query($sql);
if ($res->num_rows == 0) {
	echo "gagal login!";
	header('location: login.php');
	//print_r($_SESSION);
}	else
{
	$_SESSION["username"]=$user;

	if ($user == "admin") {
		header('location: beranda.php');
	} else {
		header('location: beranda_user.php');
	}
}




?>