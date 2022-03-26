<?php
	include('user/conn.php');

	if(isset($_GET['token']) && isset($_GET['email']) && isset($_GET['role']))
	{
		$email =$_GET['email'];
		$token =$_GET['token'];
		$role=$_GET['role'];

		if($role='owner')
		{

				$data="SELECT * FROM owner_login WHERE email=$email AND token=$token ";
				//echo $data;
				//exit;
			
				$query=$conn->query($data);
				$chk=$query->num_rows;

				if ($chk==1) 
				{
					$f=$query->fetch_object();
					$id=$f->oid;
				
				} 
				else
				 {
					//echo "Please check your link!";
				 }
		}
		if($role='user')
		{
					$data="SELECT * FROM user_login WHERE email=$email AND token=$token ";
					//echo $data;
					$query=$conn->query($data);
					$chk1=$query->num_rows;

					if ($chk1==1) 
					{
						$f=$query->fetch_object();
						$id=$f->uid;
					
					} 
					else
					 {
						echo "Please check your link!";
					 }
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
		$role=$_POST['role'];

		if($role=='owner')	
		{
			$up="update owner_login set pass='$pass',cpass='$cpass',token = ' ' where email=$email AND oid=$id";
				
			$qu=$conn->query($up);

					header('location:login.php');
		}
		else if($role=='user')
		{
			$up="update user_login set pass='$pass',cpass='$cpass',token = ' ' where email=$email AND uid=$id";
				
			$qu=$conn->query($up);

			header('location:login.php');
		}			
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>forgotPassword</title>
<link href="asset_user/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">	

<script src="asset_user/js/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="user/bValidator/bvalidator.css">
   
   <script type="text/javascript" src="user/bValidator/jquery-.11.0.min.js"></script>
   

</head>
<body>

<div class="container">	
   <div class="col-xs-4" style="margin-left: 300px; margin-top: 70px; border-radius: 8px;font-size: 15px;">
	<div class="form-group">
		<form class="form"  method="post" name="resetpass" id="resetpass">
			
			<div class="form-group">
			<label style="margin-top: 20px;">Password:</label>
			<input class="form-control" type="password" name="pass" id="pass" placeholder="Enter new password..." data-bvalidator="required,minlength[7]">
			</div>
			<div class="form-group">
			<label style="margin-top: 20px;">Confirm Password:</label>
			<input class="form-control" type="password"  name="cpass" id="cpass" placeholder="Conirm password..." data-bvalidator="required,equalto[pass]">
			</div>
			<div>
				<Label>select your role:</Label>&nbsp; &nbsp;
				<input  type="radio" name="role" value="user" data-bvalidator="required">user &nbsp;
				<input  type="radio" name="role" value="owner">owner
			</div>
			<br>
			<div>
				<input class="btn btn-default" type="submit" name="reset" value="Submit"/>
			</div>
		</form>
	</div>
	</div>
</div>

	<script type="text/javascript">
       $(document).ready(function () {
        $("#resetpass").bValidator();
    });
	</script>
	<script src="user/bValidator/jquery.bvalidator.js"></script>	
</body>
</html>