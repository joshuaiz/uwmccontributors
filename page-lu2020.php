<?php
/*
*
* Template Name: LU2020 Page
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
				
					<div class="action-wrap twelvecol clearfix"><?php /*  woefully unsemantic but it really just is a wrapper div to clear floats */ ?>
                 		
                 		<div class="nav-mobile">
                 			<a href="#" class="nav-button">+ MENU</a>&nbsp;&nbsp;
                 				<nav role="navigation">
	                 				<?php uwmc_mobile_nav(); ?>
	                 			</nav>
						
	                 			<span class="mobile-link">
                 					<a href="#">LIVE UNITED 2020</a><a href="#">OUR COMMUNITY</a>
                 				</span>
                 		</div><?php /*  mobile flyout nav (hidden above 768px) */ ?>
                 		
                 	</div><?php /*  end #action-wrap */ ?>
				    
				    <div id="main" class="twelvecol clearfix homemain" role="main">
				    
				    	
				    		
				    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						    <header class="article-header">
							
							    <h1 class="page-title trade" itemprop="headline"><?php the_title(); ?></h1>
							    
							    <div class="infographic-wrap">
				    	<img src="<?php echo get_template_directory_uri(); ?>/library/images/lu2020_infographic3.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/lu2020infographic3@2x.png">
							    </div>
							    
                  <?php /*
<p class="byline vcard"><?php
                    printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'bonestheme')), bones_get_the_author_posts_link());
                  ?><?php the_tags('<span class="tags">' . __(' | Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p> hide byline on pages */ ?>


                  		                  			
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
                  <?php /* <?php the_tags('<span class="tags">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?> Tags are in the byline */ ?>
                  
                 <!--
 <p class="post-categories"><?php 
                  $categories = get_the_category();
                  $separator = ' ';
                  $output = '';
                  if($categories){
	                  foreach($categories as $category) {
		                  $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "Categories: %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		                  }
		          echo trim($output, $separator);
		          }
		          ?></p>
-->
		          			
						    </footer> <?php /*  end article footer */ ?>
						    
						 
					
					    </article> <?php /*  end article */ ?>
					   
					   <section class="social-sharing">
								<?php simple_social_sharing('unitedwaychi'); ?>
							</section>
							
					
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

<?php
if ( is_page('14893') || $post->post_parent == '14893' ) :
	get_footer( 'eway' );
else :
	get_footer();
endif;
?>