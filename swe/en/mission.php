<!DOCTYPE html>
<html lang="en">
	<!-- head -->
		<?php session_start();
			$_SESSION['view']='mission';
			include ("head.php");
		?>
	<!-- / head -->
	<!-- navigation -->
		<?php
			$currentPage='mission';
			include ("nav.php");
		?>
	<!-- / navigation -->
	<body>

		<div class="container">
			<h1>Company Mission & Goals</h1>
			<!-- <p class="lead">Micro Switch, Volumn, Hinge</p> -->
			<div class="hero-unit">
				<div class="row">
					<div class="span3">
						<h5 style="text-indent: 6em;">Transformation</h5>
						<small>
						<span class="badge badge-important">1</span> Improve employees skills through up to date trainings 
						<br><span class="badge badge-important">2</span> Share critical values with clients and take actions 
						<br><span class="badge badge-important">3</span> Achieve client satisfaction from continous search for improvements 
						</small>
					</div>
					<div class="span3">
						<h5 style="text-indent: 6em;">Development and secure market competition</h5>
						<small>
						<span class="badge badge-important">1</span> Search for solutions from the core of the problems
						<br><span class="badge badge-important">2</span> Improve manufacturing process efficiencies and integrate new technologies
						<br><span class="badge badge-important">3</span> Broaden product lines and services 
						</small>
					</div>
					<div class="span3">
						<h5 style="text-indent: 6em;">Client Focused Business Model</h5>
						<small>
						<span class="badge badge-important">1</span> Develop defect free products
						<br><span class="badge badge-important">2</span> Build client trust by providing quality focused business
						<br><span class="badge badge-important">3</span> Continuously seek for better quality products 
						</small>
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
