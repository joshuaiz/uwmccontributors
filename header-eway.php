<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  		
  		<!-- stylesheets (no need to call the main stylesheet - that's done automatically!) -->
	  	
	  	<!-- end stylesheets -->
	  	
	  	<!-- place any scripts needed in head here -->
	  	<script>
		
		</script>
	  	<!-- end head scripts -->
	  	
	  	<!-- TypeKit scripts (for ff-meta-web-pro) -->
	  	<script type="text/javascript" src="http://use.typekit.com/nas6buh.js"></script>
	  	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	  	<!-- end scripts -->
	  	
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
			
		<!-- drop Google Analytics Here -->
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-18468745-2']);
		  _gaq.push(['_setDomainName', 'none']);
		  _gaq.push(['_setAllowLinker', true]);
		  _gaq.push(['_setAllowHash', false]);
		  _gaq.push(['_addIgnoredRef', 'www.uw-mc.org']);
		  _gaq.push(['_addIgnoredRef', 'jobs.uw-mc.org']);
		  _gaq.push(['_addIgnoredRef', 'campaign.uw-mc.org']);
		  _gaq.push(['_addIgnoredRef', 'agencies.uw-mc.org']);
		  _gaq.push(['_addIgnoredRef', 'pressroom.uw-mc.org']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
		<!-- end analytics -->
		
	</head>
	
	<body <?php body_class($classes); ?>><!-- custom body class functions in the uwmc-helper.php plugin file -->
	
		<div class="beforecontainer"><!-- start beforecontainer: includes UWMC network nav and email signup -->
		
		 	<div class="beforecontainerwrap wrap">
		 	
				<!--
<div class="network-nav" role="navigation">
					
					<p><a href="http://www.uw-mc.org/">Home</a> | <a href="http://agencies.uw-mc.org/">Agency Resources</a> | <a href="http://campaign.uw-							mc.org">Campaign Toolkit</a> | <a href="http://pressroom.uw-mc.org">Media Center</a> | <a href="http://jobs.uw-mc.org/">Careers</a></p>
        
				</div>
-->
       	 	
       	 	
       	 	<!-- BEGIN: Constant Contact Basic Opt-in Email List Form -->
	       	 	<div class="email-signup">
	       	 			
	       	 		<form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" style="margin-bottom:2;">
	       	 		
	       	 		
	       	 			<input type="hidden" name="llr" value="mkhe8qcab">
	       	 			<input type="hidden" name="m" value="1102224432460">
	       	 			<input type="hidden" name="p" value="oi">
	       	 			
	       	 			<input id="constant-contact-email" type="text" name="ea" size="35" placeholder="Enter Your Email &amp; Join Our Mailing List" style="font-size:12px; padding-left: 5px;color: #969696;height:22px;"><!-- Constant Contact email capture -->
	       	 			
	       	 			<input id="constant-contact-submit" type="submit" name="join" value="Join" class="submit flatbutton" style="font-family:'ff-meta-web-pro','Meta',Trebuchet MS, Trebuchet, Helvetica, Arial, sans-serif; font-size:10px;"><!-- Constant Contact submit -->
	       	 			
	       	 				<script>//Focus/Unfocus default email input text
	       	 				jQuery('input#constant-contact-email').focus(function() {
	       	 				    if (!$(this).data('Enter Your Email &amp; Join Our Mailing List')) {
	       	 				        $(this).data('Enter Your Email &amp; Join Our Mailing List', $(this).val());
	       	 				    }
	       	 				    if ($(this).val() == $(this).data('Enter Your Email &amp; Join Our Mailing List')) {
	       	 				        $(this).val('');
	       	 				    }
	       	 				}).blur(function(){
	       	 				    if ($(this).val() == '') {
	       	 				        $(this).val($(this).data('Enter Your Email &amp; Join Our Mailing List'));
	       	 				    }
	       	 				});
	       	 				</script>
	       	 		</form>
	       	 	</div>
       	 	<!-- END: Constant Contact Basic Opt-in Email List Form -->

       	 	</div><!-- end #beforecontainerwrap -->
       	 	
       	 </div><!-- end #beforecontainer -->
	
       	 <div id="container">
			
			<header class="header" role="banner">
			
				<div id="inner-header" class="wrap clearfix">
					
					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<div id="logo-mobile"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-mobile2.png"></div><!-- Hidden for 768px widths and above -->
					
					<div id="logo"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png"><span>United Way of<br>Metropolitan Chicago</span></div><!-- site logo for tablets and above -->
					
					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>
					
					
					<nav role="navigation">
						<?php eway_nav(); ?>
						<!-- <div class="donate-button"><a href="https://donate.uw-mc.org/page/contribute/Give"><button class="flatbutton flatbutton-orange">DONATE</button></a></div> -->
					</nav>
				
				</div> <!-- end #inner-header -->
			
			</header> <!-- end header -->