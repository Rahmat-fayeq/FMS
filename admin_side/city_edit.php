<?php
include('control.php');
include('top_header.php'); 
include('left_menu.php');
?>  

   <!-- Content Wrapper. Contains page content -->
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
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">city</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="city">City Name</label>
                  <input type="text" class="form-control" id="city" name="city" placeholder="Enter city name" value="<?php echo $c->city_name; ?>">
                </div>
               
              <div class="box-footer">
                <input type="hidden" name="city_eid" value="<?php echo $_REQUEST['city_eid']; ?>">
                <button type="submit" class="btn btn-primary" name="city_update">Submit</button>
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