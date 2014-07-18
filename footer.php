			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
					
					
	                		
					<p class="source-org copyright small-caps">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a> &amp; <a href="http://uw-mc.org/">United Way of Metropolitan Chicago</a>. <span class="mobile-hidden">All Rights Reserved.</span></p>
				
				</div> <?php /* end #inner-footer */ ?>
				
			</footer> <?php /* end footer */ ?>
			
				<div id="footer-nav" class="wrap clearfix">
				
			<?php 
			$parent = $post->post_parent;
			$grandparent = $parent->post_parent;
			
			if( !is_page('14893') || ! $post->post_parent == '14893' ) { ?>
					<nav role="navigation">
    					<?php bones_footer_links(); ?>
    				</nav>
				</div>
			<?php } ?>
		
		</div> <?php /* end #container */ ?>
		
		<?php /* all js scripts are loaded in library/bones.php */ ?>
		<?php wp_footer(); ?>

	</body>

</html> <?php /* end page. what a ride! */ ?>
