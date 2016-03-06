/*global jQuery, document, window, smoothScroll, Circles, Odometer, NotificationFx, WOW, Photostack*/
/* ==========================================================================
Document Ready Function
========================================================================== */
jQuery(document).ready(function () {

    'use strict';

    var onMobile, 
        myVal, 
        myCircle, 
        OBTimerO, 
        OBTimerC; 

    
    /* ==========================================================================
    Detect Mobile
    ========================================================================== */    
	onMobile = false;
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) { onMobile = true; }
    
    
    /* ==========================================================================
    Placeholder
    ========================================================================== */
    jQuery('input, textarea').placeholder();


    /* ==========================================================================
    Open / Close Menu
    ========================================================================== */
    jQuery('#open-button').on('click', function () {
        jQuery('body').toggleClass('over-menu');
        OBTimerO = setTimeout(function () {
            jQuery('body').toggleClass('show-menu');
        }, 50);
    });
    jQuery('#top-content-overlayer').on('click', function () {
        jQuery('body').removeClass('over-menu');
        OBTimerC = setTimeout(function () {
            jQuery('body').removeClass('show-menu');
        }, 50);
    });
    jQuery('.close-button').on('click', function () {
        jQuery('body').removeClass('over-menu');
        OBTimerC = setTimeout(function () {
            jQuery('body').removeClass('show-menu');
        }, 50);
    });
    
    clearTimeout(OBTimerO);
    clearTimeout(OBTimerC);


    /* ==========================================================================
    Data Spy
    ========================================================================== */
    jQuery('body').attr('data-spy', 'scroll').attr('data-target', '#menu-wrapper').attr('data-offset', '75');


    /* ==========================================================================
    Scroll To Section
    ========================================================================== */
    jQuery('a.scrolltosection').on('click', function (event) {
        event.preventDefault();
    });


    /* ==========================================================================
    Scroll To Top
    ========================================================================== */
    jQuery('a.scrollto').on('click', function () {
        jQuery('html, body').animate({scrollTop: '0'}, 1700);
        return false;
    });


  	/* ==========================================================================
	Personal Title
	========================================================================== */
	jQuery('#personal-typed').typed({
	strings: profileTypes,
	loop: true,
	typeSpeed: 30,
	backDelay: 2000,
	loopCount: false
	});

    
    /* ==========================================================================
    Skill Chart
    ========================================================================== */
	
	var skillDuration;
	
	if (onMobile === false) {
		skillDuration = 750;
	}
	else {
		skillDuration = 0;
	}
	
    jQuery('.skills').waypoint(function () {
        jQuery('.skills').each(function () {
            var getid = jQuery(this).attr('id');
            myVal = jQuery(this).attr("data-rel");
            myCircle = Circles.create({
                width: 10,
                id: getid,
                radius: 85,
                value: myVal,
                duration: skillDuration,
                text: function (value) {return value; }
            });
        });
    }, { offset: '50%', triggerOnce: true });

    
    /* ==========================================================================
    Fancy Box
    ========================================================================== */
    jQuery('.fancybox').fancybox({
        helpers: {
            title: null,
            media: {},
            overlay: {
                speedOut: 0
            }
        }
    });


    /* ==========================================================================
    FitVid
    ========================================================================== */
    jQuery('.post-header').fitVids();


    /* ==========================================================================
    Numbers
    ========================================================================== */
    jQuery('.box-numbers [data-to]').each(function () {
        var $this = jQuery(this);
        $this.waypoint(function () {
            $this.countTo({speed: 50});
        }, {offset: '75%', triggerOnce: true });
    });


    /* ==========================================================================
    Skills Slider
    ========================================================================== */
    jQuery('.owl-skills').owlCarousel({
        items: 4,
        autoPlay: false,
        pagination: true,
        stopOnHover: true,
        navigation: false,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [992, 3],
        itemsTablet: [768, 2],
        itemsTabletSmall: [480, 1],
        itemsMobile: [479, 1]
    });



    /* ==========================================================================
    Testimonials Slider
    ========================================================================== */
    jQuery('.owl-testimonials').owlCarousel({
        autoPlay: false,
        singleItem: true,
        pagination: true,
        stopOnHover: true,
        navigation: false
    });


    /* ==========================================================================
    Resume Slider
    ========================================================================== */
    jQuery('.owl-resume').owlCarousel({
        items: 3,
        autoPlay: false,
        pagination: true,
        stopOnHover: true,
        navigation: false,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [992, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: [599, 1],
        itemsMobile: [479, 1]
    });


    /* ==========================================================================
    on mobile ?
    ========================================================================== */
	if (onMobile === true) {

        /* ==========================================================================
        Remove Parallax
        ========================================================================== */
        jQuery('.parallax-image #home-section').css({backgroundAttachment: 'scroll'});
        jQuery('#alternative-home-section').css({backgroundAttachment: 'scroll'});
        jQuery('#skills-section').css({backgroundAttachment: 'scroll'});
        jQuery('#testimonials-section').css({backgroundAttachment: 'scroll'});
        jQuery('#numbers-section').css({backgroundAttachment: 'scroll'});

        /* ==========================================================================
        Smooth Scroll
        ========================================================================== */
        smoothScroll.init({
            offset: 70,
            speed: 500,
            updateURL: false
        });
    } else {

    	
    	jQuery('.menu-button').remove();
    	
    	
        /* ==========================================================================
        Parallax
        ========================================================================== */
        jQuery('.parallax-image #home-section').parallax('50%', 0.3);
        jQuery('#alternative-home-section').parallax('50%', 0.5);

        /* ==========================================================================
        Smooth Scroll
        ========================================================================== */
        smoothScroll.init({
            offset: 70,
            speed: 800,
            updateURL: false
        });
    }


    /* ==========================================================================
    Supersized Slider
    ========================================================================== */
    jQuery(function ($) {
        $('.image-slider #home-section').supersized({
            slide_interval : 5000, // Length between transitions
            transition : 1,
            transition_speed : 900, // Speed of transition
            slide_links : '0',
            slides : [
                {image : ((onMobile === false) ? '/images/slider/001.jpg' : '/images/slider/001_mobile.jpg'), title : '', thumb : '', url : ''},
                {image : ((onMobile === false) ? '/images/slider/002.jpg' : '/images/slider/002_mobile.jpg'), title : '', thumb : '', url : ''},
                {image : ((onMobile === false) ? '/images/slider/003.jpg' : '/images/slider/003_mobile.jpg'), title : '', thumb : '', url : ''}
            ]
        });
    });



}); // JavaScript Document




