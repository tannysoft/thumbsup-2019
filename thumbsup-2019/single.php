<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package plant
 */

get_header();

$featureImageVertical = get_field('feature_image_vertical');

if($featureImageVertical) {
	$image = wp_get_attachment_url(get_field('feature_image_vertical'), 'full');
} else {
	$image = get_the_post_thumbnail_url(get_the_ID(), 'full');
}

$bgCoverClass = "bg-cover-" . get_the_ID();

?>

<div class="page_news _bg-marble">
	<?php if($featureImageVertical) : ?>
	<style>
		@media (max-width: 767px) {
			.<?php echo $bgCoverClass; ?> {
				background-image: url('<?php echo $image; ?>')!important;
			}
		}
	</style>
	<!-- LEAD COVER -->
	<section class="_lead-cover">
		<div class="bg-cover <?php echo $bgCoverClass; ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');">
			<div class="intro">
				<div class="display-table">
					<div class="display-table-cell">
						<div class="container">
							<h2 class="title"><?php the_field('title_line1'); ?><br /><?php the_field('title_line2'); ?></h2>
							<p class="text"><?php the_field('title_line3'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<i class="fas fa-chevron-down"></i>
		</div>
	</section>
	<?php endif; ?>
	<!-- CONTENT DETAIL -->
	<section class="_section _bg-white">
		<div class="container">
			<div id="primary" class="content-area wrapper-content-info<?php echo ($featureImageVertical) ? ' single-content-' . get_the_ID() . ' -hide-title' : ' single-content-' . get_the_ID() ; ?>">
				<main id="main" class="site-main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content-single', get_post_type() ); ?>

					<section class="author-info _section _border-bottom">
						<div class="row">
							<div class="col-md-6">
								<section class="_card _card-writer">
									<div class="thumb _circle">
										<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="parent">
											<?php echo get_avatar(get_the_author_meta('ID')); ?>
										</a>
									</div>
									<div class="info">
										<p class="name">Writer: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="color-brand"><?php the_author(); ?></a></p>
										<p class="day"><?php echo nl2br(get_the_author_meta('description')); ?></p>
									</div>
								</section>
							</div>
							<div class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-end">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="button button-outline _brand _btn-view-post"><span>View all post</span></a>
							</div>
						</div>
					</section>

					<section class="_section section-comment">
						<?php echo do_shortcode('[wpdevart_facebook_comment curent_url="' . get_the_permalink() . '" order_type="social" title_text="" title_text_position="left" width="100%" animation_effect="random" count_of_comments="3" ]'); ?>
					</section>

					<footer class="footer-button">
						<a href="<?php echo get_site_url(); ?>/news" class="button button-outline _border-gray"><span>กลับไปหน้า NEWS</span></a>
					</footer>

					<?php //the_post_navigation(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						/*if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;*/
					?>

				<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		<?php 
			/*switch ($GLOBALS['s_blog_layout_single']) {
				case 'rightbar':
					get_sidebar('right'); 
					break;
				case 'leftbar':
					get_sidebar('left'); 
					break;
				case 'full-width':
					break;
				default:
					break;
			}*/
			?>
		</div><!--container-->
	</section>

	<?php
							
		wp_reset_query();
		$orig_post = $post;
		global $post;
		$tags = wp_get_post_tags(get_the_ID());
		
		if ($tags) {
	
	?>

	<!-- Related -->
	<section class="_section section-related" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg-section.jpg');">
		<div class="container _container-full-mobile">
			<header>
				<h2 class="_section-title h3 text-uppercase -short"><span class="name">Related</span></h2>
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
						'posts_per_page'=> 3, // Number of related posts to display.
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

		</div>
	</section>
	<?php
		}
		$post = $orig_post;
		wp_reset_query();
	?>
				
				
</div>
<?php get_footer(); ?>
