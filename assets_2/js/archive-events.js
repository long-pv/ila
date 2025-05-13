jQuery(function ($) {
    $('#popup-event-fixed').on('click', '.popup-close', function() {
        $('#popup-event-fixed').animate({ 'opacity': 0 }, 500, function() {
            $(this).removeClass('active').css('display', 'none');
        });
    });
    function load_posts(ID) {
        $.ajax({
            type: "POST",
            url: ajax_events.ajaxurl,
            data: {
                action: 'popup_events_ajax',
                id: ID
            },
            success: function (data) {
                var $data = $(data);
                var $popupEventContent = $('#popup-event-fixed .popup-content-main .popup-event-content');
                $popupEventContent.html($data);
                $('#popup-event-fixed').addClass('active').css('display', 'flex').animate({ 'opacity': 1 }, 500);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(jqXHR, textStatus, errorThrown);
            }
        });
        return false;
    }

    // Gắn sự kiện click cho nút .btn-register trong các mục .event-main
    $('.event-main').on('click', '.btn-register', function() {
        var $ID = $(this).data("id");
        load_posts($ID);
    });
})