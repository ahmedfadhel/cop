(window.webpackJsonp=window.webpackJsonp||[]).push([[0],{382:function(t,e,i){"use strict";i.r(e);var o={props:["video","control"],data:function(){return{loading:null}},methods:{updateVideo:function(){var t=this;this.$store.dispatch("fetchDisplayedVideo",this.video.id).then(function(e){var i=e[Math.floor(Math.random()*e.length)];t.$store.dispatch("fetchRelatedVideo",i.name)})},displayVideo:function(t){this.$store.dispatch("displayVideoUrl",t)}},computed:{baseUri:function(){return this.$store.getters.getBaseUri}},filters:{trimTitle:function(t){return t.substr(0,50)},fromatTime:function(t){return moment(t).fromNow()},removeHour:function(t){var e=t.split(":");return parseInt(e[0])?moment.duration(t).hours()+"h":moment.duration(t).minutes()+"m"},imageUrl:function(t){return"storage/videos/"+t},imageUrlSmall:function(t){return"/videos/img128/"+t}},components:{VLazyImage:function(){return i.e(4).then(i.t.bind(null,379,7))}}},s=i(12),n=Object(s.a)(o,function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"video mt-4"},[i("b-card-group",[i("b-card",{attrs:{"no-body":""}},[i("a",{attrs:{href:"/videos/"+t.video.slug}},[i("v-lazy-image",{staticClass:"card-img",attrs:{src:"/videos/img300/"+t.video.photos[0].url,"src-placeholder":"/videos/img150/"+t.video.photos[0].url}})],1),t._v(" "),i("b-card-body",[i("b-card-title",[i("a",{attrs:{href:"/videos/"+t.video.slug}},[t._v(t._s(t.video.title))])])],1),t._v(" "),i("div",{attrs:{slot:"footer"},slot:"footer"},[i("ul",{staticClass:"info"},[i("li",{staticClass:"info_item"},[i("span",{staticClass:"icon-clock"}),t._v(" "),i("span",[t._v("\n                "+t._s(t._f("removeHour")(t.video.length))+"\n              ")])]),t._v(" "),i("li",{staticClass:"info_item"},[i("span",{staticClass:"icon-eye"}),t._v(" "),i("span",[t._v("\n                "+t._s(t.video.views)+"\n              ")])]),t._v(" "),i("li",{staticClass:"info_item"},[i("span",{staticClass:"icon-upload2"}),t._v(" "),i("span",[t._v("\n                "+t._s(t._f("fromatTime")(t.video.created_at))+"\n              ")])])])])],1)],1)],1)},[],!1,null,null,null);e.default=n.exports}}]);