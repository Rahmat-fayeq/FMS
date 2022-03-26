<?php
include('conn.php');
if(isset($_REQUEST['sid'])) 
{
	$id=$_REQUEST['sid'];
	
	$st="select status from owner_login where oid=$id";
	$st_res=$conn->query($st);
	$status=$st_res->fetch_object();
	 $st_nm=$status->status;
	
	if($st_nm=='Unblock')
	{
		 $up="update owner_login set status='Block' where oid=$id";
		$res=$conn->query($up);
		if($res)
		{
			header('location:owner_reg.php');
		}
		else
		{
			echo "status is not updated";
		}
	}
	else
	{
		$up="update owner_login set status='Unblock' where oid=$id";
		$res=$conn->query($up);
		if($res)
		{
			header('location:owner_reg.php');
		}
		else
		{
			echo "status is not updated";
		}
	}
}
?>