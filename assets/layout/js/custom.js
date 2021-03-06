jQuery(document).ready(function () {
    if (jQuery(".search-top").click(function () {
            jQuery("#masthead .search-form-top").toggle()
        }), jQuery(".menu-primary-container .menu-item-has-children").append('<span class="sub-toggle"> <i class="fa fa-angle-right"></i> </span>'), jQuery(".menu-primary-container .sub-toggle").click(function () {
            jQuery(this).parent(".menu-item-has-children").children("ul.sub-menu").first().slideToggle("1000"), jQuery(this).children(".fa-angle-right").first().toggleClass("fa-angle-down")
        }), jQuery("#scroll-up").hide(), jQuery(window).scroll(function () {
            jQuery(this).scrollTop() > 1e3 ? jQuery("#scroll-up").fadeIn() : jQuery("#scroll-up").fadeOut()
        }), jQuery("a#scroll-up").click(function () {
            return jQuery("body,html").animate({scrollTop: 0}, 800), !1
        }), "undefined" != typeof jQuery.fn.sticky) {
        var a = jQuery("#wpadminbar");
        a.length ? jQuery("#site-navigation").sticky({topSpacing: a.height()}) : jQuery("#site-navigation").sticky({topSpacing: 0})
    }
    if ("undefined" != typeof jQuery.fn.easytabs && jQuery(".tabbed-widget").easytabs(), "undefined" != typeof jQuery.fn.fitVids && jQuery(".fitvids-video").fitVids(), "undefined" != typeof jQuery.fn.magnificPopup && (jQuery(".image-popup").magnificPopup({type: "image"}), jQuery(".gallery").magnificPopup({
            delegate: "a",
            type: "image",
            gallery: {enabled: !0}
        }), jQuery(".colormag-ticker-news-popup-link").magnificPopup({
            type: "ajax",
            callbacks: {
                parseAjax: function (a) {
                    var b = jQuery.magnificPopup.instance, c = jQuery(b.currItem.el[0]), d = c.data("fragment");
                    a.data = jQuery(a.data).find(d)
                }
            }
        })), "undefined" != typeof jQuery.fn.newsTicker) {
        var b = colormag_ticker_settings.breaking_news_slide_effect, c = colormag_ticker_settings.breaking_news_duration, d = colormag_ticker_settings.breaking_news_speed;
        jQuery(".newsticker").newsTicker({
            row_height: 25,
            max_rows: 1,
            speed: d,
            direction: b,
            duration: c,
            autostart: 1,
            pauseOnHover: 1,
            start: function () {
                jQuery(".newsticker").css("visibility", "visible")
            }
        });
        var e = function (a, b, c, d, e, f, g) {
            jQuery(a).newsTicker({
                row_height: f,
                max_rows: g,
                duration: e,
                direction: d,
                prevButton: jQuery(b),
                nextButton: jQuery(c),
                start: function () {
                    jQuery(".breaking-news-widget-slide").css("visibility", "visible")
                }
            })
        }, f = jQuery(".breaking_news_widget_inner_wrap");
        jQuery(f).each(function () {
            var a = "#" + jQuery(this).children(".breaking-news-widget-slide").attr("id"), b = "#" + jQuery(this).children(".fa-arrow-up").attr("id"), c = "#" + jQuery(this).children(".fa-arrow-down").attr("id"), d = jQuery(this).children(".breaking-news-widget-slide").data("direction"), f = jQuery(this).children(".breaking-news-widget-slide").data("duration"), g = jQuery(this).children(".breaking-news-widget-slide").data("rowheight"), h = jQuery(this).children(".breaking-news-widget-slide").data("maxrows");
            e(a, b, c, d, f, g, h)
        })
    }
    if ("undefined" != typeof jQuery.fn.bxSlider) {
        var g = function (a, b, c, d, e) {
            jQuery(a).bxSlider({
                mode: b,
                speed: c,
                auto: e,
                pause: d,
                adaptiveHeight: !0,
                nextText: '<div class="category-slide-next"><i class="fa fa-angle-right"></i></div>',
                prevText: '<div class="category-slide-prev"><i class="fa fa-angle-left"></i></div>',
                pager: !1,
                tickerHover: !0,
                onSliderLoad: function () {
                    jQuery(".widget_slider_area_rotate").css("visibility", "visible"), jQuery(".widget_slider_area_rotate").css("height", "auto")
                }
            })
        }, h = jQuery(".widget_featured_slider_inner_wrap");
        jQuery(h).each(function () {
            var a = "#" + jQuery(this).children(".widget_slider_area_rotate").attr("id"), b = jQuery(this).children(".widget_slider_area_rotate").data("mode"), c = jQuery(this).children(".widget_slider_area_rotate").data("speed"), d = jQuery(this).children(".widget_slider_area_rotate").data("pause"), e = jQuery(this).children(".widget_slider_area_rotate").data("auto");
            g(a, b, c, d, e)
        });
        var i = function (a, b, c, d) {
            jQuery(a).bxSlider({
                minSlides: 1,
                maxSlides: 2,
                slideWidth: 390,
                slideMargin: 20,
                speed: b,
                pause: c,
                auto: d,
                adaptiveHeight: !0,
                nextText: '<div class="slide-next"><i class="fa fa-angle-right"></i></div>',
                prevText: '<div class="slide-prev"><i class="fa fa-angle-left"></i></div>',
                pager: !1,
                captions: !1,
                onSliderLoad: function () {
                    jQuery(".widget_block_picture_news .widget_highlighted_post_area").css("visibility", "visible"), jQuery(".widget_block_picture_news .widget_highlighted_post_area").css("height", "auto")
                }
            })
        }, j = jQuery(".widget_block_picture_news_inner_wrap");
        jQuery(j).each(function () {
            var a = "#" + jQuery(this).children(".widget_block_picture_news .widget_highlighted_post_area").attr("id"), b = jQuery(this).children(".widget_block_picture_news .widget_highlighted_post_area").data("speed"), c = jQuery(this).children(".widget_block_picture_news .widget_highlighted_post_area").data("pause"), d = jQuery(this).children(".widget_block_picture_news .widget_highlighted_post_area").data("auto");
            i(a, b, c, d)
        });
        var k = function (a, b, c, d, e, f) {
            jQuery(a).bxSlider({
                mode: c,
                speed: d,
                pause: e,
                auto: f,
                pagerCustom: b,
                controls: !1,
                nextText: "",
                prevText: "",
                nextSelector: "",
                prevSelector: "",
                captions: !1,
                onSliderLoad: function () {
                    jQuery(".thumbnail-big-sliders").css("visibility", "visible"), jQuery(".thumbnail-big-sliders").css("height", "auto")
                }
            })
        }, l = jQuery(".thumbnail-slider-news");
        jQuery(l).each(function () {
            var a = "#" + jQuery(this).children(".thumbnail-big-sliders").attr("id"), b = "#" + jQuery(this).children(".thumbnail-slider").attr("id"), c = jQuery(this).children(".thumbnail-big-sliders").data("mode"), d = jQuery(this).children(".thumbnail-big-sliders").data("speed"), e = jQuery(this).children(".thumbnail-big-sliders").data("pause"), f = jQuery(this).children(".thumbnail-big-sliders").data("auto");
            k(a, b, c, d, e, f)
        });
        var m = function (a, b) {
            jQuery(a).bxSlider({
                minSlides: 5,
                maxSlides: 8,
                slideWidth: 150,
                slideMargin: 12,
                ticker: !0,
                speed: b,
                tickerHover: !0,
                useCSS: !1,
                onSliderLoad: function () {
                    jQuery(".image-ticker-news").css("visibility", "visible"), jQuery(".image-ticker-news").css("height", "auto")
                }
            })
        }, n = jQuery(".widget_ticker_news_colormag");
        jQuery(n).each(function () {
            var a = "#" + jQuery(this).children(".image-ticker-news").attr("id"), b = jQuery(this).children(".image-ticker-news").data("speed");
            m(a, b)
        }), jQuery(".blog .gallery-images, .archive .gallery-images, .search .gallery-images, .single-post .gallery-images").bxSlider({
            mode: "fade",
            speed: 1500,
            auto: !0,
            pause: 3e3,
            adaptiveHeight: !0,
            nextText: "",
            prevText: "",
            nextSelector: ".slide-next",
            prevSelector: ".slide-prev",
            pager: !1
        })
    }
    if ("undefined" != typeof jQuery.fn.theiaStickySidebar && "undefined" != typeof ResizeSensor) {
        var o = jQuery("#site-navigation-sticky-wrapper").outerHeight();
        null === o && (o = 0), jQuery("#primary, #secondary").theiaStickySidebar({additionalMarginTop: 40 + o})
    }
}), jQuery(document).on("click", "#site-navigation .menunav-menu li.menu-item-has-children > a", function (a) {
    var b = jQuery(this).parent(".menu-item-has-children");
    b.hasClass("focus") || (b.addClass("focus"), a.preventDefault(), b.children(".sub-menu").css({display: "block"}))
});