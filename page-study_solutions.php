<?php

/**
 * Template Name: Giải pháp du học
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

        <section class="section-main-osc" id="section-1" style="background-color: #0075A9">
            <div class="row">
                <?php
                $banner = get_field('banner');
                if ($banner):
                    $title = $banner['title'] ?? '';
                    $description = $banner['description'] ?? '';
                    $image = $banner['image'] ?? '';
                    $certification = $banner['certification'] ?? '';
                    $certificate_content = $banner['certificate_content'] ?? '';
                ?>
                    <div class="col-xl-6 col-md-12 col-12">
                        <div class="image-study-abroad">
                            <?php if ($image): ?>
                                <img width="1135" height="650" src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title ?: 'Hình ảnh giải pháp du học'); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 col-12">
                        <div class="content-main-osc">
                            <div class="content-study-abroad">
                                <?php if ($title): ?>
                                    <h1 style="color: #fff;"><?php echo esc_html($title); ?></h1>
                                <?php endif; ?>

                                <?php if ($description): ?>
                                    <p><?php echo nl2br(esc_html($description)); ?></p>
                                <?php endif; ?>

                                <?php if ($certificate_content || $certification): ?>
                                    <div class="intro-airc">
                                        <?php if ($certificate_content): ?>
                                            <div class="content-airc">
                                                <?php echo $certificate_content; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($certification): ?>
                                            <div class="logo-airc">
                                                <img width="115" height="115" src="<?php echo esc_url($certification); ?>" alt="Certification logo">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="img-pattern">
                            <img width="1794" height="603"
                                src="https://iladuhoc.edu.vn/wp-content/uploads/2024/04/background-pattern-product-list-new.png"
                                alt="background pattern product list">
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <section id="section-2" class="section-list-course">
            <div class="list-course-one-column">
                <?php
                $courses = get_field('list_course');
                if ($courses):
                    $count = 0;
                    $bg_colors = ['#fff9ec', '#fff5f5', '#faf5ff'];

                    // URLs pattern cố định, giữ nguyên như mẫu gốc bạn đưa
                    $pattern_urls = [
                        'https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-3.png', // course-1 pattern-1
                        'https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-4.png', // course-2 pattern-2
                        'https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-8.png', // course-3 pattern-4
                    ];

                    // Kích thước và class, alt pattern cố định
                    $pattern_attrs = [
                        ['width' => 151, 'height' => 207, 'alt' => 'background pattern 3', 'class' => 'pattern pattern-1'],
                        ['width' => 145, 'height' => 313, 'alt' => 'background pattern 4', 'class' => 'pattern pattern-2'],
                        ['width' => 119, 'height' => 119, 'alt' => 'background pattern 8', 'class' => 'pattern pattern-4'],
                    ];

                    foreach ($courses as $course):
                        if ($count >= 3) break;
                        $width = $pattern_attrs[$count]['width'];
                        $height = $pattern_attrs[$count]['height'];
                        $alt = $pattern_attrs[$count]['alt'];
                        $pattern_class = $pattern_attrs[$count]['class'];
                        $pattern_src = $pattern_urls[$count];

                        $count++;
                        $title = esc_html($course['title']);
                        $description = wp_kses_post($course['description']);
                        $image = esc_url($course['image']); // ảnh lớn bên trái
                        $thumbnail = esc_url($course['thumbnail']); // ảnh nhỏ cho course 1 đứng trước tiêu đề
                        $link = esc_url($course['link']); // link xem thêm
                        $course_class = 'course-' . $count;
                        $bg_color = $bg_colors[$count - 1];
                ?>
                        <div class="course-item <?php echo $course_class; ?>">
                            <style type="text/css">
                                .<?php echo $course_class; ?>::before {
                                    background: <?php echo $bg_color; ?>;
                                }
                            </style>
                            <!-- Ảnh pattern cố định, đúng width/height/class/alt và src cố định -->
                            <img width="<?php echo $width; ?>" height="<?php echo $height; ?>"
                                class="<?php echo $pattern_class; ?>" src="<?php echo $pattern_src; ?>" alt="<?php echo $alt; ?>">

                            <div class="container">
                                <div class="course-main">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="course-thumb">
                                                <?php if ($image): ?>
                                                    <img width="839" height="714" src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="course-content">

                                                <?php if ($count === 1 && $thumbnail): ?>
                                                    <p><img decoding="async" class="alignnone size-full wp-image-538"
                                                            src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>" width="108" height="75"></p>
                                                <?php endif; ?>

                                                <h2><?php echo $title; ?></h2>
                                                <p><?php echo $description; ?></p>
                                                <div class="course-button">
                                                    <button class="btn-register"><a href="<?php echo $link ?: '#'; ?>"><?php _e(" Xem thêm", "xemer_theme"); ?></a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach;
                endif; ?>

                <?php
                $study_abroad = get_field('study_abroad_experience');
                if ($study_abroad):
                    $list = $study_abroad['list'];
                ?>
                    <div class="list-course-two-column">
                        <style type="text/css">
                            .list-course-two-column::before {
                                background: #f0f4ff;
                            }
                        </style>
                        <img width="92" height="122" class="img-pattern"
                            src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-5.png"
                            alt="images pattern">
                        <img width="192" height="207" class="img-pattern no-mobile"
                            src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-6.png"
                            alt="images pattern">
                        <div class="container">
                            <div class="title-main-course">
                                <h2><?php echo esc_html($study_abroad['title']); ?></h2>
                            </div>
                            <div class="list-course">
                                <div class="row">
                                    <?php
                                    if ($list):
                                        foreach ($list as $item):
                                    ?>
                                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                                <div class="course-item">
                                                    <div class="course-thumb">
                                                        <?php if (!empty($item['image'])): ?>
                                                            <img width="644" height="515" src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="course-content">
                                                        <h3><?php echo esc_html($item['title']); ?></h3>
                                                        <p><?php echo nl2br(esc_html($item['description'])); ?></p>
                                                        <?php if (!empty($item['link'])): ?>
                                                            <div class="course-button">
                                                                <button class="btn-register">
                                                                    <a href="<?php echo esc_url($item['link']); ?>"><?php _e(" Xem thêm", "xemer_theme"); ?></a>
                                                                </button>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php endforeach;
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </section>
    </div><!-- #content -->
</div>

<?php
$sign_up_for_consultation = get_field('sign_up_for_consultation' . $lang, 'option') ?? null;
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
