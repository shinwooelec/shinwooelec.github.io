<html>
	<body>
	    <div class="tab-pane " id="tab2">
			<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
				<script>
					var fileArray = ['IS50HI-A05R','IS50HI-B05R','IS50HI-C05R','IS50HI-D05R','IS50HI-E05R','IS50HI-F05R'];
					for (var i=0;i<fileArray.length;i++){
						var filename = fileArray[i];
						var imagePath = '../assets/img/hinge/'+test[1]+'/'+filename+'.jpg';
						document.write('<div class="sillybox">')
						document.write('<img style="width:100px; max-width:120px; max-height:120px;" class="img-polaroid" src="'+imagePath+'"></img>');
						document.write('<center><small style="font-size:11px;">'+filename+'</small></center></div>')
					}
				</script>
			</div>							    	
	    </div>
	    <div class="tab-pane " id="tab3">
			<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
				<script>
					var fileArray = ['PS50F-004R','PS50F-005L','PS50F-005R'];
					for (var i=0;i<fileArray.length;i++){
						var filename = fileArray[i];
						var imagePath = '../assets/img/hinge/'+test[2]+'/'+filename+'.jpg';
						document.write('<div class="sillybox">')
						document.write('<img style="width:100px; max-width:120px; max-height:120px;" class="img-polaroid" src="'+imagePath+'"></img>');
						document.write('<center><small style="font-size:11px;">'+filename+'</small></center></div>')
					}
				</script>										
			</div>							    	
	    </div>
	</body>
</html>
