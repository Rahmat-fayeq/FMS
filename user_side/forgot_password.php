<?php
	include('user/conn.php');

	if(isset($_REQUEST['forgotpassword']))
	{
		$email=$_REQUEST['email'];
		$role=$_REQUEST['role'];

		if($role=='owner')
		{

			$data="select * from owner_login where email='$email'";
			$query=$conn->query($data);
			if($query->num_rows > 0)
			{
				$str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
				$str = str_shuffle($str);
				$str = substr($str, 0, 10);
				$url = "localhost/FMS/user_side/resetPassword.php?token='$str'&email='$email'&role='$role'";
				/*mail($email, "Reset password", "To reset your password, please visit this: $url", "From: myanotheremail@domain.com\r\n"); */
				$up="UPDATE owner_login SET token='$str' WHERE email='$email'";
				//echo $up;
				//exit(0);
				$qu=$conn->query($up);
				echo "The link has been sent to your email please check your Email<br>";
				echo $url;
			}
			else
			{
				echo "Email is not valid please try again";
			}
		}
		if($role=='user')
		{
			$data="select * from user_login where email='$email'";
			$query=$conn->query($data);
			if($query->num_rows > 0)
			{
				$str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
				$str = str_shuffle($str);
				$str = substr($str, 0, 10);
				$url = "localhost/FMS/user_side/resetPassword.php?token='$str'&email='$email'&role='$role'";
				/*mail($email, "Reset password", "To reset your password, please visit this: $url", "From: myanotheremail@domain.com\r\n"); */
				$up="UPDATE user_login SET token='$str' WHERE email='$email'";
				//echo $up;
				//exit(0);
				$qu=$conn->query($up);
				echo "The link has been sent to your email please check your Email<br>";
				echo $url;
			}
			else
			{
				echo "Email is not valid please try again";
			}
		}
	}	

?>

<!DOCTYPE html>
<html>
<head>
	<title>forgotPassword</title>
<link href="asset_user/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">	

<script src="asset_user/js/jquery.min.js"></script>

</head>
<body>

<div class="container" style="background-color: #F5F5DC;margin-top: 10%;">	
   <div class="col-xs-4" style="margin-left: 300px; margin-top: 70px; border-radius: 8px;font-size: 15px;">
	<div class="form-group">
		<form class="form" name="forgot" action="" method="post">
			<div class="form-group">
			<label style="margin-top: 20px;">Email:</label>
			<input class="form-control" type="text" name="email" id="email" placeholder="Enter email..." pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required>
			</div>
			<div>
				<Label>select your role:</Label>&nbsp; &nbsp;
				<input  type="radio" name="role" value="user" required="required">user &nbsp;
				<input  type="radio" name="role" value="owner">owner
			</div>
			<br>
			<div>
				<input class="btn btn-default" type="submit" name="forgotpassword" value="Send"/>
			</div>
		</form>
	</div>
	</div>
</div>	

</body>
</html>