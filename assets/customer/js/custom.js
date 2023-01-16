// JavaScript Document

jQuery(document).ready(function($){
	
	var WHeight = $(window).outerHeight();
	var HHeight = $("header.header").outerHeight();
    //$('.bodypart').css('height', WHeight - HHeight );
    $(".mnutog, .mnutogmbl ").click(function(){
        $("nav.nav, .mainwrp").toggleClass("active");
    });
    
    $('.btn-cart').click(function() {
        btn = $(this);
        btn.addClass('loader');
        setTimeout(function() {
          btn.removeClass('loader');
          btn.parent().addClass('bought');
        }, 1000);
    });

    $('.moreless-button').click(function() {
        $(this).prev('.moretext').slideToggle();
        $(this).toggleClass('show');
        
        
        if ($(this).hasClass('show')){
            $(this).text('Less');
        } else {
            $(this).text('More');
        }
    });
    
    

    


    $(".mnucls").click(function(){
        $("nav.nav, .mainwrp").toggleClass("active");
    });
    

    $('[data-toggle="popover"]').popover();
    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    
    
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

    $('.grpslide1').slick({
        dots: false,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover:true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                centerPadding: '40px',
                centerMode: true,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                centerPadding: '40px',
                centerMode: true,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                centerPadding: '40px',
                centerMode: true,
                slidesToScroll: 1
              }
            }
          ]
    
    });

    
    $('.otherprodctslide1').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 3000,
        asNavFor: '.otherprodctthumbslide'
      });
      $('.otherprodctthumbslide').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.otherprodctslide1',
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 6000,
        focusOnSelect: true,
        verticalSwiping: true,
        vertical: true,
      });

      $('.cpnslider').slick({
        dots: false,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        pauseOnHover:true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                centerPadding: '10px',
                centerMode: true,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                centerPadding: '0px',
                centerMode: false,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                centerPadding: '0px',
                centerMode: false,
                slidesToScroll: 1
              }
            }
          ]
    
    });

      
      

    $('[data-fancybox="gallery"]').fancybox({
        // Options will go here
        });

        $('.mstpplrslide').slick({
            dots: false,
            arrows: false,
            slidesToShow: 7,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,   
            centerPadding: '40px',  
            centerMode: true,    
            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 5,
                    centerPadding: '20px',
                    centerMode: true,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 3,
                    centerPadding: '20px',
                    centerMode: true,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 3,
                    centerPadding: '20px',
                    centerMode: true,
                    slidesToScroll: 1
                  }
                }
              ]
        
        });


   
    
	
});





function inc(element) {
    let el = document.querySelector(`[name="${element}"]`);
    el.value = parseInt(el.value) + 1;
  }
  
  function dec(element) {
    let el = document.querySelector(`[name="${element}"]`);
      if (parseInt(el.value) > 1) {
        el.value = parseInt(el.value) - 1;
    }
  }



var QtyInput = (function () {
	var $qtyInputs = $(".qty-input");

	if (!$qtyInputs.length) {
		return;
	}

	var $inputs = $qtyInputs.find(".product-qty");
	var $countBtn = $qtyInputs.find(".qty-count");
	var qtyMin = parseInt($inputs.attr("min"));
	var qtyMax = parseInt($inputs.attr("max"));

	$inputs.change(function () {
		var $this = $(this);
		var $minusBtn = $this.siblings(".qty-count--minus");
		var $addBtn = $this.siblings(".qty-count--add");
		var qty = parseInt($this.val());

		if (isNaN(qty) || qty <= qtyMin) {
			$this.val(qtyMin);
			$minusBtn.attr("disabled", true);
		} else {
			$minusBtn.attr("disabled", false);
			
			if(qty >= qtyMax){
				$this.val(qtyMax);
				$addBtn.attr('disabled', true);
			} else {
				$this.val(qty);
				$addBtn.attr('disabled', false);
			}
		}
	});

	$countBtn.click(function () {
		var operator = this.dataset.action;
		var $this = $(this);
		var $input = $this.siblings(".product-qty");
		var qty = parseInt($input.val());

		if (operator == "add") {
			qty += 1;
			if (qty >= qtyMin + 1) {
				$this.siblings(".qty-count--minus").attr("disabled", false);
			}

			if (qty >= qtyMax) {
				$this.attr("disabled", true);
			}
		} else {
			qty = qty <= qtyMin ? qtyMin : (qty -= 1);
			
			if (qty == qtyMin) {
				$this.attr("disabled", true);
			}

			if (qty < qtyMax) {
				$this.siblings(".qty-count--add").attr("disabled", false);
			}
		}

		$input.val(qty);
	});
})();
  

  