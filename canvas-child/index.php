<?php
/**
 * Index Template
 *
 * The index template is a placeholder for all cases that don't have a template file. 
 * Ideally, all fases would be handled by a more appropriate template according to the
 * current page context (for example, `tag.php` for a `post_tag` archive or `single.php`
 * for a single blog post).
 *
 * @package WooFramework
 * @subpackage Template
 */

 get_header();
 global $woo_options;
?>      
    <!-- #content Starts -->
	<?php woo_content_before(); ?>
    <div id="content" class="col-full">
    
    	<div id="main-sidebar-container">    
		
            <!-- #main Starts -->
            <?php woo_main_before(); ?>
            
             <div class="woo-sc-box alert large  "><a href="http://www.mccaonline.com/resources/help-for-a-loved-one/"><img class=" wp-image-462" style="border-style: initial; border-color: initial; border-width: 0px;" title="button-help-loved-one" src="http://www.mccaonline.com/wp-content/uploads/button-help-loved-one.png" alt="" width="336" height="75" /></a>       <a href="http://www.mccaonline.com/resources/help-for-yourself/"><img class=" wp-image-465" style="border-style: initial; border-color: initial; border-width: 0px;" title="button-help-yourself" src="http://www.mccaonline.com/wp-content/uploads/button-help-yourself.png" alt="" width="336" height="75" /></a></div>
             
            <div id="main" class="col-left">
            	
			<?php get_template_part( 'loop', 'index' ); ?>
                    
            </div><!-- /#main -->
            <?php woo_main_after(); ?>
    
            <?php get_sidebar(); ?>
    
		</div><!-- /#main-sidebar-container -->         

		<?php get_sidebar( 'alt' ); ?>       

    </div><!-- /#content -->
	<?php woo_content_after(); ?>
		
<?php get_footer(); ?>