<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
		 	  <img  id='img_zoom'src="other/fedora_29_background-t2.jpg" data-zoom-image="other/fedora_29_background-t2.jpg" width="100">

		 	  <div id="gall">
		 	  	   <div class="row"> <div class="col-md-4">
                    	  <a href="#" data-image="other/15879-91-1.jpg" data-zoom-image="other/15879-91-1.jpg">
                          <img src="other/15879-91-1.jpg" />
                          </a>
                    </div>
                   <div class="col-sm-4">
                    <a href="#" data-image="other/15879-91-1.jpg" data-zoom-image="other/15879-91-1.jpg">
                      <img src="other/15879-91-1.jpg" />
                    </a></div>

                   <div class="col-sm-4"><a href="#" data-image="other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" data-zoom-image="other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg">
                      <img src="other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" />
                    </a>
                   </div></div>
                 
                    
                </div>
		    </div>
		</div>
		 
	</div>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script type="text/javascript" src="include/js/jquery.elevateZoom-3.0.8.min.js"></script>
 <script type="text/javascript">

 	$("#img_zoom").elevateZoom({
 	
    imageCrossfade: true,
 		  imageCrossfade: true,
 		zoomLevel: 1,
 		scrollZoom:true,
 	    scrollZoomIncrement: 0.1,
 		
 	});$('#zoom_03').bind('click', function (e) {
    var ez = $('#zoom_03').data('ezPlus');
    $.fancyboxPlus(ez.getGalleryList());
    return false;
});
 	
 </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src='imclude/js/jquery-1.8.3.min.js'></script>
</body>
</html>