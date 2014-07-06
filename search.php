<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package hype
 */

get_header(); ?>
<div class="onepcssgrid-1000 clearfix">
	<div class="onerow clearfix">
		<div class="col8 clearfix">
			<section id="primary" class="content-area clearfix">
				<main id="main" class="site-main clearfix" role="main">

				<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'hype' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->
				<?php get_search_form();?>
				<div class="clearfix" id="container">

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'content' );
						?>

					<?php endwhile; ?>

					<?php hype_paging_nav(); ?>
				</div>
				<!-- /.container -->
				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</section><!-- #primary -->
		</div><!-- .col12 -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
