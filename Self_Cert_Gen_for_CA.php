
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
    "countryName" => $_POST["negara"],
    "stateOrProvinceName" => $_POST["prov"],
    "localityName" => $_POST["kota"],
    "organizationName" => $_POST["org"],
    "organizationalUnitName" => $_POST["unit"],
    "commonName" => $_POST["nama"],
    "emailAddress" => $_POST["email"]
	);

	$CApk = openssl_pkey_new();

	//CA's CSR Generation
	$CAcsr = openssl_csr_new($CAdataarr, $CApk);
	
	//Create self-signed certificate for CA
	$CAcert = openssl_csr_sign($CAcsr, null, $CApk, 365);

	//Sign user's CSR into a CERT
	//$usercert = openssl_csr_sign($Usercsr, $CAcert, $CAprivkey, 365);

	//export private key
	openssl_pkey_export($CApk, $pkeyout, "mypassword") and var_dump($pkeyout);
	openssl_pkey_export_to_file($CApk, 'C:\xampp\htdocs\KIJ-Certificate\CA\kunci.key');
	//export user certificate
	openssl_x509_export($CAcert, $usercertout) and var_dump($usercertout);

	openssl_x509_export_to_file($CAcert, 'C:\xampp\htdocs\KIJ-Certificate\CA\CACertificate.crt', FALSE);
	
	// Show any errors that occurred here
	while (($e = openssl_error_string()) !== false) {
		//echo $e . "\n";
	}

	?>
