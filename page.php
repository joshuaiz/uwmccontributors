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
			
				    <div id="main" class="eightcol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						    <header class="article-header">
						    
						   <?php
							   if(is_page(290)) { ?>

								  <h1 class="page-title" style="color:#10167F;" itemprop="headline"><span class="trade" style="font-weight:normal;">LIVE UNITED</span> Neighborhood Network</h1>

								<?php } else { ?>

									  <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

									 <?php  }
							?>
							
							   
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
-->
		          			<section class="social-sharing">
								<?php simple_social_sharing('unitedwaychi'); ?>
							</section>
							
						    </footer> <?php /*  end article footer */ ?>
						    
						    <?php comments_template(); ?>
					
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
    
				    <?php get_sidebar(); ?>
				    
				</div> <?php /*  end #inner-content */ ?>
    
			</div> <?php /*  end #content */ ?>
			
			
<?php
if ( is_page('14893') || $post->post_parent == '14893' ) :
	get_footer( 'eway' );
else :
	get_footer();
endif;
?>
