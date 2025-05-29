<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package xemer_theme
 */

get_header();

$lang = '';
if (LANG == 'en') {
    $lang = '_en';
}
?>

<!-- Content Start -->

<div id="content" class="site-content">
    <main class="single-detail-main single-template">
        <?php
        $menu_items = get_field('menu_item' . $lang, 'option') ?? []; // 'option' là theme setting
        if (!empty($menu_items)): ?>
            <section class="section-menu-category">
                <div class="container">
                    <div class="list-cate">
                        <ul>
                            <?php foreach ($menu_items as $item):
                                $link = $item['link'];
                                if (!empty($link['url']) && !empty($link['title'])):
                                    $url = esc_url($link['url']);
                                    $title = esc_html($link['title']);
                                    $target = isset($link['target']) ? esc_attr($link['target']) : '_self';
                            ?>
                                    <li class="navbar-blog-item">
                                        <a href="<?php echo $url; ?>" target="<?php echo $target; ?>">
                                            <?php echo $title; ?>
                                        </a>
                                    </li>
                            <?php
                                endif;
                            endforeach; ?>
                        </ul>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <div class="blog-detail-area">
            <div class="row">
                <section class="section-blog-detail">
                    <div class="container">
                        <div class="blog-detail-content">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="left-sidebar">
                                        <?php
                                        $categories = get_the_category();
                                        if (! empty($categories)) {
                                            echo '<h3 class="category-name"><a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a></h3>';
                                        }
                                        ?>

                                        <h3 class="share-title"> <?php _e("Chia sẻ bài viết", "xemer_theme"); ?> </h3>
                                        <?php
                                        $post_url = get_permalink();
                                        $post_title = get_the_title();
                                        ?>

                                        <section id="a2a_share_save_widget-2" class="widget widget_a2a_share_save_widget">
                                            <div class="a2a_kit a2a_kit_size_20 addtoany_list" style="line-height: 20px;">

                                                <!-- Facebook Share -->
                                                <a class="a2a_button_facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($post_url); ?>" title="Facebook" rel="nofollow noopener" target="_blank">
                                                    <span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: transparent; width: 20px; line-height: 20px; height: 20px; background-size: 20px; border-radius: 3px;">
                                                        <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                            <path fill="#000000" d="M28 16c0-6.627-5.373-12-12-12S4 9.373 4 16c0 5.628 3.875 10.35 9.101 11.647v-7.98h-2.474V16H13.1v-1.58c0-4.085 1.849-5.978 5.859-5.978.76 0 2.072.15 2.608.298v3.325c-.283-.03-.775-.045-1.386-.045-1.967 0-2.728.745-2.728 2.683V16h3.92l-.673 3.667h-3.247v8.245C23.395 27.195 28 22.135 28 16"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="a2a_label">Facebook</span>
                                                </a>

                                                <!-- Email Share -->
                                                <a class="a2a_button_email" href="mailto:?subject=<?php echo rawurlencode($post_title); ?>&body=<?php echo rawurlencode($post_url); ?>" title="Email" rel="nofollow noopener" target="_blank">
                                                    <span class="a2a_svg a2a_s__default a2a_s_email" style="background-color: transparent; width: 20px; line-height: 20px; height: 20px; background-size: 20px; border-radius: 3px;">
                                                        <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                            <path fill="#000000" d="M27 21.775v-9.9s-10.01 6.985-10.982 7.348C15.058 18.878 5 11.875 5 11.875v9.9c0 1.375.293 1.65 1.65 1.65h18.7c1.393 0 1.65-.242 1.65-1.65m-.017-11.841c0-1.002-.291-1.359-1.633-1.359H6.65c-1.38 0-1.65.429-1.65 1.43l.016.154s9.939 6.842 11 7.216C17.14 16.941 27 10.005 27 10.005z"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="a2a_label">Email</span>
                                                </a>

                                                <!-- Copy Link -->
                                                <a class="a2a_button_copy_link" href="#" onclick="navigator.clipboard.writeText('<?php echo esc_url($post_url); ?>'); alert('Đã sao chép liên kết!'); return false;" title="Copy Link" rel="nofollow noopener">
                                                    <span class="a2a_svg a2a_s__default a2a_s_link" style="background-color: transparent; width: 20px; line-height: 20px; height: 20px; background-size: 20px; border-radius: 3px;">
                                                        <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                            <path fill="#000000" d="M7.591 21.177q0-.54.377-.917l2.804-2.804a1.24 1.24 0 0 1 .913-.378q.565 0 .97.43-.038.041-.255.25-.215.21-.29.29a3 3 0 0 0-.2.256 1.1 1.1 0 0 0-.177.344 1.4 1.4 0 0 0-.046.37q0 .54.377.918a1.25 1.25 0 0 0 .918.377q.19.001.373-.047.189-.056.345-.175.135-.09.256-.2.15-.14.29-.29c.14-.142.223-.23.25-.254q.445.42.445.984 0 .539-.377.916l-2.778 2.79a1.24 1.24 0 0 1-.917.364q-.54-.001-.917-.35l-1.982-1.97a1.22 1.22 0 0 1-.378-.9zm9.477-9.504q0-.54.377-.917l2.777-2.79a1.24 1.24 0 0 1 .913-.378q.525-.001.917.364l1.984 1.968q.38.378.38.903 0 .54-.38.917l-2.802 2.804a1.24 1.24 0 0 1-.916.364q-.565 0-.97-.418.038-.04.255-.25a8 8 0 0 0 .29-.29q.108-.12.2-.255.121-.156.176-.344.048-.181.047-.37 0-.538-.377-.914a1.25 1.25 0 0 0-.917-.377q-.205 0-.37.046-.172.046-.346.175a4 4 0 0 0-.256.2q-.08.076-.29.29l-.25.258q-.441-.417-.442-.983zM5.003 21.177q0 1.617 1.146 2.736l1.982 1.968c.745.75 1.658 1.12 2.736 1.12q1.63 0 2.75-1.143l2.777-2.79c.75-.747 1.12-1.66 1.12-2.737q.002-1.66-1.183-2.818l1.186-1.185q1.16 1.185 2.805 1.186 1.617 0 2.75-1.13l2.803-2.81q1.127-1.132 1.128-2.748 0-1.62-1.146-2.738L23.875 6.12Q22.758 4.999 21.139 5q-1.63 0-2.75 1.146l-2.777 2.79c-.75.747-1.12 1.66-1.12 2.737q-.002 1.658 1.183 2.817l-1.186 1.186q-1.16-1.186-2.805-1.186-1.617 0-2.75 1.132L6.13 18.426Q5 19.559 5 21.176z"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="a2a_label">Copy Link</span>
                                                </a>

                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="main-content">
                                        <h1 class="post-title"><?php the_title(); ?></h1>

                                        <?php if (has_post_thumbnail()): ?>
                                            <img class="post-thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                alt="<?php the_title(); ?>">
                                        <?php endif; ?>


                                        <div class="post-content">
                                            <div class="post-title-au-dr">
                                                <p class="author">
                                                    <?php
                                                    $author_id = $post->post_author;
                                                    echo 'Tác giả: <a href="javascript:void(0);">' . get_the_author_meta('display_name', $author_id) . '</a>';
                                                    ?>
                                                </p>
                                            </div>
                                        </div>

                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="right-sidebar">
                                        <?php
                                        $current_post_id = get_the_ID();
                                        $categories = wp_get_post_categories($current_post_id);

                                        $args = [
                                            'post__not_in' => [$current_post_id],
                                            'posts_per_page' => 4,
                                            // 'category__in' => $categories,
                                            'orderby' => 'date',
                                            'order' => 'DESC',
                                        ];

                                        $related_posts = new WP_Query($args);

                                        if ($related_posts->have_posts()):
                                        ?>
                                            <div class="related-post">   
                                                <h2> <?php _e("Bài viết liên quan", "xemer_theme"); ?> </h2>
                                                <?php while ($related_posts->have_posts()):
                                                    $related_posts->the_post(); ?>
                                                    <div class="post-item">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <h3 class="post-title"><?php the_title(); ?></h3>
                                                        </a>
                                                        <?php
                                                        $categories = get_the_category();
                                                        if (!empty($categories)):
                                                            $cat = $categories[0];
                                                        ?>
                                                            <a href="<?php echo get_category_link($cat->term_id); ?>">
                                                                <h4 class="category-name"><?php echo esc_html($cat->name); ?></h4>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                        <?php
                                            wp_reset_postdata();
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--  -->
                <?php
                $register_form = get_field('register_for_trial_class' . $lang, 'option');
                if ($register_form && is_array($register_form)) :
                    $title = $register_form['title'] ?? 'ĐĂNG KÝ LỚP HỌC THỬ MIỄN PHÍ NGAY BÂY GIỜ!';
                    $form_content = $register_form['contact_form_7'] ?? '';
                    $background = $register_form['background'] ?? 'https://ila.edu.vn/wp-content/uploads/2023/02/bg-course-section-6.png';
                ?>
                    <section class="section-footer" id="form-submit-register" style="background-image: url(<?php echo $background; ?>);">
                        <div class="form-content">
                            <div class="container">
                                <div class="form-register">
                                    <h3 class="form-title"><?php echo $title; ?></h3>
                                    <?php
                                    if (!empty($form_content)) {
                                        echo $form_content;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            </div>
        </div>
    </main>
</div>


<?php
get_footer();
?>

<script>
    jQuery(function($) {

        var width = $(window).width();
        var header_item = $("#myHeader");
        console.log("Header", header_item);
        //
        if (width > 991) {
            var archive_ppdts = $(".section-blog-detail .right-sidebar");
            console.log("archive_ppdts", archive_ppdts);
            archive_ppdts.each(function(i) {
                var archive_ppdt = $(archive_ppdts[i]);
                var next = archive_ppdts[i + 1];
                archive_ppdt.scrollToFixed({
                    marginTop: $("#myHeader").outerHeight(true) + 30,
                    limit: function() {
                        var limit = 0;
                        if (next) {
                            limit =
                                $(next).offset().top - $(this).outerHeight(true) - 10;
                        } else {
                            limit =
                                $("#form-submit-register.section-footer").offset().top - $(this).outerHeight(true) - 50;
                        }
                        return limit;
                    },
                    zIndex: 99,
                });
            });
            var archive_ppdts = $(".section-blog-detail .left-sidebar");
            archive_ppdts.each(function(i) {
                var archive_ppdt = $(archive_ppdts[i]);
                var next = archive_ppdts[i + 1];
                archive_ppdt.scrollToFixed({
                    marginTop: $("#myHeader").outerHeight(true) + 30,
                    limit: function() {
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
                success: function(data) {
                    var $data = $(data);
                    if ($data.length) {
                        $("#ajax-posts").append($data);
                        $("#more_posts").attr("disabled", false);
                    } else {
                        $("#more_posts").attr("disabled", false);
                    }
                    if ($data.length < 4) {
                        $("#more_posts").attr("disabled", true);
                        $("#more_posts").hide();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
                }

            });
            return false;
        }

        $("#more_posts").on("click", function() { // When btn is pressed.
            $("#more_posts").attr("disabled", true); // Disable the button, temp.
            load_posts();
        });
    });
</script>