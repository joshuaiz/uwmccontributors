<?php
/**
 * @UWMC Chilipepper Theme
 * Template Name: Community Map
 * 
 * Custom Page for the United Way Chicago Community Map
 * Tags: map, highlight, tooltips, responsive
 *
 * http://uw-mc.org/community/
 * Developed by Joshua Michaels
 * joshuaiz@me.com
 * Help with custom event handler code by Nicholas Maddix
 * n@nickmatic.com
 *
 * This version: 2.0
 * Last modified: April 8, 2013
 * 
 * Using: 
 * ImageMapster jquery plugin: http://www.outsharked.com/imagemapster/
 * qTip2: http://craigsworks.com/projects/qtip2/
 * Our custom jquery: /library/js/uwmc.map.js 
 *
 * Important classes: 
 * 'mapqtip': main class for the map Impact Areas
 * 'maptip': class for list text Impact Areas
 * 'maptip2': class for basic list areas
 * 'tooltip-basic qbasic': area class(es) for basic areas
 *
 **/

get_header(); ?>

<!-- begin WordPress main content -->
<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
								    		
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
			
				    <div id="main" class="twelvecol clearfix" role="main">

					    <h1 class="trade map-title">COMMUNITIES WE SERVE <span class="trade18">UNITED WAY OF METROPOLITAN CHICAGO</span><!-- <button id="partners" class="groupselect btn-primary">Partner Communities</button> --></h1>
					    <div class="area-toggle"><a data-key="partners" class="groupselect flatbutton" href="#">Toggle Partner Communities</a></div>
   
			<div id="mapresize" class="map-container clearfix"><!-- the image map -->
				<div class="map-overlay area-ns">North<br>Shore</div>
				<div class="map-overlay area-nw">Northwest</div>
				<div class="map-overlay area-chicago">Chicago</div>
				<div class="map-overlay area-dwc">DuPage/West Cook</div>
				<div class="map-overlay area-ssw">South-Southwest</div>
				<img class="communitymap" src="<?php echo get_template_directory_uri(); ?>/library/images/map_web_scrub_2013-04-09.png" data-at2x="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/map_web_scrub_2013-04-09@2x.png" alt="" title="UWMC Community Map" usemap="#community_map" class="alignnone size-full wp-image-18501" />
