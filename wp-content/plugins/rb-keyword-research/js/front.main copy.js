jQuery(document).ready(function () {
    jQuery("#wp_keyword_tool_search_btn").click(function () {
        var e = jQuery("#rbkeyword_search_txt").val();
        return "" == e ? (alert("Write Keyword First"), !1) : (jQuery.ajax({
            url: jQuery("#wp_keyword_tool_ajax_src").val() + "&key=" + encodeURIComponent(e),
            context: document.body,
            success: function (e) {
                jQuery("#wp_keyword_tool_ajax-loading").addClass("ajax-loading"), jQuery("#wp_keyword_tool_search_btn").removeAttr("disabled"), jQuery("#wp_keyword_tool_search_btn").removeClass("disabled");
                var r = jQuery.parseJSON(e);
                if ("success" == r.status) {
                    for (var o = r.words, t = r.volume, d = 0; d < o.length; d++) jQuery("#rbkeyword_keywords").append('<div class="wp_keyword_tool_itm "><input type="checkbox" value="' + o[d] + '"><div class="wp_keyword_tool_keyword">' + o[d] + '</div><div class="wp_keyword_tool_volume">' + t[d] + '</div><div class="clear"></div></div>');
                    jQuery("#rbkeyword_body").slideDown()
                } else if ("Error" == r.status) {
                    var y = r.error;
                    jQuery("#suggestionContain").prepend('<a href="#" title="error" class="box errors corners" style="margin-top: 0pt ! important;"><span class="close">&nbsp;</span>' + y + " .</a>"), activate_close()
                }
            },
            beforeSend: function () {
                jQuery("#wp_keyword_tool_ajax-loading").removeClass("ajax-loading"), jQuery("#wp_keyword_tool_search_btn").addClass("disabled"), jQuery("#wp_keyword_tool_search_btn").attr("disabled", "disabled")
            }
        }), !1)
    }), jQuery("#rbkeyword_clean").click(function () {
        return jQuery("#rbkeyword_body").slideUp(), jQuery("#rbkeyword_keywords").slideUp(), jQuery("#rbkeyword_keywords").empty(), jQuery("#rbkeyword_keywords").slideDown(), !1
    });
    var e = 0, r = "", o = "a", t = "";
    jQuery("#keyword-search-btn").click(function () {
        jQuery("#keys-list").html('');
        e = 0;
        var d = jQuery("#keyword-input").val();
        for (r = d, jQuery("#rbkeyword_body").show(), letters = rbkeyword_letters, e; e < letters.length; e++) {
            o = letters[e], t = r + " " + o;
            var y = "http://suggestqueries.google.com/complete/search?output=toolbar&hl=uz&q=" + rbkeyword_google;
            "https:" === location.protocol && (y = "https://suggestqueries.google.com/complete/search?output=toolbar&hl=uz&q=" + rbkeyword_google), jQuery.get(y, "output=json&q=" + t + "&client=firefox", function (e) {
                var r = e[1];
                if (0 == r.length) ; else {
                    for (var o = 0; o < r.length; o++) {
                        var cnt__ = parseInt(jQuery('#keys-list').data('counter'));
                        console.log(cnt__);
                        if (cnt__ < 20) {
                            jQuery("#keys-list").append(r[o]+',');
                            jQuery('#keys-list').data('counter', cnt__+1);
                        }
                    }
                }
            }, "jsonp")
        }
    }), jQuery("#rbkeyword_list_btn").click(function () {
        var e = "";
        jQuery("#rbkeyword-list").text(""), jQuery('#rbkeyword_keywords input[type="checkbox"]:checked').each(function () {
            e = e + jQuery(this).val() + "\n"
        }), jQuery("#rbkeyword-list").text(e), jQuery("#rbkeyword-list-wrap").dialog("open")
    }), jQuery("#rbkeyword_search_txt").gcomplete({
        style: "default",
        effect: !1,
        pan: "#rbkeyword_search_txt"
    }), jQuery("#rbkeyword_check").click(function () {
        jQuery('input:checkbox').not(this).prop('checked', this.checked);
    })

    //Modal on show
    jQuery('#submit-keywords-modal').click(function() {
        jQuery('input[name=seo-keywords]').val(jQuery('#keys-list').text());
   
    });
});
