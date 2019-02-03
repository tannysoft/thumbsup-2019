<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package plant
 */

get_header();
?>
<div id="wrapper-swipe-content" class="page_news _bg-marble">
	<?php /*
	<div class="main-header">
		<div class="container">
			<h2 class="main-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</div>
	</div>*/ ?>
	<!-- LEAD COVER -->
	<section class="_lead-cover">
		<div class="bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/lead/lead-cover.jpg');">
			<!-- <div class="intro">
			<h1 class="title">เปลี่ยนคุณให้เป็น Digital PR</h1>
			<p>กับ PublicRelationSHIFTความรู้ใหม่ที่ไม่ควรมองข้าม</p>
			</div> -->
		</div>
	</section>

	<!-- CONTENT DETAIL -->
	<section class="_section _bg-white">
		<div class="container">
			<div id="primary" class="content-area wrapper-content-info">
				<main id="main" class="site-main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content-single', get_post_type() ); ?>

					<section class="author-info _section _border-bottom">
						<div class="row">
							<div class="col-md-6">
								<section class="_card _card-writer">
									<div class="thumb _circle">
									<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="parent">
										<span class="img-photo" style="background-image: url('<?php echo esc_url( get_avatar_url( get_the_author_meta( 'ID' ) ) ); ?>')">
										</span>
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
						Facebook Comment
					</section>

					<footer class="footer-button">
						<a href="#" class="button button-outline _border-gray"><span>กลับไปหน้า NEWS</span></a>
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
</div>
<?php get_footer(); ?>
