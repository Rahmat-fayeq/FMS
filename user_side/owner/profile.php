<?php
	
	include('control.php');

	if(!$_SESSION['email'])
    {
        header('location:../login.php');
    }

	include('header.php');

	//echo $_SESSION['email'];


						$em=$_SESSION['email'];
						$where_unm=array("email"=>$em);
						$sel="select * from owner_login join area on (owner_login.area_id=area.area_id) where email='$em'";
						$sel_w=$conn->query($sel);
						//echo $sel;
						//exit(0);
						$s=$sel_w->fetch_object();
						//echo $s->gnm;
						//exit(0);
?>

	<!DOCTYPE html>
<html>
<head>
	<title>login</title>
  <link href="../asset_user/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
  <script src="../asset_user/js/jquery.min.js"></script>
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
<body>

	<div class="container" style="background-color: 	#F5F5DC">
		<div class="col-sm-offset-3 " style="margin-top: 50px;width: 600px; text-align: center;">
			<div class="jumbotron">

				<div class="form-group" style="margin-top: -30px;">
					<h2>Your Profile</h2>
				</div>
				<hr>
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

					<div class="form-group">
						
						<div class="row">
						  <div class="col-md-4">
						    <div class="thumbnail">
						      <a href="<?php echo $s->img1; ?>">
						        <img src="<?php echo $s->img1; ?>" alt="Lights" style="width:100%">
						      </a>
						    </div>
						  </div>
						  <div class="col-md-4">
						    <div class="thumbnail">
						      <a href="<?php echo $s->img2; ?>">
						        <img src="<?php echo $s->img2; ?>" alt="Lights" style="width:100%">
						      </a>
						    </div>
						  </div>
						  <div class="col-md-4">
						    <div class="thumbnail">
						      <a href="<?php echo $s->img3; ?>">
						        <img src="<?php echo $s->img3; ?>" alt="Lights" style="width:100%">
						      </a>
						    </div>
						  </div>
						</div>
					</div>	

					<div class="form-group input-group ">
						<span class="input-group-addon">
							<!--<i class="glyphicon glyphicon-user"></i>--> <span>Full Name </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="text" name="nm" class="form-control" value="<?php echo $s->onm; ?>" >
					</div>

					<div class="form-group input-group ">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span>Email Address </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="email" name="email" class="form-control" value="<?php echo $s->email; ?>" >
					</div>

					<div class="form-group input-group ">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span>Mobile number</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="text" name="mno" class="form-control" value="<?php echo $s->mno; ?>">
					</div>

					<div class="form-group input-group ">
						<span class="input-group-addon">
						<!--	<span class="glyphicon glyphicon-lock"></span> --> <span>Password</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="text" name="pass" class="form-control" value="<?php echo $s->pass; ?>" >
					</div>

					<div class="form-group input-group ">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span>Confirm Password </span>
						</span>
						<input type="text" name="cpass" class="form-control" value="<?php echo $s->cpass; ?>" >
					</div>

					<div class="form-group input-group ">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span>Ground name</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="text" name="gnm" class="form-control" value="<?php echo $s->gnm; ?>">
					</div>

					<div class="form-group">
						<select class="form-control" id="city" name="city" onchange="getarea(this.value)" >
							<option selected="selected" disabled="disabled">- select city -</option>
							
							<?php
                                foreach($city as $c)
                                {
                                    if($s->cid==$c->cid)
                                    {
                                        ?>
                                        <option value="<?php echo $c->city_id;?>"
                                                selected="selected">
                                    <?php echo $c->city_name; ?>

                                    </option>
                                    <?php
                                    }
                                   else {
                                       ?>
                            <option value="<?php echo $c->city_id;?>">
                                <?php echo $c->city_name; ?>

                                       <?php
                                   }
                                       ?>
                            <?php
                            }
                            ?>

						</select>
					</div>
					<div class="form-group">
						<select class="form-control" id="area" name="area" >
								<option> <?php echo $s->area_name; ?></option>
						</select>
					</div>
				
					<div class="form-group input-group ">
						<span class="input-group-addon">
							<!-- <span class="glyphicon glyphicon-user"></span> --> <span>Address</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</span>
						<input type="text" name="add" class="form-control" value="<?php echo $s->adr; ?>" >
					</div>
				
					<div class="form-group input-group">
						<span class="input-group-addon">
							<span>Images</span>
						</span>
						<input class="form-control" type="file" name="img1">
						<input class="form-control" type="file" name="img2" style="margin-top: 7px; margin-bottom: 7px;">
						<input class="form-control" type="file" name="img3">
					</div>

					
					<div class="form-group">
						<input type="hidden" name="oid" value="<?php echo $s->oid; ?>">
						<button type="submit" name="update_profile" class="btn btn-primary col-xs-offset-2">Update</button>
						<button type="reset" class="btn btn-danger col-xs-offset-1">Cancel</button>
					</div>
				
					
				</form>
			</div>
		</div>
	</div>	

</body>
</html>

<?php
	include('footer.php');
?>