<?php
	include('conn.php');

	if(isset($_GET['token']) && isset($_GET['email']))
	{
		$email =$_GET['email'];
		$token =$_GET['token'];


				$data="SELECT * FROM admin_login WHERE email=$email AND token=$token ";
				//echo $data;
				//exit;
			
				$query=$conn->query($data);
				$chk=$query->num_rows;

				if ($chk==1) 
				{
					$f=$query->fetch_object();
					$id=$f->admin_id;
				
				} 
				else
				 {
					echo "Please check your link!";
				 }
		
		 
	}
	else
	{
		header('location:login.php');
	}

	if(isset($_POST['reset']))
	{
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];	
		

			$up="update admin_login set password='$pass',token = ' ' where email=$email AND admin_id=$id";
				
			$qu=$conn->query($up);

					header('location:login.php');
					
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>forgotPassword</title>
<link href="asset_admin/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>

<div class="container">	
   <div class="col-xs-4" style="margin-left: 300px; margin-top: 70px; border-radius: 8px;font-size: 15px;">
	<div class="form-group">
		<form class="form"  method="post">
			
			<div class="form-group">
			<label style="margin-top: 20px;">Password:</label>
			<input class="form-control" required="required" type="password" name="pass" placeholder="Enter new password...">
			</div>
			<div class="form-group">
			<label style="margin-top: 20px;">Confirm Password:</label>
			<input class="form-control" required="required" type="password" name="cpass" placeholder="Conirm password...">
			</div>
			<div>
				<input class="btn btn-default" type="submit" name="reset" value="Submit"/>
			</div>
		</form>
	</div>
	</div>
</div>	
</body>
</html>