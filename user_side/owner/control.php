<?php
	require_once('model.php');

	session_start();

	$obj=new model();




/* *************************** owner registration ********************** */	

	if(isset($_REQUEST['reg']))
	{
		$nm=$_REQUEST['nm'];
		$email=$_REQUEST['email'];
		$mno=$_REQUEST['mno'];
		$pass=$_REQUEST['pass'];
		$cpass=$_REQUEST['cpass'];
		$city=$_REQUEST['city'];
		$area=$_REQUEST['area'];
		$add=$_REQUEST['add'];
		$gnm=$_REQUEST['gnm'];

		 $img_nm1=$_FILES['img1']['name'];
	     $path1="upload/".$_FILES['img1']['name'];
	     $tmp1=$_FILES['img1']['tmp_name'];
	  
	     $img_nm2=$_FILES['img2']['name'];
	     $path2="upload/".$_FILES['img2']['name'];
	     $tmp2=$_FILES['img2']['tmp_name'];

	     $img_nm3=$_FILES['img3']['name'];
	     $path3="upload/".$_FILES['img3']['name'];
	     $tmp3=$_FILES['img3']['tmp_name'];

		$data=array("onm"=>$nm,"email"=>$email,"mno"=>$mno,"pass"=>$pass,"cpass"=>$cpass,"city_id"=>$city,"area_id"=>$area,"adr"=>$add,"gnm"=>$gnm,"img1"=>$path1,"img2"=>$path2,"img3"=>$path3);

		if($ins=$obj->insert_all($conn,'owner_login',$data))
		{
			 move_uploaded_file($tmp1,$path1);
		 	 move_uploaded_file($tmp2,$path2);
		  	 move_uploaded_file($tmp3,$path3);
			$_SESSION['email']=$email;
			header('location:index.php');
		}
		else
		{
			echo "Not inserted";
		}
	}

	$city=$obj->select_all($conn,'city');

/* ***************************  profile ********************** */	

	if(isset($_REQUEST['update_profile']))
	{
		$nm=$_REQUEST['nm'];
		$email=$_REQUEST['email'];
		$mno=$_REQUEST['mno'];
		$pass=$_REQUEST['pass'];
		$cpass=$_REQUEST['cpass'];
		$city=$_REQUEST['city'];
		$area=$_REQUEST['area'];
		$add=$_REQUEST['add'];
		$gnm=$_REQUEST['gnm'];

		 $img_nm1=$_FILES['img1']['name'];
	     $path1="upload/".$_FILES['img1']['name'];
	     $tmp1=$_FILES['img1']['tmp_name'];
	  
	     $img_nm2=$_FILES['img2']['name'];
	     $path2="upload/".$_FILES['img2']['name'];
	     $tmp2=$_FILES['img2']['tmp_name'];

	     $img_nm3=$_FILES['img3']['name'];
	     $path3="upload/".$_FILES['img3']['name'];
	     $tmp3=$_FILES['img3']['tmp_name'];

		$data=array("onm"=>$nm,"email"=>$email,"mno"=>$mno,"pass"=>$pass,"cpass"=>$cpass,"city_id"=>$city,"area_id"=>$area,"adr"=>$add,"gnm"=>$gnm,"img1"=>$path1,"img2"=>$path2,"img3"=>$path3);

		$id=$_REQUEST['oid'];
		$where=array("oid"=>$id);

		if($ins=$obj->update_all($conn,'owner_login',$data,$where))
		{
			 move_uploaded_file($tmp1,$path1);
		 	 move_uploaded_file($tmp2,$path2);
		  	 move_uploaded_file($tmp3,$path3);
			$_SESSION['email']=$email;
			header('location:profile.php');
		}
		else
		{
			echo "Not updated";
		}
	}

/* **************************** about ****************** */	
$about=$obj->select_all($conn,'aboutus');	

/* ************************ contact us ****************** */

	if(isset($_REQUEST['feeback']))
	{
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$subject=$_REQUEST['subject'];
		$message=$_REQUEST['message'];

		$data=array("name"=>$name,"email"=>$email,"subject"=>$subject,"message"=>$message);

		if($ins=$obj->insert_all($conn,'owner_feedback',$data))
		{
			echo "thanks";
		}
		else
		{
			echo "Not inserted";
		}
	}

