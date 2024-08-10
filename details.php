<?php session_start();
//error_reporting(0);
include('hms/admin/include/config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor Details</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="hms/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="hms/vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="hms/vendor/themify-icons/themify-icons.min.css">
		<link href="hms/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="hms/vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="hms/vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="hms/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="hms/vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="hms/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="hms/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="hms/assets/css/styles.css">
		<link rel="stylesheet" href="hms/assets/css/plugins.css">
		<link rel="stylesheet" href="hms/assets/css/themes/theme-1.css" id="skin_color" />


	</head>
	<body>
		<div id="app">		
			<div class="app-content">
				
				<!-- end: TOP NAVBAR -->
				<div>
					<div>
						<!-- start: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div >
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-body">
									<?php $sql=mysql_query("select * from doctors where doctorName='{$_GET['doc']}'");
while($data=mysql_fetch_array($sql))
{
?>
													<form role="form" name="adddoc" method="post" onSubmit="return valid();">
														<div class="form-group">
															<label for="DoctorSpecialization">
																Doctor Specialization
															</label>
							<select name="Doctorspecialization" readonly class="form-control" required="required">
					<option value="<?php echo htmlentities($data['specilization']);?>">
					<?php echo htmlentities($data['specilization']);?></option>
<?php 
?>
															
																
															</select>
														</div>

<div class="form-group">
															<label for="doctorname">
																 Doctor Name
															</label>
	<input type="text" name="docname" class="form-control"  readonly value="<?php echo htmlentities($data['doctorName']);?>" readonly>
														</div>


<div class="form-group">
															<label for="address">
																 Doctor Clinic Address
															</label>
					<textarea name="clinicaddress" readonly class="form-control"><?php echo htmlentities($data['address']);?></textarea>
														</div>
<div class="form-group">
															<label for="fess">
																 Doctor Consultancy Fees
															</label>
		<input type="text" name="docfees" class="form-control" required="required"  readonly  value="<?php echo htmlentities($data['docFees']);?>" >
														</div>
	
<div class="form-group">
									<label for="fess">
																 Doctor Contact no
															</label>
					<input type="text" name="doccontact" class="form-control" required="required"  readonly value="<?php echo htmlentities($data['contactno']);?>">
														</div>

<div class="form-group">
									<label for="fess">
																 Doctor Email
															</label>
					<input type="email" name="docemail" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['docEmail']);?>">
														</div>



														
														<?php } ?>
														
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="hms/vendor/jquery/jquery.min.js"></script>
		<script src="hms/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="hms/vendor/modernizr/modernizr.js"></script>
		<script src="hms/vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="hms/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="hms/vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="hms/vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="hms/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="hms/vendor/autosize/autosize.min.js"></script>
		<script src="hms/vendor/selectFx/classie.js"></script>
		<script src="hms/vendor/selectFx/selectFx.js"></script>
		<script src="hms/vendor/select2/select2.min.js"></script>
		<script src="hms/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="hms/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="hms/assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="hms/assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>