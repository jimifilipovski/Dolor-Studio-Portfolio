<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

 <footer class="group">
              <?php dynamic_sidebar('Footer widgets'); ?>
            </footer>
        </div>

<?php wp_footer(); ?>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?php bloginfo('template_url'); ?>/js/vendor/velocity.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/vendor/velocity.ui.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
        
		<script type="text/javascript">
		$(document).ready( function(){
		var $children = $('.around'); 
		for(var i = 0, l = $children.length; i < l; i += 3) { 
		$children.slice(i, i+3).wrapAll('<div class="onerow"></div>'); 
		} 
		});
		</script>
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>

</body>
</html>
