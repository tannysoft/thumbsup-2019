<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package plant
 */

get_header(); ?>
<?php /*
<div class="main-header">
	<div class="container">
		<h2 class="main-title"><?php printf( esc_html__( 'Search for: %s', 'plant' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
	</div>
</div>
*/ ?>


<main id="main" class="site-main page_news _bg-marble">
    <section class="_section" style="padding-top: 0;">
        <section class="_section-lead">
            <div class="container">
                <header>
                    <h1 class="_section-title h3 text-uppercase _font-medium">
                        <span class="name">
							<?php printf( esc_html__( 'Search for: %s', 'plant' ), get_search_query() ); ?>
                        </span>
                    </h1>           
                </header>
                <section class="_section section-news _bg-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-section.jpg);">

                    <div class="container _container-full-mobile">
                        <div class="section-highlight">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    $i = 0;

									while ( have_posts() ) : the_post();
                                        $i++;

                                        if($i >= 13) {
                                            $i = 0;
                                        }

                                        if($i % 13 === 1) {
                                            echo '<div class="col-md-12">';
                                            get_template_part('template-parts/content', 'front-list-big');
                                            echo '</div>';
                                        } else {
                                            echo '<div class="col-md-4 col-xs-12">';
                                            get_template_part('template-parts/content', 'card-border');
                                            echo '</div>';
                                        }
                                    endwhile;
									?>
									
                                </div>
                                <?php wp_pagenavi(); ?>
                            </div>
                        </div>
                    </div>
                </section>
        </section>
	</section>	
</main><!-- #main -->
<?php get_footer (); ?>
<?php /*
<div class="container -rightbar">
	<div id="primary" class="content-area -rightbar">
		<main id="main" class="site-main">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop * / ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 * 
				get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php seed_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('right'); ?>
</div><!--container-->
<?php get_footer(); ?>
*/ ?>