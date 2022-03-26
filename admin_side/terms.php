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
              <h3 class="box-title">Terms and Conditions</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="info">Terms and conditions</label>
                    <textarea id="info" class="form-control" cols="10" rows="10" name="info"> </textarea>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_terms">Submit</button>
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
                  <th>Terms and conditions</th>
                  <th>Delete</th>  
                </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($terms as $a)
                    {
                  ?>
                  <tr>
                       <td>
                             <p><?php  echo $a->terms; ?></p>
                       </td>
                       <td><a href="control.php?terms_did=<?php echo $a->terms_id;?>"><button class="btn btn-danger">delete</button></a></td>
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Terms and conditions</th>
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