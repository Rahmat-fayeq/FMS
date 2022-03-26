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
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="owner_reg.php">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

        <section class="content">

      <div class="row">
        <div class="col-xs-12">      
          <!-- /.box-header -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Ground owner</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
             <div class="box-body" style="overflow-x: scroll;"> 
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Contact number</th>
                  <th>Password</th>
                  <th>City</th>
                  <th>Area</th>
                  <th>Address</th>
                  <th>Ground Name</th>
                  <th colspan="3" style="text-align: center;">Images</th>
                  <th>Block</th>
                  <th>Delete</th>
                  
                </tr>
                </thead>
                <tbody>
                 
              <?php
                
                  foreach($owner as $o)
                  {
                    ?>

                    <tr>
                      
                        <td><?php echo $o->onm; ?></td>
                        <td><?php echo $o->email; ?></td>
                        <td><?php echo $o->mno; ?></td>
                        <td><?php echo $o->pass; ?></td>
                        <td><?php echo $o->city_name; ?></td>
                        <td><?php echo $o->area_name; ?></td>
                        <td><?php echo $o->adr; ?></td>
                        <td><?php echo $o->gnm; ?></td>
                        <td>
                          <a href="../user_side/owner/<?php echo $o->img1; ?>">
                            <img width="70" src="../user_side/owner/<?php echo $o->img1; ?>">
                          </a>
                        </td>
                        <td>
                          <a href="../user_side/owner/<?php echo $o->img2; ?>">
                            <img width="70" src="../user_side/owner/<?php echo $o->img2; ?>">
                          </a>
                        </td>
                        <td>
                          <a href="../user_side/owner/<?php echo $o->img3; ?>">
                            <img width="70" src="../user_side/owner/<?php echo $o->img3; ?>">
                          </a>
                        </td>

                  <td><a href="owner_status.php?sid=<?php echo $o->oid; ?>"><?php echo $o->status; ?></a></td>
                  <td><a href="control.php?did=<?php echo $o->oid; ?>">delete</a></td>


                    </tr>


                <?php
                  }
              ?>   
                   
                </tbody>
                <tfoot>
               <tr>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Contact number</th>
                  <th>Password</th>
                  <th>City</th>
                  <th>Area</th>
                  <th>Address</th>
                  <th>Ground Name</th>
                  <th colspan="3">Images</th>
                  <th>Block</th>
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