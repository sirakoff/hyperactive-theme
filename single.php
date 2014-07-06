<?php
/**
 * The Template for displaying all single posts.
 *
 * @package hype
 */

get_header(); ?>
<div class="onepcssgrid-1000 clearfix">
		<div class="onerow clearfix">
			<?php if ( !has_post_format( array('gallery','video') )) { ?>
			<div class="col8 clearfix">
			<?php }else{?>
			<div class="col12">
			<?php }?>
				<div id="primary" class="content-area clearfix">
					<main id="main" class="site-main clearfix" role="main">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'single' ); ?>
						<?php hype_post_nav(); ?>
						<?php if ( !has_post_format( array('gallery','audio','video') )) { ?>
							<?php
								// If comments are open or we have at least one comment, load up the comment template
								if ( comments_open() || '0' != get_comments_number() ) :
									comments_template();
								endif;
							?>
						<?php }?>
					<?php endwhile; // end of the loop. ?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .col8 -->
<?php if ( !has_post_format( array('gallery','video') )) { ?>
<?php get_sidebar(); ?>
<?php }?>
<?php get_footer(); ?>