<p style="font-size:10px"><strong>Sources</strong>: United States Census 2010 and American Community Survey (ACS) 2006-2010 5 year estimates</p>
			</div>
			
			<div class="area-container"><!-- container for the area lists -->
				<!-- North Shore -->
				<div class="column-wrap clearfix northshore">
				
					<h4 class="commh4"><a data-key="north-shore" class="groupselect" href="#">North Shore</a></h4>
				
					<div class="col1 clearfix">
						<a class="maptip2" data-key="Bannockburn">Bannockburn</a><br />
						<a class="maptip2" data-key="Deerfield">Deerfield</a><br />
						<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/evanston.html" data-key="Evanston" href="#">Evanston</a><br />
						<a class="maptip2" data-key="FortSheridan">Fort Sheridan</a><br />
						<a class="maptip2" data-key="Glencoe">Glencoe</a><br />
					</div>
					
					<div class="col2 clearfix">
						<a class="maptip2" data-key="Glenview">Glenview</a><br />
						<a class="maptip2" data-key="Golf">Golf</a><br />
						<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/highlandpark.html" data-key="HighlandPark,hph">Highland Park <br>&nbsp;&amp;&nbsp;<span class="noindent">Highwood</span></a><br />
						<a class="maptip2" data-key="Kenilworth">Kenilworth</a><br />
					</div>
					
					<div class="col3 clearfix">
						<a class="maptip2" data-key="Knollwood">Knollwood</a><br />
						<a class="maptip2" data-key="LakeBluff">Lake Bluff</a><br />
						<a class="maptip2" data-key="LakeForest">Lake Forest</a><br />
						<a class="maptip2" data-key="Northbrook">Northbrook</a><br />
						<a class="maptip2" data-key="Northfield">Northfield</a><br />
					</div>
					
					<div class="col4 clearfix">
						<a class="maptip2" data-key="Riverwoods">Riverwoods</a><br />
						<a class="maptip2" data-key="Wilmette">Wilmette</a><br />
						<a class="maptip2" data-key="Winnetka">Winnetka</a><br />
			  		</div>
			  		
				</div>
			  
			  <div class="column-wrap clearfix northwest">
			  	<!--Northwest -->
			  	<h4 class="commh4"><a data-key="northwest" class="groupselect" href="#">Northwest</a></h4>
			  	
			  	<div class="col1 clearfix">
			  	
			  		<a class="maptip2" data-key="ArlingtonHeights">Arlington Heights</a><br />
					<a class="maptip2" data-key="Bartlett">Bartlett</a><br />
					<a class="maptip2" data-key="BuffaloGrove">Buffalo Grove</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/carpentersville.html" data-key="Carpentersville">Carpentersville</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/desplaines.html" data-key="DesPlaines,dprc">Des Plaines</a><br />
					<a class="maptip2" data-key="Dundee">Dundee</a><br />
					<a class="maptip2" data-key="ElkGroveVillage">Elk Grove Village</a><br />
					<a class="maptip2" data-key="Gilberts">Gilberts</a><br />
				</div>
			  	
			  	<div class="col2 clearfix">
			  	
					<a class="maptip2" data-key="HalfDay">Half Day</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/hanoverpark.html" data-key="HanoverPark,hps">Hanover Park</a><br />
			  		<a class="maptip2" data-key="HoffmanEstates">Hoffman Estates</a><br />
					<a class="maptip2" data-key="Inverness">Inverness</a><br />
					<a class="maptip2" data-key="Lincolnshire">Lincolnshire</a><br />
					<a class="maptip2" data-key="Lincolnwood">Lincolnwood</a><br />	
					<a class="maptip2" data-key="MortonGrove">Morton Grove</a><br />
			  		<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/mountprospect.html" data-key="MountProspect,dprc">Mount Prospect</a><br />
			  	</div>
			  	
			  	<div class="col3 clearfix">	
			  		<a class="maptip2" data-key="Niles">Niles</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/palatine.html" data-key="Palatine,prm">Palatine</a><br />
					<a class="maptip2" data-key="ParkRidge">Park Ridge</a><br />
					<a class="maptip2" data-key="PrairieView">Prairie View</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/prospectheights.html" data-key="ProspectHeights,dprc">Prospect Heights</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/palatine.html" data-key="RollingMeadows,prm">Rolling Meadows</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/rosemont.html" data-key="Rosemont,dprc">Rosemont</a><br />
			
					<a class="maptip2" data-key="Schaumburg">Schaumburg</a><br />
				</div>
			  	
			  	<div class="col4 clearfix">
			  	
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/skokie.html" data-key="Skokie" href="#">Skokie</a><br />
					<a class="maptip2" data-key="SleepyHollow">Sleepy Hollow</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/hanoverpark.html" data-key="Streamwood,hps">Streamwood</a><br />
					<a class="maptip2" data-key="WestDundee">West Dundee</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/wheeling.html" data-key="Wheeling,dprc" >Wheeling</a>
				</div>
			</div>
			  	
			  	<div class="column-wrap clearfix dupage">
			  	<!-- DuPage/West Cook -->
			  		<h4 class="commh4"><a data-key="dwc" class="groupselect" href="#">DuPage/West Cook</a></h4>
			  		
			  		<div class="col1 clearfix">
			  		
			  			<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/addison.html" data-key="Addison">Addison</a><br />
			  			<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/bellwood.html" data-key="Bellwood">Bellwood</a><br />
			  			<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/bensenville.html" data-key="Bensenville">Bensenville</a><br />
			  			<a class="maptip2" data-key="Berkeley">Berkeley</a><br />
			  			<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/berwyn.html" data-key="Berwyn">Berwyn</a><br />
			  			<a class="maptip2" data-key="Bloomingdale">Bloomingdale</a><br />
			  			<a class="maptip2" data-key="Broadview">Broadview</a><br />
			  			<a class="maptip2" data-key="Brookfield">Brookfield</a><br />
			  			<a class="maptip2" data-key="BurrRidge">Burr Ridge</a><br />
						<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/carolstream.html" data-key="CarolStream">Carol Stream</a><br />
						<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/cicero.html" data-key="Cicero">Cicero</a><br />
						<a class="maptip2" data-key="ClarendonHills">Clarendon Hills</a><br />
						<a class="maptip2" data-key="Countryside">Countryside</a><br />
						<a class="maptip2" data-key="Darien">Darien</a><br />
						<a class="maptip2" data-key="DownersGrove">Downers Grove</a><br />
						<a class="maptip2" data-key="Elmhurst">Elmhurst</a><br />
					</div>
			  		
			  		<div class="col2 clearfix">
						<a class="maptip2" data-key="ElmwoodPark">Elmwood Park</a><br />
						<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/forestpark.html" data-key="ForestPark">Forest Park</a><br />
						<a class="maptip2" data-key="ForestView">Forest View</a><br />
						<a class="maptip2" data-key="FranklinPark">Franklin Park</a><br />
						<a class="maptip2" data-key="GlenEllyn">Glen Ellyn</a><br />
						<a class="maptip2" data-key="GlendaleHeights">Glendale Heights</a><br />
						<a class="maptip2" data-key="HarwoodHeights">Harwood Heights</a><br />
						<a class="maptip2" data-key="Hillside">Hillside</a><br />
						<a class="maptip2" data-key="Hinsdale">Hinsdale</a><br />
						<a class="maptip2" data-key="Hodgkins">Hodgkins</a><br />
						<a class="maptip2" data-key="Itasca">Itasca</a><br />
						<a class="maptip2" data-key="Keeneyville">Keeneyville</a><br />
						<a class="maptip2" data-key="LaGrange">La Grange</a><br />
						<a class="maptip2" data-key="LaGrangeHighlands">La Grange Highlands</a><br />
						<a class="maptip2" data-key="LaGrangePark">La Grange Park</a><br />
					</div>
			  		
			  		<div class="col3 clearfix">
						<a class="maptip2" data-key="Lisle">Lisle</a><br />
					
			  			<a class="maptip2" data-key="Lombard">Lombard</a><br />
			  			<a class="maptip2" data-key="Lyons">Lyons</a><br />
						<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/maywood.html" data-key="Maywood">Maywood</a><br />
						<a class="maptip2" data-key="McCook">McCook</a><br />
						<!-- <a class="maptip2" data-key="Medinah">Medinah</a><br /> -->
						<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/melrosepark.html" data-key="MelrosePark">Melrose Park</a><br />
						<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/naperville.html" data-key="Naperville">Naperville</a><br />
						<a class="maptip2" data-key="Norridge">Norridge</a><br />
						<a class="maptip2" data-key="Northlake">Northlake</a><br />
						<a class="maptip2" data-key="NorthRiverside">North Riverside</a><br />
						<a class="maptip2" data-key="OakBrook">Oak Brook</a><br />
						<a class="maptip2" data-key="OakbrookTerrace">Oakbrook Terrace</a><br />
						<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/oakpark.html" data-key="OakPark">Oak Park</a><br />
						<a class="maptip2" data-key="RiverForest">River Forest</a><br />
						<a class="maptip2" data-key="RiverGrove">River Grove</a><br />
						<a class="maptip2" data-key="Roselle">Roselle</a><br />
					</div>
			  		
			  		<div class="col4 clearfix">
						<a class="maptip2" data-key="SchillerPark">Schiller Park</a><br />
					
						<a class="maptip2" data-key="Stickney">Stickney</a><br />
						<a class="maptip2" data-key="StonePark">Stone Park</a><br />
					
						<a class="maptip2" data-key="VillaPark">Villa Park</a><br />
						<a class="maptip2" data-key="Warrenville">Warrenville</a><br />
						<a class="maptip2" data-key="Westchester">Westchester</a><br />
						<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/westchicago.html" data-key="WestChicago">West Chicago</a><br />
						<a class="maptip2" data-key="WesternSprings">Western Springs</a><br />
						<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/westmont.html" data-key="Westmont">Westmont</a><br />
						<a class="maptip2" data-key="Wheaton">Wheaton</a><br />
						<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/willowbrook.html" data-key="Willowbrook">Willowbrook</a><br />
						<a class="maptip2" data-key="WillowSprings">Willow Springs</a><br />
						<a class="maptip2" data-key="Winfield">Winfield</a><br />
						<a class="maptip2" data-key="WoodDale">Wood Dale</a><br />
						<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/woodridge.html" data-key="Woodridge">Woodridge</a>
					</div>
			  	</div>
			
			<div class="column-wrap clearfix coc">  	
			  	<!-- City Of Chicago -->	
				<h4 class="commh4"><a data-key="coc" class="groupselect" href="#">City of Chicago</a></h4>
				
				<div class="col1 clearfix">
					<a class="maptip2" data-key="AlbanyPark">Albany Park</a><br />
					<a class="maptip2" data-key="ArcherHeights">Archer Heights</a><br />
					<a class="maptip2" data-key="ArmourSquare">Armour Square</a><br />
					<a class="maptip2" data-key="Ashburn">Ashburn</a><br />
					<a class="maptip2" data-key="AuburnGresham">Auburn Gresham</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/austin.html" data-key="Austin">Austin</a><br />
					<a class="maptip2" data-key="AvalonPark">Avalon Park</a><br />
					<a class="maptip2" data-key="Avondale">Avondale</a><br />
					<a class="maptip2" data-key="BelmontCragin">Belmont Cragin</a><br />
					<a class="maptip2" data-key="Beverly">Beverly</a><br />
					<a class="maptip2" data-key="Bridgeport">Bridgeport</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/brightonpark.html" data-key="BrightonPark">Brighton Park</a><br />
					<a class="maptip2" data-key="Burnside">Burnside</a><br />
					<a class="maptip2" data-key="CalumetHeights">Calumet Heights</a><br />
					<a class="maptip2" data-key="Chatham">Chatham</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/chicagolawn.html" data-key="ChicagoLawn">Chicago Lawn</a><br />
					<a class="maptip2" data-key="Clearing">Clearing</a><br />
					<a class="maptip2" data-key="Douglas">Douglas</a><br />
					<a class="maptip2" data-key="Dunning">Dunning</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/eastgarfieldpark.html" data-key="EastGarfieldPark">E. Garfield Park</a><br />
				</div>
					
				<div class="col2 clearfix">
				
					<a class="maptip2" data-key="EastSide">East Side</a><br />
				
					<a class="maptip2" data-key="Edgewater">Edgewater</a><br />
					<a class="maptip2" data-key="EdisonPark">Edison Park</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/englewood.html" data-key="Englewood">Englewood</a><br />
					<a class="maptip2" data-key="ForestGlen">Forest Glen</a><br />
					<a class="maptip2" data-key="FullerPark">Fuller Park</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/gagepark.html" data-key="GagePark">Gage Park</a><br />
					<a class="maptip2" data-key="GarfieldRidge">Garfield Ridge</a><br />
					<a class="maptip2" data-key="GrandBlvd">Grand Boulevard</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/greatergrandcrossing.html" data-key="GreaterGrandCrossing">Greater Grand<br>&nbsp;Crossing</a><br />
					<a class="maptip2" data-key="Hegewisch">Hegewisch</a><br />
					<a class="maptip2" data-key="Hermosa">Hermosa</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/humboldtpark.html" data-key="HumboldtPark">Humboldt Park</a><br />
					<a class="maptip2" data-key="HydePark">Hyde Park</a><br />
					<a class="maptip2" data-key="IrvingPark">Irving Park</a><br />
					<a class="maptip2" data-key="JeffersonPark">Jefferson Park</a><br />
					<a class="maptip2" data-key="Kenwood">Kenwood</a><br />
					<a class="maptip2" data-key="Lakeview">Lakeview</a><br />
					<a class="maptip2" data-key="LincolnPark">Lincoln Park</a><br />
				</div>
					
				<div class="col3 clearfix">
					<a class="maptip2" data-key="LincolnSquare">Lincoln Square</a><br />
					<a class="maptip2" data-key="LoganSquare">Logan Square</a><br />
					<a class="maptip2" data-key="Loop">Loop</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/lowerwestside.html" data-key="LowerWestSide">Lower West Side</a><br />
					<a class="maptip2" data-key="McKinleyPark">McKinley Park</a><br />
					<a class="maptip2" data-key="Montclare">Montclare</a><br />
					<a class="maptip2" data-key="MorganPark">Morgan Park</a><br />
					<a class="maptip2" data-key="MountGreenwood">Mount Greenwood</a><br />
					<a class="maptip2" data-key="NearNorthSide">Near North Side</a><br />
					<a class="maptip2" data-key="NearSouthSide">Near South Side</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/nearwestside.html" data-key="NearWestSide">Near West Side</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/newcity.html" data-key="NewCity">New City</a><br />
					<a class="maptip2" data-key="NorthCenter">North Center</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/northlawndale.html" data-key="NorthLawndale">North Lawndale</a><br />
					<a class="maptip2" data-key="NorthPark">North Park</a><br />
					<a class="maptip2" data-key="NorwoodPark">Norwood Park</a><br />
					<a class="maptip2" data-key="Oakland">Oakland</a><br />
					<a class="maptip2" data-key="OHare">O'Hare</a><br />
					<a class="maptip2" data-key="PortagePark">Portage Park</a><br />
					<a class="maptip2" data-key="Pullman">Pullman</a><br />
				</div>
					
				<div class="col4 clearfix">
					<a class="maptip2" data-key="Riverdale2">Riverdale</a><br />
					<a class="maptip2" data-key="RogersPark">Rogers Park</a><br />
					<a class="maptip2" data-key="Roseland">Roseland</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/southchicago.html" data-key="SouthChicago">South Chicago</a><br />
					<a class="maptip2" data-key="SouthDeering">South Deering</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/southlawndale.html" data-key="SouthLawndale">South Lawndale</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/southshore.html" data-key="SouthShore">South Shore</a><br />
					<a class="maptip2" data-key="Uptown">Uptown</a><br />
					<a class="maptip2" data-key="WashingtonHeights">Washington Heights</a><br />
					<a class="maptip2" data-key="WashingtonPark">Washington Park</a><br />
					<a class="maptip2" data-key="WestElsdon">West Elsdon</a><br />
					<!-- <a class="maptipbelowleft" rel="http://static.uw-mc.org/communitymap/areas/westenglewood.html" data-key="WestEnglewood">West Englewood</a><br /> -->
					<a class="maptip2" data-key="WestGarfieldPark">West Garfield Park</a><br />
					<a class="maptip2" data-key="WestLawn">West Lawn</a><br />
					<a class="maptip2" data-key="WestPullman">West Pullman</a><br />
					<a class="maptip2" data-key="WestRidge">West Ridge</a><br />
					<a class="maptip2" data-key="WestTown">West Town</a><br />
					<a class="maptip2" data-key="Woodlawn">Woodlawn</a> <br />
				</div>
				
			</div>
			
			<div class="column-wrap clearfix ssw">
			
				<h4 class="commh4"><a data-key="ssw" class="groupselect" href="#">South-Southwest</a></h4>
				
				<div class="col1 clearfix">
					<a class="maptip2" data-key="Alsip">Alsip</a><br />
					<a class="maptip2" data-key="SummitArgo">Argo/Summit</a><br />
					<a class="maptip2" data-key="BedfordPark">Bedford Park</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/blueisland.html" data-key="BlueIsland">Blue Island</a><br />
					<a class="maptip2" data-key="Bridgeview">Bridgeview</a><br />
					<a class="maptip2" data-key="Burbank">Burbank</a><br />
					<a class="maptip2" data-key="Burnham">Burnham</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/calumetcity.html" data-key="CalumetCity">Calumet City</a><br />
					<a class="maptip2" data-key="CalumetPark">Calumet Park</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/chicagoheights.html" data-key="ChicagoHeights">Chicago Heights</a><br />
					<a class="maptip2" data-key="ChicagoRidge">Chicago Ridge</a><br />
					<a class="maptip2" data-key="CountryClubHills">Country Club Hills</a><br />
					<a class="maptip2" data-key="Crestwood">Crestwood</a><br />
					<a class="maptip2" data-key="Crete">Crete</a><br />
				</div>
			
				<div class="col2 clearfix">
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/dixmoor.html" data-key="Dixmoor">Dixmoor</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/dolton.html" data-key="Dolton">Dolton</a><br />
					<a class="maptip2" data-key="EastHazelCrest">East Hazel Crest</a><br />
					<a class="maptip2" data-key="EvergreenPark">Evergreen Park</a><br />
					<a class="maptip2" data-key="Flossmoor">Flossmoor</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/fordheights.html" data-key="FordHeights">Ford Heights</a><br />
					<a class="maptip2" data-key="Glenwood">Glenwood</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/harvey.html" data-key="Harvey">Harvey</a><br />
					<a class="maptip2" data-key="HazelCrest">Hazel Crest</a><br />
					<a class="maptip2" data-key="HickoryHills">Hickory Hills</a><br />
					<a class="maptip2" data-key="Hometown">Hometown</a><br />
					<a class="maptip2" data-key="Homewood">Homewood</a><br />
					<a class="maptip2" data-key="Justice">Justice</a><br />
					<a class="maptip2" data-key="Lansing">Lansing</a><br />
				</div>
					
				<div class="col3 clearfix">
					<a class="maptip2" data-key="Lynwood">Lynwood</a><br />
					<a class="maptip2" data-key="Markham">Markham</a><br />
					<a class="maptip2" data-key="Matteson">Matteson</a><br />
					<a class="maptip2" data-key="Midlothian">Midlothian</a><br />
					<a class="maptip2" data-key="OakForest">Oak Forest</a><br />
					<a class="maptip2" data-key="OakLawn">Oak Lawn</a><br />
					<a class="maptip2" data-key="OlympiaFields">Olympia Fields</a><br />
					<a class="maptip2" data-key="OrlandHills">Orland Hills</a><br />
					<a class="maptip2" data-key="OrlandPark">Orland Park</a><br />
					<a class="maptip2" data-key="PalosHeights">Palos Heights</a><br />
					<a class="maptip2" data-key="PalosHills">Palos Hills</a><br />
					<a class="maptip2" data-key="PalosPark">Palos Park</a><br />
					<a class="maptip2" data-key="ParkForest">Park Forest</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/posen.html" data-key="Posen">Posen</a><br />
				</div>
				
				<div class="col4 clearfix">
					<a class="maptip2" data-key="RichtonPark">Richton Park</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/riverdale.html" data-key="Riverdale">Riverdale</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/robbins.html" data-key="Robbins">Robbins</a><br />
					<a class="maptip" rel="http://static.uw-mc.org/communitymap/areas/saukvillage.html" data-key="SaukVillage">Sauk Village</a><br />
					<a class="maptip2" data-key="SouthChicagoHeights">South Chicago<br />&nbsp;Heights</a><br />
					<a class="maptip2" data-key="SouthHolland">South Holland</a><br />
					<a class="maptip2" data-key="Steger">Steger</a><br />
					<a class="maptip2" data-key="Thornton">Thornton</a><br />
					<a class="maptip2" data-key="TinleyPark">Tinley Park</a><br />
					<a class="maptip2" data-key="UniversityPark">University Park</a><br />
					<a class="maptip2" data-key="Worth">Worth</a><br />
				</div>
			
			</div>
		</div><!-- end area-container -->
		
			<!-- // This was an old image used when the list items above went below the map. Probably can erase this for good.
