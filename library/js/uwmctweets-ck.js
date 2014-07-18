function parseDate(e) {
    var t = e.split(" ");
    return new Date(Date.parse(t[1] + " " + t[2] + ", " + t[5] + " " + t[3] + " UTC"));
}

function loadLatestTweet() {
    var e = 5, t = "https://api.twitter.com/1/statuses/user_timeline/unitedwaychi.json?callback=?&count=" + e + "&include_rts=1";
    jQuery.getJSON(t, function(e) {
        for (var t = 0; t < e.length; t++) {
            var n = e[t].text, r = parseDate(e[t].created_at), i = r.getDate() + "-" + (r.getMonth() + 1) + "-" + r.getFullYear() + " at " + r.getHours() + ":" + r.getMinutes();
            n = n.parseURL().parseUsername().parseHashtag();
            n += '&nbsp;<a href="https://twitter.com/#!/unitedwaychi" target="_blank">@unitedwaychi</a>&nbsp;<a href="https://twitter.com/#!/unitedwaychi/status/' + e[t].id_str + '">' + i + "</a>";
            jQuery("#tweet").append("<p>" + n + "</p>");
        }
    });
}

jQuery(document).ready(function() {
    loadLatestTweet();
});

String.prototype.parseURL = function() {
    return this.replace(/[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&~\?\/.=]+/g, function(e) {
        return e.link(e);
    });
};

String.prototype.parseUsername = function() {
    return this.replace(/[@]+[A-Za-z0-9-_]+/g, function(e) {
        var t = e.replace("@", "");
        return e.link("http://twitter.com/" + t);
    });
};

String.prototype.parseHashtag = function() {
    return this.replace(/[#]+[A-Za-z0-9-_]+/g, function(e) {
        var t = e.replace("#", "%23");
        return e.link("http://search.twitter.com/search?q=" + t);
    });
};