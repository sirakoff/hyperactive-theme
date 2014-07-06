<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package hype
 */
?>
	</div>
	<!-- /.onerow clearfix -->
</div>
<!-- /.onepcssgrid-1000 clearfix -->
	</div><!-- #content -->
	<footer id="colophon" class="site-footer clearfi" role="contentinfo">
		<div class="onepcssgrid-1000 clearfix">
      <div class="onerow clearfix">
        <div class="col4 clearfix">
          <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>
          <?php endif; // end sidebar widget area ?>
        </div>
        <!-- /.coll4 clearfix -->
        <div class="col4 clearfix">
          <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>
          <?php endif; // end sidebar widget area ?>
        </div>
        <!-- /.coll4 clearfix -->
        <div class="col4 last clearfix">
          <?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?>
          <?php endif; // end sidebar widget area ?>
        </div>
        <!-- /.coll4 last clearfix -->
      </div>
      <!-- /.onerow clearfix -->
			<div class="onerow clearfix">
				<div class="col12 clearfix">
					<div class="site-info clearfix">
             <div class="lf">
               <?php echo bloginfo( 'name' );?> &copy; 2014
             </div>
             <div class="ri">
               Designed by :
             <a href="http://sirakoff.com/" rel="designer">Sirakoff</a>
             </div>
					</div><!-- .site-info -->
				</div>
				<!-- /.col12 clearfix -->
			</div>
			<!-- /.onerow clearfix -->
		</div>
		<!-- /.onepcssgrid-1000 clearfix -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
	//NProgress bar
	NProgress.start();
  jQuery(document).ready(function() {
    if (jQuery(window).width() > 734) {
      <?php if (is_home()) {?>
        jQuery('#container').masonry({
          itemSelector: '.post',
          columnWidth:function(containerWidth){
            return containerWidth/3
          }
        });
      <?php }elseif (is_search() || is_archive()) {?>
        jQuery('#container').masonry({
          itemSelector: '.post',
          columnWidth:function(containerWidth){
            return containerWidth/2
          }
        });
      <?php }?>
    }
    if (jQuery(window).width() < 734) {
      jQuery('#container').masonry({
        itemSelector: '.post',
        columnWidth:function(containerWidth){
          return containerWidth/2
        }
      });
    }
    if (jQuery(window).width() > 734 && jQuery(window).width() < 748) {
      jQuery('#container').masonry({
        itemSelector: '.post',
        columnWidth:function(containerWidth){
          return containerWidth/2
        }
      });
    }
      jQuery('.gallery-icon a').attr('rel', 'gallery').addClass('swipebox');
      jQuery('table').addClass('table');
      jQuery('.gallery-caption').hide();
      jQuery( '.swipebox' ).swipebox();
	    jQuery("time.entry-date").timeago();
      jQuery(".mejs-container").wrap('<div class="audio-pl clearfix"></div>');
	});
  jQuery(window).ready(function () {
      jQuery('.menu').ReSmenu({
        selectOption: 'Menu',
        maxWidth: 982
      });
      if (jQuery(window).width() < 1000) {
          jQuery('.responsive_menu').addClass('mob-menu');
          jQuery('.top-menu .mob-menu').detach().appendTo('.mobile-nav');
          jQuery('.header input[type=text]').detach().appendTo('.mobile-nav');
      }
  });
    setTimeout(function() { NProgress.done()});
</script>
<script>
	//Vintage 
	
	var options = {
        onError: function() {
            alert('ERROR');
        }
    };
    var effect = {
    	curves: (function() {
      var rgb = function (x) {
        return -12 * Math.sin( x * 2 * Math.PI / 255 ) + x;
      },
      r = function(x) {
        return -0.2 * Math.pow(255 * x, 0.5) * Math.sin(Math.PI * (-0.0000195 * Math.pow(x, 2) + 0.0125 * x ) ) + x;
      },
      g = function(x) {
        return -0.001045244139166791 * Math.pow(x,2) + 1.2665372554875318 * x;
      },
      b = function(x) {
        return 0.57254902 * x + 53;
      },
      c = {r:[],g:[],b:[]};
      for(var i=0;i<=255;++i) {
        c.r[i] = r( rgb(i) );
        c.g[i] = g( rgb(i) );
        c.b[i] = b( rgb(i) );
      }
      return c;
    })(),
    screen: {
      r: 227,
      g: 12,
      b: 169,
      a: 0.15
    },
    vignette: 0.4,
    viewFinder: false // or path to image 'img/viewfinder.jpg'
    };
    jQuery('img.wp-post-image').vintage(options, effect);
</script>
</body>
</html>