<?php
include('conn.php');
if(isset($_REQUEST['sid'])) 
{
	$id=$_REQUEST['sid'];
	
	$st="select status from user_login where uid=$id";
	$st_res=$conn->query($st);
	$status=$st_res->fetch_object();
	 $st_nm=$status->status;
	
	if($st_nm=='Unblock')
	{
		 $up="update user_login set status='Block' where uid=$id";
		$res=$conn->query($up);
		if($res)
		{
			header('location:user_reg.php');
		}
		else
		{
			echo "status is not updated";
		}
	}
	else
	{
		$up="update user_login set status='Unblock' where uid=$id";
		$res=$conn->query($up);
		if($res)
		{
			header('location:user_reg.php');
		}
		else
		{
			echo "status is not updated";
		}
	}
}
?>