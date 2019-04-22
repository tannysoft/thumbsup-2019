<?php
/**
 * Template Name: News Page
 */
get_header();
?>

<main id="main" class="site-main page_news _bg-marble">
    <section class="_section" style="padding-top: 0;">
        <section class="_section-lead">
            <div class="container">
                <header>
                    <h1 class="_section-title h3 text-uppercase _font-medium">
                        <span class="name">NEWS</span>
                    </h1>
                    <div class="cat-menu">
                        <?php wp_nav_menu( array( 'theme_location' => 'category-menu' ) ); ?>
                    </div> 
                </header>
                <section class="_section section-news _bg-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-section.jpg);">

                    <div class="container _container-full-mobile">
                        <div class="section-highlight">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'orderby' => 'DATE',
                                        'order' => 'DESC',
                                        'posts_per_page' => 24
                                       
                                    );
                                    
                                    $the_query = new WP_Query($args);
                                    $i = 0;

                                    while ($the_query->have_posts()) {
                                        $the_query->the_post();
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
                                    }
									?>

                                </div>
                            </div>
                        </div>
                </section>
        </section>
	</section>	
</main><!-- #main -->
<?php get_footer (); ?>