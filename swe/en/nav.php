<html>
	<body>
		<div class="navbar navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<div class="brand" >SW Electronics Co. LTD</div>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li <?php if ($currentPage=='index') echo 'class="active"';?>>
								<a href="index.php"><i class="icon-home"></i> Home</a>
							</li>
							<li <?php if ($currentPage=='intro') echo 'class="active"';?>>
								<a href="intro.php"><i class="icon-user"></i> CEO Intro</a>
							</li>
							<li <?php if ($currentPage=='history') echo 'class="active"';?>>
								<a href="history.php"><i class="icon-list-ul"></i> History</a>
							</li>
							<li <?php if ($currentPage=='mission') echo 'class="active"';?>>
								<a href="mission.php"><i class="icon-sitemap"></i> Mission</a>
							</li>
							<li <?php if ($currentPage=='product') echo 'class="active dropdown"'; else echo 'class="dropdown"'?>>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-large"></i> SW Products <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li class="nav-header">
										Products
									</li>
									<li class="dropdown-submenu">
										<a tabindex="-1" >Micro Switch</a>
											<ul class="dropdown-menu">
												<li>
													<a href="s_type.php">S-Type</a>
												</li>
												<li>
													<a href="j_type.php">J-Type</a>
												</li>								
											</ul>
										</li>									

									<li>
										<a href="volume.php">Volume Switch</a>
									</li>
									<li>
										<a href="hinge.php">Hinge</a>
									</li>
									<li class="divider"></li>
									<li class="nav-header">
										Application
									</li>			
									<li>
										<a href="development.php">Development Information</a>
									</li>
									<li>
										<a href="application.php">Product Application</a>
									</li>
									<li class="nav-header">
										Catalog
									</li>
									<li>
										<a href="#">Download PDF</a>
									</li>
								</ul>
							</li>
							<li <?php if ($currentPage=='contact') echo 'class="active"';?>>
								<a href="contact.php"><i class="icon-map-marker"></i> Contact</a>
							</li>
						</ul>
						<ul class="nav pull-right" id="main-menu-right">
							<li>
								<?php 
									if(isset($_SESSION)){
									  $view = $_SESSION['view'];
									}
									else{
										$view = 'index';
									}								
									if ($language!=null&&$language=='en'){
										$language = 'kr';
										echo('<a href="../kr/'.$view.'.php"><i class="icon-globe"></i> Korean Site</a>');
									}
									else{
										$language = 'en';
										echo('<a href="../en/'.$view.'.php"><i class="icon-globe"></i> English Site</a>');
									}									
								?>								
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
	</body>
</html>