<div class="area-info clearfix">
				<img src="http://uw-mc.org/images/area-info.png">			
			</div>
-->
		
		<div id="themap">
			<map name="community_map" id="uwmc_map">
<!-- North Shore -->
<!-- Impact Areas -->
<area data-key="Highwood,hph,north-shore,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/highlandpark.html" shape="poly" coords="447,111,436,111,436,94,447,94,447,111" href="#">
<area data-key="HighlandPark,hph,north-shore,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/highlandpark.html" shape="poly" coords="446,89,449,96,482,155,435,155,435,133,424,133,424,127,415,127,415,103,417,89,446,89" href="#">
<area data-key="Evanston,north-shore,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/evanston.html" shape="poly" coords="515,287,515,254,507,254,507,244,503,244,503,238,535,238,546,255,546,271,550,284,542,284,542,287,515,287" href="#">
<area data-key="Skokie,north-shore" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/skokie.html" shape="poly" coords="503,241,500,241,478,241,478,273,480,273,480,284,476,284,476,281,465,281,468,289,476,290,476,299,480,299,480,302,489,302,489,292,508,292,508,295,515,295,515,254,507,254,507,244,503,244,503,241" href="#">
<!-- End Impact Areas -->
<area data-key="Bannockburn,north-shore" alt="Bannockburn" class="tooltip-basic qbasic" shape="poly" coords="395,127,389,116,383,104,415,103,415,119,408,119,408,127,395,127" href="#">
<area data-key="LakeBluff,north-shore" alt="Lake Bluff" class="tooltip-basic qbasic" shape="poly" coords="399,38,429,38,424,3,413,3,413,14,413,17,394,17,394,14,385,14,385,20,397,20,397,29,392,29,399,38" href="#">
<area data-key="LakeForest,north-shore" alt="Lake Forest" class="tooltip-basic qbasic" shape="poly" coords="417,38,417,60,436,60,443,79,439,79,427,77,427,89,417,89,415,103,383,104,374,76,374,52,387,52,387,27,391,28,399,38,417,38" href="#">
<area data-key="Glencoe,north-shore" alt="Glencoe" class="tooltip-basic qbasic" shape="poly" coords="495,177,482,155,462,155,462,187,467,191,471,187,495,187,495,177" href="#">
<area data-key="Winnetka,north-shore" alt="Winnetka" class="tooltip-basic qbasic" shape="poly" coords="518,212,495,177,495,187,471,187,467,191,474,199,483,199,483,212,518,212" href="#">
<area data-key="Kenilworth,north-shore" alt="Kenilworth" class="tooltip-basic qbasic"  shape="poly" coords="497,211,518,211,525,222,498,222,497,211" href="#">
<area data-key="Wilmette,north-shore" alt="Wilmette" class="tooltip-basic qbasic" shape="poly" coords="506,222,525,222,535,238,503,238,503,241,483,241,483,240,483,235,478,235,478,228,468,228,468,221,494,221,494,222,496,222,506,222" href="#">
<area data-key="Lincolnwood,north-shore" alt="Lincolnwood" class="tooltip-basic qbasic" shape="poly" coords="516,295,508,295,508,292,489,292,489,302,480,302,480,308,483,308,483,311,515,311,516,295" href="#">
<area data-key="Northbrook,north-shore" alt="Northbrook" class="tooltip-basic qbasic" shape="poly" coords="462,162,421,162,421,158,395,158,386,168,386,185,396,196,396,202,418,202,418,206,452,206,452,195,460,195,460,189,462,187,462,162" href="#">
<area data-key="Golf,north-shore" alt="Golf" class="tooltip-basic qbasic" shape="poly" coords="478,253,455,253,455,244,478,244,478,253" href="#">
<area data-key="Northfield,north-shore" alt="Northfield" class="tooltip-basic qbasic" shape="poly" coords="468,221,468,213,452,213,452,195,460,195,460,189,462,187,474,199,483,199,483,212,497,212,498,222,494,222,494,221,468,221" href="#">
<area data-key="Glenview,north-shore" alt="Glenview" class="tooltip-basic qbasic" shape="poly" coords="396,202,396,214,384,214,384,228,374,228,374,244,390,244,390,252,406,252,406,267,421,267,421,249,455,249,455,244,478,244,478,241,483,241,483,235,478,235,478,228,468,228,468,213,452,213,452,206,419,206,419,202,396,202" href="#" >
<area data-key="Riverwoods,north-shore" alt="Riverwoods" class="tooltip-basic qbasic" shape="poly" coords="389,116,370,116,370,123,357,123,357,142,343,142,343,147,351,147,351,154,367,154,375,168,386,168,395,158,395,127,389,116" href="#">
<area data-key="Knollwood,north-shore" alt="Knollwood" class="tooltip-basic qbasic" shape="poly" coords="417,38,417,60,436,60,429,38,417,38" href="#">
<area data-key="FortSheridan,north-shore" alt="Fort Sheridan" class="tooltip-basic qbasic" shape="poly" coords="427,77,427,89,446,90,443,79,439,79,427,77" href="#">
<area data-key="Deerfield,north-shore" alt="Deerfield" class="tooltip-basic qbasic" shape="poly" coords="415,119,408,119,408,127,395,127,395,158,421,158,421,162,463,162,463,155,435,155,435,133,424,133,424,127,415,127,415,119" href="#">
<!-- End North Shore -->

