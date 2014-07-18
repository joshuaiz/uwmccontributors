/*

***CHECK LINKS AFTER MIGRATING***

Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it, so be sure to research and find the one
    that works for you best.
    */
    
    /* getting viewport width */
    var responsive_viewport = $(window).width();
    
    /* if is below 481px */
    if (responsive_viewport < 481) {
    	jQuery('a.ss-share-link').text('Share');
    } /* end smallest screen */
    
    /* if is larger than 481px */
    if (responsive_viewport > 481) {
        
    } /* end larger than 481px */
    
    if (responsive_viewport <= 767) {
    	
    
    }
    
    
    $(this).val("changed");
    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {
 
        /* load gravatars */
        $('.comment img[data-gravatar]').each(function(){
            $(this).attr('src',$(this).attr('data-gravatar'));
        });
        
    }
    
    /*
if (responsive_viewport <= 899) {
    
    	jQuery('#searchform #searchsubmit').prepend('<span class="icon-search"></span>');
    
    }
*/
    
    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {
        
    }
    

	
	$('.giver').hover(function() {
        $(this).next('.giveinfo').slideToggle('300');
    });
	
 
}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(a){function l(){c.setAttribute("content",f),g=!0}function m(){c.setAttribute("content",e),g=!1}function n(b){k=b.accelerationIncludingGravity,h=Math.abs(k.x),i=Math.abs(k.y),j=Math.abs(k.z),!a.orientation&&(h>7||(j>6&&8>i||8>j&&i>6)&&h>5)?g&&m():g||l()}if(/iPhone|iPad|iPod/.test(navigator.platform)&&navigator.userAgent.indexOf("AppleWebKit")>-1){var b=a.document;if(b.querySelector){var h,i,j,k,c=b.querySelector("meta[name=viewport]"),d=c&&c.getAttribute("content"),e=d+",maximum-scale=1",f=d+",maximum-scale=10",g=!0;c&&(a.addEventListener("orientationchange",l,!1),a.addEventListener("devicemotion",n,!1))}}})(this);


/**
 * <details> crossbrowser support
 *
 * This jQuery based polyfill makes <details>/<summary> ready for use
 * in most browsers.
 * http://dev.w3.org/html5/spec/Overview.html#the-details-element
 * 
 * @author Manuel Bieh
 * @url http://www.manuel-bieh.de/
 * @version 0.9
 * @license http://www.gnu.org/licenses/lgpl-3.0.txt LGPL
 *
 * Date $LastChangedDate: 2011-08-03 08:43:30 +0200 (Mi, 03 Aug 2011) $
 *
 */
