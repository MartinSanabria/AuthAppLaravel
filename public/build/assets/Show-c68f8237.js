import{_ as c}from"./AppLayout-9a84f0f5.js";import p from"./DeleteUserForm-4db7ddef.js";import l from"./LogoutOtherBrowserSessionsForm-851c0464.js";import{S as s}from"./SectionBorder-6a353ae9.js";import f from"./TwoFactorAuthenticationForm-0c4eb917.js";import u from"./UpdatePasswordForm-2dd59c9f.js";import _ from"./UpdateProfileInformationForm-0e0475dc.js";import{o,c as d,w as n,a as i,e as r,b as t,f as a,F as h}from"./app-809ca331.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./DialogModal-6e9bdb05.js";import"./SectionTitle-850dd881.js";import"./DangerButton-7fe6d86e.js";import"./TextInput-221b2923.js";import"./SecondaryButton-cf5a430a.js";import"./ActionMessage-db89edab.js";import"./PrimaryButton-8c51d8e3.js";import"./InputLabel-e6a83e72.js";import"./FormSection-cc9282da.js";const g=i("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},w={key:0},k={key:1},y={key:2},z={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(m){return(e,x)=>(o(),d(c,{title:"Profile"},{header:n(()=>[g]),default:n(()=>[i("div",null,[i("div",$,[e.$page.props.jetstream.canUpdateProfileInformation?(o(),r("div",w,[t(_,{user:e.$page.props.auth.user},null,8,["user"]),t(s)])):a("",!0),e.$page.props.jetstream.canUpdatePassword?(o(),r("div",k,[t(u,{class:"mt-10 sm:mt-0"}),t(s)])):a("",!0),e.$page.props.jetstream.canManageTwoFactorAuthentication?(o(),r("div",y,[t(f,{"requires-confirmation":m.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(s)])):a("",!0),t(l,{sessions:m.sessions,class:"mt-10 sm:mt-0"},null,8,["sessions"]),e.$page.props.jetstream.hasAccountDeletionFeatures?(o(),r(h,{key:3},[t(s),t(p,{class:"mt-10 sm:mt-0"})],64)):a("",!0)])])]),_:1}))}};export{z as default};