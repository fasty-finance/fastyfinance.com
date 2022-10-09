<?php include 'header.php';?>
<section class="section-banner-header">
<img src="image/contact_banner.jpg" class="img-responsive bannerabout" alt="banner-header">
<div class="container">
	<div class="row">
			<div class="abtpg_banner-title">
				<h2>Contact Us</h2>
				<img src="image/icon/line.png" class="img-responsive title_line" alt="line">
				
			</div>
	</div>
</div>

</section>

<section class="section_aboutpage2">

	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="contact_details">
					<div class="location">
						
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3">
									<img src="image/icon/location.png" class="img-responsive addressicon" alt="">
							</div>
							<div class="col-md-9 col-sm-9 col-xs-9">
							<p><b>Address :</b> Office No.302, Sai Business Park,<br> Bldg.No.05, 
									Opposite Pune Railway Station<br> Pune, Pin-411001.
									 
								</p>
							</div>
						</div>
							<!-- <div class="con">
							
							</div> -->
						</div>
					

					<div class="phone">
						
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3">
								<img src="image/icon/phone.png" class="img-responsive addressicon" alt="">
							</div>
							<div class="col-md-9 col-sm-9 col-xs-9">
									<p><b>Phone : </b> +91-7977137679</p>
							</div>
						</div>

					</div>

					<div class="email">
						
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3">
									<img src="image/icon/email.png" class="img-responsive addressicon" alt="">
							</div>
							<div class="col-md-9 col-sm-9 col-xs-9">
									<p><b>Email :</b> fastyfinance@gmail.com</p>
							</div>
						</div>
					</div>

					</div>
				</div>
		
			<div class="col-md-7">
				<div class="getintouch-col2">
					<div class="form-title">
						<h2>Get in touch</h2>
						<hr width="20%"align="left">
					</div>
					<div class="form0-getintouch">
					<form action="send_form_email.php" method="POST">

		 						<div class="form-group col-md-12 col-sm-12 col-xs-12">
		    						<input type="text" name="first_name" class="form-control" placeholder="Enter Your Full Name" required>
		  						</div>

		  						<div class="form-group col-md-12 col-sm-12 col-xs-12">
		    						<input type="text" name="phone" class="form-control" placeholder="Enter Your Mobile No." required>
		  						</div>

		  						<div class="form-group col-md-12 col-sm-12 col-xs-12">
		    						<input type="email" name="email" class="form-control" placeholder="Enter Your Email Address" required>
		  						</div>

		  						<div class="form-group col-md-12 col-sm-12 col-xs-12">
		    						<textarea name="message" class="form-control" placeholder="Message" rows="3" required></textarea>
		  						</div>
 
  
  								<button type="submit" class="btn btn-default home-frmsubmit center-block">SUBMIT</button>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
</section>
<?php include 'footer.php';?>