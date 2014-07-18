<?php
/*
*
* Template Name: Pods Page
*
* @package UW_Chilipepper
* 
*
* Last revised: February 25, 2013
*
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
				
					
				    		
				    		<div class="nav-mobile">
                 			<a href="#" class="nav-button">Toggle Navigation</a>
                 				<nav role="navigation">
	                 				<?php uwmc_mobile_nav(); ?>
	                 			</nav>
						
	                 			<span class="mobile-link">
                 					<a href="#">CAMPAIGN TOOLKIT HOME</a>
                 					<a href="http://campaign.uw-mc.org/contact/">CONTACT</a>
                 				</span>
                 			</div><?php /*  mobile flyout nav (hidden above 768px) */ ?>					    
				    <div id="main" class="twelvecol clearfix homemain" role="main">
				    		
				    		
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						    <header class="article-header">
							
							    <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
                 


                  		                  			
						    </header> <?php /*  end article header */ ?>
					
						    <section class="entry-content clearfix" itemprop="articleBody">
							    <?php pods_content(); ?>
							</section> <?php /*  end article section */ ?>
							
							
						
						    <footer class="article-footer">
                
		          			<section class="social-sharing">
								<?php simple_social_sharing('unitedwaychi'); ?>
							</section>
							
						    </footer> <?php /*  end article footer */ ?>
						    
						 
					
					    </article> <?php /*  end article */ ?>
					
					    
					    			
				    </div> <?php /*  end #main */ ?>
    
				    
				</div> <?php /*  end #inner-content */ ?>
    
			</div> <?php /*  end #content */ ?>


<?php get_footer(); ?>
