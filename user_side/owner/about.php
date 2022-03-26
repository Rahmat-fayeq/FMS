<?php
	include('control.php');

	if(!$_SESSION['email'])
    {
        header('location:../login.php');
    }

	require_once('header.php');
?>


	<!-- about -->
		<div class="about">
			<!-- container -->
			<div class="container" style="background-color: #F5F5DC">
				<div class="about-grids">
					<div class="col-md-12 about-left">
						<h3>Who We Are</h3>
					<?php
					
						foreach($about as $a)
						{
						?>
							
								  <div class="col-md-3">
								    <div class="thumbnail">
								      <a href="../../admin_side/<?php echo $a->img; ?>">
								        <img src="../../admin_side/<?php echo $a->img; ?>" alt="Lights" style="width:100%">
								      </a>
								    </div>
								  </div>
							
					
						
						<p><?php echo $a->info;?></p>

						<?php
						}
					?>	
					</div>
					
						</div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //about -->
		

<?php
	require_once('footer.php');
?>