<html>
	<body>
	    <div class="tab-pane" id="tab11">
			<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
				<script>
					var fileArray = ['IS65-005R','IS65-006R','IS65I-005R','IS65I-006R'
									,'IS65I-C05R','IS65I-C06R'];
					for (var i=0;i<fileArray.length;i++){
						var filename = fileArray[i];
						var imagePath = '../assets/img/hinge/'+test[10]+'/'+filename+'.jpg';
						document.write('<div class="sillybox">')
						document.write('<img style="width:100px; max-width:120px; max-height:120px;" class="img-polaroid" src="'+imagePath+'"></img>');
						document.write('<center><small style="font-size:11px;">'+filename+'</small></center></div>')
					}
				</script>
			</div>							    	
	    </div>
	</body>
</html>
