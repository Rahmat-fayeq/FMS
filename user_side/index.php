
<?php
	include('user/control.php');

	include('header.php');
?>	

	<marquee direction="left" bgcolor="skyblue" align="middle" vspace=2px; height=100px;>
		<font size="30" face="Arial" color="yellow">
			<b>Welcome</b>
		</font>
	</marquee>
		
		<!-- banner -->
		<div class="banner-slider">
			<!-- banner Slider starts Here -->
					<script src="asset_user/js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<!--//End-slider-script -->
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="banner"> </div>
							</li>
							<li>
								<div class="banner-img"> </div>
							</li>
						</ul>
					</div>
		</div>
		<!-- //banner -->
		
<?php
	include('footer.php');
?>		