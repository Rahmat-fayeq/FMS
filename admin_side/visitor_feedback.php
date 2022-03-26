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

        <section class="content">

      <div class="row">
        <div class="col-xs-12">      
          <!-- /.box-header -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">visitor feedback</h3>
            </div>
            <!-- /.box-header -->
           

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      foreach($visitor_feedback as $of)
                      {
                        ?>
                        <tr>
                          <td><?php echo $of->name; ?></td>
                          <td><?php echo $of->email; ?></td>
                          <td><?php echo $of->subject; ?></td>
                          <td><?php echo $of->message; ?></td>
                          <td><a href="control.php?vdid=<?php echo $of->vf_id; ?>">delete</a></td>
                        </tr>

                    <?php    
                      }

                  ?>
                </tbody>
                <tfoot>
               <tr>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
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