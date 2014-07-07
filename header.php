<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package hype
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	<style>
		<?php if(!is_home()){?>
			.head-navigation{
				display: block;
			}
			.site-branding{
				display: none;
			}
		<?php } ?>
	</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		
	<!-- Secondary Menu Headhesive -->
		<nav id="second-navigation" class="head-navigation" role="navigation">
			<div class="onepcssgrid-1200 clearfix">
				<div class="onerow clearfix">
					<div class="col2" id="top-2">
						<a class="title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri();?>/images/icon.png" alt=""> 
							<em class="name"><?php echo bloginfo('name');?></em>
						 </a>
					</div>
					<!-- /.col3 -->
					<div class="col7 clearfix" id="top-7">
						<div class="top-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'primary' ) );?>
						</div>
						<!-- /.top-menu -->
					</div>
					<!-- /.col6 clearfix -->
					<div class="col3 last" id="top-3">
						<ul class="top-links">
							<li class="sea">
					                        <div class="dropdown">
					                            <a id="search-button" href="#" role="button" class="dropdown-toggle show-sea " data-toggle="dropdown"><i class="fa fa-search"></i></a>
					                            <div class="dropdown-menu" aria-labelledby="search-button">
					                                <?php get_search_form();?>
					                                <div id="td-aj-search"></div>
					                            </div>
					                        </div>
							</li>
						</ul>
					</div>
					<!-- /.col3 last -->
				</div>
				<!-- /.onerow clearfix -->
			</div>
			<!-- /.onepcssgrid-1000 clearfix -->
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
	<div id="content" class="site-content">
		<div class="mobile-nav clearfix">
			<?php get_search_form();?>
		</div>
		<div class="ad-2 clearfix">
			<?php //echo adrotate_ad(3); ?>
		</div>
