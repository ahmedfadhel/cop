(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[1],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/albums/displayAlbumSection.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/main/albums/displayAlbumSection.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  props: ['album'],
  mounted: function mounted() {
    this.showCom();
    this.$store.commit('setJuicyAds');
    this.$store.dispatch('squerJuicyAda');
    this.$store.dispatch('squerJuicyAdb');
    this.$store.dispatch('squerJuicyAdc');
    this.$store.dispatch('smallJuicyAd');
    this.$store.dispatch('mobileJuicyAd');

    if (this.album.cats.indexOf('comic') !== -1) {
      this.$store.dispatch('fetchRelatedAlbum', 'comic');
    } else {
      var cat = this.album.cats[Math.floor(Math.random() * this.album.cats.length)];
      this.$store.dispatch('fetchRelatedAlbum', cat.name);
    }
  },
  methods: {
    showCom: function showCom() {
      this.appear = true;
      var ele = document.querySelector('.loader');

      if (ele) {
        ele.parentNode.removeChild(ele);
      }
    }
  },
  computed: {
    related: function related() {
      return this.$store.getters.getRelatedAlbums;
    }
  },
  filters: {
    posterUrl: function posterUrl(value) {
      return '/storage/posters/' + value;
    },
    albumsUrl: function albumsUrl(value, id) {
      return '/storage/albums/' + id + '/' + value;
    },
    albumUrl: function albumUrl(value) {
      return '/albums/' + value;
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/albums/displayAlbumSection.vue?vue&type=template&id=22bb2870&":
/*!**********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/main/albums/displayAlbumSection.vue?vue&type=template&id=22bb2870& ***!
  \**********************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("div", { staticClass: "leaderboard mt-4", attrs: { id: "juicy-ads" } }),
    _vm._v(" "),
    _c("div", { staticClass: "row" }, [
      _c(
        "div",
        { staticClass: "col-12 col-xl-10 mt-4" },
        [
          _c(
            "b-card",
            { attrs: { header: _vm.album.title, "header-tag": "header" } },
            [
              _c("div", { staticClass: "row" }, [
                _vm.album.photos.length === 0
                  ? _c("div", { staticClass: "col-12" }, [
                      _c("img", {
                        staticClass: "img-fluid mx-auto d-block",
                        attrs: {
                          src: _vm._f("posterUrl")(_vm.album.poster),
                          alt: _vm.album.title
                        }
                      })
                    ])
                  : _c(
                      "div",
                      { staticClass: "col-12" },
                      [
                        _c(
                          "b-carousel",
                          {
                            staticStyle: { "text-shadow": "0px 0px 2px #000" },
                            attrs: {
                              id: "carousel-fade",
                              fade: "",
                              indicators: "",
                              "img-width": "100%",
                              "img-height": "480",
                              controls: "",
                              interval: 0
                            }
                          },
                          [
                            _c("b-carousel-slide", {
                              attrs: {
                                caption: _vm.album.title,
                                "img-src": _vm._f("posterUrl")(_vm.album.poster)
                              }
                            }),
                            _vm._v(" "),
                            _vm._l(_vm.album.photos, function(img, index) {
                              return _c("b-carousel-slide", {
                                key: index,
                                attrs: {
                                  "img-src": _vm._f("albumsUrl")(
                                    img.url,
                                    _vm.album.id
                                  )
                                }
                              })
                            })
                          ],
                          2
                        )
                      ],
                      1
                    )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "row" }, [
                _c("div", { staticClass: "col-12" }, [
                  _c("h1", { staticClass: "text-center mt-3 video-title" }, [
                    _vm._v(_vm._s(_vm.album.title))
                  ])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "row" }, [
                _c("div", { staticClass: "col-12 col-md-4" }, [
                  _c(
                    "p",
                    [
                      _c("strong", [
                        _vm._v(
                          "\n                    Categories:\n                  "
                        )
                      ]),
                      _vm._v(" "),
                      _vm._l(_vm.album.cats, function(cat, index) {
                        return _c(
                          "span",
                          {
                            key: index,
                            staticClass: "mr-1 badge badge-secondary"
                          },
                          [
                            _c(
                              "a",
                              {
                                on: {
                                  click: function($event) {
                                    return _vm.catLink(cat.name)
                                  }
                                }
                              },
                              [_vm._v(_vm._s(cat.name))]
                            )
                          ]
                        )
                      })
                    ],
                    2
                  ),
                  _vm._v(" "),
                  _c(
                    "p",
                    [
                      _c("strong", [
                        _vm._v(
                          "\n                    Tags:\n                  "
                        )
                      ]),
                      _vm._v(" "),
                      _vm._l(_vm.album.tags, function(tag, index) {
                        return _c(
                          "span",
                          {
                            key: index,
                            staticClass: "mr-1 badge badge-secondary"
                          },
                          [
                            _c(
                              "a",
                              {
                                on: {
                                  click: function($event) {
                                    return _vm.tagLink(tag.name)
                                  }
                                }
                              },
                              [_vm._v(_vm._s(tag.name))]
                            )
                          ]
                        )
                      })
                    ],
                    2
                  )
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-12 col-md-4" }, [
                  _c("p", [
                    _c("strong", [
                      _vm._v(
                        "\n                    Uploaded at:\n                  "
                      )
                    ]),
                    _vm._v(
                      "\n                  " +
                        _vm._s(_vm.album.updated_at) +
                        "\n                "
                    )
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-12 col-md-4" }, [
                  _c("div", { staticClass: "inline-ad mx-auto" })
                ])
              ])
            ]
          )
        ],
        1
      ),
      _vm._v(" "),
      _vm._m(0)
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "row mt-4" }, [
      _c(
        "div",
        { staticClass: "col-12 col-xl-10" },
        [
          _c("b-card", { attrs: { header: "Related Photos" } }, [
            _c(
              "div",
              { staticClass: "row album" },
              _vm._l(_vm.related, function(photo, index) {
                return _c(
                  "div",
                  { key: index, staticClass: "col-6 col-md-4 col-lg-3 mt-4" },
                  [
                    _c("div", { staticClass: "card text-white" }, [
                      _c("img", {
                        staticClass: "card-img img-fluid",
                        attrs: {
                          src: _vm._f("posterUrl")(photo.poster),
                          alt: photo.title
                        }
                      }),
                      _vm._v(" "),
                      _c("div", { staticClass: "card-img-overlay" }, [
                        _c(
                          "a",
                          { attrs: { href: _vm._f("albumUrl")(photo.slug) } },
                          [_vm._v(_vm._s(photo.title))]
                        )
                      ])
                    ])
                  ]
                )
              }),
              0
            )
          ])
        ],
        1
      ),
      _vm._v(" "),
      _vm._m(1)
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-12 col-xl-2 mt-4" }, [
      _c("div", { staticClass: "row" }, [
        _c("div", { staticClass: "col-12 col-sm-6 col-md-4 col-xl-12" }, [
          _c("div", { staticClass: "ad first-ad d-none d-sm-block" })
        ]),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "col-12 col-sm-6 col-md-4 col-xl-12 d-none d-sm-block"
          },
          [_c("div", { staticClass: "ad second-ad " })]
        ),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "col-6 col-md-4 col-xl-12 d-none d-sm-none d-md-block"
          },
          [_c("div", { staticClass: "ad third-ad" })]
        ),
        _vm._v(" "),
        _c("div", { staticClass: "col-12" }, [
          _c("div", { staticClass: "ad mobile-ad" })
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-12 col-xl-2" }, [
      _c("div", { staticClass: "row" }, [
        _c("div", { staticClass: "col-12 col-sm-6 col-md-4 col-xl-12" }, [
          _c("div", { staticClass: "ad first-ad d-none d-sm-block" })
        ]),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "col-12 col-sm-6 col-md-4 col-xl-12 d-none d-sm-block"
          },
          [_c("div", { staticClass: "ad second-ad " })]
        ),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass:
              "col-6 col-md-4 col-xl-12 d-none d-sm-none d-md-block d-xl-none"
          },
          [_c("div", { staticClass: "ad third-ad" })]
        ),
        _vm._v(" "),
        _c("div", { staticClass: "col-12" }, [
          _c("div", { staticClass: "ad mobile-ad" })
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/main/albums/displayAlbumSection.vue":
/*!*********************************************************************!*\
  !*** ./resources/js/components/main/albums/displayAlbumSection.vue ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _displayAlbumSection_vue_vue_type_template_id_22bb2870___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./displayAlbumSection.vue?vue&type=template&id=22bb2870& */ "./resources/js/components/main/albums/displayAlbumSection.vue?vue&type=template&id=22bb2870&");
/* harmony import */ var _displayAlbumSection_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./displayAlbumSection.vue?vue&type=script&lang=js& */ "./resources/js/components/main/albums/displayAlbumSection.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _displayAlbumSection_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _displayAlbumSection_vue_vue_type_template_id_22bb2870___WEBPACK_IMPORTED_MODULE_0__["render"],
  _displayAlbumSection_vue_vue_type_template_id_22bb2870___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/main/albums/displayAlbumSection.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/main/albums/displayAlbumSection.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************!*\
  !*** ./resources/js/components/main/albums/displayAlbumSection.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_displayAlbumSection_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./displayAlbumSection.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/albums/displayAlbumSection.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_displayAlbumSection_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/main/albums/displayAlbumSection.vue?vue&type=template&id=22bb2870&":
/*!****************************************************************************************************!*\
  !*** ./resources/js/components/main/albums/displayAlbumSection.vue?vue&type=template&id=22bb2870& ***!
  \****************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_displayAlbumSection_vue_vue_type_template_id_22bb2870___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./displayAlbumSection.vue?vue&type=template&id=22bb2870& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/albums/displayAlbumSection.vue?vue&type=template&id=22bb2870&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_displayAlbumSection_vue_vue_type_template_id_22bb2870___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_displayAlbumSection_vue_vue_type_template_id_22bb2870___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);