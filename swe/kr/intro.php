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
			<h1>CEO 인사말</h1>
			<!-- <p class="lead">Micro Switch, Volumn, Hinge</p> -->
			<div class="hero-unit">
				<div class="row">

					<div class="left span8">
						<small>
에스더블유전자주식회사는 전사적 의식 개혁과 경영혁신으로

<br>생산성 향상과 품질 개선에 힘을 쏟고 있으며

<br>통신,음향기기, 자동차,기계, 전자제품 등에 사용되는 마이크로 스위치 및 볼륨 부품을 생산하는 기업입니다.

 <br>

<br>미래를 준비하는 기업이라는 기업이념을 바탕으로

<br>지속적인 설비 투자와 연구 개발로 경제 환경에 부응하며 꾸준히 성장을해오고 있습니다.

 <br>

<br>특히 ISO 9001:2000 인증 취득 함으로서

<br>철저한 품질관리 활동으로 좋은 품질의 제품을 보다 경제적으로 만들기 위해 노력했습니다.

 <br>

<br>또한 ISO /TS 16949:2002 인증을 취득 함으로서

<br>자동차 부품 품질을 한 단계 업그레이드 시킬 것이며,

<br>신속한 정보와 대응이 요구되는 21C의 환경에 발 맞추어

<br>저희 에스더블유전자주식회사는 더욱 향상된 품질의 제품을 생산 공급하도록 힘쓸것입니다.

<br>고객 여러분께 최선을 다하는 기업으로써

<br>최대의 이익과 신뢰를 드리는 에스더블유전자주식회사가 될 것을 우리 임직원은 약속 드립니다. 

</small>
<br>
    <blockquote class="pull-right">
    <small> 에스더블유전자(주) 전 직원 일동</small> 
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
