<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xemer_theme
 */

get_header();
?>

<div id="content" class="site-content">
	<main class="archive-template archive-default news-event">
		<?php
		$menu_items = get_field('menu_item', 'option') ?? []; // 'option' là theme setting
		if (!empty($menu_items)): ?>
			<section class="section-menu-category">
				<div class="container">
					<div class="list-cate">
						<ul>
							<?php foreach ($menu_items as $item):
								$link = $item['link'];
								if (!empty($link['url']) && !empty($link['title'])):
									$url = esc_url($link['url']);
									$title = esc_html($link['title']);
									$target = isset($link['target']) ? esc_attr($link['target']) : '_self';
							?>
									<li class="navbar-blog-item">
										<a href="<?php echo $url; ?>" target="<?php echo $target; ?>">
											<?php echo $title; ?>
										</a>
									</li>
							<?php
								endif;
							endforeach; ?>
						</ul>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<?php get_header(); ?>

		<?php if (have_posts()): ?>
			<?php
			$current_category = get_queried_object();
			?>
			<section class="section-1">
				<div class="archive-post">
					<div class="container">
						<div class="box-wrapper">
							<div class="row">
								<header class="page-header">
									<h1 class="page-title"><?php echo esc_html($current_category->name); ?></h1>
								</header>
							</div>
							<div class="row">
								<div class="col-lg-8">
									<div class="row">
										<?php
										$post_index = 0;
										while (have_posts()):
											the_post();

											if ($post_index === 0): ?>
												<!-- Bài 1: Bài lớn -->
												<div class="col-lg-8 col-sm-8">
													<div class="post-item post-lg">
														<div class="post-thumbnail">
															<a href="<?php the_permalink(); ?>">
																<?php the_post_thumbnail('full'); ?>
															</a>
														</div>
														<div class="post-content">
															<div class="post-content-title">
																<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
															</div>
															<div class="post-content-description">
																<p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-sm-4">
													<div class="row">
													<?php
												elseif ($post_index === 1 || $post_index === 2): ?>
														<!-- Bài 2 và 3: Bài nhỏ -->
														<div class="col-12">
															<div class="post-item post-sm">
																<div class="post-thumbnail">
																	<a href="<?php the_permalink(); ?>">
																		<?php the_post_thumbnail('full'); ?>
																	</a>
																</div>
																<div class="post-content">
																	<div class="post-content-title">
																		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
																	</div>
																</div>
															</div>
														</div>
														<?php if ($post_index === 2): ?>
													</div> <!-- end .row -->
												</div> <!-- end .col-lg-4 -->
											<?php endif; ?>
										<?php
												elseif ($post_index > 2): ?>
											<?php if ($post_index === 3): ?>
												<div class="article-multiple">
												<?php endif; ?>
												<div class="row article-horizontal">
													<div class="col-4">
														<div class="post-thumbnail">
															<a href="<?php the_permalink(); ?>">
																<?php the_post_thumbnail('full'); ?>
															</a>
														</div>
													</div>
													<div class="col-8">
														<div class="post-content">
															<div class="post-content-title">
																<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
															</div>
															<div class="post-content-description">
																<p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
															</div>
														</div>
													</div>
													<div class="col-12">
														<span class="border-bottom"></span>
													</div>
												</div>
											<?php endif; ?>

										<?php
											$post_index++;
										endwhile;
										if ($post_index > 2): ?>
												</div> <!-- end .article-multiple -->
											<?php endif; ?>

											<!-- Pagination -->
											<div class="panigation-archive" style="text-align: center; margin: 20px 0;">
												<div class="paginate_links">
													<?php
													echo paginate_links(array(
														'total' => $wp_query->max_num_pages,
														'current' => max(1, get_query_var('paged')),
														'mid_size' => 2,
														'prev_text' => '«',
														'next_text' => '»',
													));
													?>
												</div>
											</div>
									</div>
								</div>

								<!-- Sidebar phải -->
								<div class="col-lg-4">
									<?php
									$popular_posts = get_field('popular_posts', 'option') ?? [];
									$popular_posts = array_slice($popular_posts, 0, 5);
									?>

									<?php if (!empty($popular_posts)): ?>
										<div class="related-post">
											<h3 class="related-title">Bài viết phổ biến</h3>
											<div class="row">
												<?php
												$popular_query = new WP_Query(array(
													'post_type' => 'post',
													'post__in' => $popular_posts,
													'orderby' => 'post__in',
													'posts_per_page' => 5,
												));

												if ($popular_query->have_posts()):
													while ($popular_query->have_posts()): $popular_query->the_post(); ?>
														<div class="col-12 col-lg-12 col-sm-6">
															<div class="post-item">
																<div class="thumb-img">
																	<a href="<?php the_permalink(); ?>">
																		<?php the_post_thumbnail('full'); ?>
																	</a>
																</div>
																<div class="post-content">
																	<h3 class="post-title">
																		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
																	</h3>
																	<?php
																	$category = get_the_category();
																	if (!empty($category)) {
																		echo '<a class="category-name" href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . esc_html($category[0]->name) . '</a>';
																	}
																	?>
																</div>
															</div>
														</div>
												<?php endwhile;
													wp_reset_postdata();
												endif;
												?>
											</div>
										</div>
									<?php endif; ?>

									<div class="right-sidebar">
										<div class="row"></div>
									</div>
								</div> <!-- end col-lg-4 -->
							</div> <!-- end row -->
						</div> <!-- end box-wrapper -->
					</div> <!-- end container -->
				</div> <!-- end archive-post -->
			</section>
		<?php endif; ?>

		<?php get_footer(); ?>

	</main>
</div>

<?php
get_footer();
