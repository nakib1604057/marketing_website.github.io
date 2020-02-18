<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="../include/js/jquery.exzoom.css">
	 <style type="text/css">
	 	#exzoom{
	 		position: absolute;
	 		top: 50%;
	 		left: 50%;
	 		transform: translate(-50%,-50%);

	 	}
	 </style>
</head>
<body>

<div class="exzoom" id="exzoom">
  <!-- Images -->
  <div class="exzoom_img_box">
    <ul class='exzoom_img_ul'>
      <li><img src="../other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" width="300" height="340"></li>
      <li><img src="../other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" width="300" height="240"/></li>
      <li><img src="../other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" width="300" height="240"/></li>
      <li><img src="../other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" width="300" height="240"/></li>
      <li><img src="../other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" width="300" height="240"/></li>
    </ul>
  </div>
  <!-- <a href="https://www.jqueryscript.net/tags.php?/Thumbnail/">Thumbnail</a> Nav-->
  <div class="exzoom_nav"></div>
  <!-- Nav Buttons -->
<!--   <p class="exzoom_btn">
      <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
      <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
  </p> -->
</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src='../include/js/jquery.exzoom.js'></script>
<script type="text/javascript">
	$(function(){

  $("#exzoom").exzoom({
    "navWidth": 40,
    "navHeight": 40,
    "navItemNum": 5,
    "navItemMargin":10,
    "navBorder": 1,

    // autoplay
    "autoPlay": false,

    // autoplay interval in milliseconds
    "autoPlayTimeout": 2000
  });

});
</script>
</body>
</html>