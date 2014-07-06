<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package hype
 */
?>

<article id="post-<?php the_ID(); ?>" class="clearfix" <?php post_class(); ?>>
	<header class="entry-header" class="clearfix">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content" class="clearfix">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'hype' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer" class="clearfix">
		<?php edit_post_link( __( 'Edit', 'hype' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
