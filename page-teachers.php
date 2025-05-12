<?php
/**
 * Template Name: Đội Ngũ Giáo Viên
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

<!-- Content Start -->
<div class="site-content-contain">
    <div id="content" class="site-content">
        <main class="tearchers">
            <section class="section-video">
                <div class="container">
                    <video id="banner-video" autoplay="autoplay" loop="loop" muted="" defaultmuted="" playsinline=""
                        oncontextmenu="return false;" preload="auto">
                        <source src="<?php echo THEME_URI . '/assets/'; ?>media/teacher_Trailer.mp4" type="video/mp4">
                    </video>
                    <div class="banner-content">
                        <div class="container">
                            <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50"
                                data-aos-duration="800">
                                <h1 style="color: #ffffff;">GIÁO VIÊN<br>
                                    NGƯỜI MANG ĐẾN TƯƠNG LAI TẠI ILA</h1>
                                <p><a class="open-popup" href="https://www.youtube.com/watch?v=sjMVwPotg-0">Xem
                                        video</a><a class="open-popup"
                                        href="https://www.youtube.com/watch?v=sjMVwPotg-0"
                                        style="margin-left: 10px;"><img width="65" height="64" class="img-bound-fill"
                                            src="<?php echo THEME_URI . '/assets/'; ?>images/video-icon.png"></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-banner">
                <img width="1920" height="1020" class="img-background" data-aos="fade-up" data-aos-delay="50"
                    data-aos-duration="800"
                    src="<?php echo THEME_URI . '/assets/'; ?>images/doi-ngu-giao-vien-ban-xu.png" alt="Giáo viên">
                <div class="banner-content">
                    <div class="container">
                        <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                            <h2>Bệ phóng khám phá sức mạnh tri thức</h2>
                            <p>Tại ILA, đội ngũ đào tạo, giáo viên và trợ giảng của chúng tôi cố gắng hỗ trợ mọi học
                                sinh phát huy hết khả năng của mình. Hơn 2.000 giáo viên đến từ các quốc gia nói tiếng
                                Anh trên thế giới đều có trình độ chuyên môn cao và bằng cấp sư phạm đang làm việc tại
                                hơn 73 trung tâm Anh ngữ trên cả nước.</p>
                            <p>ILA tự hào về chương trình đào tạo và hỗ trợ mà chúng tôi cung cấp cho các giáo viên,
                                mang đến cho họ cơ hội phát triển kỹ năng giảng dạy và thăng tiến trong sự nghiệp.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-usps">
                <div class="box-main">
                    <div class="container">
                        <div class="box-main_top">
                            <div class="row">
                                <div class="col-md-6 col-xl-6">
                                    <div class="box-item box-item-1" data-aos="fade-up" data-aos-delay="50"
                                        data-aos-duration="800" style="background: #cabbb0">
                                        <div class="box-content">
                                            <h3>ILA là một trong những Tổ chức giáo dục hàng đầu Việt Nam.</h3>
                                            <h3>2,000+</h3>
                                            <p>Giáo viên và trợ giảng có trình độ và kinh nghiệm</p>
                                            <h3>1,000+</h3>
                                            <p>Nhân viên chuyên nghiệp và thân thiện.</p>
                                            <h3>73+</h3>
                                            <p>ILA có hơn 73 trung tâm tiếng Anh tại 15 tỉnh thành trên cả nước.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-6">
                                    <div class="box-item box-item-2" data-aos="fade-up" data-aos-delay="50"
                                        data-aos-duration="800" style="background: #cabbb0">
                                        <div class="box-thumb">
                                            <img width="616" height="559"
                                                src="<?php echo THEME_URI . '/assets/'; ?>images/background-image-column-2-vn.png"
                                                alt="Giáo viên">
                                        </div>
                                        <div class="box-content">
                                            <p>Đội ngũ giám đốc đào tạo của ILA đã quản lý và tập huấn cho hơn 2.000
                                                giáo viên và trợ giảng.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-list-teacher">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="title-blog">
                                <h2>CÁC GIÁM ĐỐC ĐÀO TẠO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-owl-slider owl-carousel owl-theme">
                        <div class="teacher-item">
                            <div class="teacher-image">
                                <img width="690" height="868"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/Jonathan-Bird-vn.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="jonathan"
                                    decoding="async" fetchpriority="high"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Jonathan-Bird-vn.png 690w, images/Jonathan-Bird-vn-238x300.png 238w"
                                    sizes="100vw">
                            </div>
                            <div class="teacher-content">
                                <h3>
                                    Jonathan </h3>
                                <p>Giám đốc Đào tạo</p>
                                <div class="popup-profile">
                                    <div class="popup-wrapper">
                                        <div class="popup-content">
                                            <div class="close-popup">
                                                <i class="fa-solid fa-x"></i>
                                            </div>
                                            <h3><img class="alignright wp-image-17625"
                                                    src="<?php echo THEME_URI . '/assets/'; ?>images/Jonathan-Bird-vn.png"
                                                    alt="jonathan" width="400" height="503"><strong><span
                                                        style="color: #2b378b;">Jonathan</span></strong></h3>
                                            <p><span style="color: #2b378b;"><strong>Giám đốc Đào tạo</strong></span>
                                            </p>
                                            <p>Jonathan có hơn 20 năm kinh nghiệm trong lĩnh vực giáo dục và 11 năm làm
                                                việc tại ILA Việt Nam. Với tư cách là Giám đốc Đào tạo tại ILA, Jonathan
                                                thực sự tin tưởng vào việc phát triển con người. Ông sở hữu bằng Thạc sĩ
                                                về Ngôn ngữ học Ứng dụng và TESOL, Thạc sĩ Quản trị Kinh doanh (MBA),
                                                chứng chỉ Cambridge CELTA, Young Learners mở rộng sang chứng chỉ CELTA
                                                và DELTA, chứng chỉ của Trinity College về Giảng dạy tiếng Anh Thương
                                                mại Quốc tế.</p>
                                            <p><em><strong><span style="color: #2b378b;">“Sự hào phóng thực sự đối với
                                                            tương lai nằm ở việc cống hiến tất cả cho hiện tại” - Albert
                                                            Camus</span></strong></em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teacher-item">
                            <div class="teacher-image">
                                <img width="690" height="868"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/Ana-Romashova-vn.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Ana"
                                    decoding="async"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Ana-Romashova-vn.jpg 690w, images/Ana-Romashova-vn-238x300.jpg 238w"
                                    sizes="100vw">
                            </div>
                            <div class="teacher-content">
                                <h3>
                                    Anastasia </h3>
                                <p>Giám đốc Đào tạo Khu vực</p>
                                <div class="popup-profile">
                                    <div class="popup-wrapper">
                                        <div class="popup-content">
                                            <div class="close-popup">
                                                <i class="fa-solid fa-x"></i>
                                            </div>
                                            <h3><img class="alignright wp-image-17647"
                                                    src="<?php echo THEME_URI . '/assets/'; ?>images/Ana-Romashova-vn.jpg"
                                                    alt="Ana" width="400" height="503"><span
                                                    style="color: #2b378b;"><strong>Anastasia</strong></span></h3>
                                            <p><span style="color: #2b378b;"><strong>Giám đốc Đào tạo Khu
                                                        vực</strong></span></p>
                                            <p>Sau khi tốt nghiệp một trường đại học sư phạm với bằng giảng dạy tiếng
                                                Anh, Anastasia đã làm việc trong lĩnh vực giáo dục và thử đi giảng dạy ở
                                                nước ngoài. Cô bắt đầu làm việc tại ILA với vị trí giáo viên 8 năm
                                                trước. Sau đó, Anastasia đã đạt được chứng chỉ Cambridge DELTA Module 1
                                                và bằng Thạc sĩ về Lãnh đạo và Quản lý Giáo dục của Đại học Keele, đồng
                                                thời trở thành Giám đốc Đào tạo Khu vực của ILA.</p>
                                            <p><span style="color: #2b378b;"><em><strong>“Một đứa trẻ, một giáo viên,
                                                            một quyển sách, một cây bút có thể thay đổi thế giới” -
                                                            Malala Yousafzai</strong></em></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teacher-item">
                            <div class="teacher-image">
                                <img width="690" height="868"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/Robert-vn.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Robert"
                                    decoding="async"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Robert-vn.png 690w, images/Robert-vn-238x300.png 238w" sizes="100vw">
                            </div>
                            <div class="teacher-content">
                                <h3>
                                    Robert </h3>
                                <p>Giám đốc Đào tạo Khu vực </p>
                                <div class="popup-profile">
                                    <div class="popup-wrapper">
                                        <div class="popup-content">
                                            <div class="close-popup">
                                                <i class="fa-solid fa-x"></i>
                                            </div>
                                            <h3><img class="alignright wp-image-17655"
                                                    src="<?php echo THEME_URI . '/assets/'; ?>images/Robert-vn.png"
                                                    alt="Robert" width="400" height="503"><span
                                                    style="color: #2b378b;"><strong>Robert</strong></span></h3>
                                            <p><span style="color: #2b378b;"><strong>Giám đốc Đào tạo Khu
                                                        vực</strong></span></p>
                                            <p>Tiếp nối truyền thống gia đình, sau khi nhận được học bổng và hoàn thành
                                                bằng thạc sĩ tại Đại học Nottingham, Robert quyết định kết hợp niềm đam
                                                mê du lịch và giáo dục của mình bằng cách theo đuổi sự nghiệp giảng dạy
                                                ở nước ngoài.</p>
                                            <p>Anh đã hoàn thành chứng chỉ Cambridge CELTA ở Anh năm 2014 và gắn bó với
                                                ILA gần 10 năm. Robert đã hoàn thành chứng chỉ Young Learners mở rộng
                                                sang CELTA và hai học phần của DELTA. Anh đã đảm nhiệm nhiều vị trí khác
                                                nhau tại ILA và hiện đang là Giám đốc Đào tạo Khu vực.</p>
                                            <p><em><strong><span style="color: #2b378b;">“Thế giới hiện thực có giới hạn
                                                            của nó, thế giới tưởng tượng là vô biên” – Jean-Jacques
                                                            Rousseau</span></strong></em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teacher-item">
                            <div class="teacher-image">
                                <img width="690" height="868"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/Jason-vn.png"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Jason"
                                    decoding="async" srcset="<?php echo THEME_URI . '/assets/'; ?>images/Jason-vn.png 690w, images/Jason-vn-238x300.png 238w"
                                    sizes="100vw">
                            </div>
                            <div class="teacher-content">
                                <h3>
                                    Jason </h3>
                                <p>Giám đốc Đào tạo Khu vực</p>
                                <div class="popup-profile">
                                    <div class="popup-wrapper">
                                        <div class="popup-content">
                                            <div class="close-popup">
                                                <i class="fa-solid fa-x"></i>
                                            </div>
                                            <h3><img class="alignright wp-image-17663"
                                                    src="<?php echo THEME_URI . '/assets/'; ?>images/Jason-vn.png"
                                                    alt="Jason" width="400" height="503"><span
                                                    style="color: #2b378b;"><strong>Jason</strong></span></h3>
                                            <p><span style="color: #2b378b;"><strong>Giám đốc Đào tạo Khu
                                                        vực</strong></span></p>
                                            <p>Jason đảm nhận công việc giảng dạy và quản lý tại ILA hơn 10 năm. Trong
                                                hơn 10 năm qua, ông đã dành nhiều tâm huyết cho việc phát triển chuyên
                                                môn để hiểu sâu hơn về cách người học ngôn ngữ có thể thành công. Ông sở
                                                hữu chứng chỉ Cambridge CELTA, Chứng chỉ Young Learners mở rộng sang
                                                CELTA, Chứng chỉ Cambridge DELTA, Chứng chỉ Huấn luyện viên Cambridge và
                                                Bằng Cử nhân Thương mại. Mỗi chứng chỉ này đã giúp Jason hỗ trợ tốt hơn
                                                cho đội ngũ quản lý và giáo viên tại ILA.</p>
                                            <p><em><strong><span style="color: #2b378b;">“Kiến thức về ngôn ngữ là cánh
                                                            cửa dẫn đến trí tuệ” - Roger Bacon</span></strong></em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teacher-item">
                            <div class="teacher-image">
                                <img width="690" height="868"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/Matthew-Allen-vn.jpg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Matt"
                                    decoding="async"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Matthew-Allen-vn.jpg 690w, images/Matthew-Allen-vn-238x300.jpg 238w"
                                    sizes="100vw">
                            </div>
                            <div class="teacher-content">
                                <h3>
                                    Matthew </h3>
                                <p>Giám đốc Đào tạo Khu vực</p>
                                <div class="popup-profile">
                                    <div class="popup-wrapper">
                                        <div class="popup-content">
                                            <div class="close-popup">
                                                <i class="fa-solid fa-x"></i>
                                            </div>
                                            <h3><img class="alignright wp-image-17673"
                                                    src="<?php echo THEME_URI . '/assets/'; ?>images/Matthew-Allen-vn.jpg"
                                                    alt="Matt" width="400" height="503"><span
                                                    style="color: #2b378b;"><strong>Matthew</strong></span></h3>
                                            <p><span style="color: #2b378b;"><strong>Giám đốc Đào tạo Khu
                                                        vực</strong></span></p>
                                            <p>Matthew đang đảm nhiệm vai trò Giám đốc Đào tạo Khu vực cho các trung tâm
                                                Hà Nội và các tỉnh phía Bắc thuộc ILA Việt Nam. Ông đã có 12 năm làm
                                                việc tại ILA. Niềm đam mê giáo dục của Matthew đến từ bố mẹ ông. Cả hai
                                                đều là những giáo viên dạy nhạc tận tâm cho các trường dạy nhạc trong
                                                suốt hơn 40 năm. Matthew có chứng chỉ Cambridge CELTA, Young Learners mở
                                                rộng sang CELTA và DELTA.</p>
                                            <p><em><strong><span style="color: #2b378b;">“Bạn có thể dạy một học sinh
                                                            một bài học trong một ngày; nhưng nếu bạn có thể dạy bé học
                                                            bằng cách tạo ra sự tò mò, bé sẽ tiếp tục quá trình học tập
                                                            chừng nào còn sống” — Clay P. Bedford</span></strong></em>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teacher-item">
                            <div class="teacher-image">
                                <img width="690" height="868"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/Sammie-1.jpeg"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Sammie"
                                    decoding="async"
                                    srcset="<?php echo THEME_URI . '/assets/'; ?>images/Sammie-1.jpeg 690w, images/Sammie-1-238x300.jpeg 238w" sizes="100vw">
                            </div>
                            <div class="teacher-content">
                                <h3>
                                    Sammie </h3>
                                <p>Tổng hiệu trưởng hệ thống mầm non ILO</p>
                                <div class="popup-profile">
                                    <div class="popup-wrapper">
                                        <div class="popup-content">
                                            <div class="close-popup">
                                                <i class="fa-solid fa-x"></i>
                                            </div>
                                            <h3><span style="color: #2b378b;"><strong><img
                                                            class="alignright wp-image-18460"
                                                            src="<?php echo THEME_URI . '/assets/'; ?>images/Sammie-1.jpeg"
                                                            alt="Sammie" width="400" height="503">Sammie</strong></span>
                                            </h3>
                                            <p><span style="color: #2b378b;"><strong>Tổng hiệu trưởng hệ thống mầm non
                                                        ILO </strong></span></p>
                                            <p><span 5="" data-sheets-value="{" 1":2,"2":"sau="" khi="" chuyển="" đến=""
                                                    việt="" nam,="" sammie="" bắt="" đầu="" làm="" giáo="" viên=""
                                                    tại="" ila.="" cô="" đảm="" nhiệm="" chức="" vụ="" giám="" đốc=""
                                                    Đào="" tạo="" nha="" trang="" trong="" năm="" qua.="" đã="" hoàn=""
                                                    thành="" chứng="" chỉ="" celta="" và="" delta,="" đồng="" thời=""
                                                    có="" train="" the="" trainer="" certification="" -="" khóa=""
                                                    học="" kỹ="" năng="" lãnh="" đạo,="" quản="" lý="" huấn="" luyện=""
                                                    nhân="" dành="" cho="" các="" sự="" cấp="" cao."}"=""
                                                    data-sheets-userformat="{"
                                                    2":15235,"3":{"1":0},"4":{"1":2,"2":13624051},"10":1,"11":4,"12":0,"14":{"1":2,"2":0},"15":"montserrat","16":12}"="">Sau
                                                    khi chuyển đến Việt Nam, Sammie bắt đầu làm giáo viên tại ILA. Cô
                                                    đảm nhiệm chức vụ Quản lý Đào tạo Nha Trang trong 5 năm qua. Cô đã
                                                    hoàn thành chứng chỉ CELTA và DELTA, đồng thời có chứng chỉ Train
                                                    The Trainer Certification - chứng chỉ hoàn thành khóa học kỹ năng
                                                    lãnh đạo, quản lý và huấn luyện nhân viên dành cho các nhân sự cấp
                                                    cao</span>. Hiện cô đang đảm trách vai trò tổng hiệu trưởng hệ thống
                                                mầm non ILO.</p>
                                            <p><em><strong><span style="color: #2b378b;">“Người thầy có ba tình yêu:
                                                            tình yêu học tập, tình yêu học sinh và tình yêu gắn kết hai
                                                            tình yêu đầu lại với nhau” - Scott
                                                            Hayden</span></strong></em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div id="popup-profile-teacher"></div>
            <section class="section-teacher">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="title-heading">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box-teacher">
                                <div class="box-image">
                                    <img width="690" height="868"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/Nathan-vn.png"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nathan"
                                        decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/Nathan-vn.png 690w, images/Nathan-vn-238x300.png 238w"
                                        sizes="100vw">
                                </div>
                                <div class="box-content">
                                    <h3 class="name">Nathan</h3>
                                    <p class="center"></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <h3><img class="alignright wp-image-17687"
                                                        src="<?php echo THEME_URI . '/assets/'; ?>images/Nathan-vn.png"
                                                        alt="Nathan" width="400" height="503"><span
                                                        style="color: #2b378b;"><strong>Nathan</strong></span></h3>
                                                <p><span style="color: #2b378b;"><strong>Giám đốc Đào tạo cấp
                                                            cao</strong></span></p>
                                                <p>Nathan theo học tại Đại học Western Washington và tốt nghiệp Cử nhân
                                                    Tâm lý học. Ông đã dành hơn 10 năm tình nguyện làm người tư vấn tâm
                                                    lý ở khu vực Seattle. Nền tảng này đã truyền cảm hứng cho Nathan
                                                    theo đuổi nền giáo dục ở châu Á cách đây gần 13 năm. Ngoài ra, ông
                                                    còn có bằng CELTA, Young Learners mở rộng sang CELTA và DELTA Module
                                                    1. Nathan đã làm việc cho ILA ở nhiều vị trí khác nhau trong hơn 6
                                                    năm qua. Hiện tại, ông giữ chức vụ Giám đốc Đào tạo cấp cao tại TP.
                                                    HCM.</p>
                                                <p><em><strong><span style="color: #2b378b;">“Giáo dục là tấm hộ chiếu
                                                                dẫn tới tương lai, vì ngày mai thuộc về những ai chuẩn
                                                                bị cho nó ngay hôm nay” - Malcolm X</span></strong></em>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box-teacher">
                                <div class="box-image">
                                    <img width="690" height="868"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/tara-new.jpeg"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Tara"
                                        decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/tara-new.jpeg 690w, images/tara-new-238x300.jpeg 238w"
                                        sizes="100vw">
                                </div>
                                <div class="box-content">
                                    <h3 class="name">Tara</h3>
                                    <p class="center"></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <h3><span style="color: #2b378b;"><strong><img
                                                                class="alignright wp-image-19591"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/tara-new.jpeg"
                                                                alt="Tara" width="400" height="503">Tara</strong></span>
                                                </h3>
                                                <p><span style="color: #2b378b;"><strong>Quản lý Đào tạo</strong></span>
                                                </p>
                                                <p>Tara đã hoàn thành bằng thạc sĩ về Quản trị kinh doanh và có chứng
                                                    chỉ CELTA Pass A hơn 10 năm trước. Cô đã dạy tiếng Anh được 17 năm
                                                    và làm Quản lý Đào tạo được 4 năm. Kinh nghiệm nhiều năm làm việc
                                                    tại các trường học, trung tâm ngoại ngữ và trường đại học đã giúp cô
                                                    chuẩn bị cho những thách thức phải đối mặt trong vai trò quản lý học
                                                    thuật. Cô đã sống tại Việt Nam trong 10 năm qua và hiện định cư tại
                                                    thành phố Hồ Chí Minh.</p>
                                                <p><em><strong><span style="color: #2b378b;">“Tôi tin rằng giáo dục là
                                                                sự hào hứng với một điều gì đó. Nhìn thấy niềm đam mê và
                                                                nhiệt huyết giúp thúc đẩy thông điệp giáo dục" - Steve
                                                                Irwin</span></strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box-teacher">
                                <div class="box-image">
                                    <img width="690" height="868"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/Alex-smith-1.jpeg"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="Alex smith" decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/Alex-smith-1.jpeg 690w, images/Alex-smith-1-238x300.jpeg 238w"
                                        sizes="100vw">
                                </div>
                                <div class="box-content">
                                    <h3 class="name">Alex</h3>
                                    <p class="center"></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <h3><span style="color: #2b378b;"><strong><img
                                                                class="alignright wp-image-18503"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/Alex-smith-1.jpeg"
                                                                alt="Alex smith" width="400"
                                                                height="503">Alex</strong></span></h3>
                                                <p><span style="color: #2b378b;"><strong>Quản lý Đào
                                                            tạo </strong></span></p>
                                                <p><span 5="" data-sheets-value="{" 1":2,"2":"after="" moving="" to=""
                                                        vietnam,="" sammie="" started="" as="" a="" teacher="" with=""
                                                        ila.="" she="" has="" been="" manager="" of="" teaching=""
                                                        and="" learning="" in="" nha="" trang="" for="" the="" past=""
                                                        years.="" completed="" celta="" delta,="" well="" director=""
                                                        studies="" train="" trainer="" certifications.="" "}"=""
                                                        data-sheets-userformat="{"
                                                        2":15235,"3":{"1":0},"4":{"1":2,"2":16773836},"10":1,"11":4,"12":0,"14":{"1":2,"2":0},"15":"montserrat","16":12}"="">Alex
                                                        có bằng Cử nhân Quản lý Thiết kế và đạt chứng chỉ CELTA tại
                                                        Oxford, Vương quốc Anh. Anh đã làm việc tại Việt Nam và ILA hơn
                                                        10 năm, kể từ năm 2013. Trong thời gian đó, anh là giáo viên,
                                                        giáo viên cấp cao và cuối cùng là Quản lý Đào tạo kể từ năm
                                                        2019. Anh đã quản lý 9 trung tâm khác nhau ở các tỉnh thành và
                                                        TP. HCM. Hiện Alex đang chuẩn bị lấy bằng thạc sĩ Ngôn ngữ học
                                                        và chứng chỉ TESOL tại Đại học Nottingham, Anh.</span></p>
                                                <p><em><strong><span style="color: #2b378b;">“Giáo dục là vũ khí mạnh
                                                                nhất mà bạn có thể sử dụng để thay đổi thế giới" -
                                                                Nelson Mandela</span></strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box-teacher">
                                <div class="box-image">
                                    <img width="690" height="868"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/Allen-Birol-1.jpeg"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="Allen Birol" decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/Allen-Birol-1.jpeg 690w, images/Allen-Birol-1-238x300.jpeg 238w"
                                        sizes="100vw">
                                </div>
                                <div class="box-content">
                                    <h3 class="name">Allen</h3>
                                    <p class="center"></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <h3><span style="color: #2b378b;"><strong><img
                                                                class="alignright wp-image-19480"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/Allen-Birol-1.jpeg"
                                                                alt="Allen Birol" width="400"
                                                                height="503">Allen</strong></span></h3>
                                                <p><span style="color: #2b378b;"><strong>Quản lý Đào tạo</strong></span>
                                                </p>
                                                <p><span style="font-weight: 400;"><span 2018="" data-sheets-value="{"
                                                            1":2,"2":"liam="" started="" as="" a="" teacher="" at=""
                                                            ila="" in="" ho="" chi="" minh.="" due="" to="" his=""
                                                            academic="" excellence="" and="" strong="" leadership=""
                                                            skills,="" he="" became="" senior="" moved="" da="" nang=""
                                                            2019.="" holds="" masters="" teaching="" english=""
                                                            speakers="" of="" other="" languages="" &="" applied=""
                                                            linguistics="" well="" the="" cambridge="" \"train=""
                                                            trainer\"="" certificate="" international="" house=""
                                                            \"director="" studies\"="" certificate.="" is=""
                                                            currently="" learning="" manager="" two="" centers=""
                                                            minh="" an="" ielts="" speaking="" examiner."}"=""
                                                            data-sheets-userformat="{"
                                                            2":15235,"3":{"1":0},"4":{"1":2,"2":16773836},"10":1,"11":4,"12":0,"14":{"1":2,"2":0},"15":"montserrat","16":12}"="">Allen
                                                            có bằng cử nhân của một trường đại học Mỹ. Allen đã hoàn
                                                            thành Chứng chỉ Cambridge CELTA, chứng chỉ IH về Phương pháp
                                                            nâng cao và sở hữu TELF - Children (Chứng chỉ nâng cao) của
                                                            trường Cao đẳng Colombia. Anh đã làm việc trong lĩnh vực
                                                            giảng dạy tiếng Anh được 9 năm. Allen làm việc tại ILA từ
                                                            năm 2017 với vai trò là giáo viên, sau đó là giáo viên cao
                                                            cấp và hiện là Quản lý Đào tạo tại ILA Cần Thơ 1 &
                                                            2.</span></span></p>
                                                <p><em><strong><span style="color: #2b378b;">“Đầu tư vào kiến thức mang
                                                                lại lợi nhuận cao nhất” - Benjamin
                                                                Franklin</span></strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box-teacher">
                                <div class="box-image">
                                    <img width="690" height="868"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/barbora-novakova-1.jpeg"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="barbora novakova" decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/barbora-novakova-1.jpeg 690w, images/barbora-novakova-1-238x300.jpeg 238w"
                                        sizes="100vw">
                                </div>
                                <div class="box-content">
                                    <h3 class="name">Barbora</h3>
                                    <p class="center"></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <h3><span style="color: #2b378b;"><strong><img
                                                                class="alignright wp-image-18496"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/barbora-novakova-1.jpeg"
                                                                alt="barbora novakova" width="400"
                                                                height="503">Barbora</strong></span></h3>
                                                <p><span style="color: #2b378b;"><strong>Quản lý Đào tạo</strong></span>
                                                </p>
                                                <p><span 5="" data-sheets-value="{" 1":2,"2":"after="" moving="" to=""
                                                        vietnam,="" sammie="" started="" as="" a="" teacher="" with=""
                                                        ila.="" she="" has="" been="" manager="" of="" teaching=""
                                                        and="" learning="" in="" nha="" trang="" for="" the="" past=""
                                                        years.="" completed="" celta="" delta,="" well="" director=""
                                                        studies="" train="" trainer="" certifications.="" "}"=""
                                                        data-sheets-userformat="{"
                                                        2":15235,"3":{"1":0},"4":{"1":2,"2":16773836},"10":1,"11":4,"12":0,"14":{"1":2,"2":0},"15":"montserrat","16":12}"="">Barbora
                                                        đã làm việc trong lĩnh vực giảng dạy tiếng Anh hơn 10 năm, tại
                                                        Slovakia, Maroc, Indonesia và suốt 5 năm qua tại Việt Nam. Cô có
                                                        bằng TESOL của Trinity College London. Barbora đã làm việc tại
                                                        ILA được 5 năm với vai trò là Quản lý Đào tạo ILA Quang Trung và
                                                        ILA Nguyễn Ảnh Thủ. Cô có bằng thạc sĩ về Giáo dục Trị liệu với
                                                        trọng tâm là liệu pháp nghệ thuật. Kinh nghiệm của cô về tâm lý
                                                        học và sân khấu là một tài sản quý giá khi cô dấn thân vào lĩnh
                                                        vực giáo dục. </span></p>
                                                <p><em><strong><span style="color: #2b378b;">“Một đứa trẻ, một giáo
                                                                viên, một cuốn sách và một cây bút có thể thay đổi thế
                                                                giới” – Malala Yousafzai</span></strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box-teacher">
                                <div class="box-image">
                                    <img width="690" height="868"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/david-soper-1.jpeg"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="david soper" decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/david-soper-1.jpeg 690w, images/david-soper-1-238x300.jpeg 238w"
                                        sizes="100vw">
                                </div>
                                <div class="box-content">
                                    <h3 class="name">David</h3>
                                    <p class="center"></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <h3><span style="color: #2b378b;"><strong><img
                                                                class="alignright wp-image-18672"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/david-soper-1.jpeg"
                                                                alt="david soper" width="400"
                                                                height="503">David</strong></span></h3>
                                                <p><span style="color: #2b378b;"><strong>Quản lý Đào tạo</strong></span>
                                                </p>
                                                <p><span style="font-weight: 400;"><span 2018="" data-sheets-value="{"
                                                            1":2,"2":"liam="" started="" as="" a="" teacher="" at=""
                                                            ila="" in="" ho="" chi="" minh.="" due="" to="" his=""
                                                            academic="" excellence="" and="" strong="" leadership=""
                                                            skills,="" he="" became="" senior="" moved="" da="" nang=""
                                                            2019.="" holds="" masters="" teaching="" english=""
                                                            speakers="" of="" other="" languages="" &="" applied=""
                                                            linguistics="" well="" the="" cambridge="" \"train=""
                                                            trainer\"="" certificate="" international="" house=""
                                                            \"director="" studies\"="" certificate.="" is=""
                                                            currently="" learning="" manager="" two="" centers=""
                                                            minh="" an="" ielts="" speaking="" examiner."}"=""
                                                            data-sheets-userformat="{"
                                                            2":15235,"3":{"1":0},"4":{"1":2,"2":16773836},"10":1,"11":4,"12":0,"14":{"1":2,"2":0},"15":"montserrat","16":12}"="">David
                                                            có bằng Cử nhân Quản lý Ứng dụng. Quyết định theo đuổi sự
                                                            nghiệp trong lĩnh vực giáo dục đã khiến anh chuyển đến Việt
                                                            Nam. Anh đã làm việc tại ILA hơn 7 năm, bắt đầu là giáo viên
                                                            trước khi chuyển sang vai trò Quản lý Đào tạo. Trong thời
                                                            gian làm việc tại ILA, David đã nâng cao trình độ chuyên môn
                                                            của mình bằng cách hoàn thành Module 1 DELTA và khóa học
                                                            Cambridge Train the Trainer. Anh đã làm việc tại nhiều trung
                                                            tâm ILA trên khắp thành phố Hồ Chí Minh và hiện đang làm
                                                            việc tại ILA Cộng Hòa, Tân Bình.</span></span></p>
                                                <p><em><strong><span style="color: #2b378b;">“Phát triển niềm đam mê học
                                                                tập. Nếu làm được, bạn sẽ không bao giờ ngừng phát
                                                                triển" - Anthony J. D'Angelo</span></strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box-teacher">
                                <div class="box-image">
                                    <img width="690" height="868"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/Stacey-Maier-new.jpeg"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Stacey"
                                        decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/Stacey-Maier-new.jpeg 690w, images/Stacey-Maier-new-238x300.jpeg 238w"
                                        sizes="100vw">
                                </div>
                                <div class="box-content">
                                    <h3 class="name">Stacey</h3>
                                    <p class="center"></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <h3><span style="color: #2b378b;"><strong><img
                                                                class="wp-image-19342 alignright"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/Stacey-Maier-new.jpeg"
                                                                alt="Stacey" width="400"
                                                                height="503">Stacey</strong></span></h3>
                                                <p><span style="color: #2b378b;"><strong>Quản lý Đào tạo</strong></span>
                                                </p>
                                                <p>Stacey đã hoàn thành bằng Thương mại cũng như Chứng chỉ Nghệ thuật Ẩm
                                                    thực ở Canada trước khi chuyển sang lĩnh vực giảng dạy tiếng Anh. Cô
                                                    đã làm việc với ILA từ năm 2019. Stacey đã hoàn thành chứng chỉ
                                                    CELTA, DELTA Module 1, cũng như chứng chỉ Cambridge Train the
                                                    Trainer.</p>
                                                <p><em><strong><span style="color: #2b378b;">“Kinh nghiệm đơn giản là
                                                                cái tên mà chúng ta đặt cho những sai lầm của mình” -
                                                                Oscar Wilde</span></strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box-teacher">
                                <div class="box-image">
                                    <img width="690" height="868"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/jeremy-lovemore-1.jpeg"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="Jeremy lovemore" decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/jeremy-lovemore-1.jpeg 690w, images/jeremy-lovemore-1-238x300.jpeg 238w"
                                        sizes="100vw">
                                </div>
                                <div class="box-content">
                                    <h3 class="name">Jeremy</h3>
                                    <p class="center"></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <h3><span style="color: #2b378b;"><strong><img
                                                                class="alignright wp-image-18489"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/jeremy-lovemore-1.jpeg"
                                                                alt="Jeremy lovemore" width="400"
                                                                height="503">Jeremy</strong></span></h3>
                                                <p><span style="color: #2b378b;"><strong>Quản lý Đào
                                                            tạo </strong></span></p>
                                                <p><span 5="" data-sheets-value="{" 1":2,"2":"after="" moving="" to=""
                                                        vietnam,="" sammie="" started="" as="" a="" teacher="" with=""
                                                        ila.="" she="" has="" been="" manager="" of="" teaching=""
                                                        and="" learning="" in="" nha="" trang="" for="" the="" past=""
                                                        years.="" completed="" celta="" delta,="" well="" director=""
                                                        studies="" train="" trainer="" certifications.="" "}"=""
                                                        data-sheets-userformat="{"
                                                        2":15235,"3":{"1":0},"4":{"1":2,"2":16773836},"10":1,"11":4,"12":0,"14":{"1":2,"2":0},"15":"montserrat","16":12}"="">Jeremy
                                                        có bằng Cử nhân Thương mại (chuyên ngành Hệ thống Thông tin) và
                                                        chứng chỉ TESOL năm 2016. Anh nhanh chóng chuyển đến Việt Nam để
                                                        theo đuổi sự nghiệp giáo dục. Anh đã làm việc tại ILA được 5 năm
                                                        và trong thời gian đó đã nhận được chứng chỉ dạy các lớp SAT.
                                                        Hiện tại Jeremy giám sát hai trung tâm ở quận 7 với vai trò Quản
                                                        lý Đào tạo.</span></p>
                                                <p><em><strong><span style="color: #2b378b;">“Hãy sống như thể ngày mai
                                                                bạn sẽ chết. Hãy học như thể bạn sẽ sống mãi mãi" -
                                                                Mahatma Gandhi</span></strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box-teacher">
                                <div class="box-image">
                                    <img width="690" height="868"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/Jesse-Handerson-1.jpeg"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="Jesse Handerson" decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/Jesse-Handerson-1.jpeg 690w, images/Jesse-Handerson-1-238x300.jpeg 238w"
                                        sizes="100vw">
                                </div>
                                <div class="box-content">
                                    <h3 class="name">Jesse</h3>
                                    <p class="center"></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <h3><span style="color: #2b378b;"><strong><img
                                                                class="alignright wp-image-18477"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/Jesse-Handerson-1.jpeg"
                                                                alt="Jesse Handerson" width="400"
                                                                height="503">Jesse</strong></span></h3>
                                                <p><span style="color: #2b378b;"><strong>Quản lý Đào tạo</strong></span>
                                                </p>
                                                <p><span 5="" data-sheets-value="{" 1":2,"2":"after="" moving="" to=""
                                                        vietnam,="" sammie="" started="" as="" a="" teacher="" with=""
                                                        ila.="" she="" has="" been="" manager="" of="" teaching=""
                                                        and="" learning="" in="" nha="" trang="" for="" the="" past=""
                                                        years.="" completed="" celta="" delta,="" well="" director=""
                                                        studies="" train="" trainer="" certifications.="" "}"=""
                                                        data-sheets-userformat="{"
                                                        2":15235,"3":{"1":0},"4":{"1":2,"2":16773836},"10":1,"11":4,"12":0,"14":{"1":2,"2":0},"15":"montserrat","16":12}"="">Jesse
                                                        có 23 năm kinh nghiệm trong ngành giáo dục, trong đó có 13 năm
                                                        làm trong lĩnh vực xuất bản sách giáo khoa và 10 năm giảng dạy
                                                        tiếng Anh như ngôn ngữ thứ hai. Ông có bằng Cử nhân Văn học Anh,
                                                        bằng Thạc sĩ Triết học, chứng chỉ CELTA và DELTA Module 1 và
                                                        chứng chỉ Cambridge speaking examiner. Ông đã làm việc tại ILA
                                                        Việt Nam được 9 năm.</span></p>
                                                <p><em><strong><span style="color: #2b378b;">“Nói với tôi thì tôi quên,
                                                                dạy tôi thì tôi có thể nhớ, lôi kéo tôi và tôi học” -
                                                                Benjamin Franklin</span></strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box-teacher">
                                <div class="box-image">
                                    <img width="690" height="868"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/Liam-swan-1.jpeg"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="Liam swan" decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/Liam-swan-1.jpeg 690w, images/Liam-swan-1-238x300.jpeg 238w"
                                        sizes="100vw">
                                </div>
                                <div class="box-content">
                                    <h3 class="name">Liam</h3>
                                    <p class="center"></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <h3><span style="color: #2b378b;"><strong><img
                                                                class="alignright wp-image-18665"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/Liam-swan-1.jpeg"
                                                                alt="Liam swan" width="400"
                                                                height="503">Liam</strong></span></h3>
                                                <p><span style="color: #2b378b;"><strong>Quản lý Đào
                                                            tạo </strong></span></p>
                                                <p><span 5="" data-sheets-value="{" 1":2,"2":"after="" moving="" to=""
                                                        vietnam,="" sammie="" started="" as="" a="" teacher="" with=""
                                                        ila.="" she="" has="" been="" manager="" of="" teaching=""
                                                        and="" learning="" in="" nha="" trang="" for="" the="" past=""
                                                        years.="" completed="" celta="" delta,="" well="" director=""
                                                        studies="" train="" trainer="" certifications.="" "}"=""
                                                        data-sheets-userformat="{"
                                                        2":15235,"3":{"1":0},"4":{"1":2,"2":16773836},"10":1,"11":4,"12":0,"14":{"1":2,"2":0},"15":"montserrat","16":12}"="">Liam
                                                        bắt đầu làm giáo viên tại ILA vào năm 2018 ở thành phố Hồ Chí
                                                        Minh. Nhờ thành tích giảng dạy xuất sắc và kỹ năng lãnh đạo
                                                        giỏi, anh đã trở thành giáo viên cấp cao và chuyển đến ILA Đà
                                                        Nẵng vào năm 2019. Anh có bằng thạc sĩ Giảng dạy tiếng Anh cho
                                                        Người nói các Ngôn ngữ khác và Ngôn ngữ học Ứng dụng cũng như
                                                        chứng chỉ tiếng Anh Cambridge "Train the Trainer", chứng chỉ
                                                        International House "Director of Studies". Anh hiện là Quản lý
                                                        Đào tạo của hai trung tâm tại thành phố Hồ Chí Minh và là giám
                                                        khảo IELTS Speaking.</span></p>
                                                <p><em><strong><span style="color: #2b378b;">“Việc học không bao giờ
                                                                được thực hiện mà không có sai sót và thất bại” -
                                                                Vladimir Lenin</span></strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box-teacher">
                                <div class="box-image">
                                    <img width="690" height="868"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/Matthew-Davies-1.jpeg"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="Matthew Davies" decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/Matthew-Davies-1.jpeg 690w, images/Matthew-Davies-1-238x300.jpeg 238w"
                                        sizes="100vw">
                                </div>
                                <div class="box-content">
                                    <h3 class="name">Matthew</h3>
                                    <p class="center"></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <h3><span style="color: #2b378b;"><strong><img
                                                                class="alignright wp-image-18469"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/Matthew-Davies-1.jpeg"
                                                                alt="Matthew Davies" width="400"
                                                                height="503">Matthew<br>
                                                        </strong></span></h3>
                                                <p><span style="color: #2b378b;"><strong>Quản lý Đào
                                                            tạo </strong></span></p>
                                                <p><span 5="" data-sheets-value="{" 1":2,"2":"after="" moving="" to=""
                                                        vietnam,="" sammie="" started="" as="" a="" teacher="" with=""
                                                        ila.="" she="" has="" been="" manager="" of="" teaching=""
                                                        and="" learning="" in="" nha="" trang="" for="" the="" past=""
                                                        years.="" completed="" celta="" delta,="" well="" director=""
                                                        studies="" train="" trainer="" certifications.="" "}"=""
                                                        data-sheets-userformat="{"
                                                        2":15235,"3":{"1":0},"4":{"1":2,"2":16773836},"10":1,"11":4,"12":0,"14":{"1":2,"2":0},"15":"montserrat","16":12}"="">Matthew
                                                        D. đã làm việc trong lĩnh vực giảng dạy tiếng Anh được 10 năm,
                                                        đầu tiên là ở Anh, sau đó là Nhật Bản trước khi định cư tại Việt
                                                        Nam. Ông có bằng Cử nhân Văn học Anh và chứng chỉ CELTA. Matthew
                                                        đã làm việc tại ILA được 6 năm và giữ chức vụ Quản lý Đào tạo
                                                        hai năm. Matthew hiện đang quản lý các trung tâm tại TP. HCM
                                                        (Quận 9) và Bình Dương (Dĩ An)</span>.</p>
                                                <p><em><strong><span style="color: #2b378b;">“Mục đích của giáo dục là
                                                                thay thế một tâm trí trống rỗng bằng một tâm trí cởi mở”
                                                                – Malcolm Forbes</span></strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box-teacher">
                                <div class="box-image">
                                    <img width="690" height="868"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/Georges-Erhard.jpeg"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="Georges Erhard" decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/Georges-Erhard.jpeg 690w, images/Georges-Erhard-238x300.jpeg 238w"
                                        sizes="100vw">
                                </div>
                                <div class="box-content">
                                    <h3 class="name">Georges</h3>
                                    <p class="center"></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <h3><span style="color: #2b378b;"><strong>Georg<img
                                                                class="alignright wp-image-20716"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/Georges-Erhard.jpeg"
                                                                alt="Georges Erhard" width="400"
                                                                height="503">es</strong></span></h3>
                                                <p><span style="color: #2b378b;"><strong>Quản lý Đào
                                                            tạo </strong></span></p>
                                                <p><span 5="" data-sheets-value="{" 1":2,"2":"after="" moving="" to=""
                                                        vietnam,="" sammie="" started="" as="" a="" teacher="" with=""
                                                        ila.="" she="" has="" been="" manager="" of="" teaching=""
                                                        and="" learning="" in="" nha="" trang="" for="" the="" past=""
                                                        years.="" completed="" celta="" delta,="" well="" director=""
                                                        studies="" train="" trainer="" certifications.="" "}"=""
                                                        data-sheets-userformat="{"
                                                        2":15235,"3":{"1":0},"4":{"1":2,"2":16773836},"10":1,"11":4,"12":0,"14":{"1":2,"2":0},"15":"montserrat","16":12}"="">Georges
                                                        đã tham gia vào lĩnh vực giáo dục và đào tạo từ năm 1999. Sau
                                                        khi tốt nghiệp Đại học Manchester Metropolitan với bằng Kỹ sư
                                                        phần mềm, anh chuyển sang huấn luyện và giảng dạy thiết kế web
                                                        tại trường cao đẳng loại 6. Sau khi rời Vương quốc Anh, anh
                                                        chuyển sang học các môn thể thao ngoài trời (lặn, chèo thuyền,
                                                        hoạt động ngoài trời, sơ cứu). Năm 2015, anh thi CELTA và bắt
                                                        đầu dạy tiếng Anh. Anh gia nhập ILA cùng năm và từ đó tiếp tục
                                                        quản lý 3 trung tâm khác nhau với vị trí Quản lý Đào tạo. Anh
                                                        hiện có chứng chỉ Cambridge Train the Trainer và là thành viên
                                                        của nhóm huấn luyện DELTA. Hiện anh đang chuẩn bị lấy chứng chỉ
                                                        DELTA.</span></p>
                                                <p><em><strong><span style="color: #2b378b;">“Tôi ngạc nhiên là ngày nay
                                                                chúng ta không quan tâm đến những thứ như vật lý, không
                                                                gian, vũ trụ và triết lý về sự tồn tại, mục đích, đích
                                                                đến cuối cùng của chúng ta. Ngoài kia là một thế giới
                                                                điên rồ. Hãy tò mò" - Stephan
                                                                Hawking</span></strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box-teacher">
                                <div class="box-image">
                                    <img width="690" height="868"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/Athos-Tsiopani.jpeg"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="Athos Tsiopani" decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/Athos-Tsiopani.jpeg 690w, images/Athos-Tsiopani-238x300.jpeg 238w"
                                        sizes="100vw">
                                </div>
                                <div class="box-content">
                                    <h3 class="name">Athos</h3>
                                    <p class="center"></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <h3><span style="color: #2b378b;"><strong>Athos<img
                                                                class="alignright wp-image-20717"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/Athos-Tsiopani.jpeg"
                                                                alt="Athos Tsiopani" width="400"
                                                                height="503"></strong></span></h3>
                                                <p><span style="color: #2b378b;"><strong>Quản lý Đào
                                                            tạo </strong></span></p>
                                                <p><span 5="" data-sheets-value="{" 1":2,"2":"after="" moving="" to=""
                                                        vietnam,="" sammie="" started="" as="" a="" teacher="" with=""
                                                        ila.="" she="" has="" been="" manager="" of="" teaching=""
                                                        and="" learning="" in="" nha="" trang="" for="" the="" past=""
                                                        years.="" completed="" celta="" delta,="" well="" director=""
                                                        studies="" train="" trainer="" certifications.="" "}"=""
                                                        data-sheets-userformat="{"
                                                        2":15235,"3":{"1":0},"4":{"1":2,"2":16773836},"10":1,"11":4,"12":0,"14":{"1":2,"2":0},"15":"montserrat","16":12}"="">Athos
                                                        có nền tảng về âm nhạc, nghệ thuật và có bằng thạc sĩ về sáng
                                                        tác. Anh đã làm việc với những thanh niên có nhu cầu đặc biệt
                                                        trong nhiều năm. Điều này khiến anh bắt đầu quan tâm đến việc
                                                        theo đuổi sự nghiệp giáo dục. Anh đã thi CELTA vào năm 2017, gia
                                                        nhập ILA vào năm 2018 và trở thành Quản lý đốc Đào tạo vào năm
                                                        2019. Anh hiện đang hoàn thành module DELTA cuối cùng.<br>
                                                    </span></p>
                                                <p><span 5="" data-sheets-value="{" 1":2,"2":"after="" moving="" to=""
                                                        vietnam,="" sammie="" started="" as="" a="" teacher="" with=""
                                                        ila.="" she="" has="" been="" manager="" of="" teaching=""
                                                        and="" learning="" in="" nha="" trang="" for="" the="" past=""
                                                        years.="" completed="" celta="" delta,="" well="" director=""
                                                        studies="" train="" trainer="" certifications.="" "}"=""
                                                        data-sheets-userformat="{"
                                                        2":15235,"3":{"1":0},"4":{"1":2,"2":16773836},"10":1,"11":4,"12":0,"14":{"1":2,"2":0},"15":"montserrat","16":12}"="">Athos
                                                        rất am hiểu khoa học và anh thích đọc về giáo dục cũng như cách
                                                        để học sinh học tập hiệu quả. Anh đam mê giảng dạy và luôn mong
                                                        muốn được làm việc với các học sinh cũng như giáo viên tại ILA
                                                        Rạch Giá và giúp họ phát triển.</span></p>
                                                <p><em><strong><span style="color: #2b378b;">“Thành công là một môn khoa
                                                                học. Nếu bạn có điều kiện, bạn sẽ có được kết quả" -
                                                                Oscar Wilde</span></strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box-teacher">
                                <div class="box-image">
                                    <img width="690" height="868"
                                        src="<?php echo THEME_URI . '/assets/'; ?>images/Kenyon-Stansfield.jpeg"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="Kenyon Stansfield" decoding="async"
                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/Kenyon-Stansfield.jpeg 690w, images/Kenyon-Stansfield-238x300.jpeg 238w"
                                        sizes="100vw">
                                </div>
                                <div class="box-content">
                                    <h3 class="name">Kenyon</h3>
                                    <p class="center"></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <h3><span style="color: #2b378b;"><strong>Kenyo<img
                                                                class="alignright wp-image-20718"
                                                                src="<?php echo THEME_URI . '/assets/'; ?>images/Kenyon-Stansfield.jpeg"
                                                                alt="Kenyon Stansfield" width="400"
                                                                height="503">n</strong></span></h3>
                                                <p><span style="color: #2b378b;"><strong>Quản lý Đào
                                                            tạo </strong></span></p>
                                                <p><span 5="" data-sheets-value="{" 1":2,"2":"after="" moving="" to=""
                                                        vietnam,="" sammie="" started="" as="" a="" teacher="" with=""
                                                        ila.="" she="" has="" been="" manager="" of="" teaching=""
                                                        and="" learning="" in="" nha="" trang="" for="" the="" past=""
                                                        years.="" completed="" celta="" delta,="" well="" director=""
                                                        studies="" train="" trainer="" certifications.="" "}"=""
                                                        data-sheets-userformat="{"
                                                        2":15235,"3":{"1":0},"4":{"1":2,"2":16773836},"10":1,"11":4,"12":0,"14":{"1":2,"2":0},"15":"montserrat","16":12}"="">Kenyon
                                                        có chứng chỉ TESOL & DELTA M1, hiện đang giữ chức vụ Quản lý Đào
                                                        tạo cho ILA Bình Dương 1 & 2. Trước khi chuyển đến Việt Nam, anh
                                                        đã hoàn thành bằng Lịch sử của Đại học Huddersfield và làm
                                                        Chuyên gia Lưu giữ cho công ty viễn thông lớn nhất Vương quốc
                                                        Anh: BT. </span></p>
                                                <p><span 5="" data-sheets-value="{" 1":2,"2":"after="" moving="" to=""
                                                        vietnam,="" sammie="" started="" as="" a="" teacher="" with=""
                                                        ila.="" she="" has="" been="" manager="" of="" teaching=""
                                                        and="" learning="" in="" nha="" trang="" for="" the="" past=""
                                                        years.="" completed="" celta="" delta,="" well="" director=""
                                                        studies="" train="" trainer="" certifications.="" "}"=""
                                                        data-sheets-userformat="{"
                                                        2":15235,"3":{"1":0},"4":{"1":2,"2":16773836},"10":1,"11":4,"12":0,"14":{"1":2,"2":0},"15":"montserrat","16":12}"="">Trong
                                                        3 năm làm việc tại ILA, anh từng giữ chức vụ giáo viên, giáo
                                                        viên cao cấp và hiện là quản lý. Niềm đam mê của Kenyon là mang
                                                        đến chất lượng giảng dạy cao ở Việt Nam và thúc đẩy sự phát
                                                        triển của giáo viên cũng như học sinh.</span></p>
                                                <p><em><strong><span style="color: #2b378b;">“Nghệ thuật giảng dạy là
                                                                nghệ thuật hỗ trợ khám phá” - Mark Van
                                                                Doren</span></strong></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="title-blog">
                                <h2>ILAVERSE</h2>
                            </div>
                            <div class="quote-heading">Chào mừng bạn đến với thế giới của ILAVerse – nơi bạn có thể tìm
                                thấy tất cả bí quyết học tiếng Anh, mẹo nuôi dạy và chăm sóc con cái… để con trưởng
                                thành hơn mỗi ngày.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="blog-main blog-first">
                                <div class="blog-thumbnail">
                                    <a href="https://ila.edu.vn/loi-ich-cua-viec-hoc-tieng-anh"><img width="885"
                                            height="588"
                                            src="<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-hoc-tieng-anh-lop-4-1.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            decoding="async"
                                            srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-hoc-tieng-anh-lop-4-1.jpg 885w, images/ila-cach-hoc-tieng-anh-lop-4-1-300x199.jpg 300w, images/ila-cach-hoc-tieng-anh-lop-4-1-768x510.jpg 768w"
                                            sizes="100vw"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-content-title">
                                        <h3><a href="https://ila.edu.vn/loi-ich-cua-viec-hoc-tieng-anh">15 lợi ích của
                                                việc học tiếng Anh bạn cần biết</a></h3>
                                    </div>
                                    <div class="blog-archive arrow-before">
                                        <span><a href="https://ila.edu.vn/bi-kip-hoc-tieng-anh">Bí kíp học tiếng
                                                Anh</a></span>
                                    </div>
                                    <div class="blog-content-description">
                                        Tại sao nên học tiếng Anh? Bạn sẽ đạt được điều gì với ngôn ngữ thứ hai này? Hãy
                                        cùng ILA điểm qua 15 lợi ích của việc học tiếng Anh. Chắc chắn sau khi biết được
                                        những điều tuyệt vời này, bạn sẽ muốn học ngoại& </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="blog-main">
                                            <div class="blog-thumbnail">
                                                <a href="https://ila.edu.vn/cach-hoc-thuoc-tu-vung-tieng-anh"><img
                                                        width="885" height="588"
                                                        src="<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-hoc-thuoc-tu-vung-tieng-anh-2.jpg"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="Cách học thuộc từ vựng tiếng Anh: 12 mẹo học nhớ lâu hiệu quả"
                                                        decoding="async"
                                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-cach-hoc-thuoc-tu-vung-tieng-anh-2.jpg 885w, images/ila-cach-hoc-thuoc-tu-vung-tieng-anh-2-300x199.jpg 300w, images/ila-cach-hoc-thuoc-tu-vung-tieng-anh-2-768x510.jpg 768w"
                                                        sizes="100vw"></a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-content-title">
                                                    <h3><a href="https://ila.edu.vn/cach-hoc-thuoc-tu-vung-tieng-anh">Cách
                                                            học thuộc từ vựng tiếng Anh: 12 mẹo học nhớ lâu hiệu quả</a>
                                                    </h3>
                                                </div>
                                                <div class="blog-archive arrow-before">
                                                    <span><a href="https://ila.edu.vn/bi-kip-hoc-tieng-anh">Bí kíp học
                                                            tiếng Anh</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="blog-main">
                                            <div class="blog-thumbnail">
                                                <a href="https://ila.edu.vn/hoc-ngu-phap-tieng-anh-co-ban"><img
                                                        width="885" height="588"
                                                        src="<?php echo THEME_URI . '/assets/'; ?>images/ila-ngu-phap-tieng-anh-co-ban-cho-hoc-sinh-tieu-hoc-3.jpg"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="ngữ pháp tiếng Anh cơ bản cho học sinh tiểu học"
                                                        decoding="async"
                                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-ngu-phap-tieng-anh-co-ban-cho-hoc-sinh-tieu-hoc-3.jpg 885w, images/ila-ngu-phap-tieng-anh-co-ban-cho-hoc-sinh-tieu-hoc-3-300x199.jpg 300w, images/ila-ngu-phap-tieng-anh-co-ban-cho-hoc-sinh-tieu-hoc-3-768x510.jpg 768w"
                                                        sizes="100vw"></a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-content-title">
                                                    <h3><a href="https://ila.edu.vn/hoc-ngu-phap-tieng-anh-co-ban">Học
                                                            ngữ pháp tiếng Anh cơ bản cho người mới bắt đầu</a></h3>
                                                </div>
                                                <div class="blog-archive arrow-before">
                                                    <span><a href="https://ila.edu.vn/bi-kip-hoc-tieng-anh">Bí kíp học
                                                            tiếng Anh</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="blog-main">
                                            <div class="blog-thumbnail">
                                                <a href="https://ila.edu.vn/lo-trinh-hoc-tieng-anh-cho-be"><img
                                                        width="885" height="588"
                                                        src="<?php echo THEME_URI . '/assets/'; ?>images/ila-lo-trinh-hoc-tieng-anh-cho-be-2.jpg"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="sai lầm khi học giao tiếp tiếng Anh" decoding="async"
                                                        srcset="<?php echo THEME_URI . '/assets/'; ?>images/ila-lo-trinh-hoc-tieng-anh-cho-be-2.jpg 885w, images/ila-lo-trinh-hoc-tieng-anh-cho-be-2-300x199.jpg 300w, images/ila-lo-trinh-hoc-tieng-anh-cho-be-2-768x510.jpg 768w"
                                                        sizes="100vw"></a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-content-title">
                                                    <h3><a href="https://ila.edu.vn/lo-trinh-hoc-tieng-anh-cho-be">Lộ
                                                            trình học tiếng Anh cho trẻ từ mầm non tới tiểu học</a></h3>
                                                </div>
                                                <div class="blog-archive arrow-before">
                                                    <span><a href="https://ila.edu.vn/lam-ban-cung-con">Làm bạn cùng
                                                            con</a></span>
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
        </main>
    </div>
</div>
<!-- Content End -->

<?php
get_footer();
