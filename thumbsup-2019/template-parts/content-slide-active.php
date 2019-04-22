<?php
/**
 * Loop Name: Content Slide
 */
$featureImageVertical = get_field('feature_image_vertical');

if($featureImageVertical) {
	$image = wp_get_attachment_url(get_field('feature_image_vertical'), 'full');
} else {
	$image = get_the_post_thumbnail_url(get_the_ID(), 'full');
}

$bgCoverClass = "bg-cover-" . get_the_ID();
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('carousel-item active'); ?>>
        <?php if($featureImageVertical) : ?>
        <style>
            @media (max-width: 767px) {
                .<?php echo $bgCoverClass; ?> {
                    background-image: url('<?php echo $image; ?>')!important;
                }
            }
        </style>
        <?php endif; ?>
        <div class="_lead-cover">
            <div class="bg-cover <?php echo $bgCoverClass; ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');">
                <div class="intro">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container">
                                <h2 class="title"><a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark"><?php the_field('title_line1'); ?><br /><?php the_field('title_line2'); ?></a></h2>
                                <p class="text"><a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark"><?php the_field('title_line3'); ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article><!-- #post-## -->