<!-- Northwest -->
<!-- Impact Areas -->
<area data-key="Wheeling,dprc,northwest,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/wheeling.html" shape="poly" coords="350,154,331,154,331,168,339,168,339,184,349,184,349,195,366,212,371,212,371,193,382,193,382,185,386,185,386,168,375,168,367,154,350,154" href="#">
<area data-key="ProspectHeights,dprc,northwest,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/prospectheights.html" shape="poly" coords="385,185,397,196,397,214,383,214,383,207,376,207,365,221,348,221,348,214,327,214,327,205,337,205,337,199,341,199,341,191,331,191,331,175,339,175,339,184,348,184,348,195,365,211,371,211,371,193,381,193,380,185" href="#">
<area data-key="MountProspect,dprc,northwest,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/mountprospect.html" shape="poly" coords="339,213,339,236,328,236,328,246,320,246,320,274,332,284,346,284,346,261,360,261,360,242,371,242,371,228,384,228,384,208,377,208,366,221,363,221,349,221,349,214,339,213" href="#">
<area data-key="DesPlaines,dprc,northwest,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/desplaines.html" shape="poly" coords="374,228,371,228,371,242,360,242,360,261,346,261,346,299,354,299,354,307,360,307,362,308,365,308,365,303,368,303,368,299,370,299,370,303,373,303,373,299,379,299,379,313,403,313,403,302,395,302,395,279,398,279,398,267,406,268,406,252,390,252,390,244,374,244,374,228" href="#">
<area data-key="Rosemont,dprc,northwest,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/rosemont.html" shape="poly" coords="403,313,394,313,394,324,398,324,398,331,394,331,394,335,409,335,409,318,403,318,403,313" href="#">
<area data-key="RollingMeadows,prm,northwest,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/palatine.html" shape="poly" coords="288,214,288,207,281,204,276,207,276,214,261,225,261,222,253,222,253,230,269,232,278,244,280,257,298,257,305,263,308,259,296,250,296,219,285,219,285,214,288,214" href="#">
<area data-key="Palatine,prm,northwest,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/palatine.html" shape="poly" coords="298,154,272,154,272,168,257,168,257,173,246,173,246,177,231,177,251,187,251,197,244,197,244,242,253,242,253,222,261,222,261,225,276,214,276,207,281,204,288,208,288,214,298,214,298,154" href="#">
<area data-key="Carpentersville,northwest,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/carpentersville.html" shape="poly" coords="120,208,119,196,116,196,116,181,119,181,119,174,116,174,113,171,108,171,108,162,101,162,101,171,95,171,95,178,83,178,83,185,59,184,59,198,54,198,54,205,75,205,75,210,99,210,99,212,102,212,102,208,120,208" href="#">
<area data-key="HanoverPark,hps,northwest,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/hanoverpark.html" shape="poly" coords="206,290,206,319,210,319,210,326,216,326,216,336,202,341,190,341,190,331,183,331,183,319,177,317,177,308,184,308,195,297,195,290,206,290" href="#">
<area data-key="Streamwood,hps,northwest,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/hanoverpark.html" shape="poly" coords="151,267,151,271,155,271,149,278,139,278,139,286,172,308,172,317,177,317,177,308,184,308,195,297,195,288,186,288,186,275,199,275,199,272,192,272,192,267,151,267" href="#" >
<area data-key="DesPlainesRiverCorridor" class="mapqtip" shape="poly" coords="387,166,376,166,369,152,331,152,331,166,340,166,340,174,333,174,333,189,342,189,342,199,338,199,339,204,328,204,328,212,339,212,339,235,328,235,328,245,319,245,320,274,333,285,347,285,347,300,354,300,355,308,361,308,363,310,366,311,365,303,369,303,369,299,371,299,370,302,373,302,373,299,381,299,380,313,405,313,404,302,396,302,396,279,401,278,401,267,408,267,408,251,391,251,391,242,376,242,375,227,385,227,385,213,397,213,397,194,387,183" href="#">
<!-- End Impact Areas -->
<area data-key="MortonGrove,northwest" alt="Morton Grove" class="tooltip-basic qbasic" shape="poly" coords="466,283,455,283,455,267,439,267,439,263,433,263,433,249,455,249,455,253,478,253,478,273,480,273,480,284,476,284,476,281,466,281,466,283" href="#">
<area data-key="Niles,northwest" alt="Niles" class="tooltip-basic qbasic" shape="poly" coords="421,249,421,272,417,272,417,281,442,281,442,289,446,289,446,307,463,307,463,300,459,300,458,295,466,295,466,292,468,292,468,295,472,295,472,302,476,302,476,290,468,289,466,283,455,283,455,267,439,267,439,263,433,263,433,249,421,249" href="#">
<area data-key="ParkRidge,northwest" alt="Park Ridge" class="tooltip-basic qbasic" shape="poly" coords="406,267,398,267,398,279,395,279,395,302,403,302,403,318,424,318,424,320,434,320,434,316,435,316,435,296,438,296,438,289,441,289,441,281,417,281,417,272,421,272,421,267,406,267" href="#">
<area data-key="Lincolnshire,northwest" alt="Lincolnshire" class="tooltip-basic qbasic" shape="poly" coords="357,130,345,130,345,124,339,124,339,119,344,119,344,105,366,105,366,85,377,84,383,104,389,116,370,116,370,123,357,123,357,130" href="#">
<area data-key="HalfDay" alt="Half Day" class="tooltip-basic qbasic" shape="poly" coords="331,91,351,91,351,98,354,98,354,105,338,105,338,113,331,112,331,91" href="#">
<area data-key="PrairieView,northwest" alt="Prairie View" class="tooltip-basic qbasic" shape="poly" coords="316,120,344,119,344,105,338,105,338,112,331,112,331,104,316,104,316,120" href="#">
<area data-key="BuffaloGrove,northwest" alt="Buffalo Grove" class="tooltip-basic qbasic" shape="poly" coords="316,120,316,129,306,129,306,141,312,141,312,174,316,174,316,179,332,179,332,175,339,175,339,167,331,167,331,154,351,154,351,147,343,147,343,142,357,142,357,130,345,130,345,124,339,124,339,119,316,120" href="#" >
<area data-key="ArlingtonHeights,northwest" alt="Arlington Heights" class="tooltip-basic qbasic" shape="poly" coords="297,154,297,213,285,214,285,219,296,219,296,250,308,259,305,263,320,274,320,247,328,247,328,236,339,236,339,213,329,213,329,206,338,206,338,200,341,200,341,191,332,191,332,179,316,179,316,174,312,174,312,154,297,154" href="#">
<area data-key="ElkGroveVillage,northwest" alt="Elk Grove Village" class="tooltip-basic qbasic" shape="poly" coords="350,325,350,310,347,310,347,309,351,309,351,299,346,299,346,284,332,284,298,257,283,257,283,288,258,288,258,309,265,316,320,316,320,325,320,325,350,325" href="#">
<area data-key="Inverness,northwest" alt="Inverness" class="tooltip-basic qbasic" shape="poly" coords="231,176,223,168,214,168,214,178,201,178,201,197,211,197,211,191,225,191,225,197,223,197,223,205,230,205,230,219,242,219,242,227,244,227,244,197,251,197,251,187,231,176" href="#">
<area data-key="Schaumburg,northwest" alt="Schaumburg" class="tooltip-basic qbasic" shape="poly" coords="252,230,269,231,278,245,279,256,282,256,282,288,257,288,257,307,236,307,236,319,206,318,205,290,194,290,194,287,185,287,185,275,198,275,198,261,212,261,212,270,229,270,229,281,243,281,243,273,254,273,254,263,225,263,225,256,239,256,239,243,195,243,195,229,209,229,209,223,216,223,216,219,204,219,204,203,211,203,211,190,224,189,224,196,222,196,222,203,229,203,229,219,243,219,243,242,252,242" href="#">
<area data-key="HoffmanEstates,northwest" alt="Hoffman Estates" class="tooltip-basic qbasic" shape="poly" coords="125,226,125,238,120,238,120,241,124,241,124,251,120,251,120,261,124,261,124,253,128,253,128,258,133,258,133,262,143,262,148,248,166,248,166,256,159,256,159,263,151,263,151,267,192,267,192,272,199,272,199,262,212,262,212,271,230,271,230,281,244,281,244,273,255,273,255,264,226,264,226,257,239,257,239,244,196,244,196,241,159,241,159,230,125,226" href="#">
<area data-key="Gilberts,northwest" alt="Gilberts" class="tooltip-basic qbasic" shape="poly" coords="62,214,50,209,50,205,47,205,47,196,50,196,50,187,49,187,49,183,48,183,49,183,49,181,47,181,47,173,49,173,49,176,56,176,56,180,59,180,59,177,62,177,62,182,60,182,60,199,55,199,55,205,63,205,63,205,62,214" href="#">
<area data-key="WestDundee,northwest" alt="West Dundee" class="tooltip-basic qbasic" shape="poly" coords="125,238,108,238,108,239,101,239,101,235,106,235,106,227,103,230,99,230,99,223,104,223,104,220,101,218,101,212,89,212,89,216,84,216,84,220,72,220,72,216,76,216,76,211,74,211,74,209,99,209,99,211,108,211,113,210,113,222,116,222,116,235,125,235,125,238" href="#">
<area data-key="Dundee,northwest"  alt="Dundee" class="tooltip-basic qbasic" shape="poly" coords="102,211,108,211,113,210,113,222,116,222,116,235,125,235,125,225,132,227,132,224,128,224,128,218,132,218,131,211,120,211,120,207,102,207,102,207,102,211" href="#">
<area data-key="SleepyHollow,northwest" alt="Sleepy Hollow" class="tooltip-basic qbasic" shape="poly" coords="99,228,96,229,96,224,92,226,92,224,88,227,72,227,72,224,68,224,68,222,72,222,72,220,84,220,84,216,89,216,89,212,101,212,101,218,104,220,104,223,99,223,99,228,99,228" href="#">
<area data-key="Bartlett,northwest" alt="Bartlett" class="tooltip-basic qbasic" shape="poly" coords="148,292,142,298,135,293,127,293,127,322,121,322,121,313,102,313,102,332,137,345,137,366,180,366,180,358,184,358,184,341,190,341,190,331,183,331,183,319,177,317,172,317,172,308,148,292" href="#">
<!-- End Northwest -->

