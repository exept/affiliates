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
		<div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
                <div class="item active">
                        <a href="booking.html"><img src="themes/css/images/carousel/bannerimg1.jpg" alt=""/></a>
                </div>
                <div class="item">
                        <a href="booking.html"><img src="themes/css/images/carousel/bannerimg3.png" alt="bannerimg3"/></a>
                         <div class="carousel-caption">
                          <h4>AFFILATE MARKETING SOLUTION </h4>
                          <p>For Your Store</p>
                          <p> 
                          Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                          Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Nullam id dolor id nibh ultricies vehicula ut id elit.
                          </p>
                        </div>
                </div>
                <div class="item">
                        <a href="booking.html"><img src="themes/css/images/carousel/bannerimg4.jpg" alt=""/></a>
                </div>
                <div class="item">
                        <a href="booking.html"><img src="themes/css/images/carousel/bannerimg2.jpg" alt=""/></a>
                        <div class="carousel-caption">
                          <h4>Your slogan goes here</h4>
                         <p> 
                          Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                          Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Nullam id dolor id nibh ultricies vehicula ut id elit.
                          </p>
                        </div>
                </div>  
        </div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>
				<h1>Welcome!</h1>
		<hr/>
		<p class="msg"><em>
		"I'm a paragraph. Click here to add your own text and edit me.I am a great place for you to tell a story and 
		let your users know a little more about you. I'm a paragraph. Click here to add your own text and edit me.I am a great place for you to tell a story and 
		let your users know a little more about you. I'm a paragraph. Click here to add your own text and edit me.I am a great place for you to tell a story and 
		let your users know a little more about you."
		<br/><strong>-Kim Cleary </strong></em>
		</p>
		<hr/>
		<div class="row">
		<div class="span12">
		  <ul id="boxWrap" class="thumbnails">
			<li class="span3">
			  <div class="thumbnail">
				<div class="caption">
				 <img src="themes/css/images/aff1.jpg" alt="">
				  <h4>Affiliate Software Made Easy</h4>
				  <p> 
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.<br/>
				  </p>
				  <a id="blockOne" class="btn btn-success" href="detail1.html" >more</a>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<div class="caption">
				<img src="themes/css/images/aff2.jpg" alt=""/>
				  <h4>Easily Recruit and Manage Your Affiliates</h4>
				  <p> 
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.<br/>
				  </p>
				 <a id="blockTwo" class="btn btn-info" href="detail2.html" >more</a> 
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<div class="caption">
				<img src="themes/css/images/aff3.jpg" alt=""/>
				  <h4>Integrates with Everything</h4>
				  <p> 
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.<br/>
				  </p>
				  <a id="blockThree" class="btn btn-info" href="detail3.html">more</a>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<div class="caption">
				 <img src="themes/css/images/aff4.jpg" alt=""/>
				  <h4>Provide Affiliates with Multiple Creatives</h4>
				  <p> 
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.<br/>
				  </p>
				  <a id="blockFour" class="btn btn-info" href="detail4.html">more</a>
				</div>
			  </div>
			</li>
		  </ul>
		</div>
		</div>
	
		<div id="book" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="book" aria-hidden="false">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
			<h3> Online Booking your appointment</h3>
		  </div>
		<form class="form-horizontal">
		  <div class="modal-body">
			<div class="alert alert-error">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
			</div>	  
				<fieldset>
				<div class="control-group">
					  <select class="input-xlarge"><option>Services</option></select>
				  </div>
				<div class="control-group">
					  <input type="text" placeholder="Date" class="input-xlarge"/>
				  </div>
				  <div class="control-group">
					  <input type="text" placeholder="Time" class="input-xlarge"/>
				  </div>
				  <div class="control-group">
					  <input type="text" placeholder="name" class="input-xlarge"/>
				  </div>
				   <div class="control-group">
					  <input type="text" placeholder="email" class="input-xlarge"/>
				  </div>
				   <div class="control-group">
					  <input type="phone" placeholder="phone" class="input-xlarge"/>
				  </div>
				  <div class="control-group">
					  <textarea rows="4" placeholder="notes" id="textarea" class="input-xlarge"></textarea>
				  </div>
				</fieldset>
		  </div>
                    <div class="modal-footer">
                          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                          <button class="btn btn-primary">Confirm</button>
                    </div>
		</form>
		</div>
 <!-- Footer
 ================================================== -->
<?php include_once 'footer.php';?>
<br/>
</div><!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>	
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
	// carousel demo
    $('#myCarousel').carousel()
	</script>
</body>
</html>
