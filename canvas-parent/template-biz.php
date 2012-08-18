<?php
/**
 * Template Name: Business
 *
 * The business page template displays your posts with a "business"-style
 * content slider at the top. 
 *
 * @package WooFramework
 * @subpackage Template
 */

 global $woo_options, $wp_query; 
 get_header();
 
 $page_template = woo_get_page_template();
?>
    <!-- #content Starts -->
	<?php woo_content_before(); ?>
    <div id="content" class="col-full business" style="padding:0px;">
    
    	<div id="main-sidebar-container">

			<?php if ( $woo_options['woo_slider_biz'] == 'true' ) { $saved = $wp_query; woo_slider_biz(); $wp_query = $saved; } ?>
            <!-- #main Starts -->
            <?php woo_main_before(); ?>
			
			<?php if(is_front_page()) { ?>
	</div></div>
		<div class="woo-sc-box alert large" style="margin-top:0px;"><a href="http://www.mccaonline.com/resources/help-for-a-loved-one/"><img class=" wp-image-462" style="border-style: initial; border-color: initial; margin-top:3px; margin-right:30px; border-width: 0px;" title="button-help-loved-one" src="http://www.mccaonline.com/wp-content/uploads/button-help-loved-one.png" alt="" width="336" height="75" /></a>       <a href="http://www.mccaonline.com/resources/help-for-yourself/"><img class=" wp-image-465" style="border-style: initial; border-color: initial; border-width: 0px;" title="button-help-yourself" src="http://www.mccaonline.com/wp-content/uploads/button-help-yourself.png" alt="" width="336" height="75" /></a></div>
	<div id="content" class="col-full business">
    	<div id="main-sidebar-container">
	<?php } ?>	
	
            <div id="main">      
<?php
	woo_loop_before();
	
	if ( have_posts() ) { $count = 0;
		while ( have_posts() ) { the_post(); $count++;
			woo_get_template_part( 'content', 'page-template-business' ); // Get the page content template file, contextually.
		}
	}
	
	woo_loop_after();
?>        
            </div><!-- /#main -->
            <?php woo_main_after(); ?>
    
			<?php get_sidebar(); ?>
            
		</div><!-- /#main-sidebar-container -->         

		<?php get_sidebar( 'alt' ); ?>

    </div><!-- /#content -->
	<?php woo_content_after(); ?>
    
<?php get_footer(); ?>