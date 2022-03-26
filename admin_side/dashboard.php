<?php
	include('control.php');

  if(!$_SESSION['email1'])
    {
        header('location:login.php');
    }

	require_once('top_header.php');
	require_once('left_menu.php');
?>

<div class="content-wrapper">

	<marquee align="bottom" height=1000px bgcolor='silver'> 
	    <font align="center" size=30px color=yellow>
			<b>Welcome</b>
		</font>
		
	</marquee>
	
</div>

<?php
	require_once('footer.php');
?>