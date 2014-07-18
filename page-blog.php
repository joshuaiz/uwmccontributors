<?php
/**
 * @package WordPress
*	Template Name: Blog Page
 */
?>

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
                 		</div><?php /*  mobile flyout nav (hidden above 768px) */ ?>
			
				    <div id="main" class="eightcol first clearfix" role="main">
				    
				    	<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

					    <?php
						    $temp = $wp_query;
						    $wp_query= null;
						    $wp_query = new WP_Query();
						    $wp_query->query('posts_per_page=5'.'&paged='.$paged);
						    while ($wp_query->have_posts()) : $wp_query->the_post();
						?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
							    <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  <p class="byline vcard small-caps"><?php _e("Posted:", "bonestheme"); ?> <time class="updated datetime" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php the_tags('<span class="tags">' . __(' | Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p>
						
						    </header> <!-- end article header -->
					
						    <section class="entry-content clearfix">
							    <?php the_excerpt(); ?>
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">
    							<!-- <p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p> -->

						    </footer> <!-- end article footer -->
						    
						    <?php // comments_template(); // uncomment if you want to use them ?>
					
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
					
					    <?php $wp_query = null; $wp_query = $temp;?>
			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
