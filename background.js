function updateGradient() {
    var t = colors[colorIndices[0]],
        o = colors[colorIndices[1]],
        e = colors[colorIndices[2]],
        s = colors[colorIndices[3]],
        i = 1 - step,
        r = Math.round(i * t[0] + step * o[0]),
        d = Math.round(i * t[1] + step * o[1]),
        n = Math.round(i * t[2] + step * o[2]),
        l = "#" + (r << 16 | d << 8 | n).toString(16),
        c = Math.round(i * e[0] + step * s[0]),
        a = Math.round(i * e[1] + step * s[1]),
        p = Math.round(i * e[2] + step * s[2]),
        u = "#" + (c << 16 | a << 8 | p).toString(16);
    $("#arama").css({
        background: "-webkit-gradient(linear, left top, right top, from(" + l + "), to(" + u + "))"
    }).css({
        background: "-moz-linear-gradient(left, " + l + " 0%, " + u + " 100%)"
    }), step += gradientSpeed, step >= 1 && (step %= 1, colorIndices[0] = colorIndices[1], colorIndices[2] = colorIndices[3], colorIndices[1] = (colorIndices[1] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length, colorIndices[3] = (colorIndices[3] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length)
}
var step = 0,
    colors = new Array([26, 26, 26], [84, 59, 93], [26, 26, 26], [85, 79, 99], [136, 82, 154], [150, 82, 154]),
    colorIndices = [0, 1, 2, 3],
    gradientSpeed = 0.001;
setInterval(updateGradient, 10), document.write(unescape("")),
    function(t) {
        var o = {
            init: function(o) {
                function e(t) {
                    var o = t.pageX,
                        e = t.pageY;
                    i.style_my_tooltips("position", {
                        smtCursorCoordsX: o,
                        smtCursorCoordsY: e
                    })
                }
                var s = {
                        tip_follows_cursor: !1,
                        tip_delay_time: 700,
                        tip_fade_speed: 300,
                        attribute: "title"
                    },
                    o = t.extend(s, o);
                0 === t("#s-m-t-tooltip").length && t("body").append("<div id='s-m-t-tooltip'><div></div></div>");
                var i = t("#s-m-t-tooltip");
                return i.css({
                    position: "absolute",
                    display: "none"
                }).data("smt-z-index", i.css("z-index")).children("div").css({
                    width: "100%",
                    height: "100%"
                }), t(".smt-current-element").live("mouseout mousedown click", function() {
                    var e = t(this);
                    clearTimeout(smtTooltip_delay), i.style_my_tooltips("hide", {
                        speed: e.data("smt-fade-speed")
                    }), t(document).unbind("mousemove"), e.removeClass("smt-current-element"), "" === e.attr(o.attribute) && e.attr(o.attribute, e.data("smt-title"))
                }), this.live("mouseover", function(s) {
                    var r = t(this),
                        d = r.attr(o.attribute);
                    r.addClass("smt-current-element").data({
                        "smt-title": d,
                        "smt-fade-speed": o.tip_fade_speed
                    }).attr(o.attribute, ""), i.style_my_tooltips("update", {
                        title: d,
                        speed: o.tip_fade_speed,
                        delay: o.tip_delay_time,
                        tip_follows_cursor: o.tip_follows_cursor
                    }), t(document).bind("mousemove", function(t) {
                        e(t)
                    })
                })
            },
            update: function(o) {
                var e = t(this);
                e.stop().css({
                    display: "none",
                    "z-index": e.data("smt-z-index")
                }).children("div").text(o.title), smtTooltip_delay = setTimeout(function() {
                    e.style_my_tooltips("show", {
                        speed: o.speed,
                        tip_follows_cursor: o.tip_follows_cursor
                    })
                }, o.delay)
            },
            show: function(o) {
                var e = t(this);
                e.stop().fadeTo(o.speed, 1), o.tip_follows_cursor || t(document).unbind("mousemove")
            },
            hide: function(o) {
                var e = t(this);
                e.stop().fadeTo(o.speed, 0, function() {
                    e.css({
                        "z-index": "-1"
                    })
                })
            },
            position: function(o) {
                var e = t(this),
                    s = t(window).scrollLeft(),
                    i = t(window).scrollTop(),
                    r = e.outerWidth(!0),
                    d = e.outerHeight(!0),
                    n = o.smtCursorCoordsX + r - s,
                    l = o.smtCursorCoordsY + d - i;
                if (n <= t(window).width() && n <= t(document).width()) e.css("left", o.smtCursorCoordsX);
                else {
                    var c = o.smtCursorCoordsX - r;
                    c >= s ? e.css("left", c) : e.css("left", s)
                }
                if (l <= t(window).height() && l <= t(document).height()) e.css("top", o.smtCursorCoordsY);
                else {
                    var a = o.smtCursorCoordsY - d;
                    a >= i ? e.css("top", a) : e.css("top", i)
                }
            }
        };
        t.fn.style_my_tooltips = function(e) {
            return o[e] ? o[e].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof e && e ? void t.error("Method " + e + " does not exist") : o.init.apply(this, arguments)
        }
    }(jQuery);