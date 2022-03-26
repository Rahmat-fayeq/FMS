<?php
include('control.php');

  if(!$_SESSION['email'])
    {
        header('location:login.php');
    }

include('top_header.php'); 
include('left_menu.php');
?>

	
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Area</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="city">City</label>
                  <select id="city" name="city" class="form-control">
                    <option selected disabled>select city</option>
                      <?php  
                        foreach($city as $c)
                        {
                        	if($c->city_id==$a->city_id)
                        	{
                          ?>
                          <option selected="selected" value="<?php echo $c->city_id; ?>"><?php echo $c->city_name;?></option>
                        <?php 
                        	}
                        	else
                        	{?>

                        	<option value="<?php echo $c->city_id; ?>"><?php echo $c->city_name; ?></option>

                        	<?php	
                        	 } 
                        }
                      ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="area">Area</label>
                  <input type="text" class="form-control" id="area" placeholder="Enter Area" name="area" 
                  value="<?php echo $a->area_name; ?>">
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              	<input type="hidden" name="area_eid" value="<?php echo $_REQUEST['area_eid']; ?>">
                <button type="submit" class="btn btn-primary" name="area_update">Submit</button>
              </div>
            </form>
          </div>   
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>

</div>

<?php
include('footer.php');
?>