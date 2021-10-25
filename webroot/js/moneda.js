// jQuery Mask Plugin v1.13.4
// github.com/igorescobar/jQuery-Mask-Plugin
(function(b) {
    "function" === typeof define && define.amd ? define(["jquery"], b) : "object" === typeof exports ? module.exports = b(require("jquery")) : b(jQuery || Zepto)
})(function(b) {
    var y = function(a, c, d) {
        a = b(a);
        var g = this,
            k = a.val(),
            l;
        c = "function" === typeof c ? c(a.val(), void 0, a, d) : c;
        var e = {
            invalid: [],
            getCaret: function() {
                try {
                    var q, b = 0,
                        e = a.get(0),
                        f = document.selection,
                        c = e.selectionStart;
                    if (f && -1 === navigator.appVersion.indexOf("MSIE 10")) q = f.createRange(), q.moveStart("character", a.is("input") ? -a.val().length : -a.text().length),
                        b = q.text.length;
                    else if (c || "0" === c) b = c;
                    return b
                } catch (d) {}
            },
            setCaret: function(q) {
                try {
                    if (a.is(":focus")) {
                        var b, c = a.get(0);
                        c.setSelectionRange ? c.setSelectionRange(q, q) : c.createTextRange && (b = c.createTextRange(), b.collapse(!0), b.moveEnd("character", q), b.moveStart("character", q), b.select())
                    }
                } catch (f) {}
            },
            events: function() {
                a.on("input.mask keyup.mask", e.behaviour).on("paste.mask drop.mask", function() {
                    setTimeout(function() {
                        a.keydown().keyup()
                    }, 100)
                }).on("change.mask", function() {
                    a.data("changed", !0)
                }).on("blur.mask", function() {
                    k === a.val() || a.data("changed") || a.triggerHandler("change");
                    a.data("changed", !1)
                }).on("blur.mask", function() {
                    k = a.val()
                }).on("focus.mask", function(a) {
                    !0 === d.selectOnFocus && b(a.target).select()
                }).on("focusout.mask", function() {
                    d.clearIfNotMatch && !l.test(e.val()) && e.val("")
                })
            },
            getRegexMask: function() {
                for (var a = [], b, e, f, d, h = 0; h < c.length; h++)(b = g.translation[c.charAt(h)]) ? (e = b.pattern.toString().replace(/.{1}$|^.{1}/g, ""), f = b.optional, (b = b.recursive) ? (a.push(c.charAt(h)), d = {
                    digit: c.charAt(h),
                    pattern: e
                }) : a.push(f || b ? e + "?" : e)) : a.push(c.charAt(h).replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&"));
                a = a.join("");
                d && (a = a.replace(new RegExp("(" + d.digit + "(.*" + d.digit + ")?)"), "($1)?").replace(new RegExp(d.digit, "g"), d.pattern));
                return new RegExp(a)
            },
            destroyEvents: function() {
                a.off("input keydown keyup paste drop blur focusout ".split(" ").join(".mask "))
            },
            val: function(b) {
                var c = a.is("input") ? "val" : "text";
                if (0 < arguments.length) {
                    if (a[c]() !== b) a[c](b);
                    c = a
                } else c = a[c]();
                return c
            },
            getMCharsBeforeCount: function(a, b) {
                for (var e = 0, f = 0, d = c.length; f < d && f < a; f++) g.translation[c.charAt(f)] || (a = b ? a + 1 : a, e++);
                return e
            },
            caretPos: function(a, b, d, f) {
                return g.translation[c.charAt(Math.min(a - 1, c.length - 1))] ? Math.min(a + d - b - f, d) : e.caretPos(a + 1, b, d, f)
            },
            behaviour: function(a) {
                a = a || window.event;
                e.invalid = [];
                var c = a.keyCode || a.which;
                if (-1 === b.inArray(c, g.byPassKeys)) {
                    var d = e.getCaret(),
                        f = e.val().length,
                        n = d < f,
                        h = e.getMasked(),
                        k = h.length,
                        m = e.getMCharsBeforeCount(k - 1) - e.getMCharsBeforeCount(f - 1);
                    e.val(h);
                    !n || 65 === c && a.ctrlKey || (8 !== c && 46 !== c && (d = e.caretPos(d, f, k, m)), e.setCaret(d));
                    return e.callbacks(a)
                }
            },
            getMasked: function(a) {
                var b = [],
                    k = e.val(),
                    f = 0,
                    n = c.length,
                    h = 0,
                    l = k.length,
                    m = 1,
                    p = "push",
                    u = -1,
                    t, w;
                d.reverse ? (p = "unshift", m = -1, t = 0, f = n - 1, h = l - 1, w = function() {
                    return -1 < f && -1 < h
                }) : (t = n - 1, w = function() {
                    return f < n && h < l
                });
                for (; w();) {
                    var x = c.charAt(f),
                        v = k.charAt(h),
                        r = g.translation[x];
                    if (r) v.match(r.pattern) ? (b[p](v), r.recursive && (-1 === u ? u = f : f === t && (f = u - m), t === u && (f -= m)), f += m) : r.optional ? (f += m, h -= m) : r.fallback ? (b[p](r.fallback), f += m, h -= m) : e.invalid.push({
                        p: h,
                        v: v,
                        e: r.pattern
                    }), h += m;
                    else {
                        if (!a) b[p](x);
                        v === x && (h += m);
                        f += m
                    }
                }
                a = c.charAt(t);
                n !== l + 1 || g.translation[a] || b.push(a);
                return b.join("")
            },
            callbacks: function(b) {
                var g = e.val(),
                    l = g !== k,
                    f = [g, b, a, d],
                    n = function(a, b, c) {
                        "function" === typeof d[a] && b && d[a].apply(this, c)
                    };
                n("onChange", !0 === l, f);
                n("onKeyPress", !0 === l, f);
                n("onComplete", g.length === c.length, f);
                n("onInvalid", 0 < e.invalid.length, [g, b, a, e.invalid, d])
            }
        };
        g.mask = c;
        g.options = d;
        g.remove = function() {
            var b = e.getCaret();
            e.destroyEvents();
            e.val(g.getCleanVal());
            e.setCaret(b - e.getMCharsBeforeCount(b));
            return a
        };
        g.getCleanVal = function() {
            return e.getMasked(!0)
        };
        g.init = function(c) {
            c = c || !1;
            d = d || {};
            g.byPassKeys = b.jMaskGlobals.byPassKeys;
            g.translation = b.jMaskGlobals.translation;
            g.translation = b.extend({}, g.translation, d.translation);
            g = b.extend(!0, {}, g, d);
            l = e.getRegexMask();
            !1 === c ? (d.placeholder && a.attr("placeholder", d.placeholder), b("input").length && !1 === "oninput" in b("input")[0] && "on" === a.attr("autocomplete") && a.attr("autocomplete", "off"), e.destroyEvents(), e.events(), c = e.getCaret(), e.val(e.getMasked()), e.setCaret(c + e.getMCharsBeforeCount(c, !0))) : (e.events(), e.val(e.getMasked()))
        };
        g.init(!a.is("input"))
    };
    b.maskWatchers = {};
    var A = function() {
            var a = b(this),
                c = {},
                d = a.attr("data-mask");
            a.attr("data-mask-reverse") && (c.reverse = !0);
            a.attr("data-mask-clearifnotmatch") && (c.clearIfNotMatch = !0);
            "true" === a.attr("data-mask-selectonfocus") && (c.selectOnFocus = !0);
            if (z(a, d, c)) return a.data("mask", new y(this, d, c))
        },
        z = function(a, c, d) {
            d = d || {};
            var g = b(a).data("mask"),
                k = JSON.stringify;
            a = b(a).val() || b(a).text();
            try {
                return "function" === typeof c && (c = c(a)), "object" !== typeof g || k(g.options) !== k(d) || g.mask !== c
            } catch (l) {}
        };
    b.fn.mask = function(a, c) {
        c = c || {};
        var d = this.selector,
            g = b.jMaskGlobals,
            k = b.jMaskGlobals.watchInterval,
            l = function() {
                if (z(this, a, c)) return b(this).data("mask", new y(this, a, c))
            };
        b(this).each(l);
        d && "" !== d && g.watchInputs && (clearInterval(b.maskWatchers[d]), b.maskWatchers[d] = setInterval(function() {
            b(document).find(d).each(l)
        }, k));
        return this
    };
    b.fn.unmask = function() {
        clearInterval(b.maskWatchers[this.selector]);
        delete b.maskWatchers[this.selector];
        return this.each(function() {
            var a = b(this).data("mask");
            a && a.remove().removeData("mask")
        })
    };
    b.fn.cleanVal = function() {
        return this.data("mask").getCleanVal()
    };
    b.applyDataMask = function(a) {
        a = a || b.jMaskGlobals.maskElements;
        (a instanceof b ? a : b(a)).filter(b.jMaskGlobals.dataMaskAttr).each(A)
    };
    var p = {
        maskElements: "input,td,span,div",
        dataMaskAttr: "*[data-mask]",
        dataMask: !0,
        watchInterval: 300,
        watchInputs: !0,
        watchDataMask: !1,
        byPassKeys: [9, 16, 17, 18, 36, 37, 38, 39, 40, 91],
        translation: {
            0: {
                pattern: /\d/
            },
            9: {
                pattern: /\d/,
                optional: !0
            },
            "#": {
                pattern: /\d/,
                recursive: !0
            },
            A: {
                pattern: /[a-zA-Z0-9]/
            },
            S: {
                pattern: /[a-zA-Z]/
            }
        }
    };
    b.jMaskGlobals = b.jMaskGlobals || {};
    p = b.jMaskGlobals = b.extend(!0, {}, p, b.jMaskGlobals);
    p.dataMask && b.applyDataMask();
    setInterval(function() {
        b.jMaskGlobals.watchDataMask && b.applyDataMask()
    }, p.watchInterval)
});