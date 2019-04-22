<?php
/**
 * Template Name: Home Page
 */
get_header();
?>

<main id="main" class="page_home site-main" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-section.jpg);">
    <div id="home-slider">
        <div class="container-slider">
            <div class="row">
                <?php 
                $args = array(
                    // 'post__not_in' => $do_not_duplicate,
                    // 'post_type' => 'post',
                    'category_name' => 'slide',
                    'posts_per_page' => 3
                );
                $the_query = new WP_Query($args);

                $i = 0;
                while ($the_query->have_posts()) : $the_query->the_post();
                    $do_not_duplicate[] = get_the_ID();
                    if ($i == 0) :
                        get_template_part('template-parts/content', 'slide-active');
                    else :
                        get_template_part('template-parts/content', 'slide');
                    endif;
                    $i++;
                endwhile;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>

    <section class="_section section-popular">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">

                    <div class="listing-card" data-mh="group-height-popular">
                        <?php 
                        $args = array(
                            // 'post__not_in' => $do_not_duplicate,
                            // 'post_type' => 'post',
                            'category_name' => 'highlight',
                            'posts_per_page' => 4
                        );
                        $the_query = new WP_Query($args);

                        while ($the_query->have_posts()) : $the_query->the_post();
                            //$do_not_duplicate[] = get_the_ID();
                            get_template_part('template-parts/content', 'front-list');
                        endwhile;
                        wp_reset_postdata();
                        ?>

    </div>
    </div>
    <div class="col-xl-3">
        <section class="section-most-popular _bg-darkblack d-none d-xl-block" data-mh="group-height-popular">
            <header>
                <h3 class="title _font-size-36 _font-medium text-uppercase color-white"><i class="icon icon-popular"></i>Most Popular</h3>
            </header>

            <section class="listing-card">

                <?php 
                $args = array(
                    // 'post__not_in' => $do_not_duplicate,
                    // 'post_type' => 'post',
                    // 'category_name' => 'suggested',
                    'posts_per_page' => 4
                );
                $the_query = new WP_Query($args);

                while ($the_query->have_posts()) : $the_query->the_post();
                    //$do_not_duplicate[] = get_the_ID();
                    get_template_part('template-parts/content', 'card-mostview');
                endwhile;
                wp_reset_postdata();
                ?>
  
    </section>
    <!-- /.listing-card -->
    </section>
    </div>

    </div>
    </div>
    </section>

    <!-- Trends -->
    <section class="_section section-trend _bg-gradient">
        <header class="_show-relative">
            <div class="container">
                <h2 class="_section-title h3 text-uppercase"><span class="name">trends</span></h2>
            </div>
        </header>
        <section class="container _show-relative">
            <!-- Slider main container -->
            <div class="swiper-trend swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php 
                    $args = array(
                        // 'post__not_in' => $do_not_duplicate,
                        // 'post_type' => 'post',
                        'category_name' => 'trend',
                        'posts_per_page' => 4
                    );
                    $the_query = new WP_Query($args);

                    while ($the_query->have_posts()) : $the_query->the_post();
                        //$do_not_duplicate[] = get_the_ID();
                        get_template_part('template-parts/content', 'card-carousel-video');
                    endwhile;
                    wp_reset_postdata();
                    ?>

        </div>
        </div>
        <!-- /.Slider main container -->
    </section>

    <div class="group-swiper-button">
        <div class="swiper-button-prev swiper-trend-prev"><i class="icon icon-arrow-left-lg"></i></div>
        <div class="swiper-button-next swiper-trend-next"><i class="icon icon-arrow-right-lg"></i></div>
    </div>
    </section>

    <!-- News -->
    <section class="_section section-news">
        <header>
            <div class="container">
                <h2 class="_section-title h3 text-uppercase"><span class="name">News</span></h2>
            </div>
        </header>

        <div class="container _container-full-mobile">
            <div class="section-highlight">
                <?php 
                $args = array(
                    'post__not_in' => $do_not_duplicate,
                    // 'post_type' => 'post',
                    'category_name' => 'news',
                    'posts_per_page' => 1,
                    'ignore_sticky_posts' => 1
                );
                $the_query = new WP_Query($args);
                
                while ($the_query->have_posts()) : $the_query->the_post();
                    //$do_not_duplicate[] = get_the_ID();
                    get_template_part('template-parts/content', 'front-list-big');
                endwhile;
                wp_reset_postdata();
                ?>
    </div>

    <article class="listing-card">
        <div class="row">
            <?php 
            $args = array(
                'post__not_in' => $do_not_duplicate,
                // 'post_type' => 'post',
                'category_name' => 'news',
                'posts_per_page' => 3,
                'offset' => 1
            );
            $the_query = new WP_Query($args);

            while ($the_query->have_posts()) : $the_query->the_post();
                //$do_not_duplicate[] = get_the_ID();
                echo '<div class="col-md-4">';
                get_template_part('template-parts/content', 'card-border');
                echo '</div>';
            endwhile;
            wp_reset_postdata();
            ?>
          
        </div>
    </article>

    <footer class="footer-button">
        <a href="<?php echo get_site_url(); ?>/news" class="button button-outline"><span>ALL NEWS</span> <i class="icon icon-arrow-right"></i></a>
    </footer>
    </div>
    </section>

    <!-- EDITOR -->
    <section class="_section section-editor _bg-gradient">
        <header class="_show-relative">
            <div class="container">
                <h2 class="_section-title h3 text-uppercase"><span class="name">Editor’s Picks</span></h2>
            </div>
        </header>

        <section class="container _show-relative">
            <!-- Slider main container -->
            <div class="swiper-editor swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php 
                    $args = array(
                        // 'post__not_in' => $do_not_duplicate,
                        // 'post_type' => 'post',
                        'category_name' => 'editors-picks',
                        'posts_per_page' => 4
                    );
                    $the_query = new WP_Query($args);

                    while ($the_query->have_posts()) : $the_query->the_post();
                        //$do_not_duplicate[] = get_the_ID();
                        get_template_part('template-parts/content', 'card-carousel');
                    endwhile;
                    wp_reset_postdata();
                    ?>
                 
        </div>
        </div>
        <!-- /.Slider main container -->
    </section>

    <div class="group-swiper-button">
        <div class="swiper-button-prev swiper-editor-prev"><i class="icon icon-arrow-left-lg"></i></div>
        <div class="swiper-button-next swiper-editor-next"><i class="icon icon-arrow-right-lg"></i></div>
    </div>
    </section>

    <!-- Events & Conferences -->
    <section class="_section section-event">
        <div class="container _container-full-mobile">
            <header>
                <h2 class="_section-title h3 text-uppercase"><span class="name">Events & Conferences</span></h2>
            </header>
            <div class="section-highlight">
                <?php 
                $args = array(
                    // 'post__not_in' => $do_not_duplicate,
                    //'post_type' => 'post',
                    'category_name' => 'events-conferences',
                    'posts_per_page' => 1,
                    'ignore_sticky_posts' => 1
                );
                $the_query = new WP_Query($args);
                
                while ($the_query->have_posts()) : $the_query->the_post();
                    //$do_not_duplicate[] = get_the_ID();
                    get_template_part('template-parts/content', 'front-list-big');
                endwhile;
                wp_reset_postdata();
                ?>
             
            </div>

            <div class="listing-card">
                <div class="row">
                    <?php 
                    $args = array(
                        // 'post__not_in' => $do_not_duplicate,
                        // 'post_type' => 'post',
                        'category_name' => 'events-conferences',
                        'posts_per_page' => 3,
                        'offset' => 1
                    );
                    $the_query = new WP_Query($args);

                    while ($the_query->have_posts()) : $the_query->the_post();
                        //$do_not_duplicate[] = get_the_ID();
                        echo '<div class="col-md-4">';
                        get_template_part('template-parts/content', 'card-border');
                        echo '</div>';
                    endwhile;
                    wp_reset_postdata();
                    ?>
                
                </div>
            </div>

            <footer class="footer-button">
                <a href="/events-conferences" class="button button-outline"><span>ALL EVENTS & CONFERENCES</span> <i class="icon icon-arrow-right"></i></a>
            </footer>
        </div>
    </section>


<script type="text/javascript">
    jQuery(document).ready(function($) {
         $('#home-slider .container-slider .row').slick({
            dots: true,
            speed: 300,
            arrows :false,
            autoplay: true
         });
    });
</script>

</main><!--.site-main-->

<?php get_footer(); ?>
