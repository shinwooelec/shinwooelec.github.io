<!DOCTYPE html>
<html lang="en">
	<!-- head -->
		<?php session_start();
			$_SESSION['view']='volume';
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
			<!-- j-type main body -->
			<?php
				include ("volume_body.php");
 			?>
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
