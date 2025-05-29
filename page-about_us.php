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
<div class="site-content-contain-xxx page-template-page-about-us">
    <!-- Content Start -->
    <div id="content" class="site-content">
        <main>
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
            $timeline_block = get_field('timeline_block');
            $heading_timeline = isset($timeline_section['title']) ? $timeline_section['title'] : '';
            $sub_heading_timeline = isset($timeline_section['sub_title']) ? $timeline_section['sub_title'] : '';
            ?>

            <section id="section-timeline" class="h--timeline js-h--timeline h--timeline--loaded">
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
                                    <?php
                                    $timeline = get_field('timeline') ?: [];
                                    ?>
                                    <div class="h--timeline-dates">
                                        <div class="h--timeline-line" style="width: 1080px;">
                                            <ol>
                                                <?php foreach ($timeline as $index => $item):
                                                    $left = 120 + $index * 120;
                                                    $is_selected = $index === 0 ? ' h--timeline-date--selected' : '';
                                                    $title_tab = htmlspecialchars($item['title_tab']);
                                                    ?>
                                                        <li>
                                                            <a href="#0" data-date="27/7/1995" class="h--timeline-date<?= $is_selected ?>"
                                                                style="left:<?= $left ?>px">
                                                              <?= $title_tab ?>
                                                            </a>
                                                        </li>
                                                <?php endforeach; ?>
                                            </ol>
                                            <span class="h--timeline-filling-line" aria-hidden="true" style="transform: scaleX(0.128993);"></span>
                                        </div> <!-- .h--timeline-line -->
                                    </div> <!-- .h--timeline-dates -->


                                    <nav class="h--timeline-navigation-container">
                                        <ul>
                                            <li><a href="#0" class="text-replace h--timeline-navigation h--timeline-navigation--prev h--timeline-navigation--inactive">Prev
                                                    <i class="fa-solid fa-chevron-left"></i></a></li>
                                            <li><a href="#0" class="text-replace h--timeline-navigation h--timeline-navigation--next h--timeline-navigation--inactive">Next
                                                    <i class="fa-solid fa-chevron-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- .h--timeline-container -->


                                <div class="h--timeline-events aos-init aos-animate" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                                    <ol>
                                        <?php
                                        $timeline = get_field('timeline') ?: [];
                                        $years = [];
                                        $index = 1;
                                        foreach ($timeline as $row) {
                                            $type = $row['display_type'] ?? 'default';
                                            $year = $row['year'] ?? '';
                                            $years[] = $year;
                                            $active_class = $index === 1 ? 'h--timeline-event--selected' : '';
                                            ?>
                                                <li class="h--timeline-event text-component <?php echo $active_class; ?>">
                                                    <div class="h--timeline-event-content timeline-<?php echo $index; ?> container">
                                                        <div class="row">
                                                            <!-- BÊN TRÁI -->
                                                            <div class="col-lg-7">
                                                                <div class="box-left">
                                                                    <div class="box-heading">
                                                                        <div class="box-years">
                                                                            <div class="list">
                                                                                <ul>
                                                                                    <?php foreach ($years as $y): ?>
                                                                                            <li class="item-1"><?php echo $y; ?></li>
                                                                                    <?php endforeach; ?>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="line"></div>
                                                                        <div class="box-content">
                                                                            <?php if ($type === 'type_1'): ?>
                                                                                    <h3><?php echo $row['type_1']['title'] ?? ''; ?></h3>
                                                                                    <p><?php echo $row['type_1']['description'] ?? ''; ?></p>
                                                                            <?php elseif ($type === 'type_2'): ?>
                                                                                    <p class="text-desc"><?php echo $row['type_2']['title'] ?? ''; ?></p>
                                                                                    <?php if (!empty($row['type_2']['list'])):
                                                                                        foreach ($row['type_2']['list'] as $item): ?>
                                                                                                    <div class="list-timeline">
                                                                                                        <div class="item">
                                                                                                            <h3 class="number"><?php echo $item['title'] ?? ''; ?></h3>
                                                                                                            <p class="text"><?php echo $item['content'] ?? ''; ?></p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                        <?php endforeach;
                                                                                    endif; ?>
                                                                            <?php elseif ($type === 'type_3'): ?>
                                                                                    <div class="row">
                                                                                        <?php if (!empty($row['type_3']['list'])):
                                                                                            foreach ($row['type_3']['list'] as $item): ?>
                                                                                                        <div class="col-md-4 col-6">
                                                                                                            <div class="box-item">
                                                                                                                <h3><?php echo $item['title'] ?? ''; ?></h3>
                                                                                                                <p><?php echo $item['content'] ?? ''; ?></p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                            <?php endforeach;
                                                                                        endif; ?>
                                                                                    </div>
                                                                            <?php else: ?>
                                                                                    <?php echo $row['default']['content'] ?? ''; ?>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                    <?php if ($type === 'type_2' || $type === 'type_3' || ($type === 'default' && !empty($row['default']['content']))): ?>
                                                                            <img width="100" height="75" class="img-dot" src="https://ila.edu.vn/wp-content/uploads/2023/05/dot-green.png" alt="">
                                                                    <?php endif; ?>
                                                                    <?php if ($type === 'type_2'): ?>
                                                                            <div class="triangle-left"></div>
                                                                            <div class="triangle-right"></div>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                            <!-- BÊN PHẢI -->
                                                            <div class="col-lg-5">
                                                                <div class="box-right">
                                                                    <?php
                                                                    $img_url = '';
                                                                    if ($type === 'type_1') {
                                                                        $img_url = $row['type_1']['image'] ?? '';
                                                                    } elseif ($type === 'type_2') {
                                                                        $img_url = $row['type_2']['image'] ?? '';
                                                                    } elseif ($type === 'type_3') {
                                                                        $img_url = $row['type_3']['image'] ?? '';
                                                                    } else {
                                                                        $img_url = $row['default']['image'] ?? '';
                                                                    }
                                                                    if ($img_url): ?>
                                                                            <img class="img-main" src="<?php echo $img_url; ?>" alt="" style="max-width:100%;height:auto;">
                                                                    <?php endif; ?>

                                                                    <?php if ($type === 'type_1'): ?>
                                                                            <img width="150" height="86" class="img-dot" src="https://ila.edu.vn/wp-content/uploads/2023/05/Frame.png" alt="">
                                                                            <img width="88" height="68" class="img-arrow" src="https://ila.edu.vn/wp-content/uploads/2023/05/arrow-arrow.png" alt="">
                                                                            <img width="149" height="16" class="arrow-bottom" src="https://ila.edu.vn/wp-content/uploads/2023/05/arrow-bottom.png" alt="">
                                                                            <div class="box-text-1995">DẤU CHÂN<br><span>ĐẦU TIÊN</span></div>
                                                                            <img width="155" height="167" class="img-ellipse" src="https://ila.edu.vn/wp-content/uploads/2023/05/ellipse.png" alt="">
                                                                    <?php endif; ?>
                                                                    <?php if ($type === 'type_3'): ?>
                                                                            <img width="79" height="31" class="img-wave" src="https://ila.edu.vn/wp-content/uploads/2023/05/wave-orange.png" alt="">
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php $index++;
                                        } ?>
                                    </ol>
                                </div>




                                <!-- .h--timeline-events -->
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
                            <h2><span style="color: #ffffff"><?php echo $title_banner_2; ?></span></h2>
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
                        <div class="row row-list-ila-one" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
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
                        <div class="row row-list-ila-two" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
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
                <a href="https://ila.edu.vn/uploads/noiquihoctap/SchoolRegulations.pdf">
                    <?php _e("Nội quy học tập", "xemer_theme"); ?></a>
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
