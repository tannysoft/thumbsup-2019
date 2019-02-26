<?php
/**
 * Loop Name: Content Slide
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
<article id="post-<?php the_ID(); ?>" <?php post_class('carousel-item'); ?> style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');">
	<div class="carousel-caption d-none d-md-block">
        <?php /*<a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark">
            <?php if(has_post_thumbnail()) { the_post_thumbnail();} else { echo '<img src="' . esc_url( get_template_directory_uri()) .'/img/thumb.jpg" alt="'. get_the_title() .'" />'; }?>
        </a>*/ ?>
        <header class="entry-header">
            <h3><?php the_field('title_line1'); ?><br /><?php the_field('title_line2'); ?></h3>
            <p><?php the_field('title_line3'); ?></p>
            <?php the_title( sprintf( '<h2 class="entry-title d-none"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

            <?php if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta d-none">
                    <?php seed_posted_on(); ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <footer class="entry-footer">
            <?php seed_entry_footer(); ?>
        </footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->