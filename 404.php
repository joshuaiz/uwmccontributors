<?php get_header(); ?>
			
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

						<article id="post-not-found" class="hentry clearfix">
						
							<header class="article-header">
							
								<h2 class="page-title alert-help"><span class="icon-warning"></span><?php _e("Article Not Found", "bonestheme"); ?></h1>
						
							</header> <!-- end article header -->
					
							<section class="entry-content">
							
								<p><?php _e("The article you were looking for was not found. Try searching again with different keywords.", "bonestheme"); ?></p>
					
							</section> <!-- end article section -->

							<section class="search-404">
				
							    <p><?php get_search_form(); ?></p>
				
							</section> <!-- end search section -->
													
							<footer class="article-footer">
							
							</footer> <!-- end article footer -->
					
						</article> <!-- end article -->
						
					</div> <!-- end #main -->
					
					<?php get_sidebar(); ?>
					
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
