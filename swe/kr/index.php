<?php 
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
$_SESSION['view']='index';
include ("head.php");
?>
<!DOCTYPE html>
<html lang="en">
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<!-- head -->

	<!-- / head -->
	<!-- navigation -->
		<?php
			$currentPage='index';
			include ("nav.php");
		?>
	<!-- / navigation -->
	<body>

		<div class="container">
			<h1>에스더블유전자(주)</h1>
			<!-- <p class="lead">Micro Switch, Volumn, Hinge</p> -->
			<div class="hero-unit">
				<div class="row">
					<div class="span3" >
						<img class="img-polaroid" src="../assets/img/megavalley.jpg" alt="">
					</div>

					<div class="left span6">
						<p>
							에스더블유전자(주)는 자동차, 생활가전, 전자정보통신 산업의 전자부품 전문업체로 마이크로 스위치, 볼륨부품 생산을 하고 있습니다.
						</p>
						<address>
							경기도 안양시 동안구 관양동 799번지 안양메가밸리 209호
						</address>
						<address>
							전화번호: (82)31-420-4611/4612  /  팩스: (82)31-420-4613
						</address>
					</div>
				</div>
			</div>
			<!-- Example row of columns -->
			<div class="row">
				<div class="span4">
					<h2>지향목표</h2>
					<p>
						에스더블유전자(주) 가 추구하는 지향목표 를 보실수 있습니다. <br>끊임없는 품질 향상으로 늘 고객 만족에 노력하는 기업이 되겠습니다.
					</p>
					<a href="mission.php" class="btn btn-primary">자세히 보기 &raquo;</a>
				</div>
				<div class="span4">
					<h2>제품정보</h2>

						<div><img class="pull-left img-rounded" style="margin:00px 2px 0px 00px;width:80px; max-width:60px;" src="../assets/img/etc/microswitch.jpg" />
						에스더블유전자(주) 주요 생산 마이크로스위치, 볼륨스위치 등 목록을 볼수있습니다. 자세히 보기를 누르시면 도면과 상세정보를 볼수있습니다.</div><br>
					
					<div class="btn-group">
						<a href="product.php" class="btn btn-primary">
							자세히 보기 &raquo;
						</a>
						<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<!-- dropdown menu links -->
							<small><li>
								<a href="s_type.php">S-Type 목록 및 도면보기</a>
							</li>
							<li>
								<a href="j_type.php">J-Type 목록 및 도면보기</a>
							</li>
							<li>
								<a href="volumn.php">볼륨 스위치 보기</a>
							</li>
							<li>
								<a href="#">힌지 보기</a>
							</li></small>
						</ul>
					</div>

				</div>
				<div class="span4">
					<h2>오시는 길</h2>
					<p>
						본사 연락처 또는 찾아 오시는 길을 지도로 보실수 있습니다.
					</p>
					<a href="contact.php" class="btn btn-primary">자세히 보기 &raquo;</a>
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
