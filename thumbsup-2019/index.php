<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package plant
 */

get_header(); ?>

<div class="main-header">
	<div class="container">
		<h2 class="main-title"><?php single_post_title(); ?></h2>
	</div>
</div>

<div class="container">
	<div id="primary" class="content-area <?php echo '-'.$GLOBALS['s_blog_layout']; ?>">
		<main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>

				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<?php 
				if ((int)$GLOBALS['s_blog_columns'] > 1) {
					echo '<div class="seed-grid-'.$GLOBALS['s_blog_columns'].'">';
					while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content','card-excerpt');
					endwhile; 
					echo '</div>';
				} else {
					while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content');
					endwhile; 
				}
				?>

				<?php seed_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php 
	switch ($GLOBALS['s_blog_layout']) {
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
	}
	?>
</div><!--container-->
<?php get_footer(); ?>
