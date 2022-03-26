<?php
include('conn.php');

if(isset($_REQUEST['id']))
{
	$id=$_REQUEST['id'];
	//echo $id;
	//exit;
	$sel="select * from owner_login where area_id=$id";
	//echo $sel;
	//exit;
	$res=$conn->query($sel);
	while($r=$res->fetch_object())
	{
		?>
        
        	<option value="<?php echo $r->oid;?>"><?php echo $r->gnm;?></option>
        <?php
	}
}		
?>

