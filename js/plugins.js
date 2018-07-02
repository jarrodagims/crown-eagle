!function(q){({showLogs:!1,round:1e3,init:function(){if(this._log("init"),this._inited)return this._log("Already Inited"),void(this._inited=!0);this._requestAnimationFrame=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(a,t){window.setTimeout(a,1e3/60)},this._onScroll(!0)},_inited:!1,_properties:["x","y","z","rotateX","rotateY","rotateZ","scaleX","scaleY","scaleZ","scale"],_requestAnimationFrame:null,_log:function(a){this.showLogs&&console.log("Parallax Scroll / "+a)},_onScroll:function(X){var Y=q(document).scrollTop(),Z=q(window).height();this._log("onScroll "+Y),q("[data-parallax]").each(q.proxy(function(a,t){var i=q(t),o=[],c=!1,e=i.data("style");null==e&&(e=i.attr("style")||"",i.data("style",e));var l,n=[i.data("parallax")];for(l=2;i.data("parallax"+l);l++)n.push(i.data("parallax-"+l));var s=n.length;for(l=0;l<s;l++){var u=n[l],d=u["from-scroll"];null==d&&(d=Math.max(0,q(t).offset().top-Z)),d|=0;var r=u.distance,m=u["to-scroll"];null==r&&null==m&&(r=Z),r=Math.max(0|r,1);var h=u.easing,p=u["easing-return"];if(null!=h&&q.easing&&q.easing[h]||(h=null),null!=p&&q.easing&&q.easing[p]||(p=h),h){var v=u.duration;null==v&&(v=r),v=Math.max(0|v,1);var w=u["duration-return"];null==w&&(w=v),r=1;var g=i.data("current-time");null==g&&(g=0)}null==m&&(m=d+r),m|=0;var x=u.smoothness;null==x&&(x=30),x|=0,(X||0==x)&&(x=1),x|=0;var f=Y;f=Math.max(f,d),f=Math.min(f,m),h&&(null==i.data("sens")&&i.data("sens","back"),d<f&&("back"==i.data("sens")?(g=1,i.data("sens","go")):g++),f<m&&("go"==i.data("sens")?(g=1,i.data("sens","back")):g++),X&&(g=v),i.data("current-time",g)),this._properties.map(q.proxy(function(a){var t=0,e=u[a];if(null!=e){"scale"==a||"scaleX"==a||"scaleY"==a||"scaleZ"==a?t=1:e|=0;var l=i.data("_"+a);null==l&&(l=t);var n=(f-d)/(m-d)*(e-t)+t,s=l+(n-l)/x;if(h&&0<g&&g<=v){var r=t;"back"==i.data("sens")&&(e=-(r=e),h=p,v=w),s=q.easing[h](null,g,r,e,v)}(s=Math.ceil(s*this.round)/this.round)==l&&n==e&&(s=e),o[a]||(o[a]=0),o[a]+=s,l!=o[a]&&(i.data("_"+a,o[a]),c=!0)}},this))}if(c){if(null!=o.z){var _=u.perspective;null==_&&(_=800);var y=i.parent();y.data("style")||y.data("style",y.attr("style")||""),y.attr("style","perspective:"+_+"px; -webkit-perspective:"+_+"px; "+y.data("style"))}null==o.scaleX&&(o.scaleX=1),null==o.scaleY&&(o.scaleY=1),null==o.scaleZ&&(o.scaleZ=1),null!=o.scale&&(o.scaleX*=o.scale,o.scaleY*=o.scale,o.scaleZ*=o.scale);var A="translate3d("+(o.x?o.x:0)+"px, "+(o.y?o.y:0)+"px, "+(o.z?o.z:0)+"px)"+" "+("rotateX("+(o.rotateX?o.rotateX:0)+"deg) rotateY("+(o.rotateY?o.rotateY:0)+"deg) rotateZ("+(o.rotateZ?o.rotateZ:0)+"deg)")+" "+("scaleX("+o.scaleX+") scaleY("+o.scaleY+") scaleZ("+o.scaleZ+")")+";";this._log(A),i.attr("style","transform:"+A+" -webkit-transform:"+A+" "+e)}},this)),window.requestAnimationFrame?window.requestAnimationFrame(q.proxy(this._onScroll,this,!1)):this._requestAnimationFrame(q.proxy(this._onScroll,this,!1))}}).init()}(jQuery);

