<html>
	<body>
			<h1>J-Type 스위치 목록 및 도면보기</h1>
			
			<div class="hero-unit">
				<small style="color:blue;font-size:11px;">*고객요구에 따라 변경할 수 있음.</small>
				
				<div class="row">
					<div class="span9">
						<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
						   
							<script>
								var fileArray = ['sj3515-00','sj3515-01d','sj3515-01g','sj3516-00','sj3516-01','sj3516-01b'
												,'sj3516-04','sj3516-04a','sj3516-05','sj3516-13','sj3516-13a','sj3516-13b'
												,'sj3516-23','sj3516-23a'];
								for (var i=0;i<fileArray.length;i++){
									var filename = fileArray[i];
									var smallImagePath = '../assets/img/jtype/'+filename+'_small.jpg';
									var fullImagePath = '../assets/img/jtype/'+filename+'.jpg';
									filename = filename.toUpperCase();
									document.write('<div class="sillybox">')
									document.write('<a href="'+fullImagePath+'" title="'+filename+'" data-gallery="gallery"><img style="width:110px; max-width:110px; height:90px; max-height:90px;" class="img-polaroid" src="'+smallImagePath+'"></img></a>');
									document.write('<center><small style="font-size:11px;">'+filename+' 도면보기</small></center></div>')
								}
							</script>
							
						</div>
					</div>
				</div>
			</div>	
	</body>
</html>
