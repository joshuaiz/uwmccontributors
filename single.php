<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="wrap clearfix">
				
					<article class="actions">
				    						    		
						    	<section class="call-to-action"><?php /*  the call-to-action buttons: Give. Advocate. Volunteer. */ ?>
						    	
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
		                                
		                                <a href="http://uw-mc.org/advocate/">
		                                	<li class="action-buttons">
		                                		<span class="action-img">
		                                			<img src="<?php echo get_template_directory_uri(); ?>/library/images/advocate2.png">
		                                		</span>
		                                		<span class="action-text">Advocate</span><br />
		                                		<span class="action-details">Champion the Cause </span>
		                                		<span class="take-action-arrow">></span>
		                                	</li>
		                                </a>
		                                
		                                <a href="http://uw-mc.org/volunteer/">
		                                	<li class="action-buttons">
		                                		<span class="action-img">
		                                			<img src="<?php echo get_template_directory_uri(); ?>/library/images/volunteer.png">
		                                		</span>
		                                		<span class="action-text">Volunteer</span><br />
		                                		<span class="action-details">Lend Your Muscle</span>
		                                		<span class="take-action-arrow">></span>
		                                	</li>
		                                </a>
		                                
		                              </ul><?php /*  end ul.action-nav */ ?>
		                              
						    	</section><?php /*  end #call-to-action */ ?>
						    	
						    
						    	
				    		</article><?php /*  end #actions */ ?>
				    		
				    		<div class="nav-mobile">
                 			<a href="#" class="nav-button">Toggle Navigation</a>
                 				<nav role="navigation">
	                 				<?php uwmc_mobile_nav(); ?>
	                 			</nav>
						
	                 			<span class="mobile-link">
                 					<a href="#">LIVE UNITED 2020</a>
                 					<a href="#">OUR COMMUNITY</a>
                 				</span>
                 			</div><?php /*  mobile flyout nav (hidden above 768px) */ ?>
			
					<div id="main" class="eightcol first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
								<header class="article-header">
							
									<h2 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h2>
                  <p class="byline vcard small-caps"><?php _e("Posted:", "bonestheme"); ?> <time class="updated datetime" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php the_tags('<span class="tags">' . __(' | Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p>
                   
						
								</header> <?php /*  end article header */ ?>
					
								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php /*  end article section */ ?>
								
								<?php /* only show the Resources box if there is something in it */ ?>
							<?php $meta = get_post_meta( get_the_ID(), 'uwmc_resources_wysiwyg', true );
										if ($meta) {  
											echo '<article class="box-resources">';
											echo '<section class="box-outer"><header class="box-header"><h4 class="box-heading"><span class="icon-tools"></span>Resources</h4></header>';
											echo '<section class="box-content">';
											echo $meta;
											echo '</section></section></article>';
								} ?>
						
								<footer class="article-footer">
									<?php /*  <?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', '</p>'); ?> */ ?>
									<p class="post-categories small-caps">Categories: <?php
// get the category IDs assigned to post
$categories = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );
// separator between links
$separator = ', ';

if ( $categories ) {

	$cat_ids = implode( ',' , $categories );
	$cats = wp_list_categories( 'title_li=&style=none&echo=0&include=' . $cat_ids );
	$cats = rtrim( trim( str_replace( '<br />',  $separator, $cats ) ), $separator );
	
	// display post categories
	echo  $cats;
}
?></p>
							<section class="social-sharing">
								<?php simple_social_sharing('unitedwaychi'); ?>
							</section>
								</footer> <?php /*  end article footer */ ?>
					
								<?php comments_template(); ?>
					
							</article> <?php /*  end article */ ?>
					
						<?php endwhile; ?>			
					
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
			
					</div> <?php /*  end #main */ ?>
    
					<?php get_sidebar(); ?>

				</div> <?php /*  end #inner-content */ ?>
    
			</div> <?php /*  end #content */ ?>

<?php get_footer(); ?>
