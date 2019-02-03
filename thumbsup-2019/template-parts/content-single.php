<?php
/**
 * Loop Name: Content Post Detail
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content-single template-article _section _border-bottom'); ?>>
	<header class="entry-header header">
		<div class="row">
			<div class="col-md-6">
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta info">
					<?php seed_posted_on(); ?>
				</div>
			<?php endif; ?>
			</div>
			<div class="col-md-6 d-flex align-items-center justify-content-start justify-content-md-end">
			<div class="list-social-share list-inline"><span class="title">Share</span><?php if(function_exists('seed_social')) {seed_social();} ?></div>
			<?php /*<ul class="list-social-share list-inline">
				<li class="list-inline-item"><span class="text">Share</span></li>
				<li class="list-inline-item"><a href="#" class="-facebook" rel="border-circle"><i class="fab fa-facebook-f"></i></a></li>
				<li class="list-inline-item"><a href="#" class="-twitter" rel="border-circle"><i class="fab fa-twitter"></i></a></li>
				<li class="list-inline-item"><a href="#" class="-line" rel="border-circle"><i class="icon icon-line"></i></a></li>
			</ul>*/ ?>
			</div>
		</div>
		<?php the_title( '<h1 class="entry-title d-none">', '</h1>' ); ?>
	</header>

	<div class="entry-content content-editor">
		<?php the_content(); ?>
		<?php wp_link_pages( array('before' => '<div class="page-links">' . esc_html__( 'Pages:', 'plant' ),'after'  => '</div>') ); ?>

		<?php if($GLOBALS['s_blog_show_profile']) :?>
			<div class="entry-author clearfix">
				<div class="pic">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'author_bio_avatar_size', 100 ) ); ?></a>
				</div><!--pic-->
				<div class="info">
					<h2 class="name"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php the_author(); ?></a></h2>
					<div class="desc"><?php the_author_meta( 'description' ); ?></div>
				</div><!--info-->
			</div><!--author-->
		<?php endif; ?>
	</div>

	<footer class="entry-footer footer">
		<?php if(has_tag()) : ?>
		<ul class="list-tag list-inline">
			<?php $t = wp_get_post_tags(get_the_ID()); ?>
			<li class="list-inline-item"><span class="title">Tag:</span></li>
			<?php foreach ($t as $value): ?>
			<li class="list-inline-item"><a href="<?php echo get_tag_link($value->term_id); ?>"><?php echo $value->name; ?></a></li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
		<?php seed_entry_footer(); ?>
	</footer>
</article>