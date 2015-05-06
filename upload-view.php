<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Zolacert</title>
		<!-- BOOTSTRAP STYLES-->
		<link href="assets/css/bootstrap.css" rel="stylesheet" />
		 <!-- FONTAWESOME STYLES-->
		<link href="assets/css/font-awesome.css" rel="stylesheet" />
		 <!-- MORRIS CHART STYLES-->
		<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
		<!-- CUSTOM STYLES-->
		<link href="assets/css/custom.css" rel="stylesheet" />
		 <!-- GOOGLE FONTS-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		<!-- TABLE STYLES-->
		<link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
		<!-- DATEPICKER STYLES-->
		<link href="assets/js/dataTables/bootstrap-datepicker.min.css" rel="stylesheet" />
		<!-- SELECT2 STYLES-->
		<link href="assets/css/select2.css" rel="stylesheet" />
		<link href="assets/css/select2-bootstrap.css" rel="stylesheet" />
		<!-- JQUERY SCRIPTS -->
		<script src="assets/js/jquery-2.1.3.min.js"></script>
		<!-- SELECT2 SCRIPTS-->
		<script src="assets/js/select2.js"></script>
		<script type="text/javascript">
		$(document).ready(function() 
		{
			$(".basic-select2").select2({
				allowClear: true
			});

			$(".catatan-select2").select2({
			});
		});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="page-wrapper">
				<div id="page-inner">

					<div class="row">
	                    <div class="col-md-12">
	                     	<h2>Pembuatan Certificate Authority</h2>
	                    </div>
	                </div>
	                <!-- /. ROW  -->
                    <hr />

                    <div class="row">
                        <div class="col-md-12">
								<form action="Self_Cert_Gen_for_CA.php" method="post" enctype="multipart/form-data">
								Select CSR file:
								<input type="file" name="fileToUpload" id="fileToUpload">
								<br>
								<input type="submit" value="Upload File" name="submit">
							</form>
                       	</div>
                    </div>
                    <!-- /. ROW  -->

				</div>
			</div>
			
		</div>
		<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
		<!-- BOOTSTRAP SCRIPTS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- METISMENU SCRIPTS -->
		<script src="assets/js/jquery.metisMenu.js"></script>
		 <!-- MORRIS CHART SCRIPTS -->
		 <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
		<script src="assets/js/morris/morris.js"></script>
		 <!-- DATA TABLE SCRIPTS -->
		<script src="assets/js/dataTables/jquery.dataTables.js"></script>
		<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
		<script>
			$(document).ready(function () {
				$('#dataTables-example').dataTable();
			});
		</script>
		<!-- CUSTOM SCRIPTS -->
		<script src="assets/js/custom.js"></script>
		<!-- DATEPICKER SCRIPTS -->
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<script>
			$('.datepicker-month').datepicker( {
				format: "mm-yyyy",
				viewMode: "months", 
				minViewMode: "months"
			});
			$('.datepicker').datepicker({
				format: 'mm/dd/yyyy'
			});
		</script>
	</body>
</html>


<!DOCTYPE html>
<html>
<body>


</body>
</html>