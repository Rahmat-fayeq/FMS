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

<div class="container" style="text-align: left; font-size: 17px; margin-top: 40px;  font-family: tahoma;">
		To add training time<a href="time.php">  Click here </a>
</div>

	<div class="container" style="margin-top: 10px; font-size: 19px; margin-bottom: 25px;text-align: center;background-color: #F5F5DC;">

		<table class="table-bordered table-condensed table-striped" align="center" width="100%">
			<span style="color: brown; font-family: tahoma;"><center ><h3>Users who has registered for training</h3></center></span>
			<tr>
				<th>Full Name</th>
				<th>Email Address</th>
				<th>Mobile Number</th>
				<th>Catagory</th>
				<th>Male Time</th>
				<th>Female Time</th>
				<th>Delete</th>
			</tr>
			<?php

				$sel="SELECT  *
					FROM    training_reg bt LEFT outer join training_time m 
					ON      bt.training_id=m.training_id
					WHERE   bt.oid=$val";
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
						<td><?php echo $r->gender; ?></td>
						<td><?php echo $r->fm;?> _ <?php echo $r->tm;?> </td>
						<td><?php echo $r->ff;?> _ <?php echo $r->tf;?> </td>
						<td><a href="control.php?batch_did=<?php echo $r->tr_id; ?>">delete</a></td>
					</tr>
				<?php
				}
			?>
			
		
		</table>
	</div>
	
	
<?php
	include('footer.php');
?>