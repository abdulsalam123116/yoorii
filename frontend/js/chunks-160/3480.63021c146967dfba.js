"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[3480],{3480:(t,s,e)=>{e.r(s),e.d(s,{default:()=>l});const a={name:"blogs",data:function(){return{page:1,activeClass:"",form:{sort:"newest",slug:this.$route.params.slug,title:null},loading:!1,is_shimmer:!1,next_page_url:!1}},components:{shimmer:e(9247).Z},mounted:function(){0==this.lengthCounter(this.blogs)&&this.allBlogs(),this.lengthCounter(this.blogs)>0&&(this.is_shimmer=!0)},computed:{blogs:function(){return this.$store.getters.getBlogs},shimmer:function(){return this.$store.state.module.shimmer}},watch:{$route:function(t){"blogs"==t.name&&(this.form.slug=null),this.$store.dispatch("blogs",this.form)}},methods:{loadMoreData:function(){var t=this;this.loading=!0,this.$Progress.start(),axios.get(this.next_page_url,{params:this.form}).then((function(s){if(s.data.error)toastr.error(s.data.error,t.lang.Error+" !!");else{t.loading=!1;var e=s.data.blogs.data;if(e.length>0)for(var a=0;a<e.length;a++)t.blogs.data.push(e[a]);t.$Progress.finish()}t.next_page_url=s.data.blogs.next_page_url}))},filterBlogs:function(){this.page=1,this.allBlogs(this.form)},allBlogs:function(){var t=this;this.loading=!0;var s=this.getUrl("home/blogs?page=1");axios.get(s,{params:this.form}).then((function(s){t.is_shimmer=!0,t.loading=!1,s.data.error?(t.$Progress.fail(),toastr.error(s.data.error,t.lang.Error+" !!")):(t.$store.commit("getBlogs",s.data.blogs),t.next_page_url=s.data.blogs.next_page_url,t.page++,t.$Progress.finish())})).catch((function(s){t.loading=!1,t.is_shimmer=!0,t.$Progress.fail(),s.response&&422==s.response.status&&toastr.error(response.data.error,t.lang.Error+" !!")}))}}},i=a;const l=(0,e(1900).Z)(i,(function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("section",{staticClass:"sg-blog-section sg-filter",class:t.activeClass},[e("div",{staticClass:"container"},[e("div",{staticClass:"title blog-header justify-content-between"},[e("h1",[t._v("Blog News")]),t._v(" "),e("div",{staticClass:"right-content"},[e("select",{directives:[{name:"model",rawName:"v-model",value:t.form.sort,expression:"form.sort"}],staticClass:"form-control",on:{change:[function(s){var e=Array.prototype.filter.call(s.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.$set(t.form,"sort",s.target.multiple?e:e[0])},t.filterBlogs]}},[e("option",{attrs:{value:"newest"}},[t._v(t._s(t.lang.newest))]),t._v(" "),e("option",{attrs:{value:"oldest"}},[t._v(t._s(t.lang.oldest))]),t._v(" "),e("option",{attrs:{value:"viewed"}},[t._v(t._s(t.lang.most_viewed))])]),t._v(" "),e("div",{staticClass:"d-flex gap-3"},[e("div",{staticClass:"sg-search"},[e("div",{staticClass:"search-form blog-search"},[e("form",{on:{submit:function(s){return s.preventDefault(),t.filterBlogs.apply(null,arguments)}}},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.form.title,expression:"form.title"}],staticClass:"form-control",attrs:{type:"text",placeholder:t.lang.search_blog},domProps:{value:t.form.title},on:{input:function(s){s.target.composing||t.$set(t.form,"title",s.target.value)}}}),t._v(" "),t.loading?e("loading_button"):e("button",{attrs:{type:"submit"}},[e("span",{staticClass:"mdi mdi-name mdi-magnify"})])],1)])]),t._v(" "),e("ul",{staticClass:"filter-tabs global-list"},[e("li",{staticClass:"grid-view-tab",class:{active:"grid-view-tab"==t.activeClass||""==t.activeClass},on:{click:function(s){t.activeClass="grid-view-tab"}}},[e("span",{staticClass:"mdi mdi-name mdi-grid"})]),t._v(" "),e("li",{staticClass:"list-view-tab",class:{active:"list-view-tab"==t.activeClass},on:{click:function(s){t.activeClass="list-view-tab"}}},[e("span",{staticClass:"mdi mdi-name mdi-format-list-bulleted"})])])])])]),t._v(" "),t.is_shimmer?e("div",{staticClass:"row"},t._l(t.blogs.data,(function(s,a){return e("div",{key:a,staticClass:"col-md-6 col-lg-3"},[e("div",{staticClass:"post"},[e("div",{staticClass:"entry-header"},[e("div",{staticClass:"entry-thumbnail"},[e("router-link",{attrs:{to:{name:"blog.details",params:{slug:s.slug}}}},[e("img",{staticClass:"img-fluid",attrs:{loading:"lazy",src:s.thumbnail,alt:s.title}})])],1)]),t._v(" "),e("div",{staticClass:"entry-content"},[e("router-link",{attrs:{to:{name:"blog.details",params:{slug:s.slug}}}},[e("h1",{staticClass:"entry-title text-ellipse"},[t._v(t._s(s.title))])]),t._v(" "),e("p",[t._v(t._s(s.short_description))]),t._v(" "),e("router-link",{attrs:{to:{name:"blog.details",params:{slug:s.slug}}}},[t._v("\n              "+t._s(t.lang.read_more)+"\n            ")])],1)])])})),0):t.shimmer?e("div",{staticClass:"row"},t._l(12,(function(t,s){return e("div",{key:s,staticClass:"col-md-6 col-lg-3"},[e("div",{staticClass:"post"},[e("shimmer")],1)])})),0):t._e(),t._v(" "),t.next_page_url&&!t.loading?e("div",{staticClass:"show-more mt-4"},[e("a",{staticClass:"btn btn-primary",attrs:{href:"javaScript:void(0)"},on:{click:function(s){return t.loadMoreData()}}},[t._v(t._s(t.lang.show_more))])]):t._e(),t._v(" "),e("div",{directives:[{name:"show",rawName:"v-show",value:t.loading,expression:"loading"}],staticClass:"col-md-12 text-center show-more"},[e("loading_button",{attrs:{class_name:"btn btn-primary"}})],1)])])}),[],!1,null,null,null).exports},9247:(t,s,e)=>{e.d(s,{Z:()=>i});const a={name:"shimmer.vue",props:["height"],data:function(){return{style:{height:this.height+"px"}}}};const i=(0,e(1900).Z)(a,(function(){var t=this,s=t.$createElement;return(t._self._c||s)("img",{staticClass:"shimmer",style:[t.height?t.style:null],attrs:{src:t.getUrl("public/images/default/preview.jpg"),alt:"shimmer"}})}),[],!1,null,null,null).exports}}]);