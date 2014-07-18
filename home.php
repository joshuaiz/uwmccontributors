
<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
				
					
                 		
                 		<div class="nav-mobile">
                 			<a href="#" class="nav-button">+ MENU</a>&nbsp;&nbsp;
                 				<nav role="navigation">
	                 				<?php uwmc_mobile_nav(); ?>
	                 			</nav>
						
	                 			<span class="mobile-link">
                 					<a href="#">LIVE UNITED 2020</a><a href="#">OUR COMMUNITY</a>
                 				</span>
                 		</div><!-- mobile flyout nav (hidden above 768px) -->
                 		
                 	</div><!-- end #action-wrap -->
                 	
                 	<article class="home-buttons button-nav clearfix">
				    			<ul class="clearfix">
				    				<li class="button-nav-1"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/events.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/events@2x.png"></a></li>
				    				<li class="button-nav-2"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/events.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/events@2x.png"></a></li>
				    				<li class="button-nav-3"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/events.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/events@2x.png"></a></li>
				    				<li class="button-nav-4"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/events.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/events@2x.png"></a></li>
				    				<li class="button-nav-5"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/events.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/events@2x.png"></a></li>
				    				<li class="button-nav-6"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/events.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/events@2x.png"></a></li>
				    				<li class="button-nav-7 last-right"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/events.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/events@2x.png"></a></li>
				    			</ul>
				    </article>
				    
				    <div id="main" class="twelvecol clearfix homemain" role="main">
				    		
				    		<article class="mission homecontent clearfix">
				    			
				    			<section>
                 				
	                 				<h3>Education. Income. Health.</h3>
	                 				
	                 					<p>We envision a world where all individuals and families achieve their human potential through education, income 												stability and healthy lives. <a class="action-link" href="/lu2020/">Learn more &raquo;</a></p>
	                 					
	                 				
                 				</section>
				    			
				    		</article>	
                 				
                 			<article class="posts homecontent clearfix" role="main">
                 				
                 				<section class="action-home">
                 					<a href="/action/"><h2>Take Action</h2><span>></span></a>
                 				</section>
									
					    		<?php // Custom WordPress Home Page loop
						    		$temp = $wp_query;
						    		$wp_query= null;
						    		$wp_query = new WP_Query();
						    		$wp_query->query('posts_per_page=5');
						    		while ($wp_query->have_posts()) : $wp_query->the_post();
								?>					
					    		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="blogexcerpt">
								
								    <header class="article-header">
									
									    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><h3 class="post-title"><?php the_title(); ?></h3></a>
									    
									    <p class="byline vcard clearfix nomargin"><?php
										    printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 												'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'bonestheme')), bones_get_the_author_posts_link());
										?><?php the_tags('<span class="tags">' . __(' | Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p>
								
								    </header> <!-- end article header -->
								
								    <section class="entry-content" role="blogexcerpt">
									    <?php
									    $myExcerptLength=19;
										echo '<p>' . get_the_excerpt() . '</p>';
										$myExcerptLength=0;
										?>  
								    </section> <!-- end article section -->
								
								    <footer class="article-footer">
									    <!-- <p class="clearfix nomargin"><?php the_tags('<span class="tags">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p> --> <!-- no tags on the home page but they will show on the blog page -->
									
								    </footer> <!-- end article footer -->
								
								</article> <!-- end article -->
								
					    		<?php endwhile; ?>	
								
					    		<?php $wp_query = null; $wp_query = $temp;?><!-- always escape your custom loops! -->
					    		
                 			</article><!-- end #blog -->
                 				
                 			<article class="tweet homecontent clearfix">
                 				<section class="latest-tweets">
	                 				<h3>UWMC Tweets</h3>
	                 				<span class="small" style="padding:0 0 .5em 0;margin:0;">Follow <a href="https://twitter.com/unitedwaychi" target="_blank">@unitedwaychi</a></span><br />
	                 				<?php include_once 'latest_tweets.php'; ?>
                 				</section>
                 			
                 			</article>
			
				    </div> <!-- end #main -->
    
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
