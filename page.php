<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package hype
 */

get_header(); ?>
<div class="onepcssgrid-1000 clearfix">
	<div class="onerow clearfix">
		<div class="col8 clearfix">
			<div id="primary" class="content-area  clearfix">
			<main id="main" class="site-main clearfix" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .col8 -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
