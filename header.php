<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php elegant_titles(); ?></title>
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action('et_head_meta'); ?>
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie6style.css" />
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7style.css" />
	<![endif]-->
	<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8style.css" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
<link rel="Shortcut Icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div id="container">
		<?php do_action('et_header_top'); ?>
		<header id="header" class="clearfix">
			<hgroup id="logo-area">
				<?php $bloginfo_name = get_bloginfo( 'name' ); ?>
				<h1 id="logo">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( $bloginfo_name ); ?>"><?php if ( 'false' == et_get_option( 'flexible_logo_image', 'false' ) || '' == et_get_option( 'flexible_logo' ) ) echo apply_filters( 'et_logo_markup', $bloginfo_name ); else echo '<img src="' . esc_url( et_get_option( 'flexible_logo' ) ) . '" alt="' . esc_attr( $bloginfo_name ) . '" />'; ?></a>
				</h1>
				<h2><?php bloginfo( 'description' ); ?></h2>
			</hgroup>
			
			<a href="http://www.gmic-sv.com/register" id="go-register" class="action-button"><span class="color"><span class="text">Register Now</span></span></a>
			<a style="margin-left:5px;" href="http://www.gmic-sv.com/sponsorship/" id="sponsor" class="action-button"><span class="color"><span class="text"><?php esc_html_e( 'Promote Your Company at GMIC SV', 'Flexible' ); ?></span></span></a>
			<a style="clear:left; margin-top: 0;" href="http://eepurl.com/h2MOg" target="_blank" id="email-list" class="action-button" target="_blank"><span class="color"><span class="text"><?php esc_html_e( 'Get GMIC SV Email Updates', 'Flexible' ); ?></span></span></a>
			<p class="social-buttons clearfix"><a id="fb" href="http://www.facebook.com/theGMIC" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons.png" /></a><a id="tt" href="http://www.twitter.com/theGMIC" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-02.png" /></a><a id="in" href="http://www.linkedin.com/groups?gid=2825839&trk=hb_side_g" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-03.png" /></a><a id="em" href="mailto: info@gmic-sv.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-05.png" /></a><a id="chinese-overview" href="http://www.gmic-sv.com/overview-chinese" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social-buttons-06.png" /></a></p>
			<?php if ( ( $phone_num = et_get_option('flexible_phone_num') ) && '' != $phone_num ) echo '<span id="phone">' . $phone_num . '</span>'; ?>		
		</header> 
		<div id="main-area">
			<?php do_action('et_header_menu'); ?>