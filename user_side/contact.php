<?php
	$conn=new mysqli("localhost","root","","fms");

	require_once('header.php');

	if(isset($_REQUEST['feedback']))
	{
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$subject=$_REQUEST['subject'];
		$message=$_REQUEST['message'];

		$ins="insert into visitor_feedback(name,email,subject,message) values('$name','$email','$subject','$message')";
		if($que=$conn->query($ins))
		{
			echo "Thank you for your valueble feedback";
		}
		else
		{
			echo "Data not inserted";
		}

	}


?>

		<!-- contact -->
		<div class="contact">
			<!-- container -->
			<div class="container" style="background-color: #F0F8FF">
				<div class="contact-info">
					<h3 class="c-text">Get in Touch</h3>
				</div>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d387144.0363579609!2d-73.97967999999999!3d40.70562585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1420306161351" frameborder="0" style="border:0"></iframe>
				</div>
				<div class="contact-grids">
					
						
						<div class="contact-info-grids">	

							<form name="contact" id="contact">
								<input type="text" placeholder="Name"  name="name" required>
								<input type="text" id="email" placeholder="Email"  name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required>
								<input type="text" placeholder="Subject"  name="subject" required>
								<textarea placeholder="Message" name="message" required></textarea>
								<input type="submit" value="SEND" name="feedback">
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