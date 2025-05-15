<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package xemer_theme
 */

get_header();
?>

<!-- Content Start -->

<div id="content" class="site-content">
    <main class="single-template">
        <section class="section-menu-category">
            <div class="container">
                <div class="list-cate">
                    <ul>
                        <li class="navbar-blog-item">
                            <a href="https://ila.edu.vn/lam-ban-cung-con">Làm bạn cùng con</a>
                        </li>

                        <li class="navbar-blog-item">
                            <a href="https://ila.edu.vn/bi-kip-hoc-tieng-anh">Bí kíp học tiếng Anh</a>
                        </li>

                        <li class="navbar-blog-item">
                            <a href="https://ila.edu.vn/guong-mat-xuat-sac">Gương mặt xuất sắc</a>
                        </li>

                        <li class="navbar-blog-item">
                            <a href="https://ila.edu.vn/tin-tuc-su-kien">Tin tức sự kiện</a>
                        </li>

                        <li class="navbar-blog-item">
                            <a href="https://ila.edu.vn/video">Multimedia</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="blog-detail-area">
            <div class="row">
                <section class="section-blog-detail">
                    <div class="container">
                        <div class="blog-detail-content">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="left-sidebar">
                                        <h3 class="category-name">
                                            <a href="https://ila.edu.vn/ilaverse">ILAVERSE</a>
                                        </h3>
                                        <h3 class="share-title">Chia sẻ bài viết</h3>
                                        <section id="a2a_share_save_widget-2"
                                            class="widget widget_a2a_share_save_widget">
                                            <div class="a2a_kit a2a_kit_size_20 addtoany_list">
                                                <a class="a2a_button_facebook"
                                                    href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fila.edu.vn%2Fila-mo-rong-tai-nha-trang-dinh-hinh-the-he-toan-cau&linkname=ILA%20m%E1%BB%9F%20r%E1%BB%99ng%20t%E1%BA%A1i%20Nha%20Trang%3A%20%C4%90%E1%BB%8Bnh%20h%C3%ACnh%20th%E1%BA%BF%20h%E1%BB%87%20to%C3%A0n%20c%E1%BA%A7u%20-%20ILA%20Vietnam"
                                                    title="Facebook" rel="nofollow noopener" target="_blank"></a><a
                                                    class="a2a_button_email"
                                                    href="https://www.addtoany.com/add_to/email?linkurl=https%3A%2F%2Fila.edu.vn%2Fila-mo-rong-tai-nha-trang-dinh-hinh-the-he-toan-cau&linkname=ILA%20m%E1%BB%9F%20r%E1%BB%99ng%20t%E1%BA%A1i%20Nha%20Trang%3A%20%C4%90%E1%BB%8Bnh%20h%C3%ACnh%20th%E1%BA%BF%20h%E1%BB%87%20to%C3%A0n%20c%E1%BA%A7u%20-%20ILA%20Vietnam"
                                                    title="Email" rel="nofollow noopener" target="_blank"></a><a
                                                    class="a2a_button_copy_link"
                                                    href="https://www.addtoany.com/add_to/copy_link?linkurl=https%3A%2F%2Fila.edu.vn%2Fila-mo-rong-tai-nha-trang-dinh-hinh-the-he-toan-cau&linkname=ILA%20m%E1%BB%9F%20r%E1%BB%99ng%20t%E1%BA%A1i%20Nha%20Trang%3A%20%C4%90%E1%BB%8Bnh%20h%C3%ACnh%20th%E1%BA%BF%20h%E1%BB%87%20to%C3%A0n%20c%E1%BA%A7u%20-%20ILA%20Vietnam"
                                                    title="Copy Link" rel="nofollow noopener" target="_blank"></a>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="main-content">
                                        <h1 class="post-title"><?php the_title(); ?></h1>

                                        <?php if (has_post_thumbnail()): ?>
                                            <img class="post-thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                alt="<?php the_title_attribute(); ?>">
                                        <?php endif; ?>


                                        <div class="post-content">
                                            <div class="post-title-au-dr">
                                                <p class="author">Tác giả: <a href="#"><?php the_author(); ?></a></p>
                                            </div>
                                        </div>
                                        <div id="ez-toc-container"></div>
                                        <h2 class="ez-toc-section" id="section1">Tiêu đề 1</h2>
                                        <h3 class="ez-toc-section" id="section2">Tiêu đề 2</h3>

                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                            <h2>Bài viết liên quan</h2>
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
                </section>

                <!-- Form Start -->
                <section class="section-footer" id="form-submit-register"
                    style="background-image: url(images/bg-course-section-6.png)">
                    <div class="form-content">
                        <div class="container">
                            <div class="form-register">
                                <h3 class="form-title">ĐĂNG KÝ LỚP HỌC THỬ MIỄN PHÍ NGAY BÂY GIỜ!</h3>
                                <div id="form-footer" class="form">
                                    <div class="form-group">
                                        <input type="text" id="fullName" class="form-control fullName"
                                            placeholder="Họ và tên (*)" />
                                        <span class="error-text fullname-error"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="phoneNumber" class="form-control phoneNumber"
                                            placeholder="Số điện thoại (*)" />
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
                                        <div class="box-checkbox required"
                                            style="display: flex; align-items: start; font-family: 'Montserrat Regular'; font-size: 14px">
                                            <input type="checkbox" name="checkbox-form" id="checkbox-form"
                                                class="checkbox-form" checked="" required=""
                                                style="min-width: 20px; max-width: 20px; height: 20px; margin-top: 5px" />
                                            <label class="checkbox-label" for="checkbox-form">Bằng việc đăng ký
                                                thông tin, bạn đồng ý cho phép ILA liên lạc thông qua các hình thức:
                                                cuộc gọi, tin nhắn, email nhằm mục đích tư vấn các chương trình Anh
                                                ngữ & nghiên cứu thị trường.</label>
                                        </div>
                                        <span class="error-text checkbox-error"></span>
                                        <input type="hidden" class="g-recaptcha-response" id="g-recaptcha-response-6"
                                            name="g-recaptcha-response-6" />
                                    </div>
                                    <div class="button-wrapper">
                                        <button class="btn-register" id="submit-form"><a href="#">Đăng
                                                ký</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form End -->

            </div>
        </div>
    </main>
</div>


<?php
get_footer();
?>