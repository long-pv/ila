<?php

/**
 * Template Name: Trung tâm đào tạo
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
    <main class="center">
        <section class="section-intro">
            <div class="container">
                <div class="box-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box-content">
                                <h1>TRUNG TÂM ĐÀO TẠO</h1>
                                <p>Hiện tổ chức giáo dục Anh ngữ ILA có hơn 73 cơ sở đặt tại 15 tỉnh thành trên toàn quốc. Hàng loạt cơ sở mới được đưa vào hoạt động, minh chứng rõ ràng cho chất lượng giảng dạy hàng đầu, đáp ứng kỳ vọng của nhiều phụ huynh và học sinh.</p>
                                <p>Theo đó, mỗi trung tâm ILA được thiết kế theo phong cách hiện đại, giúp học sinh đến gần hơn với kỷ nguyên công nghệ 4.0. Môi trường học tập đầy cảm hứng đã sẵn sàng chào đón các nhà lãnh đạo tương lai. Tìm ngay trung tâm ILA gần nhất nhé!</p>
                                <button class="find-center"><a href="#contact-map">TÌM TRUNG TÂM</a></button>
                                <img width="79" height="78" class="img-dot" src="<?php echo THEME_URI . '/assets/'; ?>images/image-dot.png" alt="" />
                                <img width="76" height="29" class="img-wave" src="<?php echo THEME_URI . '/assets/'; ?>images/image-wave.png" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-image">
                                <img width="638" height="433" class="img-intro" src="<?php echo THEME_URI . '/assets/'; ?>images/banner-center.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<!-- #content -->


<?php
get_footer();
