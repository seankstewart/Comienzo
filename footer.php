<div class="clear"></div>
            </div><!-- /#content -->
            
            <div class="footer">
                <p class="copyright">&copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?></p>
	
                <p class="wordpress-info"><?php bloginfo('name'); ?> is proudly powered by <a href="http://wordpress.org/">WordPress</a> | <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> | <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.</p>
		
                <?php wp_footer(); ?>
	
            </div><!-- /.footer -->

	</div><!-- /#main-wrapper -->
	
    <!-- calling js for site -->
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/scripts.js"></script>
	
    <!-- adding jQuery.validate plugin for comment validation client side -->
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.validate.min.js"></script>
    
    <?php
      //Display Google Analytics, etc. from admin menu
      echo get_option('omr_tracking_code');
    ?>
    
    </body>

</html>
