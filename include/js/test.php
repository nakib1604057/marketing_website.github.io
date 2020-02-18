<!DOCTYPE html>
<html>
<head>
	<title>
		<style type="text/css">
			#gall img{
				border:2px solid white;
                 width: 10%;
			}
		#img_01{
			border: 2px solid red;
			width: 20%;
		}
 
 /*Change the colour*/
           .active img{border:2px solid #333 ;}
		</style>
		<link rel="stylesheet" type="text/css" href="http://www.elevateweb.co.uk/wp-content/themes/radial/jquery.fancybox.css">
		<script src='http://www.elevateweb.co.uk/wp-content/themes/radial/jquery.fancybox.pack.js' type="text/javascript"></script>
	</title>
</head>
<body>
	<img id="img_01" src="../../other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" zoom-image="../../other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" width="20%" />

<div id="gall">
  <a href="#" data-image="../../other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" data-zoom-image="../../other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg">
    <img  class='img' src="../../other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" width='2%' />
  </a>
  <a href="#" data-image="../../other/0001414_beats-bluetooth-headphone-tm-10.jpeg" data-zoom-image="../../other/0001414_beats-bluetooth-headphone-tm-10.jpeg">
    <img class="img" src="../../other/0001414_beats-bluetooth-headphone-tm-10.jpeg" width='2%' />
  </a>

 

  <a href="#" data-image="../../other/15879-91-1.jpg" data-zoom-image="../../other/15879-91-1.jpg">
    <img class="img" src="../../15879-91-1.jpg"width='2%' />
  </a>

  <a href="#" data-image="../../other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" data-zoom-image="../../other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg">
    <img  class='img' src="../../other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" width='2%'  />
  </a>

</div>


<script src='jquery-1.8.3.min.js'></script>
 <script src="jquery.elevateZoom-3.0.8.min.js" type="text/javascript"></script>
 <script>
  $("#img_01").elevateZoom({zoomWindowAlwaysShow:true,
gallery:'gall', cursor: 'pointer', 

  }); 
  
  //  var imgs=document.querySelectorAll('.img');
  // for (var i=0;i<imgs.length;i++){
  // 	imgs[i].addEventListener('click',function(){
  // 		var x=this.getAttribute('src');
  // 	    document.querySelector('#img_01').setAttribute('src',x);
  // 	    document.querySelector('#img_01').setAttribute('zoom-image',x);
  // 	})}

 </script>
</body>
</html>