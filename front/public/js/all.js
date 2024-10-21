"use strict";

var is_mobile = window.matchMedia("all and (max-width: 600px)").matches,
  is_tablet = window.matchMedia("all and (max-width: 1100px)").matches;
$(function () {
  $.fancybox.defaults.hash = !1, $.fancybox.defaults.animationEffect = "fade", $.fancybox.defaults.loop = !0, check_expand_text(), $(window).on("resize", function () {
    is_mobile = window.matchMedia("all and (max-width: 600px)").matches, is_tablet = window.matchMedia("all and (max-width: 1100px)").matches;
  }), $(".js-close-modal").on("click", function (e) {
    $(e.currentTarget).closest(".modal").removeClass("active"), $("html").removeClass("no-scroll");
  }), $(".js-open-modal").on("click", function (e) {
    var t = $(e.currentTarget).attr("href");
    return open_modal(t), !1;
  }), $(document).on("click", ".js-anchor", function (e) {
    var t = $(e.currentTarget),
      a = $(t.attr("href")),
      s = $(".header").height(),
      l = a.offset().top;
    $(".catalog-nav").length > 0 && (s += $(".catalog-nav").height()), $("body,html").animate({
      scrollTop: l - s
    }, 600);
  }), $(document).on("click", ".show-more-btn", function (e) {
    var t = $(e.currentTarget).closest(".show-more-block"),
      a = t.find(".show-more-text"),
      s = gsap.timeline();
    t.hasClass("has-expand") && (t.toggleClass("show"), t.hasClass("show") ? to(a, {
      height: "auto",
      duration: .6,
      ease: "easeTextCollapse"
    }, s) : to(a, {
      height: "15rem",
      duration: .6,
      ease: "easeTextCollapse"
    }, s));
  }), $(".js-close-modal-mobile").on("click", function (e) {
    $(".modal-mobile").removeClass("active");
  }), $(".js-open-modal-mobile").on("click", function (e) {
    var t = $(e.currentTarget).attr("href");
    $(t).addClass("active");
  });
});
var check_expand_text = function check_expand_text() {
    $(".show-more-text").each(function (e, t) {
      $(t).css("height", "15rem");
      $(t).find(".show-more-text__content").innerHeight() > $(t).innerHeight() ? $(t).closest(".show-more-block").addClass("has-expand") : ($(t).closest(".show-more-block").removeClass("has-expand"), $(t).css("height", "auto"));
    }), $(document).on("click", ".js-accordion-head", function (e) {
      var t = $(e.currentTarget);
      t.parent().toggleClass("active"), t.siblings(".js-accordion-body").slideToggle();
    });
  },
  open_modal = function open_modal(e) {
    $(e).addClass("active"), $("html").addClass("no-scroll");
  },
  close_all_modal = function close_all_modal() {
    $(".modal").removeClass("active"), $("html").removeClass("no-scroll");
  },
  to = function to(e, t) {
    var a = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : gsap;
    var s = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : ">";
    e && 0 !== e.length && a.to(e, t, s);
  },
  fromTo = function fromTo(e, t, a) {
    var s = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : gsap;
    var l = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : ">";
    e && 0 !== e.length && s.fromTo(e, t, a, l);
  };
