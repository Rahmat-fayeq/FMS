<?php
	include('control.php');

	if(!$_SESSION['em'])
    {
        header('location:../login.php');
    }

	include('header.php');
?>

			<!-- blog -->
		<div class="blog">
			<!-- container -->
			<div class="container">
				<div class="col-md-12 blog-top-left-grid">
					<div class="left-blog left-single">
						<div class="blog-left">
							<div class="single-left-left">
								
					<?php

					foreach($bookground as $b)
					{
					?>	
								 <div class="row">
									  <div class="col-md-4">
									    <div class="thumbnail">
									      <a href="../owner/<?php echo $b->img1; ?>" ">
									        <img src="../owner/<?php echo $b->img1; ?>" " alt="Lights" style="width:100%">
									        <div class="caption">
									          
									        </div>
									      </a>
									    </div>
									  </div>
									  <div class="col-md-4">
									    <div class="thumbnail">
									      <a href="../owner/<?php echo $b->img2; ?>" ">
									        <img src="../owner/<?php echo $b->img2; ?>" " alt="Nature" style="width:100%">
									        <div class="caption">
									          
									        </div>
									      </a>
									    </div>
									  </div>
									  <div class="col-md-4">
									    <div class="thumbnail">
									      <a href="../owner/<?php echo $b->img3; ?>" ">
									        <img src="../owner/<?php echo $b->img3; ?>" " alt="Fjords" style="width:100%">
									        <div class="caption">
									         
									        </div>
									      </a>
									    </div>
									  </div>
								</div>
						<?php
							}
						?>		

							</div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
			<!-- //container -->
		</div>
		<!-- //blog -->




<div class="container" style="margin-bottom: 30px;">
	
	<table class="table table-bordered">
		<tr>
			<th><h3>Time</h3></th>
			<th><h3>Price</h3></th>
			<th><h3>Booking</h3></th>
		</tr>
		<tr>
			<td><h4>one hour</h4></td>
			<td><h4>RS.3100</h4></td>
			<td style="width: 10px;"><a href="book.php"><button class="btn btn-success" style="width: 100px;">Book</button></a></td>
		</tr>
		<tr>
			<td><h4>half day</h4></td>
			<td><h4>RS.700</h4></td>
			<td style="width: 10px;"><a href="book.php"><button class="btn btn-success" style="width: 100px;">Book</button></a></td>
		</tr>
		<tr>
			<td><h4>Full day</h4></td>
			<td><h4>RS.1500</h4></td>
			<td style="width: 10px;"><a href="book.php"><button class="btn btn-success" style="width: 100px;">Book</button></a></td>
		</tr>
	</table>
</div>


<?php
	include('footer.php');
?>