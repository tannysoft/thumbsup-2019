<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plant
 */
?>
</div><!--site-content-->

<?php /*if (is_active_sidebar( 'footbar' ) ) : ?>
	<aside id="footbar" class="site-footbar">
		<div class="container">
			<?php dynamic_sidebar( 'footbar' ); ?>
		</div>
	</aside><!--site-footbar-->

<?php else: ?>
	<div class="site-footer-space"></div>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-info">
				<?php echo $GLOBALS['s_footer'];?>
			</div><!--site-info-->
		</div><!--container-->
	</footer><!--site-footer-->

<?php endif;*/ ?>

	<!-- STAY UPDATE -->
	<section class="section-stay-update _section _bg-gradient">
		<div class="container _show-relative">
			<h1 class="_section-title _font-size-60"><span class="name">STAY UPDATE</span></h1>
				<form action="#" class="form-subscribe">
					<div class="form-group">
						<input type="email" id="" placeholder="your email">
					</div>
					<div class="footer-button text-center">
						<button type="button" class="button button-outline">
							<span class="text-center">
									SUBSCRIBE
							</span>
						</button>
					</div>
				</form>
		</div>
	</section>

<!-- FOOTER -->
<footer id="footer" class="text-center">
	<div class="container">

		<section class="primary d-none d-md-block">
			<ul class="list-menu list-inline text-uppercase">
				<li class="list-inline-item"><a href="#">HOME</a></li>
				<li class="list-inline-item"><a href="#">NEWS</a></li>
				<li class="list-inline-item"><a href="#">EVENTS & CONFERECES</a></li>
				<li class="list-inline-item"><a href="#">ABOUT US</a></li>
				<li class="list-inline-item"><a href="#">Contact</a></li>
				<li class="list-inline-item"><a href="#">PRIVACY POLICY</a></li>
				<li class="list-inline-item"><a href="#">TERMS & CONDITIONS</a></li>
			</ul>
		</section>

		<section class="secondary">
				<ul class="list-social list-inline">
					<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="icon icon-line"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
				<p class="color-white copy-right">&copy; 2018 thumbsup Media Co.,Ltd., All Rights Reserved.</p>
		</section>

	</div>
	<!-- /.container -->
</footer>
<!-- /FOOTER -->

</div><!--site-canvas-->
</div><!--#page-->

<?php wp_footer(); ?>

</body>
</html>
