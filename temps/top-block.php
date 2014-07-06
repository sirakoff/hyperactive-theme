<?php if (is_home()&&!is_paged()) {?>
			<div class="onerow clearfix" id="featured">
				<div class="col12 clearfix">
					<div class="top-block clearfix">
					<h4 class="block-title">
						<span>TRENDING</span>
					</h4>
					<?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page'=>8,
							'tag' => 'content-2'
						);
						$query = new WP_Query( $args );
						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
						?>
								<article class="top clearfix" id="post-<?php the_ID();?> top" <?php post_class();?>>
						 			<a href="<?php the_permalink();?>" class="clearfix img"><?php the_post_thumbnail();?></a>
								<a href="<?php the_permalink();?>"><h2 class="entry-title"> <?php the_title(); ?> </h2></a>
								</article>
							<?php }
						} else {
							echo 'No posts found';
						}
						/* Restore original Post Data */
						wp_reset_postdata();
					?>
				</div>
				</div>
				<!-- /.col12 clearfix -->
			</div>
			<!-- /.onerow clearfix -->
			<?php }?>