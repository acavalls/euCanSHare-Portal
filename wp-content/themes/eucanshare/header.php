<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fdg
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	
	<!-- 	favicon 	-->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/img/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/img/favicon/safari-pinned-tab.svg" color="#00738c">
	<meta name="msapplication-TileColor" content="#00738c">
	<meta name="theme-color" content="#ffffff">
	<!-- 	favicon 	-->
	
	<!-- 	Open Graph 	-->
	<meta property="og:title" content="euCanSHare">
	<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/og-eucanshare-logo.png">
	<meta property="og:site_name" content="euCanSHare data portal">
	<meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />
	<meta property="og:description" content="An EU-Canada joint infrastructure for next-generation multi-Study Heart research">
	<!-- 	Open Graph 	-->
		
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="breakpage">
		<div class="top-gradient"></div>
		<div class="wrapper cf">
			<div class="site-branding">
					<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation">
				<a class="menu-news" target="blank" href="http://eucanshare.eu">EUCANSHARE PROJECT</a>
				<a class="menu-news <?php if (is_page('Catalogue')){ echo 'selected';}?> " href="<?php echo get_page_link(598) ?>">DATA CATALOGUE</a>
				<a class="menu-news <?php if (is_page('603')){ echo 'selected';}?> " href="<?php echo get_page_link(603) ?>">DATA ACCESS</a>
				<a class="menu-news <?php if (is_page('610')){ echo 'selected';}?> " href="<?php echo get_page_link(610) ?>">DATA ANALYSIS ENV.</a>
				<a class="menu-news" href="https://mica.eucanshare.bsc.es">COHORT MGT. (restricted)</a>
				<a class="menu-news" target = "blank" href="https://vre.eucanshare.bsc.es">My Workspace</a>
				<a class="menu-contatti last <?php if (is_page('608')){ echo 'selected';}?>"  href="<?php echo get_page_link(608) ?>" >SUPPORT</a>
				
			</nav>
			<div id="menu"></div>
		</div>			
</header><!-- #head -->

	<?php if(is_page('Project')) { ?>
		<?php get_template_part("inc/submenu"); ?>
	<?php } ?>



	<div id="main-content">
		

<div class="social-bar cf">
	<ul class='social'>
	  <li>
	    <a href="https://twitter.com/euCanSHare" target="_blank" class="fab fa-twitter">    
	      <span>Twitter</span>
	    </a> 
	  </li>
	  
	  <li>
	    <a href="https://www.facebook.com/euCanSHare" target="_blank" class="fab fa-facebook-f">
	      <span>Facebook</span>
	    </a>
	  </li>
	  
	    <li>
	    <a href="https://www.linkedin.com/company/eucanshare/about/" target="_blank" class="fab fa-linkedin">
	      <span>Linkedin</span>
	    </a>
	  </li>
	  
	  <li>
	    <a href="https://www.researchgate.net/project/euCanSHare" target="_blank" class="fab rg">
	      <span>ResearchGate</span>
	    </a>
	  </li>
	  
	  <li>
	    <a href="https://zenodo.org/communities/eucanshare" target="_blank" class="fab zenodo">
	    <span>Zenodo</span>
	    </a> 
	  </li>
	  
	</ul>
</div>
