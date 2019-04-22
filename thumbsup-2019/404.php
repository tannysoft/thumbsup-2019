<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package plant
 */

get_header(); ?>
<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main page_news _bg-marble">

			<section class="error-404 not-found">
				<header class="page-header">
					<div class="error-title">404</div>
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'plant' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'plant' ); ?></p>

					<?php get_search_form(); ?>

					<!-- 404 -->
					<section class="_section section-404">
						<div class="container _container-full-mobile">
							<header>
								<h2 class="_section-title h3 text-uppercase -short"><span class="name">Latest News</span></h2>
							</header>

							<div class="listing-card">
								<div class="row">

									<?php
									$tag_ids = array();
									foreach($tags as $individual_tag) {
										$tag_ids[] = $individual_tag->term_id;
										//$tag_name[] = $individual_tag->name;
									}
									//echo '<div class="hide">';
									//var_dump($tag_name);
									//echo '</div>';
									$args=array(
										'tag__in' => $tag_ids,
										'post__not_in' => array(get_the_ID()),
										'posts_per_page'=> 6, // Number of related posts to display.
										'caller_get_posts' => 1
									);
									
									$my_query = new wp_query( $args );

									if($my_query->found_posts>0) {
									
										while( $my_query->have_posts() ) {
											$my_query->the_post();
											echo '<div class="col-md-4">';
											get_template_part( 'template-parts/content', 'card-border' );
											echo '</div>';
										}

									} else {
										$args=array(
										'posts_per_page'=> 3, // Number of related posts to display.
										'post__not_in' => array(get_the_ID()),
										'caller_get_posts' => 1
										);
										
										$my_query = new wp_query( $args );

										
										while( $my_query->have_posts() ) {
											$my_query->the_post();
											echo '<div class="col-md-4">';
											get_template_part( 'template-parts/content', 'card-border' );
											echo '</div>';
										}
									}
									?>
								</div>
							</div>

							<footer class="footer-button">
								<a href="<?php echo get_site_url(); ?>/news" class="button button-outline"><span>ALL NEWS</span> <i class="icon icon-arrow-right"></i></a>
							</footer>

						</div>
					</section>

					<?php //the_widget( 'WP_Widget_Recent_Posts' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!--container-->
<?php get_footer(); ?>
