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
			<h1>Company History</h1>
			<!-- <p class="lead">Micro Switch, Volumn, Hinge</p> -->
			<div class="hero-unit">
				<div class="row">

					<div class="left span8">
						<p>
						<small>
    <ul>
    <li>Jan. 1998 Sinwoo Electronics founded (Anyang ManAn-Ku)</li>
    <li>Jul. 2000 Machinary upgrades</li>
    <li>Dec. 2001 Machinary upgrades and V.R.CKD export </li>
    <li>Mar. 2002 Automated Machinary upgrades </li>
    <li>Apr. 2003 Sinwoo Electronics moved to new location due to expansion (Anyang Megavalley)</li>
    <li>Aug. 2004 Applied Micro S/W key number </li>
    <li>Jan. 2006 Applied Micro S/W to automobile gear box </li>
    <li>Dec. 2006 Achievement the quality management system(ISO9001:2000) Certificated dy SGS </li>
    <li>May. 2007 Achievement the quality management system(ISO16949:2002) </li>
    <li>Jan. 2008 Achievement the quality management system(ISO9001:2000) Certificated dy SGS </li>
    <li>Apr. 2008 Achievement the quality management system(ISO16949:2002) Certificated dy SGS </li>
    <li>May. 2009 SW ELECTRONICS CO.,LTD founded</li>
    <li>Jan. 2010 TÜV SÜD certification acquired</li>
    <li>Oct. 2010 UL product standards and compliance certification acquired</li>
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
