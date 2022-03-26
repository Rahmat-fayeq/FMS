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
//	echo $val;
//	exit;
?>
	
	<div class="container" style="margin-top: 30px; margin-bottom: 25px; font-size: 18px; background-color: #F0F8FF;border-radius: 7px;">
		<form class="form-horizontal" method="" action="">
			<div class="form-group">
					<label class="col-md-4 control-label" for="team1">First Team:</label>
				<div class="col-md-4">
					<input type="text" style="margin-top: 15px;" class="form-control" name="team1" id="team1" placeholder=" frist team..."/>
				</div>		
			</div>
			<div class="form-group">
					<label class="col-md-4 control-label" for="team2">Second Team:</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="team2" id="team2" placeholder=" second team..."/>
				</div>		
			</div>
			<div class="form-group">
					<label class="col-md-4 control-label" for="place">Place:</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="place" id="place" placeholder=" place of match..."/>
				</div>		
			</div>
			<div class="form-group">
					<label class="col-md-4 control-label" for="time">Date:</label>
				<div class="col-md-4">
					<input type="date" class="form-control" name="date" id="date"/>
				</div>		
			</div>
			<div class="form-group">
					<label class="col-md-4 control-label" for="time">Time:</label>
				<div class="col-md-4">
					<input type="time" class="form-control" name="time" id="time" />
				</div>		
			</div>
			<div class="form-group">
					<label class="col-md-4 control-label" for="price">Price of ticket:</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="price" id="time" placeholder=" cost of ticket..."/>
				</div>		
			</div>
			<div class="form-group">
                    <div class="col-sm-10 col-sm-offset-5">
                    	<input type="hidden" name="oid" value="<?php echo $f->oid; ?>">
                         <button class="btn btn-primary" name="add_matches" style="width: 150px;">Add</button>
                    </div>    
              </div>
		</form>
	</div>

	<div class="container" style="margin-bottom: 40px; font-size: 19px; text-align: center;background-color: #F5F5DC; margin-top: 5px;border-radius: 7px;color: ;">
		<table class="table-bordered table-striped table-condensed" align="center" width="900" style="margin-top: 15px;">
			<tr>
				<th>First Team</th>
				<th>Second Team</th>
				<th>Place</th>
				<th>Date</th>
				<th>Time</th>
				<th>Price of Ticket</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php

				$sel="select * from matches where oid=$val";
				$res=$conn->query($sel);
				while($m=$res->fetch_object())
				{
				{?>

					<tr>
						<td><?php echo $m->team1; ?></td>
						<td><?php echo $m->team2; ?></td>
						<td><?php echo $m->place; ?></td>
						<td><?php echo $m->date; ?></td>
						<td><?php echo $m->time; ?></td>
						<td><?php echo $m->price; ?></td>
						<td><a href="matches_edit.php?eid=<?php echo $m->mid;?>">edit</a></td>
						<td><a href="control.php?did=<?php echo $m->mid;?>">delete</a></td>
						
					</tr>

			<?php	
				}	
				}
			?>
			
			
		</table>
	</div>

<?php
	include('footer.php');
?>