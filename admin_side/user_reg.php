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
        <li><a href="user_reg.php">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

        <section class="content">

      <div class="row">
        <div class="col-xs-12">      
          <!-- /.box-header -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage User</h3>
            </div>
            <!-- /.box-header -->
           

            <div class="box-body">
            <div class="box-body" style="overflow-x: scroll;">  
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>User Full Name</th>
                  <th>Email</th>
                  <th>Contact number</th>
                  <th>Password</th>
                  <th>Block</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                        foreach($user as $u)
                        {
                        ?>
                          <tr>
                            <td><?php echo $u->unm; ?></td>
                            <td><?php echo $u->email; ?></td>
                            <td><?php echo $u->mno; ?></td>
                            <td><?php echo $u->pass; ?></td>
                           <td><a href="status.php?sid=<?php echo $u->uid;?>"><?php echo $u->status; ?></a></td>
                            <td><a href="control.php?udid=<?php echo $u->uid;?>">delete</a></td>
                          </tr>
                      <?php
                        }

                  ?>
               
                </tbody>
                <tfoot>
               <tr>
                 <th>User Full Name</th>
                  <th>Email</th>
                  <th>Contact number</th>
                  <th>Password</th>
                  <th>Block</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
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