<?php
/**
 * @package hype
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php hype_posted_on(); ?>
		</div><!-- .entry-meta -->

		<div class="thumb">
			<?php the_post_thumbnail();?>
		</div>
		<!-- /.thumb -->
	</header><!-- .entry-header -->

	<div class="entry-content clearfix">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'hype' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="author-box">
		<a href="<?php the_author_link();?>" class="author-image"></a>
		<div class="desc">
			<div class="author-name">
				<?php the_author_posts_link();?>
			</div>
			<!-- /.author-name -->
			<div class="bio">
				<?php the_author_meta('user_description');?>
			</div>
			<!-- /.bio -->
			<div class="social"></div>
			<!-- /.social -->
		</div>
		<!-- /.desc -->
	</div>
	<!-- /.author-box -->
	<footer class="entry-footer clearfix">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'hype' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'hype' ) );

			if ( ! hype_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'hype' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'hype' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'hype' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'hype' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>
		<?php 
				if (is_singular('event')) {
					$custom = get_post_custom( $post_id );
					echo $custom['event_price'][0];
				}
			
		?>
		<?php edit_post_link( __( 'Edit', 'hype' ), '<span class="edit-link">', '</span>' ); ?>


	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
