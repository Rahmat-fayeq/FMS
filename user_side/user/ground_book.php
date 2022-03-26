<?php
	include('control.php');

	if(!$_SESSION['em'])
    {
        header('location:../login.php');
    }

	include('header.php');
?>

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
	    //alert(data);
   		 },
		});
	}
   </script>

  <script type="text/javascript">
	function getground(val)
	{
	  	$.ajax({
	  	type: 'POST',
	  	url: 'get_ground.php',
	  	data: "id="+val,
	  	success: function(data){
	      
	    $("#ground").html(data);
	   // alert(data);
   		 },
		});
	}
   </script> 
	

<div class="container" style="margin-top: 3%; margin-bottom: 3%; background-color: silver;padding-bottom: 5%;padding-top: 5%;border-radius: 7px;">

	<div class="col-xs-offset-3">
		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="search_ground.php" name="batch" id="batch">
				<div class="form-group">
	
						<label class="control-label col-xs-2" for="city">City:</label>
					<div class="col-xs-4">
						<select  class="form-control" style="margin-bottom: 10px;" id="city" name="city" onchange="getarea(this.value)">
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
					
				</div>
						
			<div class="form-group">
				<label class="control-label col-xs-2">Area:</label>
				<div class="col-xs-4">	
				<select name="area" id="area" class="form-control " style="margin-bottom: 10px;" onchange="getground(this.value)">
					<option> </option>
				</select>

				</div>		
			</div>

			<div class="form-group">
				<label class="control-label col-xs-2">Ground:</label>
				<div class="col-xs-4">
					<select name="ground" id="ground" class="form-control" style="margin-bottom: 10px;">
						<option> </option>
					</select>
				</div>		
			</div>

			<div class="form-group">
				<button class="btn btn-primary col-xs-offset-1" name="search_ground" style="width: 50%;">Search</button> 
			</div>
			
		</form>
	</div>	
	
</div>
<?php
	include('footer.php');
?>