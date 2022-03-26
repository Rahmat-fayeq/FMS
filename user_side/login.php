<?php
	
	error_reporting(0);
	//include('owner/control.php');
	include('user/conn.php');
	session_start();
	
	if(isset($_REQUEST['login']))
	{
		$email=$_REQUEST['email'];
		$pass=$_REQUEST['pass'];
		$role=$_REQUEST['role'];
		$status='Unblock';

		if($role=="user")
		{
			$sel="select * from user_login where email='$email' and pass='$pass' and status='$status'";
			$lgn=$conn->query($sel);
			$chk=$lgn->num_rows;
		    if($chk==1)
		    {
		        $_SESSION['em']=$email;
		        header('location:user/index.php');
		    }
		    else{
		        echo "Something went wrong please try again !";
		    }
		}
		else if($role=='owner')
		{
				$sel="select * from owner_login where email='$email' and pass='$pass' and status='$status'";
				$lgn=$conn->query($sel);
				$chk=$lgn->num_rows;
			    if($chk==1)
			    {
			        $_SESSION['email']=$email;

			        header('location:owner/index.php');
			    }
			    else
			    {
			        echo "Something went wrong please try again !";
			    }
		}	   
	}

	if(isset($_REQUEST['save']))
	{
		setcookie("email",$email,time()+3600);
		setcookie("pass",$pass,time()+3600);
	}	

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
  <link href="asset_user/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
 <!-- <link rel="stylesheet" href="asset_user/bootstrapValidator/dist/css/bootstrapValidator.css"/>

  <script type="text/javascript" src="asset_user/bootstrapValidator/dist/js/bootstrapValidator.js"></script>
  <script type="text/javascript" src="asset_user/bootstrapValidator/dist/js/bootstrapValidator.min.js"></script> -->
  <script src="asset_user/js/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="user/bValidator/bvalidator.css">
   
   <script type="text/javascript" src="user/bValidator/jquery-.11.0.min.js"></script>

  <script type="text/javascript">
  
  /*  function show()
    {
       
       var email=document.forms['loginForm']['email'].value;
        if(email=="" || email==null)
        {
            alert('please fill out the Email Address !');
        }
        var chk_email=/^[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,3}$/;
        if(!chk_email.test(email))
        {
            alert('pleae enter proper Email Address !')
            return false;
        }

        var pass=document.forms['loginForm']['pass'].value;
        if(pass=="" || pass==null)
        {
            alert('please fill out the password !');
            return false;
        }

       
    } */
  </script>

</head>
<body background="asset_user/images/8.jpg">



	<div class="container">
		<div class="col-sm-offset-3 col-xs-8 col-md-8" style="width: 600px; margin-top: 150px;">
			<div class="jumbotron">

				<div class="form-group" style="margin-top: -50px;">
					<h2 style="margin-left: 180px;">Login</h2>
				</div>
				<hr>
				<form class="form-horizontal" style="margin-left: 50px;" action="" method="post" name="loginForm" id="loginForm"  onsubmit="show()">

					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span><label for="email">Email</label></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="email" name="email" id="email" data-bvalidator="email,required" class="form-control" placeholder="Enter email address..." value="<?php 

							if(isset($_COOKIE['email']))
			                {
			                    echo $_COOKIE['email'];
			                }
			                else
			                {

			                }


						 ?>">
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">
						<!--	<span class="glyphicon glyphicon-lock"></span> --> <span><label for="pass">Password</label></span>
						</span>
						<input type="password" name="pass" id="pass" data-bvalidator="required" data-bvalidator-msg="Please enter a valid password" class="form-control" placeholder="Enter password..." value="<?php

				               if(isset($_COOKIE['pass']))
				                {
				                    echo $_COOKIE['pass'];
				                }
				                else
				                {

				                }

						?>">
					</div>

				<!--	<div class="form-group input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>  <span>Role</span>
						</span>
						<select class="form-control" name="role">
							<option selected="selected" disabled="disabled"> select your role... </option>
							<option>user</option>
							<option>owner</option>
						</select>
					</div>-->
					<div class="form-group input-group">
						<span>&nbsp;&nbsp;<label for="role">Your Role</label> : &nbsp; &nbsp; &nbsp;</span>
							
								<input  type="radio" name="role" id="role" value="user" >user &nbsp;
								<input  type="radio" name="role" value="owner" data-bvalidator="required" data-bvalidator-msg="Select one radio button">owner
							
							
						
					</div>
					

					<div class="form-group">
						<label>
							<input type="checkbox" name="save" style="margin-left: 150px;"><span style="margin-left: 10px;"> Remember me</span>
						</label>
					</div>

					<div class="form-group">
						<button type="submit" name="login" class="btn btn-primary" style="width: 430px;">Login</button>
					</div>

					<div class="form-group">
						<a href="forgot_password.php" style="margin-left: 310px;">Forget password</a>
					</div>

					<div class="form-group">
						<a href="user/register.php" style="margin-left: 20px;">Sign up As user</a> <a href="owner/register.php" style="margin-left: 100px;">Sign up As Ground owner</a>
					</div>
					
				</form>
			</div>
		</div>
	</div>	

<script type="text/javascript">
       $(document).ready(function () {
        $("#loginForm").bValidator();
    });
    
    </script>
<script src="user/bValidator/jquery.bvalidator.js"></script>


</body>
</html>
