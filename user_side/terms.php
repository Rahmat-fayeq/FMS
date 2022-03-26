<?php
	include('user/conn.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>terms and conditions</title>
	<link href="asset_user/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
</head>
<body bgcolor="#F5F5DC">

	<div class="container" style="width: 50%;height: 60%;margin-top: 4%;margin-bottom: 10%;">
		<div style="color: red;">
			<center><h2>Terms and Conditions</h2></center>
		</div>

		<div class="col-md-10" style="margin-top: 25px;font-size: 20px;font-family: tahoma; text-align: left;margin-bottom: 40px;color:brown;">
			<span>
				<?php
					$sel="select * from terms";
					$que=$conn->query($sel);
					while($t=$que->fetch_object())
					{?>

					<span><?php echo $t->terms; ?></span>
				<?php	
					}
				?>
			</span>
		</div>
		
		<div style="margin-left: 12%;">
			<a href="user/register.php"><button class="btn btn-success">Back to user registration page</button> </a>
		<a href="owner/register.php"><button class="btn btn-success">Back to owner registration page</button> </a>
		</div>
	</div>
	
	
		


</body>
</html>