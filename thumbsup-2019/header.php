<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plant
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php if (function_exists('customize_css')) {customize_css();} ?>
	<?php if (function_exists('customize_ini')) {customize_ini();} ?>
</head>

<body <?php echo (is_single()) ? 'data-init-content-id="' . get_the_ID() . '" ': ''; ?><?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'plant' ); ?></a>
	<div id="page" class="site">

		<?php /*<nav id="site-mobile-navigation" class="site-mobile-navigation <?php if($GLOBALS['s_menu'] == 'off-canvas') { echo 'sb-slidebar sb-right'; } else { echo '-dropdown'; } ?> _mobile _heading">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_id' => 'mobile-menu' ) ); ?>
			<?php if(is_active_sidebar('top-right')) { ?><div class="mobile-widget"><?php dynamic_sidebar( 'top-right' ); ?></div><?php } ?>
		</nav>*/ ?>

		<header id="header" class="site-header sb-slide _heading">
			<section class="secondary text-right d-none d-xl-block">
				<div class="container">
					<ul class="list-inline">
					<li class="list-inline-item">
						<ul class="list-social list-inline">
						<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</li>
<?php /*					<li class="list-inline-item">
						<ul class="list-inline tool-language">
						<li class="list-inline-item"><a href="#" class="active">ไทย</a></li>
						<li class="list-inline-item"><a href="#">ENG</a></li>
						</ul>
					</li>*/ ?>
					</ul>
				</div>
			</section>

			<!--  Hamburger menu icon -->
			<section class="menu-sticky">
				<div class="container d-block d-xl-none" style="position: relative;">
					<div id="wstoggle"><span></span></div>
				</div>
			</section>
			<!--  Hamburger menu icon -->

			<section class="primary header-sticky">
				<div class="main-sticky">
					<div class="container">
						<nav id="navbar" class="navbar navbar-expand-xl navbar-light">
							<div class="d-block d-xl-none">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home">
									<span class="d-none d-md-block"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-thumbsup.png" class="img-fluid" alt="logo thumbsup" data-rjs="2"/></span>
									<span class="d-sm-block d-md-none"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-thumbsup-xs.png" class="img-fluid" alt="logo thumbsup" data-rjs="2"/></span>
								</a>
							</div>
							<div class="main-menu collapse navbar-collapse d-none d-xl-block">
								<div class="wsmenu group-nav navbar-right">
									<?php /*
									<div class="wsmenu-list">
										<div class="logo-brand">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home">
												<span class="d-none d-md-block"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-thumbsup.png" class="img-fluid" alt="logo thumbsup" data-rjs="2"/></span>
												<span class="d-sm-block d-md-none"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-thumbsup-xs.png" class="img-fluid" alt="logo thumbsup" data-rjs="2"/></span>
											</a>
										</div>
									</div>
									<?php
										wp_nav_menu( array(
											'theme_location'  => 'primary',
											'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
											'container'       => '',
											'container_class' => 'collapse navbar-collapse',
											'container_id'    => 'bs-example-navbar-collapse-1',
											'menu_class'      => 'wsmenu-list navbar-nav mr-auto text-uppercase text-nowrap',
											'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
											'walker'          => new WP_Bootstrap_Navwalker(),
										) );*/
									?>
									<?php wp_megamenu(array('theme_location' => 'primary')); ?>
									<?php /*
									<ul class="wsmenu-list navbar-nav mr-auto text-uppercase text-nowrap">
										<li class="logo-brand">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home">
												<span class="d-none d-md-block"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-thumbsup.png" class="img-fluid" alt="logo thumbsup" data-rjs="2"/></span>
												<span class="d-sm-block d-md-none"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-thumbsup-xs.png" class="img-fluid" alt="logo thumbsup" data-rjs="2"/></span>
											</a>
										</li>
										<li class="nav-item active">
											<a class="nav-link" href="javascript:void(0);">Home</a>
										</li>
										<li class="nav-item" aria-haspopup="true"><a href="news.html" onclick="close(); return false">News<span class="wsarrow"></span></a>
											<div class="wsmegamenu clearfix">
											<div class="row no-gutters">
												<div class="col-2">
													<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
														<a class="nav-link active" id="v-pills-news-tab" data-toggle="pill" href="#v-pills-news" role="tab" aria-controls="v-pills-news" aria-selected="true">PR NEWS</a>
														<a class="nav-link" id="v-pills-digital-tab" data-toggle="pill" href="#v-pills-digital" role="tab" aria-controls="v-pills-digital" aria-selected="false">DIGITAL</a>
														<a class="nav-link" id="v-pills-tech-tab" data-toggle="pill" href="#v-pills-tech" role="tab" aria-controls="v-pills-tech" aria-selected="false">TECHNOLOGY</a>
														<a class="nav-link" id="v-pills-business-tab" data-toggle="pill" href="#v-pills-business" role="tab" aria-controls="v-pills-business" aria-selected="false">BUSINESS</a>
														<a class="nav-link" id="v-pills-branding-tab" data-toggle="pill" href="#v-pills-branding" role="tab" aria-controls="v-pills-branding" aria-selected="false">BRANDING</a>
														<a class="nav-link" id="v-pills-startup-tab" data-toggle="pill" href="#v-pills-startup" role="tab" aria-controls="v-pills-startup" aria-selected="false">START UP</a>
														<a class="nav-link" id="v-pills-tips-tab" data-toggle="pill" href="#v-pills-tips" role="tab" aria-controls="v-pills-tips" aria-selected="false">TIPS</a>
													</div>
												</div>
												<div class="col-10">
													<div class="tab-content" id="v-pills-tabContent">
														<div class="tab-pane fade show active" id="v-pills-news" role="tabpanel" aria-labelledby="v-pills-news-tab">

															<div class="group-swiper-in-nav">
																<div class="swiper-button-prev swiper-news-prev"><</div>
																<div class="swiper-button-next swiper-news-next">></div>
															</div>

															<!-- Slider main container -->
															<div class="swiper-news swiper-container">
																<!-- Additional required wrapper -->
																<div class="swiper-wrapper">
																	<!-- Slides -->
																	<div class="swiper-slide swiper-no-swiping">
																	<section class="_card _card-column _card-news">
																		<p class="day">Sep 27, 2018</p>
																		<div class="thumb view zoom">
																			<a href="#" class="parent">
																				<span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-editor-01@2x.jpg')">
																				</span>
																			</a>
																		</div>
																		<div class="info" data-mh="info-news">
																			<h2 class="title non-margin insert-dotdotdot">
																			<a href="#">หนังสือน่าอ่าน “มองการทำตลาดแบบวัวสีม่วง” ที่นักการตลาดไม่ควรพลาด หนังสือน่าอ่าน “มองการทำตลาดแบบวัวสีม่วง” ที่นักการตลาดไม่ควรพลาด</a>
																			</h2>
																		</div>
																	</section>
																	</div>

																	<div class="swiper-slide swiper-no-swiping">
																	<section class="_card _card-column _card-news">
																		<p class="day">Sep 27, 2018</p>
																		<div class="thumb view zoom">
																			<a href="#" class="parent">
																				<span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-editor-02@2x.jpg')">
																				</span>
																			</a>
																		</div>
																		<div class="info" data-mh="info-news">
																			<h2 class="title non-margin insert-dotdotdot">
																			<a href="#">KBTG เดินหน้าปั้น TechJam2018 หวังสร้างความตื่นตัวและสีสันให้วงการเทคโนโลยี</a>
																			</h2>
																		</div>
																	</section>
																	</div>

																	<div class="swiper-slide swiper-no-swiping">
																	<section class="_card _card-column _card-news">
																		<p class="day">Sep 27, 2018</p>
																		<div class="thumb view zoom">
																			<a href="#" class="parent">
																				<span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-editor-03@2x.jpg')">
																				</span>
																			</a>
																		</div>
																		<div class="info" data-mh="info-news">
																			<h2 class="title non-margin insert-dotdotdot">
																			<a href="#">ETDA Big Change to Big Chance ปรับตัวสู่โลกอนาคต..โลกแห่งยุคดิจิทัล</a>
																			</h2>
																		</div>
																	</section>
																	</div>

																	<div class="swiper-slide swiper-no-swiping">
																	<section class="_card _card-column _card-news">
																		<p class="day">Sep 27, 2018</p>
																		<div class="thumb view zoom">
																			<a href="#" class="parent">
																				<span class="img-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/thumb/img-editor-04@2x.jpg')">
																				</span>
																			</a>
																		</div>
																		<div class="info" data-mh="info-news">
																			<h2 class="title non-margin insert-dotdotdot">
																			<a href="#">5 เทคนิคถ่ายรูปสวยแบบ Influencer จาก Samsung Photo Hub</a>
																			</h2>
																		</div>
																	</section>
																	</div>
																</div>
															</div>
															<!-- /.Slider main container -->
														</div>
														<div class="tab-pane fade" id="v-pills-digital" role="tabpanel" aria-labelledby="v-pills-digital-tab">DIGITAL</div>
														<div class="tab-pane fade" id="v-pills-tech" role="tabpanel" aria-labelledby="v-pills-tech-tab">TECH</div>
														<div class="tab-pane fade" id="v-pills-business" role="tabpanel" aria-labelledby="v-pills-business-tab">BUSINESS</div>
														<div class="tab-pane fade" id="v-pills-branding" role="tabpanel" aria-labelledby="v-pills-branding-tab">BRANDING</div>
														<div class="tab-pane fade" id="v-pills-startup" role="tabpanel" aria-labelledby="v-pills-startup-tab">START UP</div>
														<div class="tab-pane fade" id="v-pills-tips" role="tabpanel" aria-labelledby="v-pills-tips-tab">START UP</div>
													</div>
												</div>
											</div>
											</div>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">EVENTS & CONFERENCES</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">ABOUT US</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">CONTACT</a>
										</li>
										<li class="nav-item show-went-scroll">
											<ul class="list-inline">
												<li class="list-inline-item">
													<ul class="list-social list-inline">
													<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="nav-item">
											<a class="nav-link" style="padding-right:0;" href="javascript:void(0);"><i class="icon icon-search" style="vertical-align: middle;"></i></a>
										</li>
									</ul>*/ ?>
								</div>
							</div>
						</nav>

					</div>
				</div>
				<?php if(is_single()): ?>
				<div class="single-sticky">
					<div class="container">
						<div class="title"><h2><?php the_title(); ?></h2></div>
						<div class="share"><?php if(function_exists('seed_social')) {seed_social();} ?></div>
					</div>
				</div>
				<?php endif; ?>
			</section>

			<!-- menu mobile -->
			<nav class="wsfullmain clearfix d-block d-xl-none">
				<div class="wsf-halfpart wsfleftpart _bg-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-section.jpg); background-color: black;">
					<div class="wsfrightpart-inner clearfix">
						<ul class="wsfbiglink">
							<li><a href="javascript:void(0)">Home</a></li>
							<li><a href="javascript:void(0)">news</a></li>
							<li><a href="javascript:void(0)">events & conferences</a></li>
							<li><a href="javascript:void(0)">about us</a></li>
							<li><a href="javascript:void(0)">contact</a></li>
							<?php /*<li>
								<ul class="list-inline tool-language">
									<li class="list-inline-item"><a href="#" class="active">ไทย</a></li>
									<li class="list-inline-item"><a href="#">ENG</a></li>
								</ul>
							</li>*/ ?>
						</ul>
					</div>
				</div>
			</nav>
			<!-- /menu mobile -->
		</header>

		<?php /*
		<header id="masthead" class="site-header sb-slide _heading" data-seed-scroll="<?php echo $GLOBALS['s_scroll']; ?>">
			<div class="container">
				
				<div class="site-branding <?php if($GLOBALS['s_logo_overlay ']) {echo '-alt-logo';} ?>">
					<div class="site-logo"><?php if(function_exists('the_custom_logo')) {the_custom_logo();} if($GLOBALS['s_logo_overlay ']) {echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home"><img src="' . esc_url($GLOBALS['s_logo_overlay ']) . '" alt="Logo" class="alt-logo" style="display:none">';} ?></div>
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>

					<?php 
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p><?php endif; ?>
				</div>

				<a class="site-toggle <?php if($GLOBALS['s_menu'] == 'off-canvas') { echo 'sb-toggle-right'; } ?> _mobile">
					<i><span></span><span></span><span></span><span></span></i><b><?php echo $GLOBALS['s_menu_text']; ?></b>
				</a>
				
			</div>
		</header>*/ ?>

		<div id="<?php echo (is_single()) ? 'wrapper-swipe-content' : 'sb-site'; ?>" class="site-canvas">

			<?php 
			if (is_front_page()) {
				if (is_active_sidebar( 'home_banner' )) {
					echo '<div class="home-banner">'; dynamic_sidebar( 'home_banner' ); echo '</div>';
				}
				else {
					if (($GLOBALS['s_header_desktop'] == 'overlay')) {
						printf( '<div class="home-banner -blank _desktop">'. __('Please add Image or Slider Widget in <a href="%s">', 'plant') . __( 'Appearance <i class="si-arrow-right"></i> Widgets <i class="si-arrow-right"></i> Home Banner' , 'plant') . '</a>.</div>',  admin_url('widgets.php') );
					}
					if (($GLOBALS['s_header_mobile'] == 'overlay')) {
						printf( '<div class="home-banner -blank _mobile">'. __('Please add Image or Slider Widget in <a href="%s">', 'plant') . __( 'Appearance <i class="si-arrow-right"></i> Widgets <i class="si-arrow-right"></i> Home Banner' , 'plant') . '</a>.</div>',  admin_url('widgets.php') );
					}
				}
			} else {
				if (is_active_sidebar( 'page_banner' )) {
					echo '<div class="page-banner">'; dynamic_sidebar( 'page_banner' ); echo '</div>';
				} else {
					if ($GLOBALS['s_header_desktop'] == 'overlay') {
						echo '<div class="page-banner -blank _desktop">';
						printf(__('Please add Image or Slider Widget in <a href="%s">', 'plant') . __( 'Appearance <i class="si-arrow-right"></i> Widgets <i class="si-arrow-right"></i> Page Banner' , 'plant') . '</a>.<br>', admin_url('widgets.php') );
						printf(__('If you would like to use different Widgets on each page, we reccommend <a href="%s" target="_blank">Widget Context Plugin</a>.', 'plant') , 'https://wordpress.org/plugins/widget-context/');
						echo '</div>';
					}
					if ($GLOBALS['s_header_mobile'] == 'overlay') {
						echo '<div class="page-banner -blank _mobile">';
						printf(__('Please add Image or Slider Widget in <a href="%s">', 'plant') . __( 'Appearance <i class="si-arrow-right"></i> Widgets <i class="si-arrow-right"></i> Page Banner' , 'plant') . '</a>.<br>', admin_url('widgets.php') );
						printf(__('If you would like to use different Widgets on each page, we reccommend <a href="%s" target="_blank">Widget Context Plugin</a>.', 'plant') , 'https://wordpress.org/plugins/widget-context/');
						echo '</div>';
					}
				}
			}
			?>
			<div id="content" class="site-content">