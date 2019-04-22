<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plant
 */

get_header(); ?>
<?php  /*
<div class="main-header">
	<div class="container">
		<?php the_archive_title( '<h2 class="main-title">', '</h2>' ); ?>
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
                            <?php
                            the_archive_title();
                            /*global $post;
                            $categories = get_the_category($post->ID);
                            echo $categories[0]->cat_name;*/
                            ?>
                        </span>
                    </h1>
                    <?php
                    $obj = get_queried_object();

                    $categories = get_categories('child_of=' . $obj->term_id);
                    echo ($categories) ? '<div class="cat-menu">' : '';
                    echo ($categories) ? '<ul>' : '';
                    foreach  ($categories as $category) {
                        //Display the sub category information using $category values like $category->cat_name
                        echo '<li><a href="' . get_term_link($category->term_id) . '">'.$category->name.'</a></li>';
                    }
                    echo ($categories) ? '</ul>' : '';
                    echo ($categories) ? '</div>' : '';
                    ?>                  
                </header>
                <section class="_section section-news _bg-section">
                <?php /*  style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-section.jpg);" */ ?>
                    <div class="section-highlight">
                        <div class="row">
                            <?php
                            $i = 0;

                            while (have_posts()) {
                                the_post();
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
                        <?php wp_pagenavi(); ?>
                    </div>
                </section>
        </section>
	</section>	
</main><!-- #main -->
<?php get_footer (); ?>