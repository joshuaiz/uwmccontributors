/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/// IE8 ployfill for GetComputed Style (for Responsive Script below)
window.getComputedStyle || (window.getComputedStyle = function(e, t) {
    this.el = e;
    this.getPropertyValue = function(t) {
        var n = /(\-([a-z]){1})/g;
        t == "float" && (t = "styleFloat");
        n.test(t) && (t = t.replace(n, function() {
            return arguments[2].toUpperCase();
        }));
        return e.currentStyle[t] ? e.currentStyle[t] : null;
    };
    return this;
});

jQuery(document).ready(function(e) {
    var t = e(window).width();
    t < 481 && jQuery("a.ss-share-link").text("Share");
    t > 481;
    t <= 767;
    e(this).val("changed");
    t >= 768 && e(".comment img[data-gravatar]").each(function() {
        e(this).attr("src", e(this).attr("data-gravatar"));
    });
    t > 1030;
});

(function(e) {
    function t() {
        f.setAttribute("content", h), p = !0;
    }
    function n() {
        f.setAttribute("content", c), p = !1;
    }
    function r(r) {
        a = r.accelerationIncludingGravity, s = Math.abs(a.x), o = Math.abs(a.y), u = Math.abs(a.z), !e.orientation && (s > 7 || (u > 6 && 8 > o || 8 > u && o > 6) && s > 5) ? p && n() : p || t();
    }
    if (/iPhone|iPad|iPod/.test(navigator.platform) && navigator.userAgent.indexOf("AppleWebKit") > -1) {
        var i = e.document;
        if (i.querySelector) {
            var s, o, u, a, f = i.querySelector("meta[name=viewport]"), l = f && f.getAttribute("content"), c = l + ",maximum-scale=1", h = l + ",maximum-scale=10", p = !0;
            f && (e.addEventListener("orientationchange", t, !1), e.addEventListener("devicemotion", r, !1));
        }
    }
})(this);

jQuery(function(e) {
    (function() {
        var t = this;
        this.hideDetailChildren = function(n) {
            var r = n instanceof jQuery ? n[0].childNodes : n.childNodes, i = r.length;
            if (e(n).attr("open", !1), 1 == e.browser.safari) for (var s = 0; i > s; s++) if (3 == r[s].nodeType && "" != r[s].textContent) {
                var o = e("<span />");
                o.text(r[s].textContent).hide(), e(r[s]).after(o), r[s].textContent = "", i++;
            }
            e.each(r, function(r, i) {
                if (1 == e(i)[0].nodeType && i == e(i).parent().find("> summary:first-of-type")[0]) 1 != e(i).data("processed") && (e(i).css({
                    display: "block",
                    cursor: "pointer"
                }).data("processed", !0).addClass("detailHidden").bind("click", function() {
                    t.toggleDetailChildren(e(this));
                }), e(n).prepend(e(i))); else if (3 != e(i)[0].nodeType || i.isElementContentWhitespace || 0 != !!e.browser.safari) {
                    if (0 == e(n).find("> summary").length) {
                        var s = e("<summary />").text("Details").css({
                            display: "block",
                            cursor: "pointer"
                        }).data("processed", !0).addClass("detailHidden").bind("click", function() {
                            t.toggleDetailChildren(e(this));
                        });
                        e(n).prepend(s);
                    }
                } else {
                    var o = e("<span />");
                    o.text(i.textContent).hide(), e(i).after(o), i.textContent = "";
                }
                e(n).find("> :visible:not(summary:first-child)").hide();
            });
        }, this.showDetailChildren = function(t) {
            e(t).attr("open", !0), e.each(e(t).find("> *"), function(t, n) {
                e(n).show();
            });
        }, this.toggleDetailChildren = function(e) {
            e.hasClass("detailHidden") ? (e.removeClass("detailHidden"), t.showDetailChildren(e.parents("details")[0])) : (e.addClass("detailHidden"), t.hideDetailChildren(e.parents("details")[0]));
        };
        var n = function(e) {
            var t, n, r, i = e.createElement("details");
            return "open" in i ? (n = e.body || function() {
                var n = e.documentElement;
                return t = !0, n.insertBefore(e.createElement("body"), n.firstElementChild || n.firstChild);
            }(), i.innerHTML = "<summary>a</summary>b", i.style.display = "block", n.appendChild(i), r = i.offsetHeight, i.open = !0, r = r != i.offsetHeight, n.removeChild(i), t && n.parentNode.removeChild(n), r) : !1;
        }(document);
        if (0 == n) {
            if (0 !== e("details").length) {
                var r = e("<style />").text('summary {-webkit-text-size-adjust: none;}  details > summary:first-child:before {content: "▼"; font-size:.9em;padding-right:6px;font-family:"Courier New";} details > summary.detailHidden:first-child:before {content: "►";font-size:.9em;padding-right:6px;font-family:"Courier New";}');
                e("head").append(r);
            }
            e.each(e("details"), function(e, n) {
                t.hideDetailChildren(n);
            });
        }
    })();
});

