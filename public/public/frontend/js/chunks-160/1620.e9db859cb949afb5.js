"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[1620],{1620:(e,t,s)=>{s.r(t),s.d(t,{default:()=>o});const r={name:"register",components:{telePhone:s(8279).Z},data:function(){return{form:{first_name:"",last_name:"",email:"",password:"",password_confirmation:"",shop_name:"",phone:"",address:"",phone_no:"",otp:"",user_type:this.$route.params.type},loading:!1,agreement:null}},mounted:function(){},methods:{getNumber:function(e){this.form.phone=e},register:function(){var e=this;if(this.settings.seller_agreement&&!this.agreement)return toastr.info(this.lang.accept_terms,this.lang.Error+" !!");var t=this.getUrl("seller-register");this.loading=!0,this.form.real_otp=this.otp,axios.post(t,this.form).then((function(t){e.loading=!1,t.data.error&&(e.$Progress.fail(),toastr.error(t.data.error,e.lang.Error+" !!")),t.data.success&&(e.$router.push({name:"login"}),e.errors=[],toastr.success(t.data.success,e.lang.Success+" !!"))})).catch((function(t){e.loading=!1,e.$Progress.fail(),t.response&&422==t.response.status&&(e.errors=t.response.data.errors)}))}},computed:{}};const o=(0,s(1900).Z)(r,(function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("div",{staticClass:"sg-page-content"},[s("section",{staticClass:"ragister-account text-center"},[s("div",{staticClass:"container"},[s("div",{staticClass:"account-content"},[s("div",{staticClass:"thumb"},[s("img",{staticClass:"img-fluid img-fit",attrs:{src:e.settings.seller_sing_up_banner,alt:e.form.user_type}})]),e._v(" "),s("div",{staticClass:"form-content"},[s("h1",[e._v(e._s(e.lang.sign_up))]),e._v(" "),s("p",[e._v(e._s(e.lang.sign_up_to_continue_shopping))]),e._v(" "),"seller"==e.form.user_type?s("h5",{staticClass:"registration_heading"},[e._v(e._s(e.lang.personal_info))]):e._e(),e._v(" "),s("form",{staticClass:"ragister-form",attrs:{name:"ragister-form"},on:{submit:function(t){return t.preventDefault(),e.register.apply(null,arguments)}}},[s("div",[s("div",{staticClass:"form-group"},[s("span",{staticClass:"mdi mdi-name mdi-account-outline"}),e._v(" "),s("input",{directives:[{name:"model",rawName:"v-model",value:e.form.first_name,expression:"form.first_name"}],staticClass:"form-control",class:{error_border:e.errors.first_name},attrs:{type:"text",placeholder:e.lang.first_name},domProps:{value:e.form.first_name},on:{input:function(t){t.target.composing||e.$set(e.form,"first_name",t.target.value)}}})]),e._v(" "),e.errors.first_name?s("span",{staticClass:"validation_error"},[e._v(e._s(e.errors.first_name[0]))]):e._e(),e._v(" "),s("div",{staticClass:"form-group"},[s("span",{staticClass:"mdi mdi-name mdi-account-outline"}),e._v(" "),s("input",{directives:[{name:"model",rawName:"v-model",value:e.form.last_name,expression:"form.last_name"}],staticClass:"form-control",class:{error_border:e.errors.last_name},attrs:{type:"text",placeholder:e.lang.last_name},domProps:{value:e.form.last_name},on:{input:function(t){t.target.composing||e.$set(e.form,"last_name",t.target.value)}}})]),e._v(" "),e.errors.last_name?s("span",{staticClass:"validation_error"},[e._v(e._s(e.errors.last_name[0]))]):e._e(),e._v(" "),s("div",{staticClass:"form-group"},[s("span",{staticClass:"mdi mdi-name mdi-email-outline"}),e._v(" "),s("input",{directives:[{name:"model",rawName:"v-model",value:e.form.email,expression:"form.email"}],staticClass:"form-control",class:{error_border:e.errors.email},attrs:{type:"email",placeholder:e.lang.email},domProps:{value:e.form.email},on:{input:function(t){t.target.composing||e.$set(e.form,"email",t.target.value)}}})]),e._v(" "),e.errors.email?s("span",{staticClass:"validation_error"},[e._v(e._s(e.errors.email[0]))]):e._e(),e._v(" "),s("div",{staticClass:"mb-4"},[s("telePhone",{attrs:{phone_error:e.errors.phone?e.errors.phone[0]:null},on:{phone_no:e.getNumber}}),e._v(" "),e.errors.phone?s("span",{staticClass:"validation_error"},[e._v(e._s(e.errors.phone[0]))]):e._e()],1),e._v(" "),s("div",{staticClass:"form-group"},[s("span",{staticClass:"mdi mdi-name mdi-lock-outline"}),e._v(" "),s("input",{directives:[{name:"model",rawName:"v-model",value:e.form.password,expression:"form.password"}],staticClass:"form-control",class:{error_border:e.errors.password},attrs:{type:"password",placeholder:e.lang.Password},domProps:{value:e.form.password},on:{input:function(t){t.target.composing||e.$set(e.form,"password",t.target.value)}}})]),e._v(" "),e.errors.password?s("span",{staticClass:"validation_error"},[e._v(e._s(e.errors.password[0]))]):e._e(),e._v(" "),s("div",{staticClass:"form-group"},[s("span",{staticClass:"mdi mdi-name mdi-lock-outline"}),e._v(" "),s("input",{directives:[{name:"model",rawName:"v-model",value:e.form.password_confirmation,expression:"form.password_confirmation"}],staticClass:"form-control",class:{error_border:e.errors.password_confirmation},attrs:{type:"password",placeholder:e.lang.password_confirmation},domProps:{value:e.form.password_confirmation},on:{input:function(t){t.target.composing||e.$set(e.form,"password_confirmation",t.target.value)}}})]),e._v(" "),e.errors.password_confirmation?s("span",{staticClass:"validation_error"},[e._v(e._s(e.errors.password_confirmation[0]))]):e._e()]),e._v(" "),"seller"==e.form.user_type?s("h5",{staticClass:"registration_heading"},[e._v(e._s(e.lang.shop_info))]):e._e(),e._v(" "),s("div",{staticClass:"form-group"},[s("span",{staticClass:"mdi mdi-name mdi-shopping-outline"}),e._v(" "),s("input",{directives:[{name:"model",rawName:"v-model",value:e.form.shop_name,expression:"form.shop_name"}],staticClass:"form-control",class:{error_border:e.errors.shop_name},attrs:{type:"text",placeholder:e.lang.shop_name},domProps:{value:e.form.shop_name},on:{input:function(t){t.target.composing||e.$set(e.form,"shop_name",t.target.value)}}})]),e._v(" "),e.errors.shop_name?s("span",{staticClass:"validation_error"},[e._v(e._s(e.errors.shop_name[0]))]):e._e(),e._v(" "),s("div",{staticClass:"form-group"},[s("span",{staticClass:"mdi mdi-name mdi-map-marker-outline"}),e._v(" "),s("input",{directives:[{name:"model",rawName:"v-model",value:e.form.address,expression:"form.address"}],staticClass:"form-control",class:{error_border:e.errors.address},attrs:{type:"text",placeholder:e.lang.shop_address},domProps:{value:e.form.address},on:{input:function(t){t.target.composing||e.$set(e.form,"address",t.target.value)}}})]),e._v(" "),e.errors.address?s("span",{staticClass:"validation_error"},[e._v(e._s(e.errors.address[0]))]):e._e(),e._v(" "),s("div",{staticClass:"form-checkbox"},[e.settings.seller_agreement?s("div",{staticClass:"form-group"},[s("input",{directives:[{name:"model",rawName:"v-model",value:e.agreement,expression:"agreement"}],staticClass:"form-check-input",attrs:{type:"checkbox",id:"tnc",value:"2"},domProps:{checked:Array.isArray(e.agreement)?e._i(e.agreement,"2")>-1:e.agreement},on:{change:function(t){var s=e.agreement,r=t.target,o=!!r.checked;if(Array.isArray(s)){var a=e._i(s,"2");r.checked?a<0&&(e.agreement=s.concat(["2"])):a>-1&&(e.agreement=s.slice(0,a).concat(s.slice(a+1)))}else e.agreement=o}}}),e._v(" "),s("label",{attrs:{for:"tnc"}},[e._v(e._s(e.lang.agreement)+"\n                                    "),e.urlCheck(e.settings.seller_agreement)?s("a",{attrs:{href:e.settings.seller_agreement}},[e._v(e._s(e.lang.terms))]):s("router-link",{attrs:{to:"/page/"+e.settings.seller_agreement}},[e._v(e._s(e.lang.terms)+"\n                                    ")])],1)]):e._e()]),e._v(" "),e.loading?s("loading_button",{attrs:{class_name:"btn"}}):s("button",{staticClass:"btn",attrs:{type:"submit"}},[e._v(e._s(e.lang.sign_up))]),e._v(" "),s("p",[e._v(e._s(e.lang.have_an_account)+" "),s("router-link",{attrs:{to:{name:"login"}}},[e._v(e._s(e.lang.sign_in))])],1)],1)])])])])])}),[],!1,null,null,null).exports},8279:(e,t,s)=>{s.d(t,{Z:()=>o});const r={name:"telephone",props:["phone_error"],data:function(){return{dropdown_active:!1,search_key:"",selected_country:"",defaultCountry:{flag:"",code:"",name:""},activeClass:"hideShow",phone_no:"",count:1,filtered_countries:[],country_id:[]}},watch:{phone:function(){this.phone_no=this.phone}},mounted:function(){this.country(),this.country_id=this.settings.default_country},computed:{phone:function(){return this.$store.getters.getMobileNo},countries:function(){return this.$store.getters.getCountryList}},methods:{PlusCheck:function(e){return!!e&&e.phonecode.includes("+")},getCountryCode:function(e){this.activeClass="hideShow",this.phone_no="",this.count=1,this.defaultCountry.flag=e?e.flag_icon:this.getUrl("public/images/flags/bd.png");e?(this.country_id=e.id,e.phonecode.includes("+")?this.defaultCountry.code=e.phonecode:this.defaultCountry.code="+"+e.phonecode,this.defaultCountry.name=e.name):(this.defaultCountry.code="+880",this.defaultCountry.name="Bangladesh"),this.phone_no=this.defaultCountry.code},activeDropDown:function(){var e=this;"hideShow"==this.activeClass?this.activeClass="":this.activeClass="hideShow",this.$nextTick((function(){document.addEventListener("click",e.hideSearchDropdown)}))},hideSearchDropdown:function(){this.activeClass="hideShow",document.removeEventListener("click",this.hideSearchDropdown)},countrySearch:function(){var e,t=this;return e=this.countries.filter((function(e){return e.name||e.phonecode})),this.filtered_countries=e.filter((function(e){return e.name&&e.name.toLowerCase().includes(t.search_key)||e.phonecode.includes(t.search_key)})),this.filtered_countries},getNum:function(){this.$emit("phone_no",this.phone_no),this.count++},country:function(){var e=this,t=this.getUrl("get/country-list");if(this.countries.length>0){this.filtered_countries=this.countries;var s=this.countries.find((function(t){return t.id==e.settings.default_country}));this.getCountryCode(s)}else axios.get(t).then((function(t){if(t.data.error)toastr.error(t.data.error,e.lang.Error+" !!");else{e.$store.commit("setCountryList",t.data.countries),e.filtered_countries=t.data.countries;var s=e.countries.find((function(t){return t.id==e.settings.default_country}));e.getCountryCode(s)}}))}}};const o=(0,s(1900).Z)(r,(function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("div",{staticClass:"yoori__signup--form",class:{error_border:e.phone_error}},[s("div",{staticClass:"country__code--config",on:{click:function(t){return t.stopPropagation(),e.activeDropDown.apply(null,arguments)}}},[s("div",{staticClass:"country__code--config-details"},[s("span",{staticClass:"country__code--flag"},[s("img",{staticClass:"img-fluid",attrs:{src:e.defaultCountry.flag,alt:"Flag"}})]),e._v(" "),s("span",{staticClass:"country__code--number"},[e._v("\n                  "+e._s(e.defaultCountry.code)+"\n              ")]),e._v(" "),s("span",{staticClass:"country__dropdown"})]),e._v(" "),s("ul",{staticClass:"country__code--list",class:e.activeClass,on:{click:function(e){e.stopPropagation()}}},[s("input",{directives:[{name:"model",rawName:"v-model",value:e.search_key,expression:"search_key"}],staticClass:"country__search",attrs:{placeholder:"Search",type:"text"},domProps:{value:e.search_key},on:{keyup:e.countrySearch,input:function(t){t.target.composing||(e.search_key=t.target.value)}}}),e._v(" "),e._l(e.filtered_countries,(function(t,r){return s("li",{on:{click:function(s){return e.getCountryCode(t)}}},[s("span",{staticClass:"country__code--flag"},[s("img",{staticClass:"img-fluid",attrs:{loading:"lazy",src:t.flag_icon,alt:"Flag"}})]),e._v(" "),s("span",{staticClass:"country__name"},[s("strong",[e._v(e._s(t.name))])]),e._v(" "),s("span",{staticClass:"country__code--number"},[e._v("\n                        "+e._s(e.PlusCheck(t)?t.phonecode:"+"+t.phonecode)+"\n                      ")])])}))],2)]),e._v(" "),s("input",{directives:[{name:"model",rawName:"v-model",value:e.phone_no,expression:"phone_no"}],staticClass:"number",attrs:{type:"tel"},domProps:{value:e.phone_no},on:{keyup:function(t){return e.$emit("phone_no",e.phone_no)},input:function(t){t.target.composing||(e.phone_no=t.target.value)}}}),e._v(" "),s("input",{directives:[{name:"model",rawName:"v-model",value:e.country_id,expression:"country_id"}],attrs:{type:"hidden"},domProps:{value:e.country_id},on:{input:function(t){t.target.composing||(e.country_id=t.target.value)}}})])}),[],!1,null,"de65abc6",null).exports}}]);