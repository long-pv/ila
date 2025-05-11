jQuery(function ($) {
    $('select#your_course').on('change', function () {
        var optionValue = $(this).val();
        $.ajax({
            cache: false,
            type: 'POST',
            url: myAjax.ajaxUrl,
            data: {
                action: 'my_action',
                cat_id: optionValue,
                pageCurrentID: myAjax.pageCurrentID
            },
            success: function (data) {
                if (data.success) {
                    //console.log(data.data);
                    $('select#your_option').empty();
                    $('select#your_option').append(data.data);
                    $('select#your_option').on('change', function () {
                        $(this).find("option:selected").each(function () {
                            //console.log($(this));
                            var optionSrc = $(this).attr('data-src');
                            var optionBg = $(this).attr('data-bg');
                            if ($(this).attr("data-id") == 0) {
                                $('.course-illustration img').removeClass('select-course');
                                $('.course-illustration').css({ 'background': '#b62936' }).css({ 'padding': '0' });
                                $('.course-illustration img').attr('src', optionSrc).addClass('select-default');
                                //$('.course-illustration p').css({ 'display': 'none' }); ({ 'position': 'absolute', 'right': '-40px', 'width': '100%' })
                            }else {
                                $('.course-illustration img').removeClass('select-default');
                                $('.course-illustration').css({ 'background': optionBg, 'padding': '18px 0 35px 15px' });
                                $('.course-illustration img').attr('src', optionSrc).addClass('select-course');
                                //css({ 'position': 'absolute', 'right': '-40px', 'width': '100%' });
                                //$('.course-illustration p').text($(this).text()).css({ 'display': 'block' });
                                var self = this;
                                $(".btn-change-option").on("click", function () {
                                    var url = $(self).attr("value");
                                    if (url) {
                                        window.location = url;
                                    }
                                    return false;
                            });
                            }
                        });
                    })
                    .change();
                }
            },
        });
    });
})