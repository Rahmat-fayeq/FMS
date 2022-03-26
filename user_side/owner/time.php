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
<div class="container" style="margin-top: 3%;margin-bottom: 3%;margin-left: 20%;background: silver;width: 60%;">
		
	<form class="form-horizontal" action="" style="margin-left: 10%;margin-top: 2%;">

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="male" style="margin-top: 2%;">Male:</label>

	    <div class="col-sm-4">
	    	<span style="margin-left: 40%;font-weight: bold;">From</span>
	      <input type="time" class="form-control" id="male" name="fm">
	    </div>
	    <div class="col-sm-4">
	      <span style="margin-left: 40%;font-weight: bold;">To</span>
	       <input type="time"  class="form-control" id="male" name="tm">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="female">Female:</label>
	    <div class="col-sm-4"> 
	    	
	      <input type="time"  class="form-control" id="female" name="ff">
	    </div>
	    <div class="col-sm-4"> 
	    	
	      <input type="time"  class="form-control" id="female" name="tf">
	    </div>
	  </div>
	  <div class="form-group"> 
	    <div class="col-sm-offset-4">
	    	<input type="hidden" name="oid" value="<?php echo $f->oid; ?>">	
	      <button type="submit" class="btn btn-primary" name="add_training_time" style="width: 50%;">Add</button>
	    </div>
	  </div>
	</form>  
</div>

<div class="container" style="font-size: 20px; text-align: center;">
  <table class="table table-bordered" align="center" style="margin-bottom: 7%;">
    <thead>
      <tr class="info">
        <th><span style="margin-left: 49%;">Male</span></th>
        <th><span style="margin-left: 49%;">Female</span></th>
        <th><span style="margin-left: 49%;">Delete</span></th>
      </tr>
    </thead>
    <tbody>
    	<?php
    	//	foreach($time as $t)
    		$sel="select * from training_time where oid=$val";
    		$que=$conn->query($sel);
    		while($t=$que->fetch_object())
    		{
    	?>
      <tr class="active">
        <td><?php echo $t->fm; ?>__<?php echo $t->tm; ?></td>
        <td><?php echo $t->ff; ?>__<?php echo $t->tf; ?></td>
        <td><a href="control.php?training_did=<?php echo $t->training_id; ?>">delete</a> </td>
      </tr>      
     	<?php
     		}
     	?>
    </tbody>
  </table>
</div>


	

<?php
	include('footer.php');
?>