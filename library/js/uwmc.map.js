// qTip2 - our tooltips. See docs, demos + options: 
jQuery(document).ready(function() {

		var container = jQuery(window);
	
	// This creates the partner community tooltips with content on the map itself
    jQuery('area[rel]').each(function() {
    
        jQuery(this).qtip(
        	{
            	content: {
	            text: 'Loading...',
                ajax: {
                    url: jQuery(this).attr('rel'), // grab the contents of the url in the rel tag and display in a tooltip
                    type: 'post',

                }
            },
            
            show: {
            	/* target: jQuery(this).attr('.mapqtip'), */
                solo: true // Hide other tooltips when open
            },
            
            hide: {
            	effect: true,
            	event: 'click mouseleave', // may not be necessary with target defined above
            	delay: 500,                        
            	effect: function() { jQuery(this).animate({ opacity: 0 }, { duration: 400 }); }          
            },
            
            position: {
            	my: 'right bottom',
	            at: 'center',
	            target: true,
	            effect: false,
	            viewport: container
	        },

            style: {
                classes: 'qtip-uwmc'
            }
        
        });
    });


// This script creates the basic (title) tooltips on the image map itself
		jQuery('area[data-key]').qtip(
		
			{
				content: {
				attr: 'alt' // Use the ALT attribute of the area map for the content
				},
			
				show: {
					event: 'mouseenter',
					solo: true // Hide other tooltips when opened
                },
            
            hide: {
                effect: true,
                event: 'mouseleave',
                delay: 500, 
                effect: function() { jQuery(this).animate({ opacity: 0 }, { duration: 400 }); }                
            },

            position: {
            	my: 'right bottom',
	            at: 'center',
	            target: true,
	            effect: false,
	            viewport: container		
	        },
	        
	        style: {
				classes: 'qtip-basic'
			}
			
		});


// This creates the main tooltips with content in the area list
// Create the tooltips only when document ready

    // We'll target all AREA elements with rel tags (Don't target the map element!!!)
    jQuery('.maptip').each(function() {
    
    	var value = jQuery(this).attr('data-key'),
		
			area = jQuery('area[data-key^="' +value+ '"]');
    
        jQuery(this).qtip({
        
            content: {
               text: 'Loading...',
               ajax: {
                    url: jQuery(this).attr('rel'), // grab the contents of the url in the rel tag and display in a tooltip
                    type: 'post',
               }
            },
            
            show: {
            	target: jQuery(this).attr('.maptip'),
                solo: true // Hide other tooltips when opened
            },
            
            hide: {
            	event: 'mouseleave', // may not be necessary with target defined above
            	delay: 500,
            	fixed: true,               
            	effect: function() { jQuery(this).animate({ opacity: 0 }, { duration: 400 }); }          
            },

            position: {
            	my: 'right bottom',
	            at: 'center',
	            target: area,
	            effect: false,
	            viewport: container
	        },

            style: {
                classes: 'qtip-uwmc'
            }
            
        });
    });
    

// This creates the tooltips on the map for non-impact areas    
    jQuery('.maptip2').each(function() {
	
		var value = jQuery(this).attr('data-key'),
			area = jQuery('area[data-key^="' +value+ '"]');
		
		jQuery(this).qtip(
			{
	
				content: {
				    attr: 'data-key' // Use the ALT attribute of the area map for the content
				},
				
				show: {
					solo: true // Hide other tooltips when opened
				 },
				 
				 position: {
				 	target: area,
				 	my: 'right bottom',
				    at: 'center',
				    viewport: container
				 },
				
				style: {
				    classes: 'qtip-basic'
				}
			});
		});
    
});

