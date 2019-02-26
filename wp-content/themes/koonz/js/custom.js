// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'

jQuery(document).ready(function($){
	
		
		
	var windowWidth = $(window).width();
		
		
	
	 /* Modernizr - check if browser supports webp for section_one. 
     --------------------------------------------------------------------------------------- */
    
    // add data-webp and data-jpg to images in section one and you're gucci
    
     Modernizr.on('webp', function (result) {
	    
	    $('#section_one img').each(function () {
	    
				if (result) {
    
					if ($(this).attr('data-webp')) {
          
          	var img = $(this).data('webp');
          
						$(this).attr('src', img);
        	
        	}
        	
        }
  
	 			else {
		 			
		 			if ($(this).attr('data-jpg')) {
          
          	var img = $(this).data('jpg');
          
						$(this).attr('src', img);
        	
        	}
    
    		}
  		
  		});
  		
  		
  		// background images (one time load, does not reflect media queries or window width..yet)
  		
  		if (result) {
	  		
	  		var sectionOne = '#section_one';
	  		
	  		if ($(sectionOne).attr('data-webpbg')) {
		  		
		  		var imgBg = $(sectionOne).data('webpbg');
		  		
		  		$(sectionOne).css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
	  		
	  	}
	  	
	  	
	  	else {
		  	
		  	if ($('#section_one').attr('data-jpgbg')) {
		  		
		  		var imgBg = $('#section_one').data('jpgbg');
		  		
		  		$('#section_one').css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
		  	
	  	}
  		
			// console.log(result);
	
		});
		
		
		
		/* Load Images - Call function when you reach the a section with images using waypoints
       BG image - <div data-src=""></div>   ,   Image - <img data-src="">
      --------------------------------------------------------------------------------------- */

    function loadImages() {
      
      // images
      
      $('img').each(function () {
        
        if ($(this).attr('data-src')) {
          
          var img = $(this).data('src');
          
          $(this).attr('src', img);
        
        }
      
      });

      // background images
      
      $('div, section').each(function () {
       
        if ($(this).attr('data-src')) {
          
          var backgroundImg = $(this).data('src');
          
          $(this).css('background-image', 'url(' + backgroundImg + ')');
        
        }
      
      });

      console.log('images loaded');
    }

    // createWaypoint('section_two', null, null, '100%', loadImages, false);







     /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    //function wistiaLoad() {
     // jQuery.getScript('https://fast.wistia.com/assets/external/E-v1.js', function(data, textStatus, jqxhr) {
        //console.log('wistia load:', textStatus); // Success
     // });
   // }

    // examples:

    // jQuery(".banner-box-1").one("mouseenter", function(e){
    //   wistiaLoad();
    // });

    // createWaypoint('section-1', null, null, '100%', wistiaLoad, false)
    
    
    $('.wistia_embed').click(function () {
        //make sure to only load if Wistia is not already loaded
        if (typeof Wistia === 'undefined') {
            $.getScript("https://fast.wistia.com/assets/external/E-v1.js", function (data, textStatus, jqxhr) {
                // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
                // a hook we can listen for. So we need to set an interval to check when it's ready 
                var interval = setInterval(function () {
                    if ($('.wistia_embed').attr('id') && window._wq) {
                        var videoId = $('.wistia_embed').attr('id').split('-')[1];
                        window._wq = window._wq || [];
                        _wq.push({
                            id: videoId,
                            onReady: function (video) {
                                $('.wistia_click_to_play').trigger('click');
                            }
                        });
                        clearInterval(interval);
                    }
                }, 100)
            });
        }
    })
   
    
    
    
    
    



    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		

		
		/* Live Chat - Call function when script needs to be loaded either by hover, click or waypoints
   --------------------------------------------------------------------------------------------------- */ 
   
   
   
   function livechatLoad() {
	   if(my_data.live_chat) {
      jQuery.getScript(my_data.live_chat, function(data, textStatus, jqxhr) {
        console.log('Live Chat load:', textStatus); // Success
      });
      // alert( my_data.live_chat);
      }
    }
   
   
   // createWaypoint('section_one', null, null, -100, livechatLoad, false);
   // createWaypoint('internal_trigger', null, null, -100, livechatLoad, false);



	 
/* Waypoints
--------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if(jQuery('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              jQuery(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                jQuery(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }
		
		
		$('#section_one').addClass('ready');	
		
		createWaypoint('section_two', '#section_two', 'visible', 350, null, true);
			
		createWaypoint('sec_two_trigger', '#sec_two_trigger', 'visible', 300, null, true);
		
		createWaypoint('section_three', '#section_three', 'visible', 330, null, true);
		
		createWaypoint('section_four', '#section_four', 'visible', 330, null, true);
		
		createWaypoint('section_five', '#section_five', 'visible', 330, null, true);
		
		createWaypoint('footer_trigger', '#footer_trigger', 'visible', 330, null, true);
		
		
        
    



/* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */



$('.selling_points_wrapper').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:false,
	mobileFirst:true,
	dots:true,
	responsive: [
    {
      breakpoint: 767,
      settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
     }
   },
   {
      breakpoint: 1230,
      settings: "unslick"
   }
	]
 });
 
 
 
 
 
 $('.sec_four_slider').slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 2,
	arrows:true,
	prevArrow:".sec_four_button_left",
	nextArrow:".sec_four_button_right",
	dots:false,
	responsive: [
    {
      breakpoint: 767,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
     }
   }
	]
 });
 
 
 
 $('.sec_five_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:true,
	fade:true,
	prevArrow:".sec_five_button_left",
	nextArrow:".sec_five_button_right",
	dots:false
 });
 
 
 
 $('.footer_location_inner').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:false,
	mobileFirst:true,
	dots:true,
	fade:true,
	responsive: [
    {
      breakpoint: 1066,
      settings: "unslick",
     }
	]
 });


 $('.att_bio_awards').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:true,
	prevArrow:".att_bio_button_left",
	nextArrow:".att_bio_button_right",
	dots:false
 });

 
 	function sellingpoints() {
     
    if (windowWidth <= 1230) {
         
       $('.selling_point_box').on('click', function(e) {
     		  
			 		//$('.selling_point_box').removeClass('open');
     			
			 		$(this).toggleClass('open');
     		
     	 });
     	   		
    } 
     
  };
 	
 
 sellingpoints();
 
 
 
 $('.about_page_slider').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
	arrows:true,
	prevArrow:".about_page_button_left",
	nextArrow:".about_page_button_right",
	dots:false,
	responsive: [
    {
      breakpoint: 1450,
      settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
     }
   },
   {
      breakpoint: 1066,
      settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
     }
   },
   {
      breakpoint: 900,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
     }
   }
	]
 });

	