<!-- DuPage/West Cook -->
<!-- Impact Areas -->
<area data-key="Bensenville,dwc,partners" class="mapqtip" shape="poly" rel="http://static.uw-mc.org/communitymap/areas/bensenville.html" coords="331,325,331,374,364,374,364,361,366,361,366,351,363,351,363,355,359,355,359,349,355,349,355,344,350,344,350,325,331,325,331,325" href="#">
<area data-key="Addison,dwc,partners" shape="poly" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/addison.html" coords="272,347,272,350,267,350,267,374,272,374,272,384,279,387,279,392,330,392,330,372,331,372,331,357,312,357,312,361,301,361,301,342,284,342,284,347,272,347" href="#">
<area data-key="CarolStream,dwc,partners" shape="poly" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/carolstream.html" coords="173,366,173,387,189,387,189,400,213,400,213,406,221,406,221,415,237,415,237,401,229,401,229,375,220,375,220,370,213,366,173,366" href="#">
<area data-key="WestChicago,dwc,partners" shape="poly" rel="http://static.uw-mc.org/communitymap/areas/westchicago.html" coords="114,439,114,388,121,388,121,376,112,381,112,367,134,367,134,382,154,382,163,373,171,373,171,379,163,379,163,384,158,384,158,397,164,397,164,389,174,389,174,411,169,411,169,402,158,402,158,404,172,419,172,425,168,425,168,441,143,430,119,439,114,439" href="#">
<area data-key="MelrosePark,dwc,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/melrosepark.html" shape="poly" coords="415,388,388,388,388,394,403,394,394,404,388,404,388,402,377,402,377,409,422,409,422,404,430,404,436,393,424,392,420,388,415,388" href="#">
<area data-key="Bellwood,dwc,partners" class="mapqtip" shape="poly" rel="http://static.uw-mc.org/communitymap/areas/bellwood.html" coords="383,409,383,421,394,421,394,431,409,431,409,409,383,409" href="#">
<area data-key="Maywood,dwc,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/maywood.html" shape="poly" rel="http://static.uw-mc.org/communitymap/areas/maywood.html" coords="433,403,423,403,423,409,411,409,411,432,422,432,422,438,432,438,432,427,439,422,431,422,431,415,436,411,436,409,432,409" href="#">
<area data-key="ForestPark,dwc,partners" class="mapqtip" shape="poly" rel="http://static.uw-mc.org/communitymap/areas/forestpark.html" coords="450,414,451,442,447,442,447,449,429,449,429,427,434,421,445,421,445,414" href="#">
<area data-key="OakPark,dwc,partners" class="mapqtip" shape="poly" rel="http://static.uw-mc.org/communitymap/areas/oakpark.html" coords="469,437,452,437,452,396,469,396,469,437" href="#">
<area data-key="Berwyn,dwc,partners" class="mapqtip" shape="poly" coords="469,476,452,476,452,437,469,437,469,476" rel="http://static.uw-mc.org/communitymap/areas/berwyn.html" href="#">
<area data-key="Cicero,dwc,partners" class="mapqtip" shape="poly" coords="496,437,469,437,469,476,492,476,492,469,496,469,496,469,496,437" rel="http://static.uw-mc.org/communitymap/areas/cicero.html" href="#">
<area data-key="Westmont,dwc,partners" rel="http://static.uw-mc.org/communitymap/areas/westmont.html" class="mapqtip" shape="poly" coords="330,488,342,488,342,514,329,514,329,502,324,502,324,495,330,496" href="#">
<area data-key="Willowbrook,dwc,partners"  class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/willowbrook.html" shape="poly" coords="374,576,364,563,364,557,369,557,369,555,365,555,365,545,374,536,374,528,368,528,368,523,381,523,381,517,388,517,388,516,353,516,353,508,342,508,342,514,336,514,336,531,346,531,346,543,335,543,335,552,347,552,347,582,361,582,369,577,372,577,374,576" href="#">
<area data-key="Woodridge,dwc,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/woodridge.html" shape="poly" coords="261,512,261,523,238,523,238,533,247,533,247,539,261,539,261,547,256,547,256,570,280,570,280,560,295,560,295,546,285,546,285,539,281,539,281,531,277,531,277,525,287,525,287,512,261,512" href="#">
<area data-key="Naperville,dwc,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/naperville.html" shape="poly" coords="216,483,216,477,208,477,208,485,198,485,198,491,193,491,193,486,185,486,185,499,171,499,171,517,163,517,163,487,143,487,143,496,129,496,129,517,147,517,147,548,177,548,177,554,192,554,192,569,169,569,169,584,162,584,162,563,147,563,147,569,133,569,133,577,137,577,137,619,166,619,172,606,182,606,182,591,178,591,178,587,237,587,237,570,256,570,256,547,261,547,261,538,249,538,249,533,219,533,219,524,229,524,229,503,216,503,216,483" href="#">
<!-- End Impact Areas -->
<area data-key="Norridge,dwc" alt="Norridge" class="tooltip-basic qbasic" shape="poly" coords="409,318,409,337,409,342,408,342,409,351,414,351,414,356,410,356,410,361,415,362,415,368,425,368,425,361,424,361,424,347,428,347,428,353,437,353,441,353,440,348,435,345,435,337,435,337,435,337,424,337,424,318,409,318" href="#">
<area data-key="HarwoodHeights,dwc" alt="Harwood Heights" class="tooltip-basic qbasic" shape="poly" coords="462,338,446,338,446,331,438,331,439,336,435,336,435,345,439,347,439,353,446,353,456,347,463,346,462,338" href="#">
<area data-key="WoodDale,dwc" alt="Wood Dale" class="tooltip-basic qbasic" shape="poly" coords="305,316,305,324,312,324,312,342,301,342,301,361,312,361,312,357,331,357,331,325,320,325,320,316,305,316" href="#" >
<area data-key="Itasca,dwc" alt="Itasca" class="tooltip-basic qbasic" shape="poly" coords="265,316,265,324,272,324,272,347,284,347,284,342,312,342,312,324,305,324,305,316,265,316" href="#">
<area data-key="Roselle,dwc" alt="Roselle" class="tooltip-basic qbasic" shape="poly" coords="210,319,210,326,216,326,216,336,237,347,241,339,272,339,272,324,265,324,265,316,258,308,237,308,237,323,211,319,211,319,210,319" href="#">
<area data-key="Bloomingdale,dwc" alt="Bloomingdale" class="tooltip-basic qbasic" shape="poly" coords="180,366,213,366,220,370,220,375,229,375,229,368,256,368,256,374,267,374,267,350,272,350,272,339,241,339,237,347,216,336,202,341,184,341,184,358,180,358,180,365,180,366" href="#">
<area data-key="SchillerPark,dwc" alt="Schiller Park" class="tooltip-basic qbasic" shape="poly" coords="390,352,390,360,406,360,406,357,410,357,410,356,416,356,416,351,409,351,408,342,409,342,409,337,391,337,391,352,390,352" href="#">
<area data-key="RiverForest,dwc" alt="River Forest" class="tooltip-basic qbasic" shape="poly" coords="436,393,430,404,430,409,433,409,433,411,430,415,430,422,445,422,445,415,452,415,452,396,445,396,445,393,436,393" href="#">
<area data-key="ElmwoodPark,dwc" alt="Elmwood Park" class="tooltip-basic qbasic" shape="poly" coords="436,369,436,393,445,393,445,372,439,372,439,369,436,369" href="#">
<area data-key="RiverGrove,dwc" alt="River Grove" class="tooltip-basic qbasic" shape="poly" coords="436,393,436,369,416,369,416,388,421,388,425,393,436,393" href="#">
<area data-key="FranklinPark,dwc" alt="Franklin Park" class="tooltip-basic qbasic" shape="poly" coords="366,357,366,361,364,361,364,372,374,372,388,388,416,388,416,362,410,361,410,357,406,357,406,360,390,360,390,352,384,352,384,357,366,357" href="#">
<area data-key="StonePark,dwc" alt="Stone Park" class="tooltip-basic qbasic" shape="poly" coords="388,394,403,394,394,404,388,404,388,394" href="#">
<area data-key="Northlake,dwc" alt="Northlake" class="tooltip-basic qbasic" shape="poly" coords="364,372,364,402,388,402,388,388,374,372,364,372" href="#">
<area data-key="Elmhurst,dwc" alt="Elmhurst" class="tooltip-basic qbasic" shape="poly" coords="365,437,330,437,330,372,331,372,331,374,364,374,365,437" href="#">
<area data-key="VillaPark,dwc" alt="Villa Park" class="tooltip-basic qbasic" shape="poly" coords="330,437,310,437,310,392,330,392,330,437" href="#">
<area data-key="Lombard,dwc" alt="Lombard" class="tooltip-basic qbasic" shape="poly" coords="310,461,279,461,279,392,310,392,310,461" href="#">
<area data-key="GlenEllyn,dwc" alt="Glen Ellyn" class="tooltip-basic qbasic" shape="poly" coords="279,461,245,461,245,412,279,412,279,461" href="#">
<area data-key="OakbrookTerrace,dwc" alt="Oakbrook Terrace" class="tooltip-basic qbasic" shape="poly" coords="312,451,329,451,329,447,332,447,332,443,344,443,344,442,340,442,339,438,310,437,310,449,312,449,312,451" href="#">
<area data-key="Oakbrook,dwc" alt="Oakbrook" shape="poly" class="tooltip-basic qbasic" coords="340,437,340,442,344,442,344,443,332,443,332,447,329,447,329,451,312,451,312,449,310,449,310,479,363,479,363,437,340,437" href="#">
<area data-key="Hillside,dwc" alt="Hillside" class="tooltip-basic qbasic" shape="poly" coords="370,416,370,438,394,438,394,421,383,421,383,416,370,416" href="#">
<area data-key="Berkeley,dwc" alt="Berkeley" class="tooltip-basic qbasic" shape="poly" coords="364,402,365,437,370,438,370,416,383,416,383,409,377,409,377,402,364,402" href="#">
<area data-key="NorthRiverside,dwc" alt="North Riverside" class="tooltip-basic qbasic" shape="poly" coords="449,442,449,450,414,450,414,458,432,458,432,463,438,463,438,456,452,456,452,442,449,442" href="#">
<area data-key="Riverside,dwc" alt="Riverside" class="tooltip-basic qbasic" shape="poly" coords="432,463,432,481,437,481,437,479,448,479,452,476,452,456,438,456,438,463,432,463" href="#">
<area data-key="Broadview,dwc" alt="Broadview" class="tooltip-basic qbasic" shape="poly" coords="404,431,404,455,414,455,414,450,430,450,430,438,420,438,420,432,409,432,409,431,404,431" href="#">
<area data-key="Westchester,dwc" alt="Westchester" class="tooltip-basic qbasic" shape="poly" coords="404,430,393,430,393,437,363,437,363,479,381,479,381,472,392,472,389,467,397,464,397,466,401,466,401,468,409,468,409,454,404,454" href="#">
<area data-key="Brookfield" alt="Brookfield" class="tooltip-basic qbasic" shape="poly" coords="410,455,410,492,425,492,425,478,432,478,432,458,415,458,415,455,410,455" href="#">
<area data-key="Stickney" alt="Stickney" class="tooltip-basic qbasic" shape="poly" coords="452,476,452,488,486,488,486,490,490,490,490,480,495,480,495,469,492,469,492,476,452,476" href="#">
<area data-key="ForestView" alt="Forest View" class="tooltip-basic qbasic" shape="poly" coords="452,488,452,502,486,502,486,488,452,488" href="#">
<area data-key="Lyons" alt="Lyons" class="tooltip-basic qbasic" shape="poly" coords="432,478,425,478,425,493,452,493,452,488,452,488,452,476,448,479,437,479,437,481,432,481,432,478" href="#">
<area data-key="McCook" alt="McCook" class="tooltip-basic qbasic" shape="poly" coords="410,492,410,514,436,514,452,498,452,492,410,492" href="#">
<area data-key="LaGrange" alt="La Grange" class="tooltip-basic qbasic" shape="poly" coords="389,478,388,508,399,508,410,499,410,478,389,478" href="#">
<area data-key="LaGrangePark" alt="La Grange Park" class="tooltip-basic qbasic" shape="poly" coords="409,468,400,468,400,466,397,466,397,464,389,467,392,472,381,472,381,479,409,479" href="#">
<area data-key="LaGrangeHighlands" alt="La Grange Highlands" class="tooltip-basic qbasic" shape="poly" coords="391,509,385,509,385,505,381,505,381,508,378,509,378,514,375,514,375,517,391,517" href="#">
<area data-key="Westchester,dwc" alt="Westchester" class="tooltip-basic qbasic" shape="poly" coords="404,431,394,431,393,438,363,437,363,452,363,479,382,479,382,472,393,472,389,467,395,465,395,464,398,464,398,466,402,466,402,468,410,468,410,455,404,455,404,431" href="#">
<area data-key="Hodgkins,dwc" alt="Hodgkins" shape="poly" class="tooltip-basic qbasic" coords="410,514,404,518,404,540,391,540,389,555,389,561,391,564,405,552,403,549,407,547,409,548,417,539,411,539,436,514,410,514" href="#">
<area data-key="Countryside,dwc" alt="Countryside" class="tooltip-basic qbasic" shape="poly" coords="388,508,388,525,383,531,391,540,404,540,404,518,410,514,410,499,399,508,388,508" href="#">
<area data-key="BurrRidge,dwc" alt="Burr Ridge" class="tooltip-basic qbasic" shape="poly" coords="381,517,381,523,368,523,368,528,374,528,374,536,365,545,365,555,369,555,369,557,364,557,364,564,374,576,381,571,381,567,377,567,377,560,373,560,373,558,383,558,383,555,389,555,391,540,383,531,388,526,388,517,381,517" href="#">
<area data-key="WesternSprings,dwc" alt="Western Springs" class="tooltip-basic qbasic" shape="poly" coords="388,516,373,516,373,478,389,478,388,516" href="#">
<area data-key="WillowSprings,dwc" alt="Willow Springs" class="tooltip-basic qbasic" shape="poly" coords="409,548,407,547,403,549,405,552,391,564,389,561,389,555,383,555,383,558,373,558,373,560,377,560,377,567,381,567,381,571,374,576,372,577,369,577,366,578,366,604,409,611,409,592,413,588,413,581,416,581,416,556,413,556,409,548" href="#">
<area data-key="Hinsdale,dwc" alt="Hinsdale" class="tooltip-basic qbasic" shape="poly" coords="342,478,342,508,354,508,354,516,373,516,373,478,342,478" href="#">
<area data-key="ClarendonHills,dwc" alt="Clarendon Hills" class="tooltip-basic qbasic" shape="poly" coords="310,478,310,531,316,531,316,542,325,542,325,531,336,531,336,515,330,515,330,502,325,502,325,496,330,496,330,489,342,489,342,478,310,478" href="#">
<area data-key="Darien,dwc" alt="Darien" class="tooltip-basic qbasic" shape="poly" coords="295,546,295,560,280,560,280,610,286,606,297,606,297,601,288,591,298,585,303,585,303,581,325,569,325,584,333,584,333,591,331,596,335,601,361,582,347,582,347,552,335,552,335,543,346,543,346,531,325,531,325,542,316,542,316,531,310,531,310,546,295,546" href="#">
<area data-key="DownersGrove,dwc" alt="Downers Grove" class="tooltip-basic qbasic" shape="poly" coords="277,461,261,461,261,475,277,475,277,490,261,490,261,512,287,512,287,525,277,525,277,531,281,531,281,539,285,539,285,546,310,546,310,461,277,461" href="#">
<area data-key="Lisle,dwc" alt="Lisle" class="tooltip-basic qbasic" shape="poly" coords="227,477,227,483,216,483,216,503,229,503,229,524,219,524,219,533,238,533,238,523,261,523,261,490,277,490,277,475,261,475,261,461,245,461,245,477,227,477" href="#">
<area data-key="GlendaleHeights,dwc" alt="Glendale Heights" class="tooltip-basic qbasic" shape="poly" coords="229,368,229,401,237,401,237,412,279,412,279,387,272,384,272,374,256,374,256,368,229,368" href="#">
<area data-key="Wheaton,dwc" alt="Wheaton" shape="poly" class="tooltip-basic qbasic" coords="221,415,221,430,194,430,194,469,227,469,227,477,245,477,245,412,237,412,237,415,221,415" href="#">
<area data-key="Winfield,dwc" alt="Winfield" class="tooltip-basic qbasic" shape="poly" coords="168,425,184,425,184,414,189,414,189,400,213,400,213,406,221,406,221,430,194,430,194,446,168,446,168,425" href="#">
<area data-key="Warrenville,dwc" alt="Warrenville" class="tooltip-basic qbasic" shape="poly" coords="143,488,143,449,152,449,152,461,158,461,158,467,167,467,167,472,184,472,184,480,193,480,193,487,185,487,185,500,172,500,172,517,162,517,162,488,143,488" href="#">
<area data-key="Bollingbrook,dwc" alt="Bollingbrook" class="tooltip-basic qbasic" shape="poly" coords="280,610,280,570,237,570,237,587,216,587,216,623,229,623,229,635,243,635,243,626,265,627,265,617,267,617,280,610" href="#">
<!-- End DuPage/West Cook -->