$(function () {
  init_checkbox_style(), init_checkbox_swicher(), init_radio_style(), init_tel_mask(), file_upload_init(), $(".input input,.input textarea").each(function (e, t) {
    $(t).val().length > 0 ? $(t).closest(".input").addClass("has-val") : $(t).closest(".input").removeClass("has-val");
  }), $(".js-form-validate").each(function () {
    $(this).hasClass("js-form-validate-no-disable") || (form_validate($(this), !1) ? $(".js-form-validate-btn").removeClass("disabled") : $(".js-form-validate-btn").addClass("disabled"));
  }), $(".js-form-validate").find("select,input,textarea").on("input", function () {
    $(".js-form-validate").hasClass("js-form-validate-no-disable") || (form_validate($(this).closest("form"), !1) ? $(".js-form-validate-btn").removeClass("disabled") : $(".js-form-validate-btn").addClass("disabled"), $(this).val().length > 0 ? $(this).closest(".input").addClass("has-val") : $(this).closest(".input").removeClass("has-val"));
  }), $(".js-form-validate").find("select,input,textarea").on("change", function () {
    $(".js-form-validate").hasClass("js-form-validate-no-disable") || (form_validate($(this).closest("form"), !1) ? $(".js-form-validate-btn").removeClass("disabled") : $(".js-form-validate-btn").addClass("disabled"));
  }), $(".js-form-validate-btn").on("click", function (e) {
    if (!1 === form_validate($(".js-form-validate"), !0)) return e.stopImmediatePropagation(), e.stopPropagation(), !1;
  }), $(document).on("input", ".input.error input", function (e) {
    $(e.currentTarget).closest(".input").removeClass("error");
  }), $(".js-input-limit input,.js-input-limit textarea").on("input", function (e) {
    setTimeout(function () {
      var t = $(e.currentTarget),
        a = t.closest(".input"),
        s = parseInt(t.attr("data-limit")),
        l = t.val();
      if (!s) return !0;
      a.find(".js-input-limit-num").text(l.length), l.length > s ? a.addClass("error") : a.removeClass("error");
    }, 0);
  }), $(".input-field").append("<div class='reset-field'></div>"), $(document).on("click", ".reset-field", function (e) {
    var t = $(e.currentTarget),
      a = t.closest(".input");
    t.siblings("input,textarea").val(""), a.removeClass("has-val");
  });
});
var file_upload_init = function file_upload_init() {
    $(".js-file").each(function (e, t) {
      var a = $(t).find(".js-file-list"),
        s = $(t).find('input[type="file"]');
      function l() {
        var e = [];
        a.find(".file-item span:first-child").each(function () {
          var t = $(this).text(),
            a = new Blob([t], {
              type: "image/jpeg"
            }),
            s = new File([a], t, {
              type: "image/jpeg"
            });
          e.push(s);
        });
        var t = new DataTransfer();
        for (var _i = 0, _e = e; _i < _e.length; _i++) {
          var _a = _e[_i];
          t.items.add(_a);
        }
        s[0].files = t.files, form_validate(a.closest("form"), !1) ? $(".js-form-validate-btn").removeClass("disabled") : $(".js-form-validate-btn").addClass("disabled"), r();
      }
      s.on("change", function (e) {
        var t = e.target.files;
        var _loop = function _loop() {
            var s = t[_e2];
            if (!s.type.match("image/jpeg")) {
              alert("Пожалуйста, выберите только файлы формата JPEG/JPG.");
              return 0; // continue
            }
            if (s.size > 10485760) {
              alert("Размер файла превышает максимальный лимит в 10МБ.");
              return 0; // continue
            }
            var r = $("<div>").addClass("file-item"),
              i = $("<img>").addClass("preview-image"),
              o = $("<span>").addClass("delete-btn"),
              n = new FileReader();
            n.onload = function (e) {
              i.attr("src", e.target.result);
            }, n.readAsDataURL(s), o.on("click", function () {
              r.remove(), l();
            }), r.append(i, o), a.append(r);
          },
          _ret;
        for (var _e2 = 0; _e2 < t.length; _e2++) {
          _ret = _loop();
          if (_ret === 0) continue;
        }
        l();
      });
      var r = function r() {
        a.find(".file-item").length > 0 ? $(t).addClass("has-file") : $(t).removeClass("has-file");
      };
    });
  },
  init_tel_mask = function init_tel_mask() {
    $('[type="tel"]').each(function (e, t) {
      var a = "+7 (000) 000 00 00";
      IMask(t, {
        mask: a,
        placeholderChar: "_"
      }), $(t).on("input", function (e) {
        var t = e.target;
        $(t).val().length < a.length ? $(t).closest(".input,.input-modal").removeClass("phone-complete") : $(t).closest(".input,.input-modal").addClass("phone-complete");
      });
    });
  };
