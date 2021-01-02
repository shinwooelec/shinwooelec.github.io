<html>
	<body>
		<h1>Volume Switch Catalog</h1>
		
		<div class="hero-unit">
			<small style="color:black;font-size:11px;">Click on the image to view diagrams and learn details</small>
			<div class="row">
				<div class="span9">
					<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
					   
						<script>
							var fileArray = ['v9mgsrotary-sw','v9msrotary-sw','pk093v 15sk','pk093vs-1 15sk','pk094vs 15f','pk094vs-1 15f'
											,'pk095v 15f'];
							for (var i=0;i<fileArray.length;i++){
								var filename = fileArray[i];
								var smallImagePath = '../assets/img/volume/'+filename+'_small.jpg';
								var fullImagePath = '../assets/img/volume/'+filename+'.jpg';
								filename = filename.toUpperCase();
								document.write('<div class="sillybox">')
								document.write('<a href="'+fullImagePath+'" title="'+filename+'" data-gallery="gallery"><img style="width:100px; max-width:100px; max-height:100px;" class="img-polaroid" src="'+smallImagePath+'"></img></a>');
								document.write('<center><small style="font-size:11px;">'+filename+'</small></center></div>')
							}
						</script>
						
					</div>
				</div>
			</div>
		</div>

	</body>
</html>
