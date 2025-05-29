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
	<link rel="stylesheet" href="<?php echo THEME_URI . '/assets/'; ?>css/single.css" media="all">
	<link rel="stylesheet" href="<?php echo THEME_URI . '/assets/'; ?>css/single-custom.css" media="all">
	<link rel="stylesheet" id="ez-toc-css" href="<?php echo THEME_URI . '/assets/'; ?>css/screen.min.css" media="all" />
	<link rel="stylesheet" id="video-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/video.min.css"
		media="all" />
	<link rel="stylesheet" id="page-center-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/center.css"
		media="all" />
	<?php if (!is_page_template('page-study_program.php')) { ?>
		<link rel="stylesheet" id="category-css-css" href="<?php echo THEME_URI . '/assets/'; ?>css/archive.css"
			media="all" />
	<?php } ?>
	<?php if (is_page_template('page-recruitment_study_abroad.php')) { ?>
		<link rel="stylesheet" id="page-ola-or-ielts-custom-css-css"
			href="<?php echo THEME_URI . '/assets/'; ?>css/ola-or-ielts.css" media="all" />
	<?php } ?>

	<!-- page 2 -->
	<?php if (is_page_template('page-seminar_event.php') || is_page_template('page-study_solutions_details.php') ||  is_page_template('page-study_solutions.php')) { ?>
		<link rel="stylesheet" id="fptheme-fonts-css" href="<?php echo THEME_URI . '/assets_2/'; ?>css/font-nunito-sans.css" media="all">
		<link rel="stylesheet" id="fptheme-style-css" href="<?php echo THEME_URI . '/assets_2/'; ?>css/style_1.css" media="all">
		<link rel="stylesheet" id="magnific-popup-css-css" href="<?php echo THEME_URI . '/assets_2/'; ?>css/magnific-popup.min.css" media="all">
		<link rel="stylesheet" id="swiper-css-css" href="<?php echo THEME_URI . '/assets_2/'; ?>css/swiper-bundle.min.css" media="all">
		<link rel="stylesheet" id="fptheme-style-css-css" href="<?php echo THEME_URI . '/assets_2/'; ?>css/style.css" media="all">
		<link rel="stylesheet" id="archive-css-css" href="<?php echo THEME_URI . '/assets_2/'; ?>css/archive-main.css" media="all">
		<link rel="stylesheet" id="page-template-product-list-css-css" href="<?php echo THEME_URI . '/assets_2/'; ?>css/page-product-list.css" media="all">
		<link rel="stylesheet" id="page-product-details-css-css" href="<?php echo THEME_URI . '/assets_2/'; ?>css/page-product-details.css" media="all">
	<?php } ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<?php
	$lang = '';
	if (LANG == 'en') {
		$lang = '_en';
	}

	$logo = get_field('logo', 'option') ?: THEME_URI . '/assets/img_new/logo.webp';
	?>
	<header class="main-header">

		<?php
		$header_top = get_field('header_top' . $lang, 'option') ?: [];
		?>
		<div class="nav-header-top">
			<div class="container">
				<ul class="nav-header-flex">
					<li class="nav-header-item"></li>
					<?php
					foreach ($header_top as $item) :
					?>
						<li class="nav-header-item">
							<a href="<?php echo $item['link']['url'] ?: '#'; ?>" target="_blank">
								#<?php echo $item['link']['title'] ?: 'Link'; ?>
							</a>
						</li>
					<?php
					endforeach;
					?>
				</ul>
			</div>
		</div>

		<div class="nav-main-menu" id="myHeader">
			<div class="container">
				<div class="navbar-mobile">
					<div class="polylang-language-mobile">
						<ul>
							<li class="lang-item lang-item-7 lang-item-en lang-item-first">
								<a lang="en-US" hreflang="en-US" href="<?php echo home_url(); ?>">
									<img width="37" height="28" src="<?php echo THEME_URI . '/assets/'; ?>images/en_US.png" alt="English" />
								</a>
							</li>
						</ul>
					</div>

					<div class="row">
						<div class="col-6">
							<div class="logo-mobile">
								<a href="https://ila.edu.vn/" class="custom-logo-link" rel="home" aria-current="page">
									<img width="250" height="107" src="<?php echo $logo; ?>" class="custom-logo" alt="logo ila 30 năm" decoding="async" sizes="100vw" />
								</a>
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
					<a href="<?php echo home_url(); ?>" class="custom-logo-link" rel="home" aria-current="page">
						<img width="250" height="107" src="<?php echo $logo; ?>" class="custom-logo" alt="logo ila 30 năm" decoding="async" sizes="100vw" />
					</a>

					<?php
					$menu_settings = get_field('menu_setting' . $lang, 'option') ?: [];

					foreach ($menu_settings as $index => $menu) {
						$link = $menu['link'] ?? null;
						$has_sub_menu = $menu['sub_menu'] === 'yes';

						if (!$link || !$link['title'] || !$link['url']) {
							continue;
						}

						if (!$has_sub_menu) {
							// Menu không có submenu
							echo '<a class="" href="' . $link['url'] . '">' . $link['title'] . '</a>';
						} else {
							// Menu có submenu: xử lý 3 cột
							echo '<div class="navbar-dropdown-item dropdown-item-' . $index . '">';
							echo '<button class="dropbtn">';
							echo '<a class="" href="' . $link['url'] . '">' . $link['title'] . ' <i class="fa fa-angle-down"></i></a>';
							echo '</button><button class="btn-dropdown-mb"><i class="fa fa-angle-down"></i></button>';

							echo '<div class="dropdown-content">';
							echo '<div class="container">';
							echo '<div class="row">';

							for ($i = 1; $i <= 3; $i++) {
								$column_key = 'column_' . $i;
								if (!empty($menu[$column_key])) {
									echo '<div class="column">';
									foreach ($menu[$column_key] as $col_item) {
										$sub_link = $col_item['link'] ?? null;
										if ($sub_link && $sub_link['title'] && $sub_link['url']) {
											echo '<a class="" href="' . $sub_link['url'] . '">' . $sub_link['title'] . '</a>';
										}
									}
									echo '</div>';
								}
							}

							echo '</div>'; // .row
							echo '</div>'; // .container
							echo '</div>'; // .dropdown-content
							echo '</div>'; // .navbar-dropdown-item
						}
					}
					?>

					<?php
					$current_lang = pll_current_language();
					$vi_url = get_permalink(pll_get_post(get_the_ID(), 'vi'));
					$en_url = get_permalink(pll_get_post(get_the_ID(), 'en'));
					?>

					<div class="navbar-dropdown-item ila-language dropdown-item-5">
						<button class="dropbtn">
							<img width="37" height="25" src="<?php echo THEME_URI . '/assets/'; ?>images/<?php echo $current_lang === 'vi' ? 'vi.png' : 'en_US.png'; ?>" alt="<?php echo $current_lang === 'vi' ? 'Tiếng Việt' : 'English'; ?>" />
							<i class="fa fa-angle-down"></i>
						</button>
						<div class="dropdown-content">
							<div class="container">
								<div class="row">
									<div class="column">
										<a class="lang-item lang-item-vi lang-item-4 lang-item-first <?php echo $current_lang === 'vi' ? 'current-lang' : ''; ?>" href="<?php echo esc_url($vi_url); ?>">
											<img width="37" height="25" src="<?php echo THEME_URI . '/assets/'; ?>images/vi.png" alt="Tiếng Việt" />
										</a>
									</div>
									<div class="column">
										<a class="lang-item lang-item-en lang-item-7 <?php echo $current_lang === 'en' ? 'current-lang' : ''; ?>" href="<?php echo esc_url($en_url); ?>">
											<img width="37" height="28" src="<?php echo THEME_URI . '/assets/'; ?>images/en_US.png" alt="English" />
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- Đăng ký ngay -->
					<?php
					$sign_up_now = get_field('sign_up_now' . $lang, 'option') ?? null;
					if ($sign_up_now && $sign_up_now['title'] && $sign_up_now['url']): ?>
						<button class="btn-register">
							<a href="<?php echo $sign_up_now['url']; ?>">
								<?php echo $sign_up_now['title']; ?>
							</a>
						</button>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<!-- add_script_tracking -->
	</header>

	<div class="site-content-contain">