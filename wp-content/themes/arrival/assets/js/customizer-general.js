jQuery(document).ready(function(e) {
    e(".customize-control .responsive-switchers button").on("click", function(s) {
        var t = e(this),
            o = e(".responsive-switchers"),
            r = e(s.currentTarget).data("device"),
            i = e(".customize-control.has-switchers"),
            a = e(".wp-full-overlay"),
            c = e(".wp-full-overlay-footer .devices");
        o.find("button").removeClass("active"),
        o.find("button.preview-" + r).addClass("active"),
        i.find(".control-wrap").removeClass("active"),
        i.find(".control-wrap." + r).addClass("active"),
        i.removeClass("control-device-desktop control-device-tablet control-device-mobile").addClass("control-device-" + r),
        a.removeClass("preview-desktop preview-tablet preview-mobile").addClass("preview-" + r),
        c.find("button").removeClass("active").attr("aria-pressed", !1),
        c.find("button.preview-" + r).addClass("active").attr("aria-pressed", !0),
        t.hasClass("preview-desktop") && i.toggleClass("responsive-switchers-open")
    }), e(".wp-full-overlay-footer .devices button").on("click", function(s) {
        var t = e(this),
            o = e(".customize-control.has-switchers .responsive-switchers"),
            r = e(s.currentTarget).data("device"),
            i = e(".customize-control.has-switchers");
        o.find("button").removeClass("active"), 
        o.find("button.preview-" + r).addClass("active"), 
        i.find(".control-wrap").removeClass("active"), 
        i.find(".control-wrap." + r).addClass("active"), 
        i.removeClass("control-device-desktop control-device-tablet control-device-mobile").addClass("control-device-" + r), 
        t.hasClass("preview-desktop") ? i.removeClass("responsive-switchers-open") : i.addClass("responsive-switchers-open")
    })
});