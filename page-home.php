<?php
/*
*
* Template Name: Home Page
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
				    		
				    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						    <header class="article-header">
							
							    <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>


                  		                  			
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
                  
               
		          			<section class="social-sharing">
								<?php simple_social_sharing('unitedwaychi'); ?>
							</section>
							
						    </footer> <?php /*  end article footer */ ?>
						    
						 
					
					    </article> <?php /*  end article */ ?>
					
					    <?php endwhile; else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    					    	<section class="entry-content">
    					    		<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
    					    	</section>
    					    	<footer class="article-footer">
    					    	    <p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
    					    	</footer>
    					    </article>
					
					    <?php endif; ?>
					    			
				    </div> <?php /*  end #main */ ?>
    
				    
				</div> <?php /*  end #inner-content */ ?>
    
			</div> <?php /*  end #content */ ?>

<?php get_footer(); ?>
