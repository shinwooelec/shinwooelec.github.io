
<!DOCTYPE html>
<html lang="en">
	<!-- head -->
		<?php session_start();
			$_SESSION['view']='product';
			include ("head.php");
		?>
	<!-- / head -->
	<!-- navigation -->
		<?php
			$currentPage='product';
			include ("nav.php");
		?>
	<!-- / navigation -->
	<body>

		<div class="container">
			<small style="color:dark-blue;font-size:11px;">You may view the product catalogs by clicking on the toggle button below.  You can also hide the information by clicking on the toggle button again.</small>
			<br>
		    <div class="btn-group" data-toggle="buttons-checkbox">
			    <button type="button" class="btn btn-primary active" data-toggle="collapse" data-target="#stypeToggle" ><small style="color:dark-blue;font-size:11px;">S-Type Micro Switch</small></button>
			    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#jtypeToggle"><small style="color:dark-blue;font-size:11px;">J-Type Micro Switch</small></button>
			    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#volumeToggle"><small style="color:dark-blue;font-size:11px;">Volume Switch</small></button>
			    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#hingeToggle"><small style="color:dark-blue;font-size:11px;">Hinges</small></button>
		    </div>

		    <div id="stypeToggle" class="collapse in">
				<!-- s-type main body include-->
				<?php
					include ("s_type_body.php");
				?>
			</div>
			<div id="jtypeToggle" class="collapse">
				<!-- j-type main body include-->
				<?php
					include ("j_type_body.php");
				?>	
			</div>
			<div id="volumeToggle" class="collapse">
				<!-- volume main body include-->
				<?php
					include ("volume_body.php");
				?>	
			</div>
			<div id="hingeToggle" class="collapse">
				<!-- hinge main body include-->
				<?php
					include ("hinge_body.php");
				?>							
			</div>
			<hr class="hr">

			<!-- footer -->
			<?php
				include ("modal_gallery.php");
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
