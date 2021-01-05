$('a').smoothScroll();

openModal();

setInterval(function openModal() {
	document.getElementById("modalBtn").click();
}, 50000);

function openModal() {
	document.getElementById("modalBtn").click();
}

$('ul a').click(function(e) {
    e.preventDefault();
    $('a').removeClass('active');
    $(this).addClass('active');
});


$(window).scroll(function() {
	var scroll = $(window).scrollTop();
  	$(".location-map ul li img").css({
    	width: (100 + scroll/5) +"%"
  	})
  	if(scroll > 200) {
  		$("#header").addClass("fixed");
  		$("#header ul a li").removeClass("current");
  		$(".logo img").css({
  			display: "none"
  		})
  	} 
  	else {
  		$("#header").removeClass("fixed");
  		$(".logo a img").css({
  			display: "inline-block"
  		})
  		$("#header ul a li:first").addClass("current");
  		$("#header ul a").removeClass("active");
  	}
})

$(".menu-item-link").on("click", function(){
	$("#mobile-menu").removeClass("mobile-menu-active");
	$("#mobile-header-icon").removeClass("mobile-header-icon-close");
	$(".menu-item-link").removeClass("active");
})

document.getElementById("mobile-header-icon").addEventListener("click", function() {
	document.getElementById("mobile-menu").classList.toggle("mobile-menu-active");
	document.getElementById("mobile-header-icon").classList.toggle("mobile-header-icon-close");
});

jQuery(document).ready(function($) {
      $('.floor-plan-carousel').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        prevArrow:"<img class='a-left control-c prev slick-prev' src='assets/images/arrow-left.png'>",
        nextArrow:"<img class='a-right control-c next slick-next' src='assets/images/arrow-right.png'>",
        responsive: [{
			breakpoint: 1440,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			}
        },
        {
			breakpoint: 1366,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			}
        },
		{
			breakpoint: 1000,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
        },
        {
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
        },
        {
			breakpoint: 500,
			settings: {
				arrows: true,
				slidesToShow: 1,
				slidesToScroll: 1
			}
        }]
    });
});

(function($) {
	$.fn.inputFilter = function(inputFilter) {
		return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
			if (inputFilter(this.value)) {
				this.oldValue = this.value;
				this.oldSelectionStart = this.selectionStart;
				this.oldSelectionEnd = this.selectionEnd;
			} else if (this.hasOwnProperty("oldValue")) {
				this.value = this.oldValue;
				this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
			} else {
				this.value = "";
			}
		});
	};
}(jQuery));

$(document).ready(function() {
	$("#modal-phone").inputFilter(function(value) {
		return /^\d*$/.test(value); 
	});
});

$(document).ready(function() {
	$("#phone").inputFilter(function(value) {
		return /^\d*$/.test(value); 
	});
});
