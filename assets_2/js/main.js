jQuery(function ($) {
	$('a[href="#"]').click(function (e) {
		e.preventDefault();
	});
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length
                    ? target
                    : $("[name=" + this.hash.slice(1) + "]");
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $("html, body").animate(
                        {
                            scrollTop: target.offset().top,
                        },
                        1000,
                        function () {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) {
                                // Checking if the target was focused
                                return false;
                            } else {
                                //$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            }
                        }
                    );
                }
            }
        });
	var width = $(window).width();
	var window_height = $(window).height();
	AOS.init({
		once: true
	});	
	$('.nav-header-top .nav-header-flex .nav-header-item #search_button').click(function (event) {
		var inputVal = $('.nav-header-flex .nav-header-item #search_keyword').val();
		if (inputVal === '') {
			$('#searchbox').toggleClass('active');
			event.preventDefault();
		}
	});
    window.onscroll = function () { myFunction() };
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
        $(window).scroll(function () {
        if (width >= 768) {
            if ($(this).scrollTop() >= 1000) {
                $("#return-to-top").fadeIn(200);
            } else {
                $("#return-to-top").fadeOut(200);
            }
        } else {
            if ($(this).scrollTop() >= 800) {
                $("#return-to-top").fadeIn(200);
            } else {
                $("#return-to-top").fadeOut(200);
            }
        }
    });
    $("#return-to-top").click(function () {
        $("body,html").animate(
            {
                scrollTop: 0,
            },
            500
        );
    });
});