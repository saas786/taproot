!function(e){var t={};function a(n){if(t[n])return t[n].exports;var r=t[n]={i:n,l:!1,exports:{}};return e[n].call(r.exports,r,r.exports,a),r.l=!0,r.exports}a.m=e,a.c=t,a.d=function(e,t,n){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(a.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)a.d(n,r,function(t){return e[t]}.bind(null,r));return n},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="/",a(a.s=3)}({3:function(e,t,a){e.exports=a("pNZs")},pNZs:function(e,t,a){"use strict";function n(e,t,a){return t in e?Object.defineProperty(e,t,{value:a,enumerable:!0,configurable:!0,writable:!0}):e[t]=a,e}a.r(t);var r=wp.data,o=r.withSelect,i=r.withDispatch,l=wp.compose.compose,u=wp.components.SelectControl,c=wp.i18n.__,d=l(i(function(e,t){return{setMetaFieldValue:function(a){e("core/editor").editPost({meta:n({},t.fieldName,a)})}}}),o(function(e,t){return{metaFieldValue:e("core/editor").getEditedPostAttribute("meta")[t.fieldName]}}))(function(e){return React.createElement(u,{label:c("Page Layout"),value:e.metaFieldValue,options:[{label:c("Default"),value:"default"},{label:c("Full (No Sidebar)"),value:"full"},{label:c("Sidebar on Right"),value:"right"},{label:c("Sidebar on Left"),value:"left"}],onChange:function(t){e.setMetaFieldValue(t)}})});function m(e,t,a){return t in e?Object.defineProperty(e,t,{value:a,enumerable:!0,configurable:!0,writable:!0}):e[t]=a,e}var s=wp.compose.compose,f=wp.data,p=f.withSelect,b=f.withDispatch,g=wp.components.SelectControl,_=wp.i18n.__,h=s(b(function(e,t){return{setMetaFieldValue:function(a){e("core/editor").editPost({meta:m({},t.fieldName,a)})}}}),p(function(e,t){return{metaFieldValue:e("core/editor").getEditedPostAttribute("meta")[t.fieldName]}}))(function(e){return React.createElement(g,{label:_("Post Title"),value:e.metaFieldValue,options:[{label:_("Show in Content"),value:"content"},{label:_("Show in Custom Header"),value:"header"},{label:_("Hide"),value:"hide"}],onChange:function(t){e.setMetaFieldValue(t)}})});function v(e,t,a){return t in e?Object.defineProperty(e,t,{value:a,enumerable:!0,configurable:!0,writable:!0}):e[t]=a,e}var w=wp.compose.compose,P=wp.data,V=P.withSelect,y=P.withDispatch,S=wp.components.CheckboxControl,E=wp.editor.MediaUpload,F=wp.i18n.__,R=w(y(function(e,t){return{setMetaFieldValue:function(a){e("core/editor").editPost({meta:v({},t.fieldName,a)})},setCheckboxValue:function(t){e("core/editor").editPost({meta:{taprooot_use_featured_image_for_header:t}})}}}),V(function(e,t){var a=e("core").getMedia,n=e("core/editor").getEditedPostAttribute,r=0;return n("featured_media")&&(r=a(n("featured_media"))),{metaFieldValue:e("core/editor").getEditedPostAttribute("meta")[t.fieldName],checkboxValue:e("core/editor").getEditedPostAttribute("meta").taprooot_use_featured_image_for_header,featuredImage:r}}))(function(e){var t=React.createElement("span",null,F("Custom Header Image")),a=function(){var t=!1;if(1===e.checkboxValue?e.featuredImage&&(t=e.featuredImage.source_url):e.metaFieldValue&&(t=e.metaFieldValue),t)return React.createElement("img",{src:t,style:{marginTop:"6px"},class:"media-preview"})},n=React.createElement(S,{label:F("Use Featured Image"),checked:e.checkboxValue,onChange:function(t){t=t?1:0,e.setCheckboxValue(t)}}),r=function(t){if(1!==e.checkboxValue)return React.createElement("button",{class:"components-button is-button is-default",style:{marginRight:"10px"},onClick:t},F("Select Image"))},o=1!==e.checkboxValue&&e.metaFieldValue?React.createElement("button",{class:"components-button is-button is-default",onClick:function(){e.setMetaFieldValue("")}},F("Clear")):null;return React.createElement(E,{type:"image",label:F("Custom Header Image"),value:e.metaFieldValue,onSelect:function(t){t.sizes&&e.setMetaFieldValue(t.sizes.full.url)},render:function(e){var i=e.open;return[t,a(),n,r(i),o]}})});!function(e){var t=e.editPost,a=t.PluginSidebar,n=t.PluginSidebarMoreMenuItem,r=e.plugins.registerPlugin,o=e.element.Fragment,i=e.components.PanelBody,l=e.i18n.__;r("tr-theme-sidebar",{render:function(){return React.createElement(o,null,React.createElement(n,{target:"taproot-theme-sidebar",icon:"carrot"},l("Taproot Theme Settings")),React.createElement(a,{name:"taproot-theme-sidebar",icon:"carrot",title:l("Taproot Page Settings")},React.createElement(i,null,React.createElement(d,{fieldName:"_taproot_page_layout"}),React.createElement(h,{fieldName:"_taproot_post_title_display"}),React.createElement(R,{fieldName:"_taproot_custom_header_image"}))))}})}(window.wp)}});