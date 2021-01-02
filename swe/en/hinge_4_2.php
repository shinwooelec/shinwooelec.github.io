<html>
	<body>
	    <div class="tab-pane active" id="tab1">
			<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
				<script>
					var fileArray = ['IS42-035L'];
					for (var i=0;i<fileArray.length;i++){
						var filename = fileArray[i];
						var imagePath = '../assets/img/hinge/'+test[0]+'/'+filename+'.jpg';
						document.write('<div class="sillybox">')
						document.write('<img style="width:100px; max-width:120px; max-height:120px;" class="img-polaroid" src="'+imagePath+'"></img>');
						document.write('<center><small style="font-size:11px;">'+filename+'</small></center></div>')
					}
				</script>
			</div>							    	
	    </div>
	</body>
</html>
