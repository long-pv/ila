<?php

/**
 * Template Name: Giới Thiệu
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
?>
<div class="site-content-contain page-template-page-about-us">
    <!-- Content Start -->
    <div id="content" class="site-content">
        <main>
            <!-- Section 1 Start -->
            <section class="section-1" style="display: none">
                <div class="container">
                    <!-- <video id="banner-video" autoplay="autoplay" loop="loop" muted defaultMuted playsinline  oncontextmenu="return false;"  preload="auto">
                    <source src="assets/videos/ILA-Jumpstart.mp4" type="video/mp4">
                </video> -->
                    <img class="img-background" src="<?php echo THEME_URI . '/assets/'; ?>images/4.png" alt="" />
                    <div class="banner-content">
                        <div class="container">
                            <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50"
                                data-aos-duration="800">
                                <h1>GREATER YOU EVERYDAY</h1>
                                <h2>TRƯỞNG THÀNH HƠN MỖI NGÀY</h2>
                                <p>
                                    <a class="open-popup" href="https://www.youtube.com/watch?v=RPFXq1fBJFM"> Xem video
                                    </a><a class="open-popup" href="https://www.youtube.com/watch?v=RPFXq1fBJFM"
                                        style="margin-left: 10px"><img width="65" height="64"
                                            src="<?php echo THEME_URI . '/assets/'; ?>images/video-icon.png" /></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section 1 End -->

            <!-- Banner Start -->
            <?php
            $banner_section = get_field('banner_section') ?? '';

            $image_banner = isset($banner_section['image']) ? $banner_section['image'] : [];
            $title_banner = isset($banner_section['title']) ? $banner_section['title'] : '';
            $content_banner = isset($banner_section['content']) ? $banner_section['content'] : '';
            $more_content_banner = isset($banner_section['more_content']) ? $banner_section['more_content'] : '';
            ?>

            <section class="section-2">
                <!-- Image -->
                <?php if (!empty($image_banner) && is_array($image_banner)): ?>
                    <img width="1920" height="920" class="img-background img-banner-about" data-aos="fade-up"
                        data-aos-delay="50" data-aos-duration="800" src="<?php echo esc_url($image_banner['url']); ?>"
                        alt="<?php echo esc_attr($image_banner['alt'] ?? 'Banner Image'); ?>" />
                <?php endif; ?>
                <!-- Content -->
                <div class="banner-content">
                    <div class="container">
                        <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                            <?php if (!empty($title_banner)): ?>
                                <h2><?php echo esc_html($title_banner); ?></h2>
                            <?php endif; ?>

                            <?php if (!empty($content_banner)): ?>
                                <div class="banner__content editor">
                                    <?php echo wp_kses_post($content_banner); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($more_content_banner)): ?>
                                <div class="banner__content content-show-more">
                                    <?php echo wp_kses_post($more_content_banner); ?>
                                </div>
                            <?php endif; ?>

                            <div class="main-button">
                                <div class="show-more">
                                    <a href="#"> Đọc thêm </a>
                                </div>
                                <div class="hide-more">
                                    <a href="#"> Thu gọn </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner End -->

            <!-- Timeline Start -->
            <?php
            $timeline_section = get_field('timeline_section');
            $heading_timeline = isset($timeline_section['title']) ? $timeline_section['title'] : '';
            $sub_heading_timeline = isset($timeline_section['sub_title']) ? $timeline_section['sub_title'] : '';
            $items = isset($timeline_section['timeline_item']) && is_array($timeline_section['timeline_item']) ? $timeline_section['timeline_item'] : [];
            ?>

            <section id="section-timeline" class="h--timeline js-h--timeline">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xl-2">
                            <div class="box-heading-timeline">
                                <?php if (!empty($heading_timeline)): ?>
                                    <h2><?php echo esc_html($heading_timeline); ?></h2>
                                <?php endif; ?>
                                <?php if (!empty($sub_heading_timeline)): ?>
                                    <p><?php echo esc_html($sub_heading_timeline); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-12 col-xl-10">
                            <div class="box-timeline">
                                <div class="h--timeline-container">
                                    <div class="h--timeline-dates">
                                        <div class="h--timeline-line">
                                            <ol>
                                                <?php foreach ($items as $index => $item): ?>
                                                    <?php
                                                    $date = isset($item['data_date']) ? $item['data_date'] : '';
                                                    $year_label = isset($item['label_year']) ? $item['label_year'] : '';
                                                    $is_first = $index === 0;
                                                    $class = 'h--timeline-date' . ($is_first ? ' h--timeline-date--selected' : '');
                                                    ?>
                                                    <li>
                                                        <a href="#0" data-date="<?php echo esc_attr($date); ?>"
                                                            class="<?php echo esc_attr($class); ?>">
                                                            <?php echo esc_html($year_label); ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ol>
                                            <span class="h--timeline-filling-line" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <nav class="h--timeline-navigation-container">
                                        <ul>
                                            <li>
                                                <a href="#0"
                                                    class="text-replace h--timeline-navigation h--timeline-navigation--prev h--timeline-navigation--inactive">
                                                    Prev <i class="fa-solid fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0"
                                                    class="text-replace h--timeline-navigation h--timeline-navigation--next">
                                                    Next <i class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <?php if (!empty($items)): ?>
                                    <div class="h--timeline-events" data-aos="fade-left" data-aos-delay="100"
                                        data-aos-duration="1000">
                                        <ol>
                                            <?php foreach ($items as $ind => $item): ?>
                                                <?php
                                                $year = isset($item['year']) ? $item['year'] : '';
                                                $content = isset($item['content']) ? $item['content'] : '';
                                                $featured_image = isset($item['featured_image']['url']) ? $item['featured_image']['url'] : '';
                                                ?>
                                                <li class="h--timeline-event text-component">
                                                    <div
                                                        class="h--timeline-event-content timeline-<?php echo $ind; ?> container">
                                                        <div class="row">
                                                            <div class="col-lg-7">
                                                                <div class="box-left">
                                                                    <div class="box-heading">
                                                                        <div class="box-years">
                                                                            <?php if (!empty($year)): ?>
                                                                                <div class="list">
                                                                                    <?php echo $year; ?>
                                                                                </div>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <div class="line"></div>
                                                                        <div class="box-content">
                                                                            <?php if (!empty($content)): ?>
                                                                                <div class="list-timeline">
                                                                                    <?php echo wp_kses_post($content); ?>
                                                                                </div>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-5">
                                                                <div class="box-right">
                                                                    <?php if ($featured_image): ?>
                                                                        <img class="img-main"
                                                                            src="<?php echo esc_url($featured_image); ?>" alt="">
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ol>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Timeline End -->

            <!-- Banner 2 Start -->
            <?php
            $banner_2_section = get_field('banner_2_section') ?? '';

            $image_banner_2 = isset($banner_2_section['image']) ? $banner_2_section['image'] : [];
            $title_banner_2 = isset($banner_2_section['title']) ? $banner_2_section['title'] : '';
            $content_banner_2 = isset($banner_2_section['content']) ? $banner_2_section['content'] : '';
            ?>

            <section class="section-3">
                <?php if (!empty($image_banner_2['url'])): ?>
                    <img width="<?php echo esc_attr($image_banner_2['width'] ?? '1920'); ?>"
                        height="<?php echo esc_attr($image_banner_2['height'] ?? '910'); ?>" class="img-background"
                        data-aos="fade-up" data-aos-delay="50" data-aos-duration="800"
                        src="<?php echo esc_url($image_banner_2['url']); ?>"
                        alt="<?php echo esc_attr($image_banner_2['alt'] ?? 'Banner Image'); ?>" />
                <?php endif; ?>

                <div class="banner-content">
                    <div class="container">
                        <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                            <?php if (!empty($title_banner_2)): ?>
                                <h2><span style="color: #ffffff"><?php echo esc_html($title_banner_2); ?></span></h2>
                            <?php endif; ?>

                            <?php if (!empty($content_banner_2)): ?>
                                <div class="editor">
                                    <?php echo wp_kses_post($content_banner_2); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner 2 End -->

            <!-- About Statr -->
            <?php

            $about_section = get_field('about_section') ?? [];
            $about_items = isset($about_section['about_item']) && is_array($about_section['about_item']) ? $about_section['about_item'] : [];

            if (!empty($about_items)):
                ?>
                <section class="section-4">
                    <div class="container">
                        <div class="row">
                            <?php foreach ($about_items as $item):
                                $title = isset($item['title']) ? esc_html($item['title']) : '';
                                $content = isset($item['content']) ? wp_kses_post($item['content']) : '';
                                $image = isset($item['image']) ? $item['image'] : [];

                                $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                                $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                                ?>
                                <div class="col-md-4">
                                    <div class="box-main">
                                        <div class="box-background"></div>
                                        <div class="box-content" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                            <?php if ($title): ?>
                                                <h2><?php echo $title; ?></h2>
                                            <?php endif; ?>
                                            <?php if ($content): ?>
                                                <p><?php echo $content; ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <?php if ($image_url): ?>
                                            <div class="box-image">
                                                <img width="316" height="293" src="<?php echo $image_url; ?>"
                                                    alt="<?php echo $image_alt; ?>" />
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <!-- About End -->

            <!-- Education start -->
            <?php
            $education_section = get_field('education_section') ?? [];

            $title_education = isset($education_section['title']) ? $education_section['title'] : '';

            $section_1_education = !empty($education_section['section_1']) && is_array($education_section['section_1']) ? $education_section['section_1'] : [];
            $section_2_education = !empty($education_section['section_2']) && is_array($education_section['section_2']) ? $education_section['section_2'] : [];
            $section_3_education = !empty($education_section['section_3']) && is_array($education_section['section_3']) ? $education_section['section_3'] : [];
            ?>

            <section class="section-5">
                <div class="container">
                    <div class="title-about-us" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                        <?php if (!empty($title_education)): ?>
                            <h2>
                                <?php echo $title_education; ?>
                            </h2>
                        <?php endif; ?>
                    </div>

                    <div class="ila-premium">

                        <!-- Section 1 and 2 (row-list-ila-one) -->
                        <?php if (!empty($section_1_education) || !empty($section_2_education)): ?>
                            <div class="row row-list-ila-one" data-aos="fade-up" data-aos-delay="50"
                                data-aos-duration="800">
                                <?php if (!empty($section_1_education)): ?>
                                    <div class="col-lg-8">
                                        <div class="box-left">
                                            <?php if (!empty($section_1_education['title'])): ?>
                                                <div class="title-ila-premium">
                                                    <h3><?php echo esc_html($section_1_education['title']); ?></h3>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (!empty($section_1_education['logo_item']) && is_array($section_1_education['logo_item'])): ?>
                                                <div class="list-courses">
                                                    <div class="row list-courses__row">
                                                        <?php foreach ($section_1_education['logo_item'] as $item):
                                                            $link = !empty($item['link']) ? esc_url($item['link']) : '#';
                                                            $logo = !empty($item['logo']['url']) ? esc_url($item['logo']['url']) : '';
                                                            $alt = !empty($item['logo']['alt']) ? esc_attr($item['logo']['alt']) : '';
                                                            ?>
                                                            <div class="col-6 col-sm-3">
                                                                <div class="logo-item logo-custom">
                                                                    <a href="<?php echo $link; ?>">
                                                                        <?php if ($logo): ?>
                                                                            <img src="<?php echo $logo; ?>" alt="<?php echo $alt; ?>">
                                                                        <?php endif; ?>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($section_2_education)): ?>
                                    <div class="col-lg-4">
                                        <div class="box-right">
                                            <?php if (!empty($section_2_education['title'])): ?>
                                                <div class="title-ila-premium">
                                                    <h3><?php echo esc_html($section_2_education['title']); ?></h3>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (!empty($section_2_education['logo_item']) && is_array($section_2_education['logo_item'])): ?>
                                                <div class="list-courses">
                                                    <div class="row justify-content-center">
                                                        <?php foreach ($section_2_education['logo_item'] as $item):
                                                            $link = !empty($item['link']) ? esc_url($item['link']) : '#';
                                                            $logo = !empty($item['logo']['url']) ? esc_url($item['logo']['url']) : '';
                                                            $alt = !empty($item['logo']['alt']) ? esc_attr($item['logo']['alt']) : '';
                                                            ?>
                                                            <div class="col-sm-4 col-4">
                                                                <a href="<?php echo $link; ?>">
                                                                    <?php if ($logo): ?>
                                                                        <img src="<?php echo $logo; ?>" alt="<?php echo $alt; ?>">
                                                                    <?php endif; ?>
                                                                </a>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Section 3 (row-list-ila-two) -->
                        <?php if (!empty($section_3_education) && is_array($section_3_education)): ?>
                            <div class="row row-list-ila-two" data-aos="fade-up" data-aos-delay="50"
                                data-aos-duration="800">
                                <?php foreach ($section_3_education as $index => $item):
                                    $title = !empty($item['title']) ? $item['title'] : '';
                                    $logo_url = !empty($item['logo']['url']) ? esc_url($item['logo']['url']) : '';
                                    $alt = !empty($item['logo']['alt']) ? esc_attr($item['logo']['alt']) : '';
                                    $link = !empty($item['link']) ? esc_url($item['link']) : '#';

                                    // Xác định class cột và box theo thứ tự
                                    $col_class = 'col-sm-4';
                                    $box_class = $index === 0 ? 'box-left' : ($index === 1 ? 'box-middle' : 'box-right');
                                    ?>
                                    <div class="<?php echo esc_attr($col_class); ?>">
                                        <div class="<?php echo esc_attr($box_class); ?>">
                                            <?php if ($title): ?>
                                                <div class="title-ila-premium">
                                                    <h3><?php echo esc_html($title); ?></h3>
                                                </div>
                                            <?php endif; ?>

                                            <?php if ($logo_url): ?>
                                                <div class="list-courses">
                                                    <a href="<?php echo $link; ?>">
                                                        <img src="<?php echo $logo_url; ?>" alt="<?php echo $alt; ?>">
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="box-school-regulation" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                        <a href="https://ila.edu.vn/uploads/noiquihoctap/SchoolRegulations.pdf">Nội quy học tập</a>
                    </div>
                </div>
            </section>
            <!-- Education End -->
        </main>
    </div>
    <!-- Content End -->
</div>
<?php
get_footer();
