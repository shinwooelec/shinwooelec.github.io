<!DOCTYPE html>
<html lang="en">
	<!-- head -->
		<?php session_start();
			$_SESSION['view']='development';
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
			<h1>Development Information </h1>
			<div class="hero-unit">
				<div class="row">
					<div class="span9">

						<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
						   
							<script>
								var fileArray = ['dev1','dev2','dev3','dev4'];
								var displayArray = ['Automatic Assembler 1','Automatic Assembler 2', 'Automatic Extruder 1','Automatic Extruder 2',]; 
								for (var i=0;i<fileArray.length;i++){
									var filePath = '../assets/img/dev/'+fileArray[i]+'.jpg';
									document.write('<a href="'+filePath+'" title="'+displayArray[i]+'" data-gallery="gallery"><img style="width:auto; max-width:180px; height:auto;" class="img-polaroid" src="'+filePath+'"/> '+ '</a>');
								}
							</script>
						</div>
					</div>
				</div>
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
