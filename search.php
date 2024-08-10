<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Signs & Symptoms</title>
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
        			<?php include('hms/include/header.php');?>
					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
								
                                                                                            <h5 class="panel-title">Search Signs & Symptoms</h5>
												<div>
       <form name="f" action="">
            <input type="text"  class="form-control" name="key" autofocus/>
        </form><br/>
        <?php
            if(isset($_GET['key'])){
                include 'hms/admin/include/config.php';
                $query="select * from tblsigns where signs like '%{$_GET['key']}%' or symptoms like '%{$_GET['key']}%' ";
                $result=mysql_query($query);
                if(mysql_num_rows($result)>0){
                    ?>
                Showing results for <?php echo $_GET['key'];?><br/><br/>
                <table>
                    <?php
                    while($row=  mysql_fetch_assoc($result)){
                        ?>
                    <tr>
                        <td><a href="#">Signs: <?php echo $row['signs']; ?></a></td>
                    </tr>
                    <tr>
                        <td>Symptoms: <?php echo $row['symptoms']; ?></td>
                    </tr>
                    <tr>
                        <td>Precautions:<?php echo $row['treatment']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['specilization']; ?>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php
                                $res=mysql_query("select * from doctors where specilization='{$row['specilization']}'");
                                while($r=mysql_fetch_assoc($res)){
                            ?>
                            <a href='details.php?doc=<?php echo $r['doctorName']; ?>' target="_blank"><?php echo "Dr. ".$r['doctorName']; ?></a>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <?php
                    }
                }else{
                    echo "No data found";
                }
            }
        ?>
            </table>
											 
     									</div>
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
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	</body>
</html>
