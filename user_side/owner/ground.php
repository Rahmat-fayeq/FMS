<?php
	include('control.php');

	if(!$_SESSION['email'])
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
	//echo $val;
	//exit;

?>

<div class="container" style="text-align: left; font-size: 17px; margin-top: 40px;  font-family: tahoma;font-size: 19px;font-weight: bold;color: green;">
		For managing your ground <a href="manage_ground.php">  Click here </a>
</div>

	<div class="container" style="margin-top: 10px; font-size: 19px; margin-bottom: 25px;text-align: center;background-color: #F5F5DC;">

		<table class="table-bordered table-condensed table-striped" align="center" width="100%">
			<span style="color: brown; font-family: tahoma;"><center ><h3>Users who booked Ground</h3></center></span>
			<tr>
				<th>Full Name</th>
				<th>Email Address</th>
				<th>Mobile Number</th>
				<th>Date</th>
				<th>Time</th>
				<th>Delete</th>
			</tr>
			<?php

				$sel="select * from bookground where oid=$val";	
				//echo $sel;
				//exit;
				$que=$conn->query($sel);
				while($r=$que->fetch_object())
				{
				?>
					<tr>
						<td><?php echo $r->name; ?></td>
						<td><?php echo $r->email; ?></td>
						<td><?php echo $r->mno; ?></td>
						<td><?php echo $r->date; ?></td>
						<td><?php echo $r->time1;?> _ <?php echo $r->time2;?> </td>
						<td><a href="control.php?rg_did=<?php echo $r->gid;?>">delete</a></td>
					</tr>
				<?php
				}
			?>
			
		
		</table>
	</div>
	
<?php
	include('footer.php');
?>