import{_ as r}from"./app.51b1895d.js";import{n}from"./vueComponentNormalizer.9ef17bb1.js";import"./vendor.44bde8cc.js";var _=function(){var e=this,s=e.$createElement,t=e._self._c||s;return t("div",[t("h1",{staticClass:"my-3 primary--text",attrs:{align:"center"}},[e._v("HOME")]),t("v-container",[t("v-tabs",{staticClass:"mb-5 px-1",attrs:{grow:""},model:{value:e.tab,callback:function(a){e.tab=a},expression:"tab"}},[t("v-tab",[t("v-badge",{attrs:{color:"grey",content:this.$store.getters.students.length}},[t("span",{staticClass:"mr-1"},[e._v("STUDENTS")])])],1),t("v-tab",[t("v-badge",{attrs:{color:"grey",content:this.$store.getters.groups.length}},[t("span",{staticClass:"mr-1"},[e._v("GROUPS")])])],1)],1),t("v-tabs-items",{model:{value:e.tab,callback:function(a){e.tab=a},expression:"tab"}},[t("v-tab-item",{staticClass:"pa-0"},[t("students",{attrs:{fromHome:"true"}})],1),t("v-tab-item",{staticClass:"pa-0"},[t("groups",{attrs:{fromHome:"true"}})],1)],1)],1)],1)},i=[];const c={name:"Home",components:{students:()=>r(()=>import("./Students.8b90056f.js"),["assets/Students.8b90056f.js","assets/Home.4d67ae4e.css","assets/vueComponentNormalizer.9ef17bb1.js"]),groups:()=>r(()=>import("./Groups.792b6c7d.js"),["assets/Groups.792b6c7d.js","assets/Home.4d67ae4e.css","assets/vueComponentNormalizer.9ef17bb1.js"])},data(){return{tab:1}},methods:{},computed:{},mounted(){document.title="HOME | "+this.$store.state.app.name}},o={};var m=n(c,_,i,!1,l,"2cae5e06",null,null);function l(e){for(let s in o)this[s]=o[s]}var d=function(){return m.exports}();export{d as default};