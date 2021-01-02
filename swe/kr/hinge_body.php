<html>
	<body>
		<h1>힌지 목록</h1>
		
		<div class="hero-unit">
			
			<div class="row">
				<div class="span9">
				    <div class="tabbable"> <!-- Only required for left/right tabs -->
					    <ul class="nav nav-tabs">
						    <li class="active"><a href="#tab1" data-toggle="tab"><small style="font-size: 11px">4.2 Folder Series</small></a></li>
						    <li><a href="#tab2" data-toggle="tab"><small style="font-size: 11px">5.0 Can Series</small></a></li>
						    <li><a href="#tab3" data-toggle="tab"><small style="font-size: 11px">5.0 Folder Series</small></a></li>
						    <li><a href="#tab4" data-toggle="tab"><small style="font-size: 11px">5.8 Can A Insert</small></a></li>
						    <li><a href="#tab5" data-toggle="tab"><small style="font-size: 11px">5.8 Can A Type</small></a></li>
						    <li><a href="#tab6" data-toggle="tab"><small style="font-size: 11px">5.8 Can B Insert Type</small></a></li>
						    <li><a href="#tab7" data-toggle="tab"><small style="font-size: 11px">5.8 Can C Type</small></a></li>
						    <li><a href="#tab8" data-toggle="tab"><small style="font-size: 11px">5.8 Can H Insert</small></a></li>
						    <li><a href="#tab9" data-toggle="tab"><small style="font-size: 11px">5.8 Can Series</small></a></li>
						    <li><a href="#tab10" data-toggle="tab"><small style="font-size: 11px">5.8 Nude Series</small></a></li>
						    <li><a href="#tab11" data-toggle="tab"><small style="font-size: 11px">6.5 Can Series</small></a></li>
					    </ul>
						<script>
							var test = ['4.2 FOLDER SERIES','5.0 CAN SERIES','5.0 FOLDER SERIES','5.8 CAN A INSERT'
									   ,'5.8 CAN A TYPE','5.8 CAN B INSERT TYPE','5.8 CAN C TYPE','5.8 CAN H INSERT'
									   ,'5.8 CAN SERIES','5.8 NUDE SERIES','6.5 CAN SERIES'];
						</script>
					    <div class="tab-content">
						    <!-- 4.2 series -->
							<?php
								include ("hinge_4_2.php");
				 			?>
						    <!-- 5.0 series -->
							<?php
								include ("hinge_5_0.php");
				 			?>
						    <!-- 5.8 series -->
							<?php
								include ("hinge_5_8.php");
				 			?>	
						    <!-- 6.5 series -->
							<?php
								include ("hinge_6_5.php");
				 			?>						 									    					    							    
					    </div>
				    </div>
				</div>
			</div>
		</div>
	</body>
</html>