/* *************************** matches ********************** */	

	if(isset($_REQUEST['add_matches']))
	{
		$team1=$_REQUEST['team1'];
		$team2=$_REQUEST['team2'];
		$place=$_REQUEST['place'];
		$date=$_REQUEST['date'];
		$time=$_REQUEST['time'];
		$price=$_REQUEST['price'];
		$id=$_REQUEST['oid'];
		//echo $id;
		//exit;

		$data=array("team1"=>$team1,"team2"=>$team2,"place"=>$place,"date"=>$date,"time"=>$time,"price"=>$price,"oid"=>$id);

		if($ins=$obj->insert_all($conn,'matches',$data))
		{
			header('location:matches.php');
		}
		else
		{
			echo "Not inserted";
		}
	}

	if(isset($_REQUEST['did']))
	{
		$id=$_REQUEST['did'];
		$where=array("mid"=>$id);
		if($del=$obj->delete_all($conn,'matches',$where))
		{
			header('location:matches.php');
		}
		else
		{
			echo "Not deleted";
		}
	}

	if(isset($_REQUEST['eid']))
	{
		$id=$_REQUEST['eid'];
		$where=array("mid"=>$id);
		$sel=$obj->select_where($conn,'matches',$where);
		$f=$sel->fetch_object();
		
	}

	if(isset($_REQUEST['update_matches']))
	{
		$team1=$_REQUEST['team1'];
		$team2=$_REQUEST['team2'];
		$place=$_REQUEST['place'];
		$date=$_REQUEST['date'];
		$time=$_REQUEST['time'];
		$price=$_REQUEST['price'];

		$data=array("team1"=>$team1,"team2"=>$team2,"place"=>$place,"date"=>$date,"time"=>$time,"price"=>$price);

		$id=$_REQUEST['mid'];
	//	echo $id;
	//	exit;
		$where=array("mid"=>$id);

		if($ins=$obj->update_all($conn,'matches',$data,$where))
		{
			header('location:matches.php');
		}
		else
		{
			echo "Not updated";
		}
	}

/* *************************** booked ticket ********************** */	

	if(isset($_REQUEST['ticket_did']))
	{
		$id=$_REQUEST['ticket_did'];
		$where=array("tid"=>$id);
		if($del=$obj->delete_all($conn,'bookticket',$where))
		{
			header('location:ticket.php');
		}
		else
		{
			echo "Not deleted";
		}
	}

/* *************************** Training ********************** */	

	if(isset($_REQUEST['add_training_time']))
	{
		$fm=$_REQUEST['fm'];
		$tm=$_REQUEST['tm'];
		$ff=$_REQUEST['ff'];
		$tf=$_REQUEST['tf'];

		$oid=$_REQUEST['oid'];
//		echo $oid;
//		exit;

		$data=array("fm"=>$fm,"tm"=>$tm,"ff"=>$ff,"tf"=>$tf,"oid"=>$oid);

		if($ins=$obj->insert_all($conn,'training_time',$data))
		{
			header('location:time.php');
		}
		else
		{
			echo "Not inserted";
		}
	}

	if(isset($_REQUEST['training_did']))
	{
		$id=$_REQUEST['training_did'];
		$where=array("training_id"=>$id);
		if($del=$obj->delete_all($conn,'training_time',$where))
		{
			header('location:time.php');
		}
		else
		{
			echo "Not deleted";
		}
	}

/* *************************** Managing ground ********************** */	

	if(isset($_REQUEST['manage_ground']))
	{
		$time=$_REQUEST['time'];
		$amount=$_REQUEST['price'];

		$oid=$_REQUEST['oid'];
//		echo $oid;
//		exit;

		$data=array("time"=>$time,"price"=>$amount,"oid"=>$oid);

		if($ins=$obj->insert_all($conn,'manage_ground',$data))
		{
			header('location:manage_ground.php');
		}
		else
		{
			echo "Not inserted";
		}
	}

	if(isset($_REQUEST['manage_did']))
	{
		$id=$_REQUEST['manage_did'];
		$where=array("manage_id"=>$id);
		if($del=$obj->delete_all($conn,'manage_ground',$where))
		{
			header('location:manage_ground.php');
		}
		else
		{
			echo "Not deleted";
		}
	}

	if(isset($_REQUEST['rg_did']))
	{
		$id=$_REQUEST['rg_did'];
		$where=array("gid"=>$id);
		if($del=$obj->delete_all($conn,'bookground',$where))
		{
			header('location:ground.php');
		}
		else
		{
			echo "Not deleted";
		}
	}

/* *************************** batchs ********************** */
	if(isset($_REQUEST['batch_did']))
	{
		$id=$_REQUEST['batch_did'];
		$where=array("tr_id"=>$id);
		if($del=$obj->delete_all($conn,'training_reg',$where))
		{
			header('location:batch.php');
		}
		else
		{
			echo "Not deleted";
		}
	}


	
?>