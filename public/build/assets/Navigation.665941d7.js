import{n}from"./vueComponentNormalizer.9ef17bb1.js";var v="/build/assets/favicon.05840ec4.png",l=function(){var e=this,a=e.$createElement,t=e._self._c||a;return t("nav",[t("v-navigation-drawer",{staticClass:"primary lighten-2",attrs:{app:""},model:{value:e.drawer.opened,callback:function(s){e.$set(e.drawer,"opened",s)},expression:"drawer.opened"}},[t("v-toolbar",{staticClass:"primary lighten-2"},[t("v-app-bar-nav-icon",{directives:[{name:"show",rawName:"v-show",value:e.drawer.opened,expression:"drawer.opened"}],staticClass:"white--text",on:{click:function(s){e.drawer.opened=!1}}}),t("v-app-bar-title",{staticClass:"white--text"},[e._v(" "+e._s(e.$store.getters.appName)+" ")])],1),t("v-layout",{attrs:{column:"","align-center":""}},[t("v-flex",{staticClass:"my-5"},[t("v-avatar",{attrs:{size:"100"}},[t("img",{attrs:{src:e.logo,alt:""}})])],1)],1),t("v-list",[t("v-list-item",{staticClass:"py-2",attrs:{router:"",to:"/"}},[t("v-list-item-action",[t("v-icon",{staticClass:"white--text"},[e._v("home")])],1),t("v-list-item-content",[t("v-list-item-title",{staticClass:"white--text"},[e._v("HOME")])],1)],1),t("v-list-item",{staticClass:"py-2",attrs:{router:"",to:"/students"}},[t("v-list-item-action",[t("v-icon",{staticClass:"white--text"},[e._v("people")])],1),t("v-list-item-content",[t("v-list-item-title",{staticClass:"white--text"},[e._v("STUDENTS")])],1)],1),t("v-list-item",{staticClass:"py-2",attrs:{router:"",to:"/groups"}},[t("v-list-item-action",[t("v-icon",{staticClass:"white--text"},[e._v("groups")])],1),t("v-list-item-content",[t("v-list-item-title",{staticClass:"white--text"},[e._v("GROUPS")])],1)],1)],1)],1),t("v-app-bar",{staticClass:"primary lighten-2 white--text",attrs:{app:""}},[t("v-app-bar-nav-icon",{directives:[{name:"show",rawName:"v-show",value:!e.drawer.opened,expression:"!drawer.opened"}],staticClass:"white--text",on:{click:function(s){e.drawer.opened=!0}}}),t("v-app-bar-title",{directives:[{name:"show",rawName:"v-show",value:!e.drawer.opened,expression:"!drawer.opened"}]},[e._v(" "+e._s(e.$store.getters.appName)+" ")]),t("v-spacer"),t("v-menu",{attrs:{"offset-y":"",transition:"slide-y-transition"},scopedSlots:e._u([{key:"activator",fn:function(s){var r=s.on,o=s.attrs;return[t("v-btn",e._g(e._b({attrs:{icon:"",text:"",color:"grey"}},"v-btn",o,!1),r),[t("v-icon",[e._v("more_vert")])],1)]}}])},[t("v-list",[t("v-list-item",{attrs:{router:"",to:"/"}},[t("v-list-item-title",[t("v-icon",{attrs:{left:""}},[e._v("home")]),t("span",[e._v("HOME")])],1)],1),t("v-list-item",{attrs:{router:"",to:"/students"}},[t("v-list-item-title",[t("v-icon",{attrs:{left:""}},[e._v("people")]),t("span",[e._v("STUDENTS")])],1)],1),t("v-list-item",{attrs:{router:"",to:"/groups"}},[t("v-list-item-title",[t("v-icon",{attrs:{left:""}},[e._v("groups")]),t("span",[e._v("GROUPS")])],1)],1)],1)],1)],1)],1)},c=[];const p={name:"Navigation",components:{},data(){return{logo:v,drawer:{opened:!1}}},methods:{},computed:{}},i={};var m=n(p,l,c,!1,_,"8dd7cf80",null,null);function _(e){for(let a in i)this[a]=i[a]}var u=function(){return m.exports}();export{u as default};