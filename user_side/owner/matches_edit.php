<?php
	include('control.php');

	if(!$_SESSION['email'])
    {
        header('location:../login.php');
    }

	include('header.php');
?>
	
	<div class="container" style="margin-top: 30px; margin-bottom: 25px; font-size: 18px;">
		<form class="form-horizontal" method="" action="">
			<div class="form-group">
					<label class="col-md-4 control-label" for="team1">First Team:</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="team1" id="team1" value="<?php echo $f->team1; ?>" />
				</div>		
			</div>
			<div class="form-group">
					<label class="col-md-4 control-label" for="team2">Second Team:</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="team2" id="team2" value="<?php echo $f->team2; ?>"/>
				</div>		
			</div>
			<div class="form-group">
					<label class="col-md-4 control-label" for="place">Place:</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="place" id="place" value="<?php echo $f->place; ?>"/>
				</div>		
			</div>
			<div class="form-group">
					<label class="col-md-4 control-label" for="time">Date:</label>
				<div class="col-md-4">
					<input type="date" class="form-control" name="date" id="date" value="<?php echo $f->date; ?>" />
				</div>		
			</div>
			<div class="form-group">
					<label class="col-md-4 control-label" for="time">Time:</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="time" id="time" value="<?php echo $f->time; ?>"/>
				</div>		
			</div>
			<div class="form-group">
					<label class="col-md-4 control-label" for="price">Price of ticket:</label>
				<div class="col-md-4">
					<input type="text" class="form-control" name="price" id="time" value="<?php echo $f->price; ?>"/>
				</div>		
			</div>
			<div class="form-group">
                    <div class="col-sm-10 col-sm-offset-5">
                    	<input type="hidden" name="mid" value="<?php echo $f->mid; ?>">
                         <button class="btn btn-primary" name="update_matches" style="width: 150px;">Update</button>
                    </div>    
              </div>
		</form>
	</div>