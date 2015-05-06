	<html>
	<head>
	<title>Form</title>
	</head>

	<body>

	<?php
	
	//upload file to server
	$target_dir = "C:\xampp\htdocs\KIJ-Certificate";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$FileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// Allow certain file formats
	if($FileType != "csr") {
    echo "Sorry, only CSR file are allowed.";
    $uploadOk = 0;
	
	
	$usercsr = 'C:\xampp\htdocs\KIJ-Certificate\Certificate.crt';

	$CAdataarr = array(
    "countryName" => "INA",
    "stateOrProvinceName" => "Jawa Timur",
    "localityName" => "Surabaya",
    "organizationName" => "CA_ITS",
    "organizationalUnitName" => "CA",
    "commonName" => "CA",
    "emailAddress" => "CA@its.ac.id"
	);

	$CApk = openssl_pkey_new();

	//CA's CSR Generation
	$CAcsr = openssl_csr_new($CAdataarr, $CApk);
	
	//Create self-signed certificate for CA
	$CAcert = openssl_csr_sign($CAcsr, null, $CApk, 365);

	//Sign user's CSR into a CERT
	$usercert = openssl_csr_sign($Usercsr, $CAcert, $CAprivkey, 365);

	//export private key
	openssl_pkey_export($privkey, $pkeyout, "mypassword") and var_dump($pkeyout);

	//export user certificate
	openssl_x509_export($usercert, $usercertout) and var_dump($usercertout);

	openssl_x509_export_to_file($usercert, 'C:\xampp\htdocs\KIJ-Certificate\UserCertificate.crt', FALSE);
	
	// Show any errors that occurred here
	while (($e = openssl_error_string()) !== false) {
		echo $e . "\n";
	}

	?>

	</body>
	</html>