(self.webpackChunkextract_css=self.webpackChunkextract_css||[]).push([[53057],{676172:function(i,r,n){"use strict";n.r(r);var c=n(552578),M=n.n(c);YUI.add("squarespace-blog-collection-list",function(a){var s=a.config.win,y=s.document,h=200,o=a.Squarespace.Template.getTweakValue,k=function(e){if(!!e){for(var t=parseInt(o("tweak-blog-list-columns"),10),w=parseInt(o("tweak-blog-list-spacing"),10),d=parseFloat(s.getComputedStyle(e).width);(d-w*(t-1))/t<h;)t--;e.setAttribute("data-columns",t)}},p=function(e){if(!!e){var t=e.querySelectorAll(".BlogList-item-image img");if(o("tweak-blog-list-item-image-show")==="true"){var w=o("tweak-blog-list-style").toLowerCase()==="stacked",d=o("tweak-blog-list-item-image-aspect-ratio-stacked").toLowerCase()==="auto";if(w&&d)for(var m=0;m<t.length;m++){var l=t[m];l.style.position=null,l.style.top=null,l.style.right=null,l.style.bottom=null,l.style.left=null,l.style.width=null,l.style.height=null,s.ImageLoader.load(l,{load:!0,mode:null})}else for(var v=0;v<t.length;v++)s.ImageLoader.load(t[v],{load:!0,mode:"fill"})}}},b=function(e){k(e),p(e)},T=100,_=!1,g,E=function(e){_||(_=!0),g&&clearTimeout(g),g=setTimeout(function(){!a||!a.config||!a.config.win||(b(e),_=!1)},T)},I=["tweak-blog-list-columns","tweak-blog-list-spacing"],C=["tweak-blog-list-style","tweak-blog-list-columns","tweak-blog-list-spacing","tweak-blog-list-item-image-aspect-ratio-grid","tweak-blog-list-item-image-aspect-ratio-stacked","tweak-blog-list-item-image-show","tweak-blog-list-item-image-width"],D=function(e){var t=e.getName();I.indexOf(t)>=0&&k(),C.indexOf(t)>=0&&p()};a.Global.on("tweak:change",D);var u,f;a.config.win.Squarespace.onInitialize(a,function(){u=y.querySelector(".BlogList"),u&&(b(u),f=E.bind(s,u),s.addEventListener("resize",f))}),a.config.win.Squarespace.onDestroy(a,function(){s.removeEventListener("resize",f)})},"1.0",{requires:[]})},4860:function(i,r,n){"use strict";var c=n(676172)},552578:function(i){i.exports={}}},function(i){var r=function(c){return i(i.s=c)},n=r(4860)}]);
//# sourceMappingURL=https://sourcemaps.squarespace.net/universal/scripts-compressed/blog-collection-list-0eda3624421e3163ee815-min.en-US.js.map