<!-- City Of Chicago -->
<!-- Impact Areas -->
<area data-key="NearWestSide,coc,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/nearwestside.html" shape="poly" coords="571,443,533,443,533,439,531,436,531,416,534,415,568,415,569,417,569,425,571,429,571,443" href="#">
<area data-key="EastGarfieldPark,coc,partners" class="maptipbelowright" rel="http://static.uw-mc.org/communitymap/areas/eastgarfieldpark.html" shape="poly" coords="531,435,509,435,509,416,531,416,531,435" href="#">
<area data-key="NorthLawndale,coc,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/northlawndale.html" shape="poly" coords="495,437,495,457,508,454,508,451,515,451,515,450,521,450,521,448,528,448,533,446,533,439,531,436,531,435,509,435,509,437,495,437" href="#">
<area data-key="SouthLawndale,coc,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/southlawndale.html" shape="poly" coords="495,457,495,484,533,467,533,446,528,448,521,448,521,450,515,450,515,451,508,451,508,454,495,457" href="#">
<area data-key="LowerWestSide,coc,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/lowerwestside.html" shape="poly" coords="533,443,533,467,539,466,548,466,551,464,551,459,554,456,565,453,571,445,571,443,533,443" href="#">
<area data-key="BrightonPark,coc,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/brightonpark.html" shape="poly" coords="514,476,514,497,535,497,535,479,533,474,533,467,514,476" href="#">
<area data-key="GagePark,coc,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/gagepark.html" shape="poly" coords="539,515,514,515,514,497,539,497,539,515" href="#">
<area data-key="NewCity,coc,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/newcity.html" shape="poly" coords="535,479,535,497,539,497,539,507,571,507,571,479,535,479,535,479,535,479" href="#">
<area data-key="ChicagoLawn,coc,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/chicagolawn.html" shape="poly" coords="539,543,514,543,514,515,539,515,539,543" href="#">
<area data-key="Englewood,coc,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/englewood.html" shape="poly" coords="574,529,576,529,576,508,559,508,538,508,538,543,558,543,572,543,572,531,574,531,574,529" href="#">
<area data-key="GreaterGrandCrossing,coc,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/greatergrandcrossing.html" shape="poly" coords="592,535,585,528,585,522,578,522,578,519,576,519,576,528,574,528,574,532,572,532,572,543,567,543,567,549,599,549,599,543,601,542,601,527,592,527,592,535" href="#">
<area data-key="Woodlawn,coc,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/woodlawn.html" shape="poly" coords="602,527,592,527,592,535,585,528,585,515,614,515,614,518,618,518,618,522,616,522,616,525,620,525,620,527,602,527" href="#">
<area data-key="SouthShore,coc,partners" shape="poly" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/southshore.html" coords="607,548,601,542,601,527,620,527,620,532,626,532,626,542,639,542,639,545,633,545,633,548,607,548" href="#">
<area data-key="SouthChicago,coc,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/southchicago.html" shape="poly" coords="639,545,633,545,633,548,607,548,635,577,638,577,638,572,647,567,647,549,639,549,639,545" href="#">
<area data-key="Austin,coc,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/austin.html" shape="poly" coords="495,437,469,437,469,396,445,396,445,381,462,389,480,389,486,390,490,390,494,391,495,437" href="#">
<area data-key="HumboldtPark,coc,partners" class="mapqtip" rel="http://static.uw-mc.org/communitymap/areas/humboldtpark.html" shape="poly" coords="494,391,524,391,524,395,519,395,519,405,523,405,523,408,526,408,526,410,531,412,531,416,495,416,494,391" href="#">
<!-- End Impact Areas -->
<area data-key="OHare,coc" alt="O'Hare" class="tooltip-basic qbasic" shape="poly" coords="350,344,354,344,354,349,358,349,358,355,363,355,363,351,366,351,366,356,384,356,384,351,391,351,391,337,435,337,435,335,394,335,394,331,398,331,398,323,394,323,394,313,379,313,379,298,373,298,373,302,370,302,370,298,368,298,368,303,364,303,364,308,362,308,360,307,353,307,354,299,351,299,350,309,346,309,346,310,349,310,349,310,350,344" href="#">
<area data-key="RogersPark,coc" alt="Rogers Park" class="tooltip-basic qbasic" shape="poly" coords="544,309,541,308,535,287,542,287,542,284,550,284,550,294,552,294,552,296,553,296,553,297,554,297,554,300,555,300,555,302,554,303,556,308,544,309" href="#">
<area data-key="WestRidge,coc" alt="West Ridge" class="tooltip-basic qbasic" shape="poly" coords="519,323,515,310,515,287,535,287,541,308,544,309,544,316,531,316,531,323,519,323" href="#">
<area data-key="NorthPark,coc" alt="North Park" class="tooltip-basic qbasic" shape="poly" coords="489,324,497,324,497,320,504,311,516,311,522,333,517,332,515,335,512,335,507,332,504,332,504,335,500,335,500,331,489,331,489,324" href="#">
<area data-key="ForestGlen,coc" alt="Forest Glen" class="tooltip-basic qbasic" shape="poly" coords="463,307,463,300,459,300,458,295,466,295,466,292,468,292,468,295,472,295,472,302,476,302,476,299,480,299,480,308,483,308,483,311,504,311,497,320,497,324,489,324,489,339,486,339,486,335,485,333,485,329,480,317,476,315,476,317,471,317,471,313,472,312,472,310,465,310,465,307,463,307,463,307" href="#">
<area data-key="Edison Park,coc" alt="Edison Park" class="tooltip-basic qbasic" shape="poly" coords="435,311,435,296,438,296,438,289,446,289,446,311,444,311,444,311,435,311" href="#">
<area data-key="JeffersonPark,coc" alt="Jefferson Park" class="tooltip-basic qbasic" shape="poly" coords="465,310,472,310,472,312,471,313,471,317,476,317,476,315,480,317,485,329,485,333,486,335,486,339,462,339,462,324,467,324,467,313,465,313,465,310" href="#">
<area data-key="NorwoodPark,coc" alt="Norwood Park" class="tooltip-basic qbasic" shape="poly" coords="424,335,424,320,434,320,434,316,435,316,435,311,444,311,444,311,446,311,446,307,465,307,465,313,467,313,467,324,462,324,462,339,447,339,447,331,439,331,439,337,436,337,436,335,424,335" href="#">
<area data-key="Edgewater,coc" alt="Edgewater" class="tooltip-basic qbasic" shape="poly" coords="556,308,557,317,558,317,558,320,559,320,559,329,544,329,544,309,556,308" href="#">
<area data-key="LincolnSquare,coc" alt="Lincoln Square" class="tooltip-basic qbasic" shape="poly" coords="544,316,544,344,528,344,522,333,519,323,531,323,531,316,544,316" href="#">
<area data-key="AlbanyPark,coc" alt="Albany Park" class="tooltip-basic qbasic" shape="poly" coords="522,333,528,344,502,344,497,339,489,339,489,331,500,331,500,335,504,335,504,332,507,332,512,335,515,335,517,332,522,333" href="#">
<area data-key="PortagePark,coc" alt="Portage Park" class="tooltip-basic qbasic" shape="poly" coords="489,339,475,339,475,339,462,339,462,354,468,354,468,367,494,367,494,352,490,345,489,339" href="#" alt="Portage Park">
<area data-key="Dunning,coc" alt="Dunning" class="tooltip-basic qbasic" shape="poly" coords="462,346,456,346,446,353,428,353,428,347,424,347,424,362,426,362,426,369,439,369,439,372,445,372,445,367,468,367,468,354,462,354,462,346" href="#" >
<area data-key="Uptown,coc" alt="Uptown" class="tooltip-basic qbasic" shape="poly" coords="566,351,552,351,549,344,544,344,544,329,562,329,562,335,563,335,563,336,564,336,564,339,566,339,566,340,569,340,569,341,573,341,573,344,570,344,570,346,566,346,566,351" href="#">
<area data-key="Lakeview,coc" alt="Lakeview" class="tooltip-basic qbasic" shape="poly" coords="544,371,544,344,549,344,552,351,566,351,566,352,567,352,567,357,570,357,570,362,573,362,573,371,544,371" href="#">
<area data-key="NorthCenter,coc" alt="North Center" class="tooltip-basic qbasic" shape="poly" coords="544,344,528,344,528,352,526,355,526,363,533,370,536,371,544,371,544,344" href="#">
<area data-key="IrvingPark,coc" alt="Irving Park" class="tooltip-basic qbasic" shape="poly" coords="494,367,494,352,489,344,489,339,497,339,502,344,528,344,529,352,527,355,527,359,505,359,505,367,494,367" href="#">
<area data-key="Avondale,coc" alt="Avondale" class="tooltip-basic qbasic" shape="poly" coords="498,367,505,367,505,359,526,359,526,362,533,370,533,374,501,374,498,367" href="#">
<area data-key="Hermosa,coc" alt="Hermosa" class="tooltip-basic qbasic" shape="poly" coords="494,391,494,367,498,367,505,381,505,386,506,386,508,391,494,391" href="#">
<area data-key="BelmontCragin,coc" alt="Belmont Cragin" class="tooltip-basic qbasic" shape="poly" coords="494,391,490,390,486,390,480,389,462,389,460,388,460,367,494,367,494,391" href="#">
<area data-key="Montclare,coc" alt="Montclare" class="tooltip-basic qbasic" shape="poly" coords="460,367,445,367,445,381,460,388,460,367" href="#">
<area data-key="LincolnPark,coc" alt="Lincoln Park" class="tooltip-basic qbasic" shape="poly" coords="556,394,555,389,551,389,547,383,545,383,543,381,543,378,539,376,536,371,573,371,573,384,576,384,576,387,579,387,579,390,580,390,580,394,556,394" href="#">
<area data-key="LoganSquare,coc" alt="Logan Square" class="tooltip-basic qbasic" shape="poly" coords="536,371,539,376,543,378,543,381,545,383,547,383,551,389,549,391,542,391,540,390,538,390,537,391,508,391,506,386,505,386,505,381,501,374,533,374,533,370,536,371" href="#">
<area data-key="NearNorthSide,coc" alt="Near North Side" class="tooltip-basic qbasic" shape="poly" coords="557,394,578,394,578,402,579,402,579,404,584,404,584,408,585,408,585,411,588,411,588,408,594,408,594,411,590,411,590,413,597,413,597,414,589,414,589,415,578,415,569,417,564,409,564,407,554,402,554,397,557,394" href="#">
<area data-key="WestTown,coc" alt="West Town" class="tooltip-basic qbasic" shape="poly" coords="524,391,537,391,538,390,540,390,542,391,549,391,551,389,555,389,557,394,554,398,554,402,564,407,564,409,568,415,534,415,531,416,531,412,526,410,526,408,523,408,523,405,519,405,519,395,524,395,524,391" href="#">
<area data-key="WestGarfieldPark,coc" alt="West Garfield Park" shape="poly" coords="509,437,495,437,495,416,509,416,509,437" href="#">
<area data-key="Loop" alt="Loop" class="tooltip-basic qbasic" shape="poly" coords="585,435,571,435,571,429,569,425,569,417,578,415,586,415,586,422,585,422,585,435" href="#">
<area data-key="NearSouthSide,coc" alt="Near South Side" class="tooltip-basic qbasic" shape="poly" coords="589,458,576,458,576,452,575,445,571,445,571,435,587,435,587,437,592,437,592,440,591,440,591,443,592,443,592,443,591,443,591,450,590,450,590,440,589,440,589,439,587,439,587,446,586,446,586,448,587,448,587,452,588,452,588,457,589,457,589,458,589,458" href="#">
<area data-key="ArmourSquare,coc" alt="Armour Square" class="tooltip-basic qbasic" shape="poly" coords="576,479,571,479,570,460,569,459,569,457,566,457,565,453,571,445,575,445,576,452,576,479" href="#">
<area data-key="Bridgeport,coc" alt="Bridgeport" class="tooltip-basic qbasic" shape="poly" coords="571,479,570,460,569,459,569,457,566,457,565,453,554,456,551,459,551,464,556,471,556,479,571,479" href="#">
<area data-key="McKinleyPark,coc" alt="McKinley Park" class="tooltip-basic qbasic" shape="poly" coords="556,479,535,479,533,474,533,467,539,466,548,466,551,464,556,471,556,471,556,479" href="#">
<area data-key="Douglas,coc" alt="Douglas" shape="poly" class="tooltip-basic qbasic" coords="588,479,576,479,576,458,589,458,589,462,592,462,592,470,593,470,593,472,588,472,588,479" href="#">
<area data-key="Oakland,coc" alt="Oakland" class="tooltip-basic qbasic" shape="poly" coords="592,485,592,479,588,479,588,472,593,472,593,473,596,473,596,479,598,479,598,481,601,481,601,485,592,485" href="#">
<area data-key="Kenwood,coc" alt="Kenwood" class="tooltip-basic qbasic" shape="poly" coords="592,485,601,485,601,487,606,487,606,496,611,496,611,499,592,499,592,485" href="#">
<area data-key="GrandBlvd,coc" alt="Grand Blvd" class="tooltip-basic qbasic" shape="poly" coords="592,499,576,499,576,479,592,479,592,499" href="#">
<area data-key="FullerPark,coc" alt="Fuller Park" class="tooltip-basic qbasic" shape="poly" coords="576,507,571,507,571,479,576,479,576,507" href="#">
<area data-key="WashingtonPark,coc" alt="Washington Park" class="tooltip-basic qbasic" shape="poly" coords="576,499,576,519,578,519,578,522,585,522,585,515,592,515,592,499,576,499" href="#">
<area data-key="HydePark,coc" alt="Hyde Park" class="tooltip-basic qbasic" shape="poly" coords="592,499,592,515,614,515,614,513,612,513,612,508,614,508,614,504,611,504,611,499,592,499" href="#">
<area data-key="ArcherHeights,coc" alt="Archer Heights" class="tooltip-basic qbasic" shape="poly" coords="514,476,514,498,495,506,495,484,514,476" href="#">
<area data-key="GarfieldRidge,coc" alt="Garfield Ridge" class="tooltip-basic qbasic" shape="poly" coords="495,515,495,515,452,515,452,502,486,502,486,490,490,490,490,480,495,480,495,515" href="#">
<area data-key="WestElsdon,coc" alt="West Elsdon" class="tooltip-basic qbasic" shape="poly" coords="514,497,514,515,495,515,495,506,514,497" href="#">
<area data-key="Clearing,coc" alt="Clearing" class="tooltip-basic qbasic" shape="poly" coords="493,528,493,527,452,527,452,515,495,515,495,528,493,528" href="#">
<area data-key="WestLawn,coc" alt="West Lawn" class="tooltip-basic qbasic" shape="poly" coords="514,543,514,515,514,515,514,515,495,515,495,528,493,528,493,547,508,547,508,538,514,543" href="#">
<area data-key="Ashburn,coc" alt="Ashburn" class="tooltip-basic qbasic" shape="poly" coords="543,563,536,565,493,565,493,549,490,549,490,547,508,547,508,538,514,543,539,543,539,558,543,563" href="#">
<area data-key="AuburnGresham,coc" alt="Auburn Gresham" class="tooltip-basic qbasic" shape="poly" coords="549,569,539,559,539,543,567,544,567,557,572,557,572,570,562,570,562,568,550,568,549,569" href="#">
<area data-key="Chatham,coc" alt="Chatham" shape="poly" class="tooltip-basic qbasic" coords="599,549,567,549,567,557,572,557,572,564,578,570,583,570,594,577,597,563,600,563,599,559,599,549" href="#">
<area data-key="AvalonPark,coc" alt="Avalon Park" shape="poly" class="tooltip-basic qbasic" coords="601,542,599,543,599,559,600,563,621,563,601,542" href="#">
<area data-key="Beverly,coc" alt="Beverly" class="tooltip-basic qbasic" shape="poly" coords="554,599,526,599,526,592,526,592,526,585,536,585,536,565,543,562,549,569,557,592,554,599" href="#">
<area data-key="WashingtonHeights,coc" alt="Washington Heights" class="tooltip-basic qbasic" shape="poly" coords="572,570,562,570,562,567,550,567,549,569,557,592,554,599,566,599,566,593,572,593,572,570" href="#">
<area data-key="MountGreenwood,coc" alt="Mount Greenwood" class="tooltip-basic qbasic" shape="poly" coords="520,615,520,618,514,618,514,615,494,615,494,607,506,607,506,585,513,585,513,593,526,593,526,611,526,615,526,615,520,615" href="#">
<area data-key="Roseland,coc" alt="Roseland" class="tooltip-basic qbasic" shape="poly" coords="594,577,583,570,578,570,572,564,572,593,566,593,566,613,589,613,594,577" href="#">
<area data-key="MorganPark,coc" alt="Morgan Park" class="tooltip-basic qbasic" shape="poly" coords="566,599,526,599,526,615,533,615,533,622,545,622,545,623,548,623,548,621,552,621,552,613,566,613,566,599" href="#">
<area data-key="CalumetHeights,coc" alt="Calumet Heights" class="tooltip-basic qbasic" shape="poly" coords="635,577,621,563,600,563,607,577,607,577,635,577" href="#">
<area data-key="Burnside,coc" alt="Burnside" class="tooltip-basic qbasic" shape="poly" coords="596,563,594,577,607,577,600,563,597,563,596,563" href="#">
<area data-key="Pullman,coc" alt="Pullman" class="tooltip-basic qbasic" shape="poly" coords="595,623,596,613,601,598,608,592,607,577,594,577,589,613,589,613,582,636,581,648,581,649,581,653,613,654,595,623" href="#">
<area data-key="WestPullman,coc" alt="West Pullman" class="tooltip-basic qbasic" shape="poly" coords="589,613,552,613,552,628,566,627,566,635,563,635,563,640,572,640,572,636,582,636,589,613" href="#">
<area data-key="SouthDeering,coc" alt="South Deering" class="tooltip-basic qbasic" shape="poly" coords="638,577,638,589,636,591,636,637,631,632,628,627,626,629,626,638,605,638,595,623,596,613,601,598,608,591,607,577,638,577" href="#">
<area data-key="EastSide,coc" alt="East Side" class="tooltip-basic qbasic" shape="poly" coords="647,567,638,572,638,589,636,591,636,615,640,615,640,614,647,614,647,606,650,606,650,591,649,591,649,584,650,584,650,568,647,567" href="#">
<area data-key="Hegewisch,coc" alt="Hegewisch" class="tooltip-basic qbasic" shape="poly" coords="605,638,614,654,651,654,650,606,647,606,647,614,640,614,640,615,636,615,636,637,631,632,628,627,626,629,626,638,605,638" href="#">
<!-- <area data-key="Riverdale2" alt="Riverdale" class="tooltip-basic qbasic" shape="poly" coords="598,615,591,615,584,639,584,656,618,656,598,626" href="#"> -->
<!-- End City Of Chicago -->

