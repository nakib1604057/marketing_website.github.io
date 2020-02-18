var header = document.querySelector(".nav");
var sticky = header.offsetTop;
var cart_list=[];
var product_name;
// ------------------1.for overlaying ---------------

$(".fa-bars").on("click",function(){	
   $("div").first().removeClass('overlay');
   $("div").first().addClass("toverlay");
   // window.onscroll = function () { window.scrollTo(0, 0); };
   $('body').css({"overflow":"hidden"});
   header.classList.remove("sticky");
   
})
// $('.toverlay').on('click',function(){
//    console.log('hi')
// })
$('.delete_menu').on('click',function(){
	 $("div").first().removeClass('toverlay');
   $("div").first().addClass("overlay");
   // window.onscroll = function () { window.scrollTo(); };
    $('body').css({"overflow":"visible"});
    header.classList.add("sticky");

})
// -----------------------1.end--------------------

// --------------------------2.li on 1st side bar-------------------
var menu_i=document.querySelectorAll('.menu-catg li');
var temp=[];

for(var i=0;i<$('.menu-catg li').length;i++){
      
     // menu_i[i].addEventListener('mouseover',function(){
     // 	temp[i]=this.innerHTML;
     // 	this.innerHTML='<i class="fas fa-chevron-right"></i>'+temp[i];
     // },10000)

     // menu_i[i].addEventListener('mouseout',function(){
     // 	this.innerHTML=temp[i];
     	
     // },10000)
     menu_i[i].addEventListener('click',function(){
     	 document.querySelector('#part_of_menu').style.animation='pa_of_me_ani 0.40s';
     	document.querySelector('#part_of_menu').style.display='block';
     	// document.querySelector('#ov-menu').style.width='200px';
     })
}
// ------------------------------2.end-------------------------------

// ----------------------3.moving 2nd sider bar from right to left--------------------
document.querySelector('.menu_catg_ul .fa-chevron-left').addEventListener('click',function() {
	document.querySelector('#ov-menu').style.display='block';   
    document.querySelector('#part_of_menu').style.animation='nai 0.7s';
    timeOut()
     // document.querySelector('#part_of_menu').style.display='none';
 
})


function timeOut(){
	setTimeout(function(){
      document.querySelector('#part_of_menu').style.display='none';
	}, 700);
}
// ---------------------------3.End-------------------------------


// ---------------------------------4.for making Header fixed-----------------------
// && document.querySelector("div").classList.contains('toverlay')=='false'
function making_header_fixed(){

window.onscroll = function() {myFunction()};
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
}
// --------------------4.End----------------------


// ------------------------------5removing side-bar by clicking anywhere in the body else side bar------------------------------
$('.overlay').click(function(evt){    
    
       if($(evt.target).closest('#ov-menu').length)
          return; 
        else if($(evt.target).closest('#part_of_menu').length)
          return 
       else
       {   
          setTimeout(function(){
            $("div").first().removeClass('toverlay');
          $("div").first().addClass("overlay");
          $('#part_of_menu').css('display','none');
          $('body').css({"overflow":"visible"});
          header.classList.add("sticky");

        },100)        
          
        }
});

// -------------------5.END----------------------

// for zoomable image

  $("#img_01").elevateZoom({
gallery:'gall',scrollZoom : true,
zoomWindowWidth: 500,
zoomWindowHeight: 500,
zoomWindowBgColour:"white",
borderSize: 1,
borderColour:"#b4b4b4",
lensOpacity: 0.3,
zoomType:"window"


  }); 
       $("#img_01").bind("click", function(e) {  
  var ez =   $('#img_01').data('elevateZoom'); 
  $.fancybox(ez.getGalleryList());
  return false;
});
       
       var tab=document.querySelectorAll('.img');
       for(var i=0;i<tab.length;i++)
       {
         
          tab[i].addEventListener('mouseover',function(){
          this.style.border='2px solid black';
        })
             tab[i].addEventListener('mouseout',function(){
          this.style.border='2px solid white';
        })

      
       }
// $('.add_cart_butn').on('click',function(){
//   product_name=$('.product_name').text();
//   len=cart_list.length;
//   cart_list[len]=product_name;
//   console.log(cart_list);

// })
// $(document).click(function (e) { 
//             if ($(e.target).closest(".none_1").length=== 0) { 
//                  $('.none_1').removeClass('home_page_login');
//                $('.none_1').addClass('t_home_page_login');
//             }}); 
$('.login_icon').on('click',function(){
   $('.none_1').removeClass('t_home_page_login');
   $('.none_1').addClass('home_page_login');

});
// $('body').click(function(evt){    
    
//        if($(evt.target).closest('.none_1').length)
//           return; 
//        else
//        {   
//           setTimeout(function(){
//              $('.none_1').removeClass('home_page_login');
//              $('.none_1').addClass('t_home_page_login');
//              $('body').css({"overflow":"visible"});
//         },100)        
          
//         }
// });

