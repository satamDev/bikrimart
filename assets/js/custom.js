// JavaScript Document
let tabChange = function (val) {
    let ele = document.querySelectorAll('input[type=text]');
    if (ele[val - 1].value != '') {
        ele[val].focus();
    } else if (ele[val - 1].value == '') {
        ele[val - 2].focus();
    }
}
jQuery(document).ready(function ($) {
    var HHeight = $("header.header").outerHeight();
    $('body').css('margin-top', HHeight);
    /*
    var HTHeight = $(".hdttop").outerHeight();
    var HBHeight = $(".hdrbtm").outerHeight();
  $(window).scroll(function () {
    if ($(this).scrollTop() > HTHeight ) {
      $('header.header').addClass('fixed');
            $('.hdttop').css('margin-bottom',HBHeight);
    } else {
      $('header.header').removeClass('fixed');
            $('.hdttop').css('margin-bottom','0');
    }
  });
    */
    // oninput="digitValidate(this)"
    // $("#VerifyOtp").click(function(){
    //   $("#otpbox").hide();
    //   $("#SelectLanguage").show();
    // });
    $(".LanguageSelected").click(function () {
        $("#workas").show();
        $("#SelectLanguage").hide();
    });
    $("#workasSelected").click(function () {
        $("#whatduusell").show();
        $("#workas").hide();
    });
    //  $("#whatduusellSelected").click(function(){
    //     $("#whatduusell").hide();
    //       $("#profilesetep1").show();
    //       $("#profilestpOn").show();
    //   });
    //  $("#personalinfoSelected").click(function(){
    //     $("#profilestepTo").show();
    //     $("#whatduusell").hide();
    //     $("#profilestpOn").hide();
    //   });
    //  $("#BusinessInfoSelected").click(function(){
    //     $("#profilestepTre").show();
    //     $("#profilestepTo").hide();
    //   });
    //  $(".rtegisDone").click(function(){
    //     $("#thankyousec").show();
    //     $(".loginbox").hide();
    //   });
    //  $("#BmFruitsVegetableselected").click(function(){
    //     $("#FruitsVegetablesprofilesetep1").show();
    //     $("#workas").hide();
    //   });
    // $("#FruitsVegetablespersonalinfoSelected").click(function(){
    //     $("#FruitsVegetablesprofilestepTo").show();
    //     $("#FruitsVegetablesprofilestpOn").hide();
    //   });
    // $("#FruitsVegetablesBusinessInfoSelected").click(function(){
    //   $("#FruitsVegetablesprofilestepTre").show();
    //   $("#FruitsVegetablesprofilestepTo").hide();
    // });
    // $("#BmRestaurantselected").click(function(){
    //   $("#Restaurantprofilesetep1").show();
    //   $("#workas").hide();
    // });
    // $("#RestaurantpersonalinfoSelected").click(function(){
    //     $("#RestaurantprofilestepTo").show();
    //     $("#RestaurantprofilestpOn").hide();
    //   });
    // $("#RestaurantInfoSelected").click(function () {
    //   $("#RestaurantprofilestepTre").show();
    //   $("#RestaurantprofilestepTo").hide();
    // });
    // $("#BmServiceselected").click(function(){
    //   $("#Serviceprofilesetep1").show();
    //   $("#workas").hide();
    // });
    // $("#ServicepersonalinfoSelected").click(function () {
    //   $("#ServiceprofilestepTo").show();
    //   $("#ServiceprofilestpOn").hide();
    // });
    // $("#ServiceBusinessInfoSelected").click(function () {
    //   $("#ServiceprofilestepTre").show();
    //   $("#ServiceprofilestepTo").hide();
    // });
    $('.workasfrm input[type="radio"]').click(function () {
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".btnset").not(targetBox).hide();
        $(targetBox).show();
    });
    $("#mobilestep1btn").click(function () {
        $("#mobilestep1").slideUp();
        $("#mobilestep2").slideDown();
    });
    $(".mobilestep2btn").click(function () {
        $("#mobilestep2").slideUp();
        $("#mobilestep3").slideDown();
    });
    $(".RetailStoremobilestepbtn").click(function () {
        $("#mobilestep3").slideUp();
        $("#RetailStoremobilestep1").slideDown();
    });
    // $(".mobilewhatduusellSelectedbtn").click(function () {
    //     $("#RetailStoremobilestep1").slideUp();
    //     $("#RetailStoremobilestep2").slideDown();
    // });
    // $(".BmRestaurant ").click(function () {
    //     $("#mobilestep3").slideUp();
    //     $("#Restaurantmobilestep").slideDown();
    // });
    // $(".BmService").click(function () {
    //     $("#mobilestep3").slideUp();
    //     $("#Servicemobilestep4").slideDown();
    // });
    // $(".FruitsVegetablemobilestepbtn").click(function () {
    //     $("#mobilestep3").slideUp();
    //     $("#FruitsVegetablemobilestep").slideDown();
    // });
    // $(".thankyoubtn").click(function () {
    //     $("#RetailStoremobilestep2, #Restaurantmobilestep , #Servicemobilestep4, #FruitsVegetablemobilestep").slideUp();
    //     $("#thankyoumobilestep").slideDown();
    // });
    $(".deliveryoption").click(function () {
        if ($(this).is(":checked")) {
            $(".minimumorder").show();
        } else {
            $(".minimumorder").hide();
        }
    });
    $(".Languagebackbtn").click(function () {
        $("#mobilestep2").slideUp();
        $("#mobilestep1").slideDown();
    });
    $(".workasbackbtn").click(function () {
        $("#mobilestep3").slideUp();
        $("#mobilestep2").slideDown();
    });
    $(".FruitsVegetablebackbtn").click(function () {
        $("#FruitsVegetablemobilestep").slideUp();
        $("#mobilestep3").slideDown();
    });
    $(".RetailStorebackbtn").click(function () {
        $("#RetailStoremobilestep1").slideUp();
        $("#mobilestep3").slideDown();
    });
    $(".RetailStore2backbtn").click(function () {
        $("#RetailStoremobilestep2").slideUp();
        $("#RetailStoremobilestep1").slideDown();
    });
    $(".Restaurantbackbtn").click(function () {
        $("#Restaurantmobilestep").slideUp();
        $("#mobilestep3").slideDown();
    });
    $(".Servicebackbtn").click(function () {
        $("#Servicemobilestep4").slideUp();
        $("#mobilestep3").slideDown();
    });
    $(".mnutog").click(function () {
        $("header.header, .dashhdr").addClass("active");
    });
    $(".mnucls").click(function () {
        $("header.header, .dashhdr").removeClass("active");
    });
    $("#step1btn").click(function () {
        $("#step1").slideUp();
        //$("#step1").addClass("done");
        $('body').addClass('step1done');
        $("#step2").slideDown();
        $("#step2 .card1").addClass("done");
    });
    $('.edt').click(function () {
        $(this).next("input").removeAttr("readonly");
    });
    $(".photo").change(function () {
        const file = this.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function (event) {
                $(".imgPreview").attr("src", event.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
    $(".photo2").change(function () {
        const file = this.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function (event) {
                $(".imgPreview2").attr("src", event.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
    $(".photo3").change(function () {
        const file = this.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function (event) {
                $(".imgPreview3").attr("src", event.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
    jQuery(document).ready(function () {
        ImgUpload();
    });
    function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];
        $('.upload__inputfile').each(function () {
            $(this).on('change', function (e) {
                imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                var maxLength = $(this).attr('data-max_length');
                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);
                var iterator = 0;
                filesArr.forEach(function (f, index) {
                    if (!f.type.match('image.*')) {
                        return;
                    }
                    if (imgArray.length > maxLength) {
                        return false
                    } else {
                        var len = 0;
                        for (var i = 0; i < imgArray.length; i++) {
                            if (imgArray[i] !== undefined) {
                                len++;
                            }
                        }
                        if (len > maxLength) {
                            return false;
                        } else {
                            imgArray.push(f);
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                imgWrap.append(html);
                                iterator++;
                            }
                            reader.readAsDataURL(f);
                        }
                    }
                });
            });
        });
        $('body').on('click', ".upload__img-close", function (e) {
            var file = $(this).parent().data("file");
            for (var i = 0; i < imgArray.length; i++) {
                if (imgArray[i].name === file) {
                    imgArray.splice(i, 1);
                    break;
                }
            }
            $(this).parent().parent().remove();
        });
    }
    $('.arwsub').on('click', function (e) {
        e.preventDefault();
    });
    !function ($) { "use strict"; var b = { tagClass: function (a) { return "badge badge-info" }, focusClass: "focus", itemValue: function (a) { return a ? a.toString() : a }, itemText: function (a) { return this.itemValue(a) }, itemTitle: function (a) { return null }, freeInput: !0, addOnBlur: !0, maxTags: void 0, maxChars: void 0, confirmKeys: [13, 44], delimiter: ",", delimiterRegex: null, cancelConfirmKeysOnEmpty: !1, onTagExists: function (b, a) { a.hide().fadeIn() }, trimValue: !1, allowDuplicates: !1, triggerChange: !0 }; function a(a, b) { this.isInit = !0, this.itemsArray = [], this.$element = $(a), this.$element.hide(), this.isSelect = "SELECT" === a.tagName, this.multiple = this.isSelect && a.hasAttribute("multiple"), this.objectItems = b && b.itemValue, this.placeholderText = a.hasAttribute("placeholder") ? this.$element.attr("placeholder") : "", this.inputSize = Math.max(1, this.placeholderText.length), this.$container = $('<div class="bootstrap-tagsinput"></div>'), this.$input = $('<input type="text" placeholder="' + this.placeholderText + '"/>').appendTo(this.$container), this.$element.before(this.$container), this.build(b), this.isInit = !1 } function c(a, b) { if ("function" != typeof a[b]) { var c = a[b]; a[b] = function (a) { return a[c] } } } function d(a, b) { if ("function" != typeof a[b]) { var c = a[b]; a[b] = function () { return c } } } a.prototype = { constructor: a, add: function (b, j, c) { var a = this; if ((!a.options.maxTags || !(a.itemsArray.length >= a.options.maxTags)) && (!1 === b || b)) { if ("string" == typeof b && a.options.trimValue && (b = $.trim(b)), "object" == typeof b && !a.objectItems) throw "Can't add objects when itemValue option is not set"; if (!b.toString().match(/^\s*$/)) { if (a.isSelect && !a.multiple && a.itemsArray.length > 0 && a.remove(a.itemsArray[0]), "string" == typeof b && "INPUT" === this.$element[0].tagName) { var n = a.options.delimiterRegex ? a.options.delimiterRegex : a.options.delimiter, d = b.split(n); if (d.length > 1) { for (var e = 0; e < d.length; e++)this.add(d[e], !0); j || a.pushVal(a.options.triggerChange); return } } var g = a.options.itemValue(b), k = a.options.itemText(b), o = a.options.tagClass(b), l = a.options.itemTitle(b), p = $.grep(a.itemsArray, function (b) { return a.options.itemValue(b) === g })[0]; if (p && !a.options.allowDuplicates) { if (a.options.onTagExists) { var q = $(".badge", a.$container).filter(function () { return $(this).data("item") === p }); a.options.onTagExists(b, q) } return } if (!(a.items().toString().length + b.length + 1 > a.options.maxInputLength)) { var m = $.Event("beforeItemAdd", { item: b, cancel: !1, options: c }); if (a.$element.trigger(m), !m.cancel) { a.itemsArray.push(b); var h = $('<span class="badge ' + f(o) + (null !== l ? '" title="' + l : "") + '">' + f(k) + '<span data-role="remove"></span></span>'); h.data("item", b), a.findInputWrapper().before(h), h.after(" "); var r = $('option[value="' + encodeURIComponent(g) + '"]', a.$element).length || $('option[value="' + f(g) + '"]', a.$element).length; if (a.isSelect && !r) { var i = $("<option selected>" + f(k) + "</option>"); i.data("item", b), i.attr("value", g), a.$element.append(i) } j || a.pushVal(a.options.triggerChange), (a.options.maxTags === a.itemsArray.length || a.items().toString().length === a.options.maxInputLength) && a.$container.addClass("bootstrap-tagsinput-max"), $(".typeahead, .twitter-typeahead", a.$container).length && a.$input.typeahead("val", ""), this.isInit ? a.$element.trigger($.Event("itemAddedOnInit", { item: b, options: c })) : a.$element.trigger($.Event("itemAdded", { item: b, options: c })) } } } } }, remove: function (b, e, c) { var a = this; if (a.objectItems && (b = (b = "object" == typeof b ? $.grep(a.itemsArray, function (c) { return a.options.itemValue(c) == a.options.itemValue(b) }) : $.grep(a.itemsArray, function (c) { return a.options.itemValue(c) == b }))[b.length - 1]), b) { var d = $.Event("beforeItemRemove", { item: b, cancel: !1, options: c }); if (a.$element.trigger(d), d.cancel) return; $(".badge", a.$container).filter(function () { return $(this).data("item") === b }).remove(), $("option", a.$element).filter(function () { return $(this).data("item") === b }).remove(), -1 !== $.inArray(b, a.itemsArray) && a.itemsArray.splice($.inArray(b, a.itemsArray), 1) } e || a.pushVal(a.options.triggerChange), a.options.maxTags > a.itemsArray.length && a.$container.removeClass("bootstrap-tagsinput-max"), a.$element.trigger($.Event("itemRemoved", { item: b, options: c })) }, removeAll: function () { for ($(".badge", this.$container).remove(), $("option", this.$element).remove(); this.itemsArray.length > 0;)this.itemsArray.pop(); this.pushVal(this.options.triggerChange) }, refresh: function () { var a = this; $(".badge", a.$container).each(function () { var b = $(this), c = b.data("item"), d = a.options.itemValue(c), e = a.options.itemText(c), g = a.options.tagClass(c); b.attr("class", null), b.addClass("badge " + f(g)), b.contents().filter(function () { return 3 == this.nodeType })[0].nodeValue = f(e), a.isSelect && $("option", a.$element).filter(function () { return $(this).data("item") === c }).attr("value", d) }) }, items: function () { return this.itemsArray }, pushVal: function () { var a = this, b = $.map(a.items(), function (b) { return a.options.itemValue(b).toString() }); a.$element.val(b, !0), a.options.triggerChange && a.$element.trigger("change") }, build: function (i) { var a = this; if (a.options = $.extend({}, b, i), a.objectItems && (a.options.freeInput = !1), c(a.options, "itemValue"), c(a.options, "itemText"), d(a.options, "tagClass"), a.options.typeahead) { var f = a.options.typeahead || {}; d(f, "source"), a.$input.typeahead($.extend({}, f, { source: function (d, e) { function c(c) { for (var d = [], b = 0; b < c.length; b++) { var f = a.options.itemText(c[b]); g[f] = c[b], d.push(f) } e(d) } this.map = {}; var g = this.map, b = f.source(d); $.isFunction(b.success) ? b.success(c) : $.isFunction(b.then) ? b.then(c) : $.when(b).then(c) }, updater: function (b) { return a.add(this.map[b]), this.map[b] }, matcher: function (a) { return -1 !== a.toLowerCase().indexOf(this.query.trim().toLowerCase()) }, sorter: function (a) { return a.sort() }, highlighter: function (a) { var b = new RegExp("(" + this.query + ")", "gi"); return a.replace(b, "<strong>$1</strong>") } })) } if (a.options.typeaheadjs) { var e = a.options.typeaheadjs; $.isArray(e) || (e = [null, e]), $.fn.typeahead.apply(a.$input, e).on("typeahead:selected", $.proxy(function (d, b, f) { var c = 0; e.some(function (a, b) { return a.name === f && (c = b, !0) }), e[c].valueKey ? a.add(b[e[c].valueKey]) : a.add(b), a.$input.typeahead("val", "") }, a)) } a.$container.on("click", $.proxy(function (b) { a.$element.attr("disabled") || a.$input.removeAttr("disabled"), a.$input.focus() }, a)), a.options.addOnBlur && a.options.freeInput && a.$input.on("focusout", $.proxy(function (b) { 0 === $(".typeahead, .twitter-typeahead", a.$container).length && (a.add(a.$input.val()), a.$input.val("")) }, a)), a.$container.on({ focusin: function () { a.$container.addClass(a.options.focusClass) }, focusout: function () { a.$container.removeClass(a.options.focusClass) } }), a.$container.on("keydown", "input", $.proxy(function (d) { var b = $(d.target), c = a.findInputWrapper(); if (a.$element.attr("disabled")) { a.$input.attr("disabled", "disabled"); return } switch (d.which) { case 8: if (0 === g(b[0])) { var e = c.prev(); e.length && a.remove(e.data("item")) } break; case 46: if (0 === g(b[0])) { var f = c.next(); f.length && a.remove(f.data("item")) } break; case 37: var h = c.prev(); 0 === b.val().length && h[0] && (h.before(c), b.focus()); break; case 39: var i = c.next(); 0 === b.val().length && i[0] && (i.after(c), b.focus()) }var j = b.val().length, k = Math.ceil(j / 5), l = j + k + 1; b.attr("size", Math.max(this.inputSize, l)) }, a)), a.$container.on("keypress", "input", $.proxy(function (d) { var b = $(d.target); if (a.$element.attr("disabled")) { a.$input.attr("disabled", "disabled"); return } var c = b.val(), e = a.options.maxChars && c.length >= a.options.maxChars; a.options.freeInput && (h(d, a.options.confirmKeys) || e) && (0 !== c.length && (a.add(e ? c.substr(0, a.options.maxChars) : c), b.val("")), !1 === a.options.cancelConfirmKeysOnEmpty && d.preventDefault()); var f = b.val().length; b.attr("size", Math.max(this.inputSize, f + Math.ceil(f / 5) + 1)) }, a)), a.$container.on("click", "[data-role=remove]", $.proxy(function (b) { a.$element.attr("disabled") || a.remove($(b.target).closest(".badge").data("item")) }, a)), a.options.itemValue === b.itemValue && ("INPUT" === a.$element[0].tagName ? a.add(a.$element.val()) : $("option", a.$element).each(function () { a.add($(this).attr("value"), !0) })) }, destroy: function () { this.$container.off("keypress", "input"), this.$container.off("click", "[role=remove]"), this.$container.remove(), this.$element.removeData("tagsinput"), this.$element.show() }, focus: function () { this.$input.focus() }, input: function () { return this.$input }, findInputWrapper: function () { for (var a = this.$input[0], b = this.$container[0]; a && a.parentNode !== b;)a = a.parentNode; return $(a) } }, $.fn.tagsinput = function (c, d, e) { var b = []; return (this.each(function () { var f = $(this).data("tagsinput"); if (f) { if (c || d) { if (void 0 !== f[c]) { if (3 === f[c].length && void 0 !== e) var g = f[c](d, null, e); else var g = f[c](d); void 0 !== g && b.push(g) } } else b.push(f) } else f = new a(this, c), $(this).data("tagsinput", f), b.push(f), "SELECT" === this.tagName && $("option", $(this)).attr("selected", "selected"), $(this).val($(this).val()) }), "string" == typeof c) ? b.length > 1 ? b : b[0] : b }, $.fn.tagsinput.Constructor = a; var e = $("<div />"); function f(a) { return a ? e.text(a).html() : "" } function g(a) { var b = 0; if (document.selection) { a.focus(); var c = document.selection.createRange(); c.moveStart("character", -a.value.length), b = c.text.length } else (a.selectionStart || "0" == a.selectionStart) && (b = a.selectionStart); return b } function h(c, a) { var b = !1; return $.each(a, function (g, a) { if ("number" == typeof a && c.which === a) return b = !0, !1; if (c.which === a.which) { var d = !a.hasOwnProperty("altKey") || c.altKey === a.altKey, e = !a.hasOwnProperty("shiftKey") || c.shiftKey === a.shiftKey, f = !a.hasOwnProperty("ctrlKey") || c.ctrlKey === a.ctrlKey; if (d && e && f) return b = !0, !1 } }), b } $(function () { $("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput() }) }(window.jQuery)
    $('.frm input[type="radio"]').click(function () {
        $('.LanguageSelected').removeAttr("disabled", false);
        $(".LanguageSelected").removeClass("dsbl1");
    });
    $('.workasfrm input[type="radio"]').click(function () {
        $('.cmnbtn.btn1').removeAttr("disabled", false);
        $(".cmnbtn.btn1").removeClass("dsbl1");
    });
    $('#otpbox input[type="text"]').click(function () {
        $('#otpbox .btn1').removeAttr("disabled", false);
        $("#otpbox .btn1").removeClass("dsbl1");
    });
    //   if($('#otpbox input[type="text"]').click) {
    //     $('#otpbox .btn1').removeAttr("disabled", false);
    //     $("#otpbox .btn1").removeClass("dsbl1");
    // } else {
    // }
    // $(document).click(function(e)
    //  {
    //      if($(e.srcElement).attr('id')=='id')
    //      {
    //          alert('click on #id');
    //      }
    //      else
    //      {
    //           alert('click on something else'); 
    //      }
    //  });
    $('.selectretailcatsell input[type="checkbox"]').click(function () {
        $('.selectretailcatsell .btn1').removeAttr("disabled", false);
        $(".selectretailcatsell .btn1").removeClass("dsbl1");
    });
});
$('#gname, #gname2').bind('keyup change', function () {
    if (this.value.length > 0) {
        $('#number').show();
    }
    else {
        $('#number').hide();
    }
});