	<html>
	<head>
	<title>Form</title>
	</head>

	<body>

	<?php
	
	
	$dataarr = array(
//		"Nama Perusahaan" => $_POST["nama_perusahaan"];
//		"Alamat Perusahaan" => $_POST["alamat"];
//		"Alamat e-mail" => $_POST["email"];
//		"Website" => $_POST["web"];
//		"key" => $_POST["key"];
		"Nama Perusahaan" => "XY",
		"Alamat Perusahaan" => "XY",
		"Alamat e-mail" => "XY",
		"Website" => "XY",
		"key" => "XY"
	);

	$pk = "RAHASIA";

	//CSR Generation
	$csr = openssl_csr_new($dataarr, $pk);
	
	//export csr
	openssl_csr_export($csr, $csrout) and var_dump($csrout);

	//download the csr generated
	if (file_exists($csrout)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename($csrout));
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($csrout));
		readfile($csrout);
		exit;
	}
	// Show any errors that occurred here
	while (($e = openssl_error_string()) !== false) {
		echo $e . "\n";
	}

	?>

	</body>
	</html>
	
