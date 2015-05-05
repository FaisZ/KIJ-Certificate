	<html>
	<head>
	<title>Form</title>
	</head>

	<body>

	<?php
	
	$dn = array(
    "countryName" => $_POST["negara"],
    "stateOrProvinceName" => $_POST["prov"],
    "localityName" => $_POST["kota"],
    "organizationName" => $_POST["org"],
    "organizationalUnitName" => $_POST["unit"],
    "commonName" => $_POST["nama"],
    "emailAddress" => $_POST["email"]
		);

		// Generate a new private (and public) key pair
		$privkey = openssl_pkey_new();

		// Generate a certificate signing request
		$csr = openssl_csr_new($dn, $privkey);

		// You will usually want to create a self-signed certificate at this
		// point until your CA fulfills your request.
		// This creates a self-signed cert that is valid for 365 days
		$sscert = openssl_csr_sign($csr, null, $privkey, 365);

		// Now you will want to preserve your private key, CSR and self-signed
		// cert so that they can be installed into your web server, mail server
		// or mail client (depending on the intended use of the certificate).
		// This example shows how to get those things into variables, but you
		// can also store them directly into files.
		// Typically, you will send the CSR on to your CA who will then issue
		// you with the "real" certificate.
		openssl_csr_export($csr, $csrout) and var_dump($csrout);
		openssl_x509_export($sscert, $certout) and var_dump($certout);
		openssl_pkey_export($privkey, $pkeyout, "mypassword") and var_dump($pkeyout);

		// Show any errors that occurred here
		while (($e = openssl_error_string()) !== false) {
			echo $e . "\n";
		}
		openssl_x509_export_to_file($sscert, 'C:\xampp\htdocs\KIJ-Certificate\Certificate.crt', FALSE);
		
	?>

	</body>
	</html>
	
