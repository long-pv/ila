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

<div id="content" class="site-content">
    <main class="single-template single-video">
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
        <section class="video-main">
            <div class="container">
                <div class="breadcrumb-wrapper">
                    <div id="breadcrumbs">
                        <span><span><a href="https://ila.edu.vn/">Trang chủ</a></span> » <span><a
                                    href="https://ila.edu.vn/video">MULTIMEDIA</a></span></span>
                    </div>
                </div>
                <div class="video-first-play">
                    <div class="row">
                        <div class="col-sm-12 col-lg-8 col-xl-8">
                            <style>
                                /* Responsive iframe container */
                                .video-iframe {
                                    position: relative;
                                    padding-bottom: 56.25%;
                                    /* 16:9 aspect ratio */
                                    height: 0;
                                    overflow: hidden;
                                    max-width: 100%;
                                    background: #000;
                                }

                                /* Responsive iframe */
                                .video-iframe iframe {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    border: 0;
                                }
                            </style>
                            <div class="video-iframe">
                                <div id="player-yt" data-url="https://www.youtube.com/watch?v=A7AbKjVAsqU"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 col-xl-4">
                            <div class="video-content">
                                <div class="video-title">
                                    <h1>Dấu ấn khó phai của ILA Xmas Party</h1>
                                </div>
                                <div class="video-content_desc">
                                    <p>Năm 2025 đã bắt đầu với những ước vọng mới, bứt phá hơn. Nhưng dấu ấn và dư
                                        âm của sự kiện lần đầu tiên được tổ chức  ILA Xmas Party vẫn còn đó.</p>
                                    <p>√ Từng hoạt động cực “chill”</p>
                                    <p>√ Từng thông tin giá trị và hấp dẫn</p>
                                    <p>√ Từng lời cảm ơn, sự tri ân nồng hậu và chân thành</p>
                                    <p>√ Từng hạt mầm niềm tin nảy nở và tươi tốt</p>
                                    <p>Đều đã được ghi lại và vẫn vẹn nguyên cảm xúc khi ấy trong clip dưới đây. Mời
                                        ba mẹ và các bạn cùng ILA sống lại giây phút rộn ràng, tươi vui ấy! Đừng
                                        quên chờ đón những sự kiện và hoạt động tiếp theo của ILA Du học trong năm
                                        2025 nhé!</p>
                                </div>
                                <div class="video-author">
                                    <p>Hoàng Thu</p>
                                </div>
                                <div class="video-time-publish">
                                    <p><a href="https://ila.edu.vn/video">MULTIMEDIA</a><span>Thứ sáu, 03-01-2025,
                                            16:35 (GTM+7)</span></p>
                                </div>
                                <div class="video-share-social">
                                    <section id="a2a_share_save_widget-2"
                                        class="widget widget_a2a_share_save_widget">
                                        <div class="a2a_kit a2a_kit_size_20 addtoany_list">
                                            <a class="a2a_button_facebook"
                                                href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fila.edu.vn%2Fdau-an-kho-phai-cua-ila-xmas-party&linkname=D%E1%BA%A5u%20%E1%BA%A5n%20kh%C3%B3%20phai%20c%E1%BB%A7a%20ILA%20Xmas%20Party%20-%20ILA%20Vietnam"
                                                title="Facebook" rel="nofollow noopener" target="_blank"></a><a
                                                class="a2a_button_email"
                                                href="https://www.addtoany.com/add_to/email?linkurl=https%3A%2F%2Fila.edu.vn%2Fdau-an-kho-phai-cua-ila-xmas-party&linkname=D%E1%BA%A5u%20%E1%BA%A5n%20kh%C3%B3%20phai%20c%E1%BB%A7a%20ILA%20Xmas%20Party%20-%20ILA%20Vietnam"
                                                title="Email" rel="nofollow noopener" target="_blank"></a><a
                                                class="a2a_button_copy_link"
                                                href="https://www.addtoany.com/add_to/copy_link?linkurl=https%3A%2F%2Fila.edu.vn%2Fdau-an-kho-phai-cua-ila-xmas-party&linkname=D%E1%BA%A5u%20%E1%BA%A5n%20kh%C3%B3%20phai%20c%E1%BB%A7a%20ILA%20Xmas%20Party%20-%20ILA%20Vietnam"
                                                title="Copy Link" rel="nofollow noopener" target="_blank"></a>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ajax-posts" class="row">
                    <div class="video-list col-6 col-sm-3 col-md-4 col-lg-3">
                        <div class="video-item">
                            <div class="video-thumb">
                                <a href="https://ila.edu.vn/khai-truong-ila-thich-quang-duc-nha-trang"><img
                                        width="885" height="590"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/ila-khai-truong-ila-thich-quang-duc-nha-trang-website-e1745814336689.jpg"
                                        class="attachment-full size-full wp-post-image"
                                        alt="Khai trương ILA Thích Quảng Đức - Nha Trang" decoding="async"
                                        fetchpriority="high" sizes="100vw" /></a>
                            </div>
                            <div class="video-title">
                                <h3>
                                    <a href="https://ila.edu.vn/khai-truong-ila-thich-quang-duc-nha-trang">Khai
                                        trương ILA Thích Quảng Đức, trung tâm 73 trên toàn quốc</a>
                                </h3>
                            </div>
                            <div class="video-time-cate">
                                <p>
                                    <span class="icon-time"><i class="fa-solid fa-timer"></i> 1:19</span><span
                                        class="category-link"><a
                                            href="https://ila.edu.vn/video">MULTIMEDIA</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="video-list col-6 col-sm-3 col-md-4 col-lg-3">
                        <div class="video-item">
                            <div class="video-thumb">
                                <a
                                    href="https://ila.edu.vn/ila-ba-ria-vung-tau-vinh-danh-200-hoc-sinh-dat-chung-chi-cambridge-va-trao-100-suat-hoc-bong"><img
                                        width="885" height="590"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/ila-ba-ria-vung-tau-vinh-danh-200-hoc-sinh-dat-chung-chi-cambridge-e1744590456188.jpeg"
                                        class="attachment-full size-full wp-post-image"
                                        alt="ILA Bà Rịa – Vũng Tàu đã tổ chức Lễ trao học bổng và chứng chỉ Cambridge 2025."
                                        decoding="async" sizes="100vw" /></a>
                            </div>
                            <div class="video-title">
                                <h3>
                                    <a
                                        href="https://ila.edu.vn/ila-ba-ria-vung-tau-vinh-danh-200-hoc-sinh-dat-chung-chi-cambridge-va-trao-100-suat-hoc-bong">ILA
                                        Bà Rịa  Vũng Tàu vinh danh 200 học sinh đạt chứng chỉ Cambridge và trao 100
                                        suất học bổng</a>
                                </h3>
                            </div>
                            <div class="video-time-cate">
                                <p>
                                    <span class="icon-time"><i class="fa-solid fa-timer"></i> 1:47</span><span
                                        class="category-link"><a
                                            href="https://ila.edu.vn/video">MULTIMEDIA</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="video-list col-6 col-sm-3 col-md-4 col-lg-3">
                        <div class="video-item">
                            <div class="video-thumb">
                                <a
                                    href="https://ila.edu.vn/ngay-hoi-du-hoc-ila-2025-co-hoi-thuc-hien-hoa-giac-mo-du-hoc"><img
                                        width="885" height="590"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/ila-nga-hoi-du-hoc-va-huong-nghiep-ila-2025-1-e1743728221904.jpg"
                                        class="attachment-full size-full wp-post-image"
                                        alt="Ngày hội du học ILA 2025: Cơ hội thực hiện hóa giấc mơ du học"
                                        decoding="async" sizes="100vw" /></a>
                            </div>
                            <div class="video-title">
                                <h3>
                                    <a
                                        href="https://ila.edu.vn/ngay-hoi-du-hoc-ila-2025-co-hoi-thuc-hien-hoa-giac-mo-du-hoc">Ngày
                                        hội du học ILA 2025: Cơ hội thực hiện hóa giấc mơ du học</a>
                                </h3>
                            </div>
                            <div class="video-time-cate">
                                <p>
                                    <span class="icon-time"><i class="fa-solid fa-timer"></i> 2:06</span><span
                                        class="category-link"><a
                                            href="https://ila.edu.vn/video">MULTIMEDIA</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="video-list col-6 col-sm-3 col-md-4 col-lg-3">
                        <div class="video-item">
                            <div class="video-thumb">
                                <a
                                    href="https://ila.edu.vn/ilo-vo-van-kiet-canh-cua-hoi-nhap-cho-the-he-tre-quan-6-tp-hcm"><img
                                        width="1500" height="1000"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/khai-truong-ila-vo-van-kiet-quan-6.jpg"
                                        class="attachment-full size-full wp-post-image" alt="ILA Võ Văn Kiệt"
                                        decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/khai-truong-ila-vo-van-kiet-quan-6.jpg 1500w, images/khai-truong-ila-vo-van-kiet-quan-6-300x200.jpg 300w, images/khai-truong-ila-vo-van-kiet-quan-6-1024x683.jpg 1024w, images/khai-truong-ila-vo-van-kiet-quan-6-768x512.jpg 768w"
                                        sizes="100vw" /></a>
                            </div>
                            <div class="video-title">
                                <h3>
                                    <a
                                        href="https://ila.edu.vn/ilo-vo-van-kiet-canh-cua-hoi-nhap-cho-the-he-tre-quan-6-tp-hcm">ILA
                                        Võ Văn Kiệt: Cánh cửa hội nhập cho thế hệ trẻ quận 6, TP. HCM</a>
                                </h3>
                            </div>
                            <div class="video-time-cate">
                                <p>
                                    <span class="icon-time"><i class="fa-solid fa-timer"></i> 1:43</span><span
                                        class="category-link"><a
                                            href="https://ila.edu.vn/video">MULTIMEDIA</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="video-list col-6 col-sm-3 col-md-4 col-lg-3">
                        <div class="video-item">
                            <div class="video-thumb">
                                <a href="https://ila.edu.vn/ila-khai-truong-trung-tam-thu-70-ila-nguyen-duy-trinh"><img
                                        width="1500" height="970"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/khai-truong-ila-nguyen-duy-trinh-1.jpg"
                                        class="attachment-full size-full wp-post-image"
                                        alt="khai trương ila nguyễn duy trinh" decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/khai-truong-ila-nguyen-duy-trinh-1.jpg 1500w, images/khai-truong-ila-nguyen-duy-trinh-1-300x194.jpg 300w, images/khai-truong-ila-nguyen-duy-trinh-1-1024x662.jpg 1024w, images/khai-truong-ila-nguyen-duy-trinh-1-768x497.jpg 768w"
                                        sizes="100vw" /></a>
                            </div>
                            <div class="video-title">
                                <h3>
                                    <a
                                        href="https://ila.edu.vn/ila-khai-truong-trung-tam-thu-70-ila-nguyen-duy-trinh">ILA
                                        khai trương trung tâm thứ 70: ILA Nguyễn Duy Trinh</a>
                                </h3>
                            </div>
                            <div class="video-time-cate">
                                <p>
                                    <span class="icon-time"><i class="fa-solid fa-timer"></i> 1:42</span><span
                                        class="category-link"><a
                                            href="https://ila.edu.vn/video">MULTIMEDIA</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="video-list col-6 col-sm-3 col-md-4 col-lg-3">
                        <div class="video-item">
                            <div class="video-thumb">
                                <a
                                    href="https://ila.edu.vn/chung-ket-cuoc-thi-tai-nang-va-hung-bien-tieng-anh-speak-up-2024"><img
                                        width="1500" height="1000"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/chung-ket-speak-up-2024-vtv.jpg"
                                        class="attachment-full size-full wp-post-image"
                                        alt="Chung kết cuộc thi tài năng và hùng biện tiếng Anh Speak up 2024"
                                        decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/chung-ket-speak-up-2024-vtv.jpg 1500w, images/chung-ket-speak-up-2024-vtv-300x200.jpg 300w, images/chung-ket-speak-up-2024-vtv-1024x683.jpg 1024w, images/chung-ket-speak-up-2024-vtv-768x512.jpg 768w"
                                        sizes="100vw" /></a>
                            </div>
                            <div class="video-title">
                                <h3>
                                    <a
                                        href="https://ila.edu.vn/chung-ket-cuoc-thi-tai-nang-va-hung-bien-tieng-anh-speak-up-2024">Chung
                                        kết cuộc thi tài năng và hùng biện tiếng Anh Speak up 2024</a>
                                </h3>
                            </div>
                            <div class="video-time-cate">
                                <p>
                                    <span class="icon-time"><i class="fa-solid fa-timer"></i> 2:22</span><span
                                        class="category-link"><a
                                            href="https://ila.edu.vn/video">MULTIMEDIA</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="video-list col-6 col-sm-3 col-md-4 col-lg-3">
                        <div class="video-item">
                            <div class="video-thumb">
                                <a href="https://ila.edu.vn/top-12-thi-sinh-toa-sang-tai-chung-ket-speak-up-2024"><img
                                        width="1500" height="1000"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/ila-chung-ket-speak-up-top-12-2024.jpg"
                                        class="attachment-full size-full wp-post-image"
                                        alt="hùng biện tiếng Anh Speak Up 2024" decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-chung-ket-speak-up-top-12-2024.jpg 1500w, images/ila-chung-ket-speak-up-top-12-2024-300x200.jpg 300w, images/ila-chung-ket-speak-up-top-12-2024-1024x683.jpg 1024w, images/ila-chung-ket-speak-up-top-12-2024-768x512.jpg 768w"
                                        sizes="100vw" /></a>
                            </div>
                            <div class="video-title">
                                <h3>
                                    <a
                                        href="https://ila.edu.vn/top-12-thi-sinh-toa-sang-tai-chung-ket-speak-up-2024">Top
                                        12 thí sinh tỏa sáng tại chung kết Speak Up 2024</a>
                                </h3>
                            </div>
                            <div class="video-time-cate">
                                <p>
                                    <span class="icon-time"><i class="fa-solid fa-timer"></i> 1:47</span><span
                                        class="category-link"><a
                                            href="https://ila.edu.vn/video">MULTIMEDIA</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="video-list col-6 col-sm-3 col-md-4 col-lg-3">
                        <div class="video-item">
                            <div class="video-thumb">
                                <a href="https://ila.edu.vn/vong-2-speak-up-2024-suc-nong-lan-toa-khap-ca-nuoc"><img
                                        width="1500" height="1000"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/ila-vong-2-speak-up-2024.jpg"
                                        class="attachment-full size-full wp-post-image" alt="vòng 2 speak up 2024"
                                        decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-vong-2-speak-up-2024.jpg 1500w, images/ila-vong-2-speak-up-2024-300x200.jpg 300w, images/ila-vong-2-speak-up-2024-1024x683.jpg 1024w, images/ila-vong-2-speak-up-2024-768x512.jpg 768w"
                                        sizes="100vw" /></a>
                            </div>
                            <div class="video-title">
                                <h3>
                                    <a href="https://ila.edu.vn/vong-2-speak-up-2024-suc-nong-lan-toa-khap-ca-nuoc">Vòng
                                        2 Speak Up 2024: Sức nóng lan tỏa khắp cả nước</a>
                                </h3>
                            </div>
                            <div class="video-time-cate">
                                <p>
                                    <span class="icon-time"><i class="fa-solid fa-timer"></i> 2:13</span><span
                                        class="category-link"><a
                                            href="https://ila.edu.vn/video">MULTIMEDIA</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="more_posts" data-category="251"
                    data-post-not-in="37260,40603,40194,39942,38959,38953,37494,37485,35984">
                    <span>Xem thêm</span>
                </div>
            </div>
        </section>
    </main>
</div>
<?php
get_footer();