(function(e) {
    "use strict";
    function t() {
        E(!0);
    }
    var n = {};
    if (e.respond = n, n.update = function() {}, n.mediaQueriesSupported = e.matchMedia && e.matchMedia("only all").matches, !n.mediaQueriesSupported) {
        var r, i, s, o = e.document, u = o.documentElement, a = [], f = [], l = [], c = {}, h = 30, p = o.getElementsByTagName("head")[0] || u, d = o.getElementsByTagName("base")[0], v = p.getElementsByTagName("link"), m = [], g = function() {
            for (var t = 0; v.length > t; t++) {
                var n = v[t], r = n.href, i = n.media, s = n.rel && "stylesheet" === n.rel.toLowerCase();
                r && s && !c[r] && (n.styleSheet && n.styleSheet.rawCssText ? (b(n.styleSheet.rawCssText, r, i), c[r] = !0) : (!/^([a-zA-Z:]*\/\/)/.test(r) && !d || r.replace(RegExp.$1, "").split("/")[0] === e.location.host) && m.push({
                    href: r,
                    media: i
                }));
            }
            y();
        }, y = function() {
            if (m.length) {
                var e = m.shift();
                S(e.href, function(t) {
                    b(t, e.href, e.media), c[e.href] = !0, setTimeout(function() {
                        y();
                    }, 0);
                });
            }
        }, b = function(e, t, n) {
            var r = e.match(/@media[^\{]+\{([^\{\}]*\{[^\}\{]*\})+/gi), i = r && r.length || 0;
            t = t.substring(0, t.lastIndexOf("/"));
            var s = function(e) {
                return e.replace(/(url\()['"]?([^\/\)'"][^:\)'"]+)['"]?(\))/g, "$1" + t + "$2$3");
            }, o = !i && n;
            t.length && (t += "/"), o && (i = 1);
            for (var u = 0; i > u; u++) {
                var l, c, h, p;
                o ? (l = n, f.push(s(e))) : (l = r[u].match(/@media *([^\{]+)\{([\S\s]+?)$/) && RegExp.$1, f.push(RegExp.$2 && s(RegExp.$2))), h = l.split(","), p = h.length;
                for (var d = 0; p > d; d++) c = h[d], a.push({
                    media: c.split("(")[0].match(/(only\s+)?([a-zA-Z]+)\s?/) && RegExp.$2 || "all",
                    rules: f.length - 1,
                    hasquery: c.indexOf("(") > -1,
                    minw: c.match(/\(min\-width:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/) && parseFloat(RegExp.$1) + (RegExp.$2 || ""),
                    maxw: c.match(/\(max\-width:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/) && parseFloat(RegExp.$1) + (RegExp.$2 || "")
                });
            }
            E();
        }, w = function() {
            var e, t = o.createElement("div"), n = o.body, r = !1;
            return t.style.cssText = "position:absolute;font-size:1em;width:1em", n || (n = r = o.createElement("body"), n.style.background = "none"), n.appendChild(t), u.insertBefore(n, u.firstChild), e = t.offsetWidth, r ? u.removeChild(n) : n.removeChild(t), e = s = parseFloat(e);
        }, E = function(e) {
            var t = "clientWidth", n = u[t], c = "CSS1Compat" === o.compatMode && n || o.body[t] || n, d = {}, m = v[v.length - 1], g = (new Date).getTime();
            if (e && r && h > g - r) return clearTimeout(i), i = setTimeout(E, h), void 0;
            r = g;
            for (var y in a) if (a.hasOwnProperty(y)) {
                var b = a[y], S = b.minw, x = b.maxw, T = null === S, N = null === x, C = "em";
                S && (S = parseFloat(S) * (S.indexOf(C) > -1 ? s || w() : 1)), x && (x = parseFloat(x) * (x.indexOf(C) > -1 ? s || w() : 1)), b.hasquery && (T && N || !(T || c >= S) || !(N || x >= c)) || (d[b.media] || (d[b.media] = []), d[b.media].push(f[b.rules]));
            }
            for (var k in l) l.hasOwnProperty(k) && l[k] && l[k].parentNode === p && p.removeChild(l[k]);
            for (var L in d) if (d.hasOwnProperty(L)) {
                var A = o.createElement("style"), O = d[L].join("\n");
                A.type = "text/css", A.media = L, p.insertBefore(A, m.nextSibling), A.styleSheet ? A.styleSheet.cssText = O : A.appendChild(o.createTextNode(O)), l.push(A);
            }
        }, S = function(e, t) {
            var n = x();
            n && (n.open("GET", e, !0), n.onreadystatechange = function() {
                4 !== n.readyState || 200 !== n.status && 304 !== n.status || t(n.responseText);
            }, 4 !== n.readyState && n.send(null));
        }, x = function() {
            var t = !1;
            try {
                t = new e.XMLHttpRequest;
            } catch (n) {
                t = new e.ActiveXObject("Microsoft.XMLHTTP");
            }
            return function() {
                return t;
            };
        }();
        g(), n.update = g, e.addEventListener ? e.addEventListener("resize", t, !1) : e.attachEvent && e.attachEvent("onresize", t);
    }
})(this);

var cssua = function(e, t) {
    var n = /\s*([\-\w ]+)[\s\/]([\d_]+\b([\-\._\/]\w+)*)/, r = /([\w\-\.]+[\s\/][v]?[\d_]+\b([\-\._\/]\w+)*)/g, i = /rv[:](\d+(\.\w+)*).*?\bgecko[\/]\w+/, s = /\bblackberry\w*[\s\/]+(\d+(\.\w+)*)/, o = /\bsilk-accelerated=true\b/, u = /\bfluidapp\b/, a = /(\bwindows\b|\bmacintosh\b|\blinux\b|\bunix\b)/, f = /(\bandroid\b|\bipad\b|\bipod\b|\bmeego|\bblackberry|\brim tablet os\b|\bwebos\b|\bwindows ce\b|\bwindows phone os\b|\bwindows ce\b|\bpalm|\bsymbian|\bj2me\b|\bdocomo\b|\bpda\b|\bchtml\b|\bmidp\b|\bcldc\b|\w*?mobile\w*?|\w*?phone\w*?)/, l = /(\bxbox\b|\bplaystation\b|\bnintendo\s+\w+)/, c = {
        parse: function(e) {
            var t = {}, e = ("" + e).toLowerCase();
            if (!e) return t;
            for (var c, h, d = e.split(/[()]/), v = 0, g = d.length; v < g; v++) if (v % 2) {
                var y = d[v].split(";");
                for (c = 0, h = y.length; c < h; c++) if (n.exec(y[c])) {
                    var b = RegExp.$1.split(" ").join("_"), w = RegExp.$2;
                    if (!t[b] || parseFloat(t[b]) < parseFloat(w)) t[b] = w;
                }
            } else if (y = d[v].match(r)) for (c = 0, h = y.length; c < h; c++) b = y[c].split(/[\/\s]+/), b.length && "mozilla" !== b[0] && (t[b[0].split(" ").join("_")] = b.slice(1).join("-"));
            if (f.exec(e)) {
                if (t.mobile = RegExp.$1, s.exec(e)) t.blackberry = RegExp.$1;
            } else a.exec(e) ? t.desktop = RegExp.$1 : l.exec(e) && (t.game = RegExp.$1, c = t.game.split(" ").join("_"), t.version && !t[c]) && (t[c] = t.version);
            t.intel_mac_os_x ? (t.mac_os_x = t.intel_mac_os_x.split("_").join("."), delete t.intel_mac_os_x) : t.cpu_iphone_os ? (t.ios = t.cpu_iphone_os.split("_").join("."), delete t.cpu_iphone_os) : t.cpu_os ? (t.ios = t.cpu_os.split("_").join("."), delete t.cpu_os) : "iphone" === t.mobile && !t.ios && (t.ios = "1");
            t.opera && t.version ? t.opera = t.version : o.exec(e) ? t.silk_accelerated = !0 : u.exec(e) && (t.fluidapp = t.version);
            if (t.applewebkit) {
                t.webkit = t.applewebkit;
                delete t.applewebkit;
                t.opr && (t.opera = t.opr, delete t.opr, delete t.chrome);
                t.safari && (t.chrome || t.crios || t.opera || t.silk || t.fluidapp || t.phantomjs || t.mobile && !t.ios ? delete t.safari : t.safari = t.version && !t.rim_tablet_os ? t.version : {
                    419: "2.0.4",
                    417: "2.0.3",
                    416: "2.0.2",
                    412: "2.0",
                    312: "1.3",
                    125: "1.2",
                    85: "1.0"
                }[parseInt(t.safari, 10)] || t.safari);
            } else if (t.msie) {
                t.opera || (t.ie = t.msie);
                delete t.msie;
            } else i.exec(e) && (t.gecko = RegExp.$1);
            t.version && delete t.version;
            return t;
        },
        format: function(e) {
            var t = "", n;
            for (n in e) if (n && e.hasOwnProperty(n)) {
                var r = n, i = e[n], r = r.split(".").join("-"), s = " ua-" + r;
                if ("string" == typeof i) {
                    for (var i = i.split(" ").join("_").split(".").join("-"), o = i.indexOf("-"); 0 < o; ) s += " ua-" + r + "-" + i.substring(0, o), o = i.indexOf("-", o + 1);
                    s += " ua-" + r + "-" + i;
                }
                t += s;
            }
            return t;
        },
        encode: function(e) {
            var t = "", n;
            for (n in e) n && e.hasOwnProperty(n) && (t && (t += "&"), t += encodeURIComponent(n) + "=" + encodeURIComponent(e[n]));
            return t;
        }
    };
    c.userAgent = c.ua = c.parse(t);
    var h = c.format(c.ua) + " js";
    e.className = e.className ? e.className.replace(/\bno-js\b/g, "") + h : h.substr(1);
    return c;
}(document.documentElement, navigator.userAgent);

jQuery(function() {
    jQuery(".nav-button").click(function() {
        jQuery(".nav-button, .primary-nav").toggleClass("open");
    });
});

jQuery(function() {
    jQuery('button, input[type="submit"]').not("#constant-contact-submit, .flatbutton, #sub-page-search #searchsubmit").addClass("btn");
});

jQuery(function() {
    jQuery("#sidebar1").length > 0 && jQuery("body").addClass("sidebar1");
});

jQuery(function() {
    jQuery("#menu-main ul.sub-menu > li > ul").addClass("sub-sub-menu clearfix");
});

jQuery(function() {
    var e = jQuery("#menu-main ul.sub-menu li");
    e.hover(function() {
        jQuery(this).find("ul:first li").fadeToggle(200);
    });
});

jQuery(function() {
    var e = jQuery("#comment-form-title"), t = jQuery("#commentform button"), n = jQuery("#commentform textarea");
    jQuery(".comment-reply-link").click(function() {
        jQuery("h3#comment-form-title").replaceWith('<h3 id="comment-form-title" class="h2">Leave A Reply&nbsp&nbsp;<span class="icon-bubbles small"></span></h3>');
        t.text("Post A Reply").prepend('<span class="icon-bubbles small"></span>');
        n.attr("placeholder", "Add your reply...");
        jQuery(".respond-form input#author").val() == "" && jQuery(".respond-form input#author").focus();
    }), jQuery("a#cancel-comment-reply-link").click(function() {
        jQuery("h3#comment-form-title").replaceWith('<h3 id="comment-form-title" class="h2">Leave a Comment&nbsp&nbsp;<span class="icon-bubbles-2 small"></span></h3>');
        t.text("Post A Comment").prepend('<span class="icon-bubbles-2 small"></span>');
        n.attr("placeholder", "Add your comment...");
    });
});

jQuery(function() {
    jQuery('<span class="icon-unitedwaycircle"></span>').prependTo("#execphp-2 > h4");
});

jQuery(function() {
    jQuery('<span class="icon-undo"></span>').prependTo("li:not(.depth-1) .comment_content > p");
});

jQuery(function() {
    var e = "http://a0.twimg.com/profile_images/2409583835/moq1vr3i9yu3wfha7h34_normal.jpeg", t = "http://tmain.uw-mc.org/wp-content/themes/uwchilipepper/library/images/twitter_image.png";
    jQuery('img[src="' + e + '"]').attr("src", t);
});

jQuery(function() {
    var e = jQuery(".ua-chrome-14, .ua-chrome-15, .ua-chrome-16, .ua-chrome-17, .ua-chrome-18, .ua-chrome-19, .ua-chrome-20, .safari");
    e.length > 0 && jQuery(".actions").addClass("golden-adj");
});

(function() {
    function n() {}
    function r(e, t) {
        this.path = e;
        if (typeof t != "undefined" && t !== null) {
            this.at_2x_path = t;
            this.perform_check = !1;
        } else {
            this.at_2x_path = e.replace(/\.\w+$/, function(e) {
                return "@2x" + e;
            });
            this.perform_check = !0;
        }
    }
    function i(e) {
        this.el = e;
        this.path = new r(this.el.getAttribute("src"), this.el.getAttribute("data-at2x"));
        var t = this;
        this.path.check_2x_variant(function(e) {
            e && t.swap();
        });
    }
    var e = typeof exports == "undefined" ? window : exports, t = {
        check_mime_type: !0
    };
    e.Retina = n;
    n.configure = function(e) {
        e == null && (e = {});
        for (var n in e) t[n] = e[n];
    };
    n.init = function(t) {
        t == null && (t = e);
        var n = t.onload || new Function;
        t.onload = function() {
            var e = document.getElementsByTagName("img"), t = [], r, s;
            for (r = 0; r < e.length; r++) {
                s = e[r];
                t.push(new i(s));
            }
            n();
        };
    };
    n.isRetina = function() {
        var t = "(-webkit-min-device-pixel-ratio: 1.5),                      (min--moz-device-pixel-ratio: 1.5),                      (-o-min-device-pixel-ratio: 3/2),                      (min-resolution: 1.5dppx)";
        return e.devicePixelRatio > 1 ? !0 : e.matchMedia && e.matchMedia(t).matches ? !0 : !1;
    };
    e.RetinaImagePath = r;
    r.confirmed_paths = [];
    r.prototype.is_external = function() {
        return !!this.path.match(/^https?\:/i) && !this.path.match("//" + document.domain);
    };
    r.prototype.check_2x_variant = function(e) {
        var n, i = this;
        if (this.is_external()) return e(!1);
        if (!this.perform_check && typeof this.at_2x_path != "undefined" && this.at_2x_path !== null) return e(!0);
        if (this.at_2x_path in r.confirmed_paths) return e(!0);
        n = new XMLHttpRequest;
        n.open("HEAD", this.at_2x_path);
        n.onreadystatechange = function() {
            if (n.readyState != 4) return e(!1);
            if (n.status >= 200 && n.status <= 399) {
                if (t.check_mime_type) {
                    var s = n.getResponseHeader("Content-Type");
                    if (s == null || !s.match(/^image/i)) return e(!1);
                }
                r.confirmed_paths.push(i.at_2x_path);
                return e(!0);
            }
            return e(!1);
        };
        n.send();
    };
    e.RetinaImage = i;
    i.prototype.swap = function(e) {
        function n() {
            if (!t.el.complete) setTimeout(n, 5); else {
                t.el.setAttribute("width", t.el.offsetWidth);
                t.el.setAttribute("height", t.el.offsetHeight);
                t.el.setAttribute("src", e);
            }
        }
        typeof e == "undefined" && (e = this.path.at_2x_path);
        var t = this;
        n();
    };
    n.isRetina() && n.init(e);
})();