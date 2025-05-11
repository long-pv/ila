jQuery(function ($) {
	$('a[href="#"]').click(function (e) {
		e.preventDefault();
	});
	var width = $(window).width();
	var window_height = $(window).height();
	if(width <= 1024) {
		$('a.centers-style').click(function (e) {
			e.preventDefault();
		});
	}
	AOS.init({
		once: true
	});
	$('.nav-header-flex .nav-header-item #search_button').click(function (event) {
		var inputVal = $('.nav-header-flex .nav-header-item #search_keyword').val();
		if (inputVal === '') {
			$('#searchbox').toggleClass('active');
			event.preventDefault(); // prevent form submission
		}
	});
	function activeMenuClass() {
		var current = location.href;
		//console.log(current.split('/'));
		$('.nav-main-menu .navbar-menu a').each(function () {
			var $this = $(this);
			if (current.split('/')[3] == 'en') {
				// if the current path is like this link, make it active
				if ((current.split('/')[4] != '') && $this.attr('href').indexOf(current) !== -1) {
					$this.addClass('active');
				}
			} else {
				if ((current.split('/')[3] != '') && $this.attr('href').indexOf(current) !== -1) {
					$this.addClass('active');
				}
			}
		})
	}
	activeMenuClass();
	$('.banner-slider-image').owlCarousel({
		loop: true,
		margin: 10,
		nav: false,
		smartSpeed: 1000,
		autoplay: true,
		autoplaySpeed: 1000,
		dots: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	// $('select#your_course').on('change', function () {
	// 	if (this.value == 1) {
	// 		$('select#your_option').empty().append('<option selected value="0">Courses</option><option value="1">ILA Jumpstart</option><option value="1">ILO Preschool</option><option value="1">OLA Step-Up</option>');
	// 		$('select#your_option').on('change', function () {
	// 			if (this.value == 1) {
	// 				$('.course-illustration').css({ 'background': '#B62936', 'padding': '18px 0 35px 15px' });
	// 				$('.course-illustration p').html('ILA <br>JUMPSTART <br>(3-6yrs)').css({ 'display': 'block' });
	// 				$('.course-illustration img').attr('src', 'assets/images/3-6-yrs.png').css({ 'position': 'absolute', 'right': '-40px', 'width': 'auto' });
	// 			}
	// 		})
	// 	} else if (this.value == 2) {
	// 		$('select#your_option').empty().append('<option selected value="0">Courses</option><option value="2">ILA SuperJunior</option><option value="2">OLA Shining Stars</option>');
	// 		$('select#your_option').on('change', function () {
	// 			if (this.value == 2) {
	// 				$('.course-illustration').css({ 'background': '#29B791', 'padding': '18px 0 35px 15px' });
	// 				$('.course-illustration p').html('ILA <br>Super Junior  <br>(7-11yrs)').css({ 'display': 'block' });
	// 				$('.course-illustration img').attr('src', 'assets/images/7-11-yrs.png').css({ 'position': 'absolute', 'right': '-40px', 'width': 'auto' });
	// 			}
	// 		})
	// 	} else if (this.value == 3) {
	// 		$('select#your_option').empty().append('<option selected value="0">Courses</option><option value="3">ILA Smart Teens</option><option value="3">OLA Team Leader</option><option value="3">ILA Du Học</option><option value="3">ILA TestPrep (IELTS, SAT)</option><option value="3">ILA College Prep</option>');
	// 		$('select#your_option').on('change', function () {
	// 			if (this.value == 3) {
	// 				$('.course-illustration').css({ 'background': '#B62985', 'padding': '18px 0 35px 15px' });
	// 				$('.course-illustration p').html('ILA <br>Smart Teens  <br>(11-16yrs)').css({ 'display': 'block' });
	// 				$('.course-illustration img').attr('src', 'assets/images/11-16-yrs.png').css({ 'position': 'absolute', 'right': '-40px', 'width': 'auto' });
	// 			}
	// 		})
	// 	} else {
	// 		$('select#your_option').empty().append('<option selected value="0">Courses</option><option value="4">ILA Adult English</option><option value="4">ILA Corporate English</option>');
	// 		$('.course-illustration').css({ 'background': '#B62936' }).css({ 'padding': '0' });
	// 		$('.course-illustration p').html('Lorem <br>Ipsum <br>is simply').css({ 'display': 'none' });
	// 		$('.course-illustration img').attr('src', 'assets/images/photo_2023-02-15_17-47-52.jpg').css({ 'position': 'relative', 'right': '0', 'width': '100%' });
	// 	}
	// });
	$('.open-popup').magnificPopup({
		type: 'iframe',
	});
	var count = 0;
	var $sectionMultimedia = $('.section-multimedia');
	var $listTabs = $sectionMultimedia.find('.list-tabs');
	var $tabItems = $listTabs.find('.tab-item');
	var $multimediaMain = $sectionMultimedia.find('.multimedia-main');
	var $multimediaLists = $multimediaMain.find('.multimedia-list');
	$tabItems.click(function () {
		count++;
		$tabItems.removeClass('active');
		$(this).addClass('active');
		var valueItem = $(this).attr('data-id');
		$multimediaMain.removeClass('item-1 item-2 item-3').addClass('item-' + valueItem);
		var $bg = $multimediaLists.filter('[data-list="' + valueItem + '"]').attr('data-bg');
		switch (valueItem) {
			case '1':
				$multimediaMain.css({ 'background': $bg });
				break;
			case '2':
				$multimediaMain.css({ 'background': $bg });
				break;
			default:
				$multimediaMain.css({ 'background': $bg });
		}

		$multimediaLists.removeClass('active');
		$multimediaLists.filter('[data-list="' + valueItem + '"]').addClass('active');
		var $activeTab = $multimediaLists.filter('.active');
		var $prevTab = $activeTab.prev('.multimedia-list');
		var $nextTab = $activeTab.next('.multimedia-list');

		$tabItems.removeClass('prev next');
		if ($prevTab.length) {
			$prevTab.addClass('prev');
		}
		if ($nextTab.length) {
			$nextTab.addClass('next');
		}
		// add "next" and "prev" classes to $multimediaLists
		$multimediaLists.removeClass('prev next');
		var $activeList = $multimediaLists.filter('.active');
		var $prevList = $activeList.prev('.multimedia-list');
		var $nextList = $activeList.next('.multimedia-list');

		if ($prevList.length) {
			$prevList.addClass('prev');
		}
		if ($nextList.length) {
			$nextList.addClass('next');
		}
	});
	$('.hall-owl-slider').owlCarousel({
		loop: true,
		margin: 24,
		nav: true,
		autoplay: true,
		items: 3,
		slideTransition: 'linear',
		autoplayTimeout: 4000,
		autoplaySpeed: 4000,
		autoplayHoverPause: true,
		dots: false,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			767: {
				items: 2
			},
			1025: {
				items: 3
			}
		}
	});
	$('.space-owl-slider').owlCarousel({
		loop: true,
		margin: 12,
		nav: true,
		smartSpeed: 500,
		dots: true,
		dotsEach: 1,
		stagePadding: 433,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				stagePadding: 0,
			},
			767: {
				items: 1,
				stagePadding: 50,
			},
			1280: {
				items: 1,
				stagePadding: 300,
			},
			1600: {
				items: 1
			},
		}
	});
	$(".audio-book-owl-slider").owlCarousel({
		loop: true,
		autoplay: true,
		items: 5,
		slideTransition: 'linear',
		autoplayTimeout: 4000,
		autoplaySpeed: 4000,
		autoplayHoverPause: true,
		margin: 10,
		nav: true,
		navText: [
			'<i class="fa-light fa-circle-arrow-left"></i>',
			'<i class="fa-light fa-circle-arrow-right"></i>',
		],
		smartSpeed: 500,
		dots: false,
		responsiveClass: true,
		responsive: {
			0: {
				items: 2,
			},
			767: {
				items: 3,
			},
			1025: {
				items: 5,
			},
		},
	});
		$(".home .banners-owl-slider").owlCarousel({
		loop: true,
		autoplay: true,
		items: 1,
// 		slideTransition: 'linear',
 		autoplayTimeout: 5000,
// 		autoplaySpeed: 5000,
 		autoplayHoverPause: true,
		margin: 10,
		nav: true,
		smartSpeed: 1000,
		dots: false,
		responsiveClass: true,
	});
	var listenerAttached = false;
	var resizeFix = function () {
		var w = $(window).width();
		if (!listenerAttached && w <= 1024) {
			$(window).on('load', myFunction1); // for mobile
			$(document.body).on('touchmove', myFunction1); // for mobile
			$(window).on('scroll', myFunction1);
			var header = document.getElementById("myHeader");
			var sticky = header.offsetTop;

			function myFunction1() {
				if (window.pageYOffset > sticky) {
					header.classList.add("top-scroll");
				} else {
					header.classList.remove("top-scroll");
				}
			}
			var client_hieght = document.documentElement.clientHeight;
			$('.main-header .nav-main-menu .navbar-menu').css({ 'height': client_hieght + 300 + 'px' });
			$('.main-header .nav-main-menu .navbar-mobile .icon-bar-mobile').click(function () {
				$('.main-header .nav-main-menu .navbar-menu').addClass('active');
			});
			$('.main-header .nav-main-menu .navbar-menu .menu-icon-close').click(function () {
				$('.main-header .nav-main-menu .navbar-menu').removeClass('active');
			});
			$('.navbar-dropdown-item .dropbtn').each(function () {
				$(this).on("click", function () {
					$(this).hasClass("active") ? ($(this).removeClass("active"), $(this).next().slideUp()) : ($(this).addClass("active"), $(this).next().slideDown());
				})
			});
			listenerAttached = true;
		} else if (listenerAttached && w >= 1200) {
			$('.main-header .nav-main-menu .navbar-menu').css({ 'height': 'auto' });
			listenerAttached = false;
		}
	};
	resizeFix();
	$(window).resize(function () {
		resizeFix();
	});
	//if(width >= 1200) {
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
	//}
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
	// var popup = $("#popup-thanks");
	// var back2Home = $("#popup-thanks .popup-content .back-home");
	// var iconClose = $("#popup-thanks .popup-content .icon-close");
	// $(".form-content .form-register .button-wrapper .btn-register").click(
	//     function () {
	//         popup.show();
	//     }
	// );
	// back2Home.click(function () {
	//     popup.hide();
	// });
	// iconClose.click(function () {
	//     popup.hide();
	// });
	// popup.click(function (event) {
	//     if (event.target === event.currentTarget) {
	//         $(this).hide();
	//     }
	// });
	var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
	var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
	if (isSafari) {
		$('body').addClass('safari');
	} else {
		$('body').addClass('chrome');
	}
	$('.es_subscription_form_submit').val('');
	$('.es_subscription_form').append('<i class="fa-light fa-arrow-right-long"></i>');
	// $("img:not(.custom-img)").prop("src", function () {
	//     return this.src.replace(
	//         "http://ila.local",
	//         "https://ila2023.staging.vn"
	//     );
	// });
	// $("img:not(.custom-img)").prop("srcset", function () {
	//     return this.src.replace(
	//         "http://ila.local",
	//         "https://ila2023.staging.vn"
	//     );
	// });

	// tạo 1 mảng gồm 10 chữ số
	//reference post
	$(".main-content").on("click", ".box-reference .box-reference-header", function () {
		let icon = $(this).find('.fa-regular');
		icon.toggleClass('fa-circle-plus fa-circle-minus');
		$(this).next().toggle();
	});
});
(function ($) {
	'use strict';

    $(document).ready(function () {

        /**
         * Extend jQuery to convert form into JSON object
         * @returns {{}}
         */
        $.fn.serializeObject = function () {
            var output = {};
            var formData = this.serializeArray();
            $.each(formData, function () {
                var fieldName = this.name;
                var fieldValue = this.value || '';
                var isArrayField = fieldName.slice(-2) === '[]';
                if (isArrayField) {
                    if (output[fieldName]) {
                        output[fieldName].push(fieldValue);
                    } else {
                        output[fieldName] = [fieldValue];
                    }
                } else {
                    output[fieldName] = fieldValue;
                }
            });
            return output;
        };

        /**
         * Handle subscription form submission
         */
        $('.es_subscription_form').on('submit', function (e) {
            var form = $(this);
            e.preventDefault();
            handleBindFunction(form);
        });

    });

    function handleResponse(response, form) {

        var status = response.status;
		var message_submit = response.message;
        var message_class = 'success';
        if (status === 'ERROR') {
            message_class = 'error';
        }
		if ($('body').hasClass('vi')) {
			if (status == 'ERROR' && message_submit == 'es_email_exists_notice') {
				var responseText = 'Địa chỉ Email đã tồn tại!';
			}else if(status == 'SUCCESS' && message_submit == 'es_optin_success_message') {
				var responseText = 'Thông tin đã được lưu, Cảm ơn bạn đã đăng ký!';
			}
		}else {
			var responseText = response['message_text'];
		}
        
        var messageContainer = $(form).next('.es_subscription_message');
        messageContainer.attr('class', 'es_subscription_message ' + message_class);
        messageContainer.html(responseText);
        var esSuccessEvent = {
            detail: {
                es_response: message_class,
                msg: responseText
            },
            bubbles: true,
            cancelable: true
        };

        $(form).trigger('es_response', [esSuccessEvent]);
    }

    function handleBindFunction(form, is_ig = false) {
        form = $(form);
        var formData = form.serializeObject();
        formData['es'] = 'subscribe';
        formData['action'] = 'es_add_subscriber';
        $.ajax({
            type: 'POST',
            url: es_data.es_ajax_url,
            data: formData,
            dataType: 'json',
            beforeSend: function () {
                form.find('#spinner-image').show();
                form.find('.es_submit_button').attr('disabled', true);
            },
            success: function (response) {
                if (!is_ig) {
                    if (response && typeof response.status !== 'undefined' && response.status === "SUCCESS") {
                        form.slideUp('slow');
                        form.hide();
                    } else {
                        form.find('#spinner-image').hide();
                    }
                }
                form.find('.es_submit_button').attr('disabled', false);
                jQuery(window).trigger('es.send_response', [form, response]);
                handleResponse(response, form);
            },
            error: function (err) {
                form.find('#spinner-image').hide();
                form.find('.es_submit_button').attr('disabled', false);
                console.log(err, 'error');
            },
        });


		return false;
	}

	// Compatibility of ES with IG
	jQuery( window ).on( "init.icegram", function(e, ig) {
		if(typeof ig !== 'undefined' && typeof ig.messages !== 'undefined' ) {
			jQuery('.icegram .es_shortcode_form, .icegram form[data-source="ig-es"]').each(function(i, v){
				jQuery(v).bind('submit', function (e) {
					e.preventDefault();
					e.stopImmediatePropagation();
					var form = $(this);
					handleBindFunction(form, true);
				});
			});
		}
	});

})(jQuery);
