<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
					
										<article class="actions">
				    						    		
						    	<section class="call-to-action"><!-- the call-to-action buttons: Give. Advocate. Volunteer. -->
						    	
							    	<ul class="action-nav">
							    	
								    	<a href="https://donate.uw-mc.org/page/contribute/Give">
								    		<li class="action-buttons">
								    			<span class="action-img">
									    			<img src="<?php echo get_template_directory_uri(); ?>/library/images/give.png">
									    			</span>
									    			<span class="action-text">Give</span><br />
									    			<span class="action-details">Donate to United Way</span>
									    			<span class="take-action-arrow">></span>
									    	</li>
									    </a>
		                                
		                                <a href="http://www.uw-mc.org/get-involved/advocate">
		                                	<li class="action-buttons">
		                                		<span class="action-img">
		                                			<img src="<?php echo get_template_directory_uri(); ?>/library/images/advocate2.png">
		                                		</span>
		                                		<span class="action-text">Advocate</span><br />
		                                		<span class="action-details">Champion the Cause </span>
		                                		<span class="take-action-arrow">></span>
		                                	</li>
		                                </a>
		                                
		                                <a href="http://www.uw-mc.org/get-involved/volunteer">
		                                	<li class="action-buttons">
		                                		<span class="action-img">
		                                			<img src="<?php echo get_template_directory_uri(); ?>/library/images/volunteer.png">
		                                		</span>
		                                		<span class="action-text">Volunteer</span><br />
		                                		<span class="action-details">Lend Your Muscle</span>
		                                		<span class="take-action-arrow">></span>
		                                	</li>
		                                </a>
		                                
		                              </ul><!-- end ul.action-nav -->
		                              
						    	</section><!-- end #call-to-action -->
						    	
						    
						    	
				    		</article><!-- end #actions -->
				    		
				    		<div class="nav-mobile">
                 			<a href="#" class="nav-button">Toggle Navigation</a>
                 				<nav role="navigation">
	                 				<?php uwmc_mobile_nav(); ?>
	                 			</nav>
						
	                 			<span class="mobile-link">
                 					<a href="#">LIVE UNITED 2020</a>
                 					<a href="#">OUR COMMUNITY</a>
                 				</span>
                 			</div><!-- mobile flyout nav (hidden above 768px) -->
				
				    <div id="main" class="eightcol first clearfix" role="main">
				
						<h1 class="archive-title h2"><?php post_type_archive_title(); ?></h1>

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
							    <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
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
					
						    <section class="entry-content clearfix">
						    
						    	<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
						
							    <?php the_excerpt(); ?>

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
    							    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    						    <section class="entry-content">
    							    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
    	    					<footer class="article-footer">
    		    				    <p><?php _e("", "bonestheme"); ?></p>
    			    			</footer>
    				    	</article>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    
	    			<?php get_sidebar(); ?>
                
                </div> <!-- end #inner-content -->
                
			</div> <!-- end #content -->

<?php get_footer(); ?>
