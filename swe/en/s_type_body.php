<html>
	<body>
		<h1>Micro S/W  (S-Type) catalogs and diagrams </h1>
		
		<div class="hero-unit">
			<small style="color:blue;font-size:11px;"> *Specifications can be modified based on client requirements.</small>
			<br><small style="color:black;font-size:11px;">Click on the image to view diagrams and learn details</small>
			<div class="row">
				<div class="span9">
					<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
					   
						<script>
							var fileArray = ['1210-00','1210-01','1215-00','1215-01','1215-24','1217-01'
											,'1230-23','1230-23e','1230-24e','1238-01','2210-04','2215-01'
											,'2215-03','2215-04','2215-05','2215-08','2215-09','2215-10'
											,'2215-13','2215-31','2215-51','2216-01','2216-13','2220-01'
											,'2230-00','2230-03e'];
							for (var i=0;i<fileArray.length;i++){
								var filename = fileArray[i];
								var smallImagePath = '../assets/img/stype/'+filename+'_small.jpg';
								var fullImagePath = '../assets/img/stype/'+filename+'.jpg';
								filename = filename.toUpperCase();
								document.write('<div class="sillybox">')
								document.write('<a href="'+fullImagePath+'" title="'+filename+'" data-gallery="gallery"><img style="width:110px; max-width:110px; height:90px; max-height:90px;" class="img-polaroid" src="'+smallImagePath+'"></img></a>');
								document.write('<center><small style="font-size:11px;">'+filename+' Diagram</small></center></div>')
							}
						</script>
						
					</div>
				</div>
			</div>
		</div>	
	</body>
</html>
