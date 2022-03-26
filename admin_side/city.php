<?php
include('control.php');

  if(!$_SESSION['email1'])
    {
        header('location:login.php');
    }

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
                  <input type="text" class="form-control" id="city" name="city" placeholder="Enter city name">
                </div>
               
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_city">Submit</button>
              </div>
            </form>
          </div>   
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>

     <section class="content">
      <div class="row">
        <div class="col-xs-12">      
          <!-- /.box-header -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>City Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
                </thead>
                <tbody>

                <?php
                  foreach($city as $c)
                  {
                    ?>
                      <tr>
                          <td><?php echo $c->city_name;  ?></td>
                          <td><a href="city_edit.php?city_eid=<?php echo $c->city_id; ?>">edit</a></td>
                          <td><a href="control.php?city_did=<?php echo $c->city_id; ?>">delete</a></td>
                      </tr>
                    <?php
                  }
                ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>City Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

</div>
<?php
include('footer.php');
?>