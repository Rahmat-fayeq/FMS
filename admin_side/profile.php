<?php
include('control.php');

  if(!$_SESSION['email'])
    {
        header('location:login.php');
    }


include('top_header.php'); 
include('left_menu.php');

?>

	<div class="content-wrapper">

		

	</div>	

<?php
include('footer.php');
?>