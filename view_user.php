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
			<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="#">ZOLCERT</a> 
	            </div>
	            <div style="color: white;
	                padding: 15px 50px 5px 50px;
	                float: right;
	                font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> 
	            </div>

			</nav> 
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
                        	<form method="POST" action="CSR_Gen_for_user.php" role="form">
                        		<div class="form-group">
                        			<label>Negara</label>
                        			<select class="form-control" name="negara">
                        			<option value="">Pilih...</option>
                        			<option value="US">Amerika Serikat</option>
                        			<option value="BR">Brazil</option>
                        			<option value="ID">Indonesia</option>
                        			<option value="JP">Jepang</option>
                        			<option value="CA">Kanada</option>
                        			<option value="ZM">Zambia</option>
                        			</select>
                        		</div>
                        		<div class="form-group">
                        			<label>Provinsi</label>
                        			<input class="form-control" name="prov">
                        		</div>
                        		<div class="form-group">
                        			<label>Kota</label>
                        			<input class="form-control" name="kota">
                        		</div>
								<div class="form-group">
                        			<label>Nama Organisasi</label>
                        			<input class="form-control" name="org">
                        		</div>
								<div class="form-group">
                        			<label>Unit Organisasi</label>
                        			<input class="form-control" name="unit">
                        		</div>
								<div class="form-group">
                        			<label>Nama</label>
                        			<input class="form-control" name="nama">
                        		</div>
								<div class="form-group">
                        			<label>Email</label>
                        			<input class="form-control" name="email">
                        		</div>
                        		<div class="form-group">
                        			<label>Kunci Publik</label>
                        			<input class="form-control" name="pubkey">
                        		</div>
                        		<div class="form-group">
                        			<label>Durasi</label>
                        			<select class="form-control" name="durasi">
                        			<option value="">Pilih...</option>
                        			<option value="365">1 Tahun</option>
                        			<option value="730">2 Tahun</option>
                        			<option value="1095">3 Tahun</option>
                        			<option value="1460">4 Tahun</option>
                        			<option value="1825">5 Tahun</option>
                        			</select>
                        		</div>
                        		<div class="form-group pull-right" role="group">
	                        		<button class="btn btn-success" type="submit" name="update">Make It</button>
                        		</div>
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