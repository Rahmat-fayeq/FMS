<?php
	include('control.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
  <link href="../asset_user/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--  <link rel="stylesheet" href="../asset_user/bootstrapValidator/dist/css/bootstrapValidator.css"/>-->
  <script src="../asset_user/js/jquery.min.js"></script>
<!--
   <script type="text/javascript" src="../asset_user/bootstrapValidator/dist/js/bootstrapValidator.js"></script>
  <script type="text/javascript" src="../asset_user/bootstrapValidator/dist/js/bootstrapValidator.min.js"></script>
-->
  <link rel="stylesheet" type="text/css" href="bValidator/bvalidator.css">
   
   <script type="text/javascript" src="bValidator/jquery-.11.0.min.js"></script>


  <script type="text/javascript" src="../asset_user/jQuery/jquery-3.2.0.min"></script>
  
  <script type="text/javascript">
	function getarea(val)
	{
	  	$.ajax({
	  	type: 'POST',
	  	url: 'get_area.php',
	  	data: "id="+val,
	  	success: function(data){
	      
	    $("#area").html(data);
	  //  alert(data);
   		 },
		});
	}
   </script>	


</head>
<body background="../asset_user/images/8.jpg">

	<div class="container">
		<div class="col-sm-offset-2" style="width: 700px; margin-top: 50px;">
			<div class="jumbotron">

				<div class="form-group" style="margin-top: -30px;">
					<h2 style="margin-left: 80px;">Create account As ground owner</h2>
				</div>
				<hr>
				<form class="form-horizontal" style="margin-left: 50px;" method="post" method="post" action=""
				enctype="multipart/form-data" name="ownerForm" id="ownerForm">



					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <i class="glyphicon glyphicon-user"></i>--> <span><label for="nm">Full Name </label></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="text" name="nm" id="nm" class="form-control" placeholder="Enter full name..." data-bvalidator="required,alpha">
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span><label for="email">Email Address</label></span>&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="text" name="email" id="email" class="form-control" placeholder="Enter email address..." data-bvalidator="email,required">
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span><label for="mno">Mobile Number</label></span>&nbsp;&nbsp;&nbsp;
						</span>
						<input type="text" name="mno" id="mno" class="form-control" placeholder="Enter mobile number..." data-bvalidator="required,number,rangelength[10:14]">
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">
						<!--	<span class="glyphicon glyphicon-lock"></span> --> <span><label for="pass">Password</label></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="password" name="pass" id="pass" class="form-control" placeholder="Enter password..." data-bvalidator="required,minlength[7]">
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span><label for="cpass">ConfirmPassword</label> </span>
						</span>
						<input type="password" name="cpass" id="cpass" class="form-control" placeholder="Enter Confirm password..." data-bvalidator="required,equalto[pass]">
					</div>

					<div class="form-group">
						<select class="form-control" id="city" name="city" onchange="getarea(this.value)" data-bvalidator="required">
							<option selected="selected" disabled="disabled">- select city -</option>
							<?php

								foreach($city as $c)
								{
							?>
									<option value="<?php echo $c->city_id;?>"><?php echo $c->city_name; ?></option>
							<?php
								}

							?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" name="area" id="area">
							<option> </option>
						</select>
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span><label for="add">Address</label></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="text" name="add" id="add" class="form-control" placeholder="Enter full address..." data-bvalidator="required">
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span><label for="gnm">Ground name</label></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="text" name="gnm" id="gnm" class="form-control" placeholder="Enter Ground name..." data-bvalidator="required">
					</div>

                    <div class="form-group input-group">
                        <span class="input-group-addon">
                            <span><label for="img1">Images</label></span>
                        </span>
                        <input type="file"  name="img1" id="img1" data-bvalidator="extension[jpg:png:jpeg],required" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg">
                        
                        <input type="file" name="img2" id="img2" style="margin-top: 7px; margin-bottom: 7px;" data-bvalidator="extension[jpg:png:jpeg],required" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg">

                        <input type="file"  name="img3" id="img3" data-bvalidator="extension[jpg:png:jpeg],required" data-bvalidator-msg="Please select file of type .jpg, .png or .jpeg">
                    </div>

                    <div class="form-group">
                            <span>I have read and confirm the <a href="../terms.php">terms and conditoin</a></span>
                        <input name="a"  type="checkbox" value="1" data-bvalidator="required">
                    </div>

					<div class="form-group">
						<button type="submit" name="reg" id="reg" class="btn btn-primary" style="width: 490px;">Register</button>
					</div>

					<div class="form-group">
						<span style="margin-left: 310px;">Already have account </span><a href="../login.php" style="margin-left: 2px;">Login</a>
					</div>
					
				</form>
			</div>
		</div>
	</div>	


    <script type="text/javascript">
       $(document).ready(function () {
        $("#ownerForm").bValidator();
    });
    
    </script>
<script src="bValidator/jquery.bvalidator.js"></script>

<!--
	<script type="text/javascript">
$(document).ready(function() {
    $('#ownerForm').bootstrapValidator({
        message: 'This value is not valid',
      /*  feedbackIcons: {
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
            city: {
                validators: {
                    notEmpty: {
                        message: 'The city is required and can\'t be empty'
                    }
                }
            },
            add: {
                validators: {
                    notEmpty: {
                        message: 'The address is required and can\'t be empty'
                    }
                }
            },
            gnm: {
                validators: {
                    notEmpty: {
                        message: 'The ground name is required and can\'t be empty'
                    }
                }
            },
         /*   acceptTerms: {
                validators: {
                    notEmpty: {
                        message: 'You have to accept the terms and policies'
                    }
                }
            }, */
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
          /*  website: {
                validators: {
                    uri: {
                        allowLocal: true,
                        message: 'The input is not a valid URL'
                    }
                }
            },
            mno: {
                validators: {
                    phone: {
                        message: 'The input is not a valid  phone number'
                        country: 'GB'
                    }
                }
            },
            phoneNumberUK: {
            	validators: {
            		phone: {
            			message: 'The input is not a valid UK phone number',
            			country: 'GB'
            		}
            	}
            },
            color: {
                validators: {
                    color: {
                        type: ['hex', 'rgb', 'hsl', 'keyword'],
                        message: 'Must be a valid %s color'
                    }
                }
            },
            colorAll: {
                validators: {
                    color: { }
                }
            },
            zipCode: {
                validators: {
                    zipCode: {
                        country: 'US',
                        message: 'The input is not a valid US zip code'
                    }
                }
            }, */
            pass: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'cpss',
                        message: 'The password and its confirm are not the same'
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
            } /*,
            ages: {
                validators: {
                    lessThan: {
                        value: 100,
                        inclusive: true,
                        message: 'The ages has to be less than 100'
                    },
                    greaterThan: {
                        value: 10,
                        inclusive: false,
                        message: 'The ages has to be greater than or equals to 10'
                    }
                }
            } */
        }
    });
});
</script>
-->
</body>
</html>

<!--
<script type="text/javascript">
	$(document).ready(function()
	{
		$('#reg').click(function()
		{
			var img1_nm=$('#img1').val();
			var img2_nm=$('#img2').val();
			var img3_nm=$('#img3').val();
			if(img1_nm=='')
			{
				alert("Please select image");
				return false;
			}
			else if(img2_nm=='')
			{
				alert("Please select image");
				return false;
			}
			else if(img3_nm=='')
			{
				alert("Please select image");
				return false;
			}
			else
			{
				var extension1=$('#img1').val().split('.').pop().toLowerCase();
				var extension2=$('#img2').val().split('.').pop().toLowerCase();
				var extension3=$('#img3').val().split('.').pop().toLowerCase();
				if(jQuery.inArray(extension1, ['png','jpg','jpeg'])==-1)
				{
					alert("Invalid image file");
					$('#img1').val('');
					return false;
				}
				else if(jQuery.inArray(extension2, ['png','jpg','jpeg'])==-1)
				{
					alert("Invalid image file");
					$('#img2').val('');
					return false;
				}
				if(jQuery.inArray(extension3, ['png','jpg','jpeg'])==-1)
				{
					alert("Invalid image file");
					$('#img3').val('');
					return false;
				}
			}
		});
	});
</script>-->