function form_validate(e) {
  var t = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : !0;
  var a = !1;
  e.find(".required input, .required select, .required textarea").each(function () {
    var e = $(this).siblings(".input-hint");
    check_input($(this), t) || (a = !0, t && e.text("Обязательное поле"));
  });
  var s = e.find(".gallery-itm-img");
  if (s.length > 0) {
    var _e3 = s.find(".change-avatar.empty");
    _e3.length > 0 && _e3.hasClass("empty") && (a = !0, t && _e3.addClass("error"));
  }
  var l = e.find(".js-employer-table");
  return !(l.length > 0 && 0 === l.find("tr[data-id]").length) && !a;
}
function check_input(e) {
  var t = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : !1;
  var a = e.closest(".input"),
    s = a.find(".input-hint");
  if (e.closest(".hide").length > 0) return !0;
  if (t && "email" !== e.attr("type") && (s.text(""), a.removeClass("error")), "checkbox" === e.attr("type") && !1 === e.prop("checked")) return !!(e.hasClass("js-required-checkbox-group") && e.closest(".required").find(".js-required-checkbox-group:checked").length > 0) || (t && (s.text("Поле обязательно для заполнения"), a.addClass("error")), !1);
  if ("radio" === e.attr("type")) {
    var _t = e.attr("name");
    if (0 === $('input[name="' + _t + '"]:checked').length) return !1;
  }
  if ("file" === e.attr("type")) {
    if (e.closest(".js-file").find(".file-item").length > 0) return !0;
    t && (s.text("Превышен лимит количества символов"), a.addClass("error"));
  }
  if (e.val().length <= 0) return t && (s.text("Поле обязательно для заполнения"), a.addClass("error")), !1;
  if ("email" === e.attr("type")) {
    if (null == e.val().match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) && e.val().length > 0) return s.text("Неверно заполнен e-mail"), a.addClass("error"), !1;
    s.text(""), a.removeClass("error");
  }
  if ("tel" === e.attr("type") && !a.hasClass("phone-complete")) return t && (s.text("Поле обязательно для заполнения"), a.addClass("error")), !1;
  if (a.hasClass("js-input-limit") && e.attr("data-limit")) {
    var l = parseInt(e.attr("data-limit")),
      r = e.val();
    if (t && (s.text("Превышен лимит количества символов"), a.addClass("error")), r.length > l) return a.addClass("error"), !1;
    a.removeClass("error");
  }
  return 0 !== e.val().length;
}
function form_start_validate(e) {
  var t = !1;
  return e.find(".required input, .required textarea").each(function () {
    check_input($(this)) || (t = !0);
  }), t;
}
function init_radio_style() {
  $("input.js-radio").each(function () {
    if (!$(this).parent().is(".radio_box")) {
      var e = $(this).attr("placeholder");
      $(this).wrap('<label class="radio_box"></label>'), $(this).after('<span class="radio_box__item"></span><span class="radio_box__text">' + e + "</span>");
    }
    $(this).prop("checked") ? $(this).parent(".radio_box").addClass("checked") : $(this).parent(".radio_box").removeClass("checked");
  });
}
function init_checkbox_style() {
  $("input.js-checkbox").each(function () {
    if (!$(this).closest(".check_box").length > 0) {
      var e = $(this).attr("placeholder");
      $(this).wrap('<label class="check_box"></label>'), $(this).after('<span class="check_box__item"></span><span class="check_box__text">' + e + "</span>"), $(this).prop("disabled") && $(this).parent().addClass("disabled");
    }
    $(this).prop("checked") ? $(this).parent(".check_box").addClass("checked") : $(this).parent(".check_box").removeClass("checked");
  });
}
function init_checkbox_swicher() {
  $("input.js-checkbox-switcher").each(function () {
    if (!$(this).parent().is(".switcher")) {
      var e = $(this).attr("placeholder");
      $(this).wrap('<label class="switcher"></label>'), $(this).after('<span class="switcher__text">' + e + '</span><span class="switcher__item"></span>'), $(this).prop("disabled") && $(this).parent().addClass("disabled");
    }
    $(this).prop("checked") ? $(this).parent(".check_box").addClass("checked") : $(this).parent(".check_box").removeClass("checked");
  });
}
$(function () {
  check_header_height(), check_header_progressbar(), $(".js-menu-btn").on("click", function (e) {
    $(".js-menu-btn .gamburger,.main-menu").addClass("active"), $("html").addClass("no-scroll");
  }), $(".js-close-main-menu").on("click", function (e) {
    $(".js-menu-btn .gamburger,.main-menu").removeClass("active"), $("html").removeClass("no-scroll");
  }), $(".js-main-menu-search").on("input", function (e) {
    var t = $(e.currentTarget).val(),
      a = $(".main-menu-link");
    if (a.parent().removeClass("hide"), 0 === t.length) return !1;
    a.each(function (e, a) {
      -1 === $(a).text().toLowerCase().indexOf(t) && $(a).parent().addClass("hide");
    });
  }), $(".main-menu-head__back").on("click", function (t) {
    $(t.currentTarget);
    var a = $(".main-menu-content__step.active").last();
    return 0 === a.length && $(".js-close-main-menu").click(), a.removeClass("active"), a.find(".main-menu-list").removeClass("active"), e(), !1;
  });
  var e = function e() {
    $(".main-menu-link").parent().removeClass("hide"), $(".js-main-menu-search").val("");
  };
  $(".js-open-mobile-menu").on("click", function (e) {
    $(".js-open-mobile-menu,.mobile-menu").toggleClass("active"), $("html").toggleClass("no-scroll");
  }), $(".js-close-mobile-menu").on("click", function (e) {
    $(".js-open-mobile-menu,.mobile-menu").removeClass("active"), $("html").removeClass("no-scroll");
  }), $(document).on("scroll", function (e) {
    check_header_progressbar(), check_header_height();
  }), $(".main-menu-fade").on("mouseenter", function (e) {
    $(".main-menu-content__step.step1").nextAll().removeClass("active").find(".main-menu-list").removeClass("active");
  }), $(".main-menu-link").on("mouseenter", function (t) {
    var a = $(t.currentTarget),
      s = a.attr("data-id");
    if (e(), !s) {
      return a.closest(".main-menu-content__step").nextAll().removeClass("active").find(".main-menu-list").removeClass("active"), !1;
    }
    var l = $(".main-menu-list[data-id=\"".concat(s, "\"]")),
      r = l.closest(".main-menu-content__step");
    r.nextAll().removeClass("active").find(".main-menu-list").removeClass("active"), r.addClass("active"), l.siblings(".main-menu-list").removeClass("active"), l.addClass("active");
  }), $(".js-city-search").on("input", function (e) {
    var t = $(e.currentTarget).val(),
      a = $(".modal-city-list li");
    if (a.removeClass("hide"), 0 === t.length) return !1;
    a.each(function (e, a) {
      -1 === $(a).text().toLowerCase().indexOf(t) && $(a).addClass("hide");
    });
  }), $(".mobile-menu-list .has-child>a").on("click", function (e) {
    var t = $(e.currentTarget);
    return t.parent().toggleClass("active"), t.siblings("ul").slideToggle(), !1;
  }), $(".main-menu-link[data-id]").on("click", function (e) {
    $(e.currentTarget);
    return !is_tablet;
  }), $(".js-open-search").on("click", function (e) {
    $(e.currentTarget);
    return $(".header-search").toggleClass("active"), !1;
  });
});
var check_header_progressbar = function check_header_progressbar() {
    var e = 100 - $(window).scrollTop() / (($(document).height() - window.visualViewport.height) / 100);
    $(".header-progress__bar").css("transform", "translateX(-" + Math.round(100 * e) / 100 + "%)");
  },
  check_header_height = function check_header_height() {
    if (is_tablet) {
      var e = $(".header")[0].getBoundingClientRect().top + $(".header").outerHeight();
      $(".wrapper").css("--header-offset", e + "px");
    }
  };
