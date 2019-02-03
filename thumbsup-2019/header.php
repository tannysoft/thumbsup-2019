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

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'plant' ); ?></a>
	<div id="page" class="site">
		
		<?php /*<nav id="site-mobile-navigation" class="site-mobile-navigation <?php if($GLOBALS['s_menu'] == 'off-canvas') { echo 'sb-slidebar sb-right'; } else { echo '-dropdown'; } ?> _mobile _heading">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_id' => 'mobile-menu' ) ); ?>
			<?php if(is_active_sidebar('top-right')) { ?><div class="mobile-widget"><?php dynamic_sidebar( 'top-right' ); ?></div><?php } ?>
		</nav>*/ ?>

		<header id="header">
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
				<li class="list-inline-item">
					<ul class="list-inline tool-language">
					<li class="list-inline-item"><a href="#" class="active">ไทย</a></li>
					<li class="list-inline-item"><a href="#">ENG</a></li>
					</ul>
				</li>
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
			<div class="container">
				<nav id="navbar" class="navbar navbar-expand-xl navbar-light">
					<a class="navbar-brand" href="javascript:void(0);">
					<span class="d-none d-md-block"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-thumbsup.png" class="img-fluid" alt="logo thumbsup" data-rjs="2"/></span>
					<span class="d-sm-block d-md-none"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-thumbsup-xs.png" class="img-fluid" alt="logo thumbsup" data-rjs="2"/></span>
					</a>

					<div class="main-menu collapse navbar-collapse d-none d-xl-block">
					<div class="group-nav navbar-right">
						<ul class="navbar-nav mr-auto text-uppercase">
						<li class="nav-item active">
							<a class="nav-link" href="javascript:void(0);">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							News
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="javascript:void(0);">Action</a>
							<a class="dropdown-item" href="javascript:void(0);">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
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
							<a class="nav-link" href="javascript:void(0);"><i class="icon icon-search"></i></a>
							</li>
						</ul>
					</div>
					</div>
				</nav>
			</div>
			</section>

			<!-- menu mobile -->
			<nav class="wsfullmain clearfix d-block d-xl-none">
				<div class="wsf-halfpart wsfleftpart _bg-section" style="background-image: url(img/bg-section.jpg); background-color: black;">
				<div class="wsfrightpart-inner clearfix">
					<ul class="wsfbiglink">
					<li><a href="javascript:void(0)">Home</a></li>
					<li><a href="javascript:void(0)">news</a></li>
					<li><a href="javascript:void(0)">events & conferences</a></li>
					<li><a href="javascript:void(0)">about us</a></li>
					<li><a href="javascript:void(0)">contact</a></li>
					<li>
						<ul class="list-inline tool-language">
							<li class="list-inline-item"><a href="#" class="active">ไทย</a></li>
							<li class="list-inline-item"><a href="#">ENG</a></li>
						</ul>
					</li>
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

		<div id="sb-site" class="site-canvas">

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