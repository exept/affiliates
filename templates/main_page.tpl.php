<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap clinic template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A professional HTML bootstrappage clinic templateto take your business online. Responsive clean design.">
    <meta name="author" content="bootstrapclinic">
    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="themes/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>

<body>
<div class="container">
  <!-- Navbar
    ================================================== -->
    <?php include_once 'header.php';?>
<!-- ================Carousel and pages======= -->
<div class="main_content">
    <?php 
                                    require_once(DIR_WS_CONTENT.$content.".tpl.php");
				?>
    
</div>
	
		
 <!-- Footer
 ================================================== -->
<?php include_once 'footer.php';?>
<br/>
</div>
    <script src="bootstrap/js/jquery.js"></script>	
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
	// carousel demo
    $('#myCarousel').carousel()
	</script>
</body>
</html>
