<?php
	require_once('model.php');
	session_start();
	$obj=new model();


/* *************************** user registration ********************** */	

	if(isset($_REQUEST['reg']))
	{
		$nm=$_REQUEST['nm'];
		$em=$_REQUEST['email'];
		$mno=$_REQUEST['mno'];
		$pass=$_REQUEST['pass'];
		$cpass=$_REQUEST['cpass'];
		$data=array("unm"=>$nm,"email"=>$em,"mno"=>$mno,"pass"=>$pass,"cpass"=>$cpass);

		if($ins=$obj->insert_all($conn,'user_login',$data))
		{
			$_SESSION['em']=$em;
			header('location:index.php');
		}
		else
		{
			echo "Not inserted";
		}
	}

/* *************************** about ********************** */	
	$about=$obj->select_all($conn,'aboutus');

/* ************************ contact us ****************** */

	if(isset($_REQUEST['feedback']))
	{
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$subject=$_REQUEST['subject'];
		$message=$_REQUEST['message'];

		$data=array("name"=>$name,"email"=>$email,"subject"=>$subject,"message"=>$message);

		if($ins=$obj->insert_all($conn,'user_feedback',$data))
		{
			echo "thanks";
		}
		else
		{
			echo "Not inserted";
		}
	}

/* ************************ matches ****************** */	

$matches=$obj->select_all($conn,'matches');

/* ************************ book ticket ****************** */	


	$matche_object=$obj->select_all($conn,'matches');

	if(isset($_REQUEST['book_ticket']))
	{
		$nm=$_REQUEST['nm'];
		$email=$_REQUEST['email'];
		$mno=$_REQUEST['mno'];
		$mid=$_REQUEST['mid'];
		$oid=$_REQUEST['oid'];
	//	echo $mid; echo $oid;
		//exit;
		$data=array("name"=>$nm,"email"=>$email,"mno"=>$mno,"mid"=>$mid,"oid"=>$oid);
		if($ins=$obj->insert_all($conn,'bookticket',$data))
		{?>
			<script src="../asset_user/js/jquery.min.js"></script>
			<script type="text/javascript">
				alert("The Ticket has been booked successfully");
			</script>
		<?php	
		}
		else
		{
			echo "Sorry! Ticket did not book";
		}
	}

/* ************************ Training batch ****************** */

	$city=$obj->select_all($conn,'city');


	if(isset($_REQUEST['reg_training']))
	{
		$nm=$_REQUEST['nm'];
		$email=$_REQUEST['email'];
		$mno=$_REQUEST['mno'];
		$gender=$_REQUEST['gender'];
		//$tid=$_REQUEST['time'];
		$id=$_REQUEST['time'];
		$oid=$_REQUEST['oid'];
		//echo $tid; echo $oid;
		//exit;
		$data=array("name"=>$nm,"email"=>$email,"mno"=>$mno,"gender"=>$gender,"training_id"=>$id,"oid"=>$oid);
		if($ins=$obj->insert_all($conn,'training_reg',$data))
		{?>
			<script src="../asset_user/js/jquery.min.js"></script>
			<script type="text/javascript">
				alert("You have been registered successfully");
			</script>
		<?php	
		}
		else
		{
			echo "Sorry! Ticket did not register";
		}
	}

/* ************************ Book ground ****************** */
	
 $bookground=$obj->select_all($conn,'owner_login');


/* ************************ book ground ****************** */	

	if(isset($_REQUEST['book_ground']))
	{
		$nm=$_REQUEST['nm'];
		$email=$_REQUEST['email'];
		$mno=$_REQUEST['mno'];
		$date=$_REQUEST['date'];
		$time1=$_REQUEST['time1'];
		$time2=$_REQUEST['time2'];
		$mid=$_REQUEST['mid'];
		$oid=$_REQUEST['oid'];
	//	echo $mid; echo $oid;
		//exit;
		$data=array("name"=>$nm,"email"=>$email,"mno"=>$mno,"date"=>$date,"time1"=>$time1,"time2"=>$time2,"manage_id"=>$mid,"oid"=>$oid);
		if($ins=$obj->insert_all($conn,'bookground',$data))
		{
			?>
			<script src="../asset_user/js/jquery.min.js"></script>
			<script type="text/javascript">
				alert("The ground has been booked successfully");
			</script>
		<?php	
		}
		else
		{
			echo "Sorry! Ground did not book";
		}
	}


?>