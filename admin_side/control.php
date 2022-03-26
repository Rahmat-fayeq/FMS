<?php

	include('model.php');
	session_start();
	$obj=new model();

/* ********************  login **************** */

	if(isset($_REQUEST['login']))
	{
		$email=$_REQUEST['email'];
		$pass=$_REQUEST['pass'];
		$data=array("email"=>$email,"password"=>$pass);
		$lgn=$obj->select_where($conn,'admin_login',$data);
		$chk=$lgn->num_rows;
		if($chk==1)
		{
			$_SESSION['email1']=$email;
			header('location:dashboard.php');
		}
		else
		{
			echo "Something went wrong <br> please try again";
		}
	}


	if(isset($_REQUEST['save']))
	{
		setcookie("name",$email,time()+3600);
		setcookie("pass",$pass,time()+3600);
	}

/* ********************  city **************** */

	if(isset($_REQUEST['add_city']))
	{
		$nm=$_REQUEST['city'];

		$data=array("city_name"=>$nm);
		if($ins=$obj->insert_all($conn,'city',$data))
		{
			header('location:city.php');
		}
		else
		{
			echo "Not inserted !";
		}
	}

	$city=$obj->select_all($conn,'city');

	if(isset($_REQUEST['city_eid']))
	{
	    $id=$_REQUEST['city_eid'];
		$where=array("city_id"=>$id);
		$sel=$obj->select_where($conn,'city',$where);
		$c=$sel->fetch_object();
	
	}
	if(isset($_REQUEST['city_update']))
	{		
			$id=$_REQUEST['city_eid'];
			$nm=$_REQUEST['city'];
			$data=array("city_name"=>$nm);
			$where=array("city_id"=>$id);
			if($up=$obj->update_all($conn,'city',$data,$where))
			{
				header('location:city.php');
			}
			else
			{
				echo "Not updated";
			}
	}

	if(isset($_REQUEST['city_did']))
	{
		$id=$_REQUEST['city_did'];
		$where=array("city_id"=>$id);
		if($del=$obj->delete_all($conn,'city',$where))
		{
			header('location:city.php');
		}
		else
		{
			echo "Not deleted";
		}
	}

/* ********************  area **************** */

	if(isset($_REQUEST['add_area']))
	{
		$city=$_REQUEST['city'];
		$area=$_REQUEST['area'];
		$data=array("area_name"=>$area,"city_id"=>$city);
		if($ins=$obj->insert_all($conn,'area',$data))
		{
			header('location:area.php');
		}
		else
		{
			echo "Not inserted !";
		}
	}

	$area=$obj->select_join($conn,'city','area','city.city_id=area.city_id');

	if(isset($_REQUEST['area_eid']))
	{
	    $id=$_REQUEST['area_eid'];
		$where=array("area_id"=>$id);
		$sel=$obj->select_where($conn,'area',$where);
		$a=$sel->fetch_object();
	
	}
	if(isset($_REQUEST['area_update']))
	{		
			$id=$_REQUEST['area_eid'];
			$city=$_REQUEST['city'];
			$area=$_REQUEST['area'];
			$data=array("area_name"=>$area,"city_id"=>$city);
			$where=array("area_id"=>$id);
			if($up=$obj->update_all($conn,'area',$data,$where))
			{
				header('location:area.php');
			}
			else
			{
				echo "Not updated";
			}
	}

	if(isset($_REQUEST['area_did']))
	{
		$id=$_REQUEST['area_did'];
		$where=array("area_id"=>$id);
		if($del=$obj->delete_all($conn,'area',$where))
		{
			header('location:area.php');
		}
		else
		{
			echo "Not deleted";
		}
	}

