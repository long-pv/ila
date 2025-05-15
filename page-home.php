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
                                                            <option value="193">3-6 tuổi</option>
                                                            <option value="199">6-11 tuổi</option>
                                                            <option value="203">11-16 tuổi</option>
                                                            <option value="1210">Người đi làm</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-5 col-xl-5">
                                                    <div class="ps-relative customer-course-option">
                                                        <div class="icon-form">
                                                            <img src="<?php echo THEME_URI . '/assets/'; ?>images/book.png" alt="icon" width="24"
                                                                height="24">
                                                        </div>
                                                        <select name="your_option" id="your_option">
                                                            <option selected="" value="0"
                                                                data-src="https://ila.edu.vn/wp-content/uploads/2023/07/thumb-default.png">
                                                                Chương trình học</option>
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
                                                                <a href="<?php echo $item['link']; ?>" style="color: #fff;font-size: 24px;font-weight: 700;">
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
            <section id="section-3" class="section-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-blog" data-aos="fade-up" data-aos-delay="50"
                                data-aos-duration="800">
                                <div class="title-blog">
                                    <h2>ILAVerse</h2>
                                    <button>
                                        <a href="https://ila.edu.vn/ilaverse">Xem tất cả <i
                                                class="fa-regular fa-arrow-right"></i></a>
                                    </button>
                                </div>
                                <span class="quote-heading">Chào mừng bạn đến với thế giới của ILAVerse – nơi
                                    bạn có thể tìm thấy tất cả bí quyết học tiếng Anh, mẹo nuôi dạy và chăm sóc
                                    con cái… để con trưởng thành hơn mỗi ngày.</span>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                        <div class="col-xl-6 col-md-6">
                            <div class="blog-main blog-first">
                                <div class="blog-thumbnail">
                                    <a href="https://ila.edu.vn/ila-ra-mat-trai-he-studycation-cho-gen-alpha"><img
                                            width="885" height="588"
                                            src="<?php echo THEME_URI . '/assets/'; ?>images/ila-gioi-tieng-anh-thoi-chua-du-con-ban-can-gi-de-but-pha-2.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                            alt="ILA ra mắt trại hè " studycation"="" đỉnh="" nóc="" kịch=""
                                            trần="" dành="" cho="" gen="" alpha"="" decoding="async"
                                            loading="lazy"
                                            srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-gioi-tieng-anh-thoi-chua-du-con-ban-can-gi-de-but-pha-2.jpg 885w,<?php echo THEME_URI . '/assets/'; ?>images/ila-gioi-tieng-anh-thoi-chua-du-con-ban-can-gi-de-but-pha-2-300x199.jpg 300w,<?php echo THEME_URI . '/assets/'; ?>images/ila-gioi-tieng-anh-thoi-chua-du-con-ban-can-gi-de-but-pha-2-768x510.jpg 768w"
                                            sizes="100vw"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-content-title">
                                        <h3><a
                                                href="https://ila.edu.vn/ila-ra-mat-trai-he-studycation-cho-gen-alpha">ILA
                                                ra mắt trại hè Studycation đỉnh nóc kịch trần dành cho gen
                                                Alpha</a></h3>
                                    </div>
                                    <div class="blog-archive arrow-before">
                                        <span><a href="https://ila.edu.vn/tin-tuc-su-kien">Tin tức sự
                                                kiện</a></span>
                                    </div>
                                    <div class="blog-content-description">
                                        Mùa hè không chỉ để vui chơi  đó là thời điểm vàng để con bứt phá! Bạn
                                        đã tìm được trại hè vừa học, vừa “chill”, vừa mở rộng thế giới quan,
                                        giúp con rèn luyện kỹ năng, tư duy và bản lĩnh để& </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="blog-main">
                                            <div class="blog-thumbnail">
                                                <a
                                                    href="https://ila.edu.vn/ila-mo-rong-tai-nha-trang-dinh-hinh-the-he-toan-cau"><img
                                                        width="885" height="588"
                                                        src="<?php echo THEME_URI . '/assets/'; ?>images/ila-mo-rong-tai-nha-trang-dinh-hinh-the-he-toan-cau-4.jpg"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="Cắt băng khánh thành khai trương ILA Thích Quảng Đức"
                                                        decoding="async" loading="lazy"
                                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-mo-rong-tai-nha-trang-dinh-hinh-the-he-toan-cau-4.jpg 885w,<?php echo THEME_URI . '/assets/'; ?>images/ila-mo-rong-tai-nha-trang-dinh-hinh-the-he-toan-cau-4-300x199.jpg 300w,<?php echo THEME_URI . '/assets/'; ?>images/ila-mo-rong-tai-nha-trang-dinh-hinh-the-he-toan-cau-4-768x510.jpg 768w"
                                                        sizes="100vw"></a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-content-title">
                                                    <h3><a
                                                            href="https://ila.edu.vn/ila-mo-rong-tai-nha-trang-dinh-hinh-the-he-toan-cau">ILA
                                                            mở rộng tại Nha Trang: Định hình thế hệ toàn cầu</a>
                                                    </h3>
                                                </div>
                                                <div class="blog-archive arrow-before">
                                                    <span><a href="https://ila.edu.vn/tin-tuc-su-kien">Tin tức
                                                            sự kiện</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="blog-main">
                                            <div class="blog-thumbnail">
                                                <a
                                                    href="https://ila.edu.vn/gioi-tieng-anh-thoi-chua-du-con-ban-can-gi-de-but-pha"><img
                                                        width="885" height="588"
                                                        src="<?php echo THEME_URI . '/assets/'; ?>images/ila-gioi-tieng-anh-thoi-chua-du-con-ban-can-gi-de-but-pha-1.jpg"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="Giỏi tiếng Anh thôi chưa đủ – Con bạn cần gì để bứt phá?"
                                                        decoding="async" loading="lazy"
                                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-gioi-tieng-anh-thoi-chua-du-con-ban-can-gi-de-but-pha-1.jpg 885w,<?php echo THEME_URI . '/assets/'; ?>images/ila-gioi-tieng-anh-thoi-chua-du-con-ban-can-gi-de-but-pha-1-300x199.jpg 300w,<?php echo THEME_URI . '/assets/'; ?>images/ila-gioi-tieng-anh-thoi-chua-du-con-ban-can-gi-de-but-pha-1-768x510.jpg 768w"
                                                        sizes="100vw"></a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-content-title">
                                                    <h3><a
                                                            href="https://ila.edu.vn/gioi-tieng-anh-thoi-chua-du-con-ban-can-gi-de-but-pha">Giỏi
                                                            tiếng Anh thôi chưa đủ – Con bạn cần gì để bứt
                                                            phá?</a></h3>
                                                </div>
                                                <div class="blog-archive arrow-before">
                                                    <span><a href="https://ila.edu.vn/tin-tuc-su-kien">Tin tức
                                                            sự kiện</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="blog-main">
                                            <div class="blog-thumbnail">
                                                <a
                                                    href="https://ila.edu.vn/du-hoc-my-bac-trung-hoc-tao-loi-the-vao-dai-hoc-top-50"><img
                                                        width="885" height="588"
                                                        src="<?php echo THEME_URI . '/assets/'; ?>images/ila-mini-fair-19-4-2025.jpg"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="Du học Mỹ bậc trung học: Tạo lợi thế vào đại học Top 50"
                                                        decoding="async" loading="lazy"
                                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-mini-fair-19-4-2025.jpg 885w,<?php echo THEME_URI . '/assets/'; ?>images/ila-mini-fair-19-4-2025-300x199.jpg 300w,<?php echo THEME_URI . '/assets/'; ?>images/ila-mini-fair-19-4-2025-768x510.jpg 768w"
                                                        sizes="100vw"></a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-content-title">
                                                    <h3><a
                                                            href="https://ila.edu.vn/du-hoc-my-bac-trung-hoc-tao-loi-the-vao-dai-hoc-top-50">Du
                                                            học Mỹ bậc trung học: Tạo lợi thế vào đại học Top
                                                            50</a></h3>
                                                </div>
                                                <div class="blog-archive arrow-before">
                                                    <span><a href="https://ila.edu.vn/tin-tuc-su-kien">Tin tức
                                                            sự kiện</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="blog-main">
                                            <div class="blog-thumbnail">
                                                <a href="https://ila.edu.vn/ila-du-hoc-flash-live-2025"><img
                                                        width="855" height="588"
                                                        src="<?php echo THEME_URI . '/assets/'; ?>images/ila-du-hoc-flash-live-2025-1.jpg"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="ILA Du học Flash Live" decoding="async"
                                                        loading="lazy"
                                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-du-hoc-flash-live-2025-1.jpg 855w,<?php echo THEME_URI . '/assets/'; ?>images/ila-du-hoc-flash-live-2025-1-300x206.jpg 300w,<?php echo THEME_URI . '/assets/'; ?>images/ila-du-hoc-flash-live-2025-1-768x528.jpg 768w"
                                                        sizes="100vw"></a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-content-title">
                                                    <h3><a href="https://ila.edu.vn/ila-du-hoc-flash-live-2025">Livestream
                                                            ILA Du học hè 2025: Quà tặng lên đến 300 triệu</a>
                                                    </h3>
                                                </div>
                                                <div class="blog-archive arrow-before">
                                                    <span><a href="https://ila.edu.vn/tin-tuc-su-kien">Tin tức
                                                            sự kiện</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
                                                <h2><a href="https://ila.edu.vn/video">MULTIMEDIA</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="multimedia-list list-videos active" data-list="1" data-bg="#cb999a">
                            <div class="row">
                                <div class="col-md-12 col-xl-6">
                                    <div class="video-item video-first">
                                        <a class="open-popup"
                                            href="https://www.youtube.com/watch?v=k_xKtmaHY_0">
                                            <img width="885" height="590"
                                                src="<?php echo THEME_URI . '/assets/'; ?>images/ila-khai-truong-ila-thich-quang-duc-nha-trang-website-e1745814336689.jpg"
                                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                alt="Khai trương ILA Thích Quảng Đức - Nha Trang"
                                                decoding="async" loading="lazy" sizes="100vw"> </a>
                                        <div class="video-content">
                                            <h3>
                                                <a
                                                    href="https://ila.edu.vn/khai-truong-ila-thich-quang-duc-nha-trang">Khai
                                                    trương ILA Thích Quảng Đức, trung tâm 73 trên toàn quốc</a>
                                            </h3>
                                        </div>
                                        <div class="video-archive">
                                            <span>
                                                <a href="https://ila.edu.vn/video">MULTIMEDIA</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-6">
                                    <div class="row">
                                        <div class="col-md-6 col-xl-6">
                                            <div class="video-item">
                                                <div class="row">
                                                    <div class="col-xl-12 col-12 col-md-12">
                                                        <a class="open-popup"
                                                            href="https://www.youtube.com/watch?v=EsDi3rUX3RU">
                                                            <img width="885" height="590"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/ila-ba-ria-vung-tau-vinh-danh-200-hoc-sinh-dat-chung-chi-cambridge-e1744590456188.jpeg"
                                                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                alt="ILA Bà Rịa – Vũng Tàu đã tổ chức Lễ trao học bổng và chứng chỉ Cambridge 2025."
                                                                decoding="async" loading="lazy" sizes="100vw">
                                                        </a>
                                                        <div class="video-content">
                                                            <h3>
                                                                <a
                                                                    href="https://ila.edu.vn/ila-ba-ria-vung-tau-vinh-danh-200-hoc-sinh-dat-chung-chi-cambridge-va-trao-100-suat-hoc-bong">ILA
                                                                    Bà Rịa  Vũng Tàu vinh danh 200 học sinh đạt
                                                                    chứng chỉ Cambridge và trao 100 suất học
                                                                    bổng</a>
                                                            </h3>
                                                        </div>
                                                        <div class="video-archive">
                                                            <span>
                                                                <a
                                                                    href="https://ila.edu.vn/video">MULTIMEDIA</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-6">
                                            <div class="video-item">
                                                <div class="row">
                                                    <div class="col-xl-12 col-12 col-md-12">
                                                        <a class="open-popup"
                                                            href="https://www.youtube.com/watch?v=9MO7Qn9BEEA">
                                                            <img width="885" height="590"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/ila-nga-hoi-du-hoc-va-huong-nghiep-ila-2025-1-e1743728221904.jpg"
                                                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                alt="Ngày hội du học ILA 2025: Cơ hội thực hiện hóa giấc mơ du học"
                                                                decoding="async" loading="lazy" sizes="100vw">
                                                        </a>
                                                        <div class="video-content">
                                                            <h3>
                                                                <a
                                                                    href="https://ila.edu.vn/ngay-hoi-du-hoc-ila-2025-co-hoi-thuc-hien-hoa-giac-mo-du-hoc">Ngày
                                                                    hội du học ILA 2025: Cơ hội thực hiện hóa
                                                                    giấc mơ du học</a>
                                                            </h3>
                                                        </div>
                                                        <div class="video-archive">
                                                            <span>
                                                                <a
                                                                    href="https://ila.edu.vn/video">MULTIMEDIA</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-6">
                                            <div class="video-item">
                                                <div class="row">
                                                    <div class="col-xl-12 col-12 col-md-12">
                                                        <a class="open-popup"
                                                            href="https://www.youtube.com/watch?v=sPtu-7yOdq0">
                                                            <img width="1500" height="1000"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/khai-truong-ila-vo-van-kiet-quan-6.jpg"
                                                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                alt="ILA Võ Văn Kiệt" decoding="async"
                                                                loading="lazy"
                                                                srcset="<?php echo THEME_URI . '/assets/'; ?>images/khai-truong-ila-vo-van-kiet-quan-6.jpg 1500w,<?php echo THEME_URI . '/assets/'; ?>images/khai-truong-ila-vo-van-kiet-quan-6-300x200.jpg 300w,<?php echo THEME_URI . '/assets/'; ?>images/khai-truong-ila-vo-van-kiet-quan-6-1024x683.jpg 1024w,<?php echo THEME_URI . '/assets/'; ?>images/khai-truong-ila-vo-van-kiet-quan-6-768x512.jpg 768w"
                                                                sizes="100vw"> </a>
                                                        <div class="video-content">
                                                            <h3>
                                                                <a
                                                                    href="https://ila.edu.vn/ilo-vo-van-kiet-canh-cua-hoi-nhap-cho-the-he-tre-quan-6-tp-hcm">ILA
                                                                    Võ Văn Kiệt: Cánh cửa hội nhập cho thế hệ
                                                                    trẻ quận 6, TP. HCM</a>
                                                            </h3>
                                                        </div>
                                                        <div class="video-archive">
                                                            <span>
                                                                <a
                                                                    href="https://ila.edu.vn/video">MULTIMEDIA</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-6">
                                            <div class="video-item">
                                                <div class="row">
                                                    <div class="col-xl-12 col-12 col-md-12">
                                                        <a class="open-popup"
                                                            href="https://www.youtube.com/watch?v=E4xBuVOP1YA">
                                                            <img width="1500" height="970"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/khai-truong-ila-nguyen-duy-trinh-1.jpg"
                                                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                                alt="khai trương ila nguyễn duy trinh"
                                                                decoding="async" loading="lazy"
                                                                srcset="<?php echo THEME_URI . '/assets/'; ?>images/khai-truong-ila-nguyen-duy-trinh-1.jpg 1500w,<?php echo THEME_URI . '/assets/'; ?>images/khai-truong-ila-nguyen-duy-trinh-1-300x194.jpg 300w,<?php echo THEME_URI . '/assets/'; ?>images/khai-truong-ila-nguyen-duy-trinh-1-1024x662.jpg 1024w,<?php echo THEME_URI . '/assets/'; ?>images/khai-truong-ila-nguyen-duy-trinh-1-768x497.jpg 768w"
                                                                sizes="100vw"> </a>
                                                        <div class="video-content">
                                                            <h3>
                                                                <a
                                                                    href="https://ila.edu.vn/ila-khai-truong-trung-tam-thu-70-ila-nguyen-duy-trinh">ILA
                                                                    khai trương trung tâm thứ 70: ILA Nguyễn Duy
                                                                    Trinh</a>
                                                            </h3>
                                                        </div>
                                                        <div class="video-archive">
                                                            <span>
                                                                <a
                                                                    href="https://ila.edu.vn/video">MULTIMEDIA</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-5" class="section-hall-of-greatness" data-aos="fade-up" data-aos-delay="50"
                data-aos-duration="800">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="title-blog">
                                <h2>GƯƠNG MẶT XUẤT SẮC</h2>
                                <button><a href="https://ila.edu.vn/guong-mat-xuat-sac">Xem tất cả <i
                                            class="fa-regular fa-arrow-right"></i></a></button>
                            </div>
                        </div>
                    </div>
                    <div class="hall-owl-slider owl-carousel owl-theme">
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/ho-Tue-Man-OLA-Ha-Huy-Giap.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Hồ Tuệ Mẫn" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ho-Tue-Man-OLA-Ha-Huy-Giap.png 433w,<?php echo THEME_URI . '/assets/'; ?>images/ho-Tue-Man-OLA-Ha-Huy-Giap-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Hồ Tuệ Mẫn</a></h3>
                                <p style="font-size: 16px;"><span>OLA Hà Huy Giáp</span></p>
                                <p>15/15 khiên chứng chỉ Flyers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/le-Minh-Khang-Tran-Nao.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Lê Minh Khang" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/le-Minh-Khang-Tran-Nao.png 433w,<?php echo THEME_URI . '/assets/'; ?>images/le-Minh-Khang-Tran-Nao-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Lê Minh Khang</a></h3>
                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                <p>15/15 khiên chứng chỉ Flyers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/huynh-hoang-Viet-Han-ILA-Mac-Dinh-Chi.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Huỳnh Hoàng Việt Hân" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/huynh-hoang-Viet-Han-ILA-Mac-Dinh-Chi.png 433w,<?php echo THEME_URI . '/assets/'; ?>images/huynh-hoang-Viet-Han-ILA-Mac-Dinh-Chi-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Huỳnh Hoàng Việt Hân</a></h3>
                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                <p>15/15 khiên chứng chỉ Flyers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-Tien-Dung-Nguyen-Xi.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Tiến Dũng" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-Tien-Dung-Nguyen-Xi.png 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-Tien-Dung-Nguyen-Xi-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Tiến Dũng</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Xí</span></p>
                                <p>15/15 khiên chứng chỉ Flyers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/Tran-Diep-Anh-VT.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Trần Diệp Anh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Tran-Diep-Anh-VT.png 433w,<?php echo THEME_URI . '/assets/'; ?>images/Tran-Diep-Anh-VT-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trần Diệp Anh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Vũng Tàu </span></p>
                                <p>15/15 khiên chứng chỉ Flyers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/tran-Tue-Anh-PMH.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Trần Tuệ Anh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/tran-Tue-Anh-PMH.png 433w,<?php echo THEME_URI . '/assets/'; ?>images/tran-Tue-Anh-PMH-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trần Tuệ Anh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                <p>15/15 khiên chứng chỉ Flyers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/truong-gia-tuong-PMH.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Trương Gia Tường" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/truong-gia-tuong-PMH.png 433w,<?php echo THEME_URI . '/assets/'; ?>images/truong-gia-tuong-PMH-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trương Gia Tường</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                <p>15/15 khiên chứng chỉ Flyers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tran-Minh-Anh-PMH.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Trần Minh Anh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tran-Minh-Anh-PMH.png 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tran-Minh-Anh-PMH-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Trần Minh Anh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                <p>15/15 khiên chứng chỉ Flyers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/Chau-Ngoc-Quyen-Hoa-Binh.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Châu Ngọc Quyên" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Chau-Ngoc-Quyen-Hoa-Binh.png 433w,<?php echo THEME_URI . '/assets/'; ?>images/Chau-Ngoc-Quyen-Hoa-Binh-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Châu Ngọc Quyên</a></h3>
                                <p style="font-size: 16px;"><span>ILA Hòa Bình</span></p>
                                <p>15/15 khiên chứng chỉ Flyers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/truong-hoang-bao-an-ila-phu-lam.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Trương Hoàng Bảo An" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/truong-hoang-bao-an-ila-phu-lam.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/truong-hoang-bao-an-ila-phu-lam-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trương Hoàng Bảo An</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/vo-thao-nguyen-ila-mac-dinh-chi.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Võ Thảo Nguyên" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/vo-thao-nguyen-ila-mac-dinh-chi.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/vo-thao-nguyen-ila-mac-dinh-chi-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Võ Thảo Nguyên</a></h3>
                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/tran-tuong-quan-ila-mac-dinh-chi.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Trần Tường Quân" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/tran-tuong-quan-ila-mac-dinh-chi.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/tran-tuong-quan-ila-mac-dinh-chi-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trần Tường Quân</a></h3>
                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/van-pham-due-tram-ila-tan-phu.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Văn Phạm Duệ Trầm" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/van-pham-due-tram-ila-tan-phu.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/van-pham-due-tram-ila-tan-phu-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Văn Phạm Duệ Trầm</a></h3>
                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/pham-huynh-tu-anh-ila-phu-lam.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Phạm Huỳnh Tú Anh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/pham-huynh-tu-anh-ila-phu-lam.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/pham-huynh-tu-anh-ila-phu-lam-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Phạm Huỳnh Tú Anh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/thai-thien-kim-ila-phu-lam.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Thái Thiên Kim" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/thai-thien-kim-ila-phu-lam.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/thai-thien-kim-ila-phu-lam-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Thái Thiên Kim</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-uyen-vy-ila-phu-lam.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Uyên Vy" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-uyen-vy-ila-phu-lam.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-uyen-vy-ila-phu-lam-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Uyên Vy</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tran-minh-khoi-ila-pmh.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Trần Minh Khôi" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tran-minh-khoi-ila-pmh.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tran-minh-khoi-ila-pmh-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Trần Minh Khôi</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/pham-nguyen-thao-my-ila-phan-van-tri.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Phạm Nguyễn Thảo My" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/pham-nguyen-thao-my-ila-phan-van-tri.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/pham-nguyen-thao-my-ila-phan-van-tri-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Phạm Nguyễn Thảo My</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phan Văn Trị</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/tran-trong-khoi-ila-pmh.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Trần Trọng Khôi" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/tran-trong-khoi-ila-pmh.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/tran-trong-khoi-ila-pmh-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trần Trọng Khôi</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-phuc-van-ila-nguyen-trai.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Phúc Văn" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-phuc-van-ila-nguyen-trai.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-phuc-van-ila-nguyen-trai-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Phúc Văn</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tat-minh-khang-ila-mac-dinh-chi.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Tất Minh Khang" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tat-minh-khang-ila-mac-dinh-chi.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tat-minh-khang-ila-mac-dinh-chi-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Tất Minh Khang</a></h3>
                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-nhat-bao-anh-ila-pmh.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Nhật Bảo Anh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-nhat-bao-anh-ila-pmh.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-nhat-bao-anh-ila-pmh-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Nhật Bảo Anh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-minh-triet-ila-mac-dinh-chi.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Minh Triết" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-minh-triet-ila-mac-dinh-chi.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-minh-triet-ila-mac-dinh-chi-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Minh Triết</a></h3>
                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/luong-ngoc-mai-ila-nguyen-trai.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Lương Ngọc Mai" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/luong-ngoc-mai-ila-nguyen-trai.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/luong-ngoc-mai-ila-nguyen-trai-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Lương Ngọc Mai</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/ly-manh-ky-ila-phu-lam.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Lý Mạnh Kỳ" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ly-manh-ky-ila-phu-lam.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/ly-manh-ky-ila-phu-lam-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Lý Mạnh Kỳ</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/le-thanh-phu-ila-nguyen-xi.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Lê Thanh Phú" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/le-thanh-phu-ila-nguyen-xi.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/le-thanh-phu-ila-nguyen-xi-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Lê Thanh Phú</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Xí</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/le-quan-bao-ila-nguyen-trai.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Lê Quân Bảo" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/le-quan-bao-ila-nguyen-trai.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/le-quan-bao-ila-nguyen-trai-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Lê Quân Bảo</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/le-duc-minh-khoi-ila-phu-lam.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Lê Đức Minh Khôi" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/le-duc-minh-khoi-ila-phu-lam.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/le-duc-minh-khoi-ila-phu-lam-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Lê Đức Minh Khôi</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/le-an-bao-ila-nguyen-trai.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Lê An Bảo" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/le-an-bao-ila-nguyen-trai.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/le-an-bao-ila-nguyen-trai-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Lê An Bảo</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tang-khanh-an-ila-nguyen-trai.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Tăng Khánh An" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tang-khanh-an-ila-nguyen-trai.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tang-khanh-an-ila-nguyen-trai-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Tăng Khánh An</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/huynh-ngoc-minh-khanh-ila-phu-lam.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Huỳnh Ngọc Minh Khánh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/huynh-ngoc-minh-khanh-ila-phu-lam.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/huynh-ngoc-minh-khanh-ila-phu-lam-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Huỳnh Ngọc Minh Khánh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/ho-my-anh-ila-pmh.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Hồ Mỹ Anh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ho-my-anh-ila-pmh.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/ho-my-anh-ila-pmh-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Hồ Mỹ Anh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/phan-le-duc-nghi-ila-tan-phu.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Phan Lê Đức Nghi" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/phan-le-duc-nghi-ila-tan-phu.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/phan-le-duc-nghi-ila-tan-phu-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Phan Lê Đức Nghi</a></h3>
                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/dinh-le-uyen-nhi-ila-nguyen-trai.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Đinh Lê Uyên Nhi" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/dinh-le-uyen-nhi-ila-nguyen-trai.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/dinh-le-uyen-nhi-ila-nguyen-trai-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Đinh Lê Uyên Nhi</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/dao-an-binh-ila-tan-phu.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Đào An Bình" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/dao-an-binh-ila-tan-phu.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/dao-an-binh-ila-tan-phu-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Đào An Bình</a></h3>
                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/tran-dang-khoa-ila-pham-hung.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Trần Đặng Khoa" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/tran-dang-khoa-ila-pham-hung.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/tran-dang-khoa-ila-pham-hung-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trần Đặng Khoa</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phạm Hùng</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/dang-bao-han-ila-tran-nao.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Đặng Bảo Hân" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/dang-bao-han-ila-tran-nao.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/dang-bao-han-ila-tran-nao-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Đặng Bảo Hân</a></h3>
                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/hoang-cao-minh-ila-mac-dinh-chi.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Hoàng Cao Minh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/hoang-cao-minh-ila-mac-dinh-chi.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/hoang-cao-minh-ila-mac-dinh-chi-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Hoàng Cao Minh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/cao-duong-phuoc-khang-ila-phu-lam.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Cao Dương Phước Khang" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/cao-duong-phuoc-khang-ila-phu-lam.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/cao-duong-phuoc-khang-ila-phu-lam-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Cao Dương Phước Khang</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-ngoc-bich-tram-ila-pmh.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Ngọc Bích Trâm" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-ngoc-bich-tram-ila-pmh.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-ngoc-bich-tram-ila-pmh-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Ngọc Bích Trâm</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/huynh-bao-nam-ila-tan-phu.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Huỳnh Bảo Nam" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/huynh-bao-nam-ila-tan-phu.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/huynh-bao-nam-ila-tan-phu-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Huỳnh Bảo Nam</a></h3>
                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                <p>15/15 khiên chứng chỉ Movers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-vu-loc.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Vũ Lộc" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-vu-loc.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-vu-loc-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Vũ Lộc</a></h3>
                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/Vo-Quynh-Nhu.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Võ Quỳnh Như" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Vo-Quynh-Nhu.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/Vo-Quynh-Nhu-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Võ Quỳnh Như</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phạm Hùng</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/tho-tong-quan.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Thọ Tòng Quân" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/tho-tong-quan.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/tho-tong-quan-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Thọ Tòng Quân</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/ta-thien-thanh.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Đặng Thiên Thanh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ta-thien-thanh.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/ta-thien-thanh-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Đặng Thiên Thanh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/ta-quang-thien-phuc.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Tạ Quang Thiên Phúc" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ta-quang-thien-phuc.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/ta-quang-thien-phuc-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Tạ Quang Thiên Phúc</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-dang-quynh-anh.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Đặng Quỳnh Anh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-dang-quynh-anh.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-dang-quynh-anh-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Đặng Quỳnh Anh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tan-dat.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Tấn Đạt" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tan-dat.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-tan-dat-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Tấn Đạt</a></h3>
                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/Sofia.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Sofia Nguyễn Leboutillier" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Sofia.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/Sofia-254x300.jpg 254w" sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Sofia Nguyễn Leboutillier</a></h3>
                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-thanh-binh.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Thanh Bình" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-thanh-binh.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-thanh-binh-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Thanh Bình</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/tran-phuong-nghi.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Trần Phương Nghi" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/tran-phuong-nghi.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/tran-phuong-nghi-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trần Phương Nghi</a></h3>
                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/Phan-Hoang-Bach.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Phan Hoàng Bách" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Phan-Hoang-Bach.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/Phan-Hoang-Bach-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Phan Hoàng Bách</a></h3>
                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/Nguyen-Khang.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Khang" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Nguyen-Khang.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/Nguyen-Khang-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Khang</a></h3>
                                <p style="font-size: 16px;"><span>ILA Cộng Hòa</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/ha-le-nguyen-chuong.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Hà Lê Nguyên Chương" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ha-le-nguyen-chuong.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/ha-le-nguyen-chuong-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Hà Lê Nguyên Chương</a></h3>
                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                <p>15/15 khiên chứng chỉ Starters </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/phan-nguyen-ngoc-khue.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Phan Nguyễn Ngọc Khuê" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/phan-nguyen-ngoc-khue.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/phan-nguyen-ngoc-khue-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Phan Nguyễn Ngọc Khuê</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-hong-minh-khue.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Hồng Minh Khuê" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-hong-minh-khue.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-hong-minh-khue-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Hồng Minh Khuê</a></h3>
                                <p style="font-size: 16px;"><span>ILA Vincom Thủ Đức</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/pham-nguyen-mai-thy.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Phạm Nguyễn Mai Thy" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/pham-nguyen-mai-thy.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/pham-nguyen-mai-thy-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Phạm Nguyễn Mai Thy</a></h3>
                                <p style="font-size: 16px;"><span>ILA Lê Văn Việt</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-lu-lam.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Lữ Lâm" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-lu-lam.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-lu-lam-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Lữ Lâm</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Ảnh Thủ</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-ngoc-khanh-chi.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Ngọc Khánh Chi" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-ngoc-khanh-chi.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-ngoc-khanh-chi-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Ngọc Khánh Chi</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/huynh-nguyen-huu-dinh.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Huỳnh Nguyễn Hữu Định" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/huynh-nguyen-huu-dinh.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/huynh-nguyen-huu-dinh-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Huỳnh Nguyễn Hữu Định</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-vo-hong-ngoc.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Võ Hồng Ngọc" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-vo-hong-ngoc.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-vo-hong-ngoc-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Võ Hồng Ngọc</a></h3>
                                <p style="font-size: 16px;"><span>OLA Nhà Bè</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/pham-lac-hong-anh.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Phạm Lạc Hồng Anh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/pham-lac-hong-anh.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/pham-lac-hong-anh-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Phạm Lạc Hồng Anh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                <p>15/15 khiên chứng chỉ Starters </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/ta-hoang-danh.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Tạ Hoàng Danh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ta-hoang-danh.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/ta-hoang-danh-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Tạ Hoàng Danh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/le-anh-minh.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Lê Ánh Minh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/le-anh-minh.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/le-anh-minh-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Lê Ánh Minh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/Tran-le-bao-ngoc.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Trần Lê Bảo Ngọc" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Tran-le-bao-ngoc.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/Tran-le-bao-ngoc-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trần Lê Bảo Ngọc</a></h3>
                                <p style="font-size: 16px;"><span>OLA Nhà Bè</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-huu-bao-lam.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Hữu Bảo Lâm" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-huu-bao-lam.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-huu-bao-lam-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Hữu Bảo Lâm</a></h3>
                                <p style="font-size: 16px;"><span>OLA Hà Huy Giáp</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/dang-minh-bao-chau.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Đặng Minh Bảo Châu" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/dang-minh-bao-chau.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/dang-minh-bao-chau-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Đặng Minh Bảo Châu</a></h3>
                                <p style="font-size: 16px;"><span>ILA Trần Não </span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="433" height="512" src="<?php echo THEME_URI . '/assets/'; ?>images/dao-duy-anh.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Đào Duy Anh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/dao-duy-anh.jpg 433w,<?php echo THEME_URI . '/assets/'; ?>images/dao-duy-anh-254x300.jpg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Đào Duy Anh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                <p>15/15 khiên chứng chỉ Starters </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/minh-anh-pham-hung.jpeg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Trương Minh Anh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/minh-anh-pham-hung.jpeg 448w,<?php echo THEME_URI . '/assets/'; ?>images/minh-anh-pham-hung-254x300.jpeg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trương Minh Anh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phạm Hùng</span></p>
                                <p>15/15 khiên chứng chỉ Flyers </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/ila-nguyen-hoang-thien-trang-pvt.jpeg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Hoàng Thiên Trang" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-nguyen-hoang-thien-trang-pvt.jpeg 448w,<?php echo THEME_URI . '/assets/'; ?>images/ila-nguyen-hoang-thien-trang-pvt-254x300.jpeg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Hoàng Thiên Trang</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phan Văn Trị</span></p>
                                <p>15/15 khiên chứng chỉ Flyers </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/ila-inari-anh-tuan-cong-hoa.jpeg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="INARI Anh Tuấn" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-inari-anh-tuan-cong-hoa.jpeg 448w,<?php echo THEME_URI . '/assets/'; ?>images/ila-inari-anh-tuan-cong-hoa-254x300.jpeg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">INARI Anh Tuấn</a></h3>
                                <p style="font-size: 16px;"><span>ILA Cộng Hòa</span></p>
                                <p>15/15 khiên chứng chỉ Flyers </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/ila-tong-phan-minh-bao-him-lam.jpeg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Tông Phan Minh Bảo" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-tong-phan-minh-bao-him-lam.jpeg 448w,<?php echo THEME_URI . '/assets/'; ?>images/ila-tong-phan-minh-bao-him-lam-254x300.jpeg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Tông Phan Minh Bảo </a></h3>
                                <p style="font-size: 16px;"><span>ILA Him Lam</span></p>
                                <p>15/15 khiên chứng chỉ Movers </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/ila-le-pham-quynh-anh-him-lam.jpeg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Lê Phạm Quỳnh Anh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-le-pham-quynh-anh-him-lam.jpeg 448w,<?php echo THEME_URI . '/assets/'; ?>images/ila-le-pham-quynh-anh-him-lam-254x300.jpeg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Lê Phạm Quỳnh Anh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Him Lam</span></p>
                                <p>15/15 khiên chứng chỉ Movers </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/ila-to-van-thanh-phong-pvd.jpeg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Tô Vận Thanh Phong" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-to-van-thanh-phong-pvd.jpeg 448w,<?php echo THEME_URI . '/assets/'; ?>images/ila-to-van-thanh-phong-pvd-254x300.jpeg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Tô Vận Thanh Phong</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phạm Văn Đồng</span></p>
                                <p>15/15 khiên chứng chỉ Movers </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/ila-huynh-ngoc-khanh-pvd.jpeg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Huỳnh Ngọc Khanh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-huynh-ngoc-khanh-pvd.jpeg 448w,<?php echo THEME_URI . '/assets/'; ?>images/ila-huynh-ngoc-khanh-pvd-254x300.jpeg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Huỳnh Ngọc Khanh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phạm Văn Đồng</span></p>
                                <p>15/15 khiên chứng chỉ Movers </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/ila-nguyen-tran-bao-han-pvd-1.jpeg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Trần Bảo Hân" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-nguyen-tran-bao-han-pvd-1.jpeg 448w,<?php echo THEME_URI . '/assets/'; ?>images/ila-nguyen-tran-bao-han-pvd-1-254x300.jpeg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Trần Bảo Hân</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phạm Văn Đồng</span></p>
                                <p>15/15 khiên chứng chỉ Movers </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/ila-ha-bao-chau-nguyen-xi.jpeg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Hà Bảo Châu" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-ha-bao-chau-nguyen-xi.jpeg 448w,<?php echo THEME_URI . '/assets/'; ?>images/ila-ha-bao-chau-nguyen-xi-254x300.jpeg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Hà Bảo Châu</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Xí</span></p>
                                <p>15/15 khiên chứng chỉ Movers </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/ila-vu-mai-anh-nguyen-xi.jpeg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Vũ Mai Anh" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-vu-mai-anh-nguyen-xi.jpeg 448w,<?php echo THEME_URI . '/assets/'; ?>images/ila-vu-mai-anh-nguyen-xi-254x300.jpeg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Vũ Mai Anh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Xí</span></p>
                                <p>15/15 khiên chứng chỉ Movers </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/xuan-khang-tan-phu.jpeg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Trần Xuân Khang" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/xuan-khang-tan-phu.jpeg 448w,<?php echo THEME_URI . '/assets/'; ?>images/xuan-khang-tan-phu-254x300.jpeg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trần Xuân Khang</a></h3>
                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                <p>15/15 khiên chứng chỉ Movers </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/ila-tran-ngoc-minh-vy-phu-my-hung.jpeg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Trần Ngọc Minh Vy" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-tran-ngoc-minh-vy-phu-my-hung.jpeg 448w,<?php echo THEME_URI . '/assets/'; ?>images/ila-tran-ngoc-minh-vy-phu-my-hung-254x300.jpeg 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trần Ngọc Minh Vy</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                <p>15/15 khiên chứng chỉ Movers </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/Tien-Duc-Mac-Dinh-Chi-1.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="PHẠM TIẾN ĐỨC" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Tien-Duc-Mac-Dinh-Chi-1.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/Tien-Duc-Mac-Dinh-Chi-1-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Phạm Tiến Đức</a></h3>
                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                <p>15/15 khiên chứng chỉ Starters </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/Duong-ILA-MDC-1.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="NGUYỄN THUỲ DƯƠNG" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Duong-ILA-MDC-1.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/Duong-ILA-MDC-1-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Thùy Dương</a></h3>
                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/Hoang-Minh-Le-Van-Viet-1.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="LÊ PHAN HOÀNG MINH" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Hoang-Minh-Le-Van-Viet-1.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/Hoang-Minh-Le-Van-Viet-1-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Lê Phan Hoàng Minh</a></h3>
                                <p style="font-size: 16px;"><span>ILA Lê Văn Việt</span></p>
                                <p>15/15 khiên chứng chỉ Starters </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/Huynh-Ngoc-Phuong-Vy-Hoa-Binh.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="HUỲNH NGỌC PHƯƠNG VY" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Huynh-Ngoc-Phuong-Vy-Hoa-Binh.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/Huynh-Ngoc-Phuong-Vy-Hoa-Binh-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Huỳnh Ngọc Phương Vy</a></h3>
                                <p style="font-size: 16px;"><span>ILA Hòa Bình</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/Ha-Thu-Hoa-Binh-1.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="PHÙNG HÀ THU" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Ha-Thu-Hoa-Binh-1.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/Ha-Thu-Hoa-Binh-1-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Phùng Hà Thu</a></h3>
                                <p style="font-size: 16px;"><span>ILA Hòa Bình</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/Phuong-An-Hoa-Binh-1.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="TRẦN NGỌC PHƯƠNG AN" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Phuong-An-Hoa-Binh-1.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/Phuong-An-Hoa-Binh-1-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trần Ngọc Phương An</a></h3>
                                <p style="font-size: 16px;"><span>ILA Hòa Bình</span></p>
                                <p>15/15 khiên chứng chỉ Starters </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/Minh-Khoa-Phan-Van-Tri-1.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="TRẦN MINH KHOA" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Minh-Khoa-Phan-Van-Tri-1.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/Minh-Khoa-Phan-Van-Tri-1-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trần Minh Khoa</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phan Văn Trị</span></p>
                                <p>15/15 khiên chứng chỉ Starters </p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/Gia-An-Phan-Van-Tri-1.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="PHẠM ĐẶNG GIA AN" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Gia-An-Phan-Van-Tri-1.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/Gia-An-Phan-Van-Tri-1-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Phạm Đặng Gia An</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phan Văn Trị</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/Minh-Diep-PMH-1.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="TRẦN NGỌC MINH DIỆP" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Minh-Diep-PMH-1.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/Minh-Diep-PMH-1-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trần Ngọc Minh Diệp</a></h3>
                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                <p>15/15 khiên chứng chỉ Starters</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/doan-long-hy-ila-nguyen-dinh-chieu.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Đoàn Long Hy - ILA Nguyễn Đình Chiểu" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/doan-long-hy-ila-nguyen-dinh-chieu.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/doan-long-hy-ila-nguyen-dinh-chieu-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Đoàn Long Hy</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Đình Chiểu</span></p>
                                <p>15/15 khiên chứng chỉ Flyers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/le-minh-thien-ila-hoang-van-thu.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Lê Minh Thiên - ILA Hoàng Văn Thụ" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/le-minh-thien-ila-hoang-van-thu.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/le-minh-thien-ila-hoang-van-thu-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Lê Minh Thiên</a></h3>
                                <p style="font-size: 16px;"><span>ILA Hoàng Văn Thụ</span></p>
                                <p>15/15 khiên chứng chỉ Starters, Movers, Flyers</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/ong-thuy-sy-ila-go-vap.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Ong Thụy Sỹ - ILA Gò Vấp" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/ong-thuy-sy-ila-go-vap.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/ong-thuy-sy-ila-go-vap-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Ong Thụy Sỹ</a></h3>
                                <p style="font-size: 16px;"><span>ILA Gò Vấp</span></p>
                                <p>Bằng IELTS 8.0</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/truong-duc-trong-ila-thu-dau-mot.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Trương Đức Trọng - ILA Thủ Dầu Một" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/truong-duc-trong-ila-thu-dau-mot.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/truong-duc-trong-ila-thu-dau-mot-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Trương Đức Trọng</a></h3>
                                <p style="font-size: 16px;"><span>ILA Thủ Dầu Một</span></p>
                                <p>Á quân cuộc thi hùng biện Speak up 2022 tại ILA</p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-phuc-duyen-ila-bien-hoa.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Phúc Duyên - ILA Biên Hòa" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-phuc-duyen-ila-bien-hoa.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-phuc-duyen-ila-bien-hoa-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Phúc Duyên</a></h3>
                                <p style="font-size: 16px;"><span>ILA Biên Hòa</span></p>
                                <p>Quán quân cuộc thi hùng biện Speak up 2022 tại ILA <br>
                                    Chứng chỉ KET Cambridge <br></p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530" src="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-nhat-duong-ila-hai-phong.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                    alt="Nguyễn Nhật Dương - ILA Hải Phòng" decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/nguyen-nhat-duong-ila-hai-phong.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/nguyen-nhat-duong-ila-hai-phong-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Nguyễn Nhật Dương</a></h3>
                                <p style="font-size: 16px;"><span>ILA Hải Phòng</span></p>
                                <p>Quán quân cuộc thi hùng biện Speak up 2022 tại ILA <br>
                                    Giải nhất Festival Trạng nguyên tiếng Anh toàn quốc <br>
                                    Chứng chỉ B2 Cambridge <br></p>
                            </div>
                        </div>
                        <div class="hall-item">
                            <div class="hall-image">
                                <img width="448" height="530"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/do-le-nguyen-khoi-ila-nguyen-cu-trinh.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                    decoding="async" loading="lazy"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/do-le-nguyen-khoi-ila-nguyen-cu-trinh.png 448w,<?php echo THEME_URI . '/assets/'; ?>images/do-le-nguyen-khoi-ila-nguyen-cu-trinh-254x300.png 254w"
                                    sizes="100vw">
                            </div>
                            <div class="hall-content">
                                <h3><a href="#">Đỗ Lê Nguyên Khôi</a></h3>
                                <p style="font-size: 16px;"><span>ILA Nguyễn Cư Trinh</span></p>
                                <p>Á quân cuộc thi hùng biện Speak up 2022 tại ILA <br>
                                    15/15 khiên chứng chỉ Flyers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-6" class="section-space-powers">
                <div class="container">
                    <div class="title-space">
                        <h2>Không gian học tập <br> chuẩn quốc tế tại ILA</h2>
                    </div>
                </div>
                <div class="space-owl-slider owl-carousel owl-theme">
                    <div class="space-item">
                        <div class="space-image">
                            <img width="1355" height="762" src="<?php echo THEME_URI . '/assets/'; ?>images/center-6.png"
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                decoding="async" loading="lazy"
                                srcset="<?php echo THEME_URI . '/assets/'; ?>images/center-6.png 1355w,<?php echo THEME_URI . '/assets/'; ?>images/center-6-300x169.png 300w,<?php echo THEME_URI . '/assets/'; ?>images/center-6-1024x576.png 1024w,<?php echo THEME_URI . '/assets/'; ?>images/center-6-768x432.png 768w"
                                sizes="100vw">
                        </div>
                        <!-- <div class="space-content">
                <h3><a href="#"></a></h3>
                                <div class="space-location">
                    <p><img src=""> </p>
                </div>
            </div> -->
                    </div>
                    <div class="space-item">
                        <div class="space-image">
                            <img width="1352" height="762" src="<?php echo THEME_URI . '/assets/'; ?>images/center-5.png"
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                decoding="async" loading="lazy"
                                srcset="<?php echo THEME_URI . '/assets/'; ?>images/center-5.png 1352w,<?php echo THEME_URI . '/assets/'; ?>images/center-5-300x169.png 300w,<?php echo THEME_URI . '/assets/'; ?>images/center-5-1024x577.png 1024w,<?php echo THEME_URI . '/assets/'; ?>images/center-5-768x433.png 768w"
                                sizes="100vw">
                        </div>
                        <!-- <div class="space-content">
                <h3><a href="#"></a></h3>
                                <div class="space-location">
                    <p><img src=""> </p>
                </div>
            </div> -->
                    </div>
                    <div class="space-item">
                        <div class="space-image">
                            <img width="1131" height="762" src="<?php echo THEME_URI . '/assets/'; ?>images/center-4.png"
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                decoding="async" loading="lazy"
                                srcset="<?php echo THEME_URI . '/assets/'; ?>images/center-4.png 1131w,<?php echo THEME_URI . '/assets/'; ?>images/center-4-300x202.png 300w,<?php echo THEME_URI . '/assets/'; ?>images/center-4-1024x690.png 1024w,<?php echo THEME_URI . '/assets/'; ?>images/center-4-768x517.png 768w"
                                sizes="100vw">
                        </div>
                        <!-- <div class="space-content">
                <h3><a href="#"></a></h3>
                                <div class="space-location">
                    <p><img src=""> </p>
                </div>
            </div> -->
                    </div>
                    <div class="space-item">
                        <div class="space-image">
                            <img width="1347" height="762" src="<?php echo THEME_URI . '/assets/'; ?>images/center-3.png"
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                decoding="async" loading="lazy"
                                srcset="<?php echo THEME_URI . '/assets/'; ?>images/center-3.png 1347w,<?php echo THEME_URI . '/assets/'; ?>images/center-3-300x170.png 300w,<?php echo THEME_URI . '/assets/'; ?>images/center-3-1024x579.png 1024w,<?php echo THEME_URI . '/assets/'; ?>images/center-3-768x434.png 768w"
                                sizes="100vw">
                        </div>
                        <!-- <div class="space-content">
                <h3><a href="#"></a></h3>
                                <div class="space-location">
                    <p><img src=""> </p>
                </div>
            </div> -->
                    </div>
                    <div class="space-item">
                        <div class="space-image">
                            <img width="1122" height="762" src="<?php echo THEME_URI . '/assets/'; ?>images/center-2.png"
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                decoding="async" loading="lazy"
                                srcset="<?php echo THEME_URI . '/assets/'; ?>images/center-2.png 1122w,<?php echo THEME_URI . '/assets/'; ?>images/center-2-300x204.png 300w,<?php echo THEME_URI . '/assets/'; ?>images/center-2-1024x695.png 1024w,<?php echo THEME_URI . '/assets/'; ?>images/center-2-768x522.png 768w"
                                sizes="100vw">
                        </div>
                        <!-- <div class="space-content">
                <h3><a href="#"></a></h3>
                                <div class="space-location">
                    <p><img src=""> </p>
                </div>
            </div> -->
                    </div>
                    <div class="space-item">
                        <div class="space-image">
                            <img width="1017" height="762" src="<?php echo THEME_URI . '/assets/'; ?>images/center-1.png"
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                decoding="async" loading="lazy"
                                srcset="<?php echo THEME_URI . '/assets/'; ?>images/center-1.png 1017w,<?php echo THEME_URI . '/assets/'; ?>images/center-1-300x225.png 300w,<?php echo THEME_URI . '/assets/'; ?>images/center-1-768x575.png 768w"
                                sizes="100vw">
                        </div>
                        <!-- <div class="space-content">
                <h3><a href="#"></a></h3>
                                <div class="space-location">
                    <p><img src=""> </p>
                </div>
            </div> -->
                    </div>
                </div>
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

</div><!-- #content -->

<?php
get_footer();
