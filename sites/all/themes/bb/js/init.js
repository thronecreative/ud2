Drupal.behaviors.init = {
	attach: function (context, settings) {
		

		// SERVICE LINKS TOGGLE
		/*
jQuery('.share-btn').click(function(){

			jQuery(this).next().slideToggle();
			return false;

		});
*/
		var windowScroll;

		jQuery('.image-post_full').parent().addClass('image-holder');

		// COMMENT FORM
		jQuery('.add-comment-btn').click(function(){
			jQuery('.comment-form').slideToggle();
		});

		var udsmopen = false;
		var is_safari = false;
		if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {is_safari = true;}

		jQuery(window).scroll(function (e) {
		    windowScroll = jQuery(window).scrollTop();
		    setSidePos();
		    
		    var ww = jQuery(window).width();
		    var speed = 1.8;
		    var upos = 60 - windowScroll * speed;
		    var dpos = 80 - windowScroll * speed;
		    var toppos = 200;


		    if(ww > 700){
				 if(windowScroll < 180){
				 	jQuery('#u-big').css('top',  upos );
			 		jQuery('#d-big').css('top',  dpos );
				}

			 	if(windowScroll > toppos & !udsmopen){
			 		showUDS();
			 	}else if(windowScroll < toppos & udsmopen){
			 		hideUDS();
			 	}
			}
			
			//console.log(windowScroll);
			
			

		});
		
		
		function setSidePos(){
			if(jQuery(window).width() > 700 && !is_safari){
				jQuery('.post-teaser').each(function(){
					var $this = jQuery(this);
					var y_off = $this.offset().top;
					var this_h = $this.height();
					var side = jQuery('.side', this);
					var side_h = side.height();
					var scroll_top = windowScroll;
					
					//console.log(windowScroll);
					
					if(scroll_top > y_off &&  scroll_top < y_off + this_h - side_h){
						var mar_t = scroll_top - y_off;
						side.css('margin-top', mar_t);
					}
					
				});
			
			}else{
				jQuery('.post-teaser .side').css('margin-top', 0);
			}
			
		}
				

		function showUDS(){
			jQuery('.front #ud-sm').animate({top: 0}, 500);
			jQuery('.front #header .bot').slideDown(500);
			udsmopen = true;
		}

		function hideUDS(){
			jQuery('.front #ud-sm').animate({top: -180}, 500);
			jQuery('.front #header .bot').slideUp(500);
			udsmopen = false;
		}

		// MOBILE STUFF
		jQuery('.menu-toggle').click(function(){
			jQuery('#nav').stop(false, true).slideToggle();
		});

		// Hide the address bar!
		setTimeout(function(){window.scrollTo(0, 1);}, 0);

	}
}

Drupal.behaviors.pinit = {
	attach: function (context, settings) {
			
			jQuery('.image-post_full').after('<div class="hover-pinterest"><a class="pin-it-link" target="_blank"></a></div>').parent().addClass('image-holder');
			
			jQuery('.image-teaser .image-holder').each(function(index){
				var pinit = jQuery('.hover-pinterest', this);
					var pinita = jQuery('.hover-pinterest a', this);
					//var title = jQuery('.header h2 a', this).html();
					var title = jQuery(this).parent().parent().next().children('.header').children('h2').children('a').html();
					var image = jQuery('.image-post_full', this);
					var imgurl = image.attr('src');
					var encodedurl = encodeURIComponent(imgurl);
					var pathname = jQuery(location).attr('href');
					var url = jQuery('.image-post_full', this).attr('data-url'); 
									
					var pinhref = 'http://pinterest.com/pin/create/button/?url=';
					pinhref += 'http://upstairsdownstairs.com/' + url;
					pinhref += '&media=';
					pinhref += imgurl;
					pinhref += '&description=' + title + ' - from UDXOLA';
					
					pinita.attr('href', pinhref);
			});
			
			jQuery('.post-full .image-holder').each(function(index){
				var pinit = jQuery('.hover-pinterest', this);
					var pinita = jQuery('.hover-pinterest a', this);
					//var title = jQuery('.header h2 a', this).html();
					var title = jQuery(this).parent().parent().parent().children('.header').children('h1').html();
					var image = jQuery('.image-post_full', this);
					var imgurl = image.attr('src');
					var encodedurl = encodeURIComponent(imgurl);
					var pathname = jQuery(location).attr('href');
					var url = jQuery('.image-post_full', this).attr('data-url'); 
									
					var pinhref = 'http://pinterest.com/pin/create/button/?url=';
					pinhref += pathname;
					pinhref += '&media=http://upstairsdownstairs.com/';
					pinhref += imgurl;
					pinhref += '&description=' + title + ' - from UDXOLA';
					
					pinita.attr('href', pinhref);
					
			});
			
			jQuery('.image-holder').hover(function(){
				jQuery('.hover-pinterest', this).addClass('show-pin-btn');
			}, function(){
				jQuery('.hover-pinterest', this).removeClass('show-pin-btn');
			});
				
	}
}


