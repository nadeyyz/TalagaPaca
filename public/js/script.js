

/* Please ❤ this if you like it! */

AOS.init();
(function($) { "use strict";

	$(function() {
		var header = $(".start-style");
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			if (scroll >= 10) {
				header.removeClass('start-style').addClass("scroll-on");
			} else {
				header.removeClass("scroll-on").addClass('start-style');
			}
		});
	});

	//Animation

	$(document).ready(function() {
		$('body.hero-anime').removeClass('hero-anime');


	});

	//Menu On Hover

	$('body').on('mouseenter mouseleave','.nav-item',function(e){
			if ($(window).width() > 750) {
				var _d=$(e.target).closest('.nav-item');_d.addClass('show');
				setTimeout(function(){
				_d[_d.is(':hover')?'addClass':'removeClass']('show');
				},1);
			}
	});

	//Switch light/dark

	$("#switch").on('click', function () {
		if ($("body").hasClass("dark")) {
			$("body").removeClass("dark");
			$("#switch").removeClass("switched");
		}
		else {
			$("body").addClass("dark");
			$("#switch").addClass("switched");
		}
	});

  })(jQuery);

  function showLanguages() {
	$(".dropdown-language").toggleClass("show");
  }

  window.onclick = function(event) {
	if (!event.target.matches('.lang-drpdwn-btn')) {
	  var dropdowns = $(".dropdown-language");
	  for (let i = 0; i < dropdowns.length; i++) {
		var openDropdown = dropdowns[i];
		if (openDropdown.classList.contains('show')) {
		  openDropdown.classList.remove('show');
		}
	  }
	}
  }


$(document).ready(function() {
	$('.carousel').slick({
	  dots: true,
	  autoplay: true,
	  autoplaySpeed: 2500,
	  arrows: false,
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
		{
		  breakpoint: 1367,
		  settings: {
			slidesToShow: 3
		  }
		},
		{
		  breakpoint: 1200,
		  settings: {
			slidesToShow: 2
		  }
		},
		{
		  breakpoint: 768,
		  settings: {
			slidesToShow: 1
		  }
		}
	  ]
	});
  });


  var map = L.map('map').setView([1.5921522, 127.9042711], 9);
  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
L.marker([1.575566, 127.935972]).addTo(map)
    .bindPopup('<img src="../img/AtraksiWisata/BirdWatching/mahasiswa.jpg" width="100%"><br> This is the location.')


//Dropdown plugin data
var ddData = [
    {
        text: "Facebook",
        value: 1,
        selected: false,
        description: "Description with Facebook",
        imageSrc: "https://i.imgur.com/XkuTj3B.png"
    },
    {
        text: "Twitter",
        value: 2,
        selected: false,
        description: "Description with Twitter",
        imageSrc: "https://i.imgur.com/8ScLNnk.png"
    },
    {
        text: "LinkedIn",
        value: 3,
        selected: true,
        description: "Description with LinkedIn",
        imageSrc: "https://i.imgur.com/aDNdibj.png"
    },
    {
        text: "Foursquare",
        value: 4,
        selected: false,
        description: "Description with Foursquare",
        imageSrc: "https://i.imgur.com/kFAk2DX.png"
    }
];
$('#myDropdown').ddslick({
    data:ddData,
    width:300,
    selectText: "Select your preferred social network",
    imagePosition:"right",
    onSelected: function(selectedData){
        //callback function: do something with selectedData;
    }
});
