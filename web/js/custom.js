var isScrollingAllowed = true;
var win = $(window);
var doc = $(document);

//get all elements with class and get the biggest box
function get_biggest(elements){
	var biggest_height = 0;
	for ( var i = 0; i < elements.length ; i++ ){
		var element_height = $(elements[i]).height();
		//compare the height, if bigger, assign to variable
		if(element_height > biggest_height ) biggest_height = element_height;
	}
	return biggest_height;
}

function resize() {
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();

	// STICKY FOOTER
	var headerHeight = $('header').outerHeight();
	var footerHeight = $('footer').outerHeight();
	var footerTop = (footerHeight) * -1
	$('footer').css({marginTop: footerTop});
	$('#main-wrapper').css({paddingBottom: footerHeight});

	// for vertically middle content
	$('.bp-middle').each(function() {
		var bpMiddleHeight = $(this).outerHeight() / 2 * - 1;
		$(this).css({marginTop: bpMiddleHeight});
	});

	// for equalizer
	$('.classname').css({minHeight: 0});
	  var ClassName = get_biggest($('.classname'));
	  $('.classname').css({minHeight: ClassName});
}

function initCustomForm() {
    $('select.custom-select').each(function() {
        $(this).wrap('<div class="custom-select-wrapper" />');
        $(this).before('<div class="custom-select-display" />');
        $(this).change(function() {
            $(this).siblings('.custom-select-display').text( $(this).find('option:selected').text() );
        });
        $(this).keyup(function() {
            $(this).siblings('.custom-select-display').text( $(this).find('option:selected').text() );
        });
        $(this).change();
    });
}

function pageInitAnim() {
	var userAgent = navigator.userAgent || navigator.vendor || window.opera;

	if (/android/i.test(userAgent)) {
        $('.hiding').removeClass('hiding').css('opacity','0');
		$('.animated').each(function() {
			var element = $(this);
			TweenMax.to(element, .3, { opacity: 1, ease: Expo.easeInOut});
		});
	} else {
		$('.animated').appear(function() {
            var element = $(this);
            var animation = element.data('animation');
            var animationDelay = element.data('delay');
            if(animationDelay) {
              setTimeout(function(){
                  element.addClass( animation + " visible" );
                  element.removeClass('hiding');
              }, animationDelay);
            } else {
              element.addClass( animation + " visible" );
              element.removeClass('hiding');
            }               
        }, {accY: -90});
	}
}

function scrollToDiv(element){
    var offset = element.offset();
    var offsetTop = offset.top;
    var totalScroll = offsetTop;
    var headerH = $('header').outerHeight(false);
    $('body, html').animate({
        scrollTop: totalScroll - headerH + 1 
    }, 500);
}

function doCoverImage() {	

	$('.coverimage img').each(function() {
		coverImage( $(this) );
	});
}


function coverImage( image ) {

	var imgObj = image;
	var iW = imgObj.attr('width');//width(); //width of image ratio
	var iH = imgObj.attr('height');//.height(); //height of image ratio

	imgObj.width(0).height(0);
	
	var imgContainer = image.parent();
	var cW = imgContainer.width(); //width of container or browser
	var cH = imgContainer.height(); //height of container or browser

	

	if ( cH > 1 ) {
		var cP = cW/cH; //ratio of container or browser
		var iP = iW/iH; //ratio of image

		if ( iP > cP ) { //if image ratio is more than container ratio (if image width is more than container width)
			iH = cH; //set image height from container height
			iW = cH * iP; //set image width using container height and image ratio
			imgObj.css({
				'margin-top': 0,
				'margin-left': Math.ceil((cW-iW)/2),
				'width': Math.ceil(iW),
				'height': Math.ceil(iH)
			}); //center the image and set dimensions
		} else { //if image ratio is less than container ratio (if image height is more than container height)
			iW = cW; //set image width from container width
			iH = cW / iP; //set image height from container width and ratio
			imgObj.css({
				'margin-top': Math.ceil(cH-iH),
				'margin-left': 0,
				'width': Math.ceil(iW),
				'height': Math.ceil(iH)
			}); //center the image and set dimensions
		}
	} else {
		imgObj.css({
			'margin-top': 0,
			'margin-left': 0,
			'width': 'auto',
			'height': 'auto'
		});
	}
}

//SMOOTH SCROLL
function smoothScroll() {
    var scrollTime = 1;
    var scrollDistance = 150;

    $(window).on("mousewheel DOMMouseScroll", function(event) {
        event.preventDefault();
        if (isScrollingAllowed) {

            // var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
            var delta = ( Math.abs(event.originalEvent.wheelDelta) < 120 ? event.originalEvent.wheelDelta / 6 : event.originalEvent.wheelDelta / 120 ) || -event.originalEvent.detail;
            var scrollTop = win.scrollTop();
            var finalScroll = scrollTop - parseInt(delta * scrollDistance);

            TweenMax.to(win, scrollTime, {
                scrollTo: { y: finalScroll, autoKill: true },
                ease: Power1.easeOut,
                autoKill: true,
                overwrite: 5
            });
        }
    });

}