/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */


$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");



/* Nav
--------------------------------------------------------------------------------------- */



	

function myNav() {
     
    if (windowWidth >= 1175) {
	    
	  	$('nav').addClass('desktop_hover');
	  
	  }
	  
	  else {
		  
		  
		  $('.menu_wrapper').on('click', function(e) {
		    
		  	$('nav').slideDown(400);
		  	
		  	$('nav .mobile_close').addClass('active');
		  
		  });
		  
		  
		  $('nav ul.menu > li.menu-item-has-children > a').on('click', function(e) {
			  
			  $('.mobile_sub_nav').fadeIn(300);
			  
			  $('.mobile_sub_nav_list').empty();
			  
			  $(this).next('ul.sub-menu').clone(true).appendTo('.mobile_sub_nav_list');
		    
		  });
		  
		  
		  $('nav .mobile_close').on('click', function(e) {
		    
		  	$('nav').slideUp(400);
		  	
		  	$(this).removeClass('active');
		  
		  });
		  
		  
		  $('.mobile_back, .mobile_sub_nav .mobile_close').on('click', function(e) {
			  
			  $('.mobile_sub_nav').fadeOut(300);
		    
		  });
		  
		  
	  }

};
 	
 
 myNav();
 
 
 // sidebar
 
 
 
 $('.sidebar ul > li > a').on('click', function(e) {
   
   $(this).toggleClass('active');
   
   $(this).next('ul.sub-menu').slideToggle(300);
   
   $(this).parent('li').toggleClass('no_border');
   
 });
 
 

 $(".sidebar ul.menu > li.current-menu-ancestor > a").toggleClass('active');
   
 
 
 // sidebar current items for widgets
 
 	
 	
 	var pgurl = window.location.href;
	
	$(".sidebar_wrapper .sidebar .widget ul li").each(function(){
  
  if($(this).find('a').attr("href") == pgurl)
    
    $(this).addClass("active");
	
	})
 
 
 
 

  
}); // document ready