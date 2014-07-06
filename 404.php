<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package hype
 */

get_header(); ?>
<div class="onepcssgrid-1000 clearfix">
	<div class="onerow clearfix">
		<div class="col12 clearfix">
			<div id="primary" class="content-area clearfix">
				<main id="main" class="site-main clearfix" role="main">

					<section class="error-404 not-found clearfix">
						<header class="clearfix">
							<img src="<?php echo get_template_directory_uri();?>/images/top-logo.png" style="display:block;margin:0 auto;width:200px; height:140px;"/>
							<h1 class="page-title clearfix"><?php _e( 'Oops! That page can&rsquo;t be found.', 'hype' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content clearfix">
							<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'hype' ); ?></p>

							<?php get_search_form(); ?>

							<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .col12 -->

<?php get_footer(); ?>