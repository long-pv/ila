jQuery(function ($) {
	$("#popup-event-fixed").on("click", ".popup-close", function () {
		$("#popup-event-fixed").animate({ opacity: 0 }, 500, function () {
			$(this).removeClass("active").css("display", "none");
		});
	});

	// Gắn sự kiện click cho nút .btn-register trong các mục .event-main
	$(".event-main").on("click", ".btn-register", function () {
		$("#popup-event-fixed").addClass("active").css("display", "flex").animate({ opacity: 1 }, 500);
	});
});
