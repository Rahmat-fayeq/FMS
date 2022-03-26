<?php
	error_reporting(0);
	include('control.php');
	require_once('header.php');

	if(!$_SESSION['em'])
    {
        header('location:../login.php');
    }

    $em=$_SESSION['em'];

    $sel1="select * from user_login where email='$em'";
    //echo $sel1;
    $res1=$conn->query($sel1);
    $r1=$res1->fetch_object();
    //echo $r1->unm;
    //echo $r1->email;
   // exit;

	$id=$_GET['tid'];

	$sel="select * from training_time where training_id=$id";
	//echo $sel;
	//exit;
	$que=$conn->query($sel);
	$f=$que->fetch_object();
	//echo $id=$f->oid;
	//exit;

	// $tid=$f->training_id;
	// $oid=$f->oid;
	 //echo $tid." ".$oid;
	 //exit;

	 if(isset($_REQUEST['reg.php']))
	 {
	 	$id=$_REQUEST['reg_id'];
	 	$sel="select * from training_time where training_id=$id";
	 	//echo $sel;
	 	//exit;
	 	$que=$obj->query($sel);
	 	$f=$que->fetch_object();
	 }



?>


<div class="container" style="margin-top: 3%;margin-bottom: 3%;margin-left: 22%;background: silver;width: 50%; font-size: 16px;">
		
	<form class="form-horizontal" action="" style="margin-left: 10%;margin-top: 2%;">
		<center><b><h3>Registration</h3></b></center>

	  <div class="form-group">
	    <label class="control-label col-sm-3" for="nm" style="margin-top: 2%;">Full Name:</label>

	    <div class="col-sm-7">
	      <input type="text" class="form-control" id="nm" name="nm" value="<?php echo $r1->unm; ?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3" for="email">Email:</label>
	    <div class="col-sm-7"> 
	    	
	      <input type="email" class="form-control" id="email" name="email" value="<?php echo $r1->email; ?>">
	    </div>

	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3" for="mno">Mobile no:</label>
	    <div class="col-sm-7"> 
	    	
	      <input type="text"  class="form-control" id="mno" name="mno" value="<?php echo $r1->mno ?>">
	    </div>

	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3" for="male">Gender:</label>
	    <div class="col-sm-7"> 

	      <input type="radio"   id="male" value="Male" name="gender" required>Male
	      <input type="radio"   id="female" value="Female" name="gender">Female
	    </div>

	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3" for="mno">Time:</label>
	    <div class="col-sm-7"> 
	    	<select class="form-control" name="time">
	    		<option selected="selected" disabled="disabled">select your time</option>
	    		<?php 
	    			$select="select * from training_time where training_id=$id";
	    			$que3=$conn->query($select);
	    			while($t=$que3->fetch_object())
	    			{?>

	    				<option value="<?php echo $t->training_id; ?>"><?php echo $t->fm;?> To <?php echo $t->tm; ?></option>
	    				<option value="<?php echo $t->training_id; ?>"><?php echo $t->ff; ?> To <?php echo $t->tf; ?></option>
	    			<?php
	    			}
	    		?>
	    	</select>
	    </div>

	  </div>
	  <div class="form-group"> 
	    <div class="col-sm-offset-3">
	    	
	    	<input type="hidden" name="oid" value="<?php echo $f->oid; ?>">
	      <button type="submit" class="btn btn-primary" name="reg_training" style="width: 60%;">Register</button>
	    </div>
	  </div>
	</form>  
</div>


<?php

	require_once('footer.php');
?>