/* ********************  About us **************** */
	
	if(isset($_REQUEST['add_info']))
	{
		$info=$_REQUEST['info'];
		
		$img_nm=$_FILES['img']['name'];
        $path="asset_admin/uploads/".$_FILES['img']['name'];
        $tmp=$_FILES['img']['tmp_name'];

		$data=array("info"=>$info,"img"=>$path);
		if($ins=$obj->insert_all($conn,'aboutUs',$data))
		{
			move_uploaded_file($tmp,$path);
			header('location:about_us.php');
		}
		else
		{
			echo "Not inserted !";
		}
	}

	$aboutUs=$obj->select_all($conn,'aboutUs');

	if(isset($_REQUEST['info_eid']))
	{
	    $id=$_REQUEST['info_eid'];
		$where=array("info_id"=>$id);
		$sel=$obj->select_where($conn,'aboutUs',$where);
		$f=$sel->fetch_object();
	
	}
	if(isset($_REQUEST['update_info']))
	{		
			$id=$_REQUEST['info_eid'];
			$info=$_REQUEST['info'];
			$path=$_REQUEST['path'];
			$data=array("info"=>$info,"img_path"=>$path);
			$where=array("info_id"=>$id);
			if($up=$obj->update_all($conn,'aboutUs',$data,$where))
			{
				header('location:about_us.php');
			}
			else
			{
				echo "Not updated";
			}
	}

	if(isset($_REQUEST['info_did']))
	{
		$id=$_REQUEST['info_did'];
		$where=array("info_id"=>$id);
		if($del=$obj->delete_all($conn,'aboutUs',$where))
		{
			header('location:about_us.php');
		}
		else
		{
			echo "Not deleted";
		}
	}


/* ********************  user registration **************** */

	$user=$obj->select_all($conn,'user_login');

	if(isset($_REQUEST['udid']))
	{
		$id=$_REQUEST['udid'];
		$where=array("uid"=>$id);
		if($del=$obj->delete_all($conn,'user_login',$where))
		{
			header('location:user_reg.php');
		}
		else
		{
			echo "Not deleted";
		}
	}

/* ********************  owner registration **************** */
//	$owner=$obj->select_all($conn,'owner_login');

	$owner=$obj->select_join2($conn,'owner_login','city','area','owner_login.city_id=city.city_id','owner_login.area_id=area.area_id');

	if(isset($_REQUEST['did']))
	{
		$id=$_REQUEST['did'];
		$where=array("oid"=>$id);
		if($del=$obj->delete_all($conn,'owner_login',$where))
		{
			header('location:owner_reg.php');
		}
		else
		{
			echo "Not deleted";
		}
	}

/* ********************  owner feedback **************** */	


	$owner_feedback=$obj->select_all($conn,'owner_feedback');

	if(isset($_REQUEST['odid']))
	{
		$id=$_REQUEST['odid'];
		$where=array("of_id"=>$id);
		if($del=$obj->delete_all($conn,'owner_feedback',$where))
		{
			header('location:owner_feedback.php');
		}
		else
		{
			echo "Not deleted";
		}
	}
/* ********************  user feedback **************** */	
	$user_feedback=$obj->select_all($conn,'user_feedback');

	if(isset($_REQUEST['user_did']))
	{
		$id=$_REQUEST['user_did'];
		$where=array("uf_id"=>$id);
		if($del=$obj->delete_all($conn,'user_feedback',$where))
		{
			header('location:user_feedback.php');
		}
		else
		{
			echo "Not deleted";
		}
	}
/* ********************  visitor feedback **************** */		

$visitor_feedback=$obj->select_all($conn,'visitor_feedback');

	if(isset($_REQUEST['vdid']))
	{
		$id=$_REQUEST['vdid'];
		$where=array("vf_id"=>$id);
		if($del=$obj->delete_all($conn,'visitor_feedback',$where))
		{
			header('location:visitor_feedback.php');
		}
		else
		{
			echo "Not deleted";
		}
	}

/* ********************  Terms and conditions **************** */

	if(isset($_REQUEST['add_terms']))
	{
		$info=$_REQUEST['info'];
	
		$data=array("terms"=>$info);
		if($ins=$obj->insert_all($conn,'terms',$data))
		{
			header('location:terms.php');
		}
		else
		{
			echo "Not inserted !";
		}
	}

	$terms=$obj->select_all($conn,'terms');

		if(isset($_REQUEST['terms_did']))
	{
		$id=$_REQUEST['terms_did'];
		$where=array("terms_id"=>$id);
		if($del=$obj->delete_all($conn,'terms',$where))
		{
			header('location:terms.php');
		}
		else
		{
			echo "Not deleted";
		}
	}
?>