/* ==========================================================================
Window Resize
========================================================================== */
jQuery(window).resize(function () {

    'use strict';

    var containerMargin;

    /* ==============================================
    Refresh Data Spy
    =============================================== */
    jQuery('[data-spy="scroll"]').each(function () {
        var $spy = jQuery(this).scrollspy('refresh');
    });


    /* ==============================================
    Home Section Height
    =============================================== */
    containerMargin = ((jQuery(window).height() - jQuery('#home-section-container').height()) / 2) + 50;
    jQuery('#home-section').css({height: jQuery(window).height()});
    jQuery('#home-section-container').css({marginTop: containerMargin});


});




/* ==========================================================================
Window Scroll
========================================================================== */
jQuery(window).scroll(function () {

    'use strict';

    var enable_opacity, home_height, current_position;

    current_position = jQuery(document).scrollTop();

    /* ==============================================
    Home Section Opacity
    =============================================== */
    enable_opacity = true; /* Change it to false to disable the Home opacity */
    if (enable_opacity === true) {
        home_height = jQuery('#home-section').height();
        jQuery('#home-section').css({opacity: (1 - current_position / home_height * 1.2)});
        jQuery('.image-slider #supersized').css({opacity: (1 - current_position / home_height * 1.2)});
    }


    /* ==============================================
    Menu Background Color
    =============================================== */
    if (current_position >= 10) {
        jQuery('#menu-wrapper').addClass('menubgC');
    } else {
        jQuery('#menu-wrapper').removeClass('menubgC');
    }


});




