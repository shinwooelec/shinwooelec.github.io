<!DOCTYPE html>
<html lang="en">
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<!-- head -->
		<?php session_start();
			$_SESSION['view']='index';
			include ("head.php");
		?>
	<!-- / head -->
	<!-- navigation -->
		<?php
			$currentPage='index';
			include ("nav.php");
		?>
	<!-- / navigation -->
	<body>

		<div class="container">
			<h1>SW Electronics Co. LTD</h1>
			<!-- <p class="lead">Micro Switch, Volumn, Hinge</p> -->
			<div class="hero-unit">
				<div class="row">
					<div class="span3" >
						<img class="img-polaroid" src="../assets/img/megavalley.jpg" alt="">
					</div>

					<div class="left span6">
						<p>
							SW ELECTRONICS CO.,LTD specializes in manufacturing electronic parts such as micro switches, volume switches, and hinges.
						</p>
						<address>
							Room 209, Anyang Megavalley #799, Gwanyang-dong,
               				Dongan-gu, Anyang-si, Gyeonggi-do 431-767, Korea
						</address>
						<address>
							Phone: 82-31-420-4611,2  /  Fax: 82-31-420-4613
						</address>
						<address>
							Email : <a href='&#109;&#097;&#105;&#108;&#116;&#111;:&#104;&#115;&#112;&#097;&#114;&#107;&#052;&#057;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109' title="Contact via Email" target='_blank'>Send Email</a>
						</address>
						
					</div>
				</div>
			</div>
			<!-- Example row of columns -->
			<div class="row">
				<div class="span4">
					<h2>Mission</h2>
					<p>
						View our missions and goals.
					</p>
					<a href="mission.php" class="btn btn-primary">View More &raquo;</a>
				</div>
				<div class="span4">
					<h2>Products</h2>

						<div><img class="pull-left img-rounded" style="margin:00px 2px 0px 00px;width:80px; max-width:60px;" src="../assets/img/etc/microswitch.jpg" />
						View the catalogs and diagrams of micro switches manufactured at SW ELECTRONICS CO.,LTD</div><br>
					
					<div class="btn-group">
						<a href="product.php" class="btn btn-primary">
							View More &raquo;
						</a>
						<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<!-- dropdown menu links -->
							<small><li>
								<a href="s_type.php">S-Type M/S Catalog</a>
							</li>
							<li>
								<a href="j_type.php">J-Type M/S Catalog</a>
							</li>
							<li>
								<a href="volumn.php">Volume Switch Catalog</a>
							</li>
							<li>
								<a href="#">Hinge Catalog</a>
							</li></small>
						</ul>
					</div>

				</div>
				<div class="span4">
					<h2>Contact Us</h2>
					<p>
						View the Contact Information and find us on Google Map
					</p>
					<a href="contact.php" class="btn btn-primary">View More &raquo;</a>
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
