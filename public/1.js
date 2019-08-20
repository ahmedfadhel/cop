(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[1],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/displayVideo.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/main/displayVideo.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _relatedVideos_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./relatedVideos.vue */ "./resources/js/components/main/relatedVideos.vue");
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

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

/* harmony default export */ __webpack_exports__["default"] = (_defineProperty({
  props: ['display'],
  mounted: function mounted() {
    var _this = this;

    this.searchTags = this.display.tags;
    this.tag = this.display.tags[Math.floor(Math.random() * this.display.tags.length)].name;
    this.$store.commit('setPageKeywords', this.display.tags);
    this.$store.commit('setPageDescription', this.display.description);
    this.$store.commit('setPageTitle', this.display.title);
    this.showCom();

    if (this.tag) {
      this.$store.dispatch('fetchRelatedVideo', this.tag);
    }

    this.$store.commit('setJuicyAds');
    this.$store.dispatch('squerJuicyAda');
    this.$store.dispatch('squerJuicyAdb');
    this.$store.dispatch('squerJuicyAdc');
    this.$store.dispatch('mobileJuicyAd');
    this.display.links.forEach(function (link) {
      if (link.server_name === 'verystream') {
        _this.fileID = link.url.split('/')[4];
      }
    });
  },
  data: function data() {
    return {
      searchTags: null,
      tag: null,
      fileID: null,
      url: '54.39.105.211:443',
      captcha: {
        image: null,
        ticket: null,
        value: null,
        failed: null,
        message: null,
        link: null,
        disable: true
      }
    };
  },
  computed: {
    relatedVideos: function relatedVideos() {
      return this.$store.getters.getRelatedVideos;
    },
    getCaptchaImage: function getCaptchaImage() {
      return this.captcha.image;
    },
    allowDownload: function allowDownload() {
      if (this.fileID) {
        return true;
      } else {
        return false;
      }
    }
  },
  components: {
    relatedVideos: _relatedVideos_vue__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  methods: {
    showCom: function showCom() {
      this.appear = true;
      var ele = document.querySelector('.loader');

      if (ele) {
        ele.parentNode.removeChild(ele);
      }
    },
    starLink: function starLink(value) {
      this.$store.dispatch('starUrl', value);
    },
    catLink: function catLink(value) {
      this.$store.dispatch('catUrl', value);
    },
    tagLink: function tagLink(value) {
      this.$store.dispatch('tagUrl', value);
    }
  }
}, "computed", {
  api: function api() {
    return this.$store.getters.getApi;
  },
  image: function image() {
    return this.captcha.image;
  }
}));

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/relatedVideos.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/main/relatedVideos.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************/
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
var videoThumbnail = function videoThumbnail() {
  return __webpack_require__.e(/*! import() */ 0).then(__webpack_require__.bind(null, /*! ./videoThumbnail.vue */ "./resources/js/components/main/videoThumbnail.vue"));
};

/* harmony default export */ __webpack_exports__["default"] = ({
  props: ['tags'],
  mounted: function mounted() {
    this.$store.dispatch('squerJuicyAda');
  },
  data: function data() {
    return {};
  },
  components: {
    videoThumbnail: videoThumbnail
  },
  computed: {
    relatedVideo: function relatedVideo() {
      return this.$store.getters.getRelatedVideos;
    },
    relatedVideosLength: function relatedVideosLength() {
      return this.$store.getters.getRelatedVideosLegnth;
    }
  },
  methods: {
    refreshRelatedVideos: function refreshRelatedVideos() {
      var tag = this.tags[Math.floor(Math.random() * this.tags.length)];
      this.$store.dispatch('fetchRelatedVideo', tag.name);
    }
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/lib/loader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/displayVideo.vue?vue&type=style&index=0&id=300b3998&scoped=true&lang=scss&":
/*!*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--7-2!./node_modules/sass-loader/lib/loader.js??ref--7-3!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/main/displayVideo.vue?vue&type=style&index=0&id=300b3998&scoped=true&lang=scss& ***!
  \*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, ".list-group-item[data-v-300b3998] {\n  border: 0px;\n  padding: 0.5rem 1.25rem;\n}\n.video-thumbnail[data-v-300b3998] {\n  height: 25rem;\n  display: block;\n  margin: auto;\n}\na[data-v-300b3998] {\n  cursor: pointer;\n}", ""]);

// exports


/***/ }),

/***/ "./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/lib/loader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/relatedVideos.vue?vue&type=style&index=0&id=adc48ed0&scoped=true&lang=scss&":
/*!******************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--7-2!./node_modules/sass-loader/lib/loader.js??ref--7-3!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/main/relatedVideos.vue?vue&type=style&index=0&id=adc48ed0&scoped=true&lang=scss& ***!
  \******************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "span[data-v-adc48ed0] {\n  display: inline-block;\n}", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/lib/loader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/displayVideo.vue?vue&type=style&index=0&id=300b3998&scoped=true&lang=scss&":
/*!*********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--7-2!./node_modules/sass-loader/lib/loader.js??ref--7-3!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/main/displayVideo.vue?vue&type=style&index=0&id=300b3998&scoped=true&lang=scss& ***!
  \*********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../node_modules/css-loader!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/src??ref--7-2!../../../../node_modules/sass-loader/lib/loader.js??ref--7-3!../../../../node_modules/vue-loader/lib??vue-loader-options!./displayVideo.vue?vue&type=style&index=0&id=300b3998&scoped=true&lang=scss& */ "./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/lib/loader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/displayVideo.vue?vue&type=style&index=0&id=300b3998&scoped=true&lang=scss&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/lib/loader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/relatedVideos.vue?vue&type=style&index=0&id=adc48ed0&scoped=true&lang=scss&":
/*!**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--7-2!./node_modules/sass-loader/lib/loader.js??ref--7-3!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/main/relatedVideos.vue?vue&type=style&index=0&id=adc48ed0&scoped=true&lang=scss& ***!
  \**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../node_modules/css-loader!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/src??ref--7-2!../../../../node_modules/sass-loader/lib/loader.js??ref--7-3!../../../../node_modules/vue-loader/lib??vue-loader-options!./relatedVideos.vue?vue&type=style&index=0&id=adc48ed0&scoped=true&lang=scss& */ "./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/lib/loader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/relatedVideos.vue?vue&type=style&index=0&id=adc48ed0&scoped=true&lang=scss&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/displayVideo.vue?vue&type=template&id=300b3998&scoped=true&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/main/displayVideo.vue?vue&type=template&id=300b3998&scoped=true& ***!
  \********************************************************************************************************************************************************************************************************************************/
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
            { attrs: { header: _vm.display.title, "header-tag": "header" } },
            [
              _c(
                "div",
                { staticClass: "row" },
                _vm._l(_vm.display.links, function(link, index) {
                  return _c("div", { key: index, staticClass: "col-12" }, [
                    _c(
                      "div",
                      {
                        staticClass: "embed-responsive embed-responsive-16by9"
                      },
                      [
                        _c("iframe", {
                          staticClass: "embed-responsive-item",
                          attrs: {
                            src: link.url,
                            allowfullscreen: "allowfullscreen"
                          }
                        })
                      ]
                    )
                  ])
                }),
                0
              ),
              _vm._v(" "),
              _c("div", { staticClass: "row" }, [
                _c("div", { staticClass: "col-12" }, [
                  _c("h1", { staticClass: "text-center mt-3 video-title" }, [
                    _vm._v(_vm._s(_vm.display.title))
                  ])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "row" }, [
                _c("div", { staticClass: "col-12 col-md-4" }, [
                  _c("div", { staticClass: "row" }, [
                    _c("div", { staticClass: "col-12" }, [
                      _c(
                        "p",
                        [
                          _c("strong", [
                            _vm._v(
                              "\n                      Stars:\n                    "
                            )
                          ]),
                          _vm._v(" "),
                          _vm._l(_vm.display.stars, function(star, index) {
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
                                        return _vm.starLink(star.name)
                                      }
                                    }
                                  },
                                  [_vm._v(_vm._s(star.name))]
                                )
                              ]
                            )
                          })
                        ],
                        2
                      )
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-12" }, [
                      _c(
                        "p",
                        [
                          _c("strong", [
                            _vm._v(
                              "\n                    Categories:\n                  "
                            )
                          ]),
                          _vm._v(" "),
                          _vm._l(_vm.display.cats, function(cat, index) {
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
                      )
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-12" }, [
                      _c(
                        "p",
                        [
                          _c("strong", [
                            _vm._v(
                              "\n                    Tags:\n                  "
                            )
                          ]),
                          _vm._v(" "),
                          _vm._l(_vm.display.tags, function(tag, index) {
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
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-12 col-md-4" }, [
                  _c("p", [
                    _c("strong", [
                      _vm._v(
                        "\n                Video Description:\n              "
                      )
                    ]),
                    _vm._v(
                      "\n              " +
                        _vm._s(_vm.display.description) +
                        "\n            "
                    )
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-12 col-md-4" }, [
                  _c("p", [
                    _c("strong", [
                      _vm._v("\n                Uploaded at:\n              ")
                    ]),
                    _vm._v(
                      "\n              " +
                        _vm._s(_vm.display.updated_at) +
                        "\n            "
                    )
                  ]),
                  _vm._v(" "),
                  _c("p", [
                    _c("strong", [
                      _vm._v("\n                Length:\n              ")
                    ]),
                    _vm._v(
                      "\n              " +
                        _vm._s(_vm.display.length) +
                        " m\n            "
                    )
                  ]),
                  _vm._v(" "),
                  _c("p", [
                    _c("strong", [
                      _vm._v("\n                Views:\n              ")
                    ]),
                    _vm._v(
                      "\n              " +
                        _vm._s(_vm.display.views) +
                        "\n            "
                    )
                  ])
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
    _c("div", {
      staticClass: "leaderboard  d-none d-xl-block mt-4",
      attrs: { id: "juicy-ads " }
    }),
    _vm._v(" "),
    _c("div", { staticClass: "row" }, [
      _c(
        "div",
        { staticClass: "col-12 col-xl-10" },
        [_c("related-videos", { attrs: { tags: _vm.searchTags } })],
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
          _c("div", { staticClass: "ad mobile-ad", attrs: { id: "mobile" } })
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
            staticClass: "col-6 col-md-4 col-xl-12 d-none d-sm-none d-md-block"
          },
          [_c("div", { staticClass: "ad third-ad" })]
        )
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/relatedVideos.vue?vue&type=template&id=adc48ed0&scoped=true&":
/*!*********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/main/relatedVideos.vue?vue&type=template&id=adc48ed0&scoped=true& ***!
  \*********************************************************************************************************************************************************************************************************************************/
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
  return _c("div", { staticClass: "row related-video" }, [
    _c(
      "div",
      { staticClass: "col-12" },
      [
        _c("b-card", [
          _c("div", { attrs: { slot: "header" }, slot: "header" }, [
            _c("div", { staticClass: "row" }, [
              _c("div", { staticClass: "col-6" }, [
                _c("div", [
                  _vm._v("\n                Related Videos\n              ")
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "col-6" }, [
                _c(
                  "span",
                  {
                    staticClass: " float-right",
                    on: { click: _vm.refreshRelatedVideos }
                  },
                  [_c("span", { staticClass: "icon-spinner11" })]
                )
              ])
            ])
          ]),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "row" },
            _vm._l(_vm.relatedVideo, function(video, index) {
              return _c(
                "div",
                { key: index, staticClass: "col-6 col-sm-6 col-md-4" },
                [_c("video-thumbnail", { attrs: { video: video } })],
                1
              )
            }),
            0
          )
        ])
      ],
      1
    )
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/main/displayVideo.vue":
/*!*******************************************************!*\
  !*** ./resources/js/components/main/displayVideo.vue ***!
  \*******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _displayVideo_vue_vue_type_template_id_300b3998_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./displayVideo.vue?vue&type=template&id=300b3998&scoped=true& */ "./resources/js/components/main/displayVideo.vue?vue&type=template&id=300b3998&scoped=true&");
/* harmony import */ var _displayVideo_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./displayVideo.vue?vue&type=script&lang=js& */ "./resources/js/components/main/displayVideo.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _displayVideo_vue_vue_type_style_index_0_id_300b3998_scoped_true_lang_scss___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./displayVideo.vue?vue&type=style&index=0&id=300b3998&scoped=true&lang=scss& */ "./resources/js/components/main/displayVideo.vue?vue&type=style&index=0&id=300b3998&scoped=true&lang=scss&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _displayVideo_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _displayVideo_vue_vue_type_template_id_300b3998_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _displayVideo_vue_vue_type_template_id_300b3998_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "300b3998",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/main/displayVideo.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/main/displayVideo.vue?vue&type=script&lang=js&":
/*!********************************************************************************!*\
  !*** ./resources/js/components/main/displayVideo.vue?vue&type=script&lang=js& ***!
  \********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_displayVideo_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./displayVideo.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/displayVideo.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_displayVideo_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/main/displayVideo.vue?vue&type=style&index=0&id=300b3998&scoped=true&lang=scss&":
/*!*****************************************************************************************************************!*\
  !*** ./resources/js/components/main/displayVideo.vue?vue&type=style&index=0&id=300b3998&scoped=true&lang=scss& ***!
  \*****************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_sass_loader_lib_loader_js_ref_7_3_node_modules_vue_loader_lib_index_js_vue_loader_options_displayVideo_vue_vue_type_style_index_0_id_300b3998_scoped_true_lang_scss___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/style-loader!../../../../node_modules/css-loader!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/src??ref--7-2!../../../../node_modules/sass-loader/lib/loader.js??ref--7-3!../../../../node_modules/vue-loader/lib??vue-loader-options!./displayVideo.vue?vue&type=style&index=0&id=300b3998&scoped=true&lang=scss& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/lib/loader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/displayVideo.vue?vue&type=style&index=0&id=300b3998&scoped=true&lang=scss&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_sass_loader_lib_loader_js_ref_7_3_node_modules_vue_loader_lib_index_js_vue_loader_options_displayVideo_vue_vue_type_style_index_0_id_300b3998_scoped_true_lang_scss___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_sass_loader_lib_loader_js_ref_7_3_node_modules_vue_loader_lib_index_js_vue_loader_options_displayVideo_vue_vue_type_style_index_0_id_300b3998_scoped_true_lang_scss___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_sass_loader_lib_loader_js_ref_7_3_node_modules_vue_loader_lib_index_js_vue_loader_options_displayVideo_vue_vue_type_style_index_0_id_300b3998_scoped_true_lang_scss___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_sass_loader_lib_loader_js_ref_7_3_node_modules_vue_loader_lib_index_js_vue_loader_options_displayVideo_vue_vue_type_style_index_0_id_300b3998_scoped_true_lang_scss___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_sass_loader_lib_loader_js_ref_7_3_node_modules_vue_loader_lib_index_js_vue_loader_options_displayVideo_vue_vue_type_style_index_0_id_300b3998_scoped_true_lang_scss___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/main/displayVideo.vue?vue&type=template&id=300b3998&scoped=true&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/components/main/displayVideo.vue?vue&type=template&id=300b3998&scoped=true& ***!
  \**************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_displayVideo_vue_vue_type_template_id_300b3998_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./displayVideo.vue?vue&type=template&id=300b3998&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/displayVideo.vue?vue&type=template&id=300b3998&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_displayVideo_vue_vue_type_template_id_300b3998_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_displayVideo_vue_vue_type_template_id_300b3998_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/main/relatedVideos.vue":
/*!********************************************************!*\
  !*** ./resources/js/components/main/relatedVideos.vue ***!
  \********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _relatedVideos_vue_vue_type_template_id_adc48ed0_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./relatedVideos.vue?vue&type=template&id=adc48ed0&scoped=true& */ "./resources/js/components/main/relatedVideos.vue?vue&type=template&id=adc48ed0&scoped=true&");
/* harmony import */ var _relatedVideos_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./relatedVideos.vue?vue&type=script&lang=js& */ "./resources/js/components/main/relatedVideos.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _relatedVideos_vue_vue_type_style_index_0_id_adc48ed0_scoped_true_lang_scss___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./relatedVideos.vue?vue&type=style&index=0&id=adc48ed0&scoped=true&lang=scss& */ "./resources/js/components/main/relatedVideos.vue?vue&type=style&index=0&id=adc48ed0&scoped=true&lang=scss&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _relatedVideos_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _relatedVideos_vue_vue_type_template_id_adc48ed0_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _relatedVideos_vue_vue_type_template_id_adc48ed0_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "adc48ed0",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/main/relatedVideos.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/main/relatedVideos.vue?vue&type=script&lang=js&":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/main/relatedVideos.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_relatedVideos_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./relatedVideos.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/relatedVideos.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_relatedVideos_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/main/relatedVideos.vue?vue&type=style&index=0&id=adc48ed0&scoped=true&lang=scss&":
/*!******************************************************************************************************************!*\
  !*** ./resources/js/components/main/relatedVideos.vue?vue&type=style&index=0&id=adc48ed0&scoped=true&lang=scss& ***!
  \******************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_sass_loader_lib_loader_js_ref_7_3_node_modules_vue_loader_lib_index_js_vue_loader_options_relatedVideos_vue_vue_type_style_index_0_id_adc48ed0_scoped_true_lang_scss___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/style-loader!../../../../node_modules/css-loader!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/src??ref--7-2!../../../../node_modules/sass-loader/lib/loader.js??ref--7-3!../../../../node_modules/vue-loader/lib??vue-loader-options!./relatedVideos.vue?vue&type=style&index=0&id=adc48ed0&scoped=true&lang=scss& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/lib/loader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/relatedVideos.vue?vue&type=style&index=0&id=adc48ed0&scoped=true&lang=scss&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_sass_loader_lib_loader_js_ref_7_3_node_modules_vue_loader_lib_index_js_vue_loader_options_relatedVideos_vue_vue_type_style_index_0_id_adc48ed0_scoped_true_lang_scss___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_sass_loader_lib_loader_js_ref_7_3_node_modules_vue_loader_lib_index_js_vue_loader_options_relatedVideos_vue_vue_type_style_index_0_id_adc48ed0_scoped_true_lang_scss___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_sass_loader_lib_loader_js_ref_7_3_node_modules_vue_loader_lib_index_js_vue_loader_options_relatedVideos_vue_vue_type_style_index_0_id_adc48ed0_scoped_true_lang_scss___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_sass_loader_lib_loader_js_ref_7_3_node_modules_vue_loader_lib_index_js_vue_loader_options_relatedVideos_vue_vue_type_style_index_0_id_adc48ed0_scoped_true_lang_scss___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_7_2_node_modules_sass_loader_lib_loader_js_ref_7_3_node_modules_vue_loader_lib_index_js_vue_loader_options_relatedVideos_vue_vue_type_style_index_0_id_adc48ed0_scoped_true_lang_scss___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/main/relatedVideos.vue?vue&type=template&id=adc48ed0&scoped=true&":
/*!***************************************************************************************************!*\
  !*** ./resources/js/components/main/relatedVideos.vue?vue&type=template&id=adc48ed0&scoped=true& ***!
  \***************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_relatedVideos_vue_vue_type_template_id_adc48ed0_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./relatedVideos.vue?vue&type=template&id=adc48ed0&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/relatedVideos.vue?vue&type=template&id=adc48ed0&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_relatedVideos_vue_vue_type_template_id_adc48ed0_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_relatedVideos_vue_vue_type_template_id_adc48ed0_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);