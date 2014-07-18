<?php get_header('default'); ?>
			
			<div id="content">

				<div id="inner-content" class="wrap clearfix">
				
						<div class="nav-mobile">
                 			<a href="#" class="nav-button">Toggle Navigation</a>&nbsp;&nbsp;
                 				<nav role="navigation">
	                 				<?php uwmc_mobile_nav(); ?>
	                 			</nav>
						
	                 			<span class="mobile-link">
                 					<a href="#">LIVE UNITED 2020</a>&nbsp;&nbsp;
                 					<a href="#">OUR COMMUNITY</a>
                 				</span>
                 			</div><!-- mobile flyout nav (hidden above 768px) -->
			
					<div id="main" class="eightcol first clearfix" role="main">
						<h3 class="archive-title"><?php _e('Search Results for:', 'bonestheme'); ?> <span><?php echo esc_attr(get_search_query()); ?></span></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
								<header class="article-header">
								
								<?php
										$title = get_the_title();
										$keys= explode(" ",$s);
										$title = preg_replace('/('.implode('|', $keys) .')/iu', '<span class="search-term">\0</span>', $title);
								?>

									<h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo $title; ?></a></h3>
                  <p class="byline vcard small-caps"><?php _e("Posted:", "bonestheme"); ?> <time class="updated datetime" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php the_tags('<span class="tags">' . __(' | Tags:', 'bonestheme') . '</span> ', ', ', ''); ?> <?php 
                  $categories = get_the_category();
                  $separator = ' ';
                  $output = '';
                  if($categories){
	                  foreach($categories as $category) {
		                  $output .= ' | Categories: <a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "%s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		                  }
		          echo trim($output, $separator);
		          } ?></p>
						
								</header> <!-- end article header -->
					
								<section class="entry-content">
								    <?php the_excerpt('<span class="read-more">' . __('Read more &raquo;', 'bonestheme') . '</span>'); ?>
					
								</section> <!-- end article section -->
								
						
								<footer class="article-footer">
							
								</footer> <!-- end article footer -->
					
							</article> <!-- end article -->
					
						<?php endwhile; ?>
						
					
						    <?php if (function_exists('bones_page_navi')) { ?>
						        <?php bones_page_navi(); ?>
						    <?php } else { ?>
						        <nav class="wp-prev-next">
						            <ul class="clearfix">
						    	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
						    	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
						            </ul>
						        </nav>
						    <?php } ?>		
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h2 class="post-title"><?php _e("Sorry, No Results.", "bonestheme"); ?></h1>
    					    	</header>
    					    	<section class="entry-content">
    					    		<p><?php _e("Please try your search again.", "bonestheme"); ?></p>
    					    	</section>
    					    	
    					    	<section class="search-404">
				
							    <p><?php get_search_form(); ?></p>
				
							</section> <!-- end search section -->
							
    					    	<footer class="article-footer">
    					    	    
    					    	</footer>
    					    </article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    			
    			    <?php get_sidebar(); ?>
    			
    			</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