<!-- South/Southwest -->
<!-- Impact Areas -->
<area data-key="Riverdale,ssw,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/riverdale.html" shape="poly" coords="547,656,547,640,572,640,572,636,582,636,581,653,578,653,578,663,555,663,547,656" href="#">
<area data-key="Dolton,ssw,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/dolton.html" shape="poly" coords="579,653,579,664,568,664,568,674,585,674,585,679,593,679,593,689,599,689,599,678,606,678,606,653,579,653" href="#">
<area data-key="Harvey,ssw,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/harvey.html" shape="poly" coords="555,664,547,656,547,666,539,666,529,678,529,687,522,687,522,693,543,693,543,698,554,698,551,707,551,716,565,716,565,704,572,704,572,698,567,698,567,689,574,689,574,681,570,681,570,674,568,674,568,664,555,664" href="#">
<area data-key="Dixmoor,ssw,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/dixmoor.html" shape="poly" coords="534,656,547,656,547,666,539,666,536,671,534,656" href="#">
<area data-key="Posen,ssw,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/posen.html" shape="poly" coords="528,656,528,666,522,666,522,679,529,679,536,670,534,656,528,656" href="#">
<area data-key="Robbins,ssw,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/robbins.html" shape="poly" coords="512,664,522,664,528,651,524,646,499,645,499,648,512,664" href="#">
<area data-key="FordHeights,ssw,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/fordheights.html" shape="poly" coords="621,735,603,736,603,743,595,743,594,751,621,751,621,735" href="#">
<area data-key="ChicagoHeights,ssw,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/chicagoheights.html" shape="poly" coords="651,785,640,785,640,758,634,758,634,772,623,772,623,782,614,782,614,775,611,775,611,769,583,769,583,750,576,750,576,759,573,759,567,754,551,755,551,762,540,774,540,797,552,797,552,813,577,813,595,804,602,814,602,821,613,821,613,803,630,804,630,811,632,811,635,814,638,813,638,811,651,811,651,785" href="#">
<area data-key="BlueIsland,ssw,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/blueisland.html" shape="poly" coords="528,656,528,667,522,666,522,664,528,651,524,646,517,646,517,637,511,635,511,631,519,634,519,620,523,620,523,615,533,615,533,622,544,622,540,633,544,634,547,640,547,656,534,656,528,656" href="#">
<area data-key="CalumetCity,ssw,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/calumetcity.html" shape="poly" coords="619,654,606,653,606,678,613,679,614,693,607,693,607,700,616,700,616,706,651,706,651,670,641,670,641,668,641,668,637,664,632,664,627,670,620,670,619,654" href="#">
<area data-key="SaukVillage,ssw,partners" class="maptip" rel="http://static.uw-mc.org/communitymap/areas/saukvillage.html" shape="poly" coords="621,752,621,758,624,758,624,766,634,767,634,772,623,772,623,782,614,782,614,775,611,775,611,769,606,769,607,751,621,752" href="#">
<!-- End Impact Areas -->
<area data-key="SummitArgo,ssw" alt="Summit Argo" class="tooltip-basic qbasic" shape="poly" coords="444,506,411,539,432,539,436,531,443,531,443,537,450,537,452,527,452,498,444,506" href="#">
<area data-key="BedfordPark,ssw" alt="Bedford Park" class="tooltip-basic qbasic" shape="poly" coords="452,527,450,537,450,548,462,548,462,544,493,543,493,527,452,527" href="#">
<area data-key="Burbank,ssw" alt="Burbank" class="tooltip-basic qbasic" shape="poly" coords="450,548,450,565,493,565,493,549,490,549,490,547,493,547,493,543,462,543,462,548,450,548" href="#">
<area data-key="EvergreenPark,ssw" alt="Evergreen Park" class="tooltip-basic qbasic" shape="poly" coords="506,565,506,585,513,585,513,593,526,593,526,585,536,585,536,565,506,565,506,565" href="#">
<area data-key="OakLawn,ssw" alt="Oak Lawn" class="tooltip-basic qbasic" shape="poly" coords="453,565,478,565,478,573,481,573,481,576,505,576,505,606,485,606,485,613,478,613,478,597,451,582,451,576,458,576,458,569,453,569,453,565" href="#">
<area data-key="Hometown,ssw" alt="Hometown" class="tooltip-basic qbasic" shape="poly" coords="478,573,481,573,481,576,506,576,505,565,478,565,478,573" href="#">
<area data-key="Bridgeview,ssw" alt="Bridgeview" class="tooltip-basic qbasic" shape="poly" coords="436,531,436,559,439,559,439,565,436,565,442,572,442,593,451,593,451,576,458,576,458,569,454,569,454,565,450,565,450,537,443,537,443,531,436,531" href="#">
<area data-key="Justice,ssw" alt="Justice" class="tooltip-basic qbasic" shape="poly" coords="417,539,409,548,413,556,416,556,416,559,419,559,419,567,425,567,425,559,431,559,437,566,439,566,439,559,436,559,436,531,432,539,417,539" href="#">
<area data-key="HickoryHills,ssw" alt="Hickory Hills" class="tooltip-basic qbasic" shape="poly" coords="416,559,416,581,432,581,432,584,438,584,438,589,442,589,442,572,431,559,425,559,425,567,419,567,419,559,416,559" href="#">
<area data-key="PalosHills,ssw" alt="Palos Hills" class="tooltip-basic qbasic" shape="poly" coords="413,581,413,588,409,592,409,611,438,616,443,610,443,602,451,599,451,593,442,593,442,589,438,589,438,584,432,584,432,581,416,581,416,581,413,581" href="#">
<area data-key="ChicagoRidge,ssw" alt="Chicago Ridge" class="tooltip-basic qbasic" shape="poly" coords="451,582,451,599,458,595,463,600,468,607,479,607,479,597,451,582" href="#">
<area data-key="Worth,ssw" alt="Worth" class="tooltip-basic qbasic" shape="poly" coords="458,595,443,602,443,610,438,616,463,624,463,600,458,595" href="#">
<area data-key="Alsip,ssw" alt="Alsip" class="tooltip-basic qbasic" shape="poly" coords="463,600,463,624,471,626,471,635,474,635,474,630,477,632,477,635,483,635,499,645,517,646,517,637,511,635,511,631,511,631,519,634,519,620,523,620,523,615,520,615,520,618,514,618,514,615,494,615,494,607,486,607,486,614,479,614,479,607,468,607,463,600" href="#">

