<?php

/**
 * Template Name: Multimedia (video)
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xemer_theme
 */

get_header();

$lang = '';
if (LANG == 'en') {
    $lang = '_en';
}
?>

<div id="content" class="site-content">
    <main class="archive-template archive-video">
        <div class="archive-post">
            <?php
            $menu_items = get_field('menu_item' . $lang, 'option') ?? []; // 'option' là theme setting

            //
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

            <!-- BANNER VIDEO START -->
            <section class="video-main">
                <div class="container">
                    <div class="row">
                        <header class="page-header w-100">
                            <h1 class="page-title"> <?php the_title(); ?></h1>
                        </header>
                    </div>

                    <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                    //
                    $args = array(
                        'post_type' => 'video_media',
                        'posts_per_page' => 9,
                        'paged' => $paged,
                    );
                    $query_post = new WP_Query($args);

                    if ($query_post->have_posts()):
                        $first = true;
                        while ($query_post->have_posts()):
                            $query_post->the_post();

                            $video_url = getYoutubeEmbedUrl(get_field('link_video') ?? '');
                            $video_duration = get_field('video_duration');
                            $video_author = get_field('author');
                            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $permalink = get_permalink();
                            $title = get_the_title();
                            $excerpt = get_the_excerpt();
                            $published = get_the_date('l, d-m-Y, H:i');
                            $category_link = get_post_type_archive_link('video_media');
                    ?>

                            <?php if ($first):
                                $first = false; ?>
                                <div class="video-first-play">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-8 col-xl-8">
                                            <div class="video-iframe">
                                                <iframe
                                                    id="player-yt"
                                                    src="<?php echo $video_url; ?>?autoplay=0&controls=1&mute=1&rel=0&showinfo=0"
                                                    frameborder="0"
                                                    allowfullscreen
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin"
                                                    title="Video YouTube"
                                                    width="640"
                                                    height="360">
                                                </iframe>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 col-xl-4">
                                            <div class="video-content">
                                                <div class="video-title">
                                                    <h2>
                                                        <a href="<?php echo $permalink; ?>">
                                                            <?php echo $title; ?>
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div class="video-content_desc">
                                                    <?php the_content(); ?>
                                                </div>
                                                <div class="video-author">
                                                    <p><?php echo $video_author; ?></p>
                                                </div>
                                                <div class="video-time-publish">
                                                    <p>
                                                        <a href="<?php echo $category_link; ?>"> <?php _e("Multimedia", "xemer_theme"); ?> </a>
                                                        <span><?php echo $published; ?> (GTM+7)</span>
                                                    </p>
                                                </div>

                                                <div class="video-share-social">
                                                    <div class="a2a_kit a2a_kit_size_20 addtoany_list" style="line-height: 20px;">
                                                        <a class="a2a_button_facebook"
                                                            href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>"
                                                            title="Facebook" rel="nofollow noopener" target="_blank">
                                                            <span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: transparent; width: 20px; line-height: 20px; height: 20px; background-size: 20px; border-radius: 3px;">
                                                                <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                                    <path fill="#000000" d="M28 16c0-6.627-5.373-12-12-12S4 9.373 4 16c0 5.628 3.875 10.35 9.101 11.647v-7.98h-2.474V16H13.1v-1.58c0-4.085 1.849-5.978 5.859-5.978.76 0 2.072.15 2.608.298v3.325c-.283-.03-.775-.045-1.386-.045-1.967 0-2.728.745-2.728 2.683V16h3.92l-.673 3.667h-3.247v8.245C23.395 27.195 28 22.135 28 16"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="a2a_label">Facebook</span>
                                                        </a>
                                                        <a class="a2a_button_email" href="mailto:?subject=<?php the_title(); ?>&body=<?php echo $permalink; ?>"
                                                            title="Email" rel="nofollow noopener" target="_blank">
                                                            <span class="a2a_svg a2a_s__default a2a_s_email" style="background-color: transparent; width: 20px; line-height: 20px; height: 20px; background-size: 20px; border-radius: 3px;">
                                                                <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                                    <path fill="#000000" d="M27 21.775v-9.9s-10.01 6.985-10.982 7.348C15.058 18.878 5 11.875 5 11.875v9.9c0 1.375.293 1.65 1.65 1.65h18.7c1.393 0 1.65-.242 1.65-1.65m-.017-11.841c0-1.002-.291-1.359-1.633-1.359H6.65c-1.38 0-1.65.429-1.65 1.43l.016.154s9.939 6.842 11 7.216C17.14 16.941 27 10.005 27 10.005z"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="a2a_label">Email</span>
                                                        </a>
                                                        <a class="a2a_button_copy_link" href="<?php echo $permalink; ?>"
                                                            title="Copy Link" rel="nofollow noopener" target="_blank">
                                                            <span class="a2a_svg a2a_s__default a2a_s_link" style="background-color: transparent; width: 20px; line-height: 20px; height: 20px; background-size: 20px; border-radius: 3px;">
                                                                <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                                    <path fill="#000000" d="M7.591 21.177q0-.54.377-.917l2.804-2.804a1.24 1.24 0 0 1 .913-.378q.565 0 .97.43-.038.041-.255.25-.215.21-.29.29a3 3 0 0 0-.2.256 1.1 1.1 0 0 0-.177.344 1.4 1.4 0 0 0-.046.37q0 .54.377.918a1.25 1.25 0 0 0 .918.377q.19.001.373-.047.189-.056.345-.175.135-.09.256-.2.15-.14.29-.29c.14-.142.223-.23.25-.254q.445.42.445.984 0 .539-.377.916l-2.778 2.79a1.24 1.24 0 0 1-.917.364q-.54-.001-.917-.35l-1.982-1.97a1.22 1.22 0 0 1-.378-.9zm9.477-9.504q0-.54.377-.917l2.777-2.79a1.24 1.24 0 0 1 .913-.378q.525-.001.917.364l1.984 1.968q.38.378.38.903 0 .54-.38.917l-2.802 2.804a1.24 1.24 0 0 1-.916.364q-.565 0-.97-.418.038-.04.255-.25a8 8 0 0 0 .29-.29q.108-.12.2-.255.121-.156.176-.344.048-.181.047-.37 0-.538-.377-.914a1.25 1.25 0 0 0-.917-.377q-.205 0-.37.046-.172.046-.346.175a4 4 0 0 0-.256.2q-.08.076-.29.29l-.25.258q-.441-.417-.442-.983zM5.003 21.177q0 1.617 1.146 2.736l1.982 1.968c.745.75 1.658 1.12 2.736 1.12q1.63 0 2.75-1.143l2.777-2.79c.75-.747 1.12-1.66 1.12-2.737q.002-1.66-1.183-2.818l1.186-1.185q1.16 1.185 2.805 1.186 1.617 0 2.75-1.13l2.803-2.81q1.127-1.132 1.128-2.748 0-1.62-1.146-2.738L23.875 6.12Q22.758 4.999 21.139 5q-1.63 0-2.75 1.146l-2.777 2.79c-.75.747-1.12 1.66-1.12 2.737q-.002 1.658 1.183 2.817l-1.186 1.186q-1.16-1.186-2.805-1.186-1.617 0-2.75 1.132L6.13 18.426Q5 19.559 5 21.176z"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="a2a_label">Copy Link</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                <?php else: ?>
                                    <div class="video-list col-6 col-md-4 col-lg-3">
                                        <div class="video-item">
                                            <div class="video-thumb">
                                                <a href="<?php echo $permalink; ?>">
                                                    <img src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>">
                                                </a>
                                            </div>
                                            <div class="video-title">
                                                <h3>
                                                    <a href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
                                                </h3>
                                            </div>
                                            <div class="video-time-cate">
                                                <p>
                                                    <span class="icon-time"><i class="fa-solid fa-timer"></i>
                                                        <?php echo $video_duration; ?></span>
                                                    <span class="category-link">
                                                        <a href="<?php echo $category_link; ?>"><?php _e("MULTIMEDIA", "xemer_theme"); ?> </a>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                            <div class="panigation-archive" style="text-align: center; margin-bottom: 20px; margin-top: 20px">
                                <div class="paginate_links">
                                    <?php
                                    echo paginate_links(array(
                                        'total' => $query_post->max_num_pages,
                                        'current' => $paged,
                                        'mid_size' => 2,
                                        'prev_text' => __('«'),
                                        'next_text' => __('»'),
                                    ));
                                    ?>
                                </div>
                            </div>
                </div>
            </section>
            <!-- VIDEO END -->
        </div>
    </main>
</div>
<!-- #content -->


<style>
    /* Responsive iframe container */
    .video-iframe {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
        max-width: 100%;
        background: #000;
    }

    /* Responsive iframe */
    .video-iframe iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>

<?php
get_footer();
