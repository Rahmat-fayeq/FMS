<?php
	$conn=new mysqli("localhost","root","","fms");

	require_once('header.php');

	$sel="select * from aboutus";
	$res=$conn->query($sel);
	$f=$res->fetch_object();
?>


	<!-- about -->
		<div class="about">
			<!-- container -->
			<div class="container" style="background-color: #F5F5DC">
				<div class="about-grids">
					<div class="col-md-12 about-left">
						<h3>Who We Are</h3>
				
								  <div class="col-md-3">
								    <div class="thumbnail">
								      <a href="../admin_side/<?php echo $f->img; ?>">
								        <img src="../admin_side/<?php echo $f->img; ?>" alt="Lights" style="width:100%">
								      </a>
								    </div>
								  </div>
							
					
						
						<p><?php  echo $f->info; ?></p>

					
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