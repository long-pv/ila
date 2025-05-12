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

<div class="site-content-contain">
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

    <section class="location-area">
        <div id="contact-map"><img width="1901" height="701" class="location-img" src="<?php echo THEME_URI . '/assets/'; ?>images/map-default.png" alt="location map" /></div>

        <div class="location-search-wrapper">
            <div class="container">
                <div class="location-search">
                    <h3 class="location-search-title">Tìm Trung tâm ILA gần bạn</h3>

                    <div class="location-search-top">
                        <div class="location-search-filter">
                            <div class="location-filter-title">
                                <i class="fa-light fa-map"></i>

                                Tỉnh/Thành phố
                            </div>

                            <select name="selectCity" id="selectCity" class="select-location"></select>
                        </div>

                        <div class="location-search-filter">
                            <div class="location-filter-title">
                                <i class="fa-light fa-location-dot"></i>

                                Quận/Huyện
                            </div>

                            <select name="selectDistrict" id="selectDistrict" class="select-location">
                                <option value="-1">Chọn quận/huyện</option>
                            </select>
                        </div>
                    </div>

                    <div class="location-search-content" id="centerItem"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="external-link">
        <button class="btn-register">
            <a href="https://ila.edu.vn/bai-test-tieng-anh-chuan-quoc-te-mien-phi" target="_blank">KIỂM TRA TRÌNH ĐỘ MIỄN PHÍ</a>
        </button>
    </div>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-order">
                        <div class="box-footer">
                            <div class="logo-footer">
                                <img width="65" height="51" src="<?php echo THEME_URI . '/assets/'; ?>images/logo-footer.png" alt="" />
                            </div>
                            <p class="footer-info">Hệ thống giáo dục và đào tạo Anh ngữ hàng đầu Việt Nam với chương trình giảng dạy cùng các dịch vụ giáo dục theo tiêu chuẩn quốc tế.</p>
                            <ul class="links-social">
                                <li>
                                    <a href="https://www.youtube.com/@ilavietnam" target="_blank">
                                        <img width="43" height="44" src="<?php echo THEME_URI . '/assets/'; ?>images/logo-youtube.png" alt="youtube" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/ilavn" target="_blank">
                                        <img width="44" height="44" src="<?php echo THEME_URI . '/assets/'; ?>images/logo-fb.png" alt="facebook" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/ilavietnam" target="_blank">
                                        <img width="43" height="44" src="<?php echo THEME_URI . '/assets/'; ?>images/logo-insta.png" alt="instagram" />
                                    </a>
                                </li>
                            </ul>
                            <div class="logo-bct">
                                <a href="https://www.dmca.com/Protection/Status.aspx?id=beeeb595-c70b-46b3-a077-a11cd6fce531&refurl=https%3a%2f%2fila.edu.vn%2f&rlo=true" title="DMCA.com Protection Status" class="dmca-badge" style="margin-bottom: 15px" target="_blank"> <img src="<?php echo THEME_URI . '/assets/'; ?>images/dmca-badge-w100-5x1-04.png" alt="DMCA.com Protection Status" /></a>
                                <script src="<?php echo THEME_URI . '/assets/'; ?>js/DMCABadgeHelper.min.js"></script>
                                <a href="" target="_blank"><img width="159" height="61" src="<?php echo THEME_URI . '/assets/'; ?>images/logo-bo-cong-thuong.png" alt="Bộ công thương" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="box-footer">
                            <div class="subscribe-form mobile">
                                <h3 class="subscribe-form-title">Nhận ngay ưu đãi mới nhất tại ILA</h3>
                                <div class="emaillist" id="es_form_f1-n1">
                                    <form action="/trung-tam-dao-tao#es_form_f1-n1" method="post" class="es_subscription_form es_shortcode_form" id="es_subscription_form_68202b50e86d5" data-source="ig-es" data-form-id="1">
                                        <div class="es-field-wrap">
                                            <label><input class="es_required_field es_txt_email ig_es_form_field_email" type="email" name="esfpx_email" value="" placeholder="Nhập email để nhận thông tin từ ILA" required="required" /></label>
                                        </div>
                                        <input type="hidden" name="esfpx_lists[]" value="e7cade300522" /><input type="hidden" name="esfpx_form_id" value="1" /><input type="hidden" name="es" value="subscribe" />
                                        <input type="hidden" name="esfpx_es_form_identifier" value="f1-n1" />
                                        <input type="hidden" name="esfpx_es_email_page" value="1029" />
                                        <input type="hidden" name="esfpx_es_email_page_url" value="https://ila.edu.vn/trung-tam-dao-tao" />
                                        <input type="hidden" name="esfpx_status" value="Unconfirmed" />
                                        <input type="hidden" name="esfpx_es-subscribe" id="es-subscribe-68202b50e86d5" value="571ce62ed5" />
                                        <label style="position: absolute; top: -99999px; left: -99999px; z-index: -99" aria-hidden="true"><span hidden="">Please leave this field empty.</span><input type="email" name="esfpx_es_hp_email" class="es_required_field" tabindex="-1" autocomplete="-1" value="" /></label><input type="submit" name="submit" class="es_subscription_form_submit es_submit_button es_textbox_button" id="es_subscription_form_submit_68202b50e86d5" value="Subscribe" /><span
                                            class="es_spinner_image"
                                            id="spinner-image"><img width="32" height="32" src="<?php echo THEME_URI . '/assets/'; ?>images/spinner.gif" alt="Loading" /></span>
                                    </form>
                                    <span class="es_subscription_message" id="es_subscription_message_68202b50e86d5"></span>
                                </div>
                            </div>
                            <h3 class="box-footer-title">Tiếng Anh cao cấp</h3>
                            <ul class="list-cate">
                                <li><a href="https://ila.edu.vn/tieng-anh-mam-non-3-6-tuoi">Tiếng Anh Mầm non (3-6 tuổi)</a></li>
                                <li><a href="https://ila.edu.vn/tieng-anh-tieu-hoc-6-11-tuoi">Tiếng Anh Tiểu học (6-11 tuổi)</a></li>
                                <li><a href="https://ila.edu.vn/tieng-anh-trung-hoc-11-16-tuoi">Tiếng Anh Trung học (11-16 tuổi)</a></li>
                                <li><a href="https://ila.edu.vn/tieng-anh-chuyen-nganh-cho-nguoi-di-lam">Tiếng Anh Chuyên ngành (cho người đi làm)</a></li>
                                <li><a href="https://ila.edu.vn/tieng-anh-steam-4-10-tuoi">Tiếng Anh STEAM  IMATHS (4-10 tuổi)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="box-footer">
                            <h3 class="box-footer-title">Tiếng Anh tiêu chuẩn</h3>
                            <ul class="list-cate mb-36">
                                <li><a href="https://ila.edu.vn/tieng-anh-tieu-chuan-ola-3-16-tuoi">Tiếng Anh OLA (3-16 tuổi)</a></li>
                            </ul>
                            <h3 class="box-footer-title">Luyện thi & Du học</h3>
                            <ul class="list-cate">
                                <li><a href="https://ila.edu.vn/chuong-trinh-luyen-thi-ielts-sat">Luyện thi IELTS và SAT</a></li>
                                <li><a href="https://ila.edu.vn/tu-van-du-hoc-ila-osc">ILA Du học</a></li>
                                <li><a class="ilo-style" href="https://ila.edu.vn/he-thong-mam-non-phan-lan-ilo-2-6-tuoi">Hệ thống mầm non Phần Lan ILO (2-6 tuổi)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="box-footer">
                            <h3 class="box-footer-title">Tìm hiểu thêm</h3>
                            <ul class="list-cate mb-36">
                                <li><a href="https://ila.edu.vn/gioi-thieu-ila-viet-nam">Giới thiệu ILA</a></li>
                                <li><a href="https://ila.edu.vn/trung-tam-dao-tao">Trung tâm đào tạo</a></li>
                                <li><a href="https://ila.edu.vn/ilaverse">ILAVerse</a></li>
                                <li><a href="https://ila.edu.vn/lien-he">Liên hệ</a></li>
                                <li><a href="https://ila.edu.vn/chinh-sach-du-lieu" target="_blank" rel="noopener">Chính sách dữ liệu</a></li>
                            </ul>
                            <div class="subscribe-form desktop">
                                <h3 class="subscribe-form-title">Nhận ngay ưu đãi mới nhất tại ILA</h3>
                                <div class="emaillist" id="es_form_f1-n2">
                                    <form action="/trung-tam-dao-tao#es_form_f1-n2" method="post" class="es_subscription_form es_shortcode_form" id="es_subscription_form_68202b50e8fae" data-source="ig-es" data-form-id="1">
                                        <div class="es-field-wrap">
                                            <label><input class="es_required_field es_txt_email ig_es_form_field_email" type="email" name="esfpx_email" value="" placeholder="Nhập email để nhận thông tin từ ILA" required="required" /></label>
                                        </div>
                                        <input type="hidden" name="esfpx_lists[]" value="e7cade300522" /><input type="hidden" name="esfpx_form_id" value="1" /><input type="hidden" name="es" value="subscribe" />
                                        <input type="hidden" name="esfpx_es_form_identifier" value="f1-n2" />
                                        <input type="hidden" name="esfpx_es_email_page" value="1029" />
                                        <input type="hidden" name="esfpx_es_email_page_url" value="https://ila.edu.vn/trung-tam-dao-tao" />
                                        <input type="hidden" name="esfpx_status" value="Unconfirmed" />
                                        <input type="hidden" name="esfpx_es-subscribe" id="es-subscribe-68202b50e8fae" value="571ce62ed5" />
                                        <label style="position: absolute; top: -99999px; left: -99999px; z-index: -99" aria-hidden="true"><span hidden="">Please leave this field empty.</span><input type="email" name="esfpx_es_hp_email" class="es_required_field" tabindex="-1" autocomplete="-1" value="" /></label><input type="submit" name="submit" class="es_subscription_form_submit es_submit_button es_textbox_button" id="es_subscription_form_submit_68202b50e8fae" value="Subscribe" /><span
                                            class="es_spinner_image"
                                            id="spinner-image"><img width="32" height="32" src="<?php echo THEME_URI . '/assets/'; ?>images/spinner.gif" alt="Loading" /></span>
                                    </form>
                                    <span class="es_subscription_message" id="es_subscription_message_68202b50e8fae"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="logo-bct">
                    <a href="https://www.dmca.com/Protection/Status.aspx?id=beeeb595-c70b-46b3-a077-a11cd6fce531&refurl=https%3a%2f%2fila.edu.vn%2f&rlo=true" title="DMCA.com Protection Status" class="dmca-badge" style="margin-bottom: 15px" target="_blank"> <img src="<?php echo THEME_URI . '/assets/'; ?>images/dmca-badge-w100-5x1-04.png" alt="DMCA.com Protection Status" /></a>
                    <script src="<?php echo THEME_URI . '/assets/'; ?>js/DMCABadgeHelper.min.js"></script>
                    <img width="159" height="61" src="<?php echo THEME_URI . '/assets/'; ?>images/logo-bo-cong-thuong.png" alt="Bộ công thương" />
                </div>
                <p class="copy-right">© Copyright 2022 ILA. All rights reserved.</p>
                <div class="text-desc">
                    <p>
                        Công ty TNHH ILA Việt Nam, GCN đăng ký đầu tư số 411043000734 ngày cấp 08/09/2017 nơi cấp Sở Kế Hoạch & Đầu Tư TP.HCM.<br />
                        Trụ sở chính: The Crest Residence, Khu đô thị Metropole Thủ Thiêm, 15 Trần Bạch Đằng, Phường Thủ Thiêm, Thành phố Thủ Đức, Thành Phố Hồ Chí Minh.
                    </p>
                </div>
            </div>
            <div class="footer-bottom-fixed"></div>
        </div>
    </footer>
    <!-- #colophon -->
