(function($){
	(function(cash) { "use strict";	

				 
				 function center_bg(){
		$('.center-image').each(function(){
		  var bgSrc = $(this).attr('src');
		  $(this).parent().css({'background-image':'url('+bgSrc+')'});
		  $(this).remove();
		});
	}
	center_bg();
				 
	/***********************************/
	/*Swiper Slider*/
	/**********************************/
		
    var swipers = [];
    var winW = $(window).width();
    var winH  =  $(window).height();
	var xsPoint = 700, smPoint = 991, mdPoint = 1199; 
	var initIterator = 0;
				 			 
    function swiperInit(){
		
		  $('.swiper-container').each(function(){								  
			var $th = $(this);								  
			var index = $th.attr('id'); 
				$(this).addClass('swiper-'+index + ' initialized').attr('init-attr', 'swiper-'+index);
				$(this).parent().find('.pagination').addClass('pagination-'+index);
			
				var autoPlayVar = parseInt($th.attr('data-autoplay'));
				var slidesPerViewVar = $th.attr('data-slides-per-view');
			    var loopVar = parseInt($th.attr('data-loop'));
			    var mouseVar = parseInt($th.attr('data-mouse'));
			    var sliderSpeed = parseInt($th.attr('data-speed'));
			    var xsValue, smValue, mdValue, lgValue;
			    var slideMode =  $th.attr('data-mode');
			    var touchVar = parseInt($th.attr('data-touch'));
			    if(slidesPerViewVar == 'responsive'){
					 xsValue = parseInt($th.attr('data-xs-slides'));
					 smValue = parseInt($th.attr('data-sm-slides'));
					 mdValue = parseInt($th.attr('data-md-slides'));
					 lgValue = parseInt($th.attr('data-lg-slides'));
					 slidesPerViewVar = updateSlidesPerView(xsValue, smValue, mdValue, lgValue);
                } else slidesPerViewVar = parseInt(slidesPerViewVar);
				
				swipers ['swiper-'+index] = new Swiper('.swiper-'+index,{
					speed: sliderSpeed,
					loop: loopVar,
					mode: slideMode,
					resistance: false,
					grabCursor: true,
					pagination: '.pagination-'+index,
					paginationClickable: true,
					autoplay: autoPlayVar,
					autoplayDisableOnInteraction: true,
					slidesPerView: slidesPerViewVar,
					keyboardControl: true,
					simulateTouch: touchVar,
					calculateHeight: true,
					mousewheelControl: mouseVar
//					onInit: function(swiper){
//					    var activeIndex = (loopVar===true)?swiper.activeIndex:swiper.activeLoopIndex;
//						if($th.closest('.top-baner').length) {
//							$('.main-title h1').text($('.main-title-hide').eq(activeIndex).find('h1').text());
//							$('.main-title h2').text($('.main-title-hide').eq(activeIndex).find('h2').text());
//                            $('.main-title h1').attr('data-text', $('.main-title-hide').eq(activeIndex).find('h1').attr('data-hover'));
//							$('.title-wrap').addClass('active');
//							$('.title-wrap').addClass('slide');
//					     }
//                    },
//					onSlideChangeStart: function(swiper){
//					   var activeIndex = (loopVar===true)?swiper.activeIndex:swiper.activeLoopIndex;
//						if($th.closest('.top-baner').length) {
//							if($('.swiper-container .swiper-slide').hasClass('swiper-slide-active')){
//								$('.title-wrap').removeClass('active');
//								$('.title-wrap').removeClass('slide');
//								$('.title-wrap').addClass('active-out');
//							  }	 
//					}	
//					},
//					onSlideChangeEnd: function(swiper){
//						var activeIndex = (loopVar===true)?swiper.activeIndex:swiper.activeLoopIndex;
//						if($th.closest('.top-baner').length) {
//							    if($('.title-wrap').hasClass('active')){
//									$('.title-wrap').removeClass('active');
//								}else{
//								   $('.title-wrap').addClass('active');
//								   $('.title-wrap').removeClass('active-out');
//								}
//							   if($('.title-wrap').hasClass('slide')){
//									$('.title-wrap').removeClass('slide');
//								}else{
//								   $('.title-wrap').addClass('slide');
//								}
//							$('.main-title h1').text($('.main-title-hide').eq(activeIndex).find('h1').text());
//							$('.main-title h2').text($('.main-title-hide').eq(activeIndex).find('h2').text());
//                            $('.main-title h1').attr('data-text', $('.main-title-hide').eq(activeIndex).find('h1').attr('data-hover'));
//								
//					     }
//					}
				});
			swipers['swiper-'+index].reInit();
		    initIterator++;
       
		});
	}
				 
	 $('.slide-prev').on('click', function(){
      var arIndex = $(this).closest('.arrow').find('.swiper-container').attr('init-attr');
      swipers[arIndex].swipePrev();
     });

     $('.slide-next').on('click', function(){
     var arIndex = $(this).closest('.arrow').find('.swiper-container').attr('init-attr');
      swipers[arIndex].swipeNext();
     });
				 
		 
	function updateSlidesPerView(xsValue, smValue, mdValue, lgValue){
         if(winW > mdPoint) return lgValue;
         else if(winW>smPoint) return mdValue;
         else if(winW>xsPoint) return smValue;
         else return xsValue;
    }			 	
				 			   
    swiperInit();
				
				 
	/***********************************/
	/*PHOTOSWIPE GALLERY*/
	/**********************************/          
                 
   var initPhotoSwipeFromDOM = function(gallerySelector) {
    // parse slide data (url, title, size ...) from DOM elements 
    // (children of gallerySelector)
    var parseThumbnailElements = function(el) {
        var thumbElements = el.childNodes,
            numNodes = thumbElements.length,
            items = [],
            figureEl,
            childElements,
            linkEl,
            size,
            item;
        for(var i = 0; i < numNodes; i++) {
            figureEl = thumbElements[i]; // <figure> element

            // include only element nodes 
            if(figureEl.nodeType !== 1) {
                continue;
            }
            linkEl = figureEl.children[0]; // <a> element
            size = linkEl.getAttribute('data-size').split('x');
            // create slide object
            item = {
                src: linkEl.getAttribute('href'),
                w: parseInt(size[0], 10),
                h: parseInt(size[1], 10)
            };
            if(figureEl.children.length > 1) {
                // <figcaption> content
                item.title = figureEl.children[1].innerHTML; 
            }
            if(linkEl.children.length > 0) {
                // <img> thumbnail element, retrieving thumbnail url
                item.msrc = linkEl.children[0].getAttribute('src');
            } 
            item.el = figureEl; // save link to element for getThumbBoundsFn
            items.push(item);
        }
        return items;
    };
    var closest = function closest(el, fn) {
        return el && ( fn(el) ? el : closest(el.parentNode, fn) );
    };
    var onThumbnailsClick = function(e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;
        var eTarget = e.target || e.srcElement;
        var clickedListItem = closest(eTarget, function(el) {
            return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
        });
        if(!clickedListItem) {
            return;
        }
        // find index of clicked item
        var clickedGallery = clickedListItem.parentNode,
            childNodes = clickedListItem.parentNode.childNodes,
            numChildNodes = childNodes.length,
            nodeIndex = 0,
            index;
        for (var i = 0; i < numChildNodes; i++) {
            if(childNodes[i].nodeType !== 1) { 
                continue; 
            }
            if(childNodes[i] === clickedListItem) {
                index = nodeIndex;
                break;
            }
            nodeIndex++;
        }
        if(index >= 0) {
            openPhotoSwipe( index, clickedGallery );
        }
        return false;
    };
    // parse picture index and gallery index from URL (#&pid=1&gid=2)
    var photoswipeParseHash = function() {
        var hash = window.location.hash.substring(1),
        params = {};
        if(hash.length < 5) {
            return params;
        }
        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
            if(!vars[i]) {
                continue;
            }
            var pair = vars[i].split('=');  
            if(pair.length < 2) {
                continue;
            }           
            params[pair[0]] = pair[1];
        }
        if(params.gid) {
            params.gid = parseInt(params.gid, 10);
        }
        if(!params.hasOwnProperty('pid')) {
            return params;
        }
        params.pid = parseInt(params.pid, 10);
        return params;
    };
    var openPhotoSwipe = function(index, galleryElement, disableAnimation) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
            gallery,
            options,
            items;
        items = parseThumbnailElements(galleryElement);
        options = {
            index: index,
            galleryUID: galleryElement.getAttribute('data-pswp-uid'),
            getThumbBoundsFn: function(index) {
                // See Options -> getThumbBoundsFn section of docs for more info
                var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                    pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                    rect = thumbnail.getBoundingClientRect(); 
                return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
            },
           history: false,
           focus: false 
        };
        if(disableAnimation) {
            options.showAnimationDuration = 0;
        }
        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };
    var galleryElements = document.querySelectorAll( gallerySelector );
    for(var i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute('data-pswp-uid', i+1);
        galleryElements[i].onclick = onThumbnailsClick;
    }
    // Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = photoswipeParseHash();
    if(hashData.pid > 0 && hashData.gid > 0) {
        openPhotoSwipe( hashData.pid - 1 ,  galleryElements[ hashData.gid - 1 ], true );
    }
    };
    initPhotoSwipeFromDOM('.my-simple-gallery');			 
				 
	/***********************************/
	/*WINDOW RESIZE*/
	/**********************************/
				 
	function resizeCall() {
		winW = $(window).width();
   		winH = $(window).height();
         $('.swiper-container[data-slides-per-view="responsive"]').each(function(){
			 var $th = $(this);
			 var xsValue = parseInt($th.attr('data-xs-slides'));
			 var smValue = parseInt($th.attr('data-sm-slides'));
			 var mdValue = parseInt($th.attr('data-md-slides'));
			 var lgValue = parseInt($th.attr('data-lg-slides'));
			 var currentSwiper = swipers[$(this).attr('init-attr')];
			 var newSlideNumber = updateSlidesPerView(xsValue, smValue, mdValue, lgValue);
			 currentSwiper.params.slidesPerView = newSlideNumber;
             currentSwiper.reInit();
         });
    }

    $(window).resize(function(){
         resizeCall();
    });	
				 
	window.addEventListener("orientationchange", function() {
         resizeCall();
    }, false);				 
	
	 /***********************************/
	 /*Video thumbs*/
	 /**********************************/
		
        $('.video-click').on( "click", function() {
			$(this).find('iframe').attr('src',$(this).find('.video-change').attr('href') + '&autoplay=1');
              $(this).find('.video').show();
              $(this).find('.img-href').hide();
			  $(this).find('.play').hide();
	    });
				   
		$('.video .clos').click(function(){
			$('.video').fadeOut(500, function(){
				$('.video iframe').attr('src','');
				$('.img-href').show();
				$('.play').show();
			});
	    });
	
	/***********************************/
	/*MOBILE MENU*/
	/**********************************/
						 
	$('.nav-menu-icon a').on("click", function() { 
	  if ($('nav').hasClass('slide-menu')){
		  $('nav').removeClass('slide-menu'); 
		  $(this).removeClass('active');
	  }else {
		   $('nav').addClass('slide-menu');
		  $(this).addClass('active');
	  }
		return false;

	});		 

				                   		 
	/***********************************/
	/*ANIMSITION PLUGIN FOR PAGE TRANSITION*/
	/**********************************/
				 
	if($(".animsition").length){
	   $(".animsition").animsition({
		inClass               :   'zoom-in-sm',
		outClass              :   'zoom-out-sm',
		inDuration            :    800,
		outDuration           :    800,
		linkElement           :   '.animsition-link',
		   // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
		loading               :    true,
		loadingParentElement  :   'body', 
		loadingClass          :   'animsition-loading',
		unSupportCss          : [ 'animation-duration',
								  '-webkit-animation-duration',
								  '-o-animation-duration'
								],
		overlay               :   false,

		overlayClass          :   'animsition-overlay-slide',
		overlayParentElement  :   'body'
	  });
	}
	
	/***********************************/
	/*MAGNIFIC POPUP GALLERY*/
	/**********************************/
	
	if($('.popup-gallery').length){			 
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small></small>';
			}
		},
		zoom: {
			enabled: true,
			duration: 300 
		}
	});
	}
				 
	/***********************************/
	/*WINDOW LOAD*/
	/**********************************/
				 
    $(window).load(function() {
		
		//if($('#map-canvas-contact').length==1){
		 //initialize('map-canvas-contact');}
		
		setTimeout (function() {
		   $('.logo').fadeIn(500);
			$('.mobile-icon').fadeIn(500);
		},1000);
		
		
	    if ($('.izotope-container').length) { 
			 var $container = $('.izotope-container');
              $container.isotope({
                itemSelector: '.item',
                layoutMode: 'masonry',
                masonry: {
                  columnWidth: '.grid-sizer'
                }
              });
			  $('#filters').on( 'click', 'button', function() {
				$('.izotope-container').each(function(){
				   $(this).find('.item').removeClass('animated');
				});
				$('#filters button').removeClass('active-button');
				  $(this).addClass('active-button');
					 var filterValue = $(this).attr('data-filter');
						$container.isotope({filter: filterValue});
              });
			
			  var $stampElem = $container.find('.stamp');
              var isStamped = false;
			
			  $container.isotope( 'stamp', $stampElem );
	
           }
	});
				 			 
				 
})(jQuery); 
})(jQuery);