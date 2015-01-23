<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','nothingextravagant@gmail.com');
	define('MESSAGE_SUBJECT','Nothing Extravagant Subject');
	define('REPLY_TO', 'nothingextravagant@gmail.com');
	define('FROM_ADDRESS', 'nothingextravagant@gmail.com');
	define('REDIRECT_URL', 'index.php');
	
	require_once('validation.php');

?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>nothing extravagant</title>
<link rel="stylesheet" href="styles/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="styles/css/main.css">
<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />
<!-- FORM links -->
<link rel="shortcut icon" href="../../assets/ico/favicon.png">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" >
<link rel="stylesheet" href="assets/vender/intl-tel-input/css/intlTelInput.css">
<!-- END OF FORM links -->



</head>

<body>
<!-- Website content -->

<div class="container-fluid">

<!-- First row -->
<!-- Header Logo -->
	<div class="row">
			<div class="hidden-xs col-sm-4"></div>
		<div class="hidden-xs col-sm-4">
			<a href="index.php"><img src="images/logo/ne-logo-02.png" class="img-responsive main-logo" alt="nothing extravagant"></a>
		</div><!-- END OF column -->
		
			<div class="hidden-xs col-sm-4"></div>
		
	</div><!-- END OF row -->
	
<!-- Mobile Nav Bar -->
					
			<div class="col-xs-12 hidden-sm hidden-md hidden-lg">
			<br>
			<img src="images/menu-icon.png" width="50px" align="right" class="toggle-nav" alt="nothing extravagant menu"> 
				<nav class="mobile-nav toggle-info">
				<ul> <br><br><br>
				 	<?php include('inc/mobilenav.inc.php'); ?>
				</ul>
			</nav>
			
			
		</div><!-- END OF column -->
		
<!-- END OF Mobile Nav Bar -->	
	
<!-- MOBILE LOGO -->
	<div class="row">
		<div class="hidden-sm hidden-md hidden-lg col-xs-12">
		<br>
			<a href="index.php"><img src="images/logo/ne-logo-02.png" class="img-responsive main-photo" alt="nothing extravagant"></a>
			<br>
		</div><!-- END OF column -->
	</div><!-- END OF row -->
<!--END OF MOBILE LOGO -->

	
<!-- Second row -->	

	<div class="row">

		<div class="hidden-xs col-sm-2">
<!-- Tablet/Desktop Nav Bar -->		
			
			<nav class="fixed-nav">
				<ul>
				 	<?php include('inc/mainnav.inc.php'); ?>
				</ul>
			</nav>
			
			
<!-- END OF Tablet/Desktop Nav Bar -->				
		</div><!-- END OF column -->
			


<!-- Contact Toggle Info for Mobile -->
	
		<div class="col-xs-12 hidden-sm hidden-md hidden-lg">
				<br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs">
			<h4 class="toggle underlined">EMAIL +</h4>
				<p>nothingextravagant@gmail.com</p>
				
			<h4 class="toggle underlined">INSTAGRAM +</h4>
				<a href="http://instagram.com/Nothingextravagant">@nothingextravagant</a>
				
			<h4 class="toggle underlined">FACEB00K +</h4>
				<a href="https://www.facebook.com/pages/Nothing-Extravagant/718067788289517">www.facebook.com/pages/Nothing-Extravagant/718067788289517</a>
				</div><!-- END OF column -->
						
<!-- END OF Contact Toggle Info for Mobile -->	


<!-- Main Content Column -->		
			<div class="col-xs-12 col-sm-6">
				<br>
				
				<h1 class="underlined">C0NTACT NE</h1>
				<p><i>Random Questions? Wholesale? Design Ideas? Collabs? Returns?</i></p>
				<br>
				

			<?php include('inc/form.php'); ?>
			
			<br><br><br>
				
				
				
				
			</div> <!-- column size ender -->
<!-- END OF Main Content Column -->		
		
			<div class="hidden-xs col-sm-4">
				<br><br><br><br>
				<h4 class="toggle underlined">EMAIL +</h4>
				<p class="toggle-info">nothingextravagant@gmail.com</p>
				
				<h4 class="toggle underlined">INSTAGRAM +</h4>
				<a href="http://instagram.com/Nothingextravagant" class="toggle-info">@nothingextravagant</a>
				
				<h4 class="toggle underlined">FACEBOOK +</h4>
				<a href="https://www.facebook.com/pages/Nothing-Extravagant/718067788289517" class="toggle-info">www.facebook.com/pages/Nothing-Extravagant/718067788289517</a>
				
</div><!-- END OF column -->
	</div><!-- END OF row -->
	
			
	
<!-- Mobile Footer row -->
	
	<div class="row">
		<div class="hidden-sm hidden-md hidden-lg col-xs-12">
			<hr>
			<p class="align-center"><strong>Nothing Extravagant 2014 ©</strong></p>
			<br>
		</div><!-- END OF column -->
	</div><!-- END OF row -->


</div><!-- END OF Container-Fluid -->
<!-- END OF Website content -->

<!-- jQuery -->
   
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/main.js"></script>
<script>
      $(document).foundation();
</script>
<script src="js/bootstrap.min.js"></script>
<script src="assets/vender/intl-tel-input/js/intlTelInput.min.js"></script>
<script src="assets/js/contact-form.js"></script>
    
    
</body>
</html>
