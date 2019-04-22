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
                <a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark">
                    <span class="title h3 d-block d-md-none">
                        <span class="group-table">
                            <span class="group-table-cell">
                                <span class="header color-white">
                                    <?php the_field('title_line1'); ?>
                                </span><br class="d-block d-md-none">
                                <span class="intro color-brand ">
                                    <?php the_field('title_line2'); ?>
                                </span><br class="d-block d-md-none">
                                <span class="intro color-brand ">
                                    <?php the_field('title_line3'); ?>
                                </span>
                            </span>
                        </span>
                    </span>
                    <img class="img-photo" alt="file name" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'list-medium'); ?>');" />
                </a>
            </div>
        </div>
        <div class="col-md-6 col-lg-5">
            <div class="info d-none d-md-block">
                <header>
                    <p class="cat text-uppercase">
                        <?php
                        global $post;
                        $categories = get_the_category($post->ID);
                        echo $categories[0]->cat_name;

                        ?>
                    </p>
                    <?php the_title(sprintf('<h2 class="entry-title title h5"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                </header>
                <footer>
                    <ul class="list-author-by list-unstyled list-inline">
                        <li class="list-inline-item">By <span class="name">
                        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></span></li>
                        <li class="list-inline-item"><span class="day">
                                <?php echo get_the_date(); ?></span></li>
                    </ul>
                </footer>
            </div>
        </div>
    </div>
</article><!-- #post-## --> 