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
	$sel="select * from matches where mid=$id";
	//echo $sel;
	$que=$conn->query($sel);
	$f=$que->fetch_object();

	 $mid=$f->mid;
	 $oid=$f->oid;
	 //echo $mid,$oid;

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
						<input type="email" name="email" id="email" class="form-control" value="<?php echo $r1->email; ?>" required />
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
							<input type="date" name="date" id="date" value="<?php echo $f->date; ?>" class="form-control" >
						
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span><label for="time">Time </label> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>

							<input type="text" name="time" id="time" value="<?php echo $f->time; ?>" class="form-control" >
					</div>
					<div class="form-group">
						<input type="hidden" name="mid" value="<?php echo $f->mid;?>">
						<input type="hidden" name="oid" value="<?php echo $f->oid;?>">
						<button type="submit" class="btn btn-success" name="book_ticket" style="width: 50%; margin-left: 20%;">Book</button>
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