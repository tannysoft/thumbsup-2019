<?php
/**
 * Loop Name: Content Card Border
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
<article id="post-<?php the_ID(); ?>" <?php post_class('_card _card-row _border-bottom'); ?>>
	<div class="row">
		<div class="col-6 col-md-12">
			<div class="thumb view zoom">
				<a href="<?php the_permalink(); ?>" class="parent" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark">
					<span class="img-photo" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'list-medium'); ?>');"></span>
				</a>
			</div>
		</div>
		<div class="col-6 col-md-12">
			<div class="info">
				<header>
				<p class="cat"><span class="text-uppercase">TIPS</span> <span class="day d-inline-block d-md-none color-brand">Sep 27, 2018</span></p>
					<?php the_title( sprintf( '<h2 class="entry-title title h5 insert-dotdotdot"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				</header>
				<footer class="d-none d-sm-none d-md-block">
					<?php thumbsup_posted_on(); ?>
				</footer>
			</div>
		</div>
	</div>
</article><!-- #post-## -->