!function(){"use strict";var e=0,r={};function i(t){if(!t)throw new Error("No options passed to Waypoint constructor");if(!t.element)throw new Error("No element option passed to Waypoint constructor");if(!t.handler)throw new Error("No handler option passed to Waypoint constructor");this.key="waypoint-"+e,this.options=i.Adapter.extend({},i.defaults,t),this.element=this.options.element,this.adapter=new i.Adapter(this.element),this.callback=t.handler,this.axis=this.options.horizontal?"horizontal":"vertical",this.enabled=this.options.enabled,this.triggerPoint=null,this.group=i.Group.findOrCreate({name:this.options.group,axis:this.axis}),this.context=i.Context.findOrCreateByElement(this.options.context),i.offsetAliases[this.options.offset]&&(this.options.offset=i.offsetAliases[this.options.offset]),this.group.add(this),this.context.add(this),r[this.key]=this,e+=1}i.prototype.queueTrigger=function(t){this.group.queueTrigger(this,t)},i.prototype.trigger=function(t){this.enabled&&this.callback&&this.callback.apply(this,t)},i.prototype.destroy=function(){this.context.remove(this),this.group.remove(this),delete r[this.key]},i.prototype.disable=function(){return this.enabled=!1,this},i.prototype.enable=function(){return this.context.refresh(),this.enabled=!0,this},i.prototype.next=function(){return this.group.next(this)},i.prototype.previous=function(){return this.group.previous(this)},i.invokeAll=function(t){var e=[];for(var i in r)e.push(r[i]);for(var o=0,n=e.length;o<n;o++)e[o][t]()},i.destroyAll=function(){i.invokeAll("destroy")},i.disableAll=function(){i.invokeAll("disable")},i.enableAll=function(){i.invokeAll("enable")},i.refreshAll=function(){i.Context.refreshAll()},i.viewportHeight=function(){return window.innerHeight||document.documentElement.clientHeight},i.viewportWidth=function(){return document.documentElement.clientWidth},i.adapters=[],i.defaults={context:window,continuous:!0,enabled:!0,group:"default",horizontal:!1,offset:0},i.offsetAliases={"bottom-in-view":function(){return this.context.innerHeight()-this.adapter.outerHeight()},"right-in-view":function(){return this.context.innerWidth()-this.adapter.outerWidth()}},window.Waypoint=i}(),function(){"use strict";function e(t){window.setTimeout(t,1e3/60)}var i=0,o={},y=window.Waypoint,t=window.onload;function n(t){this.element=t,this.Adapter=y.Adapter,this.adapter=new this.Adapter(t),this.key="waypoint-context-"+i,this.didScroll=!1,this.didResize=!1,this.oldScroll={x:this.adapter.scrollLeft(),y:this.adapter.scrollTop()},this.waypoints={vertical:{},horizontal:{}},t.waypointContextKey=this.key,o[t.waypointContextKey]=this,i+=1,this.createThrottledScrollHandler(),this.createThrottledResizeHandler()}n.prototype.add=function(t){var e=t.options.horizontal?"horizontal":"vertical";this.waypoints[e][t.key]=t,this.refresh()},n.prototype.checkEmpty=function(){var t=this.Adapter.isEmptyObject(this.waypoints.horizontal),e=this.Adapter.isEmptyObject(this.waypoints.vertical);t&&e&&(this.adapter.off(".waypoints"),delete o[this.key])},n.prototype.createThrottledResizeHandler=function(){var t=this;function e(){t.handleResize(),t.didResize=!1}this.adapter.on("resize.waypoints",function(){t.didResize||(t.didResize=!0,y.requestAnimationFrame(e))})},n.prototype.createThrottledScrollHandler=function(){var t=this;function e(){t.handleScroll(),t.didScroll=!1}this.adapter.on("scroll.waypoints",function(){t.didScroll&&!y.isTouch||(t.didScroll=!0,y.requestAnimationFrame(e))})},n.prototype.handleResize=function(){y.Context.refreshAll()},n.prototype.handleScroll=function(){var t={},e={horizontal:{newScroll:this.adapter.scrollLeft(),oldScroll:this.oldScroll.x,forward:"right",backward:"left"},vertical:{newScroll:this.adapter.scrollTop(),oldScroll:this.oldScroll.y,forward:"down",backward:"up"}};for(var i in e){var o=e[i],n=o.newScroll>o.oldScroll?o.forward:o.backward;for(var r in this.waypoints[i]){var s=this.waypoints[i][r],a=o.oldScroll<s.triggerPoint,l=o.newScroll>=s.triggerPoint;(a&&l||!a&&!l)&&(s.queueTrigger(n),t[s.group.id]=s.group)}}for(var h in t)t[h].flushTriggers();this.oldScroll={x:e.horizontal.newScroll,y:e.vertical.newScroll}},n.prototype.innerHeight=function(){return this.element==this.element.window?y.viewportHeight():this.adapter.innerHeight()},n.prototype.remove=function(t){delete this.waypoints[t.axis][t.key],this.checkEmpty()},n.prototype.innerWidth=function(){return this.element==this.element.window?y.viewportWidth():this.adapter.innerWidth()},n.prototype.destroy=function(){var t=[];for(var e in this.waypoints)for(var i in this.waypoints[e])t.push(this.waypoints[e][i]);for(var o=0,n=t.length;o<n;o++)t[o].destroy()},n.prototype.refresh=function(){var t,e=this.element==this.element.window,i=e?void 0:this.adapter.offset(),o={};for(var n in this.handleScroll(),t={horizontal:{contextOffset:e?0:i.left,contextScroll:e?0:this.oldScroll.x,contextDimension:this.innerWidth(),oldScroll:this.oldScroll.x,forward:"right",backward:"left",offsetProp:"left"},vertical:{contextOffset:e?0:i.top,contextScroll:e?0:this.oldScroll.y,contextDimension:this.innerHeight(),oldScroll:this.oldScroll.y,forward:"down",backward:"up",offsetProp:"top"}}){var r=t[n];for(var s in this.waypoints[n]){var a,l,h,p,c=this.waypoints[n][s],u=c.options.offset,d=c.triggerPoint,f=0,w=null==d;c.element!==c.element.window&&(f=c.adapter.offset()[r.offsetProp]),"function"==typeof u?u=u.apply(c):"string"==typeof u&&(u=parseFloat(u),-1<c.options.offset.indexOf("%")&&(u=Math.ceil(r.contextDimension*u/100))),a=r.contextScroll-r.contextOffset,c.triggerPoint=f+a-u,l=d<r.oldScroll,h=c.triggerPoint>=r.oldScroll,p=!l&&!h,!w&&(l&&h)?(c.queueTrigger(r.backward),o[c.group.id]=c.group):!w&&p?(c.queueTrigger(r.forward),o[c.group.id]=c.group):w&&r.oldScroll>=c.triggerPoint&&(c.queueTrigger(r.forward),o[c.group.id]=c.group)}}return y.requestAnimationFrame(function(){for(var t in o)o[t].flushTriggers()}),this},n.findOrCreateByElement=function(t){return n.findByElement(t)||new n(t)},n.refreshAll=function(){for(var t in o)o[t].refresh()},n.findByElement=function(t){return o[t.waypointContextKey]},window.onload=function(){t&&t(),n.refreshAll()},y.requestAnimationFrame=function(t){(window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||e).call(window,t)},y.Context=n}(),function(){"use strict";function s(t,e){return t.triggerPoint-e.triggerPoint}function a(t,e){return e.triggerPoint-t.triggerPoint}var e={vertical:{},horizontal:{}},i=window.Waypoint;function o(t){this.name=t.name,this.axis=t.axis,this.id=this.name+"-"+this.axis,this.waypoints=[],this.clearTriggerQueues(),e[this.axis][this.name]=this}o.prototype.add=function(t){this.waypoints.push(t)},o.prototype.clearTriggerQueues=function(){this.triggerQueues={up:[],down:[],left:[],right:[]}},o.prototype.flushTriggers=function(){for(var t in this.triggerQueues){var e=this.triggerQueues[t],i="up"===t||"left"===t;e.sort(i?a:s);for(var o=0,n=e.length;o<n;o+=1){var r=e[o];(r.options.continuous||o===e.length-1)&&r.trigger([t])}}this.clearTriggerQueues()},o.prototype.next=function(t){this.waypoints.sort(s);var e=i.Adapter.inArray(t,this.waypoints);return e===this.waypoints.length-1?null:this.waypoints[e+1]},o.prototype.previous=function(t){this.waypoints.sort(s);var e=i.Adapter.inArray(t,this.waypoints);return e?this.waypoints[e-1]:null},o.prototype.queueTrigger=function(t,e){this.triggerQueues[e].push(t)},o.prototype.remove=function(t){var e=i.Adapter.inArray(t,this.waypoints);-1<e&&this.waypoints.splice(e,1)},o.prototype.first=function(){return this.waypoints[0]},o.prototype.last=function(){return this.waypoints[this.waypoints.length-1]},o.findOrCreate=function(t){return e[t.axis][t.name]||new o(t)},i.Group=o}(),function(){"use strict";var i=window.jQuery,t=window.Waypoint;function o(t){this.$element=i(t)}i.each(["innerHeight","innerWidth","off","offset","on","outerHeight","outerWidth","scrollLeft","scrollTop"],function(t,e){o.prototype[e]=function(){var t=Array.prototype.slice.call(arguments);return this.$element[e].apply(this.$element,t)}}),i.each(["extend","inArray","isEmptyObject"],function(t,e){o[e]=i[e]}),t.adapters.push({name:"jquery",Adapter:o}),t.Adapter=o}(),function(){"use strict";var n=window.Waypoint;function t(o){return function(){var e=[],i=arguments[0];return o.isFunction(arguments[0])&&((i=o.extend({},arguments[1])).handler=arguments[0]),this.each(function(){var t=o.extend({},i,{element:this});"string"==typeof t.context&&(t.context=o(this).closest(t.context)[0]),e.push(new n(t))}),e}}window.jQuery&&(window.jQuery.fn.waypoint=t(window.jQuery)),window.Zepto&&(window.Zepto.fn.waypoint=t(window.Zepto))}();