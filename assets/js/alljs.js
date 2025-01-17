function removeVietnameseTones(n) {
    return n = n.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a"), n = n.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e"), n = n.replace(/ì|í|ị|ỉ|ĩ/g, "i"), n = n.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o"), n = n.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u"), n = n.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y"), n = n.replace(/đ/g, "d"), n = n.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A"), n = n.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E"), n = n.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I"), n = n.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O"), n = n.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U"), n = n.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y"), n = n.replace(/Đ/g, "D"), n = n.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""), n = n.replace(/\u02C6|\u0306|\u031B/g, ""), n = n.replace(/ + /g, " "), n = n.replace(/\xA0/g, "-"), n = n.replace(/ /g, "-"), n = n.trim(), n.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|{|}|\||\\/g, "")
}

function alertAddCart() {
    var n = new PNotify({
        title: "Thông báo",
        text: "Sản phẩm đã thêm vào giỏ hàng",
        addclass: "stack-bottom-right bg-primary",
        stack: {
            dir1: "up",
            dir2: "left",
            firstpos1: 25,
            firstpos2: 25
        },
        type: "info"
    });
    $.get("../../AddToCart", function(n) {
        $("#cart-content").replaceWith(n)
    })
}

function fnmenu() {
    $(window).width() > 991 && ($lilast = $(".menu>ul>li").last(), $submenu = $lilast.children(".sub-menu"), $submenu.length && ($right = $submenu.offset().left + $submenu.width(), $right > $(window).width() && $submenu.css("left", 0 - ($right - $(window).width()))))
}

function slideads(n) {
    if ($("#slideads").length) {
        var t = ($(window).width() - $(".container").width() - n * 2) / 2;
        $("#slideads").css({
            left: t,
            width: $(".container").width() + n * 2
        });
        $("#slideads1").length ? t - $("#slideads1").width() < 0 ? $("#slideads").addClass("d-none") : $("#slideads").removeClass("d-none") : $("#slideads2").length && (t + $(".container").width() + n * 2 + $("#slideads2").width() > $(window).width() ? $("#slideads").addClass("d-none") : $("#slideads").removeClass("d-none"));
        $("#slideads").css({
            top: $("#menu").offset().top - $(window).scrollTop() + $("#menu").height() + 6
        })
    }
}

function img_auto() {
    $(".hig-img-auto").each(function() {
        var i = 1,
            r = $(this).parent().closest("div"),
            u = $(r).height() / $(r).width(),
            t, n;
        if ($(this)[0].hasAttribute("data-original")) {
            t = $(this);
            n = new Image;
            n.src = document.location.protocol + "//" + document.location.host + $(this).attr("data-original");
            $(n).on("load", function() {
                var i = 1;
                n.width > 0 && (i = n.height / n.width);
                i >= u ? $(t).addClass("w-100") : $(t).addClass("h-100")
            })
        } else $(this).width() > 0 && (i = $(this).height() / $(this).width()), i >= u ? $(this).addClass("w-100") : $(this).addClass("h-100")
    })
}

function owl_img_auto() {
    $('[class*="hig-owl-img-auto"]').each(function() {
        var r = this.className,
            u = r.lastIndexOf("hig-owl-img-auto"),
            t = r.substring(u + 16).substring(2, 4),
            i, n;
        t = t != "" ? t == "00" ? 1 : parseFloat(t) / 100 : 1;
        i = $(this);
        n = new Image;
        n.src = document.location.protocol + "//" + document.location.host + $(this).attr("src");
        $(n).on("load", function() {
            var r = 1;
            n.width > 0 && (r = n.height / n.width);
            r >= t ? $(i).addClass("w-100") : $(i).addClass("h-100")
        })
    })
}

function toogle(n) {
    $("#" + n).slideToggle();
    var t = $(n).find(t);
    t.hasClass("fa-minus-square") ? t.removeClass("fa-minus-square").addclass("fa-plus-square") : t.removeClass("fa-plus-square").addclass("fa-minus-square");
    t.hasClass("fa-minus") ? t.removeClass("fa-minus").addclass("fa-plus") : t.removeClass("fa-plus").addclass("fa-minus")
}
var ddsmoothmenu = {
        arrowimages: {
            down: ["downarrowclass", "fas fa-angle-down", 22],
            right: ["rightarrowclass", "fas fa-angle-right"]
        },
        transition: {
            overtime: 300,
            outtime: 300
        },
        shadow: {
            enable: !0,
            offsetx: 5,
            offsety: 5
        },
        showhidedelay: {
            showdelay: 100,
            hidedelay: 200
        },
        detectwebkit: navigator.userAgent.toLowerCase().indexOf("applewebkit") != -1,
        detectie6: document.all && !window.XMLHttpRequest,
        getajaxmenu: function(n, t) {
            var i = n("#" + t.contentsource[0]);
            i.html("Loading Menu...");
            n.ajax({
                url: t.contentsource[1],
                async: !0,
                error: function(n) {
                    i.html("Error fetching content. Server Response: " + n.responseText)
                },
                success: function(r) {
                    i.html(r);
                    ddsmoothmenu.buildmenu(n, t)
                }
            })
        },
        buildmenu: function(n, t) {
            var i = ddsmoothmenu,
                r = n("#" + t.mainmenuid + ">ul"),
                u;
            r.parent().get(0).className = t.classname || "ddsmoothmenu";
            u = r.find("ul").parent();
            u.hover(function() {
                n(this).children("a:eq(0)").addClass("selected")
            }, function() {
                n(this).children("a:eq(0)").removeClass("selected")
            });
            u.each(function(r) {
                var u = n(this).css({
                        zIndex: 100 - r
                    }),
                    f = n(this).find("ul:eq(0)").css({
                        display: "block"
                    }),
                    e;
                f.data("timers", {});
                this._dimensions = {
                    w: this.offsetWidth,
                    h: this.offsetHeight,
                    subulw: f.outerWidth(),
                    subulh: f.outerHeight()
                };
                this.istopheader = u.parents("ul").length == 1 ? !0 : !1;
                f.css({
                    top: this.istopheader && t.orientation != "v" ? this._dimensions.h + "px" : 0
                });
                u.children("a:eq(0)").css(this.istopheader ? {
                    paddingRight: i.arrowimages.down[2]
                } : {}).append('<i class="' + (this.istopheader && t.orientation != "v" ? i.arrowimages.down[1] : i.arrowimages.right[1]) + " " + (this.istopheader && t.orientation != "v" ? i.arrowimages.down[0] : i.arrowimages.right[0]) + '"><\/i>');
                i.shadow.enable && (this._shadowoffset = {
                    x: this.istopheader ? f.offset().left + i.shadow.offsetx : this._dimensions.w,
                    y: this.istopheader ? f.offset().top + i.shadow.offsety : u.position().top
                }, this.istopheader ? $parentshadow = n(document.body) : (e = u.parents("li:eq(0)"), $parentshadow = e.get(0).$shadow), this.$shadow = n('<div class="ddshadow' + (this.istopheader ? " toplevelshadow" : "") + '"><\/div>').prependTo($parentshadow).css({
                    left: this._shadowoffset.x + "px",
                    top: this._shadowoffset.y + "px"
                }));
                u.hover(function() {
                    var e = f,
                        r = u.get(0);
                    clearTimeout(e.data("timers").hidetimer);
                    e.data("timers").showtimer = setTimeout(function() {
                        var f, o, s;
                        r._offsets = {
                            left: u.offset().left,
                            top: u.offset().top
                        };
                        f = r.istopheader && t.orientation != "v" ? 0 : r._dimensions.w;
                        f = r._offsets.left + f + r._dimensions.subulw > n(window).width() ? r.istopheader && t.orientation != "v" ? -r._dimensions.subulw + r._dimensions.w : -r._dimensions.w : f;
                        e.queue().length <= 1 && (e.css({
                            left: f + "px",
                            width: r._dimensions.subulw + "px"
                        }).animate({
                            height: "show",
                            opacity: "show"
                        }, ddsmoothmenu.transition.overtime), i.shadow.enable && (o = r.istopheader ? e.offset().left + ddsmoothmenu.shadow.offsetx : f, s = r.istopheader ? e.offset().top + i.shadow.offsety : r._shadowoffset.y, !r.istopheader && ddsmoothmenu.detectwebkit && r.$shadow.css({
                            opacity: 1
                        }), r.$shadow.css({
                            overflow: "",
                            width: r._dimensions.subulw + "px",
                            left: o + "px",
                            top: s + "px"
                        }).animate({
                            height: r._dimensions.subulh + "px"
                        }, ddsmoothmenu.transition.overtime)))
                    }, ddsmoothmenu.showhidedelay.showdelay)
                }, function() {
                    var n = f,
                        t = u.get(0);
                    clearTimeout(n.data("timers").showtimer);
                    n.data("timers").hidetimer = setTimeout(function() {
                        n.animate({
                            height: "hide",
                            opacity: "hide"
                        }, ddsmoothmenu.transition.outtime);
                        i.shadow.enable && (ddsmoothmenu.detectwebkit && t.$shadow.children("div:eq(0)").css({
                            opacity: 0
                        }), t.$shadow.css({
                            overflow: "hidden"
                        }).animate({
                            height: 0
                        }, ddsmoothmenu.transition.outtime))
                    }, ddsmoothmenu.showhidedelay.hidedelay)
                })
            });
            r.find("ul").css({
                display: "none",
                visibility: "visible"
            })
        },
        init: function(n) {
            if (typeof n.customtheme == "object" && n.customtheme.length == 2) {
                var t = "#" + n.mainmenuid,
                    i = n.orientation == "v" ? t : t + ", " + t;
                document.write('<style type="text/css">\n' + i + " ul li a {background:" + n.customtheme[0] + ";}\n" + t + " ul li a:hover {background:" + n.customtheme[1] + ";}\n<\/style>")
            }
            this.shadow.enable = document.all && !window.XMLHttpRequest ? !1 : this.shadow.enable;
            jQuery(document).ready(function(t) {
                typeof n.contentsource == "object" ? ddsmoothmenu.getajaxmenu(t, n) : ddsmoothmenu.buildmenu(t, n)
            })
        }
    },
    scrolltotop;
