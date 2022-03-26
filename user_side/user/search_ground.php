<?php
	include('control.php');

	if(!$_SESSION['em'])
    {
        header('location:../login.php');
    }

	include('header.php');




?>

<div>
<?php	
		if(isset($_REQUEST['search_ground']))
	{
		//$city=$_REQUEST['city'];
		//$area=$_REQUEST['area'];
		$ground=$_REQUEST['ground'];

		$sel="select * from owner_login where oid=$ground";
		//echo $sel;
		//exit;
		$q=$conn->query($sel);
		//$r=$q->fetch_object();
		//$val=$f->oid;
		//echo $val;
		//exit;

	?>
			<!-- blog -->
		<div class="blog">
			<!-- container -->
			<div class="container">
				<div class="col-md-12 blog-top-left-grid">
					<div class="left-blog left-single">
						<div class="blog-left">
							<div class="single-left-left">
								
							<?php
								while($r=$q->fetch_object())
								{?>

									<div class="row">
									  <div class="col-md-4">
									    <div class="thumbnail">
									     
									        <img src="../owner/<?php echo $r->img1; ?>" " alt="Lights" style="width:100%">
									        <div class="caption">
									          
									        </div>
									    
									    </div>
									  </div>
									  <div class="col-md-4">
									    <div class="thumbnail">
									     
									        <img src="../owner/<?php echo $r->img2; ?>" " alt="Nature" style="width:100%">
									        <div class="caption">
									          
									        </div>
									     
									    </div>
									  </div>
									  <div class="col-md-4">
									    <div class="thumbnail">
									      
									        <img src="../owner/<?php echo $r->img3; ?>" " alt="Fjords" style="width:100%">
									        <div class="caption">
									         
									        </div>
									
									    </div>
									  </div>
								</div>
							<?php		
								}
							?>	
								 


							</div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
			<!-- //container -->
		</div>
		<!-- //blog -->




<div class="container" style="margin-bottom: 30px;font-size: 20px;text-align: center;">
	
	<table class="table table-bordered">
		<tr class="info">
			<th><span style="margin-left: 150px;font-size: 21px">Time</span></th>
			<th><span style="margin-left: 150px;font-size: 21px">Price</span></th>
			<th><span style="margin-left: 150px;font-size: 21px">Book</span></th>
		</tr>
		<?php
			$sel2="select * from manage_ground where oid=$ground";
			//echo $sel2;
			//exit;
			$res=$conn->query($sel2);
			while($f=$res->fetch_object())
			{?>
				<tr class="active">
					<td><?php echo $f->time;?></td>	
					<td><?php echo $f->price;?></td>
					<td><a href="book.php?bid=<?php echo $f->manage_id;?>"><button class="btn btn-success">Book</button></a></td>	
				</tr>

			<?php
			}
		?>
	</table>
</div>

<?php
	}
?>
</div>

<?php
	include('footer.php');
?>