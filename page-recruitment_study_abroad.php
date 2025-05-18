<?php

/**
 * Template Name: Tư vấn du học
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
<div class="page-id-4598">
    <div class="site-content-contain pt-0">
        <div id="content" class="site-content">
            <main class="page-course-ola-ielts">

                <?php
                $banner = get_field('banner');
                if (!empty($banner)) :
                    $thumbnail = $banner['thumbnail'] ?? '';
                    $title = $banner['title'] ?? '';
                    $sub_title = $banner['sub_title'] ?? '';
                    $content = $banner['content'] ?? '';
                    $url = $banner['url'] ?? '';
                    $background = $banner['background'] ?? '';
                ?>
                    <section class="section-2">
                        <?php if ($background): ?>
                            <img width="1920" height="1050" class="img-background" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" src="<?php echo esc_url($background); ?>" alt="banner background" />
                        <?php endif; ?>
                        <div class="banner-content">
                            <div class="container">
                                <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                    <?php if ($thumbnail): ?>
                                        <p><img decoding="async" class="size-full alignleft" src="<?php echo esc_url($thumbnail); ?>" alt="thumbnail" width="150" height="90" /></p>
                                    <?php endif; ?>

                                    <?php if ($title): ?>
                                        <h1><span style="color: #ffffff"><strong><?php echo esc_html($title); ?></strong></span></h1>
                                    <?php endif; ?>

                                    <?php if ($sub_title): ?>
                                        <h2 style="text-align: left">
                                            <span style="color: #ffffff"><?php echo nl2br(esc_html($sub_title)); ?></span>
                                        </h2>
                                    <?php endif; ?>

                                    <?php if ($content): ?>
                                        <div style="color: #ffffff"><?php echo wp_kses_post($content); ?></div>
                                    <?php endif; ?>

                                    <?php if ($url): ?>
                                        <p>
                                            <button class="discover">
                                                <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener">Xem thêm</a>
                                            </button>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>


                <?php
                $statistical = get_field('statistical');
                if ($statistical):
                    $bg = $statistical['background'];
                    $section_title = $statistical['title'];
                    $items = $statistical['list'];
                ?>
                    <section class="section-3">
                        <?php if ($bg): ?>
                            <img width="1920" height="1278" class="img-background" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" src="<?php echo esc_url($bg); ?>" alt="<?php echo esc_attr($section_title); ?>" />
                        <?php endif; ?>
                        <div class="banner-content">
                            <div class="container">
                                <div class="banner-content-main text-dark" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                    <?php if ($section_title): ?>
                                        <h2><b><?php echo esc_html($section_title); ?></b></h2>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="section-4">
                        <div class="box-main">
                            <div class="container">
                                <div class="box-main_top">
                                    <div class="row justify-content-center list-5-column">
                                        <?php if (!empty($items)): ?>
                                            <?php foreach ($items as $item):
                                                $item_title = $item['title'];
                                                $item_description = $item['description'];
                                            ?>
                                                <div class="col-md-6 col-lg-4 col-xl-4">
                                                    <div class="box-item box-item-1" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" style="background: #a3b8bf">
                                                        <div class="box-content">
                                                            <h2>
                                                                <span style="font-size: 20pt; color: #ffffff"><b><?php echo esc_html($item_title); ?></b></span>
                                                            </h2>
                                                            <p><span style="font-weight: 400; font-size: 16pt"><?php echo nl2br(esc_html($item_description)); ?></span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>


                <?php if (have_rows('process')): ?>
                    <?php foreach (get_field('process') as $index => $item): ?>
                        <?php if ($index == 1): // section-6 layout 
                        ?>
                            <section class="section-6">
                                <div class="container">
                                    <div class="box-course-update-2">
                                        <?php if (!empty($item['image'])): ?>
                                            <img width="1920" height="938" class="img-background" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>" />
                                        <?php endif; ?>
                                        <div class="banner-content">
                                            <div class="container">
                                                <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                                    <?php if (!empty($item['title'])): ?>
                                                        <h2><b><?php echo esc_html($item['title']); ?></b></h2>
                                                    <?php endif; ?>
                                                    <?php
                                                    // Nếu content có dạng <ul><li>...</li></ul> thì in thẳng, còn không thì wrap <p>
                                                    echo wp_kses_post($item['content']);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php else: // section-5 layout 
                        ?>
                            <section class="section-5<?php echo $index === 2 ? ' clone' : ''; ?>">
                                <div class="container">
                                    <div class="box-course-background" style="background: <?php echo $index === 0 ? '#a1aea5' : '#c1afa2'; ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="banner-content">
                                                    <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                                        <?php if (!empty($item['title'])): ?>
                                                            <h2><b><?php echo esc_html($item['title']); ?></b></h2>
                                                        <?php endif; ?>
                                                        <?php if (!empty($item['content'])): ?>
                                                            <div><?php echo wp_kses_post($item['content']); ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <?php if (!empty($item['image'])): ?>
                                                    <img width="616" height="410" class="img-background" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>


                <section class="section-8 section-gallery-video">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-blog" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                    <div class="title-blog">
                                        <h2>ILA Verse</h2>
                                        <button>
                                            <a href="https://ila.edu.vn/ilaverse">Xem tất cả <i class="fa-regular fa-arrow-right"></i></a>
                                        </button>
                                    </div>
                                    <span class="quote-heading">Chào mừng bạn đến với thế giới của ILAVerse – nơi bạn có thể tìm thấy tất cả bí quyết học tiếng Anh, mẹo nuôi dạy và chăm sóc con cái… để con trưởng thành hơn mỗi ngày.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="box-video-top">
                                    <div class="video-item-lg">
                                        <div class="box-video">
                                            <a href="https://www.youtube.com/watch?v=90NMZmXdAT8" class="popup-youtube"><img
                                                    width="600"
                                                    height="337"
                                                    src="<?php echo THEME_URI . '/assets/'; ?>images/648839344f399-fbutube-TU-LOP-HOC-ILA-CON-TU-TIN-VUON-RA-THE-GIOI-0-2-screenshot-1-1.png"
                                                    class="attachment-full size-full wp-post-image"
                                                    alt="tăng mỹ nhiên cựu học sinh ila"
                                                    decoding="async"
                                                    fetchpriority="high"
                                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/648839344f399-fbutube-TU-LOP-HOC-ILA-CON-TU-TIN-VUON-RA-THE-GIOI-0-2-screenshot-1-1.png 600w,<?php echo THEME_URI . '/assets/'; ?>images/648839344f399-fbutube-TU-LOP-HOC-ILA-CON-TU-TIN-VUON-RA-THE-GIOI-0-2-screenshot-1-1-300x169.png 300w"
                                                    sizes="100vw" /></a>
                                        </div>
                                        <div class="box-description">
                                            <h3 class="title">
                                                <a href="https://ila.edu.vn/tu-lop-hoc-ila-con-tu-tin-vuon-ra-the-gioi" class="box-title">Từ lớp học ILA, con tự tin vươn ra thế giới</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-video-bottom">
                                    <div class="row">
                                        <div class="col-xl-4 col-12">
                                            <div class="video-item">
                                                <div class="box-video">
                                                    <a href="https://ila.edu.vn/phuong-phap-hoc-tieng-anh-hieu-qua-nhat-the-gioi" class="box-thumb"><img width="885" height="588" src="<?php echo THEME_URI . '/assets/'; ?>images/ila-phuong-phap-hoc-tieng-anh-hieu-qua-nhat-the-gioi.jpg" class="attachment-full size-full wp-post-image" alt="tiếng anh" decoding="async" srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-phuong-phap-hoc-tieng-anh-hieu-qua-nhat-the-gioi.jpg 885w,<?php echo THEME_URI . '/assets/'; ?>images/ila-phuong-phap-hoc-tieng-anh-hieu-qua-nhat-the-gioi-300x199.jpg 300w,<?php echo THEME_URI . '/assets/'; ?>images/ila-phuong-phap-hoc-tieng-anh-hieu-qua-nhat-the-gioi-768x510.jpg 768w" sizes="100vw" /></a>
                                                </div>
                                                <div class="box-description">
                                                    <h3 class="title">
                                                        <a href="https://ila.edu.vn/phuong-phap-hoc-tieng-anh-hieu-qua-nhat-the-gioi" class="box-title">Phương pháp học tiếng Anh hiệu quả nhất thế giới dành cho bạn</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-12">
                                            <div class="video-item">
                                                <div class="box-video">
                                                    <a href="https://ila.edu.vn/nhung-sai-lam-nguoi-hoc-tieng-anh-hay-mac-phai" class="box-thumb"><img
                                                            width="885"
                                                            height="588"
                                                            src="<?php echo THEME_URI . '/assets/'; ?>images/ila-nhung-sai-lam-nguoi-hoc-tieng-anh-hay-mac-phai-2.jpg"
                                                            class="attachment-full size-full wp-post-image"
                                                            alt="những sai lầm người học tiếng Anh hay mắc phải"
                                                            decoding="async"
                                                            srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-nhung-sai-lam-nguoi-hoc-tieng-anh-hay-mac-phai-2.jpg 885w,<?php echo THEME_URI . '/assets/'; ?>images/ila-nhung-sai-lam-nguoi-hoc-tieng-anh-hay-mac-phai-2-300x199.jpg 300w,<?php echo THEME_URI . '/assets/'; ?>images/ila-nhung-sai-lam-nguoi-hoc-tieng-anh-hay-mac-phai-2-768x510.jpg 768w"
                                                            sizes="100vw" /></a>
                                                </div>
                                                <div class="box-description">
                                                    <h3 class="title">
                                                        <a href="https://ila.edu.vn/nhung-sai-lam-nguoi-hoc-tieng-anh-hay-mac-phai" class="box-title">6 sai lầm người học tiếng Anh hay mắc phải nhất và giải pháp</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-12">
                                            <div class="video-item">
                                                <div class="box-video">
                                                    <a href="https://ila.edu.vn/cach-dat-cau-hoi-wh-trong-tieng-anh" class="box-thumb"><img width="885" height="588" src="<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-hoc-tieng-anh-cho-tre-moi-bat-dau-1.jpg" class="attachment-full size-full wp-post-image" alt="cách đặt câu hỏi wh trong tiếng Anh" decoding="async" srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-hoc-tieng-anh-cho-tre-moi-bat-dau-1.jpg 885w,<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-hoc-tieng-anh-cho-tre-moi-bat-dau-1-300x199.jpg 300w,<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-hoc-tieng-anh-cho-tre-moi-bat-dau-1-768x510.jpg 768w" sizes="100vw" /></a>
                                                </div>
                                                <div class="box-description">
                                                    <h3 class="title">
                                                        <a href="https://ila.edu.vn/cach-dat-cau-hoi-wh-trong-tieng-anh" class="box-title">Cách đặt câu hỏi Wh trong tiếng Anh và mẫu câu thông dụng</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="related-post">
                                    <div class="row">
                                        <h3 class="related-title">Bài viết liên quan</h3>
                                        <div class="col-md-6 col-xl-12">
                                            <div class="post-item">
                                                <div class="thumb-img">
                                                    <a href="https://ila.edu.vn/cach-cai-thien-ky-nang-nghe-tieng-anh"><img width="885" height="588" src="<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-cai-thien-ky-nang-nghe-tieng-anh-4.jpg" class="attachment-full size-full wp-post-image" alt="cách cải thiện kỹ năng nghe tiếng Anh" decoding="async" srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-cai-thien-ky-nang-nghe-tieng-anh-4.jpg 885w,<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-cai-thien-ky-nang-nghe-tieng-anh-4-300x199.jpg 300w,<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-cai-thien-ky-nang-nghe-tieng-anh-4-768x510.jpg 768w" sizes="100vw" /></a>
                                                </div>
                                                <div class="post-content">
                                                    <h3 class="post-title"><a href="https://ila.edu.vn/cach-cai-thien-ky-nang-nghe-tieng-anh">5 cách cải thiện kỹ năng nghe tiếng Anh hiệu quả nhất</a></h3>
                                                    <a href="https://ila.edu.vn/bi-kip-hoc-tieng-anh" class="category-name">Bí kíp học tiếng Anh</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-12">
                                            <div class="post-item">
                                                <div class="thumb-img">
                                                    <a href="https://ila.edu.vn/cach-hoc-thuoc-tu-vung-tieng-anh"><img width="885" height="588" src="<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-hoc-thuoc-tu-vung-tieng-anh-2.jpg" class="attachment-full size-full wp-post-image" alt="Cách học thuộc từ vựng tiếng Anh: 12 mẹo học nhớ lâu hiệu quả" decoding="async" srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-hoc-thuoc-tu-vung-tieng-anh-2.jpg 885w,<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-hoc-thuoc-tu-vung-tieng-anh-2-300x199.jpg 300w,<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-hoc-thuoc-tu-vung-tieng-anh-2-768x510.jpg 768w" sizes="100vw" /></a>
                                                </div>
                                                <div class="post-content">
                                                    <h3 class="post-title"><a href="https://ila.edu.vn/cach-hoc-thuoc-tu-vung-tieng-anh">Cách học thuộc từ vựng tiếng Anh: 12 mẹo học nhớ lâu hiệu quả</a></h3>
                                                    <a href="https://ila.edu.vn/bi-kip-hoc-tieng-anh" class="category-name">Bí kíp học tiếng Anh</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-12">
                                            <div class="post-item">
                                                <div class="thumb-img">
                                                    <a href="https://ila.edu.vn/hoc-ngu-phap-tieng-anh-co-ban"><img
                                                            width="885"
                                                            height="588"
                                                            src="<?php echo THEME_URI . '/assets/'; ?>images/ila-ngu-phap-tieng-anh-co-ban-cho-hoc-sinh-tieu-hoc-3.jpg"
                                                            class="attachment-full size-full wp-post-image"
                                                            alt="ngữ pháp tiếng Anh cơ bản cho học sinh tiểu học"
                                                            decoding="async"
                                                            srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-ngu-phap-tieng-anh-co-ban-cho-hoc-sinh-tieu-hoc-3.jpg 885w,<?php echo THEME_URI . '/assets/'; ?>images/ila-ngu-phap-tieng-anh-co-ban-cho-hoc-sinh-tieu-hoc-3-300x199.jpg 300w,<?php echo THEME_URI . '/assets/'; ?>images/ila-ngu-phap-tieng-anh-co-ban-cho-hoc-sinh-tieu-hoc-3-768x510.jpg 768w"
                                                            sizes="100vw" /></a>
                                                </div>
                                                <div class="post-content">
                                                    <h3 class="post-title"><a href="https://ila.edu.vn/hoc-ngu-phap-tieng-anh-co-ban">Học ngữ pháp tiếng Anh cơ bản cho người mới bắt đầu</a></h3>
                                                    <a href="https://ila.edu.vn/bi-kip-hoc-tieng-anh" class="category-name">Bí kíp học tiếng Anh</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-12">
                                            <div class="post-item">
                                                <div class="thumb-img">
                                                    <a href="https://ila.edu.vn/cac-thi-trong-tieng-anh"><img width="885" height="588" src="<?php echo THEME_URI . '/assets/'; ?>images/ila-tat-ca-cac-thi-trong-tieng-anh-6.jpg" class="attachment-full size-full wp-post-image" alt="Học các thì trong tiếng Anh" decoding="async" srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-tat-ca-cac-thi-trong-tieng-anh-6.jpg 885w,<?php echo THEME_URI . '/assets/'; ?>images/ila-tat-ca-cac-thi-trong-tieng-anh-6-300x199.jpg 300w,<?php echo THEME_URI . '/assets/'; ?>images/ila-tat-ca-cac-thi-trong-tieng-anh-6-768x510.jpg 768w" sizes="100vw" /></a>
                                                </div>
                                                <div class="post-content">
                                                    <h3 class="post-title"><a href="https://ila.edu.vn/cac-thi-trong-tieng-anh">12 thì trong tiếng Anh: Công thức và cách sử dụng</a></h3>
                                                    <a href="https://ila.edu.vn/bi-kip-hoc-tieng-anh" class="category-name">Bí kíp học tiếng Anh</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <!-- #content -->

        <style>
            .form-content .form-register .form-group .error-text {
                font-size: 14px;

                font-family: "Montserrat Medium";

                color: red;
            }
        </style>

        <section class="section-footer" id="form-submit-register" style="background-image: url(<?php echo THEME_URI . '/assets/'; ?>images/bg-course-section-6.png)">
            <div class="form-content">
                <div class="container">
                    <div class="form-register">
                        <h3 class="form-title">ĐĂNG KÝ LỚP HỌC THỬ MIỄN PHÍ NGAY BÂY GIỜ!</h3>

                        <div id="form-footer" class="form">
                            <div class="form-group">
                                <input type="text" id="fullName" class="form-control fullName" placeholder="Họ và tên (*)" />

                                <span class="error-text fullname-error"></span>
                            </div>

                            <div class="form-group">
                                <input type="text" id="phoneNumber" class="form-control phoneNumber" placeholder="Số điện thoại (*)" />

                                <span class="error-text phonenumber-error"></span>
                            </div>

                            <div class="form-group">
                                <input type="text" id="email" class="form-control email" placeholder="Email" />

                                <span class="error-text email-error"></span>
                            </div>

                            <div class="form-group">
                                <select name="course" id="course" class="form-control course">
                                    <option value="0">Khóa học (*)</option>
                                </select>

                                <span class="error-text course-error"></span>
                            </div>

                            <div class="form-group">
                                <select name="city" id="city" class="form-control city-form">
                                    <option value="0">Thành phố (*)</option>
                                </select>

                                <span class="error-text city-error"></span>
                            </div>

                            <div class="form-group">
                                <select name="center" id="center" class="form-control center">
                                    <option value="0">Tìm trung tâm gần nhất</option>
                                </select>

                                <span class="error-text center-error"></span>
                            </div>

                            <div class="form-group">
                                <div class="box-checkbox required" style="display: flex; align-items: start; font-family: 'Montserrat Regular'; font-size: 14px">
                                    <input type="checkbox" name="checkbox-form" id="checkbox-form" class="checkbox-form" checked="" required="" style="min-width: 20px; max-width: 20px; height: 20px; margin-top: 5px" />

                                    <label class="checkbox-label" for="checkbox-form">Bằng việc đăng ký thông tin, bạn đồng ý cho phép ILA liên lạc thông qua các hình thức: cuộc gọi, tin nhắn, email nhằm mục đích tư vấn các chương trình Anh ngữ & nghiên cứu thị trường. Xem chi tiết điều khoản bảo vệ dữ liệu cá nhân mà ILA sẽ thực hiện cho khách hàng tại <a target="_blank" href="/dieu-khoan-chung-ve-bao-ve-va-xu-ly-du-lieu-ca-nhan">đây.</a></label>
                                </div>

                                <span class="error-text checkbox-error"></span>

                                <input type="hidden" class="g-recaptcha-response" id="g-recaptcha-response" name="g-recaptcha-response" />
                            </div>

                            <div class="button-wrapper">
                                <button class="btn-register" id="submit-form"><a href="javascript:void(0)">Đăng ký</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="form-content">
            <div class="container">
                <div class="form-register"></div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
