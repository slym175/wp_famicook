jQuery(document).ready(function(){
  new WOW().init();
  
  
	/*slider*/
	jQuery('.slide-homepage').slick({
	  dots: true,
	  infinite: true,
	  speed: 300,
    autoplaySpeed: 1200,
	  slidesToShow: 1,
	  adaptiveHeight: true,
    autoplay: true,
	  prevArrow:"<button class='prev slick-prev'><img class='left-arrow ' src='/wp-content/themes/famicook/assets/images/prev.png' alt=''></button>",
      nextArrow:"<button class='next slick-next'><img class='right-arrow ' src='/wp-content/themes/famicook/assets/images/next.png' alt=''></button>",
	});

  jQuery('.slider-partner').slick({
    infinite: true,
    dots: true,
    slidesToShow: 5,
    slidesToScroll: 3,
    prevArrow:"<button class='prev slick-prev'><img class='left-arrow ' src='/wp-content/themes/famicook/assets/images/p6.png' alt=''></button>",
    nextArrow:"<button class='next slick-next'><img class='right-arrow ' src='/wp-content/themes/famicook/assets/images/p7.png' alt=''></button>",
    responsive:[
    {
      breakpoint: 765,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    ]
  });
  /**/
  jQuery('.slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
  });
  jQuery('.slider-trademark').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    prevArrow:"<button class='prev slick-prev'><img class='left-arrow ' src='/wp-content/themes/famicook/assets/images/leftx.png' alt=''></button>",
    nextArrow:"<button class='next slick-next'><img class='right-arrow ' src='/wp-content/themes/famicook/assets/images/rightx.png' alt=''></button>",
    
  });


  jQuery(document).ready(function(){
    jQuery('.your-class').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: true,
      responsive:[
      {
        breakpoint: 765,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      ]
    });
  });

  jQuery('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    jQuery('.your-class').slick('setPosition');
  });


/* back to top */
 jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 500) {
            jQuery('.top-up').fadeIn();
        } else {
            jQuery('.top-up').fadeOut();
        }
    });
 jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 500) {
            jQuery('.header_top').fadeIn();
        } else {
            jQuery('.header_top').fadeOut();
        }
    });
jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 500) {
            jQuery('.poster').css("opacity", "1");
            jQuery('.poster').css("transition", "1s");
			jQuery('.poster').css("display", "block");
        } else {
            jQuery('.poster').css("display", "none");
        }
    });
 
    
    //Click event to scroll to top
    jQuery('.top-up').click(function(){
        jQuery('html, body').animate({scrollTop : 0},800);
        return false;
    });

 /*jQuery(document).ready(function() {
    jQuery('.block__title').click(function(event) {
        if(jQuery('.block').hasClass('one')){
            jQuery('.block__title').not(jQuery(this)).removeClass('active');
            jQuery('.block__text').not(jQuery(this).next()).slideUp(300);
        }
        jQuery(this).toggleClass('active').next().slideToggle(300);
    });

  });
  jQuery(document).ready(function() {
        if(jQuery('.block__item').hasClass('block__item__active')){
            jQuery(".block__item__active .block__text", this).css("display","block");
        }
        
      });


   jQuery(".block__item").click(function(){
      jQuery(this).addClass("block__item__active");
      if(jQuery('.block').hasClass('one')){
            jQuery('.block__item').not(jQuery(this)).removeClass('block__item__active');
        }
    });*/
  


 /* menu cố định pc*/
        jQuery(document).ready(function(jQuery) {
            var jQueryfilter = jQuery('.header-pc');
            var jQueryfilterSpacer = jQuery('<div />', {
                "class": "vnkings-spacer",
                "height": jQueryfilter.outerHeight()
            });
            if (jQueryfilter.size())
            {
                jQuery(window).scroll(function ()
                {
                    if (!jQueryfilter.hasClass('hd-mb') && jQuery(window).scrollTop() > jQueryfilter.offset().top)
                    {
                        jQueryfilter.before(jQueryfilterSpacer);
                        jQueryfilter.addClass("hd-mb");
                    }
                    else if (jQueryfilter.hasClass('hd-mb')  && jQuery(window).scrollTop() < jQueryfilterSpacer.offset().top)
                    {
                        jQueryfilter.removeClass("hd-mb");
                        jQueryfilterSpacer.remove();
                    }
                });
            }
        });
  /**/

/* menu cố định mobile*/
        jQuery(document).ready(function(jQuery) {
            var jQueryfilter = jQuery('.header-mobile');
            var jQueryfilterSpacer = jQuery('<div />', {
                "class": "vnkings-spacer",
                "height": jQueryfilter.outerHeight()
            });
            if (jQueryfilter.size())
            {
                jQuery(window).scroll(function ()
                {
                    if (!jQueryfilter.hasClass('hd-mb') && jQuery(window).scrollTop() > jQueryfilter.offset().top)
                    {
                        jQueryfilter.before(jQueryfilterSpacer);
                        jQueryfilter.addClass("hd-mb");
                    }
                    else if (jQueryfilter.hasClass('hd-mb')  && jQuery(window).scrollTop() < jQueryfilterSpacer.offset().top)
                    {
                        jQueryfilter.removeClass("hd-mb");
                        jQueryfilterSpacer.remove();
                    }
                });
            }
        });
  /**/
  /* gioiws thieeuj */
	jQuery(".unloaded .btn-seemore").click(function () {
        jQuery(".description-title p:nth-child(1n+8)").fadeToggle("slow");
		jQuery(this).css("display", "none");
    });
	
	/**/
  jQuery(".icon-menu").click(function () {
        jQuery(".sub-menu-mb").fadeToggle("slow");
    });
  jQuery(".img-serach").click(function () {
        jQuery(".item-search").fadeToggle("slow");
    });

 /* post page mobile */
  jQuery('.post-page-slide-mb').slick({
    responsive:[
    {
      breakpoint: 765,
      settings: {/*
        centerMode: true,*/
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,/*
        autoplay: true,*/
      }
    },
    ]
  });
  jQuery('.fami-app-slide').slick({
    responsive:[
    {
      breakpoint: 765,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        nextArrow:"<button class='next slick-next'><img class='right-arrow ' src='/wp-content/themes/famicook/assets/images/next2.png' alt=''></button>",
      }
    },
    ]
  });


/**/


});