<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" itemscope itemtype="http://schema.org/Blog" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" itemscope itemtype="http://schema.org/Blog" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" itemscope itemtype="http://schema.org/Blog" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html itemscope itemtype="http://schema.org/Blog" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
	
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/colorbox.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/layout.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<meta name="description" content="We seek to spread our ideas and imaginations with the world." />
<meta name="keywords" content="Sukiyaki Press, Press, Multi, Media, Comics, Games, Movies, Story, Art, Illustration, Eleanor, Wings of Destiny, Unit 01, Anomoly, Saint Slayer, Doctor Wolf!, Official, Site, Website" />

<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.gif" type="image/x-icon" />

<meta property="og:title" content="Sukiyaki Press!" />
<meta property="og:type" content="author" />
<meta property="og:url" content="http://sukiyakipress.com/" />
<meta property="og:image" content="http://sukiyakipress.com/wp-content/themes/sukiyaki-newbuild/img/arc6.png" />
<meta property="og:site_name" content="Sukiyaki Press | Official Site" />
<meta property="fb:admins" content="100001194896940" />

<!-- Add the following three tags inside head -->
<meta itemprop="name" content="Sukiyaki Press!">
<meta itemprop="description" content="We seek to spread our ideas and imaginations with the world.">
<meta itemprop="image" content="http://sukiyakipress.com/wp-content/themes/sukiyaki-newbuild/img/arc6.png">

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<script src="<?php bloginfo( 'template_directory' ); ?>/js/modernizr.custom.37797.js"></script> 
<!-- Grab Google CDN's jQuery. fall back to local if necessary --> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-1.6.1.min.js"><\/script>')</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

</head>

<body <?php body_class(); ?>>
	<header id="branding" role="banner">				
		<div class="image-featured">
			<?php
				// Check to see if the header image has been removed
				$header_image = get_header_image();
				if ( ! empty( $header_image ) ) :
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php
					// The header image
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( HEADER_IMAGE_WIDTH, HEADER_IMAGE_WIDTH ) ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					else : ?>
					<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
				<?php endif; // end check for featured image or standard header ?>
			</a>
			<?php endif; // end check for removed header image ?>

			<?php
				// Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) :
			?>
				<div class="only-search<?php if ( ! empty( $header_image ) ) : ?> with-image<?php endif; ?>">
				<?php get_search_form(); ?>
				</div>
			<?php
				else :
			?>				
			<?php endif; ?>
			
			<div id="fish"></div>
			<div class="press-title">
				<hgroup>
					<h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="hidetext"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
				</hgroup>
				<?php /*get_search_form();*/ ?>
			</div>
			<?php/*
			<div id="slider">
			<?php $my_query = new WP_Query('showposts=5&category_name=featured'); while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
			<img src="<?php echo get_post_meta($post->ID, 'nivoimage', true); ?>" alt="" title="<?php the_title(); ?>" />
			</a>
			<?php endwhile; ?>
			</div>
			<br clear="all" />
			*/?>			
		</div>				

		<nav id="access" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
			<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
			<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
			<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
			<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #access -->
	</header><!-- #branding -->
	<div class="wrap">
<div id="page" class="hfeed">

	<div id="main">