/* ==========================================================================
Window Load
========================================================================== */
jQuery(window).load(function () {

    'use strict';

    var LoaderDelay, containerMargin, notification_on, notification, withanimation, wow;

    /* ==============================================
    Loader
    =============================================== */
    LoaderDelay = 350;

    function hideLoader() {
        var loadingLoader = jQuery('#loader');
        loadingLoader.css({height: 0});
        jQuery('#loader-container').css({display: 'none'});
    }
    hideLoader();


    /* ==============================================
    Home Section Height
    =============================================== */
    containerMargin = ((jQuery(window).height() - jQuery('#home-section-container').height()) / 2) + 50;
    jQuery('#home-section').css({height: jQuery(window).height()});
    jQuery('#home-section-container').css({marginTop: containerMargin});


    /* ==============================================
    Notification Message
    =============================================== */
    notification_on = notificationActive; /* Change it to false if you want to disable the Notification Message */
    if (notification_on === true) {
        if (!jQuery('body').hasClass('single-project')) {
            setTimeout(function () {
                notification = new NotificationFx({
                    ttl: 7000,
                    type: 'notice',
                    layout: 'growl',
                    effect: 'slide',
                    message: '<p>' + breakingNews + '</p>'
                });
                notification.show();
            }, 1000);
        }
    }

    
    /* ==========================================================================
    WOW Animation
    ========================================================================== */
    withanimation = true; /* Change it to false to disable the animation */
    if (withanimation === true) {
        wow = new WOW({
            offset: 40,
            mobile: false
        });
        wow.init();
    }


});








/*global $, document*/
/* ==========================================================================
Document Ready Function
========================================================================== */
$(document).ready(function () {

    'use strict';

    var emailReg, successmessage, failedmessage, username, useremail, usersubject, usermessage, isvalid, url;

    $('#contactform').submit(
		function nestocontact(event) {

            emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

			successmessage = contact_Success;
			failedmessage = contact_Error;
			username = $('#name');
			useremail = $('#email');
			usersubject = $('#subject');
			usermessage = $('#message');
			
			isvalid = 1;
			url = "php/contact-form/php/contact.php";

            if (username.val().trim() === "") {
                $('#name').addClass('form-error');
                $('.form-message').html(contact_InvalidName);
                
                ga('send', 'exception', {
                    'exDescription': 'InvalidName',
                    'exFatal': false
                  });
                
				return false;
			}

            if (useremail.val().trim() === "") {
				$('#email').addClass('form-error');
                $('.form-message').html(contact_InvalidEmail);
                
                ga('send', 'exception', {
                    'exDescription': 'InvalidEmail',
                    'exFatal': false
                  });                
                
				return false;
			}
            var valid = emailReg.test(useremail.val().trim());
            if (!valid) {
				$('#email').addClass('form-error');
                $('.form-message').html(contact_InvalidEmail2);
                $('input[type=submit]', $("#contactform")).removeAttr('disabled');
                
                ga('send', 'exception', {
                    'exDescription': 'InvalidEmail2',
                    'exFatal': false
                  });                
                
				return false;
			}

            if (usersubject.val().trim() === "") {
                $('#subject').addClass('form-error');
                $('.form-message').html(contact_InvalidSubject);
                
                ga('send', 'exception', {
                    'exDescription': 'InvalidSubject',
                    'exFatal': false
                  });                
                
				return false;
			}

            if (usermessage.val().trim() === "") {
                $('#message').addClass('form-error');
                $('.form-message').html(contact_InvalidMessage);
                
                ga('send', 'exception', {
                    'exDescription': 'InvalidMessage',
                    'exFatal': false
                  });                
                
				return false;
			}


            $.post(url, { username: username.val(), useremail: useremail.val(), usersubject: usersubject.val(), usermessage: usermessage.val(), isvalid: isvalid }, function (data) {

                if (data === 'success') {
					$('.form-message').html(successmessage);
					$('#name').val('');
					$('#email').val('');
					$('#subject').val('');
					$('#message').val('');
					
					event.stopPropagation();
				} else {
					$('.form-message').html(failedmessage);
					return false;
				}

			});


		}

	);

    $('#name').focus(function () {
        $('#name').removeClass('form-error');
        $('.form-message').html('');

    });
    $('#email').focus(function () {
        $('#email').removeClass('form-error');
        $('.form-message').html('');
    });
    $('#subject').focus(function () {
        $('#subject').removeClass('form-error');
        $('.form-message').html('');
    });
    $('#message').focus(function () {
        $('#message').removeClass('form-error');
        $('.form-message').html('');
    });

});