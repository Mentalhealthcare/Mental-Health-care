(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["personalization"],{"0194":function(e,t,a){},"823f":function(e,t,a){"use strict";a("0194")},b4e9:function(e,t,a){"use strict";a.r(t);var s=function(){var e=this,t=e._self._c;return t("core-page",[t("div",{staticClass:"omapi-personalization"},[t("div",{staticClass:"omapi-personalization__filters"},[t("div",{staticClass:"omapi-personalization__nav flex"},[e._l(e.categories,(function(a){return t("a",{key:a.slug,staticClass:"omapi-personalization__filter nohover",class:{"omapi-personalization__filter-active":!e.search&&e.filter===a.slug},on:{click:function(t){return e.updateFilter(a.slug)}}},[e._v(" "+e._s(a.displayName)+" ")])})),t("a",{staticClass:"omapi-personalization__filter nohover",class:{"omapi-personalization__filter-active":e.allFilters},on:{click:function(t){e.filter=""}}},[e._v("All")])],2),t("div",{staticClass:"omapi-personalization__search campaign-type-filter__search"},[t("input",{staticClass:"omapi-input",attrs:{placeholder:"Search...",type:"text"},domProps:{value:e.search},on:{input:e.updateSearch,keydown:function(t){return!t.type.indexOf("key")&&e._k(t.keyCode,"esc",27,t.key,["Esc","Escape"])?null:e.clearSearch.apply(null,arguments)}}}),e.search?t("svg-times",{staticClass:"clear-search",on:{click:e.clearSearch}}):e._e()],1)]),t("common-alerts",{attrs:{id:"om-plugin-alerts",alerts:e.alerts}}),e.isLoading?t("core-loading",[t("h1",[e._v("Loading...")])]):t("personalization-rules",{attrs:{categories:e.categories,filter:e.filter,search:e.search},on:{clearSearch:e.clearSearch}})],1)])},r=[],i=a("2f62"),l={data(){return{filter:"popular",search:"",categories:[{slug:"popular",displayName:"Popular",order:1},{slug:"timing",displayName:"Trigger (When)",order:2},{slug:"triggers",displayName:"Targeting (Who)",order:3},{slug:"behavior",displayName:"Personalization",order:4},{slug:"ecommerce",displayName:"Ecommerce",order:5}]}},computed:{isLoading(){return!this.$store.getters.isFetched("rulesetData")},alerts(){const e=[...this.$get("$store.state.alerts",[])];return e.concat(this.$get("$store.state.campaigns.alerts",[]))},allFilters(){return this.search||!this.filter}},mounted(){this.$store.getters.shouldFetchUser?(this.$bus.$on("fetchedMe",this.fetchRulesetData),this.fetchMe()):this.fetchRulesetData()},beforeDestroy(){this.$bus.$off("fetchedMe",this.fetchRulesetData)},methods:{...Object(i["c"])(["fetchMe"]),...Object(i["c"])("campaigns",["fetchRulesetData"]),updateFilter(e){this.filter=e,this.search=""},clearSearch(){this.search=""},updateSearch(e){this.search=e.target.value}}},o=l,c=(a("823f"),a("2877")),n=Object(c["a"])(o,s,r,!1,null,null,null);t["default"]=n.exports}}]);
//# sourceMappingURL=personalization.1018b7bc.js.map