<?php
	require_once('control.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>register</title>

  <link href="../asset_user/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
 <!-- <link rel="stylesheet" href="../asset_user/bootstrapValidator/dist/css/bootstrapValidator.css"/> -->


  <script src="../asset_user/js/jquery.min.js"></script>
  <!--<script type="text/javascript" src="../asset_user/bootstrapValidator/dist/js/bootstrapValidator.js"></script>
  <script type="text/javascript" src="../asset_user/bootstrapValidator/dist/js/bootstrapValidator.min.js"></script> -->

   <link rel="stylesheet" type="text/css" href="bValidator/bvalidator.css">
   
   <script type="text/javascript" src="bValidator/jquery-.11.0.min.js"></script>

</head>
<body background="../asset_user/images/8.jpg">


	<div class="container">
		<div class="col-sm-offset-3" style="width: 700px; margin-top: 9%;">
			<div class="jumbotron">

				<div class="form-group" style="margin-top: -7%;">
					<h2 style="margin-left: 200px;">Create account</h2>
				</div>
				<hr>
				<form class="form-horizontal"  id="myform" style="margin-left: 5%;" action="" method="post" >

					<div class="form-group input-group">
                            <span class="input-group-addon">
                            <!-- <i class="glyphicon glyphicon-user"></i>--> <span><label for="nm">Full Name </label></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         </span>
						
						<input type="text" id="nm" name="nm" class="form-control" placeholder="Enter full name..." data-bvalidator="required,alpha">
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span><label for="email"> Email Address</label> </span> &nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="text" name="email" id="email" class="form-control" placeholder="Enter email address..." data-bvalidator="email,required">
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span><label for="mno">Mobile number</label></span>&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input  name="mno" id="mno" type="text" class="form-control" placeholder="Enter mobile number..."  data-bvalidator="required,number,rangelength[10:14]">
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">
						<!--	<span class="glyphicon glyphicon-lock"></span> --> <span><label for="pass">Password</label></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="password" name="pass" id="pass" class="form-control" placeholder="Enter password..."  id="pass" data-bvalidator="required,minlength[7]">
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span><label for="cpass"> Confirm Password </label></span>
						</span>
						<input type="password"  name="cpass" id="cpass" class="form-control" placeholder="Enter Confirm password..." data-bvalidator="required,equalto[pass]">
					</div>

                    <div class="form-group">
                            <span>I have read and confirm the <a href="../terms.php">terms and conditoin</a></span>
                        <input name="a"  type="checkbox" value="1" data-bvalidator="required">
                    </div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary col-xs-offset-2" style="width: 70%;" name="reg">Register</button>
					</div>

                    

					<div class="form-group">
						<span style="margin-left: 60%;">Already have account </span><a href="../login.php" style="margin-left: 1%;">Login</a>
					</div>
					
				</form>
			</div>
		</div>
	</div>	

      <script type="text/javascript">
       $(document).ready(function () {
        $("#myform").bValidator();
    });
    
    </script>
<script src="bValidator/jquery.bvalidator.js"></script>



<!--    

<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
       /* feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            nm: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
           
           
            pass: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The password must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The password can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            cpass: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'pass',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
    });
});
</script>
-->
</body>
</html>