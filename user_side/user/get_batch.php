<?php
	include('control.php');
	include('header.php');

	if(!$_SESSION['em'])
    {
        header('location:../login.php');
    }


?>

<div class="col-xs-offset-3"  style="margin-bottom: 10%; margin-top: 7%;background-color: black;color: white;font-size: 18px; width: 50%;font-weight: bold; border-radius: 7px;">

			<table id="batch" name="batch" class="table-bordered table-condensed table-striped" width="100%" style="text-align: center;">
				<thead>
					<tr>
						<td><b><h3>Male</h3></b></td>
						<td><b><h3>Female</h3></b></td>
						<td><b><h3>Registration</h3></b></td>
					</tr>
					<?php

						if(isset($_REQUEST['search_batch']))
						{
							$id=$_REQUEST['ground'];
												
						$sel="select * from training_time where oid=$id";
						//echo $sel;
						//exit;
						$res=$conn->query($sel);
						while($r=$res->fetch_object())
						{
						?>
							<tr>
								<td><?php echo $r->fm; ?> _ <?php echo $r->tm; ?></td>
								<td><?php echo $r->ff; ?> _ <?php echo $r->tf; ?></td>

								<td><a href="reg.php?tid=<?php echo $r->training_id; ?>">Register</a></td>
							

						<?php
						}
							}
					?>
					
				</thead>
				
				<!--	<span style="margin-left: 47%;font-weight: bold;font-size: 22px;"><a href="reg.php">Register</a> </span> -->
			
				
			</table>
</div>

<?php
	include('footer.php');
?>