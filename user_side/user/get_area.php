<?php
include('conn.php');

if(isset($_REQUEST['id']))
{
	$id=$_REQUEST['id'];
	//echo $id;
	//exit;
	$sel="select * from area where city_id=$id";
	//echo $sel;
	//exit;
	$res=$conn->query($sel);
	while($r=$res->fetch_object())
	{
		?>
        
        	<option value="<?php echo $r->area_id;?>"><?php echo $r->area_name;?></option>
        <?php
	}
}		
?>

