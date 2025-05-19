<?php

/**
 * Template Name: Chi tiết giải pháp du học
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


        <?php if (have_rows('banner')) : ?>
            <?php while (have_rows('banner')) : the_row();
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $certification = get_sub_field('certification');
                $certificate_content = get_sub_field('certificate_content');
                $background = get_sub_field('background');
            ?>
                <section class="section-main-product" id="section-1" style="background-color: #1b3f94">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-12">
                            <div class="image-product">
                                <?php if ($background) : ?>
                                    <img width="1192" height="660"
                                        src="<?php echo esc_url($background); ?>"
                                        alt="<?php echo esc_attr($title); ?>">
                                    <noscript>
                                        <img width="1192" height="660"
                                            src="<?php echo esc_url($background); ?>"
                                            alt="<?php echo esc_attr($title); ?>">
                                    </noscript>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12 col-12">
                            <div class="content-main-product">
                                <div class="content-product">
                                    <?php if ($title) : ?>
                                        <h1><?php echo esc_html($title); ?></h1>
                                    <?php endif; ?>

                                    <?php if ($description) : ?>
                                        <p><?php echo esc_html($description); ?></p>
                                    <?php endif; ?>

                                    <div class="intro-airc">
                                        <?php if ($certificate_content) : ?>
                                            <div class="content-airc">
                                                <?php echo $certificate_content; ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($certification) : ?>
                                            <div class="logo-airc">
                                                <img width="115" height="115"
                                                    src="<?php echo esc_url($certification); ?>"
                                                    alt="Certification">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Họa tiết cố định -->
                            <div class="img-pattern">
                                <img width="1794" height="603"
                                    src="https://iladuhoc.edu.vn/wp-content/uploads/2024/04/background-pattern-product-list-new.png"
                                    alt="background pattern product list"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>



        <section class="section-core-value" id="section-2">
            <div class="container">
                <div class="content-main-value">
                    <img width="64" height="65" class="pattern pattern-1"
                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2064%2065'%3E%3C/svg%3E"
                        alt="background pattern 16"
                        data-lazy-src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-16.png"><noscript><img
                            width="64" height="65" class="pattern pattern-1"
                            src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-16.png"
                            alt="background pattern 16"></noscript>
                    <h2><span style="color: #1b3f94;">KẾT HỢP ĐỘC QUYỀN GIỮA</span><br>
                        <span style="color: #1b3f94;">ILA VÀ THE PRINCETON REVIEW</span>
                    </h2>
                    <p>Trong quá trình học tập và rèn luyện cùng chương trình, cô Devery Doran – cựu Cố vấn
                        tuyển sinh Đại học Harvard và chuyên gia đến từ ILA – sẽ giúp các em:</p>
                </div>
            </div>
            <div class="list-core-value">
                <img width="1909" height="452" class="pattern pattern-2"
                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201909%20452'%3E%3C/svg%3E"
                    alt="background pattern 11"
                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-11.png"><noscript><img
                        width="1909" height="452" class="pattern pattern-2"
                        src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-11.png"
                        alt="background pattern 11"></noscript>
                <img width="214" height="194" class="pattern pattern-3"
                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20214%20194'%3E%3C/svg%3E"
                    alt="background pattern 12"
                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-12.png"><noscript><img
                        width="214" height="194" class="pattern pattern-3"
                        src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-12.png"
                        alt="background pattern 12"></noscript>
                <div class="container">
                    <div class="list-core-first" style="background-color: #ffee65">
                        <img width="1101" height="508" class="pattern pattern-4"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201101%20508'%3E%3C/svg%3E"
                            alt="background pattern 10"
                            data-lazy-src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-10.png"><noscript><img
                                width="1101" height="508" class="pattern pattern-4"
                                src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-10.png"
                                alt="background pattern 10"></noscript>
                        <div class="core-main ">
                            <div class="core-item">
                                <div class="core-item-main">
                                    <div class="core-icon">
                                        <img width="72" height="77"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2072%2077'%3E%3C/svg%3E"
                                            alt="Icon 1"
                                            data-lazy-src="https://iladuhoc.edu.vn/wp-content/smush-webp/2024/05/icon.png.webp"
                                            data-smush-webp-fallback="{" data-lazy-src":"https:\="" \=""
                                            iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2024\="" 05\=""
                                            icon.png"}"=""><noscript><img width="72" height="77"
                                                src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/icon.png"
                                                alt="Icon 1"></noscript>
                                    </div>
                                    <div class="core-content">
                                        <p>Nhận biết được thế mạnh, năng lực của mình.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="core-item">
                                <div class="core-item-main">
                                    <div class="core-icon">
                                        <img width="72" height="77"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2072%2077'%3E%3C/svg%3E"
                                            alt="Icon 2"
                                            data-lazy-src="https://iladuhoc.edu.vn/wp-content/smush-webp/2024/05/icon-1.png.webp"
                                            data-smush-webp-fallback="{" data-lazy-src":"https:\="" \=""
                                            iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2024\="" 05\=""
                                            icon-1.png"}"=""><noscript><img width="72" height="77"
                                                src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/icon-1.png"
                                                alt="Icon 2"></noscript>
                                    </div>
                                    <div class="core-content">
                                        <p>Rèn luyện tư duy, kiến thức để hoàn thành các cột mốc học tập.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="core-item">
                                <div class="core-item-main">
                                    <div class="core-icon">
                                        <img width="72" height="77"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2072%2077'%3E%3C/svg%3E"
                                            alt="Icon 5"
                                            data-lazy-src="https://iladuhoc.edu.vn/wp-content/smush-webp/2024/05/icon-4.png.webp"
                                            data-smush-webp-fallback="{" data-lazy-src":"https:\="" \=""
                                            iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2024\="" 05\=""
                                            icon-4.png"}"=""><noscript><img width="72" height="77"
                                                src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/icon-4.png"
                                                alt="Icon 5"></noscript>
                                    </div>
                                    <div class="core-content">
                                        <p>Kiên trì theo đuổi mục tiêu để đạt thành tích tốt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="core-item">
                                <div class="core-item-main">
                                    <div class="core-icon">
                                        <img width="72" height="77"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2072%2077'%3E%3C/svg%3E"
                                            alt="Icon 3"
                                            data-lazy-src="https://iladuhoc.edu.vn/wp-content/smush-webp/2024/05/icon-2.png.webp"
                                            data-smush-webp-fallback="{" data-lazy-src":"https:\="" \=""
                                            iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2024\="" 05\=""
                                            icon-2.png"}"=""><noscript><img width="72" height="77"
                                                src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/icon-2.png"
                                                alt="Icon 3"></noscript>
                                    </div>
                                    <div class="core-content">
                                        <p>Đóng góp tích cực và có trách nhiệm trong xã hội.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="core-item">
                                <div class="core-item-main">
                                    <div class="core-icon">
                                        <img width="72" height="77"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2072%2077'%3E%3C/svg%3E"
                                            alt="Icon 4"
                                            data-lazy-src="https://iladuhoc.edu.vn/wp-content/smush-webp/2024/05/icon-3.png.webp"
                                            data-smush-webp-fallback="{" data-lazy-src":"https:\="" \=""
                                            iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2024\="" 05\=""
                                            icon-3.png"}"=""><noscript><img width="72" height="77"
                                                src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/icon-3.png"
                                                alt="Icon 4"></noscript>
                                    </div>
                                    <div class="core-content">
                                        <p>Đạt mục tiêu quan trọng nhất – được nhận vào top 50 Đại học Mỹ.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-core-main-first">
                            <div class="content-core">
                                <p><img decoding="async" class="alignnone size-full wp-image-634"
                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20108%2075'%3E%3C/svg%3E"
                                        alt="" width="108" height="75"
                                        data-lazy-src="https://iladuhoc.edu.vn/wp-content/smush-webp/2024/05/image-content-ranking-50-uni-usa.png.webp"
                                        data-smush-webp-fallback="{" data-lazy-src":"https:\="" \=""
                                        iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2024\="" 05\=""
                                        image-content-ranking-50-uni-usa.png"}"=""><noscript><img
                                            decoding="async" class="alignnone size-full wp-image-634"
                                            src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/image-content-ranking-50-uni-usa.png"
                                            alt="" width="108" height="75" /></noscript></p>
                                <p>The Princeton Review (TPR) là tổ chức giáo dục quốc tế với hơn 40 năm kinh
                                    nghiệm có trụ sở tại New York, Mỹ. Bên cạnh hệ thống phân tích, xếp hạng hơn
                                    4.000 trường cao đẳng, đại học Mỹ, TPR có hơn 80% học sinh sử dụng dịch vụ
                                    luyện thi để đạt nguyện vọng đầu, hơn 96% học sinh đã <a
                                        href="https://tpr.ila.edu.vn/" target="_blank" rel="noopener">cải thiện
                                        điểm SAT</a> và đã giúp hơn 1.6 triệu học sinh “cất cánh” trên giấc mơ
                                    du học của mình.</p>
                            </div>
                            <div class="content-thumb">
                                <img width="569" height="451"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20569%20451'%3E%3C/svg%3E"
                                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/thumbnail-content-first.png"><noscript><img
                                        width="569" height="451"
                                        src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/thumbnail-content-first.png"></noscript>
                            </div>
                        </div>
                    </div>
                    <div class="list-core-last">
                        <img width="214" height="194" class="pattern pattern-5"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20214%20194'%3E%3C/svg%3E"
                            alt="background pattern 13"
                            data-lazy-src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-13.png"><noscript><img
                                width="214" height="194" class="pattern pattern-5"
                                src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-13.png"
                                alt="background pattern 13"></noscript>
                        <img width="86" height="88" class="pattern pattern-6"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2086%2088'%3E%3C/svg%3E"
                            alt="background pattern 15"
                            data-lazy-src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-15.png"><noscript><img
                                width="86" height="88" class="pattern pattern-6"
                                src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-15.png"
                                alt="background pattern 15"></noscript>
                        <div class="content-thumb">
                            <img width="618" height="465"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20618%20465'%3E%3C/svg%3E"
                                data-lazy-src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/thumbnail-content-last.png"><noscript><img
                                    width="618" height="465"
                                    src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/thumbnail-content-last.png"></noscript>
                        </div>
                        <div class="content-core">
                            <p>Để đạt được những thành quả này, các em sẽ trải qua một quá trình huấn luyện
                                chuyên sâu được thiết kế bởi ILA Du học và The Princeton Review, phù hợp với
                                từng giai đoạn học tập (lớp 9-11) để có thể đặt chân vào những ngôi trường danh
                                giá nhất nước Mỹ:</p>
                            <p><img decoding="async" class="size-full wp-image-842 alignleft"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2030%2030'%3E%3C/svg%3E"
                                    alt="" width="30" height="30"
                                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/smush-webp/2024/05/icon-check.png.webp"
                                    data-smush-webp-fallback="{" data-lazy-src":"https:\="" \=""
                                    iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2024\="" 05\=""
                                    icon-check.png"}"=""><noscript><img decoding="async"
                                        class="size-full wp-image-842 alignleft"
                                        src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/icon-check.png"
                                        alt="" width="30" height="30" /></noscript>Lên kế hoạch học tập, cải
                                thiện các điểm số: GPA, IELTS, TOEFL, IB/AP.</p>
                            <p><img decoding="async" class="size-full wp-image-842 alignleft"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2030%2030'%3E%3C/svg%3E"
                                    alt="" width="30" height="30"
                                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/smush-webp/2024/05/icon-check.png.webp"
                                    data-smush-webp-fallback="{" data-lazy-src":"https:\="" \=""
                                    iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2024\="" 05\=""
                                    icon-check.png"}"=""><noscript><img decoding="async"
                                        class="size-full wp-image-842 alignleft"
                                        src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/icon-check.png"
                                        alt="" width="30" height="30" /></noscript>Huấn luyện viết bài luận cá
                                nhân theo yêu cầu của từng trường.</p>
                            <p><img decoding="async" class="size-full wp-image-842 alignleft"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2030%2030'%3E%3C/svg%3E"
                                    alt="" width="30" height="30"
                                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/smush-webp/2024/05/icon-check.png.webp"
                                    data-smush-webp-fallback="{" data-lazy-src":"https:\="" \=""
                                    iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2024\="" 05\=""
                                    icon-check.png"}"=""><noscript><img decoding="async"
                                        class="size-full wp-image-842 alignleft"
                                        src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/icon-check.png"
                                        alt="" width="30" height="30" /></noscript>Lên kế hoạch, đánh giá hoạt
                                động ngoại khóa, hướng dẫn học sinh trình bày hoạt động ngoại khóa một cách hiệu
                                quả và thể hiện màu sắc cá nhân.</p>
                            <p><img decoding="async" class="size-full wp-image-842 alignleft"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2030%2030'%3E%3C/svg%3E"
                                    alt="" width="30" height="30"
                                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/smush-webp/2024/05/icon-check.png.webp"
                                    data-smush-webp-fallback="{" data-lazy-src":"https:\="" \=""
                                    iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2024\="" 05\=""
                                    icon-check.png"}"=""><noscript><img decoding="async"
                                        class="size-full wp-image-842 alignleft"
                                        src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/icon-check.png"
                                        alt="" width="30" height="30" /></noscript>Hướng dẫn học sinh xin được
                                thư giới thiệu phù hợp và ấn tượng.</p>
                            <p><img decoding="async" class="size-full wp-image-842 alignleft"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2030%2030'%3E%3C/svg%3E"
                                    alt="" width="30" height="30"
                                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/smush-webp/2024/05/icon-check.png.webp"
                                    data-smush-webp-fallback="{" data-lazy-src":"https:\="" \=""
                                    iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2024\="" 05\=""
                                    icon-check.png"}"=""><noscript><img decoding="async"
                                        class="size-full wp-image-842 alignleft"
                                        src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/icon-check.png"
                                        alt="" width="30" height="30" /></noscript>Cố vấn chọn ngành, lập danh
                                sách trường đại học phù hợp với nguyện vọng, năng lực của học sinh và dự đoán
                                khả năng trúng tuyển.</p>
                            <p><img decoding="async" class="size-full wp-image-842 alignleft"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2030%2030'%3E%3C/svg%3E"
                                    alt="" width="30" height="30"
                                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/smush-webp/2024/05/icon-check.png.webp"
                                    data-smush-webp-fallback="{" data-lazy-src":"https:\="" \=""
                                    iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2024\="" 05\=""
                                    icon-check.png"}"=""><noscript><img decoding="async"
                                        class="size-full wp-image-842 alignleft"
                                        src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/icon-check.png"
                                        alt="" width="30" height="30" /></noscript>Chuẩn bị hồ sơ du học, hồ sơ
                                hỗ trợ tài chính, học bổng và visa.</p>
                            <p><img decoding="async" class="size-full wp-image-842 alignleft"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2030%2030'%3E%3C/svg%3E"
                                    alt="" width="30" height="30"
                                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/smush-webp/2024/05/icon-check.png.webp"
                                    data-smush-webp-fallback="{" data-lazy-src":"https:\="" \=""
                                    iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2024\="" 05\=""
                                    icon-check.png"}"=""><noscript><img decoding="async"
                                        class="size-full wp-image-842 alignleft"
                                        src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/icon-check.png"
                                        alt="" width="30" height="30" /></noscript>Chuẩn bị kỹ năng, kiến thức
                                trước khi lên đường (pre-departure).</p>
                        </div>
                    </div>
                </div>
                <img width="235" height="204" class="pattern pattern-7"
                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20235%20204'%3E%3C/svg%3E"
                    alt="background pattern 14"
                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-14.png"><noscript><img
                        width="235" height="204" class="pattern pattern-7"
                        src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-14.png"
                        alt="background pattern 14"></noscript>
            </div>
        </section>
        <section class="section-cta-product" id="section-3">
            <div class="cta-product-image">
                <img width="1910" height="433"
                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201910%20433'%3E%3C/svg%3E"
                    alt="Banner CTA"
                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/banner-cta-product-detail-desktop.png"><noscript><img
                        width="1910" height="433"
                        src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/banner-cta-product-detail-desktop.png"
                        alt="Banner CTA"></noscript>
            </div>
            <div class="cta-content-product">
                <div class="cta-desc">
                    BẠN CẦN TƯ VẤN DU HỌC? LIÊN HỆ NGAY ĐỂ ĐƯỢC TƯ VẤN MIỄN PHÍ TRỰC TIẾP CÙNG CHUYÊN GIA </div>
                <div class="cta-button">
                    <button class="btn-register">
                        <a href="https://iladuhoc.edu.vn/dang-ky-tu-van">Đăng ký ngay</a>
                    </button>
                </div>
            </div>
        </section>
        <section class="section-faq-product" id="section-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-product-content-main">
                            <div class="faq-product-title">
                                <h2>CÂU HỎI THƯỜNG GẶP<br>
                                    VỀ CHƯƠNG TRÌNH HUẤN LUYỆN VÀO TOP 50 ĐẠI HỌC MỸ</h2>
                            </div>
                            <div class="faq-product-image">
                                <img width="463" height="301"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20463%20301'%3E%3C/svg%3E"
                                    alt="FAQ"
                                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/image-faq-product-detail.png"><noscript><img
                                        width="463" height="301"
                                        src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/image-faq-product-detail.png"
                                        alt="FAQ"></noscript>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="list-faq-product">
                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="fa-solid fa-chevron-down"></i>
                                    <h3>Vì sao nên bắt đầu chuẩn bị xây dựng hồ sơ từ sớm?</h3>
                                </div>
                                <div class="faq-answer">
                                    Xây dựng hồ sơ để nộp vào các trường TOP là một quá trình và cần rất nhiều
                                    sự chuẩn bị như các bài thi chuẩn hóa IELTS/SAT, hoạt động ngoại khóa, thư
                                    giới thiệu từ giáo viên, bài luận chính và phụ cho từng trường... Nếu không
                                    chuẩn bị sớm và lên kế hoạch cải thiện hồ sơ thì bộ hồ sơ sẽ không đủ tính
                                    cạnh tranh, khó xin vào các trường top đầu Mỹ. </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="fa-solid fa-chevron-down"></i>
                                    <h3>Hoạt động ngoại khóa có quan trọng trong việc nộp hồ sơ hay không?</h3>
                                </div>
                                <div class="faq-answer">
                                    Hoạt động ngoại khóa chiếm hơn 30% điểm trong việc đánh giá hồ sơ của học
                                    sinh. Trường sẽ thông qua hoạt động này để đánh giá về kỹ năng lãnh đạo, sự
                                    hòa nhập và sự chủ động của học sinh. </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="fa-solid fa-chevron-down"></i>
                                    <h3>Tại sao nên làm việc với cố vấn từ The Princeton Review?</h3>
                                </div>
                                <div class="faq-answer">
                                    Cố vấn The Princeton Review là cô Devery Doran - cựu chuyên gia tuyển sinh ở
                                    Đại học Harvard - có trên 20 năm kinh nghiệm trong việc cố vấn đại học. Cô
                                    sẽ là người hướng dẫn, đánh giá trực tiếp và lên chiến lược xây dựng hồ sơ
                                    dựa trên những kinh nghiệm làm việc từ những trường đại học TOP của mình.
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="fa-solid fa-chevron-down"></i>
                                    <h3>Học bổng và hỗ trợ tài chính có giống nhau không?</h3>
                                </div>
                                <div class="faq-answer">
                                    Học bổng là dựa trên học lực và hồ sơ học thuật của học sinh. Hỗ trợ tài
                                    chính là dựa trên tình hình tài chính của gia đình được khai trên cổng CSS.
                                    Học sinh có khả năng nhận được cả hai loại học bổng và hỗ trợ tài chính.
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    <i class="fa-solid fa-chevron-down"></i>
                                    <h3>Thi SAT có cần thiết hay không?</h3>
                                </div>
                                <div class="faq-answer">
                                    Hiện nay có một vài trường đại học thông báo về việc Test - Optional. Tuy
                                    nhiên đối với học sinh quốc tế, SAT là một bài thi lý tưởng để các trường có
                                    thể đánh giá khả năng học thuật của học sinh quốc tế, vì sự khác biệt giữa
                                    chương trình học ở Mỹ và Việt Nam. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-news" id="section-5">
            <div class="container">
                <div class="news-title">
                    <h2>TIPS DU HỌC</h2>
                    <div class="news-button">
                        <a href="https://iladuhoc.edu.vn/tips-du-hoc">Xem tất cả <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row news-listing">
                    <div class="col-xl-6 col-md-6">
                        <div class="blog-main blog-first">
                            <div class="blog-thumbnail">
                                <a href="https://iladuhoc.edu.vn/chi-phi-du-hoc-phan-lan.html"><img width="885"
                                        height="588"
                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20885%20588'%3E%3C/svg%3E"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="Chi phí du học Phần Lan cần bao nhiêu tiền?" decoding="async"
                                        data-lazy-srcset="https://iladuhoc.edu.vn/wp-content/uploads/2025/05/ila-chi-phi-du-hoc-phan-lan-1.jpg 885w, https://iladuhoc.edu.vn/wp-content/smush-webp/2025/05/ila-chi-phi-du-hoc-phan-lan-1-300x199.jpg.webp 300w, https://iladuhoc.edu.vn/wp-content/smush-webp/2025/05/ila-chi-phi-du-hoc-phan-lan-1-768x510.jpg.webp 768w"
                                        data-lazy-sizes="100vw"
                                        data-lazy-src="https://iladuhoc.edu.vn/wp-content/uploads/2025/05/ila-chi-phi-du-hoc-phan-lan-1.jpg"
                                        data-smush-webp-fallback="{" data-lazy-srcset":"https:\="" \=""
                                        iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2025\="" 05\=""
                                        ila-chi-phi-du-hoc-phan-lan-1.jpg="" 885w,="" https:\=""
                                        ila-chi-phi-du-hoc-phan-lan-1-300x199.jpg="" 300w,=""
                                        ila-chi-phi-du-hoc-phan-lan-1-768x510.jpg="" 768w"}"=""><noscript><img
                                            width="885" height="588"
                                            src="https://iladuhoc.edu.vn/wp-content/uploads/2025/05/ila-chi-phi-du-hoc-phan-lan-1.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                            alt="Chi phí du học Phần Lan cần bao nhiêu tiền?" decoding="async"
                                            srcset="https://iladuhoc.edu.vn/wp-content/uploads/2025/05/ila-chi-phi-du-hoc-phan-lan-1.jpg 885w, https://iladuhoc.edu.vn/wp-content/uploads/2025/05/ila-chi-phi-du-hoc-phan-lan-1-300x199.jpg 300w, https://iladuhoc.edu.vn/wp-content/uploads/2025/05/ila-chi-phi-du-hoc-phan-lan-1-768x510.jpg 768w"
                                            sizes="100vw" /></noscript></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-content-title">
                                    <h3><a href="https://iladuhoc.edu.vn/chi-phi-du-hoc-phan-lan.html">Chi phí
                                            du học Phần Lan cần bao nhiêu tiền?</a></h3>
                                </div>
                                <div class="blog-archive arrow-before">
                                    <span><a href="https://iladuhoc.edu.vn/tips-du-hoc">Tips du học</a></span>
                                </div>
                                <div class="blog-content-description">
                                    Bạn đang ấp ủ giấc mơ du học tại một quốc gia có nền giáo dục tiên tiến, môi
                                    trường sống an toàn và chi phí hợp lý? Phần Lan là điểm đến lý tưởng! Với hệ
                                    thống giáo dục hàng đầu thế giới, học… </div>
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
                                                href="https://iladuhoc.edu.vn/du-hoc-phan-lan-nen-hoc-nganh-gi.html"><img
                                                    width="885" height="588"
                                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20885%20588'%3E%3C/svg%3E"
                                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                    alt="Du học Phần Lan nên học ngành gì là phù hợp?"
                                                    decoding="async"
                                                    data-lazy-srcset="https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-du-hoc-nghe-phan-lan-2.jpg 885w, https://iladuhoc.edu.vn/wp-content/smush-webp/2025/04/ila-du-hoc-nghe-phan-lan-2-300x199.jpg.webp 300w, https://iladuhoc.edu.vn/wp-content/smush-webp/2025/04/ila-du-hoc-nghe-phan-lan-2-768x510.jpg.webp 768w"
                                                    data-lazy-sizes="100vw"
                                                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-du-hoc-nghe-phan-lan-2.jpg"
                                                    data-smush-webp-fallback="{" data-lazy-srcset":"https:\=""
                                                    \="" iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2025\=""
                                                    04\="" ila-du-hoc-nghe-phan-lan-2.jpg="" 885w,="" https:\=""
                                                    ila-du-hoc-nghe-phan-lan-2-300x199.jpg="" 300w,=""
                                                    ila-du-hoc-nghe-phan-lan-2-768x510.jpg=""
                                                    768w"}"=""><noscript><img width="885" height="588"
                                                        src="https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-du-hoc-nghe-phan-lan-2.jpg"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="Du học Phần Lan nên học ngành gì là phù hợp?"
                                                        decoding="async"
                                                        srcset="https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-du-hoc-nghe-phan-lan-2.jpg 885w, https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-du-hoc-nghe-phan-lan-2-300x199.jpg 300w, https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-du-hoc-nghe-phan-lan-2-768x510.jpg 768w"
                                                        sizes="100vw" /></noscript></a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-content-title">
                                                <h3><a
                                                        href="https://iladuhoc.edu.vn/du-hoc-phan-lan-nen-hoc-nganh-gi.html">Du
                                                        học Phần Lan nên học ngành gì là phù hợp?</a></h3>
                                            </div>
                                            <div class="blog-archive arrow-before">
                                                <span><a href="https://iladuhoc.edu.vn/tips-du-hoc">Tips du
                                                        học</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="blog-main">
                                        <div class="blog-thumbnail">
                                            <a href="https://iladuhoc.edu.vn/business-analyst.html"><img
                                                    width="885" height="588"
                                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20885%20588'%3E%3C/svg%3E"
                                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                    alt="Business Analyst: Nghề nghiệp thời thượng trong kỷ nguyên số"
                                                    decoding="async"
                                                    data-lazy-srcset="https://iladuhoc.edu.vn/wp-content/uploads/2025/05/ila-business-analyst-3.jpg 885w, https://iladuhoc.edu.vn/wp-content/smush-webp/2025/05/ila-business-analyst-3-300x199.jpg.webp 300w, https://iladuhoc.edu.vn/wp-content/smush-webp/2025/05/ila-business-analyst-3-768x510.jpg.webp 768w"
                                                    data-lazy-sizes="100vw"
                                                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/uploads/2025/05/ila-business-analyst-3.jpg"
                                                    data-smush-webp-fallback="{" data-lazy-srcset":"https:\=""
                                                    \="" iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2025\=""
                                                    05\="" ila-business-analyst-3.jpg="" 885w,="" https:\=""
                                                    ila-business-analyst-3-300x199.jpg="" 300w,=""
                                                    ila-business-analyst-3-768x510.jpg=""
                                                    768w"}"=""><noscript><img width="885" height="588"
                                                        src="https://iladuhoc.edu.vn/wp-content/uploads/2025/05/ila-business-analyst-3.jpg"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="Business Analyst: Nghề nghiệp thời thượng trong kỷ nguyên số"
                                                        decoding="async"
                                                        srcset="https://iladuhoc.edu.vn/wp-content/uploads/2025/05/ila-business-analyst-3.jpg 885w, https://iladuhoc.edu.vn/wp-content/uploads/2025/05/ila-business-analyst-3-300x199.jpg 300w, https://iladuhoc.edu.vn/wp-content/uploads/2025/05/ila-business-analyst-3-768x510.jpg 768w"
                                                        sizes="100vw" /></noscript></a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-content-title">
                                                <h3><a href="https://iladuhoc.edu.vn/business-analyst.html">Business
                                                        Analyst: Nghề nghiệp thời thượng trong kỷ nguyên số</a>
                                                </h3>
                                            </div>
                                            <div class="blog-archive arrow-before">
                                                <span><a href="https://iladuhoc.edu.vn/tips-du-hoc">Tips du
                                                        học</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="blog-main">
                                        <div class="blog-thumbnail">
                                            <a href="https://iladuhoc.edu.vn/du-hoc-nghe-trung-quoc.html"><img
                                                    width="885" height="588"
                                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20885%20588'%3E%3C/svg%3E"
                                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                    alt="Du học nghề Trung Quốc: Chi phí thấp, cơ hội cao"
                                                    decoding="async"
                                                    data-lazy-srcset="https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ILA-du-hoc-nghe-trung-quoc-1.jpg 885w, https://iladuhoc.edu.vn/wp-content/smush-webp/2025/04/ILA-du-hoc-nghe-trung-quoc-1-300x199.jpg.webp 300w, https://iladuhoc.edu.vn/wp-content/smush-webp/2025/04/ILA-du-hoc-nghe-trung-quoc-1-768x510.jpg.webp 768w"
                                                    data-lazy-sizes="100vw"
                                                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ILA-du-hoc-nghe-trung-quoc-1.jpg"
                                                    data-smush-webp-fallback="{" data-lazy-srcset":"https:\=""
                                                    \="" iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2025\=""
                                                    04\="" ila-du-hoc-nghe-trung-quoc-1.jpg="" 885w,=""
                                                    https:\="" ila-du-hoc-nghe-trung-quoc-1-300x199.jpg=""
                                                    300w,="" ila-du-hoc-nghe-trung-quoc-1-768x510.jpg=""
                                                    768w"}"=""><noscript><img width="885" height="588"
                                                        src="https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ILA-du-hoc-nghe-trung-quoc-1.jpg"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="Du học nghề Trung Quốc: Chi phí thấp, cơ hội cao"
                                                        decoding="async"
                                                        srcset="https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ILA-du-hoc-nghe-trung-quoc-1.jpg 885w, https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ILA-du-hoc-nghe-trung-quoc-1-300x199.jpg 300w, https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ILA-du-hoc-nghe-trung-quoc-1-768x510.jpg 768w"
                                                        sizes="100vw" /></noscript></a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-content-title">
                                                <h3><a
                                                        href="https://iladuhoc.edu.vn/du-hoc-nghe-trung-quoc.html">Điều
                                                        kiện du học nghề Trung Quốc 2025 bạn cần biết</a></h3>
                                            </div>
                                            <div class="blog-archive arrow-before">
                                                <span><a href="https://iladuhoc.edu.vn/tips-du-hoc">Tips du
                                                        học</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="blog-main">
                                        <div class="blog-thumbnail">
                                            <a href="https://iladuhoc.edu.vn/du-hoc-nghe-phan-lan.html"><img
                                                    width="885" height="588"
                                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20885%20588'%3E%3C/svg%3E"
                                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                    alt="Du học nghề Phần Lan: Cơ hội việc làm rộng mở"
                                                    decoding="async"
                                                    data-lazy-srcset="https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-du-hoc-nghe-phan-lan-1.jpg 885w, https://iladuhoc.edu.vn/wp-content/smush-webp/2025/04/ila-du-hoc-nghe-phan-lan-1-300x199.jpg.webp 300w, https://iladuhoc.edu.vn/wp-content/smush-webp/2025/04/ila-du-hoc-nghe-phan-lan-1-768x510.jpg.webp 768w"
                                                    data-lazy-sizes="100vw"
                                                    data-lazy-src="https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-du-hoc-nghe-phan-lan-1.jpg"
                                                    data-smush-webp-fallback="{" data-lazy-srcset":"https:\=""
                                                    \="" iladuhoc.edu.vn\="" wp-content\="" uploads\="" 2025\=""
                                                    04\="" ila-du-hoc-nghe-phan-lan-1.jpg="" 885w,="" https:\=""
                                                    ila-du-hoc-nghe-phan-lan-1-300x199.jpg="" 300w,=""
                                                    ila-du-hoc-nghe-phan-lan-1-768x510.jpg=""
                                                    768w"}"=""><noscript><img width="885" height="588"
                                                        src="https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-du-hoc-nghe-phan-lan-1.jpg"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="Du học nghề Phần Lan: Cơ hội việc làm rộng mở"
                                                        decoding="async"
                                                        srcset="https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-du-hoc-nghe-phan-lan-1.jpg 885w, https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-du-hoc-nghe-phan-lan-1-300x199.jpg 300w, https://iladuhoc.edu.vn/wp-content/uploads/2025/04/ila-du-hoc-nghe-phan-lan-1-768x510.jpg 768w"
                                                        sizes="100vw" /></noscript></a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-content-title">
                                                <h3><a href="https://iladuhoc.edu.vn/du-hoc-nghe-phan-lan.html">Top
                                                        ngành nên học khi du học nghề Phần Lan</a></h3>
                                            </div>
                                            <div class="blog-archive arrow-before">
                                                <span><a href="https://iladuhoc.edu.vn/tips-du-hoc">Tips du
                                                        học</a></span>
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
    </div>


</div><!-- #content -->

<?php
get_footer();
