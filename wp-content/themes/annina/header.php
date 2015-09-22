<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package annina
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<?php 
		$hideSearch = get_theme_mod('annina_theme_options_hidesearch', '1');
		$facebookURL = get_theme_mod('annina_theme_options_facebookurl', '#');
		$twitterURL = get_theme_mod('annina_theme_options_twitterurl', '#');
		$googleplusURL = get_theme_mod('annina_theme_options_googleplusurl', '#');
		$linkedinURL = get_theme_mod('annina_theme_options_linkedinurl', '#');
		$instagramURL = get_theme_mod('annina_theme_options_instagramurl', '#');
		$youtubeURL = get_theme_mod('annina_theme_options_youtubeurl', '#');
		$pinterestURL = get_theme_mod('annina_theme_options_pinteresturl', '#');
		$vkURL = get_theme_mod('annina_theme_options_vkurl', '#');
		$emailURL = get_theme_mod('annina_theme_options_emailurl', '#');
	?>
<?php if ( $hideSearch == 1 ) : ?>
<!-- Start: Search Form -->
					<div id="search-full">
						<div class="search-container">
							<form role="search" method="get" id="search-form" action="<?php echo home_url( '/' ); ?>">
								<label>
									<span class="screen-reader-text"><?php _e( 'Search for:', 'annina' ); ?></span>
									<input type="search" name="s" id="search-field" placeholder="<?php _e('Type here and hit enter...', 'annina'); ?>">
								</label>
							</form>
							<span><a id="close-search"><i class="fa fa-close spaceRight"></i><?php _e('Close', 'annina'); ?></a></span>
						</div>
					</div>
<!-- End: Search Form -->
<?php endif; ?>

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'annina' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding annCenter">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Main Menu', 'annina' ); ?><i class="fa fa-align-justify"></i></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

			<div class="socialLine annCenter">
				<?php if (!empty($facebookURL)) : ?>
					<a href="<?php echo esc_url($facebookURL); ?>" title="<?php esc_attr_e( 'Facebook', 'annina' ); ?>"><i class="fa fa-facebook spaceRightDouble"><span class="screen-reader-text"><?php esc_attr_e( 'Facebook', 'annina' ); ?></span></i></a>
				<?php endif; ?>
						
				<?php if (!empty($twitterURL)) : ?>
					<a href="<?php echo esc_url($twitterURL); ?>" title="<?php esc_attr_e( 'Twitter', 'annina' ); ?>"><i class="fa fa-twitter spaceRightDouble"><span class="screen-reader-text"><?php esc_attr_e( 'Twitter', 'annina' ); ?></span></i></a>
				<?php endif; ?>
						
				<?php if (!empty($googleplusURL)) : ?>
					<a href="<?php echo esc_url($googleplusURL); ?>" title="<?php esc_attr_e( 'Google Plus', 'annina' ); ?>"><i class="fa fa-google-plus spaceRightDouble"><span class="screen-reader-text"><?php esc_attr_e( 'Google Plus', 'annina' ); ?></span></i></a>
				<?php endif; ?>
						
				<?php if (!empty($linkedinURL)) : ?>
					<a href="<?php echo esc_url($linkedinURL); ?>" title="<?php esc_attr_e( 'Linkedin', 'annina' ); ?>"><i class="fa fa-linkedin spaceRightDouble"><span class="screen-reader-text"><?php esc_attr_e( 'Linkedin', 'annina' ); ?></span></i></a>
				<?php endif; ?>
						
				<?php if (!empty($instagramURL)) : ?>
					<a href="<?php echo esc_url($instagramURL); ?>" title="<?php esc_attr_e( 'Instagram', 'annina' ); ?>"><i class="fa fa-instagram spaceRightDouble"><span class="screen-reader-text"><?php esc_attr_e( 'Instagram', 'annina' ); ?></span></i></a>
				<?php endif; ?>
						
				<?php if (!empty($youtubeURL)) : ?>
					<a href="<?php echo esc_url($youtubeURL); ?>" title="<?php esc_attr_e( 'YouTube', 'annina' ); ?>"><i class="fa fa-youtube spaceRightDouble"><span class="screen-reader-text"><?php esc_attr_e( 'YouTube', 'annina' ); ?></span></i></a>
				<?php endif; ?>
						
				<?php if (!empty($pinterestURL)) : ?>
					<a href="<?php echo esc_url($pinterestURL); ?>" title="<?php esc_attr_e( 'Pinterest', 'annina' ); ?>"><i class="fa fa-pinterest spaceRightDouble"><span class="screen-reader-text"><?php esc_attr_e( 'Pinterest', 'annina' ); ?></span></i></a>
				<?php endif; ?>
						
				<?php if (!empty($vkURL)) : ?>
					<a href="<?php echo esc_url($vkURL); ?>" title="<?php esc_attr_e( 'VK', 'annina' ); ?>"><i class="fa fa-vk spaceRightDouble"><span class="screen-reader-text"><?php esc_attr_e( 'VK', 'annina' ); ?></span></i></a>
				<?php endif; ?>
				
				<?php if (!empty($emailURL)) : ?>
					<a href="mailto:<?php echo sanitize_email($emailURL); ?>" title="<?php esc_attr_e( 'Email', 'annina' ); ?>"><i class="fa fa-envelope spaceRightDouble"><span class="screen-reader-text"><?php esc_attr_e( 'Tumblr', 'annina' ); ?></span></i></a>
				<?php endif; ?>
				
				<?php if ( $hideSearch == 1 ) : ?>
					<div id="open-search" class="top-search"><i class="fa spaceRightDouble fa-search"></i></div>
				<?php endif; ?>
			</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
