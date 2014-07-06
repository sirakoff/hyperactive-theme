<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package hype
 */
require get_template_directory().'/inc/shares.php';
get_header(); ?>
	<div class="onepcssgrid-1000 clearfix">
		<div class="onerow clearfix">
		
			<div class="col12 clearfix">
				<h4 class="block-title">
					<span>LATEST POSTS</span>
				</h4>
				<div id="primary" class="content-area clearfix">
					<main id="main" class="site-main" role="main">
					<?php $post_counter=0; ?>
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'post_type' => 'post',
							'tag__not_in' => '81',
							'paged'=>$paged
						);
						$query2 = new WP_Query( $args );

					?>
					<?php if ( $query2->have_posts() ) : ?>
						<div class="clearfix" id="container">
						<?php /* Start the Loop */ ?>
							<?php while ( $query2->have_posts() ) : $query2->the_post(); ?>

								<?php
									/* Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'content', get_post_format() );
								?>
								<?php 
									$post_counter++;
									if ($post_counter == 7) { ?>
										<article class="post ad-1">
											<a href="#"><img src="http://pagead2.googlesyndication.com/simgad/14174689887408439789" alt=""></a>
										</article>
										<!-- /.post ad -->
								<?php } ?> 
							<?php endwhile; ?>
						</div>
						<!-- /.container -->

					<?php else : ?>
					<?php /* Restore original Post Data */
						wp_reset_postdata();?>
						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>
					
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<!-- /.col9 -->
			<?php hype_paging_nav(); ?>

<?php get_footer(); ?>