function init_ymap_script() {
  var e = document.createElement("script");
  e.type = "text/javascript", e.className = "js-ymap-script", e.async = "true", e.src = "https://api-maps.yandex.ru/2.1/?lang=ru-RU&onload=getYaMap&apikey=2c5f0b7b-a735-4237-9221-111522d92ba7", document.getElementsByTagName("body")[0].appendChild(e);
}
function getYaMap() {
  var e,
    t,
    a = [];
  function s(a) {
    var s = $("#" + a);
    if (s.addClass("init"), s.length <= 0) return !1;
    e = new ymaps.Map(a, {
      center: [0, 0],
      zoom: 11
    }, {
      searchControlProvider: "yandex#search",
      maxZoom: 16
    }), t = new ymaps.ObjectManager({
      clusterize: !1,
      clusterHasBalloon: !1,
      geoObjectOpenBalloonOnClick: !0,
      clusterOpenBalloonOnClick: !1,
      gridSize: 256
    }), e.behaviors.disable(["scrollZoom"]), e.geoObjects.add(t), l(s.attr("data-template-path"), s);
  }
  0 == $(".js-ymap-script").length ? init_ymap_script() : ymaps.ready(function () {
    s("contact-map"), s("contact-map2");
  });
  var l = function l(t, s) {
    a = [], e.geoObjects.removeAll();
    var l = s.attr("data-coord").split(","),
      r = s.attr("data-name"),
      i = new ymaps.Placemark([l[0], l[1]], {
        balloonContent: r
      }, {
        iconLayout: "default#image",
        balloonPanelMaxMapArea: 0,
        iconImageHref: t + "/img/ico/placeholder.svg",
        iconImageSize: [28, 38],
        iconImageOffset: [-14, -38]
      });
    a.push(i), a.forEach(function (t) {
      e.geoObjects.add(t);
    }), e.setCenter(l), e.setZoom(14);
  };
}
jQuery(function (e) {
  e("#contact-map").length > 0 && init_ymap_script();
}), $(function () {
  // $(".js-basket-remove").on("click", function (e) {
  //   $(e.currentTarget).closest(".basket-itm").remove();
  // }), 
  $(".basket-itm .js-checkbox").on("click", function (e) {
    $(".basket-itm .js-checkbox:checked").length > 0 ? $(".js-basket-remove-all-btn").removeClass("disabled") : $(".js-basket-remove-all-btn").addClass("disabled");
  }), 
  // $(".js-basket-remove-all").on("click", function (e) {
  //   $(".basket-itm .js-checkbox:checked").closest(".basket-itm").remove();
  // }), 
  $(".js-basket-select-all").on("change", function (e) {
    $(e.currentTarget).prop("checked") ? ($(".basket-itm .js-checkbox").prop("checked", !0), $(".js-basket-remove-all-btn").removeClass("disabled")) : ($(".basket-itm .js-checkbox").prop("checked", !1), $(".js-basket-remove-all-btn").addClass("disabled"));
  });
}), $(function () {
  !function () {
    var e = $(".js-blog-index-list"),
      t = $(".blog-content h2, .blog-content h3, .blog-content h4");
    e.html(""), t.each(function (t) {
      var a = $(this)[0].tagName,
        s = "blog-anchor-" + t;
      $(this).attr("id", s), e.append('<li class="li-' + a + '"><a href="#' + s + '" class="js-anchor">' + $(this).text() + "</a></li>");
    });
  }(), $(".share-block-link").on("click", function (e) {
    $(e.currentTarget);
    $(".ya-share2__link").trigger("click");
  });
}), $(function () {
  $(".range-select").length > 0 && $(".range-select").each(function (e, t) {
    var a = parseInt($(t).attr("data-min")),
      s = parseInt($(t).attr("data-max"));
    $(t).rangeSelect({
      min_val: a,
      max_val: s
    });
  }), $(".quick-filter-more-btn").on("click", function (e) {
    var t = $(e.currentTarget),
      a = $(".quick-filter-list"),
      s = gsap.timeline();
    t.toggleClass("show"), a.toggleClass("show"), a.hasClass("show") ? to(a, {
      height: "auto",
      duration: .6,
      ease: "easeTextCollapse"
    }, s) : to(a, {
      height: "2rem",
      duration: .6,
      ease: "easeTextCollapse"
    }, s);
  }), $(".js-change-catalog-view").on("click", function (e) {
    var t = $(e.currentTarget),
      a = t.attr("data-catalog-view");
    e.preventDefault(), "list" === a ? $(".js-view-parent").addClass("view-list") : $(".js-view-parent").removeClass("view-list"), $(".js-change-catalog-view").removeClass("active"), t.addClass("active"), product_slider_resize();
  }), $(document).on("input", ".js-search-modal-filter", function (e) {
    var t = $(e.currentTarget).val().toLowerCase(),
      a = $("#modal-catalog-filter .filter-itm"),
      s = $("#modal-catalog-filter .catalog-filter-accordion");
    if (0 === t.length) return a.removeClass("disable"), s.removeClass("disable"), !1;
    a.addClass("disable"), s.addClass("disable"), a.each(function (e, a) {
      -1 !== $(a).text().toLowerCase().indexOf(t) && ($(a).removeClass("disable"), $(a).closest(".catalog-filter-accordion").removeClass("disable"));
    });
  });
}), $(function () {
  counter_init(), product_slider_init(), product_slider_events(), catalog_arrow_check(), $(document).on("click", ".price-type-val", function (e) {
    var t = $(e.currentTarget),
      a = t.closest(".price-block"),
      s = t.attr("data-type");
    a.find(".price-block-val__itm").removeClass("active"), a.find(".price-block-val__itm[data-type='".concat(s, "']")).addClass("active"), a.find(".price-type-val").removeClass("active"), t.addClass("active"), roll_change();
  }), $(document).on("click", ".catalog-slider__preview__img", function (e) {
    var t = $(e.currentTarget).attr("data-image-detail");
    $(".catalog-slider__img img").attr("src", t);
  }), $(window).on("scroll", function (e) {
    var t = $(window).scrollTop(),
      a = $(".header").height() + $(".catalog-nav").height();
    catalog_arrow_check(), $(".js-scroll-section").each(function (e, s) {
      var l = $(s).offset().top,
        r = l + $(s).height();
      if (t > l - a - 40 && t < r) {
        var _e4 = $(s).attr("id"),
          _t2 = $(".catalog-nav-itm[href=\"#".concat(_e4, "\"]"));
        var _a2 = 0;
        _t2.parent().prevAll().length > 0 ? $(".catalog-nav").addClass("show-product") : $(".catalog-nav").removeClass("show-product"), _t2.parent().prevAll().each(function (e, t) {
          _a2 += parseInt($(t).outerWidth(!0));
        }), _t2.hasClass("active") || ($(".catalog-nav").stop(), $(".catalog-nav").animate({
          scrollLeft: _a2
        }, 600)), $(".catalog-nav-itm").removeClass("active"), _t2.addClass("active");
      }
    });
  }), $(document).on("click", ".js-change-calc-type", function (e) {
    var t = $(e.currentTarget).attr("data-type");
    $(".modal-calc").removeClass("show-area show-size").addClass("show-".concat(t));
  }), $('#modal-calc input[type="number"]').on("input", function (e) {
    var t = $(e.currentTarget),
      a = parseInt(t.val());
    a < 0 && (a = 0), t.val(a);
  }), $(".js-form-calc").on("submit", function (e) {
    var t = $(e.currentTarget),
      a = t.find('[name="type"]:checked'),
      s = t.find('[name="area"]'),
      l = t.find('[name="width"]'),
      r = t.find('[name="height"]');
    if (t.closest(".modal-calc").hasClass("show-area")) {
      if (0 === s.val().length) return s.closest(".input").addClass("error"), !1;
    } else {
      if (0 === l.val().length) return l.closest(".input").addClass("error"), !1;
      if (0 === r.val().length) return r.closest(".input").addClass("error"), !1;
    }
    return 0 === a.length ? ($(".calc-cart").addClass("error"), !1) : ($(".js-calc-width-val").text("".concat(l.val(), " \u043C")), $(".js-calc-height-val").text("".concat(r.val(), " \u043C")), $(".js-calc-area-val").text("".concat(s.val(), " \u043C")), $(".js-calc-type-val").text("".concat(a.val())), t.slideUp(), t.next(".calc-result").slideDown(), !1);
  }), $(".calc-cart input").on("input", function (e) {
    $(".calc-cart").removeClass("error");
  }), $(".js-calc-back").on("click", function (e) {
    var t = $(e.currentTarget).closest(".calc-result");
    return t.slideUp(), t.prev(".js-form-calc").slideDown(), !1;
  }), $(".roll-width input").on("change", function (e) {
    var t = $(e.currentTarget).val();
    $(".roll-width").removeClass("error"), $(".js-roll-width").text(t), roll_change();
  });
});
var catalog_arrow_check = function catalog_arrow_check() {
    $(window).scrollTop() > 1500 ? $(".arrow-top").removeClass("arrow-top--hide") : $(".arrow-top").addClass("arrow-top--hide");
  },
  counter_init = function counter_init() {
    $(document).on("click", ".js-add-cart", function (e) {
      var t = $(e.currentTarget);
      if ($('[name="roll-width"]').length > 0 && 0 === $('[name="roll-width"]:checked').length) return $(".roll-width").addClass("error"), e.stopImmediatePropagation(), !1;
      t.parent().addClass("show-counter"), t.parent().find(".add-cart-counter__input").val("1"), roll_change();
    }), $(document).on("click", ".catalog-main-roll .js-add-cart", function (e) {
      $(".roll-calc-wrap").slideDown();
    }), $(document).on("click", ".js-counter-btn", function (e) {
      var t = $(e.currentTarget),
        a = t.attr("data-direction"),
        s = t.siblings(".add-cart-counter__input"),
        l = parseInt(s.val());
      l = "plus" === a ? l + 1 : l - 1, l < 0 && (l = 0), l > 999 && (l = 999), s.val(l), 0 === l && (t.closest(".add-cart-btn").removeClass("show-counter"), $(".roll-calc-wrap").slideUp());
    }), $(document).on("change", ".add-cart-counter__input", function (e) {
      var t = $(e.currentTarget);
      0 !== parseInt(t.val()) && "" !== t.val() || (t.closest(".add-cart-btn").removeClass("show-counter"), $(".roll-calc-wrap").slideUp());
    }), $(document).on("input", ".add-cart-counter__input", function (e) {
      var t = $(e.currentTarget),
        a = parseInt(t.val());
      a || (a = 0), a < 0 && (a = 0), a > 999 && (a = 999), 0 !== a ? t.val(a) : t.val("");
    }), $(document).on("click", ".js-catalog-roll-btns .js-counter-btn", function (e) {
      return roll_change();
    }), $(document).on("input", ".js-catalog-roll-btns .add-cart-counter__input", function (e) {
      return roll_change();
    });
  },
  roll_change = function roll_change() {
    if (0 === $(".roll-calc").length) return;
    var e = parseFloat($(".js-catalog-roll-btns input").val()),
      t = parseFloat($('[name="price-m2"]').val()),
      a = parseFloat($('[name="roll-width"]:checked').val()),
      s = e,
      l = s / a,
      r = parseFloat($('[name="m2-in-roll"]').val());
    if (e || (e = 0, s = 0, l = 0), $('.price-type-val[data-type="m"].active').length > 0 && (l = e, s = e * a), r) {
      var _e5 = $('[name="buy-type"]').val(),
        _t3 = "roll" !== _e5 ? Math.floor(s / r) : Math.ceil(s / r);
      $('.price-type-val[data-type="roll"].active').length > 0 && (_t3 = s), l = "roll" !== _e5 ? s % r / a : _t3 * r, "roll" === _e5 && (s = _t3 * r), _t3 <= 0 ? $(".js-buy-roll-col").addClass("v-hide") : $(".js-buy-roll-col").removeClass("v-hide"), 0 === l ? ($(".js-calc-img-cut").addClass("hide"), $(".js-calc-img-full").removeClass("hide")) : ($(".js-calc-img-cut").removeClass("hide"), $(".js-calc-img-full").addClass("hide"));
      var _i2 = _t3 * r,
        o = s - _i2;
      $(".js-roll-count").text(_t3), $(".js-catalog-m2-total-cut").text(o), $(".js-catalog-m2-total-roll").text(_i2);
    }
    var i = calcRollWidth(l);
    $(".roll-calc-img-move").css("width", "".concat(i, "rem")), $(".js-catalog-m-total").text(numRound(l)), $(".js-catalog-m2-total").text(numRound(s)), $(".js-catalog-price-total").text(priceFormat(s * t));
  },
  product_slider_events = function product_slider_events() {
    $(document).on("mousemove", ".product-itm-images", function (e) {
      if (is_tablet) return !1;
      var t = $(this).outerWidth(),
        a = e.clientX - $(this).offset().left,
        s = t / ($(this).find(".product-itm-images__itm").length - 1),
        l = Math.round(a / s);
      slider_move_to($(this), l);
    }), $(window).on("resize", function () {
      product_slider_resize();
    }), $(".product-slider").owlCarousel({
      items: 4,
      margin: 24,
      dots: !1,
      nav: !0,
      responsive: {
        0: {
          items: 2,
          margin: 16
        },
        600: {
          items: 2,
          margin: 24
        },
        1100: {
          items: 4,
          margin: 24
        }
      }
    }), $(".product-slider-lk").owlCarousel({
      items: 3,
      margin: 24,
      dots: !1,
      nav: !0,
      responsive: {
        0: {
          items: 2,
          margin: 16
        },
        600: {
          items: 2,
          margin: 24
        },
        1100: {
          items: 3,
          margin: 24
        }
      }
    }), is_tablet && $(".blog-grid").owlCarousel({
      items: 4,
      margin: 24,
      dots: !1,
      nav: !0,
      responsive: {
        0: {
          items: 1,
          margin: 16
        },
        600: {
          items: 2,
          margin: 24
        },
        1100: {
          items: 4,
          margin: 0
        }
      }
    });
  },
  slider_move_to = function slider_move_to(e, t) {
    var a = e.outerWidth(!0),
      s = e.find(".product-itm-images-stage");
    e.attr("data-page", t), s.css("transform", "translateX(-".concat(t * a, "px)")), e.find(".product-itm-dot").removeClass("active"), e.find(".product-itm-dot").eq(t).addClass("active");
  },
  numRound = function numRound(e) {
    return Math.round(10 * e) / 10;
  },
  calcRollWidth = function calcRollWidth(e) {
    var t = e / 9;
    return t > 1 && (t = 1), 6 * t + 5;
  };