jQuery(function(a){(function(){var b=this;this.hideDetailChildren=function(c){var d=c instanceof jQuery?c[0].childNodes:c.childNodes,e=d.length;if(a(c).attr("open",!1),1==a.browser.safari)for(var f=0;e>f;f++)if(3==d[f].nodeType&&""!=d[f].textContent){var g=a("<span />");g.text(d[f].textContent).hide(),a(d[f]).after(g),d[f].textContent="",e++}a.each(d,function(d,e){if(1==a(e)[0].nodeType&&e==a(e).parent().find("> summary:first-of-type")[0])1!=a(e).data("processed")&&(a(e).css({display:"block",cursor:"pointer"}).data("processed",!0).addClass("detailHidden").bind("click",function(){b.toggleDetailChildren(a(this))}),a(c).prepend(a(e)));else if(3!=a(e)[0].nodeType||e.isElementContentWhitespace||0!=!!a.browser.safari){if(0==a(c).find("> summary").length){var g=a("<summary />").text("Details").css({display:"block",cursor:"pointer"}).data("processed",!0).addClass("detailHidden").bind("click",function(){b.toggleDetailChildren(a(this))});a(c).prepend(g)}}else{var f=a("<span />");f.text(e.textContent).hide(),a(e).after(f),e.textContent=""}a(c).find("> :visible:not(summary:first-child)").hide()})},this.showDetailChildren=function(b){a(b).attr("open",!0),a.each(a(b).find("> *"),function(b,c){a(c).show()})},this.toggleDetailChildren=function(a){a.hasClass("detailHidden")?(a.removeClass("detailHidden"),b.showDetailChildren(a.parents("details")[0])):(a.addClass("detailHidden"),b.hideDetailChildren(a.parents("details")[0]))};var c=function(a){var c,d,e,b=a.createElement("details");return"open"in b?(d=a.body||function(){var b=a.documentElement;return c=!0,b.insertBefore(a.createElement("body"),b.firstElementChild||b.firstChild)}(),b.innerHTML="<summary>a</summary>b",b.style.display="block",d.appendChild(b),e=b.offsetHeight,b.open=!0,e=e!=b.offsetHeight,d.removeChild(b),c&&d.parentNode.removeChild(d),e):!1}(document);if(0==c){if(0!==a("details").length){var d=a("<style />").text('summary {-webkit-text-size-adjust: none;}  details > summary:first-child:before {content: "\u25bc"; font-size:.9em;padding-right:6px;font-family:"Courier New";} details > summary.detailHidden:first-child:before {content: "\u25ba";font-size:.9em;padding-right:6px;font-family:"Courier New";}');a("head").append(d)}a.each(a("details"),function(a,c){b.hideDetailChildren(c)})}})()});