jQuery(document).ready(function() {
	
	if(jQuery.fn.qtip.plugins.iOS) { 
		return false; 
	
	jQuery('area[data-key]').qtip(
		
			{
				content: {
				attr: 'alt' // Use the ALT attribute of the area map for the content
				},
			
				show: {
					event: 'mouseenter',
					solo: true // Hide other tooltips when opened
                },
            
            hide: {
                effect: true,
                event: 'mouseleave',
                delay: 500, 
                effect: function() { jQuery(this).animate({ opacity: 0 }, { duration: 400 }); }                
            },

            position: {
            	my: 'right bottom',
	            at: 'center',
	            target: true,
	            effect: false,
	            viewport: container		
	        },
	        
	        style: {
				classes: 'qtip-basic'
			}
			
		});
		
	jQuery('area[rel]').each(function() {
    
        jQuery(this).qtip(
        	{
            	content: {
	            text: 'Loading...',
                ajax: {
                    url: jQuery(this).attr('rel'), // grab the contents of the url in the rel tag and display in a tooltip
                    type: 'post',

                }
            },
            
            show: {
            	/* target: jQuery(this).attr('.mapqtip'), */
                solo: true // Hide other tooltips when open
            },
            
            hide: {
            	effect: true,
            	event: 'click mouseleave', // may not be necessary with target defined above
            	delay: 500,                        
            	effect: function() { jQuery(this).animate({ opacity: 0 }, { duration: 400 }); }          
            },
            
            position: {
            	my: 'center',
	            at: 'center',
	            target: true,
	            effect: false,
	            viewport: window
	        },

            style: {
                classes: 'qtip-uwmc'
            }
        
           });
       });
     }

});
// end qTip2 code

