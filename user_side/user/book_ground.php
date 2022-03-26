<?php
	include('control.php');

	if(!$_SESSION['em'])
    {
        header('location:../login.php');
    }

	include('header.php');

	$em=$_SESSION['email'];
	$sel="select * from owner_login where email='$em'";
	//echo $sel;
	//exit;
	$q=$conn->query($sel);
	$f=$q->fetch_object();
	$val=$f->oid;
//	echo $val;
//	exit;
?>

<div class="container" style="margin-top: 40px; margin-bottom: 40px;">


		<!-- gallery -->
		<div class="gallery">
			<!-- Page Starts Here -->
			<div class="content" style="margin-left: 12%;">

				<?php

					foreach($bookground as $b)
					{
					?>

						<div class="gallery">
						<div class="gallery-top">
							<div class="view view-tenth">
								<img src="../owner/<?php echo $b->img1; ?>" />
								<div class="mask">
									<h2>Our Gallery</h2>
									<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings</p>
									<a href="single.php?id=<?php echo $f->oid; ?>" class="info">Read More</a>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="../owner/<?php echo $b->img2; ?>" />
								<div class="mask">
									<h2>Our Gallery</h2>
									<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings</p>
									<a href="single.php" class="info">Read More</a>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="../owner/<?php echo $b->img3; ?>" />
								<div class="mask">
									<h2>Our Gallery</h2>
									<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings</p>
									<a href="single.php" class="info">Read More</a>
								</div>
							</div>
							
							<div class="clearfix"></div>
						</div>
					</div>
			
					<?php
					}
				?>

					
			</div>
			<!-- Page Ends Here -->
		</div>
		<!-- //gallery -->

</div>	
<?php
	include('footer.php');
?>