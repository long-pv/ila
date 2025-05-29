<?php

/**
 * Template Name: Tin tức hội thảo - sự kiện
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

<div id="page">
    <div id="content" class="site-content">
        <main class="archive-template archive-event">
            <div class="archive-post">

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


                <section class="section-1">
                    <div class="archive-post">
                        <div class="container">
                            <div class="box-wrapper">
                                <div class="row">
                                    <div class="col-12">
                                        <?php
                                        $banner = get_field('banner');
                                        ?>
                                        <?php if ($banner): ?>
                                            <header class="page-header" style="background: #1b3f94; width: 100%;">
                                                <div class="archive-header-content">
                                                    <?php if (!empty($banner['title'])): ?>
                                                        <h1 class="page-title"><?php echo esc_html($banner['title']); ?></h1>
                                                    <?php endif; ?>

                                                    <?php if (!empty($banner['description'])): ?>
                                                        <div class="taxonomy-description">
                                                            <p><?php echo nl2br(esc_html($banner['description'])); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>

                                                <img width="172" height="174" class="pattern pattern-1 entered lazyloaded" src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-contact-1.png" alt="background pattern contact 1" data-lazy-src="https://iladuhoc.edu.vn/p-content/themes/fptheme/assets/images/background-pattern-contact-1.png" data-ll-status="loaded">
                                                <noscript><img width="172" height="174" class="pattern pattern-1" src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-contact-1.png" alt="background pattern contact 1"></noscript>

                                                <img width="183" height="166" class="pattern pattern-2 entered lazyloaded" src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-contact-2.png" alt="background pattern contact 2" data-lazy-src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-contact-2.png" data-ll-status="loaded">
                                                <noscript><img width="183" height="166" class="pattern pattern-2" src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-contact-2.png" alt="background pattern contact 2"></noscript>
                                            </header>
                                        <?php endif; ?>
                                    </div>
                                </div>


                                <?php
                                $featured_events = get_field('featured_events');
                                if ($featured_events && is_array($featured_events)) :
                                    $total = count($featured_events);
                                    $count = 0;
                                ?>
                                    <div class="row events-listing events-list-first">
                                        <?php foreach ($featured_events as $event_id) :
                                            if ($count >= 4) break;

                                            $permalink = 'javascript:void(0);';
                                            $title = get_the_title($event_id);
                                            $thumbnail = get_the_post_thumbnail_url($event_id, 'full');
                                            $duration = get_field('duration', $event_id);
                                            $location = get_field('location', $event_id);
                                            $button_id = $event_id;

                                            if ($count === 0) : ?>
                                                <div class="col-xl-6 col-lg-5 col-md-12 col-12 first-events">
                                                    <div class="event-main event-first">
                                                        <div class="event-thumbnail">
                                                            <a href="<?php echo $permalink; ?>">
                                                                <img src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>" />
                                                            </a>
                                                        </div>
                                                        <div class="event-content">
                                                            <div class="event-title">
                                                                <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                                                            </div>
                                                            <div class="event-time">
                                                                <p><i class="fa-light fa-alarm-clock"></i> <?php echo $duration; ?></p>
                                                                <p><i class="fa-light fa-location-dot"></i> <?php echo $location; ?></p>
                                                            </div>
                                                            <div class="event-button">
                                                                <button class="btn-register" data-id="<?php echo $button_id; ?>">
                                                                    <a href="<?php echo $permalink; ?>"> <?php _e("Đăng ký ngay", "xemer_theme"); ?> </a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-7 col-md-12 col-12 middle-events">
                                                <?php else : ?>
                                                    <div class="event-main">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-lg-5 col-md-4 col-12">
                                                                <div class="event-thumbnail">
                                                                    <a href="<?php echo $permalink; ?>">
                                                                        <img src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>" />
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-8 col-lg-7 col-md-8 col-12">
                                                                <div class="event-content">
                                                                    <div class="event-title">
                                                                        <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                                                                    </div>
                                                                    <div class="event-time">
                                                                        <p><i class="fa-light fa-alarm-clock"></i> <?php echo $duration; ?></p>
                                                                        <p><i class="fa-light fa-location-dot"></i> <?php echo $location; ?></p>
                                                                    </div>
                                                                    <div class="event-button">
                                                                        <button class="btn-register" data-id="<?php echo $button_id; ?>">
                                                                            <a href="<?php echo $permalink; ?>"><?php _e("Đăng ký ngay", "xemer_theme"); ?></a>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php endif;
                                            $count++;
                                        endforeach; ?>
                                                </div> <!-- /.middle-events -->
                                    </div> <!-- /.row.events-listing -->
                                <?php endif; ?>



                                <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                                $args = array(
                                    'post_type'      => 'seminar_event',
                                    'post_status'    => 'publish',
                                    'posts_per_page' => 6,
                                    'paged'          => $paged,
                                );

                                $event_query = new WP_Query($args);
                                ?>

                                <?php if ($event_query->have_posts()) : ?>
                                    <div class="row events-listing events-list-last">
                                        <?php while ($event_query->have_posts()) : $event_query->the_post();
                                            $event_id = get_the_ID();
                                            $title = get_the_title();
                                            $permalink = 'javascript:void(0);';
                                            $thumbnail = get_the_post_thumbnail_url($event_id, 'full');
                                            $duration = get_field('duration', $event_id);
                                            $location = get_field('location', $event_id);
                                        ?>
                                            <div class="col-xl-12 col-12">
                                                <div class="event-main">
                                                    <div class="row">
                                                        <div class="col-xl-4 col-lg-5 col-md-4 col-12">
                                                            <div class="event-thumbnail">
                                                                <a href="<?php echo $permalink; ?>">
                                                                    <img src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-8 col-lg-7 col-md-8 col-12">
                                                            <div class="event-content">
                                                                <div class="event-title">
                                                                    <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                                                                </div>
                                                                <div class="event-time">
                                                                    <p><i class="fa-light fa-alarm-clock"></i> <?php echo $duration; ?></p>
                                                                    <p><i class="fa-light fa-location-dot"></i> <?php echo $location; ?></p>
                                                                </div>
                                                                <div class="event-button">
                                                                    <button class="btn-register" data-id="<?php echo $event_id; ?>">
                                                                        <a href="<?php echo $permalink; ?>"><?php _e("Đăng ký ngay", "xemer_theme"); ?></a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>

                                <?php
                                $total_pages = $event_query->max_num_pages;

                                if ($total_pages > 1) : ?>
                                    <div class="panigation-main" style="text-align: center; margin-bottom: 20px; margin-top: 20px">
                                        <div class="paginate_links">
                                            <?php
                                            echo paginate_links(array(
                                                'total'   => $total_pages,
                                                'current' => $paged,
                                                'prev_text' => '«',
                                                'next_text' => '»',
                                            ));
                                            ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- .wrap -->
        </main>
    </div>
    <!-- #content -->

    <?php
    $register_for_the_event = get_field('register_for_the_event', 'option') ?? null;
    if ($register_for_the_event):
        $title = $register_for_the_event['title'] ?? '';
        $contact_form_7 = $register_for_the_event['contact_form_7'] ?? '';
        $image = $register_for_the_event['image'] ?? '';
        $content = $register_for_the_event['content'] ?? '';
    ?>
        <div id="popup-event-fixed">
            <div class="popup-event-main">
                <div class="popup-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="popup-content-main">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="popup-event-content"><img class="pattern pattern-1" src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-17.png" alt="background pattern 16">
                                <img class="pattern pattern-2" src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-18.png" alt="background pattern 18">
                                <?php if ($title) : ?>
                                    <div class="popup-title">
                                        <h2><?php echo $title; ?></h2>
                                    </div>
                                <?php endif; ?>
                                <div class="popup-desc">
                                    <?php echo $content; ?>
                                </div>
                                <?php if ($image): ?>
                                    <div class="popup-thumbnail">
                                        <img width="885" height="588" src="<?php echo $image; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?php echo $title; ?>" sizes="100vw">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="popup-form" id="popup-form-events">
                                <?php echo $contact_form_7; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php
$sign_up_for_consultation = get_field('sign_up_for_consultation', 'option') ?? null;
if ($sign_up_for_consultation):
    $bg = $sign_up_for_consultation['background'] ?? '';
    $title = $sign_up_for_consultation['title'] ?? '';
    $contact_form_7 = $sign_up_for_consultation['contact_form_7'] ?? '';
?>
    <footer id="colophon" class="site-footer" style="padding: 0px;">
        <div class="footer-contact-form rocket-lazyload entered lazyloaded" style="background-image: url('<?php echo $bg; ?>'); margin-bottom: 0px;">
            <div class="container">
                <div class="footer-contact-main">
                    <div class="form-footer" id="form-contact-footer">
                        <div class="form-title">
                            <h2><?php echo $title; ?></h2>
                        </div>
                        <?php echo $contact_form_7; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>

<?php
get_footer();