$(function() {
        $treo = $(".fixed");
        $topDefault = $treo.offset().top;
        $(document).on("ready", function() {
            $(".adv-r").length && ($treo2 = $(".adv-r"), $topDefault2 = $treo2.offset().top);
            $(".product-info-fix").length && ($treo3 = $(".product-info-fix"), $topDefault3 = $treo3.offset().top - $("#menu").outerHeight());
            $("#filter-box").length && ($filter = $("#filter-box"), $topDefault4 = $filter.offset().top - $("#menu").outerHeight());
            $topOffset = $("#menu").length ? $(window).width() >= 992 ? $("#menu").outerHeight() + 5 : 42 : 0
        });
        $(window).scroll(function() {
            $(".zoomtracker").length && $(".zoomtracker").css({
                cursor: "crosshair",
                position: "absolute",
                "z-index": "0",
                left: $("#multizoom1").offset().left,
                top: $("#multizoom1").offset().top,
                height: $("#multizoom1").height(),
                width: $("#multizoom1").width(),
                "background-image": "none"
            });
            $top = $(this).scrollTop();
            $top >= $topDefault ? (pleft = ($(window).width() - $(window).width()) / 2, pleft < 0 && (pleft = 0), $treo.css({
                position: "fixed",
                top: "0px",
                width: "100%",
                "z-index": "10010"
            }), $("#logo img").css({
                height: "60px"
            })) : ($treo.removeAttr("style"), $("#logo img").removeAttr("style"));
            $("#slideads").css({
                top: $("#menu").offset().top - $(this).scrollTop() + $("#menu").height() + 6
            });
            $bottomOffset = $("#box-customer").length ? $("#box-customer").offset().top : $("#footer").offset().top;
            $(".adv-r").length && ($("#menu").offset().top + $("#menu").outerHeight() + $treo2.outerHeight() < $bottomOffset ? $top >= $topDefault2 ? $treo2.css({
                position: "fixed",
                width: $(".adv-r").parent().width(),
                top: $topOffset
            }) : $treo2.removeAttr("style") : $treo2.removeAttr("style"));
            $(".product-info-fix").length && ($("#menu").offset().top + $("#menu").outerHeight() + $treo3.outerHeight() < $bottomOffset ? $top >= $topDefault3 ? $treo3.css({
                position: "fixed",
                width: $(".product-info-fix").parent().width(),
                top: $topOffset
            }) : $treo3.removeAttr("style") : $treo3.removeAttr("style"));
            $("#filter-box").length && $("#menu").offset().top + $("#menu").outerHeight() + $filter.outerHeight() < $bottomOffset && $top >= $topDefault4
        })
    }),
    function(n, t, i) {
        function si(t) {
            if (!wt) {
                if (y = t, hi(), e = n(y), o = 0, r.rel !== "nofollow" && (e = n("." + ut).filter(function() {
                        var t = n.data(this, w).rel || this.rel;
                        return t === r.rel
                    }), o = e.index(y), o === -1 && (e = e.add(y), o = e.length - 1)), !d) {
                    if (d = at = !0, h.show(), r.returnFocus) try {
                        y.blur();
                        n(y).one(ai, function() {
                            try {
                                this.focus()
                            } catch (n) {}
                        })
                    } catch (i) {}
                    g.css({
                        opacity: +r.opacity,
                        cursor: r.overlayClose ? "pointer" : "auto"
                    }).show();
                    r.w = l(r.initialWidth, "x");
                    r.h = l(r.initialHeight, "y");
                    u.position();
                    et && v.bind("resize." + pt + " scroll." + pt, function() {
                        g.css({
                            width: v.width(),
                            height: v.height(),
                            top: v.scrollTop(),
                            left: v.scrollLeft()
                        })
                    }).trigger("resize." + pt);
                    it(li, r.onOpen);
                    ei.add(ri).hide();
                    fi.html(r.close).show()
                }
                u.load(!0)
            }
        }

        function yi() {
            var t, n = c + "Slideshow_",
                i = "click." + c,
                f, s;
            r.slideshow && e[1] ? (f = function() {
                ht.text(r.slideshowStop).unbind(i).bind(dt, function() {
                    (o < e.length - 1 || r.loop) && (t = setTimeout(u.next, r.slideshowSpeed))
                }).bind(kt, function() {
                    clearTimeout(t)
                }).one(i + " " + vt, s);
                h.removeClass(n + "off").addClass(n + "on");
                t = setTimeout(u.next, r.slideshowSpeed)
            }, s = function() {
                clearTimeout(t);
                ht.text(r.slideshowStart).unbind([dt, kt, vt, i].join(" ")).one(i, f);
                h.removeClass(n + "on").addClass(n + "off")
            }, r.slideshowAuto ? f() : s()) : h.removeClass(n + "off " + n + "on")
        }

        function it(t, i) {
            i && i.call(y);
            n.event.trigger(t)
        }

        function hi(t) {
            r = n.extend({}, n.data(y, w));
            for (t in r) n.isFunction(r[t]) && t.substring(0, 2) !== "on" && (r[t] = r[t].call(y));
            r.rel = r.rel || y.rel || "nofollow";
            r.href = r.href || n(y).attr("href");
            r.title = r.title || y.title;
            typeof r.href == "string" && (r.href = n.trim(r.href))
        }

        function bt(n) {
            return r.photo || /\.(gif|png|jpg|jpeg|bmp)(?:\?([^#]*))?(?:#(\.*))?$/i.test(n)
        }

        function l(n, t) {
            return Math.round((/%/.test(n) ? (t === "x" ? v.width() : v.height()) / 100 : 1) * parseInt(n, 10))
        }

        function f(i, r, u) {
            return u = t.createElement("div"), i && (u.id = c + i), u.style.cssText = r || "", n(u)
        }
        var ci = {
                transition: "elastic",
                speed: 300,
                width: !1,
                initialWidth: "600",
                innerWidth: !1,
                maxWidth: !1,
                height: !1,
                initialHeight: "450",
                innerHeight: !1,
                maxHeight: !1,
                scalePhotos: !0,
                scrolling: !0,
                inline: !1,
                html: !1,
                iframe: !1,
                fastIframe: !0,
                photo: !1,
                href: !1,
                title: !1,
                rel: !1,
                opacity: .9,
                preloading: !0,
                current: "image {current} of {total}",
                previous: "previous",
                next: "next",
                close: "close",
                open: !1,
                returnFocus: !0,
                loop: !0,
                slideshow: !1,
                slideshowAuto: !0,
                slideshowSpeed: 2500,
                slideshowStart: "start slideshow",
                slideshowStop: "stop slideshow",
                onOpen: !1,
                onLoad: !1,
                onComplete: !1,
                onCleanup: !1,
                onClosed: !1,
                overlayClose: !0,
                escKey: !0,
                arrowKey: !0,
                top: !1,
                bottom: !1,
                left: !1,
                right: !1,
                fixed: !1,
                data: !1
            },
            w = "colorbox",
            c = "cbox",
            ut = c + "Element",
            li = c + "_open",
            kt = c + "_load",
            dt = c + "_complete",
            vt = c + "_cleanup",
            ai = c + "_closed",
            yt = c + "_purge",
            ft = n.browser.msie && !n.support.opacity,
            et = ft && n.browser.version < 7,
            pt = c + "_IE6",
            g, h, rt, p, gt, ni, ti, ii, e, v, a, ot, st, ri, ui, ht, ct, lt, fi, ei, r, nt, tt, b, k, y, o, s, d, at, wt, oi, vi, u;
        u = n.fn[w] = n[w] = function(t, i) {
            var r = this;
            if (t = t || {}, !r[0]) {
                if (r.selector) return r;
                r = n("<a/>");
                t.open = !0
            }
            return i && (t.onComplete = i), r.each(function() {
                n.data(this, w, n.extend({}, n.data(this, w) || ci, t));
                n(this).addClass(ut)
            }), (n.isFunction(t.open) && t.open.call(r) || t.open) && si(r[0]), r
        };
        u.init = function() {
            v = n(i);
            h = f().attr({
                id: w,
                "class": ft ? c + (et ? "IE6" : "IE") : ""
            });
            g = f("Overlay", et ? "position:absolute" : "").hide();
            rt = f("Wrapper");
            p = f("Content").append(a = f("LoadedContent", "width:0; height:0; overflow:hidden"), st = f("LoadingOverlay").add(f("LoadingGraphic")), ri = f("Title"), ui = f("Current"), ct = f("Next"), lt = f("Previous"), ht = f("Slideshow").bind(li, yi), fi = f("Close"));
            rt.append(f().append(f("TopLeft"), gt = f("TopCenter"), f("TopRight")), f(!1, "clear:left").append(ni = f("MiddleLeft"), p, ti = f("MiddleRight")), f(!1, "clear:left").append(f("BottomLeft"), ii = f("BottomCenter"), f("BottomRight"))).children().children().css({
                float: "left"
            });
            ot = f(!1, "position:absolute; width:9999px; visibility:hidden; display:none");
            n("body").prepend(g, h.append(rt, ot));
            p.children().hover(function() {
                n(this).addClass("hover")
            }, function() {
                n(this).removeClass("hover")
            }).addClass("hover");
            nt = gt.height() + ii.height() + p.outerHeight(!0) - p.height();
            tt = ni.width() + ti.width() + p.outerWidth(!0) - p.width();
            b = a.outerHeight(!0);
            k = a.outerWidth(!0);
            h.css({
                "padding-bottom": nt,
                "padding-right": tt
            }).hide();
            ct.click(function() {
                u.next()
            });
            lt.click(function() {
                u.prev()
            });
            fi.click(function() {
                u.close()
            });
            ei = ct.add(lt).add(ui).add(ht);
            p.children().removeClass("hover");
            g.click(function() {
                r.overlayClose && u.close()
            });
            n(t).bind("keydown." + c, function(n) {
                var t = n.keyCode;
                d && r.escKey && t === 27 && (n.preventDefault(), u.close());
                d && r.arrowKey && e[1] && (t === 37 ? (n.preventDefault(), lt.click()) : t === 39 && (n.preventDefault(), ct.click()))
            })
        };
        u.remove = function() {
            h.add(g).remove();
            n("." + ut).removeData(w).removeClass(ut)
        };
        u.position = function(n, i) {
            function o(n) {
                gt[0].style.width = ii[0].style.width = p[0].style.width = n.style.width;
                st[0].style.height = st[1].style.height = p[0].style.height = ni[0].style.height = ti[0].style.height = n.style.height
            }
            var f = 0,
                e = 0;
            v.unbind("resize." + c);
            h.hide();
            r.fixed && !et ? h.css({
                position: "fixed"
            }) : (f = v.scrollTop(), e = v.scrollLeft(), h.css({
                position: "absolute"
            }));
            e += r.right !== !1 ? Math.max(v.width() - r.w - k - tt - l(r.right, "x"), 0) : r.left !== !1 ? l(r.left, "x") : Math.round(Math.max(v.width() - r.w - k - tt, 0) / 2);
            f += r.bottom !== !1 ? Math.max(t.documentElement.clientHeight - r.h - b - nt - l(r.bottom, "y"), 0) : r.top !== !1 ? l(r.top, "y") : Math.round(Math.max(t.documentElement.clientHeight - r.h - b - nt, 0) / 2);
            h.show();
            n = h.width() === r.w + k && h.height() === r.h + b ? 0 : n || 0;
            rt[0].style.width = rt[0].style.height = "9999px";
            h.dequeue().animate({
                width: r.w + k,
                height: r.h + b,
                top: f,
                left: e
            }, {
                duration: n,
                complete: function() {
                    o(this);
                    at = !1;
                    rt[0].style.width = r.w + k + tt + "px";
                    rt[0].style.height = r.h + b + nt + "px";
                    i && i();
                    setTimeout(function() {
                        v.bind("resize." + c, u.position)
                    }, 1)
                },
                step: function() {
                    o(this)
                }
            })
        };
        u.resize = function(n) {
            if (d) {
                if (n = n || {}, n.width && (r.w = l(n.width, "x") - k - tt), n.innerWidth && (r.w = l(n.innerWidth, "x")), a.css({
                        width: r.w
                    }), n.height && (r.h = l(n.height, "y") - b - nt), n.innerHeight && (r.h = l(n.innerHeight, "y")), !n.innerHeight && !n.height) {
                    var t = a.wrapInner("<div style='overflow:auto'><\/div>").children();
                    r.h = t.height();
                    t.replaceWith(t.children())
                }
                a.css({
                    height: r.h
                });
                u.position(r.transition === "none" ? 0 : r.speed)
            }
        };
        u.prep = function(t) {
            function v() {
                return r.h = r.h || a.height(), r.h = r.mh && r.mh < r.h ? r.mh : r.h, r.h
            }

            function y() {
                return r.w = r.w || a.width(), r.w = r.mw && r.mw < r.w ? r.mw : r.w, r.w
            }
            if (!!d) {
                var i, l = r.transition === "none" ? 0 : r.speed;
                a.remove();
                a = f("LoadedContent").append(t);
                a.hide().appendTo(ot.show()).css({
                    width: y(),
                    overflow: r.scrolling ? "auto" : "hidden"
                }).css({
                    height: v()
                }).prependTo(p);
                ot.hide();
                n(s).css({
                    float: "none"
                });
                et && n("select").not(h.find("select")).filter(function() {
                    return this.style.visibility !== "hidden"
                }).css({
                    visibility: "hidden"
                }).one(vt, function() {
                    this.style.visibility = "inherit"
                });
                i = function() {
                    function b() {
                        ft && h[0].style.removeAttribute("filter")
                    }
                    var v, i, y, u, f = e.length,
                        t, p;
                    d && (p = function() {
                        clearTimeout(vi);
                        st.hide();
                        it(dt, r.onComplete)
                    }, ft && s && a.fadeIn(100), ri.html(r.title).add(a).show(), f > 1 ? (typeof r.current == "string" && ui.html(r.current.replace("{current}", o + 1).replace("{total}", f)).show(), ct[r.loop || o < f - 1 ? "show" : "hide"]().html(r.next), lt[r.loop || o ? "show" : "hide"]().html(r.previous), v = o ? e[o - 1] : e[f - 1], y = o < f - 1 ? e[o + 1] : e[0], r.slideshow && ht.show(), r.preloading && (u = n.data(y, w).href || y.href, i = n.data(v, w).href || v.href, u = n.isFunction(u) ? u.call(y) : u, i = n.isFunction(i) ? i.call(v) : i, bt(u) && (n("<img/>")[0].src = u), bt(i) && (n("<img/>")[0].src = i))) : ei.hide(), r.iframe ? (t = n("<iframe/>").addClass(c + "Iframe")[0], r.fastIframe ? p() : n(t).one("load", p), t.name = c + +new Date, t.src = r.href, r.scrolling || (t.scrolling = "no"), ft && (t.frameBorder = 0, t.allowTransparency = "true"), n(t).appendTo(a).one(yt, function() {
                        t.src = "//about:blank"
                    })) : p(), r.transition === "fade" ? h.fadeTo(l, 1, b) : b())
                };
                r.transition === "fade" ? h.fadeTo(l, 0, function() {
                    u.position(0, i)
                }) : u.position(l, i)
            }
        };
        u.load = function(t) {
            var i, v, h = u.prep;
            at = !0;
            s = !1;
            y = e[o];
            t || hi();
            it(yt);
            it(kt, r.onLoad);
            r.h = r.height ? l(r.height, "y") - b - nt : r.innerHeight && l(r.innerHeight, "y");
            r.w = r.width ? l(r.width, "x") - k - tt : r.innerWidth && l(r.innerWidth, "x");
            r.mw = r.w;
            r.mh = r.h;
            r.maxWidth && (r.mw = l(r.maxWidth, "x") - k - tt, r.mw = r.w && r.w < r.mw ? r.w : r.mw);
            r.maxHeight && (r.mh = l(r.maxHeight, "y") - b - nt, r.mh = r.h && r.h < r.mh ? r.h : r.mh);
            i = r.href;
            vi = setTimeout(function() {
                st.show()
            }, 100);
            r.inline ? (f().hide().insertBefore(n(i)[0]).one(yt, function() {
                n(this).replaceWith(a.children())
            }), h(n(i))) : r.iframe ? h(" ") : r.html ? h(r.html) : bt(i) ? (n(s = new Image).addClass(c + "Photo").error(function() {
                r.title = !1;
                h(f("Error").text("This image could not be loaded"))
            }).load(function() {
                var n;
                s.onload = null;
                r.scalePhotos && (v = function() {
                    s.height -= s.height * n;
                    s.width -= s.width * n
                }, r.mw && s.width > r.mw && (n = (s.width - r.mw) / s.width, v()), r.mh && s.height > r.mh && (n = (s.height - r.mh) / s.height, v()));
                r.h && (s.style.marginTop = Math.max(r.h - s.height, 0) / 2 + "px");
                e[1] && (o < e.length - 1 || r.loop) && (s.style.cursor = "pointer", s.onclick = function() {
                    u.next()
                });
                ft && (s.style.msInterpolationMode = "bicubic");
                setTimeout(function() {
                    h(s)
                }, 1)
            }), setTimeout(function() {
                s.src = i
            }, 1)) : i && ot.load(i, r.data, function(t, i, r) {
                h(i === "error" ? f("Error").text("Request unsuccessful: " + r.statusText) : n(this).contents())
            })
        };
        u.next = function() {
            !at && e[1] && (o < e.length - 1 || r.loop) && (o = o < e.length - 1 ? o + 1 : 0, u.load())
        };
        u.prev = function() {
            !at && e[1] && (o || r.loop) && (o = o ? o - 1 : e.length - 1, u.load())
        };
        u.close = function() {
            d && !wt && (wt = !0, d = !1, it(vt, r.onCleanup), v.unbind("." + c + " ." + pt), g.fadeTo(200, 0), h.stop().fadeTo(300, 0, function() {
                h.add(g).css({
                    opacity: 1,
                    cursor: "auto"
                }).hide();
                it(yt);
                a.remove();
                setTimeout(function() {
                    wt = !1;
                    it(ai, r.onClosed)
                }, 1)
            }))
        };
        u.element = function() {
            return n(y)
        };
        u.settings = ci;
        oi = function(n) {
            n.button !== 0 && typeof n.button != "undefined" || n.ctrlKey || n.shiftKey || n.altKey || (n.preventDefault(), si(this))
        };
        n.fn.delegate ? n(t).delegate("." + ut, "click", oi) : n("." + ut).live("click", oi);
        n(u.init)
    }(jQuery, document, this);
! function(n) {
    "use strict";
    n.fn.countUp = function(t) {
        var i = n.extend({
            time: 2e3,
            delay: 10
        }, t);
        return this.each(function() {
            var t = n(this),
                r = i,
                u = function() {
                    var i, h;
                    t.data("counterupTo") || t.data("counterupTo", t.text());
                    var c = parseInt(t.data("counter-time")) > 0 ? parseInt(t.data("counter-time")) : r.time,
                        f = parseInt(t.data("counter-delay")) > 0 ? parseInt(t.data("counter-delay")) : r.delay,
                        e = c / f,
                        n = t.data("counterupTo"),
                        o = [n],
                        l = /[0-9]+,[0-9]+/.test(n);
                    n = n.replace(/,/g, "");
                    for (var s = (/^[0-9]+$/.test(n), /^[0-9]+\.[0-9]+$/.test(n)), a = s ? (n.split(".")[1] || []).length : 0, u = e; u >= 1; u--) {
                        if (i = parseInt(Math.round(n / e * u)), s && (i = parseFloat(n / e * u).toFixed(a)), l)
                            for (;
                                /(\d+)(\d{3})/.test(i.toString());) i = i.toString().replace(/(\d+)(\d{3})/, "$1,$2");
                        o.unshift(i)
                    }
                    t.data("counterup-nums", o);
                    t.text("0");
                    h = function() {
                        t.text(t.data("counterup-nums").shift());
                        t.data("counterup-nums").length ? setTimeout(t.data("counterup-func"), f) : (delete t.data("counterup-nums"), t.data("counterup-nums", null), t.data("counterup-func", null))
                    };
                    t.data("counterup-func", h);
                    setTimeout(t.data("counterup-func"), f)
                };
            t.waypoint(u, {
                offset: "100%",
                triggerOnce: !0
            })
        })
    }
}(jQuery),
function(n) {
    n.jCarouselLite = {
        version: "1.1"
    };
    n.fn.jCarouselLite = function(t) {
        return t = n.extend({}, n.fn.jCarouselLite.options, t || {}), this.each(function() {
            function c(n) {
                return l || (clearTimeout(b), i = n, t.beforeStart && t.beforeStart.call(this, d()), t.circular ? rt(n) : ut(n), et({
                    start: function() {
                        l = !0
                    },
                    done: function() {
                        t.afterEnd && t.afterEnd.call(this, d());
                        t.auto && k();
                        l = !1
                    }
                }), t.circular || ft()), !1
            }

            function g() {
                if (l = !1, a = t.vertical ? "top" : "left", y = t.vertical ? "height" : "width", u = s.find(">ul"), v = u.find(">li"), h = v.size(), r = h < t.visible ? h : t.visible, t.circular) {
                    var e = v.slice(h - r).clone(),
                        c = v.slice(0, r).clone();
                    u.prepend(e).append(c);
                    t.start += r
                }
                f = n("li", u);
                o = f.size();
                i = t.start
            }

            function nt() {
                s.css("visibility", "visible");
                f.css({
                    overflow: "hidden",
                    float: t.vertical ? "none" : "left"
                });
                u.css({
                    margin: "0",
                    padding: "0",
                    position: "relative",
                    "list-style": "none",
                    "z-index": "1"
                });
                s.css({
                    overflow: "hidden",
                    position: "relative",
                    "z-index": "2",
                    left: "0px"
                });
                !t.circular && t.btnPrev && t.start == 0 && n(t.btnPrev).addClass("disabled")
            }

            function tt() {
                e = t.vertical ? f.outerHeight(!0) : f.outerWidth(!0);
                p = e * o;
                w = e * r;
                f.css({
                    width: f.width(),
                    height: f.height()
                });
                u.css(y, p + "px").css(a, -(i * e));
                s.css(y, w + "px")
            }

            function it() {
                t.btnPrev && n(t.btnPrev).click(function() {
                    return c(i - t.scroll)
                });
                t.btnNext && n(t.btnNext).click(function() {
                    return c(i + t.scroll)
                });
                t.btnGo && n.each(t.btnGo, function(i, u) {
                    n(u).click(function() {
                        return c(t.circular ? r + i : i)
                    })
                });
                t.mouseWheel && s.mousewheel && s.mousewheel(function(n, r) {
                    return r > 0 ? c(i - t.scroll) : c(i + t.scroll)
                });
                t.auto && k()
            }

            function k() {
                b = setTimeout(function() {
                    c(i + t.scroll)
                }, t.auto)
            }

            function d() {
                return f.slice(i).slice(0, r)
            }

            function rt(n) {
                var f;
                n <= t.start - r - 1 ? (f = n + h + t.scroll, u.css(a, -(f * e) + "px"), i = f - t.scroll, console.log("Before - Positioned at: " + f + " and Moving to: " + i)) : n >= o - r + 1 && (f = n - h - t.scroll, u.css(a, -(f * e) + "px"), i = f + t.scroll, console.log("After - Positioned at: " + f + " and Moving to: " + i))
            }

            function ut(n) {
                n < 0 ? i = 0 : n > o - r && (i = o - r);
                console.log("Item Length: " + o + "; To: " + n + "; CalculatedTo: " + i + "; Num Visible: " + r)
            }

            function ft() {
                n(t.btnPrev + "," + t.btnNext).removeClass("disabled");
                n(i - t.scroll < 0 && t.btnPrev || i + t.scroll > o - r && t.btnNext || []).addClass("disabled")
            }

            function et(r) {
                l = !0;
                u.animate(a == "left" ? {
                    left: -(i * e)
                } : {
                    top: -(i * e)
                }, n.extend({
                    duration: t.speed,
                    easing: t.easing
                }, r))
            }
            var l, a, y, s = n(this),
                u, v, f, e, p, w, r, h, o, i, b;
            g();
            nt();
            tt();
            it()
        })
    };
    n.fn.jCarouselLite.options = {
        btnPrev: null,
        btnNext: null,
        btnGo: null,
        mouseWheel: !1,
        auto: null,
        speed: 200,
        easing: null,
        vertical: !1,
        circular: !0,
        visible: 3,
        start: 0,
        scroll: 1,
        beforeStart: null,
        afterEnd: null
    }
}(jQuery),
function(n, t, i, r) {
    var u = n(t);
    n.fn.lazyload = function(f) {
        function s() {
            var t = 0;
            o.each(function() {
                var i = n(this);
                if ((!e.skip_invisible || i.is(":visible")) && !n.abovethetop(this, e) && !n.leftofbegin(this, e))
                    if (n.belowthefold(this, e) || n.rightoffold(this, e)) {
                        if (++t > e.failure_limit) return !1
                    } else i.trigger("appear"), t = 0
            })
        }
        var o = this,
            h, e = {
                threshold: 0,
                failure_limit: 0,
                event: "scroll",
                effect: "show",
                container: t,
                data_attribute: "original",
                skip_invisible: !0,
                appear: null,
                load: null,
                placeholder: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
            };
        return f && (r !== f.failurelimit && (f.failure_limit = f.failurelimit, delete f.failurelimit), r !== f.effectspeed && (f.effect_speed = f.effectspeed, delete f.effectspeed), n.extend(e, f)), h = e.container === r || e.container === t ? u : n(e.container), 0 === e.event.indexOf("scroll") && h.bind(e.event, function() {
            return s()
        }), this.each(function() {
            var i = this,
                t = n(i);
            i.loaded = !1;
            (t.attr("src") === r || t.attr("src") === !1) && t.is("img") && t.attr("src", e.placeholder);
            t.one("appear", function() {
                if (!this.loaded) {
                    if (e.appear) {
                        var r = o.length;
                        e.appear.call(i, r, e)
                    }
                    n("<img />").bind("load", function() {
                        var r = t.attr("data-" + e.data_attribute),
                            u, f;
                        t.hide();
                        t.is("img") ? t.attr("src", r) : t.css("background-image", "url('" + r + "')");
                        t[e.effect](e.effect_speed);
                        i.loaded = !0;
                        u = n.grep(o, function(n) {
                            return !n.loaded
                        });
                        o = n(u);
                        e.load && (f = o.length, e.load.call(i, f, e))
                    }).attr("src", t.attr("data-" + e.data_attribute))
                }
            });
            0 !== e.event.indexOf("scroll") && t.bind(e.event, function() {
                i.loaded || t.trigger("appear")
            })
        }), u.bind("resize", function() {
            s()
        }), /(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion) && u.bind("pageshow", function(t) {
            t.originalEvent && t.originalEvent.persisted && o.each(function() {
                n(this).trigger("appear")
            })
        }), n(i).ready(function() {
            s()
        }), this
    };
    n.belowthefold = function(i, f) {
        var e;
        return e = f.container === r || f.container === t ? (t.innerHeight ? t.innerHeight : u.height()) + u.scrollTop() : n(f.container).offset().top + n(f.container).height(), e <= n(i).offset().top - f.threshold
    };
    n.rightoffold = function(i, f) {
        var e;
        return e = f.container === r || f.container === t ? u.width() + u.scrollLeft() : n(f.container).offset().left + n(f.container).width(), e <= n(i).offset().left - f.threshold
    };
    n.abovethetop = function(i, f) {
        var e;
        return e = f.container === r || f.container === t ? u.scrollTop() : n(f.container).offset().top, e >= n(i).offset().top + f.threshold + n(i).height()
    };
    n.leftofbegin = function(i, f) {
        var e;
        return e = f.container === r || f.container === t ? u.scrollLeft() : n(f.container).offset().left, e >= n(i).offset().left + f.threshold + n(i).width()
    };
    n.inviewport = function(t, i) {
        return !n.rightoffold(t, i) && !n.leftofbegin(t, i) && !n.belowthefold(t, i) && !n.abovethetop(t, i)
    };
    n.extend(n.expr[":"], {
        "below-the-fold": function(t) {
            return n.belowthefold(t, {
                threshold: 0
            })
        },
        "above-the-top": function(t) {
            return !n.belowthefold(t, {
                threshold: 0
            })
        },
        "right-of-screen": function(t) {
            return n.rightoffold(t, {
                threshold: 0
            })
        },
        "left-of-screen": function(t) {
            return !n.rightoffold(t, {
                threshold: 0
            })
        },
        "in-viewport": function(t) {
            return n.inviewport(t, {
                threshold: 0
            })
        },
        "above-the-fold": function(t) {
            return !n.belowthefold(t, {
                threshold: 0
            })
        },
        "right-of-fold": function(t) {
            return n.rightoffold(t, {
                threshold: 0
            })
        },
        "left-of-fold": function(t) {
            return !n.rightoffold(t, {
                threshold: 0
            })
        }
    })
}(jQuery, window, document),
function(n) {
    n.fn.extend({
        slimScroll: function(i) {
            var r = n.extend({
                width: "auto",
                height: "250px",
                size: "7px",
                color: "#000",
                position: "right",
                distance: "1px",
                start: "top",
                opacity: .4,
                alwaysVisible: !1,
                disableFadeOut: !1,
                railVisible: !1,
                railColor: "#333",
                railOpacity: .2,
                railDraggable: !0,
                railClass: "slimScrollRail",
                barClass: "slimScrollBar",
                wrapperClass: "slimScrollDiv",
                allowPageScroll: !1,
                wheelStep: 20,
                touchScrollStep: 200,
                borderRadius: "7px",
                railBorderRadius: "7px"
            }, i);
            return this.each(function() {
                function p(t) {
                    if (v) {
                        t = t || window.event;
                        var i = 0;
                        t.wheelDelta && (i = -t.wheelDelta / 120);
                        t.detail && (i = t.detail / 3);
                        n(t.target || t.srcTarget || t.srcElement).closest("." + r.wrapperClass).is(u.parent()) && h(i, !0);
                        t.preventDefault && !s && t.preventDefault();
                        s || (t.returnValue = !1)
                    }
                }

                function h(n, t, i) {
                    s = !1;
                    var e = u.outerHeight() - f.outerHeight();
                    t && (t = parseInt(f.css("top")) + n * parseInt(r.wheelStep) / 100 * f.outerHeight(), t = Math.min(Math.max(t, 0), e), t = 0 < n ? Math.ceil(t) : Math.floor(t), f.css({
                        top: t + "px"
                    }));
                    o = parseInt(f.css("top")) / (u.outerHeight() - f.outerHeight());
                    t = o * (u[0].scrollHeight - u.outerHeight());
                    i && (t = n, n = t / u[0].scrollHeight * u.outerHeight(), n = Math.min(Math.max(n, 0), e), f.css({
                        top: n + "px"
                    }));
                    u.scrollTop(t);
                    u.trigger("slimscrolling", ~~t);
                    b();
                    l()
                }

                function w() {
                    y = Math.max(u.outerHeight() / u[0].scrollHeight * u.outerHeight(), 30);
                    f.css({
                        height: y + "px"
                    });
                    var n = y == u.outerHeight() ? "none" : "block";
                    f.css({
                        display: n
                    })
                }

                function b() {
                    w();
                    clearTimeout(nt);
                    o == ~~o ? (s = r.allowPageScroll, tt != o && u.trigger("slimscroll", 0 == ~~o ? "top" : "bottom")) : s = !1;
                    tt = o;
                    y >= u.outerHeight() ? s = !0 : (f.stop(!0, !0).fadeIn("fast"), r.railVisible && c.stop(!0, !0).fadeIn("fast"))
                }

                function l() {
                    r.alwaysVisible || (nt = setTimeout(function() {
                        r.disableFadeOut && v || k || d || (f.fadeOut("slow"), c.fadeOut("slow"))
                    }, 1e3))
                }
                var v, k, d, nt, g, y, o, tt, s = !1,
                    u = n(this),
                    e;
                if (u.parent().hasClass(r.wrapperClass)) {
                    var a = u.scrollTop(),
                        f = u.siblings("." + r.barClass),
                        c = u.siblings("." + r.railClass);
                    if (w(), n.isPlainObject(i)) {
                        if ("height" in i && "auto" == i.height ? (u.parent().css("height", "auto"), u.css("height", "auto"), e = u.parent().parent().height(), u.parent().css("height", e), u.css("height", e)) : "height" in i && (e = i.height, u.parent().css("height", e), u.css("height", e)), "scrollTo" in i) a = parseInt(r.scrollTo);
                        else if ("scrollBy" in i) a += parseInt(r.scrollBy);
                        else if ("destroy" in i) {
                            f.remove();
                            c.remove();
                            u.unwrap();
                            return
                        }
                        h(a, !1, !0)
                    }
                } else if (!(n.isPlainObject(i) && "destroy" in i)) {
                    r.height = "auto" == r.height ? u.parent().height() : r.height;
                    a = n("<div><\/div>").addClass(r.wrapperClass).css({
                        position: "relative",
                        overflow: "hidden",
                        width: r.width,
                        height: r.height
                    });
                    u.css({
                        overflow: "hidden",
                        width: r.width,
                        height: r.height
                    });
                    var c = n("<div><\/div>").addClass(r.railClass).css({
                            width: r.size,
                            height: "100%",
                            position: "absolute",
                            top: 0,
                            display: r.alwaysVisible && r.railVisible ? "block" : "none",
                            "border-radius": r.railBorderRadius,
                            background: r.railColor,
                            opacity: r.railOpacity,
                            zIndex: 90
                        }),
                        f = n("<div><\/div>").addClass(r.barClass).css({
                            background: r.color,
                            width: r.size,
                            position: "absolute",
                            top: 0,
                            opacity: r.opacity,
                            display: r.alwaysVisible ? "block" : "none",
                            "border-radius": r.borderRadius,
                            BorderRadius: r.borderRadius,
                            MozBorderRadius: r.borderRadius,
                            WebkitBorderRadius: r.borderRadius,
                            zIndex: 99
                        }),
                        e = "right" == r.position ? {
                            right: r.distance
                        } : {
                            left: r.distance
                        };
                    c.css(e);
                    f.css(e);
                    u.wrap(a);
                    u.parent().append(f);
                    u.parent().append(c);
                    r.railDraggable && f.bind("mousedown", function(i) {
                        var r = n(document);
                        return d = !0, t = parseFloat(f.css("top")), pageY = i.pageY, r.bind("mousemove.slimscroll", function(n) {
                            currTop = t + n.pageY - pageY;
                            f.css("top", currTop);
                            h(0, f.position().top, !1)
                        }), r.bind("mouseup.slimscroll", function() {
                            d = !1;
                            l();
                            r.unbind(".slimscroll")
                        }), !1
                    }).bind("selectstart.slimscroll", function(n) {
                        return n.stopPropagation(), n.preventDefault(), !1
                    });
                    c.hover(function() {
                        b()
                    }, function() {
                        l()
                    });
                    f.hover(function() {
                        k = !0
                    }, function() {
                        k = !1
                    });
                    u.hover(function() {
                        v = !0;
                        b();
                        l()
                    }, function() {
                        v = !1;
                        l()
                    });
                    u.bind("touchstart", function(n) {
                        n.originalEvent.touches.length && (g = n.originalEvent.touches[0].pageY)
                    });
                    u.bind("touchmove", function(n) {
                        s || n.originalEvent.preventDefault();
                        n.originalEvent.touches.length && (h((g - n.originalEvent.touches[0].pageY) / r.touchScrollStep, !0), g = n.originalEvent.touches[0].pageY)
                    });
                    w();
                    "bottom" === r.start ? (f.css({
                        top: u.outerHeight() - f.outerHeight()
                    }), h(0, !0)) : "top" !== r.start && (h(n(r.start).position().top, null, !0), r.alwaysVisible || f.hide());
                    window.addEventListener ? (this.addEventListener("DOMMouseScroll", p, !1), this.addEventListener("mousewheel", p, !1)) : document.attachEvent("onmousewheel", p)
                }
            }), this
        }
    });
    n.fn.extend({
        slimscroll: n.fn.slimScroll
    })
}(jQuery),
function(n, t, i, r, u, f, e) {
    function v() {
        function f(n, t) {
            i.push({
                $EventName: n,
                $Handler: t
            })
        }

        function e(n, t) {
            o.$Each(i, function(r, u) {
                r.$EventName == n && r.$Handler === t && i.splice(u, 1)
            })
        }

        function s() {
            i = []
        }

        function u() {
            o.$Each(r, function(n) {
                o.$RemoveEvent(n.$Obj, n.$EventName, n.$Handler)
            });
            r = []
        }
        var t = this,
            i = [],
            r = [];
        t.$Listen = function(n, t, i, u) {
            o.$AddEvent(n, t, i, u);
            r.push({
                $Obj: n,
                $EventName: t,
                $Handler: i
            })
        };
        t.$Unlisten = function(n, t, i) {
            o.$Each(r, function(u, f) {
                u.$Obj === n && u.$EventName == t && u.$Handler === i && (o.$RemoveEvent(n, t, i), r.splice(f, 1))
            })
        };
        t.$UnlistenAll = u;
        t.$On = t.addEventListener = f;
        t.$Off = t.removeEventListener = e;
        t.$TriggerEvent = function(t) {
            var r = [].slice.call(arguments, 1);
            o.$Each(i, function(i) {
                i.$EventName == t && i.$Handler.apply(n, r)
            })
        };
        t.$Destroy = function() {
            u();
            s();
            for (var n in t) delete t[n]
        }
    }

    function w(n, t, i) {
        var r = this;
        l.call(r, 0, i);
        r.$Revert = o.$EmptyFunction;
        r.$IdleBegin = 0;
        r.$IdleEnd = i
    }
    var s, h, o, l, p, c, y;
    new function() {
        function i(n) {
            if (n.constructor === i.caller) throw new Error("Cannot create instance of an abstract class.");
        }
        this.$DebugMode = u;
        this.$Log = function(t, i) {
            var r = n.console || {},
                u = this.$DebugMode;
            u && r.log ? r.log(t) : u && i && alert(t)
        };
        this.$Error = function(t, i) {
            var u = n.console || {},
                r = this.$DebugMode;
            if (r && u.error ? u.error(t) : r && alert(t), r) throw i || new Error(t);
        };
        this.$Fail = function(n) {
            throw new Error(n);
        };
        this.$Assert = function(n, t) {
            var i = this.$DebugMode;
            if (i && !n) throw new Error("Assert failed " + t || "");
        };
        this.$Trace = function(t) {
            var i = n.console || {},
                r = this.$DebugMode;
            r && i.log && i.log(t)
        };
        this.$Execute = function(n) {
            var t = this.$DebugMode;
            t && n()
        };
        this.$LiveStamp = function(n, i) {
            var u = this.$DebugMode,
                r;
            u && (r = t.createElement("DIV"), r.setAttribute("id", i), n.$Live = r)
        };
        this.$C_AbstractProperty = function() {
            throw new Error("The property is abstract, it should be implemented by subclass.");
        };
        this.$C_AbstractMethod = function() {
            throw new Error("The method is abstract, it should be implemented by subclass.");
        };
        this.$C_AbstractClass = i
    };
    s = n.$JssorEasing$ = {
        $EaseSwing: function(n) {
            return -i.cos(n * i.PI) / 2 + .5
        },
        $EaseLinear: function(n) {
            return n
        },
        $EaseInQuad: function(n) {
            return n * n
        },
        $EaseOutQuad: function(n) {
            return -n * (n - 2)
        },
        $EaseInOutQuad: function(n) {
            return (n *= 2) < 1 ? 1 / 2 * n * n : -1 / 2 * (--n * (n - 2) - 1)
        },
        $EaseInCubic: function(n) {
            return n * n * n
        },
        $EaseOutCubic: function(n) {
            return (n -= 1) * n * n + 1
        },
        $EaseInOutCubic: function(n) {
            return (n *= 2) < 1 ? 1 / 2 * n * n * n : 1 / 2 * ((n -= 2) * n * n + 2)
        },
        $EaseInQuart: function(n) {
            return n * n * n * n
        },
        $EaseOutQuart: function(n) {
            return -((n -= 1) * n * n * n - 1)
        },
        $EaseInOutQuart: function(n) {
            return (n *= 2) < 1 ? 1 / 2 * n * n * n * n : -1 / 2 * ((n -= 2) * n * n * n - 2)
        },
        $EaseInQuint: function(n) {
            return n * n * n * n * n
        },
        $EaseOutQuint: function(n) {
            return (n -= 1) * n * n * n * n + 1
        },
        $EaseInOutQuint: function(n) {
            return (n *= 2) < 1 ? 1 / 2 * n * n * n * n * n : 1 / 2 * ((n -= 2) * n * n * n * n + 2)
        },
        $EaseInSine: function(n) {
            return 1 - i.cos(n * i.PI / 2)
        },
        $EaseOutSine: function(n) {
            return i.sin(n * i.PI / 2)
        },
        $EaseInOutSine: function(n) {
            return -1 / 2 * (i.cos(i.PI * n) - 1)
        },
        $EaseInExpo: function(n) {
            return n == 0 ? 0 : i.pow(2, 10 * (n - 1))
        },
        $EaseOutExpo: function(n) {
            return n == 1 ? 1 : -i.pow(2, -10 * n) + 1
        },
        $EaseInOutExpo: function(n) {
            return n == 0 || n == 1 ? n : (n *= 2) < 1 ? 1 / 2 * i.pow(2, 10 * (n - 1)) : 1 / 2 * (-i.pow(2, -10 * --n) + 2)
        },
        $EaseInCirc: function(n) {
            return -(i.sqrt(1 - n * n) - 1)
        },
        $EaseOutCirc: function(n) {
            return i.sqrt(1 - (n -= 1) * n)
        },
        $EaseInOutCirc: function(n) {
            return (n *= 2) < 1 ? -1 / 2 * (i.sqrt(1 - n * n) - 1) : 1 / 2 * (i.sqrt(1 - (n -= 2) * n) + 1)
        },
        $EaseInElastic: function(n) {
            if (!n || n == 1) return n;
            return -(i.pow(2, 10 * (n -= 1)) * i.sin((n - .075) * 2 * i.PI / .3))
        },
        $EaseOutElastic: function(n) {
            if (!n || n == 1) return n;
            return i.pow(2, -10 * n) * i.sin((n - .075) * 2 * i.PI / .3) + 1
        },
        $EaseInOutElastic: function(n) {
            if (!n || n == 1) return n;
            var t = .45,
                r = .1125;
            return (n *= 2) < 1 ? -.5 * i.pow(2, 10 * (n -= 1)) * i.sin((n - r) * 2 * i.PI / t) : i.pow(2, -10 * (n -= 1)) * i.sin((n - r) * 2 * i.PI / t) * .5 + 1
        },
        $EaseInBack: function(n) {
            var t = 1.70158;
            return n * n * ((t + 1) * n - t)
        },
        $EaseOutBack: function(n) {
            var t = 1.70158;
            return (n -= 1) * n * ((t + 1) * n + t) + 1
        },
        $EaseInOutBack: function(n) {
            var t = 1.70158;
            return (n *= 2) < 1 ? 1 / 2 * n * n * (((t *= 1.525) + 1) * n - t) : 1 / 2 * ((n -= 2) * n * (((t *= 1.525) + 1) * n + t) + 2)
        },
        $EaseInBounce: function(n) {
            return 1 - s.$EaseOutBounce(1 - n)
        },
        $EaseOutBounce: function(n) {
            return n < 1 / 2.75 ? 7.5625 * n * n : n < 2 / 2.75 ? 7.5625 * (n -= 1.5 / 2.75) * n + .75 : n < 2.5 / 2.75 ? 7.5625 * (n -= 2.25 / 2.75) * n + .9375 : 7.5625 * (n -= 2.625 / 2.75) * n + .984375
        },
        $EaseInOutBounce: function(n) {
            return n < 1 / 2 ? s.$EaseInBounce(n * 2) * .5 : s.$EaseOutBounce(n * 2 - 1) * .5 + .5
        },
        $EaseGoBack: function() {
            return 1 - i.abs(1)
        },
        $EaseInWave: function(n) {
            return 1 - i.cos(n * i.PI * 2)
        },
        $EaseOutWave: function(n) {
            return i.sin(n * i.PI * 2)
        },
        $EaseOutJump: function(n) {
            return 1 - ((n *= 2) < 1 ? (n = 1 - n) * n * n : (n -= 1) * n * n)
        },
        $EaseInJump: function(n) {
            return (n *= 2) < 1 ? n * n * n : (n = 2 - n) * n * n
        }
    };
    h = n.$Jease$ = {
        $Swing: s.$EaseSwing,
        $Linear: s.$EaseLinear,
        $InQuad: s.$EaseInQuad,
        $OutQuad: s.$EaseOutQuad,
        $InOutQuad: s.$EaseInOutQuad,
        $InCubic: s.$EaseInCubic,
        $OutCubic: s.$EaseOutCubic,
        $InOutCubic: s.$EaseInOutCubic,
        $InQuart: s.$EaseInQuart,
        $OutQuart: s.$EaseOutQuart,
        $InOutQuart: s.$EaseInOutQuart,
        $InQuint: s.$EaseInQuint,
        $OutQuint: s.$EaseOutQuint,
        $InOutQuint: s.$EaseInOutQuint,
        $InSine: s.$EaseInSine,
        $OutSine: s.$EaseOutSine,
        $InOutSine: s.$EaseInOutSine,
        $InExpo: s.$EaseInExpo,
        $OutExpo: s.$EaseOutExpo,
        $InOutExpo: s.$EaseInOutExpo,
        $InCirc: s.$EaseInCirc,
        $OutCirc: s.$EaseOutCirc,
        $InOutCirc: s.$EaseInOutCirc,
        $InElastic: s.$EaseInElastic,
        $OutElastic: s.$EaseOutElastic,
        $InOutElastic: s.$EaseInOutElastic,
        $InBack: s.$EaseInBack,
        $OutBack: s.$EaseOutBack,
        $InOutBack: s.$EaseInOutBack,
        $InBounce: s.$EaseInBounce,
        $OutBounce: s.$EaseOutBounce,
        $InOutBounce: s.$EaseInOutBounce,
        $GoBack: s.$EaseGoBack,
        $InWave: s.$EaseInWave,
        $OutWave: s.$EaseOutWave,
        $OutJump: s.$EaseOutJump,
        $InJump: s.$EaseInJump
    };
    n.$JssorDirection$ = {
        $TO_LEFT: 1,
        $TO_RIGHT: 2,
        $TO_TOP: 4,
        $TO_BOTTOM: 8,
        $HORIZONTAL: 3,
        $VERTICAL: 12,
        $GetDirectionHorizontal: function(n) {
            return n & 3
        },
        $GetDirectionVertical: function(n) {
            return n & 12
        },
        $IsHorizontal: function(n) {
            return n & 3
        },
        $IsVertical: function(n) {
            return n & 12
        }
    };
    o = n.$Jssor$ = new function() {
        function pr() {
            if (!ct) {
                ct = {
                    $Touchable: "ontouchstart" in n || "createTouch" in t
                };
                var i;
                (lt.pointerEnabled || (i = lt.msPointerEnabled)) && (ct.$TouchActionAttr = i ? "msTouchAction" : "touchAction")
            }
            return ct
        }

        function g(i) {
            var u, s, r;
            if (!w)
                if (w = -1, ki != "Microsoft Internet Explorer" || !n.attachEvent || !n.ActiveXObject)
                    if (ki != "Netscape" || !n.addEventListener) r = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(y), r && (w = wi, c = p(r[2]));
                    else {
                        var e = y.indexOf("Firefox"),
                            f = y.indexOf("Safari"),
                            h = y.indexOf("Chrome"),
                            o = y.indexOf("AppleWebKit");
                        e >= 0 ? (w = vi, c = p(y.substring(e + 8))) : f >= 0 ? (s = y.substring(0, f).lastIndexOf("/"), w = h >= 0 ? pi : yi, c = p(y.substring(s + 1, f))) : (r = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(y), r && (w = ht, c = k = p(r[1])));
                        o >= 0 && (ut = p(y.substring(o + 12)))
                    }
            else u = y.indexOf("MSIE"), w = ht, k = p(y.substring(u + 5, y.indexOf(";", u))), c = t.documentMode || k;
            return i == w
        }

        function b() {
            return g(ht)
        }

        function dt() {
            return b() && (c < 6 || t.compatMode == "BackCompat")
        }

        function wr() {
            return g(vi)
        }

        function di() {
            return g(yi)
        }

        function br() {
            return g(pi)
        }

        function gi() {
            return g(wi)
        }

        function nr() {
            return di() && ut > 534 && ut < 535
        }

        function at() {
            return g(), ut > 537 || c > 42 || w == ht && c >= 11
        }

        function gt() {
            return b() && c < 9
        }

        function tr(n) {
            var t, i;
            return function(r) {
                if (!t) {
                    t = u;
                    var f = n.substr(0, 1).toUpperCase() + n.substr(1);
                    v([n].concat(["WebKit", "ms", "Moz", "O", "webkit"]), function(t, u) {
                        var o = n;
                        return u && (o = t + f), r.style[o] != e ? i = o : void 0
                    })
                }
                return i
            }
        }

        function ir(n) {
            var t;
            return function(i) {
                return t = t || tr(n)(i) || n
            }
        }

        function rr(n) {
            return {}.toString.call(n)
        }

        function kr() {
            return vt || (vt = {}, v(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function(n) {
                vt["[object " + n + "]"] = n.toLowerCase()
            })), vt
        }

        function v(n, t) {
            var i, r;
            if (rr(n) == "[object Array]") {
                for (i = 0; i < n.length; i++)
                    if (r = t(n[i], i, n)) return r
            } else
                for (i in n)
                    if (r = t(n[i], i, n)) return r
        }

        function ft(n) {
            return n == r ? String(n) : kr()[rr(n)] || "object"
        }

        function ur(n) {
            for (var t in n) return u
        }

        function et(n) {
            try {
                return ft(n) == "object" && !n.nodeType && n != n.window && (!n.constructor || {}.hasOwnProperty.call(n.constructor.prototype, "isPrototypeOf"))
            } catch (t) {}
        }

        function nt(n, t) {
            return {
                x: n,
                y: t
            }
        }

        function fr(n, t) {
            setTimeout(n, t || 0)
        }

        function yt(n, t, i) {
            var r = !n || n == "inherit" ? "" : n;
            return v(t, function(n) {
                var t = n.exec(r),
                    i, u;
                t && (i = r.substr(0, t.index), u = r.substr(t.index + t[0].length + 1, r.length - 1), r = i + u)
            }), r = i + (r.indexOf(" ") ? " " : "") + r
        }

        function er(n, t) {
            c < 9 && (n.style.filter = t)
        }

        function ti(n) {
            n.constructor === ti.caller && n.$Construct && n.$Construct.apply(n, ti.caller.arguments)
        }

        function d(t) {
            return t || n.event
        }

        function ot(t, i, u) {
            if (u !== e) t.style[i] = u == e ? "" : u;
            else {
                var f = t.currentStyle || t.style;
                return u = f[i], u == "" && n.getComputedStyle && (f = t.ownerDocument.defaultView.getComputedStyle(t, r), f && (u = f.getPropertyValue(i) || f[i])), u
            }
        }

        function ii(n, t, i, u) {
            if (i !== e) i == r ? i = "" : u && (i += "px"), ot(n, t, i);
            else return p(ot(n, t))
        }

        function dr(n, t, i) {
            return ii(n, t, i, u)
        }

        function l(n, t) {
            var r = t ? ii : ot,
                i;
            return t & 4 && (i = ir(n)),
                function(u, f) {
                    return r(u, i ? i(u) : n, f, t & 2)
                }
        }

        function gr(n) {
            if (b() && k < 9) {
                var t = /opacity=([^)]*)/.exec(n.style.filter || "");
                return t ? p(t[1]) / 100 : 1
            }
            return p(n.style.opacity || "1")
        }

        function nu(n, t, r) {
            var e;
            if (b() && k < 9) {
                var o = n.style.filter || "",
                    s = new RegExp(/[\s]*alpha\([^\)]*\)/g),
                    u = i.round(100 * t),
                    f = "";
                (u < 100 || r) && (f = "alpha(opacity=" + u + ") ");
                e = yt(o, [s], f);
                er(n, e)
            } else n.style.opacity = t == 1 ? "" : i.round(t * 100) / 100
        }

        function ri(n, t) {
            var i = "";
            t && (b() && c && c < 10 && (delete t.$RotateX, delete t.$RotateY, delete t.$TranslateZ), o.$Each(t, function(n, t) {
                var r = pt[t],
                    u;
                r && (u = r[1] || 0, kt[t] != n && (i += " " + r[0] + "(" + n + ["deg", "px", ""][u] + ")"))
            }), at() && ((t.$TranslateX || t.$TranslateY || t.$TranslateZ) && (i += " translate3d(" + (t.$TranslateX || 0) + "px," + (t.$TranslateY || 0) + "px," + (t.$TranslateZ || 0) + "px)"), t.$ScaleX == e && (t.$ScaleX = 1), t.$ScaleY == e && (t.$ScaleY = 1), (t.$ScaleX != 1 || t.$ScaleY != 1) && (i += " scale3d(" + t.$ScaleX + ", " + t.$ScaleY + ", 1)")));
            n.style[ni(n)] = i
        }

        function or(n, t, i, u) {
            for (u = u || "u", n = n ? n.firstChild : r; n; n = n.nextSibling)
                if (n.nodeType == 1) {
                    if (hi(n, u) == t) return n;
                    if (!i) {
                        var f = or(n, t, i, u);
                        if (f) return f
                    }
                }
        }

        function sr(n, t, i, u) {
            var f, e;
            for (u = u || "u", f = [], n = n ? n.firstChild : r; n; n = n.nextSibling) n.nodeType == 1 && (hi(n, u) == t && f.push(n), i || (e = sr(n, t, i, u), e.length && (f = f.concat(e))));
            return f
        }

        function hr(n, t, i) {
            for (n = n ? n.firstChild : r; n; n = n.nextSibling)
                if (n.nodeType == 1) {
                    if (n.tagName == t) return n;
                    if (!i) {
                        var u = hr(n, t, i);
                        if (u) return u
                    }
                }
        }

        function cr(n, t, i) {
            var u = [],
                f;
            for (n = n ? n.firstChild : r; n; n = n.nextSibling) n.nodeType == 1 && (t && n.tagName != t || u.push(n), i || (f = cr(n, t, i), f.length && (u = u.concat(f))));
            return u
        }

        function st() {
            for (var i = arguments, u, t, n, o = 1 & i[0], f = 1 + o, s, r = i[f - 1] || {}; f < i.length; f++)
                if (u = i[f])
                    for (t in u) n = u[t], n !== e && (n = u[t], s = r[t], r[t] = o && (et(s) || et(n)) ? st(o, {}, s, n) : n);
            return r
        }

        function ei(n, t) {
            var f = {},
                r, i, u, e;
            for (r in n) i = n[r], u = t[r], i !== u && (et(i) && et(u) && (i = ei(i, u), e = !ur(i)), e || (f[r] = i));
            return f
        }

        function oi(n) {
            return t.createElement(n)
        }

        function si(n, t, i) {
            if (i == e) return n.getAttribute(t);
            n.setAttribute(t, i)
        }

        function hi(n, t) {
            return si(n, t) || si(n, "data-" + t)
        }

        function it(n, t) {
            if (t == e) return n.className;
            n.className = t
        }

        function lr(n) {
            var t = {};
            return v(n, function(n) {
                t[n] = n
            }), t
        }

        function tu(n) {
            var t = [];
            return v(n, function(n) {
                t.push(n)
            }), t
        }

        function ar(n, t) {
            return n.match(t || yr)
        }

        function ci(n, t) {
            return lr(ar(n || "", t))
        }

        function li(n, t) {
            var i = "";
            return v(t, function(t) {
                i && (i += n);
                i += t
            }), i
        }

        function wt(n, t, i) {
            it(n, li(" ", st(ei(ci(it(n)), ci(t)), ci(i))))
        }

        function ai(n, t, i) {
            var r = n.cloneNode(!t);
            return i || h.$RemoveAttribute(r, "id"), r
        }

        function iu(n) {
            function s() {
                wt(n, p, u[r || l || f & 2 || f]);
                o.$Css(n, "pointer-events", r ? "none" : "")
            }

            function i() {
                l = 0;
                s();
                h.$RemoveEvent(t, "mouseup", i);
                h.$RemoveEvent(t, "touchend", i);
                h.$RemoveEvent(t, "touchcancel", i)
            }

            function w(n) {
                r ? h.$CancelEvent(n) : (l = 4, s(), h.$AddEvent(t, "mouseup", i), h.$AddEvent(t, "touchend", i), h.$AddEvent(t, "touchcancel", i))
            }
            var c = this,
                y = "",
                u = [],
                p, l = 0,
                f = 0,
                r = 0,
                a;
            c.$Selected = function(n) {
                if (n === e) return f;
                f = n & 2 || n & 1;
                s()
            };
            c.$Enable = function(n) {
                if (n === e) return !r;
                r = n ? 0 : 3;
                s()
            };
            c.$Elmt = n = h.$GetElement(n);
            a = o.$Split(it(n));
            a && (y = a.shift());
            v(["av", "pv", "ds", "dn"], function(n) {
                u.push(y + n)
            });
            p = li(" ", u);
            u.unshift("");
            h.$AddEvent(n, "mousedown", w);
            h.$AddEvent(n, "touchstart", w)
        }

        function rt(n, t) {
            function l(n, t, r) {
                var u = n.$TransformPoint(nt(-t / 2, -r / 2)),
                    f = n.$TransformPoint(nt(t / 2, -r / 2)),
                    e = n.$TransformPoint(nt(t / 2, r / 2)),
                    o = n.$TransformPoint(nt(-t / 2, r / 2));
                return n.$TransformPoint(nt(300, 300)), nt(i.min(u.x, f.x, e.x, o.x) + t / 2, i.min(u.y, f.y, e.y, o.y) + r / 2)
            }

            function f(n, t) {
                var i, r, f;
                t = t || {};
                var s = t.$TranslateZ || 0,
                    a = (t.$RotateX || 0) % 360,
                    v = (t.$RotateY || 0) % 360,
                    y = (t.$Rotate || 0) % 360,
                    p = t.$ScaleZ;
                if (o && (s = 0, a = 0, v = 0, p = 0), i = new ru(t.$TranslateX, t.$TranslateY, s), i.$RotateX(a), i.$RotateY(v), i.$RotateZ(y), i.$Skew(t.$SkewX, t.$SkewY), i.$Scale(t.$ScaleX, t.$ScaleY, p), u) i.$Move(t.$MoveX, t.$MoveY), n.style[c] = i.$Format3d();
                else if (!bi || bi < 9) {
                    r = "";
                    (y || t.$ScaleX != e && t.$ScaleX != 1 || t.$ScaleY != e && t.$ScaleY != 1) && (f = l(i, t.$OriginalWidth, t.$OriginalHeight), h.$CssMarginTop(n, f.y), h.$CssMarginLeft(n, f.x), r = i.$Format2d());
                    var w = n.style.filter,
                        b = new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),
                        k = yt(w, [b], r);
                    er(n, k)
                }
            }
            var o = gt(),
                u = at(),
                s = nr(),
                c = ni(n);
            rt = function(n, t) {
                t = t || {};
                var o = t.$MoveX,
                    c = t.$MoveY,
                    i;
                v(bt, function(r, u) {
                    i = t[u];
                    i !== e && r(n, i)
                });
                h.$SetStyleClip(n, t.$Clip);
                u || (o != e && h.$CssLeft(n, t.$OriginalX + o), c != e && h.$CssTop(n, t.$OriginalY + c));
                t.$Transform && (s ? fr(h.$CreateCallback(r, ri, n, t)) : f(n, t))
            };
            h.$SetStyleTransform = ri;
            s && (h.$SetStyleTransform = rt);
            o ? h.$SetStyleTransform = f : u || (f = ri);
            h.$SetStyles = rt;
            rt(n, t)
        }

        function ru(n, t, u) {
            function h(n) {
                return n * i.PI / 180
            }

            function y(n, t) {
                return {
                    x: n,
                    y: t
                }
            }

            function p(n, t, i, r, u, f, e, o, s, h, c, l, a, v, y, p, w, b, k, d, g, nt, tt, it, rt, ut, ft, et, ot, st, ht, ct) {
                return [n * w + t * g + i * rt + r * ot, n * b + t * nt + i * ut + r * st, n * k + t * tt + i * ft + r * ht, n * d + t * it + i * et + r * ct, u * w + f * g + e * rt + o * ot, u * b + f * nt + e * ut + o * st, u * k + f * tt + e * ft + o * ht, u * d + f * it + e * et + o * ct, s * w + h * g + c * rt + l * ot, s * b + h * nt + c * ut + l * st, s * k + h * tt + c * ft + l * ht, s * d + h * it + c * et + l * ct, a * w + v * g + y * rt + p * ot, a * b + v * nt + y * ut + p * st, a * k + v * tt + y * ft + p * ht, a * d + v * it + y * et + p * ct]
            }

            function s(n, t) {
                return p.apply(r, (t || f).concat(n))
            }
            var o = this,
                f = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, n || 0, t || 0, u || 0, 1],
                c = i.sin,
                l = i.cos,
                v = i.tan;
            o.$Matrix = function() {
                return f
            };
            o.$Scale = function(n, t, i) {
                n == e && (n = 1);
                t == e && (t = 1);
                i == e && (i = 1);
                (n != 1 || t != 1 || i != 1) && (f = s([n, 0, 0, 0, 0, t, 0, 0, 0, 0, i, 0, 0, 0, 0, 1]))
            };
            o.$Translate = function(n, t, i) {
                (n || t || i) && (f = s([1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, n || 0, t || 0, i || 0, 1]))
            };
            o.$Move = function(n, t, i) {
                f[12] += n || 0;
                f[13] += t || 0;
                f[14] += i || 0
            };
            o.$RotateX = function(n) {
                if (n) {
                    a = h(n);
                    var t = l(a),
                        i = c(a);
                    f = s([1, 0, 0, 0, 0, t, i, 0, 0, -i, t, 0, 0, 0, 0, 1])
                }
            };
            o.$RotateY = function(n) {
                if (n) {
                    a = h(n);
                    var t = l(a),
                        i = c(a);
                    f = s([t, 0, -i, 0, 0, 1, 0, 0, i, 0, t, 0, 0, 0, 0, 1])
                }
            };
            o.$RotateZ = function(n) {
                if (n) {
                    a = h(n);
                    var t = l(a),
                        i = c(a);
                    f = s([t, i, 0, 0, -i, t, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
                }
            };
            o.$Skew = function(i, r) {
                (i || r) && (n = h(i), t = h(r), f = s([1, v(t), 0, 0, v(n), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1]))
            };
            o.$TransformPoint = function(n) {
                var t = s(f, [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, n.x, n.y, 0, 1]);
                return y(t[12], t[13])
            };
            o.$Format3d = function() {
                return "matrix3d(" + f.join(",") + ")"
            };
            o.$Format2d = function() {
                return "progid:DXImageTransform.Microsoft.Matrix(M11=" + f[0] + ", M12=" + f[4] + ", M21=" + f[1] + ", M22=" + f[5] + ", SizingMethod='auto expand')"
            }
        }

        function vr(n, t) {
            var i = {};
            return v(n, function(n, r) {
                var u = n;
                t[r] != e && (u = h.$IsNumeric(n) ? n + t[r] : vr(n, t[r]));
                i[r] = u
            }), i
        }
        var h = this,
            yr = /\S+/g,
            ht = 1,
            vi = 2,
            yi = 3,
            pi = 4,
            wi = 5,
            ct, w = 0,
            c = 0,
            k = 0,
            bi = 0,
            ut = 0,
            lt = navigator,
            ki = lt.appName,
            y = lt.userAgent,
            tt = t.documentElement,
            p = parseFloat,
            ni = ir("transform"),
            vt, pt, ui, fi, bt, kt;
        h.$Device = pr;
        h.$IsBrowserIE = b;
        h.$IsBrowserIeQuirks = dt;
        h.$IsBrowserFireFox = wr;
        h.$IsBrowserSafari = di;
        h.$IsBrowserChrome = br;
        h.$IsBrowserOpera = gi;
        h.$IsBrowserBadTransform = nr;
        h.$IsBrowser3dSafe = at;
        h.$IsBrowserIe9Earlier = gt;
        h.$GetTransformProperty = tr("transform");
        h.$BrowserVersion = function() {
            return c
        };
        h.$BrowserEngineVersion = function() {
            return k || c
        };
        h.$WebKitVersion = function() {
            return g(), ut
        };
        h.$Delay = fr;
        h.$Inherit = function(n, t) {
            return t.call(n), st({}, n)
        };
        h.$Construct = ti;
        h.$GetElement = function(n) {
            return h.$IsString(n) && (n = t.getElementById(n)), n
        };
        h.$GetEvent = d;
        h.$EvtSrc = function(n) {
            n = d(n);
            var i = n.target || n.srcElement || t;
            return i.nodeType == 3 && (i = h.$ParentNode(i)), i
        };
        h.$EvtTarget = function(n) {
            return n = d(n), n.relatedTarget || n.toElement
        };
        h.$EvtWhich = function(n) {
            return n = d(n), n.which || [0, 1, 3, 0, 2][n.button] || n.charCode || n.keyCode
        };
        h.$MousePosition = function(n) {
            return n = d(n), {
                x: n.pageX || n.clientX || 0,
                y: n.pageY || n.clientY || 0
            }
        };
        h.$PageScroll = function() {
            var i = t.body;
            return {
                x: (n.pageXOffset || tt.scrollLeft || i.scrollLeft || 0) - (tt.clientLeft || i.clientLeft || 0),
                y: (n.pageYOffset || tt.scrollTop || i.scrollTop || 0) - (tt.clientTop || i.clientTop || 0)
            }
        };
        h.$WindowSize = function() {
            var n = t.body;
            return {
                x: n.clientWidth || tt.clientWidth,
                y: n.clientHeight || tt.clientHeight
            }
        };
        pt = {
            $Rotate: ["rotate"],
            $RotateX: ["rotateX"],
            $RotateY: ["rotateY"],
            $SkewX: ["skewX"],
            $SkewY: ["skewY"]
        };
        at() || (pt = st(pt, {
            $ScaleX: ["scaleX", 2],
            $ScaleY: ["scaleY", 2],
            $TranslateZ: ["translateZ", 1]
        }));
        h.$CssTransformOrigin = l("transformOrigin", 4);
        h.$CssBackfaceVisibility = l("backfaceVisibility", 4);
        h.$CssTransformStyle = l("transformStyle", 4);
        h.$CssPerspective = l("perspective", 6);
        h.$CssPerspectiveOrigin = l("perspectiveOrigin", 4);
        h.$CssScale = function(n, t) {
            if (b() && k < 9 || k < 10 && dt()) n.style.zoom = t == 1 ? "" : t;
            else {
                var i = ni(n),
                    r = "scale(" + t + ")",
                    u = n.style[i],
                    f = new RegExp(/[\s]*scale\(.*?\)/g),
                    e = yt(u, [f], r);
                n.style[i] = e
            }
        };
        ui = 0;
        fi = 0;
        h.$WindowResizeFilter = function(n, t) {
            return gt() ? function() {
                var o = u,
                    i = dt() ? n.document.body : n.document.documentElement,
                    r, e;
                i && (r = i.offsetWidth - ui, e = i.offsetHeight - fi, r || e ? (ui += r, fi += e) : o = f);
                o && t()
            } : t
        };
        h.$MouseOverOutFilter = function(n, t) {
            return function(i) {
                i = d(i);
                var u = i.type,
                    r = i.relatedTarget || (u == "mouseout" ? i.toElement : i.fromElement);
                r && (r === t || h.$IsChild(t, r)) || n(i)
            }
        };
        h.$AddEvent = function(n, t, i, r) {
            n = h.$GetElement(n);
            n.addEventListener ? (t == "mousewheel" && n.addEventListener("DOMMouseScroll", i, r), n.addEventListener(t, i, r)) : n.attachEvent && (n.attachEvent("on" + t, i), r && n.setCapture && n.setCapture())
        };
        h.$RemoveEvent = function(n, t, i, r) {
            n = h.$GetElement(n);
            n.removeEventListener ? (t == "mousewheel" && n.removeEventListener("DOMMouseScroll", i, r), n.removeEventListener(t, i, r)) : n.detachEvent && (n.detachEvent("on" + t, i), r && n.releaseCapture && n.releaseCapture())
        };
        h.$FireEvent = function(n, i) {
            var r, u;
            t.createEvent ? (r = t.createEvent("HTMLEvents"), r.initEvent(i, f, f), n.dispatchEvent(r)) : (u = "on" + i, r = t.createEventObject(), n.fireEvent(u, r))
        };
        h.$CancelEvent = function(n) {
            n = d(n);
            n.preventDefault && n.preventDefault();
            n.cancel = u;
            n.returnValue = f
        };
        h.$StopEvent = function(n) {
            n = d(n);
            n.stopPropagation && n.stopPropagation();
            n.cancelBubble = u
        };
        h.$CreateCallback = function(n, t) {
            var i = [].slice.call(arguments, 2);
            return function() {
                var r = i.concat([].slice.call(arguments, 0));
                return t.apply(n, r)
            }
        };
        h.$InnerText = function(n, i) {
            if (i == e) return n.textContent || n.innerText;
            var r = t.createTextNode(i);
            h.$Empty(n);
            n.appendChild(r)
        };
        h.$InnerHtml = function(n, t) {
            if (t == e) return n.innerHTML;
            n.innerHTML = t
        };
        h.$GetClientRect = function(n) {
            var t = n.getBoundingClientRect();
            return {
                x: t.left,
                y: t.top,
                w: t.right - t.left,
                h: t.bottom - t.top
            }
        };
        h.$ClearInnerHtml = function(n) {
            n.innerHTML = ""
        };
        h.$EncodeHtml = function(n) {
            var t = h.$CreateDiv();
            return h.$InnerText(t, n), h.$InnerHtml(t)
        };
        h.$DecodeHtml = function(n) {
            var t = h.$CreateDiv();
            return h.$InnerHtml(t, n), h.$InnerText(t)
        };
        h.$SelectElement = function(i) {
            var f, u;
            n.getSelection && (f = n.getSelection());
            u = r;
            t.createRange ? (u = t.createRange(), u.selectNode(i)) : (u = t.body.createTextRange(), u.moveToElementText(i), u.select());
            f && f.addRange(u)
        };
        h.$DeselectElements = function() {
            t.selection ? t.selection.empty() : n.getSelection && n.getSelection().removeAllRanges()
        };
        h.$Children = function(n, t) {
            for (var r = [], i = n.firstChild; i; i = i.nextSibling)(t || i.nodeType == 1) && r.push(i);
            return r
        };
        h.$FindChild = or;
        h.$FindChildByTag = hr;
        h.$FindChildrenByTag = cr;
        h.$GetElementsByTag = function(n, t) {
            return n.getElementsByTagName(t)
        };
        h.$Extend = st;
        h.$Unextend = ei;
        h.$IsFunction = function(n) {
            return ft(n) == "function"
        };
        h.$IsArray = function(n) {
            return ft(n) == "array"
        };
        h.$IsString = function(n) {
            return ft(n) == "string"
        };
        h.$IsNumeric = function(n) {
            return !isNaN(p(n)) && isFinite(n)
        };
        h.$Type = ft;
        h.$Each = v;
        h.$IsNotEmpty = ur;
        h.$IsPlainObject = et;
        h.$CreateElement = oi;
        h.$CreateDiv = function() {
            return oi("DIV")
        };
        h.$CreateSpan = function() {
            return oi("SPAN")
        };
        h.$EmptyFunction = function() {};
        h.$Attribute = si;
        h.$AttributeEx = hi;
        h.$ClassName = it;
        h.$ToHash = lr;
        h.$FromHash = tu;
        h.$Split = ar;
        h.$Join = li;
        h.$AddClass = function(n, t) {
            wt(n, r, t)
        };
        h.$RemoveClass = wt;
        h.$ReplaceClass = wt;
        h.$ParentNode = function(n) {
            return n.parentNode
        };
        h.$HideElement = function(n) {
            h.$CssDisplay(n, "none")
        };
        h.$EnableElement = function(n, t) {
            t ? h.$Attribute(n, "disabled", u) : h.$RemoveAttribute(n, "disabled")
        };
        h.$HideElements = function(n) {
            for (var t = 0; t < n.length; t++) h.$HideElement(n[t])
        };
        h.$ShowElement = function(n, t) {
            h.$CssDisplay(n, t ? "none" : "")
        };
        h.$ShowElements = function(n, t) {
            for (var i = 0; i < n.length; i++) h.$ShowElement(n[i], t)
        };
        h.$RemoveAttribute = function(n, t) {
            n.removeAttribute(t)
        };
        h.$CanClearClip = function() {
            return b() && c < 10
        };
        h.$SetStyleClip = function(n, t) {
            if (t) n.style.clip = "rect(" + i.round(t.$Top) + "px " + i.round(t.$Right) + "px " + i.round(t.$Bottom) + "px " + i.round(t.$Left) + "px)";
            else if (t !== e) {
                var r = n.style.cssText,
                    u = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)],
                    f = yt(r, u, "");
                o.$CssCssText(n, f)
            }
        };
        h.$GetNow = function() {
            return +new Date
        };
        h.$AppendChild = function(n, t) {
            n.appendChild(t)
        };
        h.$AppendChildren = function(n, t) {
            v(t, function(t) {
                h.$AppendChild(n, t)
            })
        };
        h.$InsertBefore = function(n, t, i) {
            (i || t.parentNode).insertBefore(n, t)
        };
        h.$InsertAfter = function(n, t, i) {
            h.$InsertBefore(n, t.nextSibling, i || t.parentNode)
        };
        h.$InsertAdjacentHtml = function(n, t, i) {
            n.insertAdjacentHTML(t, i)
        };
        h.$RemoveElement = function(n, t) {
            t = t || n.parentNode;
            t && t.removeChild(n)
        };
        h.$RemoveElements = function(n, t) {
            v(n, function(n) {
                h.$RemoveElement(n, t)
            })
        };
        h.$Empty = function(n) {
            h.$RemoveElements(h.$Children(n, u), n)
        };
        h.$CenterElement = function(n, t) {
            var i = h.$ParentNode(n);
            t & 1 && h.$CssLeft(n, (h.$CssWidth(i) - h.$CssWidth(n)) / 2);
            t & 2 && h.$CssTop(n, (h.$CssHeight(i) - h.$CssHeight(n)) / 2)
        };
        h.$ParseInt = function(n, t) {
            return parseInt(n, t || 10)
        };
        h.$ParseFloat = p;
        h.$IsChild = function(n, i) {
            for (var r = t.body; i && n !== i && r !== i;) try {
                i = i.parentNode
            } catch (u) {
                return f
            }
            return n === i
        };
        h.$CloneNode = ai;
        h.$LoadImage = function(n, t) {
            function r(n, u) {
                h.$RemoveEvent(i, "load", r);
                h.$RemoveEvent(i, "abort", f);
                h.$RemoveEvent(i, "error", f);
                t && t(i, u)
            }

            function f(n) {
                r(n, u)
            }
            var i = new Image;
            gi() && c < 11.6 || !n ? r(!n) : (h.$AddEvent(i, "load", r), h.$AddEvent(i, "abort", f), h.$AddEvent(i, "error", f), i.src = n)
        };
        h.$LoadImages = function(n, t, i) {
            function u(n) {
                r--;
                t && n && n.src == t.src && (t = n);
                !r && i && i(t)
            }
            var r = n.length + 1;
            v(n, function(n) {
                h.$LoadImage(n.src, u)
            });
            u()
        };
        h.$BuildElement = function(n, t, i, r) {
            var u, e, f, s;
            for (r && (n = ai(n)), u = sr(n, t), u.length || (u = o.$GetElementsByTag(n, t)), e = u.length - 1; e > -1; e--) f = u[e], s = ai(i), it(s, it(f)), o.$CssCssText(s, f.style.cssText), o.$InsertBefore(s, f), o.$RemoveElement(f);
            return n
        };
        h.$Buttonize = function(n) {
            return new iu(n)
        };
        h.$Css = ot;
        h.$CssN = ii;
        h.$CssP = dr;
        h.$CssOverflow = l("overflow");
        h.$CssTop = l("top", 2);
        h.$CssLeft = l("left", 2);
        h.$CssWidth = l("width", 2);
        h.$CssHeight = l("height", 2);
        h.$CssMarginLeft = l("marginLeft", 2);
        h.$CssMarginTop = l("marginTop", 2);
        h.$CssPosition = l("position");
        h.$CssDisplay = l("display");
        h.$CssZIndex = l("zIndex", 1);
        h.$CssFloat = function(n, t) {
            return ot(n, b() ? "styleFloat" : "cssFloat", t)
        };
        h.$CssOpacity = function(n, t, i) {
            if (t != e) nu(n, t, i);
            else return gr(n)
        };
        h.$CssCssText = function(n, t) {
            if (t != e) n.style.cssText = t;
            else return n.style.cssText
        };
        bt = {
            $Opacity: h.$CssOpacity,
            $Top: h.$CssTop,
            $Left: h.$CssLeft,
            $Width: h.$CssWidth,
            $Height: h.$CssHeight,
            $Position: h.$CssPosition,
            $Display: h.$CssDisplay,
            $ZIndex: h.$CssZIndex
        };
        h.$GetStyles = function(n, t) {
            var i = {};
            return v(t, function(t, r) {
                bt[r] && (i[r] = bt[r](n))
            }), i
        };
        h.$SetStyleTransform = rt;
        h.$SetStyles = rt, new function() {
            function t(n, t) {
                for (var o, i, f, r, s = n[0].length, h = n.length, c = t[0].length, e = [], u = 0; u < h; u++)
                    for (o = e[u] = [], i = 0; i < c; i++) {
                        for (f = 0, r = 0; r < s; r++) f += n[u][r] * t[r][i];
                        o[i] = f
                    }
                return e
            }
            var n = this;
            n.$ScaleX = function(t, i) {
                return n.$ScaleXY(t, i, 0)
            };
            n.$ScaleY = function(t, i) {
                return n.$ScaleXY(t, 0, i)
            };
            n.$ScaleXY = function(n, i, r) {
                return t(n, [
                    [i, 0],
                    [0, r]
                ])
            };
            n.$TransformPoint = function(n, i) {
                var r = t(n, [
                    [i.x],
                    [i.y]
                ]);
                return nt(r[0][0], r[1][0])
            }
        };
        kt = {
            $OriginalX: 0,
            $OriginalY: 0,
            $MoveX: 0,
            $MoveY: 0,
            $Zoom: 1,
            $ScaleX: 1,
            $ScaleY: 1,
            $Rotate: 0,
            $RotateX: 0,
            $RotateY: 0,
            $TranslateX: 0,
            $TranslateY: 0,
            $TranslateZ: 0,
            $SkewX: 0,
            $SkewY: 0
        };
        h.$FormatEasings = function(n) {
            var t = n || {};
            return n && (o.$IsFunction(n) ? t = {
                $Default: t
            } : o.$IsFunction(n.$Clip) && (t.$Clip = {
                $Default: n.$Clip
            })), t
        };
        h.$AddDif = vr;
        h.$Cast = function(n, t, f, h, c, l, a) {
            var v = t,
                p, g, ut, nt;
            if (n) {
                v = {};
                for (p in t) {
                    var ft = l[p] || 1,
                        rt = c[p] || [0, 1],
                        y = (f - rt[0]) / rt[1];
                    y = i.min(i.max(y, 0), 1);
                    y = y * ft;
                    g = i.floor(y);
                    y != g && (y -= g);
                    var w = h.$Default || s.$EaseSwing,
                        b, et = n[p],
                        k = t[p];
                    o.$IsNumeric(k) ? (w = h[p] || w, ut = w(y), b = et + k * ut) : (b = o.$Extend({
                        $Offset: {}
                    }, n[p]), o.$Each(k.$Offset || k, function(n, t) {
                        h.$Clip && (w = h.$Clip[t] || h.$Clip.$Default || w);
                        var r = w(y),
                            i = n * r;
                        b.$Offset[t] = i;
                        b[t] += i
                    }));
                    v[p] = b
                }
                nt = o.$Each(t, function(n, t) {
                    return kt[t] != e
                });
                nt && o.$Each(kt, function(t, i) {
                    v[i] == e && n[i] !== e && (v[i] = n[i])
                });
                nt && (v.$Zoom && (v.$ScaleX = v.$ScaleY = v.$Zoom), v.$OriginalWidth = a.$OriginalWidth, v.$OriginalHeight = a.$OriginalHeight, v.$Transform = u)
            }
            if (t.$Clip && a.$Move) {
                var d = v.$Clip.$Offset,
                    tt = (d.$Top || 0) + (d.$Bottom || 0),
                    it = (d.$Left || 0) + (d.$Right || 0);
                v.$Left = (v.$Left || 0) + it;
                v.$Top = (v.$Top || 0) + tt;
                v.$Clip.$Left -= it;
                v.$Clip.$Right -= it;
                v.$Clip.$Top -= tt;
                v.$Clip.$Bottom -= tt
            }
            return v.$Clip && o.$CanClearClip() && !v.$Clip.$Top && !v.$Clip.$Left && v.$Clip.$Right == a.$OriginalWidth && v.$Clip.$Bottom == a.$OriginalHeight && (v.$Clip = r), v
        }
    };
    l = n.$JssorAnimator$ = function(t, e, s, h, c, l) {
        function dt(n) {
            p += n;
            v += n;
            b += n;
            et += n;
            y += n;
            w += n;
            ft += n
        }

        function rt(n) {
            var t = n,
                r, f, k, d, g;
            nt && (t >= v || t <= p) && (t = ((t - p) % nt + nt) % nt + p);
            (!lt || it || y != t) && (r = i.min(t, v), r = i.max(r, p), (!lt || it || r != w) && (l && (f = (r - b) / (e || 1), s.$Reverse && (f = 1 - f), k = o.$Cast(c, l, f, vt, pt, yt, s), st ? o.$Each(k, function(n, t) {
                st[t] && st[t](h, n)
            }) : o.$SetStyles(h, k)), a.$OnInnerOffsetChange(w - b, r - b), w = r, o.$Each(ot, function(t, i) {
                var r = n < y ? ot[ot.length - i - 1] : t;
                r.$GoToPosition(w - ft)
            }), d = y, g = w, y = t, lt = u, a.$OnPositionChange(d, g)))
        }

        function at(n, t, r) {
            t && n.$Shift(v);
            r || (p = i.min(p, n.$GetPosition_OuterBegin() + ft), v = i.max(v, n.$GetPosition_OuterEnd() + ft));
            ot.push(n)
        }

        function wt() {
            if (k) {
                var t = o.$GetNow(),
                    r = i.min(t - ht, s.$IntervalMax),
                    n = y + r * g;
                ht = t;
                n * g >= d * g && (n = d);
                rt(n);
                !it && n * g >= d * g ? bt(ct) : tt(wt)
            }
        }

        function ut(n, t, r) {
            k || (k = u, it = r, ct = t, n = i.max(n, p), n = i.min(n, v), d = n, g = d < y ? -1 : 1, a.$OnStart(), ht = o.$GetNow(), tt(wt))
        }

        function bt(n) {
            k && (it = k = ct = f, a.$OnStop(), n && n())
        }
        var tt;
        t = t || 0;
        var a = this,
            k, kt, d, g, it, ht = 0,
            vt, yt, pt, ct, ft = 0,
            y = 0,
            w = 0,
            lt, b, et, p, v, nt, ot = [],
            st;
        tt = n.requestAnimationFrame || n.webkitRequestAnimationFrame || n.mozRequestAnimationFrame || n.msRequestAnimationFrame;
        o.$IsBrowserSafari() && o.$BrowserVersion() < 7 && (tt = r);
        tt = tt || function(n) {
            o.$Delay(n, s.$Interval)
        };
        a.$Play = function(n, t, i) {
            ut(n ? y + n : v, t, i)
        };
        a.$PlayToPosition = ut;
        a.$PlayToBegin = function(n, t) {
            ut(p, n, t)
        };
        a.$PlayToEnd = function(n, t) {
            ut(v, n, t)
        };
        a.$Stop = bt;
        a.$Continue = function(n) {
            ut(n)
        };
        a.$GetPosition = function() {
            return y
        };
        a.$GetPlayToPosition = function() {
            return d
        };
        a.$GetPosition_Display = function() {
            return w
        };
        a.$GoToPosition = rt;
        a.$GoToBegin = function() {
            rt(p, u)
        };
        a.$GoToEnd = function() {
            rt(v, u)
        };
        a.$Move = function(n) {
            rt(y + n)
        };
        a.$CombineMode = function() {
            return kt
        };
        a.$GetDuration = function() {
            return e
        };
        a.$IsPlaying = function() {
            return k
        };
        a.$IsOnTheWay = function() {
            return y > b && y <= et
        };
        a.$SetLoopLength = function(n) {
            nt = n
        };
        a.$Shift = dt;
        a.$Join = at;
        a.$Combine = function(n, t) {
            at(n, 0, t)
        };
        a.$Chain = function(n) {
            at(n, 1)
        };
        a.$Expand = function(n) {
            v += n
        };
        a.$GetPosition_InnerBegin = function() {
            return b
        };
        a.$GetPosition_InnerEnd = function() {
            return et
        };
        a.$GetPosition_OuterBegin = function() {
            return p
        };
        a.$GetPosition_OuterEnd = function() {
            return v
        };
        a.$OnPositionChange = a.$OnStart = a.$OnStop = a.$OnInnerOffsetChange = o.$EmptyFunction;
        a.$Version = o.$GetNow();
        s = o.$Extend({
            $Interval: 16,
            $IntervalMax: 50
        }, s);
        nt = s.$LoopLength;
        st = s.$Setter;
        p = b = t;
        v = et = t + e;
        yt = s.$Round || {};
        pt = s.$During || {};
        vt = o.$FormatEasings(s.$Easing)
    };
    p = n.$JssorSlideshowFormations$ = new function() {
        function rt(n) {
            return (n & w) == w
        }

        function ut(n) {
            return (n & b) == b
        }

        function e(n, t, i) {
            i.push(t);
            n[t] = n[t] || [];
            n[t].push(i)
        }
        var o = this,
            n = 0,
            t = 1,
            r = 2,
            f = 3,
            k = 1,
            w = 2,
            b = 4,
            d = 8,
            g = 256,
            nt = 512,
            tt = 1024,
            it = 2048,
            s = it + k,
            h = it + w,
            c = nt + k,
            l = nt + w,
            a = g + b,
            v = g + d,
            y = tt + b,
            p = tt + d;
        o.$FormationStraight = function(n) {
            for (var u = n.$Cols, f = n.$Rows, k = n.$Assembly, d = n.$Count, p = [], t = 0, i = 0, w = u - 1, b = f - 1, o = d - 1, r, i = 0; i < f; i++)
                for (t = 0; t < u; t++) {
                    switch (k) {
                        case s:
                            r = o - (t * f + (b - i));
                            break;
                        case y:
                            r = o - (i * u + (w - t));
                            break;
                        case c:
                            r = o - (t * f + i);
                        case a:
                            r = o - (i * u + t);
                            break;
                        case h:
                            r = t * f + i;
                            break;
                        case v:
                            r = i * u + (w - t);
                            break;
                        case l:
                            r = t * f + (b - i);
                            break;
                        default:
                            r = i * u + t
                    }
                    e(p, r, [i, t])
                }
            return p
        };
        o.$FormationSwirl = function(i) {
            var nt = i.$Cols,
                tt = i.$Rows,
                ft = i.$Assembly,
                et = i.$Count,
                it = [],
                rt = [],
                d = 0,
                o = 0,
                p = 0,
                b = nt - 1,
                k = tt - 1,
                g, w, ut = 0;
            switch (ft) {
                case s:
                    o = b;
                    p = 0;
                    w = [r, t, f, n];
                    break;
                case y:
                    o = 0;
                    p = k;
                    w = [n, f, t, r];
                    break;
                case c:
                    o = b;
                    p = k;
                    w = [f, t, r, n];
                    break;
                case a:
                    o = b;
                    p = k;
                    w = [t, f, n, r];
                    break;
                case h:
                    o = 0;
                    p = 0;
                    w = [r, n, f, t];
                    break;
                case v:
                    o = b;
                    p = 0;
                    w = [t, r, n, f];
                    break;
                case l:
                    o = 0;
                    p = k;
                    w = [f, n, r, t];
                    break;
                default:
                    o = 0;
                    p = 0;
                    w = [n, r, t, f]
            }
            for (d = 0; d < et;) {
                if (g = p + "," + o, o >= 0 && o < nt && p >= 0 && p < tt && !rt[g]) rt[g] = u, e(it, d++, [p, o]);
                else switch (w[ut++ % w.length]) {
                    case n:
                        o--;
                        break;
                    case r:
                        p--;
                        break;
                    case t:
                        o++;
                        break;
                    case f:
                        p++
                }
                switch (w[ut % w.length]) {
                    case n:
                        o++;
                        break;
                    case r:
                        p++;
                        break;
                    case t:
                        o--;
                        break;
                    case f:
                        p--
                }
            }
            return it
        };
        o.$FormationZigZag = function(i) {
            var nt = i.$Cols,
                tt = i.$Rows,
                rt = i.$Assembly,
                ut = i.$Count,
                k = [],
                d = 0,
                u = 0,
                o = 0,
                w = nt - 1,
                b = tt - 1,
                it, p, g = 0;
            switch (rt) {
                case s:
                    u = w;
                    o = 0;
                    p = [r, t, f, t];
                    break;
                case y:
                    u = 0;
                    o = b;
                    p = [n, f, t, f];
                    break;
                case c:
                    u = w;
                    o = b;
                    p = [f, t, r, t];
                    break;
                case a:
                    u = w;
                    o = b;
                    p = [t, f, n, f];
                    break;
                case h:
                    u = 0;
                    o = 0;
                    p = [r, n, f, n];
                    break;
                case v:
                    u = w;
                    o = 0;
                    p = [t, r, n, r];
                    break;
                case l:
                    u = 0;
                    o = b;
                    p = [f, n, r, n];
                    break;
                default:
                    u = 0;
                    o = 0;
                    p = [n, r, t, r]
            }
            for (d = 0; d < ut;)
                if (it = o + "," + u, u >= 0 && u < nt && o >= 0 && o < tt && typeof k[it] == "undefined") {
                    e(k, d++, [o, u]);
                    switch (p[g % p.length]) {
                        case n:
                            u++;
                            break;
                        case r:
                            o++;
                            break;
                        case t:
                            u--;
                            break;
                        case f:
                            o--
                    }
                } else {
                    switch (p[g++ % p.length]) {
                        case n:
                            u--;
                            break;
                        case r:
                            o--;
                            break;
                        case t:
                            u++;
                            break;
                        case f:
                            o++
                    }
                    switch (p[g++ % p.length]) {
                        case n:
                            u++;
                            break;
                        case r:
                            o++;
                            break;
                        case t:
                            u--;
                            break;
                        case f:
                            o--
                    }
                } return k
        };
        o.$FormationStraightStairs = function(n) {
            var g = n.$Cols,
                nt = n.$Rows,
                f = n.$Assembly,
                d = n.$Count,
                b = [],
                k = 0,
                r = 0,
                u = 0,
                o = g - 1,
                w = nt - 1,
                tt = d - 1,
                t, i;
            switch (f) {
                case s:
                case l:
                case c:
                case h:
                    t = 0;
                    i = 0;
                    break;
                case v:
                case y:
                case a:
                case p:
                    t = o;
                    i = 0;
                    break;
                default:
                    f = p;
                    t = o;
                    i = 0
            }
            for (r = t, u = i; k < d;) {
                ut(f) || rt(f) ? e(b, tt - k++, [u, r]) : e(b, k++, [u, r]);
                switch (f) {
                    case s:
                    case l:
                        r--;
                        u++;
                        break;
                    case c:
                    case h:
                        r++;
                        u--;
                        break;
                    case v:
                    case y:
                        r--;
                        u--;
                        break;
                    case p:
                    case a:
                    default:
                        r++;
                        u++
                }
                if (r < 0 || u < 0 || r > o || u > w) {
                    switch (f) {
                        case s:
                        case l:
                            t++;
                            break;
                        case v:
                        case y:
                        case c:
                        case h:
                            i++;
                            break;
                        case p:
                        case a:
                        default:
                            t--
                    }
                    if (t < 0 || i < 0 || t > o || i > w) {
                        switch (f) {
                            case s:
                            case l:
                                t = o;
                                i++;
                                break;
                            case c:
                            case h:
                                i = w;
                                t++;
                                break;
                            case v:
                            case y:
                                i = w;
                                t--;
                                break;
                            case p:
                            case a:
                            default:
                                t = 0;
                                i++
                        }
                        i > w ? i = w : i < 0 ? i = 0 : t > o ? t = o : t < 0 && (t = 0)
                    }
                    u = i;
                    r = t
                }
            }
            return b
        };
        o.$FormationSquare = function(n) {
            var t = n.$Cols || 1,
                r = n.$Rows || 1,
                h = [],
                u, f, o, s, c;
            for (o = t < r ? (r - t) / 2 : 0, s = t > r ? (t - r) / 2 : 0, c = i.round(i.max(t / 2, r / 2)) + 1, u = 0; u < t; u++)
                for (f = 0; f < r; f++) e(h, c - i.min(u + 1 + o, f + 1 + s, t - u + o, r - f + s), [f, u]);
            return h
        };
        o.$FormationRectangle = function(n) {
            for (var u = n.$Cols || 1, f = n.$Rows || 1, o = [], r, s = i.round(i.min(u / 2, f / 2)) + 1, t = 0; t < u; t++)
                for (r = 0; r < f; r++) e(o, s - i.min(t + 1, r + 1, u - t, f - r), [r, t]);
            return o
        };
        o.$FormationRandom = function(n) {
            for (var u = [], t, r = 0; r < n.$Rows; r++)
                for (t = 0; t < n.$Cols; t++) e(u, i.ceil(1e5 * i.random()) % 13, [r, t]);
            return u
        };
        o.$FormationCircle = function(n) {
            for (var u = n.$Cols || 1, f = n.$Rows || 1, o = [], t, s = u / 2 - .5, h = f / 2 - .5, r = 0; r < u; r++)
                for (t = 0; t < f; t++) e(o, i.round(i.sqrt(i.pow(r - s, 2) + i.pow(t - h, 2))), [t, r]);
            return o
        };
        o.$FormationCross = function(n) {
            for (var u = n.$Cols || 1, f = n.$Rows || 1, o = [], t, s = u / 2 - .5, h = f / 2 - .5, r = 0; r < u; r++)
                for (t = 0; t < f; t++) e(o, i.round(i.min(i.abs(r - s), i.abs(t - h))), [t, r]);
            return o
        };
        o.$FormationRectangleCross = function(n) {
            for (var o = n.$Cols || 1, s = n.$Rows || 1, h = [], t, u = o / 2 - .5, f = s / 2 - .5, c = i.max(u, f) + 1, r = 0; r < o; r++)
                for (t = 0; t < s; t++) e(h, i.round(c - i.max(u - i.abs(r - u), f - i.abs(t - f))) - 1, [t, r]);
            return h
        }
    };
    n.$JssorSlideshowRunner$ = function(n, t, e, h, c) {
        function k(n, t) {
            var r = {
                $Interval: t,
                $Duration: 1,
                $Delay: 0,
                $Cols: 1,
                $Rows: 1,
                $Opacity: 0,
                $Zoom: 0,
                $Clip: 0,
                $Move: f,
                $SlideOut: f,
                $Reverse: f,
                $Formation: p.$FormationRandom,
                $Assembly: 1032,
                $ChessMode: {
                    $Column: 0,
                    $Row: 0
                },
                $Easing: s.$EaseSwing,
                $Round: {},
                $Blocks: [],
                $During: {}
            };
            return o.$Extend(r, n), r.$Count = r.$Cols * r.$Rows, r.$Easing = o.$FormatEasings(r.$Easing), r.$FramesCount = i.ceil(r.$Duration / r.$Interval), r.$GetBlocks = function(n, t) {
                var f, i, u;
                if (n /= r.$Cols, t /= r.$Rows, f = n + "x" + t, !r.$Blocks[f])
                    for (r.$Blocks[f] = {
                            $Width: n,
                            $Height: t
                        }, i = 0; i < r.$Cols; i++)
                        for (u = 0; u < r.$Rows; u++) r.$Blocks[f][u + "," + i] = {
                            $Top: u * t,
                            $Right: i * n + n,
                            $Bottom: u * t + t,
                            $Left: i * n
                        };
                return r.$Blocks[f]
            }, r.$Brother && (r.$Brother = k(r.$Brother, t), r.$SlideOut = u), r
        }

        function nt(n, t, e, s, h, c) {
            function ht(n) {
                var t = n.$Formation(n);
                return n.$Reverse ? t.reverse() : t
            }
            var it = this,
                nt, rt = {},
                y = {},
                w = [],
                a, l, b, k = e.$ChessMode.$Column || 0,
                d = e.$ChessMode.$Row || 0,
                v = e.$GetBlocks(h, c),
                g = ht(e),
                st = g.length - 1,
                tt = e.$Duration + e.$Delay * st,
                ut = s + tt,
                p = e.$SlideOut,
                ft, et, ot;
            ut += 50;
            it.$EndTime = ut;
            it.$ShowFrame = function(n) {
                var t, r;
                n -= s;
                t = n < tt;
                (t || ft) && (ft = t, p || (n = tt - n), r = i.ceil(n / e.$Interval), o.$Each(y, function(n, t) {
                    var u = i.max(r, n.$Min);
                    u = i.min(u, n.length - 1);
                    n.$LastFrameIndex != u && (n.$LastFrameIndex || p ? u == n.$Max && p && o.$HideElement(w[t]) : o.$ShowElement(w[t]), n.$LastFrameIndex = u, o.$SetStyles(w[t], n[u]))
                }))
            };
            t = o.$CloneNode(t);
            o.$SetStyleTransform(t, r);
            o.$IsBrowserIe9Earlier() && (et = !t["no-image"], ot = o.$FindChildrenByTag(t), o.$Each(ot, function(n) {
                (et || n["jssor-slider"]) && o.$CssOpacity(n, o.$CssOpacity(n), u)
            }));
            o.$Each(g, function(n, t) {
                o.$Each(n, function(n) {
                    var yt = n[0],
                        pt = n[1],
                        s = yt + "," + pt,
                        w = f,
                        g = f,
                        it = f,
                        at, vt, wt, r, tt, bt, kt, ut, ft, et, ot;
                    k && pt % 2 && (k & 3 && (w = !w), k & 12 && (g = !g), k & 16 && (it = !it));
                    d && yt % 2 && (d & 3 && (w = !w), d & 12 && (g = !g), d & 16 && (it = !it));
                    e.$Top = e.$Top || e.$Clip & 4;
                    e.$Bottom = e.$Bottom || e.$Clip & 8;
                    e.$Left = e.$Left || e.$Clip & 1;
                    e.$Right = e.$Right || e.$Clip & 2;
                    var st = g ? e.$Bottom : e.$Top,
                        ht = g ? e.$Top : e.$Bottom,
                        ct = w ? e.$Right : e.$Left,
                        lt = w ? e.$Left : e.$Right;
                    for (e.$Clip = st || ht || ct || lt, b = {}, l = {
                            $Top: 0,
                            $Left: 0,
                            $Opacity: 1,
                            $Width: h,
                            $Height: c
                        }, a = o.$Extend({}, l), nt = o.$Extend({}, v[s]), e.$Opacity && (l.$Opacity = 2 - e.$Opacity), e.$ZIndex && (l.$ZIndex = e.$ZIndex, a.$ZIndex = 0), at = e.$Cols * e.$Rows > 1 || e.$Clip, (e.$Zoom || e.$Rotate) && (vt = u, o.$IsBrowserIe9Earlier() && (e.$Cols * e.$Rows > 1 ? vt = f : at = f), vt && (l.$Zoom = e.$Zoom ? e.$Zoom - 1 : 1, a.$Zoom = 1, (o.$IsBrowserIe9Earlier() || o.$IsBrowserOpera()) && (l.$Zoom = i.min(l.$Zoom, 2)), wt = e.$Rotate || 0, l.$Rotate = wt * 360 * (it ? -1 : 1), a.$Rotate = 0)), at && (r = nt.$Offset = {}, e.$Clip && (tt = e.$ScaleClip || 1, st && ht ? (r.$Top = v.$Height / 2 * tt, r.$Bottom = -r.$Top) : st ? r.$Bottom = -v.$Height * tt : ht && (r.$Top = v.$Height * tt), ct && lt ? (r.$Left = v.$Width / 2 * tt, r.$Right = -r.$Left) : ct ? r.$Right = -v.$Width * tt : lt && (r.$Left = v.$Width * tt)), b.$Clip = nt, a.$Clip = v[s]), bt = w ? 1 : -1, kt = g ? 1 : -1, e.x && (l.$Left += h * e.x * bt), e.y && (l.$Top += c * e.y * kt), o.$Each(l, function(n, t) {
                            o.$IsNumeric(n) && n != a[t] && (b[t] = n - a[t])
                        }), rt[s] = p ? a : l, ut = e.$FramesCount, ft = i.round(t * e.$Delay / e.$Interval), y[s] = new Array(ft), y[s].$Min = ft, y[s].$Max = ft + ut - 1, et = 0; et <= ut; et++) ot = o.$Cast(a, b, et / ut, e.$Easing, e.$During, e.$Round, {
                        $Move: e.$Move,
                        $OriginalWidth: h,
                        $OriginalHeight: c
                    }), ot.$ZIndex = ot.$ZIndex || 1, y[s].push(ot)
                })
            });
            g.reverse();
            o.$Each(g, function(i) {
                o.$Each(i, function(i) {
                    var u = i[0],
                        f = i[1],
                        e = u + "," + f,
                        r = t;
                    (f || u) && (r = o.$CloneNode(t));
                    o.$SetStyles(r, rt[e]);
                    o.$CssOverflow(r, "hidden");
                    o.$CssPosition(r, "absolute");
                    n.$AddClipElement(r);
                    w[e] = r;
                    o.$ShowElement(r, !p)
                })
            })
        }

        function rt() {
            var n = this,
                t = 0;
            l.call(n, 0, d);
            n.$OnPositionChange = function(n, i) {
                i - t > b && (t = i, y && y.$ShowFrame(i), w && w.$ShowFrame(i))
            };
            n.$Transition = g
        }
        var a = this,
            d, w, y, tt = 0,
            it = h.$TransitionsOrder,
            g, b = 8;
        a.$GetTransition = function() {
            var n = 0,
                t = h.$Transitions,
                r = t.length;
            return n = it ? tt++ % r : i.floor(i.random() * r), t[n] && (t[n].$Index = n), t[n]
        };
        a.$Initialize = function(r, u, f, o, s) {
            var h, c, v;
            g = s;
            s = k(s, b);
            h = o.$Item;
            c = f.$Item;
            h["no-image"] = !o.$Image;
            c["no-image"] = !f.$Image;
            var p = h,
                tt = c,
                it = s,
                l = s.$Brother || k({}, b);
            s.$SlideOut || (p = c, tt = h);
            v = l.$Shift || 0;
            w = new nt(n, tt, l, i.max(v - l.$Interval, 0), t, e);
            y = new nt(n, p, it, i.max(l.$Interval - v, 0), t, e);
            w.$ShowFrame(0);
            y.$ShowFrame(0);
            d = i.max(w.$EndTime, y.$EndTime);
            a.$Index = r
        };
        a.$Clear = function() {
            n.$Clear();
            w = r;
            y = r
        };
        a.$GetProcessor = function() {
            var n = r;
            return y && (n = new rt), n
        };
        (o.$IsBrowserIe9Earlier() || o.$IsBrowserOpera() || c && o.$WebKitVersion() < 537) && (b = 16);
        v.call(a);
        l.call(a, -1e7, 1e7)
    };
    c = n.$JssorSlider$ = function(h, a) {
        function hf() {
            var n = this;
            l.call(n, -1e8, 2e8);
            n.$GetCurrentSlideInfo = function() {
                var t = n.$GetPosition_Display(),
                    r = i.floor(t),
                    u = g(r),
                    f = t - i.floor(t);
                return {
                    $Index: u,
                    $VirtualIndex: r,
                    $Position: f
                }
            };
            n.$OnPositionChange = function(n, t) {
                var r = i.floor(t);
                r != t && t > n && r++;
                cu(r, u);
                b.$TriggerEvent(c.$EVT_POSITION_CHANGE, g(t), g(n), t, n)
            }
        }

        function cf() {
            var n = this;
            l.call(n, 0, 0, {
                $LoopLength: k
            });
            o.$Each(st, function(t) {
                et & 1 && t.$SetLoopLength(k);
                n.$Chain(t);
                t.$Shift(tr / bu)
            })
        }

        function lf() {
            var n = this,
                t = uf.$Elmt;
            l.call(n, -1, 2, {
                $Easing: s.$EaseLinear,
                $Setter: {
                    $Position: ru
                },
                $LoopLength: k
            }, t, {
                $Position: 1
            }, {
                $Position: -2
            });
            n.$Wrapper = t
        }

        function af(n, t) {
            var i = this,
                e, o, s, h, a;
            l.call(i, -1e8, 2e8, {
                $IntervalMax: 100
            });
            i.$OnStart = function() {
                dt = u;
                fi = r;
                b.$TriggerEvent(c.$EVT_SWIPE_START, g(it.$GetPosition()), it.$GetPosition())
            };
            i.$OnStop = function() {
                dt = f;
                h = f;
                var n = it.$GetCurrentSlideInfo();
                b.$TriggerEvent(c.$EVT_SWIPE_END, g(it.$GetPosition()), it.$GetPosition());
                n.$Position || kf(n.$VirtualIndex, d)
            };
            i.$OnPositionChange = function(n, t) {
                var i, r;
                h ? i = a : (i = o, s && (r = t / s, i = p.$SlideEasing(r) * (o - e) + e));
                it.$GoToPosition(i)
            };
            i.$PlayCarousel = function(n, t, r, u) {
                e = n;
                o = t;
                s = r;
                it.$GoToPosition(n);
                i.$GoToPosition(0);
                i.$PlayToPosition(r, u)
            };
            i.$StandBy = function(n) {
                h = u;
                a = n;
                i.$Play(n, r, u)
            };
            i.$SetStandByPosition = function(n) {
                a = n
            };
            i.$MoveCarouselTo = function(n) {
                it.$GoToPosition(n)
            };
            it = new hf;
            it.$Combine(n);
            it.$Combine(t)
        }

        function vf() {
            var t = this,
                n = lu();
            o.$CssZIndex(n, 0);
            o.$Css(n, "pointerEvents", "none");
            t.$Elmt = n;
            t.$AddClipElement = function(t) {
                o.$AppendChild(n, t);
                o.$ShowElement(n)
            };
            t.$Clear = function() {
                o.$HideElement(n);
                o.$Empty(n)
            }
        }

        function yf(n, t) {
            function vt(t) {
                y && y.$Revert();
                ri(n, t, 0);
                at = u;
                y = new yt.$Class(n, yt, o.$ParseFloat(o.$AttributeEx(n, "idle")) || he);
                y.$GoToPosition(0)
            }

            function si() {
                y.$Version < yt.$Version && vt()
            }

            function gt(n, i, r) {
                var a, w;
                if (!lt && (lt = u, h && r)) {
                    var s = r.width,
                        l = r.height,
                        v = s,
                        y = l;
                    s && l && p.$FillMode && (p.$FillMode & 3 && (!(p.$FillMode & 4) || s > pt || l > wt) && (a = f, w = pt / wt * l / s, p.$FillMode & 1 ? a = w > 1 : p.$FillMode & 2 && (a = w < 1), v = a ? s * wt / l : pt, y = a ? wt : l * pt / s), o.$CssWidth(h, v), o.$CssHeight(h, y), o.$CssTop(h, (wt - y) / 2), o.$CssLeft(h, (pt - v) / 2));
                    o.$CssPosition(h, "absolute");
                    b.$TriggerEvent(c.$EVT_LOAD_END, t)
                }
                o.$HideElement(i);
                n && n(e)
            }

            function hi(n, i, r, u) {
                if (u == fi && d == t && kt && !se) {
                    var f = g(n);
                    ht.$Initialize(f, t, i, e, r);
                    i.$HideContentForSlideshow();
                    ei.$Shift(f - ei.$GetPosition_OuterBegin() - 1);
                    ei.$GoToPosition(f);
                    ft.$PlayCarousel(n, n, 0)
                }
            }

            function ci(i) {
                if (i == fi && d == t) {
                    if (!s) {
                        var u = r;
                        ht && (ht.$Index == t ? u = ht.$GetProcessor() : ht.$Clear());
                        si();
                        s = new pf(n, t, u, y);
                        s.$SetPlayer(a)
                    }
                    s.$IsPlaying() || s.$Replay()
                }
            }

            function ni(n, u, f) {
                var h;
                if (n == t) n != u ? st[u] && st[u].$ParkOut() : !f && s && s.$AdjustIdleOnPark(), a && a.$Enable(), h = fi = o.$GetNow(), e.$LoadImage(o.$CreateCallback(r, ci, h));
                else {
                    var c = i.min(t, n),
                        l = i.max(t, n),
                        v = i.min(l - c, c + k - l),
                        y = nt + p.$LazyLoading - 1;
                    (!dt || v <= y) && e.$LoadImage()
                }
            }

            function li() {
                d == t && s && (s.$Stop(), a && a.$Quit(), a && a.$Disable(), s.$OpenSlideshowPanel())
            }

            function ai() {
                d == t && s && s.$Stop()
            }

            function vi(n) {
                ui || b.$TriggerEvent(c.$EVT_CLICK, t, n)
            }

            function ii() {
                a = it.pInstance;
                s && s.$SetPlayer(a)
            }

            function ri(n, t, i) {
                if (!o.$Attribute(n, "jssor-slider")) {
                    at || (n.tagName == "IMG" && (rt.push(n), o.$Attribute(n, "src") || (dt = u, n["display-origin"] = o.$CssDisplay(n), o.$HideElement(n))), o.$IsBrowserIe9Earlier() && o.$CssZIndex(n, (o.$CssZIndex(n) || 0) + 1));
                    var r = o.$Children(n);
                    o.$Each(r, function(r) {
                        var s = r.tagName,
                            c = o.$AttributeEx(r, "u"),
                            e;
                        c != "player" || it || (it = r, it.pInstance ? ii() : o.$AddEvent(it, "dataavailable", ii));
                        c == "caption" ? t ? (o.$CssTransformOrigin(r, o.$AttributeEx(r, "to")), o.$CssBackfaceVisibility(r, o.$AttributeEx(r, "bf")), o.$AttributeEx(r, "3d") && o.$CssTransformStyle(r, "preserve-3d")) : o.$IsBrowserIE() || (e = o.$CloneNode(r, f, u), o.$InsertBefore(e, r, n), o.$RemoveElement(r, n), r = e, t = u) : at || i || h || (s == "A" ? (h = o.$AttributeEx(r, "u") == "image" ? o.$FindChildByTag(r, "IMG") : o.$FindChild(r, "image", u), h && (tt = r, o.$CssDisplay(tt, "block"), o.$SetStyles(tt, ti), ut = o.$CloneNode(tt, u), o.$CssPosition(tt, "relative"), o.$CssOpacity(ut, 0), o.$Css(ut, "backgroundColor", "#000"))) : s == "IMG" && o.$AttributeEx(r, "u") == "image" && (h = r), h && (h.border = 0, o.$SetStyles(h, ti)));
                        ri(r, t, i + 1)
                    })
                }
            }
            var e = this,
                y, ct, w, h, rt = [],
                tt, ut, bt, lt, dt, at, s, it, a, oi, ot;
            l.call(e, -nt, nt + 1, {
                $SlideItemAnimator: u
            });
            e.$LoadImage = function(n, i) {
                i = i || w;
                rt.length && !lt ? (o.$ShowElement(i), bt || (bt = u, b.$TriggerEvent(c.$EVT_LOAD_START, t), o.$Each(rt, function(n) {
                    o.$Attribute(n, "src") || (n.src = o.$AttributeEx(n, "src2"), o.$CssDisplay(n, n["display-origin"]))
                })), o.$LoadImages(rt, h, o.$CreateCallback(r, gt, n, i))) : gt(n, i)
            };
            e.$GoForNextSlide = function() {
                var e = t,
                    n, u, s, f;
                if (p.$AutoPlaySteps < 0 && (e -= k), n = e + p.$AutoPlaySteps * ue, et & 2 && (n = g(n)), et & 1 || (n = i.max(0, i.min(n, k - nt))), n != t) {
                    if (ht && (u = ht.$GetTransition(k), u)) return s = fi = o.$GetNow(), f = st[g(n)], f.$LoadImage(o.$CreateCallback(r, hi, n, f, u, s), w);
                    pi(n)
                }
            };
            e.$TryActivate = function() {
                ni(t, t, u)
            };
            e.$ParkOut = function() {
                a && a.$Quit();
                a && a.$Disable();
                e.$UnhideContentForSlideshow();
                s && s.$Abort();
                s = r;
                vt()
            };
            e.$StampSlideItemElements = function(n) {
                n = oi + "_" + n
            };
            e.$HideContentForSlideshow = function() {
                o.$HideElement(n)
            };
            e.$UnhideContentForSlideshow = function() {
                o.$ShowElement(n)
            };
            e.$EnablePlayer = function() {
                a && a.$Enable()
            };
            e.$OnInnerOffsetChange = function(n, t) {
                var i = nt - t;
                ru(ct, i)
            };
            e.$Index = t;
            v.call(e);
            o.$CssPerspective(n, o.$AttributeEx(n, "p"));
            o.$CssPerspectiveOrigin(n, o.$AttributeEx(n, "po"));
            ot = o.$FindChild(n, "thumb", u);
            ot && (e.$Thumb = o.$CloneNode(ot), o.$HideElement(ot));
            o.$ShowElement(n);
            w = o.$CloneNode(gi);
            o.$CssZIndex(w, 1e3);
            o.$AddEvent(n, "click", vi);
            vt(u);
            e.$Image = h;
            e.$Link = ut;
            e.$Item = n;
            e.$Wrapper = ct = n;
            o.$AppendChild(ct, w);
            b.$On(203, ni);
            b.$On(28, ai);
            b.$On(24, li)
        }

        function pf(n, t, i, r) {
            function tt() {
                o.$Empty(gt);
                nf && y && w.$Link && o.$AppendChild(gt, w.$Link);
                o.$ShowElement(gt, !y && w.$Image)
            }

            function it() {
                e.$Replay()
            }

            function rt(n) {
                nt = n;
                e.$Stop();
                e.$Replay()
            }
            var e = this,
                p = 0,
                k = 0,
                a, v, h, s, y, g, nt, w = st[t];
            l.call(e, 0, 0);
            e.$Replay = function() {
                var n = e.$GetPosition_Display(),
                    r, f, i;
                ot || dt || nt || d != t || (n || (a && !y && (y = u, e.$OpenSlideshowPanel(u), b.$TriggerEvent(c.$EVT_SLIDESHOW_START, t, p, k, a, s)), tt()), f = c.$EVT_STATE_CHANGE, n != s && (r = n == h ? s : n == v ? h : n ? e.$GetPlayToPosition() : v), b.$TriggerEvent(f, t, n, p, v, h, s), i = kt && (!ct || lt), n == s ? (h == s || ct & 12) && !i || w.$GoForNextSlide() : (i || n != h) && e.$PlayToPosition(r, it))
            };
            e.$AdjustIdleOnPark = function() {
                h == s && h == e.$GetPosition_Display() && e.$GoToPosition(v)
            };
            e.$Abort = function() {
                ht && ht.$Index == t && ht.$Clear();
                var n = e.$GetPosition_Display();
                n < s && b.$TriggerEvent(c.$EVT_STATE_CHANGE, t, -n - 1, p, v, h, s)
            };
            e.$OpenSlideshowPanel = function(n) {
                i && o.$CssOverflow(nr, n && i.$Transition.$Outside ? "" : "hidden")
            };
            e.$OnInnerOffsetChange = function(n, i) {
                y && i >= a && (y = f, tt(), w.$UnhideContentForSlideshow(), ht.$Clear(), b.$TriggerEvent(c.$EVT_SLIDESHOW_END, t, p, k, a, s));
                b.$TriggerEvent(c.$EVT_PROGRESS_CHANGE, t, i, p, v, h, s)
            };
            e.$SetPlayer = function(n) {
                n && !g && (g = n, n.$On($JssorPlayer$.$EVT_SWITCH, rt))
            };
            i && e.$Chain(i);
            a = e.$GetPosition_OuterEnd();
            e.$Chain(r);
            v = a + r.$IdleBegin;
            h = a + r.$IdleEnd;
            s = e.$GetPosition_OuterEnd()
        }

        function iu(n, t, i) {
            o.$CssLeft(n, t);
            o.$CssTop(n, i)
        }

        function ru(n, t) {
            var i = ut > 0 ? ut : bi,
                r = lr * t * (i & 1),
                u = ar * t * (i >> 1 & 1);
            iu(n, r, u)
        }

        function uu() {
            nu = dt;
            ef = ft.$GetPlayToPosition();
            vt = it.$GetPosition()
        }

        function fu() {
            uu();
            (ot || !lt && ct & 12) && (ft.$Stop(), b.$TriggerEvent(c.$EVT_FREEZE))
        }

        function eu(n) {
            var r, t, u;
            ot || !lt && ct & 12 || ft.$IsPlaying() || (r = it.$GetPosition(), t = i.ceil(vt), n && i.abs(at) >= p.$MinDragOffsetToSlide && (t = i.ceil(r) + rr), et & 1 || (t = i.min(k - nt, i.max(t, 0))), u = i.abs(t - r), u = 1 - i.pow(1 - u, 5), !ui && nu ? ft.$Continue(ef) : r == t ? (cr.$EnablePlayer(), cr.$TryActivate()) : ft.$PlayCarousel(r, t, u * tf))
        }

        function ou(n) {
            o.$AttributeEx(o.$EvtSrc(n), "nodrag") || o.$CancelEvent(n)
        }

        function wf(n) {
            su(n, 1)
        }

        function su(n, i) {
            var h, e, s;
            n = o.$GetEvent(n);
            h = o.$EvtSrc(n);
            bt || o.$AttributeEx(h, "nodrag") || !df() || i && n.touches.length != 1 || (ot = u, vr = f, fi = r, o.$AddEvent(t, i ? "touchmove" : "mousemove", fr), o.$GetNow(), ui = 0, fu(), nu || (ut = 0), i ? (e = n.touches[0], wr = e.clientX, br = e.clientY) : (s = o.$MousePosition(n), wr = s.x, br = s.y), at = 0, ir = 0, rr = 0, b.$TriggerEvent(c.$EVT_DRAG_START, g(vt), vt, n))
        }

        function fr(n) {
            var e, l, s, h, t, c, r, f;
            ot && (n = o.$GetEvent(n), n.type != "mousemove" ? (l = n.touches[0], e = {
                x: l.clientX,
                y: l.clientY
            }) : e = o.$MousePosition(n), e && (s = e.x - wr, h = e.y - br, i.floor(vt) != vt && (ut = ut || bi & bt), (s || h) && !ut && (ut = bt == 3 ? i.abs(h) > i.abs(s) ? 2 : 1 : bt, ur && ut == 1 && i.abs(h) - i.abs(s) > 3 && (vr = u)), ut && (t = h, c = ar, ut == 1 && (t = s, c = lr), et & 1 || (t > 0 && (r = c * d, f = t - r, f > 0 && (t = r + i.sqrt(f) * 5)), t < 0 && (r = c * (k - nt - d), f = -t - r, f > 0 && (t = -r - i.sqrt(f) * 5))), at - ir < -2 ? rr = 0 : at - ir > 2 && (rr = -1), ir = at, at = t, tu = vt - at / c / (ci || 1), at && ut && !vr && (o.$CancelEvent(n), dt ? ft.$SetStandByPosition(tu) : ft.$StandBy(tu)))))
        }

        function vi() {
            if (gf(), ot) {
                ot = f;
                o.$GetNow();
                o.$RemoveEvent(t, "mousemove", fr);
                o.$RemoveEvent(t, "touchmove", fr);
                ui = at;
                ft.$Stop();
                var n = it.$GetPosition();
                b.$TriggerEvent(c.$EVT_DRAG_END, g(n), n, g(vt), vt);
                ct & 12 && uu();
                eu(u)
            }
        }

        function bf(n) {
            if (ui) {
                o.$StopEvent(n);
                for (var t = o.$EvtSrc(n); t && tt !== t;) {
                    t.tagName == "A" && o.$CancelEvent(n);
                    try {
                        t = t.parentNode
                    } catch (i) {
                        break
                    }
                }
            }
        }

        function hu(n) {
            return st[d], d = g(n), cr = st[d], cu(n), d
        }

        function kf(n, t) {
            ut = 0;
            hu(n);
            b.$TriggerEvent(c.$EVT_PARK, g(n), t)
        }

        function cu(n, t) {
            hr = n;
            o.$Each(ri, function(i) {
                i.$SetCurrentIndex(g(n), n, t)
            })
        }

        function df() {
            var t = c.$DragRegistry || 0,
                n = hi;
            return ur && n & 1 && (n &= 1), c.$DragRegistry |= n, bt = n & ~t
        }

        function gf() {
            bt && (c.$DragRegistry &= ~hi, bt = 0)
        }

        function lu() {
            var n = o.$CreateDiv();
            return o.$SetStyles(n, ti), o.$CssPosition(n, "absolute"), n
        }

        function g(n) {
            return (n % k + k) % k
        }

        function ne(n, t) {
            t && (et ? et & 2 && (n = g(n + hr), t = f) : (n = i.min(i.max(n + hr, 0), k - nt), t = f));
            pi(n, p.$SlideDuration, t)
        }

        function er() {
            o.$Each(ri, function(n) {
                n.$Show(n.$Options.$ChanceToShow <= lt)
            })
        }

        function te() {
            lt || (lt = 1, er(), ot || (ct & 12 && eu(), ct & 3 && st[d].$TryActivate()))
        }

        function ie() {
            lt && (lt = 0, er(), !ot && ct & 12 && fu())
        }

        function re() {
            ti = {
                $Width: pt,
                $Height: wt,
                $Top: 0,
                $Left: 0
            };
            o.$Each(ii, function(n) {
                o.$SetStyles(n, ti);
                o.$CssPosition(n, "absolute");
                o.$CssOverflow(n, "hidden");
                o.$HideElement(n)
            });
            o.$SetStyles(gi, ti)
        }

        function yi(n, t) {
            pi(n, t, u)
        }

        function pi(n, t, r) {
            var s, o, c, h;
            !rf || (ot || !lt && ct & 12) && !p.$NaviQuitDrag || (dt = u, ot = f, ft.$Stop(), t == e && (t = tf), s = kr.$GetPosition_Display(), o = n, r && (o = s + n, o = n > 0 ? i.ceil(o) : i.floor(o)), et & 2 && (o = g(o)), et & 1 || (o = i.max(0, i.min(o, k - nt))), c = (o - s) % k, o = s + c, h = s == o ? 0 : t * i.abs(c), h = i.min(h, t * nt * 1.5), ft.$PlayCarousel(s, o, h || 1))
        }

        function oi() {
            return o.$CssWidth(rt || h)
        }

        function wi() {
            return o.$CssHeight(rt || h)
        }

        function or(n, i) {
            var r, u, f, s;
            if (n == e) return o.$CssWidth(h);
            rt || (r = o.$CreateDiv(t), o.$ClassName(r, o.$ClassName(h)), o.$CssCssText(r, o.$CssCssText(h)), o.$CssDisplay(r, "block"), o.$CssPosition(r, "relative"), o.$CssTop(r, 0), o.$CssLeft(r, 0), o.$CssOverflow(r, "visible"), rt = o.$CreateDiv(t), o.$CssPosition(rt, "absolute"), o.$CssTop(rt, 0), o.$CssLeft(rt, 0), o.$CssWidth(rt, o.$CssWidth(h)), o.$CssHeight(rt, o.$CssHeight(h)), o.$CssTransformOrigin(rt, "0 0"), o.$AppendChild(rt, r), u = o.$Children(h), o.$AppendChild(h, rt), o.$Css(h, "backgroundImage", ""), o.$Each(u, function(n) {
                o.$AppendChild(o.$AttributeEx(n, "noscale") ? h : r, n);
                o.$AttributeEx(n, "autocenter") && ff.push(n)
            }));
            ci = n / (i ? o.$CssHeight : o.$CssWidth)(rt);
            o.$CssScale(rt, ci);
            f = i ? ci * oi() : n;
            s = i ? n : ci * wi();
            o.$CssWidth(h, f);
            o.$CssHeight(h, s);
            o.$Each(ff, function(n) {
                var t = o.$ParseInt(o.$AttributeEx(n, "autocenter"));
                o.$CenterElement(n, t)
            })
        }
        var b = this,
            p, li, of, sf, ai;
        b.$PlayTo = pi;
        b.$GoTo = function(n) {
            it.$GoToPosition(hu(n))
        };
        b.$Next = function() {
            yi(1)
        };
        b.$Prev = function() {
            yi(-1)
        };
        b.$Pause = function() {
            kt = f
        };
        b.$Play = function() {
            kt || (kt = u, st[d] && st[d].$TryActivate())
        };
        b.$SetSlideshowTransitions = function(n) {
            p.$SlideshowOptions.$Transitions = n
        };
        b.$SetCaptionTransitions = function(n) {
            yt.$Transitions = n;
            yt.$Version = o.$GetNow()
        };
        b.$SlidesCount = function() {
            return ii.length
        };
        b.$CurrentIndex = function() {
            return d
        };
        b.$IsAutoPlaying = function() {
            return kt
        };
        b.$IsDragging = function() {
            return ot
        };
        b.$IsSliding = function() {
            return dt
        };
        b.$IsMouseOver = function() {
            return !lt
        };
        b.$LastDragSucceded = function() {
            return ui
        };
        b.$OriginalWidth = b.$GetOriginalWidth = oi;
        b.$OriginalHeight = b.$GetOriginalHeight = wi;
        b.$ScaleHeight = b.$GetScaleHeight = function(n) {
            if (n == e) return o.$CssHeight(h);
            or(n, u)
        };
        b.$ScaleWidth = b.$SetScaleWidth = b.$GetScaleWidth = or;
        b.$GetVirtualIndex = function(n) {
            var t = i.ceil(g(tr / bu)),
                r = g(n - d + t);
            return r > nt ? n - d > k / 2 ? n -= k : n - d <= -k / 2 && (n += k) : n = d + r - t, n
        };
        v.call(b);
        b.$Elmt = h = o.$GetElement(h);
        p = o.$Extend({
            $FillMode: 0,
            $LazyLoading: 1,
            $ArrowKeyNavigation: 1,
            $StartIndex: 0,
            $AutoPlay: f,
            $Loop: 1,
            $HWA: u,
            $NaviQuitDrag: u,
            $AutoPlaySteps: 1,
            $AutoPlayInterval: 3e3,
            $PauseOnHover: 1,
            $SlideDuration: 500,
            $SlideEasing: s.$EaseOutQuad,
            $MinDragOffsetToSlide: 20,
            $SlideSpacing: 0,
            $Cols: 1,
            $Align: 0,
            $UISearchMode: 1,
            $PlayOrientation: 1,
            $DragOrientation: 1
        }, a);
        p.$HWA = p.$HWA && o.$IsBrowser3dSafe();
        p.$Idle != e && (p.$AutoPlayInterval = p.$Idle);
        p.$ParkingPosition != e && (p.$Align = p.$ParkingPosition);
        var bi = p.$PlayOrientation & 3,
            ue = (p.$PlayOrientation & 4) / -4 || 1,
            ki = p.$SlideshowOptions,
            yt = o.$Extend({
                $Class: w,
                $PlayInMode: 1,
                $PlayOutMode: 1,
                $HWA: p.$HWA
            }, p.$CaptionSliderOptions);
        yt.$Transitions = yt.$Transitions || yt.$CaptionTransitions;
        var sr = p.$BulletNavigatorOptions,
            si = p.$ArrowNavigatorOptions,
            di = p.$ThumbnailNavigatorOptions,
            ni = !p.$UISearchMode,
            rt, tt = o.$FindChild(h, "slides", ni),
            gi = o.$FindChild(h, "loading", ni) || o.$CreateDiv(t),
            au = o.$FindChild(h, "navigator", ni),
            vu = o.$FindChild(h, "arrowleft", ni),
            yu = o.$FindChild(h, "arrowright", ni),
            pu = o.$FindChild(h, "thumbnavigator", ni),
            fe = o.$CssWidth(tt),
            ee = o.$CssHeight(tt),
            ti, ii = [],
            oe = o.$Children(tt);
        o.$Each(oe, function(n) {
            n.tagName != "DIV" || o.$AttributeEx(n, "u") ? o.$IsBrowserIe9Earlier() && o.$CssZIndex(n, (o.$CssZIndex(n) || 0) + 1) : ii.push(n)
        });
        var d = -1,
            hr, cr, k = ii.length,
            pt = p.$SlideWidth || fe,
            wt = p.$SlideHeight || ee,
            wu = p.$SlideSpacing,
            lr = pt + wu,
            ar = wt + wu,
            bu = bi & 1 ? lr : ar,
            nt = i.min(p.$Cols, k),
            nr, ut, bt, vr, ri = [],
            ku, du, gu, nf, se, kt, ct = p.$PauseOnHover,
            he = p.$AutoPlayInterval,
            tf = p.$SlideDuration,
            yr, pr, tr, rf = nt < k,
            et = rf ? p.$Loop : 0,
            hi, ui, lt = 1,
            dt, ot, fi, wr = 0,
            br = 0,
            at, ir, rr, kr, it, ei, ft, uf = new vf,
            ci, ff = [];
        p.$HWA && (iu = function(n, t, i) {
            o.$SetStyleTransform(n, {
                $TranslateX: t,
                $TranslateY: i
            })
        });
        kt = p.$AutoPlay;
        b.$Options = a;
        re();
        o.$Attribute(h, "jssor-slider", u);
        o.$CssZIndex(tt, o.$CssZIndex(tt) || 0);
        o.$CssPosition(tt, "absolute");
        nr = o.$CloneNode(tt, u);
        o.$InsertBefore(nr, tt);
        ki && (nf = ki.$ShowLink, yr = ki.$Class, pr = nt == 1 && k > 1 && yr && (!o.$IsBrowserIE() || o.$BrowserVersion() >= 8));
        tr = pr || nt >= k || !(et & 1) ? 0 : p.$Align;
        hi = (nt > 1 || tr ? bi : -1) & p.$DragOrientation;
        var dr = tt,
            st = [],
            ht, gt, gr = o.$Device(),
            ur = gr.$Touchable,
            vt, nu, ef, tu;
        for (gr.$TouchActionAttr && o.$Css(dr, gr.$TouchActionAttr, [r, "pan-y", "pan-x", "none"][hi] || ""), ei = new lf, pr && (ht = new yr(uf, pt, wt, ki, ur)), o.$AppendChild(nr, ei.$Wrapper), o.$CssOverflow(tt, "hidden"), gt = lu(), o.$Css(gt, "backgroundColor", "#000"), o.$CssOpacity(gt, 0), o.$InsertBefore(gt, dr.firstChild, dr), li = 0; li < ii.length; li++) of = ii[li], sf = new yf(of, li), st.push(sf);
        o.$HideElement(gi);
        kr = new cf;
        ft = new af(kr, ei);
        hi && (o.$AddEvent(tt, "mousedown", su), o.$AddEvent(tt, "touchstart", wf), o.$AddEvent(tt, "dragstart", ou), o.$AddEvent(tt, "selectstart", ou), o.$AddEvent(t, "mouseup", vi), o.$AddEvent(t, "touchend", vi), o.$AddEvent(t, "touchcancel", vi), o.$AddEvent(n, "blur", vi));
        ct &= ur ? 10 : 5;
        au && sr && (ku = new sr.$Class(au, sr, oi(), wi()), ri.push(ku));
        si && vu && yu && (si.$Loop = et, si.$Cols = nt, du = new si.$Class(vu, yu, si, oi(), wi()), ri.push(du));
        pu && di && (di.$StartIndex = p.$StartIndex, gu = new di.$Class(pu, di), ri.push(gu));
        o.$Each(ri, function(n) {
            n.$Reset(k, st, gi);
            n.$On(y.$NAVIGATIONREQUEST, ne)
        });
        o.$Css(h, "visibility", "visible");
        or(oi());
        o.$AddEvent(tt, "click", bf, u);
        o.$AddEvent(h, "mouseout", o.$MouseOverOutFilter(te, h));
        o.$AddEvent(h, "mouseover", o.$MouseOverOutFilter(ie, h));
        er();
        p.$ArrowKeyNavigation && o.$AddEvent(t, "keydown", function(n) {
            n.keyCode == 37 ? yi(-p.$ArrowKeyNavigation) : n.keyCode == 39 && yi(p.$ArrowKeyNavigation)
        });
        ai = p.$StartIndex;
        et & 1 || (ai = i.max(0, i.min(ai, k - nt)));
        ft.$PlayCarousel(ai, ai, 0)
    };
    c.$EVT_CLICK = 21;
    c.$EVT_DRAG_START = 22;
    c.$EVT_DRAG_END = 23;
    c.$EVT_SWIPE_START = 24;
    c.$EVT_SWIPE_END = 25;
    c.$EVT_LOAD_START = 26;
    c.$EVT_LOAD_END = 27;
    c.$EVT_FREEZE = 28;
    c.$EVT_POSITION_CHANGE = 202;
    c.$EVT_PARK = 203;
    c.$EVT_SLIDESHOW_START = 206;
    c.$EVT_SLIDESHOW_END = 207;
    c.$EVT_PROGRESS_CHANGE = 208;
    c.$EVT_STATE_CHANGE = 209;
    y = {
        $NAVIGATIONREQUEST: 1,
        $INDEXCHANGE: 2,
        $RESET: 3
    };
    n.$JssorBulletNavigator$ = function(n, t) {
        function ut(n) {
            n != -1 && rt[n].$Selected(n == a)
        }

        function ft(n) {
            s.$TriggerEvent(y.$NAVIGATIONREQUEST, n * p)
        }
        var s = this,
            et;
        v.call(s);
        n = o.$GetElement(n);
        var w, g, nt, b, a = 0,
            e, p, h, tt, it, c, l, k, d, ot = [],
            rt = [];
        s.$Elmt = n;
        s.$GetCurrentIndex = function() {
            return b
        };
        s.$SetCurrentIndex = function(n) {
            if (n != b) {
                var r = a,
                    t = i.floor(n / p);
                a = t;
                b = n;
                ut(r);
                ut(t)
            }
        };
        s.$Show = function(t) {
            o.$ShowElement(n, t)
        };
        s.$Reset = function(t) {
            var f, ut, s, st;
            if (!et) {
                w = i.ceil(t / p);
                a = 0;
                var y = k + tt,
                    b = d + it,
                    v = i.ceil(w / h) - 1;
                for (g = k + y * (c ? h - 1 : v), nt = d + b * (c ? v : h - 1), o.$CssWidth(n, g), o.$CssHeight(n, nt), f = 0; f < w; f++) ut = o.$CreateSpan(), o.$InnerText(ut, f + 1), s = o.$BuildElement(l, "numbertemplate", ut, u), o.$CssPosition(s, "absolute"), st = f % (v + 1), o.$CssLeft(s, c ? f % h * y : y * st), o.$CssTop(s, c ? b * st : i.floor(f / (v + 1)) * b), o.$AppendChild(n, s), ot[f] = s, e.$ActionMode & 1 && o.$AddEvent(s, "click", o.$CreateCallback(r, ft, f)), e.$ActionMode & 2 && o.$AddEvent(s, "mouseover", o.$MouseOverOutFilter(o.$CreateCallback(r, ft, f), s)), rt[f] = o.$Buttonize(s);
                et = u
            }
        };
        s.$Options = e = o.$Extend({
            $SpacingX: 10,
            $SpacingY: 10,
            $Orientation: 1,
            $ActionMode: 1
        }, t);
        l = o.$FindChild(n, "prototype");
        k = o.$CssWidth(l);
        d = o.$CssHeight(l);
        o.$RemoveElement(l, n);
        p = e.$Steps || 1;
        h = e.$Rows || 1;
        tt = e.$SpacingX;
        it = e.$SpacingY;
        c = e.$Orientation - 1;
        e.$Scale == f && o.$Attribute(n, "noscale", u);
        e.$AutoCenter && o.$Attribute(n, "autocenter", e.$AutoCenter)
    };
    n.$JssorArrowNavigator$ = function(n, t, i) {
        function p(n) {
            e.$TriggerEvent(y.$NAVIGATIONREQUEST, n, u)
        }

        function w(r) {
            o.$ShowElement(n, r || !i.$Loop && s == 0);
            o.$ShowElement(t, r || !i.$Loop && s >= a - i.$Cols);
            l = r
        }
        var e = this,
            l, a, s, h, c, b;
        v.call(e);
        o.$CssWidth(n);
        o.$CssHeight(n);
        e.$GetCurrentIndex = function() {
            return s
        };
        e.$SetCurrentIndex = function(n, t, i) {
            i ? s = t : (s = n, w(l))
        };
        e.$Show = w;
        e.$Reset = function(i) {
            a = i;
            s = 0;
            b || (o.$AddEvent(n, "click", o.$CreateCallback(r, p, -c)), o.$AddEvent(t, "click", o.$CreateCallback(r, p, c)), o.$Buttonize(n), o.$Buttonize(t), b = u)
        };
        e.$Options = h = o.$Extend({
            $Steps: 1
        }, i);
        c = h.$Steps;
        h.$Scale == f && (o.$Attribute(n, "noscale", u), o.$Attribute(t, "noscale", u));
        h.$AutoCenter && (o.$Attribute(n, "autocenter", h.$AutoCenter), o.$Attribute(t, "autocenter", h.$AutoCenter))
    };
    n.$JssorThumbnailNavigator$ = function(n, t) {
        function et(n, t) {
            function p() {
                h.$Selected(a == t)
            }

            function v(n) {
                if (n || !k.$LastDragSucceded()) {
                    var i = s - t % s,
                        r = k.$GetVirtualIndex((t + i) / s - 1),
                        u = r * s + s - i;
                    l.$TriggerEvent(y.$NAVIGATIONREQUEST, u)
                }
            }
            var f = this,
                i, h, c;
            f.$Index = t;
            f.$Highlight = p;
            c = n.$Thumb || n.$Image || o.$CreateDiv();
            f.$Wrapper = i = o.$BuildElement(d, "thumbnailtemplate", c, u);
            h = o.$Buttonize(i);
            e.$ActionMode & 1 && o.$AddEvent(i, "click", o.$CreateCallback(r, v, 0));
            e.$ActionMode & 2 && o.$AddEvent(i, "mouseover", o.$MouseOverOutFilter(o.$CreateCallback(r, v, 1), i))
        }
        var l = this,
            it, a, e, tt = [],
            rt, ut, s, p, w, g, nt, b, k, h, d, ft;
        v.call(l);
        n = o.$GetElement(n);
        l.$GetCurrentIndex = function() {
            return a
        };
        l.$SetCurrentIndex = function(n, t, r) {
            var u = a;
            a = n;
            u != -1 && tt[u].$Highlight();
            tt[n].$Highlight();
            r || k.$PlayTo(k.$GetVirtualIndex(i.floor(t / s)))
        };
        l.$Show = function(t) {
            o.$ShowElement(n, t)
        };
        l.$Reset = function(t, r) {
            var v, ht;
            if (!ft) {
                it = t;
                i.ceil(it / s);
                a = -1;
                b = i.min(b, r.length);
                var l = e.$Orientation & 1,
                    y = g + (g + p) * (s - 1) * (1 - l),
                    d = nt + (nt + w) * (s - 1) * l,
                    ot = y + (y + p) * (b - 1) * l,
                    st = d + (d + w) * (b - 1) * (1 - l);
                o.$CssPosition(h, "absolute");
                o.$CssOverflow(h, "hidden");
                e.$AutoCenter & 1 && o.$CssLeft(h, (rt - ot) / 2);
                e.$AutoCenter & 2 && o.$CssTop(h, (ut - st) / 2);
                o.$CssWidth(h, ot);
                o.$CssHeight(h, st);
                v = [];
                o.$Each(r, function(n, t) {
                    var f = new et(n, t),
                        u = f.$Wrapper,
                        r = i.floor(t / s),
                        e = t % s;
                    o.$CssLeft(u, (g + p) * e * (1 - l));
                    o.$CssTop(u, (nt + w) * e * l);
                    v[r] || (v[r] = o.$CreateDiv(), o.$AppendChild(h, v[r]));
                    o.$AppendChild(v[r], u);
                    tt.push(f)
                });
                ht = o.$Extend({
                    $AutoPlay: f,
                    $NaviQuitDrag: f,
                    $SlideWidth: y,
                    $SlideHeight: d,
                    $SlideSpacing: p * l + w * (1 - l),
                    $MinDragOffsetToSlide: 12,
                    $SlideDuration: 200,
                    $PauseOnHover: 1,
                    $PlayOrientation: e.$Orientation,
                    $DragOrientation: e.$NoDrag || e.$DisableDrag ? 0 : e.$Orientation
                }, e);
                k = new c(n, ht);
                ft = u
            }
        };
        l.$Options = e = o.$Extend({
            $SpacingX: 0,
            $SpacingY: 0,
            $Cols: 1,
            $Orientation: 1,
            $AutoCenter: 3,
            $ActionMode: 1
        }, t);
        rt = o.$CssWidth(n);
        ut = o.$CssHeight(n);
        h = o.$FindChild(n, "slides", u);
        d = o.$FindChild(h, "prototype");
        g = o.$CssWidth(d);
        nt = o.$CssHeight(d);
        o.$RemoveElement(d, h);
        s = e.$Rows || 1;
        p = e.$SpacingX;
        w = e.$SpacingY;
        b = e.$Cols;
        e.$Scale == f && o.$Attribute(n, "noscale", u)
    };
    n.$JssorCaptionSlideo$ = function(n, t, i) {
        function v(n, t) {
            var i = {};
            return o.$Each(n, function(n, r) {
                var u = c[r];
                u && (o.$IsPlainObject(n) ? n = v(n, t || r == "e") : t && o.$IsNumeric(n) && (n = s[n]), i[u] = n)
            }), i
        }

        function y(n, t) {
            var i = [],
                r = o.$Children(n);
            return o.$Each(r, function(n) {
                var u = o.$AttributeEx(n, "u") == "caption";
                if (u) {
                    var r = o.$AttributeEx(n, "t"),
                        f = a[o.$ParseInt(r)] || a[r],
                        e = {
                            $Elmt: n,
                            $Transition: f
                        };
                    i.push(e)
                }
                t < 5 && (i = i.concat(y(n, t + 1)))
            }), i
        }

        function b(n, t, i) {
            return o.$Each(t, function(t) {
                var r = v(t),
                    u = o.$FormatEasings(r.$Easing),
                    e, s;
                r.$Left && (r.$MoveX = r.$Left, u.$MoveX = u.$Left, delete r.$Left);
                r.$Top && (r.$MoveY = r.$Top, u.$MoveY = u.$Top, delete r.$Top);
                e = {
                    $Easing: u,
                    $OriginalWidth: i.$Width,
                    $OriginalHeight: i.$Height
                };
                s = new l(t.b, t.d, e, n, i, r);
                f.$Combine(s);
                i = o.$AddDif(i, r)
            }), i
        }

        function k(n) {
            o.$Each(n, function(n) {
                var t = n.$Elmt,
                    r = o.$CssWidth(t),
                    u = o.$CssHeight(t),
                    i = {
                        $Left: o.$CssLeft(t),
                        $Top: o.$CssTop(t),
                        $MoveX: 0,
                        $MoveY: 0,
                        $Opacity: 1,
                        $ZIndex: o.$CssZIndex(t) || 0,
                        $Rotate: 0,
                        $RotateX: 0,
                        $RotateY: 0,
                        $ScaleX: 1,
                        $ScaleY: 1,
                        $TranslateX: 0,
                        $TranslateY: 0,
                        $TranslateZ: 0,
                        $SkewX: 0,
                        $SkewY: 0,
                        $Width: r,
                        $Height: u,
                        $Clip: {
                            $Top: 0,
                            $Right: r,
                            $Bottom: u,
                            $Left: 0
                        }
                    };
                i.$OriginalX = i.$Left;
                i.$OriginalY = i.$Top;
                b(t, n.$Transition, i)
            })
        }

        function d(n, t, i) {
            var o = n.b - t,
                e;
            return o && (e = new l(t, o), e.$Combine(f, u), e.$Shift(i), r.$Combine(e)), r.$Expand(n.d), o
        }

        function g(n) {
            var t = f.$GetPosition_OuterBegin(),
                u = 0;
            o.$Each(n, function(n, f) {
                n = o.$Extend({
                    d: i
                }, n);
                d(n, t, u);
                t = n.b;
                u += n.d;
                f && n.t != 2 || (r.$IdleBegin = t, r.$IdleEnd = t + n.d)
            })
        }
        var r = this,
            s, c = {},
            a = t.$Transitions,
            f = new l(0, 0),
            p, w, e;
        l.call(r, 0, 0);
        r.$Revert = function() {
            r.$GoToPosition(-1, u)
        };
        s = [h.$Swing, h.$Linear, h.$InQuad, h.$OutQuad, h.$InOutQuad, h.$InCubic, h.$OutCubic, h.$InOutCubic, h.$InQuart, h.$OutQuart, h.$InOutQuart, h.$InQuint, h.$OutQuint, h.$InOutQuint, h.$InSine, h.$OutSine, h.$InOutSine, h.$InExpo, h.$OutExpo, h.$InOutExpo, h.$InCirc, h.$OutCirc, h.$InOutCirc, h.$InElastic, h.$OutElastic, h.$InOutElastic, h.$InBack, h.$OutBack, h.$InOutBack, h.$InBounce, h.$OutBounce, h.$InOutBounce, h.$GoBack, h.$InWave, h.$OutWave, h.$OutJump, h.$InJump];
        p = {
            $Top: "y",
            $Left: "x",
            $Bottom: "m",
            $Right: "t",
            $Rotate: "r",
            $RotateX: "rX",
            $RotateY: "rY",
            $ScaleX: "sX",
            $ScaleY: "sY",
            $TranslateX: "tX",
            $TranslateY: "tY",
            $TranslateZ: "tZ",
            $SkewX: "kX",
            $SkewY: "kY",
            $Opacity: "o",
            $Easing: "e",
            $ZIndex: "i",
            $Clip: "c"
        };
        o.$Each(p, function(n, t) {
            c[n] = t
        });
        k(y(n, 1));
        f.$GoToPosition(-1);
        w = t.$Breaks || [];
        e = [].concat(w[o.$ParseInt(o.$AttributeEx(n, "b"))] || []);
        e.push({
            b: f.$GetPosition_OuterEnd(),
            d: e.length ? 0 : i
        });
        g(e);
        r.$GoToPosition(-1)
    }
}(window, document, Math, null, !0, !1);
window.Modernizr = function(n, t, i) {
    function l(n) {
        c.cssText = n
    }

    function at(n, t) {
        return l(p.join(n + ";") + (t || ""))
    }

    function h(n, t) {
        return typeof n === t
    }

    function v(n, t) {
        return !!~("" + n).indexOf(t)
    }

    function ut(n, t) {
        var u, r;
        for (u in n)
            if (r = n[u], !v(r, "-") && c[r] !== i) return "pfx" == t ? r : !0;
        return !1
    }

    function vt(n, t, r) {
        var f, u;
        for (f in n)
            if (u = t[n[f]], u !== i) return r === !1 ? n[f] : h(u, "function") ? u.bind(r || t) : u;
        return !1
    }

    function f(n, t, i) {
        var r = n.charAt(0).toUpperCase() + n.slice(1),
            u = (n + " " + st.join(r + " ") + r).split(" ");
        return h(t, "string") || h(t, "undefined") ? ut(u, t) : (u = (n + " " + ht.join(r + " ") + r).split(" "), vt(u, t, i))
    }

    function yt() {
        u.input = function(i) {
            for (var r = 0, u = i.length; u > r; r++) b[i[r]] = !!(i[r] in o);
            return b.list && (b.list = !(!t.createElement("datalist") || !n.HTMLDataListElement)), b
        }("autocomplete autofocus list placeholder max min multiple pattern required step".split(" "));
        u.inputtypes = function(n) {
            for (var r, u, e, f = 0, h = n.length; h > f; f++) o.setAttribute("type", u = n[f]), r = "text" !== o.type, r && (o.value = nt, o.style.cssText = "position:absolute;visibility:hidden;", /^range$/.test(u) && o.style.WebkitAppearance !== i ? (s.appendChild(o), e = t.defaultView, r = e.getComputedStyle && "textfield" !== e.getComputedStyle(o, null).WebkitAppearance && 0 !== o.offsetHeight, s.removeChild(o)) : /^(search|tel)$/.test(u) || (r = /^(url|email)$/.test(u) ? o.checkValidity && o.checkValidity() === !1 : o.value != nt)), ct[n[f]] = !!r;
            return ct
        }("search tel url email datetime date month week time datetime-local number range color".split(" "))
    }
    var y, d, u = {},
        g = !0,
        s = t.documentElement,
        e = "modernizr",
        ft = t.createElement(e),
        c = ft.style,
        o = t.createElement("input"),
        nt = ":)",
        et = {}.toString,
        p = " -webkit- -moz- -o- -ms- ".split(" "),
        ot = "Webkit Moz O ms",
        st = ot.split(" "),
        ht = ot.toLowerCase().split(" "),
        w = {
            svg: "http://www.w3.org/2000/svg"
        },
        r = {},
        ct = {},
        b = {},
        tt = [],
        it = tt.slice,
        a = function(n, i, r, u) {
            var l, a, c, v, f = t.createElement("div"),
                h = t.body,
                o = h || t.createElement("body");
            if (parseInt(r, 10))
                for (; r--;) c = t.createElement("div"), c.id = u ? u[r] : e + (r + 1), f.appendChild(c);
            return l = ["&#173;", '<style id="s', e, '">', n, "<\/style>"].join(""), f.id = e, (h ? f : o).innerHTML += l, o.appendChild(f), h || (o.style.background = "", o.style.overflow = "hidden", v = s.style.overflow, s.style.overflow = "hidden", s.appendChild(o)), a = i(f, n), h ? f.parentNode.removeChild(f) : (o.parentNode.removeChild(o), s.style.overflow = v), !!a
        },
        pt = function(t) {
            var i = n.matchMedia || n.msMatchMedia,
                r;
            return i ? i(t) && i(t).matches || !1 : (a("@media " + t + " { #" + e + " { position: absolute; } }", function(t) {
                r = "absolute" == (n.getComputedStyle ? getComputedStyle(t, null) : t.currentStyle).position
            }), r)
        },
        lt = function() {
            function n(n, u) {
                u = u || t.createElement(r[n] || "div");
                n = "on" + n;
                var f = n in u;
                return f || (u.setAttribute || (u = t.createElement("div")), u.setAttribute && u.removeAttribute && (u.setAttribute(n, ""), f = h(u[n], "function"), h(u[n], "undefined") || (u[n] = i), u.removeAttribute(n))), u = null, f
            }
            var r = {
                select: "input",
                change: "input",
                submit: "form",
                reset: "form",
                error: "img",
                load: "img",
                abort: "img"
            };
            return n
        }(),
        rt = {}.hasOwnProperty,
        k;
    d = h(rt, "undefined") || h(rt.call, "undefined") ? function(n, t) {
        return t in n && h(n.constructor.prototype[t], "undefined")
    } : function(n, t) {
        return rt.call(n, t)
    };
    Function.prototype.bind || (Function.prototype.bind = function(n) {
        var t = this,
            i, r;
        if ("function" != typeof t) throw new TypeError;
        return i = it.call(arguments, 1), r = function() {
            var f, e, u;
            return this instanceof r ? (f = function() {}, f.prototype = t.prototype, e = new f, u = t.apply(e, i.concat(it.call(arguments))), Object(u) === u ? u : e) : t.apply(n, i.concat(it.call(arguments)))
        }, r
    });
    r.flexbox = function() {
        return f("flexWrap")
    };
    r.flexboxlegacy = function() {
        return f("boxDirection")
    };
    r.canvas = function() {
        var n = t.createElement("canvas");
        return !(!n.getContext || !n.getContext("2d"))
    };
    r.canvastext = function() {
        return !(!u.canvas || !h(t.createElement("canvas").getContext("2d").fillText, "function"))
    };
    r.webgl = function() {
        return !!n.WebGLRenderingContext
    };
    r.touch = function() {
        var i;
        return "ontouchstart" in n || n.DocumentTouch && t instanceof DocumentTouch ? i = !0 : a(["@media (", p.join("touch-enabled),("), e, ")", "{#modernizr{top:9px;position:absolute}}"].join(""), function(n) {
            i = 9 === n.offsetTop
        }), i
    };
    r.geolocation = function() {
        return "geolocation" in navigator
    };
    r.postmessage = function() {
        return !!n.postMessage
    };
    r.websqldatabase = function() {
        return !!n.openDatabase
    };
    r.indexedDB = function() {
        return !!f("indexedDB", n)
    };
    r.hashchange = function() {
        return lt("hashchange", n) && (t.documentMode === i || t.documentMode > 7)
    };
    r.history = function() {
        return !(!n.history || !history.pushState)
    };
    r.draganddrop = function() {
        var n = t.createElement("div");
        return "draggable" in n || "ondragstart" in n && "ondrop" in n
    };
    r.websockets = function() {
        return "WebSocket" in n || "MozWebSocket" in n
    };
    r.rgba = function() {
        return l("background-color:rgba(150,255,150,.5)"), v(c.backgroundColor, "rgba")
    };
    r.hsla = function() {
        return l("background-color:hsla(120,40%,100%,.5)"), v(c.backgroundColor, "rgba") || v(c.backgroundColor, "hsla")
    };
    r.multiplebgs = function() {
        return l("background:url(https://),url(https://),red url(https://)"), /(url\s*\(.*?){3}/.test(c.background)
    };
    r.backgroundsize = function() {
        return f("backgroundSize")
    };
    r.borderimage = function() {
        return f("borderImage")
    };
    r.borderradius = function() {
        return f("borderRadius")
    };
    r.boxshadow = function() {
        return f("boxShadow")
    };
    r.textshadow = function() {
        return "" === t.createElement("div").style.textShadow
    };
    r.opacity = function() {
        return at("opacity:.55"), /^0.55$/.test(c.opacity)
    };
    r.cssanimations = function() {
        return f("animationName")
    };
    r.csscolumns = function() {
        return f("columnCount")
    };
    r.cssgradients = function() {
        var n = "background-image:";
        return l((n + "-webkit- ".split(" ").join("gradient(linear,left top,right bottom,from(#9f9),to(white));" + n) + p.join("linear-gradient(left top,#9f9, white);" + n)).slice(0, -n.length)), v(c.backgroundImage, "gradient")
    };
    r.cssreflections = function() {
        return f("boxReflect")
    };
    r.csstransforms = function() {
        return !!f("transform")
    };
    r.csstransforms3d = function() {
        var n = !!f("perspective");
        return n && "webkitPerspective" in s.style && a("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}", function(t) {
            n = 9 === t.offsetLeft && 3 === t.offsetHeight
        }), n
    };
    r.csstransitions = function() {
        return f("transition")
    };
    r.fontface = function() {
        var n;
        return a('@font-face {font-family:"font";src:url("https://")}', function(i, r) {
            var f = t.getElementById("smodernizr"),
                u = f.sheet || f.styleSheet,
                e = u ? u.cssRules && u.cssRules[0] ? u.cssRules[0].cssText : u.cssText || "" : "";
            n = /src/i.test(e) && 0 === e.indexOf(r.split(" ")[0])
        }), n
    };
    r.generatedcontent = function() {
        var n;
        return a(["#", e, "{font:0/0 a}#", e, ':after{content:"', nt, '";visibility:hidden;font:3px/1 a}'].join(""), function(t) {
            n = t.offsetHeight >= 3
        }), n
    };
    r.video = function() {
        var i = t.createElement("video"),
            n = !1;
        try {
            (n = !!i.canPlayType) && (n = new Boolean(n), n.ogg = i.canPlayType('video/ogg; codecs="theora"').replace(/^no$/, ""), n.h264 = i.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/, ""), n.webm = i.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/, ""))
        } catch (r) {}
        return n
    };
    r.audio = function() {
        var i = t.createElement("audio"),
            n = !1;
        try {
            (n = !!i.canPlayType) && (n = new Boolean(n), n.ogg = i.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/, ""), n.mp3 = i.canPlayType("audio/mpeg;").replace(/^no$/, ""), n.wav = i.canPlayType('audio/wav; codecs="1"').replace(/^no$/, ""), n.m4a = (i.canPlayType("audio/x-m4a;") || i.canPlayType("audio/aac;")).replace(/^no$/, ""))
        } catch (r) {}
        return n
    };
    r.localstorage = function() {
        try {
            return localStorage.setItem(e, e), localStorage.removeItem(e), !0
        } catch (n) {
            return !1
        }
    };
    r.sessionstorage = function() {
        try {
            return sessionStorage.setItem(e, e), sessionStorage.removeItem(e), !0
        } catch (n) {
            return !1
        }
    };
    r.webworkers = function() {
        return !!n.Worker
    };
    r.applicationcache = function() {
        return !!n.applicationCache
    };
    r.svg = function() {
        return !!t.createElementNS && !!t.createElementNS(w.svg, "svg").createSVGRect
    };
    r.inlinesvg = function() {
        var n = t.createElement("div");
        return n.innerHTML = "<svg/>", (n.firstChild && n.firstChild.namespaceURI) == w.svg
    };
    r.smil = function() {
        return !!t.createElementNS && /SVGAnimate/.test(et.call(t.createElementNS(w.svg, "animate")))
    };
    r.svgclippaths = function() {
        return !!t.createElementNS && /SVGClipPath/.test(et.call(t.createElementNS(w.svg, "clipPath")))
    };
    for (k in r) d(r, k) && (y = k.toLowerCase(), u[y] = r[k](), tt.push((u[y] ? "" : "no-") + y));
    return u.input || yt(), u.addTest = function(n, t) {
            if ("object" == typeof n)
                for (var r in n) d(n, r) && u.addTest(r, n[r]);
            else {
                if (n = n.toLowerCase(), u[n] !== i) return u;
                t = "function" == typeof t ? t() : t;
                "undefined" != typeof g && g && (s.className += " " + (t ? "" : "no-") + n);
                u[n] = t
            }
            return u
        }, l(""), ft = o = null,
        function(n, t) {
            function v(n, t) {
                var i = n.createElement("p"),
                    r = n.getElementsByTagName("head")[0] || n.documentElement;
                return i.innerHTML = "x<style>" + t + "<\/style>", r.insertBefore(i.lastChild, r.firstChild)
            }

            function s() {
                var n = r.elements;
                return "string" == typeof n ? n.split(" ") : n
            }

            function u(n) {
                var t = a[n[l]];
                return t || (t = {}, o++, n[l] = o, a[o] = t), t
            }

            function h(n, r, f) {
                if (r || (r = t), i) return r.createElement(n);
                f || (f = u(r));
                var e;
                return e = f.cache[n] ? f.cache[n].cloneNode() : b.test(n) ? (f.cache[n] = f.createElem(n)).cloneNode() : f.createElem(n), !e.canHaveChildren || w.test(n) || e.tagUrn ? e : f.frag.appendChild(e)
            }

            function y(n, r) {
                if (n || (n = t), i) return n.createDocumentFragment();
                r = r || u(n);
                for (var e = r.frag.cloneNode(), f = 0, o = s(), h = o.length; h > f; f++) e.createElement(o[f]);
                return e
            }

            function p(n, t) {
                t.cache || (t.cache = {}, t.createElem = n.createElement, t.createFrag = n.createDocumentFragment, t.frag = t.createFrag());
                n.createElement = function(i) {
                    return r.shivMethods ? h(i, n, t) : t.createElem(i)
                };
                n.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + s().join().replace(/[\w\-]+/g, function(n) {
                    return t.createElem(n), t.frag.createElement(n), 'c("' + n + '")'
                }) + ");return n}")(r, t.frag)
            }

            function c(n) {
                n || (n = t);
                var e = u(n);
                return !r.shivCSS || f || e.hasCSS || (e.hasCSS = !!v(n, "article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")), i || p(n, e), n
            }
            var f, i, e = n.html5 || {},
                w = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
                b = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,
                l = "_html5shiv",
                o = 0,
                a = {},
                r;
            ! function() {
                try {
                    var n = t.createElement("a");
                    n.innerHTML = "<xyz><\/xyz>";
                    f = "hidden" in n;
                    i = 1 == n.childNodes.length || function() {
                        t.createElement("a");
                        var n = t.createDocumentFragment();
                        return "undefined" == typeof n.cloneNode || "undefined" == typeof n.createDocumentFragment || "undefined" == typeof n.createElement
                    }()
                } catch (r) {
                    f = !0;
                    i = !0
                }
            }();
            r = {
                elements: e.elements || "abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",
                version: "3.7.0",
                shivCSS: e.shivCSS !== !1,
                supportsUnknownElements: i,
                shivMethods: e.shivMethods !== !1,
                type: "default",
                shivDocument: c,
                createElement: h,
                createDocumentFragment: y
            };
            n.html5 = r;
            c(t)
        }(this, t), u._version = "2.8.3", u._prefixes = p, u._domPrefixes = ht, u._cssomPrefixes = st, u.mq = pt, u.hasEvent = lt, u.testProp = function(n) {
            return ut([n])
        }, u.testAllProps = f, u.testStyles = a, u.prefixed = function(n, t, i) {
            return t ? f(n, t, i) : f(n, "pfx")
        }, s.className = s.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (g ? " js " + tt.join(" ") : ""), u
}(this, this.document);
! function(n, t, i, r) {
    function u(t, i) {
        this.settings = null;
        this.options = n.extend({}, u.Defaults, i);
        this.$element = n(t);
        this._handlers = {};
        this._plugins = {};
        this._supress = {};
        this._current = null;
        this._speed = null;
        this._coordinates = [];
        this._breakpoint = null;
        this._width = null;
        this._items = [];
        this._clones = [];
        this._mergers = [];
        this._widths = [];
        this._invalidated = {};
        this._pipe = [];
        this._drag = {
            time: null,
            target: null,
            pointer: null,
            stage: {
                start: null,
                current: null
            },
            direction: null
        };
        this._states = {
            current: {},
            tags: {
                initializing: ["busy"],
                animating: ["busy"],
                dragging: ["interacting"]
            }
        };
        n.each(["onResize", "onThrottledResize"], n.proxy(function(t, i) {
            this._handlers[i] = n.proxy(this[i], this)
        }, this));
        n.each(u.Plugins, n.proxy(function(n, t) {
            this._plugins[n.charAt(0).toLowerCase() + n.slice(1)] = new t(this)
        }, this));
        n.each(u.Workers, n.proxy(function(t, i) {
            this._pipe.push({
                filter: i.filter,
                run: n.proxy(i.run, this)
            })
        }, this));
        this.setup();
        this.initialize()
    }
    u.Defaults = {
        items: 3,
        loop: !1,
        center: !1,
        rewind: !1,
        checkVisibility: !0,
        mouseDrag: !0,
        touchDrag: !0,
        pullDrag: !0,
        freeDrag: !1,
        margin: 0,
        stagePadding: 0,
        merge: !1,
        mergeFit: !0,
        autoWidth: !1,
        startPosition: 0,
        rtl: !1,
        smartSpeed: 250,
        fluidSpeed: !1,
        dragEndSpeed: !1,
        responsive: {},
        responsiveRefreshRate: 200,
        responsiveBaseElement: t,
        fallbackEasing: "swing",
        slideTransition: "",
        info: !1,
        nestedItemSelector: !1,
        itemElement: "div",
        stageElement: "div",
        refreshClass: "owl-refresh",
        loadedClass: "owl-loaded",
        loadingClass: "owl-loading",
        rtlClass: "owl-rtl",
        responsiveClass: "owl-responsive",
        dragClass: "owl-drag",
        itemClass: "owl-item",
        stageClass: "owl-stage",
        stageOuterClass: "owl-stage-outer",
        grabClass: "owl-grab"
    };
    u.Width = {
        Default: "default",
        Inner: "inner",
        Outer: "outer"
    };
    u.Type = {
        Event: "event",
        State: "state"
    };
    u.Plugins = {};
    u.Workers = [{
        filter: ["width", "settings"],
        run: function() {
            this._width = this.$element.width()
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(n) {
            n.current = this._items && this._items[this.relative(this._current)]
        }
    }, {
        filter: ["items", "settings"],
        run: function() {
            this.$stage.children(".cloned").remove()
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(n) {
            var t = this.settings.margin || "",
                u = !this.settings.autoWidth,
                i = this.settings.rtl,
                r = {
                    width: "auto",
                    "margin-left": i ? t : "",
                    "margin-right": i ? "" : t
                };
            u || this.$stage.children().css(r);
            n.css = r
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(n) {
            var r = (this.width() / this.settings.items).toFixed(3) - this.settings.margin,
                t = null,
                i = this._items.length,
                f = !this.settings.autoWidth,
                u = [];
            for (n.items = {
                    merge: !1,
                    width: r
                }; i--;) t = this._mergers[i], t = this.settings.mergeFit && Math.min(t, this.settings.items) || t, n.items.merge = t > 1 || n.items.merge, u[i] = f ? r * t : this._items[i].width();
            this._widths = u
        }
    }, {
        filter: ["items", "settings"],
        run: function() {
            var t = [],
                i = this._items,
                r = this.settings,
                e = Math.max(2 * r.items, 4),
                s = 2 * Math.ceil(i.length / 2),
                u = r.loop && i.length ? r.rewind ? e : Math.max(e, s) : 0,
                o = "",
                f = "";
            for (u /= 2; u > 0;) t.push(this.normalize(t.length / 2, !0)), o += i[t[t.length - 1]][0].outerHTML, t.push(this.normalize(i.length - 1 - (t.length - 1) / 2, !0)), f = i[t[t.length - 1]][0].outerHTML + f, u -= 1;
            this._clones = t;
            n(o).addClass("cloned").appendTo(this.$stage);
            n(f).addClass("cloned").prependTo(this.$stage)
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function() {
            for (var u = this.settings.rtl ? 1 : -1, f = this._clones.length + this._items.length, n = -1, i = 0, r = 0, t = []; ++n < f;) i = t[n - 1] || 0, r = this._widths[this.relative(n)] + this.settings.margin, t.push(i + r * u);
            this._coordinates = t
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function() {
            var n = this.settings.stagePadding,
                t = this._coordinates,
                i = {
                    width: Math.ceil(Math.abs(t[t.length - 1])) + 2 * n,
                    "padding-left": n || "",
                    "padding-right": n || ""
                };
            this.$stage.css(i)
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(n) {
            var t = this._coordinates.length,
                i = !this.settings.autoWidth,
                r = this.$stage.children();
            if (i && n.items.merge)
                for (; t--;) n.css.width = this._widths[this.relative(t)], r.eq(t).css(n.css);
            else i && (n.css.width = n.items.width, r.css(n.css))
        }
    }, {
        filter: ["items"],
        run: function() {
            this._coordinates.length < 1 && this.$stage.removeAttr("style")
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(n) {
            n.current = n.current ? this.$stage.children().index(n.current) : 0;
            n.current = Math.max(this.minimum(), Math.min(this.maximum(), n.current));
            this.reset(n.current)
        }
    }, {
        filter: ["position"],
        run: function() {
            this.animate(this.coordinates(this._current))
        }
    }, {
        filter: ["width", "position", "items", "settings"],
        run: function() {
            for (var t, i, f = this.settings.rtl ? 1 : -1, e = 2 * this.settings.stagePadding, r = this.coordinates(this.current()) + e, o = r + this.width() * f, s = [], n = 0, u = this._coordinates.length; n < u; n++) t = this._coordinates[n - 1] || 0, i = Math.abs(this._coordinates[n]) + e * f, (this.op(t, "<=", r) && this.op(t, ">", o) || this.op(i, "<", r) && this.op(i, ">", o)) && s.push(n);
            this.$stage.children(".active").removeClass("active");
            this.$stage.children(":eq(" + s.join("), :eq(") + ")").addClass("active");
            this.$stage.children(".center").removeClass("center");
            this.settings.center && this.$stage.children().eq(this.current()).addClass("center")
        }
    }];
    u.prototype.initializeStage = function() {
        this.$stage = this.$element.find("." + this.settings.stageClass);
        this.$stage.length || (this.$element.addClass(this.options.loadingClass), this.$stage = n("<" + this.settings.stageElement + ">", {
            "class": this.settings.stageClass
        }).wrap(n("<div/>", {
            "class": this.settings.stageOuterClass
        })), this.$element.append(this.$stage.parent()))
    };
    u.prototype.initializeItems = function() {
        var t = this.$element.find(".owl-item");
        if (t.length) return this._items = t.get().map(function(t) {
            return n(t)
        }), this._mergers = this._items.map(function() {
            return 1
        }), void this.refresh();
        this.replace(this.$element.children().not(this.$stage.parent()));
        this.isVisible() ? this.refresh() : this.invalidate("width");
        this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass)
    };
    u.prototype.initialize = function() {
        if (this.enter("initializing"), this.trigger("initialize"), this.$element.toggleClass(this.settings.rtlClass, this.settings.rtl), this.settings.autoWidth && !this.is("pre-loading")) {
            var n, t, i;
            n = this.$element.find("img");
            t = this.settings.nestedItemSelector ? "." + this.settings.nestedItemSelector : r;
            i = this.$element.children(t).width();
            n.length && i <= 0 && this.preloadAutoWidthImages(n)
        }
        this.initializeStage();
        this.initializeItems();
        this.registerEventHandlers();
        this.leave("initializing");
        this.trigger("initialized")
    };
    u.prototype.isVisible = function() {
        return !this.settings.checkVisibility || this.$element.is(":visible")
    };
    u.prototype.setup = function() {
        var u = this.viewport(),
            r = this.options.responsive,
            i = -1,
            t = null;
        r ? (n.each(r, function(n) {
            n <= u && n > i && (i = Number(n))
        }), t = n.extend({}, this.options, r[i]), "function" == typeof t.stagePadding && (t.stagePadding = t.stagePadding()), delete t.responsive, t.responsiveClass && this.$element.attr("class", this.$element.attr("class").replace(new RegExp("(" + this.options.responsiveClass + "-)\\S+\\s", "g"), "$1" + i))) : t = n.extend({}, this.options);
        this.trigger("change", {
            property: {
                name: "settings",
                value: t
            }
        });
        this._breakpoint = i;
        this.settings = t;
        this.invalidate("settings");
        this.trigger("changed", {
            property: {
                name: "settings",
                value: this.settings
            }
        })
    };
    u.prototype.optionsLogic = function() {
        this.settings.autoWidth && (this.settings.stagePadding = !1, this.settings.merge = !1)
    };
    u.prototype.prepare = function(t) {
        var i = this.trigger("prepare", {
            content: t
        });
        return i.data || (i.data = n("<" + this.settings.itemElement + "/>").addClass(this.options.itemClass).append(t)), this.trigger("prepared", {
            content: i.data
        }), i.data
    };
    u.prototype.update = function() {
        for (var t = 0, i = this._pipe.length, r = n.proxy(function(n) {
                return this[n]
            }, this._invalidated), u = {}; t < i;)(this._invalidated.all || n.grep(this._pipe[t].filter, r).length > 0) && this._pipe[t].run(u), t++;
        this._invalidated = {};
        this.is("valid") || this.enter("valid")
    };
    u.prototype.width = function(n) {
        switch (n = n || u.Width.Default) {
            case u.Width.Inner:
            case u.Width.Outer:
                return this._width;
            default:
                return this._width - 2 * this.settings.stagePadding + this.settings.margin
        }
    };
    u.prototype.refresh = function() {
        this.enter("refreshing");
        this.trigger("refresh");
        this.setup();
        this.optionsLogic();
        this.$element.addClass(this.options.refreshClass);
        this.update();
        this.$element.removeClass(this.options.refreshClass);
        this.leave("refreshing");
        this.trigger("refreshed")
    };
    u.prototype.onThrottledResize = function() {
        t.clearTimeout(this.resizeTimer);
        this.resizeTimer = t.setTimeout(this._handlers.onResize, this.settings.responsiveRefreshRate)
    };
    u.prototype.onResize = function() {
        return !!this._items.length && this._width !== this.$element.width() && !!this.isVisible() && (this.enter("resizing"), this.trigger("resize").isDefaultPrevented() ? (this.leave("resizing"), !1) : (this.invalidate("width"), this.refresh(), this.leave("resizing"), void this.trigger("resized")))
    };
    u.prototype.registerEventHandlers = function() {
        n.support.transition && this.$stage.on(n.support.transition.end + ".owl.core", n.proxy(this.onTransitionEnd, this));
        !1 !== this.settings.responsive && this.on(t, "resize", this._handlers.onThrottledResize);
        this.settings.mouseDrag && (this.$element.addClass(this.options.dragClass), this.$stage.on("mousedown.owl.core", n.proxy(this.onDragStart, this)), this.$stage.on("dragstart.owl.core selectstart.owl.core", function() {
            return !1
        }));
        this.settings.touchDrag && (this.$stage.on("touchstart.owl.core", n.proxy(this.onDragStart, this)), this.$stage.on("touchcancel.owl.core", n.proxy(this.onDragEnd, this)))
    };
    u.prototype.onDragStart = function(t) {
        var r = null;
        3 !== t.which && (n.support.transform ? (r = this.$stage.css("transform").replace(/.*\(|\)| /g, "").split(","), r = {
            x: r[16 === r.length ? 12 : 4],
            y: r[16 === r.length ? 13 : 5]
        }) : (r = this.$stage.position(), r = {
            x: this.settings.rtl ? r.left + this.$stage.width() - this.width() + this.settings.margin : r.left,
            y: r.top
        }), this.is("animating") && (n.support.transform ? this.animate(r.x) : this.$stage.stop(), this.invalidate("position")), this.$element.toggleClass(this.options.grabClass, "mousedown" === t.type), this.speed(0), this._drag.time = (new Date).getTime(), this._drag.target = n(t.target), this._drag.stage.start = r, this._drag.stage.current = r, this._drag.pointer = this.pointer(t), n(i).on("mouseup.owl.core touchend.owl.core", n.proxy(this.onDragEnd, this)), n(i).one("mousemove.owl.core touchmove.owl.core", n.proxy(function(t) {
            var r = this.difference(this._drag.pointer, this.pointer(t));
            n(i).on("mousemove.owl.core touchmove.owl.core", n.proxy(this.onDragMove, this));
            Math.abs(r.x) < Math.abs(r.y) && this.is("valid") || (t.preventDefault(), this.enter("dragging"), this.trigger("drag"))
        }, this)))
    };
    u.prototype.onDragMove = function(n) {
        var t = null,
            i = null,
            u = null,
            f = this.difference(this._drag.pointer, this.pointer(n)),
            r = this.difference(this._drag.stage.start, f);
        this.is("dragging") && (n.preventDefault(), this.settings.loop ? (t = this.coordinates(this.minimum()), i = this.coordinates(this.maximum() + 1) - t, r.x = ((r.x - t) % i + i) % i + t) : (t = this.settings.rtl ? this.coordinates(this.maximum()) : this.coordinates(this.minimum()), i = this.settings.rtl ? this.coordinates(this.minimum()) : this.coordinates(this.maximum()), u = this.settings.pullDrag ? f.x / -5 : 0, r.x = Math.max(Math.min(r.x, t + u), i + u)), this._drag.stage.current = r, this.animate(r.x))
    };
    u.prototype.onDragEnd = function(t) {
        var r = this.difference(this._drag.pointer, this.pointer(t)),
            f = this._drag.stage.current,
            u = r.x > 0 ^ this.settings.rtl ? "left" : "right";
        n(i).off(".owl.core");
        this.$element.removeClass(this.options.grabClass);
        (0 !== r.x && this.is("dragging") || !this.is("valid")) && (this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed), this.current(this.closest(f.x, 0 !== r.x ? u : this._drag.direction)), this.invalidate("position"), this.update(), this._drag.direction = u, (Math.abs(r.x) > 3 || (new Date).getTime() - this._drag.time > 300) && this._drag.target.one("click.owl.core", function() {
            return !1
        }));
        this.is("dragging") && (this.leave("dragging"), this.trigger("dragged"))
    };
    u.prototype.closest = function(t, i) {
        var u = -1,
            e = 30,
            o = this.width(),
            f = this.coordinates();
        return this.settings.freeDrag || n.each(f, n.proxy(function(n, s) {
            return "left" === i && t > s - e && t < s + e ? u = n : "right" === i && t > s - o - e && t < s - o + e ? u = n + 1 : this.op(t, "<", s) && this.op(t, ">", f[n + 1] !== r ? f[n + 1] : s - o) && (u = "left" === i ? n + 1 : n), -1 === u
        }, this)), this.settings.loop || (this.op(t, ">", f[this.minimum()]) ? u = t = this.minimum() : this.op(t, "<", f[this.maximum()]) && (u = t = this.maximum())), u
    };
    u.prototype.animate = function(t) {
        var i = this.speed() > 0;
        this.is("animating") && this.onTransitionEnd();
        i && (this.enter("animating"), this.trigger("translate"));
        n.support.transform3d && n.support.transition ? this.$stage.css({
            transform: "translate3d(" + t + "px,0px,0px)",
            transition: this.speed() / 1e3 + "s" + (this.settings.slideTransition ? " " + this.settings.slideTransition : "")
        }) : i ? this.$stage.animate({
            left: t + "px"
        }, this.speed(), this.settings.fallbackEasing, n.proxy(this.onTransitionEnd, this)) : this.$stage.css({
            left: t + "px"
        })
    };
    u.prototype.is = function(n) {
        return this._states.current[n] && this._states.current[n] > 0
    };
    u.prototype.current = function(n) {
        if (n === r) return this._current;
        if (0 === this._items.length) return r;
        if (n = this.normalize(n), this._current !== n) {
            var t = this.trigger("change", {
                property: {
                    name: "position",
                    value: n
                }
            });
            t.data !== r && (n = this.normalize(t.data));
            this._current = n;
            this.invalidate("position");
            this.trigger("changed", {
                property: {
                    name: "position",
                    value: this._current
                }
            })
        }
        return this._current
    };
    u.prototype.invalidate = function(t) {
        return "string" === n.type(t) && (this._invalidated[t] = !0, this.is("valid") && this.leave("valid")), n.map(this._invalidated, function(n, t) {
            return t
        })
    };
    u.prototype.reset = function(n) {
        (n = this.normalize(n)) !== r && (this._speed = 0, this._current = n, this.suppress(["translate", "translated"]), this.animate(this.coordinates(n)), this.release(["translate", "translated"]))
    };
    u.prototype.normalize = function(n, t) {
        var i = this._items.length,
            u = t ? 0 : this._clones.length;
        return !this.isNumeric(n) || i < 1 ? n = r : (n < 0 || n >= i + u) && (n = ((n - u / 2) % i + i) % i + u / 2), n
    };
    u.prototype.relative = function(n) {
        return n -= this._clones.length / 2, this.normalize(n, !0)
    };
    u.prototype.maximum = function(n) {
        var t, u, f, i = this.settings,
            r = this._coordinates.length;
        if (i.loop) r = this._clones.length / 2 + this._items.length - 1;
        else if (i.autoWidth || i.merge) {
            if (t = this._items.length)
                for (u = this._items[--t].width(), f = this.$element.width(); t-- && !((u += this._items[t].width() + this.settings.margin) > f););
            r = t + 1
        } else r = i.center ? this._items.length - 1 : this._items.length - i.items;
        return n && (r -= this._clones.length / 2), Math.max(r, 0)
    };
    u.prototype.minimum = function(n) {
        return n ? 0 : this._clones.length / 2
    };
    u.prototype.items = function(n) {
        return n === r ? this._items.slice() : (n = this.normalize(n, !0), this._items[n])
    };
    u.prototype.mergers = function(n) {
        return n === r ? this._mergers.slice() : (n = this.normalize(n, !0), this._mergers[n])
    };
    u.prototype.clones = function(t) {
        var i = this._clones.length / 2,
            f = i + this._items.length,
            u = function(n) {
                return n % 2 == 0 ? f + n / 2 : i - (n + 1) / 2
            };
        return t === r ? n.map(this._clones, function(n, t) {
            return u(t)
        }) : n.map(this._clones, function(n, i) {
            return n === t ? u(i) : null
        })
    };
    u.prototype.speed = function(n) {
        return n !== r && (this._speed = n), this._speed
    };
    u.prototype.coordinates = function(t) {
        var i, f = 1,
            u = t - 1;
        return t === r ? n.map(this._coordinates, n.proxy(function(n, t) {
            return this.coordinates(t)
        }, this)) : (this.settings.center ? (this.settings.rtl && (f = -1, u = t + 1), i = this._coordinates[t], i += (this.width() - i + (this._coordinates[u] || 0)) / 2 * f) : i = this._coordinates[u] || 0, i = Math.ceil(i))
    };
    u.prototype.duration = function(n, t, i) {
        return 0 === i ? 0 : Math.min(Math.max(Math.abs(t - n), 1), 6) * Math.abs(i || this.settings.smartSpeed)
    };
    u.prototype.to = function(n, t) {
        var u = this.current(),
            f = null,
            i = n - this.relative(u),
            s = (i > 0) - (i < 0),
            e = this._items.length,
            o = this.minimum(),
            r = this.maximum();
        this.settings.loop ? (!this.settings.rewind && Math.abs(i) > e / 2 && (i += -1 * s * e), n = u + i, (f = ((n - o) % e + e) % e + o) !== n && f - i <= r && f - i > 0 && (u = f - i, n = f, this.reset(u))) : this.settings.rewind ? (r += 1, n = (n % r + r) % r) : n = Math.max(o, Math.min(r, n));
        this.speed(this.duration(u, n, t));
        this.current(n);
        this.isVisible() && this.update()
    };
    u.prototype.next = function(n) {
        n = n || !1;
        this.to(this.relative(this.current()) + 1, n)
    };
    u.prototype.prev = function(n) {
        n = n || !1;
        this.to(this.relative(this.current()) - 1, n)
    };
    u.prototype.onTransitionEnd = function(n) {
        if (n !== r && (n.stopPropagation(), (n.target || n.srcElement || n.originalTarget) !== this.$stage.get(0))) return !1;
        this.leave("animating");
        this.trigger("translated")
    };
    u.prototype.viewport = function() {
        var r;
        return this.options.responsiveBaseElement !== t ? r = n(this.options.responsiveBaseElement).width() : t.innerWidth ? r = t.innerWidth : i.documentElement && i.documentElement.clientWidth ? r = i.documentElement.clientWidth : console.warn("Can not detect viewport width."), r
    };
    u.prototype.replace = function(t) {
        this.$stage.empty();
        this._items = [];
        t && (t = t instanceof jQuery ? t : n(t));
        this.settings.nestedItemSelector && (t = t.find("." + this.settings.nestedItemSelector));
        t.filter(function() {
            return 1 === this.nodeType
        }).each(n.proxy(function(n, t) {
            t = this.prepare(t);
            this.$stage.append(t);
            this._items.push(t);
            this._mergers.push(1 * t.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)
        }, this));
        this.reset(this.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0);
        this.invalidate("items")
    };
    u.prototype.add = function(t, i) {
        var u = this.relative(this._current);
        i = i === r ? this._items.length : this.normalize(i, !0);
        t = t instanceof jQuery ? t : n(t);
        this.trigger("add", {
            content: t,
            position: i
        });
        t = this.prepare(t);
        0 === this._items.length || i === this._items.length ? (0 === this._items.length && this.$stage.append(t), 0 !== this._items.length && this._items[i - 1].after(t), this._items.push(t), this._mergers.push(1 * t.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)) : (this._items[i].before(t), this._items.splice(i, 0, t), this._mergers.splice(i, 0, 1 * t.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1));
        this._items[u] && this.reset(this._items[u].index());
        this.invalidate("items");
        this.trigger("added", {
            content: t,
            position: i
        })
    };
    u.prototype.remove = function(n) {
        (n = this.normalize(n, !0)) !== r && (this.trigger("remove", {
            content: this._items[n],
            position: n
        }), this._items[n].remove(), this._items.splice(n, 1), this._mergers.splice(n, 1), this.invalidate("items"), this.trigger("removed", {
            content: null,
            position: n
        }))
    };
    u.prototype.preloadAutoWidthImages = function(t) {
        t.each(n.proxy(function(t, i) {
            this.enter("pre-loading");
            i = n(i);
            n(new Image).one("load", n.proxy(function(n) {
                i.attr("src", n.target.src);
                i.css("opacity", 1);
                this.leave("pre-loading");
                !this.is("pre-loading") && !this.is("initializing") && this.refresh()
            }, this)).attr("src", i.attr("src") || i.attr("data-src") || i.attr("data-src-retina"))
        }, this))
    };
    u.prototype.destroy = function() {
        this.$element.off(".owl.core");
        this.$stage.off(".owl.core");
        n(i).off(".owl.core");
        !1 !== this.settings.responsive && (t.clearTimeout(this.resizeTimer), this.off(t, "resize", this._handlers.onThrottledResize));
        for (var r in this._plugins) this._plugins[r].destroy();
        this.$stage.children(".cloned").remove();
        this.$stage.unwrap();
        this.$stage.children().contents().unwrap();
        this.$stage.children().unwrap();
        this.$stage.remove();
        this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class", this.$element.attr("class").replace(new RegExp(this.options.responsiveClass + "-\\S+\\s", "g"), "")).removeData("owl.carousel")
    };
    u.prototype.op = function(n, t, i) {
        var r = this.settings.rtl;
        switch (t) {
            case "<":
                return r ? n > i : n < i;
            case ">":
                return r ? n < i : n > i;
            case ">=":
                return r ? n <= i : n >= i;
            case "<=":
                return r ? n >= i : n <= i
        }
    };
    u.prototype.on = function(n, t, i, r) {
        n.addEventListener ? n.addEventListener(t, i, r) : n.attachEvent && n.attachEvent("on" + t, i)
    };
    u.prototype.off = function(n, t, i, r) {
        n.removeEventListener ? n.removeEventListener(t, i, r) : n.detachEvent && n.detachEvent("on" + t, i)
    };
    u.prototype.trigger = function(t, i, r) {
        var o = {
                item: {
                    count: this._items.length,
                    index: this.current()
                }
            },
            e = n.camelCase(n.grep(["on", t, r], function(n) {
                return n
            }).join("-").toLowerCase()),
            f = n.Event([t, "owl", r || "carousel"].join(".").toLowerCase(), n.extend({
                relatedTarget: this
            }, o, i));
        return this._supress[t] || (n.each(this._plugins, function(n, t) {
            t.onTrigger && t.onTrigger(f)
        }), this.register({
            type: u.Type.Event,
            name: t
        }), this.$element.trigger(f), this.settings && "function" == typeof this.settings[e] && this.settings[e].call(this, f)), f
    };
    u.prototype.enter = function(t) {
        n.each([t].concat(this._states.tags[t] || []), n.proxy(function(n, t) {
            this._states.current[t] === r && (this._states.current[t] = 0);
            this._states.current[t]++
        }, this))
    };
    u.prototype.leave = function(t) {
        n.each([t].concat(this._states.tags[t] || []), n.proxy(function(n, t) {
            this._states.current[t]--
        }, this))
    };
    u.prototype.register = function(t) {
        if (t.type === u.Type.Event) {
            if (n.event.special[t.name] || (n.event.special[t.name] = {}), !n.event.special[t.name].owl) {
                var i = n.event.special[t.name]._default;
                n.event.special[t.name]._default = function(n) {
                    return !i || !i.apply || n.namespace && -1 !== n.namespace.indexOf("owl") ? n.namespace && n.namespace.indexOf("owl") > -1 : i.apply(this, arguments)
                };
                n.event.special[t.name].owl = !0
            }
        } else t.type === u.Type.State && (this._states.tags[t.name] = this._states.tags[t.name] ? this._states.tags[t.name].concat(t.tags) : t.tags, this._states.tags[t.name] = n.grep(this._states.tags[t.name], n.proxy(function(i, r) {
            return n.inArray(i, this._states.tags[t.name]) === r
        }, this)))
    };
    u.prototype.suppress = function(t) {
        n.each(t, n.proxy(function(n, t) {
            this._supress[t] = !0
        }, this))
    };
    u.prototype.release = function(t) {
        n.each(t, n.proxy(function(n, t) {
            delete this._supress[t]
        }, this))
    };
    u.prototype.pointer = function(n) {
        var i = {
            x: null,
            y: null
        };
        return n = n.originalEvent || n || t.event, n = n.touches && n.touches.length ? n.touches[0] : n.changedTouches && n.changedTouches.length ? n.changedTouches[0] : n, n.pageX ? (i.x = n.pageX, i.y = n.pageY) : (i.x = n.clientX, i.y = n.clientY), i
    };
    u.prototype.isNumeric = function(n) {
        return !isNaN(parseFloat(n))
    };
    u.prototype.difference = function(n, t) {
        return {
            x: n.x - t.x,
            y: n.y - t.y
        }
    };
    n.fn.owlCarousel = function(t) {
        var i = Array.prototype.slice.call(arguments, 1);
        return this.each(function() {
            var f = n(this),
                r = f.data("owl.carousel");
            r || (r = new u(this, "object" == typeof t && t), f.data("owl.carousel", r), n.each(["next", "prev", "to", "destroy", "refresh", "replace", "add", "remove"], function(t, i) {
                r.register({
                    type: u.Type.Event,
                    name: i
                });
                r.$element.on(i + ".owl.carousel.core", n.proxy(function(n) {
                    n.namespace && n.relatedTarget !== this && (this.suppress([i]), r[i].apply(this, [].slice.call(arguments, 1)), this.release([i]))
                }, r))
            }));
            "string" == typeof t && "_" !== t.charAt(0) && r[t].apply(r, i)
        })
    };
    n.fn.owlCarousel.Constructor = u
}(window.Zepto || window.jQuery, window, document),
function(n, t) {
    var i = function(t) {
        this._core = t;
        this._interval = null;
        this._visible = null;
        this._handlers = {
            "initialized.owl.carousel": n.proxy(function(n) {
                n.namespace && this._core.settings.autoRefresh && this.watch()
            }, this)
        };
        this._core.options = n.extend({}, i.Defaults, this._core.options);
        this._core.$element.on(this._handlers)
    };
    i.Defaults = {
        autoRefresh: !0,
        autoRefreshInterval: 500
    };
    i.prototype.watch = function() {
        this._interval || (this._visible = this._core.isVisible(), this._interval = t.setInterval(n.proxy(this.refresh, this), this._core.settings.autoRefreshInterval))
    };
    i.prototype.refresh = function() {
        this._core.isVisible() !== this._visible && (this._visible = !this._visible, this._core.$element.toggleClass("owl-hidden", !this._visible), this._visible && this._core.invalidate("width") && this._core.refresh())
    };
    i.prototype.destroy = function() {
        var n, i;
        t.clearInterval(this._interval);
        for (n in this._handlers) this._core.$element.off(n, this._handlers[n]);
        for (i in Object.getOwnPropertyNames(this)) "function" != typeof this[i] && (this[i] = null)
    };
    n.fn.owlCarousel.Constructor.Plugins.AutoRefresh = i
}(window.Zepto || window.jQuery, window, document),
function(n, t, i, r) {
    var u = function(t) {
        this._core = t;
        this._loaded = [];
        this._handlers = {
            "initialized.owl.carousel change.owl.carousel resized.owl.carousel": n.proxy(function(t) {
                if (t.namespace && this._core.settings && this._core.settings.lazyLoad && (t.property && "position" == t.property.name || "initialized" == t.type)) {
                    var i = this._core.settings,
                        u = i.center && Math.ceil(i.items / 2) || i.items,
                        e = i.center && -1 * u || 0,
                        f = (t.property && t.property.value !== r ? t.property.value : this._core.current()) + e,
                        o = this._core.clones().length,
                        s = n.proxy(function(n, t) {
                            this.load(t)
                        }, this);
                    for (i.lazyLoadEager > 0 && (u += i.lazyLoadEager, i.loop && (f -= i.lazyLoadEager, u++)); e++ < u;) this.load(o / 2 + this._core.relative(f)), o && n.each(this._core.clones(this._core.relative(f)), s), f++
                }
            }, this)
        };
        this._core.options = n.extend({}, u.Defaults, this._core.options);
        this._core.$element.on(this._handlers)
    };
    u.Defaults = {
        lazyLoad: !1,
        lazyLoadEager: 0
    };
    u.prototype.load = function(i) {
        var r = this._core.$stage.children().eq(i),
            u = r && r.find(".owl-lazy");
        !u || n.inArray(r.get(0), this._loaded) > -1 || (u.each(n.proxy(function(i, r) {
            var e, u = n(r),
                f = t.devicePixelRatio > 1 && u.attr("data-src-retina") || u.attr("data-src") || u.attr("data-srcset");
            this._core.trigger("load", {
                element: u,
                url: f
            }, "lazy");
            u.is("img") ? u.one("load.owl.lazy", n.proxy(function() {
                u.css("opacity", 1);
                this._core.trigger("loaded", {
                    element: u,
                    url: f
                }, "lazy")
            }, this)).attr("src", f) : u.is("source") ? u.one("load.owl.lazy", n.proxy(function() {
                this._core.trigger("loaded", {
                    element: u,
                    url: f
                }, "lazy")
            }, this)).attr("srcset", f) : (e = new Image, e.onload = n.proxy(function() {
                u.css({
                    "background-image": 'url("' + f + '")',
                    opacity: "1"
                });
                this._core.trigger("loaded", {
                    element: u,
                    url: f
                }, "lazy")
            }, this), e.src = f)
        }, this)), this._loaded.push(r.get(0)))
    };
    u.prototype.destroy = function() {
        var n, t;
        for (n in this.handlers) this._core.$element.off(n, this.handlers[n]);
        for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
    };
    n.fn.owlCarousel.Constructor.Plugins.Lazy = u
}(window.Zepto || window.jQuery, window, document),
function(n, t) {
    var i = function(r) {
        this._core = r;
        this._previousHeight = null;
        this._handlers = {
            "initialized.owl.carousel refreshed.owl.carousel": n.proxy(function(n) {
                n.namespace && this._core.settings.autoHeight && this.update()
            }, this),
            "changed.owl.carousel": n.proxy(function(n) {
                n.namespace && this._core.settings.autoHeight && "position" === n.property.name && this.update()
            }, this),
            "loaded.owl.lazy": n.proxy(function(n) {
                n.namespace && this._core.settings.autoHeight && n.element.closest("." + this._core.settings.itemClass).index() === this._core.current() && this.update()
            }, this)
        };
        this._core.options = n.extend({}, i.Defaults, this._core.options);
        this._core.$element.on(this._handlers);
        this._intervalId = null;
        var u = this;
        n(t).on("load", function() {
            u._core.settings.autoHeight && u.update()
        });
        n(t).resize(function() {
            u._core.settings.autoHeight && (null != u._intervalId && clearTimeout(u._intervalId), u._intervalId = setTimeout(function() {
                u.update()
            }, 250))
        })
    };
    i.Defaults = {
        autoHeight: !1,
        autoHeightClass: "owl-height"
    };
    i.prototype.update = function() {
        var i = this._core._current,
            u = i + this._core.settings.items,
            f = this._core.settings.lazyLoad,
            e = this._core.$stage.children().toArray().slice(i, u),
            r = [],
            t = 0;
        n.each(e, function(t, i) {
            r.push(n(i).height())
        });
        t = Math.max.apply(null, r);
        t <= 1 && f && this._previousHeight && (t = this._previousHeight);
        this._previousHeight = t;
        this._core.$stage.parent().height(t).addClass(this._core.settings.autoHeightClass)
    };
    i.prototype.destroy = function() {
        var n, t;
        for (n in this._handlers) this._core.$element.off(n, this._handlers[n]);
        for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
    };
    n.fn.owlCarousel.Constructor.Plugins.AutoHeight = i
}(window.Zepto || window.jQuery, window, document),
function(n, t, i) {
    var r = function(t) {
        this._core = t;
        this._videos = {};
        this._playing = null;
        this._handlers = {
            "initialized.owl.carousel": n.proxy(function(n) {
                n.namespace && this._core.register({
                    type: "state",
                    name: "playing",
                    tags: ["interacting"]
                })
            }, this),
            "resize.owl.carousel": n.proxy(function(n) {
                n.namespace && this._core.settings.video && this.isInFullScreen() && n.preventDefault()
            }, this),
            "refreshed.owl.carousel": n.proxy(function(n) {
                n.namespace && this._core.is("resizing") && this._core.$stage.find(".cloned .owl-video-frame").remove()
            }, this),
            "changed.owl.carousel": n.proxy(function(n) {
                n.namespace && "position" === n.property.name && this._playing && this.stop()
            }, this),
            "prepared.owl.carousel": n.proxy(function(t) {
                if (t.namespace) {
                    var i = n(t.content).find(".owl-video");
                    i.length && (i.css("display", "none"), this.fetch(i, n(t.content)))
                }
            }, this)
        };
        this._core.options = n.extend({}, r.Defaults, this._core.options);
        this._core.$element.on(this._handlers);
        this._core.$element.on("click.owl.video", ".owl-video-play-icon", n.proxy(function(n) {
            this.play(n)
        }, this))
    };
    r.Defaults = {
        video: !1,
        videoHeight: !1,
        videoWidth: !1
    };
    r.prototype.fetch = function(n, t) {
        var u = function() {
                return n.attr("data-vimeo-id") ? "vimeo" : n.attr("data-vzaar-id") ? "vzaar" : "youtube"
            }(),
            i = n.attr("data-vimeo-id") || n.attr("data-youtube-id") || n.attr("data-vzaar-id"),
            f = n.attr("data-width") || this._core.settings.videoWidth,
            e = n.attr("data-height") || this._core.settings.videoHeight,
            r = n.attr("href");
        if (!r) throw new Error("Missing video URL.");
        if (i = r.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com|be\-nocookie\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/), i[3].indexOf("youtu") > -1) u = "youtube";
        else if (i[3].indexOf("vimeo") > -1) u = "vimeo";
        else {
            if (!(i[3].indexOf("vzaar") > -1)) throw new Error("Video URL not supported.");
            u = "vzaar"
        }
        i = i[6];
        this._videos[r] = {
            type: u,
            id: i,
            width: f,
            height: e
        };
        t.attr("data-video", r);
        this.thumbnail(n, this._videos[r])
    };
    r.prototype.thumbnail = function(t, i) {
        var e, o, r, c = i.width && i.height ? "width:" + i.width + "px;height:" + i.height + "px;" : "",
            f = t.find("img"),
            s = "src",
            h = "",
            l = this._core.settings,
            u = function(i) {
                o = '<div class="owl-video-play-icon"><\/div>';
                e = l.lazyLoad ? n("<div/>", {
                    "class": "owl-video-tn " + h,
                    srcType: i
                }) : n("<div/>", {
                    "class": "owl-video-tn",
                    style: "opacity:1;background-image:url(" + i + ")"
                });
                t.after(e);
                t.after(o)
            };
        if (t.wrap(n("<div/>", {
                "class": "owl-video-wrapper",
                style: c
            })), this._core.settings.lazyLoad && (s = "data-src", h = "owl-lazy"), f.length) return u(f.attr(s)), f.remove(), !1;
        "youtube" === i.type ? (r = "//img.youtube.com/vi/" + i.id + "/hqdefault.jpg", u(r)) : "vimeo" === i.type ? n.ajax({
            type: "GET",
            url: "//vimeo.com/api/v2/video/" + i.id + ".json",
            jsonp: "callback",
            dataType: "jsonp",
            success: function(n) {
                r = n[0].thumbnail_large;
                u(r)
            }
        }) : "vzaar" === i.type && n.ajax({
            type: "GET",
            url: "//vzaar.com/api/videos/" + i.id + ".json",
            jsonp: "callback",
            dataType: "jsonp",
            success: function(n) {
                r = n.framegrab_url;
                u(r)
            }
        })
    };
    r.prototype.stop = function() {
        this._core.trigger("stop", null, "video");
        this._playing.find(".owl-video-frame").remove();
        this._playing.removeClass("owl-video-playing");
        this._playing = null;
        this._core.leave("playing");
        this._core.trigger("stopped", null, "video")
    };
    r.prototype.play = function(t) {
        var r, f = n(t.target),
            u = f.closest("." + this._core.settings.itemClass),
            i = this._videos[u.attr("data-video")],
            e = i.width || "100%",
            o = i.height || this._core.$stage.height();
        this._playing || (this._core.enter("playing"), this._core.trigger("play", null, "video"), u = this._core.items(this._core.relative(u.index())), this._core.reset(u.index()), r = n('<iframe frameborder="0" allowfullscreen mozallowfullscreen webkitAllowFullScreen ><\/iframe>'), r.attr("height", o), r.attr("width", e), "youtube" === i.type ? r.attr("src", "//www.youtube.com/embed/" + i.id + "?autoplay=1&rel=0&v=" + i.id) : "vimeo" === i.type ? r.attr("src", "//player.vimeo.com/video/" + i.id + "?autoplay=1") : "vzaar" === i.type && r.attr("src", "//view.vzaar.com/" + i.id + "/player?autoplay=true"), n(r).wrap('<div class="owl-video-frame" />').insertAfter(u.find(".owl-video")), this._playing = u.addClass("owl-video-playing"))
    };
    r.prototype.isInFullScreen = function() {
        var t = i.fullscreenElement || i.mozFullScreenElement || i.webkitFullscreenElement;
        return t && n(t).parent().hasClass("owl-video-frame")
    };
    r.prototype.destroy = function() {
        var n, t;
        this._core.$element.off("click.owl.video");
        for (n in this._handlers) this._core.$element.off(n, this._handlers[n]);
        for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
    };
    n.fn.owlCarousel.Constructor.Plugins.Video = r
}(window.Zepto || window.jQuery, window, document),
function(n, t, i, r) {
    var u = function(t) {
        this.core = t;
        this.core.options = n.extend({}, u.Defaults, this.core.options);
        this.swapping = !0;
        this.previous = r;
        this.next = r;
        this.handlers = {
            "change.owl.carousel": n.proxy(function(n) {
                n.namespace && "position" == n.property.name && (this.previous = this.core.current(), this.next = n.property.value)
            }, this),
            "drag.owl.carousel dragged.owl.carousel translated.owl.carousel": n.proxy(function(n) {
                n.namespace && (this.swapping = "translated" == n.type)
            }, this),
            "translate.owl.carousel": n.proxy(function(n) {
                n.namespace && this.swapping && (this.core.options.animateOut || this.core.options.animateIn) && this.swap()
            }, this)
        };
        this.core.$element.on(this.handlers)
    };
    u.Defaults = {
        animateOut: !1,
        animateIn: !1
    };
    u.prototype.swap = function() {
        if (1 === this.core.settings.items && n.support.animation && n.support.transition) {
            this.core.speed(0);
            var t, i = n.proxy(this.clear, this),
                f = this.core.$stage.children().eq(this.previous),
                e = this.core.$stage.children().eq(this.next),
                r = this.core.settings.animateIn,
                u = this.core.settings.animateOut;
            this.core.current() !== this.previous && (u && (t = this.core.coordinates(this.previous) - this.core.coordinates(this.next), f.one(n.support.animation.end, i).css({
                left: t + "px"
            }).addClass("animated owl-animated-out").addClass(u)), r && e.one(n.support.animation.end, i).addClass("animated owl-animated-in").addClass(r))
        }
    };
    u.prototype.clear = function(t) {
        n(t.target).css({
            left: ""
        }).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut);
        this.core.onTransitionEnd()
    };
    u.prototype.destroy = function() {
        var n, t;
        for (n in this.handlers) this.core.$element.off(n, this.handlers[n]);
        for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
    };
    n.fn.owlCarousel.Constructor.Plugins.Animate = u
}(window.Zepto || window.jQuery, window, document),
function(n, t, i) {
    var r = function(t) {
        this._core = t;
        this._call = null;
        this._time = 0;
        this._timeout = 0;
        this._paused = !0;
        this._handlers = {
            "changed.owl.carousel": n.proxy(function(n) {
                n.namespace && "settings" === n.property.name ? this._core.settings.autoplay ? this.play() : this.stop() : n.namespace && "position" === n.property.name && this._paused && (this._time = 0)
            }, this),
            "initialized.owl.carousel": n.proxy(function(n) {
                n.namespace && this._core.settings.autoplay && this.play()
            }, this),
            "play.owl.autoplay": n.proxy(function(n, t, i) {
                n.namespace && this.play(t, i)
            }, this),
            "stop.owl.autoplay": n.proxy(function(n) {
                n.namespace && this.stop()
            }, this),
            "mouseover.owl.autoplay": n.proxy(function() {
                this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
            }, this),
            "mouseleave.owl.autoplay": n.proxy(function() {
                this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.play()
            }, this),
            "touchstart.owl.core": n.proxy(function() {
                this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
            }, this),
            "touchend.owl.core": n.proxy(function() {
                this._core.settings.autoplayHoverPause && this.play()
            }, this)
        };
        this._core.$element.on(this._handlers);
        this._core.options = n.extend({}, r.Defaults, this._core.options)
    };
    r.Defaults = {
        autoplay: !1,
        autoplayTimeout: 5e3,
        autoplayHoverPause: !1,
        autoplaySpeed: !1
    };
    r.prototype._next = function(r) {
        this._call = t.setTimeout(n.proxy(this._next, this, r), this._timeout * (Math.round(this.read() / this._timeout) + 1) - this.read());
        this._core.is("interacting") || i.hidden || this._core.next(r || this._core.settings.autoplaySpeed)
    };
    r.prototype.read = function() {
        return (new Date).getTime() - this._time
    };
    r.prototype.play = function(i, r) {
        var u;
        this._core.is("rotating") || this._core.enter("rotating");
        i = i || this._core.settings.autoplayTimeout;
        u = Math.min(this._time % (this._timeout || i), i);
        this._paused ? (this._time = this.read(), this._paused = !1) : t.clearTimeout(this._call);
        this._time += this.read() % i - u;
        this._timeout = i;
        this._call = t.setTimeout(n.proxy(this._next, this, r), i - u)
    };
    r.prototype.stop = function() {
        this._core.is("rotating") && (this._time = 0, this._paused = !0, t.clearTimeout(this._call), this._core.leave("rotating"))
    };
    r.prototype.pause = function() {
        this._core.is("rotating") && !this._paused && (this._time = this.read(), this._paused = !0, t.clearTimeout(this._call))
    };
    r.prototype.destroy = function() {
        var n, t;
        this.stop();
        for (n in this._handlers) this._core.$element.off(n, this._handlers[n]);
        for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null)
    };
    n.fn.owlCarousel.Constructor.Plugins.autoplay = r
}(window.Zepto || window.jQuery, window, document),
function(n) {
    "use strict";
    var t = function(i) {
        this._core = i;
        this._initialized = !1;
        this._pages = [];
        this._controls = {};
        this._templates = [];
        this.$element = this._core.$element;
        this._overrides = {
            next: this._core.next,
            prev: this._core.prev,
            to: this._core.to
        };
        this._handlers = {
            "prepared.owl.carousel": n.proxy(function(t) {
                t.namespace && this._core.settings.dotsData && this._templates.push('<div class="' + this._core.settings.dotClass + '">' + n(t.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot") + "<\/div>")
            }, this),
            "added.owl.carousel": n.proxy(function(n) {
                n.namespace && this._core.settings.dotsData && this._templates.splice(n.position, 0, this._templates.pop())
            }, this),
            "remove.owl.carousel": n.proxy(function(n) {
                n.namespace && this._core.settings.dotsData && this._templates.splice(n.position, 1)
            }, this),
            "changed.owl.carousel": n.proxy(function(n) {
                n.namespace && "position" == n.property.name && this.draw()
            }, this),
            "initialized.owl.carousel": n.proxy(function(n) {
                n.namespace && !this._initialized && (this._core.trigger("initialize", null, "navigation"), this.initialize(), this.update(), this.draw(), this._initialized = !0, this._core.trigger("initialized", null, "navigation"))
            }, this),
            "refreshed.owl.carousel": n.proxy(function(n) {
                n.namespace && this._initialized && (this._core.trigger("refresh", null, "navigation"), this.update(), this.draw(), this._core.trigger("refreshed", null, "navigation"))
            }, this)
        };
        this._core.options = n.extend({}, t.Defaults, this._core.options);
        this.$element.on(this._handlers)
    };
    t.Defaults = {
        nav: !1,
        navText: ['<span aria-label="Previous">&#x2039;<\/span>', '<span aria-label="Next">&#x203a;<\/span>'],
        navSpeed: !1,
        navElement: 'button type="button" role="presentation"',
        navContainer: !1,
        navContainerClass: "owl-nav",
        navClass: ["owl-prev", "owl-next"],
        slideBy: 1,
        dotClass: "owl-dot",
        dotsClass: "owl-dots",
        dots: !0,
        dotsEach: !1,
        dotsData: !1,
        dotsSpeed: !1,
        dotsContainer: !1
    };
    t.prototype.initialize = function() {
        var i, t = this._core.settings;
        this._controls.$relative = (t.navContainer ? n(t.navContainer) : n("<div>").addClass(t.navContainerClass).appendTo(this.$element)).addClass("disabled");
        this._controls.$previous = n("<" + t.navElement + ">").addClass(t.navClass[0]).html(t.navText[0]).prependTo(this._controls.$relative).on("click", n.proxy(function() {
            this.prev(t.navSpeed)
        }, this));
        this._controls.$next = n("<" + t.navElement + ">").addClass(t.navClass[1]).html(t.navText[1]).appendTo(this._controls.$relative).on("click", n.proxy(function() {
            this.next(t.navSpeed)
        }, this));
        t.dotsData || (this._templates = [n('<button role="button">').addClass(t.dotClass).append(n("<span>")).prop("outerHTML")]);
        this._controls.$absolute = (t.dotsContainer ? n(t.dotsContainer) : n("<div>").addClass(t.dotsClass).appendTo(this.$element)).addClass("disabled");
        this._controls.$absolute.on("click", "button", n.proxy(function(i) {
            var r = n(i.target).parent().is(this._controls.$absolute) ? n(i.target).index() : n(i.target).parent().index();
            i.preventDefault();
            this.to(r, t.dotsSpeed)
        }, this));
        for (i in this._overrides) this._core[i] = n.proxy(this[i], this)
    };
    t.prototype.destroy = function() {
        var t, n, i, r, u = this._core.settings;
        for (t in this._handlers) this.$element.off(t, this._handlers[t]);
        for (n in this._controls) "$relative" === n && u.navContainer ? this._controls[n].html("") : this._controls[n].remove();
        for (r in this.overides) this._core[r] = this._overrides[r];
        for (i in Object.getOwnPropertyNames(this)) "function" != typeof this[i] && (this[i] = null)
    };
    t.prototype.update = function() {
        var t, i, f, r = this._core.clones().length / 2,
            o = r + this._core.items().length,
            u = this._core.maximum(!0),
            n = this._core.settings,
            e = n.center || n.autoWidth || n.dotsData ? 1 : n.dotsEach || n.items;
        if ("page" !== n.slideBy && (n.slideBy = Math.min(n.slideBy, n.items)), n.dots || "page" == n.slideBy)
            for (this._pages = [], t = r, i = 0, f = 0; t < o; t++) {
                if (i >= e || 0 === i) {
                    if (this._pages.push({
                            start: Math.min(u, t - r),
                            end: t - r + e - 1
                        }), Math.min(u, t - r) === u) break;
                    i = 0;
                    ++f
                }
                i += this._core.mergers(this._core.relative(t))
            }
    };
    t.prototype.draw = function() {
        var i, t = this._core.settings,
            r = this._core.items().length <= t.items,
            u = this._core.relative(this._core.current()),
            f = t.loop || t.rewind;
        this._controls.$relative.toggleClass("disabled", !t.nav || r);
        t.nav && (this._controls.$previous.toggleClass("disabled", !f && u <= this._core.minimum(!0)), this._controls.$next.toggleClass("disabled", !f && u >= this._core.maximum(!0)));
        this._controls.$absolute.toggleClass("disabled", !t.dots || r);
        t.dots && (i = this._pages.length - this._controls.$absolute.children().length, t.dotsData && 0 !== i ? this._controls.$absolute.html(this._templates.join("")) : i > 0 ? this._controls.$absolute.append(new Array(i + 1).join(this._templates[0])) : i < 0 && this._controls.$absolute.children().slice(i).remove(), this._controls.$absolute.find(".active").removeClass("active"), this._controls.$absolute.children().eq(n.inArray(this.current(), this._pages)).addClass("active"))
    };
    t.prototype.onTrigger = function(t) {
        var i = this._core.settings;
        t.page = {
            index: n.inArray(this.current(), this._pages),
            count: this._pages.length,
            size: i && (i.center || i.autoWidth || i.dotsData ? 1 : i.dotsEach || i.items)
        }
    };
    t.prototype.current = function() {
        var t = this._core.relative(this._core.current());
        return n.grep(this._pages, n.proxy(function(n) {
            return n.start <= t && n.end >= t
        }, this)).pop()
    };
    t.prototype.getPosition = function(t) {
        var i, r, u = this._core.settings;
        return "page" == u.slideBy ? (i = n.inArray(this.current(), this._pages), r = this._pages.length, t ? ++i : --i, i = this._pages[(i % r + r) % r].start) : (i = this._core.relative(this._core.current()), r = this._core.items().length, t ? i += u.slideBy : i -= u.slideBy), i
    };
    t.prototype.next = function(t) {
        n.proxy(this._overrides.to, this._core)(this.getPosition(!0), t)
    };
    t.prototype.prev = function(t) {
        n.proxy(this._overrides.to, this._core)(this.getPosition(!1), t)
    };
    t.prototype.to = function(t, i, r) {
        var u;
        !r && this._pages.length ? (u = this._pages.length, n.proxy(this._overrides.to, this._core)(this._pages[(t % u + u) % u].start, i)) : n.proxy(this._overrides.to, this._core)(t, i)
    };
    n.fn.owlCarousel.Constructor.Plugins.Navigation = t
}(window.Zepto || window.jQuery, window, document),
function(n, t, i, r) {
    "use strict";
    var u = function(i) {
        this._core = i;
        this._hashes = {};
        this.$element = this._core.$element;
        this._handlers = {
            "initialized.owl.carousel": n.proxy(function(i) {
                i.namespace && "URLHash" === this._core.settings.startPosition && n(t).trigger("hashchange.owl.navigation")
            }, this),
            "prepared.owl.carousel": n.proxy(function(t) {
                if (t.namespace) {
                    var i = n(t.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");
                    if (!i) return;
                    this._hashes[i] = t.content
                }
            }, this),
            "changed.owl.carousel": n.proxy(function(i) {
                if (i.namespace && "position" === i.property.name) {
                    var u = this._core.items(this._core.relative(this._core.current())),
                        r = n.map(this._hashes, function(n, t) {
                            return n === u ? t : null
                        }).join();
                    if (!r || t.location.hash.slice(1) === r) return;
                    t.location.hash = r
                }
            }, this)
        };
        this._core.options = n.extend({}, u.Defaults, this._core.options);
        this.$element.on(this._handlers);
        n(t).on("hashchange.owl.navigation", n.proxy(function() {
            var i = t.location.hash.substring(1),
                u = this._core.$stage.children(),
                n = this._hashes[i] && u.index(this._hashes[i]);
            n !== r && n !== this._core.current() && this._core.to(this._core.relative(n), !1, !0)
        }, this))
    };
    u.Defaults = {
        URLhashListener: !1
    };
    u.prototype.destroy = function() {
        var i, r;
        n(t).off("hashchange.owl.navigation");
        for (i in this._handlers) this._core.$element.off(i, this._handlers[i]);
        for (r in Object.getOwnPropertyNames(this)) "function" != typeof this[r] && (this[r] = null)
    };
    n.fn.owlCarousel.Constructor.Plugins.Hash = u
}(window.Zepto || window.jQuery, window, document),
function(n, t, i, r) {
    function u(t, i) {
        var u = !1,
            f = t.charAt(0).toUpperCase() + t.slice(1);
        return n.each((t + " " + h.join(f + " ") + f).split(" "), function(n, t) {
            if (s[t] !== r) return u = !i || t, !1
        }), u
    }

    function e(n) {
        return u(n, !0)
    }
    var s = n("<support>").get(0).style,
        h = "Webkit Moz O ms".split(" "),
        o = {
            transition: {
                end: {
                    WebkitTransition: "webkitTransitionEnd",
                    MozTransition: "transitionend",
                    OTransition: "oTransitionEnd",
                    transition: "transitionend"
                }
            },
            animation: {
                end: {
                    WebkitAnimation: "webkitAnimationEnd",
                    MozAnimation: "animationend",
                    OAnimation: "oAnimationEnd",
                    animation: "animationend"
                }
            }
        },
        f = {
            csstransforms: function() {
                return !!u("transform")
            },
            csstransforms3d: function() {
                return !!u("perspective")
            },
            csstransitions: function() {
                return !!u("transition")
            },
            cssanimations: function() {
                return !!u("animation")
            }
        };
    f.csstransitions() && (n.support.transition = new String(e("transition")), n.support.transition.end = o.transition.end[n.support.transition]);
    f.cssanimations() && (n.support.animation = new String(e("animation")), n.support.animation.end = o.animation.end[n.support.animation]);
    f.csstransforms() && (n.support.transform = new String(e("transform")), n.support.transform3d = f.csstransforms3d())
}(window.Zepto || window.jQuery, window, document);
scrolltotop = {
    setting: {
        startline: 100,
        scrollto: 0,
        scrollduration: 1e3,
        fadeduration: [500, 100]
    },
    controlHTML: '<img src="../../assets/uploads/img/up.png" />',
    controlattrs: {
        offsetx: 5,
        offsety: 90
    },
    anchorkeyword: "#top",
    state: {
        isvisible: !1,
        shouldvisible: !1
    },
    scrollup: function() {
        this.cssfixedsupport || this.$control.css({
            opacity: 0
        });
        var n = isNaN(this.setting.scrollto) ? this.setting.scrollto : parseInt(this.setting.scrollto);
        n = typeof n == "string" && jQuery("#" + n).length == 1 ? jQuery("#" + n).offset().top : 0;
        this.$body.animate({
            scrollTop: n
        }, this.setting.scrollduration)
    },
    keepfixed: function() {
        var n = jQuery(window),
            t = n.scrollLeft() + n.width() - this.$control.width() - this.controlattrs.offsetx,
            i = n.scrollTop() + n.height() - this.$control.height() - this.controlattrs.offsety;
        this.$control.css({
            left: t + "px",
            top: i + "px"
        })
    },
    togglecontrol: function() {
        var n = jQuery(window).scrollTop();
        this.cssfixedsupport || this.keepfixed();
        this.state.shouldvisible = n >= this.setting.startline ? !0 : !1;
        this.state.shouldvisible && !this.state.isvisible ? (this.$control.stop().animate({
            opacity: 1
        }, this.setting.fadeduration[0]), this.state.isvisible = !0) : this.state.shouldvisible == !1 && this.state.isvisible && (this.$control.stop().animate({
            opacity: 0
        }, this.setting.fadeduration[1]), this.state.isvisible = !1)
    },
    init: function() {
        jQuery(document).ready(function(n) {
            var t = scrolltotop,
                i = document.all;
            t.cssfixedsupport = !i || i && document.compatMode == "CSS1Compat" && window.XMLHttpRequest;
            t.$body = window.opera ? document.compatMode == "CSS1Compat" ? n("html") : n("body") : n("html,body");
            t.$control = n('<div id="topcontrol">' + t.controlHTML + "<\/div>").css({
                position: t.cssfixedsupport ? "fixed" : "absolute",
                bottom: t.controlattrs.offsety,
                right: t.controlattrs.offsetx,
                opacity: 0,
                cursor: "pointer"
            }).attr({
                title: "Scroll Back to Top"
            }).click(function() {
                return t.scrollup(), !1
            }).appendTo("body");
            document.all && !window.XMLHttpRequest && t.$control.text() != "" && t.$control.css({
                width: t.$control.width()
            });
            t.togglecontrol();
            n('a[href="' + t.anchorkeyword + '"]').click(function() {
                return t.scrollup(), !1
            });
            n(window).bind("scroll resize", function() {
                t.togglecontrol()
            })
        })
    }
};
scrolltotop.init();
! function(n, t) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define(t) : (n = n || self).easy_toc = t()
}(this, function() {
    "use strict";
    var n = document;
    return function() {
        function t(t, i) {
            var r;
            this._defaults = {
                include: ["h1", "h2", "h3", "h4", "h5", "h6"],
                exclude: ["[data-no-toc]"],
                prefix: "easy_toc_",
                hierarchical: !0,
                anchor_tagname: "div",
                anchor_class: "anchor"
            };
            this.append_to_el = null !== t && "string" == typeof t ? (r = t, n.querySelector(r)) : t;
            t || (this.append_to_el = n.body);
            this.settings = this._merge_settings(this._defaults, i || {});
            this._includeStr = this.settings.include.join(",");
            this._excludeStr = this.settings.exclude.join(",");
            this._found_selectors = {};
            this._toc_list_element = null;
            this._is_rendered = !1
        }
        return t.prototype._merge_settings = function() {
            for (var i, t = [], n = 0; n < arguments.length; n++) t[n] = arguments[n];
            return i = {}, Array.prototype.forEach.call(t, function(n) {
                for (var t in n) {
                    if (!Object.prototype.hasOwnProperty.call(n, t)) return;
                    i[t] = n[t]
                }
            }), i
        }, t.prototype._get_nodes = function() {
            var i, r = this,
                t = (i = this._includeStr, n.querySelectorAll(i));
            return this.settings.exclude.length > 0 && (t = Array.prototype.slice.call(t).filter(function(n) {
                if (!0 !== (n.matches || n.matchesSelector || n.msMatchesSelector || n.mozMatchesSelector || n.webkitMatchesSelector || n.oMatchesSelector).call(n, r._excludeStr)) return n
            })), t
        }, t.prototype._build_node_obj = function() {
            var n = this,
                t = {},
                i = {};
            return Array.prototype.forEach.call(this._get_nodes(), function(r, u) {
                var f, e, o;
                n.settings.hierarchical ? (e = void 0, f = null !== (e = /h\d/i.exec(r.tagName)) ? parseInt(e[0].substr(1, 1)) : null) : f = null;
                o = n._slugify(r.textContent, 0, i);
                i[u] = o;
                t[u] = {
                    el: r,
                    heading_level: f,
                    className: n.settings.prefix + n.settings.anchor_class,
                    id: n.settings.prefix + o
                }
            }), t
        }, t.prototype._slugify = function(n, t, i) {
            var r = removeVietnameseTones(n.trim().toLowerCase().split(" ").join("-").replace(/[!@#$%^&*():]/gi, "").replace(/\//gi, "-"));
            return Object.values(i).indexOf(r) > -1 && (t++, r = this._slugify(n + " " + t, t, i)), r
        }, t.prototype._wrap = function(n, t) {
            n.parentNode.insertBefore(t, n);
            t.appendChild(n)
        }, t.prototype._unwrap = function(n) {
            var t = n.parentElement;
            t.insertAdjacentElement("afterend", n);
            t.parentNode.removeChild(t)
        }, t.prototype._render = function() {
            var t = this,
                o = Object.values(this._found_selectors),
                f = this.settings.hierarchical ? "ol" : "ul",
                i = n.createElement(f);
            i.className = this.settings.prefix + "list";
            this._toc_list_element = i;
            this.append_to_el.appendChild(i);
            var r = null,
                u = i,
                e = 1;
            Array.prototype.forEach.call(o, function(o) {
                var l = n.createElement(t.settings.anchor_tagname),
                    s, c, h;
                l.classList.add(o.className);
                l.id = o.id;
                t._wrap(o.el, l);
                s = n.createElement("li");
                (s.className = t.settings.prefix + "list-item", t.settings.hierarchical && null !== r && r < o.heading_level) ? (c = n.createElement(f), c.setAttribute("data-level", e.toString()), u.appendChild(c), e++, (u = c).appendChild(s)) : t.settings.hierarchical && null !== r && r == o.heading_level ? u.appendChild(s) : (u = i, i.appendChild(s));
                h = n.createElement("a");
                h.className = t.settings.prefix + "list-item_link";
                h.href = "#" + o.id;
                h.setAttribute("data-heading_level", o.heading_level.toString());
                h.innerText = o.el.textContent;
                s.appendChild(h);
                r = o.heading_level
            });
            this._is_rendered = !0
        }, t.prototype.init = function() {
            this.destroy();
            this._found_selectors = this._build_node_obj();
            this._render()
        }, t.prototype.update = function() {
            this.init()
        }, t.prototype.destroy = function() {
            var t = this,
                n;
            !1 !== this._is_rendered && (n = Object.values(this._found_selectors), Array.prototype.forEach.call(n, function(n) {
                t._unwrap(n.el)
            }), this._toc_list_element.parentNode.removeChild(this._toc_list_element));
            this._found_selectors = {};
            this._is_rendered = !1
        }, t
    }()
});
$(function() {
    $(".lazy").lazyload({
        effect: "fadeIn"
    }).removeClass("lazy");
    $(document).ajaxStop(function() {
        $(".lazy").lazyload({
            effect: "fadeIn"
        }).removeClass("lazy")
    })
});
$.post("/GetCategory", function(n) {
    for (var t = 0; t < n.length; t++) $("#catsearch").append($("<option>", {
        value: n[t].Value,
        text: n[t].Text
    }))
    
});
$("#txtsearch").autocomplete({
    source: "/Home/Search",
    max: 10,
    minLength: 2,
    select: function(n, t) {
        console.log(t);
        window.location.href = "/home/searchcontent?searchString=" + t.item.label
    }
});
$(document).on("click", ".previewProduct", function(n) {
    n.preventDefault();
    var t = $(this).data("id");
    $("#modalIframe").attr("src", "/Product/Preview/" + t);
    $("#modal-table").modal("show")
   
    
});
$(document).on("click", ".addToCart", function(n) {
    n.preventDefault();
    var t = $(this).data("id"),
        i = $(this).parent().parent();
    $.post("../../AddToCart", {
        id: t,
        quantity : 1,
    }, function(n) {
        var t = $("#countCart");
        $("#countCart").html(n);
        alertAddCart()
        
    })
});
fnmenu();
slideads(10);
$(window).resize(function() {
    fnmenu();
    slideads(10)
});
$(".menu .sub-menu .menu-item").hover(function() {
    $submenu = $(this).children(".sub-menu");
    $submenu.length && $submenu.hasClass("dr-left") == !1 && ($right = $submenu.offset().left + $submenu.width(), $right > $(window).width() ? $submenu.addClass("dr-left") : $submenu.removeClass("dr-left"))
});
$("#nav-toggle > #menu-button").click(function(n) {
    n.preventDefault();
    $(".menu > ul").css("left", "0");
    $("#closemenu").css("left", "0");
    $("#logo img").css("z-index", "0")
});
$(document).on("click", ".remove-cart", function() {
    var n = $(this).data("id");

    // Gửi yêu cầu GET đến /Cart/Json để lấy dữ liệu
    $.get("../../Cart/Json")
        .done(function(data) {
            try {
                // Chuyển đổi chuỗi JSON thành một mảng JavaScript
                var dataArray = JSON.parse(data);

                // Lọc ra đối tượng cần xóa
                var deletedItem = dataArray.find(item => item.id === n);

                // Kiểm tra xem đối tượng có tồn tại không
                if (deletedItem) {
                    // Chuyển đổi đối tượng thành chuỗi JSON
                    var jsonData = JSON.stringify(deletedItem);

                    // Gửi yêu cầu POST đến /Cart/Delete với dữ liệu dưới dạng JSON
                    $.ajax({
                        url: "../../Cart/Delete",
                        type: "POST",
                        contentType: "application/json",
                        data: jsonData,
                        success: function() {
                            // Sau khi xóa sản phẩm khỏi giỏ hàng, cập nhật giao diện người dùng
                            $.get("../../AddToCart", function(data) {
                                $("#cart-content").replaceWith(data);
                                // Sau khi cập nhật giao diện, cập nhật số lượng sản phẩm trong giỏ hàng
                                $("#countCart").html(parseInt($("#countCart").text()) - 1);
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error("Lỗi khi gửi yêu cầu POST:", error);
                        }
                    });
                } else {
                    console.log("Không tìm thấy sản phẩm cần xóa trong giỏ hàng.");
                }
            } catch (error) {
                console.log("Lỗi khi chuyển đổi dữ liệu JSON:", error);
            }
        })
        .fail(function(error) {
            console.log("Đã xảy ra lỗi khi gửi yêu cầu GET đến /Cart/Json:", error);
        });
});



$("#closemenu").click(function(n) {
    n.preventDefault();
    $(".menu > ul").removeAttr("style");
    $("#closemenu").removeAttr("style");
    $("#logo img").removeAttr("style")
});
$(document).on("click", "#search span", function() {
    var t = $(this).find("i"),
        n = $("i", this).attr("class");
    $("#frmsearch").slideToggle("slow");
    n == "fas fa-search" ? $("i", this).attr("class", "fas fa-times") : $("i", this).attr("class", "fas fa-search")
});
$(document).on("click", ".showhide-subul", function() {
    var n = $(this).next(),
        t = $(this).parents("li").siblings(),
        i = $("i", this).attr("class");
    $(t).find(".showhide-subul > i").attr("class", "far fa-plus-square");
    $(t).find(".showhide-subul").removeAttr("style");
    $(t).find("ul").slideUp(0);
    $(n).slideToggle(0);
    i == "far fa-plus-square" ? $("i", this).attr("class", "far fa-minus-square") : ($("i", this).attr("class", "far fa-plus-square"), $(this).removeAttr("style"), $(n).find(".showhide-subul > i").attr("class", "far fa-plus-square"), $(n).find(".showhide-subul").removeAttr("style"))
});
$("#menudmsp span").click(function() {
    $(this).find("i").hasClass("fa-plus") ? ($(this).find("i").removeClass("fa-plus"), $(this).find("i").addClass("fa-minus")) : ($(this).find("i").removeClass("fa-minus"), $(this).find("i").addClass("fa-plus"))
});
$(document).ready(function() {
    $("#owl-comment").owlCarousel({
        loop: !0,
        responsiveClass: !0,
        items: 2,
        responsive: {
            0: {
                items: 1
            },
            992: {
                items: 2
            }
        },
        lazyLoad: !0,
        autoplay: !1,
        autoplayTimeout: 2500,
        autoplayHoverPause: !0,
        dots: !0,
        nav: !1,
        navText: ["<i class='fa fa-angle-left'><\/i>", "<i class='fa fa-angle-right'><\/i>"],
        margin: 30
    });
    $("#owl-customer").owlCarousel({
        loop: !0,
        responsiveClass: !0,
        items: 8,
        responsive: {
            0: {
                items: 1
            },
            320: {
                items: 2
            },
            480: {
                items: 3
            },
            768: {
                items: 4
            },
            992: {
                items: 5
            },
            1140: {
                items: 6
            },
            1200: {
                items: 8
            }
        },
        lazyLoad: !0,
        autoplay: !0,
        autoplayTimeout: 2500,
        autoplayHoverPause: !0,
        dots: !1,
        nav: !0,
        navText: ["<i class='fa fa-angle-left'><\/i>", "<i class='fa fa-angle-right'><\/i>"],
        margin: 15
    });
    $("#owl-product").owlCarousel({
        loop: !0,
        responsiveClass: !0,
        items: 4,
        responsive: {
            0: {
                items: 1
            },
            376: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            }
        },
        lazyLoad: !0,
        autoplay: !0,
        autoplayTimeout: 2500,
        autoplayHoverPause: !0,
        dots: !0,
        nav: !0,
        navText: ["<i class='fa fa-angle-left'><\/i>", "<i class='fa fa-angle-right'><\/i>"],
        margin: 30
    });
    $("#owl-product1").owlCarousel({
        loop: !1,
        responsiveClass: !0,
        items: 4,
        responsive: {
            0: {
                items: 1
            },
            376: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            }
        },
        lazyLoad: !0,
        autoplay: !1,
        autoplayTimeout: 2500,
        autoplayHoverPause: !0,
        dots: !0,
        nav: !0,
        navText: ["<i class='fa fa-angle-left'><\/i>", "<i class='fa fa-angle-right'><\/i>"],
        margin: 30
    });
    var n = !1;
    $(window).width() < 1024 && (n = !0);
    $("#owl-why").owlCarousel({
        loop: !0,
        responsiveClass: !0,
        items: 4,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        },
        lazyLoad: !0,
        autoplay: n,
        autoplayTimeout: 2500,
        autoplayHoverPause: !0,
        dots: !1,
        nav: !0,
        navText: ["<i class='fa fa-angle-left'><\/i>", "<i class='fa fa-angle-right'><\/i>"],
        margin: 30
    });
    $("#owl-content").owlCarousel({
        loop: !0,
        responsiveClass: !0,
        items: 4,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 4
            }
        },
        lazyLoad: !0,
        autoplay: !0,
        autoplayTimeout: 2500,
        autoplayHoverPause: !0,
        dots: !0,
        nav: !0,
        navText: ["<i class='fa fa-angle-left'><\/i>", "<i class='fa fa-angle-right'><\/i>"],
        margin: 30
    });
    $("#owl-why-cat").owlCarousel({
        loop: !0,
        responsiveClass: !0,
        items: 4,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        },
        lazyLoad: !0,
        autoplay: !0,
        autoplayTimeout: 2500,
        autoplayHoverPause: !0,
        dots: !1,
        nav: !0,
        navText: ["<i class='fa fa-angle-left'><\/i>", "<i class='fa fa-angle-right'><\/i>"],
        margin: 40
    });
    img_auto();
    owl_img_auto()
});
$(document).on("click", ".wg-open", function() {
    $(this).attr("class", "wg-open d-none");
    $(".wg-close").attr("class", "wg-close d-block");
    $("#widget-contact").slideToggle();
    $("#hig-alo-phoneIcon").slideToggle()
});
$(document).on("click", ".wg-close", function() {
    $(this).attr("class", "wg-close d-none");
    $(".wg-open").attr("class", "wg-open d-block");
    $("#widget-contact").slideToggle();
    $("#hig-alo-phoneIcon").slideToggle()
});
$("#askinfo").submit(function() {
    return $("#buttonwait").show(), $("#buttonsend").hide(), $.post("/FeedBack/Post", $("#askinfo").serialize(), function(n) {
        n.status == !0 && $("#askinfo").html("success");
        $("#buttonwait").show();
        $("#buttonsend").hide()
    }), !1
});
$("#formSub").submit(function() {
    return $.post("/Home/Subscribe", {
        email: $("#formEmail").val()
    }, function(n) {
        n.status == -1 ? alert("email không được để trống!") : n.status == -3 ? alert("Đăng ký email quá nhanh.Vui lòng chờ.") : n.status == !0 ? ($("#formEmail").val(""), alert("Đăng ký thành công")) : alert("Email đã được đăng ký.")
    }), !1
});
$(".btn-show-more span").on("click", function() {
    var t = $(this),
        i = t.parent().prev(".cat-desc"),
        n = t.text().toUpperCase();
    n === "XEM THÊM" ? (n = "Thu gọn", i.switchClass("shortContent", "fullContent", 400)) : (n = "Xem thêm", i.switchClass("fullContent", "shortContent", 400));
    t.text(n)
});
jQuery(document).ready(function(n) {
    n("#btnsearch").off("click").on("click", function() {
        var t = n("input:text[name=searchString]").val(),
            i = n("#catsearch").val(),
            r = n("#category").val();
        r = !1;
        t && (window.location.href = r == !1 ? i ? "/home/searchcontent?searchString=" + t + "&categoryId=" + i : "/home/searchcontent?searchString=" + t : "/tim-kiem/tkt-" + t + "-p1.html")
    });
    n("#txtsearch").keypress(function(t) {
        var f = t.keyCode ? t.keyCode : t.which;
        if (f == "13") {
            var i = n("#txtsearch").val(),
                r = n("#category").val(),
                u = n("#catsearch").val();
            r = !1;
            i && (window.location.href = r == !1 ? u ? "/home/searchcontent?searchString=" + i + "&categoryId=" + u : "/home/searchcontent?searchString=" + i : "/tim-kiem/tkt-" + i + "-p1.html")
        }
    })
});
$("#jssor_1").length > 0 && (jssor_1_slider_init = function() {
    function n() {
        var i = t.$Elmt.parentNode.clientWidth;
        i ? (i = Math.min(i, 1920), t.$ScaleWidth(i)) : window.setTimeout(n, 30)
    }
    var i = [{
            $Duration: 1200,
            x: -.3,
            $During: {
                $Left: [.3, .7]
            },
            $Easing: {
                $Left: $Jease$.$InCubic,
                $Opacity: $Jease$.$Linear
            },
            $Opacity: 2
        }],
        r = {
            $AutoPlay: !0,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: i,
                $TransitionsOrder: 1
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        },
        t = new $JssorSlider$("jssor_1", r);
    n();
    $Jssor$.$AddEvent(window, "load", n);
    $Jssor$.$AddEvent(window, "resize", n);
    $Jssor$.$AddEvent(window, "orientationchange", n)
});
$("#jssor_1").length > 0 && jssor_1_slider_init()