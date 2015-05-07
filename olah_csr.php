<!DOCTYPE html>
<?php
	
	include('connection.php');

	session_start();
	if (isset($_SESSION["username"]))
	{
		if ($_SESSION["username"]!="admin")
		{
			header('location: login.php');
		    exit;
		}		
	}
	else
	{
		header('location: login.php');
		exit;
	}
	
	$sql = "SELECT id_csr, username FROM csr";
	$res = $conn->query($sql);
	
?>

					<?php
						if ($res->num_rows==0)
						{
							echo "Belum ada CSR saat ini.";
						}
						else
						{
							$banyak = $res->num_rows;
							echo $banyak . "<br>";
							for ($i=0;$i<$banyak;$i++)
							{
								echo "hehe<br>";
								$row = $res->fetch_array(MYSQLI_ASSOC);
								echo
								"
										<a href='lihat_csr.php?id_csr=" . $row['id_csr'] . ">" . $row['username'] . '_' . $row['id_csr'] . "</a><br>
									";
							}
						}
						
					?>