<area data-key="CalumetPark,ssw" alt="Calumet Park" class="tooltip-basic qbasic" shape="poly" coords="547,640,544,634,540,633,544,622,545,622,545,623,548,623,548,621,552,621,551,628,566,627,566,635,563,635,563,640,563,640,547,640" href="#">
<area data-key="Phoenix,ssw" alt="Phoenix" class="tooltip-basic qbasic" shape="poly" coords="587,678,571,678,571,683,577,688,577,686,587,686" href="#">
<area data-key="PalosPark,ssw" alt="Palos Park" class="tooltip-basic qbasic" shape="poly" coords="439,619,368,606,367,648,439,648" href="#">
<area data-key="PalosHeights,ssw" alt="Palos Heights" class="tooltip-basic qbasic" shape="poly" coords="438,616,438,646,432,646,432,651,452,651,452,665,465,665,472,650,477,650,477,643,477,642,477,635,477,632,474,630,474,635,471,635,471,626,438,616" href="#">
<area data-key="Crestwood,ssw" alt="Crestwood" class="tooltip-basic qbasic" shape="poly" coords="488,652,488,650,491,650,491,656,506,656,498,648,498,645,494,643,482,635,476,635,476,642,476,643,476,650,476,650,478,652,488,652" href="#">
<area data-key="OrlandPark,ssw" alt="Orland Park" class="tooltip-basic qbasic" shape="poly" coords="388,646,388,694,422,694,422,714,428,714,428,694,453,694,453,651,432,651,432,646,388,646" href="#">
<area data-key="Midlothian,ssw" alt="Midlothian" class="tooltip-basic qbasic" shape="poly" coords="512,663,506,656,491,656,491,650,488,650,488,652,478,652,477,650,472,650,465,665,465,671,492,671,497,684,513,684,513,674,521,674,521,663,512,663" href="#">

<area data-key="Burnham,ssw" alt="Burnham" class="tooltip-basic qbasic" shape="poly" coords="641,668,641,668,641,670,651,670,651,653,619,653,620,670,627,670,632,664,637,664,641,668" href="#">
<area data-key="OrlandHills,ssw" alt="Orland Hills" class="tooltip-basic qbasic" shape="poly" coords="366,646,366,653,355,653,355,666,367,666,367,739,398,739,398,721,416,721,416,694,388,694,388,646,366,646" href="#">
<area data-key="SouthHolland,ssw" alt="South Holland" class="tooltip-basic qbasic" shape="poly" coords="603,716,565,716,565,704,572,704,572,698,567,698,567,689,574,689,574,686,570,681,570,674,585,674,585,679,593,679,593,689,599,689,599,678,614,678,614,693,607,693,607,700,616,700,616,713,603,713,603,716" href="#">
<area data-key="Lansing,ssw" alt="Lansing" class="tooltip-basic qbasic" shape="poly" coords="616,707,616,713,603,713,603,736,621,736,621,747,651,748,651,707,616,707" href="#">
<area data-key="Lynwood,ssw" alt="Lynwood" class="tooltip-basic qbasic" shape="poly" coords="621,747,651,748,651,785,640,785,640,758,634,758,634,767,624,766,624,758,621,758,621,747" href="#">
<area data-key="Markham,ssw" alt="Markham" class="tooltip-basic qbasic" shape="poly" coords="514,675,514,684,497,684,497,692,503,692,509,698,509,707,551,707,554,698,543,698,543,693,522,693,522,687,529,687,529,679,522,679,522,675,514,675,514,675" href="#">
<area data-key="OakForest,ssw" alt="Oak Forest" class="tooltip-basic qbasic" shape="poly" coords="453,665,453,694,479,694,479,705,485,705,485,715,492,715,499,707,509,707,509,698,503,692,497,692,497,684,492,671,465,671,465,665,453,665" href="#">
<area data-key="TinleyPark,ssw" alt="Tinley Park" class="tooltip-basic qbasic" shape="poly" coords="416,694,416,721,398,721,398,739,428,739,428,763,492,763,492,715,485,715,485,705,479,705,479,694,428,694,428,714,422,714,422,694,416,694" href="#">
<area data-key="Thornton,ssw" alt="Thornton" class="tooltip-basic qbasic" shape="poly" coords="576,716,576,735,583,736,583,743,603,743,603,716,576,716" href="#">
<area data-key="Homewood,ssw" alt="Homewood" class="tooltip-basic qbasic" shape="poly" coords="565,716,565,722,533,722,519,743,519,755,525,755,525,739,540,739,537,742,547,742,547,755,568,755,568,742,562,742,562,732,575,732,575,716,565,716" href="#">
<area data-key="HazelCrest,ssw" alt="Hazel Crest" class="tooltip-basic qbasic" shape="poly" coords="516,706,516,734,513,739,513,743,519,743,533,722,537,722,537,706,533,706,516,706" href="#">
<area data-key="EastHazelCrest,ssw" alt="East Hazel Crest" class="tooltip-basic qbasic" shape="poly" coords="551,707,537,707,537,722,565,722,565,716,551,716,551,707" href="#">
<area data-key="Glenwood,ssw" alt="Glenwood" class="tooltip-basic qbasic" shape="poly" coords="567,755,567,743,562,742,562,732,575,732,575,735,583,735,583,743,595,743,595,752,607,752,607,770,584,770,584,750,577,750,577,760,573,760,567,755" href="#">
<area data-key="CountryClubHills,ssw" alt="Country Club Hills" class="tooltip-basic qbasic" shape="poly" coords="499,707,492,715,492,763,513,763,513,739,516,735,517,707,499,707" href="#">
<area data-key="Flossmoor,ssw" alt="Flossmoor" class="tooltip-basic qbasic" shape="poly" coords="513,743,513,763,547,763,547,767,552,762,552,755,547,755,547,742,537,742,540,739,525,739,525,755,519,755,519,743,513,743" href="#">
<area data-key="OlympiaFields,ssw" alt="Olympia Fields" class="tooltip-basic qbasic" shape="poly" coords="513,763,513,784,540,784,540,774,547,767,547,763,513,763" href="#">
<area data-key="Matteson,ssw" alt="Matteson" class="tooltip-basic qbasic" shape="poly" coords="470,763,470,786,456,786,456,820,484,820,484,799,522,799,522,784,513,784,513,763,470,763" href="#">
<area data-key="RichtonPark,ssw" alt="Richton Park" class="tooltip-basic qbasic" shape="poly" coords="522,827,514,827,514,832,509,832,509,816,500,816,500,820,484,820,484,799,522,799,522,827" href="#">
<area data-key="ParkForest,ssw" alt="Park Forest" class="tooltip-basic qbasic" shape="poly" coords="514,832,509,832,509,816,500,816,500,834,496,848,478,848,478,862,503,862,503,852,529,852,529,867,540,869,540,799,553,799,553,796,540,796,540,784,522,784,522,827,514,827,514,832" href="#">
<area data-key="Steger,ssw" alt="Steger" class="tooltip-basic qbasic" shape="poly" coords="595,804,576,813,553,813,553,799,540,799,540,832,580,832,580,821,602,821,602,814,595,804" href="#">
<area data-key="UniversityPark,ssw" alt="University Park" class="tooltip-basic qbasic" shape="poly" coords="540,877,525,877,525,874,519,874,519,864,520,864,519,877,515,877,514,877,502,877,502,852,528,852,528,867,540,869,540,877" href="#">
<area data-key="SouthChicagoHeights,ssw" data-tip="SouthChicagoHeights" alt="South Chicago Heights" class="tooltip-basic qbasic" shape="poly" coords="613,803,630,804,630,811,632,811,635,814,638,813,638,811,651,811,651,822,613,821,613,803" href="#">
<area data-key="Crete,ssw" data-tip="Crete" alt="Crete" class="tooltip-basic qbasic" shape="poly" coords="651,821,651,901,632,901,632,880,612,880,612,902,601,902,601,881,589,881,589,895,564,895,564,882,550,882,550,903,542,903,537,888,540,877,540,832,580,832,580,821,651,821,651,821" href="#">
<!-- End South/Southwest -->
</map>		</div>


	</div> <!--/#content -->
</div> <!-- /#content-wrap -->
<!-- end WordPress main content -->

<script type="text/javascript" src="http://static.uw-mc.org/js/uwmc.map.min.js"></script>
<script type="text/javascript" src="http://static.uw-mc.org/js/jquery.imagemapster.min.js"></script>
<link type="text/css" rel="stylesheet" href="http://static.uw-mc.org/js/jquery.qtip.css" />
<script type="text/javascript" src="http://static.uw-mc.org/js/jquery.qtip.min.js"></script>

<?php
if ( is_page('14893') || $post->post_parent == '14893' ) :
	get_footer( 'eway' );
else :
	get_footer();
endif;
?>




