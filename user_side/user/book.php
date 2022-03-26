<?php
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

	$id=$_GET['bid'];
	$sel="select * from manage_ground where manage_id=$id";
	$que=$conn->query($sel);
	$f=$que->fetch_object();

	 $mid=$f->manage_id;
	 $oid=$f->oid;


/*	 if(isset($_REQUEST['book_ground']))
	{
		$time1=$_REQUEST['time1'];
		$time2=$_REQUEST['time2'];
		$date1=$_REQUEST['date'];


	 $selReg="select * from bookground where oid=$oid";
	 echo $selReg;
	 exit;
	 $queReg=$conn->query($selReg);
	 $rq=$queReg->fetch_object();
	 $t1=$rq->time1;
	 $t2=$rq->time2;
	 $d=$rq->date;

	 if($time1==$t1 AND $time2==$t2 AND $date1==$d)
	 {
	 	echo "Ground booked already";
	 }
	 else
	 {

	 }
	 	$nm=$_REQUEST['nm'];
		$email=$_REQUEST['email'];
		$mno=$_REQUEST['mno'];
		$date=$_REQUEST['date'];
		$time1=$_REQUEST['time1'];
		$time2=$_REQUEST['time2'];
		$mid=$_REQUEST['mid'];
		$oid=$_REQUEST['oid'];

		$inQue="insert into bookground(name,email,mno,date,time1,time2,manage_id,oid) values('$nm','$email','$mno','$date','$time1','$time2','$mid','$oid')";
		if($resultQuery=$conn->query($inQue))
		{
			echo "ok";
		}
		else
		{
			echo "not";
		}

	}*/


?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
  <script src="../js/jquery.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="col-xs-offset-2" style="width: 50%; margin-top: 5%; align-content: center;margin-left: 25%;">
			<div class="jumbotron">

				<div class="form-group" style="margin-top: -10%;">
					<h2 style="margin-left: 20%;">Please fill up the form</h2>
				</div>
				<hr>
			
			<form class="form-horizontal" style="margin-left: 3%;" action="" method="post">

					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <i class="glyphicon glyphicon-user"></i>--> <span><label for="nm">Full Name </label></span>
						</span>
						<input type="text" name="nm" id="nm" class="form-control" value="<?php echo $r1->unm; ?>" required />
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span><label for="email">Email </label> </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="email" name="email" id="email" value="<?php echo $r1->email; ?>"  class="form-control" required />
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span><label for="mno">Mobile no </label> </span>
						</span>
						<input type="text" name="mno" id="mno" class="form-control" value="<?php echo $r1->mno; ?>"  required />
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span><label for="date">Date </label> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
							<input type="date" name="date" id="date" class="form-control" required>
						
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span><label for="time1">Time </label> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>

							<input type="time" name="time1" id="time1" required> _
							<input type="time" name="time2" id="time2" required>
					</div>
					<div class="form-group">
						<input type="hidden" name="mid" value="<?php echo $f->manage_id;?>">
						<input type="hidden" name="oid" value="<?php echo $f->oid;?>">
						<button type="submit" class="btn btn-success" name="book_ground" style="width: 50%; margin-left: 20%;">Book</button>
					</div>
				
				</form>
			</div>
		</div>
	</div>	

</body>
</html>


<?php

	require_once('footer.php');
?>