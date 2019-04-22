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
    <div class="row content-post">
        <div class="col-6 col-md-12">
            <div class="thumb view zoom">
                <a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark">
                
                    <img class="img-photo" alt="file name" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'list-medium'); ?>');" />
                </a> 
            </div>
        </div>
        <div class="col-6 col-md-12">
            <div class="info">
                <header>
                    <p class="cat">
                        <span class="text-uppercase">
                            <?php
                            global $post;
                            $categories = get_the_category($post->ID);
                            echo $categories[0]->cat_name;

                            ?>
                        </span>
                        <span class="day d-inline-block d-md-none color-brand">
                            <?php echo get_the_date(); ?></span>
                    </p>
                    <?php the_title(sprintf('<h2 class="entry-title title h5 insert-dotdotdot"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                </header>
                <footer class="d-none d-sm-none d-md-block">
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