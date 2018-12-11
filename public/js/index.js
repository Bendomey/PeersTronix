// 
//
// $(window).load(function() {
// 		// Animate loader off screen
// 		$(".se-pre-con").fadeOut("slow");;
// 	});
$(document).ready(function(){

  $("[class='owl-carousel owl-theme hi']").owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:3,
              nav:false
          },
          1000:{
              items:4,
              nav:true,
          }
      }
  });
  $("[class='owl-carousel owl-theme hm']").owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:2,
              nav:false
          },
          1000:{
              items:3,
              nav:true,
          }
      }
  });




});