	<html>
	<head>
	<title>Form</title>
	</head>

	<body>

	<?php
	
//	$usercsr = readfile
	
	$CAdataarr = array(
		"Nama Perusahaan" => "KIJ inc."
		"Alamat Perusahaan" => "Keputih"
		"Alamat e-mail" => "KIJ@its.ac.id"
		"Website" => "www.KIJ.com"
	);

	$CApk = "RAHASIA";

	//CA's CSR Generation
	$CAcsr = openssl_csr_new($CAdataarr, $CApk);
	
	//Create self-signed certificate for CA
	$CAcert = openssl_csr_sign($CAcsr, null, $CApk, 365);

	//Sign user's CSR into a CERT
	$usercert = openssl_csr_sign($Usercsr, $CAcert, $CAprivkey, 365);

	//export user certificate
	openssl_x509_export($usercert, $usercertout) and var_dump($usercertout);

	// Show any errors that occurred here
	while (($e = openssl_error_string()) !== false) {
		echo $e . "\n";
	}

	?>

	</body>
	</html>