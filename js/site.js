/********************************
	BURGER MENU - ICON
********************************/
	$ = jQuery;



	var Menu = {
	  
	  el: {
	    ham: $('header .logo .menu'),
	    menuTop: $('header .logo .menu-top'),
	    menuMiddle: $('header .logo .menu-middle'),
	    menuBottom: $('header .logo .menu-bottom')
	  },
	  
	  init: function() {
	    Menu.bindUIactions();
	  },
	  
	  bindUIactions: function() {
	    Menu.el.ham
	        .on(
	          'click',
	        function(event) {
	        Menu.activateMenu(event);
	        event.preventDefault();
	      }
	    );
	  },	  
	  activateMenu: function() {
	    Menu.el.ham.toggleClass('menu-click');
	    Menu.el.menuTop.toggleClass('menu-top-click');
	    Menu.el.menuMiddle.toggleClass('menu-middle-click');
	    Menu.el.menuBottom.toggleClass('menu-bottom-click'); 
	  }
	};
	
	Menu.init();
	
jQuery(document).ready(function( $ ) {
		
		function scrollMenu(){
				$(window).scroll(function(){					
						if($(window).scrollTop() > 150){							
							$('.scroll-top-bar').show();							
						}else {	$('.scroll-top-bar').hide();}								
				});
			}			
			scrollMenu();
			
			function blinkBar(){
				$(window).scroll(function(){						
						if($(window).width() < 1000){
							if($(window).scrollTop() > 500){
								$('.scroll-top-bar').addClass('blinkBar');	
							} 						
						}
									
					});
			}
			blinkBar();
			
			$(window).scroll(function() {
			   if($(window).scrollTop() + $(window).height() == $(document).height()) {				 
				   $('.scroll-top-bar').hide();
			   }
			});			
		$('.scroll-top').click(function(){
			$(this).toggleClass('active-link');
			$('.scroll-top-menu').slideToggle('slow');
			return false;
		});	
		
		$('.go-top').click(function() { 
			$('.scroll-top-menu').slideUp();
			$('.scroll-top').removeClass('active-link'); 
			$('html, body').animate({ scrollTop: 0 }, 1200);
			return false;
		});
		
		$('.go-middle').click(function() {  
			$('.scroll-top-menu').slideUp();
			$('.scroll-top').removeClass('active-link'); 
			$('html, body').animate({ scrollTop: $(document).height() / 2}, 1200);
			return false;
		});
		
		$('.go-Bottom').click(function() {  
			$('.scroll-top-menu').slideUp();
			$('.scroll-top').removeClass('active-link'); 
			$("html, body").animate({ scrollTop: $(document).height() }, 1000);
			return false;
		});
		
		
		$('.scroll-top-menu .close-element').click(function () {
			$('.scroll-top-menu.closer-element').slideUp();			
			return false;
		});
				
		$('.scroll-menu a[href]:not([href^="mailto\\:"])').click(function() {
			$('.scroll-top').removeClass('active-link'); 
			  $('.scroll-top-menu').slideUp();
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			
				var headerHeight = $('header').height();
				var sectionFoucus = headerHeight + 70;
			  var target = $(this.hash); 
					  
			  $(target).css('display','block');
			  
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top - sectionFoucus
				}, 1000);
				return false;
			  }
			}
		  });
		  
		  $('.widgets-post-links a[href]:not([href^="mailto\\:"])').click(function() {
			$('.scroll-top').removeClass('active-link'); 
			  $('.scroll-top-menu').slideUp();
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			
				var headerHeight = $('header').height();
				var sectionFoucus = headerHeight + 70;
			  var target = $(this.hash); 
					  
			  $(target).css('display','block');
			  
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top - sectionFoucus
				}, 1000);
				return false;
			  }
			}
		  });
		
		/****** trending*********/	
		setTimeout(function(){		
			if($('#trending').length > 0){	
				var lengthCol = $('#trending .col-1').size();
				//console.log(lengthCol);
				$('#trending .col-1').each(function(i) {
					if( i % 5 == 0 ) {
						$(this).nextAll().andSelf().slice(0,5).wrapAll('<div class="trending-wrap"></div>');
					}
				});
			}
		},800);		
		/*****************/
			var delay=200, setTimeoutConst;
			$( "#menu-primary-categories>li>a" ).hover(function() {
				var thishover = $(this);
			    setTimeoutConst = setTimeout(function(){
					//console.log('over');					
					if($(thishover).parent('li').hasClass('active')){
						
					} else {
						$('#menu-primary-categories>li').removeClass('active');
						$(thishover).closest('li').addClass('active');
						var thisClass = $(thishover).closest('li').attr('class');		
						var goClass = '.'+thisClass;
						var splitTxt = goClass.split(" ");
						var toggleClass = splitTxt[0];	
						
						$('.header-menu .menu-articles').removeClass('menuOpened').stop(true).slideUp('fast');
						$('.header-menu '+toggleClass).addClass('menuOpened').stop(true).slideDown('fast');
					}
				}, delay);
			    
			  }, function() {
			  	//console.log('overOUT');
			   	clearTimeout(setTimeoutConst );
			   	/*$('#menu-primary-categories>li').removeClass('active');
				$('.header-menu .menu-articles').removeClass('menuOpened').stop(true).slideUp(50);*/
				
			  });
			  
			$('header .hdr_container').mouseover(function(){			
				$('#menu-primary-categories>li').removeClass('active');
				$('.header-menu .menu-articles').removeClass('menuOpened').stop(true).slideUp(50);
			});
			
			$('.menu-articles').mouseleave(function(){			
				$('#menu-primary-categories>li').removeClass('active');
				$('.header-menu .menu-articles').removeClass('menuOpened').stop(true).slideUp(50);
			});
			
			
		/*******************/
		
		/****top-menu****/		
		/**********************/
			// FIXED HEADER //
		/*********************/
		
			//$('.menu-bar.main-navbar .container').clone().after( '.hdr_container');
			
			function fixedHeader(){				
				if($(window).width() > 750){
					$(window).scroll(function(){
						if($(window).scrollTop() > 176){	
							var headerHeight = $('header').height();
							$('#wrapper').css('marginTop',176);	
							$('header').addClass('headerRowsmall');												
							$('.menu-bar.main-navbar').addClass('scrolling-menu-bar');	
																				
												
						}else {			
							$('#wrapper').css('marginTop',0);	
							$('header').removeClass('headerRowsmall');
							//$('header').removeClass('position-fixed');							
							$('.menu-bar.main-navbar').removeClass('scrolling-menu-bar');
											
						}
					});	
				}		
			}			
			fixedHeader();		
			
			/***** resize *****/
			function fixedmenu(){
				$(window).resize(function() {
					if($(window).width() > 750){
						$(window).scroll(function(){
							if($(window).scrollTop() > 176)
							{							
								var headerHeight = $('header').height();
								$('#wrapper').css('marginTop',176);	
								$('header').addClass('headerRowsmall');												
								$('.menu-bar.main-navbar').addClass('scrolling-menu-bar');	
												
							}else {				
								$('#wrapper').css('marginTop',0);	
								$('header').removeClass('headerRowsmall');
								//$('header').removeClass('position-fixed');							
								$('.menu-bar.main-navbar').removeClass('scrolling-menu-bar');						
							}
						});	
					}
				});	
			}			
			fixedmenu();
		// FIXED HEADER //
		
		function openHeaderMenu(){
			//hide detailed menu */
				$('.main-navbar ul>li').removeClass('active');
				$('.header-menu > .menuOpened').slideUp(); 
			//hide detailed menu */
			
			//hide search menu */
				$('.menu-search').slideUp();
				$('.search').removeClass('active');
			//hide search menu */
			
			$('.top-menu-link').toggleClass('active');
			$('.main-navbar.toggleclass').slideToggle();
			
			$('.menu-container').slideToggle();
			return false;
		}
		
		
		$('.top-menu-link').click(function(){			
			openHeaderMenu();
			return false;
		});
		
		$('.close-menu-link').click(function(){
			$('.search').removeClass('active');
			$('.top-menu-link').removeClass('active');
			$(this).closest('.closer-element-box').slideUp();
			return false;
		});
		
		$('.close-menu-link').click(function(){
			if ( $(window).width() < 1000) {				
				$('.top-menu-link.tablet').removeClass('active');
				$('.main-navbar.tabletMenu').slideUp();					
			}
			return false;
		});
		
		function openHeaderSearch(){
			//hide detailed menu */
				$('.main-navbar ul>li').removeClass('active');
				$('.header-menu > .menuOpened').slideUp(); 
			/* //hide detailed menu */			
			//hide header-category menu */
				$('.menu-container').slideUp();
				$('nav .menu').removeClass('menu-click');
				$('nav .menu .menu-top').removeClass('menu-top-click');
				$('nav .menu .menu-middle').removeClass('menu-middle-click');
				$('nav .menu .menu-bottom').removeClass('menu-bottom-click');
			//hide header-category menu */			
			$('.search').toggleClass('active');
			$('.menu-search').slideToggle();
			$('.top-menu-link').removeClass('active');
			$('.main-navbar.tabletMenu').slideUp();
			//$('.menu-slide-link').removeClass('active');		
			//$('.search-box-open-link').removeClass('active');
			return false;
		}
		
		$('.openSearch-box').click(function(){	
			openHeaderSearch();
			return false;
		});
					
		$('.search').click(function(){
			openHeaderSearch();
			return false;
		});		
					
		/****************************/
			// BOTTOM SCROLL MENU
		/***************************/
		if ( $(window).width() < 750 ) {		
			$('.menu-slide-link').click(function(){	
				$('html, body').animate({ scrollTop: 0 }, 800);				
				openHeaderMenu();
				$('.main-navbar.tabletMenu').slideToggle('slow');
			});
			
			$('.search-box-open-link').click(function(){	
				$('html, body').animate({ 
					scrollTop: 0 
				}, 800);	
				openHeaderSearch();
			});
			
			
			
			/*** MOVE PULLQUOTE TO SECOND PARAGARPH *****/
			$('p.pullquote').appendTo("span.paragraph p:eq( 1 )");
			/*** MOVE VIDEO TO BELOW FASHION *****/
			$('.col-1 .latest-video-section').insertAfter('section#fashion');
	
		}
		
		/****** contentcarousel *********/	
		$('.ca-section:visible').contentcarousel();
		
									
		if($('.ca-section:visible').length > 0){	
			setTimeout(function(){ 
				var InfiniteRotator = {
						init: function(){						
							var itemInterval = 8000;			 
							//count number of items
							var numberOfItems = $('.ca-section:visible').find('.ca-wrapper .ca-item').length;			 
							//set current item
							var currentItem = 0;						
							//loop through the items
							var infiniteLoop = setInterval(function(){
								 $('.ca-section:visible').find('.ca-nav-next').trigger('click');
				 
								if(currentItem == numberOfItems -1){
									currentItem = 0;
								}else{
									currentItem++;
								}
								$('.ca-section:visible').find('.ca-nav-next').trigger('click');
				 
							}, itemInterval);
						}
					};			 
					InfiniteRotator.init();
					
			},800);
		};
		$(window).resize(function() {
		    $('.ca-section:visible').contentcarousel({scroll : 1});			       
		 });//resize

		/******************/
		/********************/
			//hide-section
		/********************/
		
		$('.hide-section').html('close <i></i>');
		
		var decodedCookie = decodeURIComponent(document.cookie);
		console.log(decodedCookie);
		
		var ca = decodedCookie.split(';');
		var cookies;
		cookies = {};
		
		for(var i = 0; i <ca.length; i++) {
			var C = ca[i].split('=');
			
			//console.log( C[0].trim().search("element") );
			
			if( C[0].trim().search("element") !== -1)
			{
				var c_name = C[0].trim();
				c_name = c_name.replace("element_", "");
			}
			
			//console.log(c_name);
				
				
			
			$( "#"+c_name ).find('.gridContainer.flex').slideUp();
			$( "#"+c_name ).find('.hide-section').addClass("show");
			$( "#"+c_name ).find('.hide-section').html('open <i></i>');
			
			
		} 
		
		
		
		
		
		$('.hide-section').click(function(){
			var obj = (this);
			
			console.log($(obj).text().trim());
			if( $(obj).text().trim() == "close" ) {
				
				
				 var d = new Date();
				d.setTime(d.getTime() + (7*24*60*60*1000));
				var expires = "expires="+ d.toUTCString();
				
				
				document.cookie = "element_"+ $(obj).closest("section").attr("id") +"=1;" + expires + ";";
				console.log("cookie Saved");
			} else {
				document.cookie = "element_"+ $(obj).closest("section").attr("id") +"=deleted; expires=" + new Date(0).toUTCString() ;
				console.log( 'cookie Deleted' );
			}
			
			$('.hide-section').html('close <i></i>');
			$(this).toggleClass('show');
			
			
			
			$(this).closest('section.row').find('.gridContainer.flex').slideToggle('show');
			$('.hide-section.show').html('open <i></i>');
			
			
			
			
			
			//console.log(document.cookie);
		});
		
		/***********************************/
			// POST AND PAGE CONTENT IMAGE
		/************************************/
		$('.the-content img').each(function() {	
			 //var width = $(this).width();
			//console.log(width);
			  if($(this).width() > 569){
				  $(this).addClass('aligncenter');
				  $(this).removeClass('alignnone');
			  }else{
				 $(this).addClass('alignleft');
				 $(this).removeClass('alignnone');
			  }
		});	
		
	//********************************************
		//STICKY SIDEBAR
	//********************************************		
	 //$(".single-Page .left-column, .single-Page .right-column").stick_in_parent();
	function isMobile(){
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
	}
	function isFirefox(){
    return /Firefox/i.test(navigator.userAgent) ? true : false;
	}
	jQuery(document).ready(function($){
    if(!isMobile() && !isFirefox()){
        $(".single-Page .left-column, .single-Page .right-column").stick_in_parent();
    }
	});
	
		/********************************************
			FETCH AND DISPLAY VIDEO FROM YOUTUBE
		********************************************/
		
		var channelName='desiblitzer';
		var vidResults='5';
		$.get(
				"https://www.googleapis.com/youtube/v3/channels",
				{
					part: 'contentDetails',
					forUsername: channelName,
					key: 'AIzaSyB6ueJDP1j1citY9tf9bbtVhIPP3xdQe1A'},			
					function(data){
						$.each(data.items, function(i , item){
						//console.log(item);
						pid = item.contentDetails.relatedPlaylists.uploads;
						getvids(pid);
					})
				}
		); //GET
				
		function getvids(pid){			
			$.get(
					"https://www.googleapis.com/youtube/v3/playlistItems",{
					part: 'snippet',
					maxResults: vidResults,
					playlistId: pid,
					key: 'AIzaSyB6ueJDP1j1citY9tf9bbtVhIPP3xdQe1A'},				
					function(data){
						var output;
						var Title;		
						//console.log(data.items);
						var videoResults = data.items.reverse();
						$.each(videoResults, function(i , item){							
							//console.log(item.snippet);							
							var videTitle = item.snippet.title;
							var videoThumb=item.snippet.thumbnails.medium.url;
							var link = item.snippet.resourceId.videoId;
							//console.log(link);	  
							var output = '<div class="col-3">';
							output += '<article class="trend-overlay flex">';
							output += '<div class="content"><figure>';
							output += '<a class="fancybox-media" href="https://www.youtube.com/watch?v='+link+' " title="'+videTitle+'" rel="prettyPhoto"><img src=" '+videoThumb+' "/></a>';
							output += '</figure><h3>';
							output += '<a class="fancybox-media" href="https://www.youtube.com/watch?v='+link+' " title="'+videTitle+'" rel="prettyPhoto">'+videTitle+'</a>';
							output += '</h3></figure>';
							output += '</div>';
							output += '</article>';
							output += '</div>';		  
							$('.flex.latest-video').prepend(output);
							//$('.flex.cat-video-list').prepend(output);
						});
									
					}
			);				
		} //getvids			
		
	/***************/
	//LightBox
	/***************/			
	$('.fancybox-media')
		.attr('rel', 'media-gallery')
		.fancybox({
			openEffect : 'none',
			closeEffect : 'none',
			prevEffect : 'none',
			nextEffect : 'none',

			arrows : false,
			helpers : {
				media : {},
				buttons : {}
			}
	});	
			
	//*********************
		//Search Again
	//*********************
	$('.search-key-row .alm-load-more-btn').click(function(){
		$('.menu-search').slideToggle('fast');
	});
	
	
	
	//********************//
		//widgettitle
	//********************//
	
	$('.widgettitle').wrapInner('<span></span>');
	
	/****************************************/
		//inview - Single page meida-option
	/***************************************/
	if($('.the-content').length != 0){		
		
		$('.the-content').waypoint(function(direction) {
			if(direction == 'down'){
				$('.fixed-meida-option').animate({
					opacity :1,
				}, 800);	
			} else {
				$('.fixed-meida-option').css('opacity',0);
			}
			
		});
		
		/**/
		$('.close-scroll a').click(function(){
			$('.fixed-meida-option').css('opacity',0);
			return false;
		});		
	}
	
	/*** REMOVE MENU IN MOBILE VIEW *****/
	if ( $(window).width() < 750 ) {
		$('.menu-container .menu-flex').remove();
	}
	
	$(window).resize(function() {
		if ( $(window).width() < 750 ) {
			$('.menu-container .menu-flex').remove();
		}
	});
	
	
	if ($(window).width() < 1000) {		
		$('.top-menu-link').addClass('tablet');
		$('.main-navbar').addClass('tabletMenu');
		$('.main-navbar').hide();
	}else {
		$('.top-menu-link').removeClass('tablet');
		$('.main-navbar').removeClass('tabletMenu');
		$('.main-navbar').removeClass('toggleclass');
		$('.main-navbar').show();
		
	}
	
	$(window).resize(function() {		
		if ($(window).width() < 1000) {				
			$('.top-menu-link').addClass('tablet');
			$('.main-navbar').addClass('tabletMenu');
			$('.main-navbar').hide();
			$('.menu-container').hide();
			$('.top-menu-link.tablet').removeClass('active');
			
			
		}else {
			//alert('1001');
			$('.top-menu-link').removeClass('tablet');
			$('.main-navbar').removeClass('tabletMenu');
			$('.main-navbar').removeClass('toggleclass');
			$('.main-navbar').show();
			
		}
	});	
	
	$('.top-menu-link.tablet').click(function(){
		$('.main-navbar.tabletMenu').slideToggle('slow');
		$('.menu-slide-link').removeClass('active');		
		$('.search-box-open-link').removeClass('active');		
	});	
	
	/************ SIDEBAR AD******************/	
	var getAdCat = $('.left-column-content .showOnly-cat').attr('id');
	var getPostCat = $('.post-page>div').attr('class');	
	var adBG = getAdCat+'-bg';
	$('.widget.showOnly-cat').hide();
	
	if(adBG == getPostCat){
		$('.widget.showOnly-cat').show();
	}	
	
	
	$(".widgettitle").each(function(index, element) {
		var obj = $(this);
		if( $(obj).text().trim() == "Related Reads"){$(obj).remove();}
	});
	
	
	//console.log(getAdCat+'-bg');
	//console.log(getPostCat);	
	
}); //END jQUERY FUNCTION