var resizeTimeout;
var product_slider_resize = function product_slider_resize() {
    clearTimeout(resizeTimeout), resizeTimeout = setTimeout(function () {
      $(".product-itm-images").each(function (e, t) {
        var a = parseInt($(t).attr("data-page"));
        slider_move_to($(t), a);
      });
    }, 500);
  },
  product_slider_init = function product_slider_init() {
    $(".product-itm-images:not(.init)").each(function (e, t) {
      var a = $(t).find(".product-itm-images__itm").length;
      $(t).addClass("init"), $(t).append('<div class="product-itm-images-dots"></div>');
      for (var _e6 = 0; _e6 < a; _e6++) $(t).find(".product-itm-images-dots").append('<span class="product-itm-dot"></span>');
      $(t).find(".product-itm-dot").first().addClass("active");
    }), $(".catalog-slider__preview").owlCarousel({
      items: 3,
      margin: 24,
      dots: !1,
      loop: !0,
      nav: !0,
      responsive: {
        0: {
          items: 1,
          margin: 8,
          dots: !0
        },
        600: {
          items: 2,
          margin: 8,
          dots: !0
        },
        1100: {
          items: 3,
          margin: 8,
          dots: !1
        }
      }
    });
  },
  priceFormat = function priceFormat(e) {
    return new Intl.NumberFormat("ru-RU", {
      style: "decimal",
      minimumFractionDigits: 0
    }).format(e);
  };
