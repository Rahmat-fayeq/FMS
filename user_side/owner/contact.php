<?php

	include('control.php');

	if(!$_SESSION['email'])
    {
        header('location:../login.php');
    }


	require_once('header.php');
?>


		<!-- contact -->
		<div class="contact">
			<!-- container -->
			<div class="container" style="background-color:#F0F8FF">
				<div class="contact-info">
					<h3 class="c-text">Get in Touch</h3>
				</div>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d387144.0363579609!2d-73.97967999999999!3d40.70562585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1420306161351" frameborder="0" style="border:0"></iframe>
				</div>
				<div class="contact-grids">
				<!--	<div class="col-md-4 contact-grid-left">
						<h3>Address :</h3>
						<p>The Company Name agi.
						<span>756 gt globel Place,</span>
							CD-Road,M 07 435.
						</p>
					</div>
					<div class="col-md-4 contact-grid-middle">
						<h3>Phones :</h3>
						<ul>
							<li>Ph 1: +1 123 456 7890</li>
							<li>Ph 2: +1 123 456 7890</li>
						</ul>
					</div>
					<div class="col-md-4 contact-grid-right">
						<h3>E-mail :</h3>
						<a href="mailto:info@example.com">mail@example.com</a>
					</div> 
					<div class="clearfix"> </div>
					<div class="contact-info">
						<div class="contact-info-text">
							<h3>Miscellaneous information :</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus finibus orci eget fermentum sagittis. 
								Nullam non consequat ante, in interdum velit. Sed quis diam orci. Phasellus pulvinar hendrerit enim ut placerat. 
								Vivamus convallis mollis consectetur. Mauris gravida venenatis vehicula. In tempor enim in iaculis imperdiet.
							</p>
						</div>	-->
						<div class="contact-info-grids">
							<form>
								<input type="text" placeholder="Name" name="name" required="">
								<input type="text" placeholder="Email" id="email" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required="">
								<input type="text" placeholder="Subject" name="subject" required="">
								<textarea placeholder="Message" required="" name="message"></textarea>
								<input type="submit" value="SEND" name="feeback">
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //contact -->
	
<?php
	require_once('footer.php');
?>