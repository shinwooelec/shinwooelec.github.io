<!DOCTYPE html>
<html lang="en">
	<!-- head -->
		<?php session_start();
			$_SESSION['view']='intro';
			include ("head.php");
		?>
	<!-- / head -->
	<!-- navigation -->
		<?php
			$currentPage='intro';
			include ("nav.php");
		?>
	<!-- / navigation -->
	<body>

		<div class="container">
			<h1>CEO Introduction</h1>
			<!-- <p class="lead">Micro Switch, Volumn, Hinge</p> -->
			<div class="hero-unit">
				<div class="row">

					<div class="left span8">
						<small>
SW ELECTRONICS CO.,LTD is a manufacturing company specializes in

<br>micro switches and volume switches used in consumer goods such as cars, electronics, appliances and more.

<br> 

<br>SW ELECTRONICS CO.,LTD is focused on improving products quality and providing

<br>cost effective solutions to our clients.

<br> 

<br>At SW ELECTRONICS CO.,LTD, we firmly believe in innovations.

<br>We have been steadly growing by continous investments on our facilities and processes.

<br>

<br>By acquiring ISO 9001:2000 certification, we consistently improved

<br>our quality control processes.

<br>Our primary goal is to provide higher quality of our line of products at more competitive price.

<br> 

<br>Also by acquiring ISO/TS 16949:2002 certification,

<br>we are improving quality of our products for automotive parts as well.

<br>SW ELECTRONICS CO.,LTD's business model is to adapt to the fast changing business market of 21st century.

<br> 

<br>We will ensure our clients that SW ELECTRONICS CO.,LTD will always work extra hard to provide

<br>quality products that will return maximum benefit to our clients.

<br>

<br>ach and every individual employees here at SW ELECTRONICS CO.,LTD sincerely thank you for your business.

</small> 
<br>
    <blockquote class="pull-right">
    <small> SW ELECTRONICS CO.,LTD Employees</small> 
    </blockquote>
					</div>
				</div>
			</div>

			<hr class="hr">

			<!-- footer -->
			<?php
				$currentLanguage = 'english';
				include ("footer.php");
 			?>
			<!-- / footer -->

		</div>
		<!-- /container -->

		<!-- Le javascript
		================================================== -->
		<?php
			include ("javascript_include.php");
		?>
	</body>
</html>
