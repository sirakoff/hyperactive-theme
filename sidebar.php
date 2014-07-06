<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package hype
 */

// require get_template_directory().'/inc/counts.php';
?>
<div class="col4 last">
	<div id="secondary" class="widget-area" role="complementary">
		<aside id="social" class="widget-social clearfix">
			<h4 class="widget-title block-title"><span>Social</span></h4>
				<div><i class="fa fa-twitter fa-2x"></i><span class="detail"> <?php //echo number_format($twitter['followers_count']);?> Followers</span><a href="http://twitter.com/hyperactive_gh" target="_blank">Follow</a></div>
				<div><i class="fa fa-instagram fa-2x"></i><span class="detail"><?php //echo number_format($instagram->data->counts->followed_by);?> Followers</span><a href="http://instagram.com/hyperactive_gh" target="_blank">Follow</a></div>
				<div><i class="fa fa-youtube fa-2x"></i><span class="detail"><?php //echo number_format($stats_data['subscriberCount']);?> Subscibers</span><a href="" target="_blank">Subscribe</a></div>
		</aside>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
</div>
<!-- /.col4 last -->
