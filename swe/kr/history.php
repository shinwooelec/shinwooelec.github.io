<!DOCTYPE html>
<html lang="en">
	<!-- head -->
		<?php session_start();
			$_SESSION['view']='history';
			include ("head.php");
		?>
	<!-- / head -->
	<!-- navigation -->
		<?php
			$currentPage='history';
			include ("nav.php");
		?>
	<!-- / navigation -->
	<body>

		<div class="container">
			<h1>회사 연혁</h1>
			<!-- <p class="lead">Micro Switch, Volumn, Hinge</p> -->
			<div class="hero-unit">
				<div class="row">

					<div class="left span8">
						<p>
						<small>
    <ul>
    <li>1998년 1월 신우전자 설립 (안양 만안구)</li>
    <li>2000년 7월 인써트 사출기 설비증설</li>
    <li>2001년 12월 설비증설 및 V.R.CKD 수출</li>
    <li>2002년 3월 자동화설비 증설</li>
    <li>2003년 4월 공장확장이전 (안양 메가밸리)</li>
    <li>2004년 8월 Micro S/W 번호키 적용</li>
    <li>2006년 1월 Micro S/W 자동차 기어 박스에 적용</li>
    <li>2006년 12월 ISO 9001:2000 인증 획득</li>
    <li>2007년 5월 ISO/TS 16949 인증 획득</li>
    <li>2008년 1월 ISO 9001:2000 인증 획득</li>
    <li>2008년 4월 ISO/TS 16949 인증 획득</li>
    <li>2009년 5월 법인전환 (에스더블유전자주식회사)</li>
    <li>2010년 1월 독일 제품인증 규격 TÜV 획득(MICRO SWITCH)</li>
    <li>2010년 10월 미국 제품인증 규격 UL 획득(MICRO SWITCH)</li>
    </ul>							

</small> </p>
<br>
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
