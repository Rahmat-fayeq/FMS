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

	<div class="container" style="margin-top: 5%; margin-bottom: 10%; font-size: 18px;text-align: center;background-color: 	#F5F5DC">
		<table class="table-bordered table-condensed table-striped" width="60%" align="center">
			<span style="color: purple;"><center><h3>Users Who Booked Ticket</h3></center></span>
			<tr>
				<th>Full Name</th>
				<th>Email</th>
				<th>Mobile No</th>
				<th>Date</th>
				<th>Time</th>
				<th>Delete</th>
			</tr>
			<?php

				$sel="SELECT  *
					FROM    bookticket bt LEFT outer join matches m
					ON      bt.mid = m.mid
					WHERE   bt.oid=$val";
				//echo $sel;
				//exit;
				$res=$conn->query($sel);
				while($m=$res->fetch_object())
				{
				?>
					<tr>
						<td><?php echo $m->name; ?></td>
						<td><?php echo $m->email; ?></td>
						<td><?php echo $m->mno; ?></td>
						<td><?php echo $m->date; ?></td>
						<td><?php echo $m->time; ?></td>
						<td><a href="control.php?ticket_did=<?php echo $m->tid;?>">delete</a></td>
					</tr>
			<?php

				}
			?>
			
			
		</table>
	</div>

<?php
	include('footer.php');
?>