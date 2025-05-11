jQuery(function ($) {
    var width = $(window).width();
    if (width > 991) {
        var archive_ppdts = $(".section-blog-detail .right-sidebar");
        archive_ppdts.each(function (i) {
            var archive_ppdt = $(archive_ppdts[i]);
            var next = archive_ppdts[i + 1];
            archive_ppdt.scrollToFixed({
                marginTop: $("#myHeader").outerHeight(true) + 30,
                limit: function () {
                    var limit = 0;
                    if (next) {
                        limit =
                            $(next).offset().top -
                            $(this).outerHeight(true) -
                            10;
                    } else {
                        limit =
                            $("#form-submit-register.section-footer").offset().top -
                            $(this).outerHeight(true) -
                            50;
                    }
                    return limit;
                },
                zIndex: 99,
            });
        });
        var archive_ppdts = $(".section-blog-detail .left-sidebar");
        archive_ppdts.each(function (i) {
            var archive_ppdt = $(archive_ppdts[i]);
            var next = archive_ppdts[i + 1];
            archive_ppdt.scrollToFixed({
                marginTop: $("#myHeader").outerHeight(true) + 30,
                limit: function () {
                    var limit = 0;
                    if (next) {
                        limit =
                            $(next).offset().top -
                            $(this).outerHeight(true) -
                            10;
                    } else {
                        limit =
                            $("#form-submit-register.section-footer").offset().top -
                            $(this).outerHeight(true) -
                            50;
                    }
                    return limit;
                },
                zIndex: 99,
            });
        });
    }
    var ppp = 4; // Post per page
    var cat = $('#more_posts').data('category');
    var postNotIn = $('#more_posts').data('post-not-in');
    var pageNumber = 0;

    function load_posts() {
        pageNumber++;
        //var str = '&cat=' + cat + '&post__not_in=' + postNotIn + '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
        $.ajax({
            type: "POST",
            //dataType: "html",
            url: ajax_posts.ajaxurl,
            data: {
                action: 'more_post_ajax',
                cat: cat,
                post__not_in: postNotIn,
                pageNumber: pageNumber,
                ppp: ppp
            },
            success: function (data) {
                var $data = $(data);
                if ($data.length) {
                    $("#ajax-posts").append($data);
                    $("#more_posts").attr("disabled", false);
                }else {
                    $("#more_posts").attr("disabled", false);
                }
                if($data.length < 4) {
                    $("#more_posts").attr("disabled", true);
                    $("#more_posts").hide();
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }

        });
        return false;
    }

    $("#more_posts").on("click", function () { // When btn is pressed.
        $("#more_posts").attr("disabled", true); // Disable the button, temp.
        load_posts();
    });
});
