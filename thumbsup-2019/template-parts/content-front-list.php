<?php
/**
 * Loop Name: Content Front List
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
<article id="post-<?php the_ID(); ?>" <?php post_class('_card _card-column _size-big _landscape-mobile _bg-darkblack'); ?>>
	<div class="row">
		<div class="col-md-6 col-lg-7">
			<div class="thumb view zoom">
				<a href="<?php the_permalink(); ?>" class="parent" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark">
					<span class="title h3 d-block d-md-none">
						<span class="group-table">
							<span class="group-table-cell">
								<span class="header color-white"><?php the_field('title_line1'); ?></span><br class="d-block d-md-none">
								<span class="intro color-brand "><?php the_field('title_line2'); ?></span>
							</span>
						</span>
					</span>
					<span class="img-photo" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'list-medium'); ?>');"></span>
				</a>
			</div>
		</div>
		<div class="col-md-6 col-lg-5">
			<div class="info d-none d-md-block">
				<header>
					<p class="cat text-uppercase">CONFERENCE</p>
					<?php the_title( sprintf( '<h2 class="entry-title title h5"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				</header>
				<footer>
					<?php thumbsup_posted_on(); ?>
				</footer>
			</div>
		</div>
	</div>
</article><!-- #post-## -->