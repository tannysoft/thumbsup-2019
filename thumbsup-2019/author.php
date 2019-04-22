<?php get_header(); ?>

<main id="main" class="site-main page_news _bg-marble">
    <section class="_section" style="padding-top: 0;">
        <section class="_section-lead">
            <div class="container">
                <header>
                    <div class="container">
                        <div class="row">

                            <div class="author-box">
                                <div class="author-img">
                                    <?php echo get_avatar(get_the_author_meta('ID')); ?>
                                </div>
                                <h3 class="author-name">
                                    <?php esc_html(the_author_meta('display_name'));  ?>
                                </h3>
                                <p class="author-description">
                                    <?php esc_textarea(the_author_meta('description'));  ?>
                                </p>
                                <div class="author-social">
                                    <?php
                                    $author_id = get_the_author_meta('ID');
                                    $author_youtube = get_field('author_youtube', 'user_' . $author_id);
                                    $facebook_link = get_field('author_facebook', 'user_' . $author_id);
                                    $twitter_handle = get_field('author_twitter', 'user_' . $author_id);
                                    $author_instragram = get_field('author_instragram', 'user_' . $author_id);
                                    ?>
                                    <ul class="list-social list-inline">
                                        <li class="list-inline-item"><a href="<?php echo $facebook_link; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="<?php echo $twitter_handle; ?>"><i class="fab fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="<?php echo $author_youtube; ?>"><i class="fab fa-youtube"></i></a></li>
                                        <li class="list-inline-item"><a href="<?php echo $author_instragram; ?>"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </header>

                <div class="container _container-full-mobile">
                    <div class="section-highlight">
                        <div class="container">
                            <div class="row">
                                <?php

                                while (have_posts()) : the_post();
                                    //$do_not_duplicate[] = get_the_ID();
                                    echo '<div class="col-md-4 col-xs-12">';
                                    get_template_part('template-parts/content', 'author');
                                    echo '</div>';
                                endwhile;

                                ?>


                            </div>
                        </div>
                        <?php wp_pagenavi(); ?>
                    </div>
                </div>
        </section>
    </section>
</main><!-- #main -->

<?php get_footer(); ?> 