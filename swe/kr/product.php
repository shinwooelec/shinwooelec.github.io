
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
			<small style="color:dark-blue;font-size:11px;">스위치 목록을 보시려면 아래 각 '스위치 보기' 버튼을 누르시면 목록이 나타납니다.</small>
			<br>
		    <div class="btn-group" data-toggle="buttons-checkbox">
			    <button type="button" class="btn btn-primary active" data-toggle="collapse" data-target="#stypeToggle" ><small style="color:dark-blue;font-size:11px;">S-Type 스위치 보기</small></button>
			    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#jtypeToggle"><small style="color:dark-blue;font-size:11px;">J-Type 스위치 보기</small></button>
			    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#volumeToggle"><small style="color:dark-blue;font-size:11px;">볼륨 스위치 보기</small></button>
			    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#hingeToggle"><small style="color:dark-blue;font-size:11px;">힌지 보기</small></button>
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
