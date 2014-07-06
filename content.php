<?php
/**
 * @package hype
 */
?>

<article id="post-<?php the_ID(); ?>" class="post clearfix" <?php post_class(); ?>>
	<?php if (has_post_thumbnail() ){ ?>
	<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
	<?php } ?>
	<div class="ri clearfix" <?php if (!has_post_thumbnail()){ echo 'style="float:none; width:100%;"';}?>>
		<div class="share">
			<span>0</span><i class="fa fa-share"></i>
		</div>
		<!-- /.share -->
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'hype' ) );
					if ( $categories_list && hype_categorized_blog() ) :
				?>
				<span class="cat-links">
					<?php printf( __( '%1$s', 'hype' ), $categories_list ); ?>
				</span>
				<?php endif; // End if categories ?>
			<?php endif; // End if 'post' == get_post_type() ?>
		</header><!-- .entry-header -->
		<footer class="entry-footer cleaarfix">
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta clearfix">
				<?php hype_posted_on(); ?>
				<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<span class="comments-link"><?php comments_popup_link( __( '<i class="fa fa-comment-o"></i>', 'hype' ), __( '1 <i class="fa fa-comment-o"></i>', 'hype' ), __( '% <i class="fa fa-comments-o"></i>', 'hype' ) ); ?></span>
			<?php endif; ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>

			<?php edit_post_link( __( 'Edit', 'hype' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	</div>
	<!-- /.ri clearfix -->
</article><!-- #post-## -->
