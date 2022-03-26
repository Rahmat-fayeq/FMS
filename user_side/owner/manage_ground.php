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
<div class="container" style="margin-top: 3%;margin-bottom: 3%;margin-left: 20%;background: #F0F8FF;width: 60%;">
		
	<form class="form-horizontal" action="" style="margin-left: 10%;margin-top: 2%;">

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="time">Time:</label>

	    <div class="col-sm-6">
	      <input type="text" placeholder="Enter number of time ( 1 hour,2 hour,2 hour,...)" class="form-control" id="time" name="time">
	    </div>

	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="price">Price:</label>

	    <div class="col-sm-6">
	      <input type="text" placeholder="Enter amount" class="form-control" id="price" name="price">
	    </div>

	  </div>
	  <div class="form-group"> 
	    <div class="col-sm-offset-3">
	    	<input type="hidden" name="oid" value="<?php echo $f->oid; ?>">	
	      <button type="submit" class="btn btn-success" name="manage_ground" style="width: 50%;">Add</button>
	    </div>
	  </div>
	</form>  
</div>

<div class="container" style="font-size: 20px; text-align: center;">
  <table class="table table-bordered" align="center" style="margin-bottom: 7%;">
    <thead>
      <tr class="info">
        <th><span style="margin-left: 49%;">Time</span></th>
        <th><span style="margin-left: 49%;">Amount</span></th>
        <th><span style="margin-left: 49%;">Delete</span></th>
      </tr>
    </thead>
    <tbody>
    	<?php

    		$sel="select * from manage_ground where oid=$val";
    		$que=$conn->query($sel);
    		while($t=$que->fetch_object())
    		{
    	?>
      <tr class="active">
        <td><?php echo $t->time; ?></td>
        <td><?php echo $t->price; ?></td>
        <td><a href="control.php?manage_did=<?php echo $t->manage_id; ?>">delete</a> </td>
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