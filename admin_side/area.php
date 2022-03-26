<?php
include('control.php');

  if(!$_SESSION['email1'])
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
                          ?>
                          <option value="<?php echo $c->city_id; ?>"><?php echo $c->city_name; ?></option>
                        <?php  
                        }
                      ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="area">Area</label>
                  <input type="text" class="form-control" id="area" placeholder="Enter Area" name="area">
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_area">Submit</button>
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
                  <th>City</th>
                  <th>Area</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
                </thead>
                <tbody>
               
                <?php
                  foreach($area as $a)
                  {
                    ?>
                      <tr>
                          <td><?php echo $a->city_name; ?></td>
                          <td><?php echo $a->area_name ?></td>
                          <td><a href="area_edit.php?area_eid=<?php echo $a->area_id; ?>">edit</a></td>
                          <td><a href="control.php?area_did=<?php echo $a->area_id; ?>">delete</a></td>
                      </tr>
                    <?php
                  }
                ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>City</th>
                  <th>Area</th>
                  <th>edit</th>
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
    <!-- /.content -->

</div>
<?php
include('footer.php');
?>