function RemoveRougeChar(convertString){
    if(convertString.substring(0,1) == ","){
        return convertString.substring(1, convertString.length) 
    }
    return convertString;
}

function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}


$(window).resize(function() {
	resize();
	doCoverImage();

});

$(document).ready(function() {
	
	//smoothScroll();

	var timer;

	$('.js-mobile-custom-dropdown li a').click(function(){
		var sitem = $(this).text(),
            $this = $(this);

        $('.js-mobile-custom-dropdown ul li').removeClass('selected');
	    $(this).parent().addClass('selected');
	    $(this).closest('ul').siblings('span.selected').html(sitem);
	    $(this).closest('ul').slideUp(150);
	    $(this).children('ul').stop(true, false).slideToggle(150);
	    return false;
    });

	// MouseLeave Custom Dropdown
    $(document).on({
	    mouseenter: function(){
	    	clearTimeout(timer);
	        $('.js-custom-dropdown-menu', this).slideDown(150);
	    },
	    mouseleave: function(){
	        timer = setTimeout(function(){
	        	$('.js-custom-dropdown-menu').slideUp(150);
	        }, 1500);
	    }
	}, '.js-custom-dropdown-menu');

    $('.js-mobile-custom-dropdown').click(function() {
        $(this).children('ul').stop(true, false).slideToggle(150);
    });


 	$('input.number-field').keyup(function(event){
		// skip for arrow keys
		if(event.which >= 37 && event.which <= 40){
			elementvent.preventDefault();
		}
		var $this = $(this);
		var num = $this.val().replace(/,/gi, "").split("").reverse().join("");
		var num2 = RemoveRougeChar(num.replace(/(.{3})/g,"$1,").split("").reverse().join(""));
		


		// the following line has been simplified. Revision history contains original.
		$this.val(num2);
	});

	

    $(document).on('click', '#mc-embedded-subscribe', function(){
    	
    	
    	if($(this).hasClass('is-disabled')) {
    		$(this).closest('.input-wrap:not(.no-error)').addClass('error');
    		return false;
    	} else {
    		
    		// $('#mc_embed_signup_scroll .input-wrap').hide();
    		$('#mc_embed_signup_scroll .wing-checkbox').hide();
    		return true;
    	}
    });

    $('#terms-checkbox').change(function(){

        

        if( $('#terms-checkbox').is(':checked')) {
            $('#mc-embedded-subscribe').removeClass('is-disabled');
            $('.clear.input-wrap').removeClass('error');

        } else {
            $('#mc-embedded-subscribe').addClass('is-disabled');
        }

    });

    $('.closepop').click(function(e){
    	e.preventDefault();
    	$('body').css({'overflow' : 'initial'});
    	$('.popup-wrap').removeClass('active');

    	if($('.watch-video').length > 0) {
    		$('.video-holder video')[0].pause();
    	}
    	
    });

    $('.terms-btn').click(function(e){
    	e.preventDefault();

    	var _this = $(this).attr('href');
    	$('body').css({'overflow' : 'hidden'});
    	$(_this).addClass('active');
    });
});

$(window).load(function() {
	resize();

	// preloader once done
	Pace.on('done', function() {
		// totally hide the preloader especially for IE
		setTimeout(function() {
			$('.pace-inactive').hide();
			pageInitAnim();
			//smoothScroll();
			initCustomForm();

			$('.flexslider').flexslider({
				animation: "fade",
				slideshowSpeed : 6000,
				startAt: 0,
				slideshow : true,
				animationLoop: false,
				directionNav : false,
				direction: "vertical",
				start: function(slider){
					doCoverImage();
					pageInitAnim();
					//bpStellar();
					$('.home-flexslider').addClass('is-animated');
					setTimeout(function(){
						//$('.home-slide-item').addClass('is-animated');
						$('.banner-text-wrap').addClass('is-animated');


						$(slider).find("img[data-src]").each(function () {
				          var src = $(this).attr("data-src");
				          $(this).attr("src", src).removeAttr("data-src");
				       });
					}, 600);
				},

				after: function(slider) {
				    /* auto-restart player if paused after action */
				    if (!slider.playing) {
				      slider.play();
				    }
				    $('.banner-text h1 span').removeClass('is-animated');
				    $('.banner-text h1, .banner-text p, .banner-text .btn').removeClass('is-animated');	
				    var test = $(slider).find('.flex-active-slide').find('.home-slide-item').data('text');
				    setTimeout(function(){
				    	$('.banner-text h1, .banner-text p, .banner-text .btn').addClass('is-animated');	
					    $('.banner-text h1 span').html(test).addClass('is-animated');	
					}, 400);
				}
			});

		}, 500);

		setTimeout(function(){
			$('.you-can .sec-title').css({'opacity' : '1'});	
			$('.home-flexslider .flex-control-nav').css({'opacity' : '1'});
		}, 2400);	
	});
});