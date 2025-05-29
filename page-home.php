<?php

/**
 * Template Name: Trang chủ
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
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            $banner = get_field('banner') ?? null;
            if ($banner):
            ?>
                <section id="section-1" class="banner-slider-home">
                    <div>
                        <ss3-force-full-width data-overflow-x="body" data-horizontal-selector="body">
                            <div class="n2-section-smartslider fitvidsignore  n2_clear" data-ssid="7">
                                <div id="n2-ss-7-align" class="n2-ss-align">
                                    <div class="n2-padding">
                                        <div id="n2-ss-7" data-creator="Smart Slider 3" data-responsive="fullwidth"
                                            class="n2-ss-slider n2-ow n2-has-hover n2notransition  ">
                                            <div class="n2-ss-slider-wrapper-inside">
                                                <div class="n2-ss-slider-1 n2_ss__touch_element n2-ow">
                                                    <div class="n2-ss-slider-2 n2-ow">
                                                        <div class="n2-ss-slider-3 n2-ow">
                                                            <div class="n2-ss-slide-backgrounds n2-ow-all">
                                                                <?php
                                                                foreach ($banner as $key => $item):
                                                                    $video = $item['video'] ?? '';
                                                                ?>
                                                                    <div class="n2-ss-slide-background"
                                                                        data-public-id="<?php echo $key + 1; ?>" data-mode="fill">
                                                                        <video
                                                                            class="n2-ss-slide-background-video intrinsic-ignore"
                                                                            style="opacity:1;" data-mode="fill"
                                                                            playsinline="playsinline"
                                                                            webkit-playsinline="webkit-playsinline"
                                                                            onloadstart="this.n2LoadStarted=1;"
                                                                            data-keepplaying="1" preload="none"
                                                                            muted="muted" loop="loop"
                                                                            data-reset-slide-change="1">
                                                                            <source src="<?php echo  $video; ?>" type="video/mp4">
                                                                        </video>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </div>
                                                            <div class="n2-ss-slider-4 n2-ow">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 1920 762"
                                                                    data-related-device="desktopPortrait"
                                                                    class="n2-ow n2-ss-preserve-size n2-ss-preserve-size--slider n2-ss-slide-limiter"></svg>
                                                                <?php
                                                                foreach ($banner as $key => $item) :
                                                                ?>
                                                                    <div data-slide-duration="0"
                                                                        data-id="<?php echo $key + 1; ?>" data-slide-public-id="<?php echo $key + 1; ?>"
                                                                        data-title="5"
                                                                        class="n2-ss-slide n2-ow  n2-ss-slide-<?php echo $key + 1; ?>">
                                                                        <div tabindex="-1" class="n2-ss-slide--focus"
                                                                            role="note"><?php echo $key + 1; ?></div>
                                                                        <div
                                                                            class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
                                                                            <div class="n2-ss-layer n2-ow n-uc-TQC49fVYGdvm"
                                                                                data-sstype="slide" data-pm="default">
                                                                                <div class="n2-ss-layer n2-ow content-hidden-desc n-uc-nXXc9ghSB8ef"
                                                                                    data-pm="default"
                                                                                    data-sstype="content"
                                                                                    data-hasbackground="0">
                                                                                    <div
                                                                                        class="n2-ss-section-main-content n2-ss-layer-with-background n2-ss-layer-content n2-ow n-uc-nXXc9ghSB8ef-inner">
                                                                                        <div class="n2-ss-layer n2-ow n-uc-j8lMT8HAmH6I"
                                                                                            data-pm="normal"
                                                                                            data-sstype="layer">
                                                                                            <h1 id="n2-ss-7item1"
                                                                                                class="n2-font-ff3aa4d20a8af749fc766ea44c01c45e-hover   n2-ss-item-content n2-ss-text n2-ow"
                                                                                                style="display:block;">
                                                                                                <?php echo $item['title']; ?>
                                                                                            </h1>
                                                                                        </div>
                                                                                        <div class="n2-ss-layer n2-ow n-uc-rcujSYDhcy2y"
                                                                                            data-pm="normal"
                                                                                            data-sstype="layer">
                                                                                            <div
                                                                                                class="n2-ss-item-content n2-ss-text n2-ow-all">
                                                                                                <div class="">
                                                                                                    <p
                                                                                                        class="n2-font-00c0426d303d9ebf81ec63b1d5d55f94-paragraph   ">
                                                                                                        <?php echo $item['description']; ?>
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="n2-ss-layer n2-ow discover n-uc-EtWs6nvCEvuW n2-ss-layer--auto"
                                                                                            data-pm="normal"
                                                                                            data-sstype="layer">
                                                                                            <div
                                                                                                class="n2-ss-button-container n2-ss-item-content n2-ow n2-font-b22b6590b1d0109a3ac8466f5692b0e6-link  n2-ss-nowrap n2-ss-button-container--non-full-width">
                                                                                                <a class="n2-style-92696f28387c165901a67dd410e553f5-heading  n2-ow open-popup"
                                                                                                    href="<?php echo $item['youtube_url']; ?>">
                                                                                                    <div>
                                                                                                        <div>
                                                                                                            XEM VIDEO
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="n2-ss-slider-controls n2-ss-slider-controls-absolute-center-bottom">
                                                    <div style="--widget-offset:100px;"
                                                        class="n2-ss-widget n2-ss-control-bullet n2-ow-all n2-ss-control-bullet-horizontal">
                                                        <div
                                                            class=" nextend-bullet-bar n2-bar-justify-content-center">
                                                            <div class="n2-bullet n2-style-a5a9420075d4bb2a9af989b64ab7edfb-dot "
                                                                style="visibility:hidden;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><ss3-loader></ss3-loader>
                                    </div>
                                </div>
                                <div class="n2_clear"></div>
                            </div>
                        </ss3-force-full-width>
                    </div>
                </section>
            <?php endif; ?>


            <section id="section-2" class="section-course">

                <?php
                $form_course = get_field('form_course') ?? null;
                ?>
                <div class="container">
                    <div class="choose-course" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                        <div class="row">
                            <div class="col-sm-12 col-md-9 col-lg-10 col-xl-10">
                                <div class="row">
                                    <div class="col-sm-5 col-md-12 col-lg-4 col-xl-4">
                                        <p>
                                            <?php echo $form_course['description'] ?? ''; ?>
                                        </p>
                                    </div>
                                    <div class="col-sm-7 col-md-12 col-lg-8 col-xl-8">
                                        <div class="form-course">
                                            <div class="row">
                                                <div class="col-md-4 col-lg-4 col-xl-4">
                                                    <div class="ps-relative customer-course">
                                                        <div class="icon-form">
                                                            <img src="<?php echo THEME_URI . '/assets/'; ?>images/user-icon.png" alt="icon"
                                                                width="24" height="24">
                                                        </div>
                                                        <select name="your_course" id="your_course">
                                                            <option selected="" value="0">Độ tuổi</option>
                                                            <option value="3_6_years_old">3-6 tuổi</option>
                                                            <option value="6_11_years_old">6-11 tuổi</option>
                                                            <option value="11_16_years_old">11-16 tuổi</option>
                                                            <option value="working_people">Người đi làm</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-5 col-xl-5">
                                                    <div class="ps-relative customer-course-option">
                                                        <div class="icon-form">
                                                            <img src="<?php echo THEME_URI . '/assets/'; ?>images/book.png" alt="icon" width="24"
                                                                height="24">
                                                        </div>

                                                        <script>
                                                            const options_3_6_years_old = [
                                                                <?php
                                                                $s3_6_years_old = get_field('3_6_years_old' . $lang, 'option') ?? [];
                                                                if ($s3_6_years_old):
                                                                    foreach ($s3_6_years_old as $item):
                                                                        echo '{"title" : "' . $item['link']['title'] . '", "url" : "' . $item['link']['url'] . '"},';
                                                                    endforeach;
                                                                endif;
                                                                ?>
                                                            ];

                                                            const options_6_11_years_old = [
                                                                <?php
                                                                $s6_11_years_old = get_field('6_11_years_old' . $lang, 'option') ?? [];
                                                                if ($s6_11_years_old):
                                                                    foreach ($s6_11_years_old as $item):
                                                                        echo '{"title" : "' . $item['link']['title'] . '", "url" : "' . $item['link']['url'] . '"},';
                                                                    endforeach;
                                                                endif;
                                                                ?>
                                                            ];

                                                            const options_11_16_years_old = [
                                                                <?php
                                                                $s11_16_years_old = get_field('11_16_years_old' . $lang, 'option') ?? [];
                                                                if ($s11_16_years_old):
                                                                    foreach ($s11_16_years_old as $item):
                                                                        echo '{"title" : "' . $item['link']['title'] . '", "url" : "' . $item['link']['url'] . '"},';
                                                                    endforeach;
                                                                endif;
                                                                ?>
                                                            ];

                                                            const options_working_people = [
                                                                <?php
                                                                $working_people = get_field('working_people' . $lang, 'option') ?? [];
                                                                if ($working_people):
                                                                    foreach ($working_people as $item):
                                                                        echo '{"title" : "' . $item['link']['title'] . '", "url" : "' . $item['link']['url'] . '"},';
                                                                    endforeach;
                                                                endif;
                                                                ?>
                                                            ];

                                                            console.log(options_3_6_years_old);
                                                            console.log(options_6_11_years_old);
                                                            console.log(options_11_16_years_old);
                                                            console.log(options_working_people);
                                                        </script>

                                                        <select name="your_option" id="your_option">
                                                            <option selected="" value="0">
                                                                Chương trình học
                                                            </option>

                                                            <!-- các option ở jquery hãy thêm vào đây và xóa đi tương ứng theo lựa chọn -->
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-3 col-xl-3">
                                                    <button class="btn-change-option">
                                                        <a href="#">Xem thêm</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-2 col-xl-2">
                                <div class="course-illustration">
                                    <img width="466" height="433" src="<?php echo $form_course['image'] ?? ''; ?>" data-id="1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $list_course = get_field('list_course') ?? null;
                if ($list_course):
                ?>
                    <div class="container container-list-course">
                        <div class="list-courses">
                            <div class="row">
                                <?php foreach ($list_course as $item) : ?>
                                    <div class="col-md-6 col-lg-4 col-xl-4">
                                        <div class="course-item" data-aos="fade-up" data-aos-delay="50"
                                            data-aos-duration="800">
                                            <img width="896" height="896" src="<?php echo $item['image']; ?>"
                                                class="attachment-full size-full wp-post-image"
                                                alt="Tiếng Anh mầm non 3 - 6 tuổi" decoding="async" fetchpriority="high">
                                            <div class="course-main">
                                                <div class="course-logo">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="course-background-img" style="height: 66px;">
                                                                <a href="<?php echo $item['link']; ?>" style="color: #fff;font-size: 16px;font-weight: 700;">
                                                                    <?php echo $item['category']; ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <button class="learn-more">
                                                                <span class="circle" aria-hidden="true">
                                                                    <i class="icon arrow fa-solid fa-angle-right"></i>
                                                                </span>
                                                                <a class="button-text" href="<?php echo $item['link']; ?>">
                                                                    <span>
                                                                        Khám phá
                                                                    </span>
                                                                </a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="course-content">
                                                    <a href="<?php echo $item['link']; ?>">
                                                        <h2>
                                                            <?php echo $item['title']; ?>
                                                        </h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <?php
                                $slider_center = get_field('slider_center') ?? null;
                                if ($slider_center) :
                                ?>
                                    <div class="banners-owl-slider owl-carousel owl-theme">
                                        <?php foreach ($slider_center as $item) : ?>
                                            <div class="course-main-last" data-aos="fade-up" data-aos-delay="50"
                                                data-aos-duration="800">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <a href="<?php echo $item['link']; ?>" style="display: block;" target="_blank">
                                                            <img width="2048" height="657" src="<?php echo $item['image']; ?>" class="attachment-full size-full wp-post-image" alt="" decoding="async" loading="lazy">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </section>

            <?php
            $news = get_field('news') ?? [];
            ?>
            <section id="section-3" class="section-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-blog" data-aos="fade-up" data-aos-delay="50"
                                data-aos-duration="800">
                                <div class="title-blog">
                                    <h2>
                                        <?php echo $news['title'] ?? ''; ?>
                                    </h2>
                                    <button>
                                        <a href="<?php echo $news['view_all'] ?? '#'; ?>">
                                            Xem tất cả <i class="fa-regular fa-arrow-right"></i>
                                        </a>
                                    </button>
                                </div>
                                <span class="quote-heading">
                                    <?php echo $news['description'] ?? ''; ?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 5,
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()):
                        $i = 0;
                    ?>
                        <div class="row" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                            <?php while ($query->have_posts()): $query->the_post();
                                $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                $category  = get_the_category();
                                $category_link = !empty($category) ? get_category_link($category[0]->term_id) : '#';
                                $category_name = !empty($category) ? $category[0]->name : 'Chưa phân loại';
                            ?>
                                <?php if ($i == 0): ?>
                                    <!-- Bài viết chính bên trái -->
                                    <div class="col-xl-6 col-md-6">
                                        <div class="blog-main blog-first">
                                            <div class="blog-thumbnail">
                                                <a href="<?php the_permalink(); ?>">
                                                    <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>" class="wp-post-image">
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-content-title">
                                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                </div>
                                                <div class="blog-archive arrow-before">
                                                    <span><a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a></span>
                                                </div>
                                                <div class="blog-content-description">
                                                    <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="col-xl-12">
                                            <div class="row">
                                            <?php else: ?>
                                                <!-- Các bài viết phụ bên phải -->
                                                <div class="col-xl-6 col-md-6">
                                                    <div class="blog-main">
                                                        <div class="blog-thumbnail">
                                                            <a href="<?php the_permalink(); ?>">
                                                                <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>" class="wp-post-image">
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="blog-content-title">
                                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                            </div>
                                                            <div class="blog-archive arrow-before">
                                                                <span><a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endif;
                                        $i++;
                                    endwhile; ?>
                                            </div> <!-- .row -->
                                        </div>
                                    </div>
                        </div>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </div>
            </section>

            <?php
            $multimedia = get_field('multimedia') ?? [];
            ?>
            <section id="section-4" class="section-multimedia">
                <div class="container">
                    <div class="multimedia-main">
                        <div class="multimedia-nav-list">
                            <div class="row">
                                <div class="col-md-12 col-xl-8">
                                    <div class="row">
                                        <div class="col-md-4 col-xl-5">
                                            <div class="tile-multimedia" data-aos="fade-up" data-aos-delay="50"
                                                data-aos-duration="800">
                                                <h2><a href=" <?php echo $multimedia['view_all'] ?? '#'; ?>">
                                                        <?php echo $multimedia['title'] ?? ''; ?>
                                                    </a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        // Lấy URL trang danh sách video từ ACF Options
                        $page_all_video = get_field('page_all_video', 'option') ?? '#';

                        // Query các bài viết từ post_type video_media
                        $args = array(
                            'post_type' => 'video_media',
                            'posts_per_page' => 5,
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) :
                        ?>
                            <div class="multimedia-list list-videos active" data-list="1" data-bg="#cb999a">
                                <div class="row">
                                    <?php
                                    $count = 0;
                                    while ($query->have_posts()) : $query->the_post();
                                        $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        $video_url = get_field('video_url'); // bạn cần lưu video YouTube URL vào field này
                                        $video_title = get_the_title();
                                        $video_permalink = get_permalink();
                                    ?>
                                        <?php if ($count == 0): ?>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="video-item video-first">
                                                    <a class="open-popup" href="<?php echo esc_url($video_url); ?>">
                                                        <img width="885" height="590" src="<?php echo esc_url($thumb_url); ?>"
                                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                            alt="<?php echo esc_attr($video_title); ?>" decoding="async" loading="lazy" sizes="100vw">
                                                    </a>
                                                    <div class="video-content">
                                                        <h3>
                                                            <a href="<?php echo esc_url($video_permalink); ?>"><?php echo esc_html($video_title); ?></a>
                                                        </h3>
                                                    </div>
                                                    <div class="video-archive">
                                                        <span>
                                                            <a href="<?php echo esc_url($page_all_video); ?>">
                                                                MULTIMEDIA
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="row">
                                                <?php else: ?>
                                                    <div class="col-md-6 col-xl-6">
                                                        <div class="video-item">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-12 col-md-12">
                                                                    <a class="open-popup" href="<?php echo esc_url($video_url); ?>">
                                                                        <img width="885" height="590" src="<?php echo esc_url($thumb_url); ?>"
                                                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                            alt="<?php echo esc_attr($video_title); ?>" decoding="async" loading="lazy" sizes="100vw">
                                                                    </a>
                                                                    <div class="video-content">
                                                                        <h3>
                                                                            <a href="<?php echo esc_url($video_permalink); ?>"><?php echo esc_html($video_title); ?></a>
                                                                        </h3>
                                                                    </div>
                                                                    <div class="video-archive">
                                                                        <span>
                                                                            <a href="<?php echo esc_url($page_all_video); ?>">MULTIMEDIA</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php
                                            $count++;
                                        endwhile;
                                            ?>
                                                </div> <!-- end .row trong col-xl-6 -->
                                            </div> <!-- end .col-xl-6 phải -->
                                </div> <!-- end .row chính -->
                            </div>
                        <?php
                            wp_reset_postdata();
                        endif;
                        ?>

                    </div>
                </div>
            </section>


            <section id="section-5" class="section-hall-of-greatness" data-aos="fade-up" data-aos-delay="50"
                data-aos-duration="800">
                <div class="container">
                    <?php
                    $excellent_face = get_field('excellent_face');
                    if ($excellent_face):
                        $title = $excellent_face['title'];
                        $view_all = $excellent_face['view_all'];
                    ?>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="title-blog">
                                    <h2><?php echo esc_html($title); ?></h2>
                                    <button>
                                        <a href="<?php echo esc_url($view_all); ?>">
                                            Xem tất cả <i class="fa-regular fa-arrow-right"></i>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="hall-owl-slider owl-carousel owl-theme">
                        <?php
                        $students = new WP_Query(array(
                            'post_type' => 'top_student',
                            'posts_per_page' => -1,
                        ));

                        if ($students->have_posts()):
                            while ($students->have_posts()): $students->the_post();
                                $school_name = get_field('school_name');
                                $achievement = get_field('achievement');
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                $thumbnail_url_254 = get_the_post_thumbnail_url(get_the_ID());
                        ?>
                                <div class="hall-item">
                                    <div class="hall-image">
                                        <?php if ($thumbnail_url): ?>
                                            <img width="433" height="512" src="<?php echo esc_url($thumbnail_url); ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?php echo esc_attr(get_the_title()); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="hall-content">
                                        <h3><a href="#"><?php the_title(); ?></a></h3>
                                        <p style="font-size: 16px;"><span><?php echo esc_html($school_name); ?></span></p>
                                        <p><?php echo esc_html($achievement); ?></p>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </section>

            <?php
            $learning_space = get_field('learning_space');
            $gallery = $learning_space['gallery'] ?? [];
            $title = $learning_space['title'] ?? 'Không gian học tập <br> chuẩn quốc tế tại ILA';
            ?>
            <section id="section-6" class="section-space-powers">
                <div class="container">
                    <div class="title-space">
                        <h2><?php echo $title; ?></h2>
                    </div>
                </div>

                <?php if (!empty($gallery)) : ?>
                    <div class="space-owl-slider owl-carousel owl-theme">
                        <?php foreach ($gallery as $image_url) : ?>
                            <div class="space-item">
                                <div class="space-image">
                                    <img src="<?php echo esc_url($image_url); ?>"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt=""
                                        decoding="async" loading="lazy"
                                        sizes="100vw">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

</div><!-- #content -->


<style>
    .footer_maps {
        margin-top: 3rem;
    }
</style>
<?php
get_footer();
?>
<script>
    const allOptions = {
        "3_6_years_old": options_3_6_years_old,
        "6_11_years_old": options_6_11_years_old,
        "11_16_years_old": options_11_16_years_old,
        "working_people": options_working_people
    };

    jQuery(document).ready(function($) {
        $('#your_course').on('change', function() {
            const selected = $(this).val();
            const $yourOption = $('#your_option');

            // Xóa tất cả option cũ, trừ option đầu tiên
            $yourOption.find('option:not(:first)').remove();

            if (allOptions[selected]) {
                allOptions[selected].forEach(opt => {
                    const newOption = $('<option></option>')
                        .val(opt.url)
                        .text(opt.title)
                        .attr('data-select', selected);
                    $yourOption.append(newOption);
                });
            }
        });

        // Khi ấn nút "Xem thêm"
        $('.btn-change-option a').on('click', function(e) {
            e.preventDefault(); // Ngăn chặn hành vi mặc định

            const url = $('#your_option').val();

            if (url && url !== '0') {
                window.location.href = url;
            } else {
                alert('Vui lòng chọn chương trình học.');
            }
        });
    });
</script>