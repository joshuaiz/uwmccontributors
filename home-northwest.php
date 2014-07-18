<?php
/*
*
* Template Name: Home Northwest
*
* @package UW_Chilipepper
* 
*
* Last revised: February 25, 2013
*
*/
?>

<?php get_header('northwest'); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
				
					<div class="action-wrap twelvecol clearfix"><!-- woefully unsemantic but it really just is a wrapper div to clear floats -->
					
						<div class="action"><!-- includes the slider, call-to-action buttons, and social buttons -->
						
				    		<article class="home-slider gs1">
				    		<?php echo do_shortcode('[nivoslider slug="nws-slider"]'); ?>
				    		<span class="extended-fill">When we <span class="trade">LIVE UNITED</span>, kids and families in need have the opportunities to thrive.</span>
				    		</article>
				    		
				    		<article class="actions">
				    			<div class="search-form">
				    			<?php get_search_form(); ?>
				    			</div>
				    		
						    	<section class="call-to-action clearfix"><!-- the call-to-action buttons: Give. Advocate. Volunteer. -->
						    	
							    	<ul class="action-nav">
							    	
								    	<a href="https://donate.uw-mc.org/page/contribute/Give">
								    		<li id="action-give">
								    			<span class="action-img">
									    			<img src="<?php echo get_template_directory_uri(); ?>/library/images/give.png">
									    			</span>
									    			<span class="action-text">Give</span><br />
									    			<span class="action-details">Donate to United Way</span>
									    			<span class="take-action-arrow">></span>
									    	</li>
									    </a>
		                                
		                                <a href="http://uw-mc.org/advocate">
		                                	<li id="action-advocate">
		                                		<span class="action-img">
		                                			<img src="<?php echo get_template_directory_uri(); ?>/library/images/advocate2.png">
		                                		</span>
		                                		<span class="action-text">Advocate</span><br />
		                                		<span class="action-details">Champion the Cause </span>
		                                		<span class="take-action-arrow">></span>
		                                	</li>
		                                </a>
		                                
		                                <a href="http://uw-mc.org/volunteer">
		                                	<li id="action-volunteer">
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
						    	
						    	<section class="social-buttons clearfix">
						    		<ul>
						    			<li><a href="http://www.facebook.com/unitedwaychicago" title="UWMC on Facebook"><img src="<?php echo get_template_directory_uri(); ?>/library/images/facebook_circle.png"></a></li>
						    			<li><a href="http://twitter.com/unitedwaychi" title="Follow UWMC on Twitter"><img src="<?php echo get_template_directory_uri(); ?>/library/images/twitter_circle.png"></a></li>
						    			<li><a href="http://www.youtube.com/user/unitedwaychicago" title="Watch UWMC videos on YouTube"><img src="<?php echo get_template_directory_uri(); ?>/library/images/youtube_circle.png"></a></li>
						    			<li><a href="http://www.flickr.com/photos/7223853@N02/" title="UWMC Flickr photos"><img src="<?php echo get_template_directory_uri(); ?>/library/images/flickr_circle.png"></a></li>
						    			<li><a href="http://uw-mc.org/feed/" title="UWMC RSS Feed"><img src="<?php echo get_template_directory_uri(); ?>/library/images/rss_circle.png"></a></li>
						    		</ul>
						    	
						    	</section>
						    	
				    		</article><!-- end #actions -->
						    	
		                 </div><!-- end #action -->
                 		
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
                 		
                 	</div><!-- end #action-wrap -->
                 	
                 	<article class="home-buttons button-nav clearfix">
				    			<ul class="clearfix">
				    				<li class="button-nav-1"><a href="/northwest/generous-contributors/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/nws_generous_blue.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/nws_generous_blue@2x.png"></a></li>
				    				<li class="button-nav-2"><a href="/northwest/in2books/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/nws_in2books.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/nws_in2books@2x.png"></a></li>
				    				<li class="button-nav-3"><a href="/wlc/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/wlc.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/wlc@2x.png"></a></li>
				    				
				    				<li class="button-nav-4"><a href="/northwest/united-way-youth-board/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/nws_youth_board.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/nws_youth_board@2x.png"></a></li>
				    				<li class="button-nav-5"><a href="/northwest/board-governance/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/board_governance.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/board_governance@2x.png"></a></li>
				    				<li class="button-nav-6"><a href="/northwest/meet-the-staff/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/meet_the_staff2.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/meet_the_staff2@2x.png"></a></li>
				    				<li class="button-nav-7 last-right"><a href="/northwest/contact/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/contact_us.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/contact_us@2x.png"></a></li>
				    			</ul>
				    </article>

				    
				    <div id="main" class="twelvecol clearfix homemain" role="main">
				    	
				    		
				    			
				    		<article class="mission column-content clearfix">
				    			
				    			<section>
                 				
	                 				<h3 class="post-title" style="color:#FF9600;font-weight:700;">Education. Income. Health.</h3>
	                 				
	                 					<p>We envision a world where all individuals and families achieve their human potential through education, income 												stability and healthy lives. <a class="action-link" href="/lu2020/">Learn more &raquo;</a></p>
	                 					
	                 				
                 				</section>
                 				<section>
<h3>The Local Need:</h3>
<p>As part of a network of support for <span class="trade">LIVE UNITED 2020</span>, Northwest Suburban United Way serves communities across the northwest suburbs and Skokie Valley. The estimated population for this region is 1.1 million residents.</p>
<ul class="list-square">
<li>Across the Northwest Suburban United Way footprint 22% of students are low-income.</li>
<li>In some parts of the northwest suburbs and Skokie Valley, more than 50% of 11th graders are not meeting ISAT performance criteria in reading and math.</li>
<li>In select northwest communities, only 69% of 3rd graders are meeting or exceeding expectations on their ISAT math scores, which is significantly lower than the 86% meeting or exceeding at the state level.</li>
<li>Even with a median income of $65,868, 49,500 people still live below the federal poverty level (approximatley $20,000 annual income for a family of four).</li>
<li>Renters account for 27% of the households.</li>
</ul>
                 				</section>
				    			
				    		</article>	
                 				
                 			<article class="posts column-content clearfix" role="main">
                 			
                 			<h3 class="post-title blog-header" style="color:#7c81b8;font-weight:700">Speak United Blog</h3>
                 				
                 				<section class="action-home">
                 					<a href="/get-involved/"><h2>Take Action</h2><span>></span></a>
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
									    
									    <!--
<p class="byline vcard clearfix nomargin small-caps"><?php
										    printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 												'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'bonestheme')), bones_get_the_author_posts_link());
										?><?php the_tags('<span class="tags">' . __(' | Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p>
-->
								
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
                 				
                 			<article class="tweet column-content clearfix">
                 				<section class="latest-tweets">
	                 				<h3 style="font-weight:700">UWMC Tweets</h3>
	                 				<span class="small" style="padding:0 0 .5em 0;margin:0;">Follow <a href="https://twitter.com/unitedwaychi" target="_blank">@unitedwaychi</a></span><br />
	                 				<?php include_once 'latest_tweets.php'; ?>
                 				</section>
                 			
                 			</article>
			
				    </div> <!-- end #main -->
    
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