/*! Respond.js v1.1.0: min/max-width media query polyfill. (c) Scott Jehl. MIT/GPLv2 Lic. j.mp/respondjs  */
/* Adds @media queries support for IE8 and below. Looks like a lot of fun, doesn't it? */
(function(a){"use strict";function x(){u(!0)}var b={};if(a.respond=b,b.update=function(){},b.mediaQueriesSupported=a.matchMedia&&a.matchMedia("only all").matches,!b.mediaQueriesSupported){var q,r,t,c=a.document,d=c.documentElement,e=[],f=[],g=[],h={},i=30,j=c.getElementsByTagName("head")[0]||d,k=c.getElementsByTagName("base")[0],l=j.getElementsByTagName("link"),m=[],n=function(){for(var b=0;l.length>b;b++){var c=l[b],d=c.href,e=c.media,f=c.rel&&"stylesheet"===c.rel.toLowerCase();d&&f&&!h[d]&&(c.styleSheet&&c.styleSheet.rawCssText?(p(c.styleSheet.rawCssText,d,e),h[d]=!0):(!/^([a-zA-Z:]*\/\/)/.test(d)&&!k||d.replace(RegExp.$1,"").split("/")[0]===a.location.host)&&m.push({href:d,media:e}))}o()},o=function(){if(m.length){var a=m.shift();v(a.href,function(b){p(b,a.href,a.media),h[a.href]=!0,setTimeout(function(){o()},0)})}},p=function(a,b,c){var d=a.match(/@media[^\{]+\{([^\{\}]*\{[^\}\{]*\})+/gi),g=d&&d.length||0;b=b.substring(0,b.lastIndexOf("/"));var h=function(a){return a.replace(/(url\()['"]?([^\/\)'"][^:\)'"]+)['"]?(\))/g,"$1"+b+"$2$3")},i=!g&&c;b.length&&(b+="/"),i&&(g=1);for(var j=0;g>j;j++){var k,l,m,n;i?(k=c,f.push(h(a))):(k=d[j].match(/@media *([^\{]+)\{([\S\s]+?)$/)&&RegExp.$1,f.push(RegExp.$2&&h(RegExp.$2))),m=k.split(","),n=m.length;for(var o=0;n>o;o++)l=m[o],e.push({media:l.split("(")[0].match(/(only\s+)?([a-zA-Z]+)\s?/)&&RegExp.$2||"all",rules:f.length-1,hasquery:l.indexOf("(")>-1,minw:l.match(/\(min\-width:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/)&&parseFloat(RegExp.$1)+(RegExp.$2||""),maxw:l.match(/\(max\-width:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/)&&parseFloat(RegExp.$1)+(RegExp.$2||"")})}u()},s=function(){var a,b=c.createElement("div"),e=c.body,f=!1;return b.style.cssText="position:absolute;font-size:1em;width:1em",e||(e=f=c.createElement("body"),e.style.background="none"),e.appendChild(b),d.insertBefore(e,d.firstChild),a=b.offsetWidth,f?d.removeChild(e):e.removeChild(b),a=t=parseFloat(a)},u=function(a){var b="clientWidth",h=d[b],k="CSS1Compat"===c.compatMode&&h||c.body[b]||h,m={},n=l[l.length-1],o=(new Date).getTime();if(a&&q&&i>o-q)return clearTimeout(r),r=setTimeout(u,i),void 0;q=o;for(var p in e)if(e.hasOwnProperty(p)){var v=e[p],w=v.minw,x=v.maxw,y=null===w,z=null===x,A="em";w&&(w=parseFloat(w)*(w.indexOf(A)>-1?t||s():1)),x&&(x=parseFloat(x)*(x.indexOf(A)>-1?t||s():1)),v.hasquery&&(y&&z||!(y||k>=w)||!(z||x>=k))||(m[v.media]||(m[v.media]=[]),m[v.media].push(f[v.rules]))}for(var B in g)g.hasOwnProperty(B)&&g[B]&&g[B].parentNode===j&&j.removeChild(g[B]);for(var C in m)if(m.hasOwnProperty(C)){var D=c.createElement("style"),E=m[C].join("\n");D.type="text/css",D.media=C,j.insertBefore(D,n.nextSibling),D.styleSheet?D.styleSheet.cssText=E:D.appendChild(c.createTextNode(E)),g.push(D)}},v=function(a,b){var c=w();c&&(c.open("GET",a,!0),c.onreadystatechange=function(){4!==c.readyState||200!==c.status&&304!==c.status||b(c.responseText)},4!==c.readyState&&c.send(null))},w=function(){var b=!1;try{b=new a.XMLHttpRequest}catch(c){b=new a.ActiveXObject("Microsoft.XMLHTTP")}return function(){return b}}();n(),b.update=n,a.addEventListener?a.addEventListener("resize",x,!1):a.attachEvent&&a.attachEvent("onresize",x)}})(this);

// Adds user agent classes to the document. See here: http://cssuseragent.org
var cssua=function(i,l){var m=/\s*([\-\w ]+)[\s\/]([\d_]+\b([\-\._\/]\w+)*)/,n=/([\w\-\.]+[\s\/][v]?[\d_]+\b([\-\._\/]\w+)*)/g,o=/rv[:](\d+(\.\w+)*).*?\bgecko[\/]\w+/,p=/\bblackberry\w*[\s\/]+(\d+(\.\w+)*)/,q=/\bsilk-accelerated=true\b/,r=/\bfluidapp\b/,s=/(\bwindows\b|\bmacintosh\b|\blinux\b|\bunix\b)/,t=/(\bandroid\b|\bipad\b|\bipod\b|\bmeego|\bblackberry|\brim tablet os\b|\bwebos\b|\bwindows ce\b|\bwindows phone os\b|\bwindows ce\b|\bpalm|\bsymbian|\bj2me\b|\bdocomo\b|\bpda\b|\bchtml\b|\bmidp\b|\bcldc\b|\w*?mobile\w*?|\w*?phone\w*?)/,
u=/(\bxbox\b|\bplaystation\b|\bnintendo\s+\w+)/,d={parse:function(c){var a={},c=(""+c).toLowerCase();if(!c)return a;for(var b,g,e=c.split(/[()]/),f=0,d=e.length;f<d;f++)if(f%2){var j=e[f].split(";");for(b=0,g=j.length;b<g;b++)if(m.exec(j[b])){var h=RegExp.$1.split(" ").join("_"),i=RegExp.$2;if(!a[h]||parseFloat(a[h])<parseFloat(i))a[h]=i}}else if(j=e[f].match(n))for(b=0,g=j.length;b<g;b++)h=j[b].split(/[\/\s]+/),h.length&&"mozilla"!==h[0]&&(a[h[0].split(" ").join("_")]=h.slice(1).join("-"));if(t.exec(c)){if(a.mobile=
RegExp.$1,p.exec(c))a.blackberry=RegExp.$1}else if(s.exec(c))a.desktop=RegExp.$1;else if(u.exec(c)&&(a.game=RegExp.$1,b=a.game.split(" ").join("_"),a.version&&!a[b]))a[b]=a.version;if(a.intel_mac_os_x)a.mac_os_x=a.intel_mac_os_x.split("_").join("."),delete a.intel_mac_os_x;else if(a.cpu_iphone_os)a.ios=a.cpu_iphone_os.split("_").join("."),delete a.cpu_iphone_os;else if(a.cpu_os)a.ios=a.cpu_os.split("_").join("."),delete a.cpu_os;else if("iphone"===a.mobile&&!a.ios)a.ios="1";if(a.opera&&a.version)a.opera=
a.version;else if(q.exec(c))a.silk_accelerated=!0;else if(r.exec(c))a.fluidapp=a.version;if(a.applewebkit){a.webkit=a.applewebkit;delete a.applewebkit;if(a.opr)a.opera=a.opr,delete a.opr,delete a.chrome;if(a.safari)a.chrome||a.crios||a.opera||a.silk||a.fluidapp||a.phantomjs||a.mobile&&!a.ios?delete a.safari:a.safari=a.version&&!a.rim_tablet_os?a.version:{419:"2.0.4",417:"2.0.3",416:"2.0.2",412:"2.0",312:"1.3",125:"1.2",85:"1.0"}[parseInt(a.safari,10)]||a.safari}else if(a.msie){if(!a.opera)a.ie=a.msie;
delete a.msie}else if(o.exec(c))a.gecko=RegExp.$1;a.version&&delete a.version;return a},format:function(c){var a="",b;for(b in c)if(b&&c.hasOwnProperty(b)){var g=b,e=c[b],g=g.split(".").join("-"),f=" ua-"+g;if("string"===typeof e){for(var e=e.split(" ").join("_").split(".").join("-"),d=e.indexOf("-");0<d;)f+=" ua-"+g+"-"+e.substring(0,d),d=e.indexOf("-",d+1);f+=" ua-"+g+"-"+e}a+=f}return a},encode:function(c){var a="",b;for(b in c)b&&c.hasOwnProperty(b)&&(a&&(a+="&"),a+=encodeURIComponent(b)+"="+
encodeURIComponent(c[b]));return a}};d.userAgent=d.ua=d.parse(l);var k=d.format(d.ua)+" js";i.className=i.className?i.className.replace(/\bno-js\b/g,"")+k:k.substr(1);return d}(document.documentElement,navigator.userAgent);


// Mobile flyout nav
jQuery(function(){
	jQuery(".nav-button").click(function () {
		jQuery(".nav-button, .primary-nav").toggleClass("open");
	});
});


// Add btn class to support Bootstrap buttons
jQuery(function(){
	jQuery('button, input[type="submit"]').not('#constant-contact-submit, .flatbutton, #sub-page-search #searchsubmit').addClass('btn');
});

// If sidebar is active, add class
jQuery(function(){
	if (jQuery('#sidebar1').length > 0)
		{ 
			jQuery('body').addClass('sidebar1');
		}
});

// Add class to sub-sub-menu
jQuery(function(){
	jQuery("#menu-main ul.sub-menu > li > ul, #menu-test ul.sub-menu > li > ul ").addClass("sub-sub-menu clearfix");
});

// Show/Hide sub-sub-menu items on hover
jQuery(function(){
	var	submenu = jQuery('#menu-main ul.sub-menu li, #menu-test ul.sub-menu li');
		
	submenu.hover( 
		function() {
			jQuery(this).find('ul:first li').fadeToggle(200);
		});
});

// Change 'Comment' to 'Reply' in the comment form when submitting comment replies
jQuery(function(){
	var title =	jQuery('#comment-form-title'),
		button = jQuery('#commentform button'),
		textarea = jQuery('#commentform textarea');
		
	jQuery('.comment-reply-link').click( function() {
	
		jQuery('h3#comment-form-title').replaceWith('<h3 id="comment-form-title" class="h2">Leave A Reply&nbsp&nbsp;<span class="icon-bubbles small"></span></h3>');
		button.text('Post A Reply').prepend('<span class="icon-bubbles small"></span>');
		textarea.attr('placeholder', 'Add your reply...');
		
		if(jQuery('.respond-form input#author').val() == '') { // Focus in Name input field
			jQuery('.respond-form input#author').focus();
  }
	}),
	
jQuery('a#cancel-comment-reply-link').click( function() {
		jQuery('h3#comment-form-title').replaceWith('<h3 id="comment-form-title" class="h2">Leave a Comment&nbsp&nbsp;<span class="icon-bubbles-2 small"></span></h3>');
		button.text('Post A Comment').prepend('<span class="icon-bubbles-2 small"></span>');
		textarea.attr('placeholder', 'Add your comment...');
	});
});


// Add icon to widget title (html is stripped away by WP)
jQuery(function(){
	jQuery('<span class="icon-unitedwaycircle"></span>').prependTo('#execphp-2 > h4');
});

// Adds reply icon to comments with depth greater than 1
jQuery(function(){
	jQuery('<span class="icon-undo"></span>').prependTo('li:not(.depth-1) .comment_content > p');
});

// Change our twitter profile image - change this when site goes live!
jQuery(function(){
	var oldSrc = 'http://a0.twimg.com/profile_images/2409583835/moq1vr3i9yu3wfha7h34_normal.jpeg';
	var newSrc = 'http://www.uw-mc.org/wp-content/themes/uwchilipepper/library/images/twitter_image.png';
	jQuery('img[src="' + oldSrc + '"]').attr('src', newSrc);
});

// Add width adjustment to older versions of Chrome and Safai. CSS in _768up.scss
jQuery(function(){
	var classes = jQuery('.ua-chrome-14, .ua-chrome-15, .ua-chrome-16, .ua-chrome-17, .ua-chrome-18, .ua-chrome-19, .ua-chrome-20, .safari');
	
	if(classes.length > 0)
	{
		jQuery('.actions').addClass('golden-adj');
	}
});

// TEMPORARY: Add 'See All' link to Jobs widget; transfer to jobs.uw-mc.org
jQuery(function(){
jQuery('<p><a href="http://www.uw-mc.org/category/careers/"><button class="btn btn-primary">See All</button></a></p>').appendTo('#custom-recent-posts-3');
});

// Add sub-title to Issue Area page
jQuery(function(){
var education = jQuery('.education h1.page-title');
education.addClass('trade').append(' <span class="trade18">DESTINATION GRADUATION.</span>');
});

// Add sub-title to Issue Area page
jQuery(function(){
var income = jQuery('.income h1.page-title');
income.addClass('trade').append(' <span class="trade18">EARN IT. SAVE IT. GROW IT.</span>');
});

// Add sub-title to Issue Area page
jQuery(function(){
var health = jQuery('.health h1.page-title');
health.addClass('trade').append(' <span class="trade18">HEALTHY FOR LIFE.</span>');
});

// Add sub-title to Issue Area page
jQuery(function(){
var health = jQuery('.safetynet h1.page-title');
health.addClass('trade').append(' <span class="trade18">FROM CRISIS TO STABILITY.</span>');
});

// Add sub-title to Issue Area page
jQuery(function(){
var ts = jQuery('.tocqueville h1.page-title');
ts.after(' <img class="tslogo" src="http://static.uw-mc.org/wp-content/themes/uwchilipepper/library/images/ts_logo.png">');
});



// retina.js (includes data-at-2x code)
(function() {
  var root = (typeof exports == 'undefined' ? window : exports);

  var config = {
    // Ensure Content-Type is an image before trying to load @2x image
    // https://github.com/imulus/retinajs/pull/45)
    check_mime_type: true,

    // Resize high-resolution images to original image's pixel dimensions
    // https://github.com/imulus/retinajs/issues/8
    force_original_dimensions: false
 };

  root.Retina = Retina;

  function Retina() {}

  Retina.configure = function(options) {
    if (options == null) options = {};
    for (var prop in options) config[prop] = options[prop];
  };

  Retina.init = function(context) {
    if (context == null) context = root;

    var existing_onload = context.onload || new Function;

    context.onload = function() {
      var images = document.getElementsByTagName("img"), retinaImages = [], i, image;
      for (i = 0; i < images.length; i++) {
        image = images[i];
        retinaImages.push(new RetinaImage(image));
      }
      existing_onload();
    }
  };

  Retina.isRetina = function(){
    var mediaQuery = "(-webkit-min-device-pixel-ratio: 1.5),\
                      (min--moz-device-pixel-ratio: 1.5),\
                      (-o-min-device-pixel-ratio: 3/2),\
                      (min-resolution: 1.5dppx)";

    if (root.devicePixelRatio > 1)
      return true;

    if (root.matchMedia && root.matchMedia(mediaQuery).matches)
      return true;

    return false;
  };


  root.RetinaImagePath = RetinaImagePath;

  function RetinaImagePath(path) {
    this.path = path;
    this.at_2x_path = path.replace(/\.\w+$/, function(match) { return "@2x" + match; });
  }

  RetinaImagePath.confirmed_paths = [];

  RetinaImagePath.prototype.is_external = function() {
    return !!(this.path.match(/^https?\:/i) && !this.path.match('//' + document.domain) )
  }

  RetinaImagePath.prototype.check_2x_variant = function(callback) {
    var http, that = this;
    if (this.is_external()) {
      return callback(false);
    } else if (this.at_2x_path in RetinaImagePath.confirmed_paths) {
      return callback(true);
    } else {
      http = new XMLHttpRequest;
      http.open('HEAD', this.at_2x_path);
      http.onreadystatechange = function() {
        if (http.readyState != 4) {
          return callback(false);
        }

        if (http.status >= 200 && http.status <= 399) {
          if (config.check_mime_type) {
            var type = http.getResponseHeader('Content-Type');
            if (type == null || !type.match(/^image/i)) {
              return callback(false);
            }
          }

          RetinaImagePath.confirmed_paths.push(that.at_2x_path);
          return callback(true);
        } else {
          return callback(false);
        }
      }
      http.send();
    }
  }



  function RetinaImage(el) {
    this.el = el;
    this.path = new RetinaImagePath(this.el.getAttribute('src'));
    var that = this;
    this.path.check_2x_variant(function(hasVariant) {
      if (hasVariant) that.swap();
    });
  }

  root.RetinaImage = RetinaImage;

  RetinaImage.prototype.swap = function(path) {
    if (typeof path == 'undefined') path = this.path.at_2x_path;

    var that = this;
    function load() {
      if (! that.el.complete) {
        setTimeout(load, 5);
      } else {
        if (config.force_original_dimensions) {
          that.el.setAttribute('width', that.el.offsetWidth);
          that.el.setAttribute('height', that.el.offsetHeight);
        }

        that.el.setAttribute('src', path);
      }
    }
    load();
  }




  if (Retina.isRetina()) {
    Retina.init(root);
  }

})();