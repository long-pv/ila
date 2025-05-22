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
?>

<div id="page">
    <div id="content" class="site-content">
        <main class="archive-template archive-event">
            <div class="archive-post">
                <section class="section-menu-category">
                    <div class="container">
                        <div class="list-cate">
                            <ul>
                                <li class="navbar-blog-item">
                                    <a href="https://iladuhoc.edu.vn/hoi-thao-su-kien">Hội thảo sự kiện</a>
                                </li>

                                <li class="navbar-blog-item">
                                    <a href="https://iladuhoc.edu.vn/tin-tuc">Tin tức</a>
                                </li>

                                <li class="navbar-blog-item">
                                    <a href="https://iladuhoc.edu.vn/tips-du-hoc">Tips du học</a>
                                </li>

                                <li class="navbar-blog-item">
                                    <a href="https://iladuhoc.edu.vn/xu-huong-nghe-nghiep-du-hoc">Xu hướng nghề nghiệp & du học</a>
                                </li>

                                <li class="navbar-blog-item">
                                    <a href="https://iladuhoc.edu.vn/video">Multimedia</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
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
                                                                    <a href="<?php echo $permalink; ?>">Đăng ký ngay</a>
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
                                                                            <a href="<?php echo $permalink; ?>">Đăng ký ngay</a>
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
                                                                        <a href="<?php echo $permalink; ?>">Đăng ký ngay</a>
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

    <div id="popup-event-fixed">
        <div class="popup-event-main">
            <div class="popup-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="popup-content-main">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="popup-event-content"><img class="pattern pattern-1" src="/wp-content/themes/fptheme/assets/images/background-pattern-17.png" alt="background pattern 16">
                            <img class="pattern pattern-2" src="/wp-content/themes/fptheme/assets/images/background-pattern-18.png" alt="background pattern 18">
                            <div class="popup-title">
                                <h2>Du học Mỹ bậc trung học: Tạo lợi thế vào đại học Top 50</h2>
                            </div>
                            <div class="popup-desc">
                                <h2><strong>Thông tin sự kiện</strong></h2>
                                <p>• Thời gian: 13h30 – 16h00, Thứ Bảy, ngày 19.04.2025</p>
                                <p>• Địa điểm: Hội sở ILA, The Crest, 15 Trần Bạch Đằng, Thủ Thiêm, TP. HCM.</p>
                                <p>Khi tham gia hội thảo, phụ huynh và học sinh sẽ có cơ hội:</p>
                                <p>√ Tìm hiểu 5 yếu tố then chốt khi chọn trường từ bậc trung học đến đại học.</p>
                                <p>√ Lợi thế tiến thẳng vào trường TOP 50 khi du học từ bậc trung học.</p>
                                <p>√ Làm bài trắc nghiệm định hướng nghề nghiệp và lựa chọn ngành học phù hợp.</p>
                                <p>√ Gặp gỡ và tư vấn 1:1 với đại diện các trường THPT và đại học top đầu như St. Bernard Preparatory School, North Yarmouth Academy, California State University Fullerton, University of Wisconsin Oshkosh…</p>
                                <p>√ Nhận ngay thư mời nhập học sau khi đăng ký.</p>
                                <h2><strong>Ưu đãi đặc biệt</strong></h2>
                                <p>• Ưu tiên phỏng vấn và xét duyệt học bổng, trị giá đến 42.000 USD</p>
                                <p>• Tài trợ 10.000.000 đồng chi phí vé máy bay đến Mỹ</p>
                                <p>• Miễn phí 2 tháng huấn luyện SAT cùng ILA &amp; The Princeton Review</p>
                                <p>• Giảm đến 25.000.000 đồng khi đăng ký gói huấn luyện du học Mỹ</p>
                                <p>• Tặng 5.000.000 đồng phí dịch vụ visa Mỹ</p>
                                <p>Đối tác đồng hành tại hội thảo:</p>
                                <p>• <strong>Educatius</strong> – Hệ thống trường trung học Mỹ giúp học sinh sớm hòa nhập và xây dựng hồ sơ vào đại học.</p>
                                <p>• <strong>Kings Education</strong> – Cung cấp chương trình chuyển tiếp giúp rút ngắn thời gian học và tăng cơ hội vào đại học Top 50 Mỹ.</p>

                            </div>
                            <div class="popup-thumbnail">
                                <img width="885" height="588" src="https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-mini-fair-19-4-2025.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Du học Mỹ bậc trung học: Tạo lợi thế vào đại học Top 50" decoding="async" loading="lazy" srcset="https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-mini-fair-19-4-2025.jpg 885w, https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-mini-fair-19-4-2025-300x199.jpg 300w, https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-mini-fair-19-4-2025-768x510.jpg 768w" sizes="100vw">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="popup-form" id="popup-form-events">
                            <div class="form">
                                <div class="form-title">
                                    <h3>ĐĂNG KÝ THAM GIA NGAY</h3>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="customer-name form-control" name="your_name" id="customer-name" placeholder="Họ và tên (*)">
                                    <span class="error-text name-error" id="fullname-error"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="customer-phone form-control" name="your_phone" id="customer-phone" placeholder="Số điện thoại (*)">
                                    <span class="error-text phone-error" id="phonenumber-error"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="customer-email form-control" name="your_email" id="customer-email" placeholder="Email">
                                    <span class="error-text email-error" id="email-error"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="customer-address form-control" name="your_address" id="customer-address" placeholder="Địa chỉ">
                                    <span class="error-text address-error" id="address-error"></span>
                                </div>
                                <div class="form-group">
                                    <select name="program" id="program" class="customer-program form-control">
                                        <option value="0">Bạn muốn tư vấn chương trình nào? (*)</option>
                                        <option value="OSC-SM">Du học trải nghiệm (Hè/ Tết)</option>
                                        <option value="OSC-LT">Du học Trung học</option>
                                        <option value="OSC-LT">Du học Đại học/ Sau đại học</option>
                                        <option value="OSC-LT">Huấn luyện vào TOP 50 Đại Học Mỹ </option>
                                    </select>
                                    <span class="error-text program-error" id="program-error"></span>
                                </div>
                                <div class="form-group">
                                    <select name="nation" id="nation" class="customer-nation form-control">
                                        <option value="0">Quốc gia mà bạn đang quan tâm</option>
                                        <option value="Mỹ">Mỹ</option>
                                        <option value="Úc">Úc</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Anh">Anh</option>
                                        <option value="Châu Âu">Châu Âu</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="box-checkbox required" style="display: flex; align-items: start; font-family: 'Nunito Regular'; font-size: 14px;">
                                        <input type="checkbox" name="checkbox-form-2" id="checkbox-form-2" class="checkbox-form-2" checked="" required="" style="min-width: 20px; max-width: 20px; height: 20px; margin-top: 5px;">
                                        <label class="checkbox-label" for="checkbox-form-2">Bằng việc đăng ký thông tin, bạn đồng ý cho phép ILA liên lạc thông qua các hình thức: cuộc gọi, tin nhắn, email nhằm mục đích tư vấn các chương trình du học và nghiên cứu thị trường. Xem chi tiết về các điều khoản bảo vệ dữ liệu cá nhân mà ILA sẽ thực hiện cho khách hàng <a href="https://ila.edu.vn/dieu-khoan-chung-ve-bao-ve-va-xu-ly-du-lieu-ca-nhan" target="_blank">tại đây.</a></label>
                                    </div>
                                    <span class="error-text checkbox-error"></span>
                                    <input type="hidden" class="g-recaptcha-response" id="g-recaptcha-response-3" name="g-recaptcha-response-3">
                                </div>
                                <div class="form-group button-wrapper text-center">
                                    <button class="btn-register btn-submit" id="submit-form-popup">
                                        <a href="#">Đăng ký ngay</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
