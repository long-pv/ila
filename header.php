<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xemer_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- fonts -->
	<link rel="stylesheet" type="text/css"
		href="https://fonts.googleapis.com/css?display=swap&family=Montserrat:300,400|Roboto:300,400&subset=latin"
		media="all">

	<!-- style -->
	<link rel="stylesheet" id="wp-block-library-css" href="<?php echo THEME_URI . '/assets/'; ?>css/style.min.css"
		media="all" />
	<link rel="stylesheet" id="email-subscribers-css"
		href="<?php echo THEME_URI . '/assets/'; ?>css/email-subscribers-public.css" media="all">
	<link rel="stylesheet" id="fptheme-style-css" href="<?php echo THEME_URI . '/assets/'; ?>css/style.css" media="all">
	<link rel="stylesheet" id="animation-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/animate.css"
		media="all">
	<link rel="stylesheet" id="owl-carousel-css-css"
		href="<?php echo THEME_URI . '/assets/'; ?>css/owl.carousel.min.css" media="all">
	<link rel="stylesheet" id="magnific-popup-css-css"
		href="<?php echo THEME_URI . '/assets/'; ?>css/magnific-popup.css" media="all">
	<link rel="stylesheet" id="swiper-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/swiper.min.css"
		media="all">
	<link rel="stylesheet" id="owl-carousel-theme-default-css-css"
		href="<?php echo THEME_URI . '/assets/'; ?>css/owl.theme.default.min.css" media="all">
	<link rel="stylesheet" id="font-awesome-6-css" href="<?php echo THEME_URI . '/assets/'; ?>css/all.min.css"
		media="all">
	<link rel="stylesheet" id="bootstrap-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/bootstrap.min.css"
		media="all">
	<link rel="stylesheet" id="footer-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/footer.css" media="all">
	<link rel="stylesheet" id="custom-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/custom.css" media="all">
	<link rel="stylesheet" id="list-center-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/list-center.css"
		media="all">
	<link rel="stylesheet" id="video-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/video.min.css" media="all">
	<link rel="stylesheet" id="homepage-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/homepage.css"
		media="all">
	<link rel="stylesheet" id="page-404-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/error.css" media="all">
	<link rel="stylesheet" id="page-custom-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/template-custom.css"
		media="all">
	<link rel="stylesheet" id="fptheme-block-style-css" href="<?php echo THEME_URI . '/assets/'; ?>css/blocks.css"
		media="all">
	<link rel="stylesheet" id="tablepress-default-css"
		href="<?php echo THEME_URI . '/assets/'; ?>css/tablepress-combined.min.css" media="all">
	<link rel="stylesheet" id="addtoany-css" href="<?php echo THEME_URI . '/assets/'; ?>css/addtoany.min.css"
		media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo THEME_URI . '/assets/'; ?>css/smartslider.min.css"
		media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo THEME_URI . '/assets/'; ?>css/css_index.css" media="all">
	<script async="" src="<?php echo THEME_URI . '/assets/'; ?>js/page.js" id="addtoany-core-js"></script>
	<script src="<?php echo THEME_URI . '/assets/'; ?>js/jquery.min.js" id="jquery-core-js"></script>
	<script src="<?php echo THEME_URI . '/assets/'; ?>js/jquery-migrate.min.js" id="jquery-migrate-js"></script>
	<script async="" src="<?php echo THEME_URI . '/assets/'; ?>js/addtoany.min.js" id="addtoany-jquery-js"></script>
	<script async="" src="<?php echo THEME_URI . '/assets/'; ?>js/owl.carousel.min.js" id="owl-carousel-js-js"></script>
	<?php if (is_page_template('page-about_us.php')) { ?>
		<link rel="stylesheet" href="<?php echo THEME_URI . '/assets/'; ?>css/about-us.css" media="all">
	<?php } ?>
	<link rel="stylesheet" href="<?php echo THEME_URI . '/assets/'; ?>css/jumpstart.css" media="all">
	<link rel="stylesheet" href="<?php echo THEME_URI . '/assets/'; ?>css/facility.css" media="all">
	<link rel="stylesheet" href="<?php echo THEME_URI . '/assets/'; ?>css/page-template-teacher.css" media="all">
	<link rel="stylesheet" href="<?php echo THEME_URI . '/assets/'; ?>css/page-template-teacher.css" media="all">

	<!-- vucoder -->
	<link rel="stylesheet" href="<?php echo THEME_URI . '/assets/'; ?>css/archive.css" media="all">
	<link rel="stylesheet" href="<?php echo THEME_URI . '/assets/'; ?>css/single.css" media="all">
	<link rel="stylesheet" href="<?php echo THEME_URI . '/assets/'; ?>css/single-custom.css" media="all">
	<link rel="stylesheet" id="ez-toc-css" href="<?php echo THEME_URI . '/assets/'; ?>css/screen.min.css" media="all" />
	<link rel="stylesheet" id="video-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/video.min.css" media="all" />
	<!--  -->
	<!--  -->
	<!--  -->


	<!-- longpv -->
	<!--  -->
	<!--  -->
	<!--  -->
	<link rel="stylesheet" id="page-center-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/center.css" media="all" />
	<link rel="stylesheet" id="category-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/archive.css" media="all" />
	<?php if (is_page_template('page-recruitment_study_abroad.php')) { ?>
		<link rel="stylesheet" id="page-ola-or-ielts-custom-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/ola-or-ielts.css" media="all" />
	<?php } ?>


	<!-- video home -->
	<script src="<?php echo THEME_URI . '/assets/'; ?>js/n2.min.js" defer="" async=""></script>
	<script src="<?php echo THEME_URI . '/assets/'; ?>js/smartslider-frontend.min.js" defer="" async=""></script>
	<script src="<?php echo THEME_URI . '/assets/'; ?>js/ss-simple.min.js" defer="" async=""></script>
	<script src="<?php echo THEME_URI . '/assets/'; ?>js/w-bullet.min.js" defer="" async=""></script>
	<script src="<?php echo THEME_URI . '/assets/'; ?>js/index_add.js" defer="" async=""></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="main-header">
		<div class="nav-header-top">
			<div class="container">
				<ul class="nav-header-flex">
					<li class="nav-header-item"></li>

					<li class="nav-header-item">
						<a href="https://ila.edu.vn/moi-hop-tac" target="_blank">#ƯU ĐÃI</a>
					</li>

					<li class="nav-header-item">
						<a href="https://hocbongtrondoi.ila.edu.vn/" target="_blank">#HỌC BỔNG TRỌN ĐỜI</a>
					</li>

					<li class="nav-header-item">
						<a href="https://speakup.ila.edu.vn/" target="_blank">#SPEAK UP</a>
					</li>

					<li class="nav-header-item">
						<a href="https://connect.ila.edu.vn/login/index.php" target="_blank">#ILA Connect</a>
					</li>

					<li class="nav-header-item">
						<a href="https://ilo.edu.vn/" target="_blank">#ILO</a>
					</li>

					<li class="nav-header-item">
						<a href="https://www.ola-academy.edu.vn/" target="_blank">#OLA</a>
					</li>

					<li class="nav-header-item">
						<a href="https://ila.edu.vn/tu-van-du-hoc-ila-osc" target="_blank">#ILA DU HỌC</a>
					</li>

					<li class="nav-header-item">
						<a href="https://ila.edu.vn/tieng-anh-chuyen-nganh-cho-nguoi-di-lam" target="_blank">#TIẾNG ANH
							DOANH NGHIỆP</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="nav-main-menu" id="myHeader">
			<div class="container">
				<div class="navbar-mobile">
					<div class="polylang-language-mobile">
						<ul>
							<li class="lang-item lang-item-7 lang-item-en lang-item-first">
								<a lang="en-US" hreflang="en-US" href="https://ila.edu.vn/en/"><img width="37"
										height="28" src="<?php echo THEME_URI . '/assets/'; ?>images/en_US.png"
										alt="English" /></a>
							</li>
						</ul>
					</div>

					<div class="row">
						<div class="col-6">
							<div class="logo-mobile">
								<a href="https://ila.edu.vn/" class="custom-logo-link" rel="home"
									aria-current="page"><img width="250" height="107"
										src="<?php echo THEME_URI . '/assets/'; ?>images/logo-ila-30-nam.jpg"
										class="custom-logo" alt="logo ila 30 năm" decoding="async" sizes="100vw" /></a>
							</div>
						</div>

						<div class="col-6">
							<div class="icon-bar-mobile">
								<i class="fa-light fa-bars"></i>
							</div>
						</div>
					</div>
				</div>

				<div class="navbar-menu">
					<div class="menu-icon-close"><i class="fa-regular fa-xmark"></i></div>
					<a href="https://ila.edu.vn/" class="custom-logo-link" rel="home" aria-current="page">
						<img width="250" height="107"
							src="<?php echo THEME_URI . '/assets/'; ?>images/logo-ila-30-nam.jpg" class="custom-logo"
							alt="logo ila 30 năm" decoding="async" sizes="100vw" />
					</a>
					<a class="" href="https://ila.edu.vn/gioi-thieu-ila-viet-nam">Giới thiệu</a>
					<div class="navbar-dropdown-item dropdown-item-1">
						<button class="dropbtn">
							<a class="" href="#">Chương trình học <i class="fa fa-angle-down"></i></a></button><button
							class="btn-dropdown-mb"><i class="fa fa-angle-down"></i></button>
						<div class="dropdown-content">
							<div class="container">
								<div class="row">
									<div class="column">
										<a class="" href="#">Tiếng Anh cao cấp</a><a class=""
											href="https://ila.edu.vn/tieng-anh-mam-non-3-6-tuoi">Tiếng Anh Mầm non (3-6
											tuổi)</a><a class=""
											href="https://ila.edu.vn/tieng-anh-tieu-hoc-6-11-tuoi">Tiếng Anh Tiểu học
											(6-11 tuổi)</a><a class=""
											href="https://ila.edu.vn/tieng-anh-trung-hoc-11-16-tuoi">Tiếng Anh Trung học
											(11-16 tuổi)</a><a class=""
											href="https://ila.edu.vn/tieng-anh-chuyen-nganh-cho-nguoi-di-lam">Tiếng Anh
											Chuyên ngành (cho người đi làm)</a><a class=""
											href="https://ila.edu.vn/tieng-anh-steam-4-10-tuoi">Tiếng Anh STEAM - IMATHS
											(4-10 tuổi)</a>
									</div>
									<div class="column"><a class="" href="#">Tiếng Anh tiêu chuẩn</a><a class=""
											href="https://ila.edu.vn/tieng-anh-tieu-chuan-ola-3-16-tuoi">Tiếng Anh OLA
											(3-16 tuổi)</a></div>
									<div class="column"><a class="" href="#">Luyện thi & Du học</a><a class=""
											href="https://ila.edu.vn/chuong-trinh-luyen-thi-ielts-sat">Luyện thi IELTS -
											SAT</a><a class="" href="https://ila.edu.vn/tu-van-du-hoc-ila-osc">ILA Du
											học</a><a class="custom-style"
											href="https://ila.edu.vn/he-thong-mam-non-phan-lan-ilo-2-6-tuoi">Hệ thống
											mầm non Phần Lan ILO (2-6 tuổi)</a></div>
								</div>
							</div>
						</div>
					</div>
					<a class="" href="https://ila.edu.vn/co-so-vat-chat">Cơ sở vật chất</a><a class=""
						href="https://ila.edu.vn/giao-vien-tai-ila">Giáo viên</a>
					<div class="navbar-dropdown-item dropdown-item-2 centers-style">
						<button class="dropbtn">
							<a class="centers-style" href="/trung-tam-dao-tao">Trung tâm <i
									class="fa fa-angle-down"></i></a></button><button class="btn-dropdown-mb"><i
								class="fa fa-angle-down"></i></button>
						<div class="dropdown-content">
							<div class="container">
								<div class="row">
									<div class="column">
										<a class="city city-hcm" href="/trung-tam-dao-tao?city=60">HỒ CHÍ MINH</a><a
											class=""
											href="/trung-tam-dao-tao?city=60&district=1&center=ila-nguyen-trai">ILA
											Nguyễn Trãi</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=2&center=ila-tran-nao">ILA Trần
											Não</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=1&center=ila-mac-dinh-chi">ILA Mạc
											Đĩnh Chi</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=5&center=ila-hung-vuong">ILA Hùng
											Vương</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=8&center=ila-ta-quang-buu">ILA Tạ
											Quang Bửu</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=6&center=ila-phu-lam">ILA Phú
											Lâm</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=6&center=ila-vo-van-kiet">ILA Võ
											Văn Kiệt</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=7&center=ila-him-lam">ILA Him
											Lam</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=7&center=ila-huynh-tan-phat">ILA
											Huỳnh Tấn Phát</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=7&center=ila-phu-my-hung">ILA Phú
											Mỹ Hưng</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=9&center=ila-le-van-viet">ILA Lê
											Văn Việt</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=10&center=ila-su-van-hanh">ILA Sư
											Vạn Hạnh</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=12&center=ila-nguyen-anh-thu">ILA
											Nguyễn Ảnh Thủ</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=13&center=ila-cong-hoa">ILA Cộng
											Hòa</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=12&center=ila-phan-van-hon">ILA
											Phan Văn Hớn</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=13&center=ila-hoang-van-thu">ILA
											Hoàng Văn Thụ</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=14&center=ila-phan-xich-long">ILA
											Phan Xích Long</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=14&center=ila-hong-ha">ILA Hồng
											Hà</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=15&center=ila-bat-nan">ILA Đảo Kim
											Cương</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=15&center=ila-vincom-thu-duc">ILA
											Vincom Thủ Đức</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=15&center=ila-nguyen-duy-trinh">ILA
											Nguyễn Duy Trinh</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=15&center=ila-pham-van-dong">ILA
											Phạm Văn Đồng</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=15&center=ila-metropole">ILA
											Metropole</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=16&center=ila-go-vap">ILA Gò
											Vấp</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=16&center=ila-quang-trung">ILA
											Quang Trung</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=17&center=ila-pham-hung">ILA Phạm
											Hùng</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=18&center=ila-hoa-binh">ILA Hòa
											Bình</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=18&center=ila-thoai-ngoc-hau">ILA
											Thoại Ngọc Hầu</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=18&center=ila-tan-phu">ILA Tân
											Phú</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=20&center=ila-nguyen-xi">ILA
											Nguyễn Xí</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=20&center=ila-nguyen-huu-canh">ILA
											Nguyễn Hữu Cảnh</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=19&center=ila-binh-tan">ILA Bình
											Tân</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=21&center=ila-hoc-mon">ILA Hóc
											Môn</a><a class=""
											href="/trung-tam-dao-tao?city=60&district=4&center=ila-ben-van-don">ILA Bến
											Vân Đồn</a>
									</div>
									<div class="column">
										<a class="city" href="/trung-tam-dao-tao?city=30">HÀ NỘI</a><a class=""
											href="/trung-tam-dao-tao?city=30&district=1&center=ila-aeon-long-bien">ILA
											Aeon Long Biên</a><a class=""
											href="/trung-tam-dao-tao?city=30&district=1&center=ila-long-bien">ILA Long
											Biên</a><a class=""
											href="/trung-tam-dao-tao?city=30&district=2&center=ila-tay-son">ILA Tây
											Sơn</a><a class=""
											href="/trung-tam-dao-tao?city=30&district=3&center=ila-times-city">ILA Times
											City</a><a class=""
											href="/trung-tam-dao-tao?city=30&district=4&center=ila-pho-hue">ILA Phố
											Huế</a><a class=""
											href="/trung-tam-dao-tao?city=30&district=5&center=ila-my-dinh">ILA Mỹ
											Đình</a><a class=""
											href="/trung-tam-dao-tao?city=30&district=6&center=ila-trung-hoa-nhan-chinh">ILA
											Trung Hòa Nhân Chính</a><a class="city"
											href="/trung-tam-dao-tao?city=65">CẦN THƠ</a><a class=""
											href="/trung-tam-dao-tao?city=65&district=6&center=ila-tay-do">ILA Tây
											Đô</a><a class=""
											href="/trung-tam-dao-tao?city=65&district=1&center=ila-vincom-xuan-khanh">ILA
											Vincom Xuân Khánh</a>
									</div>
									<div class="column">
										<a class="city" href="/trung-tam-dao-tao?city=68">KIÊN GIANG</a><a class=""
											href="/trung-tam-dao-tao?city=68&district=1&center=ila-rach-gia">ILA Rạch
											Giá</a><a class="city" href="/trung-tam-dao-tao?city=61">BÌNH DƯƠNG</a><a
											class=""
											href="/trung-tam-dao-tao?city=61&district=1&center=ila-thu-dau-mot">ILA Thủ
											Dầu Một</a><a class=""
											href="/trung-tam-dao-tao?city=61&district=2&center=ila-aeon-binh-duong">ILA
											Aeon Bình Dương</a><a class=""
											href="/trung-tam-dao-tao?city=61&district=3&center=ila-di-an">ILA Dĩ
											An</a><a class=""
											href="/trung-tam-dao-tao?city=61&district=3&center=ila-di-an">ILA Vincom Dĩ
											An</a><a class=""
											href="/trung-tam-dao-tao?city=61&district=2&center=ila-lai-thieu">ILA Lái
											Thiêu</a><a class="city" href="/trung-tam-dao-tao?city=39">ĐỒNG NAI</a><a
											class=""
											href="/trung-tam-dao-tao?city=39&district=1&center=ila-bien-hoa">ILA Hà Huy
											Giáp - Biên Hòa</a><a class=""
											href="/trung-tam-dao-tao?city=39&district=1&center=ila-dong-khoi-bien-hoa">ILA
											Đồng Khởi - Biên Hòa</a><a class="city"
											href="/trung-tam-dao-tao?city=72">VŨNG TÀU</a><a class=""
											href="/trung-tam-dao-tao?city=72&district=1&center=ila-ba-ria">ILA Bà
											Rịa</a><a class=""
											href="/trung-tam-dao-tao?city=72&district=2&center=ila-vung-tau">ILA Vũng
											Tàu</a>
									</div>
									<div class="column">
										<a class="city" href="/trung-tam-dao-tao?city=79">KHÁNH HÒA</a><a class=""
											href="/trung-tam-dao-tao?city=79&district=1&center=ila-nha-trang">ILA Nha
											Trang</a><a class=""
											href="/trung-tam-dao-tao?city=79&district=1&center=ila-nha-trang">ILA Thích
											Quảng Đức - Nha Trang</a><a class="city"
											href="/trung-tam-dao-tao?city=92">QUẢNG NAM</a><a class=""
											href="/trung-tam-dao-tao?city=92&district=1&center=ila-hoi-an">ILA Hội
											An</a><a class="city" href="/trung-tam-dao-tao?city=43">ĐÀ NẴNG</a><a
											class=""
											href="/trung-tam-dao-tao?city=43&district=1&center=ila-nguyen-van-linh-da-nang">ILA
											Nguyễn Văn Linh</a><a class=""
											href="/trung-tam-dao-tao?city=43&district=1&center=ila-nguyen-huu-tho-da-nang">ILA
											Nguyễn Hữu Thọ</a><a class="city" href="/trung-tam-dao-tao?city=15">HẢI
											PHÒNG</a><a class=""
											href="/trung-tam-dao-tao?city=15&district=1&center=ila-hai-phong">ILA Hải
											Phòng</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="navbar-dropdown-item dropdown-item-3">
						<button class="dropbtn">
							<a class="" href="https://ila.edu.vn/ilaverse">ILAVerse <i
									class="fa fa-angle-down"></i></a></button><button class="btn-dropdown-mb"><i
								class="fa fa-angle-down"></i></button>
						<div class="dropdown-content">
							<div class="container">
								<div class="row">
									<div class="column"><a class=""
											href="https://ila.edu.vn/ilaverse/quy-light-up-the-future">Quỹ Light up the
											future</a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="navbar-dropdown-item dropdown-item-4">
						<button class="dropbtn">
							<a class="" href="https://ila.edu.vn/co-hoi-nghe-nghiep">Tuyển dụng <i
									class="fa fa-angle-down"></i></a></button><button class="btn-dropdown-mb"><i
								class="fa fa-angle-down"></i></button>
						<div class="dropdown-content">
							<div class="container">
								<div class="row">
									<div class="column"><a class="" href="https://teachingenglish.ila.edu.vn/">Tuyển
											dụng Giáo viên nước ngoài</a></div>
									<div class="column"><a class="" href="https://career.ila.edu.vn/">Tuyển dụng nhân
											viên</a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="navbar-dropdown-item ila-language dropdown-item-5">
						<button class="dropbtn">
							<img width="37" height="25" src="<?php echo THEME_URI . '/assets/'; ?>images/vi.png"
								alt="Tiếng Việt" /> <i class="fa fa-angle-down"></i>
						</button>
						<div class="dropdown-content">
							<div class="container">
								<div class="row">
									<div class="column">
										<a class="lang-item lang-item-4 lang-item-vi current-lang lang-item-first"
											href="https://ila.edu.vn/">
											<img width="37" height="25"
												src="<?php echo THEME_URI . '/assets/'; ?>images/vi.png"
												alt="Tiếng Việt" />
										</a>
									</div>
									<div class="column">
										<a class="lang-item lang-item-7 lang-item-en" href="https://ila.edu.vn/en/">
											<img width="37" height="28"
												src="<?php echo THEME_URI . '/assets/'; ?>images/en_US.png"
												alt="English" />
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<button class="btn-register"><a href="https://ila.edu.vn/dang-ky-tu-van">Đăng ký ngay</a></button>
				</div>
			</div>
		</div>

		<!-- add_script_tracking -->
	</header>