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
			<h1>지향 목표</h1>
			<!-- <p class="lead">Micro Switch, Volumn, Hinge</p> -->
			<div class="hero-unit">
				<div class="row">
					<div class="span3">
						<h5 style="text-indent: 6em;">변화</h5>
						<small>
						
						<span class="badge badge-important">1</span> 직무 능력 향샹 교육 실현
						<br><span class="badge badge-important">2</span> 고객의 가치 공유와 실행
						<br><span class="badge badge-important">3</span> 지속적 개선으로 고객 만족
						</small>
					</div>
					<div class="span3">
						<h5 style="text-indent: 6em;">경쟁력 확보</h5>
						<small>
						<span class="badge badge-important">1</span> 참 원인에 대한 철저한 개선
						<br><span class="badge badge-important">2</span> 공정 효율성 및 기술력 확보
						<br><span class="badge badge-important">3</span> 제품 및 서비스의 명확화
						</small>
					</div>
					<div class="span3">
						<h5 style="text-indent: 6em;">고객 지향</h5>
						<small>
						<span class="badge badge-important">1</span> 부적합품 제로 확립
						<br><span class="badge badge-important">2</span> 품질 경영으로 신뢰 구축
						<br><span class="badge badge-important">3</span> 끊임없는 품질 향상
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
