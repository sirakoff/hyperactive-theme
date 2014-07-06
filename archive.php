<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package hype
 */
require get_template_directory().'/inc/shares.php';
get_header(); ?>

<div class="onepcssgrid-1000 clearfix">
	<div class="onerow clearfix">
		<div class="col8 clearfix">

		<section id="primary" class="content-area clearfix">
			<main id="main" class="site-main clearfix" role="main">

			<?php if ( have_posts() ) : ?>
				<header class="page-header clearfix">
					<h1 class="page-title clearfix">
						<?php
							if (is_post_type_archive('event' )) :
								echo 'Eventd';
							elseif ( is_category() ) :
								single_cat_title();

							elseif ( is_tag() ) :
								single_tag_title();

							elseif ( is_author() ) :
								printf( __( 'Author: %s', 'hype' ), '<span class="vcard">' . get_the_author() . '</span>' );

							elseif ( is_day() ) :
								printf( __( 'Day: %s', 'hype' ), '<span>' . get_the_date() . '</span>' );

							elseif ( is_month() ) :
								printf( __( 'Month: %s', 'hype' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'hype' ) ) . '</span>' );

							elseif ( is_year() ) :
								printf( __( 'Year: %s', 'hype' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'hype' ) ) . '</span>' );

							elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
								_e( 'Asides', 'hype' );

							elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
								_e( 'Galleries', 'hype');

							elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
								_e( 'Images', 'hype');

							elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
								_e( 'Videos', 'hype' );

							elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
								_e( 'Quotes', 'hype' );

							elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
								_e( 'Links', 'hype' );

							elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
								_e( 'Statuses', 'hype' );

							elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
								_e( 'Audios', 'hype' );

							elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
								_e( 'Chats', 'hype' );

							else :
								_e( 'Archives', 'hype' );

							endif;

						?>
					</h1>
					<?php
						// Show an optional term description.
						$term_description = term_description();
						if ( ! empty( $term_description ) ) :
							printf( '<div class="taxonomy-description">%s</div>', $term_description );
						endif;
					?>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<div id="container" class="clearfix">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php hype_paging_nav(); ?>
			</div>
			<!-- /#container -->
			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</section><!-- #primary -->
	</div><!-- .col8 -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
