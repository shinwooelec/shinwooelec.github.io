<!DOCTYPE html>
<html lang="en">
	<!-- head -->
		<?php session_start();
			$_SESSION['view']='application';
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
			<h1>적용제품</h1>
			<div class="hero-unit">
				<div class="row">

					<div class="span9">

						<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
						   
							<script>
								var fileArray = ['app1','app2','app3','app4','app5','app6',
												 'app7','app8','app9','app10','app11','app12','app13'];
								var displayArray = ['도어 록','마우스','자동차 기어 박스','가스 오븐','전자렌지','칫솔 살균기',
												 	'안전벨트','냉장고','카 스테레오 및 오디오','스피커','무전기','전기장판','핸드폰']; 
								for (var i=0;i<fileArray.length;i++){
									var filePath = '../assets/img/app/'+fileArray[i]+'.jpg';
									document.write('<a href="'+filePath+'" title="'+displayArray[i]+'" data-gallery="gallery"><img style="width:auto; max-width:80px; height:auto;" class="img-polaroid" src="'+filePath+'"/> '+ '</a>');
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
