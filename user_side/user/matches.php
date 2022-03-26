<?php
	include('control.php');

	if(!$_SESSION['em'])
    {
        header('location:../login.php');
    }

	require('header.php');
?>

		<!-- match -->
		<div class="match">
			<!-- container -->
			<div class="container" style="background-color: #F0F8FF; margin-top: 4%;margin-bottom: 5%;">
				<div class="match-table">
					<div class="table-rows">
						<div class="table-hedding">
						
						</div>
						<?php
									
						//	foreach($matches as $m)
						//	{
							$sel="select * from matches order by mid DESC";
							$que=$conn->query($sel);
							while($m=$que->fetch_object())
							{
							?>

						<div class="table-row">
							<div class="t-match">
								<div class="col-md-4 table-address">
									<div class="list-hedding">

									<h4>Place</h4>	
									</div>
									<ul>
										<li><?php  echo $m->date; ?></li>
										<li><?php echo $m->time; ?></li>
										<li><?php echo $m->place; ?></li>
									</ul>
								</div>
								<div class="col-md-4 table-country">
									<div class="list-hedding">
										<h4>Teams</h4>	
									</div>
									<h5><?php echo $m->team1; ?>  Vs  <?php echo $m->team2; ?> <h5>
								</div>
								<div class="col-md-2 table-country">
									<div class="list-hedding">
										<h4>price</h4>	
									</div>
									<h5><?php echo $m->price; ?><small>(pay on cash)</small><h5>
								</div>
								<div class="col-md-2 table-result">
									<div class="list-hedding">
										<h4>Book Ticket</h4>
									</div>
									<a href="ticket.php?bid=<?php echo $m->mid; ?>"><button class="btn btn-primary" style="width: 100px;">Book</button></a>
								</div>
							
								<div class="clearfix"> </div>	
					
							</div>
						</div>

						<?php
								}
						?>

					</div>
				
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //match -->
		
<?php
	require('footer.php');
?>