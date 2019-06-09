Drupal.behaviors.init = {
	attach: function (context, settings) {
		(function ($) {
 			


 			// MASONRY!!!
 			//===================================
			// var masonry_container = $('.node-image-gallery .field-name-field-other-images');
			
			// masonry_container.imagesLoaded(function(){
			// 	masonry_container.masonry({
			// 	  itemSelector: '.field-item'
			// 	});
			// });


			// SKROLR!!!
 			//===================================
			// if($(window).width() > 500){
	 		//		var s = skrollr.init({
	 		// 		forceHeight: false,
	 		// 	});
	 		// }

	 		var windowScroll;

		$('.image-post_full').parent().addClass('image-holder');

		// COMMENT FORM
		$('.add-comment-btn').click(function(){
			$('.comment-form').slideToggle();
		});

		var topTrigger = $('#back-to-top');

		topTrigger.click(function(){
		    $("html, body").animate({ scrollTop: 0 }, 800);
		    return false;
		});

		var udsmopen = false;
		var is_safari = false;
		if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {is_safari = true;}

		$(window).scroll(function (e) {
		    windowScroll = $(window).scrollTop();
		    //setSidePos();
		    
		    var ww = $(window).width();
		    var speed = 1.8;
		    var upos = 60 - windowScroll * speed;
		    var dpos = 80 - windowScroll * speed;
		    var toppos = 200;


		    if(ww > 700){
				 if(windowScroll < 180){
				 	$('#u-big').css('top',  upos );
			 		$('#d-big').css('top',  dpos );
				}

			 	if(windowScroll > toppos & !udsmopen){
			 		showUDS();
			 	}else if(windowScroll < toppos & udsmopen){
			 		hideUDS();
			 	}
			}

			var top = $(window).scrollTop();

				if(top > 200){
					topTrigger.addClass('active');
				}else{
					topTrigger.removeClass('active');
				}

		});		


		function showUDS(){
			$('.front #ud-sm').animate({top: 0}, 500);
			$('.front #header .bot').slideDown(500);
			udsmopen = true;
		}

		function hideUDS(){
			$('.front #ud-sm').animate({top: -180}, 500);
			$('.front #header .bot').slideUp(500);
			udsmopen = false;
		}

		// MOBILE STUFF
		$('.menu-toggle').click(function(){
			//$('#nav').stop(false, true).slideToggle();
			$('body').toggleClass('nav-active');
		});


		var front_feed = new Instafeed({
	   	  accessToken: '439464896.e0d80e6.7cc094599fe642f494a5b33d355e19f9',
	        get: 'user',
	        target: 'front-instafeed',
	        userId: 439464896,
	        limit: '16',
	        resolution: 'standard_resolution',
	        clientId: 'e0d80e69f23a4c76a648b15816f84fdf'
	    });
	    front_feed.run();


		// Hide the address bar!
		//setTimeout(function(){window.scrollTo(0, 1);}, 0);


		}(jQuery));
	}	
}