</div>

<style>
    .form-content .form-register .form-group .error-text {
        font-size: 14px;
        font-family: "Montserrat Medium";
        color: red;
    }
</style>

<style>
    .external-link button.btn-register {
        border: none;
        background: #1b3f94;
        border-radius: 50px;
        width: auto;
        padding: 0;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }

    .external-link button.btn-register::before {
        content: "";
        height: 450px;
        width: 450px;
        background: #c60c30;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        left: 88%;
        transform: translateY(-50%) translateX(-50%) scale(0);
        transition: 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        z-index: -1;
    }

    .external-link button.btn-register a {
        display: block;
        text-decoration: none;
        font-family: "Montserrat Bold", sans-serif;
        font-style: normal;
        font-size: 14px;
        line-height: normal;
        padding: 16px 50px 16px 20px;
        text-transform: uppercase;
        color: #ffffff;
        position: relative;
    }

    @media screen and (max-width: 1024px) {
        .external-link button.btn-register a {
            padding: 10px 40px 10px 20px;
            font-size: 12px;
            line-height: 1.25;
        }
    }

    .external-link button.btn-register a::after {
        content: "";
        width: 10px;
        height: 10px;
        background: #c60c30;
        position: absolute;
        border-radius: 50%;
        right: 30px;
        top: 20px;
    }

    @media screen and (max-width: 1024px) {
        .external-link button.btn-register a::after {
            right: 15px;
            top: 15px;
        }
    }

    .external-link button.btn-register a:hover::after {
        background-color: #fff;
    }

    .external-link button.btn-register:hover::before {
        transform: translateY(-50%) translateX(-50%) scale(1);
    }

    .site-content-contain .external-link {
        position: fixed;
        bottom: 15px;
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        left: 0;
        right: 0;
        z-index: 99999;
    }

    .site-content-contain .external-link button.btn-register::before {
        width: 520px;
        height: 520px;
    }

    .site-content-contain.viewported .external-link {
        display: none;
    }
</style>

<?php
get_footer();
