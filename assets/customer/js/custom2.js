// JavaScript Document

jQuery(document).ready(function($){
	
	var WHeight = $(window).outerHeight();
	var HHeight = $(".hdrwrp").outerHeight();
    var FHeight = $("footer.footer").outerHeight();
    $('.bodypart').css('height', WHeight - HHeight - FHeight );
    $('.bodypart').css('margin-bottom', FHeight );
    
    $('.slide3').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        centerMode: true,
        focusOnSelect: true
    });
    
    $('[data-toggle="popover"]').popover();
    
    /*
    $('body').css('margin-top',HHeight);
    
	$(window).scroll(function () {
		if ($(this).scrollTop() > HHeight ) {
			$('header.header').addClass('fixed');
		} else {
			$('header.header').removeClass('fixed');
		}
	});
	
	
	$(".mnutog").click(function(){
        $("header.header").addClass("active");
    });
    $(".mnucls").click(function(){
        $("header.header").removeClass("active");
    });

    
    $(".homeslide").owlCarousel({
        navigation : true, 
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        pagination:false,
        addClassActive:true,
        autoPlay:true,
        navigationText:["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
    });
    
    

   
    
    $(".slide3").owlCarousel({
        autoPlay: 3000, 
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        navigation : false, 
        pagination:true,
        stopOnHover:true,
        //navigationText:["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
    });
    

     */
    
	
});