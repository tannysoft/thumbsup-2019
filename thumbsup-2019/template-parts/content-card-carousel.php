<?php
/**
 * Loop Name: Content Card Carousel
 */
?>
<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package plant
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('swiper-slide swiper-no-swiping'); ?>>
	<section class="_card _card-column _card-content">
		<div class="thumb view zoom">
			<a href="<?php the_permalink(); ?>" class="parent-link" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark">
				<?php /*<span class="img-photo" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'card-videos'); ?>');"></span>*/ ?>
				<?php if(has_post_thumbnail()) { the_post_thumbnail('card-videos');} else { echo '<img src="' . esc_url( get_template_directory_uri()) .'/img/thumb.jpg" alt="'. get_the_title() .'" />'; }?>
			</a>
		</div><!--pic-->
		<div class="info" data-mh="info-trend">
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title title non-margin"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta d-none">
						<?php seed_posted_on(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<footer class="entry-footer d-none">
				<?php seed_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div><!--info-->
	</section>
</article><!-- #post-## -->