// ImageMapster code. See docs, demos + options: http://www.outsharked.com/imagemapster/
jQuery(document).ready(function() {

	var image =jQuery('.communitymap'), ratio; // our map
	var resizeTime = 0;    // total duration of the resize effect, 0 is instant
	var	resizeDelay = 10;   // time to wait before checking the window size again

	// basic mapster call with options
	image.mapster({
    	mapKey: 'data-key',
    	scaleMap: true,
    	onConfigured: resize,
    	/* singleSelect : true, */
		fill : true,
		fillColor : '7C81B8', // (don't use the '#' symbol here)
		fillOpacity : 1,
		stroke : true,
		strokeColor : 'fe230a', 
		strokeWidth : 2,
		areas: [
/*
These are our Partner Community groupings but these give iOS a big headache so commented out for now.
	{
		key: 'DesPlaines',
		includeKeys: 'MountProspect,ProspectHeights,Rosemont,Wheeling'
	},
	{
		key: 'MountProspect',
		includeKeys: 'DesPlaines,ProspectHeights,Rosemont,Wheeling'
	},
	{
		key: 'ProspectHeights',
		includeKeys: 'MountProspect,DesPlaines,Rosemont,Wheeling'
	},
	{
		key: 'Rosemont',
		includeKeys: 'MountProspect,ProspectHeights,DesPlaines,Wheeling'
	},
	{
		key: 'Wheeling',
		includeKeys: 'MountProspect,ProspectHeights,DesPlaines,Rosemont'
	},
	{
		key: 'Palatine',
		includeKeys: 'RollingMeadows'
	},
	{
		key: 'RollingMeadows',
		includeKeys: 'Palatine'
	},
	{
		key: 'HanoverPark',
		includeKeys: 'Streamwood'
	},
	{
		key: 'Streamwood',
		includeKeys: 'HanoverPark'
	},
*/
	// our MUW regions.
    {
        key: 'north-shore',
        fillColor: 'dd4934',
        fillOpacity : 1,
        strokeColor : 'dd4934',
		strokeWidth : 2
    },
    {
    	key: 'northwest',
        fillColor: '8d192b',
        fillOpacity : 1,
        strokeColor : '8d192b',
		strokeWidth : 2
    },
    {
    	key: 'dwc',
        fillColor: 'ffc87d',
        fillOpacity : 1,
        strokeColor : 'ffc87d',
		strokeWidth : 2
    },
    {
    	key: 'coc',
        fillColor: '6699cc',
        fillOpacity : 1,
        strokeColor : '6699cc',
		strokeWidth : 2
    }, 
    {
    	key: 'ssw',
        fillColor: '074b8f',
        fillOpacity : 1,
        strokeColor : '074b8f',
		strokeWidth : 2
    },
    // all of our Partner Communities
    {
    	key: 'partners',
        fillColor: 'F57814',
        fillOpacity : 1,
        strokeColor : 'ff9600',
		strokeWidth : 4,
		strokeOpacity: .69
    }
    ]
	});

// higlights our groupings (above) on click
jQuery('.groupselect').bind('click', function(e) {

    var groupId = jQuery(this).attr('data-key'),
    	isSelected = image.mapster('get',groupId),
        neKeys;
    
    e.preventDefault();        
    switch(groupId) {
    
        default:    
            image.mapster('set', !isSelected , groupId);
            break;
    }
    
});

// Highlight group when area list item is hovered (Des Plaines River Corridor)
jQuery('.dprc').bind('hover', function(e) {

    var groupId = jQuery(this).attr('data-key'),
        isSelected = image.mapster('get',groupId),
        neKeys;
    
    e.preventDefault();
    
    switch(groupId) {
        default:    
            image.mapster('set', !isSelected , groupId);
            break;
     }
});

// Highlight group when area list item is hovered (Highland Park/Highwood)
jQuery('.hph').bind('hover', function(e) {

    var groupId = jQuery(this).attr('data-key'),
        isSelected = image.mapster('get',groupId),
        neKeys;
    
    e.preventDefault();
    
    switch(groupId) {
        default:    
            image.mapster('set', !isSelected , groupId);
            break;
     }
});

// Highlight group when area list item is hovered (Palatine/Rolling Meadows)
jQuery('.prm').bind('hover', function(e) {

    var groupId = jQuery(this).attr('data-key'),
        isSelected = image.mapster('get',groupId),
        neKeys;
    
    e.preventDefault();
    
    switch(groupId) {
        default:    
            image.mapster('set', !isSelected , groupId);
            break;
     }
});

// Highlight group when area list item is hovered (Hanover Park/Streamwood)
jQuery('.hps').bind('hover', function(e) {

    var groupId = jQuery(this).attr('data-key'),
        isSelected = image.mapster('get',groupId),
        neKeys;
    
    e.preventDefault();
    
    switch(groupId) {
        default:    
            image.mapster('set', !isSelected , groupId);
            break;
     }
});

// Highlight map when area list item is hovered (need the 'a' element here to distinguish from areas)
jQuery('a.maptip, a.maptip2').bind('hover', function(e) {

    var groupId = jQuery(this).attr('data-key'),
        isSelected = image.mapster('get',groupId),
        neKeys;
    
    e.preventDefault();
    
    switch(groupId) {
        default:    
            image.mapster('set', !isSelected , groupId);
            break;
     }
});


// Resize the map to fit within the boundaries provided. This is still a little buggy.
function resize() {

	var resizeTime = 0;    // total duration of the resize effect, 0 is instant
	var	resizeDelay = 10;   // time to wait before checking the window size again
	var div =  jQuery('#mapresize');
	var newWidth = div.width();
	var image =jQuery('.communitymap'), ratio; // our map
    
   /* Could not get proper responsive action without this commented out.
   
if (imgWidth/maxWidth>imgHeight/maxHeight) {
       newWidth = maxWidth;
    } else {
       newHeight = maxHeight;
    }
*/
    image.mapster('resize',newWidth,0,resizeTime);   
}

// Track window resizing events, but only actually call the map resize when the
// window isn't being resized any more

function onWindowResize() {

    var win = jQuery(window),
        curWidth = win.width(),
        curHeight = win.height(),
        checking=false;
        var resizeTime = 0;    // total duration of the resize effect, 0 is instant
        var	resizeDelay = 10;   // time to wait before checking the window size again
        
    if (checking) {
        return;
    }
    
    checking = true;
    
    window.setTimeout(function() {
    
    var newWidth = win.width(),
        newHeight = win.height();
        
    if (newWidth === curWidth &&
        newHeight === curHeight) {
        resize(newWidth,newHeight);
    }
    
    checking=false;
    
    },resizeDelay );
}

jQuery(window).bind('resize',onWindowResize);

}); // end ImageMapster code

// Hide our area labels when on the map itself. 
jQuery(document).ready(function() {

	var map = jQuery('.communitymap'),
		area = jQuery('#uwmc_map'),
		overlay = jQuery('.map-overlay');
		
area.mouseover(function() {
		overlay.fadeOut(200);
	});
		
map.mouseover(function() {
		overlay.fadeOut(200);
	});
map.mouseout(function(e) {
            overlay.delay(2000).fadeIn(200);
    });
    
});