$(function () {
  check_compare_diff(), $(".js-compare-move").each(function (e, t) {
    $(t).find(".js-compare-move-itm").eq(0).addClass("order-left"), $(t).find(".js-compare-move-itm").eq(1).addClass("order-right");
  }), $(".js-compare-prev").on("click", function (t) {
    return e();
  }), $(".js-compare-next").on("click", function (e) {
    return t();
  }), $(".js-compare-left-prev").on("click", function (e) {
    var t = parseInt($(".js-compare-num-left").first().text()),
      s = parseInt($(".js-compare-num-right").first().text());
    a(--t, s, "left_prev");
  }), $(".js-compare-left-next").on("click", function (e) {
    var t = parseInt($(".js-compare-num-left").first().text()),
      s = parseInt($(".js-compare-num-right").first().text());
    a(++t, s, "left_next");
  }), $(".js-compare-right-prev").on("click", function (e) {
    var t = parseInt($(".js-compare-num-left").first().text()),
      s = parseInt($(".js-compare-num-right").first().text());
    a(t, --s, "right_prev");
  }), $(".js-compare-right-next").on("click", function (e) {
    var t = parseInt($(".js-compare-num-left").first().text()),
      s = parseInt($(".js-compare-num-right").first().text());
    a(t, ++s, "right_next");
  }), $(".js-compare-diff-type-input").on("change", function (e) {
    var t = $(e.currentTarget).val();
    "diff" === t ? $(".compare-page").addClass("show-only-diff") : $(".compare-page").removeClass("show-only-diff"), $(".js-compare-diff-type-input[value=\"".concat(t, "\"]")).prop("checked", !0);
  }), $(".js-compare-diff-type-check").on("change", function (e) {
    $(e.currentTarget).prop("checked") ? $(".compare-page").addClass("show-only-diff") : $(".compare-page").removeClass("show-only-diff");
  });
  var e = function e() {
      var e = $(".compare-products .product-itm"),
        t = $(".compare-products .fixed-head-product");
      e.parent().prepend(e.last()), t.parent().prepend(t.last()), $(".compare-grid__tr-body").each(function (e, t) {
        var a = $(t).find(".compare-grid-td");
        a.parent().prepend(a.last());
      });
    },
    t = function t() {
      var e = $(".compare-products .product-itm"),
        t = $(".compare-products .fixed-head-product");
      e.parent().append(e.first()), t.parent().append(t.first()), $(".compare-grid__tr-body").each(function (e, t) {
        var a = $(t).find(".compare-grid-td");
        a.parent().append(a.first());
      });
    },
    a = function a(e, t, _a3) {
      var s = $(".compare-products .product-itm").length;
      e < 1 && (e = s), e > s && (e = 1), t < 1 && (t = s), t > s && (t = 1), e === t && "left_prev" === _a3 && --e, e === t && "left_next" === _a3 && ++e, e === t && "right_prev" === _a3 && --t, e === t && "right_next" === _a3 && ++t, e < 1 && (e = s), e > s && (e = 1), t < 1 && (t = s), t > s && (t = 1), $(".js-compare-num-left").text(e), $(".js-compare-num-right").text(t), $(".js-compare-move-itm").removeClass("order-left order-right"), $(".js-compare-move").each(function (a, s) {
        $(s).find(".js-compare-move-itm").eq(e - 1).addClass("order-left"), $(s).find(".js-compare-move-itm").eq(t - 1).addClass("order-right");
      });
    };
  $(window).on("scroll", function (e) {
    var t = $(window).scrollTop();
    0 !== $(".js-compare-fixed-start").length && (t > $(".js-compare-fixed-start").offset().top ? $(".compare-fixed-head").addClass("show") : $(".compare-fixed-head").removeClass("show"));
  });
});
var check_compare_diff = function check_compare_diff() {
  $(".compare-grid__tr-body").each(function (e, t) {
    var a;
    $(t).find(".compare-grid-td").each(function (e, s) {
      a || (a = $(s).text()), a !== $(s).text() && $(t).closest(".compare-grid--line").addClass("line-different");
    });
  });
};
$(function () {}), $(function () {
  $(".js-faq-search").on("input", function (e) {
    var t = $(e.currentTarget).val().toLowerCase();
    $(".help-faq-aside-list li").each(function (e, a) {
      $(a).addClass("hide"), -1 !== $(a).text().toLowerCase().indexOf(t) && $(a).removeClass("hide");
    });
  }), $(".js-help-aside-close").on("click", function (e) {
    return $(".help-faq-aside").removeClass("active"), !1;
  }), $(".js-help-aside-open").on("click", function (e) {
    return $(".help-faq-aside").addClass("active"), !1;
  }), $(".help-faq-action__btn--show").on("click", function () {
    return $(".help-faq").addClass("show-aside"), !1;
  }), $(".help-faq-action__btn--hide").on("click", function () {
    return $(".help-faq").removeClass("show-aside"), !1;
  });
});
//# sourceMappingURL=maps/all.js.map
